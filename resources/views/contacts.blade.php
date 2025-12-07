<?php $page = 'contacts'; ?>   
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <div class="page-wrapper">

        <!-- Start Content -->
        <div class="content pb-0">

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
                    <a href="{{url('contacts')}}" class="btn btn-icon btn-white active" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Grid" data-bs-original-title="Grid View"><i class="ti ti-layout-grid"></i></a>
                    <a href="{{url('contact-list')}}" class="btn btn-icon btn-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="List" data-bs-original-title="List View"><i class="ti ti-layout-list"></i></a>
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="ti ti-square-rounded-plus me-1"></i>New Contact</a>
                </div>
            </div>
            <!-- End Page Header -->   
            
            <div class="row">
                @forelse($contacts as $contact)
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0 me-2"><img src="{{ $contact['avatar'] }}" alt="user"></a>
                                <div>
                                    <h6 class="fs-14 fw-semibold mb-1"><a href="javascript:void(0);">{{ $contact['name'] }}</a></h6>
                                    <p class="fs-13 mb-0">{{ $contact['email'] }}</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{url('voice-call')}}" class="btn btn-icon btn-light"><i class="ti ti-phone-calling"></i></a>
                                    <a href="{{url('chat')}}" class="btn btn-icon btn-light"><i class="ti ti-message-chatbot"></i></a>
                                    <a href="{{url('video-call')}}" class="btn btn-icon btn-light"><i class="ti ti-video-plus"></i></a>
                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">No contacts found</h5>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>

        </div>
        <!-- End Content -->   

        @include('layout.partials.footer')

    </div>
    
    <!-- ========================
        End Page Content
    ========================= -->

@endsection