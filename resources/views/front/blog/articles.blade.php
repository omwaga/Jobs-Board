@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
  <div class="container">
      @include('front.blog.articles-view')
  </div>
</section>
      
@endsection