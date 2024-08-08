@extends('layout.master')
@section('title','Tìm kiếm')


@section('content')
<section class="section-sm mt-5">
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-lg-8  mb-5 mb-lg-0">
    <h2 class="h5 section-title">Tìm kiếm </h2>

@foreach ($dataSearch as $data)
{{-- @php
    dd($dataTTL->tilte)
@endphp --}}
<article class="card mb-4  ">
    <div class="post-slider">
        <img src="{{asset('reader/images')."/".$data->img }}" class="card-img-top " alt="post-thumb">
        {{-- <img src="images/post/post-1.jpg" class="card-img-top" alt="post-thumb"> --}}
    </div>
    <div class="card-body">
        <h3 class="mb-3"><a class="post-title" href="{{route('chitiet',$data->id)}}">{{$data->title}}</a></h3>
        <ul class="card-meta list-inline">
        <li class="list-inline-item">
            <a href="author-single.html" class="card-meta-author">
            <img src="images/john-doe.jpg" alt="John Doe">
            <span>John Doe</span>
            </a>
        </li>
        <li class="list-inline-item">
            <i class="ti-timer"></i>3 Min To Read
        </li>
        <li class="list-inline-item">
            <i class="ti-calendar"></i>15 jan, 2020
        </li>
        <li class="list-inline-item">
            <ul class="card-meta-tag list-inline">
            <li class="list-inline-item"><a href="tags.html">Demo</a></li>
            <li class="list-inline-item"><a href="tags.html">Elements</a></li>
            </ul>
        </li>
        </ul>
        @php
        $content = $data->content;
        $maxLength = 255;
        if (strlen($content) > $maxLength) {
            $content = substr($content, 0, $maxLength) . '...';
        }
    @endphp
    {!! $content !!}
<a href="post-elements.html" class="btn btn-outline-primary">Read More</a>
    </div>
    </article>

@endforeach
    <ul class="pagination justify-content-center">
      <li class="page-item page-item active ">
          <a href="#!" class="page-link">1</a>
      </li>
      <li class="page-item">
          <a href="#!" class="page-link">2</a>
      </li>
      <li class="page-item">
          <a href="#!" class="page-link">&raquo;</a>
      </li>
    </ul>
  </div>
      </div>
    </div>
  </section>

@endsection


