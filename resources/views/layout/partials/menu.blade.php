    @if (!Route::is(['login', 'sign-up', 'forgot-password', 'change-password', 'error-404', 'error-500', 'coming-soon', 'under-maintenance', 'lock-screen']))
        @include('layout.partials.topbar')

        @include('layout.partials.sidebar')
    @endif