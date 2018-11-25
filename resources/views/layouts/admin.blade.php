<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.header')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<body>
    <div id="app">
        <main class="py-4">
            @include('components.logedNavbar')
        <main class="py-4">

        <div>
            @include('components.sidebar')
        </div>
          <div id="wrapper">
              @yield('content')
              @include('layouts.scripts')
          </div>
        </main>
        </main>
    </div>
</body>
</html>