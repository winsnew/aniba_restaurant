<a class="navJump" name="mobile-section3" id="mobile-section3"></a>
<div class="content" style="padding-top: 10vw">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 px-0">
                <img class="position-relative vertical-center line3" src="{{asset('/images/Line.png')}}" alt="" style="width: 100%; height: .5px;">
            </div>
            <div class="col-8">
                <h6 class="pt-4 text-white title3" style="font-size: 20px">Our Team</h6>
            </div>
        </div>
    </div>
    <div class="accordion mt-3" id="accordionPanelsStayOpenExample2">
        @if(isset($background[3][2]))
        <div class="accordion-item accor-item-3 team1 position-relative" style="border: none !important; background: url('/storage/{{ $background[3][2]->url.'?v='.time() }}'); background-size:122%; background-repeat: no-repeat;">
        @else
        <div class="accordion-item accor-item-3 team1 position-relative" style="border: none !important; background: url('/images/team1.jpg'); background-size:142%; background-repeat: no-repeat;">
        @endif
            <div class="container-fluid layers">
                <div class="w-50 ms-4 position-relative" style="padding-top: 16vw">
                    <h3 class="team-text text-light-brown" style="font-size: 34px;line-height: 32px; letter-spacing: 5%;transition:.3s;"><b>{{ $team->has(3)? $team[3][0]->name : 'SHIR CARASSO' }}</b></h3>
                    <i class="team-text text-light-brown" style="letter-spacing: 5%;transition:.3s"><b>{{ $team->has(3)? $team[3][0]->position: 'General Manager' }}</b></i>
                    {{-- <p class="quote text-light-brown" style="font-size:34px;padding: 3rem 3.8rem 0px 0rem;line-height: 1.2;transition:.3s"><i>THE MOST AMAZING & BEAUTIFUL, DEEP, TALENTED GM on EARTH and beyond.</i></p> --}}
                    <div class="quote text-light-brown" style="line-height: 1.2; font-size: 14px;padding-top; 1.5rem;transition:.3s">
                        {{-- <i>THE MOST AMAZING & BEAUTIFUL, DEEP, TALENTED GM on EARTH and beyond.</i> --}}
                        <i>{!! $team->has(3)? $team[3][0]->quote_mobile : '<p><i>THE MOST AMAZING & BEAUTIFUL, DEEP, TALENTED GM on EARTH and beyond.</i></p>' !!}</i>
                    </div>
                </div>
                <div class="accordion-header" id="panelsStayOpen-headingOne">
                    <div class="accordion-button bg-transparent w-15" style="height:25vw;box-shadow: none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                        <h4 class="bitter-italic team-text text-light-brown position-relative btn-accor" style="transition:.3s"><b>+</b></h4>
                    </div>
                </div>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body position-relative" style="min-height: 75vw">
                <!-- <div class="accordion-body position-relative ps-5 ms-5" style="height: 75vw"> -->
                    <div class="position-relative" style="width: 92%">
                        {{-- <p class="team-text text-white chef-desc position-relative" style="font-size: 39px;line-height: 1.2; letter-spacing: 5% ;padding-right: 7rem;;transition:.3s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>  --}}
                        <div class="team-text text-white chef-desc position-relative" style="font-size: 16px; letter-spacing: 5% ;padding-right: 1.5rem;;transition:.3s;max-height: 98vw; overflow-y: auto;">
                            {!! $team->has(3)? $team[3][0]->bio : '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' !!}
                        </div>                       
                    </div>
                </div>
                </div>
            </div>
            {{-- <a href="#section-1" class="backdrop-chef"></a> --}}
        </div>
        @if(isset($background[3][4]))
        <div class="accordion-item accor-item-4 team2 position-relative" style="border: none !important; border-radius: unset !important; background: url('/storage/{{ $background[3][4]->url.'?v='.time() }}'); background-repeat: no-repeat; background-size: 122%;">
        @else
        <div class="accordion-item accor-item-4 team2 position-relative" style="border: none !important; border-radius: unset !important; background: url('/images/team2.jpg'); background-repeat: no-repeat; background-size: 148%;">
        @endif
            <div class="container-fluid layers">
                <div class="w-50 ms-4 position-relative" style="padding-top: 16vw">
                    <h3 class="text-light-brown team-text" style="font-size: 34px;line-height: 32px;letter-spacing: 5%;transition:.3s;"><b>{{ $team->has(4)? $team[4][0]->name : 'Syafiq Bahar' }}</b></h3>
                    <i class="text-light-brown team-text" style="letter-spacing: 5%;transition:.3s"><b>{{ $team->has(4)? $team[4][0]->position: 'Bar Manager' }}</b></i>
                    {{-- <p class="quote text-light-brown" style="font-size:34px;padding: 3rem 3.8rem 0px 0rem;line-height: 1.2;transition:.3s"><i>MIXOLOGIST</i></p> --}}
                    <div class="quote text-light-brown" style="line-height: 1.2; font-size: 14px; padding-top: 1.5rem; transition:.3s">
                        {{-- <i>THE MOST AMAZING & BEAUTIFUL, DEEP, TALENTED GM on EARTH and beyond.</i> --}}
                        <i>{!! $team->has(4)? $team[4][0]->quote_mobile : '<p><i>MIXOLOGIST</i></p>' !!}</i>
                    </div>
                </div>
                <div class="accordion-header" id="panelsStayOpen-headingOne">
                    <div class="accordion-button bg-transparent w-15" style="height:25vw;box-shadow: none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
                        <h4 class="bitter-italic text-light-brown team-text position-relative btn-accor" style="transition:.3s"><b>+</b></h4>
                    </div>
                </div>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body position-relative" style="min-height: 75vw">
                    <div class="position-relative" style="width: 92%">
                        {{-- <p class="text-light-brown team-text chef-desc position-relative" style="font-size: 39px;line-height: 1.2; letter-spacing: 5% ;padding-right: 7rem;;transition:.3s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </p> --}}
                        <div class="team-text text-white chef-desc position-relative" style="font-size: 16px; letter-spacing: 5% ;padding-right: 1.5rem;;transition:.3s;max-height: 98vw; overflow-y: auto;">
                            {!! $team->has(4)? $team[4][0]->bio : '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' !!}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
   .accordion-button:not(.collapsed)::after,
   .accordion-button.collapsed::after{
    opacity: 0;
   }
</style>