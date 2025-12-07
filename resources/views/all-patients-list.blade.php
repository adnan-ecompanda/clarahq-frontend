<?php $page = 'all-patients-list'; ?>   
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
                    <h4 class="mb-1">Patients</h4>
                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>                            
                            <li class="breadcrumb-item active">Patients</li>
                        </ol>
                    </div>
                </div>
                <div class="gap-2 d-flex align-items-center flex-wrap">
                    <a href="{{url('patients')}}" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Grid" data-bs-original-title="Grid View"><i class="ti ti-layout-grid"></i></a>
                    <a href="{{url('all-patients-list')}}" class="btn btn-icon btn-white active" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="List" data-bs-original-title="List View"><i class="ti ti-layout-list"></i></a>
                    <a href="javascript:void(0);" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh" data-bs-original-title="Refresh"><i class="ti ti-refresh"></i></a>
                    <a href="javascript:void(0);" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Print" data-bs-original-title="Print"><i class="ti ti-printer"></i></a>
                    <a href="javascript:void(0);" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download" data-bs-original-title="Download"><i class="ti ti-cloud-download"></i></a>
                    <a href="{{url('add-patient')}}" class="btn btn-primary"><i class="ti ti-square-rounded-plus me-1"></i>Add New Patient</a>
                </div>
            </div>
            <!-- End Page Header -->
            
            <!-- card start -->
            <div class="card mb-0">
                <div class="card-header d-flex align-items-center flex-wrap gap-2 justify-content-between">
                    <h6 class="d-inline-flex align-items-center mb-0">Total Patients <span class="badge bg-danger ms-2">658</span></h6>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-md btn-outline-light d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <i class="ti ti-sort-descending-2 me-1"></i><span class="me-1">Sort By : </span> Newest
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
                    <!-- table start -->
                    <div class="table-responsive table-nowrap">
                        <table class="table mb-0 border">
                            <thead class="table-light">
                                <tr>
                                    <th>Patient ID</th>
                                    <th>Patient Name</th>
                                    <th class="no-sort">Gender</th>
                                    <th class="no-sort">Department</th>
                                    <th>Doctor Name</th>
                                    <th>Last Visit</th>
                                    <th class="no-sort">Status</th>
                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allPatientsList as $patient)
                                <tr>
                                    <td><a href="{{url('patient-details')}}">{{ $patient['patient_id'] }}</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('patient-details')}}" class="avatar avatar-xs me-2">
                                                <img src="{{ $patient['avatar'] }}" alt="patient" class="rounded">   
                                            </a>
                                            <div>
                                                <h6 class="fs-14 mb-0 fw-medium"><a href="{{url('patient-details')}}">{{ $patient['name'] }}</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $patient['gender'] }}</td>
                                    <td>{{ $patient['department'] }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('doctor-details')}}" class="avatar avatar-xs me-2">
                                                <img src="{{ $patient['doctor_avatar'] }}" alt="doctor" class="rounded">
                                            </a>
                                            <div>
                                                <h6 class="fs-14 mb-0 fw-medium"><a href="{{url('doctor-details')}}">{{ $patient['doctor_name'] }}</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $patient['last_visit'] }}</td>
                                    <td><span class="badge badge-soft-{{ ['In Patient' => 'purple', 'Out Patient' => 'orange'][$patient['status']] ?? 'secondary' }}">{{ $patient['status'] }}</span></td>
                                    <td class="text-end">
                                        <a href="javascript:void(0);" class="btn btn-icon btn-outline-light" data-bs-toggle="dropdown" aria-label="more options"><i class="ti ti-dots-vertical"></i></a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="{{url('patient-details')}}" class="dropdown-item d-flex align-items-center"><i class="ti ti-eye me-1"></i>View Details</a>
                                            </li>
                                            <li>
                                                <a href="{{url('edit-patient')}}" class="dropdown-item d-flex align-items-center"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>                                        
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No patients found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- table end -->
                </div>

            </div>
            <!-- card end -->

        </div>
        <!-- End Content -->        

        @include('layout.partials.footer')

    </div>
    
    <!-- ========================
        End Page Content
    ========================= -->

@endsection