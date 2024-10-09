<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="main-layout-container">
        <!-- Heder Components -->
        <div  class="header border-b sticky top-0 z-50 flex items-center px-3">
            @include('components.header')
        </div>

        <!-- Main content -->
        <div class="body h-[calc(100vh-65px)] flex">
        <div class="side-bar md:block hidden rounded-lg overflow-hidden w-[300px] h-full border-t-8 border-transparent">
                @include('components.sidebar')
            </div>

            <div class="content-container w-full h-full px-3">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>