@extends('layouts.web')
@section('title', 'Welcome')
@section('content')
<!-- Top News Start-->
<div class="top-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tn-left">
                <div class="row tn-slider">
                    @foreach ($articles as $article)
                    @if($article->category=='sport')
                        <div class="col-md-12">
                            <div class="tn-img">
                                <img src="{{ asset($article->featured_image) }}"  alt="{{ $article->title }}" />
                                <div class="tn-title">
                                  <a href="{{ route('show', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>


        </div>
    </div>
</div>
<div class="tab-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#featured">Siporo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#popular">Politike</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#latest">Ubekerarugendo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#music">Musika</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="featured" class="container tab-pane active">

                        @foreach ($articles as $article)
                        @if($article->category=='politics')
                        <div class="tn-news">
                            <div class="tn-img">
                            <img src="{{ asset($article->featured_image) }}"  alt="{{ $article->title }}" />
                            </div>
                            <div class="tn-title">
                            <a href="{{ route('show', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                            </div>
                            </div>
                            @endif
                            @endforeach
                    </div>
                    <div id="popular" class="container tab-pane fade">

                    @foreach ($articles as $article)
                        @if($article->category=='politics')
                        <div class="tn-news">
                            <div class="tn-img">
                            <img src="{{ asset($article->featured_image) }}"  alt="{{ $article->title }}" />
                            </div>
                            <div class="tn-title">
                            <a href="{{ route('show', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                            </div>
                            </div>
                            @endif
                            @endforeach
                    </div>
                    <div id="latest" class="container tab-pane fade">
                    @foreach ($articles as $article)
                        @if($article->category=='tourism')
                        <div class="tn-news">
                            <div class="tn-img">
                            <img src="{{ asset($article->featured_image) }}"  alt="{{ $article->title }}" />
                            </div>
                            <div class="tn-title">
                            <a href="{{ route('show', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                            </div>
                            </div>
                            @endif
                            @endforeach
                    </div>
                    <div id="music" class="container tab-pane fade">
                    @foreach ($articles as $article)
                        @if($article->category=='tourism')
                        <div class="tn-news">
                            <div class="tn-img">
                            <img src="{{ asset($article->featured_image) }}"  alt="{{ $article->title }}" />
                            </div>
                            <div class="tn-title">
                            <a href="{{ route('show', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                            </div>
                            </div>
                            @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tab News Start-->

<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="{{ asset('assets/img/news-350x223-1.jpg') }}" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="{{ asset('assets/img/news-350x223-2.jpg') }}" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">

                                    <img src="assets/img/news-350x223-3.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="assets/img/news-350x223-4.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="assets/img/news-350x223-5.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="assets/img/news-350x223-1.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="assets/img/news-350x223-2.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="assets/img/news-350x223-3.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="assets/img/news-350x223-4.jpg" />
                                    <div class="mn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

            <!-- <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                                <li><a href="">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="">Pellentesque tincidunt enim libero</a></li>
                                <li><a href="">Morbi id finibus diam vel pretium enim</a></li>
                                <li><a href="">Duis semper sapien in eros euismod sodales</a></li>
                                <li><a href="">Vestibulum cursus lorem nibh</a></li>
                                <li><a href="">Morbi ullamcorper vulputate metus non eleifend</a></li>
                                <li><a href="">Etiam vitae elit felis sit amet</a></li>
                                <li><a href="">Nullam congue massa vitae quam</a></li>
                                <li><a href="">Proin sed ante rutrum</a></li>
                                <li><a href="">Curabitur vel lectus</a></li>
                            </ul>
                        </div>
                    </div> -->
        </div>
    </div>
</div>
<!-- Main News End-->
@endsection
