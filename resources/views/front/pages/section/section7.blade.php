<a class="navJump" name="section7" id="section7"></a>
@if(isset($background[7][1]))
    @if($background[7][1]->type == 1)
    <div class="content h-100" style=" background: url('/storage/{{ $background[7][1]->url.'?v='.time() }}'); background-size: cover;">
    @else
    <div class="content h-100" style=" background: {{ $background[7][1]->url }};">
    @endif
@else
<div class="content h-100" style=" background: url('/images/contact_us.jpg'); background-size: cover;">
@endif
    <div class="container" style="top: 32%;position: relative;">
        <div class="row mx-5">
            <div class="col-7 col-lg-7 col-md-7 col-sm-7">
                <div class="text-start">
                    <img class="line9" src="{{asset('images/Line.png')}}" alt="" width="0">
                </div>
                <div class="section7-content text-white text-end" style="padding-top: 5vw; padding-bottom: 5vw; padding-left: 10vw; padding-right: 12vw;">
                    {{-- <h6 class="mb-4"><b>ADDRESS :</b></h6>
                    <!-- <p class="m-0">6 Battery Road #05 - 03 <br>Singapore 049909</p> -->
                    <div class="m-0">{!! $contact_us? $contact_us->address : '<p>6 Battery Road #05 - 03 <br>Singapore 049909</p>' !!}</div>
                    <h6 class="my-4"><b>HOW TO GET THERE :</b></h6>
                    <!-- <p class="m-0">For those who are coming by car, drop off is at Bonham Street. Entrance on the riverside</p> -->
                    <p class="m-0">{!! $contact_us? $contact_us->get_there : '<p>For those who are coming by car, drop off is at Bonham Street. Entrance on the riverside</p>' !!}</p>
                    <h6 class="my-4"><b>DRESS CODE :</b></h6>
                    <!-- <p class="m-0">Smart Casual, no singlet & flip flops.</p> -->
                    <div class="m-0">{!! $contact_us? $contact_us->dress_code: '<p>Smart Casual, no singlet & flip flops.</p>' !!}</div> --}}
                    {!! $contact_us? $contact_us->content: '
                            <h6><b>ADDRESS :</b></h6>

                            <div style="line-height:1;">&nbsp;</div>

                            <p>6 Battery Road #05 - 03<br />
                            Singapore 049909</p>

                            <div style="line-height:1;">&nbsp;</div>

                            <h6><b>HOW TO GET THERE :</b></h6>

                            <div style="line-height:1;">&nbsp;</div>

                            <p>For those who are coming by car, drop off is at Bonham Street. Entrance on the riverside</p>

                            <div style="line-height:1;">&nbsp;</div>

                            <h6><b>DRESS CODE :</b></h6>

                            <div style="line-height:1;">&nbsp;</div>

                            <p>Smart Casual, no singlet &amp; flip flops</p>

                    ' !!}
                </div>
            </div>
            <div class="col-5 col-lg-5 col-md-5 col-sm-5">
                <h5 class=" section7-content text text-start text-white">FOR YOUR BURNING<br> QUESTIONS:</h5>
                <form id="form_message">
                    @csrf
                    <div class="text-white section7-content" style="padding: 5vw 0;">
                        <div class="row py-2">
                            <div class="col-3 col-lg-3 col-sm-3">
                                <h6 class="px-0 pt-2 text-start">Name :</h6>
                            </div>
                            <div class="col-9 col-lg-9 col-sm-9">
                                <input type="text" name="name" class="form-control rounded-0" style="opacity: 30%">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-3 col-lg-3 col-sm-3">
                                <h6 class="px-0 pt-2 text-start">Email :</h6>
                            </div>
                            <div class="col-9 col-lg-9 col-sm-9">
                                <input type="email" name="email" class="form-control rounded-0" style="opacity: 30%">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-3 col-lg-3 col-sm-3">
                                <h6 class="px-0 pt-2 text-start">Message :</h6>
                            </div>
                            <div class="col-9 col-lg-9 col-sm-9 text-start">
                                <textarea class="form-control" name="message" id="" rows="5" style="opacity: 30%"></textarea>
                                {{-- <input type="text" class="form-control rounded-0" style="opacity: 30%"> --}}
                                <div class="text-start mt-4">
                                    <button type="submit" class="text-white border-white py-1 px-4 bg-transparent rounded-pill btn-submit" style="font-weight: 700;font-size: 12px">Submit</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>