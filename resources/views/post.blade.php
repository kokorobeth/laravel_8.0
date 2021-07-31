
@extends('layouts.main')

@section('container')

    <h1 class="mb-5">{{ $post["title"] }}</h2>
    <p>{{ $post["body"] }}</p>

    <a href="/posts">Back to Posts</a>
@endsection