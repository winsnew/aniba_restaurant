@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home Banner</a></li>
                        <li class="breadcrumb-item active">Create Banner</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-body">
                    <form action="{{url('admin/home/form')}}" enctype="multipart/form-data" method="POST" id="mainform">
                        {{ csrf_field() }}
                        <input type="text" name="id" value="{{$data->id}}" hidden />
                        <div class="row mb-3">
                            <div class="col-md-2 col-sm-2">
                                <label for="">Content Name</label>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <input class="form-control" type="text" name="name" id="name" value="{{$data->name}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 col-sm-12">
                                <div class="row form-group mb-3">
                                    <div class="col-md-2 col-sm-2">
                                        <label for="">File</label>
                                    </div>
                                    <input type="text" name="old_file" hidden id="" value="{{$data->file}}">
                                    <div class="col-md-10 col-sm-10">
                                        <div class="upload-btn-wrapper">
                                            <button type="button" id="image-btn" class="btn btn-primary" data-input="image" data-preview="image-preview">Choose file</button>
                                            @if($data->id == null)
                                            <input type='file' onchange="readURL(this);" name="file" id="file" value="" required />
                                            @else
                                            <input type='file' onchange="readURL(this);" name="file" id="file" value="" />
                                            @endif
                                        </div>
                                        <div class="progress-bars" id="progress-bars">
                                            <progress id="progressBar" value="0" max="100"></progress>
                                            <h3 id="status"></h3>
                                            <p class="p-0 m-0" id="loaded_n_total" hidden></p>
                                        </div>
                                        <!-- <br> -->
                                        <span class="text-danger" id="ukuran">*Max ukuran Gambar : 2mb (.jpg, .jpeg, .png)</span>
                                        <!-- <span class="text-danger" id="ukuran2">*Max ukuran Video : 50mb<br>*Resolusi Video : 464 x 442 px (.mp4)</span> -->
                                    </div>
                                </div>
                                <div class="row" id="files">
                                    <div class="col-md-2 col-sm-2">
                                        <label>Preview</label>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <img class="img-fluid" id="image-preview" src="{{ asset(('/upload/'.$data->file == null)?"":url('/upload/'.$data->file)) }}" />

                                        <!-- <img class="img-fluid" id="image-preview" src="" /> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="text-right">
                        <button type="" class="btn btn-danger btn-cancel">Cancel</button>
                        <button type="submit" form="mainform" id="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('js')
<script src="{{asset('cms/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('cms/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('cms/plugins/sweetalert2/sweetalert2-1.all.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.btn-cancel').on("click", function() {
            window.location.href =
                "{{ url('admin/home') }}";
        })
        // if ($("#file").val() != ""){
        //     $("#image-preview").css("display","block");
        // }else{
        //     $("#image-preview").css("display","none");
        // }
    });

    function _(el) {
        return document.getElementById(el);
    }

    function readURL(input) {
        var file = document.getElementById("file").files[0];
        var formdata = new FormData();
        formdata.append("file", file);
        var ajax = new XMLHttpRequest();
        if (_("progressBar").value !== 100) {
            $('#submit').attr('disabled', 'disabled');
        } else if (_("progressBar").value = 100) {
            $('#submit').removeAttr('disabled');
        }

        if (input.files[0].size > 2097152) {
            $('#file').attr('accept', '.jpg,.jpeg,.png');
            Swal.fire({
                icon: 'error',
                type: 'error',
                title: 'Oops...',
                text: 'File is too big !'
            });
            this.value = "";
        } else if (input.files[0].size <= 2097152) {
            $('#file').attr('accept', '.jpg,.jpeg,.png');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "{{url('banner/form')}}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
                //use file_upload_parser.php from above url
                ajax.send(formdata);
                reader.onload = function(e) {
                    $('#image-preview').attr('src', e.target.result);
                    $('#image-preview').css('display', "block");
                    $('#file').attr('value', input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            }
        }
    }

    function progressHandler(event) {
        _("loaded_n_total").innerHTML = "Uploaded Success " + event.loaded + " bytes of " + event.total;
        var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = Math.round(percent);
        _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
    }

    function completeHandler(event) {
        _("status").innerHTML = event.target.responseText;
        _("progressBar").value = 100; //wil clear progress bar after successful upload
        if (_("progressBar").value !== 100) {
            $('#submit').attr('disabled', 'disabled');
        } else if (_("progressBar").value = 100) {
            $('#submit').removeAttr('disabled');
        }
    }

    function errorHandler(event) {
        _("status").innerHTML = "Upload Failed";
    }

    function abortHandler(event) {
        _("status").innerHTML = "Upload Aborted";
    }
</script>
@endpush
<style>
    #image-preview {
        max-width: 855px;
        max-height: 300px;
    }

    #video-preview {
        max-width: 100%;
        max-height: 100%;
    }

    input[type=file] {
        padding: 10px;
    }

    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .upload-btn-wrapper input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

    .items-top {
        display: none !important;
    }

    #progressBar {
        border-radius: 0 !important;
        height: 12px !important;
        width: 300px !important;
        margin-top: 5px !important;
    }
</style>