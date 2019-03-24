<div class="col-lg-3 col-sm-6 col-12">
    <div class="thumbnail team-member">
        <img src="{{ $employee->present()->firstImage(270,286,'fit',80) }}" alt="{{ $employee->fullname }}">
        <div class="caption">
            <h6><a href="{{ $employee->url }}">{{ $employee->fullname }}</a></h6>
            <p>{{ $employee->position }}</p>
        </div>
    </div>
</div>
