@extends('theme-layout.layout')

@php
    $title = 'View Client Profile';
    $subTitle = 'View Client Profile';
@endphp

@section('content')

    <div class="row gy-4">
        <div class="col-lg-4">
            <div class="user-grid-card position-relative border radius-16 overflow-hidden bg-base h-100">
                <img src="https://fastly.picsum.photos/id/1075/360/120.jpg?hmac=JBnD1me7CFPblwN7mbAQajvJC8_IrvVPmIMw1zBfWyM" alt="" class="w-100 object-fit-cover">
                <div class="pb-24 ms-16 mb-24 me-16  mt--100">
                    <div class="text-center border border-top-0 border-start-0 border-end-0">
                        <img src="https://i.pravatar.cc/800?img=36" alt="" class="border br-white border-width-2-px w-200-px h-200-px rounded-circle object-fit-cover">
                        <div class="d-flex w-100 justify-between align-items-center">
                            <div>
                                <h6 class="mb-0 mt-16">Jacob Jones</h6>
                                <div class="d-flex d-flex align-items-center">
                                    <ul class="d-flex flex-wrap align-items-center my-1">
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
                                    <p class="ms-2" style="font-style: italic; font-weight: bold">2.1/5</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/top-rated.png') }}" alt="" style="height: 26px">
                                $100k+ spent
                            </div>
                        </div>
                    </div>
                    <div class="mt-24">
                        <h6 class="text-xl mb-16">Personal Info</h6>
                        <ul>
                            <li class="d-flex align-items-center gap-1 mb-12">
                                <span class="w-30 text-md fw-semibold text-white">Full Name</span>
                                <span class="w-70 text-secondary-light fw-medium"> Will Jonto</span>
                            </li>
                            <li class="d-flex align-items-center gap-1 mb-12">
                                <span class="w-30 text-md fw-semibold text-white"> Joined</span>
                                <span class="w-70 text-secondary-light fw-medium"> 11 Sep, 2023</span>
                            </li>
                            <li class="d-flex align-items-center gap-1 mb-12">
                                <span class="w-30 text-md fw-semibold text-white"> Languages</span>
                                <span class="w-70 text-secondary-light fw-medium"> English, Urdu</span>
                            </li>
                            <li class="d-flex align-items-center gap-1">
                                <span class="w-30 text-md fw-semibold text-white"> Bio</span>
                                <span class="w-70 text-secondary-light fw-medium"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                            </li>
                        </ul>
                        <hr class="my-20">
                        <div class="d-flex gap-6">
                            <a href="{{ route('client.chat') }}" class="bg-danger-600 radius-8 px-8 py-6 text-white d-flex align-items-center" style="height: fit-content">
                                <iconify-icon icon="ant-design:message-twotone" class="text-xl mr-1"></iconify-icon>
                                 Message
                            </a>
                            <button type="button" class="bg-danger-600 radius-8 px-8 py-6 text-white d-flex align-items-center" style="height: fit-content">
                                <iconify-icon icon="si:heart-fill" class="text-xl mr-1"></iconify-icon>
                                 Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-body p-24">
                    <ul class="nav border-gradient-tab nav-pills mb-20 d-inline-flex" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center px-24 active" id="pills-edit-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-edit-profile" type="button" role="tab" aria-controls="pills-edit-profile" aria-selected="true">
                                About
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center px-24" id="pills-notification-tab" data-bs-toggle="pill" data-bs-target="#pills-notification" type="button" role="tab" aria-controls="pills-notification" aria-selected="false" tabindex="-1">
                                Stats
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-edit-profile" role="tabpanel" aria-labelledby="pills-edit-profile-tab" tabindex="0">
                            <h6 class="mb-16">Profile Description</h6>

                            <div class="w-100 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 16 16"><path fill="#eb0000" fill-rule="evenodd" d="M12.5 6a4.47 4.47 0 0 1-.883 2.677L8 13.5L4.383 8.677A4.5 4.5 0 1 1 12.5 6M14 6c0 1.34-.439 2.576-1.18 3.574L8.937 14.75L8 16l-.938-1.25L3.18 9.574A6 6 0 1 1 14 6M8 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4" clip-rule="evenodd"/></svg>
                                <p style="margin-left: 5px; margin-bottom: 0"><span class="fw-bold">AUS</span> Melborun 3:09 PM</p>
                            </div>
                            <div class="w-100 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 1024 1024"><path fill="#eb0000" d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0m0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01m204.336-636.352L415.935 626.944l-135.28-135.28c-12.496-12.496-32.752-12.496-45.264 0c-12.496 12.496-12.496 32.752 0 45.248l158.384 158.4c12.496 12.48 32.752 12.48 45.264 0c1.44-1.44 2.673-3.009 3.793-4.64l318.784-320.753c12.48-12.496 12.48-32.752 0-45.263c-12.512-12.496-32.768-12.496-45.28 0"/></svg>
                                <p style="margin-left: 5px; margin-bottom: 0"> Payment method verified</p>
                            </div>
                            <div class="w-100 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 1024 1024"><path fill="#eb0000" d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0m0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01m204.336-636.352L415.935 626.944l-135.28-135.28c-12.496-12.496-32.752-12.496-45.264 0c-12.496 12.496-12.496 32.752 0 45.248l158.384 158.4c12.496 12.48 32.752 12.48 45.264 0c1.44-1.44 2.673-3.009 3.793-4.64l318.784-320.753c12.48-12.496 12.48-32.752 0-45.263c-12.512-12.496-32.768-12.496-45.28 0"/></svg>
                                <p style="margin-left: 5px; margin-bottom: 0"> Phone number verified</p>
                            </div>
                            <div class="w-100 d-flex align-items-center">
                                <div class="d-flex d-flex align-items-center">
                                    <ul class="d-flex flex-wrap align-items-center my-1">
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
                                    <p class="ms-2" style="font-style: italic;">1.9 out of 7 reviews</p>
                                </div>
                            </div>
                            <div class="w-100 d-flex align-items-center">
                               <p style="margin-bottom: 0"> 16 Jobs posted </p>
                            </div>
                            <div class="w-100 d-flex align-items-center">
                               <p style="margin-bottom: 0"> <span class="fw-bold">85% hire rate</span> 11 jobs open</p>
                            </div>


                            <hr class="my-20">
                            <h6 class="mb-16" style="font-weight: bolder">Client's recent history (4)</h6>

                            @foreach(range(1, 4) as $loop)
                                <div style="margin-bottom: 15px;">
                                    <div class="d-flex">
                                        <a href="#" class="text-danger-600 fs-5">Looking to hire someone for a promotion of product</a>
                                    </div>
                                    <div class="d-flex">

                                        <ul class="d-flex flex-wrap align-items-center my-1">
                                            <li class="text-warning-600 line-height-1">
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                            </li>
                                            <li class="text-warning-600 line-height-1">
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                            </li>
                                            <li class="text-neutral-400 line-height-1">
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                            </li>
                                            <li class="text-neutral-400 line-height-1">
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                            </li>
                                            <li class="text-neutral-400 line-height-1">
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                            </li>
                                        </ul>
                                        <p class="ms-2">2.00</p>
                                        <span class="mx-3">|</span>
                                        <span class="text-muted fs-6">May 14, 2024 - Jul 6, 2024</span>
                                    </div>
                                    <div class="w-100" style="margin-top: 13px">
                                        "Very helpful on the projects we had!"
                                    </div>
                                    <div class="d-flex justify-content-between w-75" style="margin-top: 10px;">
                                        <span>$1090.00</span>
                                        <span>$20/hr</span>
                                        <span>73 hours</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="tab-pane fade" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab" tabindex="0">
                            <div class="col-md-12">
                                <div class="card h-100 p-0">
                                    <div class="card-header border-bottom bg-base py-16 px-24">
                                        <h6 class="text-lg fw-semibold mb-0">Spending Month Wise</h6>
                                    </div>
                                    <div class="card-body p-24">
                                        <div id="defaultLineChart" class="apexcharts-tooltip-style-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
