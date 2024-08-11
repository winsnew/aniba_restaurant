<a class="navJump" name="section6" id="section6"></a>
@if(isset($background[6][2]))
    @if($background[6][2]->type == 1)
    <div class="content text-start" style="background: url('/storage/{{ $background[6][2]->url.'?v='.time() }}'); background-size: cover;">
    @else
    <div class="content text-start" style="background-color: {{ $background[6][2]->url }};">
    @endif
@else
<div class="content text-start" style="background-color: #E9E0D9">
@endif
    <div class="container position-relative">
        
        <div class="row">
            <div class="position-absolute" style="top: 35%;-ms-transform: translateY(-35%);transform: translateY(-35%);padding-left:5vw">
                <img class="line8" src="{{asset('images/Line2.png')}}"  alt="" style="max-width: 100%">
            </div>
            <div class="position-absolute" style="z-index: 10">
                <!-- <h2 class="text-center title-sec6" style="width: 35vw; color: #B79C7D; top: 8vw;right: 15vw; position: absolute;left: 30%;transform: translateX(-30%);">
                    <b>“I don’t know where I’m going <i>but I’m on my way.</i>”</b>
                </h2> -->
                <div class="text-center title-sec6" style="width: 35vw; top: 8vw;right: 15vw; position: absolute;left: 30%;transform: translateX(-30%);">
                    {!! $private_event->has(1)? $private_event[1][0]->title : '<h2 style="color: #B79C7D;"><b>“I don’t know where I’m going <i>but I’m on my way.</i>”</b></h2>' !!}
                </div>
            </div>
            <div class="col-6 col-lg-6 col-sm-6 position-relative">
                <div class="pt-5 mt-4" style="padding-left:10vw">
                    <img class="position-relative image-sec6" src="{{ isset($background[6][1])? asset('storage/'.$background[6][1]->url.'?v='.time()): asset('images/image_private.jpg') }}" alt="" style="width: 35vw">
                </div>
                <div class="pt-4 py-5 text-sec6" style="width: 33vw ;margin: 0;position: absolute;bottom: 0;padding-left:10vw ;left: 15%;transform: translateX(-15%);">
                    <div class="text-white">
                        <!-- <h5>OUR PRIVATE  DINING ROOM</h5>
                        <p>For a exclusive dining experience, book our private dining room, which sits up to 16 pax — Only for you and your guests.</p> -->
                        {!! $private_event->has(2)? $private_event[2][0]->title: '<h5>OUR PRIVATE  DINING ROOM</h5>' !!}
                        {!! $private_event->has(2)? $private_event[2][0]->description: '<p>For a exclusive dining experience, book our private dining room, which sits up to 16 pax — Only for you and your guests.</p>' !!}
                    </div>
                    <a class="text-white border-white py-2 px-3 bg-transparent rounded-pill btn-book-now text-decoration-none" href="mailto:hello@aniba.com.sg" target="_blank">BOOK NOW</a>

                </div>
            </div>

            <div class="col-6 col-lg-6 col-sm-6 position-relative">
                <div class=" text-sec6" style="width: 30vw ;margin: 3vw 6vw;position: absolute;top: 35%;-ms-transform: translateY(-35%);transform: translateY(35%);">
                    <!-- <p class="text-brown">At ANIBA, we offer a range of bespoke options for larger group dining or private events including access to our private dining room, main dining area, and the restaurant in its entirety. For more information, please contact us at hello@aniba.com.sg.</p> -->
                    <div class="text-brown">
                        {!! $private_event->has(1)? $private_event[1][0]->description: '<p>At ANIBA, we offer a range of bespoke options for larger group dining or private events including access to our private dining room, main dining area, and the restaurant in its entirety. For more information, please contact us at hello@aniba.com.sg.</p>' !!}
                    </div>
                    <a href="{{ $private_event->has(1)? $private_event[1][0]->contact_us_link : 'https://foragerspteltd.tripleseat.com/party_request/27871' }}" target="_blank" class="btn text-brown text-regular border-brown py-2 px-3 bg-transparent rounded-pill btn-contact-us" >CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
</div>