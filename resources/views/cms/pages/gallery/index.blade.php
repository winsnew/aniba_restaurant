@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                
                <div class="col-sm-6">
                    <h1 class="m-0">Gallery =>  {{$category->name}}</h1>
                </div>
                
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Gallery</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><i
                                class="fas fa-plus"></i> Add New</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="gallery_table" class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galleries as $gallery)
                            <tr>
                                <td width="40%">{{$gallery->title}}</td>
                                <td width="40%">{{$gallery->image}}</td>
                                <td>
                                    <button class="btn btn-warning edingt-gallery" data-gallery="{{$gallery}}"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger delete" data-id=""><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5>Layouts</h5>
                    <nav>
                        <div class="nav nav-tabs" role="tablist">
                            <button class="nav-link active" data-toggle="tab" data-target="#bg-image" type="button"
                                role="tab" aria-controls="bg-image" aria-selected="true">Image</button>
                            <button class="nav-link" data-toggle="tab" data-target="#bg-color" type="button" role="tab"
                                aria-controls="bg-color" aria-selected="false">Color</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade my-3 show active" id="bg-image" role="tabpanel"
                            aria-labelledby="bg-image-tab">
                            <div class="row">
                                <form id="form_img_desktop" class="col-7">

                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade my-3" id="bg-color" role="tabpanel" aria-labelledby="bg-color-tab">
                            <form id="form_background_color">

                            </form>
                        </div>
                    </div>
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
                    <h5 class="modal-title" id="modalCreateLabel">Add Photo</h5>
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
                                    <input type="text" class="form-control" name="title" id="" placeholder="Title">
                                    {{-- <textarea name="title" id="title_create" cols="30" rows="10"
                                        class="form-control"></textarea> --}}
                                </div>
                                
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Thumbnail</label>
                                    <p>size (524 x 256)</p>
                                    <input type="file" name="" id="">
                                    <img class="card-img mt-3" src="https://via.placeholder.com/570x248" alt="">
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
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Gallery</h5>
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
                                    <input type="text" class="form-control" name="title" id="" placeholder="Title">
                                    {{-- <textarea name="title" id="title_create" cols="30" rows="10"
                                        class="form-control"></textarea> --}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Thumbnail</label>
                                    <p>size (524 x 256)</p>
                                    <input type="file" name="" id="">
                                    <img class="card-img mt-3" src="https://via.placeholder.com/570x248" alt="">
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
    $('#gallery_table').DataTable()
    // Show Modal Edit
    $('.edit-gallery').click(function () {
        var btn = JSON.parse($(this).attr('data-gallery'))
        $('#form-edit input[name="id"]').val(btn.id)
        $('#form-edit input[name="title"]').val(btn.title)
        $('#form-edit img').attr('src', `{{ asset('storage/${btn.image}?v='.time()) }}`)
        $('#modalEdit').modal('show')
    })

    // handle Modal Create on close
    $('#modalCreate').on('hidden.bs.modal', function () {

        $(this).find('input[type="file"]').val('')
        $(this).find('input[name="title"]').val('')
        $(this).find('img').attr('src', 'https://via.placeholder.com/570x248')
    })

    $('#form-create').submit(function (e) {
        e.preventDefault()
        var fd = new FormData()
        var image = $(this).find('input[type="file"]')[0].files[0]
        var title = $(this).find('input[name="title"]').val()
        // var title = CKEDITOR.instances.title_create.getData()
        // var publisher = CKEDITOR.instances.publisher_create.getData()
        var categoryId = {{ $category->id }};
        var token = $(this).find('input[name="_token"]').val()

        fd.append('category_id', categoryId)
        fd.append('title', title)
        fd.append('image', image)
        fd.append('_token', token)

        $.ajax({
            url: "{{ route('category.galleries.store', ['category' => $category->id]) }}",
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
        var title = $(this).find('input[name="title"]').val()
        var category = $(this).find('input[name="category"').val()
        var image = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()
        var categoryId = {{ $category->id }};
        fd.append('title', title)
        fd.append('category', category)
        if (image) {
            fd.append('image', image)
        }
        fd.append('_token', token)
        console.log(fd);

        $.ajax({
            url: `{{ url('admin/gallery/update/${id}') }}`,
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

    $('button.delete').click(function (e) {
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
        }).then(function (e) {
            if (e.value === true) {
                $.ajax({
                    url: `{{ url('admin/gallery/delete/${id}') }}`,
                    type: "POST",
                    data: {
                        '_token': token
                    },
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
            }
        })
    })

    // Create Image Preview
    $('#form-create input[type="file"]').change(function (e) {
        var src = URL.createObjectURL(e.target.files[0])
        $('#form-create img').attr('src', src)
    })
</script>
@endpush