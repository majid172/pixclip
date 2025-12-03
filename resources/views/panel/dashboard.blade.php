@extends('panel.layouts.app')
@section('content')
    <div class="shadow-base-300/10 rounded-box bg-base-100 flex gap-4 p-6 shadow-md max-xl:flex-col">
        <div class="flex flex-1 gap-4 max-sm:flex-col">
            <div class="flex flex-1 flex-col gap-4">
                <div class="text-base-content flex items-center gap-2">
                    <div class="avatar avatar-placeholder">
                        <div class="bg-base-200 rounded-field size-9">
                            <span class="icon-[tabler--eye] size-5"></span>
                        </div>
                    </div>
                    <h5 class="text-lg font-medium">Today's Order</h5>
                </div>
                <div>
                    <div class="text-base-content text-xl font-semibold">{{ $today_orders->count() }}</div>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span class="text-success inline-flex items-center gap-1">
                            <span class="icon-[tabler--arrow-up] size-4"></span>
                            25.6%
                        </span>
                        <span class="text-base-content/50 font-medium">EPC: 308.20</span>
                    </div>
                </div>
            </div>
            <div class="divider sm:divider-horizontal"></div>
            <div class="flex flex-1 flex-col gap-4">
                <div class="text-base-content flex items-center gap-2">
                    <div class="avatar avatar-placeholder">
                        <div class="bg-base-200 rounded-field size-9">
                            <span class="icon-[tabler--mouse] size-6"></span>
                        </div>
                    </div>
                    <h5 class="text-lg font-medium">Order Progress</h5>
                </div>
                <div>
                    <div class="text-base-content text-xl font-semibold">{{ $progress->count() }}</div>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span class="text-error inline-flex items-center gap-1">
                            <span class="icon-[tabler--arrow-down] size-4"></span>
                            25.6%
                        </span>
                        <span class="text-base-content/50 font-medium">Related Value: 77,359</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider xl:divider-horizontal"></div>
        <div class="flex flex-1 gap-4 max-sm:flex-col">
            <div class="flex flex-1 flex-col gap-4">
                <div class="text-base-content flex items-center gap-2">
                    <div class="avatar avatar-placeholder">
                        <div class="bg-base-200 rounded-field size-9">
                            <span class="icon-[tabler--chart-bar] size-6"></span>
                        </div>
                    </div>
                    <h5 class="text-lg font-medium">Total Orders</h5>
                </div>
                <div>
                    <div class="text-base-content text-xl font-semibold">{{ $total_orders->count() }}</div>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span class="text-success inline-flex items-center gap-1">
                            <span class="icon-[tabler--arrow-up] size-4"></span>
                            25.6%
                        </span>
                        <span class="text-base-content/50 font-medium">Related Value: 77,359</span>
                    </div>
                </div>
            </div>
            <div class="divider sm:divider-horizontal"></div>
            <div class="flex flex-1 flex-col gap-4">
                <div class="text-base-content flex items-center gap-2">
                    <div class="avatar avatar-placeholder">
                        <div class="bg-base-200 rounded-field size-9">
                            <span class="icon-[tabler--currency-dollar] size-6"></span>
                        </div>
                    </div>
                    <h5 class="text-lg font-medium">Sales</h5>
                </div>
                <div>
                    <div class="text-base-content text-xl font-semibold">$8,759</div>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span class="text-success inline-flex items-center gap-1">
                            <span class="icon-[tabler--arrow-up] size-4"></span>
                            25.6%
                        </span>
                        <span class="text-base-content/50 font-medium">Related Value: 13.85</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid gap-6 xl:grid-cols-3">
        <div class="flex flex-col gap-6 md:flex-row xl:flex-col">
            <!-- Meeting Schedules -->
            <div class="card shadow-base-300/10 grow shadow-md">
                <div class="card-header flex items-center justify-between gap-2">
                    <h4 class="card-title text-xl">Latest Notices</h4>
                    <div class="dropdown relative inline-flex">
                        <button id="dropdown-meeting-schedules" type="button"
                            class="dropdown-toggle btn btn-text text-base-content/50 btn-circle btn-sm" aria-haspopup="menu"
                            aria-expanded="false" aria-label="Dropdown">
                            <span class="icon-[tabler--dots-vertical] size-5.5"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden" role="menu"
                            aria-orientation="vertical" aria-labelledby="dropdown-meeting-schedules">
                            <li><a class="dropdown-item" href="#">Last 28 Days</a></li>
                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="flex h-full flex-col justify-between gap-6">
                        @forelse ($notices as $item)
                            <li class="py-3">
                                <div class="flex items-start gap-3">
                                    <!-- Icon Container -->
                                    <div class="avatar placeholder">
                                        <div
                                            class="bg-blue-50 text-blue-600 rounded-full size-10 flex items-center justify-center">
                                            <!-- You can swap this icon based on the update type -->
                                            <span class="icon-[tabler--bell] size-5"></span>
                                        </div>
                                    </div>

                                    <div class="grow">
                                        <h6 class="text-base-content font-medium text-sm leading-snug">
                                            {{ $item->title }}
                                        </h6>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span
                                                class="text-xs font-medium bg-base-200 px-2 py-0.5 rounded text-base-content/70">
                                                {{ $item->created_at->format('d M, Y') }}
                                            </span>
                                            <span class="text-[10px] text-base-content/40">•</span>
                                            <span class="text-xs text-base-content/50">Update</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="rounded-field size-10">
                                            <img src="../assets/img/avatars/1.png" alt="avatar" />
                                        </div>
                                    </div>

                                    <div class="grow">
                                        <h6 class="text-base-content mb-px font-medium">Empty Notice</h6>
                                        <div class="text-base-content/50 flex items-center gap-1 text-sm">
                                            <span class="icon-[tabler--calendar] size-4.5"></span>
                                            <span>No data found</span>
                                        </div>
                                    </div>
                                    <span class="badge badge-primary badge-soft rounded-field font-medium">Empty</span>
                                </div>
                            </li>
                        @endforelse


                    </ul>
                </div>
            </div>

            <!-- Students By Countries -->
            <div class="card shadow-base-300/10 shadow-md">
                <div class="card-header flex items-start justify-between gap-2">
                    <div>
                        <h4 class="card-title text-lg">User by Countries</h4>

                    </div>
                    <div class="dropdown relative inline-flex">

                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden" role="menu"
                            aria-orientation="vertical" aria-labelledby="dropdown-students-by-countries">
                            <li><a class="dropdown-item" href="#">Last 28 Days</a></li>
                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="flex h-full flex-col justify-between gap-6">
                        <li>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="size-11 rounded-full">
                                        <img src="../assets/img/united-states.png" alt="united states flag" />
                                    </div>
                                </div>

                                <div class="grow">
                                    <div class="flex items-center gap-2.5">
                                        <h6 class="text-base-content font-semibold">164k</h6>
                                        <div class="text-error flex items-center">
                                            <span class="icon-[tabler--chevron-down] size-4"></span>
                                            <p class="text-sm">7.0%</p>
                                        </div>
                                    </div>
                                    <p class="text-base-content/50 text-sm">USA</p>
                                </div>

                                <div>
                                    <span class="text-base-content font-medium">452k</span>
                                    <span class="text-base-content/50 text-sm">/new</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="size-11 rounded-full">
                                        <img src="../assets/img/canada.png" alt="canada flag" />
                                    </div>
                                </div>

                                <div class="grow">
                                    <div class="flex items-center gap-2.5">
                                        <h6 class="text-base-content font-semibold">112k</h6>
                                        <div class="text-success flex items-center">
                                            <span class="icon-[tabler--chevron-up] size-4"></span>
                                            <p class="text-sm">6.3%</p>
                                        </div>
                                    </div>
                                    <p class="text-base-content/50 text-sm">Canada</p>
                                </div>

                                <div>
                                    <span class="text-base-content font-medium">227k</span>
                                    <span class="text-base-content/50 text-sm">/new</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="size-11 rounded-full">
                                        <img src="../assets/img/australia.png" alt="australia flag" />
                                    </div>
                                </div>

                                <div class="grow">
                                    <div class="flex items-center gap-2.5">
                                        <h6 class="text-base-content font-semibold">88k</h6>
                                        <div class="text-success flex items-center">
                                            <span class="icon-[tabler--chevron-up] size-4"></span>
                                            <p class="text-sm">5.0%</p>
                                        </div>
                                    </div>
                                    <p class="text-base-content/50 text-sm">Australia</p>
                                </div>

                                <div>
                                    <span class="text-base-content font-medium">186k</span>
                                    <span class="text-base-content/50 text-sm">/new</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sales Metrics -->
        <div class="card shadow-base-300/10 shadow-md xl:col-span-2">
            <div class="card-body gap-6">
                <div class="flex w-full items-start gap-6 max-md:flex-col">
                    <div class="gap-7.5 flex grow flex-col max-md:w-full">
                        <h2 class="card-title text-xl">Order Chart</h2>

                        <!-- Company Info -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="49" viewBox="0 0 48 49"
                                fill="none">
                                <g clip-path="url(#clip0_17222_216976)">
                                    <mask id="mask0_17222_216976" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="48" height="49">
                                        <path
                                            d="M36 0.5H12C5.37258 0.5 0 5.87258 0 12.5V36.5C0 43.1274 5.37258 48.5 12 48.5H36C42.6274 48.5 48 43.1274 48 36.5V12.5C48 5.87258 42.6274 0.5 36 0.5Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_17222_216976)">
                                        <path
                                            d="M36 0.5H12C5.37258 0.5 0 5.87258 0 12.5V36.5C0 43.1274 5.37258 48.5 12 48.5H36C42.6274 48.5 48 43.1274 48 36.5V12.5C48 5.87258 42.6274 0.5 36 0.5Z"
                                            fill="url(#paint0_linear_17222_216976)" />
                                        <path
                                            d="M23.0687 28.5625C23.4559 28.072 24.1937 28.0526 24.6058 28.5224L29.6155 34.2334C30.1819 34.8796 29.723 35.8924 28.8636 35.8925H19.346C18.5105 35.8925 18.0431 34.9282 18.5609 34.2724L23.0687 28.5625ZM23.0941 12.039C23.4922 11.5421 24.2474 11.5386 24.6497 12.0322L39.3939 30.124C39.9262 30.7773 39.4612 31.7558 38.6185 31.7558H34.3128C34.0114 31.7558 33.7263 31.6198 33.5364 31.3857L24.6644 20.4511C24.2577 19.9499 23.49 19.9595 23.096 20.4707L15.0247 30.9482C14.8355 31.1939 14.5428 31.3377 14.2327 31.3379H9.71319C8.87436 31.3378 8.40841 30.3675 8.93292 29.7129L23.0941 12.039Z"
                                            fill="url(#paint1_linear_17222_216976)" />
                                    </g>
                                    <path
                                        d="M36.0002 1.49945H12.0002C5.92511 1.49945 1.00024 6.42432 1.00024 12.4995V36.4995C1.00024 42.5746 5.92511 47.4995 12.0002 47.4995H36.0002C42.0754 47.4995 47.0002 42.5746 47.0002 36.4995V12.4995C47.0002 6.42432 42.0754 1.49945 36.0002 1.49945Z"
                                        stroke="url(#paint2_linear_17222_216976)" stroke-width="2" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_17222_216976" x1="42.75" y1="4.25"
                                        x2="6" y2="46.25" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="var(--color-primary)" />
                                        <stop offset="1"
                                            stop-color="color-mix(in oklab, var(--color-primary) 80%, #000)" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_17222_216976" x1="24.1659" y1="11.6641"
                                        x2="24.1659" y2="35.8925" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0.6" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_17222_216976" x1="24.0002" y1="0.49945"
                                        x2="24.0002" y2="48.4995" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" stop-opacity="0.28" />
                                        <stop offset="1" stop-color="white" stop-opacity="0.04" />
                                    </linearGradient>
                                    <clipPath id="clip0_17222_216976">
                                        <rect width="48" height="48" fill="white"
                                            transform="translate(0 0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div>
                                <h3 class="text-base-content text-xl font-medium">PixClipping Company</h3>
                                <p class="text-base-content/80">info@company.com</p>
                            </div>
                        </div>

                        <!-- Company Info -->
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="border-base-content/20 rounded-box flex gap-4 border px-4 py-3">
                                <div class="avatar avatar-placeholder">
                                    <div class="bg-warning/20 text-warning rounded-field size-11.5">
                                        <span class="icon-[tabler--trending-up] size-6.5"></span>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-base-content/50 text-sm font-medium">Sales trend</span>
                                    <span class="text-base-content text-lg font-semibold">$ 11,548</span>
                                </div>
                            </div>
                            <div class="border-base-content/20 rounded-box flex gap-4 border px-4 py-3">
                                <div class="avatar avatar-placeholder">
                                    <div class="text-success bg-success/20 rounded-field size-11.5">
                                        <span class="icon-[tabler--chart-bar] size-6.5"></span>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-base-content/50 text-sm font-medium">Total Profit</span>
                                    <span class="text-base-content text-lg font-semibold">$1735</span>
                                </div>
                            </div>
                            <div class="border-base-content/20 rounded-box flex gap-4 border px-4 py-3">
                                <div class="avatar avatar-placeholder">
                                    <div class="text-primary bg-primary/20 rounded-field size-11.5">
                                        <span class="icon-[tabler--discount-2] size-6.5"></span>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-base-content/50 text-sm font-medium">Discounts</span>
                                    <span class="text-base-content text-lg font-semibold">$ 14,987</span>
                                </div>
                            </div>
                            <div class="border-base-content/20 rounded-box flex gap-4 border px-4 py-3">
                                <div class="avatar avatar-placeholder">
                                    <div class="text-accent bg-accent/20 rounded-field size-11.5">
                                        <span class="icon-[tabler--wallet] size-6.5"></span>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-base-content/50 text-sm font-medium">Refunds</span>
                                    <span class="text-base-content text-lg font-semibold">$3248</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Revenue Goal Section -->
                    <div class="bg-base-200 item-center rounded-box flex justify-center max-md:w-full">
                        <div class="bg-base-200 rounded-box space-y-4 p-4">
                            <h3 class="text-base-content text-xl font-medium">Revenue Goal</h3>
                            <!-- Radial Progress -->
                            <div id="revenue-chart" class="w-full"></div>
                            <div class="flex items-center justify-between gap-6">
                                <span class="text-base-content/80 text-lg">Plan Completed</span>
                                <span class="text-base-content text-2xl font-medium">56%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Section -->
                <div class="border-base-content/20 rounded-box flex gap-8 border p-6 max-md:flex-col">
                    <!-- Sales Plan -->
                    <div class="space-y-4">
                        <h3 class="card-title">Sales Plan</h3>
                        <div class="text-base-content text-7xl font-medium">54%</div>
                        <p class="text-base-content/50 text-lg">Percentage profit from total sales</p>
                    </div>

                    <!-- Cohort Analysis -->
                    <div class="space-y-6">
                        <h3 class="text-base-content text-xl font-medium">Cohart analysis indicators</h3>
                        <p class="text-base-content/50">Cohort analysis thoroughly analyzes the behaviour and engagement
                            patterns of a group of users who joined a product or service at the same time, tracking their
                            actions and retention over a certain period for deeper insights.</p>

                        <!-- Statistics Icons -->
                        <div class="text-base-content flex gap-6 max-sm:flex-col sm:items-center">
                            <div class="flex items-center gap-2">
                                <span class="icon-[tabler--chart-infographic] size-6"></span>
                                <span class="text-lg font-medium">Open Statistics</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="icon-[tabler--percentage] size-6"></span>
                                <span class="text-lg font-medium">Percentage Change</span>
                            </div>
                        </div>

                        <div class="progress rounded-field h-7 *:rounded-none">
                            <div class="progress-bar progress-primary w-full"></div>
                            <div class="progress-bar bg-primary/50 w-3/4"></div>
                            <div class="progress-bar bg-primary/30 w-2/4"></div>
                            <div class="progress-bar bg-primary/10 w-1/4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Status Table -->
    <div class="rounded-box shadow-base-300/10 bg-base-100 w-full pb-2 shadow-md">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Order No.</th>
                        <th>Job Title</th>
                        <th>Amount</th>
                        <th>Quantity</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($total_orders as $item)
                        <tr class="text-center">
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="/admin/order/{{ $item->id }}" class="text-primary">#{{ $item->order_id }}</a>
                            </td>

                            <td>{{ Str::ucfirst($item->job_title) }}</td>
                            <td>${{ $item->price }} </td>
                            <td>{{ $item->image_quantity }} </td>
                            <td>
                                @if ($item->is_paid == 1)
                                    <span class="badge badge-soft badge-primary text-xs">@lang('Paid')</span>
                                @else
                                    <span class="badge badge-soft badge-error text-xs">@lang('Unpaid')</span>
                                @endif

                            </td>
                            <td>

                                @if ($item->status == 'In Review')
                                    <a href="" class=""><span
                                            class="badge badge-soft badge-success text-xs">In Review</span></a>
                                @elseif ($item->status == 'Pending')
                                    <a href="" class="badge badge-soft badge-primary text-xs">Pending</a>
                                @elseif ($item->status == 'Processing')
                                    <a href="" class="badge badge-soft badge-primary text-xs">Processing</a>
                                @elseif ($item->status == 'Received')
                                    <a href="" class="badge badge-soft badge-success text-xs">Received</a>
                                @elseif($item->status == 'Finalizing')
                                    <a href=""><span
                                            class="badge badge-soft badge-success text-xs">@lang('Finalized')</span></a>
                                @elseif($item->status == 'Completed')
                                    <a href="" class="badge badge-soft badge-success text-xs">@lang('Completed')</a>
                                @elseif($item->status == 'Invoiced')
                                    <a href="" class="badge badge-soft badge-info text-xs">@lang('Invoiced')</a>
                                @elseif ($item->status == 'Downloaded')
                                    <a href="" class="badge badge-soft badge-warning text-xs">Downloaded</a>
                                @elseif ($item->status == 'Canceled')
                                    <a href="" class="badge badge-soft badge-error text-xs">Canceled</a>
                                @endif


                            </td>

                            <td>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--pencil] size-5"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--trash] size-5"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--dots-vertical] size-5"></span></button>
                            </td>
                        </tr>





                        </tr>
                    @empty
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td><span class="badge badge-soft badge-success text-xs">Professional</span></td>
                            <td>March 1, 2024</td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--pencil] size-5"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--trash] size-5"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--dots-vertical] size-5"></span></button>
                            </td>
                        </tr>
                    @endforelse



                </tbody>
            </table>
        </div>
    </div>
@endsection
