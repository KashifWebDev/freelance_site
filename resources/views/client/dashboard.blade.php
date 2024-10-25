@extends('theme-layout.layout')

@php
    $title = 'Dashboard';
    $subTitle = 'Dashboard';
    $script = '<script>
    $(".remove-item-btn").on("click", function() {
        $(this).closest("tr").addClass("d-none")
    });
    </script>';
@endphp

@section('content')

    <h4>Welcome {{ auth()->user()->name ?? 'user' }}</h4>


@endsection
