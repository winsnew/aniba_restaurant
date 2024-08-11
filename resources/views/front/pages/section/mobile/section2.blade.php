<a class="navJump" name="mobile-section2" id="mobile-section2"></a>
<div class="content" style="padding-top: 10vw">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 px-0">
                <img class="position-relative vertical-center line2" src="{{asset('/images/Line2.png')}}" alt="" style="width: 100%; height: .5px;">
            </div>
            <div class="col-8">
                <h6 class="pt-4 text-brown title2" style="font-size: 20px">Our Chefs</h6>
            </div>
        </div>
    </div>
    <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
        @if(isset($background[2][2]))
        <div class="accordion-item accor-item-1 chef-1 position-relative" style="border: none !important; background: url('/storage/{{ $background[2][2]->url.'?v='.time() }}'); background-size: 148%; background-repeat: no-repeat;">
        @else
        <div class="accordion-item accor-item-1 chef-1 position-relative" style="border: none !important; background: url('/images/mobile-chef.jpg'); background-size: 148%; background-repeat: no-repeat;">
        @endif
            <div class="container-fluid layers">
                <div class="w-50 ms-4 position-relative" style="padding-top: 16vw">
                    <!-- <h3 class="chefs-text text-brown" style="font-size: 90px;line-height: 81px; letter-spacing: 5%;transition:.3s;"><b>MEIR<br> ADONI</b></h3> -->
                    <h3 class="chefs-text text-brown" style="font-size: 34px; line-height: 32px;transition:.3s;"><b>{{ $chef->has(1)? $chef[1][0]->name: 'MEIR ADONI' }}</b></h3>
                    <i class="chefs-text text-brown" style="letter-spacing: 5%;transition:.3s"><b>{{ $chef->has(1)? $chef[1][0]->position: 'Chef' }}</b></i>
                    <!-- <p class="quote text-third" style="font-size:34px;padding: 3rem 3.8rem 0px 0rem;line-height: 1.2;transition:.3s"><i>‘The realization that i've touched someone's soul through my creation...that means the world to me’</i></p> -->
                    <div class="quote text-third" style="padding-top: 1.5rem;transition:.3s;line-height: 1.2; font-size: 14px;">
                        <!-- <i>‘The realization that i've touched someone's soul through my creation...that means the world to me’</i> -->
                            <i>{!! $chef->has(1)? $chef[1][0]->quote_mobile : "<p>‘The realization that i've touched someone's soul through my creation...that means the world to me’</p>" !!}</i>
                    </div>
                </div>
                <div class="accordion-header" id="panelsStayOpen-headingOne">
                    <div class="accordion-button bg-transparent w-15" style="height:25vw;box-shadow: none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <h4 class="bitter-italic chefs-text text-brown position-relative btn-accor" style="transition:.3s"><b>+</b></h4>
                    </div>
                </div>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body position-relative" style="min-height: 75vw;">
                <!-- <div class="accordion-body position-relative ps-5 ms-5" style="height: 75vw"> -->
                    <div class="position-relative" style="width: 92%">
                        {{-- <p class="chefs-text text-brown chef-desc position-relative" style="font-size: 39px;line-height: 1.2; letter-spacing: 5% ;padding-right: 7rem;;transition:.3s">
                            Hailing from Israel, Chef Meir Adoni is an internationally-renowned chef, famed restauranteur, speaker and cookbook author.<br><br>
                            Always driven by innovation, Moroccan-born Israeli Chef Meir Adoni has trained in some of the world’s most progressive restaurants including Arzak, Alinea and Noma. He has since established an international footprint of acclaimed restaurants in Berlin, New York, Kiev and Tel Aviv. Aniba is Chef Adoni’s first concept with Foragers in Asia.<br><br>
                            At Aniba, Chef Adoni showcases his affinity and flair for fusing classical culinary knowledge with sophisticated culinary techniques to conjure a harmonious menu of multi-faceted and artfully-presented market-fresh sea catch and vegetable-centric dishes.
                        </p>  --}}
                        <div class="chefs-text text-brown chef-desc position-relative" style="letter-spacing: 5% ;transition:.3s; font-size: 16px; padding-right: 1.5rem;max-height: 98vw; overflow-y: auto;">
                            {!! $chef->has(1)? $chef[1][0]->bio : '<p>Hailing from Israel, Chef Meir Adoni is an internationally-renowned chef, famed restauranteur, speaker and cookbook author.<br><br>
                                Always driven by innovation, Moroccan-born Israeli Chef Meir Adoni has trained in some of the world’s most progressive restaurants including Arzak, Alinea and Noma. He has since established an international footprint of acclaimed restaurants in Berlin, New York, Kiev and Tel Aviv. Aniba is Chef Adoni’s first concept with Foragers in Asia.<br><br>
                                At Aniba, Chef Adoni showcases his affinity and flair for fusing classical culinary knowledge with sophisticated culinary techniques to conjure a harmonious menu of multi-faceted and artfully-presented market-fresh sea catch and vegetable-centric dishes.</p>' !!}
                        </div>
                    </div>
                </div>
                </div>
            </div>
            {{-- <a href="#section-1" class="backdrop-chef"></a> --}}
        </div>
        {{-- @if(isset($background[2][4]))
        <div class="accordion-item accor-item-2 chef-2 position-relative" style="border: none !important; border-radius: unset !important;  background: url('/storage/{{ $background[2][4]->url.'?v='.time() }}'); background-size: 148%; background-repeat: no-repeat;">
        @else
        <div class="accordion-item accor-item-2 chef-2 position-relative" style="border: none !important; border-radius: unset !important; background: url('/images/foto-web.png'); background-size: 148%; background-repeat: no-repeat;">
        @endif
            <div class="container-fluid layers">
                <div class="w-50 ms-4 position-relative" style="padding-top: 16vw; padding-right: 10px;">
                    <h3 class="text-light-brown chefs-text" style="font-size: 34px;line-height: 32px;transition:.3s;">
                        <b>{{ $chef->has(2)? $chef[2][0]->name : 'IDO ZARMI' }}</b>
                    </h3>
                    <i class="text-light-brown chefs-text" style="transition:.3s"><b>{{ $chef->has(2)? $chef[2][0]->position : 'Executive Chef' }}</b></i>
                    <div class="quote text-light-brown" style="padding-top: 1.5rem;transition:.3s; line-height: 1.2; font-size: 14px;">
                        <i>{!! $chef->has(2)? $chef[2][0]->quote_mobile :"<br><br><br><br>" !!}</i>
                    </div>
                </div>
                <div class="accordion-header" id="panelsStayOpen-headingOne">
                    <div class="accordion-button bg-transparent w-15" style="height:25vw;box-shadow: none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                        <h2 class="bitter-italic text-light-brown chefs-text position-relative btn-accor" style="transition:.3s"><b>+</b></h2>
                    </div>
                </div>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body position-relative" style="min-height: 75vw">
                    <div class="position-relative" style="width: 92%">
                        <div class="chefs-text text-brown chef-desc position-relative" style="font-size: 16px; letter-spacing: 5% ;padding-right: 1.5rem;;transition:.3s;max-height: 98vw; overflow-y: auto;">
                            {!! $chef->has(2)? $chef[2][0]->bio : '<p>Chef Ido Zarmi is here to offer his vast understanding of Middle Eastern gastronomy, to share his passion and knowledge of the techniques, ingredients and culture of the region. He prizes passion, knowledge, and work ethic above everything else. His goal is to always inspire people to eat and live healthier lives all while maintaining a loving and happy atmosphere. Chef Ido’s greatest goal in life is to use Middle Eastern gastronomy as a bridge between people of all cultures and backgrounds.</p>' !!}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<style>
   .accordion-button:not(.collapsed)::after,
   .accordion-button.collapsed::after{
    opacity: 0;
   }
</style>