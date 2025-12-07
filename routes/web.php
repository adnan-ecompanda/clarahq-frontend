<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientDetailsController;
use App\Http\Controllers\VisitsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\ApplicationsController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/add-doctors', function () {
    return view('add-doctors');
})->name('add-doctors');

Route::get('/add-invoice', function () {
    return view('add-invoice');
})->name('add-invoice');

Route::get('/add-patient', function () {        
    return view('add-patient');
})->name('add-patient');

Route::get('/all-doctors-list', [DoctorsController::class, 'AllDoctorsList'])->name('all-doctors-list');

Route::get('/all-patients-list', [PatientsController::class, 'AllPatientsList'])->name('all-patients-list');

Route::get('/appearance-settings', function () {
    return view('appearance-settings');
})->name('appearance-settings');

Route::get('/appointment-consultation', function () {
    return view('appointment-consultation');
})->name('appointment-consultation');

Route::get('/appointments', [VisitsController::class, 'Appointments'])->name('appointments');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');

Route::get('/chart-apex', function () {
    return view('chart-apex');
})->name('chart-apex');

Route::get('/chart-c3', function () {
    return view('chart-c3');
})->name('chart-c3');

Route::get('/chart-flot', function () {
    return view('chart-flot');
})->name('chart-flot');

Route::get('/chart-js', function () {
    return view('chart-js');
})->name('chart-js');

Route::get('/chart-morris', function () {
    return view('chart-morris');
})->name('chart-morris');

Route::get('/chart-peity', function () {
    return view('chart-peity');
})->name('chart-peity');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('/contact-list', [ApplicationsController::class, 'ContactList'])->name('contact-list');

Route::get('/contacts', [ApplicationsController::class, 'Contacts'])->name('contacts');

Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');

Route::get('/doctor-details', function () {
    return view('doctor-details');
})->name('doctor-details');

Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');

Route::get('/edit-doctors', function () {
    return view('edit-doctors');
})->name('edit-doctors');

Route::get('/edit-invoice', function () {
    return view('edit-invoice');
})->name('edit-invoice');   

Route::get('/edit-patient', function () {
    return view('edit-patient');
})->name('edit-patient');

Route::get('/email-compose', function () {
    return view('email-compose');
})->name('email-compose');

Route::get('/email-details', function () {
    return view('email-details');
})->name('email-details');

Route::get('/email', function () {
    return view('email');
})->name('email');

Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');

Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');

Route::get('/file-manager', function () {
    return view('file-manager');
})->name('file-manager');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');

Route::get('/form-checkbox-radios', function () {
    return view('form-checkbox-radios');
})->name('form-checkbox-radios');

Route::get('/form-editors', function () {
    return view('form-editors');
})->name('form-editors');

Route::get('/form-fileupload', function () {
    return view('form-fileupload');
})->name('form-fileupload');

Route::get('/form-floating-labels', function () {
    return view('form-floating-labels');
})->name('form-floating-labels');

Route::get('/form-grid-gutters', function () {
    return view('form-grid-gutters');
})->name('form-grid-gutters');

Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');

Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');

Route::get('/form-mask', function () {  
    return view('form-mask');
})->name('form-mask');

Route::get('/form-pickers', function () {
    return view('form-pickers');
})->name('form-pickers');

Route::get('/form-select', function () {
    return view('form-select');
})->name('form-select');

Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');

Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('/general-settings', function () {
    return view('general-settings');
})->name('general-settings');

Route::get('/icon-bootstrap', function () {
    return view('icon-bootstrap');
})->name('icon-bootstrap');

Route::get('/icon-feather', function () {
    return view('icon-feather');
})->name('icon-feather');

Route::get('/icon-flag', function () {
    return view('icon-flag');
})->name('icon-flag');

Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
})->name('icon-fontawesome');

Route::get('/icon-ionic', function () {
    return view('icon-ionic');
})->name('icon-ionic');

Route::get('/icon-material', function () {
    return view('icon-material');
})->name('icon-material');

Route::get('/icon-pe7', function () {
    return view('icon-pe7');
})->name('icon-pe7');

Route::get('/icon-remix', function () {
    return view('icon-remix');
})->name('icon-remix');

Route::get('/icon-simpleline', function () {
    return view('icon-simpleline');
})->name('icon-simpleline');

Route::get('/icon-tabler', function () {
    return view('icon-tabler');
})->name('icon-tabler');

Route::get('/icon-themify', function () {
    return view('icon-themify');
})->name('icon-themify');

Route::get('/icon-typicon', function () {
    return view('icon-typicon');
})->name('icon-typicon');

Route::get('/icon-weather', function () {
    return view('icon-weather');
})->name('icon-weather');

Route::get('/invoice-details', function () {
    return view('invoice-details');
})->name('invoice-details');

Route::get('/invoice', [ApplicationsController::class, 'Invoice'])->name('invoice');

Route::get('/kanban-view', function () {
    return view('kanban-view');
})->name('kanban-view');

Route::get('/lab-results', [PharmacyController::class, 'LabResults'])->name('lab-results');

Route::get('/layout-dark', function () {
    return view('layout-dark');
})->name('layout-dark');    

Route::get('/layout-fullwidth', function () {
    return view('layout-fullwidth');
})->name('layout-fullwidth');

Route::get('/layout-hidden', function () {
    return view('layout-hidden');
})->name('layout-hidden');

Route::get('/layout-hoverview', function () {
    return view('layout-hoverview');
})->name('layout-hoverview');

Route::get('/layout-mini', function () {
    return view('layout-mini');
})->name('layout-mini');

Route::get('/layout-rtl', function () {
    return view('layout-rtl');
})->name('layout-rtl');

Route::get('/lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/manage-add-invoices', function () {
    return view('manage-add-invoices');
})->name('manage-add-invoices');

Route::get('/manage-edit-invoices', function () {
    return view('manage-edit-invoices');
})->name('manage-edit-invoices');

Route::get('/manage-invoices-details', function () {
    return view('manage-invoices-details');
})->name('manage-invoices-details');

Route::get('/manage-invoices', [ApplicationsController::class, 'ManageInvoices'])->name('manage-invoices');

Route::get('/medical-results', [PharmacyController::class, 'MedicalResults'])->name('medical-results');

Route::get('/messages', function () {
    return view('messages');
})->name('messages');

Route::get('/notes', function () {
    return view('notes');
})->name('notes');

Route::get('/notifications-settings', function () {
    return view('notifications-settings');
})->name('notifications-settings');

Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

Route::get('/patient-details-appointments', [PatientDetailsController::class, 'patientDetailsAppointments'])->name('patient-details-appointments');

Route::get('/patient-details-documents', [PatientDetailsController::class, 'patientDetailsDocuments'])->name('patient-details-documents');

Route::get('/patient-details-lab-results', [PatientDetailsController::class, 'patientDetailsLabResults'])->name('patient-details-lab-results');

Route::get('/patient-details-medical-history', [PatientDetailsController::class, 'patientDetailsMedicalHistory'])->name('patient-details-medical-history');

Route::get('/patient-details-prescription', [PatientDetailsController::class, 'patientDetailsPrescription'])->name('patient-details-prescription');

Route::get('/patient-details-visit-history', [PatientDetailsController::class, 'patientDetailsVisitHistory'])->name('patient-details-visit-history');

Route::get('/patient-details-vital-signs', [PatientDetailsController::class, 'patientDetailsVitalSigns'])->name('patient-details-vital-signs');

Route::get('/patient-details', function () {
    return view('patient-details');
})->name('patient-details');

Route::get('/patients', function () {
    return view('patients');
})->name('patients');

Route::get('/permission-settings', function () {
    return view('permission-settings');
})->name('permission-settings');

Route::get('/pharmacy', [PharmacyController::class, 'Pharmacy'])->name('pharmacy');

Route::get('/plans-billings-settings', [SettingsController::class, 'PlansBillingsSettings'])->name('plans-billings-settings');

Route::get('/preferences-settings', function () {
    return view('preferences-settings');
})->name('preferences-settings');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/search-result', function () {
    return view('search-result');
})->name('search-result');

Route::get('/security-settings', function () {
    return view('security-settings');
})->name('security-settings');

Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');

Route::get('/social-feed', function () {
    return view('social-feed');
})->name('social-feed');

Route::get('/staffs', [StaffsController::class, 'Staffs'])->name('staffs');

Route::get('/start-visits', function () {
    return view('start-visits');
})->name('start-visits');

Route::get('/starter-page', function () {
    return view('starter-page');
})->name('starter-page');

Route::get('/tables-basic', function () {
    return view('tables-basic');
})->name('tables-basic');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/todo', function () {
    return view('todo');
})->name('todo');

Route::get('/ui-accordion', function () {
    return view('ui-accordion');
})->name('ui-accordion');

Route::get('/ui-alerts', function () {
    return view('ui-alerts');
})->name('ui-alerts');

Route::get('/ui-avatar', function () {
    return view('ui-avatar');
})->name('ui-avatar');

Route::get('/ui-badges', function () {
    return view('ui-badges');
})->name('ui-badges');

Route::get('/ui-breadcrumb', function () {
    return view('ui-breadcrumb');
})->name('ui-breadcrumb');

Route::get('/ui-buttons-group', function () {
    return view('ui-buttons-group');
})->name('ui-buttons-group');

Route::get('/ui-buttons', function () {
    return view('ui-buttons');
})->name('ui-buttons');

Route::get('/ui-cards', function () {
    return view('ui-cards');
})->name('ui-cards');

Route::get('/ui-carousel', function () {
    return view('ui-carousel');
})->name('ui-carousel');

Route::get('/ui-clipboard', function () {
    return view('ui-clipboard');
})->name('ui-clipboard');

Route::get('/ui-collapse', function () {
    return view('ui-collapse');
})->name('ui-collapse');

Route::get('/ui-dragula', function () {
    return view('ui-dragula');
})->name('ui-dragula');

Route::get('/ui-dropdowns', function () {
    return view('ui-dropdowns');
})->name('ui-dropdowns');

Route::get('/ui-grid', function () {
    return view('ui-grid');
})->name('ui-grid');

Route::get('/ui-images', function () {
    return view('ui-images');
})->name('ui-images');

Route::get('/ui-lightbox', function () {
    return view('ui-lightbox');
})->name('ui-lightbox');

Route::get('/ui-links', function () {
    return view('ui-links');
})->name('ui-links');

Route::get('/ui-list-group', function () {
    return view('ui-list-group');
})->name('ui-list-group');

Route::get('/ui-modals', function () {
    return view('ui-modals');
})->name('ui-modals');

Route::get('/ui-nav-tabs', function () {
    return view('ui-nav-tabs');
})->name('ui-nav-tabs');

Route::get('/ui-offcanvas', function () {
    return view('ui-offcanvas');
})->name('ui-offcanvas');

Route::get('/ui-pagination', function () {
    return view('ui-pagination');
})->name('ui-pagination');

Route::get('/ui-placeholders', function () {
    return view('ui-placeholders');
})->name('ui-placeholders');

Route::get('/ui-popovers', function () {
    return view('ui-popovers');
})->name('ui-popovers');

Route::get('/ui-progress', function () {
    return view('ui-progress');
})->name('ui-progress');

Route::get('/ui-rangeslider', function () {
    return view('ui-rangeslider');
})->name('ui-rangeslider');

Route::get('/ui-rating', function () {
    return view('ui-rating');
})->name('ui-rating');

Route::get('/ui-ratio', function () {
    return view('ui-ratio');
})->name('ui-ratio');

Route::get('/ui-scrollbar', function () {
    return view('ui-scrollbar');
})->name('ui-scrollbar');

Route::get('/ui-scrollspy', function () {
    return view('ui-scrollspy');
})->name('ui-scrollspy');

Route::get('/ui-spinner', function () {
    return view('ui-spinner');
})->name('ui-spinner');

Route::get('/ui-sweetalerts', function () {
    return view('ui-sweetalerts');
})->name('ui-sweetalerts');

Route::get('/ui-toasts', function () {
    return view('ui-toasts');
})->name('ui-toasts');

Route::get('/ui-tooltips', function () {
    return view('ui-tooltips');
})->name('ui-tooltips');

Route::get('/ui-typography', function () {
    return view('ui-typography');
})->name('ui-typography');

Route::get('/ui-utilities', function () {
    return view('ui-utilities');
})->name('ui-utilities');

Route::get('/under-maintenance', function () {
    return view('under-maintenance');
})->name('under-maintenance');

Route::get('/user-permissions-settings', [SettingsController::class, 'UserPermissionSettings'])->name('user-permissions-settings');

Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');

Route::get('/visits', [VisitsController::class, 'visits'])->name('visits');

Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');

Route::get('/widgets', function () {
    return view('widgets');
})->name('widgets');