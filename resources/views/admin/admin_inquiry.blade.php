@extends('layouts.master')

@section('title', 'Contact Management - Inquiry Inbox')

@section('content')



<div class="pb-inbox-wrapper min-vh-100 pb-admin-bg-soft p-3 p-md-4">


<div class="container-fluid p-0">



    <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-3">

        <form action="{{ url('/admin_inquiry') }}"
              method="GET">

            <div class="input-group pb-ts-input-group"
                 style="max-width: 360px;">

                <!-- Search Icon -->
                <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">

                    <svg width="16"
                         height="16"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">

                        <circle cx="11"
                                cy="11"
                                r="8"/>

                        <line x1="21"
                              y1="21"
                              x2="16.65"
                              y2="16.65"/>

                    </svg>

                </span>


                <!-- Search Input -->

                <input
                    type="text"
                    name="search"
                    value="{{ $search ?? '' }}"
                    class="form-control border-start-0 ps-1 pb-ts-input extra-small"
                    placeholder="Search inquiries...">


                <!-- Search Button -->

                <button type="submit"
                        class="btn btn-primary">

                    Search

                </button>

            </div>

        </form>


        <!-- Clear Search -->

        @if(!empty($search))

            <a href="{{ url('/admin_inquiry') }}"
               class="btn btn-sm btn-outline-secondary rounded-3">

                Clear Search

            </a>

        @endif

    </div>


    <div class="pb-ts-card bg-white rounded-4 border shadow-sm overflow-hidden">

        <div class="row g-0">


    

            <div class="col-md-5 col-xl-4 border-end pb-ts-border-subtle">


                <!-- Inbox Header -->

                <div class="p-3 border-bottom pb-ts-border-subtle d-flex align-items-center justify-content-between">

                    <div>

                        <h4 class="fw-bold text-dark mb-0 fs-5 pb-ts-heading">
                            Inbox
                        </h4>

                        <span class="text-muted extra-small">

                            {{ $contact->count() }}
                            {{ $contact->count() == 1 ? 'Inquiry' : 'Inquiries' }}

                        </span>

                    </div>


                    <button type="button"
                            class="btn btn-sm btn-link text-muted p-0 border-0"
                            title="Filter Inquiries">

                        <svg width="18"
                             height="18"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2">

                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/>

                        </svg>

                    </button>

                </div>


              

                <div class="list-group list-group-flush pb-inbox-list overflow-y-auto"
                     style="max-height: 720px;">


                    @if($contact->isEmpty())

                        <!-- No Results -->

                        <div class="text-center text-muted p-5">

                            <div style="font-size: 35px;">
                                🔍
                            </div>

                            <h6 class="fw-bold mt-3 mb-1">
                                No inquiries found
                            </h6>

                            <p class="extra-small mb-0">

                                @if(!empty($search))

                                    No inquiry matches
                                    "{{ $search }}".

                                @else

                                    There are no inquiries available.

                                @endif

                            </p>

                        </div>


                    @else


                        @foreach($contact as $con)

                   

                            <a href="{{ url('/admin_inquiry') }}?id={{ $con->id }}{{ !empty($search) ? '&search=' . urlencode($search) : '' }}"
                               class="list-group-item list-group-item-action p-3 border-bottom pb-ts-border-subtle
                               {{ $selectedContact && $selectedContact->id == $con->id ? 'active-inbox-item' : '' }}">


                                <!-- Name + Date -->

                                <div class="d-flex align-items-center justify-content-between mb-1">

                                    <div class="d-flex align-items-center gap-2">

                                        <span class="fw-bold text-dark small pb-ts-label">

                                            {{ $con->name }}

                                        </span>


                                        <span class="badge bg-primary text-white rounded-pill extra-small">

                                            New

                                        </span>

                                    </div>


                                    <span class="extra-small text-muted">

                                        {{ $con->created_at }}

                                    </span>

                                </div>


                                <!-- Subject -->

                                <h6 class="fw-bold text-dark mb-1 small text-truncate pb-ts-heading">

                                    {{ $con->subject }}

                                </h6>


                                <!-- Message Preview -->

                                <p class="text-secondary extra-small mb-0 text-truncate">

                                    {{ $con->message }}

                                </p>


                            </a>

                        @endforeach


                    @endif


                </div>

            </div>


            

            <div class="col-md-7 col-xl-8 d-flex flex-column pb-ts-card">


                @if($selectedContact)


                    

                    <div>


                        <!-- Message Header -->

                        <div class="p-3 p-md-4 border-bottom pb-ts-border-subtle d-flex align-items-center justify-content-between flex-wrap gap-3">


                            <!-- User Information -->

                            <div class="d-flex align-items-center gap-3">


                                <!-- Avatar -->

                                <div class="rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center"
                                     style="width: 44px; height: 44px; font-size: 0.95rem;">

                                    {{ strtoupper(substr($selectedContact->name, 0, 1)) }}

                                </div>


                                <!-- Name / Subject / Email -->

                                <div>

                                    <h5 class="fw-bold text-dark mb-1 fs-5 pb-ts-heading">

                                        {{ $selectedContact->subject }}

                                    </h5>


                                    <span class="text-muted small">

                                        {{ $selectedContact->name }}

                                        &lt;{{ $selectedContact->email }}&gt;

                                    </span>


                                    <span class="text-muted extra-small d-block mt-1">

                                        {{ $selectedContact->created_at }}

                                    </span>

                                </div>

                            </div>


                            <!-- Header Actions -->

                            <div class="d-flex align-items-center gap-2">
<form
                                                    action="{{ route('admin.contect.delete', $selectedContact->id) }}"
                                                    method="POST">


                                                    @csrf

                                                    @method('DELETE')
                                <button type="submit"
                                        class="btn btn-sm rounded-3 fw-semibold pb-ts-btn-outline d-inline-flex align-items-center gap-1 px-3 py-1.5">

                                    <svg width="14"
                                         height="14"
                                         viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor"
                                         stroke-width="2.5">

                                        <polyline points="20 6 9 17 4 12"/>

                                    </svg>

                                    <span>Delete</span>

                                </button>
</form>
                            </div>

                        </div>


                        <!-- ==========================================
                             MESSAGE BODY
                        =========================================== -->

                        <div class="p-3 p-md-4">

                            <div class="p-4 rounded-4 border pb-ts-subcard pb-ts-border-subtle">


                                <!-- Subject -->

                                <p class="text-dark small mb-3 pb-ts-label">

                                    {{ $selectedContact->subject }}

                                </p>


                                <!-- Message -->

                                <p class="text-secondary small mb-4"
                                   style="line-height: 1.6; white-space: pre-line;">

                                    {{ $selectedContact->message }}

                                </p>


                                <!-- Sender -->

                                <p class="text-dark small mb-4 pb-ts-label">

                                    Best regards,<br>

                                    <strong>

                                        {{ $selectedContact->name }}

                                    </strong>

                                </p>


                                <!-- Email -->

                                <p class="text-muted extra-small mb-0">

                                    Email:
                                    {{ $selectedContact->email }}

                                </p>


                            </div>

                        </div>

                    </div>


                @else


                    <!-- ==========================================
                         NO INQUIRY SELECTED
                    =========================================== -->

                    <div class="flex-grow-1 d-flex align-items-center justify-content-center"
                         style="min-height: 500px;">


                        <div class="text-center text-muted">


                            <div style="font-size: 45px;">
                                ✉️
                            </div>


                            <h5 class="fw-bold text-dark mt-3 mb-2">

                                Select an inquiry

                            </h5>


                            <p class="small mb-0">

                                Click an inquiry from the left to view the full message.

                            </p>


                        </div>

                    </div>


                @endif


            </div>

        </div>

    </div>

</div>
```

</div>

@endsection
