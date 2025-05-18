{{-- resources/views/errors/404.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404 | Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h1 {
            font-size: 10rem;
            color: #dc3545;
        }

        p {
            font-size: 1.5rem;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>404</h1>
    <p>Oops! The page you're looking for doesn't exist.</p>
    <a href="{{ route('dashboard') }}">← Go back to Dashboard</a>
</body>

</html>
