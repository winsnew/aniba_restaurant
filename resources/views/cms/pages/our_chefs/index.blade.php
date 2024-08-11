@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Our Chefs</h1>
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
                    <p class="card-title">Chef #1</p>
                    <div class="card-tools my-auto">
                        <button type="button" class="btn btn-outline-info" style="text-decoration: none;" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form_chef1">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Name</label>
                                    <div class="col">
                                        <input type="text" name="name" class="form-control" value="{{ ($chef1)? $chef1->name: 'MEIR ADONI' }}" placeholder="Name" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Position</label>
                                    <div class="col">
                                        <input type="text" name="position" class="form-control" value="{{ ($chef1)? $chef1->position: 'Chef' }}" placeholder="Position" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Biography</label>
                                    <div class="col">
                                        <textarea name="" id="bio_chef1" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Quote</label>
                                    <div class="col">
                                        <textarea name="" id="quote_chef1" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Quote Mobile</label>
                                    <div class="col">
                                        <textarea name="" id="quote_mobile_chef1" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                <button type="submit" form="form_chef1" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <form id="form_img_chef1_desktop" class="col">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label d-block">Image Desktop</label>
                                        <span>size (545 x 874)</span>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="submit" form="form_img_chef1_desktop" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </div>
                                <input type="file" class="mt-3" name="" id="" disabled>
                                <img class="card-img mt-3" src="{{ $imageChef->has(1)? asset('/storage/'.$imageChef[1]->url.'?v='.time()) : asset('/images/chef.jpg?v='.time()) }}" alt=" Desktop">
                            </div>
                        </form>
                        <form id="form_img_chef1_mobile" class="col">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label d-block">Image Mobile</label>
                                        <span>size (545 x 874)</span>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="submit" form="form_img_chef1_mobile" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </div>
                                <input type="file" class="mt-3" name="" id="" disabled>
                                <img class="card-img mt-3" src="{{ $imageChef->has(2)? asset('/storage/'.$imageChef[2]->url.'?v='.time()) : asset('/images/mobile-chef.jpg?v='.time()) }}" alt="Mobile">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Executive Chef -->
            <div class="card">
                <div class="card-header">
                    <p class="card-title">Chef #2</p>
                    <div class="card-tools my-auto">
                        <button type="button" class="btn btn-outline-info" style="text-decoration: none;" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form_chef2">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Name</label>
                                    <div class="col">
                                        <input type="text" name="name" class="form-control" value="{{ $chef2? $chef2->name: 'IDO ZARMI' }}" placeholder="Name" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Position</label>
                                    <div class="col">
                                        <input type="text" name="position" class="form-control" value="{{ $chef2? $chef2->position: 'Executive Chef' }}" placeholder="Position" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Biography</label>
                                    <div class="col">
                                        <textarea name="" id="bio_chef2" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Quote Mobile</label>
                                    <div class="col">
                                        <textarea name="" id="quote_mobile_chef2" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label for="" class="col-form-label col-3">Quote</label>
                                    <div class="col">
                                        <textarea name="" id="quote_chef2" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div> -->
                                <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                <button type="submit" form="form_chef2" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <form id="form_img_chef2_desktop" class="col">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label d-block">Image Desktop</label>
                                        <span>size (545 x 874)</span>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="submit" form="form_img_chef2_desktop" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </div>
                                <input type="file" class="mt-3" name="" id="" disabled>
                                <img class="card-img mt-3" src="{{ $imageChef->has(3)? asset('/storage/'.$imageChef[3]->url.'?v='.time()) : asset('/images/foto-web.png?v='.time()) }}" alt="Background Desktop">
                            </div>
                        </form>
                        <form id="form_img_chef2_mobile" class="col">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label d-block">Image Mobile</label>
                                        <span>size (545 x 874)</span>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary float-right edit"><i class="fas fa-edit"></i> Edit</button>
                                        <button type="submit" form="form_img_chef2_mobile" class="btn btn-primary float-right" style="display: none;"><i class="fas fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger mr-2 float-right cancel" style="display: none;"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </div>
                                <input type="file" class="mt-3" name="" id="" disabled>
                                <img class="card-img mt-3" src="{{ $imageChef->has(4)? asset('/storage/'.$imageChef[4]->url.'?v='.time()) : asset('/images/foto-web.png?v='.time()) }}" alt="Mobile Desktop">
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
                            @if($imageChef->has(5))
                            <button class="nav-link {{ $imageChef[5]->type == 1 ? 'active' : ''  }}" data-toggle="tab" data-target="#bg-image" type="button" role="tab" aria-controls="bg-image" aria-selected="true">Image</button>
                            <button class="nav-link {{ $imageChef[5]->type == 2 ? 'active' : ''  }}" data-toggle="tab" data-target="#bg-color" type="button" role="tab" aria-controls="bg-color" aria-selected="false">Color</button>
                            @else
                            <button class="nav-link" data-toggle="tab" data-target="#bg-image" type="button" role="tab" aria-controls="bg-image" aria-selected="true">Image</button>
                            <button class="nav-link active" data-toggle="tab" data-target="#bg-color" type="button" role="tab" aria-controls="bg-color" aria-selected="false">Color</button>
                            @endif
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        @if($imageChef->has(5))
                        <div class="tab-pane fade my-3 {{ $imageChef[5]->type == 1 ? 'show active' : '' }}" id="bg-image" role="tabpanel" aria-labelledby="bg-image-tab">
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
                                        @if($imageChef->has(5))
                                            @if($imageChef[5]->type == 1)
                                                <img class="card-img mt-3" src="{{ asset('storage/'.$imageChef[5]->url.'?v='.time()) }}" alt="Background Desktop">
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
                        @if($imageChef->has(5))
                        <div class="tab-pane fade my-3 {{ $imageChef[5]->type == 2 ? 'show active' : '' }}" id="bg-color" role="tabpanel" aria-labelledby="bg-color-tab">
                        @else
                        <div class="tab-pane fade my-3 show active" id="bg-color" role="tabpanel" aria-labelledby="bg-color-tab">
                        @endif
                            <form id="form_background_color">
                                @csrf
                                <div class="row mb-4">
                                    <label class="col-form-label col-2">Background Color</label>
                                    <div class="col-5">
                                        <div class="input-group">
                                            @if($imageChef->has(5))
                                                @if($imageChef[5]->type == 2)
                                                <input type="text" name="hex" id="" class="form-control" placeholder="Content Color" value="{{ $imageChef[5]->url }}" readonly>
                                                <div class="input-group-append mr-3">
                                                    <input type="color" name="color" class="form-control" id="" style="padding: 3px; width: 50px;" value="{{ $imageChef[5]->url }}" disabled>
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
                                    @if($imageChef->has(5))
                                        @if($imageChef[5]->type == 2)
                                            <div class="col-7">
                                                <div class="preview_desktop" style="background-color: {{ $imageChef[5]->url }}; width: 100%; height: 23vw;"></div>
                                            </div>
                                        @else
                                            <div class="col-7">
                                                <div class="preview_desktop" style="background-color: #E9E0D9; width: 100%; height: 23vw;"></div>
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-7">
                                            <div class="preview_desktop" style="background-color: #E9E0D9; width: 100%; height: 23vw;"></div>
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

    // Chef 1
    var bio_chef1 = document.getElementById('bio_chef1')
    var quote_chef1 = document.getElementById('quote_chef1')
    var quote_mobile_chef1 = document.getElementById('quote_mobile_chef1')
    
    CKEDITOR.replace(quote_chef1, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
        height: 100
    })
    CKEDITOR.replace(quote_mobile_chef1, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
        height: 100
    })
    CKEDITOR.replace(bio_chef1, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.quote_chef1.setData(`{!! $chef1? $chef1->quote: "<p>
                            ‘The<br> 
                            realization<br> 
                            that  I've touched <br>
                            someone's <br>
                            soul through <br>
                            my creation...<br>
                            that means <br>
                            the world<br>
                            to me’</p>" !!}`)
    CKEDITOR.instances.quote_mobile_chef1.setData(`{!! $chef1? $chef1->quote_mobile: "<p>‘The realization that i've touched someone's soul through my creation...that means the world to me’</p>" !!}`)
    CKEDITOR.instances.bio_chef1.setData(`{!! $chef1? $chef1->bio: "<p>
                                Hailing from Israel, Chef Meir Adoni is an internationally-renowned chef, famed restauranteur, speaker and cookbook author.<br><br>
                                Always driven by innovation, Moroccan-born Israeli Chef Meir Adoni has trained in some of the world’s most progressive restaurants including Arzak, Alinea and Noma. He has since established an international footprint of acclaimed restaurants in Berlin, New York, Kiev and Tel Aviv. Aniba is Chef Adoni’s first concept with Foragers in Asia.<br><br>
                                At Aniba, Chef Adoni showcases his affinity and flair for fusing classical culinary knowledge with sophisticated culinary techniques to conjure a harmonious menu of multi-faceted and artfully-presented market-fresh sea catch and vegetable-centric dishes.
                            </p>" !!}`)

    // Chef 2
    var bio_chef2 = document.getElementById('bio_chef2')
    var quote_mobile_chef2 = document.getElementById('quote_mobile_chef2')
    // var quote_chef2 = document.getElementById('quote_chef2')
    // CKEDITOR.replace(quote_chef2, {
    //     language: 'en-gb',
    //     allowedContent: true,
    //     toolbarCanCollapse: true,
    //     toolbarStartupExpanded: false,
    //     readOnly: true,
    //     width: '100%',
    //     height: 100
    // })
    CKEDITOR.replace(quote_mobile_chef2, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
        height: 100
    })
    CKEDITOR.replace(bio_chef2, {
        language: 'en-gb',
        allowedContent: true,
        toolbarCanCollapse: true,
        toolbarStartupExpanded: false,
        readOnly: true,
        width: '100%',
    })
    CKEDITOR.instances.quote_mobile_chef2.setData(`{!! $chef2? $chef2->quote_mobile: '' !!}`)
    CKEDITOR.instances.bio_chef2.setData(`{!! $chef2? $chef2->bio: "<p>Chef Ido Zarmi is here to offer his vast understanding of Middle Eastern gastronomy, to share his passion and knowledge of the techniques, ingredients and culture of the region. He prizes passion, knowledge, and work ethic above everything else. His goal is to always inspire people to eat and live healthier lives all while maintaining a loving and happy atmosphere. Chef Ido’s greatest goal in life is to use Middle Eastern gastronomy as a bridge between people of all cultures and backgrounds.</p>" !!}`)

    // Enable Edit Chef 1
    $('#form_chef1 button.edit').click(function(){
        CKEDITOR.instances.bio_chef1.setReadOnly(false)
        CKEDITOR.instances.quote_chef1.setReadOnly(false)
        CKEDITOR.instances.quote_mobile_chef1.setReadOnly(false)
        $('#form_chef1 input[name="name"]').attr('readonly', false)
        $('#form_chef1 input[name="position"]').attr('readonly', false)

        CKEDITOR.instances.bio_chef1.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.quote_chef1.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.quote_mobile_chef1.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.bio_chef1.execCommand('toolbarCollapse')
        CKEDITOR.instances.quote_chef1.execCommand('toolbarCollapse')
        CKEDITOR.instances.quote_mobile_chef1.execCommand('toolbarCollapse')

        CKEDITOR.instances.quote_mobile_chef1.on('key', function(event){
            if(event.data.keyCode === 13){
                console.log(event);
                event.data.domEvent.preventDefault()
            }
        })
        
        $('#form_chef1 button[type="submit"]').css('display', 'block')
        $('#form_chef1 button.cancel').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Chef 1 Background Desktop
    $('#form_img_chef1_desktop button.edit').click(function(){
        $('#form_img_chef1_desktop input[type="file"]').attr('disabled', false)
        $('#form_img_chef1_desktop button.cancel').css('display', 'block')
        $('#form_img_chef1_desktop button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Chef 1 Background mobile
    $('#form_img_chef1_mobile button.edit').click(function(){
        $('#form_img_chef1_mobile input[type="file"]').attr('disabled', false)
        $('#form_img_chef1_mobile button.cancel').css('display', 'block')
        $('#form_img_chef1_mobile button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Chef 1
    $('#form_chef1 button.cancel').click(function(){
        $('#form_chef1 input[name="name"]').attr('readonly', true)
        $('#form_chef1 input[name="name"]').val("{{ $chef1? $chef1->name: 'MEIR ADONI' }}")
        $('#form_chef1 input[name="position"]').attr('readonly', true)
        $('#form_chef1 input[name="position"]').val("{{ $chef1? $chef1->position: 'Chef' }}")

        CKEDITOR.instances.bio_chef1.destroy(true)
        CKEDITOR.instances.quote_chef1.destroy(true)
        CKEDITOR.instances.quote_mobile_chef1.destroy(true)
        CKEDITOR.replace(quote_chef1, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
            height: 100
        })
        CKEDITOR.replace(quote_mobile_chef1, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
            height: 100
        })
        CKEDITOR.replace(bio_chef1, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.instances.quote_chef1.setData(`{!! $chef1? $chef1->quote: "<p>
                            ‘The<br> 
                            realization<br> 
                            that  I've touched <br>
                            someone's <br>
                            soul through <br>
                            my creation...<br>
                            that means <br>
                            the world<br>
                            to me’</p>" !!}`)
        CKEDITOR.instances.quote_mobile_chef1.setData(`{!! $chef1? $chef1->quote_mobile: "<p>‘The realization that i've touched someone's soul through my creation...that means the world to me’</p>" !!}`)
        CKEDITOR.instances.bio_chef1.setData(`{!! $chef1? $chef1->bio: "<p>
                                Hailing from Israel, Chef Meir Adoni is an internationally-renowned chef, famed restauranteur, speaker and cookbook author.<br><br>
                                Always driven by innovation, Moroccan-born Israeli Chef Meir Adoni has trained in some of the world’s most progressive restaurants including Arzak, Alinea and Noma. He has since established an international footprint of acclaimed restaurants in Berlin, New York, Kiev and Tel Aviv. Aniba is Chef Adoni’s first concept with Foragers in Asia.<br><br>
                                At Aniba, Chef Adoni showcases his affinity and flair for fusing classical culinary knowledge with sophisticated culinary techniques to conjure a harmonious menu of multi-faceted and artfully-presented market-fresh sea catch and vegetable-centric dishes.
                            </p>" !!}`)
        
        $('#form_chef1 button[type="submit"]').css('display', 'none')
        $('#form_chef1 button.edit').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Chef 1 Img Desktop
    $('#form_img_chef1_desktop button.cancel').click(function(){
        $('#form_img_chef1_desktop input[type="file"]').attr('disabled', true)
        $('#form_img_chef1_desktop button.edit').css('display', 'block')
        $('#form_img_chef1_desktop button[type="submit"]').css('display', 'none')
        $('#form_img_chef1_desktop input[type="file"]').val('')
        $('#form_img_chef1_desktop img').attr('src', "{{ $imageChef->has(1)? asset('/storage/'.$imageChef[1]->url.'?v='.time()) : asset('/images/chef.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Cancel Edit Chef 1 Img Mobile
    $('#form_img_chef1_mobile button.cancel').click(function(){
        $('#form_img_chef1_mobile input[type="file"]').attr('disabled', true)
        $('#form_img_chef1_mobile button.edit').css('display', 'block')
        $('#form_img_chef1_mobile button[type="submit"]').css('display', 'none')
        $('#form_img_chef1_mobile input[type="file"]').val('')
        $('#form_img_chef1_mobile img').attr('src', "{{ $imageChef->has(2)? asset('/storage/'.$imageChef[2]->url.'?v='.time()) : asset('/images/mobile-chef.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Enable Edit Chef 2
    $('#form_chef2 button.edit').click(function(){
        CKEDITOR.instances.bio_chef2.setReadOnly(false)
        CKEDITOR.instances.quote_mobile_chef2.setReadOnly(false)
        $('#form_chef2 input[name="name"]').attr('readonly', false)
        $('#form_chef2 input[name="position"]').attr('readonly', false)

        CKEDITOR.instances.bio_chef2.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.quote_mobile_chef2.on('afterCommandExec', function(e){
            if(e.data.name == 'toolbarCollapse'){
                e.editor.resize('100%', e.editor.config.height, true)
            }
        })
        CKEDITOR.instances.bio_chef2.execCommand('toolbarCollapse')
        CKEDITOR.instances.quote_mobile_chef2.execCommand('toolbarCollapse')
        
        $('#form_chef2 button[type="submit"]').css('display', 'block')
        $('#form_chef2 button.cancel').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Chef 2 Background Desktop
    $('#form_img_chef2_desktop button.edit').click(function(){
        $('#form_img_chef2_desktop input[type="file"]').attr('disabled', false)
        $('#form_img_chef2_desktop button.cancel').css('display', 'block')
        $('#form_img_chef2_desktop button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Enable Edit Chef 2 Background mobile
    $('#form_img_chef2_mobile button.edit').click(function(){
        $('#form_img_chef2_mobile input[type="file"]').attr('disabled', false)
        $('#form_img_chef2_mobile button.cancel').css('display', 'block')
        $('#form_img_chef2_mobile button[type="submit"]').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Chef 2
    $('#form_chef2 button.cancel').click(function(){
        $('#form_chef2 input[name="name"]').attr('readonly', true)
        $('#form_chef2 input[name="name"]').val("{{ $chef2? $chef2->name: 'IDO ZARMI' }}")
        $('#form_chef2 input[name="position"]').attr('readonly', true)
        $('#form_chef2 input[name="position"]').val("{{ $chef2? $chef2->position: 'Executive Chef' }}")

        CKEDITOR.instances.bio_chef2.destroy(true)
        CKEDITOR.instances.quote_mobile_chef2.destroy(true)
        CKEDITOR.replace(quote_mobile_chef2, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
            height: 100
        })
        CKEDITOR.replace(bio_chef2, {
            language: 'en-gb',
            allowedContent: true,
            toolbarCanCollapse: true,
            toolbarStartupExpanded: false,
            readOnly: true,
            width: '100%',
        })
        CKEDITOR.instances.quote_mobile_chef2.setData(`{!! $chef2? $chef2->quote_mobile: '' !!}`)
        CKEDITOR.instances.bio_chef2.setData(`{!! $chef2? $chef2->bio: "<p>Chef Ido Zarmi is here to offer his vast understanding of Middle Eastern gastronomy, to share his passion and knowledge of the techniques, ingredients and culture of the region. He prizes passion, knowledge, and work ethic above everything else. His goal is to always inspire people to eat and live healthier lives all while maintaining a loving and happy atmosphere. Chef Ido’s greatest goal in life is to use Middle Eastern gastronomy as a bridge between people of all cultures and backgrounds.</p>" !!}`)

        $('#form_chef2 button[type="submit"]').css('display', 'none')
        $('#form_chef2 button.edit').css('display', 'block')
        $(this).css('display', 'none')
    })

    // Cancel Edit Chef 2 Img Desktop
    $('#form_img_chef2_desktop button.cancel').click(function(){
        $('#form_img_chef2_desktop input[type="file"]').attr('disabled', true)
        $('#form_img_chef2_desktop button.edit').css('display', 'block')
        $('#form_img_chef2_desktop button[type="submit"]').css('display', 'none')
        $('#form_img_chef2_desktop input[type="file"]').val('')
        $('#form_img_chef2_desktop img').attr('src', "{{ $imageChef->has(3)? asset('/storage/'.$imageChef[3]->url.'?v='.time()) : asset('/images/chef.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Cancel Edit Chef 2 Img Mobile
    $('#form_img_chef2_mobile button.cancel').click(function(){
        $('#form_img_chef2_mobile input[type="file"]').attr('disabled', true)
        $('#form_img_chef2_mobile button.edit').css('display', 'block')
        $('#form_img_chef2_mobile button[type="submit"]').css('display', 'none')
        $('#form_img_chef2_mobile input[type="file"]').val('')
        $('#form_img_chef2_mobile img').attr('src', "{{ $imageChef->has(4)? asset('/storage/'.$imageChef[4]->url.'?v='.time()) : asset('/images/mobile-chef.jpg?v='.time()) }}")
        $(this).css('display', 'none')
    })

    // Chef 1 Image Preview
    $('#form_img_chef1_desktop input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_chef1_desktop img').attr('src', src)
    })
    $('#form_img_chef1_mobile input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_chef1_mobile img').attr('src', src)
    })

    // Chef 2 Image Preview
    $('#form_img_chef2_desktop input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_chef2_desktop img').attr('src', src)
    })
    $('#form_img_chef2_mobile input[type="file"]').change(function(e){
        var src = URL.createObjectURL(e.target.files[0])
        $('#form_img_chef2_mobile img').attr('src', src)
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
        @if($imageChef->has(5))
            @if($imageChef[5]->type == 1)
            $('#form_img_desktop img').attr('src', "{{ asset('storage/'.$imageChef[5]->url.'?v='.time()) }}")
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
        @if($imageChef->has(5))
            @if($imageChef[5]->type == 2)
            $('#form_background_color input[type="color"]').val('{{ $imageChef[5]->url }}')
            $('#form_background_color input[name="hex"]').val('{{ $imageChef[5]->url }}')
            $('#form_background_color .preview_desktop').css('background-color','{{ $imageChef[5]->url }}')
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
    })
    
    
    // Chef 1 Submit
    $('#form_chef1').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var name = $(this).find('input[name="name"]').val()
        var position = $(this).find('input[name="position"]').val()
        var bio = CKEDITOR.instances.bio_chef1.getData()
        var quote = CKEDITOR.instances.quote_chef1.getData()
        var quote_mobile = CKEDITOR.instances.quote_mobile_chef1.getData()
        var token = $(this).find('input[name="_token"]').val()

        fd.append('name', name)
        fd.append('position', position)
        fd.append('bio', bio)
        fd.append('quote', quote)
        fd.append('quote_mobile', quote_mobile)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-chefs/1') }}",
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

    // Submit Chef 1 Image Desktop
    $('#form_img_chef1_desktop').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-chefs/image/1') }}",
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

    // Submit Chef 1 Image Mobile
    $('#form_img_chef1_mobile').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-chefs/image/2') }}",
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

    // Chef 2 Submit
    $('#form_chef2').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var name = $(this).find('input[name="name"]').val()
        var position = $(this).find('input[name="position"]').val()
        var bio = CKEDITOR.instances.bio_chef2.getData()
        var quote_mobile = CKEDITOR.instances.quote_mobile_chef2.getData()
        // var quote = CKEDITOR.instances.quote_chef2.getData()
        var token = $(this).find('input[name="_token"]').val()

        fd.append('name', name)
        fd.append('position', position)
        fd.append('bio', bio)
        fd.append('quote_mobile', quote_mobile)
        // fd.append('quote', quote)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-chefs/2') }}",
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

    // Submit Chef 2 Image Desktop
    $('#form_img_chef2_desktop').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-chefs/image/3') }}",
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

    // Submit Chef 2 Image Mobile
    $('#form_img_chef2_mobile').submit(function(e){
        e.preventDefault()
        var fd = new FormData()
        var img = $(this).find('input[type="file"]')[0].files[0]
        var token = $(this).find('input[name="_token"]').val()

        fd.append('file_img', img)
        fd.append('_token', token)

        $.ajax({
            url: "{{ url('admin/our-chefs/image/4') }}",
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
            url: "{{ url('admin/our-chefs/background/1') }}",
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
            url: "{{ url('admin/our-chefs/background/2') }}",
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