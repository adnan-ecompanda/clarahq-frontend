<!DOCTYPE html>
@include('layout.partials.theme-settings')

<head>
    @include('layout.partials.title-meta')

    @include('layout.partials.head-css')
</head>

@include('layout.partials.body')

<!-- Start Main Wrapper -->
<div class="main-wrapper">

    @include('layout.partials.menu')

        @yield('content') 

    @component('components.modal-popup')
    @endcomponent

</div>
<!-- End Main Wrapper -->

@include('layout.partials.vendor-scripts')
</body>
</html>
