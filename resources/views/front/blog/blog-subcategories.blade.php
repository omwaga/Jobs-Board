@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      @forelse($subcategories as $category)
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="{{route('front.blog.articles', $category->slug)}}" class="block-20" style="background-image: url('{{asset('storage/blog_sub_categories/'.$category->cover_image)}}'); height: 100px">
          </a>
          <div class="text mt-3">
            <h3 class="heading"><a href="{{route('front.blog.articles', $category->slug)}}">{{$category->name ?? ''}}</a></h3>
            <p>{!! Str::limit(strip_tags($category->description), 100) !!}</p>
          </div>
        </div>
      </div>
      @empty 
      <section class="ftco-section ftco-degree-bg pt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ftco-animate">
              <div class="row">
                @forelse($all_articles as $article)
                <div class="col-md-6">
                  <div class="job-post-item bg-white p-4">
                    <a href="{{route('front.blog.article', $article->slug)}}" class="block-20" style="background-image: url('{{asset('storage/blog_articles/'.$article->cover_image)}}');">
                    </a>
                    <a href="{{route('front.blog.article', $article->slug)}}"><h4 class="mb-3">{{$article->title ?? ''}}</h4></a>
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
                    <p>{!! Str::limit(strip_tags($article->description), 80) !!}</p>
                  </div>
                </div>
                @empty
                <p>Nothing yet</p>
                @endforelse
              </div>

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
                  <li><a href="{{route('front.blogSubcategory', $category->slug)}}">{{$category->name}}</a></li>
                  @endforeach
                </div>
              </div>

              <div class="sidebar-box ftco-animate">
                <h3>Recent Blog</h3>
                @foreach($recent_articles as $article)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" href="{{route('front.blog.article', $article->slug)}}" style="background-image: url('{{asset('storage/blog_articles/'.$article->cover_image)}}');"></a>
                  <div class="text">
                    <h3 class="heading"><a href="{{route('front.blog.article', $article->slug)}}">{{$article->title ?? ''}}</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> {{$article->created_at->toDayDateTimeString()}}</a></div>
                      <div><a href="#"><span class="icon-person"></span> Recruitable</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </section> <!-- .section -->
      @endforelse
    </div>

    {{$subcategories->links()}}

    @if($subcategories->count() > 0)
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
                  <span class="icon-eye text-primary">2344</span><br>
                  <span class="icon-comments text-primary">12</span>
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
                  <span class="icon-eye text-primary">34</span><br>
                  <span class="icon-comments text-primary">0</span>
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
    @endif
  </div>
</section>

@endsection