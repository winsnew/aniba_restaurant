@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Navbar List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">
                            <a href="{{ url('/admin/home') }}">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Navbar</h4>
                </div>
                <div class="card-body">
                    <table id="table_navbar" class="table">
                        <thead>
                            <tr>
                                <th width="10%">No.</th>
                                <th>Name</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menu as $index => $item)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary edit" data-item="{{ $item }}"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title flex-fill">Menu</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDataMenu">
                        <i class="fas fa-plus"></i> Add Menu
                    </button>
                </div>
                <div class="card-body">
                    <table id="table-submenu" class="table">
                        <thead>
                            <tr>
                                <th width="10%">No.</th>
                                <th>Name</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody id="submenu-list">
                            @foreach($submenu as $index => $item)
                            <tr data-id="{{ $item->id }}">
                                <td><i class="fas fa-exchange-alt fa-rotate-90 mr-3"></i>{{ $index+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary edit-menu" data-item="{{ $item }}"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger delete-menu" data-id="{{ $item->id }}"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create -->
    <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="modalDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDataLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-data">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="form-group row">
                            <label class="col-form-label col-3">Name</label>
                            <div class="col">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="form-data" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create -->
    <div class="modal fade" id="modalDataMenu" tabindex="-1" role="dialog" aria-labelledby="modalDataMenuLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDataLabel">Create Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-data-menu">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="form-group row">
                            <label class="col-form-label col-3">Name</label>
                            <div class="col">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File</label>
                            <div class="col">
                                <input type="file" name="menu-file" id="menu-file" style="display: none">
                                <div class="d-flex align-items-center">
                                    <button type="button" class="btn-menu-file mr-2" style="border: 1px solid black; min-width: 7rem">Choose File</button>
                                    <label for="menu-file" style="font-weight: normal">No file chosen</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="form-data-menu" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>

    $('#table_navbar').DataTable();
    $('#table-submenu').DataTable({
        orderable:false
    });
    
    $('.edit').click(function(){
        let data = JSON.parse($(this).attr('data-item'))
        const form = $('#form-data')
        form.find('input[name="id"]').val(data.id)
        form.find('input[name="name"]').val(data.name)

        $('#modalData').modal('show')
    })

    $('.edit-menu').click(function(){
        $('#modalDataMenu .modal-title').text('Edit Menu')
        let data = JSON.parse($(this).attr('data-item'))
        const form = ($('#form-data-menu'))
        form.find('input[name="id"]').val(data.id)
        form.find('input[name="name"]').val(data.name)
        form.find('label[for="menu-file"]').text(data.file_name)

        $('#modalDataMenu').modal('show')
    })

    $('#menu-file').change(function (evt) {
        console.log(evt.target.files[0]);
        $('#form-data-menu label[for="menu-file"]').text(evt.target.files[0].name)
    })

    $('#modalDataMenu').on('hidden.bs.modal', function(){
        $(this).find('.modal-title').text('Create Navbar')
        let form = $('#form-data-menu')
        form.find('input[name="id"]').val(null)
        form.find('input[name="name"]').val(null)
    })

    $('#form-data-menu .btn-menu-file').click(function () {
        $('#form-data-menu input[name="menu-file"]').trigger('click')
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
                url: `{{ url('admin/navbar/submenu/changelist') }}`,
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
                }
            })

        }
    })

    $('.delete-menu').click(function(){
        let id = $(this).attr('data-id')
        Swal.fire({
            type: 'question',
            title: 'are you sure you want to delete this data?',
            showConfirmButton: true,
            showCancelButton: true
        }).then(res => {
            if (res.value) {
                $.ajax({
                    url: `{{ url('admin/navbar/submenu/${id}/delete') }}`,
                    method: 'POST',
                    dataType: 'JSON',
                    cache: false,
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (res) {
                        Swal.fire({
                            type: 'success',
                            title: res.message
                        }).then(function() {
                            window.location.reload()
                        })
                    }
                })
            }
        })
    })

    $('#form-data').submit(function(e){
        e.preventDefault()

        let id = $(this).find('input[name="id"]').val()
        let name = $(this).find('input[name="name"]').val()
        let token = $(this).find('input[name="_token"]').val()

        console.log(id);
        $.ajax({
            url: `{{ url('admin/navbar/${id}') }}`,
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: {
                "name": name,
                "_token": token
            },
            success: function(res) {
                Swal.fire({
                    type: 'success',
                    title: res.message
                }).then(function() {
                    window.location.reload()
                })
            }
        })
    })

    $('#form-data-menu').submit(function(e){
        e.preventDefault()

        let fd = new FormData()
        let id = $(this).find('input[name="id"]').val()
        let url = (id) ? `{{ url('admin/navbar/submenu/${id}') }}` : `{{ url('admin/navbar/submenu/create') }}`
        console.log(url);
        let name = $(this).find('input[name="name"]').val()
        let menu_file = $(this).find('input[name="menu-file"]')[0].files[0]
        let token = $(this).find('input[name="_token"').val()

        fd.append('_token', token)
        fd.append('name', name)
        if(menu_file){
            fd.append('menu_file', menu_file)
        }

        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            cache: false,
            data: fd,
            processData: false,
            contentType: false,
            success: function(res) {
                Swal.fire({
                    type: 'success',
                    title: res.message
                }).then(function() {
                    window.location.reload()
                })
            },
            error: function (res) {
                let errors = res.responseJSON.errors
                if (Object.keys(errors).length > 0) {
                    Swal.fire({
                        type: 'error',
                        title: Object.values(errors)[0][0]
                    })
                }
            }
        })
    })
</script>
@endpush