@extends('theme-layout.layout')

@php
    $title = 'Search your dream freelancers & clients';
    $subTitle = '';
@endphp

@section('content')

    @include('freelancer.all-clients')

@endsection
