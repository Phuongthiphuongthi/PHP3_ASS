@extends('layout.master')
@section('title', 'Trang chủ')

@section('content')
    <!-- start of banner -->
    @include('layout.client.home.start-banner')
    <!-- end of banner -->


    <!-- News Board -->
    @include('layout.client.home.news-board')
    <!-- end of News Board -->


    {{-- Recent Post --}}
    {{-- @include('layout.client.home.recent-post') --}}
    <!-- end of Recent Post -->
@endsection
