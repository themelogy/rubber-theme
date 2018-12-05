<div class="owl-carousel owl-theme">
    @foreach($categories as $category)
    <div class="item thumbnail">
            <a href="{{ $category->url }}" style="display: block; padding: 10px;">
                <img src="{{ $category->present()->firstImage(null,60,'resize',70) }}" alt="{{ $category->title }}" style="width:auto; max-height:60px;" />
            </a>
            <div class="caption">
                {{ $category->title }}
            </div>
    </div>
    @endforeach
</div>


@push('css-stack')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endpush

@push('js-stack')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endpush

@push('js-inline')
<script>
    jQuery(document).ready(function(){
        jQuery('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
        })
    });
</script>
@endpush