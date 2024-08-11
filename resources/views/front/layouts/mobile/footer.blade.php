<footer class=" text-start bg-brown text-white pt-3 pb-4">
    <div class="footer" style="font-size: 14px;">
        <div class="content border-bottom">
            <div style="padding: 3vw 10vw">
                <p><b>JOIN OUR MAILING LIST:</b></p>
                <div class="row">
                    <div>
                        <input type="text" style="font-size: 16px" class="form-control text-white rounded-0 border-0 border-bottom bg-transparent email-footer" placeholder="EMAIL">
                        {{-- <p>EMAIL</p>
                        <img class="pt-4" src="{{asset('images/line.png')}}" width="100%" alt=""> --}}
                    </div>
                    <p class="my-2"> By subscribing, you agree to receive marketing emails & updates by the FORAGERS group</p>
                    <div class="col-4 col-lg-4 col-sm-4">
                        <button class="text-white border-white py-1 px-2 bg-transparent rounded-pill btn-subscribe" style="font-size: 12px">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content border-bottom bg-transparent">
            <div style="padding: 3vw 10vw">
                <div class="accordion-item receptionist-item-6 receptionist-6 position-relative">
                    <div class="layers">
                        <h2 class="accordion-header" id="panelsresStayOpen-headingOne">
                            <div class="accordion-button bg-transparent w-15" style="height:auto;box-shadow: none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsresStayOpen-collapseContact" aria-expanded="true" aria-controls="panelsresStayOpen-collapseContact">
                                <div style="width: 80%">
                                    <h6 class="text-white py-2" ><b>CONTACT US</b></h6>
                                </div>

                                <h6 class="ps-4 ms-5 bitter-italic chefs-text text-white position-relative btn-accor" style="transition:.3s"><b>-</b></h6>
                            </div>
                        </h2>
                        <div id="panelsresStayOpen-collapseContact" class="accordion-collapse collapse show" aria-labelledby="panelsresStayOpen-headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body position-relative">
                                <div class="position-relative">
                                    <p class="py-0 my-0">{{ 'hello@aniba.com.sg' }}</p>
                                    <p class="py-0 my-0">{{ '+65 9668 8036' }}</p>
                                    <p class="pt-3">{!! '6 Battery Road #05 - 03 <br>Singapore 049909' !!}</p>
                                    <p class="m-0"><b>SOCIAL</b></p>
                                    <a href="{{ 'https://www.instagram.com/aniba.sg/' }}" target="_blank"><img class="mx-1" src="{{asset('images/instagram.png')}}" style="width: 5vw" alt=""></a>
                                    <a href="{{'https://www.facebook.com/anibasingapore' }}" target="_blank"><img class="mx-1" src="{{asset('images/facebook.png')}}" style="width: 5vw" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content border-bottom bg-transparent">
            <div style="padding: 3vw 10vw">
                <div class="accordion-item receptionist-item-6 receptionist-6 position-relative">
                    <div class="layers">
                        <h2 class="accordion-header" id="panelsresStayOpen-headingOne">
                            <div class="accordion-button bg-transparent w-15" style="height:auto;box-shadow: none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsresStayOpen-collapseOpening" aria-expanded="true" aria-controls="panelsresStayOpen-collapseOpening">
                                <div style="width: 80%">
                                    <h6 class="text-white py-2"><b>OPENING HOURS</b></h6>
                                </div>

                                <h6 class="ps-4 ms-5 bitter-italic chefs-text text-white position-relative btn-accor" style="transition:.3s"><b>+</b></h6>
                            </div>
                        </h2>
                        <div id="panelsresStayOpen-collapseOpening" class="accordion-collapse collapse" aria-labelledby="panelsresStayOpen-headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body position-relative">
                                <div class="position-relative">
                                    <div class="py-2">
                                        {{-- <p class="p-0 m-0"> Sunday to Thursday: 3PM - 12AM</p>
                                        <p class="p-0 m-0"> Friday: 12PM - 6PM</p>
                                        <p class="p-0 m-0"> Saturday Speakeasy Night: 8PM till late</p> --}}
                                        {!! $opening? $opening->operation_footer : '
                                            <p class="p-0 m-0"> Tuesday to Thursday: 3PM - 12AM</p>
                                            <p class="p-0 m-0"> Friday: 12PM - 5PM</p>
                                            <p class="p-0 m-0"> Saturday Speakeasy Night: 8PM till late</p>
                                            <p class="p-0 m-0"> Sunday - Monday : Closed</p>
                                        ' !!}
                                    </div>
                                    <!-- <p class="py-2">Closed on Monday</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding: 1vw 10vw">
            <div class="row">
                <div class="col-9 col-lg-9 col-sm-9">
                    <div class="pt-3">
                        <img src="{{asset('images/aniba.png')}}" style="width: 15vw" alt="">
                        <span class="ps-2">copyright 2022</span>
                        <a href="{{ asset('assets/Aniba kosher certification 2022-2023.pdf') }}" target="_blank">
                            <img src="{{ asset('images/logo-footer.png') }}" alt="" style="width: 37px; height: 38px;">
                        </a>
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-sm-3">
                    <div class="text-end">
                        @if($logo)
                        <a href="{{ $logo->link }}" target="_blank"><img src="{{asset($logo->logo_footer)}}" style="width: 12vw" alt=""></a>
                        @else
                        <a href="http://www.foragers.com.sg/" target="_blank"><img src="{{asset('images/symbol.png')}}" style="width: 12vw" alt=""></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>