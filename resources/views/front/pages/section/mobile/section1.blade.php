<a class="navJump" name="mobile-section1" id="mobile-section1"></a>
<div class="content" style="padding: 5vw 5px ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 px-0">
                <img class="position-relative vertical-center line" src="{{asset('/images/Line.png')}}" alt="" style="width: 100%; height: .5px;">
            </div>
            <div class="col-8">
                <h6 class="pt-4 title1" style="font-size: 20px">Our Story</h6>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mobile-voyage">
            <div class="text-center position-relative" style="line-height: 1;margin-top: 18vw;">
                {{-- <i class="bitter-italic-light" style="font-size: 4rem">{!! $our_story? $our_story->title1: 'A VOYAGE ACROSS' !!}</i>
                <h3 class="text-regular" style="font-size: 4rem">{!! $our_story? $our_story->title2: 'SEAS & CONTINENTS' !!}</h3> --}}
                <h2><i>{!! $our_story? $our_story->title1: 'A VOYAGE ACROSS' !!}</i><br><b>{!! $our_story? $our_story->title2: 'SEAS & CONTINENTS' !!}</b></h2>
            </div>
        </div>
        <div class="text-center position-relative map-back">
            <img class="position-absolute map" src="{{asset('/images/ma.png')}}" alt="" style="width: 85%;height:auto ; left: 3%;bottom: 8%">
            <div class="position-absolute pointer-1">
                <img class="position-absolute point point-1" id="point-1" src="{{asset('images/point.png')}}" width="10px" alt=""> 
                <img class="position-absolute mobile-point-sub-1" src="{{asset('images/point_sub.png')}}" width="55px" alt=""> 
                <label class="position-absolute mobile-label-point-1 text-center">Singapore</label> 
            </div>
            <div class="position-absolute pointer-2">
                <img class="position-absolute point point-2" src="{{asset('images/point.png')}}" width="10px" alt=""> 
                <img class="position-absolute mobile-point-sub-2" src="{{asset('images/point_sub.png')}}" width="55px" alt=""> 
                <label class="position-absolute mobile-label-point-2 text-center">Middle East</label> 
            </div>
            <div class="position-absolute pointer-3">
                <img class="position-absolute point point-3" src="{{asset('images/point.png')}}" alt="" width="10px"> 
                <img class="position-absolute mobile-point-sub-3" src="{{asset('images/point_sub.png')}}" alt=""> 
                <label class="position-absolute mobile-label-point-3 text-center">North Africa</label> 
            </div>
        </div>
        <div class="mobile-desc text-center" style="margin-top: 3vh; padding-inline: 16vw">
            <h6>{{ $our_story? $our_story->top_desc1 : 'ANIBA in hebrew means' }}</h6>
            <h1><b><i>{!! $our_story? $our_story->top_desc2 : '‘Here I come ’' !!}</i></b></h1>
            {!! $our_story? $our_story->desc : '<p style="font-size: 16px;">It is a reinvention of the best from around the world —<br><br>
                A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey —<br><br>

                A harmonious play of flavours between east and west.</p>' !!}
            {{-- <p class="" style="font-size: 18px"> {!! $our_story? $our_story->top_desc1: 'ANIBA in hebrew means' !!}</p> --}}
            {{-- <h4 class="text-regular" style="font-size: 69px">{!! $our_story? $our_story->top_desc2: "‘Here I come’" !!}</h4> --}}
            <!-- <p class="desc" style="font-size: 42px">It is a reinvention of the best from around the world —<br><br>
                A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey —<br><br>
                
                A harmonious play of flavours between east and west.</p> -->
                {{-- <div class="desc" style="font-size: 42px">
                    {!! $our_story? $our_story->desc : '<p>It is a reinvention of the best from around the world —<br><br>
                                A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey —<br><br>

                                A harmonious play of flavours between east and west.</p>' !!}
                </div> --}}
        </div>
        <div class="text-center mt-4" style="padding: 0 16vw; margin-bottom: 16vh">
            <a href="#mobile-section5" class="btn text-white border-white bg-transparent rounded-pill book-voyage position-relative" style="font-size: 5vw">BOOK YOUR VOYAGE NOW</a>
        </div>
       
    </div>
</div>