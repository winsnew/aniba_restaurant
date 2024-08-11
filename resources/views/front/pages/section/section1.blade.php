<a class="navJump" name="section1" id="section1"></a>
<div class="content">
    <div>
        {{-- <img class="bg-img" src="./asset/area2.png" alt="" width="100%"> --}}
        <img class="bg-img" src="{{asset('images/area2.png')}}" alt="" width="100%">
    </div>
    <div class="sec">
        <div class="sec-title">
            <div style="margin-left: 5vw">
                <div class="sec-title-left line"></div>
            </div>
            <div>
                <div class="sec-title-right text voyage">
                    <!-- <h2>A VOYAGE ACROSS<br> SEAS & CONTINENTS</h2> -->
                    <!-- <h2>{{-- $our_story? nl2br($our_story->title): 'A VOYAGE ACROSS<br> SEAS & CONTINENTS' --}}</h2> -->
                    <h2><i>{!! $our_story? $our_story->title1: 'A VOYAGE ACROSS' !!}</i><br><b>{!! $our_story? $our_story->title2: 'SEAS & CONTINENTS' !!}</b></h2>
                </div>
                {{-- <h3 class="text voyage">A VOYAGE ACROSS <span style="font-weight: 500;">SEAS & CONTINENTS</span></h2> --}}
            </div>
        </div>
        <div class="sec-content">
            <div class="sec-left">
                <div class="sec-left-text story-text">
                    <h6>{{ $our_story? $our_story->top_desc1 : 'ANIBA in hebrew means' }}</h6>
                    {{-- <div class="sec-left-text-title">‘Here I come’</div> --}}
                    <h2><b><i>{!! $our_story? $our_story->top_desc2 : '‘Here I come ’' !!}</i></b></h2>
                    <div>
                        <!-- It is a reinvention of the best from around the world —<br><br>
                        A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey —<br><br>

                        A harmonious play of flavours between east and west. -->
                        {!! $our_story? $our_story->desc : '<p>It is a reinvention of the best from around the world —<br><br>
                        A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey —<br><br>

                        A harmonious play of flavours between east and west.</p>' !!}
                    </div>
                </div>
            </div>
            <div class="sec-right">
                <img class="sec-map map"  src="{{asset('images/map.png')}}" alt="">
                {{-- <img class="sec-map" src="./asset/map.png" alt=""> --}}
                <div class="sec-right-dot">
                    <div style="flex: 25%;">
                        <img class="sec-right-dot-1 point point-3" src="{{asset('images/dot.png')}}" alt="">
                        <div>
                            <img class="sec-right-dot-trans-1 point_sub-3" src="{{asset('images/dot_trans.png')}}" alt="">
                            <div class="sec-right-dot-text-1 label-point-3">North Africa</div>
                        </div>
                    </div>
                    <div style="flex: 35%;">
                        <img class="sec-right-dot-2 point point-2" src="{{asset('images/point.png')}}" alt="">
                        <div>
                            <img class="sec-right-dot-trans-2 point_sub-2" src="{{asset('images/dot_trans.png')}}" alt="">
                            <div class="sec-right-dot-text-2 label-point-2">Middle East</div>
                        </div>
                    </div>
                    <div style="flex: 40%;">
                        <img class="sec-right-dot-3 point point-1" src="{{asset('images/point.png')}}" alt="">
                        <div>
                            <img class="sec-right-dot-trans-3 point_sub-1" src="{{asset('images/dot_trans.png')}}" alt="">
                            <div class="sec-right-dot-text-3 label-point-1">Singapore</div>
                            <div class="position-relative" style="width: 43%">
                                <a class="book-button text-decoration-none text-center text-white border-white py-2 px-3 bg-transparent rounded-pill position-absolute sec5" href="#section5" style="font-weight: 700;">BOOK YOUR VOYAGE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>       
    </div>
</div>