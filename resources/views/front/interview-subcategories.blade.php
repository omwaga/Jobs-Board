@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      @forelse($subcategories as $category)
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="{{route('front.interviewCategory', $category->slug)}}" class="block-20" style="background-image: url('{{asset('storage/interview_sub_categories/'.$category->cover_image)}}'); height: 100px">
          </a>
          <div class="text mt-3">
            <h3 class="heading"><a href="{{route('front.interviewCategory', $category->slug)}}">{{$category->name ?? ''}}</a></h3>
            <p>{!! Str::limit(strip_tags($category->description), 100) !!}</p>
          </div>
        </div>
      </div>
      @empty
      @include('front.interviews-view')
      @endforelse
    </div>

    {{$subcategories->links()}}

    @if($subcategories->count() > 0)
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
    
    @include('front.more-resources')

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
    @endif
  </div>
</section>

@endsection