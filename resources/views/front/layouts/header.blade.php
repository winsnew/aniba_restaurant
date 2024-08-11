<nav class="navbar navbar-expand-lg navbar-light fixed-top py-2">
    <div class="container">
        <div class="navbar-start text-start" style="width: 30%;transition: all .8s ease;">
            <a href="{{ $contact_us? $contact_us->instagram: 'https://www.instagram.com/aniba.sg/' }}" target="_blank"><img class="mx-2 instagram" src="{{asset('images/instagram.png')}}" width="30" alt=""></a>
            <a href="{{ $contact_us? $contact_us->facebook: 'https://www.facebook.com/anibasingapore' }}" target="_blank"><img class="mx-2 facebook" src="{{asset('images/facebook.png')}}" width="30" alt=""></a>
        </div>
        <div class="text-center" style="width: 40%;">
            {{-- <a class="px-2 text-decoration-none text-white navbar-center-text opacity-0 position-relative head-culinary" style="font-size: 14px" href="#section1"><i>Culinary Journey</i></a> --}}
            <a href="#homepage" class="homepage-scroll"><img class="navbar-center-logo navbar-transition opacity-0" src="{{asset('images/aniba.png')}}" width="115" alt=""></a>
            {{-- <a class="px-2 text-decoration-none text-white navbar-center-text opacity-0 position-relative head-adoni" style="font-size: 14px" href="#section2"><i>By Meir Adoni</i></a> --}}
        </div>
        <div class="navbar-end text-end" style="width: 40%">
            <div class="mx-2 d-inline position-relative" id="nav-menu" style="font-size: 14px;">
                {{-- <a href="#" type="button" class="text-decoration-none text-white text-uppercase">Menu</a>
                <div class="position-absolute bg-brown mt-3" style="width: 160px; height: 100px; background-color: white; right: 21vw;"></div> --}}
                <a class="text-decoration-none text-white text-uppercase head-menu" id="nav-menu-title" type="button" style="font-size: 14px; position: static; display: inline; width: fit-content !important">Menu</a>
                <div class="accordion-collapse collapse position-absolute" id="head-menu-item" aria-labelledby="head-menu" style="right: -3.5vw;">
                    <div class="accordion-body text-uppercase bg-brown list-group list-group-flush text-center" style="width: 150px; margin-top: 1.25rem">
                        @foreach($submenu as $menu)
                        <a href="{{ $menu->url === "-" ? '#' : asset($menu->url) }}" target="_blank" class="list-group-item bg-transparent text-white border-light-brown">{{ $menu->name }}</a>
                        @endforeach
                        {{-- <a href="" class="list-group-item bg-transparent text-white border-light-brown">Brunch</a>
                        <a href="" class="list-group-item bg-transparent text-white border-light-brown">Lunch</a>
                        <a href="" class="list-group-item bg-transparent text-white border-light-brown">Dinner</a>
                        <a href="" class="list-group-item bg-transparent text-white border-light-brown">Speakeasy</a>
                        <a href="" class="list-group-item bg-transparent text-white border-light-brown">Vegetarian</a>
                        <a href="" class="list-group-item bg-transparent text-white border-light-brown">Vegan</a>
                        <a href="" class="list-group-item bg-transparent text-white border-light-brown">Dringks</a> --}}
                    </div>
                </div>
            </div>
            <a class="text-decoration-none text-white text-uppercase x-small mx-2 head-reservation" style="font-size: 14px" href="{{ $reservation? $reservation->url : 'http://www.sevenrooms.com/reservations/aniba' }}" target="_blank">Reservations</a>
            <a class="text-decoration-none text-white text-uppercase mx-2 head-contact" style="font-size: 14px" href="#section7">Contact Us</a>
            <a id="burger" data-click-state="1">
                <img class="mx-2 head-burger" src="{{asset('images/burger.png')}}" alt="" width="30">                
            </a> 
          {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button> --}}
        </div>
      </div>
  </nav>