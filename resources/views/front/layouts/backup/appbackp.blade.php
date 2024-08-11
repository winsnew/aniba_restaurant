<!DOCTYPE html>
<html data-wf-domain="native-smooth-scroll.webflow.io" data-wf-page="6148be436c517909502ea458" data-wf-site="6148be436c5179b3ed2ea459">
<head>
	<meta charset="utf-8">
	<title>Aniba</title>
	<link href="{{asset('css/app_fix.css')}}?v=1" rel="stylesheet" type="text/css">
	<link href="{{asset('css/app.scss')}}?v=1" rel="stylesheet" type="text/css">
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/x-icon">
    <link href="favicons/img-webclip.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/kenwheeler/slick/master/slick/slick.css" rel="stylesheet" crossorigin="anonymous">
    {{-- <link href="https://cdn.rawgit.com/kenwheeler/slick/master/slick/slick-theme.css" rel="stylesheet" crossorigin="anonymous"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    
    @include('front.layouts.header')
    <div class="navi" style="z-index: 2000">
        @include('front.layouts.navigation')
    </div>
    <main>
        {{ $slot }}
    </main>
    @include('front.layouts.footer')

</body>

<script src="{{asset('js/js-jquery-3.5.1.min.dc5e7f18c8.js')}}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
{{-- <script src="js/js-jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
<script>
    ! function (o, c) {
			var n = c.documentElement,
				t = " w-mod-";
			n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className +=
				t + "touch")
	}(window, document);

    //item navigation
    var nav_trans = $('.top').offset().top;
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +300 ) {
            $(".drop .sec7").addClass("sidebarNavIn");
            $(".drop .sec7").css('pointer-events','none');
            // $(".hover .sec7").addClass("sidebarNavIn");
            // $(".hover .sec7").css('pointer-events','none');
        } else {
            $(".drop .sec7").removeClass("sidebarNavIn");
            $(".drop .sec7").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +340 ) {
            $(".drop .sec6").addClass("sidebarNavIn");
            $(".drop .sec6").css('pointer-events','none');
           
        } else {
            $(".drop .sec6").removeClass("sidebarNavIn");
            $(".drop .sec6").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +360 ) {
            $(".drop .sec5").addClass("sidebarNavIn");
            $(".drop .sec5").css('pointer-events','none');
            
        } else {
            $(".drop .sec5").removeClass("sidebarNavIn");
            $(".drop .sec5").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +390 ) {
            $(".drop .sec4").addClass("sidebarNavIn");
            $(".drop .sec4").css('pointer-events','none');
           
        } else {
            $(".drop .sec4").removeClass("sidebarNavIn");
            $(".drop .sec4").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +410 ) {
            $(".drop .sec3").addClass("sidebarNavIn");
            $(".drop .sec3").css('pointer-events','none');
            
        } else {
            $(".drop .sec3").removeClass("sidebarNavIn");
            $(".drop .sec3").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +450 ) {
            $(".drop .sec2").addClass("sidebarNavIn");
            $(".drop .sec2").css('pointer-events','none');
           
        } else {
            $(".drop .sec2").removeClass("sidebarNavIn");
            $(".drop .sec2").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +470 ) {
            $(".drop .sec1").addClass("sidebarNavIn");
            $(".drop .sec1").css('pointer-events','none');
           

        } else {
            $(".drop .sec1").removeClass("sidebarNavIn");
            $(".drop .sec1").css('pointer-events','');
        }
    });
   
    $('a[href^="#"]').click(function() { 
        // Need both `html` and `body` for full browser support
       
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top - 60
            // scrollTop: $( $('#section5').attr("href") ).offset().top - 200 
        });
        // $(".hover").removeClass('d-block');
        //         $(".hover").addClass('d-none');
        //         $(".drop").addClass('d-block');
        //         $(".drop").removeClass('d-none');
        // Prevent the jump/flash
        return false;
    });
    $('.sec6').click(function() { 
        // Need both `html` and `body` for full browser support
       
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+30
        });
        // $(".hover").removeClass('d-block');
        //         $(".hover").addClass('d-none');
        //         $(".drop").addClass('d-block');
        //         $(".drop").removeClass('d-none');
        // Prevent the jump/flash
        return false;
    });
    $('.head-contact').click(function() { 
        // Need both `html` and `body` for full browser support
       
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+30
        });
        // $(".hover").removeClass('d-block');
        //         $(".hover").addClass('d-none');
        //         $(".drop").addClass('d-block');
        //         $(".drop").removeClass('d-none');
        // Prevent the jump/flash
        return false;
    });
    $('.homepage-scroll').click(function() { 
        // Need both `html` and `body` for full browser support
       console.log($(this).attr("href"));
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset()
        });
        // Prevent the jump/flash
        return false;
    });
    $(".hover").hover(function () {
        $( $(this).find('.sec1')).removeClass("sidebarNavIn");
        $( $(this).find('.sec2')).removeClass("sidebarNavIn");
        $( $(this).find('.sec3')).removeClass("sidebarNavIn");
        $( $(this).find('.sec4')).removeClass("sidebarNavIn");
        $( $(this).find('.sec5')).removeClass("sidebarNavIn");
        $( $(this).find('.sec6')).removeClass("sidebarNavIn");
        $( $(this).find('.sec7')).removeClass("sidebarNavIn");
        $( $(this).find('.sidebarNav-star')).css('z-index','123');
        $( $(this).find('.sidebarNav')).css('z-index','124');
        // $('.hover .sec1').css("z-index",'232');

        $('body').css('overflow','hidden');
        $('.backdrop').css('display','block');
        // $('.hover .sidebarNav-star').css('z-index','123');
        // $('.hover .sidebarNav').css('z-index','124');

        // $('.sidebarNav-star .star').addClass('opacity-0');
        // $('.sidebarNav-star .star').removeClass('opacity-100');
        // $('.sidebarNav-star .hov-star').addClass('opacity-100');
        // $('.sidebarNav-star .hov-star').removeClass('opacity-0');

        $('.reservation-nav .star').addClass('d-none');
        $('.reservation-nav .star').removeClass('d-block');
        $('.reservation-nav .hov-star').addClass('d-block');
        $('.reservation-nav .hov-star').removeClass('d-none');
        // $('.reservation-nav .star').attr('src','{{asset('images/star.png')}}');
        $($(this).find('.sidebarNav')).css('display','block');
        $($(this).find('.star-text')).addClass('opacity-0');
        $($(this).find('.star-text')).removeClass('opacity-100');
        $('.reservation-nav-text').addClass('opacity-0');
        $('.reservation-nav-text').removeClass('opacity-100');

        $($(this).find(".sec1")).css('pointer-events','');
        $($(this).find(".sec2")).css('pointer-events','');
        $($(this).find(".sec3")).css('pointer-events','');
        $($(this).find(".sec4")).css('pointer-events','');
        $($(this).find(".sec5")).css('pointer-events','');
        $($(this).find(".sec6")).css('pointer-events','');
        $($(this).find(".sec7")).css('pointer-events','');
        
    },
    function () {
        // $('.star').attr('src','{{asset('images/star2.png')}}');
        $('.sidebarNav-star .star').removeClass('opacity-0');
        $('.sidebarNav-star .star').addClass('opacity-100');
        $('.sidebarNav-star .hov-star').removeClass('opacity-100');
        $('.sidebarNav-star .hov-star').addClass('opacity-0');
        $('.reservation-nav .star').removeClass('d-none');
        $('.reservation-nav .star').addClass('d-block');
        $('.reservation-nav .hov-star').removeClass('d-block');
        $('.reservation-nav .hov-star').addClass('d-none');
        $('.hover .sec1').addClass("sidebarNavIn");
        $('.hover .sec2').addClass("sidebarNavIn");
        $('.hover .sec3').addClass("sidebarNavIn");
        $('.hover .sec4').addClass("sidebarNavIn");
        $('.hover .sec5').addClass("sidebarNavIn");
        $('.hover .sec6').addClass("sidebarNavIn");
        $('.hover .sec7').addClass("sidebarNavIn");
        $('body').css('overflow','auto');
        $('.backdrop').css('display','none');
        $('.hover .star-text').removeClass('opacity-0');
        $('.hover .star-text').addClass('opacity-100');
        $('.hover .sidebarNav').css('display','none');
        // $('.reservation-nav .star').attr('src','{{asset('images/star2.png')}}');

        $('.reservation-nav-text').addClass('opacity-100');
        $('.reservation-nav-text').removeClass('opacity-00');
    });

    $(".reservation-nav").hover(function () {
        $('.hover .sec1').removeClass("sidebarNavIn");
        $('.hover .sec1').css("z-index",'232');
        $('.hover .sec2').removeClass("sidebarNavIn");
        $('.hover .sec3').removeClass("sidebarNavIn");
        $('.hover .sec4').removeClass("sidebarNavIn");
        $('.hover .sec5').removeClass("sidebarNavIn");
        $('.hover .sec6').removeClass("sidebarNavIn");
        $('.hover .sec7').removeClass("sidebarNavIn");
        $('body').css('overflow','hidden');
        $('.backdrop').css('display','block');
        $('.hover .sidebarNav-star').css('z-index','123');
        $('.hover .sidebarNav').css('z-index','124');
        $('.hover .sidebarNav').css('display','block');
        $('.hover .star-text').addClass('opacity-0');
        $('.hover .star-text').removeClass('opacity-100');
        $('.reservation-nav-text').addClass('opacity-0');
        $('.reservation-nav-text').removeClass('opacity-100');

        $('.reservation-nav .star').addClass('opacity-0');
        $('.reservation-nav .star').removeClass('opacity-100');
        $('.reservation-nav .hov-star').addClass('d-block');
        $('.reservation-nav .hov-star').removeClass('d-none');

        $(".hover .sec1").css('pointer-events','');
        $(".hover .sec2").css('pointer-events','');
        $(".hover .sec3").css('pointer-events','');
        $(".hover .sec4").css('pointer-events','');
        $(".hover .sec5").css('pointer-events','');
        $(".hover .sec6").css('pointer-events','');
        $(".hover .sec7").css('pointer-events','');
        
    },
    function () {
        $('.reservation-nav .star').removeClass('opacity-0');
        $('.reservation-nav .star').addClass('opacity-100');
        $('.reservation-nav .hov-star').removeClass('d-block');
        $('.reservation-nav .hov-star').addClass('d-none');

        $('.hover .sec1').addClass("sidebarNavIn");
        $('.hover .sec2').addClass("sidebarNavIn");
        $('.hover .sec3').addClass("sidebarNavIn");
        $('.hover .sec4').addClass("sidebarNavIn");
        $('.hover .sec5').addClass("sidebarNavIn");
        $('.hover .sec6').addClass("sidebarNavIn");
        $('.hover .sec7').addClass("sidebarNavIn");
        $('body').css('overflow','auto');
        $('.backdrop').css('display','none');
        $('.hover .star-text').removeClass('opacity-0');
        $('.hover .star-text').addClass('opacity-100');
        $('.hover .sidebarNav').css('display','none');

        $('.reservation-nav-text').addClass('opacity-100');
        $('.reservation-nav-text').removeClass('opacity-00');
    });

    $('.pointer-1').hover(function(){
        $('.top-desc').text('ANIBA which means');
        $('.text-replace').text('in hebrew, is a reinvention of the best from around the world — ');
    },function(){
        $('.top-desc').text('ANIBA in hebrew means');
        $('.text-replace').text('It is a reinvention of the best from around the world — ');
    })
    $('.pointer-2').hover(function(){
        $('.top-desc').text('ANIBA which means');
        $('.text-replace').text('in hebrew, is a reinvention of the best from around the world — ');
    },function(){
        $('.top-desc').text('ANIBA in hebrew means');
        $('.text-replace').text('It is a reinvention of the best from around the world — ');
    })


   
   // $(document).ready(function () {
    $('#burger').on('click',function(){
            if($(this).attr('data-click-state') == 1) {
                $(this).attr('data-click-state', 0);
                $('.hover .sec1').removeClass("sidebarNavIn");
                $('.hover .sec1').css("z-index",'232');
                $('.hover .sec2').removeClass("sidebarNavIn");
                $('.hover .sec3').removeClass("sidebarNavIn");
                $('.hover .sec4').removeClass("sidebarNavIn");
                $('.hover .sec5').removeClass("sidebarNavIn");
                $('.hover .sec6').removeClass("sidebarNavIn");
                $('.hover .sec7').removeClass("sidebarNavIn");
                $('body').css('overflow','hidden');
                $('.backdrop').css('display','block');
                $('.hover .sidebarNav-star').css('z-index','123');
                $('.hover .sidebarNav').css('z-index','124');
                $('.hover .sidebarNav').css('display','block');
                $('.hover .star-text').addClass('opacity-0');
                $('.hover .star-text').removeClass('opacity-100');
                $('.reservation-nav-text').addClass('opacity-0');
                $('.reservation-nav-text').removeClass('opacity-100');

                $(".hover .sec1").css('pointer-events','');
                $(".hover .sec2").css('pointer-events','');
                $(".hover .sec3").css('pointer-events','');
                $(".hover .sec4").css('pointer-events','');
                $(".hover .sec5").css('pointer-events','');
                $(".hover .sec6").css('pointer-events','');
                $(".hover .sec7").css('pointer-events','');

                $('.sidebarNav-star .star').addClass('opacity-0');
        $('.sidebarNav-star .star').removeClass('opacity-100');
        $('.sidebarNav-star .hov-star').addClass('opacity-100');
        $('.sidebarNav-star .hov-star').removeClass('opacity-0');

        $('.reservation-nav .star').addClass('d-none');
        $('.reservation-nav .star').removeClass('d-block');
        $('.reservation-nav .hov-star').addClass('d-block');
        $('.reservation-nav .hov-star').removeClass('d-none');
                
            }else {
                $(this).attr('data-click-state', 1);
                $('.hover .sec1').addClass("sidebarNavIn");
                $('.hover .sec2').addClass("sidebarNavIn");
                $('.hover .sec3').addClass("sidebarNavIn");
                $('.hover .sec4').addClass("sidebarNavIn");
                $('.hover .sec5').addClass("sidebarNavIn");
                $('.hover .sec6').addClass("sidebarNavIn");
                $('.hover .sec7').addClass("sidebarNavIn");
                $('body').css('overflow','auto');
                $('.backdrop').css('display','none');
                $('.hover .star-text').removeClass('opacity-0');
                $('.hover .star-text').addClass('opacity-100');
                $('.hover .sidebarNav').css('display','none');

                $('.reservation-nav-text').addClass('opacity-100');
                $('.reservation-nav-text').removeClass('opacity-00');
                
                $('.sidebarNav-star .star').removeClass('opacity-0');
        $('.sidebarNav-star .star').addClass('opacity-100');
        $('.sidebarNav-star .hov-star').removeClass('opacity-100');
        $('.sidebarNav-star .hov-star').addClass('opacity-0');

        $('.reservation-nav .star').removeClass('d-none');
        $('.reservation-nav .star').addClass('d-block');
        $('.reservation-nav .hov-star').removeClass('d-block');
        $('.reservation-nav .hov-star').addClass('d-none');
            }
        // });
    });
    
    
    // $(window).scroll(function () {
    //     var hover = $('.top').offset().top ;
    //     if ($(window).scrollTop() > hover+400) {
    //         $(".hover").addClass('d-block');
    //         $(".hover").removeClass('d-none');
    //         $(".drop").removeClass('d-block');
    //         $(".drop").addClass('d-none');
    //         $('#burger').css('cursor','pointer');
    //         $('#burger').css('pointer-events','all');

            
    //     }else{
    //         $(".hover").removeClass('d-block');
    //         $(".hover").addClass('d-none');
    //         $(".drop").addClass('d-block');
    //         $(".drop").removeClass('d-none');
    //         $('#burger').css('cursor','default');
    //         $('#burger').css('pointer-events','none');

    //     }
    // });
  
  

    //logo & navbar
    $(window).scroll(function () {
        var replace_logo = $('.top').offset().top +280 ;
        if ($(window).scrollTop() > replace_logo) {
            $(".navbar-center-logo").removeClass("opacity-0");
            $(".navbar-center-logo").addClass("opacity-100");
            $(".navbar-center-text").removeClass("opacity-0");
            $(".navbar-center-text").addClass("opacity-100");
            $(".navbar-center-logo").addClass("logo-aniba-scale-1");
            $(".navbar-center-logo").removeClass("logo-aniba-scale-2");
            
            $(".culinary").addClass("culinary-transition");
            $(".adoni").addClass("adoni-transition");
            $(".head-culinary").removeClass("head-culinary-transition");
            $(".head-adoni").removeClass("head-adoni-transition");

            $(".logo-aniba").addClass("logo-aniba-scale");
            $(".logo-aniba").addClass("opacity-0");
            $(".logo-aniba").removeClass("opacity-100");
            $(".logo-aniba-text").addClass("opacity-0");
            $(".logo-aniba-text").removeClass("opacity-100");

            $(".navbar").addClass("add-bg-brown");
            $(".navbar").removeClass("add-bg-light-brown");

            $(".navbar-center-logo").removeClass("navbar-transition");
            $(".navbar-start .instagram").attr('src','{{asset('images/instagram.png')}}');
            $(".navbar-start .facebook").attr('src','{{asset('images/facebook.png')}}');
            
        } else {
            $(".navbar-center-logo").removeClass("opacity-100");
            $(".navbar-center-logo").addClass("opacity-0");
            $(".navbar-center-text").removeClass("opacity-100");
            $(".navbar-center-text").addClass("opacity-0");

            $(".navbar-center-logo").addClass("logo-aniba-scale-2");
            $(".navbar-center-logo").addClass("logo-aniba-scale-2");
            $(".navbar-center-logo").removeClass("logo-aniba-scale-1");

            $(".culinary").removeClass("culinary-transition");
            $(".adoni").removeClass("adoni-transition");
            $(".head-culinary").addClass("head-culinary-transition");
            $(".head-adoni").addClass("head-adoni-transition");

            $(".logo-aniba").addClass("opacity-100");
            $(".logo-aniba").removeClass("opacity-0");
            $(".logo-aniba-text").addClass("opacity-100");
            $(".logo-aniba-text").removeClass("opacity-0");
            $(".logo-aniba").removeClass("logo-aniba-scale");
            $(".navbar-center-logo").addClass("navbar-transition");
            $(".navbar").removeClass("add-bg-brown");         
        }
    });
   
   
    //section 1
    $(window).scroll(function () {
        var add_animation = $('.section1').offset().top - 280 ;
        if ($(window).scrollTop() > add_animation) {

            $('.our-story-text').addClass('opacity-100');
            $('.our-story-text').removeClass('opacity-0');
            $('.line').addClass('line-transition');
            $('.box').addClass('visible');
            $('.star-text').removeClass('opacity-0');
            $('.star-text').addClass('opacity-100');
            $('.story-text').addClass('story-text-animation');
            $('.map').addClass('map-animation');
            $('.point').addClass('point-animation');
            $('.voyage').addClass('voyage-animation');
            $('.book-button').addClass('book-button-animation');
            $('.star-text').text('Our Story');
            $('#burger').css('opacity',1);

            $(".hover").addClass('d-block');
            $(".hover").removeClass('d-none');
            $(".drop").removeClass('d-block');
            $(".drop").addClass('d-none');
            $('#burger').css('cursor','pointer');
            $('#burger').css('pointer-events','all');

        }else{
            $('#burger').css('opacity',0);
            $('.star-text').addClass('opacity-0');
            $('.star-text').removeClass('opacity-100');
            $('.line').removeClass('line-transition');
            $('.box').removeClass('visible');
            $('.story-text').removeClass('story-text-animation');
            $('.map').removeClass('map-animation');
            $('.point').removeClass('point-animation');
            $('.voyage').removeClass('voyage-animation');
            $('.book-button').removeClass('book-button-animation');
            // $(".navbar-start").removeClass("opacity-0");
            $(".hover").removeClass('d-block');
            $(".hover").addClass('d-none');
            $(".drop").addClass('d-block');
            $(".drop").removeClass('d-none');
            $('#burger').css('cursor','default');
            $('#burger').css('pointer-events','none');
        }
    });

    //section 2
    $(window).scroll(function () {
        var replace_star = $('.section2').offset().top - 330 ;
        var add_animation = $('.section2').offset().top - 280 ;
        var add_animation2 = $('.section2').offset().top + 100 ;
        var replace_nav = $('.section2').offset().top - 65 ;


        if ($(window).scrollTop() > replace_star) {
            $('.star').attr('src','{{asset('images/star2.png')}}');
            $('.star-text').text('Our Chefs');
            $('.star-text').addClass('text-brown');
            $('.star-text').removeClass('text-white');
        }else{
            $('.star').attr('src','{{asset('images/star.png')}}');
            $('.star-text').removeClass('text-brown');
            $('.star-text').addClass('text-white');
        }

        if ($(window).scrollTop() > replace_nav) {
            $(".navbar-start .instagram").attr('src','{{asset('images/instagram_brown.png')}}');
            $(".navbar-start .facebook").attr('src','{{asset('images/facebook_brown.png')}}');  
            $('.navbar').addClass('add-bg-light-brown');
            $('.navbar-center-logo').attr('src','{{asset('images/aniba2.png')}}');
            $('.head-burger').attr('src','{{asset('images/burger1.png')}}');

            $('.head-culinary').addClass('text-brown');
            $('.head-adoni').addClass('text-brown');
            $('.head-reservation').addClass('text-brown');
            $('.head-contact').addClass('text-brown');

            $('.head-culinary').removeClass('text-white');
            $('.head-adoni').removeClass('text-white');
            $('.head-reservation').removeClass('text-white');
            $('.head-contact').removeClass('text-white');
        }else{
            $('.navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');    
            $('.head-burger').attr('src','{{asset('images/burger.png')}}');
            $('.head-culinary').removeClass('text-brown');
            $('.head-adoni').removeClass('text-brown');
            $('.head-reservation').removeClass('text-brown');
            $('.head-contact').removeClass('text-brown');

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');   
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white'); 
            $('.navbar').removeClass('add-bg-light-brown');
            
        }

        if($(window).scrollTop() > add_animation ){
            $('.line2').addClass('line-transition2');
            $('.title1').addClass('center-animation');
            $('.chef-desc1').addClass('center-animation');
            $('.image-chefs1').addClass('center-animation');
            $('.state1').addClass('center-animation');
        }else{
            // $('.myslider').slick('slickGoTo', 0);
            $('.line2').removeClass('line-transition2');
            $('.title1').removeClass('center-animation');
            $('.chef-desc1').removeClass('center-animation');
            $('.image-chefs1').removeClass('center-animation');
            $('.state1').removeClass('center-animation');
            
            $('.line3').removeClass('line-transition');
            $('.title2').removeClass('center-animation');
            $('.chef-desc2').removeClass('center-animation');
            $('.image-chefs2').removeClass('center-animation');
            $('.state2').removeClass('center-animation');
        }
        if ($(window).scrollTop() > add_animation2) {
            $('.title2').addClass('center-animation');
            $('.chef-desc2').addClass('center-animation');
            $('.image-chefs2').addClass('center-animation');
            $('.state2').addClass('center-animation');
            $('.line3').addClass('line-transition2');
            
        }else{
            $('.title2').removeClass('center-animation');
            $('.chef-desc2').removeClass('center-animation');
            $('.image-chefs2').removeClass('center-animation');
            $('.state2').removeClass('center-animation');
            $('.line3').removeClass('line-transition2');
        }
        // $('.myslider').on('afterChange', function(event, slick, currentSlide){
        //     if (currentSlide == 1) {
        //         $('.title2').addClass('center-animation');
        //         $('.chef-desc2').addClass('center-animation');
        //         $('.image-chefs2').addClass('center-animation');
        //         $('.state2').addClass('center-animation');
        //         $('.line3').addClass('line-transition');
    
    
        //         $('.line2').removeClass('line-transition2');
        //         $('.title1').removeClass('center-animation');
        //         $('.chef-desc1').removeClass('center-animation');
        //         $('.image-chefs1').removeClass('center-animation');
        //         $('.state1').removeClass('center-animation');

        //         $('#slick-slide00 button').addClass('opacity-100');
        //         $('#slick-slide01 button').addClass('opacity-0');
                
        //         $('#slick-slide00 button').removeClass('opacity-0');
        //         $('#slick-slide01 button').removeClass('opacity-100');

        //     }else{
        //         $('.title2').removeClass('center-animation');
        //         $('.chef-desc2').removeClass('center-animation');
        //         $('.image-chefs2').removeClass('center-animation');
        //         $('.state2').removeClass('center-animation');
        //         $('.line3').removeClass('line-transition');


        //         $('.line2').addClass('line-transition2');
        //         $('.title1').addClass('center-animation');
        //         $('.chef-desc1').addClass('center-animation');
        //         $('.image-chefs1').addClass('center-animation');
        //         $('.state1').addClass('center-animation');

        //         $('#slick-slide00 button').removeClass('opacity-100');
        //         $('#slick-slide01 button').removeClass('opacity-0');
                
        //         $('#slick-slide00 button').addClass('opacity-0');
        //         $('#slick-slide01 button').addClass('opacity-100');
                
        //     }
        // });
       
    });

    //section 2_1
    // $(window).scroll(function () {
    //     var add_animation = $('.section2_1').offset().top - 280 ;
    //     if ($(window).scrollTop() > add_animation) {
    //         $('.title2').addClass('center-animation');
    //         $('.chef-desc2').addClass('center-animation');
    //         $('.image-chefs2').addClass('center-animation');
    //         $('.state2').addClass('center-animation');
    //         $('.line3').addClass('line-transition2');
            
    //     }else{
    //         $('.title2').removeClass('center-animation');
    //         $('.chef-desc2').removeClass('center-animation');
    //         $('.image-chefs2').removeClass('center-animation');
    //         $('.state2').removeClass('center-animation');
    //         $('.line3').removeClass('line-transition2');
    //     }
    // });
    



//section 3
    $(window).scroll(function () {
        var remove_star = $('.section3').offset().top - 300 ;
        var replace_nav = $('.section3').offset().top - 80 ;
        var replace_reservation = $('.section3').offset().top - 250 ;
        if ($(this).scrollTop() > remove_star && $(this).scrollTop() < $('.section4').offset().top - 280){  
           $('.sidebarNav-star').addClass('opacity-0');
           $('.sidebarNav-star').removeClass('opacity-100');
           
           $('.topNav-star').addClass('opacity-100');
           $('.topNav-star').removeClass('opacity-0');

            $('.sidebarNav').addClass('sidebarNav-reservation');
            $('.sidebarNav-star').css('display','none');
            // $('.sidebarNav-star').addClass('sidebarNav-star-reservation');
            $('.reservation-star').css('display','block');
        }else {
            $('.sidebarNav-star').removeClass('opacity-0');
            $('.sidebarNav-star').addClass('opacity-100');
            $('.topNav-star').addClass('opacity-0');
            $('.topNav-star').removeClass('opacity-100');

            $('.sidebarNav').removeClass('sidebarNav-reservation');
            // $('.sidebarNav-star').removeClass('sidebarNav-star-reservation');
            $('.sidebarNav-star').css('display','block');
        }


        if($(this).scrollTop() > replace_reservation && $(this).scrollTop() < $('.section4').offset().top - 280){
            $('.sidebarNav').addClass('sidebarNav-reservation2');
            $('.sidebarNav-star').css('display','none');
            // $('.sidebarNav-star').addClass('sidebarNav-star-reservation');
            $('.reservation-star').css('display','block');
        }else{
            $('.sidebarNav').removeClass('sidebarNav-reservation2');
            // $('.sidebarNav-star').removeClass('sidebarNav-star-reservation');
            $('.sidebarNav-star').css('display','block');
        }


        if($(this).scrollTop() > replace_nav && $(this).scrollTop() < $('.section4').offset().top - 280){
            $(".navbar-start .instagram").attr('src','{{asset('images/instagram.png')}}');
            $(".navbar-start .facebook").attr('src','{{asset('images/facebook.png')}}'); 
            $(".navbar").addClass("add-bg-brown");
            $(".navbar").removeClass("add-bg-light-brown");
            $('.navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');
            $('.head-burger').attr('src','{{asset('images/burger.png')}}');

            $('.head-culinary').removeClass('text-brown');
            $('.head-adoni').removeClass('text-brown');
            $('.head-reservation').removeClass('text-brown');
            $('.head-contact').removeClass('text-brown');

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white');
            $('.sidebarNav').addClass('sidebarNav-reservation1');

        }else{
            $('.sidebarNav').removeClass('sidebarNav-reservation1');

        }
       
    });
//section 4
    $(window).scroll(function () {
        var add_animation = $('.section4').offset().top - 280 ;
        var replace_nav = $('.section4').offset().top - 80 ;
        
        if ($(this).scrollTop() > add_animation){ 
            $('.sidebarNav-star').removeClass('opacity-0');
            $('.sidebarNav-star').addClass('opacity-100');
            $('.topNav-star').removeClass('opacity-100');
            $('.topNav-star').addClass('opacity-0');
            $('.star-text').text('Private Events');

            $('.line4').addClass('line-transition');
            $('.title-sec4').addClass('center-animation');
            $('.text-sec-4-1').addClass('center-animation');
            $('.text-sec-4-2').addClass('center-animation');
            $('.image-sec-4').addClass('center-animation');
        }else{
            $('.line4').removeClass('line-transition');
            $('.title-sec4').removeClass('center-animation');
            $('.text-sec-4-1').removeClass('center-animation');
            $('.text-sec-4-2').removeClass('center-animation');
            $('.image-sec-4').removeClass('center-animation');
        }
        
        if($(this).scrollTop() > replace_nav){
            $(".navbar-start .instagram").attr('src','{{asset('images/instagram_brown.png')}}');
            $(".navbar-start .facebook").attr('src','{{asset('images/facebook_brown.png')}}'); 
            $(".navbar").removeClass("add-bg-brown");
            $(".navbar").addClass("add-bg-light-brown");
            $('.navbar-center-logo').attr('src','{{asset('images/aniba2.png')}}');
            $('.head-burger').attr('src','{{asset('images/burger1.png')}}');

            $('.head-culinary').addClass('text-brown');
            $('.head-adoni').addClass('text-brown');
            $('.head-reservation').addClass('text-brown');
            $('.head-contact').addClass('text-brown');

            $('.head-culinary').removeClass('text-white');
            $('.head-adoni').removeClass('text-white');
            $('.head-reservation').removeClass('text-white');
            $('.head-contact').removeClass('text-white');
        }
    
    });
    //section 5
    $(window).scroll(function () {
        // var add_animation = $('.section4').offset().top - 280 ;
        var replace_nav = $('.section5').offset().top ;
        var replace_star = $('.section5').offset().top - 330 ;

        if ($(this).scrollTop() > replace_nav){  
            $(".navbar-start .instagram").attr('src','{{asset('images/instagram.png')}}');
            $(".navbar-start .facebook").attr('src','{{asset('images/facebook.png')}}'); 
            $(".navbar").addClass("add-bg-transparent");
            $(".navbar").removeClass("add-bg-light-brown");
            $('.navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');
            $('.head-burger').attr('src','{{asset('images/burger.png')}}');

            $('.head-culinary').removeClass('text-brown');
            $('.head-adoni').removeClass('text-brown');
            $('.head-reservation').removeClass('text-brown');
            $('.head-contact').removeClass('text-brown');

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white');

            $('.section5-content').addClass('center-animation');
            $('.line5').addClass('line-transition');
        }else{
            $('.line5').removeClass('line-transition');
            $('.section5-content').removeClass('center-animation')
            $(".navbar").removeClass("add-bg-transparent");

        }

        if ($(window).scrollTop() > replace_star) {
            $('.star').attr('src','{{asset('images/star.png')}}');
            $('.star-text').text('Contact Us');
            $('.star-text').addClass('text-white');
            $('.star-text').removeClass('text-brown');
        }
    });

    //section 6
    $(window).scroll(function () {
        var replace_nav = $('.section6').offset().top - 80 ;
        var replace_star = $('.section6').offset().top - 330 ;

        if ($(this).scrollTop() > replace_nav){  
            $(".navbar-start .instagram").attr('src','{{asset('images/instagram_brown.png')}}');
            $(".navbar-start .facebook").attr('src','{{asset('images/facebook_brown.png')}}'); 
            $(".navbar").removeClass("add-bg-transparent");
            $(".navbar").addClass("add-bg-light-brown");
            $('.navbar-center-logo').attr('src','{{asset('images/aniba2.png')}}');
            $('.head-burger').attr('src','{{asset('images/burger1.png')}}');

            $('.head-culinary').addClass('text-brown');
            $('.head-adoni').addClass('text-brown');
            $('.head-reservation').addClass('text-brown');
            $('.head-contact').addClass('text-brown');

            $('.head-culinary').removeClass('text-white');
            $('.head-adoni').removeClass('text-white');
            $('.head-reservation').removeClass('text-white');
            $('.head-contact').removeClass('text-white');

            $('.section6-content').addClass('center-animation');
            $('.line6').addClass('line-transition');
        }else{
            $('.line6').removeClass('line-transition');
            $('.section6-content').removeClass('center-animation')

        }

        if ($(window).scrollTop() > replace_star) {
            $('.star').attr('src','{{asset('images/star2.png')}}');
            $('.star-text').text('Press Us');
            $('.star-text').removeClass('text-white');
            $('.star-text').addClass('text-brown');
        }
    });
    $(window).scroll(function () {
        var replace_star = $('.page-footer').offset().top - 400 ;
        if ($(window).scrollTop() > replace_star) {
            $('.star').addClass('d-none');
            $('.star-text').addClass('d-none');
        }else{
            $('.star').removeClass('d-none');
            $('.star-text').removeClass('d-none');
        }
    });


//     $('.myslider').slick({
//         slidesToScroll: 1,
//         arrows: false,
//         dots: true,
//         vertical: true,
//         verticalSwiping: true,
//     });
//   $('.slider3').slick({
//     // dots: true,
//     infinite: true,
//     slidesToShow: 1,
//     centerMode: true,
//     vertical: false,
//     arrows: true,
//      prevArrow: '<button class="slide-arrow prev-arrow"></button>',
//     nextArrow: '<button class="slide-arrow next-arrow"></button>'

//   });
  
    $('.accordion-close').click(function(){
        $('.accordion ul li').siblings().removeClass('expanded');
        $('.accordion ul li').siblings().removeClass('collapsed');
        $('.accordion ul li').siblings().find($('.side')).removeClass('expanded-side');
        $('.accordion ul li').siblings().find($('.side')).removeClass('collapsed-side');
        $('.accordion ul li').siblings().find($('.main')).removeClass('click-main');

    });
    $('.accordion ul li').click(function(){
        if ($(this).hasClass('collapsed')) {

            $(this).removeClass('collapsed');
            $(this).siblings().removeClass('expanded');
            $(this).siblings().find($('.side')).removeClass('expanded-side');
            $(this).siblings().find($('.side')).addClass('collapsed-side');
            $(this).siblings().find($('.main')).removeClass('click-main');

            $(this).addClass('expanded');
            $(this).find($('.side')).addClass('expanded-side');
            $(this).find($('.see-more')).addClass('opacity-0');
            $(this).find($('.side')).removeClass('collapsed-side');
            $(this).find($('.main')).addClass('click-main');
            
            $(this).siblings().addClass('collapsed');
            
            // $(this).siblings().find($('.main')).addClass('click-main');
        }else{
            $(this).toggleClass('expanded');
            $(this).find($('.side')).toggleClass('expanded-side');
            $(this).siblings().toggleClass('collapsed');
            $(this).siblings().find($('.side')).toggleClass('collapsed-side');
            $(this).find($('.main')).toggleClass('click-main');
            $(this).find($('.see-more')).toggleClass('opacity-0');

            
        }

    });
	
    var sidebarNavButton = document.querySelectorAll(".sidebarNavItem");
    var sidebarNavSection = document.querySelectorAll(".section");

    //checking for position to turn UX nav button orange

    $(sidebarNavSection).each(function (index) {
        var navSec = sidebarNavSection[index];
        var navBut = sidebarNavButton[index];
        $(window).scroll(function () {
            var navPos = $(navSec).offset().top;
            var secBot = navPos + $(navSec).outerHeight(true);
        });
    });

</script>

</html>