<a class="navJump" name="mobile-section4" id="mobile-section4"></a>
<div class="layers">
    @if(isset($background[4][2]))
        @if($background[4][2]->type == 1)
        <div class="content" style="padding-top: 10vw; padding-bottom: 10vw; background: url('/storage/{{ $background[4][2]->url.'?v='.time() }}'); background-size: cover; fill: #E9E0D9;">
        @else
        <div class="content" style="padding-top: 10vw; padding-bottom: 10vw; background: {{ $background[4][2]->url }}">
        @endif
    @else
    <div class="content" style="padding-top: 10vw; padding-bottom: 10vw; background: url('/images/bg-mobile-sec4.png'); background-size: cover; fill: #E9E0D9;">
    @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 px-0">
                    <img class="position-relative vertical-center line4" src="{{asset('/images/Line.png')}}" alt="" style="width: 100%; height: .5px">
                </div>
                <div class="col-8">
                    <h6 class="pt-4 text-white title4" style="font-size: 20px">Our Bar</h6>
                </div>
            </div>
        </div>
        <div class="container-fluid ps-5 pe-0">
            <div class="text-white content-mobile-section4 mb-5" style="font-size: 16px; width: 71%; margin-top: 3.5rem;">
                {{-- <p class="mb-5">Taking centre stage at AniBa is the gorgeous bar set against a lit backdrop of meticulously curated spirits. Here, the mixologist shows off his deft skills at concocting the alluring selection of beverages masterminded by Proof and Company that echoes the food menu, and also celebrates the flavours and ingredients of the Middle East, Mediterranean and Asia. </p> --}}
                <div class="mb-5">
                    {!! $our_bar? $our_bar->bar_desc1: '<p>Taking centre stage at AniBa is the gorgeous bar set against a lit backdrop of meticulously curated spirits. Here, the mixologist shows off his deft skills at concocting the alluring selection of beverages masterminded by Proof and Company that echoes the food menu, and also celebrates the flavours and ingredients of the Middle East, Mediterranean and Asia.</p>' !!}
                </div>
                <a href="{{ $our_bar? asset($our_bar->file_path) : '' }}" target="_blank"  class="text-white text-center border-white py-2 px-3 bg-transparent rounded-pill btn-book-now text-decoration-none">COCKTAIL MENU</a>
            </div>
            <div class="text-white position-relative">
                {{-- <h3 class="text-center bitter-italic title4-1" style="font-size: 90px; line-height: 100px; letter-spacing: 5%; margin-top: 30vw; margin-left:30vw;">Speakeasy<br> on Saturday<br> nights</h3> --}}
                <div class="text-center title4-1">
                    {!! $our_bar? $our_bar->title : '<h6>Speakeasy<br> on Saturday<br> nights</h6>' !!}
                </div>
                <div class="d-flex flex-row-reverse position-absolute" style="width: 75%; right: 0;">
                    <img class="position-relative ms-3 align-self-center line4-1" src="{{asset('/images/Line.png')}}" alt="" style="width: 100%; height: .5px;">
                    <h2 class="bitter-italic text-light-brown position-relativer title4-2" style="font-size: 26px;transition:.3s"><b>+</b></h2>
                </div>
            </div>
            <div class="text-white mb-5 content-mobile-section4-1" style="font-size: 16px; width: 71%; margin-top: 5rem;">
                {{-- <p class="mb-5">A speakeasy vibe sets in from 8pm on Saturdays. A guest DJ spins Indie house, Nu disco and more to groove to, or simply to immerse in – the better to imbibe the short menu of exquisitely-crafted cocktails with intriguing names </p> --}}
                <div class="mb-5">
                    {!! $our_bar? $our_bar->bar_desc2 : '<p>A speakeasy vibe sets in from 8pm on Saturdays. A guest DJ spins Indie house, Nu disco and more to groove to, or simply to immerse in – the better to imbibe the short menu of exquisitely-crafted cocktails with intriguing names </p>' !!}
                </div>
                <a href="http://www.sevenrooms.com/reservations/aniba" target="_blank" class="text-white text-center border-white py-2 px-3 bg-transparent rounded-pill btn-book-now text-decoration-none">BOOK NOW</a>
            </div>
        </div>
    </div>
</div>