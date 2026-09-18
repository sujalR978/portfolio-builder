@extends('layouts.master')

@section('title', 'Admin Dashboard - User Management')

@section('content')

<!-- ==========================================
     ADMIN PANEL MAIN CONTENT (THEME ADAPTIVE)
=========================================== -->
<div class="pb-admin-wrapper min-vh-100 pb-admin-bg-soft py-4 py-xl-5">
    <div class="container-xl">
        
        <!-- HEADER TITLE & INVITE BUTTON -->
        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
            <div>
                <h2 class="fw-bold text-dark fs-3 mb-1 pb-ts-heading">User Management</h2>
                <p class="text-muted small mb-0">Manage your platform users and their subscription statuses.</p>
            </div>
            <button type="button" class="btn btn-primary rounded-3 px-3 py-2 fw-bold text-white shadow-sm d-flex align-items-center gap-2 pb-ts-btn-main">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="17" y1="11" x2="23" y2="11"/></svg>
                <span>Invite User</span>
            </button>
        </div>

        <!-- METRIC STATS CARDS -->
        <div class="row g-3 mb-4">
            
            <!-- Stat 1: Total Users -->
            <div class="col-md-4">
                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">Total Users</span>
                        <h3 class="fw-bold text-dark mb-1 fs-2 pb-ts-heading">{{$users->count()}}</h3>
                        <span class="small text-success fw-semibold">↗ +12% this month</span>
                    </div>
                    <div class="pb-admin-stat-icon bg-primary text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                </div>
            </div>

            <!-- Stat 2: Active Subscriptions -->
            <div class="col-md-4">
                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">Active Subscriptions</span>
                        <h3 class="fw-bold text-dark mb-1 fs-2 pb-ts-heading">{{$users->count() - 2}}</h3>
                        <span class="small text-success fw-semibold">↗ +5.4% this month</span>
                    </div>
                    <div class="pb-admin-stat-icon bg-primary-subtle text-primary rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    </div>
                </div>
            </div>

            <!-- Stat 3: New This Month -->
            <div class="col-md-4">
                <div class="pb-ts-card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted extra-small fw-bold text-uppercase d-block mb-1">New This Month</span>
                        <h3 class="fw-bold text-dark mb-1 fs-2 pb-ts-heading">{{$users->count() -3}}</h3>
                        <span class="small text-muted fw-semibold">— Steady growth</span>
                    </div>
                    <div class="pb-admin-stat-icon pb-ts-subcard text-muted rounded-3 d-flex align-items-center justify-content-center border" style="width: 48px; height: 48px;">
                        <span class="fw-bold small">NEW</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- SEARCH, FILTERS & USER TABLE CARD -->
        <div class="pb-ts-card bg-white rounded-4 border shadow-sm overflow-hidden">
            
            <!-- Table Controls (Search & Filter) -->
            <div class="p-3 border-bottom pb-ts-border-subtle d-flex align-items-center justify-content-between flex-wrap gap-2">
                
                <!-- Search Input Group -->
                <div class="input-group pb-ts-input-group" style="max-width: 340px;">
                    <span class="input-group-text bg-transparent border-end-0 text-muted pe-1 pb-ts-input-addon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </span>
                    <input type="text" class="form-control border-start-0 ps-2 pb-ts-input extra-small" placeholder="Search by name, email, or ID...">
                </div>

               
            </div>

            <!-- User Table -->
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 pb-admin-table">
                    <thead>
                        <tr class="text-muted extra-small text-uppercase pb-admin-table-header">
                            <th class="ps-3" style="width: 40px;"><input class="form-check-input" type="checkbox"></th>
                            <th class="fw-bold">User Details</th>
                            <th class="fw-bold">Status</th>
                            <th class="fw-bold">Registration Date</th>
                            <th class="fw-bold text-end pe-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <!-- Row 1 -->
                        <tr>
                            <td class="ps-3"><input class="form-check-input" type="checkbox"></td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; font-size: 0.85rem;">
                                          {{ strtoupper(substr($user->firstName, 0, 1) . substr($user->lastName, 0, 1)) }}
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-dark mb-0 small pb-ts-label">{{$user->firstName}} {{$user->lastName}}</h6>
                                        <span class="text-muted extra-small">{{$user->email}}</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1 fw-semibold extra-small">• Active</span></td>
                            <td class="small text-muted">{{$user->created_at}}</td>
                           <td class="text-end pe-3">

    <div class="dropdown">

        <button
            class="btn btn-sm btn-link text-muted p-0 border-0"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            title="Options">
            ⋮
        </button>

        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3">

          

           

            <li>
                <form action="{{ route('admin.user.delete', $user->id) }}"
                      method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this user?');">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="dropdown-item text-danger">
                        Delete
                    </button>
                </form>
            </li>

        </ul>

    </div>

</td>
                        </tr>

                    
                        @endforeach

                    </tbody>
                </table>
            </div>

            <!-- Table Footer & Pagination -->
            <div class="p-3 border-top pb-ts-border-subtle pb-ts-subcard d-flex align-items-center justify-content-between flex-wrap gap-2">
                <span class="small text-muted">Showing {{$user->id}} results</span>

               
            </div>

        </div>

    </div>
</div>

@endsection