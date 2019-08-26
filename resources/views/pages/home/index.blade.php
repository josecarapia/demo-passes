@extends('pages.home.layout')

@section('title', 'Operation BOT')
@section('description', 'Operation BOT by Trigen Results')
@section('author', 'Operation BOT')



@section('content')

   {{-- @include('pages.home.banner')--}}


    @include('pages.home.description')
    @include('pages.home.video')

    @include('pages.home.about')    
    @include('pages.home.features')

    

    @include('pages.home.subscription')

    @include('pages.home.contact')




{{--
    @include('pages.home.banner')

    @include('pages.home.about')

    @include('pages.home.features')

    @include('pages.home.description')

    @include('pages.home.video')

    @include('pages.home.screenshots')

    @include('pages.home.reviews')

	@include('pages.home.prices')

    @include('pages.home.download')

    @include('pages.home.support')

    @include('pages.home.subscription')

    @include('pages.home.contact')

    @include('pages.home.footer')

--}}

@stop