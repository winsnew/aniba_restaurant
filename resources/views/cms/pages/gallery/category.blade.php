@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Custom</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><i class="fas fa-plus"></i> Add New</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="category_table" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category_Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="submenu-list" >
                            @foreach ($categories as $index => $value)
                            <tr data-id="{{ $value->id }}" >
                                <td><i class="fas fa-exchange-alt fa-rotate-90 mr-3"></i>{{ $index+1 }}</td>
                                <td width="40%"><a href="{{ route('category.galleries', ['category' => $value->id]) }}">{{$value->name}}</a></td>
                                <td>
                                    <button class="btn btn-warning edit-category" data-category="{{$value}}"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger delete" data-id="{{ $value->id }}"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--modal create -->
    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCreateLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-create">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="">Title</label>
                                    <input type="text" class="form-control" name="name" id="" placeholder="Title">
                                    {{-- <textarea name="title" id="title_create" cols="30" rows="10"
                                        class="form-control"></textarea> --}}
                                </div>
                                
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="form-create" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-edit">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="">Title</label>
                                    <input type="text" class="form-control" name="name" id="" placeholder="Title">
                                    {{-- <textarea name="title" id="title_create" cols="30" rows="10" class="form-control"></textarea> --}}
                                </div>
                                
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="form-edit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@push('js')
<script>
    $('#category_table').DataTable()
    
    // Show Modal Edit
    $('.edit-category').click(function () {
        var btn = JSON.parse($(this).attr('data-category'))
        $('#form-edit input[name="id"]').val(btn.id)
        $('#form-edit input[name="name"]').val(btn.name)
        $('#modalEdit').modal('show')
    })
    //  handle Modal Create on close
     $('#modalCreate').on('hidden.bs.modal', function () {

    
    $(this).find('input[name="title"]').val('')
    
    })

    $('#submenu-list').sortable({
        helper: function (e, ui) {
            var original = ui.children()
            var helper = ui.clone()
            helper.children().each(function (index) {
                var originWidth = original.eq(index).width()
                $(this).width(originWidth)
                console.log({
                    helper: $(this).width(originWidth),
                    origin: originWidth
                });
            })
            return helper
        },
        update: function (e, ui) {
            let order = []
            $('#submenu-list tr').each(function (i, el) {
                order.push({
                    id: el.getAttribute('data-id'),
                    position: i + 1
                })
            })
            $.ajax({
                url: `{{ url('admin/category/updateposition') }}`,
                method: 'POST',
                dataType: 'JSON',
                cache: false,
                data: {
                    'order': order,
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    Swal.fire({
                        type: 'success',
                        title: res.message
                    }).then(function() {
                        window.location.reload()
                    })
                },
                error: (err) => {
                    console.log(err);
                    console.log(err.responseJSON);
                }
            })

        }
    })

    $('#form-create').submit(function (e) {
        e.preventDefault()
        var fd = new FormData()
        
        var name = $(this).find('input[name="name"]').val()
        
        // var title = CKEDITOR.instances.title_create.getData()
        // var publisher = CKEDITOR.instances.publisher_create.getData()

        var token = $(this).find('input[name="_token"]').val()

        fd.append('name', name)
        
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/category') }}",
            type: "POST",
            dataType: "JSON",
            cache: false,
            data: fd,
            processData: false,
            contentType: false,
            success: function (res) {
                Swal.fire({
                    type: 'success',
                    title: res.message
                }).then(function () {
                    window.location.reload()
                })
            },
            error: function (jqXHR, errorThrown) {
                console.log(jqXHR);
                Swal.fire({
                    type: 'error',
                    title: errorThrown,
                    text: jqXHR.responseJSON.message
                })
            }
        })
    })
    // submit-edit modal process
    $('#form-edit').submit(function (e) {
        e.preventDefault()
        var fd = new FormData()
        var id = $(this).find('input[name="id"]').val()
        var name = $(this).find('input[name="name"]').val()
        var token = $(this).find('input[name="_token"]').val()

        fd.append('name', name)
        fd.append('_token', token)
        console.log(fd);

        $.ajax({
            url: `{{ url('admin/category/update/${id}') }}`,
            type: "POST",
            dataType: "JSON",
            cache: false,
            data: fd,
            processData: false,
            contentType: false,
            success: function (res) {
                Swal.fire({
                    type: 'success',
                    title: res.message
                }).then(function () {
                    window.location.reload()
                })
            },
            error: function (jqXHR, errorThrown) {
                console.log(jqXHR);
                Swal.fire({
                    type: 'error',
                    title: errorThrown,
                    text: jqXHR.responseJSON.message
                })
            }
        })
    })
    //delete process
    $('button.delete').click(function(e){
        var id = $(this).attr('data-id')
        var token = "{{ csrf_token() }}"

        Swal.fire({
            title: 'Are you sure?',
            html: 'You want to delete this data',
            icon: 'info',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then(function(e){
            if(e.value === true){
                $.ajax({
                    url: `{{ url('admin/category/delete/${id}') }}`,
                    type: "POST",
                    data: {
                        '_token': token
                    },
                    success: function(res) {
                        Swal.fire({
                            type: 'success',
                            title: res.message
                        }).then(function() {
                            window.location.reload()
                        })
                    },
                    error: function(jqXHR, errorThrown){
                        console.log(jqXHR);
                        Swal.fire({
                            type: 'error',
                            title: errorThrown,
                            text: jqXHR.responseJSON.message
                        })
                    }
                })
            }
        })
    })
</script>
@endpush