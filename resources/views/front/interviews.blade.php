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
          <a href="{{route('front.interviewCategory', $category->slug)}}" class="block-20" style="background-image: url('{{asset('storage/interview_categories/'.$category->cover_image)}}');">
          </a>
          <div class="text mt-3">
            <h3 class="heading"><a href="{{route('front.interviewSubcategory', $category->slug)}}">{{$category->name ?? ''}}</a></h3>
            <p>{{$category->description ?? ''}}</p>
          </div>
        </div>
      </div>
      @empty
      <p>Nothing yet</p>
      @endforelse
    </div>

    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>

    <h4 class="pb-3 mt-5">Recently Added Interview Questions and Answers?</h4>
    <div class="row d-flex">
      @forelse($interviews as $interview)
      <div class="col-md-4 ftco-animate">
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0">
            <div class="job-post-item-body d-block">
              <a href="#">{{$interview->question ?? ''}}</a>
              <p>{!!$interview->answer ?? ''!!}</p>
            </div>
          </div>
        </div>
      </div>
      @empty
      <p>Nothing yet</p>
      @endforelse
    </div>

    <h4 class="pb-3">More Resources</h4>
    <div class="row d-flex">
      <div class="col-md-3 card d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <div class="text mt-3">
            <h3 class="heading"><a href="#">Blog</a></h3>
            <p>3 blog articles</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 card d-flex ftco-animate">
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
              <a href="#">{{$interview->question ?? ''}}</a>
              <p>{!!$interview->answer ?? ''!!}</p>
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