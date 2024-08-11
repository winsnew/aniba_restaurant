@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Private Events</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Private Event</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h5>Private Event</h5>
                            <form id="form_event" action="">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Title</label>
                                    <div class="col">
                                        <textarea name="" class="form-control" id="title_event" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Description</label>
                                    <div class="col">
                                        <textarea name="" class="form-control" id="desc_event" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Contact Us Link</label>
                                    <div class="col">
                                        <input type="text" class="form-control" name="contact_us_link" id="" value="{{ $content1? $content1->contact_us_link : 'https://foragerspteltd.tripleseat.com/party_request/27871' }}" readonly>
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse">
                                    <button type="button" class="btn btn-primary edit"><i class="fas fa-edit"></i> Edit</button>
                                    <button type="submit" form="form_event" class="btn btn-primary" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                    <button type="button" class="btn btn-danger mr-2 cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                </div>
                            </form>
                            <div class="dropdown-divider"></div>
                            <h5>Private Room</h5>
                            <form id="form_room" action="">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Title</label>
                                    <div class="col">
                                        <textarea name="" class="form-control" id="title_room" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Description</label>
                                    <div class="col">
                                        <textarea name="" class="form-control" id="desc_room" cols="30" rows="10"></textarea>
                                    </div>
                                    </div>
                                <div class="d-flex flex-row-reverse">
                                    <button type="button" class="btn btn-primary edit"><i class="fas fa-edit"></i> Edit</button>
                                    <button type="submit" form="form_room" class="btn btn-primary" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                    <button type="button" class="btn btn-danger mr-2 cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-5">
                            <form id="form_img_private" action="">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Image</label>
                                            <span class="d-block">size (1144 x 1590)</span>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                            <button type="submit" form="form_img_private" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                            <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                        </div>
                                    </div>
                                    <input type="file" class="my-3" disabled>
                                    <img class="card-img" src="{{ $image? asset('storage/'.$image->url.'?v='.time()): asset('images/image_private.jpg?v='.time()) }}" alt="Background Desktop">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
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
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="#E9E0D9" disabled>
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
</div>
@endsection
@push('js')
<script>

    // Private Event
    var title_event = document.getElementById('title_event')
    var desc_event = document.getElementById('desc_event')
    CKEDITOR.replace(title_event, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
        height: 100
    })
    CKEDITOR.replace(desc_event, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.title_event.setData(`{!! $content1? $content1->title: '<h2 style="color: #B79C7D;"><b>“I don’t know where I’m going<br/> <i>but I’m on my way.</i>”</b></h2>' !!}`)
    CKEDITOR.instances.desc_event.setData(`{!! $content1? $content1->description: 'At ANIBA, we offer a range of bespoke options for larger group dining or private events including access to our private dining room, main dining area, and the restaurant in its entirety. For more information, please contact us at hello@aniba.com.sg.' !!}`)

    // Private Room
    var title_room = document.getElementById('title_room')
    var desc_room = document.getElementById('desc_room')
    CKEDITOR.replace(title_room, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
        height: 100
    })
    CKEDITOR.replace(desc_room, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.title_room.setData(`{!! $content2? $content2->title: '<h5>OUR PRIVATE  DINING ROOM</h5>' !!}`)
    CKEDITOR.instances.desc_room.setData(`{!! $content2? $content2->description: 'For a exclusive dining experience, book our private dining room, which sits up to 16 pax — Only for you and your guests.' !!}`)

    // Enable Edit Private Event
    $('#form_event button.edit').click(function(){
        $('#form_event button.cancel').css('display', 'block')
        $('#form_event button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
        
        CKEDITOR.instances.title_event.setReadOnly(false)
        CKEDITOR.instances.desc_event.setReadOnly(false)
        $('#form_event input[name="contact_us_link"]').attr('readonly', false)

        CKEDITOR.instances.title_event.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.desc_event.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.desc_event.execCommand('toolbarCollapse')
        CKEDITOR.instances.title_event.execCommand('toolbarCollapse')
    })

    // Enable Edit Private Room
    $('#form_room button.edit').click(function(){
        $('#form_room button.cancel').css('display', 'block')
        $('#form_room button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
        
        CKEDITOR.instances.title_room.setReadOnly(false)
        CKEDITOR.instances.desc_room.setReadOnly(false)

        CKEDITOR.instances.title_room.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.desc_room.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.desc_room.execCommand('toolbarCollapse')
        CKEDITOR.instances.title_room.execCommand('toolbarCollapse')
    })

    // Enable Edit Image
    $('#form_img_private button.edit').click(function(){
        $('#form_img_private button.cancel').css('display', 'block')
        $('#form_img_private button[type="submit"]').css('display', 'block')
        $('#form_img_private input[type="file"]').attr('disabled', false)
        $(this).css('display', 'none')
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

    // Cancel Edit Private Event
    $('#form_event button.cancel').click(function(){
        $('#form_event button.edit').css('display', 'block')
        $('#form_event button[type="submit"]').css('display', 'none')
        $(this).css('display', 'none')

        $('#form_event input[name="contact_us_link"]').attr('readonly', true)
        $('#form_event input[name="contact_us_link"]').val('{{ $content1? $content1->contact_us_link : "https://foragerspteltd.tripleseat.com/party_request/27871" }}')
        CKEDITOR.instances.title_event.destroy(true)
        CKEDITOR.instances.desc_event.destroy(true)
        CKEDITOR.replace(title_event, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
            height: 100
        })
        CKEDITOR.replace(desc_event, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.instances.title_event.setData(`{!! $content1? $content1->title: '<h2 style="color: #B79C7D;"><b>“I don’t know where I’m going<br/> <i>but I’m on my way.</i>”</b></h2>' !!}`)
        CKEDITOR.instances.desc_event.setData(`{!! $content1? $content1->description: 'At ANIBA, we offer a range of bespoke options for larger group dining or private events including access to our private dining room, main dining area, and the restaurant in its entirety. For more information, please contact us at hello@aniba.com.sg.' !!}`)
    })

    // Cancel Edit Private Room
    $('#form_room button.cancel').click(function(){
        $('#form_room button.edit').css('display', 'block')
        $('#form_room button[type="submit"]').css('display', 'none')
        $(this).css('display', 'none')

        CKEDITOR.instances.title_room.destroy(true)
        CKEDITOR.instances.desc_room.destroy(true)
        CKEDITOR.replace(title_room, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
            height: 100
        })
        CKEDITOR.replace(desc_room, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.instances.title_room.setData(`{!! $content2? $content2->title: '' !!}`)
        CKEDITOR.instances.desc_room.setData(`{!! $content2? $content2->description: '' !!}`)
    })

    // Cancel Edit Image
    $('#form_img_private button.cancel').click(function(){
        $('#form_img_private button.edit').css('display', 'block')
        $('#form_img_private button[type="submit"]').css('display', 'none')
        $('#form_img_private input[type="file"]').attr('disabled', true)
        $('#form_img_private img').attr('src', "{{ $image? asset('storage/'.$image->url.'?v='.time()): asset('images/image_private.jpg?v='.time()) }}")
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
        $('#form_background_color input[name="hex').attr('readonly', true)
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

    // Preview Image
    $('#form_img_private input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_private img').attr('src', src)
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

    // Submit Private Event
    $('#form_event').submit(function(e){
        e.preventDefault()
        var title = CKEDITOR.instances.title_event.getData()
        var desc = CKEDITOR.instances.desc_event.getData()
        var contact_us_link = $(this).find('input[name="contact_us_link"]').val()
        var token = $(this).find('input[name="_token"]').val()

        $.ajax({
            url: "{{ url('admin/private-events/content/1') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: {
                "title": title,
                "desc": desc,
                "contact_us_link": contact_us_link,
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

    // Submit Private Room
    $('#form_room').submit(function(e){
        e.preventDefault()
        var title = CKEDITOR.instances.title_room.getData()
        var desc = CKEDITOR.instances.desc_room.getData()
        var token = $(this).find('input[name="_token"]').val()

        $.ajax({
            url: "{{ url('admin/private-events/content/2') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: {
                "title": title,
                "desc": desc,
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

    // Submit Private Image
    $('#form_img_private').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/private-events/background/1/1') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: fd,
            contentType: false,
            processData:false,
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
    // Submit Img Desktop
    $('#form_img_desktop').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/private-events/background/2/1') }}",
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
            url: "{{ url('admin/private-events/background/3/1') }}",
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
            url: "{{ url('admin/private-events/background/2/2') }}",
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