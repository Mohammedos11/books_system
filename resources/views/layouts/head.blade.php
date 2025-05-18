<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('bar-title')</title>
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />




<style>
    body {
        min-height: 100vh;
        display: flex;
    }

    .sidebar {
        width: 250px;
        background-color: #343a40;
        color: white;
        padding-top: 20px;
    }

    .sidebar a {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px;
        text-decoration: none;
        color: #333;
    }

    .sidebar a i {
        width: 20px;
        text-align: center;
    }


    .sidebar a {
        color: white;
        display: block;
        padding: 10px 20px;
        text-decoration: none;
    }

    .sidebar a:hover {
        background-color: #495057;
    }

    .main-content {
        flex: 1;
        padding: 20px;
        background-color: #f8f9fa;
    }

    footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 10px;
    }

    tr {
        text-align: center;
    }
</style>
