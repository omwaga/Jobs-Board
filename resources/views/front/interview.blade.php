@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
  <div class="container">
      @include('front.interviews-view')
  </div>
</section>
      
@endsection