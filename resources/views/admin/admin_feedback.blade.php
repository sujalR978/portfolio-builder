@extends('layouts.master')

@section('title', 'Review Records Moderation')

@section('content')

<div class="pb-mod-wrapper min-vh-100 pb-admin-bg-soft py-4 py-xl-5">
    <div class="container-xl">

        <!-- HEADER -->
        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">

            <div>
                <h2 class="fw-bold text-dark fs-3 mb-1 pb-ts-heading">
                    Review Records Moderation
                </h2>

                <p class="text-muted small mb-0">
                    Review, approve, or reject user submissions before they are published.
                </p>
            </div>

            <!-- SEARCH -->
            <div class="d-flex align-items-center gap-2">

                <form action="{{ url('/admin_feedback') }}" method="GET">

                    <div class="input-group pb-ts-input-group" style="max-width: 280px;">

                        <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                            <svg width="16" height="16" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                            </svg>
                        </span>

                        <input
                            type="text"
                            name="search"
                            value="{{ $search ?? '' }}"
                            class="form-control border-start-0 ps-1 pb-ts-input extra-small"
                            placeholder="Search reviews..."
                        >

                    </div>

                </form>

                <!-- FILTER BUTTON -->
                <button
                    type="button"
                    class="btn btn-sm rounded-3 fw-semibold pb-ts-btn-outline p-2 d-flex align-items-center justify-content-center"
                    title="Filter Reviews"
                    style="width: 38px; height: 38px;">

                    <svg width="18" height="18" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/>
                    </svg>

                </button>

            </div>
        </div>


        <!-- METRICS -->
        <div class="row g-3 mb-4">

            <!-- Pending -->
            <div class="col-md-4">

                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm
                            d-flex align-items-center justify-content-between">

                    <div>
                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">
                             Reviews
                        </span>

                        <div class="d-flex align-items-baseline gap-2">

                            <h3 class="fw-bold text-dark mb-0 fs-2 pb-ts-heading">
                                {{ $reviews->count()}}
                            </h3>

                        </div>
                    </div>

                    <div class="pb-mod-stat-icon rounded-circle d-flex align-items-center
                                justify-content-center bg-warning-subtle text-warning
                                border border-warning-subtle"
                         style="width: 52px; height: 52px;">

                        <svg width="22" height="22" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
                        </svg>

                    </div>

                </div>

            </div>


            <!-- Approved -->
            <div class="col-md-4">

                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm
                            d-flex align-items-center justify-content-between">

                    <div>

                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">
                          Todays Reviews
                        </span>

                        <h3 class="fw-bold text-dark mb-0 fs-2 pb-ts-heading">
                            {{ $reviews->count()-2}}
                        </h3>

                    </div>

                    <div class="pb-mod-stat-icon rounded-circle d-flex align-items-center
                                justify-content-center bg-primary-subtle text-primary
                                border border-primary-subtle"
                         style="width: 52px; height: 52px;">

                        <svg width="22" height="22" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>

                    </div>

                </div>

            </div>


            <!-- Rejected -->
            <div class="col-md-4">

                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm
                            d-flex align-items-center justify-content-between">

                    <div>

                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">
                            Negative Review
                        </span>

                        <h3 class="fw-bold text-dark mb-0 fs-2 pb-ts-heading">
                            {{  $reviews->count()-3 }}
                        </h3>

                    </div>

                    <div class="pb-mod-stat-icon rounded-circle d-flex align-items-center
                                justify-content-center bg-danger-subtle text-danger
                                border border-danger-subtle"
                         style="width: 52px; height: 52px;">

                        <svg width="22" height="22" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2.5">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="15" y1="9" x2="9" y2="15"/>
                            <line x1="9" y1="9" x2="15" y2="15"/>
                        </svg>

                    </div>

                </div>

            </div>

        </div>


        <!-- SEARCH RESULT MESSAGE -->
        @if(!empty($search))

            <div class="alert alert-light border rounded-3 small mb-3">

                Search results for:
                <strong>"{{ $search }}"</strong>

                <a href="{{ url('/admin_review') }}"
                   class="ms-2 text-decoration-none">
                    Clear Search
                </a>

            </div>

        @endif


        <!-- REVIEWS LIST -->

        <div class="d-flex flex-column gap-3 mb-4">

            @if($reviews->isEmpty())

                <!-- NO RESULTS -->

                <div class="pb-ts-card bg-white rounded-4 border shadow-sm p-5 text-center">

                    <div class="mb-3">

                        <svg width="45" height="45"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.5"
                             class="text-muted">

                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>

                        </svg>

                    </div>

                    <h5 class="fw-bold text-dark">
                        No reviews found
                    </h5>

                    <p class="text-muted small mb-0">
                        No reviews match your search.
                    </p>

                </div>

            @else

                @foreach($reviews as $review)

                    <!-- REVIEW CARD -->

                    <div class="pb-ts-card bg-white rounded-4 border shadow-sm overflow-hidden">

                        <div class="p-4">

                            <!-- USER HEADER -->

                            <div class="d-flex align-items-center justify-content-between
                                        flex-wrap gap-3 mb-3">

                                <div class="d-flex align-items-center gap-3">

                                    <!-- Avatar -->

                                    <div class="rounded-circle bg-primary-subtle text-primary
                                                fw-bold d-flex align-items-center justify-content-center"
                                         style="width: 48px; height: 48px; font-size: 0.95rem;">

                                        {{ strtoupper(substr($review->name, 0, 2)) }}

                                    </div>


                                    <div>

                                        <h6 class="fw-bold text-dark mb-0 pb-ts-heading">
                                            {{ $review->name }}
                                        </h6>

                                        <span class="text-muted extra-small">
                                            {{ $review->email }}
                                        </span>

                                    </div>

                                </div>


                                <!-- RATING + STATUS + DATE -->

                                <div class="d-flex align-items-center gap-3 flex-wrap">

                                    <!-- Rating -->

                                    <div class="pb-mod-stars text-warning fs-5">

                                        @for($i = 1; $i <= 5; $i++)

                                            @if($i <= $review->rating)

                                                ★

                                            @else

                                                <span class="text-muted opacity-50">
                                                    ★
                                                </span>

                                            @endif

                                        @endfor

                                    </div>





                                    <!-- DATE -->

                                    <span class="small text-muted">

                                        {{ $review->created_at->format('M d, Y') }}

                                    </span>

                                </div>

                            </div>


                            <!-- REVIEW MESSAGE -->

                            <p class="text-secondary small mb-3 p-3 rounded-3 border
                                      pb-ts-subcard pb-ts-border-subtle"
                               style="line-height: 1.6;">

                                "{{ $review->suggestions }}"

                            </p>


                            <!-- ACTIONS -->

                   

                                                    

                        </div>

                    </div>

                @endforeach

            @endif

        </div>


        <!-- PAGINATION -->

        @if($reviews->count() > 0)

            <div class="d-flex align-items-center justify-content-between
                        flex-wrap gap-2 pt-2">

                <span class="small text-muted">

                    Showing {{ $reviews->count() }} reviews

                </span>

            </div>

        @endif

    </div>
</div>

@endsection