@extends('theme-layout.layout')

@php
    $title = 'My Gigs';
    $subTitle = 'My Gigs';
@endphp

@section('content')

    <div class="row gy-4">
        <div class="col-12 d-flex justify-content-between">
            <a href="{{ route('freelancer.gigsAdd') }}" class="btn rounded-pill btn-outline-danger-600 radius-8 px-20 py-11">Add New</a>
        </div>

        <div class="col-xxl-3 col-sm-6">
            <div class="card h-100 radius-12 border border-light">
                <img src="http://localhost:8002/assets/images/card-component/card-img1.png" class="card-img-top" alt="">
                <div class="card-body p-16">
                    <h5 class="card-title text-lg text-primary-light
                         mb-6">This is Card title</h5>
                    <p class="card-text text-neutral-600">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                    <button type="button" class="btn rounded-pill text-primary-light radius-8 px-20 py-11">View</button>
                    <button type="button" class="btn rounded-pill text-danger-600 radius-8 px-20 py-11">Edit</button>
                </div>
            </div>
        </div>

    </div>

@endsection
