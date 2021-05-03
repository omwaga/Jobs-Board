@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
  <div class="container">
    <h4 class="pb-3">What are you interested in learning?</h4>
    <div class="row">

      @forelse($categories as $category)
      <div class="col-md-3 ftco-animate mb-2">
        <div class="bg-success p-4 d-md-flex align-items-center"  style="height:100px">
          <div class="mb-4 mb-md-0 mr-5">
              <a href="{{route('front.interviewSubcategory', $category->slug)}}"><p class="mr-3 text-white">{{$category->name}}</p></a>
          </div>
        </div>
      </div><!-- end -->
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
              <h5>{{$interview->question ?? ''}}</h5>
              <p>{!! Str::limit(strip_tags($interview->answer), 100) !!}</p>
            </div>
          </div>
        </div>
      </div>
      @empty
      <p>Nothing yet</p>
      @endforelse
    </div>

    @include('front.more-resources')

    <h4 class="pb-3 pt-5">Popular Interview Questions and Answers?</h4>
    <div class="row d-flex">
      @forelse($popular_interviews as $interview)
      <div class="col-md-4 ftco-animate">
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0">
            <div class="job-post-item-body d-block">
              <h5>{{$interview->question ?? ''}}</h5>
              <p>{!! Str::limit(strip_tags($interview->answer), 100) !!} </p>
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
