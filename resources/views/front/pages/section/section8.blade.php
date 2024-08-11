@if(count($press) > 0)
    <a class="navJump" name="section8" id="section8"></a>
    @if(isset($background[8][1]))
        @if($background[8][1]->type == 1)
        <div class="content" style="background: url('/storage/{{ $background[8][1]->url }}'); background-size: cover;">
        @else
        <div class="content" style="background: {{ $background[8][1]->url }};">
        @endif
    @else
    <div class="content">
    @endif
        <div class="container">
            <div class="pb-5 px-0" style="padding-top: 10vw;">
                <div class="row">
                    <div class="col-4 col-lg-4 col-sm-4">
                        <div class="text-start ps-5 position-relative" style="top: 100px;">
                            <img class="line8" src="{{asset('images/Line2.png')}}"  alt="" width="0">
                        </div>
                    </div>
                    <div class="col-8 col-lg-8 col-sm-8">
                        <div class="slider3 section8-content">
                            @foreach($press as $item)
                            <div class="p-3 mx-2" style="{{ count($press) <=1? 'margin-inline: 50px;': '' }}background-color: {{ $item->color }}">
                                <img class="img-fluid" src="{{asset('storage/'.$item->image)}}" alt="" style="width: 100%; height: 256px; object-fit:fit;">
                                <div class="container">
                                    <div class="text-start py-4" style="color: {{ $item->font_color }}">
                                        <h2 class="text-regular" style="display: inline-block; font-size: 3.5vh;">{{ $item->title }}</h2>
                                        <p class="text-regular">by {{ $item->publisher }}</p>
                                        {{-- <button class="border-white py-1 px-4 mb-5 bg-transparent rounded-pill btn-read-more-2" style="font-weight: 700;font-size: 12px; position: absolute; bottom: 0;">READ MORE</button> --}}
                                        <a href="{{ $item->url }}" target="_blank" class="btn py-1 px-4 bg-transparent rounded-pill btn-read-more-2" style="font-size:12px; font-weight: 700; border-width: 2px; border-style: solid; border-color: {{ $item->font_color }}; color: {{ $item->font_color }}">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="bg-brown p-3 mx-2">
                                <img class="img-fluid" src="{{asset('images/press_image.jpg')}}"  alt="">
                                <div class="container">
                                    <div class="text-start py-4">
                                        <h2 class="text-regular text-white">UNBELIEVABLE <br>DINING</h2>
                                        <p class="text-regular text-white">by TATLER</p>
                                        <button class="text-white border-white py-1 px-4 bg-transparent rounded-pill btn-read-more-2" style="font-weight: 700;font-size: 12px">READ MORE</button>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="bg-gray p-3 mx-2">
                                <img class="img-fluid" src="{{asset('images/press_image.jpg')}}"  alt="">
                                <div class="container">
                                    <div class="text-start py-4">
                                        <h2 class="text-regular text-brown">OUT-OF-THE-<br>WORLD DINING</h2>
                                        <p class="text-regular text-brown">by CNA Lifestyle</p>
                                        <button class="text-brown border-brown py-1 px-4 bg-transparent rounded-pill btn-read-more-1" style="font-weight: 700;font-size: 12px">READ MORE</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-brown p-3 mx-2">
                                <img class="img-fluid" src="{{asset('images/press_image.jpg')}}"  alt="">
                                <div class="container">
                                    <div class="text-start py-4">
                                        <h2 class="text-regular text-white">UNBELIEVABLE <br>DINING</h2>
                                        <p class="text-regular text-white">by TATLER</p>
                                        <button class="text-white border-white py-1 px-4 bg-transparent rounded-pill btn-read-more-2" style="font-weight: 700;font-size: 12px">READ MORE</button>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .section8 .slick-slide{
            height: 36vw !important;
            width: 620px !important;
            padding-left: 100px;
        }
        .section8 .prev-arrow{
            background: url('/images/arrow_up.png');
            position: absolute;
            left: 0;
            top: 50%;
            background-size: cover;
            width: 80px;
            height: 25px;
            background-size: cover;
            border: 0;
            z-index: 22;
            transform: rotate(-90deg);


        }
        .section8 .next-arrow{
            background: url('/images/arrow_up.png');
            position: absolute;
            right: 0;
            top: 50%;
            background-size: cover;
            width: 80px;
            height: 25px;
            background-size: cover;
            border: 0;
            z-index: 22;
            transform: rotate(90deg);
        }
        .bg-gray{
            background-color: #C7BBAD;
        }
        .border-brown{
            border: 1px #322a25 solid;
        }
    </style>
@endif

