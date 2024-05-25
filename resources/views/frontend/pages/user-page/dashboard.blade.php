@extends('layouts.admin')
@section('title','Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template')




@section('content')

@include('frontend.pages.admin-page.viewData')
<div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
@include('frontend.pages.admin-page.analyst')
@include('frontend.pages.admin-page.customersByCountry')
</div>
<div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
@include('frontend.pages.admin-page.orders')
@include('frontend.pages.admin-page.chatBox')
@include('frontend.pages.admin-page.topProducts')
</div>

@stop