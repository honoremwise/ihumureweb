@extends('layouts.dashboard')
@section('title', 'All Articles')
@section('content')
<br />
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/new-article-frm">New Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h2>All Articles</h2>
                <div class="list-group">
                    @foreach($articles as $article)
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $article->title }}</h5>
                                <small>{{ $article->created_at->format('d M Y') }}</small>
                            </div>
                            <p class="mb-1">{{ Str::limit($article->description, 150) }}</p>
                            <small>Category: {{ ucfirst($article->category) }}</small>
                           
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .list-group-item {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .list-group-item h5 {
        font-weight: bold;
    }
    .list-group-item p {
        color: #666;
    }
</style>
@endsection
