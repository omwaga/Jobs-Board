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
          <a href="{{route('front.blogSubcategory', $category->slug)}}" class="block-20" style="background-image: url('{{asset('storage/blog_categories/'.$category->cover_image)}}'); height: 100px">
          </a>
          <div class="text mt-3">
            <h3 class="heading"><a href="{{route('front.blogSubcategory', $category->slug)}}">{{$category->name ?? ''}}</a></h3>
            <p>{!! Str::limit(strip_tags($category->description), 55) !!}</p>
          </div>
        </div>
      </div>
      @empty
      <p>Nothing yet</p>
      @endforelse
    </div>

    {{$categories->links()}}

    <h4 class="pb-3 mt-5">Recently Added Blog Articles</h4>
    <div class="row d-flex">
      @forelse($articles as $article)
      <div class="col-md-4 ftco-animate">
          <a href="#" class="block-20" style="background-image: url('{{asset('storage/blog_articles/'.$article->cover_image)}}'); ">
          </a>
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0">
            <div class="job-post-item-body d-block">
              <a href="#" class="h5">{{$article->title ?? ''}}</a>
              <p>{!! Str::limit(strip_tags($article->description), 120) !!}</p>
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

    <h4 class="pb-3 pt-5">Popular Blog Articles</h4>
    <div class="row d-flex">
      @forelse($popular_articles as $article)
      <div class="col-md-4 ftco-animate">
          <a href="#" class="block-20" style="background-image: url('{{asset('storage/blog_articles/'.$article->cover_image)}}'); ">
          </a>
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0">
            <div class="job-post-item-body d-block">
              <a href="#" class="h5">{{$article->title ?? ''}}</a>
              <p>{!! Str::limit(strip_tags($article->description), 120) !!}</p>
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