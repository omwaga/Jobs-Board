
<div class="card card-pricing">
	<div class="card-body">
		<h4>Browse Categories</h4>
		<ul class="specification-list">
			@foreach($categories as $category)
			<li>
				<a href="{{route('jobseeker.category', $category->slug)}}"><span class="name-specification">{{$category->name ?? ''}}</span></a>
			</li>
			@endforeach
		</ul> 
		<h4>Browse Job Types</h4>
		<ul class="specification-list">
			@foreach($job_types as $job_type)
			<li>
				<a href="{{route('jobseeker.type', $job_type->slug)}}"><span class="name-specification">{{$job_type->name ?? ''}}</span></a>
			</li>
			@endforeach
		</ul> 
		<h4>Browse Locations</h4>
		<ul class="specification-list">
			@foreach($locations as $location)
			<li>
				<a href="{{route('jobseeker.location', $location->slug)}}"><span class="name-specification">{{$location->name ?? ''}}</span></a>
			</li>
			@endforeach
		</ul>
	</div>
</div>