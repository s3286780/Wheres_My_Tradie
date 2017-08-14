<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
       @include('inc.navbar')
        
        <div class="container">
        @include('inc.messages')
            @yield('content')
            
            <footer>
                @include('inc.footer')
            </footer>
        </div>
    </div>
    @include('inc.scripts')

</body>
</html>

