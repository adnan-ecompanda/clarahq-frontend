<?php $page = 'contact-list'; ?>   
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
                    <h4 class="mb-1">Contact</h4>
                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>    
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Applications</a></li>                        
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div>
                </div>
                <div class="gap-2 d-flex align-items-center flex-wrap">
                    <a href="{{url('contacts')}}" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Grid" data-bs-original-title="Grid View"><i class="ti ti-layout-grid"></i></a>
                    <a href="{{url('contact-list')}}" class="btn btn-icon btn-white active" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="List" data-bs-original-title="List View"><i class="ti ti-layout-list"></i></a>
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="ti ti-square-rounded-plus me-1"></i>New Contact</a>
                </div>
            </div>
            <!-- End Page Header -->            

            <!-- card start -->
            <div class="card mb-0">
                <div class="card-header d-flex align-items-center flex-wrap gap-2 justify-content-between">
                    <h6 class="d-inline-flex align-items-center mb-0">Contacts<span class="badge bg-danger ms-2">658</span></h6>
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
                                    <th class="no-sort">Name</th>
                                    <th class="no-sort">Phone</th>
                                    <th class="no-sort">Email ID</th>
                                    <th class="no-sort"></th>
                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contactList as $contact)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar avatar-sm flex-shrink-0 me-2">
                                                    <img src="{{ $contact['avatar'] }}" alt="user">
                                                </a>
                                                <h6 class="fs-14 fw-semibold mb-0">
                                                    <a href="javascript:void(0);">{{ $contact['name'] }}</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>{{ $contact['phone'] }}</td>
                                        <td>{{ $contact['email'] }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{url('voice-call')}}" class="btn btn-icon btn-light" aria-label="phone"><i class="ti ti-phone-calling"></i></a>
                                                <a href="{{url('chat')}}" class="btn btn-icon btn-light" aria-label="message"><i class="ti ti-message-chatbot"></i></a>
                                                <a href="{{url('video-call')}}" class="btn btn-icon btn-light" aria-label="video"><i class="ti ti-video-plus"></i></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-outline-light" data-bs-toggle="dropdown" aria-label="more options"><i class="ti ti-dots-vertical"></i></a>
                                                <ul class="dropdown-menu p-2">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>                                       
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td> 
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No contacts found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- table end -->
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