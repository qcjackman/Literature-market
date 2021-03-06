<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('explore') }}">{{ trans('view.nav.explore') }}</a></li>
                        <li><a href="{{ route('writing') }}">{{ trans('view.nav.writing') }}</a></li>
                        <li><a href="{{ route('community') }}">{{ trans('view.nav.community') }}</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Search box -->
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="AI BIGDATA">
                            </div>
                            <button type="submit" class="btn btn-default">{{ trans('view.nav.search') }}</button>
                        </form>
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">{{ trans('view.login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ trans('view.register') }}</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ trans('view.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer>
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <ul class="nav nav-pills">
                            <li role="presentation"><a href="#">{{ trans('view.footer.about') }}</a></li>
                            <li role="presentation"><a href="{{ route('help') }}">{{ trans('view.footer.help') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav nav-pills navbar-right">
                            <li class="dropdown dropup">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Config::get('app.locales')[App::getLocale()] }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        @foreach (Config::get('app.locales') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                                <a href="{{ route('language.change', $lang) }}">{{ $language }}</a>
                                            @endif
                                        @endforeach
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
