
<div class="sidebar-box ftco-animate">
	<div class="categories">
		<h3 class="heading-3 text-primary text-center">Similar Jobs</h3>
		@foreach($related_jobs as $related_job)
		<li><a href="{{route('front.singlejob', $related_job->slug)}}">{{$related_job->job_title}}</a></li>
		@endforeach
	</div>
</div>

<div class="sidebar-box ftco-animate">
	<div class="categories">
		<h3 class="heading-3 text-center text-primary">Job by Category</h3>
		@foreach($categories as $category)
		<li><a href="{{route('front.category', $category->slug)}}">{{$category->name ?? ''}}</a></li>
		@endforeach
	</div>
</div>