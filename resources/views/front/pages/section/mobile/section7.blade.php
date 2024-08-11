<a class="navJump" name="mobile-section7" id="mobile-section7"></a>
<div class="content" style="padding-top: 10vw">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 px-0">
                <img class="position-relative vertical-center line7" src="{{asset('/images/Line.png')}}" alt="" style="width: 100%; height: .5px;">
            </div>
            <div class="col-8">
                <h6 class="pt-4 text-white title7" style="font-size: 20px">Contact Us</h6>
            </div>
        </div>
    </div>
    <div class="content-mobile-section7">
        <div class="container">
            <div class="text-center my-4 px-5">
                <h4 class="text-light-brown" style="font-size: 20px;letter-spacing: 5%;line-height: 1.5">FOR YOUR BURNING QUESTIONS</h4>
                <form id="form_message_mobile">
                    @csrf
                   <div class="my-3">
                       <div class="text-white">
                           <div class="">
                               <input type="text" name="name" class="form-control border-0 contact-form text-light-brown rounded-0 my-4" style="background-color: #D9D9D933; height: 15vw;font-size: 20px;" placeholder="Name:">
                               <input type="text" name="email" class="form-control border-0 contact-form text-light-brown rounded-0 my-4" style="background-color: #D9D9D933; height: 15vw;font-size: 20px;" placeholder="Email:">
                               <textarea class="form-control border-0 contact-form text-light-brown my-4" name="message" id="" rows="6" style="background-color: #D9D9D933; font-size: 20px;" placeholder="Message:"></textarea>
                           </div>
                           <div class="my-2 text-center">
                               <button type="submit" class="btn text-white bg-transparent rounded-pill px-3 py-2 position-relative" style="font-size: 16px;border: 1px white solid">SUBMIT</button>
                           </div>
                       </div>
                   </div>
               </form>
            </div>
        </div>
        @if(isset($background[7][2]))
            @if($background[7][2]->type == 1)
            <div class="contact-us-image d-flex align-items-center" style="background: url('/storage/{{ $background[7][2]->url.'?v='.time() }}'); background-size: cover; min-height: 168vw;">
            @else
            <div class="contact-us-image d-flex align-items-center" style="background: {{ $background[7][2]->url }}; min-height: 168vw;">
            @endif
        @else
        <div class="contact-us-image d-flex align-items-center" style="background: url('/images/bg-mobile-sec7.png'); background-size: cover; min-height: 168vw;">
        @endif
          <div>
            <div class="container-fluid px-5 text-center text-white">
                {!! $contact_us? $contact_us->content: '<h6><b>ADDRESS :</b></h6>
  
                <div style="line-height:1;">&nbsp;</div>
                
                <p>6 Battery Road #05 - 03<br />
                Singapore 049909</p>
                
                <div style="line-height:1;">&nbsp;</div>
                
                <h6><b>HOW TO GET THERE :</b></h6>
                
                <div style="line-height:1;">&nbsp;</div>
                
                <p>For those who are coming by car, drop off is at Bonham Street. Entrance on the riverside</p>
                
                <div style="line-height:1;">&nbsp;</div>
                
                <h6><b>DRESS CODE :</b></h6>
                
                <div style="line-height:1;">&nbsp;</div>
                
                <p>Smart Casual, no singlet &amp; flip flops</p>' !!}                            
            </div>
          </div>
        </div>
    </div>
</div>