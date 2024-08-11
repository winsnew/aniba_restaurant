<footer class="page-footer text-start bg-brown text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-3 col-lg-3 col-sm-3">
                <h6><b>CONTACT US</b></h6>
                <!-- <p class="p-0 m-0">hello@aniba.com.sg</p> -->
                <div class="p-0 m-0">{!! $contact_us? $contact_us->email : '<p>hello@aniba.com.sg</p>' !!}</div>
                <!-- <p class="p-0 m-0">+65 9668 8036</p> -->
                <div class="p-0 m-0">{!! $contact_us? $contact_us->phone: '<p>+65 9668 8036</p>' !!}</div>
                <!-- <p class="py-3"> 6 Battery Road #05 - 03 <br>Singapore 049909</p> -->
                <div class="py-3"> {!! $contact_us? $contact_us->address : '<p>6 Battery Road #05 - 03 <br>Singapore 049909</p>' !!}</div>
            </div>
            <div class="col-2 col-lg-2 col-sm-2">
                <h6><b>SOCIAL</b></h6>
                <a href="{{ $contact_us? $contact_us->instagram: 'https://www.instagram.com/aniba.sg/' }}" target="_blank"><img class="mx-1" src="{{asset('images/instagram.png')}}" width="30" alt=""></a>
                <a href="{{ $contact_us? $contact_us->facebook: 'https://www.facebook.com/anibasingapore' }}" target="_blank"><img class="mx-1" src="{{asset('images/facebook.png')}}" width="30" alt=""></a>
            </div>
            <div class="col-3 col-lg-3 col-sm-3">
                <h6><b>OPENING HOURS</b></h6>
                <div class="py-2">
                    {{-- <p class="p-0 m-0"> Sunday to Thursday: 3PM - 12AM</p>
                    <p class="p-0 m-0"> Friday: 12PM - 6PM</p>
                    <p class="p-0 m-0"> Saturday Speakeasy Night: 8PM till late</p> --}}
                    {!! $opening? $opening->operation_footer : '
                        <p class="p-0 m-0"> Sunday to Thursday: 3PM - 12AM</p>
                        <p class="p-0 m-0"> Friday: 12PM - 5PM</p>
                        <p class="p-0 m-0"> Saturday Speakeasy Night: 8PM till late</p>
                    ' !!}
                </div>
                <!-- <p class="py-2">Closed on Monday</p> -->

            </div>
            <div class="col-4 col-lg-4 col-sm-4">
                <h6><b>JOIN OUR MAILING LIST:</b></h6>
                <form action="https://aniba.us10.list-manage.com/subscribe/post?u=5f32847f7372a97aaa575368d&amp;id=e4bb8683a7&amp;f_id=00a3c0e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="row py-3">
                        <div class="col-8 col-lg-8 col-sm-8">
                            <div id="mc_embed_signup bg-light-brown w-auto">
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <input type="email" value="" name="EMAIL" class="required email form-control text-white rounded-0 border-0 border-bottom bg-transparent email-footer mt-3" id="mce-EMAIL" required>
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
                        <div class="col-4 col-lg-4 col-sm-4">
                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="text-white border-white py-2 px-4 bg-transparent rounded-pill btn-subscribe">

                            {{-- <button class="text-white border-white py-2 px-4 bg-transparent rounded-pill btn-subscribe" style="font-weight: 700;font-size: 12px">SUBSCRIBE</button> --}}
                        </div>
                    </div>
                </form>

                <p> By subscribing, you agree to receive marketing emails & updates by the FORAGERS group</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-lg-6 col-sm-6">
                <div class="pt-5">
                    <img src="{{asset('images/aniba.png')}}" width="60px" alt="">
                    <span class="ps-2">copyright 2022. Privacy Policy</span>
                </div>
            </div>
            <div class="col-6 col-lg-6 col-sm-6">
                <div class="text-end">
                    @if($logo)
                    <a href="{{ $logo->link }}" target="_blank"><img src="{{asset($logo->logo_footer.'?v='.time())}}" width="85px" alt=""></a>
                    @else
                    <a href="http://www.foragers.com.sg/" target="_blank"><img src="{{asset('images/symbol.png')}}" width="85px" alt=""></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>