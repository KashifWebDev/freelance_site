@extends('theme-layout.layout')

@php
    $title = 'Client Listing';
    $subTitle = 'Client Listing';
@endphp

@section('content')
    <div class="card h-100 p-0 radius-12 overflow-hidden">
        <div class="card-header border-bottom-0 pb-0 pt-0 px-0">
            <ul class="nav border-gradient-tab nav-pills mb-0 border-top-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">
                        Search Clients
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-ui-design-tab" data-bs-toggle="pill" data-bs-target="#pills-ui-design" type="button" role="tab" aria-controls="pills-ui-design" aria-selected="false" tabindex="-1">
                        My Previous Clients
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-web-design-tab" data-bs-toggle="pill" data-bs-target="#pills-web-design" type="button" role="tab" aria-controls="pills-web-design" aria-selected="false" tabindex="-1">
                        Saved Clients
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
                                    <div class="py-16 px-24 d-flex justify-content-between">
                                        <div>
                                            <a href="{{ route( 'client.show-freelancer') }}"><h6 class="mb-4">{{ $user->name }}</h6></a>
                                            <span class="">Total Spendings <b>$100</b></span>
                                            <ul class="d-flex flex-wrap align-items-center">
                                                <li class="text-warning-600 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-warning-600 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center flex-column gap-3">
                                                <a  href="{{ route('freelancer.show-client') }}" class="rounded-pill bg-red-600 text-white radius- px-10 py-1">View</a>
                                                <a href="{{ route('freelancer.chat') }}" class="btn rounded-pill btn-outline-danger-600 radius-8 px-10 py-1">Message</a>
                                            </div>
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
                                    <div class="py-16 px-24 d-flex justify-content-between">
                                        <div>
                                            <a href="{{ route( 'client.show-freelancer', ['id' => $user->id] ) }}"><h6 class="mb-4">{{ $user->name }}</h6></a>
                                            <span class="">Total Spendings <b>$100</b></span>
                                            <ul class="d-flex flex-wrap align-items-center">
                                                <li class="text-warning-600 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-warning-600 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center flex-column gap-3">
                                                <button type="button" class="rounded-pill bg-red-600 text-white radius- px-10 py-1">View</button>
                                                <a href="{{ route('freelancer.chat') }}" class="btn rounded-pill btn-outline-danger-600 radius-8 px-10 py-1">Message</a>
                                            </div>
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
                                    <div class="py-16 px-24 d-flex justify-content-between">
                                        <div>
                                            <a href="{{ route( 'client.show-freelancer', ['id' => $user->id] ) }}"><h6 class="mb-4">{{ $user->name }}</h6></a>
                                            <span class="">Total Spendings <b>$100</b></span>
                                            <ul class="d-flex flex-wrap align-items-center">
                                                <li class="text-warning-600 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-warning-600 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                                <li class="text-neutral-400 text-xl line-height-1">
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center flex-column gap-3">
                                                <button type="button" class="rounded-pill bg-red-600 text-white radius- px-10 py-1">View</button>
                                                <a href="{{ route('freelancer.chat') }}" class="btn rounded-pill btn-outline-danger-600 radius-8 px-10 py-1">Message</a>
                                            </div>
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
