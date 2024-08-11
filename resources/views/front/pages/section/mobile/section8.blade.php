@if(count($press) > 0)
<a class="navJump" name="mobile-section8" id="mobile-section8"></a>
@if(isset($background[8][2]))
    @if($background[8][2]->type == 1)
    <div class="content" style="padding-top: 10vw; background: url('storage/{{ $background[8][2]->url }}'); background-size: cover;">
    @else
    <div class="content" style="padding-top: 10vw; background: {{ $background[8][2]->url }};">
    @endif
@else
<div class="content" style="padding-top: 10vw">
@endif
    <div class="container-fluid pb-3">
        <div class="row">
            <div class="col-4 px-0">
                <img class="position-relative vertical-center line8" src="{{asset('/images/Line2.png')}}" alt="" style="width: 100%; height: .5px;">
            </div>
            <div class="col-8">
                <h6 class="pt-4 text-brown title8" style="font-size: 20px">PRESS</h6>
            </div>
        </div>
    </div>
    <div class="content-mobile-section8">
        <div class="mobile-slider8">
            {{-- @foreach($press->chunk(4) as $subPress)
                <div>
                    @foreach($subPress as $item)
                        <div class="content-1 pb-3" style="background-color: {{ $item->color }};">
                            <div class="press-1 position-relative">
                                <div class="position-relative layers mb-3" style="padding: 7vw 7vw 0 10vw; width: 100%; z-index: 1; height: 45vw;">
                                    <h4 class="py-4 pe-2 press-title" style="font-size: 6vw;line-height: 1.2; color: {{ $item->font_color }}"><b>{{ $item->title }}</b></h4>
                                    <div>
                                    </div>
                                </div>
                                <img class="position-absolute image-content" src="{{asset('storage/'.$item->image.'?v='.time())}}" alt="" style="top: 0;width: 100%;height: 100%;">
                            </div>
                            <div class="container-fluid">
                                <div class="row mx-3 mt-3">
                                    <div class="col-6">
                                        <h5 class="position-relative vertical-center" style="font-size: 4vw;letter-spacing: 5%;line-height: 1;  color: {{ $item->font_color }}"><b>by {{ $item->publisher }}</b></h5>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <a href="{{ $item->url }}" target="_blank" class="btn bg-transparent rounded-pill py-2 position-relative" style="font-size: 3vw;border: 1px {{ $item->font_color }} solid; color: {{ $item->font_color }}"><b>READ MORE</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach --}}
        </div>
        <div class="d-flex flex-column justify-content-center mt-4 text-center load-more d-none" style="font-size: 16px; color: black;">
          <p class="bg-transparent text-brown p-0 m-0"><b>LOAD MORE</b></p>
          <i class="fas fa-angle-down text-center mt-0 p-0"></i>
        </div>
    </div>

</div>
<style>
    .mobile-slider8 .content-1{
      opacity: 0;
      overflow: hidden;
      max-height: 0;
      transition-duration: .5s;
      transition-timing-function: ease-in-out;
    }

    .mobile-slider8 .content-1.animated{
      opacity: 1 !important;
      max-height: 100%;
    }
</style>
<script>
  
  let display = []

  const loadContent = (data) => {
    data.forEach((element, index) => {
      $('.mobile-slider8').append(`
      <div class="content-1 pb-3" style="background-color: ${element.color};">
          <div class="press-1 position-relative">
              <div class="position-relative layers mb-3" style="padding: 7vw 7vw 0 10vw; width: 100%; z-index: 1; height: 45vw;">
                  <h4 class="py-4 pe-2 press-title" style="font-size: 6vw;line-height: 1.2; color: ${element.font_color}"><b>${element.title}</b></h4>
                  <div>
                  </div>
              </div>
              <img class="position-absolute image-content" src="{{ asset('storage/${element.image}?v='.time()) }}" alt="" style="top: 0;width: 100%;height: 100%;">
          </div>
          <div class="container-fluid">
              <div class="row mx-3 mt-3">
                  <div class="col-6">
                      <h5 class="position-relative vertical-center" style="font-size: 4vw;letter-spacing: 5%;line-height: 1;  color: ${element.font_color}"><b>by ${element.publisher}</b></h5>
                  </div>
                  <div class="col-6">
                      <div class="text-end">
                          <a href="${element.url}" target="_blank" class="btn bg-transparent rounded-pill py-2 position-relative" style="font-size: 3vw;border: 1px ${element.font_color} solid; color: ${element.font_color}"><b>READ MORE</b></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      `)
      setTimeout(() => {
        $('.mobile-slider8 .content-1').addClass('animated')
      }, index*5000);
    });
  }

  const spliceChunk = (data) => {
    const res = []
    while (data.length > 0) {
      const chunk = data.splice(0, 5)
      res.push(chunk)
    }
    return res
  }

  $(document).ready(function () {

    // display = press.shift()
    let press = spliceChunk({!! json_encode($press) !!})

    if (press.length > 1) {
        $('.load-more').removeClass('d-none')
        $('.content-mobile-section8').addClass('pb-3')
    }

    loadContent(press.shift())

    $('.mobile-section8 .press-1').hover(
      function () {
        $(this).find('.layers').addClass('layers-hover')
        $(this).find('.image-content').addClass('image-content-trans')
        $(this).find('.press-title').addClass('text-brown')
      },
      function () {
        $(this).find('.image-content').removeClass('image-content-trans');
        $(this).find('.layers').removeClass('layers-hover');
        $(this).find('.press-title').removeClass('text-brown');
      }
    )

    $('.load-more').click(function () {
      loadContent(press.shift())
      if(press.length < 1) {
        $(this).addClass('d-none')
        $('.content-mobile-section8').removeClass('pb-3')
      }
    })
  })
  
</script>
@endif