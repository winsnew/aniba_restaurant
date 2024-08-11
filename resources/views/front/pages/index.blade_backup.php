<x-app-layout :contact_us="$contact_us">
    <div class="content-wrapper">
        {{-- desktop --}}
        <div class="d-none d-lg-block">
            @include('front.pages.section.homepage')
        </div>
        {{-- mobile --}}
        <div class="mobile d-lg-none d-block">
            @include('front.pages.section.mobile.homepage')
        </div>
        {{-- desktop Section 1 --}}
        <div class="section1 text-white text-start d-none d-lg-block">
            @include('front.pages.section.section1')
        </div>
        {{-- mobile Section 1 --}}
        <div class="mobile mobile-section1 text-white text-start d-lg-none d-block">
            @include('front.pages.section.mobile.section1')
        </div>
        {{-- desktop Section 2 --}}
        <div class="section2 d-none d-lg-block">
            @include('front.pages.section.section2')
        </div>
        {{-- mobile Section 2 --}}
        <div class="mobile mobile-section2 text-white text-start bg-light-brown d-lg-none d-block">
            @include('front.pages.section.mobile.section2')
        </div>
        {{-- dekstop Section 3 --}}
        <div class="section3 d-none d-lg-block">
            @include('front.pages.section.section3')
        </div>
        {{-- mobile Section 3 --}}
        <div class="mobile mobile-section3 text-white text-start bg-brown d-lg-none d-block">
            @include('front.pages.section.mobile.section3')
        </div>
        {{-- desktop Section 4 --}}
        <div class="section4 d-none d-lg-block">
            @include('front.pages.section.section4')
        </div>
        {{-- mobile Section 4 --}}
        <div class="mobile mobile-section4 text-white text-start bg-light-brown d-lg-none d-block">
            @include('front.pages.section.mobile.section4')
        </div>
        {{-- desktop Section 5 --}}
        <div class="section5 d-none d-lg-block">
            @include('front.pages.section.section5')
        </div>
         {{-- mobile Section 5 --}}
         <div class="mobile mobile-section5 text-white text-start bg-brown d-lg-none d-block">
            @include('front.pages.section.mobile.section5')
        </div>
        {{-- desktop Section 6 --}}
        <div class="section6 bg-light-brown d-none d-lg-block">
            @include('front.pages.section.section6')
        </div>
         {{-- mobile Section 6 --}}
         <div class="mobile mobile-section6 text-white text-start bg-light-brown d-lg-none d-block">
            @include('front.pages.section.mobile.section6')
        </div>
        {{-- desktop Section 7 --}}
        <div class="section7 d-none d-lg-block">
            @include('front.pages.section.section7')
        </div>
        {{-- mobile Section 7 --}}
         <div class="mobile mobile-section7 text-white text-start bg-brown d-lg-none d-block">
            @include('front.pages.section.mobile.section7')
        </div>
        {{-- <div class="section6 bg-light-brown">
            @include('front.pages.section.section6')
        </div> --}}
        {{-- <section class="section5" style="background:#fff;">
            <a class="navJump" style="height:100px;" name="section5" id="section5"></a>
            <h1>Section 5</h1>
        </section> --}}
    </div>
</x-app-layout>