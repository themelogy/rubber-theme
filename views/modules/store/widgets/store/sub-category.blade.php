<div class="row">
    @foreach($categories as $category)
    <div class="col-md-3">
        <div class="item thumbnail" style="min-height: 130px;">
                <a href="{{ $category->url }}" style="display: block; padding: 10px; min-height: 60px;">
                    <img src="{{ $category->present()->firstImage(null,60,'resize',70) }}" alt="{{ $category->title }}" />
                </a>
                <div class="caption">
                    {{ $category->title }}
                </div>
        </div>
    </div>
    @endforeach
</div>