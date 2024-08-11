<a class="navJump" name="homepage" id="mobile-homepage"></a>
@if(isset($background[1][2]))
    @if($background[1][2]->type == 1)
    <div class="top-mobile" style="background: url('/storage/{{ $background[1][2]->url.'?v='.time() }}'); background-size: cover;">
    @else
    <div class="top-mobile" style="background-color: {{ $background[1][2]->url }};">
    @endif
@else
<div class="top-mobile" style="background: url('/images/bg-mobile-header.png'); background-size: cover;">
@endif
    <div class="aniba position-relative" style="top: 40vw; margin-bottom: 5vh;">
        {{-- <a href="#mobile-section1" class="px-2 text-center mx-auto logo-aniba-text text-decoration-none culinary text-white"><i>Culinary Journey</i></a><br> --}}
        <a href="#mobile-homepage"><img class="logo-aniba" src="{{asset('images/aniba.png')}}" alt="" style="width: 55vw; margin-top: 5vh"></a><br>
        {{-- <a href="#mobile-section2" class="px-2 text-center mx-auto logo-aniba-text text-decoration-none adoni text-white" style="display: block; margin-top: 4vh;"><i>By Meir Adoni</i></a> --}}
        <a href="#mobile-section5" class="btn text-white border-white bg-transparent p-3 rounded-pill embark" style="">EMBARK ON A VOYAGE WITH US</a>
    </div>
    @if($logo)
    <a href="{{ $logo->link }}" target="_blank"><img class="position-absolute horizontal-center" style="width: 40vw;bottom: 4vh" src="{{asset($logo->logo.'?v='.time())}}" alt=""></a>
    @else
    <a href="http://www.foragers.com.sg/" target="_blank"><img class="position-absolute horizontal-center" style="width: 40vw;bottom: 4vh" src="{{asset('images/foragers_mobile.png')}}" alt=""></a>
    @endif
</div>