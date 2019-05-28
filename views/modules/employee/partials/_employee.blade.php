<div class="col-lg-3 col-sm-6 col-12">
    <div class="thumbnail team-member">
        <img src="{{ $employee->present()->firstImage(300,275,'fit',80) }}" alt="{{ $employee->fullname }}">
        <div class="caption">
            <h6 style="margin: 0;"><a href="{{ $employee->url }}">{{ $employee->fullname }}</a></h6>
            <p style="margin: 0;">{{ $employee->position }}
            	@if(!empty($employee->email))
            	<br/><a href="mailto:{{ Html::email($employee->email) }}">{{ Html::email($employee->email) }}</a>
            	@endif
            </p>
        </div>
    </div>
</div>
