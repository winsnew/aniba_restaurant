<!DOCTYPE html>
<html data-wf-domain="native-smooth-scroll.webflow.io" data-wf-page="6148be436c517909502ea458" data-wf-site="6148be436c5179b3ed2ea459">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Aniba</title>
	<link href="{{asset('css/app_all_1904.css')}}?v=1" rel="stylesheet" type="text/css">
	<link href="{{asset('css/app_mobile_1904.css')}}?v=1" rel="stylesheet" type="text/css">
	<link href="{{asset('css/app_0302.scss')}}?v=1" rel="stylesheet" type="text/css">

    {{-- <link href="{{ asset($favicon->url??'').'?v='.time() }}" rel="shortcut icon" type="image/x-icon"> --}}
    <link href={{ $favicon ? asset($favicon->url).'?v='.time() : '' }} rel="shortcut icon" type="image/x-icon">
    <link href={{ $favicon ? asset($favicon->url).'?v='.time() : '' }} rel="apple-touch-icon">

    {{-- Metadata --}}
    @include('meta::manager', [
        'title' => $meta ? $meta->title : '',
        'description' => $meta ? $meta->description : '',
        'keywords' => $meta ? $meta->keywords : '',
        'image' => $meta ? asset('storage/'. $meta->image) : ''
    ])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/kenwheeler/slick/master/slick/slick.css" rel="stylesheet" crossorigin="anonymous">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:600px;}
        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    <style>
        a{
            text-decoration: none !important;
            color: inherit;
        }
    </style>
    {{-- <link href="https://cdn.rawgit.com/kenwheeler/slick/master/slick/slick-theme.css" rel="stylesheet" crossorigin="anonymous"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JY4LTHG3DH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JY4LTHG3DH');
</script>

<!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '255103640539161');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=255103640539161&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

{{-- mganiface popup style --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

</head>

<body style="scroll-behavior: smooth;">
    
    {{ $slot }}
    
</body>

<script src="{{asset('js/js-jquery-3.5.1.min.dc5e7f18c8.js')}}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
{{-- <script src="js/js-jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
{{-- Gallery Script --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
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
        if ($(window).scrollTop() > nav_trans +230 ) {
            $(".drop .sec10").addClass("sidebarNavIn");
            $(".drop .sec10").css('pointer-events','none');
            // $(".hover .sec7").addClass("sidebarNavIn");
            // $(".hover .sec7").css('pointer-events','none');
        } else {
            $(".drop .sec10").removeClass("sidebarNavIn");
            $(".drop .sec10").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +270 ) {
            $(".drop .sec9").addClass("sidebarNavIn");
            $(".drop .sec9").css('pointer-events','none');
            // $(".hover .sec7").addClass("sidebarNavIn");
            // $(".hover .sec7").css('pointer-events','none');
        } else {
            $(".drop .sec9").removeClass("sidebarNavIn");
            $(".drop .sec9").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +300 ) {
            $(".drop .sec8").addClass("sidebarNavIn");
            $(".drop .sec8").css('pointer-events','none');
            // $(".hover .sec7").addClass("sidebarNavIn");
            // $(".hover .sec7").css('pointer-events','none');
        } else {
            $(".drop .sec8").removeClass("sidebarNavIn");
            $(".drop .sec8").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +340 ) {
            $(".drop .sec7").addClass("sidebarNavIn");
            $(".drop .sec7").css('pointer-events','none');
           
        } else {
            $(".drop .sec7").removeClass("sidebarNavIn");
            $(".drop .sec7").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +360 ) {
            $(".drop .sec6").addClass("sidebarNavIn");
            $(".drop .sec6").css('pointer-events','none');
            
        } else {
            $(".drop .sec6").removeClass("sidebarNavIn");
            $(".drop .sec6").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +390 ) {
            $(".drop .sec5").addClass("sidebarNavIn");
            $(".drop .sec5").css('pointer-events','none');
           
        } else {
            $(".drop .sec5").removeClass("sidebarNavIn");
            $(".drop .sec5").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +410 ) {
            $(".drop .sec4").addClass("sidebarNavIn");
            $(".drop .sec4").css('pointer-events','none');
            
        } else {
            $(".drop .sec4").removeClass("sidebarNavIn");
            $(".drop .sec4").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +450 ) {
            $(".drop .sec3").addClass("sidebarNavIn");
            $(".drop .sec3").css('pointer-events','none');
           
        } else {
            $(".drop .sec3").removeClass("sidebarNavIn");
            $(".drop .sec3").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +470 ) {
            $(".drop .sec2").addClass("sidebarNavIn");
            $(".drop .sec2").css('pointer-events','none');
        } else {
            $(".drop .sec2").removeClass("sidebarNavIn");
            $(".drop .sec2").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > nav_trans +500 ) {
            $(".drop .sec1").addClass("sidebarNavIn");
            $(".drop .sec1").css('pointer-events','none');
        } else {
            $(".drop .sec1").removeClass("sidebarNavIn");
            $(".drop .sec1").css('pointer-events','');
        }
    });
    if($(window).width() >= 1024){
    
        $('a[href^="#"]').click(function() { 
            // Need both `html` and `body` for full browser support
        
            $("html, body").animate({
                scrollTop: $( $(this).attr("href") ).offset().top,
            },10);
            return false;
        });
    }else{
        $('a[href^="#"]').click(function() { 
            // Need both `html` and `body` for full browser support
        
            $("html, body").animate({
                
                scrollTop: $( $(this).attr("href") ).offset().top - 100,
            });
            return false;
        });
        
}
    $('.sec4').click(function() { 
        // Need both `html` and `body` for full browser support
       //contact us scroll position
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+100
        },10);
        return false;
    });
    $('.sec5').click(function() { 
        // Need both `html` and `body` for full browser support
       //contact us scroll position
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+100
        },10);
        return false;
    });
    $('').click(function() { 
        // Need both `html` and `body` for full browser support
       //contact us scroll position
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+100
        },10);
        return false;
    });
    $('.sec6').click(function() { 
        // Need both `html` and `body` for full browser support
       //contact us scroll position
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+35
        },10);
        return false;
    });
    $('.sec7').click(function() { 
        // Need both `html` and `body` for full browser support
       //contact us scroll position
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+35
        },10);
        return false;
    });
    $('.sec8').click(function() { 
        // Need both `html` and `body` for full browser support
       //contact us scroll position
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+100
        },10);
        return false;
    });
    $('.sec9').click(function() { 
        // Need both `html` and `body` for full browser support
       //contact us scroll position
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+100
        },10);
        return false;
    });
    $('.sec10').click(function() { 
        // Need both `html` and `body` for full browser support
       //contact us scroll position
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+35
        },10);
        return false;
    });
    $('.head-contact').click(function() { 
        // Need both `html` and `body` for full browser support
       
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top+100
        },10);
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
        },10);
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
        $( $(this).find('.sec8')).removeClass("sidebarNavIn");
        $( $(this).find('.sec9')).removeClass("sidebarNavIn");
        $( $(this).find('.sec10')).removeClass("sidebarNavIn");
        $( $(this).find('.sidebarNav-star')).css('z-index','123');
        $( $(this).find('.sidebarNav')).css('z-index','124');
        // $('.hover .sec1').css("z-index",'232');

        $('body').css('overflow','hidden');
        $('.backdrop').css('display','block');

        $('.sidebarNav-star .star').addClass('opacity-0');
        $('.sidebarNav-star .star').removeClass('opacity-100');
        $('.sidebarNav-star .hov-star').addClass('opacity-100');
        $('.sidebarNav-star .hov-star').removeClass('opacity-0');

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
        $($(this).find(".sec8")).css('pointer-events','');
        $($(this).find(".sec9")).css('pointer-events','');
        $($(this).find(".sec10")).css('pointer-events','');
        
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
        $('.hover .sec8').addClass("sidebarNavIn");
        $('.hover .sec9').addClass("sidebarNavIn");
        $('.hover .sec10').addClass("sidebarNavIn");
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
        $('.hover .sec8').removeClass("sidebarNavIn");
        $('.hover .sec9').removeClass("sidebarNavIn");
        $('.hover .sec10').removeClass("sidebarNavIn");
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
        $(".hover .sec8").css('pointer-events','');
        $(".hover .sec9").css('pointer-events','');
        $(".hover .sec10").css('pointer-events','');
        
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
        $('.hover .sec8').addClass("sidebarNavIn");
        $('.hover .sec9').addClass("sidebarNavIn");
        $('.hover .sec10').addClass("sidebarNavIn");
        $('body').css('overflow','auto');
        $('.backdrop').css('display','none');
        $('.hover .star-text').removeClass('opacity-0');
        $('.hover .star-text').addClass('opacity-100');
        $('.hover .sidebarNav').css('display','none');

        $('.reservation-nav-text').addClass('opacity-100');
        $('.reservation-nav-text').removeClass('opacity-00');
    });


    // nav menu
    // $('#nav-menu').hover(function() {
    //     // $('#head-menu-item').collapse('toggle')
    //     if ($(this).hasClass('collapse')) {
    //         $('body').css('overflow', 'auto')
    //         $('.backdrop').css('display', 'none')
    //     } else {
    //         $('body').css('overflow', 'hidden')
    //         $('.backdrop').css('display', 'block')
    //     }
    // })
    $('#nav-menu').mouseenter(function() {
        $('#head-menu-item').collapse('show')
        $('body').css('overflow', 'hidden')
        $('.backdrop').css('display', 'block')
            
        // }
    })

    $('#nav-menu').mouseleave(function() {
        $('#head-menu-item').collapse('hide')
        $('body').css('overflow', 'auto')
        $('.backdrop').css('display', 'none')

        if ($('#burger').attr('data-click-state') == 0) {
            $('#burger').click()
        }
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
                $('.hover .sec8').removeClass("sidebarNavIn");
                $('.hover .sec9').removeClass("sidebarNavIn");
                $('.hover .sec10').removeClass("sidebarNavIn");
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
                $(".hover .sec8").css('pointer-events','');
                $(".hover .sec9").css('pointer-events','');
                $(".hover .sec10").css('pointer-events','');

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
                $('.hover .sec8').addClass("sidebarNavIn");
                $('.hover .sec9').addClass("sidebarNavIn");
                $('.hover .sec10').addClass("sidebarNavIn");
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
  

    //logo & navbar
    $(window).scroll(function () {
        if($(window).width() >= 1024){
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
        }else{
           
        }
    });

    // menu close on item click
    $('#head-menu-item .list-group-item').click(function(){
        console.log('click');
        if($('#head-menu-item').hasClass('show')){
            console.log('has class show');
            $('#head-menu-item').collapse('toggle')
        }
    })   
   
    //section 1
    var isStart = false
    $(window).scroll(function () {
        var add_animation = $('.section1').offset().top - 280 ;
        if($(window).width() >= 1024){
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
                if(!isStart){
                    playAnimate(true)
                    isStart = true
                }
                // playAnimate(true)
                // animateInterval = setInterval(animate, 1000)
            }else{
                $('#burger').css('opacity',0);
                $('.star-text').removeClass('opacity-100');
                $('.star-text').text('');
                $('.star-text').addClass('opacity-0');
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
                $('.point_sub-3').removeClass('point-animation');
                $('.label-point-3').removeClass('point-animation');
                $('.point_sub-2').removeClass('point-animation');
                $('.label-point-2').removeClass('point-animation');
                $('.point_sub-1').removeClass('point-animation');
                $('.label-point-1').removeClass('point-animation');
                if(isStart){
                    playAnimate(false)
                    isStart = false
                }
                // playAnimate(false)
                // clearInterval(animateInterval)
            }
        }else{
            var replace_logo_mobile = $('.top-mobile').offset().top +300 ;
            var add_animation = $('.mobile-section1').offset().top - 700 ;
            if ($(window).scrollTop() > replace_logo_mobile) {
                $(".mobile .navbar").addClass("add-bg-brown");
                $(".mobile .navbar").removeClass("add-bg-transparent");
                $(".mobile .navbar").addClass("after-homepage");
                $(".navbar-center-logo").addClass("logo-aniba-scale-1");
                $(".navbar-center-logo").removeClass("mobile-logo-aniba-scale-2");
                // $(".navbar-center-logo").removeClass("navbar-transition");
                $(".mobile .navbar-brand").addClass("opacity-100");
                $(".mobile .navbar-brand").removeClass("opacity-0");
                $(".mobile .logo-aniba").addClass("mobile-logo-aniba-scale");
                $(".mobile .logo-aniba-text").addClass("aniba-animation");
                
            }else{
                $('.navbar-toggler').click(function() {
                    if ($('.navbar-collapse').hasClass('show')) {

                        $(".navbar-center-logo").addClass("mobile-logo-aniba-scale-2");
                        $(".navbar-center-logo").removeClass("logo-aniba-scale-click-1");
                    }else{
                        $(".navbar-center-logo").removeClass("mobile-logo-aniba-scale-2");
                        $(".navbar-center-logo").addClass("logo-aniba-scale-click-1");
                    }
                });
                if(!($('.mobile .navbar-collapse').hasClass('show'))){
                    $(".mobile .navbar").removeClass("add-bg-brown");  
                    $(".mobile .navbar").addClass("add-bg-transparent");
                    $(".mobile .navbar-brand").addClass("opacity-0");
                    $(".mobile .navbar-brand").removeClass("opacity-100");
                }
                $(".navbar-center-logo").addClass("mobile-logo-aniba-scale-2");
                $(".navbar-center-logo").removeClass("logo-aniba-scale-1");
                // $(".navbar-center-logo").addClass("navbar-transition");

                // $(".mobile .navbar").removeClass("add-bg-brown");  
                // $(".mobile .navbar").addClass("add-bg-transparent");
                
                $(".mobile .navbar").removeClass("after-homepage");
                $(".mobile .logo-aniba").removeClass("mobile-logo-aniba-scale");
                $(".mobile .logo-aniba-text").removeClass("aniba-animation");
            }
            if ($(window).scrollTop() > add_animation) {
                $('.mobile .line').addClass('line-transition');
                $('.mobile .story-text').addClass('story-text-animation');
                $('.mobile .map').addClass('map-animation');
                $('.mobile .point').addClass('point-animation');
                $('.mobile-voyage').addClass('mobile-animation');
                $('.mobile .book-voyage').addClass('mobile-animation');
                $('.mobile .title1').addClass('mobile-animation');
                $('.mobile-desc').addClass('mobile-animation');
                // $('.point_sub-1').addClass('point-animation');
                // $('.label-point-1').addClass('point-animation');
                if(!isStart){
                    // $('.mobile .mobile-point-sub-3').addClass('point-animation')
                    // $('.mobile .mobile-label-point-3').addClass('point-animation')
                    playAnimate(true)
                    isStart = true
                }
                
            } else {
                
                $('.mobile .line').removeClass('line-transition');
                $('.mobile .story-text').removeClass('story-text-animation');
                $('.mobile .map').removeClass('map-animation');
                $('.mobile .point').removeClass('point-animation');
                $('.mobile-voyage').removeClass('mobile-animation');
                $('.mobile .book-voyage').removeClass('mobile-animation');
                $('.mobile .title1').removeClass('mobile-animation');
                $('.mobile-desc').removeClass('mobile-animation');
                $('.mobile-point-sub-1').removeClass('point-animation');
                $('.mobile-label-point-1').removeClass('point-animation');
                $('.mobile-point-sub-2').removeClass('point-animation');
                $('.mobile-label-point-2').removeClass('point-animation');
                $('.mobile-point-sub-3').removeClass('point-animation');
                $('.mobile-label-point-3').removeClass('point-animation');
                if(isStart){
                    playAnimate(false)
                    isStart = false
                }
            }

        }
    });
    // Section 1 Pointer Animation Interval
    var intervalId
    function playAnimate(start){
        if(start){
            setTimeout(() => {
                $('.point_sub-3').addClass('point-animation');
                $('.label-point-3').addClass('point-animation');
                $('.mobile .mobile-point-sub-3').addClass('point-animation')
                $('.mobile .mobile-label-point-3').addClass('point-animation') 
                intervalId = setInterval(animate, 1000)
            }, 300);
        }else{
            clearInterval(intervalId)
        }
    }
    function animate(){
        var point_sub1 = $('.point_sub-1');
        var point_sub2 = $('.point_sub-2');
        var point_sub3 = $('.point_sub-3');
        var label_point1 = $('.label-point-1');
        var label_point2 = $('.label-point-2');
        var label_point3 = $('.label-point-3');
        var mobile_point_sub1 = $('.mobile .mobile-point-sub-1')
        var mobile_point_sub2 = $('.mobile .mobile-point-sub-2')
        var mobile_point_sub3 = $('.mobile .mobile-point-sub-3')
        var mobile_label_point1 = $('.mobile .mobile-label-point-1')
        var mobile_label_point2 = $('.mobile .mobile-label-point-2')
        var mobile_label_point3 = $('.mobile .mobile-label-point-3')
        if($(window).width() >= 1024){
            if(point_sub3.hasClass('point-animation') && label_point3.hasClass('point-animation')){
                point_sub1.removeClass('point-animation')
                point_sub2.addClass('point-animation')
                point_sub3.removeClass('point-animation')
                label_point1.removeClass('point-animation')
                label_point2.addClass('point-animation')
                label_point3.removeClass('point-animation')
            }else if(point_sub2.hasClass('point-animation') && label_point2.hasClass('point-animation')){
                point_sub1.addClass('point-animation')
                point_sub2.removeClass('point-animation')
                point_sub3.removeClass('point-animation')
                label_point1.addClass('point-animation')
                label_point2.removeClass('point-animation')
                label_point3.removeClass('point-animation')
            }else{
                point_sub1.removeClass('point-animation')
                point_sub2.removeClass('point-animation')
                point_sub3.addClass('point-animation')
                label_point1.removeClass('point-animation')
                label_point2.removeClass('point-animation')
                label_point3.addClass('point-animation')
            }
        }else{
            if(mobile_point_sub3.hasClass('point-animation') && mobile_label_point3.hasClass('point-animation')){
                mobile_point_sub1.removeClass('point-animation')
                mobile_point_sub2.addClass('point-animation')
                mobile_point_sub3.removeClass('point-animation')
                mobile_label_point1.removeClass('point-animation')
                mobile_label_point2.addClass('point-animation')
                mobile_label_point3.removeClass('point-animation')
            }else if(mobile_point_sub2.hasClass('point-animation') && mobile_label_point2.hasClass('point-animation')){
                mobile_point_sub1.addClass('point-animation')
                mobile_point_sub2.removeClass('point-animation')
                mobile_point_sub3.removeClass('point-animation')
                mobile_label_point1.addClass('point-animation')
                mobile_label_point2.removeClass('point-animation')
                mobile_label_point3.removeClass('point-animation')
            }else{
                mobile_point_sub1.removeClass('point-animation')
                mobile_point_sub2.removeClass('point-animation')
                mobile_point_sub3.addClass('point-animation')
                mobile_label_point1.removeClass('point-animation')
                mobile_label_point2.removeClass('point-animation')
                mobile_label_point3.addClass('point-animation')
            } 
        }
    }
    

//section 2
$(window).scroll(function () {
    if($(window).width() >= 1024){

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
            $('.head-menu').addClass('text-brown');
            $('#head-menu-item .list-group').addClass('bg-light-brown')
            // $('#head-menu-item .list-group-item').addClass('text-brown border-brown')
            
            $('.head-culinary').removeClass('text-white');
            $('.head-adoni').removeClass('text-white');
            $('.head-reservation').removeClass('text-white');
            $('.head-contact').removeClass('text-white');
            $('.head-menu').removeClass('text-white');
            $('#head-menu-item .list-group').removeClass('bg-brown')
            // $('#head-menu-item .list-group-item').removeClass('text-white border-light-brown')
        }else{
            $('.navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');    
            $('.head-burger').attr('src','{{asset('images/burger.png')}}');
            $('.head-culinary').removeClass('text-brown');
            $('.head-adoni').removeClass('text-brown');
            $('.head-reservation').removeClass('text-brown');
            $('.head-contact').removeClass('text-brown');
            $('.head-menu').removeClass('text-brown');
            $('#head-menu-item .list-group').removeClass('bg-light-brown');
            // $('#head-menu-item .list-group-item').removeClass('text-brown border-brown');
            $('#head-menu-item .list-group-item').removeClass('border-brown');

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');   
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white'); 
            $('.navbar').removeClass('add-bg-light-brown');
            $('.head-menu').addClass('text-white');
            $('#head-menu-item .list-group').addClass('bg-brown')
            // $('#head-menu-item .list-group-item').addClass('text-white border-light-brown')
            
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
    }else{
        var replace_nav_mobile = $('.mobile-section2').offset().top - 100 ;
        var add_animation = $('.mobile-section2').offset().top - 700 ;
        if($(window).scrollTop() > replace_nav_mobile ){
            $(".mobile .navbar").removeClass("add-bg-brown");  
            $(".mobile .navbar").addClass("add-bg-light-brown");
            $('.mobile .navbar-center-logo').attr('src','{{asset('images/aniba2.png')}}');
            $('.mobile .head-culinary').addClass('text-brown');
            $('.mobile .head-adoni').addClass('text-brown');
            $('.mobile .head-culinary').removeClass('text-white');
            $('.mobile .head-adoni').removeClass('text-white');
            $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger1.png)');
        }else{
            $(".mobile .navbar").addClass("add-bg-brown");  
            $(".mobile .navbar").removeClass("add-bg-light-brown");
            $('.mobile .navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');
            $('.mobile .head-culinary').addClass('text-white');
            $('.mobile .head-adoni').addClass('text-white');
            $('.mobile .head-culinary').removeClass('text-brown');
            $('.mobile .head-adoni').removeClass('text-brown');
            $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger.png)');
        }
        if($(window).scrollTop() > add_animation ){
            $('.mobile .line2').addClass('line-transition');
            $('.mobile .title2').addClass('mobile-animation');
            $('.mobile-section2 .accordion').addClass('mobile-animation');
        }else{
            $('.mobile .line2').removeClass('line-transition');
            $('.mobile .title2').removeClass('mobile-animation');
            $('.mobile-section2 .accordion').removeClass('mobile-animation');
            
            $('.navbar-toggler').click(function() {
            if ($('.navbar-collapse').hasClass('show')) {
                $(".navbar-center-logo").removeClass("mobile-logo-aniba-scale-2");
            }else{
                $(".navbar-center-logo").addClass("logo-aniba-scale-click-1");
            }
            });

        }
        
    }
});

// Section 3
$(window).scroll(function(){
    if($(window).width() >= 1024){
        var replace_star = $('.section3').offset().top - 330 ;
        var add_animation = $('.section3').offset().top - 280 ;
        var add_animation2 = $('.section3').offset().top + 100 ;
        var replace_nav = $('.section3').offset().top - 65 ;

        if($(window).scrollTop() > replace_star){
            $('.star').attr('src', `{{ asset('images/star.png') }}`)
            $('.star-text').text('Our Team')
            $('.star-text').addClass('text-white')
            $('.star-text').removeClass('text-brown')
        }
        
        if($(window).scrollTop() > replace_nav){
            $('.navbar-start .instagram').attr('src', `{{ asset('images/instagram.png') }}`)
            $('.navbar-start .facebook').attr('src', `{{ asset('images/facebook.png') }}`)
            $('.navbar').removeClass('add-bg-light-brown');
            $('.navbar').removeClass('add-bg-transparent')
            $('.navbar-center-logo').attr('src', `{{ asset('images/aniba.png') }}`)
            $('.head-burger').attr('src', `{{ asset('images/burger.png') }}`)

            $('.head-culinary').removeClass('text-brown');
            $('.head-adoni').removeClass('text-brown');
            $('.head-reservation').removeClass('text-brown');
            $('.head-contact').removeClass('text-brown');
            $('.head-menu').removeClass('text-brown');
            $('#head-menu-item .list-group').removeClass('bg-light-brown')
            // $('#head-menu-item .list-group-item').removeClass('text-brown border-brown')

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white');
            $('.head-menu').addClass('text-white')
            $('#head-menu-item .list-group').addClass('bg-brown')
            // $('#head-menu-item .list-group-item').addClass('text-white border-light-brown')
        }

        if($(window).scrollTop() > add_animation){
            $('.line4').addClass('line-transition2')
            $('.title3').addClass('center-animation')
            $('.team-desc1').addClass('center-animation')
            $('.image-team1').addClass('center-animation')
        }else{
            $('.line4').removeClass('line-transition2')
            $('.title3').removeClass('center-animation')
            $('.team-desc1').removeClass('center-animation')
            $('.image-team1').removeClass('center-animation')
        }

        if($(window).scrollTop() > add_animation2){
            $('.line5').addClass('line-transition2')
            $('.title4').addClass('center-animation')
            $('.team-desc2').addClass('center-animation')
            $('.image-team2').addClass('center-animation')
        }else{
            $('.line5').removeClass('line-transition2')
            $('.title4').removeClass('center-animation')
            $('.team-desc2').removeClass('center-animation')
            $('.image-team2').removeClass('center-animation')
        }
    }else{
        var replace_nav_mobile = $('.mobile-section3').offset().top - 110 ;
        var add_animation = $('.mobile-section3').offset().top - 700 ;
        if($(window).scrollTop() > replace_nav_mobile){
            $('.mobile .navbar').removeClass('add-bg-light-brown')
            $('.mobile .navbar').addClass('add-bg-brown')
            $('.mobile .navbar-center-logo').attr('src', `{{ asset('images/aniba.png') }}`)
            $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger.png)');
            $('.mobile .head-culinary').removeClass('text-brown')
            $('.mobile .head-adoni').removeClass('text-brown');
            $('.mobile .head-culinary').addClass('text-white');
            $('.mobile .head-adoni').addClass('text-white');
        }

        if($(window).scrollTop() > add_animation){
            $('.mobile .line3').addClass('line-transition')
            $('.mobile .title3').addClass('mobile-animation')
            $('.mobile-section3 .accordion').addClass('mobile-animation')
        }else{
            $('.mobile .line3').removeClass('line-transition')
            $('.mobile .title3').removeClass('mobile-animation')
            $('.mobile-section3 .accordion').removeClass('mobile-animation')
        }
    }
})

//section 4
$(window).scroll(function () {
    if($(window).width() >= 1024){

        var add_animation = $('.section4').offset().top - 280 ;
        var replace_nav = $('.section4').offset().top;
        var replace_star = $('.section4').offset().top - 330 ;
        
        if($(window).scrollTop() > replace_star){
            $('.star-text').text('Our Bar')
        }

        if($(window).scrollTop() > replace_nav){
            $('.navbar').addClass('add-bg-transparent')
        }
        
        if($(window).scrollTop() > add_animation){
            $('.line6').addClass('line-transition2')
            $('.text-sec4').addClass('center-animation')
        }else{
            $('.line6').removeClass('line-transition2')
            $('.text-sec4').removeClass('center-animation')
        }
    }else{
        var replace_nav_mobile = $('.mobile-section4').offset().top - 110 ;
        var add_animation = $('.mobile-section4').offset().top - 700 ;
        var add_animation2 = $('.mobile-section4').offset().top - 80 ;

        if($(window).scrollTop() > add_animation){
            $('.mobile .line4').addClass('line-transition')
            $('.mobile .title4').addClass('mobile-animation')
            $('.content-mobile-section4').addClass('mobile-animation')
        }else{
            $('.mobile .line4').removeClass('line-transition')
            $('.mobile .title4').removeClass('mobile-animation')
            $('.content-mobile-section4').removeClass('mobile-animation')
        }

        if($(window).scrollTop() > add_animation2){
            $('.mobile .line4-1').addClass('line-transition')
            $('.mobile .title4-1').addClass('mobile-animation')
            $('.mobile .title4-2').addClass('mobile-animation')
            $('.content-mobile-section4-1').addClass('mobile-animation')
        }else{
            $('.mobile .line4-1').removeClass('line-transition')
            $('.mobile .title4-1').removeClass('mobile-animation')
            $('.mobile .title4-2').removeClass('mobile-animation')
            $('.content-mobile-section4-1').removeClass('mobile-animation')

        }
    }
});


//section 5
$(window).scroll(function () {
    if($(window).width() >= 1024){

        // var add_animation = $('.section6').offset().top - 280 ;
        var replace_nav = $('.section5').offset().top ;
        var replace_star = $('.section5').offset().top - 330 ;

        if ($(window).scrollTop() > replace_nav){  
            // $(".navbar").addClass("add-bg-transparent");
            // $(".navbar").removeClass("add-bg-light-brown");
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
            $(".navbar-start .instagram").attr('src','{{asset('images/instagram.png')}}');
            $(".navbar-start .facebook").attr('src','{{asset('images/facebook.png')}}'); 
            
        }

        if ($(window).scrollTop() > replace_star) {
            $('.star').attr('src','{{asset('images/star.png')}}');
            $('.star-text').text('Opening Hours');
            $('.star-text').addClass('text-white');
            $('.star-text').removeClass('text-brown');
            $('.section5-content').addClass('center-animation');
            
            $('.section7-content').addClass('center-animation');
            $('.line7').addClass('line-transition');
        }else{
            $('.line7').removeClass('line-transition');
            $('.section5-content').removeClass('center-animation')
        }
    }else{
        var replace_nav_mobile = $('.mobile-section5').offset().top - 110 ;
        var add_animation = $('.mobile-section5').offset().top - 700 ;
        if($(window).scrollTop() > replace_nav_mobile ){
            $(".mobile .navbar").addClass("add-bg-brown");  
            $(".mobile .navbar").removeClass("add-bg-light-brown");
            $('.mobile .navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');
            $('.mobile .head-culinary').addClass('text-white');
            $('.mobile .head-adoni').addClass('text-white');
            $('.mobile .head-culinary').removeClass('text-brown');
            $('.mobile .head-adoni').removeClass('text-brown');
            $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger.png)');
        }
        if($(window).scrollTop() > add_animation ){
            $('.mobile .line5').addClass('line-transition');
            $('.mobile .title5').addClass('mobile-animation');
            $('.content-mobile-section5').addClass('mobile-animation');
            $('.content-mobile-section5').addClass('mobile-animation');
            $('.line3-1').addClass('line-transition');

        }else{
            $('.mobile .line5').removeClass('line-transition');
            $('.mobile .title5').removeClass('mobile-animation');
            $('.content-mobile-section5').removeClass('mobile-animation');
            $('.content-mobile-section5').removeClass('mobile-animation');
            $('.line3-1').removeClass('line-transition');

        }
    }
});



// Section 6
    $(window).scroll(function () {
        if($(window).width() >= 1024){

            var add_animation = $('.section6').offset().top - 280 ;
            var replace_nav = $('.section6').offset().top - 80 ;
            
            if ($(this).scrollTop() > add_animation){ 
                $('.sidebarNav-star').removeClass('opacity-0');
                $('.sidebarNav-star').addClass('opacity-100');
                $('.topNav-star').removeClass('opacity-100');
                $('.topNav-star').addClass('opacity-0');
                $('.star-text').text('Private Events');
                $('.star-text').addClass('text-brown');
                $('.star-text').removeClass('text-white');
                $('.star').attr('src','{{asset('images/star2.png')}}');


                $('.line8').addClass('line-transition');
                $('.title-sec6').addClass('center-animation');
                $('.text-sec6').addClass('center-animation');
                // $('.text-sec-4-2').addClass('center-animation');
                $('.image-sec6').addClass('center-animation');
            }else{
                $('.line8').removeClass('line-transition');
                $('.title-sec6').removeClass('center-animation');
                $('.text-sec6').removeClass('center-animation');
                // $('.text-sec-4-2').removeClass('center-animation');
                $('.image-sec6').removeClass('center-animation');
            }
            
            if($(this).scrollTop() > replace_nav){
                $(".navbar-start .instagram").attr('src','{{asset('images/instagram_brown.png')}}');
                $(".navbar-start .facebook").attr('src','{{asset('images/facebook_brown.png')}}'); 
                $(".navbar").removeClass("add-bg-brown");
                $(".navbar").addClass("add-bg-light-brown");
                $(".navbar").removeClass("add-bg-transparent");
                $('.navbar-center-logo').attr('src','{{asset('images/aniba2.png')}}');
                $('.head-burger').attr('src','{{asset('images/burger1.png')}}');

                $('.head-culinary').addClass('text-brown');
                $('.head-adoni').addClass('text-brown');
                $('.head-reservation').addClass('text-brown');
                $('.head-contact').addClass('text-brown');
                $('.head-menu').addClass('text-brown')
                $('#head-menu-item .list-group').addClass('bg-light-brown')
                // $('#head-menu-item .list-group-item').addClass('text-brown border-brown')

                $('.head-culinary').removeClass('text-white');
                $('.head-adoni').removeClass('text-white');
                $('.head-reservation').removeClass('text-white');
                $('.head-contact').removeClass('text-white');
                $('.head-menu').removeClass('text-white')
                $('#head-menu-item .list-group').removeClass('bg-brown')
                // $('#head-menu-item .list-group-item').removeClass('text-white border-light-brown')
                
            }
        }else{
            var replace_nav_mobile = $('.mobile-section6').offset().top - 110 ;
            var add_animation = $('.mobile-section6').offset().top - 700 ;
            if($(window).scrollTop() > replace_nav_mobile ){
                $(".mobile .navbar").removeClass("add-bg-brown");  
                $(".mobile .navbar").addClass("add-bg-light-brown");
                $('.mobile .navbar-center-logo').attr('src','{{asset('images/aniba2.png')}}');
                $('.mobile .head-culinary').addClass('text-brown');
                $('.mobile .head-adoni').addClass('text-brown');
                $('.mobile .head-culinary').removeClass('text-white');
                $('.mobile .head-adoni').removeClass('text-white');
                $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger1.png)');
            }
            if($(window).scrollTop() > add_animation ){
                $('.mobile .line6').addClass('line-transition');
                $('.mobile .title6').addClass('mobile-animation');
                $('.content-mobile-section6').addClass('mobile-animation');
            }else{
                $('.mobile .line6').removeClass('line-transition');
                $('.mobile .title6').removeClass('mobile-animation');
                $('.content-mobile-section6').removeClass('mobile-animation');
            }
        }
    });
//section 7
$(window).scroll(function () {
    if($(window).width() >= 1024){

        // var add_animation = $('.section6').offset().top - 280 ;
        var replace_nav = $('.section7').offset().top ;
        var replace_star = $('.section7').offset().top - 330 ;
        // var remove_star = $('.section7').offset().top + 530 ;
        // var remove_foragers = $('.section7').offset().top + 280 ;

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
            $('.head-menu').removeClass('text-brown');
            $('#head-menu-item .list-group').removeClass('bg-light-brown')
            // $('#head-menu-item .list-group-item').removeClass('text-brown border-brown')

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white');
            $('.head-menu').addClass('text-white')
            $('#head-menu-item .list-group').addClass('bg-brown')
            // $('#head-menu-item .list-group-item').addClass('text-white border-light-brown')

            $('.section7-content').addClass('center-animation');
            $('.line9').addClass('line-transition');
        }else{
            $('.line9').removeClass('line-transition');
            $('.section7-content').removeClass('center-animation')
            // $(".navbar").removeClass("add-bg-transparent");

        }

        if ($(window).scrollTop() > replace_star) {
            $('.star').attr('src','{{asset('images/star.png')}}');
            $('.star-text').text('Contact Us');
            $('.star-text').addClass('text-white');
            $('.star-text').removeClass('text-brown');
        }
    }else{
        var replace_nav_mobile = $('.mobile-section7').offset().top - 110 ;
        var add_animation = $('.mobile-section7').offset().top - 700 ;

        if($(window).scrollTop() > replace_nav_mobile ){
            $(".mobile .navbar").addClass("add-bg-brown");  
            $(".mobile .navbar").removeClass("add-bg-light-brown");
            $('.mobile .navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');
            $('.mobile .head-culinary').addClass('text-white');
            $('.mobile .head-adoni').addClass('text-white');
            $('.mobile .head-culinary').removeClass('text-brown');
            $('.mobile .head-adoni').removeClass('text-brown');
            $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger.png)');
        }
        if($(window).scrollTop() > add_animation ){
            $('.mobile .line7').addClass('line-transition');
            $('.mobile .title7').addClass('mobile-animation');
            $('.content-mobile-section7').addClass('mobile-animation');
        }else{
            $('.mobile .line7').removeClass('line-transition');
            $('.mobile .title7').removeClass('mobile-animation');
            $('.content-mobile-section7').removeClass('mobile-animation');
        }
    }
});

// Footer
$(window).scroll(function () {
    if($(window).width() >= 1024){
        var remove_star = $('.page-footer').offset().top - 350 ;
        var remove_foragers = $('.page-footer').offset().top - 650;
        if ($(window).scrollTop() > remove_star) {
            $('.star').addClass('d-none');
            $('.star').addClass('d-none');
            $('.star-text').addClass('opacity-0');
            $('.star-text').removeClass('opacity-100');
        }else{
            $('.star').removeClass('d-none');
            $('.star-text').removeClass('opacity-0');
            $('.star-text').addClass('opacity-100');
        }
        if($(window).scrollTop() > remove_foragers){
            $('.foragers-logo').addClass('d-none')
        }else{
            $('.foragers-logo').removeClass('d-none')
        }
    }
});

    //section 8
    $(window).scroll(function () {
        if($(window).width() >= 1024){
        
            var replace_nav = $('.section8').offset().top - 80 ;
            var replace_star = $('.section8').offset().top - 330 ;
            var remove_star = $('.section8').offset().top + 530 ;
            var remove_foragers = $('.section8').offset().top + 280 ;

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
                $('.head-menu').addClass('text-brown');
                $('#head-menu-item .list-group').addClass('bg-light-brown')
                // $('#head-menu-item .list-group-item').addClass('text-brown border-brown')

                $('.head-culinary').removeClass('text-white');
                $('.head-adoni').removeClass('text-white');
                $('.head-reservation').removeClass('text-white');
                $('.head-contact').removeClass('text-white');
                $('.head-menu').removeClass('text-white');
                $('#head-menu-item .list-group').removeClass('bg-brown')
                // $('#head-menu-item .list-group-item').removeClass('text-white border-light-brown')

                $('.section8-content').addClass('center-animation');
                $('.line8').addClass('line-transition');
            }else{
                $('.line8').removeClass('line-transition');
                $('.section8-content').removeClass('center-animation')

            }

            if ($(window).scrollTop() > replace_star) {
                $('.star').attr('src','{{asset('images/star2.png')}}');
                $('.star-text').text('Press');
                $('.star-text').removeClass('text-white');
                $('.star-text').addClass('text-brown');
            }
        }else{
            var replace_nav_mobile = $('.mobile-section8').offset().top - 110 ;
            var add_animation = $('.mobile-section8').offset().top - 700 ;

            if($(window).scrollTop() > replace_nav_mobile ){
                $(".mobile .navbar").removeClass("add-bg-brown");  
                $(".mobile .navbar").addClass("add-bg-light-brown");
                $('.mobile .navbar-center-logo').attr('src','{{asset('images/aniba2.png')}}');
                $('.mobile .head-culinary').addClass('text-brown');
                $('.mobile .head-adoni').addClass('text-brown');
                $('.mobile .head-culinary').removeClass('text-white');
                $('.mobile .head-adoni').removeClass('text-white');
                $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger1.png)');
            }
            if($(window).scrollTop() > add_animation ){
                $('.mobile .line8').addClass('line-transition');
                $('.mobile .title8').addClass('mobile-animation');
                $('.content-mobile-section8').addClass('mobile-animation');
            }else{
                $('.mobile .line8').removeClass('line-transition');
                $('.mobile .title8').removeClass('mobile-animation');
                $('.content-mobile-section8').removeClass('mobile-animation');
            }
        }
    });
    
    if($(window).width() >= 1024){
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
    }else{
        $('.accor-item-1 .accordion-button').click(function(){
            if ($(this).hasClass('collapsed')) {
                $('.accor-item-1 .layers').removeClass('backdrop-chef');
                $('.accor-item-1 .chefs-text').addClass('text-brown');
                $('.accor-item-1 .chefs-text').removeClass('text-white');
                $('.accor-item-1 .quote').addClass('text-third');
                $('.accor-item-1 .quote').removeClass('text-white');
                // $('.accor-item-1 .btn-accor').text('+');
            }else{
                $('.accor-item-1 .layers').addClass('backdrop-chef');
                $('.accor-item-1 .chefs-text').removeClass('text-brown');
                $('.accor-item-1 .chefs-text').addClass('text-white');
                $('.accor-item-1 .quote').removeClass('text-third');
                $('.accor-item-1 .quote').addClass('text-white');
                // $('.accor-item-1 .btn-accor').text('-');
            }
        });
        $('.accor-item-2 .accordion-button').click(function(){
            if ($(this).hasClass('collapsed')) {
                $('.accor-item-2 .layers').removeClass('backdrop-chef');
                $('.accor-item-2 .chefs-text').addClass('text-brown');
                $('.accor-item-2 .chefs-text').removeClass('text-white');
                $('.accor-item-2 .quote').addClass('text-light-brown');
                $('.accor-item-2 .quote').removeClass('text-white');
                // $('.accor-item-2 .btn-accor').text('+');
            }else{
                $('.accor-item-2 .layers').addClass('backdrop-chef');
                $('.accor-item-2 .chefs-text').removeClass('text-brown');
                $('.accor-item-2 .chefs-text').addClass('text-white');
                $('.accor-item-2 .quote').removeClass('text-light-brown');
                $('.accor-item-2 .quote').addClass('text-white');
                // $('.accor-item-2 .btn-accor').text('-');
            }
        });
        $('.accor-item-3 .accordion-button').click(function(){
            if ($(this).hasClass('collapsed')) {
                $('.accor-item-3 .layers').removeClass('backdrop-chef');
                $('.accor-item-3 .team-text').addClass('text-light-brown');
                $('.accor-item-3 .team-text').removeClass('text-white');
                $('.accor-item-3 .quote').addClass('text-light-brown');
                $('.accor-item-3 .quote').removeClass('text-white');
                // $('.accor-item-3 .btn-accor').text('+');
            }else{
                $('.accor-item-3 .layers').addClass('backdrop-chef');
                $('.accor-item-3 .team-text').removeClass('text-light-brown');
                $('.accor-item-3 .team-text').addClass('text-white');
                $('.accor-item-3 .quote').removeClass('text-light-brown');
                $('.accor-item-3 .quote').addClass('text-white');
                // $('.accor-item-3 .btn-accor').text('-');
            }
        });
        $('.accor-item-4 .accordion-button').click(function(){
            if ($(this).hasClass('collapsed')) {
                $('.accor-item-4 .layers').removeClass('backdrop-chef');
                $('.accor-item-4 .team-text').addClass('text-light-brown');
                $('.accor-item-4 .team-text').removeClass('text-white');
                $('.accor-item-4 .quote').addClass('text-light-brown');
                $('.accor-item-4 .quote').removeClass('text-white');
                // $('.accor-item-4 .btn-accor').text('+');
            }else{
                $('.accor-item-4 .layers').addClass('backdrop-chef');
                $('.accor-item-4 .team-text').removeClass('text-light-brown');
                $('.accor-item-4 .team-text').addClass('text-white');
                $('.accor-item-4 .quote').removeClass('text-light-brown');
                $('.accor-item-4 .quote').addClass('text-white');
                // $('.accor-item-4 .btn-accor').text('-');
            }
        });
        $('.accordion-item .accordion-button').click(function(){
            if ($(this).hasClass('collapsed')) {
                $(this).find('.btn-accor').text('+');
            }else{
                $(this).find('.btn-accor').text('-');
            }
        });
    }

    
    $(".mobile-section8 .press-1").hover(function () {
        $(this).find('.layers').addClass('layers-hover');
        $(this).find('.image-content').addClass('image-content-trans');
        $(this).find('.press-title').addClass('text-brown');
       
    },function(){
        $(this).find('.image-content').removeClass('image-content-trans');
        $(this).find('.layers').removeClass('layers-hover');
        $(this).find('.press-title').removeClass('text-brown');
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

    // Mobile toggle
    // $('.mobile .navbar-toggler').click(function(){
    //     var replace_logo_mobile = $('.top-mobile').offset().top +850 ;
    //     if($('.mobile .navbar').hasClass('add-bg-transparent')){
    //         $('.mobile .navbar').addClass('add-bg-brown')
    //         $('.mobile .navbar').removeClass('add-bg-transparent')
    //         $(".mobile .navbar-brand").addClass("opacity-100");
    //         $(".mobile .navbar-brand").removeClass("opacity-0");
    //     }else{
    //         if($(window).scrollTop() < replace_logo_mobile){
    //             $('.mobile .navbar').removeClass('add-gb-brown')
    //             $('.mobile .navbar').addClass('add-bg-transparent')
    //             $(".mobile .navbar-brand").addClass("opacity-0");
    //             $(".mobile .navbar-brand").removeClass("opacity-100");
    //         }
    //     }
    // })
    // // Mobile click menu
    // $('.mobile .nav-item').click(function(){
    //     $('.mobile .navbar-toggler').click()
    // })

    // Post Message Contact Us
    $('#form_message').submit(function(e){
        e.preventDefault()
        var name = $(this).find('input[name="name"]')
        var email = $(this).find('input[name="email"]')
        var message = $(this).find('textarea[name="message"]')
        var token = $(this).find('input[name="_token"]').val()

        $.ajax({
            url: "{{ url('question/send') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: {
                "name": name.val(),
                "email": email.val(),
                "message": message.val(),
                "_token": token
            },
            success: function(res){
                if(res.success){
                    alert(res.message)
                    name.val('')
                    email.val('')
                    message.val('')
                }else{
                    alert("Sorry we couldn't complete your request, please try again in a moment.")
                }
            },
            error: function(){
                alert("Sorry we couldn't complete your request, please try again in a moment.")
            }
        })
    })
    $('#form_message_mobile').submit(function(e){
        e.preventDefault()
        var name = $(this).find('input[name="name"]')
        var email = $(this).find('input[name="email"]')
        var message = $(this).find('textarea[name="message"]')
        var token = $(this).find('input[name="_token"]').val()

        $.ajax({
            url: "{{ url('question/send') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: {
                "name": name.val(),
                "email": email.val(),
                "message": message.val(),
                "_token": token
            },
            success: function(res){
                console.log(res)
                if(res.success){
                    alert(res.message)
                    name.val('')
                    email.val('')
                    message.val('')
                }else{
                    alert("Sorry we couldn't complete your request, please try again in a moment.")
                }
            },
            error: function(){
                alert("Sorry we couldn't complete your request, please try again in a moment.")
            }
        })
    })

</script>

</html>