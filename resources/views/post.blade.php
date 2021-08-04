
@extends('layouts.main')

@section('container')

    <h1 class="mb-5">{{ $post->title }}</h2>

    <p>By. Aziz Kurniawan in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}

    <a href="/posts">Back to Posts</a>
@endsection