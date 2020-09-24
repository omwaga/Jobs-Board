
<div class="col-lg-3 sidebar">
	<div class="sidebar-box bg-white p-4 ftco-animate">
		<h3 class="heading-sidebar">Browse Category</h3>
		<form action="#" class="search-form mb-3">
			<div class="form-group">
				<span class="icon icon-search"></span>
				<input type="text" class="form-control" placeholder="Search...">
			</div>
		</form>
		<form action="#" class="browse-form">
			@foreach($categories as $category)
			<label for="option-job-1"><input type="checkbox" id="option-job-1" name="vehicle" value="" checked> {{$category->name ?? ''}}</label><br>
			@endforeach
		</form>
	</div>

	<div class="sidebar-box bg-white p-4 ftco-animate">
		<h3 class="heading-sidebar">Select Location</h3>
		<form action="#" class="search-form mb-3">
			<div class="form-group">
				<span class="icon icon-search"></span>
				<input type="text" class="form-control" placeholder="Search...">
			</div>
		</form>
		<form action="#" class="browse-form">
			@foreach($locations as $location)
			<label for="option-location-1"><input type="checkbox" id="option-location-1" name="vehicle" value="" checked> {{$location->name ?? ''}}, {{$location->country->name ?? ''}}</label><br>
			@endforeach
		</form>
	</div>

	<div class="sidebar-box bg-white p-4 ftco-animate">
		<h3 class="heading-sidebar">Job Type</h3>
		<form action="#" class="browse-form">
			@foreach($job_types as $job_type)
			<label for="option-job-type-1"><input type="checkbox" id="option-job-type-1" name="vehicle" value="" checked> {{$job_type->name ?? ''}}</label><br>
			@endforeach
		</form>
	</div>
</div>