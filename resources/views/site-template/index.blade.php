@extends('layouts.main')

@section('header')
	@include('site-template.header')
@endsection

@section('menu')
	@include('site-template.menu')
@endsection

@section('slyder')
	@include('site-template.index.slyder')
@endsection

@section('footer')
	@include('site-template.footer')
@endsection