<div class="card card-pricing mt-4">
	<div class="card-body">
		<h3 class="heading-3">Related Jobs</h3>
		<ul class="specification-list">
			@foreach($related_jobs as $related_job)
			<li><a href="#">{{$related_job->job_title}}</a></li>
			@endforeach
		</ul>

		<h3 class="heading-3">Job Categories</h3>		
		<ul class="specification-list">
			@foreach($categories as $category)
			<li>
				<a href="{{route('jobseeker.category', $category->slug)}}"><span class="name-specification">{{$category->name ?? ''}}</span>
					<span class="status-specification">0</span>
				</a>
			</li>
			@endforeach
		</ul>
	</div>
</div>
