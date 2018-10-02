<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ trans('strings.project_name') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{ asset('js/jquery.tablesorter.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>{{ trans('strings.project_name') }}</h1>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="content">@yield('content')</section>
                    </div>
                </div>    
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>{{ trans('strings.copyright') }}</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    @yield('scripts')
</html>
