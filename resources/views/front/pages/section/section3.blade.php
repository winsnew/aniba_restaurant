<a class="navJump" name="section3" id="section3"></a>
@if(isset($background[3][5]))
    @if($background[3][5]->type == 1)
    <div class="content text-start" style="background: url('storage/{{ $background[3][5]->url.'?v='.time() }}'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    @else
    <div class="content text-start" style="background-color: {{ $background[3][5]->url }}">
    @endif
@else
<div class="content text-start" style="background-color: #322A25">
@endif
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col-6 col-lg-6 col-sm-6">
                <div class="mx-5 py-5 mt-4" style="padding-left:8vw ">
                    <h3 class="ps-5 title3 text-white" style="width: 100px;">{{ $team->has(3)? $team[3][0]->name : 'SHIR CARASSO' }}</h3>
                    <h5 class="ps-5 title3 text-white"><i>{{ $team->has(3)? $team[3][0]->position : 'General Manager' }}</i></h5>
                    <img class="line4 position-absolute" src="{{asset('images/Line.png')}}"  alt="" width="0" style="max-width: 60rem;z-index: 20">
                    <div class="pt-5 px-5 team-desc1 text-white">
                        {!! $team->has(3)? $team[3][0]->bio : '<p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>' !!}
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-6 col-sm-6">
                <div class="position-relative py-5">
                    @if(isset($background[3][1])))
                        <img class="position-relative image-team1" src="{{asset('/storage/'.$background[3][1]->url.'?v='.time())}}" alt="" style="width: 27vw;z-index: 21;">
                    @else
                        <img class="position-relative image-team1" src="{{asset('images/team1.jpg')}}" alt="" style="width: 27vw;z-index: 21;">
                    @endif
                </div>
            </div>
        </div>
        <div class="row position-relative">
            <div class="col-6 col-lg-6 col-sm-6">
                <img class="line5 position-absolute" src="{{asset('images/Line.png')}}"  alt="" width="0" style="left: 12rem;
                top: 12rem;
                max-width: 60rem;">

                <div class="mx-5 py-5 mt-4 position-relative" style="padding-left:8vw ">
                    @if(isset($background[3][3]))
                        <img class="position-relative image-team2" src="{{asset('/storage/'.$background[3][3]->url.'?v='.time())}}" alt="" style="width: 27vw;margin-left: 10vw">
                    @else
                        <img class="position-relative image-team2" src="{{asset('images/team2.jpg')}}" alt="" style="width: 27vw;margin-left: 10vw">
                    @endif
                </div>
            </div>
            <div class="col-6 col-lg-6 col-sm-6">
                <div class="mx-5 py-5 mt-4" style="padding-right:8vw ">
                    <h3 class="ps-3 title4 text-white" style="width: 100px;">{{ $team->has(4)? $team[4][0]->name : 'SYAFIQ BAHAR' }}</h3>
                    <h5 class="ps-3 title4 text-regular text-white"><i>{{ $team->has(4)? $team[4][0]->position : 'Bar Manager' }}</i></h5>
                    <div class="ps-3 pt-5 pe-5 team-desc2 text-white">
                        {!! $team->has(4)? $team[4][0]->bio : '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' !!}
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>