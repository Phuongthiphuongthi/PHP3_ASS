<div class="container ">
    <nav class="navbar navbar-expand-lg navbar-white">
        <a class="navbar-brand order-1" href="index.html">
            <img class="img-fluid" width="100px" src="{{ asset('reader/images/logo.png') }}"
                alt="Reader | Hugo Personal Blog Template">
        </a>
        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('home') }}" role="button">
                        Trang chủ
                    </a>
                </li>




                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            {{-- Danh mục --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Danh mục
                                </a>
                                <div class="dropdown-menu">
                                    @foreach ($dm as $dm)
                                        <a class="dropdown-item" href="{{ route('tintrongloai', $dm->id) }}">{{ $dm->name }}</a>
                                    @endforeach
                                </div>
                            </li>

                            @guest
                                <!-- Người dùng chưa đăng nhập -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                                </li>
                            @else
                                <!-- Người dùng đã đăng nhập -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Xin chào, {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Đăng xuất</button>
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>





                {{-- Danh mục
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Danh mục <i class="ti-angle-down ml-1"></i>
                    </a>
                    <div class="dropdown-menu">
                        @foreach ($dm as $dm)
                            <a class="dropdown-item" href="{{ route('tintrongloai', $dm->id) }}">{{ $dm->name }}</a>
                        @endforeach

                    </div>

                </li>




                @guest
                <!-- Người dùng chưa đăng nhập -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Đăng nhập</a>
                </li>
            @else
                <!-- Người dùng đã đăng nhập -->
                <li class="nav-item">Xin chào, {{ Auth::user()->name }}</li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Đăng xuất</button>
                    </form>
                </li>
            @endguest

 --}}


                {{-- <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">

              <a class="dropdown-item" href="author.html">Author</a>

              <a class="dropdown-item" href="author-single.html">Author Single</a>

              <a class="dropdown-item" href="advertise.html">Advertise</a>

              <a class="dropdown-item" href="post-details.html">Post Details</a>

              <a class="dropdown-item" href="post-elements.html">Post Elements</a>

              <a class="dropdown-item" href="tags.html">Tags</a>

              <a class="dropdown-item" href="search-result.html">Search Result</a>

              <a class="dropdown-item" href="search-not-found.html">Search Not Found</a>

              <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>

              <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>

              <a class="dropdown-item" href="404.html">404 Page</a>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li> --}}
            </ul>
        </div>

        <div class="order-2 order-lg-3 d-flex align-items-center">
            {{-- <select class="m-2 border-0 bg-transparent" id="select-language">
                <option id="en" value="" selected>En</option>
                <option id="fr" value="">Fr</option>
            </select> --}}

            <!-- search -->
            <form class="search-bar" method="post" action="{{ route('timkiem') }}">
                @csrf
                <input id="search-query" name="keySearch" type="search" placeholder="Type &amp; Hit Enter...">

                <button class="navbar-toggler border-0 order-1" type="submit" data-toggle="collapse"
                    data-target="#navigation" name="btn-search">
                    <i class="ti-menu"></i>
                </button>
            </form>


        </div>

    </nav>
</div>
