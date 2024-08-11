@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact Us</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Contact Us</h4>
                </div>
                <div class="card-body">
                    <form id="form_contact_us" action="">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Email</label>
                                    <div class="col">
                                        <input type="email" name="email" id="" class="form-control" readonly value="{{ $contact_us? $contact_us->email: 'hello@aniba.com.sg' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Phone</label>
                                    <div class="col">
                                        <input type="text" name="phone" class="form-control" readonly value="{{ $contact_us? $contact_us->phone: '+65 9668 8036' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Address</label>
                                    <div class="col">
                                        <textarea name="" id="address" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Content</label>
                                    <div class="col">
                                        <textarea name="" id="contact_us_content" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <h5>Social</h5>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Facebook</label>
                                    <div class="col">
                                        <input type="text" name="facebook" class="form-control" readonly value="{{ $contact_us? $contact_us->facebook: 'https://www.facebook.com/anibasingapore' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Instagram</label>
                                    <div class="col">
                                        <input type="text" name="instagram" class="form-control" readonly value="{{ $contact_us? $contact_us->instagram: 'https://www.instagram.com/aniba.sg/' }}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse">
                                    <button type="button" class="btn btn-primary edit"><i class="fas fa-edit"></i> Edit</button>
                                    <button type="submit" form="form_contact_us" class="btn btn-primary" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                    <button type="button" class="btn btn-danger mr-2 cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                            <img class="card-img mt-3" src="{{ asset('/images/contact_us.jpg?v='.time()) }}" alt="Background Desktop">
                                        @endif
                                    </div>
                                </form>
                                <form id="form_img_mobile" class="col-5">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label d-block">Mobile Background</label>
                                                <span>size (390 x 671)</span>
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
                                                <img class="card-img mt-3" src="https://placehold.co/390x671" alt="Background Desktop">
                                            @endif
                                        @else
                                            <img class="card-img mt-3" src="{{ asset('/images/bg-mobile-sec7.png?v='.time()) }}" alt="Background Desktop">
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
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#000000" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" disabled>
                                                </div>
                                                @endif
                                            @else
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#000000" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" disabled>
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
                                            <div class="preview_desktop" style="background-color: #000000; width: 100%; height: 23vw;"></div>
                                            @endif
                                        @else
                                        <div class="preview_desktop" style="background-color: #000000; width: 100%; height: 23vw;"></div>
                                        @endif
                                    </div>
                                    <div class="col-5">
                                        @if($mobile)
                                            @if($mobile->type == 2)
                                            <div class="preview_mobile" style="background-color: {{ $mobile->url }}; width: 100%; height: 50vw;"></div>
                                            @else
                                            <div class="preview_mobile" style="background-color: #000000; width: 100%; height: 50vw;"></div>
                                            @endif
                                        @else
                                        <div class="preview_mobile" style="background-color: #000000; width: 100%; height: 50vw;"></div>
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
    var address = document.getElementById('address')
    var contact_us_content = document.getElementById('contact_us_content')
    CKEDITOR.replace(address, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
        height: 100
    })
    CKEDITOR.replace(contact_us_content, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.address.setData(`{!! $contact_us? $contact_us->address: "6 Battery Road #05 - 03<br/>Singapore 049909" !!}`)
    CKEDITOR.instances.contact_us_content.setData(`{!! $contact_us? $contact_us->content: '
    <h6><b>ADDRESS :</b></h6>

<div style="line-height:1;">&nbsp;</div>

<p>6 Battery Road #05 - 03<br />
Singapore 049909</p>

<div style="line-height:1;">&nbsp;</div>

<h6><b>HOW TO GET THERE :</b></h6>

<div style="line-height:1;">&nbsp;</div>

<p>For those who are coming by car, drop off is at Bonham Street. Entrance on the riverside</p>

<div style="line-height:1;">&nbsp;</div>

<h6><b>DRESS CODE :</b></h6>

<div style="line-height:1;">&nbsp;</div>

<p>Smart Casual, no singlet &amp; flip flops</p>

    ' !!}`)

    // Enable Edit Contact Us
    $('#form_contact_us button.edit').click(function() {
        $("#form_contact_us button.cancel").css('display', 'block')
        $("#form_contact_us button[type='submit']").css('display', 'block')
        $(this).css('display', 'none')

        $('#form_contact_us input[name="email"]').attr('readonly', false)
        $('#form_contact_us input[name="phone"]').attr('readonly', false)
        $('#form_contact_us input[name="facebook"]').attr('readonly', false)
        $('#form_contact_us input[name="instagram"]').attr('readonly', false)

        CKEDITOR.instances.address.setReadOnly(false)
        CKEDITOR.instances.contact_us_content.setReadOnly(false)

        CKEDITOR.instances.address.on('afterCommandExec', function(e) {
            if (e.data.name == 'toolbarCollapse') {
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.contact_us_content.on('afterCommandExec', function(e) {
            if (e.data.name == 'toolbarCollapse') {
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.address.execCommand('toolbarCollapse')
        CKEDITOR.instances.contact_us_content.execCommand('toolbarCollapse')
    })

    // Enable Edit Background Desktop
    $('#form_img_desktop button.edit').click(function() {
        $('#form_img_desktop input[type="file"]').attr('disabled', false)
        $('#form_img_desktop button.cancel').css('display', 'block')
        $('#form_img_desktop button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Background mobile
    $('#form_img_mobile button.edit').click(function() {
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

    // Cancel Edit Contact Us
    $('#form_contact_us button.cancel').click(function() {
        $("#form_contact_us button.edit").css('display', 'block')
        $("#form_contact_us button[type='submit']").css('display', 'none')
        $(this).css('display', 'none')

        $('#form_contact_us input[name="email"]').attr('readonly', true)
        $('#form_contact_us input[name="phone"]').attr('readonly', true)
        $('#form_contact_us input[name="facebook"]').attr('readonly', true)
        $('#form_contact_us input[name="instagram"]').attr('readonly', true)

        $('#form_contact_us input[name="email"]').val("{{ $contact_us? $contact_us->email : 'hello@aniba.com.sg' }}")
        $('#form_contact_us input[name="phone"]').val("{{ $contact_us? $contact_us->phone : '+65 9668 8036' }}")
        $('#form_contact_us input[name="facebook"]').val("{{ $contact_us? $contact_us->facebook : 'https://www.facebook.com/anibasingapore' }}")
        $('#form_contact_us input[name="instagram"]').val("{{ $contact_us? $contact_us->instagram : 'https://www.instagram.com/aniba.sg/' }}")

        CKEDITOR.instances.address.destroy(true)
        CKEDITOR.instances.contact_us_content.destroy(true)
        CKEDITOR.replace(address, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.replace(contact_us_content, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.instances.address.setData(`{!! $contact_us? $contact_us->address: "6 Battery Road #05 - 03<br/>Singapore 049909" !!}`)
        CKEDITOR.instances.contact_us_content.setData(`{!! $contact_us? $contact_us->content: '
        <h6><b>ADDRESS :</b></h6>

<div style="line-height:1;">&nbsp;</div>

<p>6 Battery Road #05 - 03<br />
Singapore 049909</p>

<div style="line-height:1;">&nbsp;</div>

<h6><b>HOW TO GET THERE :</b></h6>

<div style="line-height:1;">&nbsp;</div>

<p>For those who are coming by car, drop off is at Bonham Street. Entrance on the riverside</p>

<div style="line-height:1;">&nbsp;</div>

<h6><b>DRESS CODE :</b></h6>

<div style="line-height:1;">&nbsp;</div>

<p>Smart Casual, no singlet &amp; flip flops</p>

    ' !!}`)
    })

    // Cancel Edit Img Desktop
    $('#form_img_desktop button.cancel').click(function() {
        $('#form_img_desktop input[type="file"]').attr('disabled', true)
        $('#form_img_desktop button.edit').css('display', 'block')
        $('#form_img_desktop button[type="submit"]').css('display', 'none')
        $('#form_img_desktop input[type="file"]').val('')
        $('#form_img_desktop img').attr('src', "{{ $desktop? asset('storage/'.$desktop->url.'?v='.time()): asset('/images/contact_us.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Cancel Edit Img Mobile
    $('#form_img_mobile button.cancel').click(function() {
        $('#form_img_mobile input[type="file"]').attr('disabled', true)
        $('#form_img_mobile button.edit').css('display', 'block')
        $('#form_img_mobile button[type="submit"]').css('display', 'none')
        $('#form_img_mobile input[type="file"]').val('')
        $('#form_img_mobile img').attr('src', "{{ $mobile? asset('storage/'.$mobile->url.'?v='.time()): asset('/images/bg-mobile-sec7.png?v='.time()) }}")
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
            $('#form_background_color input[type="color"]').val('#000000')
            $('#form_background_color input[name="hex"]').val('#000000')
            $('#form_background_color .preview_desktop').css('background-color','#000000')
            @endif
        @else
        $('#form_background_color input[type="color"]').val('#000000')
        $('#form_background_color input[name="hex"]').val('#000000')
        $('#form_background_color .preview_desktop').css('background-color','#000000')
        @endif

        @if($mobile)
            @if($mobile->type == 2)
            $('#form_background_color .preview_mobile').css('background-color','{{ $desktop->url }}')
            @else
            $('#form_background_color .preview_mobile').css('background-color','#000000')
            @endif
        @else
        $('#form_background_color .preview_mobile').css('background-color','#000000')
        @endif

        $('#form_background_color button.edit').css('display', 'block')
        $('#form_background_color button[type="submit"]').css('display', 'none')
        $(this).css('display', 'none')
    })

    // All Img Preview
    $('#form_img_desktop input[type="file"]').change(function(e) {
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_desktop img').attr('src', src)
    })
    $('#form_img_mobile input[type="file"]').change(function(e) {
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

    // Submit Contact Us
    $('#form_contact_us').submit(function(e) {
        e.preventDefault()
        var data = {
            "email": $(this).find('input[name="email"]').val(),
            "phone": $(this).find('input[name="phone"]').val(),
            "facebook": $(this).find('input[name="facebook"]').val(),
            "instagram": $(this).find('input[name="instagram"]').val(),
            "address": CKEDITOR.instances.address.getData(),
            "content": CKEDITOR.instances.contact_us_content.getData(),
            "_token": $(this).find('input[name="_token"]').val(),
        }

        $.ajax({
            url: "{{ url('admin/contact-us') }}",
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
            }
        })
    })

    // Submit Img Desktop
    $('#form_img_desktop').submit(function(e) {
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/contact-us/background/1/1') }}",
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
    $('#form_img_mobile').submit(function(e) {
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/contact-us/background/2/1') }}",
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
            url: "{{ url('admin/contact-us/background/1/2') }}",
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