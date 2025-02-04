
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
          <h3>Recent Articles</h3>
          @foreach($articles as $article)
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
</section> 