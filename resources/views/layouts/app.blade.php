<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Dashboard</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="d-flex">
            @include('partials.sidebar')

            <div class="content-wrapper flex-grow-1 d-flex flex-column">
                @include('partials.topbar')

                <main class="flex-grow-1">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>

                @include('partials.footer')
            </div>
        </div>

        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>