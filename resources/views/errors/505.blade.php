{{-- resources/views/errors/500.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>505 | Server Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff3f3;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            font-size: 8rem;
            color: #dc3545;
        }

        p {
            font-size: 1.5rem;
            color: #333;
        }

        a {
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>505</h1>
    <p>Oops! No Permission.</p>
    {{-- <a href="{{ route('dashboard') }}">← Back to Dashboard</a> --}}
</body>

</html>
x
