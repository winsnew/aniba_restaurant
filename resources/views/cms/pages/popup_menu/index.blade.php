@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pop up Menu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Pop up Menu</h4>
                </div>
                <div class="card-body row">
                    <form id="form_popup" class="col-7" action="">
                        @csrf
                        <h5>Pop up Menu</h5>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-4">Status</label>
                            <div class="col">
                                <select class="form-control form-select" id="status" name="status" aria-label="Default select example" disabled>
                                    {{-- <option @if($content->status=='1' ) {{ __('selected') }} @endif value="1">Active</option>
                                    <option @if($content->status=='0' ) {{ __('selected') }} @endif value="0">Deactive</option> --}}
                                    <option {{ $content? ($content->status == 1? 'selected': ''): '' }} value="1">Active</option>
                                    <option {{ $content? ($content->status == 0? 'selected': ''): '' }} value="0">Deactive</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row popup-content">
                            <label for="" class="col-form-label col-4">Title</label>
                            <div class="col">
                                <textarea name="tittle" class="form-control" id="title" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row popup-content">
                            <label for="" class="col-form-label col-4">Subscribe content</label>
                            <div class="col">
                                <select class="form-control form-select" id="subscribe_status" name="subscribe_status" aria-label="Default select example" disabled >
                                    {{-- <option @if($content->subscribe_status=='1' ) {{ __('selected') }} @endif value="1">Active</option>
                                    <option @if($content->subscribe_status=='0' ) {{ __('selected') }} @endif value="0">Deactive</option> --}}
                                    <option {{ $content? ($content->subscribe_status == 1? 'selected': ''): '' }} value="1">Active</option>
                                    <option {{ $content? ($content->subscribe_status == 0? 'selected': ''): '' }} value="0">Deactive</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row popup-content">
                            <label for="" class="col-form-label col-4">Popup Link</label>
                            <div class="col">
                                <input type="text" id="popup_link" class="form-control" placeholder="Link" value="{{ $content ? $content->link : '' }}" disabled>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <button type="button" class="btn btn-primary edit"><i class="fas fa-edit"></i> Edit</button>
                            <button type="submit" form="form_popup" class="btn btn-primary" style="display: none;"><i class="fas fa-save"></i> Save</button>
                            <button type="button" class="btn btn-danger mr-2 cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                        </div>
                    </form>
                    <div class="col-5">
                        <h5>Background</h5>
                        <nav>
                            <div class="nav nav-tabs" role="tablist">
                                <button class="nav-link active" data-toggle="tab" data-target="#bg-image" type="button" role="tab" aria-controls="bg-image" aria-selected="true">Image</button>
                                <button class="nav-link" data-toggle="tab" data-target="#bg-color" type="button" role="tab" aria-controls="bg-color" aria-selected="false">Color</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade my-3 show active" id="bg-image" role="tabpanel" aria-labelledby="bg-image-tab">
                                <form id="form_img_mobile">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label d-block">Background Image</label>
                                                <span>size (360 x 550)</span>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                                <button type="submit" form="form_img_mobile" class="btn btn-primary submit float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                            </div>
                                        </div>
                                        <input type="file" class="mt-3" name="" id="" disabled>
                                        {{-- <img class="card-img mt-3" src="{{ $mobile? asset('storage/'.$mobile->url.'?v='.time()): asset('images/bg-mobile-header.png?v='.time()) }}" alt="Mobile Desktop"> --}}
                                        @if($background)
                                            @if($background->type == 1)
                                                <img class="card-img mt-3" src="{{ asset('storage/'.$background->url.'?v='.time()) }}" alt="Background Desktop">
                                            @else
                                                <img class="card-img mt-3" src="https://placehold.co/360x550" alt="Background Desktop">
                                            @endif
                                        @else
                                            <img class="card-img mt-3" src="{{ asset('images/image_private.jpg?v='.time()) }}" alt="Background Desktop">
                                        @endif
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade my-3" id="bg-color" role="tabpanel" aria-labelledby="bg-color-tab">
                                <form id="form_background_color">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="">Background Color</label>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="float-right btn btn-primary edit"><i class="fas fa-edit"></i> Edit</button>
                                            <button type="submit" form="form_background_color" class="float-right btn btn-primary" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                            <button type="button" class="float-right btn btn-danger mr-2 cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        @if($background)
                                            @if($background->type == 2)
                                            <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="{{ $background->url }}" readonly>
                                            <div class="input-group-append">
                                                <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="{{ $background->url }}" disabled>
                                            </div>
                                            @else
                                            <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#E9E0D9" readonly>
                                            <div class="input-group-append">
                                                <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="#E9E0D9" disabled>
                                            </div>
                                            @endif
                                        @else
                                            <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#E9E0D9" readonly>
                                            <div class="input-group-append">
                                                <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="#E9E0D9" disabled>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mt-3">
                                        @if($background)
                                            @if($background->type == 2)
                                                <div class="preview_mobile" style="background-color: {{ $background->url }}; width: 100%; height: 50vw;"></div>
                                            @else
                                                <div class="preview_mobile" style="background-color: #E9E0D9; width: 100%; height: 50vw;"></div>
                                            @endif
                                        @else
                                                <div class="preview_mobile" style="background-color: #E9E0D9; width: 100%; height: 50vw;"></div>
                                        @endif
                                    </div>
                                </form>
                            </div>
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

    // Pop up
    var title = document.getElementById('title')
    CKEDITOR.replace(title, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
        height: 100
    })
    CKEDITOR.instances.title.setData(`{!! $content? $content->title: '<b>JOIN OUR MAILING LIST:</b>' !!}`)
   
    //Enable by Status
    // $('#form_popup #status').change(function(){
    //     console.log(this.value);
    //     if(this.value == '1'){
    //         $('#form_popup input[type="file"]').css('display', 'block')
    //         $('#form_popup #status').css('display', 'block')
    //         $('#form_popup #subscribe_status').css('display', 'block')
    //     }else{
    //         $('#form_popup input[type="file"]').css('display', 'none')
    //         $('#form_popup #status').css('display', 'none')
    //         $('#form_popup #subscribe_status').css('display', 'none')
    //     }
    // });
    
    // Enable Edit Popup
    $('#form_popup button.edit').click(function(){
        $('#form_popup button.cancel').css('display', 'block')
        $('#form_popup button[type="submit"]').css('display', 'block')
        $('#form_popup #status').attr('disabled', false)
        $('#form_popup #subscribe_status').attr('disabled', false)
        $('#popup_link').attr('disabled', false)
        $(this).css('display', 'none')
        
        CKEDITOR.instances.title.setReadOnly(false)

        CKEDITOR.instances.title.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.title.execCommand('toolbarCollapse')
    })

    // Enable Edit Popup Image
    $('#form_img_mobile button.edit').click(function(){
        $('#form_img_mobile button.cancel').css('display', 'block')
        $('#form_img_mobile button.submit').css('display', 'block')
        $(this).css('display', 'none')

        $('#form_img_mobile input[type="file"]').attr('disabled', false)
    })

    // Enable Edit Background Color
    $('#form_background_color button.edit').click(function(){
        $('#form_background_color input[type="color"]').attr('disabled', false)
        $('#form_background_color input[name="hex"]').attr('readonly', false)
        $('#form_background_color button.cancel').css('display', 'block')
        $('#form_background_color button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Popup
    $('#form_popup button.cancel').click(function(){
        $('#form_popup button.edit').css('display', 'block')
        $('#form_popup button[type="submit"]').css('display', 'none')
        $('#form_popup #status').attr('disabled', true)
        $('#form_popup #subscribe_status').attr('disabled', true)
        $('#popup_link').attr('disabled', true)

        $('#popup_link').val(`{{ $content ? $content->link : '' }}`)
        $('#form_popup #status option').each(function () {
            $(this).removeAttr('selected')

            if ($(this).val() == {{ $content ? $content->status : 1 }}) {
                $(this).attr('selected', true)
            }
        })
        $('#form_popup #subscribe_status option').each(function () {
            $(this).removeAttr('selected')
            
            if ($(this).val() == {{ $content ? $content->subscribe_status : 1 }}) {
                $(this).attr('selected', true)
            }
        })
        $(this).css('display', 'none')

        CKEDITOR.instances.title.destroy(true)
        CKEDITOR.replace(title, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
            height: 100
        })
        CKEDITOR.instances.title.setData(`{!! $content? $content->title: '<b>JOIN OUR MAILING LIST:</b>' !!}`)
    })

    // Cancel Edit Popup Image
    $('#form_img_mobile button.cancel').click(function(){
        $('#form_img_mobile button.edit').css('display', 'block')
        $('#form_img_mobile button.submit').css('display', 'none')
        $(this).css('display', 'none')

        $('#form_img_mobile input[type="file"]').attr('disabled', true)
        $('#form_img_mobile input[type="file"]').val(''),
        $('#form_img_mobile img').attr('src', "{{ $content? asset($content->image.'?v='.time()) : asset('images/image_private.jpg?v='.time()) }}")
    })

    // Cancel Edit Background Color
    $('#form_background_color button.cancel').click(function(){
        $('#form_background_color input[type="color"]').attr('disabled', true)
        $('#form_background_color input[name="hex"]').attr('readonly', true)
        @if($content)
            @if($content->image_type == 2)
            $('#form_background_color input[type="color"]').val('{{ $content->image }}')
            $('#form_background_color input[name="hex"]').val('{{ $content->image }}')
            $('#form_background_color .preview_mobile').css('background-color','{{ $content->image }}')
            @else
            $('#form_background_color input[type="color"]').val('#E9E0D9')
            $('#form_background_color input[name="hex"]').val('#E9E0D9')
            $('#form_background_color .preview_mobile').css('background-color','#E9E0D9')
            @endif
        @else
        $('#form_background_color input[type="color"]').val('#E9E0D9')
        $('#form_background_color input[name="hex"]').val('#E9E0D9')
        $('#form_background_color .preview_mobile').css('background-color','#E9E0D9')
        @endif
        $('#form_background_color button.edit').css('display', 'block')
        $('#form_background_color button[type="submit"]').css('display', 'none')
        $(this).css('display', 'none')
    })

    // Preview Image
    $('#form_img_mobile input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_mobile img').attr('src', src)
    })
    // Preview Color
    $('#form_background_color input[type="color"]').change(function(e){
        var color = e.target.value
        $('#form_background_color input[name="hex"]').val(color)
        $('#form_background_color .preview_mobile').css('background-color', color)
    })
    $('#form_background_color input[name="hex"]').on('input',function(e){
        var color = e.target.value
        $('#form_background_color input[name="color"]').val(color)
        $('#form_background_color .preview_mobile').css('background-color', color)
    })

    // Submit popup
    $('#form_popup').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var title = CKEDITOR.instances.title.getData()
        var status = $(this).find('#status').val()
        var subscribe_status = $(this).find('#subscribe_status').val()
        var link = $(this).find('#popup_link').val()
        var token = $(this).find('input[name="_token"]').val()

        fd.append('title', title);
        fd.append('status', status);
        fd.append('subscribe_status', subscribe_status);
        fd.append('_token', token);
        fd.append('link', link)
        $.ajax({
            url: "{{ url('admin/popup/update/1') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData:false,
            data: fd,
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
            url: "{{ url('admin/popup/background/1') }}",
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
            url: "{{ url('admin/popup/background/2') }}",
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