
<section class="ftco-section ftco-degree-bg pt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ftco-animate">
        @forelse($all_interviews as $interview)
        <div class="job-post-item bg-white p-4">
          <h4 class="mb-3">Question: {{$interview->question ?? ''}}</h2>
          <p>{!!$interview->answer ?? ''!!}</p>
          <p>
          </div>
          @empty
          <p>Nothing yet</p>
          @endforelse

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

          <div class="sidebar-box ftco-animate">
            <h3>Recent Blog</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> 