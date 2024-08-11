@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">user</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">user</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary create" data-toggle="modal" data-target="#modalData"><i class="fas fa-plus"></i> Add New</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="user_table" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data as $value) {
                            ?>

                                <tr>
                                    <td width="40%">{{ $value->name }}</td>
                                    <td width="40%">{{ $value->email }}</td>
                                    <td>
                                        <button class="btn btn-primary edit" data-user="{{ $value }}"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger delete" data-id={{$value->id}} data-name={{$value->name}}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create -->
    <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="modalDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDataLabel">Create User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-data">
                        @csrf
                        <input type="text" class="form-control" name="id" id="id" hidden>
                        <div class="form-group">
                            <label class="form-label" for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                        </div>
                        <div class="form-group password-status">
                            <label class="form-label" for="">Change Password ?</label>
                            <select class="form-control form-select" id="change_password" name="change_password" aria-label="Default select example">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                              </select>
                        </div>
                        <div class="form-group input-password">
                            <label class="form-label" for="">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                        </div>
                        <div class="form-group input-password">
                            <label class="form-label" for="">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="password" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="form-data" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
@push('js')
<script>
    $('#user_table').DataTable()
    $('.create').click(function(){
        $('#form-data input[name="id"]').val('')
        $('#form-data input[name="name"]').val('')
        $('#form-data input[name="email"]').val('')
        $('#form-data input[name="password"]').val('')
        $('#form-data .password-status').css('display','none')
        $('#form-data .input-password').css('display','block')

    });
    $('.edit').click(function(){
        var btn = JSON.parse($(this).attr('data-user'))
        $('#modalData .modal-title').text('Edit User')
        $('#form-data input[name="id"]').val(btn.id)
        $('#form-data input[name="name"]').val(btn.name)
        $('#form-data input[name="email"]').val(btn.email)
        $('#form-data input[name="password"]').prop('required' ,false)
        $('#form-data input[name="confirm_password"]').prop('required' ,false)
        $('#form-data .input-password').css('display','none')
        $('#form-data .password-status').css('display','block')
        $('#modalData').modal('show')
    })
    $('#change_password').change(function(){
        if($(this).val() == 1){
            $('#form-data input[name="password"]').val('')
            $('#form-data input[name="password"]').prop('required' ,false)
            $('#form-data input[name="confirm_password"]').prop('required' ,false)
            $('#form-data .input-password').css('display','block')
        }else{
            $('#form-data .input-password').css('display','none')
        }
    })
    $('#modalData').on('hidden.bs.modal', function(){
        $(this).find('input[name="id"]').val('')
        $(this).find('input[name="name"]').val('')
        $(this).find('input[name="email"]').val('')
        $(this).find('input[name="password"]').val('')
        $(this).find('input[name="confirm_password"]').val('')
        $(this).find('#change_password').val('0')
        $(this).find('.password-status').css('display','none')

    });

    // Submit User
    $('#form-data').submit(function(e) {
        e.preventDefault()
        var data = {
            "id": $(this).find('input[id="id"]').val(),
            "name": $(this).find('input[name="name"]').val(),
            "email": $(this).find('input[name="email"]').val(),
            "confirm_password": $(this).find('input[name="confirm_password"]').val(),
            "password": $(this).find('input[name="password"]').val(),
            "change_password": $(this).find('#change_password').val(),
            "_token": $(this).find('input[name="_token"]').val(),
        }

        $.ajax({
            url: "{{ url('admin/user') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: data,
            success: function(res) {
                Swal.fire({
                    type: 'success',
                    title: res.message
                }).then(function() {
                    window.location.reload()
                })
            },
            error: function(response){
                var test = '';
                if(response.responseJSON.errors.email){
                    test = response.responseJSON.errors.email
                }else if(response.responseJSON.errors.email){
                    test = response.responseJSON.errors.name
                }else if(response.responseJSON.errors.password){
                    test = response.responseJSON.errors.password
                }else{
                    test = response.responseJSON.errors
                }
                Swal.fire({
                    type: 'error',
                    title: 'Failed',
                    text: test
                })
            }
        })
    })
    
    $('.delete').click(function(e){
        e.preventDefault()
        let id = $(this).data('id');
        let name = $(this).data('name');
        Swal.fire({
            title: 'Are you sure?',
            html: "You want to delete " + "<b>" + name + " !</b>",
            icon: 'info',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function(e) {
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'GET',
                    url: "{{url('admin/user/delete')}}/" +id,
                    data: {
                        _token: CSRF_TOKEN
                    },
                    success: function(results) {
                        Swal.fire("Done!", results.message, "success");
                        window.location.reload()
                    }
                });
            } else {
                e.dismiss;
            }
        }, function(dismiss) {
            return false;
        })
    })
</script>
@endpush