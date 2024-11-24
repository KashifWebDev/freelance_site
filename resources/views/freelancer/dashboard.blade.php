@extends('theme-layout.layout')

@php
    $title = 'Dashboard';
    $subTitle = 'Dashboard';
@endphp

@section('content')

    <div class="row gy-4">  <h4>Welcome {{ auth()->user()->name ?? 'user' }}</h4>
        <div class="mt-24">
            <div class="row gy-4">

                <div class="col-xxl-3 col-sm-6">
                    <div class="card p-3 shadow-none radius-8 border h-100 bg-gradient-end-1">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                <div class="d-flex align-items-center gap-2">
                                    <span class="mb-0 w-48-px h-48-px bg-primary-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                        <iconify-icon icon="mingcute:user-follow-fill" class="icon"></iconify-icon>
                                    </span>
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-sm">New Users</span>
                                        <h6 class="fw-semibold">15,000</h6>
                                    </div>
                                </div>

                                <div id="new-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                            </div>
                            <p class="text-sm mb-0">Increase by <span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+200</span> this week</p>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <div class="card p-3 shadow-none radius-8 border h-100 bg-gradient-end-2">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                <div class="d-flex align-items-center gap-2">
                                    <span class="mb-0 w-48-px h-48-px bg-success-main flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6">
                                        <iconify-icon icon="mingcute:user-follow-fill" class="icon"></iconify-icon>
                                    </span>
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-sm">Active Users</span>
                                        <h6 class="fw-semibold">8,000</h6>
                                    </div>
                                </div>

                                <div id="active-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                            </div>
                            <p class="text-sm mb-0">Increase by <span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+200</span> this week</p>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <div class="card p-3 shadow-none radius-8 border h-100 bg-gradient-end-3">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                <div class="d-flex align-items-center gap-2">
                                    <span class="mb-0 w-48-px h-48-px bg-yellow text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle h6">
                                        <iconify-icon icon="iconamoon:discount-fill" class="icon"></iconify-icon>
                                    </span>
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-sm">Total Sales</span>
                                        <h6 class="fw-semibold">$5,00,000</h6>
                                    </div>
                                </div>

                                <div id="total-sales-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                            </div>
                            <p class="text-sm mb-0">Increase by <span class="bg-danger-focus px-1 rounded-2 fw-medium text-danger-main text-sm">-$10k</span> this week</p>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <div class="card p-3 shadow-none radius-8 border h-100 bg-gradient-end-3">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                <div class="d-flex align-items-center gap-2">
                                    <span class="mb-0 w-48-px h-48-px bg-purple text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle h6">
                                        <iconify-icon icon="mdi:message-text" class="icon"></iconify-icon>
                                    </span>
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-sm">Conversion</span>
                                        <h6 class="fw-semibold">25%</h6>
                                    </div>
                                </div>

                                <div id="conversion-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                            </div>
                            <p class="text-sm mb-0">Increase by <span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+5%</span> this week</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xxl-9 col-lg-6">
            <div class="card h-100">
                <div class="card-body p-24">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                        <h6 class="mb-2 fw-bold text-lg mb-0">Recent Orders</h6>
                        <a href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Users</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Items</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Amount</th>
                                <th scope="col" class="text-center">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://i.pravatar.cc/40?u=1" alt="" class="flex-shrink-0 me-12 radius-8">
                                        <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Dianne Russell</span>
                                    </div>
                                </td>
                                <td>#6352148</td>
                                <td>iPhone 14 max</td>
                                <td>2</td>
                                <td>$5,000.00</td>
                                <td class="text-center"> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://i.pravatar.cc/40?u=2" alt="" class="flex-shrink-0 me-12 radius-8">
                                        <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Wade Warren</span>
                                    </div>
                                </td>
                                <td>#6352148</td>
                                <td>Laptop HPH </td>
                                <td>3</td>
                                <td>$1,000.00</td>
                                <td class="text-center"> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://i.pravatar.cc/40?u=3" alt="" class="flex-shrink-0 me-12 radius-8">
                                        <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Albert Flores</span>
                                    </div>
                                </td>
                                <td>#6352148</td>
                                <td>Smart Watch </td>
                                <td>7</td>
                                <td>$1,000.00</td>
                                <td class="text-center"> <span class="bg-info-focus text-info-main px-24 py-4 rounded-pill fw-medium text-sm">Shipped</span> </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://i.pravatar.cc/40?u=4" alt="" class="flex-shrink-0 me-12 radius-8">
                                        <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Bessie Cooper</span>
                                    </div>
                                </td>
                                <td>#6352148</td>
                                <td>Nike Air Shoe</td>
                                <td>1</td>
                                <td>$3,000.00</td>
                                <td class="text-center"> <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Canceled</span> </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://i.pravatar.cc/40?u=5" alt="" class="flex-shrink-0 me-12 radius-8">
                                        <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Arlene McCoy</span>
                                    </div>
                                </td>
                                <td>#6352148</td>
                                <td>New Headphone </td>
                                <td>5</td>
                                <td>$4,000.00</td>
                                <td class="text-center"> <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Canceled</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3">
            <div class="card h-100">

                <div class="card-body">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                        <h6 class="mb-2 fw-bold text-lg">Transactions</h6>
                        <div class="">
                            <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                <option>This Month</option>
                                <option>Last Month</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-32">
                        <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment1.png') }}" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0 fw-normal">Paytm</h6>
                                    <span class="text-sm text-secondary-light fw-normal">Starbucks</span>
                                </div>
                            </div>
                            <span class="text-danger text-md fw-medium">-$20</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment2.png') }}" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0 fw-normal">PayPal</h6>
                                    <span class="text-sm text-secondary-light fw-normal">Client Payment</span>
                                </div>
                            </div>
                            <span class="text-success-main text-md fw-medium">+$800</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment3.png') }}" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0 fw-normal">Stripe</h6>
                                    <span class="text-sm text-secondary-light fw-normal">Ordered iPhone 14</span>
                                </div>
                            </div>
                            <span class="text-danger-main text-md fw-medium">-$300</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment4.png') }}" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0 fw-normal">Razorpay</h6>
                                    <span class="text-sm text-secondary-light fw-normal">Refund</span>
                                </div>
                            </div>
                            <span class="text-success-main text-md fw-medium">+$500</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment1.png') }}" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0 fw-normal">Paytm</h6>
                                    <span class="text-sm text-secondary-light fw-normal">Starbucks</span>
                                </div>
                            </div>
                            <span class="text-danger-main text-md fw-medium">-$1500</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment3.png') }}" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0 fw-normal">Stripe</h6>
                                    <span class="text-sm text-secondary-light fw-normal">Ordered iPhone 14</span>
                                </div>
                            </div>
                            <span class="text-success-main text-md fw-medium">+$800</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
