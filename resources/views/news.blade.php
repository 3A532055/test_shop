

@extends('layouts.master')

@section('title', '生鮮比價系統')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home0-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>消息</h1>
                        <hr class="small">
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <div class="post-preview">
                    <a href="{{route('posts.news')}}">
                        <h2 class="post-title">
                            國定假日
                        </h2>
                        <h3 class="post-subtitle">
                            2019/1/1 元旦，休息一天
                        </h3>
                    </a>
                    <p class="post-meta"><a href="#"></a></p>
                </div>

                <hr>

                <div class="post-preview">
                    <a href="{{route('posts.news')}}">
                        <h2 class="post-title">
                            全聯福利中心公告
                        </h2>
                        <h3 class="post-subtitle">
                            因颱風接近，11/12 ~ 11/18 休息一周
                        </h3>
                    </a>
                    <p class="post-meta"><a href="#"></a></p>
                </div>

                <hr>

                <!-- Pager -->
                <!--ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul-->
            </div>
        </div>
    </div>

@endsection
