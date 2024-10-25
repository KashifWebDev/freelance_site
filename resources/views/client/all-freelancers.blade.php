@extends('theme-layout.layout')

@php
    $title = 'Freelancers Listing';
    $subTitle = 'Freelancers Listing';
@endphp

@section('content')
    <div class="card h-100 p-0 radius-12 overflow-hidden">
        <div class="card-header border-bottom-0 pb-0 pt-0 px-0">
            <ul class="nav border-gradient-tab nav-pills mb-0 border-top-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">
                        Rising Talents
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-ui-design-tab" data-bs-toggle="pill" data-bs-target="#pills-ui-design" type="button" role="tab" aria-controls="pills-ui-design" aria-selected="false" tabindex="-1">
                        Top Rated
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-web-design-tab" data-bs-toggle="pill" data-bs-target="#pills-web-design" type="button" role="tab" aria-controls="pills-web-design" aria-selected="false" tabindex="-1">
                        Top Rated Plus
                    </button>
                </li>
            </ul>
        </div>
        <div class="card-body p-24">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row gy-4">
                        @foreach($users as $user)
                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                <div class="hover-scale-img border radius-16 overflow-hidden">
                                    <div class="max-h-266-px overflow-hidden bg-body-secondary">
                                        <img src="{{ $user->avatar }}" alt="" class="hover-scale-img__img w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="py-16 px-24">
                                        <h6 class="mb-4">{{ $user->name }}</h6>
                                        <p class="mb-0 text-sm text-secondary-light">{{ $user->email }}</p>
                                        <div class="d-flex align-items-center justify-content-between mt-2">
                                            <button type="button" class="btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-20 py-11">Hire Now</button>
                                            <button type="button" class="btn rounded-pill btn-success-600 radius-8 px-20 py-11">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-ui-design" role="tabpanel" aria-labelledby="pills-ui-design-tab" tabindex="0">
                    <div class="row gy-4">
                        @foreach($users1 as $user)
                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                <div class="hover-scale-img border radius-16 overflow-hidden">
                                    <div class="max-h-266-px overflow-hidden bg-body-secondary">
                                        <img src="{{ $user->avatar }}" alt="" class="hover-scale-img__img w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="py-16 px-24">
                                        <h6 class="mb-4">{{ $user->name }}</h6>
                                        <p class="mb-0 text-sm text-secondary-light">{{ $user->email }}</p>
                                        <div class="d-flex align-items-center justify-content-between mt-2">
                                            <button type="button" class="btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-20 py-11">Hire Now</button>
                                            <button type="button" class="btn rounded-pill btn-success-600 radius-8 px-20 py-11">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-web-design" role="tabpanel" aria-labelledby="pills-web-design-tab" tabindex="0">
                    <div class="row gy-4">
                        @foreach($users2 as $user)
                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                <div class="hover-scale-img border radius-16 overflow-hidden">
                                    <div class="max-h-266-px overflow-hidden bg-body-secondary">
                                        <img src="{{ $user->avatar }}" alt="" class="hover-scale-img__img w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="py-16 px-24">
                                        <h6 class="mb-4">{{ $user->name }}</h6>
                                        <p class="mb-0 text-sm text-secondary-light">{{ $user->email }}</p>
                                        <div class="d-flex align-items-center justify-content-between mt-2">
                                            <button type="button" class="btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-20 py-11">Hire Now</button>
                                            <button type="button" class="btn rounded-pill btn-success-600 radius-8 px-20 py-11">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
