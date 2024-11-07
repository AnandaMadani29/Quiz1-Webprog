@extends('layouts.app')

@section('content')
<h1>Categories</h1>
@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>
@endforeach
@endsection
