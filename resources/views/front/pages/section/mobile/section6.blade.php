<a class="navJump" name="mobile-section6" id="mobile-section6"></a>
@if(isset($background[6][3]))
    @if($background[6][3]->type == 1)
    <div class="content" style="padding-top: 10vw; background: url('/storage/{{ $background[6][3]->url }}'); background-size: cover;">
    @else
    <div class="content" style="padding-top: 10vw; background-color: {{ $background[6][3]->url }}">
    @endif
@else
<div class="content" style="padding-top: 10vw; background-color: #e9e0d9">
@endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 px-0">
                <img class="position-relative vertical-center line6" src="{{asset('/images/Line2.png')}}" alt="" style="width: 100%; height: .5px;">
            </div>
            <div class="col-8">
                <h6 class="pt-4 text-brown title6" style="font-size: 20px">Private Events</h6>
            </div>
        </div>
    </div>
    <div class="content-mobile-section6">
        <div class="container d-flex align-items-center" style="min-height: 107vw;">
            <div class="my-4 px-5">
                {{-- <h4 class="text-brown" style="font-size: 50px;letter-spacing: 5%;line-height: 1.5">At ANIBA, we offer a range 
                of bespoke options for larger group dining or private events including access to our private dining room, main dining area, and the restaurant in its entirety. For more information, please contact us at hello@aniba.com.sg.</h4> --}}
                <div class="text-brown" style="font-size: 16px; line-height: 1.5;">
                    {!! $private_event->has(1)? $private_event[1][0]->description: '<p>At ANIBA, we offer a range of bespoke options for larger group dining or private events including access to our private dining room, main dining area, and the restaurant in its entirety. For more information, please contact us at hello@aniba.com.sg.</p>' !!}
                </div>
                <div class="mb-3" style="margin-top: 2rem;">
                    <a href="{{ $private_event->has(1)? $private_event[1][0]->contact_us_link : 'https://foragerspteltd.tripleseat.com/party_request/27871' }}" target="_blank" class="btn text-brown bg-transparent rounded-pill px-3 py-2 position-relative" style="font-size: 17px;border: 1px #322a25 solid"><b>CONTACT US</b></a>
                </div>
            </div>
        </div>
        <a class="navJump" name="mobile-section6_1" id="mobile-section6_1"></a>
        @if(isset($background[6][1]))
        <div class="our-private" style="background: url('/storage/{{ $background[6][1]->url.'?v='.time() }}'); background-size: cover; background-repeat: no-repeat;">
        @else
        <div class="our-private" style="background: url('/images/image_private.jpg'); background-size: cover; background-repeat: no-repeat;">
        @endif
            <div class="position-relative py-3">
                <div class="container-fluid">
                    {{-- <h2 class="text-center position-relative" style="padding: 24vw 8vw 0 54vw; font-size: 58px;color: #B79C7D;">
                        <b>“I don’t know where I’m going <i>but I’m on my way.</i>”</b>
                    </h2> --}}
                    <div class="text-center position-relative title6-1" style="padding: 24vw 5vw 0 34vw;">
                        {!! $private_event->has(1)? $private_event[1][0]->title: '<h2 style="color: #B79C7D;"><b>“I don’t know where I’m going <i>but I’m on my way.</i>”</b></h2>' !!}
                    </div>
                    <div class="container">
                        <div class="mx-auto" style="width: 80%; margin-top: 30vw;margin-bottom: 5vw; border-top: 1px white solid">
                            {{-- <h3 class="pt-5" style="font-size: 58px">OUR PRIVATE <br>DINING ROOM</h3> --}}
                            <div class="pt-4 title6-1" style="padding-right: 4rem">
                                {!! $private_event->has(2)? $private_event[2][0]->title : '<h5>OUR PRIVATE <br>DINING ROOM</h5>' !!}
                            </div>
                            {{-- <p class="pt-3" style="font-size: 42px" style="letter-spacing: 5%;line-height: 1.5">For a exclusive dining experience, book our private dining room, which sits up to 16 pax 
                                — Only for you and your guests.</p> --}}
                            <div class="pt-2" style="font-size: 16px; letter-spacing: 5%; line-height:1.5">
                                {!! $private_event->has(2)? $private_event[2][0]->description : '<p>For a exclusive dining experience, book our private dining room, which sits up to 16 pax 
                                    — Only for you and your guests.</p>' !!}
                            </div>
                            <div class="mt-4">
                                <a href="mailto:hello@aniba.com.sg" target="_blank" class="btn text-white bg-transparent rounded-pill px-3 py-2 position-relative" style="font-size: 16px;border: 1px white solid"><b>BOOK NOW</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .mobile-section6 a:hover{
        color: #322a25 !important;
        border-color: #322a25 !important;
    }
</style>