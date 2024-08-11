<!DOCTYPE html>
<html data-wf-domain="native-smooth-scroll.webflow.io" data-wf-page="6148be436c517909502ea458" data-wf-site="6148be436c5179b3ed2ea459">
<head>
	<meta charset="utf-8">
	<title>Aniba</title>
	<link href="{{asset('css/app_all_2812.css')}}?v=1" rel="stylesheet" type="text/css">
	<link href="{{asset('css/app_mobile_2812.css')}}?v=1" rel="stylesheet" type="text/css">
	<link href="{{asset('css/app.scss')}}?v=1" rel="stylesheet" type="text/css">
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/x-icon">
    <link href="favicons/img-webclip.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/kenwheeler/slick/master/slick/slick.css" rel="stylesheet" crossorigin="anonymous">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:600px;}
        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    {{-- <link href="https://cdn.rawgit.com/kenwheeler/slick/master/slick/slick-theme.css" rel="stylesheet" crossorigin="anonymous"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

</head>

<body>
    <div class="mobile d-lg-none d-block">
        @include('front.layouts.mobile.header')
    </div>
    <div class="d-md-none d-lg-block">
        @include('front.layouts.header')
    </div>
    <div class="navi d-md-none d-lg-block" style="z-index: 2000">
        @include('front.layouts.navigation')
    </div>
    <main>
        {{ $slot }}
    </main>
    <div class="mobile d-lg-none d-block">
        @include('front.layouts.mobile.footer')
    </div>
    <div class="d-md-none d-lg-block">
        @include('front.layouts.footer')
    </div>
    <!-- Modal -->
    <div class="d-md-none d-lg-block">
        <div class="modal fade" id="desktopModal" tabindex="-1" aria-labelledby="desktopModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 360px;">
                <div class="modal-content" style="border-radius: 0 !important; height: 550px; background: url('/images/image_private.jpg'); background-size: cover;">
                    <div class="modal-close position-relative">
                        <button type="button" class="btn position-absolute text-white" data-bs-dismiss="modal" aria-label="Close" style="top: -40px; right: -32px; font-size: 30px;">&times;</button>
                    </div>
                    <div class="pop-up-subscribe text-white position-relative" style="top: 50%; transform: translateY(-50%)">
                        <h6 class="mb-5 pb-5"><b>JOIN OUR MAILING LIST</b></h6>
                        <form action="https://aniba.us10.list-manage.com/subscribe/post?u=5f32847f7372a97aaa575368d&amp;id=e4bb8683a7&amp;f_id=00a3c0e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mt-5" target="_blank" novalidate>
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-12 col-sm-12">
                                    <div id="mc_embed_signup bg-light-brown w-auto">
                                        <div id="mc_embed_signup_scroll">
                                            <div class="mc-field-group d-flex justify-content-center">
                                                <input type="email" value="" name="EMAIL" class="required email form-control text-white rounded-0 border-0 border-bottom bg-transparent email-footer mt-5 pt-5" style="width: 70%;" id="mce-EMAIL" required>
                                                <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                                            </div>
                                            <div id="mce-responses" class="clear foot">
                                                <div class="response" id="mce-error-response" style="display:none"></div>
                                                <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5f32847f7372a97aaa575368d_e4bb8683a7" tabindex="-1" value=""></div>
                                            <div class="optionalParent">
                                                <div class="clear foot">
                                                    {{-- <p class="brandingLogo"><a href="http://eepurl.com/ifGt9P" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <input type="text" class="form-control text-white rounded-0 border-0 border-bottom bg-transparent email-footer" placeholder="EMAIL"> --}}
                                    {{-- <p>EMAIL</p>
                                    <img class="pt-4" src="{{asset('images/line.png')}}" width="100%" alt=""> --}}
                                </div>
                                <div class="col-5 col-lg-5 col-sm-5">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="text-white border-white py-2 px-4 bg-transparent rounded-pill btn-subscribe">
    
                                    {{-- <button class="text-white border-white py-2 px-4 bg-transparent rounded-pill btn-subscribe" style="font-weight: 700;font-size: 12px">SUBSCRIBE</button> --}}
                                </div>
                            </div>
                        </form>
                        <p class="px-4 mt-3"> By subscribing, you agree to receive marketing emails & updates by the FORAGERS group</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Mobile -->
    <div class="mobile d-lg-none d-block">
        <div class="modal fade" id="mobileModal" tabindex="-1" aria-labelledby="mobileModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered h-100" style="max-width: 70%;">
                <div class="modal-content" style="border-radius: 0 !important; height: 70%; background: url('/images/image_private.jpg'); background-size: cover;">
                    <div class="modal-close position-relative">
                        <button type="button" class="btn position-absolute text-white" data-bs-dismiss="modal" aria-label="Close" style="top: -95px; right: -60px; font-size: 80px;">&times;</button>
                    </div>
                    <div class="pop-up-subscribe text-white position-relative" style="top: 50%; transform: translateY(-50%)">
                        <h1 class="mb-5 pb-5"><b>JOIN OUR MAILING LIST</b></h1>
                        <form action="https://aniba.us10.list-manage.com/subscribe/post?u=5f32847f7372a97aaa575368d&amp;id=e4bb8683a7&amp;f_id=00a3c0e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="margin-top:35%">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-12 col-sm-12">
                                    <div id="mc_embed_signup bg-light-brown w-auto">
                                        <div id="mc_embed_signup_scroll">
                                            <div class="mc-field-group d-flex justify-content-center">
                                                <input type="email" value="" name="EMAIL" class="required email form-control text-white rounded-0 border-0 border-bottom bg-transparent email-footer mt-5 pt-5" style="width: 70%;" id="mce-EMAIL" required>
                                                <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                                            </div>
                                            <div id="mce-responses" class="clear foot">
                                                <div class="response" id="mce-error-response" style="display:none"></div>
                                                <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5f32847f7372a97aaa575368d_e4bb8683a7" tabindex="-1" value=""></div>
                                            <div class="optionalParent">
                                                <div class="clear foot">
                                                    {{-- <p class="brandingLogo"><a href="http://eepurl.com/ifGt9P" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <input type="text" class="form-control text-white rounded-0 border-0 border-bottom bg-transparent email-footer" placeholder="EMAIL"> --}}
                                    {{-- <p>EMAIL</p>
                                    <img class="pt-4" src="{{asset('images/line.png')}}" width="100%" alt=""> --}}
                                </div>
                                <div class="col-5 col-lg-5 col-sm-5">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="text-white border-white py-2 px-4 bg-transparent rounded-pill btn-subscribe" style="font-size: 38px;">
    
                                    {{-- <button class="text-white border-white py-2 px-4 bg-transparent rounded-pill btn-subscribe" style="font-weight: 700;font-size: 70px">SUBSCRIBE</button> --}}
                                </div>
                            </div>
                        </form>
                        <p class="px-4 mt-5 pt-5" style="font-size: 30px;"> By subscribing, you agree to receive marketing emails & updates by the FORAGERS group</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{asset('js/js-jquery-3.5.1.min.dc5e7f18c8.js')}}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
{{-- <script src="js/js-jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
<script>
    ! function (o, c) {
			var n = c.documentElement,
				t = " w-mod-";
			n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className +=
				t + "touch")
	}(window, document);

    $(document).ready(function(){
        var desktopModal = $('#desktopModal')
        var mobileModal = $('#mobileModal')
        if($(window).width() >= 1024){
            desktopModal.modal('show')
        }else{
            mobileModal.modal('show')
        }
    })
    //item navigation
    var nav_trans = $('.top').offset().top;
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
            });
            return false;
        });
    }else{
        $('a[href^="#"]').click(function() { 
            // Need both `html` and `body` for full browser support
        
            $("html, body").animate({
                
                scrollTop: $( $(this).attr("href") ).offset().top - 200,
            });
            return false;
        });
        
}
    
    $('.sec8').click(function() { 
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
            scrollTop: $( $(this).attr("href") ).offset().top+20
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
        $( $(this).find('.sec8')).removeClass("sidebarNavIn");
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
        $('body').css('overflow','auto');
        $('.backdrop').css('display','none');
        $('.hover .star-text').removeClass('opacity-0');
        $('.hover .star-text').addClass('opacity-100');
        $('.hover .sidebarNav').css('display','none');

        $('.reservation-nav-text').addClass('opacity-100');
        $('.reservation-nav-text').removeClass('opacity-00');
    });

    // $('.pointer-1').hover(function(){
    //     // $('.top-desc').text('ANIBA which means');
    //     // $('.text-replace').text('in hebrew, is a reinvention of the best from around the world — ');
    // },function(){
    //     // $('.top-desc').text('ANIBA in hebrew means');
    //     // $('.text-replace').text('It is a reinvention of the best from around the world — ');
    // })
    // $('.pointer-2').hover(function(){
    //     $('.point_sub-1').removeClass('point-animation');
    //     $('.label-point-1').removeClass('point-animation');
    //     $('.point_sub-1').removeClass('opacity-100');
    //     $('.point_sub-1').addClass('opacity-0');
    //     $('.label-point-1').removeClass('opacity-100');
    //     $('.label-point-1').addClass('opacity-0');
    //     $('.point-1-desc').removeClass('point-desc-animation')
    //     $('.point-2-desc').addClass('point-desc-animation')
    //     $('.point-3-desc').removeClass('point-desc-animation')
    // },function(){
    //     $('.point_sub-1').addClass('opacity-100');
    //     $('.point_sub-1').removeClass('opacity-0');
    //     $('.label-point-1').addClass('opacity-100');
    //     $('.label-point-1').removeClass('opacity-0');
    //     $('.point-1-desc').addClass('point-desc-animation')
    //     $('.point-2-desc').removeClass('point-desc-animation')
    //     $('.point-3-desc').removeClass('point-desc-animation')
    // })
    // $('.pointer-3').hover(function(){
    //     $('.point_sub-1').removeClass('point-animation');
    //     $('.label-point-1').removeClass('point-animation');
    //     $('.point_sub-1').removeClass('opacity-100');
    //     $('.point_sub-1').addClass('opacity-0');
    //     $('.label-point-1').removeClass('opacity-100');
    //     $('.label-point-1').addClass('opacity-0');
    //     $('.point-1-desc').removeClass('point-desc-animation')
    //     $('.point-2-desc').removeClass('point-desc-animation')
    //     $('.point-3-desc').addClass('point-desc-animation')
    // },function(){
    //     $('.point_sub-1').addClass('opacity-100');
    //     $('.point_sub-1').removeClass('opacity-0');
    //     $('.label-point-1').addClass('opacity-100');
    //     $('.label-point-1').removeClass('opacity-0');
    //     $('.point-1-desc').addClass('point-desc-animation')
    //     $('.point-2-desc').removeClass('point-desc-animation')
    //     $('.point-3-desc').removeClass('point-desc-animation')
    //     // $('.point_sub-1').addClass('point-animation');
    //     // $('.label-point-1').addClass('point-animation');
    // })


   
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
                // $('.point_sub-3').addClass('point-animation');
                // $('.label-point-3').addClass('point-animation');
                // $('.point_sub-2').addClass('point-animation');
                // $('.label-point-2').addClass('point-animation');
                // $('.point_sub-1').addClass('point-animation');
                // $('.label-point-1').addClass('point-animation');
                if(!isStart){
                    $('.point_sub-3').addClass('point-animation');
                    $('.label-point-3').addClass('point-animation');
                    playAnimate(true)
                    isStart = true
                }
                // playAnimate(true)
                // animateInterval = setInterval(animate, 1000)
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
            var replace_logo_mobile = $('.top-mobile').offset().top +850 ;
            var add_animation = $('.mobile-section1').offset().top - 1500 ;
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
                    $('.mobile .mobile-point-sub-3').addClass('point-animation')
                    $('.mobile .mobile-label-point-3').addClass('point-animation')
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
            intervalId = setInterval(animate, 3000)
            console.log('play');
        }else{
            clearInterval(intervalId)
            console.log('stop');
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
    }else{
        var replace_nav_mobile = $('.mobile-section2').offset().top - 280 ;
        var add_animation = $('.mobile-section2').offset().top - 1500 ;
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
            
            // $('.navbar-toggler').click(function() {
            // if ($('.navbar-collapse').hasClass('show')) {
            //     $(".navbar-center-logo").addClass("mobile-logo-aniba-scale-2");
            //     $(".navbar-center-logo").removeClass("logo-aniba-scale-click-1");
            // }else{
            //     $(".navbar-center-logo").removeClass("mobile-logo-aniba-scale-2");
            //     $(".navbar-center-logo").addClass("logo-aniba-scale-click-1");

            // }
            // });
        
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

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white');
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
        var replace_nav_mobile = $('.mobile-section3').offset().top - 280 ;
        var add_animation = $('.mobile-section3').offset().top - 1500 ;
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
        var replace_nav_mobile = $('.mobile-section4').offset().top - 280 ;
        var add_animation = $('.mobile-section4').offset().top - 1500 ;
        var add_animation2 = $('.mobile-section4').offset().top - 280 ;

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


//section 3 latest
    // $(window).scroll(function () {
    //     if($(window).width() >= 1024){

    //         var remove_star = $('.section5').offset().top - 300 ;
    //         var replace_nav = $('.section5').offset().top - 80 ;
    //         var replace_reservation = $('.section5').offset().top - 250 ;
    //         if ($(this).scrollTop() > remove_star && $(this).scrollTop() < $('.section6').offset().top - 280){  
    //         $('.sidebarNav-star').addClass('opacity-0');
    //         //    $('.star-text').addClass('opacity-0');
    //         //    $('.star-text').removeClass('opacity-100');
    //         $('.sidebarNav-star').removeClass('opacity-100');
            
    //         $('.topNav-star').addClass('opacity-100');
    //         $('.topNav-star').removeClass('opacity-0');

    //             $('.sidebarNav').addClass('sidebarNav-reservation');
    //             $('.sidebarNav-star').css('display','none');
    //             // $('.sidebarNav-star').addClass('sidebarNav-star-reservation');
    //             $('.reservation-star').css('display','block');
    //         }else {
    //             $('.sidebarNav-star').removeClass('opacity-0');
    //             $('.sidebarNav-star').addClass('opacity-100');
    //             $('.topNav-star').addClass('opacity-0');
    //             $('.topNav-star').removeClass('opacity-100');

    //             $('.sidebarNav').removeClass('sidebarNav-reservation');
    //             // $('.sidebarNav-star').removeClass('sidebarNav-star-reservation');
    //             $('.sidebarNav-star').css('display','block');
    //         }


    //         if($(this).scrollTop() > replace_reservation && $(this).scrollTop() < $('.section6').offset().top - 280){
    //             $('.sidebarNav').addClass('sidebarNav-reservation2');
    //             $('.sidebarNav-star').css('display','none');
    //             // $('.sidebarNav-star').addClass('sidebarNav-star-reservation');
    //             $('.reservation-star').css('display','block');
    //         }else{
    //             $('.sidebarNav').removeClass('sidebarNav-reservation2');
    //             // $('.sidebarNav-star').removeClass('sidebarNav-star-reservation');
    //             $('.sidebarNav-star').css('display','block');
    //         }


    //         if($(this).scrollTop() > replace_nav && $(this).scrollTop() < $('.section6').offset().top - 280){
    //             $(".navbar-start .instagram").attr('src','{{asset('images/instagram.png')}}');
    //             $(".navbar-start .facebook").attr('src','{{asset('images/facebook.png')}}'); 
    //             $(".navbar").addClass("add-bg-brown");
    //             $(".navbar").removeClass("add-bg-light-brown");
    //             $('.navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');
    //             $('.head-burger').attr('src','{{asset('images/burger.png')}}');

    //             $('.head-culinary').removeClass('text-brown');
    //             $('.head-adoni').removeClass('text-brown');
    //             $('.head-reservation').removeClass('text-brown');
    //             $('.head-contact').removeClass('text-brown');

    //             $('.head-culinary').addClass('text-white');
    //             $('.head-adoni').addClass('text-white');
    //             $('.head-reservation').addClass('text-white');
    //             $('.head-contact').addClass('text-white');
    //             $('.sidebarNav').addClass('sidebarNav-reservation1');

    //         }else{
    //             $('.sidebarNav').removeClass('sidebarNav-reservation1');

    //         }
    //     }else{
    //         var replace_nav_mobile = $('.mobile-section5').offset().top - 280 ;
    //         var add_animation = $('.mobile-section5').offset().top - 1500 ;
    //         if($(window).scrollTop() > replace_nav_mobile ){
    //             $(".mobile .navbar").addClass("add-bg-brown");  
    //             $(".mobile .navbar").removeClass("add-bg-light-brown");
    //             $('.mobile .navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');
    //             $('.mobile .head-culinary').addClass('text-white');
    //             $('.mobile .head-adoni').addClass('text-white');
    //             $('.mobile .head-culinary').removeClass('text-brown');
    //             $('.mobile .head-adoni').removeClass('text-brown');
    //             $('.mobile .navbar-toggler-icon').css('background-image','url(/images/burger.png)');
    //         }
    //         if($(window).scrollTop() > add_animation ){
    //             $('.mobile .line3').addClass('line-transition');
    //             $('.mobile .title3').addClass('mobile-animation');
    //             $('.mobile-section5 .accordion').addClass('mobile-animation');
    //             $('.mobile-section5 .accordion').addClass('mobile-animation');
    //         }else{
    //             $('.mobile .line3').removeClass('line-transition');
    //             $('.mobile .title3').removeClass('mobile-animation');
    //             $('.mobile-section5 .accordion').removeClass('mobile-animation');
    //             $('.mobile-section5 .accordion').removeClass('mobile-animation');
    //         }
    //     }
    // });

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
        var replace_nav_mobile = $('.mobile-section5').offset().top - 280 ;
        var add_animation = $('.mobile-section5').offset().top - 1500 ;
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

                $('.head-culinary').removeClass('text-white');
                $('.head-adoni').removeClass('text-white');
                $('.head-reservation').removeClass('text-white');
                $('.head-contact').removeClass('text-white');
                
            }
        }else{
            var replace_nav_mobile = $('.mobile-section6').offset().top - 280 ;
            var add_animation = $('.mobile-section6').offset().top - 1500 ;
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
        var remove_star = $('.section7').offset().top + 530 ;
        var remove_foragers = $('.section7').offset().top + 280 ;

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
        if ($(window).scrollTop() > remove_star) {
            $('.star').addClass('d-none');
            $('.star').addClass('d-none');
            $('.star-text').addClass('opacity-0');
            $('.star-text').removeClass('opacity-100');
        }else{
            $('.star').removeClass('d-none');
            $('.foragers-logo').removeClass('d-none')
            // $('.star-text').removeClass('opacity-0');
            // $('.star-text').addClass('opacity-100');
        }
        if($(window).scrollTop() > remove_foragers){
            $('.foragers-logo').addClass('d-none')
        }
    }else{
        var replace_nav_mobile = $('.mobile-section7').offset().top - 280 ;
        var add_animation = $('.mobile-section7').offset().top - 1500 ;

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

    //section 6
    $(window).scroll(function () {
        if($(window).width() >= 1024){
        
            var replace_nav = $('.section8').offset().top - 80 ;
            var replace_star = $('.section8').offset().top - 330 ;

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

                $('.section8-content').addClass('center-animation');
                $('.line6').addClass('line-transition');
            }else{
                $('.line6').removeClass('line-transition');
                $('.section8-content').removeClass('center-animation')

            }

            if ($(window).scrollTop() > replace_star) {
                $('.star').attr('src','{{asset('images/star2.png')}}');
                $('.star-text').text('Press Us');
                $('.star-text').removeClass('text-white');
                $('.star-text').addClass('text-brown');
            }
        }else{
            var replace_nav_mobile = $('.mobile-section8').offset().top - 280 ;
            var add_animation = $('.mobile-section8').offset().top - 1500 ;

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
                $('.content-mobile-section8').addClass('mobile-animation');
            }else{
                $('.mobile .line6').removeClass('line-transition');
                $('.mobile .title6').removeClass('mobile-animation');
                $('.content-mobile-section8').removeClass('mobile-animation');
            }
        }
    });
    // $(window).scroll(function () {
    //     if($(window).width() >= 1024){
    //         var replace_star = $('.page-footer').offset().top - 800 ;
    //         if ($(window).scrollTop() > replace_star) {
    //             $('.star').addClass('d-none');
    //             $('.star-text').addClass('opacity-0');
    //             $('.star-text').removeClass('opacity-100');
    //             $('.foragers-logo').addClass('d-none')
    //         }else{
    //             $('.star').removeClass('d-none');
    //             // $('.star-text').removeClass('opacity-0');
    //             // $('.star-text').addClass('opacity-100');
    //         }
    //     }else{
            
    //     }
    // });
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
                $('.accor-item-2 .quote').addClass('text-third');
                $('.accor-item-2 .quote').removeClass('text-white');
                // $('.accor-item-2 .btn-accor').text('+');
            }else{
                $('.accor-item-2 .layers').addClass('backdrop-chef');
                $('.accor-item-2 .chefs-text').removeClass('text-brown');
                $('.accor-item-2 .chefs-text').addClass('text-white');
                $('.accor-item-2 .quote').removeClass('text-third');
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
        // $(this).css('background','url("/images/press_image.jpg")');
        // $('.star').attr('src','{{asset('images/star2.png')}}');
        // $(this).find('.image-content').attr('src','{{asset('images/press_image.jpg')}}');
        $(this).find('.layers').addClass('layers-hover');
        $(this).find('.image-content').addClass('image-content-trans');
        if($(this).hasClass('second')){
            $(this).find('h4').removeClass('text-white');
            $(this).find('h4').addClass('text-brown');
        }
        if($(this).hasClass('first')){
            $(this).find('h4').removeClass('text-white');
            $(this).find('h4').addClass('text-brown');
        }
       
    },function(){
        $(this).find('.image-content').removeClass('image-content-trans');
        $(this).find('.layers').removeClass('layers-hover');
        if($(this).hasClass('second')){
            $(this).find('h4').addClass('text-white');
            $(this).find('h4').removeClass('text-brown');
        }
        if($(this).hasClass('first')){
            $(this).find('h4').removeClass('text-white');
            $(this).find('h4').addClass('text-brown');
        }
        
        // if($(this).hasClass('second')){
        //     $(this).find('h4').removeClass('text-white');
        //     $(this).find('h4').addClass('text-brown');
        // }
    });
    
    
	$('.slider3').slick({
    // dots: true,
    infinite: true,
    slidesToShow: 1,
    centerMode: true,
    vertical: false,
    arrows: true,
     prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>'

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