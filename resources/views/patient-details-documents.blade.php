<?php $page = 'patient-details-documents'; ?>   
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
                    <h4 class="mb-1">Patient Details</h4>
                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>                            
                            <li class="breadcrumb-item active">Patient Details</li>
                        </ol>
                    </div>
                </div>
                <a href="{{url('patients')}}" class="fw-medium d-flex align-items-center"><i class="ti ti-arrow-left me-1"></i>Back to Patients</a>
            </div>
            <!-- End Page Header -->

            <!-- tabs start -->
            <ul class="nav nav-tabs nav-item-primary border-bottom pb-4 mb-4 d-flex align-items-center gap-2">
                <li class="nav-item">
                    <a href="{{url('patient-details')}}" class="nav-link border rounded fw-semibold">
                        Patient Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('patient-details-appointments')}}" class="nav-link border rounded fw-semibold">
                        Appointments
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('patient-details-vital-signs')}}" class="nav-link border rounded fw-semibold">
                        Vital Signs
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('patient-details-visit-history')}}" class="nav-link border rounded fw-semibold">
                        Visit History
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('patient-details-lab-results')}}" class="nav-link border rounded fw-semibold">
                        Lab Results
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('patient-details-prescription')}}" class="nav-link border rounded fw-semibold">
                        Prescription
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('patient-details-medical-history')}}" class="nav-link border rounded fw-semibold">
                        Medical History
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('patient-details-documents')}}" class="nav-link border rounded fw-semibold active">
                        Documents
                    </a>
                </li>
            </ul>
            <!-- tabs end -->

            <!-- card start -->
            <div class="card mb-0">

                <div class="card-header d-flex align-items-center flex-wrap gap-2 justify-content-between">
                    <h5 class="d-inline-flex align-items-center mb-0">Documents<span class="badge bg-danger ms-2">658</span></h5>
                    <div class="d-flex align-items-center flex-wrap">
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
                                    <th class="no-sort">Document Name</th>
                                    <th>Date</th>
                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($patient as $document)
                                    <tr>
                                        <td>{{ $document['document_name'] }}</td>
                                        <td>{{ $document['date'] }}</td>                                     
                                        <td class="text-end">
                                            <a href="javascript:void(0);" class="btn btn-icon btn-outline-light"><i class="ti ti-download"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No documents found</td>
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