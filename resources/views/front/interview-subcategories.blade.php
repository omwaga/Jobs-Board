@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      @forelse($category->subcategory as $category)
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="{{route('front.interviewCategory', $category->slug)}}" class="block-20" style="background-image: url('images/image_1.jpg');">
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
</div>
</section>

@endsection