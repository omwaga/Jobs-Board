@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
  <div class="container">
    <h4 class="pb-3">What are you interested in learning?</h4>
    <div class="row d-flex">
      @forelse($categories as $category)
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="{{route('front.interviewSubcategory', $category->slug)}}" class="block-20" style="background-image: url('{{asset('storage/interview_categories/'.$category->cover_image)}}'); height: 100px">
          </a>
          <div class="text mt-3">
            <h3 class="heading"><a href="{{route('front.interviewSubcategory', $category->slug)}}">{{$category->name ?? ''}}</a></h3>
            <p>{!! Str::limit(strip_tags($category->description), 55) !!}</p>
          </div>
        </div>
      </div>
      @empty
      <p>Nothing yet</p>
      @endforelse
    </div>

    {{$categories->links()}}

    <h4 class="pb-3 mt-5">Recently Added Interview Questions and Answers?</h4>
    <div class="row d-flex">
      @forelse($interviews as $interview)
      <div class="col-md-4 ftco-animate">
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0">
            <div class="job-post-item-body d-block">
              <a href="{{route('front.interview.question', $interview->slug)}}" class="h5">{{$interview->question ?? ''}}</a>
              <p>{!! Str::limit(strip_tags($interview->answer), 120) !!} <a href="{{route('front.interview.question', $interview->slug)}}">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      @empty
      <p>Nothing yet</p>
      @endforelse
    </div>
    
    <h4 class="pb-3">More Resources</h4>
    <div class="row d-flex justify-content-center">
      <div class="col-md-3 card d-flex ftco-animate m-2">
        <div class="blog-entry align-self-stretch">
          <div class="text mt-3">
            <h3 class="heading"><a href="#">Job Listings</a></h3>
            <p>3 blog articles</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 card d-flex ftco-animate m-2">
        <div class="blog-entry align-self-stretch">
          <div class="text mt-3">
            <h3 class="heading"><a href="#">Blog</a></h3>
            <p>3 blog articles</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 card d-flex ftco-animate m-2">
        <div class="blog-entry align-self-stretch">
          <div class="text mt-3">
            <h3 class="heading"><a href="#">Cheat Sheets</a></h3>
            <p>3 blog articles</p>
          </div>
        </div>
      </div>
    </div>

    <h4 class="pb-3 pt-5">Popular Interview Questions and Answers?</h4>
    <div class="row d-flex">
      @forelse($popular_interviews as $interview)
      <div class="col-md-4 ftco-animate">
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0">
            <div class="job-post-item-body d-block">
              <a href="{{route('front.interview.question', $interview->slug)}}" class="h5">{{$interview->question ?? ''}}</a>
              <p>{!! Str::limit(strip_tags($interview->answer), 120) !!} <a href="{{route('front.interview.question', $interview->slug)}}">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      @empty
      <p>Nothing yet</p>
      @endforelse
    </div>
  </div>
</section>

@endsection