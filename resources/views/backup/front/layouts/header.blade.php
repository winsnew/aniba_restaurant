<nav class="navbar navbar-expand-lg navbar-light fixed-top py-2">
    <div class="container">
        <div class="navbar-start text-start" style="width: 30%;transition: all .8s ease;">
            <img class="mx-2 instagram" src="{{asset('images/instagram.png')}}" width="30" alt="">
            <img class="mx-2 facebook" src="{{asset('images/facebook.png')}}" width="30" alt="">
        </div>
        <div class="text-center" style="width: 40%;">
            <a class="px-2 text-decoration-none text-white navbar-center-text opacity-0 position-relative head-culinary" style="font-size: 14px" href="#section1"><i>Culinary Journey</i></a>
            <a href="#homepage" class="homepage-scroll"><img class="navbar-center-logo navbar-transition opacity-0" src="{{asset('images/aniba.png')}}" width="115" alt=""></a>
            <a class="px-2 text-decoration-none text-white navbar-center-text opacity-0 position-relative head-adoni" style="font-size: 14px" href="#section2"><i>By Meir Adoni</i></a>
        </div>
        <div class="navbar-end text-end" style="width: 30%">
            <a class="text-decoration-none text-white text-uppercase x-small mx-2 head-reservation" style="font-size: 14px" href="#section3">Reservations</a>
            <a class="text-decoration-none text-white text-uppercase mx-2 head-contact" style="font-size: 14px" href="#section5">Contact Us</a>
            <a id="burger">
                <img class="mx-2 head-burger" src="{{asset('images/burger.png')}}" alt="" width="30">                
            </a> 
          {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button> --}}
        </div>
      </div>
  </nav>