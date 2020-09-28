<div class="sidebar-box ftco-animate">
	<div class="categories">
		<h3 class="heading-3">Job Categories</h3>
		@foreach($categories as $category)
		<li><a href="{{route('front.category', $category->slug)}}">{{$category->name}}<span>(12)</span></a></li>
		@endforeach
	</div>
</div>

<div class="sidebar-box ftco-animate">
	<div class="categories">
		<h3 class="heading-3">Job Categories</h3>
		@foreach($locations as $location)
		<li><a href="{{route('front.location', $location->slug)}}">{{$location->name}}<span>(12)</span></a></li>
		@endforeach
	</div>
</div>


<div class="sidebar-box bg-white p-4 ftco-animate">
	<div class="categories">
		<h3 class="heading-3">Job Types</h3>
		@foreach($job_types as $type)
		<li><a href="{{route('front.type', $type->slug)}}">{{$type->name}}<span>(12)</span></a></li>
		@endforeach
	</div>
</div>