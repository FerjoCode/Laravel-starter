@extends('layouts.blogLayout')
@section('title', 'Home')

@section('featured')
    @include('partials.featured')
@endsection

@section('main-content')
    @include('partials.mainContent')
@endsection
