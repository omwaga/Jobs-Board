@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
	<div class="container">
		<section class="ftco-section ftco-degree-bg pt-3">
			<div class="container">
				<div class="row">
					<div class="col-md-8 ftco-animate">
						<div class="job-post-item bg-white p-4">
							<h1 class="mb-3 h4">{{$page_banner->question ?? ''}}</h1>
							<p>{!!$page_banner->answer ?? ''!!}</p>
						</div>

						<h4 class="pt-5">Related Interview Questions</h4>
						@forelse($related_questions as $interview)
						<div class="job-post-item bg-white p-4">
							<h4 class="mb-3">{{$interview->question ?? ''}}</h4>
							<p>{!!$interview->answer ?? ''!!}</p>
						</div>
						@empty
						<p>Nothing yet</p>
						@endforelse
						{{$related_questions->links()}}
					</div> <!-- .col-md-8 -->
					<div class="col-md-4 sidebar ftco-animate">
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
								<h3 class="text-center">Browse Categories</h3>
								@foreach($categories as $category)
								<li><a href="{{route('front.interviewSubcategory', $category->slug)}}">{{$category->name}}</a></li>
								@endforeach
							</div>
						</div>

						<!-- <div class="sidebar-box ftco-animate">
							<h3>Recent Interview Questions</h3>
							@forelse($recent_questions as $interview)
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img mr-4" style="background-image: url('{{asset('front/images/logo.png')}}');"></a>
								<div class="text">
									<h3 class="heading"><a href="{{route('front.interview.question', $interview->slug)}}">{{$interview->question ?? ''}}</a></h3>
									<div class="meta">
										<div><a href="{{route('front.interview.question', $interview->slug)}}"><span class="icon-calendar"></span> {{$interview->created_at->toDayDateTimeString()}}</a></div>
										<div><a href="{{route('front.interview.question', $interview->slug)}}"><span class="icon-person"></span> Recruitable</a></div>
									</div>
								</div>
							</div>
							@empty
							<p>Nothing yet!</p>
							@endforelse
						</div> -->
					</div>

				</div>
			</div>
		</section> 
	</div>
</section>

@endsection