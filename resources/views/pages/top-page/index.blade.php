@extends('layouts.master')

@section('title','Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template')



@section('breadcrumb')
    @include('partial.slider')
    @include('partial.introduction')
    @include('partial.product')
    @include('partial.review')
    @include('partial.blog')
@stop

@section('content')
            @yield('breadcrumb')
     
@stop


