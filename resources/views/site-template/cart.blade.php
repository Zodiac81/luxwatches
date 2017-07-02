@extends('layouts.main')

@section('header')
	@include('site-template.header')
@endsection

@section('menu')
	@include('site-template.menu')
@endsection

@section('breadcrumbs')
	@include('site-template.breadcrumbs')
@endsection 

@section('content')
	@include('site-template.cart.cart-content')
@endsection

@section('footer')
	@include('site-template.footer')
@endsection