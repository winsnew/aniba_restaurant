<a class="navJump" name="section9" id="section9"></a>
<div style="background: #E9E0D9; height: 100vh">
    <div class="container-xxl py-5">
        <h1 class="text-brown mb-3">Gallery</h1>
        <div class="text-center mb-4">
            <button class="gallery-btn px-3 mx-auto active" data-filter="*">All</button>
            @foreach($category as $value)
            <button class="gallery-btn px-3 mx-auto" data-filter=".{{ $value->name }}">{{$value->name}}</button>
            @endforeach
        </div>

        {{-- content --}}
        <div id="isotope-container" >
            <div class="gallery-list row">
                @foreach($gallery as $data)
                <div class=" gallery-item col-md-3 {{$data->category->name}}">
                    <a href="{{ asset('/storage/'.$data->image) }}" class="fancylight popup-btn" data-fancybox-group="light" title="{{$data->title}}">
                        <img src="{{ asset('/storage/'.$data->image) }}" class="img-fluid gallery-img" />
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>

    $('.gallery-btn').click(function () {
        $('.gallery-btn').removeClass('active')
        $(this).addClass('active')

        var filterValue = $(this).attr('data-filter')
        $('.gallery-list').isotope({ filter: filterValue })
        
    })
    $(window).on('load', function () {
        $('.gallery-list').isotope()
    })

    $(document).ready(function () {
        var popup_btn = $('.gallery-item')
        popup_btn.magnificPopup({
            delegate: 'a',
            closeOnContentClick: false,
            closeBtnInside: false,
            type: "image",
            gallery: {
                enabled: true,
            },
            image: {
                titleSrc: function(item){
                return '<span class="gallery-title">' + item.el.attr("title") + "</span>"
                }
            },
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                } 
            }
        })
    })
</script>