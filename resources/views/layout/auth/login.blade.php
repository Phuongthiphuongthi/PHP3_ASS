@extends('layout.master')
@section('title', 'Đăng Nhập')


@section('content')


    <section class="section">
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content pt-4 w-50 mx-auto">
                    <!-- <div class="login-logo">
                            <a href="index.html">
                                <img class="align-content" src="images/logo.png" alt="">
                            </a>
                        </div> -->
                    <div class="login-form">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Nhập Email">
                            </div>


                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="checkbox">
                                {{-- <label>
                                    <input type="checkbox"> Ghi nhớ mật khẩu
                                </label> --}}
                                <label class="pull-right ">
                                    <a href="{{route('forgot')}}">Quên mật khẩu?</a>
                                </label>

                            </div>
                            <div class="text-center pb-3">
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30 ">Đăng nhập</button>

                            </div>

                            <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div> -->


                            <div class="register-link m-t-15 text-center">
                                <p>Bạn chưa có tài khoản ? <a href="{{ route('logup') }}"> Đăng kí </a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
