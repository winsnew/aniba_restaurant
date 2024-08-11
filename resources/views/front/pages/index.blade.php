<x-app-layout>
    <div class="mobile d-lg-none d-block">
        @include('front.layouts.mobile.header')
    </div>
    <div class="d-none d-lg-block">
        @include('front.layouts.header')
    </div>
    <div class="navi d-none d-lg-block" style="z-index: 2000">
        @include('front.layouts.navigation')
    </div>
    <main>
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
            {{-- desktop section 8 --}}
            <div class="section8 bg-light-brown d-none d-lg-block">
                @include('front.pages.section.section8')
            </div>
            {{-- mobile section 8 --}}
            <div class="mobile mobile-section8 text-white text-start bg-light-brown d-lg-none d-block">
                @include('front.pages.section.mobile.section8')
            </div>
            {{-- Section 9 --}}
            <div class="section9">
                @include('front.pages.section.section9')
            </div>

            {{-- <section class="section5" style="background:#fff;">
                <a class="navJump" style="height:100px;" name="section5" id="section5"></a>
                <h1>Section 5</h1>
            </section> --}}
        </div>
    </main>
    <div class="mobile d-lg-none d-block">
        @include('front.layouts.mobile.footer')
    </div>
    <div class="d-none d-lg-block">
        @include('front.layouts.footer')
    </div>

    {{-- Modal display --}}
    <div class= {{$popup ? ($popup->status == '1' ? 'd-block' : 'd-none') : ''}} >
        <!-- Modal -->
        <div class="d-none d-lg-block">
            <div class="modal fade" id="desktopModal" tabindex="-1" aria-labelledby="desktopModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 360px;">
                    @if(isset($background[9][1]))
                        @if($background[9][1]->type == 1)
                        <div class="modal-content position-relative" style="border-radius: 0 !important; height: 550px; background: url('storage/{{ $background[9][1]->url.'?v='.time() }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                        @else
                        <div class="modal-content position-relative" style="border-radius: 0 !important; height: 550px; background: {{ $background[9][1]->url }};">
                        @endif
                    @else
                    <div class="modal-content position-relative" style="border-radius: 0 !important; height: 550px; background: url('/images/popup.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;">
                    @endif
                        <div class="modal-close position-relative">
                            <button type="button" class="btn position-absolute text-white" data-bs-dismiss="modal" aria-label="Close" style="top: -40px; right: -32px; font-size: 30px;">&times;</button>
                        </div>
                        @if($popup && $popup->link)
                        <a href="{{ $popup ? $popup->link : '' }}" target="_blank" class="position-absolute" style="top: 0; left: 0; height: inherit; width: 100%;"></a>
                        @endif
                        <div class="pop-up-subscribe text-white position-relative" style="top: 50%; transform: translateY(-50%)">
                            @if($popup && $popup->title)
                            <h6 class="mb-5 pb-5"> {!!$popup ? ($popup->title) : '<b>JOIN OUR MAILING LIST:</b>'!!}</h6>
                            @endif
                            {{-- Subscribe --}}
                            <div class={{$popup ? ($popup->subscribe_status == '1' ? 'd-block' : 'd-none') : ''}}>
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
        </div>
        <!-- Modal Mobile -->
        <div class="mobile d-lg-none d-block">
            <div class="modal fade" id="mobileModal" tabindex="-1" aria-labelledby="mobileModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered h-100 mx-5">
                    @if(isset($background[9][1]))
                        @if($background[9][1]->type == 1)
                        <div class="modal-content position-relative" style="border-radius: 0 !important; min-height: 50vh; background: url('storage/{{ $background[9][1]->url.'?v='.time() }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                        @else
                        <div class="modal-content position-relative" style="border-radius: 0 !important; min-height: 50vh; background: {{$background[9][1]->url}}">
                        @endif
                    @else
                        <div class="modal-content position-relative" style="border-radius: 0 !important; min-height: 50vh; background: url('/images/popup.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;">
                    @endif
                        <div class="modal-close position-relative">
                            <button type="button" class="btn position-absolute text-white" data-bs-dismiss="modal" aria-label="Close" style="top: -50px; right: -40px; font-size: 34px;">&times;</button>
                        </div>
                        @if($popup && $popup->link)
                        <a href="{{ $popup ? $popup->link : '' }}" target="_blank" class="position-absolute" style="top: 0; left: 0; height: 100%; width: 100%"></a>
                        @endif
                        <div class="pop-up-subscribe text-white my-5">
                            <h6 class=""> {!!$popup ? ($popup->title) : '<b>JOIN OUR MAILING LIST:</b>'!!}</h6>
                            {{-- Subscribe --}}
                            <div class={{$popup ? ($popup->subscribe_status == '1' ? 'd-block' : 'd-none') : ''}}>
                                <form action="https://aniba.us10.list-manage.com/subscribe/post?u=5f32847f7372a97aaa575368d&amp;id=e4bb8683a7&amp;f_id=00a3c0e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div style="display: flex; flex-direction:column; justify-content: center;">
                                        <div class="p-0 m-0">
                                            <div id="mc_embed_signup bg-light-brown w-auto">
                                                <div id="mc_embed_signup_scroll">
                                                    <div class="mc-field-group d-flex justify-content-center">
                                                        <input type="email" value="" name="EMAIL" class="required email form-control text-white rounded-0 border-0 border-bottom bg-transparent email-footer mt-3 pt-5" style="width: 70%;" id="mce-EMAIL" required>
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
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="text-white border-white py-2 px-3 bg-transparent rounded-pill btn-subscribe text-center ms-auto me-auto" style="font-size: 16px; width: fit-content;">
                                        <div class="p-0 m-0">
            
                                            {{-- <button class="text-white border-white py-2 px-4 bg-transparent rounded-pill btn-subscribe" style="font-weight: 700;font-size: 70px">SUBSCRIBE</button> --}}
                                        </div>
                                    </div>
                                </form>
                                <p class="px-4 mt-3 pt-5" style="font-size: 14px;"> By subscribing, you agree to receive marketing emails & updates by the FORAGERS group</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var isCenterMode = false
        $(document).ready(function(){
            if({{ $popup ? ($popup->status) : true }}){
                var desktopModal = $('#desktopModal')
                var mobileModal = $('#mobileModal')
                if($(window).width() >= 1024){
                    desktopModal.modal('show')
                }else{
                    mobileModal.modal('show')
                }
            }
            
            // change condition if press is more then 1
            @if($press)
                @if(count($press) > 1)
                    isCenterMode = true
                @endif
            @endif

            $('.slider3').slick({
                // dots: true,
                infinite: true,
                slidesToShow: 1,
                centerMode: isCenterMode,
                // vertical: false,
                arrows: true,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>'
            });
        })
    </script>

</x-app-layout>
