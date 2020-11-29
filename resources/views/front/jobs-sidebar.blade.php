<div class="sidebar-box ftco-animate">
	<div class="categories">
		<h3 class="heading-3 text-center text-primary">Job by Category</h3>
		@foreach($categories as $category)
		<li><a href="{{route('front.category', $category->slug)}}">{{$category->name ?? ''}}</a></li>
		@endforeach
	</div>
</div>

<div class="sidebar-box ftco-animate">
	<div class="categories pt-3">
		<h3 class="heading-3 text-center text-primary">Job by Location</h3>
		@foreach($locations as $location)
		<li><a href="{{route('front.location', $location->slug)}}">{{$location->name ?? ''}}, {{$location->country->name ?? ''}}</a></li>
		@endforeach
	</div>
</div>

<div class="sidebar-box ftco-animate">
	<div class="categories pt-3">
		<h3 class="heading-3 text-center text-primary">Jobs by Type</h3>
		@foreach($job_types as $type)
		<li><a href="{{route('front.type', $type->slug)}}">{{$type->name}}</a></li>
		@endforeach
	</div>
</div>