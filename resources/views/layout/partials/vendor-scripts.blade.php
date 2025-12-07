    <!-- jQuery -->
    <script src="{{URL::asset('build/js/jquery-3.7.1.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{URL::asset('build/js/bootstrap.bundle.min.js')}}"></script>    

	<!-- Simplebar JS -->
	<script src="{{URL::asset('build/plugins/simplebar/simplebar.min.js')}}"></script>

@if (Route::is(['index', 'layout-dark', 'layout-fullwidth', 'layout-hidden', 'layout-hoverview', 'layout-rtl', 'layout-mini' ]))
    <!-- Daterangepikcer JS -->
	<script src="{{URL::asset('build/js/moment.min.js')}}"></script>
	<script src="{{URL::asset('build/plugins/daterangepicker/daterangepicker.js')}}"></script>
@endif         

@if (Route::is(['add-doctors', 'add-patient', 'all-doctors-list', 'appointments', 'calendar', 'edit-doctors', 'edit-patient', 'form-pickers', 'index', 'kanban-view', 'layout-dark', 'layout-fullwidth', 'layout-hidden', 'layout-hoverview', 'layout-mini', 'layout-rtl', 'notes', 'patient-details-appointments', 'patient-details-visit-history', 'patients', 'pharmacy', 'plans-billings-settings', 'staffs', 'start-visits', 'todo', 'visits', 'widgets']))
    <!-- Flatpickr JS -->
    <script src="{{URL::asset('build/plugins/flatpickr/flatpickr.min.js')}}"></script>
@endif

@if (Route::is(['all-doctors-list', 'appointment-consultation', 'data-tables', 'lab-results', 'widgets']))
    <!-- Datatable JS -->
    <script src="{{URL::asset('build/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/datatables/js/dataTables.bootstrap5.min.js')}}"></script>
@endif

@if (Route::is(['calendar']))
    <!-- Fullcalendar JS -->
    <script src="{{URL::asset('build/plugins/fullcalendar/index.global.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/fullcalendar/calendar-data.js')}}"></script>
@endif

@if (Route::is(['file-manager', 'social-feed']))
    <!-- Sticky Sidebar JS -->
    <script src="{{URL::asset('build/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
    <script src="{{URL::asset('build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
@endif

@if (Route::is(['email-compose', 'form-editors', 'kanban-view', 'notes', 'todo', 'widgets']))
    <!-- Quill Editor JS -->
    <script src="{{URL::asset('build/plugins/quill/quill.min.js')}}"></script>
    <script src="{{URL::asset('build/js/form-quill.js')}}"></script>
@endif

@if (Route::is(['video-call']))
    <!-- Swiper JS -->
    <script src="{{URL::asset('build/plugins/swiper/swiper-bundle.min.js')}}"></script>
@endif

@if (Route::is(['chart-apex', 'index', 'layout-dark', 'layout-fullwidth', 'layout-hidden', 'layout-hoverview', 'layout-mini', 'layout-rtl', 'widgets']))
    <!-- ApexChart JS -->
    <script src="{{URL::asset('build/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/apexchart/chart-data.js')}}"></script>
@endif

@if (Route::is(['chart-c3']))
    <!-- Chart JS -->
    <script src="{{URL::asset('build/plugins/c3-chart/d3.v5.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/c3-chart/c3.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/c3-chart/chart-data.js')}}"></script>
@endif

@if (Route::is(['chart-flot']))
    <!-- Chart JS -->
    <script src="{{URL::asset('build/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('build/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{URL::asset('build/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('build/plugins/flot/chart-data.js')}}"></script>
@endif

@if (Route::is(['chart-js', 'index', 'layout-dark', 'layout-fullwidth', 'layout-hidden', 'layout-hoverview', 'layout-mini', 'layout-rtl', 'widgets']))
    <!-- Chart JS -->
    <script src="{{URL::asset('build/plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/chartjs/chart-data.js')}}"></script>
@endif

@if (Route::is(['chart-morris']))
    <!-- Chart JS -->
    <script src="{{URL::asset('build/plugins/morris/raphael-min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/morris/morris.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/morris/chart-data.js')}}"></script>
@endif

@if (Route::is(['chart-peity']))
    <!-- Chart JS -->
    <script src="{{URL::asset('build/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/peity/chart-data.js')}}"></script>
@endif

@if (Route::is(['form-fileupload']))
    <!-- Dropzone File Js -->
    <script src="{{URL::asset('build/plugins/dropzone/dropzone-min.js')}}"></script>

    <!-- File Upload js -->
    <script src="{{URL::asset('build/js/form-fileupload.js')}}"></script>
@endif

@if (Route::is(['form-mask']))
    <!-- Inputmask JS -->
	<script src="{{URL::asset('build/plugins/inputmask/inputmask.min.js')}}"></script>
@endif

@if (Route::is(['form-wizard']))
    <!-- Wizrd JS -->
	<script src="{{URL::asset('build/plugins/vanilla-wizard/js/wizard.min.js')}}"></script>

    <!-- Wizard JS -->
    <script src="{{URL::asset('build/js/form-wizard.js')}}"></script>
@endif

@if (Route::is(['search-result', 'social-feed', 'ui-lightbox']))
    <!-- Glightbox JS -->
    <script src="{{URL::asset('build/plugins/lightbox/glightbox.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/lightbox/lightbox.js')}}"></script>
@endif

@if (Route::is(['kanban-view', 'ui-dragula']))
    <!-- Dragula Js-->
    <script src="{{URL::asset('build/plugins/dragula/dragula.min.js')}}"></script>
    <script src="{{URL::asset('build/js/dragula.js')}}"></script>
@endif

@if (Route::is(['ui-clipboard']))
    <!-- Clipboard JS -->
    <script src="{{URL::asset('build/plugins/clipboard/clipboard.min.js')}}"></script>
    <script src="{{URL::asset('build/js/clipboard.js')}}"></script>
@endif

@if (Route::is(['ui-rangeslider']))
    <!-- noUiSlider js -->
    <script src="{{URL::asset('build/plugins/nouislider/nouislider.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/wnumb/wNumb.min.js')}}"></script>

    <!-- Rangeslider JS -->
    <script src="{{URL::asset('build/js/range-slider.js')}}"></script>
@endif

@if (Route::is(['ui-rating']))
    <!-- Rater JS -->
    <script src="{{URL::asset('build/plugins/rater-js/index.js')}}"></script>
    <script src="{{URL::asset('build/js/ratings.js')}}"></script>
@endif

@if (Route::is(['ui-sweetalerts']))
    <!-- Sweet Alerts js -->
    <script src="{{URL::asset('build/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{URL::asset('build/js/sweetalerts.js')}}"></script>
@endif

@if (Route::is(['add-doctors', 'add-patient', 'appointments', 'all-doctors-list', 'appearance-settings', 'appointment-consultation', 'change-password', 'calendar', 'edit-doctors', 'edit-patient', 'email-compose', 'form-select', 'general-settings', 'index', 'kanban-view', 'layout-dark', 'layout-fullwidth', 'layout-hidden', 'layout-hoverview', 'layout-mini', 'layout-rtl', 'notes', 'patient-details-appointments', 'patient-details-visit-history', 'patients', 'pharmacy', 'plans-billings-settings', 'security-settings', 'staffs', 'start-visits', 'todo', 'visits', 'widgets']))
    <!-- Select2 JS -->
    <script src="{{URL::asset('build/plugins/select2/js/select2.min.js')}}"></script>
@endif

@if (Route::is(['chat']))
    <!-- Coming Soon JS -->
    <script src="{{URL::asset('build/js/chat.js')}}"></script>
@endif

@if (Route::is(['coming-soon']))
    <!-- Coming Soon JS -->
    <script src="{{URL::asset('build/js/coming-soon.js')}}"></script>
@endif

    <!-- Main JS -->
    <script src="{{URL::asset('build/js/script.js')}}"></script>