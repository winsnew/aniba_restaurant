<a class="navJump" name="section2" id="section2"></a>
@if(isset($background[2][5]))
    @if($background[2][5]->type == 1)
    <div class="content text-start" style="background: url('storage/{{ $background[2][5]->url.'?v='.time() }}'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    @else
    <div class="content text-start" style="background-color: {{ $background[2][5]->url }}">
    @endif
@else
<div class="content text-start" style="background-color: #E9E0D9">
@endif
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col-6 col-lg-6 col-sm-6">
                <div class="mx-5 py-5 mt-4" style="padding-left:8vw ">
                    <h3 class="ps-5 title1 text-brown" style="width: 100px;"><b>{{ $chef->has(1)? $chef[1][0]->name: 'MEIR ADONI' }}</b></h3>
                    <h5 class="ps-5 title1 text-brown"><i>{{ $chef->has(1)? $chef[1][0]->position: 'Chef' }}</i></h5>
                    <img class="line2 position-absolute" src="{{asset('images/Line2.png')}}"  alt="" width="0" style="max-width: 32rem;z-index: 20">
                    <div class="pt-5 px-5 chef-desc1 text-brown">
                        {{-- Hailing from Israel, Chef Meir Adoni is an internationally-renowned chef, famed restauranteur, speaker and cookbook author.<br><br>
                        Always driven by innovation, Moroccan-born Israeli Chef Meir Adoni has trained in some of the world’s most progressive restaurants including Arzak, Alinea and Noma. He has since established an international footprint of acclaimed restaurants in Berlin, New York, Kiev and Tel Aviv. Aniba is Chef Adoni’s first concept with Foragers in Asia.<br><br>
                        At Aniba, Chef Adoni showcases his affinity and flair for fusing classical culinary knowledge with sophisticated culinary techniques to conjure a harmonious menu of multi-faceted and artfully-presented market-fresh sea catch and vegetable-centric dishes. --}}
                        
                        {!! $chef->has(1)? $chef[1][0]->bio : '<p>
                                Hailing from Israel, Chef Meir Adoni is an internationally-renowned chef, famed restauranteur, speaker and cookbook author.<br><br>
                                Always driven by innovation, Moroccan-born Israeli Chef Meir Adoni has trained in some of the world’s most progressive restaurants including Arzak, Alinea and Noma. He has since established an international footprint of acclaimed restaurants in Berlin, New York, Kiev and Tel Aviv. Aniba is Chef Adoni’s first concept with Foragers in Asia.<br><br>
                                At Aniba, Chef Adoni showcases his affinity and flair for fusing classical culinary knowledge with sophisticated culinary techniques to conjure a harmonious menu of multi-faceted and artfully-presented market-fresh sea catch and vegetable-centric dishes.
                            </p>' !!}
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-6 col-sm-6">
                <div class="position-relative py-5">
                    @if(isset($background[2][1]))
                        <img class="position-relative image-chefs1" src="{{asset('storage/'.$background[2][1]->url.'?v='.time())}}" alt="" style="width: 27vw">
                    @else
                        <img class="position-relative image-chefs1" src="{{asset('images/chef.jpg')}}" alt="" style="width: 27vw">
                    @endif
                    {{-- <p class="position-absolute state1 text-brown bitter-italic" style="font-size: 16px; width: 12vw;top: 8vw;right: 12vw;line-height: 18px;letter-spacing: 2px">
                       ‘The<br> 
                        realization<br> 
                        that  I've touched <br>
                        someone's <br>
                        soul through <br>
                        my creation...<br>
                        that means <br>
                        the world<br>
                        to me’</p> --}}
                    <div class="position-absolute state1 text-brown bitter-italic" style="font-size: 16px; width: 12vw;top: 8vw;right: 12vw;line-height: 18px;letter-spacing: 2px">
                       @if($chef->has(1))
                            {!! $chef[1][0]->quote !!}
                       @else
                            <p>
                            ‘The<br> 
                            realization<br> 
                            that  I've touched <br>
                            someone's <br>
                            soul through <br>
                            my creation...<br>
                            that means <br>
                            the world<br>
                            to me’</p>
                       @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row position-relative">
            <div class="col-6 col-lg-6 col-sm-6">
                <img class="line3 position-absolute" src="{{asset('images/Line2.png')}}"  alt="" width="0" style="left: 12rem;
                top: 12rem;
                max-width: 60rem;">

                <div class="mx-5 py-5 mt-4 position-relative" style="padding-left:8vw ">
                    @if(isset($background[2][3]))
                        <img class="position-relative image-chefs2" src="{{asset('storage/'.$background[2][3]->url.'?v='.time())}}" alt="" style="width: 27vw;margin-left: 10vw">
                    @else
                    <img class="position-relative image-chefs2" src="{{asset('images/foto-web.png')}}" alt="" style="width: 27vw;margin-left: 10vw">
                    @endif
                </div>
            </div>
            <div class="col-6 col-lg-6 col-sm-6">
                <div class="mx-5 py-5 mt-4" style="padding-right:8vw ">
                    <h3 class="ps-3 title2 text-brown" style="width: 100px;"><b>{{ $chef->has(2)? $chef[2][0]->name: 'IDO ZARMI' }}</b></h3>
                    <h5 class="ps-3 title2 text-regular text-brown"><i>{{ $chef->has(2)? $chef[2][0]->position: 'Executive Chef' }}</i></h5>
                    <div class="ps-3 pt-5 pe-5 chef-desc2 text-brown">
                        <!-- Chef Ido Zarmi is here to offer his vast understanding of Middle Eastern gastronomy, to share his passion and knowledge of the techniques, ingredients and culture of the region. He prizes passion, knowledge, and work ethic above everything else. His goal is to always inspire people to eat and live healthier lives all while maintaining a loving and happy atmosphere. Chef Ido’s greatest goal in life is to use Middle Eastern gastronomy as a bridge between people of all cultures and backgrounds. -->
                        {!! $chef->has(2)? $chef[2][0]->bio: '
                            <p>Chef Ido Zarmi is here to offer his vast understanding of Middle Eastern gastronomy, to share his passion and knowledge of the techniques, ingredients and culture of the region. He prizes passion, knowledge, and work ethic above everything else. His goal is to always inspire people to eat and live healthier lives all while maintaining a loving and happy atmosphere. Chef Ido’s greatest goal in life is to use Middle Eastern gastronomy as a bridge between people of all cultures and backgrounds.</p>' 
                        !!}
                    </div>
                </div>
            </div>  
        </div> --}}
    </div>
      
    
</div>