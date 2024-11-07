@extends('layouts.app')

@section('content')
<h1>Welcome to EduFun</h1>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
@endforeach
@endsection
