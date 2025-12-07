@if (!Route::is(['layout-mini', 'layout-rtl', 'layout-hoverview', 'layout-hidden', 'layout-fullwidth', 'layout-dark']))
<html lang="en">
@endif

@if (Route::is(['layout-mini']))
<html lang="en" data-layout="mini">
@endif

@if (Route::is(['layout-dark']))
<html lang="en" data-bs-theme="dark">
@endif

@if (Route::is(['layout-rtl']))
<html lang="en" dir="rtl">
@endif

@if (Route::is(['layout-hoverview']))
<html lang="en" data-layout="hoverview">
@endif

@if (Route::is(['layout-hidden']))
<html lang="en" data-layout="hidden">
@endif

@if (Route::is(['layout-fullwidth']))
<html lang="en" data-layout="full-width">
@endif