<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinic Appointment System</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    @include('Links.links')
    @livewireStyles
</head>

<body class="wrapper layout-fixed  light-mode">
    <div class="preloader flex-column justify-content-center align-items-center ">
        <img src="" class="" alt="AdminLTELogo" height="50" width="50">
    </div>

    @include('includes.navbar')

    {{-- This is for Side Bar --}}
    @include('Admin.SideAdmin')

    {{-- This is for the Main Content --}}

    <div class="content-wrapper">
        <div class="content">
            @yield('main-content')
        </div>
    </div>
    @include('Links.scripts')
    @livewireScripts
</body>

</html>