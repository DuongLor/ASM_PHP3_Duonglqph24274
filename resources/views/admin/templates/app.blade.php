<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    @include('admin.templates.link_header')

    @yield('css_header_custom')
</head>

<body>
    @include('admin.templates.navbar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@yield('title')</h1>
        </div>
        @include('admin.templates.error')
        @yield('content')

    </main>
    </div>
    </div>
    @include('admin.templates.footer')

    @yield('js_footer_custom')

    @include('admin.templates.link_footer')
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
</body>

</html>
