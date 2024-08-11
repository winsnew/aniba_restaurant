<a class="navJump" name="mobile-section5" id="mobile-section5"></a>
<div class="layers">
    @if(isset($background[5][2]))
        @if($background[5][2]->type == 1)
        <div class="content" style="padding-top: 10vw; background: url('/storage/{{ $background[5][2]->url.'?v='.time() }}'); background-size:cover;">
        @else
        <div class="content" style="padding-top: 10vw; background: {{ $background[5][2]->url }}">
        @endif
    @else
        <div class="content" style="padding-top: 10vw; background: url('/images/bg-mobile-sec5.png'); background-size:cover;">
    @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 px-0">
                    <img class="position-relative vertical-center line5" src="{{asset('/images/Line.png')}}" alt="" style="width: 100%; height: .5px;">
                </div>
                <div class="col-8">
                    <h6 class="pt-4 text-white title5" style="font-size: 20px">Opening Hours</h6>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-white text-center content-mobile-section5" style="font-size: 18px; letter-spacing: 5%;transition:.3s; margin-top: 4.5rem;">
                <i class="text text-center content-mobile-section5 text-light-brown1" style="letter-spacing: 5%;transition:.3s;"><b>LUNCH & DINNER</b></i>
                {{-- <p class="mb-5 ps-2"><b>Sunday to Thursday :</b></p>
                <p class="mb-5 ps-2">3PM - 12AM</p>
                <p class="mb-5 ps-2"><b>Friday :</b></p>
                <p class="mb-5 ps-2">12PM - 6PM</p>
                <p class="mb-5 ps-2"><b>Saturday Speakeasy Night :</b></p>
                <p class="mb-5 ps-2">8PM till late</p> --}}
                <div class="opening-hours" style="margin-top: 3.5rem; margin-bottom: 5rem;">
                    {!! $opening? $opening->operation : '
                        <p class="mb-4 ps-2"><b>Sunday to Thursday :</b><br />
                        3PM - 12AM</p>

                        <p class="mb-4 ps-2"><b>Friday :</b><br />
                        12PM - 5PM</p>

                        <p class="mb-4 ps-2"><b>Saturday Speakeasy Night :</b><br />
                        8PM till late</p>
                    ' !!}
                </div>
                <a href="{{ $opening? $opening->book_now_link : 'http://www.sevenrooms.com/reservations/aniba'}}" target="_blank" class="text-white text-center border-white py-2 px-3 bg-transparent rounded-pill btn-book-now text-decoration-none" style="margin-top: 5vh">BOOK NOW</a>
                <!-- <p class="mt-5 ps-2" style="font-size: 46px;">Reservations will be open soon, stay tuned for more updates.</p> -->
            </div>
        </div>
    </div>
</div>