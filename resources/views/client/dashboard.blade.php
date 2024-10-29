@extends('theme-layout.layout')

@php
    $title = 'Dashboard';
    $subTitle = 'Dashboard';
@endphp

@section('content')

    <h4>Welcome {{ auth()->user()->name ?? 'user' }}</h4>


@endsection
