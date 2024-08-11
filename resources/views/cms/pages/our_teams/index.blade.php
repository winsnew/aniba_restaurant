@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Our Teams</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- Chef -->
            <div class="card">
                <div class="card-header">
                    <p class="card-title">Team #1</p>
                    <div class="card-tools my-auto">
                        <button type="button" class="btn btn-outline-info" style="text-decoration: none;" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form_team1">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Name</label>
                                    <div class="col">
                                        <input type="text" name="name" class="form-control" value="{{ $team1? $team1->name: 'SHIR CARASSO' }}" placeholder="Name" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Position</label>
                                    <div class="col">
                                        <input type="text" name="position" class="form-control" value="{{ $team1? $team1->position: 'General Manager' }}" placeholder="Position" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Biography</label>
                                    <div class="col">
                                        <textarea name="" id="bio_team1" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Quote Mobile</label>
                                    <div class="col">
                                        <textarea name="" id="quote_team1" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                <button type="submit" form="form_team1" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <form id="form_img_team1_desktop" class="col">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label d-block">Image Desktop</label>
                                        <span>size (545 x 874)</span>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="submit" form="form_img_team1_desktop" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </div>
                                <input type="file" class="mt-3" name="" id="" disabled>
                                <img class="card-img mt-3" src="{{ $imageTeam->has(1)? asset('/storage/'.$imageTeam[1]->url.'?v='.time()) : asset('/images/team1.jpg?v='.time()) }}" alt=" Desktop">
                            </div>
                        </form>
                        <form id="form_img_team1_mobile" class="col">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label d-block">Image Mobile</label>
                                        <span>size (545 x 874)</span>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="submit" form="form_img_team1_mobile" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </div>
                                <input type="file" class="mt-3" name="" id="" disabled>
                                <img class="card-img mt-3" src="{{ $imageTeam->has(2)? asset('/storage/'.$imageTeam[2]->url.'?v='.time()) : asset('/images/team1.jpg?v='.time()) }}" alt="Mobile">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Executive Chef -->
            <div class="card">
                <div class="card-header">
                    <p class="card-title">Team #2</p>
                    <div class="card-tools my-auto">
                        <button type="button" class="btn btn-outline-info" style="text-decoration: none;" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form_team2">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Name</label>
                                    <div class="col">
                                        <input type="text" name="name" class="form-control"  value="{{ $team2? $team2->name: 'SYAFIQ BAHAR' }}" placeholder="Name" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Position</label>
                                    <div class="col">
                                        <input type="text" name="position" class="form-control"  value="{{ $team2? $team2->position: 'Bar Manager' }}" placeholder="Position" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Biography</label>
                                    <div class="col">
                                        <textarea name="" id="bio_team2" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Quote Mobile</label>
                                    <div class="col">
                                        <textarea name="" id="quote_team2" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                <button type="submit" form="form_team2" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <form id="form_img_team2_desktop" class="col">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label d-block">Image Desktop</label>
                                        <span>size (545 x 874)</span>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="submit" form="form_img_team2_desktop" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </div>
                                <input type="file" class="mt-3" name="" id="" disabled>
                                <img class="card-img mt-3" src="{{ $imageTeam->has(3)? asset('/storage/'.$imageTeam[3]->url.'?v='.time()) : asset('/images/team2.jpg?v='.time()) }}" alt=" Desktop">
                            </div>
                        </form>
                        <form id="form_img_team2_mobile" class="col">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label d-block">Image Mobile</label>
                                        <span>size (545 x 874)</span>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="submit" form="form_img_team2_mobile" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </div>
                                <input type="file" class="mt-3" name="" id="" disabled>
                                <img class="card-img mt-3" src="{{ $imageTeam->has(4)? asset('/storage/'.$imageTeam[4]->url.'?v='.time()) : asset('/images/team2.jpg?v='.time()) }}" alt="Mobile">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Background desktop --}}
            <div class="card">
                <div class="card-header">
                    <p class="card-title">Background Desktop</p>
                    <div class="card-tools my-auto">
                        <button type="button" class="btn btn-outline-info" style="text-decoration: none;" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" role="tablist">
                            @if($imageTeam->has(5))
                            <button class="nav-link {{ $imageTeam[5]->type == 1 ? 'active' : ''  }}" data-toggle="tab" data-target="#bg-image" type="button" role="tab" aria-controls="bg-image" aria-selected="true">Image</button>
                            <button class="nav-link {{ $imageTeam[5]->type == 2 ? 'active' : ''  }}" data-toggle="tab" data-target="#bg-color" type="button" role="tab" aria-controls="bg-color" aria-selected="false">Color</button>
                            @else
                            <button class="nav-link" data-toggle="tab" data-target="#bg-image" type="button" role="tab" aria-controls="bg-image" aria-selected="true">Image</button>
                            <button class="nav-link active" data-toggle="tab" data-target="#bg-color" type="button" role="tab" aria-controls="bg-color" aria-selected="false">Color</button>
                            @endif
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        @if($imageTeam->has(5))
                        <div class="tab-pane fade my-3 {{ $imageTeam[5]->type == 1 ? 'show active' : '' }}" id="bg-image" role="tabpanel" aria-labelledby="bg-image-tab">
                        @else
                        <div class="tab-pane fade my-3" id="bg-image" role="tabpanel" aria-labelledby="bg-image-tab">
                        @endif
                            <div class="row">
                                <form id="form_img_desktop" class="col-7">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label d-block">Background Image</label>
                                                <span>size (1351 x 1583)</span>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                                <button type="submit" form="form_img_desktop" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                            </div>
                                        </div>
                                        <input type="file" class="mt-3" name="" id="" disabled>
                                        @if($imageTeam->has(5))
                                            @if($imageTeam[5]->type == 1)
                                                <img class="card-img mt-3" src="{{ asset('storage/'.$imageTeam[5]->url.'?v='.time()) }}" alt="Background Desktop">
                                            @else
                                                <img class="card-img mt-3" src="https://placehold.co/1512x982" alt="Background Desktop">
                                            @endif
                                        @else
                                            <img class="card-img mt-3" src="https://placehold.co/1512x982" alt="Background Desktop">
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($imageTeam->has(5))
                        <div class="tab-pane fade my-3 {{ $imageTeam[5]->type == 2 ? 'show active' : '' }}" id="bg-color" role="tabpanel" aria-labelledby="bg-color-tab">
                        @else
                        <div class="tab-pane fade my-3 show active" id="bg-color" role="tabpanel" aria-labelledby="bg-color-tab">
                        @endif
                            <form id="form_background_color">
                                @csrf
                                <div class="row mb-4">
                                    <label class="col-form-label col-2">Background Color</label>
                                    <div class="col-5">
                                        <div class="input-group">
                                            @if($imageTeam->has(5))
                                                @if($imageTeam[5]->type == 2)
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="{{ $imageTeam[5]->url }}" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="{{ $imageTeam[5]->url }}" disabled>
                                                </div>
                                                @else
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#322A25" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="#322A25" disabled>
                                                </div>
                                                @endif
                                            @else
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="#322A25" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="#322A25" disabled>
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
                                    @if($imageTeam->has(5))
                                        @if($imageTeam[5]->type == 2)
                                            <div class="col-7">
                                                <div class="preview_desktop" style="background-color: {{ $imageTeam[5]->url }}; width: 100%; height: 23vw;"></div>
                                            </div>
                                        @else
                                            <div class="col-7">
                                                <div class="preview_desktop" style="background-color: #322A25; width: 100%; height: 23vw;"></div>
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-7">
                                            <div class="preview_desktop" style="background-color: #322A25; width: 100%; height: 23vw;"></div>
                                        </div>
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
@endsection
@push('js')
<script>

    var bio_team1 = document.getElementById('bio_team1')
    var bio_team2 = document.getElementById('bio_team2')
    var quote_team1 = document.getElementById('quote_team1')
    var quote_team2 = document.getElementById('quote_team2')

    CKEDITOR.replace(bio_team1, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.bio_team1.setData(`{!! $team1? $team1->bio: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' !!}`)

    CKEDITOR.replace(bio_team2, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.bio_team2.setData(`{!! $team2? $team2->bio: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' !!}`)

    CKEDITOR.replace(quote_team1, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.quote_team1.setData(`{!! $team1? $team1->quote_mobile: '<p><i>THE MOST AMAZING & BEAUTIFUL, DEEP, TALENTED GM on EARTH and beyond.</i></p>' !!}`)

    CKEDITOR.replace(quote_team2, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.quote_team2.setData(`{!! $team2? $team2->quote_mobile: '<p><i>MIXOLOGIST</i></p>' !!}`)

    // Enable Edit Team 1
    $('#form_team1 button.edit').click(function(){
        CKEDITOR.instances.bio_team1.setReadOnly(false)
        CKEDITOR.instances.quote_team1.setReadOnly(false)
        $('#form_team1 input[name="name"]').attr('readonly', false)
        $('#form_team1 input[name="position"]').attr('readonly', false)

        CKEDITOR.instances.bio_team1.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.quote_team1.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.bio_team1.execCommand('toolbarCollapse')
        CKEDITOR.instances.quote_team1.execCommand('toolbarCollapse')
        
        $('#form_team1 button[type="submit"]').css('display', 'block')
        $('#form_team1 button.cancel').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Team 2
    $('#form_team2 button.edit').click(function(){
        CKEDITOR.instances.bio_team2.setReadOnly(false)
        CKEDITOR.instances.quote_team2.setReadOnly(false)
        $('#form_team2 input[name="name"]').attr('readonly', false)
        $('#form_team2 input[name="position"]').attr('readonly', false)

        CKEDITOR.instances.bio_team2.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.quote_team2.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.bio_team2.execCommand('toolbarCollapse')
        CKEDITOR.instances.quote_team2.execCommand('toolbarCollapse')
        
        $('#form_team2 button[type="submit"]').css('display', 'block')
        $('#form_team2 button.cancel').css('display', 'block')
        $(this).css('display', 'none')
    })
    
    // Enable Edit Team 1 Background Desktop
    $('#form_img_team1_desktop button.edit').click(function(){
        $('#form_img_team1_desktop input[type="file"]').attr('disabled', false)
        $('#form_img_team1_desktop button.cancel').css('display', 'block')
        $('#form_img_team1_desktop button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Team 1 Background mobile
    $('#form_img_team1_mobile button.edit').click(function(){
        $('#form_img_team1_mobile input[type="file"]').attr('disabled', false)
        $('#form_img_team1_mobile button.cancel').css('display', 'block')
        $('#form_img_team1_mobile button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Team 1 Background Desktop
    $('#form_img_team2_desktop button.edit').click(function(){
        $('#form_img_team2_desktop input[type="file"]').attr('disabled', false)
        $('#form_img_team2_desktop button.cancel').css('display', 'block')
        $('#form_img_team2_desktop button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Team 1 Background mobile
    $('#form_img_team2_mobile button.edit').click(function(){
        $('#form_img_team2_mobile input[type="file"]').attr('disabled', false)
        $('#form_img_team2_mobile button.cancel').css('display', 'block')
        $('#form_img_team2_mobile button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Team 1
    $('#form_team1 button.cancel').click(function(){
        $('#form_team1 input[name="name"]').attr('readonly', true)
        $('#form_team1 input[name="name"]').val("{{ $team1? $team1->name: 'SHIR CARASSO' }}")
        $('#form_team1 input[name="position"]').attr('readonly', true)
        $('#form_team1 input[name="position"]').val("{{ $team1? $team1->position: 'General Manager' }}")

        CKEDITOR.instances.bio_team1.destroy(true)
        CKEDITOR.instances.quote_team1.destroy(true)
        CKEDITOR.replace(bio_team1, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.replace(quote_team1, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.instances.bio_team1.setData(`{!! $team1? $team1->bio: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' !!}`)
        CKEDITOR.instances.quote_team1.setData(``)
        
        $('#form_team1 button[type="submit"]').css('display', 'none')
        $('#form_team1 button.edit').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Team 2
    $('#form_team2 button.cancel').click(function(){
        $('#form_team2 input[name="name"]').attr('readonly', true)
        $('#form_team2 input[name="name"]').val("{{ $team2? $team2->name: 'SYAFIQ BAHAR' }}")
        $('#form_team2 input[name="position"]').attr('readonly', true)
        $('#form_team2 input[name="position"]').val("{{ $team2? $team2->position: 'Bar Manager' }}")

        CKEDITOR.instances.bio_team2.destroy(true)
        CKEDITOR.instances.quote_team2.destroy(true)
        CKEDITOR.replace(bio_team2, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.replace(quote_team2, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.instances.bio_team2.setData(`{!! $team2? $team2->bio: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' !!}`)
        CKEDITOR.instances.quote_team2.setData(``)
        
        $('#form_team2 button[type="submit"]').css('display', 'none')
        $('#form_team2 button.edit').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Team 1 Img Desktop
    $('#form_img_team1_desktop button.cancel').click(function(){
        $('#form_img_team1_desktop input[type="file"]').attr('disabled', true)
        $('#form_img_team1_desktop button.edit').css('display', 'block')
        $('#form_img_team1_desktop button[type="submit"]').css('display', 'none')
        $('#form_img_team1_desktop input[type="file"]').val('')
        $('#form_img_team1_desktop img').attr('src', "{{ $imageTeam->has(1)? asset('/storage/'.$imageTeam[1]->url.'?v='.time()) : asset('/images/team1.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Cancel Edit Team 1 Img Mobile
    $('#form_img_team1_mobile button.cancel').click(function(){
        $('#form_img_team1_mobile input[type="file"]').attr('disabled', true)
        $('#form_img_team1_mobile button.edit').css('display', 'block')
        $('#form_img_team1_mobile button[type="submit"]').css('display', 'none')
        $('#form_img_team1_mobile input[type="file"]').val('')
        $('#form_img_team1_mobile img').attr('src', "{{ $imageTeam->has(2)? asset('/storage/'.$imageTeam[2]->url.'?v='.time()) : asset('/images/team1.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Cancel Edit Team 2 Img Desktop
    $('#form_img_team2_desktop button.cancel').click(function(){
        $('#form_img_team2_desktop input[type="file"]').attr('disabled', true)
        $('#form_img_team2_desktop button.edit').css('display', 'block')
        $('#form_img_team2_desktop button[type="submit"]').css('display', 'none')
        $('#form_img_team2_desktop input[type="file"]').val('')
        $('#form_img_team2_desktop img').attr('src', "{{ $imageTeam->has(3)? asset('/storage/'.$imageTeam[3]->url.'?v='.time()) : asset('/images/team2.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Cancel Edit Team 2 Img Mobile
    $('#form_img_team2_mobile button.cancel').click(function(){
        $('#form_img_team2_mobile input[type="file"]').attr('disabled', true)
        $('#form_img_team2_mobile button.edit').css('display', 'block')
        $('#form_img_team2_mobile button[type="submit"]').css('display', 'none')
        $('#form_img_team2_mobile input[type="file"]').val('')
        $('#form_img_team2_mobile img').attr('src', "{{ $imageTeam->has(4)? asset('/storage/'.$imageTeam[4]->url.'?v='.time()) : asset('/images/team2.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Image Preview
    // team 1 Image Preview
    $('#form_img_team1_desktop input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_team1_desktop img').attr('src', src)
    })
    $('#form_img_team1_mobile input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_team1_mobile img').attr('src', src)
    })

    // team 2 Image Preview
    $('#form_img_team2_desktop input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_team2_desktop img').attr('src', src)
    })
    $('#form_img_team2_mobile input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_team2_mobile img').attr('src', src)
    })

    // Enable Edit Background Desktop
    $('#form_img_desktop button.edit').click(function(){
        $('#form_img_desktop input[type="file"]').attr('disabled', false)
        $('#form_img_desktop button.cancel').css('display', 'block')
        $('#form_img_desktop button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Img Desktop
    $('#form_img_desktop button.cancel').click(function(){
        $('#form_img_desktop input[type="file"]').attr('disabled', true)
        $('#form_img_desktop button.edit').css('display', 'block')
        $('#form_img_desktop button[type="submit"]').css('display', 'none')
        $('#form_img_desktop input[type="file"]').val('')
        @if($imageTeam->has(5))
            @if($imageTeam[5]->type == 1)
            $('#form_img_desktop img').attr('src', "{{ asset('storage/'.$imageTeam[5]->url.'?v='.time()) }}")
            @else
            $('#form_img_desktop img').attr('src', "https://placehold.co/1512x982")
            @endif
        @else
        $('#form_img_desktop img').attr('src', "https://placehold.co/1512x982")
        @endif
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

    // Cancel Edit Background Color
    $('#form_background_color button.cancel').click(function(){
        $('#form_background_color input[type="color"]').attr('disabled', true)
        $('#form_background_color input[name="hex"]').attr('readonly', true)
        @if($imageTeam->has(5))
            @if($imageTeam[5]->type == 2)
            $('#form_background_color input[type="color"]').val('{{ $imageTeam[5]->url }}')
            $('#form_background_color input[name="hex"]').val('{{ $imageTeam[5]->url }}')
            $('#form_background_color .preview_desktop').css('background-color','{{ $imageTeam[5]->url }}')
            @else
            $('#form_background_color input[type="color"]').val('#322A25')
            $('#form_background_color input[name="hex"]').val('#322A25')
            $('#form_background_color .preview_desktop').css('background-color','#322A25')
            @endif
        @else
        $('#form_background_color input[type="color"]').val('#322A25')
        $('#form_background_color input[name="hex"]').val('#322A25')
        $('#form_background_color .preview_desktop').css('background-color','#322A25')
        @endif

        $('#form_background_color button.edit').css('display', 'block')
        $('#form_background_color button[type="submit"]').css('display', 'none')
        $(this).css('display', 'none')
    })

    // Preview Background Image
    $('#form_img_desktop input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_desktop img').attr('src', src)
    })

    // Preview Background Color
    $('#form_background_color input[type="color"]').change(function(e){
        var color = e.target.value
        $('#form_background_color input[name="hex"]').val(color)
        $('#form_background_color .preview_desktop').css('background-color', color)
    })
    
    $('#form_background_color input[name="hex"]').on('input',function(e){
        var color = e.target.value
        $('#form_background_color input[name="color"]').val(color)
        $('#form_background_color .preview_desktop').css('background-color', color)
        $('#form_background_color .preview_mobile').css('background-color', color)
    })

    // Team 1 Submit
    $('#form_team1').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var name = $(this).find('input[name="name"]').val()
        var position = $(this).find('input[name="position"]').val()
        var bio = CKEDITOR.instances.bio_team1.getData()
        var quote_mobile = CKEDITOR.instances.quote_team1.getData()
        var token = $(this).find('input[name="_token"]').val()

        fd.append('name', name)
        fd.append('position', position)
        fd.append('bio', bio)
        fd.append('quote_mobile', quote_mobile)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-teams/3') }}",
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

    // Team 2 Submit
    $('#form_team2').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var name = $(this).find('input[name="name"]').val()
        var position = $(this).find('input[name="position"]').val()
        var bio = CKEDITOR.instances.bio_team2.getData()
        var quote_mobile = CKEDITOR.instances.quote_team2.getData()
        var token = $(this).find('input[name="_token"]').val()

        fd.append('name', name)
        fd.append('position', position)
        fd.append('bio', bio)
        fd.append('quote_mobile', quote_mobile)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-teams/4') }}",
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

    // Submit Team 1 Image Desktop
    $('#form_img_team1_desktop').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-teams/image/1') }}",
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

    // Submit Team 1 Image Mobile
    $('#form_img_team1_mobile').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-teams/image/2') }}",
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

    // Submit Team 2 Image Desktop
    $('#form_img_team2_desktop').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-teams/image/3') }}",
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

    // Submit Team 2 Image Mobile
    $('#form_img_team2_mobile').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-teams/image/4') }}",
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

    // Submit Img Desktop
    $('#form_img_desktop').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-teams/background/1') }}",
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
            url: "{{ url('admin/our-teams/background/2') }}",
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