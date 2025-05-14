<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.side-bar')

    <!-- Main Content -->
    <div class="main-content">
        <h1>@yield('title')</h1>
        <p>Welcome to your admin panel. <span style="color:red;">Mohammed</span></p>
        <hr>

        @yield('content')
    </div>

    @include('layouts.footer-meta')

</body>

</html>
