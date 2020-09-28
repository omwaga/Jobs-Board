
<div class="card card-pricing">
	<div class="card-body">
		<h4>Categories</h4>
		<ul class="specification-list">
			@foreach($categories as $category)
			<li>
				<a href="{{route('jobseeker.category', $category->slug)}}"><span class="name-specification">{{$category->name ?? ''}}</span>
					<span class="status-specification">0</span></a>
				</li>
				@endforeach
			</ul> 
			<h4>Job Types</h4>
			<ul class="specification-list">
				@foreach($job_types as $job_type)
				<li>
					<a href=""><span class="name-specification">{{$job_type->name ?? ''}}</span>
						<span class="status-specification">0</span></a>
					</li>
					@endforeach
				</ul> 
				<h4>Locations</h4>
				<ul class="specification-list">
					@foreach($locations as $location)
					<li>
						<a href=""><span class="name-specification">{{$location->name ?? ''}}</span>
							<span class="status-specification">0</span></a>
						</li>
						@endforeach
					</ul>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary btn-block"><b>Get Started</b></button>
				</div>
			</div>