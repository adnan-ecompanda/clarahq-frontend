<?php $page = 'all-doctors-list'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <div class="page-wrapper">

        <!-- Start Content -->
        <div class="content">

            <!-- Page Header -->
            <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
                <div class="breadcrumb-arrow">
                    <h4 class="mb-1">Doctors</h4>
                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>                            
                            <li class="breadcrumb-item active">Doctors</li>
                        </ol>
                    </div>
                </div>
                <div class="gap-2 d-flex align-items-center flex-wrap">
                    <a href="{{url('doctors')}}" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Grid" data-bs-original-title="Grid View"><i class="ti ti-layout-grid"></i></a>
                    <a href="{{url('all-doctors-list')}}" class="btn btn-icon btn-white active" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="List" data-bs-original-title="List View"><i class="ti ti-layout-list"></i></a>
                    <a href="javascript:void(0);" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh" data-bs-original-title="Refresh"><i class="ti ti-refresh"></i></a>
                    <a href="javascript:void(0);" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Print" data-bs-original-title="Print"><i class="ti ti-printer"></i></a>
                    <a href="javascript:void(0);" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download" data-bs-original-title="Download"><i class="ti ti-cloud-download"></i></a>
                    <a href="{{url('add-doctors')}}" class="btn btn-primary"><i class="ti ti-square-rounded-plus me-1"></i>New Doctor</a>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- card start -->
            <div class="card mb-0">
                <div class="card-header d-flex align-items-center flex-wrap gap-2 justify-content-between">
                    <h5 class="d-inline-flex align-items-center mb-0">Total Doctors<span class="badge bg-danger ms-2">600</span></h5>
                    <div class="d-flex align-items-center">

                        <!-- sort by -->
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-md btn-outline-light d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="ti ti-sort-descending-2 me-1"></i><span class="me-1">Sort By : </span>  Newest
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-2">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Newest</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Oldest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-nowrap">
                        <table class="table mb-0 border">
                            <thead class="table-light">
                                <tr>
                                    <th>Doctor ID</th>
                                    <th>Doctor Name</th>
                                    <th>Department</th>
                                    <th>Qualification</th>
                                    <th>Experience</th>
                                    <th>Total Appointments</th>
                                    <th>Status</th>
                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allDoctorsList as $doctor)
                                <tr>
                                    <td>{{ $doctor['id'] }}</td>
                                    <td><div class="d-flex align-items-center"><a href="{{url('doctor-details')}}" class="avatar avatar-xs me-2"><img src="{{ $doctor['avatar'] }}" alt="doctor" class="rounded"></a><div><h6 class="fs-14 mb-0 fw-medium"><a href="{{url('doctor-details')}}">{{ $doctor['name'] }}</a></h6></div></div></td>
                                    <td>{{ $doctor['department'] }}</td>
                                    <td>{{ $doctor['qualification'] }}</td>
                                    <td>{{ $doctor['experience'] }}</td>
                                    <td>{{ $doctor['appointments'] }}</td>
                                    <td>
                                        <span class="badge badge-soft-{{ ['Active' => 'success', 'Inactive' => 'danger', 'Pending' => 'warning', 'In progress' => 'primary', 'default' => 'secondary'][$doctor['status']] ?? 'secondary' }}">{{ $doctor['status'] }}</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="javascript:void(0);" class="btn btn-icon btn-outline-light" data-bs-toggle="dropdown" aria-label="more options"><i class="ti ti-dots-vertical"></i></a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="{{url('doctor-details')}}" class="dropdown-item d-flex align-items-center"><i class="ti ti-eye me-1"></i>View Details</a>
                                            </li>
                                            <li>
                                                <a href="{{url('edit-doctors')}}" class="dropdown-item d-flex align-items-center"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>                                        
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No doctors found</td>      
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- card start -->

        </div>
        <!-- End Content -->    

        @include('layout.partials.footer')

    </div>
    
    <!-- ========================
        End Page Content
    ========================= -->

@endsection