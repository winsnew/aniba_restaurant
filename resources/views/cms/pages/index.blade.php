<x-app-layout>
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
        <div class="content-wrapper" style="height: auto !important;">
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
    </main>
    <div class="mobile d-lg-none d-block">
        @include('front.layouts.mobile.footer')
    </div>
    <div class="d-md-none d-lg-block">
        @include('front.layouts.footer')
    </div>

    {{-- Modal display --}}
    <div class= {{$popup ? ($popup->status == '1' ? 'd-block' : 'd-none') : ''}} >
        <!-- Modal -->
        <div class="d-md-none d-lg-block">
            <div class="modal fade" id="desktopModal" tabindex="-1" aria-labelledby="desktopModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 360px;">
                    @if($popup)
                    <div class="modal-content" style="border-radius: 0 !important; height: 550px; background: url('{{ $popup->image.'?v='.time() }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    @else
                    <div class="modal-content" style="border-radius: 0 !important; height: 550px; background: url('/images/popup.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    @endif
                        <div class="modal-close position-relative">
                            <button type="button" class="btn position-absolute text-white" data-bs-dismiss="modal" aria-label="Close" style="top: -40px; right: -32px; font-size: 30px;">&times;</button>
                        </div>
                        <div class="pop-up-subscribe text-white position-relative" style="top: 50%; transform: translateY(-50%)">
                            <h6 class="mb-5 pb-5"> {!!$popup ? ($popup->title) : '<b>JOIN OUR MAILING LIST:</b>'!!}</h6>
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
                <div class="modal-dialog modal-dialog-centered h-100" style="max-width: 70%;">
                    @if($popup)
                    <div class="modal-content" style="border-radius: 0 !important; height: 100vw; background: url('{{ $popup->image.'?v='.time() }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    @else
                    <div class="modal-content" style="border-radius: 0 !important; height: 100vw; background: url('/images/popup.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;">
                    @endif
                        <div class="modal-close position-relative">
                            <button type="button" class="btn position-absolute text-white" data-bs-dismiss="modal" aria-label="Close" style="top: -95px; right: -60px; font-size: 80px;">&times;</button>
                        </div>
                        <div class="pop-up-subscribe text-white position-relative" style="top: 50%; transform: translateY(-50%)">
                            <h1 class=""> {!!$popup ? ($popup->title) : '<b>JOIN OUR MAILING LIST:</b>'!!}</h1>
                            {{-- Subscribe --}}
                            <div class={{$popup ? ($popup->subscribe_status == '1' ? 'd-block' : 'd-none') : ''}}>
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
        </div>
    </div>
</x-app-layout>
