@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Metadata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- Reservation #1 -->
            <div class="card">
                <div class="card-header">
                   <h4 class="card-title flex-fill">Metadata</h4>
                </div>
                <div class="card-body">
                    <form id="form_metadata">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Title</label>
                                    <div class="col">
                                        <input type="text" name="title" class="form-control" placeholder="Title" readonly value="{{ $meta ? $meta->title : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Keywords</label>
                                    <div class="col">
                                        <input type="text" name="keywords" class="form-control" placeholder="Keyword 1, Keyword 2, ..." readonly value="{{ $meta ? $meta->keywords : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Description</label>
                                    <div class="col">
                                        <textarea name="description" cols="30" rows="7" class="form-control" placeholder="Discription" readonly>{{ $meta ? $meta->description : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="d-block mb-3" disabled>
                                    @if($meta)
                                    <img src="{{ $meta->image ? asset('storage/'.$meta->image) : 'https://www.placehold.co/400x209' }}" alt="" style="width: 400px; height: 209px;">
                                    @else
                                    <img src="https://www.placehold.co/400x209" alt="" style="width: 400px; height: 209px;">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary edit"><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger mr-2 cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                            <button type="submit" form="form_metadata" class="btn btn-primary submit" style="display: none;"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    
    // Enable Edit
    $('#form_metadata .edit').click(function(){
        let form = $('#form_metadata')
        form.find('input[name="title"]').attr('readonly', false)
        form.find('input[name="keywords"]').attr('readonly', false)
        form.find('textarea[name="description"]').attr('readonly', false)
        form.find('input[name="image"]').attr('disabled', false)

        form.find('button.cancel').css('display', 'block')
        form.find('button.submit').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit
    $('#form_metadata .cancel').click(function(){
        let form = $('#form_metadata')
        form.find('input[name="title"]').attr('readonly', true)
        form.find('input[name="keywords"]').attr('readonly', true)
        form.find('textarea[name="description"]').attr('readonly', true)
        form.find('input[name="image"]').attr('disabled', true)

        form.find('button.edit').css('display', 'block')
        form.find('button.submit').css('display', 'none')
        $(this).css('display', 'none')
    })

    // Preview Image
    $('#form_metadata input[name="image"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_metadata img').attr('src', src)
    })

    // Submit
    $('#form_metadata').submit(function(e){
        e.preventDefault()

        const fd = new FormData();

        var title = $(this).find('input[name="title"]').val()
        var keywords = $(this).find('input[name="keywords"]').val()
        var description = $(this).find('textarea[name="description"]').val()
        var image = $(this).find('input[name="image"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()
        
        fd.append('title', title)
        fd.append('keywords', keywords)
        fd.append('description', description)
        fd.append('image', image)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/metadata') }}",
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
            }
        })
    })
</script>
@endpush