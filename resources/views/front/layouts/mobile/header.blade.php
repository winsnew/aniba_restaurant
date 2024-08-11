<nav class="navbar navbar-expand-lg add-bg-transparent fixed-top py-3 w-100">
    <div class="position-relative w-100">
        <div class="navbar-brand text-center opacity-0 m-0">
            <a href="#mobile-homepage" class="homepage-scrollnav-item"><img class="navbar-center-logo opacity-100 logo-aniba-scale-1" src="{{asset('images/aniba.png')}}" width="30%" alt=""></a><br>
            <div style="font-size: 12px;">
                {{-- <a class="px-2 text-decoration-none navbar-center-text head-culinary text-white opacity-100" href="#section1"><i>Culinary Journey</i></a>
                <a class="text-decoration-none navbar-center-text head-adoni text-white opacity-100" href="#section2"><i>By Meir Adoni</i></a> --}}
            </div>
        </div>
        <div class="position-absolute" style="top: 4.5vh; right: 11px;">
            <div class="navbar-toggler vertical-center" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navigate m-auto text-light-brown" style="font-size: 24px;"></span>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse position-relative" id="navbarNavAltMarkup" style="height: 100vh;">
      <div class="navbar-nav position-relative text-uppercase" style="height: 80%; overflow: auto; padding-bottom: 5rem;">
        <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="{{ $reservation? $reservation->url : 'http://www.sevenrooms.com/reservations/aniba' }}" target="_blank">{{ $navbar ? $navbar[10]->name : 'RESERVATIONS' }}</a>
        <a class="nav-item text-white nav-link nav-link-light mobile-menu collapse-button" id="mobile-menu" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-menu-item" aria-expanded="true" aria-controls="mobile-menu-item" style="padding-block: .7rem;">
            Menu
            <span class="position-absolute me-5" style="right: 0px;">+</span>
        </a>
        <div class="accordion-collapse collapse" id="mobile-menu-item" aria-labelledby="mobile-menu">
            <div class="accordion-body">
                @foreach($submenu as $menu)
                <a href="{{ $menu->url === '-' ? '#' : asset($menu->url) }}" target="_blank" class="nav-item text-white nav-link nav-link-light">{{ $menu->name }}</a>
                @endforeach
            </div>
        </div>
        <a class="nav-item text-white nav-link nav-link-light mobile-about collapse-button" id="mobile-about" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-about-item" aria-expanded="true" aria-controls="mobile-about-item" style="padding-block: .7rem;">
            About
            <span class="position-absolute me-5" style="right: 0px;">+</span>
        </a>
        <div class="accordion-collapse collapse" id="mobile-about-item" aria-labelledby="mobile-about">
            <div class="accordion-body">
                <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section1">{{ $navbar ? $navbar[1]->name : 'OUR STORY' }}</a>
                <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section2">{{ $navbar ? $navbar[2]->name : 'OUR CHEFS' }}</a>
                <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section3">{{ $navbar ? $navbar[3]->name : 'OUR TEAM' }}</a>
            </div>
        </div>
        <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section4">{{ $navbar ? $navbar[4]->name : 'OUR BAR' }}</a>
        <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section5">{{ $navbar ? $navbar[5]->name : 'OPENING HOURS' }}</a>
        <a href="" class="nav-item text-white nav-link nav-link-light collapse-button mobile-events" id="mobile-events" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-events-item" aria-expanded="true" aria-controls="mobile-events=item" style="padding-block: .7rem;">
            Private Events
            <span class="position-absolute me-5" style="right: 0px;">+</span>
        </a>
        <div class="accordion-collapse collapse" id="mobile-events-item" aria-labelledby="mobile-events">
            <div class="accordion-body">
                <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section6">{{ $navbar ? $navbar[6]->name : 'PRIVATE EVENTS' }}</a>
                <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section6_1">{{ $navbar ? $navbar[7]->name : 'PRIVATE ROOM' }}</a>
            </div>
        </div>
        <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section7">{{ $navbar ? $navbar[8]->name : 'CONTACT US' }}</a>
        @if(count($press) > 0)
        <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#mobile-section8">{{ $navbar ? $navbar[9]->name : 'PRESS' }}</a>
        @endif
        <a class="nav-item text-white nav-link nav-link-light" style="padding-block: 0.7rem" href="#section9">{{ $navbar ? $navbar[11]->name : 'GALLERY' }}</a>
        <div class="d-flex mx-auto mt-3">
            <div class="text-center me-3"> 
                <a href="{{ $contact_us? $contact_us->instagram : 'https://www.instagram.com/aniba.sg/' }}" target="_blank"><img class="instagram" src="{{asset('images/instagram.png')}}" alt="" width="40vw"></a>
            </div>
            <div class="text-center"> 
                <a href="{{ $contact_us? $contact_us->facebook : 'https://www.facebook.com/anibasingapore' }}" target="_blank"><img class="facebook" src="{{asset('images/facebook.png')}}" alt="" width="40vw"></a>
            </div>
        </div>
      </div>
    </div>
  </nav>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
    // $(function() {
        $(document).ready(function(){
            $('.mobile .nav-item').on('click', function(e) {
                if(!$(this).hasClass('collapse-button')){
                    $('.mobile .navbar-collapse').removeClass('show');
                    if($('#mobile-menu-item').hasClass('show')){
                        $('#mobile-menu-item').collapse('toggle')
                        $('.mobile-menu span').text('+')
                    }
                    if($('#mobile-about-item').hasClass('show')){
                        $('#mobile-about-item').collapse('toggle')
                        $('.mobile-about span').text('+')
                    }
                    if($('#mobile-events-item').hasClass('show')){
                        $('#mobile-events-item').collapse('toggle')
                        $('.mobile-events span').text('+')
                    }
                }else {
                    if($('#mobile-menu-item').hasClass('show')){
                        $('#mobile-menu-item').collapse('toggle')
                        $('.mobile-menu span').text('+')
                    }
                    if($('#mobile-about-item').hasClass('show')){
                        $('#mobile-about-item').collapse('toggle')
                        $('.mobile-about span').text('+')
                    }
                    if($('#mobile-events-item').hasClass('show')){
                        $('#mobile-events-item').collapse('toggle')
                        $('.mobile-events span').text('+')
                    }
                }
                if($('.mobile .navbar').hasClass('add-bg-brown')){
                        $('.navigate').css('font-size','24px');
                        $('.navigate').addClass('navbar-toggler-icon');
                        $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger.png)');
                        $('.mobile .navigate').text('');
                    $('body').css('overflow','auto');

                } 
            });
            $('.navbar-toggler').click(function() {
                if ($('.navbar-collapse').hasClass('show')) {
                    $('.navigate').addClass('navbar-toggler-icon');
                    $('.navigate').text('');
                    $('.navigate').css('font-size','24px');
                    // $('.navbar').addClass('add-bg-transparent');
                    // $('.navbar').removeClass('add-bg-brown');
                    // $('.navigate').css('padding','0');
                    // $('.navbar-toggler').css('right','3rem');

                    if($('#mobile-menu-item').hasClass('show')){
                        $('#mobile-menu-item').collapse('toggle')
                        $('.mobile-menu span').text('+')
                    }
                    $('.navbar-brand').addClass('opacity-0')
                    $('body').css('overflow','auto');

                }else{
                    $('.navigate').removeClass('navbar-toggler-icon');
                    $('.navigate').css('background-image','');
                    $('.navigate').html('&times');
                    // $('.navigate').text('x');
                    $('.navigate').css('font-size','40px');
                    // $('.navigate').css('padding','0 17px');
                    $('.navbar').removeClass('add-bg-transparent');
                    $('.navbar').addClass('add-bg-brown');
                    if($('.navbar.add-bg-light-brown').hasClass('add-bg-brown')){
                        $('.navbar').removeClass('add-bg-brown')
                    }
                    // $('.navbar-toggler').css('right','0');
                    $('.mobile .navbar-brand').removeClass('opacity-0')
                    $('body').css('overflow','hidden');
                    
                }
                if($('.mobile .navbar').hasClass('add-bg-brown')){
                    if ($('.navbar-collapse').hasClass('show')) {
                        $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger.png)');
                        $('.mobile .navbar-toggler-icon').css('opacity','1');
                        $('.mobile .nav-item').removeClass('text-white');
                        $('.mobile .nav-item').addClass('text-brown');
                        $('.accordion-body .nav-item').removeClass('text-light-brown1')
                        $('.accordion-body .nav-item').removeClass('text-brown')
                        $('.accordion-body .nav-item').addClass('text-white')
                        $('.mobile .navigate').addClass('text-brown');
                        $('.mobile .navigate').removeClass('text-light-brown');
                        $(".mobile .instagram").attr('src','{{asset('images/instagram_brown.png')}}');
                        $(".mobile .facebook").attr('src','{{asset('images/facebook_brown.png')}}');
                        $('.navbar').removeClass('add-bg-transparent');
                        $('.navbar').removeClass('add-bg-brown');
                    
                    }else{
                        $('.mobile .nav-item').removeClass('text-brown');
                        $('.mobile .nav-item').addClass('text-white');
                        $('.accordion-body .nav-item').removeClass('text-white')
                        $('.accordion-body .nav-item').removeClass('text-brown')
                        $('.accordion-body .nav-item').addClass('text-light-brown1')
                        $('.mobile .navigate').removeClass('text-brown');
                        $('.mobile .navigate').addClass('text-light-brown');
                        $(".mobile .instagram").attr('src','{{asset('images/instagram.png')}}');
                        $(".mobile .facebook").attr('src','{{asset('images/facebook.png')}}');
                        $('.mobile .nav-link-light').css('border-bottom','1px rgba(233, 224, 217, 0.5)solid');


                    }
                } 
                if($('.mobile .navbar').hasClass('add-bg-transparent')){
                    if ($('.navbar-collapse').hasClass('show')) {
                        $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger.png)');
                        $('.mobile .navbar-toggler-icon').css('opacity','1');
                        $('.mobile .nav-item').removeClass('text-white');
                        $('.mobile .nav-item').addClass('text-brown');
                        $('.mobile .navigate').addClass('text-brown');
                        $('.mobile .navigate').removeClass('text-light-brown');
                        $(".mobile .instagram").attr('src','{{asset('images/instagram_brown.png')}}');
                        $(".mobile .facebook").attr('src','{{asset('images/facebook_brown.png')}}');
                        
                        
                    }else{
                        $('.mobile .nav-item').removeClass('text-brown');
                        $('.mobile .nav-item').removeClass('text-brown');
                        $('.mobile .nav-item').addClass('text-white');
                        $('.mobile .navigate').removeClass('text-brown');
                        $('.mobile .navigate').addClass('text-light-brown');
                        $(".mobile .instagram").attr('src','{{asset('images/instagram.png')}}');
                        $(".mobile .facebook").attr('src','{{asset('images/facebook.png')}}');
                        $('.mobile .nav-link-light').css('border-bottom','1px rgba(233, 224, 217, 0.5)solid');

                    }
                } 
                if($('.mobile .navbar').hasClass('add-bg-light-brown') ){
                    if ($('.navbar-collapse').hasClass('show')) {
                        $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger1.png)');
                        $('.mobile .navbar-toggler-icon').css('opacity','1');
                        $('.mobile .nav-item').addClass('text-white');
                        $('.mobile .nav-item').removeClass('text-brown');
                        $('.accordion-body .nav-item').removeClass('text-brown2')
                        $('.accordion-body .nav-item').addClass('text-brown')
                        $('.mobile .navigate').removeClass('text-brown');
                        $('.mobile .navigate').addClass('text-light-brown');
                        $(".mobile .instagram").attr('src','{{asset('images/instagram.png')}}');
                        $(".mobile .facebook").attr('src','{{asset('images/facebook.png')}}');
                    
                    }else{
                        $('.mobile .nav-item').addClass('text-brown');
                        $('.mobile .nav-item').removeClass('text-white');
                        $('.accordion-body .nav-item').removeClass('text-brown')
                        $('.accordion-body .nav-item').addClass('text-brown2')
                        $('.mobile .navigate').addClass('text-brown');
                        $('.mobile .navigate').removeClass('text-light-brown');
                        $(".mobile .instagram").attr('src','{{asset('images/instagram_brown.png')}}');
                        $(".mobile .facebook").attr('src','{{asset('images/facebook_brown.png')}}');
                        $('.mobile .nav-link-light').css('border-bottom','1px rgba(77, 65, 57, 0.6)solid');
                    }
                } 
                if($('.mobile .navbar').hasClass('after-homepage')){
                    if ($('.navbar-collapse').hasClass('show')) {
                        $('.navbar').removeClass('add-bg-transparent');
                        $('.navbar').addClass('add-bg-brown');
                        if($('.navbar.add-bg-light-brown').hasClass('add-bg-brown')){
                            $('.navbar').removeClass('add-bg-brown')
                        }
                    }
                } 
            });

            $('.collapse-button').click(function(){
                if($(this).find('span').text() === "+"){
                    $(this).find('span').text('-')
                }else{
                    $(this).find('span').text('+')
                }
            })

        }); 
        // });
</script>