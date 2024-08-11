<a class="navJump" name="section4" id="section4"></a>
{{-- @if($background->has('4')) --}}
@if(isset($background[4][1]))
    @if($background[4][1]->type == 1)
        <div class="content text-start" style="background-image: url('/storage/{{ $background[4][1]->url.'?v='.time() }}');">
    @else
        <div class="content text-start" style="background-color: {{ $background[4][1]->url }}">
    @endif
@else
<div class="content text-start" style="background-image: url('/images/bg-our-bar.jpg');">
@endif
    <div class="container h-100">
        <div class="row h-100 position-relative">
            <div class="position-absolute"  style="top: 35%;-ms-transform: translateY(-35%);transform: translateY(-35%);padding-left:5vw;width: 38rem;">
                <img class="line6" src="{{ asset('images/Line.png') }}" alt="" style="width:100%;">
            </div>
            <div class="col-6 col-lg-6 col-sm-6 text-sec4 position-absolute" style="top: 40%;padding-left:8vw">
                <!-- <h1 class="text-white text-center" style="font-size: 50px; width: 25vw;"><i>Speakeasy<br>on Saturday<br>nights</i></h1> -->
                <div class="text-white text-center title-sec4" style="width: 20vw;">
                    {!! $our_bar? $our_bar->title : '<h1 style="font-size: 38px;"><i>Speakeasy<br>on Saturday<br>nights</i></h1>' !!}
                </div>
                {{-- <p class="text-white mt-5">
                    A speakeasy vibe sets in from 8pm on Saturdays. A guest DJ spins Indie house, Nu disco and more to groove to, or simply to immerse in – the better to imbibe the short menu of exquisitely-crafted cocktails with intriguing names 
                </p> --}}
                <div class="text-white mt-5">
                    {!! $our_bar? $our_bar->bar_desc2 : '<p>A speakeasy vibe sets in from 8pm on Saturdays. A guest DJ spins Indie house, Nu disco and more to groove to, or simply to immerse in – the better to imbibe the short menu of exquisitely-crafted cocktails with intriguing names </p>' !!}
                </div>
                <a href={!!$opening ? $opening->book_now_link : "http://www.sevenrooms.com/reservations/aniba" !!} target="_blank" class="btn text-white text-regular border-white py-2 px-3 bg-transparent rounded-pill btn-contact-us" >BOOK NOW</a>
            </div>
            <div class="col-6 col-lg-6 col-sm-6 text-sec4 position-absolute" style="top: 21%; left: 54%; padding-left: 3vw;">
                <div class="text-white mt-5" style=" width: 34vw;">
                    <!-- Taking centre stage at AniBa is the gorgeous bar set against a lit backdrop of meticulously curated spirits. Here, the mixologist shows off his deft skills at concocting the alluring selection of beverages masterminded by Proof and Company that echoes the food menu, and also celebrates the flavours and ingredients of the Middle East, Mediterranean and Asia.  -->
                    {!! $our_bar? $our_bar->bar_desc1 : '<p>Taking centre stage at AniBa is the gorgeous bar set against a lit backdrop of meticulously curated spirits. Here, the mixologist shows off his deft skills at concocting the alluring selection of beverages masterminded by Proof and Company that echoes the food menu, and also celebrates the flavours and ingredients of the Middle East, Mediterranean and Asia.</p>' !!}
                </div>
                <a href="{{ $our_bar? asset($our_bar->file_path) : 'assets/Aniba Cocktails Menu.pdf' }}" target="_blank" class="btn text-white text-regular border-white py-2 px-3 bg-transparent rounded-pill btn-contact-us" >COCKTAIL MENU</a>
            </div>
        </div>
    </div>
</div>