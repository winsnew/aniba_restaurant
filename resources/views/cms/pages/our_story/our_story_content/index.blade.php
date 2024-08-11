@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Content</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/admin/our-story')}}">Our Story</a></li>
                        <li class="breadcrumb-item">Content</li>
                    </ol>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header d-flex">
                    <h4 class="card-title flex-fill">Table Content</h4>
                    <a href="{{url('admin/our-story/content/').'/'.$id_parent.'/form'}}" class="btn btn-sm btn-primary p-2"><i class="fa fa-plus"></i></a>

                    {{-- <a href="{{url('admin/home/our-story/form')}}" class="btn btn-sm btn-success p-2"><i class="fa fa-plus"></i></a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="main-table" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th>Country</th>
                                    <th>Top Description</th>
                                    <th>Description</th>
                                    <th style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if(count($our_story_content)){
                                foreach ($our_story_content as $our_story_content) : ?>
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$our_story_content->country}}</td>
                                        <td>{{html_entity_decode(strip_tags($our_story_content->top_description))}}</td>
                                        <td>{{html_entity_decode(strip_tags($our_story_content->description))}}</td>
                                        <td colspan="2"><a href="{{url(('admin/our-story/content/edit'), $our_story_content->id)}}"><button class="btn btn-primary" type="submit">Edit</button></a>
                                            <a class="btn btn-danger btn-delete" data-id="{{$our_story_content->id}}" data-title="{{$our_story_content->title}}" type="submit" href="{{url(('admin/home/our_story/delete'),$our_story_content->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; 
                                }else{ ?>
                                    <tr>
                                        <td colspan="5" class="text-center">No data available in table</td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')

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