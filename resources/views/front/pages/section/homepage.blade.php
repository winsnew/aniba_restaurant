{{-- <img src="{{asset('images/bg-header.jpg')}}" style="visibility: hidden" alt=""> --}}
<a class="navJump" name="homepage" id="homepage"></a>

@if(isset($background[1][1]))
    @if($background[1][1]->type == 1)
        <div class="top" style="background: url('storage/{{ $background[1][1]->url.'?v='.time() }}'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    @else
        <div class="top" style="background-color: {{ $background[1][1]->url }};">
    @endif
@else
<div class="top" style="background: url('/images/bg-header.png'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
@endif
    <div class="aniba">
        {{-- <a href="#section1" class="px-2 logo-aniba-text text-decoration-none culinary text-white" style="font-size: 22px"><i>Culinary Journey</i></a> --}}
        <img class="logo-aniba" src="{{asset('images/aniba.png')}}" alt="">
        {{-- <a href="#section2" class="px-2 logo-aniba-text text-decoration-none adoni text-white" style="font-size: 22px"><i>By Meir Adoni</i></a> --}}
    </div>
    <!-- <a href="http://www.foragers.com.sg/" target="_blank"><img class="position-absolute mb-3" style="bottom: 0;left: 0" src="{{asset('images/foragers_web.png')}}" alt=""></a> -->
    <a href="#section5" class="mt-5 btn text-white border-white py-2 px-5 bg-transparent rounded-pill embark">EMBARK ON A VOYAGE WITH US</a>
</div>