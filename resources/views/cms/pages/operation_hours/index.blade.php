@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Operation Hours</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Operation Hours</h4>
                </div>
                <div class="card-body">
                    <form id="form_operation" action="">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Content</label>
                                    <div class="col">
                                        <textarea name="" id="operation" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Content Footer</label>
                                    <div class="col">
                                        <textarea name="" id="operation_footer" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Book Now Link</label>
                                    <div class="col">
                                        <input class="form-control" type="text" name="book_now_link" id="book_now_link" disabled value={!! $operation ? $operation->book_now_link : 'https://www.sevenrooms.com/reservations/aniba' !!}>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                <button type="submit" form="form_operation" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
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
                                            <img class="card-img mt-3" src="{{ asset('images/bg-sec3.png?v='.time()) }}" alt="Background Desktop">
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
                                            <img class="card-img mt-3" src="{{ asset('images/bg-mobile-sec5.png?v='.time()) }}" alt="Background Desktop">
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
    var operation = document.getElementById('operation')
    var operation_footer = document.getElementById('operation_footer')
    CKEDITOR.replace(operation,{
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%'
    })
    CKEDITOR.replace(operation_footer,{
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%'
    })
    CKEDITOR.instances.operation.setData(`{!! $operation? $operation->operation: '<p><b>Sunday to Thursday :</b><br />
    3PM - 12AM</p>

    <p><b>Friday :</b><br />
    12PM - 5PM</p>

    <p><b>Saturday Speakeasy Night :</b><br />
    8PM till late</p>' !!}`)
    CKEDITOR.instances.operation_footer.setData(`{!! $operation? $operation->operation_footer : '<p>
            Sunday to Thursday: 3PM - 12AM<br>

            Friday: 12PM - 5PM<br>

            Saturday Speakeasy Night: 8PM till late<br>
        </p>' !!}`)

    // Enable Edit Operation
    $('#form_operation button.edit').click(function(){
        $('#form_operation button[type="submit"]').css('display', 'block')
        $('#form_operation button.cancel').css('display', 'block')
        $('#form_operation #book_now_link').attr('disabled', false)
        $(this).css('display', 'none')

        CKEDITOR.instances.operation.setReadOnly(false)
        CKEDITOR.instances.operation_footer.setReadOnly(false)
        CKEDITOR.instances.operation.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.operation_footer.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.operation.execCommand('toolbarCollapse')      
        CKEDITOR.instances.operation_footer.execCommand('toolbarCollapse')      
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

    // Cancel Edit Operation
    $('#form_operation button.cancel').click(function(){
        $('#form_operation button[type="submit"]').css('display', 'none')
        $('#form_operation button.edit').css('display', 'block')
        $('#form_operation #book_now_link').attr('disabled', true)
        $(this).css('display', 'none')

        CKEDITOR.instances.operation.destroy(true)
        CKEDITOR.instances.operation_footer.destroy(true)
        CKEDITOR.replace(operation,{
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%'
        })
        CKEDITOR.replace(operation_footer,{
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%'
        })
        CKEDITOR.instances.operation.setData(`{!! $operation? $operation->operation: '<p><b>Sunday to Thursday :</b><br />
            3PM - 12AM</p>

            <p><b>Friday :</b><br />
            12PM - 6PM</p>

            <p><b>Saturday Speakeasy Night :</b><br />
            8PM till late</p>' !!}`)
            
        CKEDITOR.instances.operation_footer.setData(`{!! $operation? $operation->operation_footer : '<p>
            Sunday to Thursday: 3PM - 12AM<br>

            Friday: 12PM - 6PM<br>

            Saturday Speakeasy Night: 8PM till late<br>
            </p>' !!}`)
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


    // Submit Operation Hours
    $('#form_operation').submit(function(e){
        e.preventDefault()
        var operation = CKEDITOR.instances.operation.getData()
        var operation_footer = CKEDITOR.instances.operation_footer.getData()
        var book_now_link = $(this).find('#book_now_link').val()
        var token = $(this).find('input[name="_token"]').val()
        

        $.ajax({
            url: "{{ url('admin/operation-hours') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: {
                "operation": operation,
                "operation_footer": operation_footer,
                "book_now_link": book_now_link,
                "_token": token
            },
            success: function(res){
                Swal.fire({
                    type: 'success',
                    title: res.message
                }).then(function(){
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
            url: "{{ url('admin/operation-hours/background/1/1') }}",
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
            url: "{{ url('admin/operation-hours/background/2/1') }}",
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
            url: "{{ url('admin/operation-hours/background/1/2') }}",
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