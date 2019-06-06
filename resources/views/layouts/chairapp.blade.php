<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>

        <!-- MDB -->
        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                            @auth
                            <!-- IDE JONNEK A FONTOS NAVIGACIOS BAROK -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('overview') }}">{{ __('chairapp.overview') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages') }}">{{ __('chairapp.pages') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('chairconferences') }}">{{ __('chairapp.conferences') }}</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                  <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{__('chairapp.submissions')}}
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="{{ route('chairsubmissions') }}">{{ __('chairapp.submissions_list') }}</a>
                                      <a class="dropdown-item" href="{{ route('chairsubmissionsassign') }}">{{ __('chairapp.submissions_assign') }}</a>
                                      <a class="dropdown-item" href="{{ route('chairsubmissionsassign') }}">{{ __('chairapp.submissions_edit_assign') }}</a>
                                  </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users') }}">{{ __('chairapp.users') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories') }}">{{ __('chairapp.categories') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('chairdocuments') }}">{{ __('chairapp.documents') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('mailing') }}">{{ __('chairapp.mailing') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('settings') }}">{{ __('chairapp.settings') }}</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                  <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{__('chairapp.export')}}
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="{{ route('export_database') }}">{{ __('chairapp.database') }}</a>
                                      <a class="dropdown-item" href="{{ route('chairsubmissionsassign') }}">{{ __('chairapp.submissions_points') }}</a>
                                      <a class="dropdown-item" href="{{ route('chairsubmissionsassign') }}">{{ __('chairapp.submissions') }}</a>
                                  </div>
                                </div>
                            </li>
                            @endauth
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{__('chairapp.language')}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('locale','en') }}">
                                        {{ __('chairapp.english') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('locale','hu') }}">
                                        {{ __('chairapp.hungarian') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('locale','ro') }}">
                                        {{ __('chairapp.romanian') }}
                                    </a>
                                </div>
                            </li>
                            @guest

                            @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('editProfileChair') }}">
                                        {{ __('chairapp.edit_profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        {{ __('chairapp.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>

            <div class="container">
                Ide jonnek a szponzorok
            </div>
        </div>
    </body>
</html>
