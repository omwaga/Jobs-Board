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

    <h4 class="pb-3 mt-5">Recently Added Articles</h4>
    <div class="row d-flex">
      @forelse($articles as $article)
      <div class="col-md-4 ftco-animate">
        <a href="{{route('front.blog.article', $article->slug)}}" class="block-20" style="background-image: url('{{asset('storage/blog_articles/'.$article->cover_image)}}'); ">
        </a>
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0">
            <div class="job-post-item-body d-block">
              <a href="{{route('front.blog.article', $article->slug)}}" class="h5">{{$article->title ?? ''}}</a>
              <div class="row">
                <div class="col-md-8">
                  <strong>Last Updated</strong>
                  <p>{{$article->updated_at->diffForHumans()}}</p>                
                </div>   
                <div class="col-md-4" align="right">
                  <span class="icon-eye text-primary">43343657</span><br>
                  <span class="icon-comments text-primary">7878</span>
                </div>            
              </div>
            </div>
          </div>
        </div>
      </div>
      @empty
      <p>Nothing yet</p>
      @endforelse
    </div>

    @include('front.more-resources')

    <h4 class="pb-3 pt-5">Popular Articles</h4>
    <div class="row d-flex">
      @forelse($popular_articles as $article)
      <div class="col-md-4 ftco-animate">
        <a href="{{route('front.blog.article', $article->slug)}}" class="block-20" style="background-image: url('{{asset('storage/blog_articles/'.$article->cover_image)}}'); ">
        </a>
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0">
            <div class="job-post-item-body d-block">
              <a href="{{route('front.blog.article', $article->slug)}}" class="h5">{{$article->title ?? ''}}</a>
              <div class="row">
                <div class="col-md-8">
                  <strong>Last Updated</strong>
                  <p>{{$article->updated_at->diffForHumans()}}</p>                
                </div>   
                <div class="col-md-4" align="right">
                  <span class="icon-eye text-primary">2345</span><br>
                  <span class="icon-comments text-primary">8</span>
                </div>            
              </div>
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