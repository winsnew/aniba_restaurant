<div class="drop">
    <div class="sidebarNav-star hover-nav">
        <h5 class="text-white text-start star-text opacity-0 px-3" style="transition:.3s;"></h5>
            <img class="star text-start me-4" style="z-index: 100" src="{{asset('images/star.png')}}" loading="lazy" alt="" class="nav__menu" width="30">
        <!-- <img src="images/6148be436c5179b3ed2ea459-6148f26bb91223783bed27cb_arrow_downward_white_24dp.svg"
            loading="lazy" alt="" class="nav__menu"> -->
    </div>
    <div class="sidebarNav text-start">
        <a class="scrollLink sec1" href="#section1">
            <div class="sidebarNavItem">Our Story</div>
        </a>
        <a class="scrollLink sec2" href="#section2">
            <div class="sidebarNavItem">Our Chefs</div>
        </a>
        <a class="scrollLink sec3" href="#section3">
            <div class="sidebarNavItem">Our Team</div>
        </a>
        <a class="scrollLink sec4" href="#section4">
            <div class="sidebarNavItem">Our Bar</div>
        </a>
        <a class="scrollLink sec5" href="#section5">
            <div class="sidebarNavItem">Opening Hours</div>
        </a>
        <a class="scrollLink sec6" href="#section6">
            <div class="sidebarNavItem">Private Events</div>
        </a>
        <a class="scrollLink sec7" href="#section6">
            <div class="sidebarNavItem">Private Room</div>
        </a>
        <a class="scrollLink sec8" href="#section7">
            <div class="sidebarNavItem">Contact Us</div>
        </a>
        {{-- <a class="scrollLink sec7" href="#section6">
            <div class="sidebarNavItem">Press</div>
        </a> --}}
    </div>
</div>
<div class="hover d-none">
    <div class="sidebarNav-star hover-nav">
        <h5 class="text-white text-start star-text opacity-0 px-3" style="transition:.3s;"></h5>
            <img class="star text-start me-4" style="z-index: 100" src="{{asset('images/star.png')}}" loading="lazy" alt="" class="nav__menu" width="30">
            <img class="hov-star text-start me-4 position-relative opacity-0" style="z-index: 100;top: -1.8rem" src="{{asset('images/star.png')}}" loading="lazy" alt="" class="nav__menu" width="30">
        <!-- <img src="images/6148be436c5179b3ed2ea459-6148f26bb91223783bed27cb_arrow_downward_white_24dp.svg"
            loading="lazy" alt="" class="nav__menu"> -->
    </div>
    <div class="sidebarNav text-start">
        <a class="scrollLink sec1 sidebarNavIn" href="#section1">
            <div class="sidebarNavItem">Our Story</div>
        </a>
        <a class="scrollLink sec2 sidebarNavIn" href="#section2">
            <div class="sidebarNavItem">Our Chefs</div>
        </a>
        <a class="scrollLink sec3 sidebarNavIn" href="#section3">
            <div class="sidebarNavItem">Our Team</div>
        </a>
        <a class="scrollLink sec4 sidebarNavIn" href="#section4">
            <div class="sidebarNavItem">Our Bar</div>
        </a>
        <a class="scrollLink sec5 sidebarNavIn" href="#section5">
            <div class="sidebarNavItem">Opening Hours</div>
        </a>
        <a class="scrollLink sec6 sidebarNavIn" href="#section6">
            <div class="sidebarNavItem">Private Events</div>
        </a>
        <a class="scrollLink sec7 sidebarNavIn" href="#section6">
            <div class="sidebarNavItem">Private Room</div>
        </a>
        <a class="scrollLink sec8 sidebarNavIn" href="#section7" id="navsection5">
            <div class="sidebarNavItem">Contact Us</div>
        </a>
        {{-- <a class="scrollLink sec7 sidebarNavIn" href="#section6">
            <div class="sidebarNavItem">Press</div>
        </a> --}}
    </div>
</div>
@if($logo)
<a href="{{ $logo->link }}" target="_blank" class="foragers-logo d-block"><img class="mb-3" style="position:fixed; bottom: 0;left: 0; z-index: 10;" src="{{asset($logo->logo)}}" alt=""></a>
@else
<a href="http://www.foragers.com.sg/" target="_blank" class="foragers-logo d-block"><img class="mb-3" style="position:fixed; bottom: 0;left: 0; z-index: 10;" src="{{asset('images/foragers_web.png')}}" alt=""></a>
@endif
<a href="#section-1" class="backdrop"></a>

