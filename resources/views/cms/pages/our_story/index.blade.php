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
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <!-- Form Title -->
                    <form id="form-story-title">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-2">Title 1</label>
                            <div class="col-6 input-group">
                                <input type="text" class="form-control" name="title1" placeholder="Title" value="{{ $our_story? $our_story->title1 : 'A VOYAGE ACROSS' }}" readonly>
                                <!-- <textarea name="title" class="form-control" id="input_story_title" cols="30" rows="2.5" readonly>{{ $our_story? $our_story->title : "A VOYAGE ACROSS\nSEAS & CONTINENTS" }}</textarea> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-2">Title 2</label>
                            <div class="col-6 input-group">
                                <input type="text" name="title2" class="form-control" value="{{ $our_story? $our_story->title2: 'SEAS & CONTINENTS' }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-2">Top Description 1</label>
                            <div class="col-6">
                                <input type="text" class="form-control" name="top_desc_1" id="" value="{{ $our_story? $our_story->top_desc1 : 'ANIBA in hebrew means' }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-2">Top Description 2</label>
                            <div class="col-6">
                                <input type="text" class="form-control" name="top_desc_2" id="" value="{{ $our_story? $our_story->top_desc2 : "‘Here I come ’" }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-2">Description</label>
                            <div class="col-6">
                                <textarea name="desc" id="desc" cols="30" rows="10" class="form-control" readonly>

                                </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                <button type="submit" form="form-story-title" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                            </div>
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
    var desc = document.getElementById('desc')
    CKEDITOR.replace(desc, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.desc.setData(`{!! $our_story? $our_story->desc: '<p>It is a reinvention of the best from around the world —<br><br>

A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey —<br><br>

A harmonious play of flavours between east and west.</p>' !!}`)

    // Enable Edit Title
    $('#form-story-title button.edit').click(function() {
        // $('#form-story-title textarea[name="title"]').attr('readonly', false)
        $('#form-story-title input[name="title1"]').attr('readonly', false)
        $('#form-story-title input[name="title2"]').attr('readonly', false)
        $('#form-story-title input[name="top_desc_1"]').attr('readonly', false)
        $('#form-story-title input[name="top_desc_2"]').attr('readonly', false)
        // $('#form-story-title textarea[name="desc"]').attr('readonly', false)
        $('#form-story-title button[type="submit"]').css('display', 'block')
        $('#form-story-title button.cancel').css('display', 'block')

        CKEDITOR.instances.desc.setReadOnly(false)
        CKEDITOR.instances.desc.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.desc.execCommand('toolbarCollapse')
        $(this).css('display', 'none')
    })

    // Cancel Edit Title
    $('#form-story-title button.cancel').click(function() {
        // $('#form-story-title textarea[name="title"]').attr('readonly', true)
        $('#form-story-title input[name="title1"]').attr('readonly', true)
        $('#form-story-title input[name="title2"]').attr('readonly', true)
        $('#form-story-title input[name="top_desc_1"]').attr('readonly', true)
        $('#form-story-title input[name="top_desc_2"]').attr('readonly', true)
        $('#form-story-title textarea[name="desc"]').attr('readonly', true)
        // $('#form-story-title textarea[name="title"]').val(`{!! $our_story? $our_story->title : 'A VOYAGE ACROSS\nSEAS & CONTINENTS' !!}`)
        $('#form-story-title input[name="title1"]').val('{{ $our_story? $our_story->title1 : "A VOYAGE ACROSS" }}')
        $('#form-story-title input[name="title2"]').val('{!! $our_story? $our_story->title2 : "SEAS & CONTINENTS" !!}')
        $('#form-story-title input[name="top_desc_1"]').val('{{ $our_story? $our_story->top_desc1 : "ANIBA in hebrew means" }}')
        $('#form-story-title input[name="top_desc_2"]').val('{{ $our_story? $our_story->top_desc2 : "‘Here I come ’" }}')

        CKEDITOR.instances.desc.destroy(true)
        CKEDITOR.replace(desc, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.instances.desc.setData(`{!! $our_story? $our_story->desc: '<p>It is a reinvention of the best from around the world —<br><br>

        A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey —<br><br>

        A harmonious play of flavours between east and west.</p>' !!}`)

        $('#form-story-title button[type="submit"]').css('display', 'none')
        $('#form-story-title button.edit').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Submit Title
    $('#form-story-title').submit(function(event) {
        event.preventDefault()
        var form = $('#form-story-title')
        // var title = form.find('textarea[name="title"]').val()
        var title1 = form.find('input[name="title1"]').val()
        var title2 = form.find('input[name="title2"]').val()
        var top_desc1 = form.find('input[name="top_desc_1"]').val()
        var top_desc2 = form.find('input[name="top_desc_2"]').val()
        // var desc = form.find('textarea[name="desc"]').val()
        var desc = CKEDITOR.instances.desc.getData()
        var token = $(this).children('input[name="_token"]').val()
        $.ajax({
            url: "{{ route('edit_story_title') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: {
                "title1": title1,
                "title2": title2,
                "top_desc1": top_desc1,
                "top_desc2": top_desc2,
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
</script>
@endpush
<style>
    table td {
        padding: 5px;
    }

    table img,
    table video {
        width: 100px;
        height: 60px;
    }
</style>