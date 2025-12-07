@if (!Route::is(['layout-mini']))
<body>
@endif

@if (Route::is(['layout-mini']))
<body class="mini-sidebar">
@endif