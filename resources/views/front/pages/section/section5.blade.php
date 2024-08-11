<a class="navJump" name="section5" id="section5"></a>
@if(isset($background[5][1]))
    @if($background[5][1]->type == 1)
    <div class="h-100" style="background: url('/storage/{{ $background[5][1]->url.'?v='.time() }}'); background-size: cover;">
    @else
    <div class="h-100" style="background: {{ $background[5][1]->url }}">
    @endif
@else
    <div class="h-100" style="background: url('/images/bg-sec3.png'); background-size: cover;">
@endif
    <div class="layer h-100">
        <div class="content" style="top: 40%;position: relative;">
            <div class="container">
                <div class="row mx-5">
                    <div class="col-7 col-lg-7 col-md-7 col-sm-7">
                        <div class="text-start">
                            <img class="line7" src="{{asset('images/Line.png')}}" alt="" width="0">
                        </div>
    
                    </div>
                    <div class="col-5 col-lg-5 col-md-5 col-sm-5">
                        <i class="section5-content text text-start text-light-brown1" style="font-size: 38px;"><b>LUNCH & DINNER</b></i>
                        <div class="text-white section5-content text-start ms-4 mt-4 ps-2" style="font-size: 18px;line-height: 34px" style="padding: 5vw 0;">
                            <!-- <p class="mb-0 ps-2"><b>Sunday to Thursday :</b></p>
                            <p class="mb-4 ps-2">3PM - 12AM</p>
                            <p class="mb-0 ps-2"><b>Friday :</b></p>
                            <p class="mb-4 ps-2">12PM - 6PM</p>
                            <p class="mb-0 ps-2"><b>Saturday Speakeasy Night :</b></p>
                            <p class="mb-4 ps-2">8PM till late</p> -->
                            {!! $opening? $opening->operation : '<p><b>Sunday to Thursday :</b><br />
                                3PM - 12AM</p>
    
                                <p><b>Friday :</b><br />
                                12PM - 5PM</p>
    
                                <p><b>Saturday Speakeasy Night :</b><br />
                                8PM till late</p>' !!}
                            <a href={!!$opening ? $opening->book_now_link : "http://www.sevenrooms.com/reservations/aniba" !!}  target="_blank" class="text-white text-start border-white mt-4 py-2 px-3 bg-transparent rounded-pill btn-book-now text-decoration-none">BOOK NOW</a>
                            <!-- <p class="mt-2 ps-2" style="font-size: 16px;">Reservations will be open soon, stay tuned for more updates.</p> -->
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>