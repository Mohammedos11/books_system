<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')

</head>

<body>
    @include('layouts.side-bar')




    <div class="main-content">



            <div class="d-flex justify-content-between align-items-center p-3 bg-light w-100">

                <h5 class="mb-0">
                    Welcome to your admin panel</h5>

                @auth
                    <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                        <img src="{{ asset('user_images/' . auth()->user()->image) }}" alt="Profile" class="rounded-circle"
                            width="40" height="40">
                        <span class="ms-2 fw-semibold">{{ auth()->user()->name }}</span>
                    </a>
                @endauth
            </div>

        <hr>
        @yield('content')
    </div>


    @include('layouts.footer-meta')

    @yield('js')


</body>

</html>
