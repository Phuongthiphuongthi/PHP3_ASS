<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5">


                {{-- Editors Pick --}}
                <h2 class="h5 section-title">Phong cách</h2>
                <article class="card">
                    <div class="post-slider slider-sm">
                        <img src="reader/images/{{ $dataPC->img }}" class="card-img-top" alt="post-thumb">
                    </div>

                    <div class="card-body">
                        <h3 class="h4 mb-3"><a class="post-title" href="{{route('chitiet',$dataPC->id)}}">{{ $dataPC->title }}</a></h3>
                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="reader/images/john-doe.jpg">
                                    <span>Charls Xaviar</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>2 Min To Read
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{ $dataPC->created_at }}
                            </li>
                            {{-- <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Color</a></li>
                    <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                    <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                  </ul>
                </li> --}}
                        </ul>
                            @php
                                $content = $dataPC->content;
                                $maxLength = 255;
                                if (strlen($content) > $maxLength) {
                                    $content = substr($content, 0, $maxLength) . '...';
                                }
                            @endphp
                            {!! $content !!}
                        <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 mb-5">
                <h2 class="h5 section-title">Trending Post</h2>

@foreach ($dataT as $dataT)
<article class="card mb-4">
    <div class="card-body d-flex">
        <img class="card-img-sm" src="reader/images/{{$dataT->img}}">
        <div class="ml-3">
            <h4><a href="{{route('chitiet',$dataT->id)}}" class="post-title">{{ $dataT->title }}</a></h4>
            <ul class="card-meta list-inline mb-0">
                <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>14 jan, 2020
                </li>
                <li class="list-inline-item mb-0">
                    <i class="ti-timer"></i>2 Min To Read
                </li>
            </ul>
        </div>
    </div>
</article>

@endforeach
                {{-- <article class="card mb-4">
            <div class="card-body d-flex">
              <img class="card-img-sm" src="images/post/post-2.jpg">
              <div class="ml-3">
                <h4><a href="post-details.html" class="post-title">The Design Files - Homes Minimalist</a></h4>
                <ul class="card-meta list-inline mb-0">
                  <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>14 jan, 2020
                  </li>
                  <li class="list-inline-item mb-0">
                    <i class="ti-timer"></i>2 Min To Read
                  </li>
                </ul>
              </div>
            </div>
          </article>

          <article class="card mb-4">
            <div class="card-body d-flex">
              <img class="card-img-sm" src="images/post/post-4.jpg">
              <div class="ml-3">
                <h4><a href="post-details.html" class="post-title">The Skinny Confidential</a></h4>
                <ul class="card-meta list-inline mb-0">
                  <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>14 jan, 2020
                  </li>
                  <li class="list-inline-item mb-0">
                    <i class="ti-timer"></i>2 Min To Read
                  </li>
                </ul>
              </div>
            </div>
          </article> --}}
            </div>



            {{-- Popular Post --}}
            <div class="col-lg-4 mb-5">
                <h2 class="h5 section-title">Tin mới</h2>

                <article class="card">
                    <div class="post-slider slider-sm">
                        <img src="reader/images/{{$dataN->img}}" class="card-img-top" alt="post-thumb">
                    </div>
                    <div class="card-body">
                        <h3 class="h4 mb-3"><a class="post-title" href="{{route('chitiet',$dataN->id)}}">{{ $dataN->title }}</a></h3>
                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="images/kate-stone.jpg" alt="Kate Stone">
                                    <span>Kate Stone</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>2 Min To Read
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{$dataN->created_at}}
                            </li>
                            {{-- <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">City</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Food</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Taste</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                        @php
                        $content = $dataPC->content;
                        $maxLength = 255;
                        if (strlen($content) > $maxLength) {
                            $content = substr($content, 0, $maxLength) . '...';
                        }
                    @endphp
                    {!! $content !!}
                <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                    </div>
                </article>
            </div>
            <div class="col-12">
                <div class="border-bottom border-default"></div>
            </div>
        </div>
    </div>
</section>
