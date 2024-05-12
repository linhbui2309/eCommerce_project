@extends('layouts.master')

@section('title','Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template')



@section('breadcrumb')
    @include('frontend.partial.slider')
    @include('frontend.partial.introduction')
    @include('frontend.partial.product')
    @include('frontend.partial.review')
    @include('frontend.partial.blog')
@stop

@section('content')
            @yield('breadcrumb')
     
@stop


