
<div class="col-md-4 pl-md-5 sidebar ftco-animate">
	<div class="sidebar-box">
		<form action="#" class="search-form">
			<div class="form-group">
				<span class="icon icon-search"></span>
				<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
			</div>
		</form>
	</div>
	<div class="sidebar-box ftco-animate">
		<div class="categories">
			<h3 class="heading-3">Related Jobs</h3>
			@foreach($related_jobs as $related_job)
			<li><a href="#">{{$related_job->job_title}}</a></li>
			@endforeach
		</div>
	</div>

	<div class="sidebar-box ftco-animate">
		<div class="categories">
			<h3 class="heading-3">Job Categories</h3>
			@foreach($categories as $category)
			<li><a href="#">{{$category->name}}<span>(12)</span></a></li>
			@endforeach
		</div>
	</div>
</div>