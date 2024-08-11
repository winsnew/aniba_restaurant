<x-app-layout>
    <div class="content-wrapper">
        <div class="top">
            @include('front.pages.section.homepage')
        </div>
        <div class="section1 text-white text-start">
            @include('front.pages.section.section1')
        </div>
        <div class="section2">
            @include('front.pages.section.section2')
        </div>
        {{-- <div class="section3">
            @include('front.pages.section.section3')
        </div>
        <section class="section5" style="background:#fff;">
            <a class="navJump" style="height:100px;" name="section5" id="section5"></a>
            <h1>Section 5</h1>
        </section> --}}
    </div>
</x-app-layout>