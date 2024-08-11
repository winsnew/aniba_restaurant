@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Press</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Press</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><i class="fas fa-plus"></i> Add New</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="press_table" class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Publisher</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data as $value) {
                            ?>

                                <tr>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->publisher }}</td>
                                    <td>
                                        <button class="btn btn-warning edit-press" data-press="{{ $value }}"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger delete" data-id="{{ $value->id }}"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Background</h5>
                    <nav>
                        <div class="nav nav-tabs" role="tablist">
                            <button class="nav-link active" data-toggle="tab" data-target="#bg-image" type="button" role="tab" aria-controls="bg-image" aria-selected="true">Image</button>
                            <button class="nav-link" data-toggle="tab" data-target="#bg-color" type="button" role="tab" aria-controls="bg-color" aria-selected="false">Color</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade my-3 show active" id="bg-image" role="tabpanel" aria-labelledby="bg-image-tab">
                            <div class="row">
                                <form id="form_img_desktop" class="col-7">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label d-block">Desktop Background</label>
                                                <span>size (1512 x 982)</span>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                                <button type="submit" form="form_img_desktop" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                            </div>
                                        </div>
                                        <input type="file" class="mt-3" name="" id="" disabled>
                                        @if($desktop)
                                            @if($desktop->type == 1)
                                                <img class="card-img mt-3" src="{{ asset('storage/'.$desktop->url.'?v='.time()) }}" alt="Background Desktop">
                                            @else
                                                <img class="card-img mt-3" src="https://placehold.co/1512x982" alt="Background Desktop">
                                            @endif
                                        @else
                                            <img class="card-img mt-3" src="https://placehold.co/1512x982" alt="Background Desktop">
                                        @endif
                                    </div>
                                </form>
                                <form id="form_img_mobile" class="col-5">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label d-block">Mobile Background</label>
                                                <span>size (390 x 842)</span>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                                <button type="submit" form="form_img_mobile" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                            </div>
                                        </div>
                                        <input type="file" class="mt-3" name="" id="" disabled>
                                        {{-- <img class="card-img mt-3" src="{{ $mobile? asset('storage/'.$mobile->url.'?v='.time()): asset('images/bg-mobile-header.png?v='.time()) }}" alt="Mobile Desktop"> --}}
                                        @if($mobile)
                                            @if($mobile->type == 1)
                                                <img class="card-img mt-3" src="{{ asset('storage/'.$mobile->url.'?v='.time()) }}" alt="Background Desktop">
                                            @else
                                                <img class="card-img mt-3" src="https://placehold.co/390x842" alt="Background Desktop">
                                            @endif
                                        @else
                                            <img class="card-img mt-3" src="https://placehold.co/390x842" alt="Background Desktop">
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade my-3" id="bg-color" role="tabpanel" aria-labelledby="bg-color-tab">
                            <form id="form_background_color">
                                @csrf
                                <div class="row mb-4">
                                    <label class="col-form-label col-2">Background Color</label>
                                    <div class="col-5">
                                        <div class="input-group">
                                            @if($desktop)
                                                @if($desktop->type == 2)
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="{{ $desktop->url }}" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="{{ $desktop->url }}" disabled>
                                                </div>
                                                @else
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#E9E0D9" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" disabled>
                                                </div>
                                                @endif
                                            @else
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#E9E0D9" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="#E9E0D9" disabled>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col d-flex">
                                        <button type="button" class="btn btn-primary edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="button" class="btn btn-danger mr-2 cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                        <button type="submit" form="form_background_color" class="btn btn-primary" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        @if($desktop)
                                            @if($desktop->type == 2)
                                            <div class="preview_desktop" style="background-color: {{ $desktop->url }}; width: 100%; height: 23vw;"></div>
                                            @else
                                            <div class="preview_desktop" style="background-color: #E9E0D9; width: 100%; height: 23vw;"></div>
                                            @endif
                                        @else
                                        <div class="preview_desktop" style="background-color: #E9E0D9; width: 100%; height: 23vw;"></div>
                                        @endif
                                    </div>
                                    <div class="col-5">
                                        @if($mobile)
                                            @if($mobile->type == 2)
                                            <div class="preview_mobile" style="background-color: {{ $mobile->url }}; width: 100%; height: 50vw;"></div>
                                            @else
                                            <div class="preview_mobile" style="background-color: #E9E0D9; width: 100%; height: 50vw;"></div>
                                            @endif
                                        @else
                                        <div class="preview_mobile" style="background-color: #E9E0D9; width: 100%; height: 50vw;"></div>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create -->
    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCreateLabel">Create Press</h5>
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
                                    {{-- <textarea name="title" id="title_create" cols="30" rows="10" class="form-control"></textarea> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Publisher</label>
                                    <input type="text" class="form-control" name="publisher" id="" placeholder="Publisher">
                                    {{-- <textarea name="publisher" id="publisher_create" cols="30" rows="10" class="form-control"></textarea> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Font Color</label>
                                    <div class="input-group">
                                        <input type="text" name="font_hex" id="" class="form-control" placeholder="Content Color" value="#000000">
                                        <div class="input-group-append">
                                            <input type="color" name="font_color" class="form-control" id="" style="padding: 3px; width: 50px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Content Color</label>
                                    <div class="input-group">
                                        <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#000000">
                                        <div class="input-group-append">
                                            <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">URL</label>
                                    <input type="text" class="form-control" name="url" id="" placeholder="URL">
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
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Press</h5>
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
                                    {{-- <textarea name="title" id="title_create" cols="30" rows="10" class="form-control"></textarea> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Publisher</label>
                                    <input type="text" class="form-control" name="publisher" id="" placeholder="Publisher">
                                    {{-- <textarea name="publisher" id="publisher_create" cols="30" rows="10" class="form-control"></textarea> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Font Color</label>
                                    <div class="input-group">
                                        <input type="text" name="font_hex" id="" class="form-control" placeholder="Content Color" value="#000000">
                                        <div class="input-group-append">
                                            <input type="color" name="font_color" class="form-control" id="" style="padding: 3px; width: 50px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Content Color</label>
                                    <div class="input-group">
                                        <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#000000">
                                        <div class="input-group-append">
                                            <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">URL</label>
                                    <input type="text" class="form-control" name="url" id="" placeholder="URL">
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

    $('#press_table').DataTable()

    // Show Modal Edit
    $('.edit-press').click(function(){
        var btn = JSON.parse($(this).attr('data-press'))
        $('#form-edit input[name="id"]').val(btn.id)
        $('#form-edit input[name="title"]').val(btn.title)
        $('#form-edit input[name="publisher"]').val(btn.publisher)
        $('#form-edit input[name="url"]').val(btn.url)
        $('#form-edit input[name="color"]').val(btn.color)
        $('#form-edit input[name="font_color"]').val(btn.font_color)
        $('#form-edit input[name="hex"]').val(btn.color)
        $('#form-edit input[name="font_hex"]').val(btn.font_color)
        $('#form-edit img').attr('src', `{{ asset('storage/${btn.image}?v='.time()) }}`)
        $('#modalEdit').modal('show')
    })

    // handle Modal Create on close
    $('#modalCreate').on('hidden.bs.modal', function(){

        $(this).find('input[type="file"]').val('')
        $(this).find('input[name="title"]').val('')
        $(this).find('input[name="publisher"]').val('')
        $(this).find('input[name="url"]').val('')
        $(this).find('input[name="color"]').val('#000000')
        $(this).find('input[name="font_color"]').val('#000000')
        $(this).find('input[name="hex"]').val('#000000')
        $(this).find('input[name="font_hex"]').val('#000000')
        $(this).find('img').attr('src', 'https://via.placeholder.com/570x248')
    })

    // Create Color Input Change
    $('#form-create input[name="color"]').on('input',function(e){
        $('#form-create input[name="hex"]').val(e.target.value)
    })
    $('#form-create input[name="hex"]').on('input',function(e){
        $('#form-create input[name="color"]').val(e.target.value)
    })

    // Edit Color Input Change
    $('#form-edit input[name="color"]').on('input',function(e){
        $('#form-edit input[name="hex"]').val(e.target.value)
    })
    $('#form-edit input[name="hex"]').on('input',function(e){
        $('#form-edit input[name="color"]').val(e.target.value)
    })

    // Create Font Color Input Change
    $('#form-create input[name="font_color"]').on('input',function(e){
        $('#form-create input[name="font_hex"]').val(e.target.value)
    })
    $('#form-create input[name="font_hex"]').on('input',function(e){
        // console.log($('#form-create input[name="font_color"]').focusin())
        $('#form-create input[name="font_color"]').val(e.target.value)
    })

    // Edit Font Input Change
    $('#form-edit input[name="font_color"]').on('input',function(e){
        $('#form-edit input[name="font_hex"]').val(e.target.value)
    })
    $('#form-edit input[name="font_hex"]').on('input',function(e){
        $('#form-edit input[name="font_color"]').val(e.target.value)
    })

    // Create Image Preview
    $('#form-create input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form-create img').attr('src', src)
    })

    $('#form-edit input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form-edit img').attr('src', src)
    })

    // Enable Edit Background Desktop
    $('#form_img_desktop button.edit').click(function(){
        $('#form_img_desktop input[type="file"]').attr('disabled', false)
        $('#form_img_desktop button.cancel').css('display', 'block')
        $('#form_img_desktop button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Background mobile
    $('#form_img_mobile button.edit').click(function(){
        $('#form_img_mobile input[type="file"]').attr('disabled', false)
        $('#form_img_mobile button.cancel').css('display', 'block')
        $('#form_img_mobile button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Background Color
    $('#form_background_color button.edit').click(function(){
        $('#form_background_color input[type="color"]').attr('disabled', false)
        $('#form_background_color input[name="hex"]').attr('readonly', false)
        $('#form_background_color button.cancel').css('display', 'block')
        $('#form_background_color button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })


    // Cancel Edit Img Desktop
    $('#form_img_desktop button.cancel').click(function(){
        $('#form_img_desktop input[type="file"]').attr('disabled', true)
        $('#form_img_desktop button.edit').css('display', 'block')
        $('#form_img_desktop button[type="submit"]').css('display', 'none')
        $('#form_img_desktop input[type="file"]').val('')
        @if($desktop)
            @if($desktop->type == 1)
            $('#form_img_desktop img').attr('src', "{{ asset('storage/'.$desktop->url.'?v='.time()) }}")
            @else
            $('#form_img_desktop img').attr('src', "https://placehold.co/1512x982")
            @endif
        @else
        $('#form_img_desktop img').attr('src', "{{ asset('images/bg-sec3.png?v='.time()) }}")
        @endif
        $(this).css('display', 'none')
    })

    // Cancel Edit Img Mobile
    $('#form_img_mobile button.cancel').click(function(){
        $('#form_img_mobile input[type="file"]').attr('disabled', true)
        $('#form_img_mobile button.edit').css('display', 'block')
        $('#form_img_mobile button[type="submit"]').css('display', 'none')
        $('#form_img_mobile input[type="file"]').val('')
        @if($mobile)
            @if($mobile->type == 1)
            $('#form_img_mobile img').attr('src', "{{ asset('storage/'.$mobile->url.'?v='.time()) }}")
            @else
            $('#form_img_mobile img').attr('src', "https://placehold.co/390x842")
            @endif
        @else
        $('#form_img_mobile img').attr('src', "{{ asset('images/bg-mobile-sec5.png?v='.time()) }}")
        @endif
        $(this).css('display', 'none')
    })

    // Cancel Edit Background Color
    $('#form_background_color button.cancel').click(function(){
        $('#form_background_color input[type="color"]').attr('disabled', true)
        $('#form_background_color input[name="hex"]').attr('readonly', true)
        @if($desktop)
            @if($desktop->type == 2)
            $('#form_background_color input[type="color"]').val('{{ $desktop->url }}')
            $('#form_background_color input[name="hex"]').val('{{ $desktop->url }}')
            $('#form_background_color .preview_desktop').css('background-color','{{ $desktop->url }}')
            @else
            $('#form_background_color input[type="color"]').val('#E9E0D9')
            $('#form_background_color input[name="hex"]').val('#E9E0D9')
            $('#form_background_color .preview_desktop').css('background-color','#E9E0D9')
            @endif
        @else
        $('#form_background_color input[type="color"]').val('#E9E0D9')
        $('#form_background_color input[name="hex"]').val('#E9E0D9')
        $('#form_background_color .preview_desktop').css('background-color','#E9E0D9')
        @endif

        @if($mobile)
            @if($mobile->type == 2)
            $('#form_background_color .preview_mobile').css('background-color','{{ $desktop->url }}')
            @else
            $('#form_background_color .preview_mobile').css('background-color','#E9E0D9')
            @endif
        @else
        $('#form_background_color .preview_mobile').css('background-color','#E9E0D9')
        @endif
        $('#form_background_color button.edit').css('display', 'block')
        $('#form_background_color button[type="submit"]').css('display', 'none')
        $(this).css('display', 'none')
    })

    // All Img Preview
    $('#form_img_desktop input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_desktop img').attr('src', src)
    })
    $('#form_img_mobile input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_mobile img').attr('src', src)
    })
    $('#form_background_color input[type="color"]').change(function(e){
        var color = e.target.value
        $('#form_background_color input[name="hex"]').val(color)
        $('#form_background_color .preview_desktop').css('background-color', color)
        $('#form_background_color .preview_mobile').css('background-color', color)
    })
    $('#form_background_color input[name="hex"]').on('input',function(e){
        var color = e.target.value
        $('#form_background_color input[name="color"]').val(color)
        $('#form_background_color .preview_desktop').css('background-color', color)
        $('#form_background_color .preview_mobile').css('background-color', color)
    })

    // Submit Form Create
    $('#form-create').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var image = $(this).find('input[type="file"]')[0].files[0]
        var title = $(this).find('input[name="title"]').val()
        var publisher = $(this).find('input[name="publisher"]').val()
        // var title = CKEDITOR.instances.title_create.getData()
        // var publisher = CKEDITOR.instances.publisher_create.getData()
        var url = $(this).find('input[name="url"]').val()
        var color = $(this).find('input[name="color"]').val()
        var font_color = $(this).find('input[name="font_color"]').val()
        var token = $(this).find('input[name="_token"]').val()

        fd.append('title', title)
        fd.append('publisher', publisher)
        fd.append('url', url)
        fd.append('color', color)
        fd.append('font_color', font_color)
        fd.append('image', image)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/press') }}",
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
            error: function(jqXHR, errorThrown){
                console.log(jqXHR);
                Swal.fire({
                    type: 'error',
                    title: errorThrown,
                    text: jqXHR.responseJSON.message
                })
            }
        })
    })

    $('#form-edit').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var id = $(this).find('input[name="id"]').val()
        var title = $(this).find('input[name="title"]').val()
        var publisher = $(this).find('input[name="publisher"').val()
        var font_color = $(this).find('input[name="font_color"]').val()
        var color = $(this).find('input[name="color"]').val()
        var url = $(this).find('input[name="url"]').val()
        var image = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('title', title)
        fd.append('publisher', publisher)
        fd.append('font_color', font_color)
        fd.append('color', color)
        fd.append('url', url)
        if(image){
            fd.append('image', image)
        }
        fd.append('_token', token)
        console.log(fd);

        $.ajax({
            url: `{{ url('admin/press/update/${id}') }}`,
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
            error: function(jqXHR, errorThrown){
                console.log(jqXHR);
                Swal.fire({
                    type: 'error',
                    title: errorThrown,
                    text: jqXHR.responseJSON.message
                })
            }
        })
    })

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
                    url: `{{ url('admin/press/delete/${id}') }}`,
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

    // Submit Img Desktop
    $('#form_img_desktop').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/press/background/1/1') }}",
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

    // Submit Img Mobile
    $('#form_img_mobile').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/press/background/2/1') }}",
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

    // Submit Background Color
    $('#form_background_color').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var bg_color = $(this).find('input[type="color"]').val()
        var token = $(this).find('input[name="_token"]').val()

        fd.append('bg_color', bg_color)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/press/background/1/2') }}",
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
<style>
</style>