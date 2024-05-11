@extends('layouts.admin')
@section('title','Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template')




@section('content')
@include('admin.viewData')
<div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
@include('admin.analyst')
@include('admin.customersByCountry')
</div>
<div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
@include('admin.orders')
@include('admin.chatBox')
@include('admin.topProducts')
</div>
@stop

<!-- @section('viewData')
@include('admin.viewData')
@stop

@section('analyst')
<div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
@include('admin.analyst')
@include('admin.customersByCountry')
</div>
@stop


@section('breadcrumb')
<div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
@include('admin.orders')
@include('admin.chatBox')
@include('admin.topProducts')
</div>
@stop -->


