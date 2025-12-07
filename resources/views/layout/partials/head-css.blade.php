    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL::asset('build/img/favicon.png')}}">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{URL::asset('build/img/apple-icon.png')}}">

@if (!Route::is(['layout-mini', 'layout-hoverview', 'layout-hidden', 'layout-fullwidth', 'layout-rtl', 'layout-dark', 'login', 'sign-up', 'forgot-password', 'change-password', 'error-404', 'error-500', 'coming-soon', 'under-maintenance', 'lock-screen']))
    <!-- Theme Config Js -->
    <script src="{{URL::asset('build/js/theme-script.js')}}"></script>
@endif  

@if (!Route::is(['layout-rtl']))
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/css/bootstrap.min.css')}}">
@endif  

@if (Route::is(['layout-rtl']))
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/css/bootstrap.rtl.min.css')}}">
@endif  

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/simplebar/simplebar.min.css')}}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/tabler-icons/tabler-icons.min.css')}}">  
    
@if (Route::is(['icon-bootstrap']))
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/bootstrap/bootstrap-icons.min.css')}}">
@endif  

@if (Route::is(['icon-feather']))
    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/feather/feather.css')}}">
@endif  

@if (Route::is(['icon-flag']))
    <!-- Flag CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/flags/flags.css')}}">
@endif  

@if (Route::is(['icon-fontawesome']))
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('build/plugins/fontawesome/css/all.min.css')}}">
@endif 

@if (Route::is(['icon-ionic']))
    <!-- Ionic CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/ionic/ionicons.css')}}">
@endif  

@if (Route::is(['icon-material']))
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/material/materialdesignicons.css')}}">
@endif  

@if (Route::is(['icon-pe7']))
    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/pe7/pe-icon-7.css')}}">
@endif  

@if (Route::is(['icon-remix']))
    <!-- Remix Icon CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/remix/remixicon.css')}}">
@endif  

@if (Route::is(['icon-simpleline']))
    <!-- Simpleline CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/simpleline/simple-line-icons.css')}}">
@endif  

@if (Route::is(['icon-themify']))
    <!-- Themify CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/themify/themify.css')}}">
@endif 

@if (Route::is(['icon-typicon']))
    <!-- Typicon CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/typicons/typicons.css')}}">
@endif 

@if (Route::is(['icon-weather']))
    <!-- Weather CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/icons/weather/weathericons.css')}}">
@endif     

@if (Route::is(['add-doctors', 'add-patient', 'all-doctors-list', 'appointments', 'calendar', 'edit-doctors', 'edit-patient', 'form-pickers', 'index', 'kanban-view', 'layout-dark', 'layout-fullwidth', 'layout-hidden', 'layout-hoverview', 'layout-mini', 'layout-rtl', 'notes', 'patient-details-appointments', 'patient-details-visit-history', 'patients', 'pharmacy', 'plans-billings-settings', 'staffs', 'start-visits', 'todo', 'visits', 'widgets']))
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/flatpickr/flatpickr.min.css')}}">
@endif 

@if (Route::is(['all-doctors-list', 'appointment-consultation', 'data-tables', 'lab-results', 'widgets']))
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/datatables/css/dataTables.bootstrap5.min.css')}}">
@endif  

@if (Route::is(['index', 'layout-dark', 'layout-fullwidth', 'layout-hidden', 'layout-hoverview', 'layout-mini', 'layout-rtl']))
    <!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="{{URL::asset('build/plugins/daterangepicker/daterangepicker.css')}}">
@endif        

@if (Route::is(['email-compose', 'form-editors', 'kanban-view', 'notes', 'todo', 'widgets']))
    <!-- Quill css -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/quill/quill.core.css')}}">
    <link rel="stylesheet" href="{{URL::asset('build/plugins/quill/quill.snow.css')}}"> 
@endif   

@if (Route::is(['form-editors']))
    <link rel="stylesheet" href="{{URL::asset('build/plugins/quill/quill.bubble.css')}}">
@endif  

@if (Route::is(['video-call']))
    <!-- Swiper css -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/swiper/swiper-bundle.min.css')}}">
@endif

@if (Route::is(['chart-c3']))
    <!-- ChartC3 CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/c3-chart/c3.min.css')}}">
@endif

@if (Route::is(['chart-morris']))
    <!-- Morris CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/morris/morris.css')}}">
@endif

@if (Route::is(['search-result', 'social-feed', 'ui-lightbox']))
    <!-- Glightbox CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/lightbox/glightbox.min.css')}}">
@endif

@if (Route::is(['ui-rangeslider']))
    <!-- Range Slider CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/nouislider/nouislider.min.css')}}">
@endif

@if (Route::is(['ui-sweetalerts']))
    <!-- Sweetalert2 CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/sweetalert2/sweetalert2.min.css')}}">
@endif

@if (Route::is(['add-doctors', 'add-patient', 'appointments', 'all-doctors-list', 'appearance-settings', 'appointment-consultation', 'change-password', 'calendar', 'edit-doctors', 'edit-patient', 'email-compose', 'form-select', 'general-settings', 'index', 'kanban-view', 'layout-dark', 'layout-fullwidth', 'layout-hidden', 'layout-hoverview', 'layout-mini', 'layout-rtl', 'notes', 'patient-details-appointments', 'patient-details-visit-history', 'patients', 'pharmacy', 'plans-billings-settings', 'security-settings', 'staffs', 'start-visits', 'todo', 'visits', 'widgets']))
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/select2/css/select2.min.css')}}">
@endif        

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/css/style.css')}}" id="app-style">