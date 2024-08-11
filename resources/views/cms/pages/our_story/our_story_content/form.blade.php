@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Our Story</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Our Story</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-body">
                    <form action="{{url('admin/our-story/content/').'/'.$id_parent.'/form'}}" enctype="multipart/form-data" method="POST" id="mainform">
                        {{ csrf_field() }}
                        <input type="text" name="id" value="{{$data->id}}" hidden />
                        <div class="row mb-3">
                            <div class="col-md-2 col-sm-2">
                                <label for="">Country</label>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <input class="form-control" type="text" name="country" id="country" value="{{$data->country}}" required>
                                {{-- <input class="form-control" type="text" name="name" id="name" value="{{$data->name}}" required> --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2 col-sm-2">
                                <label for="">Top Description</label>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <textarea class="form-control" name="top_description" id="top_description" cols="30" rows="10">{{$data->top_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2 col-sm-2">
                                <label for="">Description</label>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$data->description}}</textarea>
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
     var konten = document.getElementById("top_description");
     var konten2 = document.getElementById("description");
    CKEDITOR.replace(konten, {
        language: 'en-gb',

    });
    CKEDITOR.replace(konten2, {
        language: 'en-gb',

    });
    CKEDITOR.config.allowedContent = true;

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
</script>
@endpush
