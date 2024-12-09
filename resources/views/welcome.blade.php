<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center mt-5">
        <h1 class="mb-4">Welcome to Our Application!</h1>
        <p class="lead mb-4">Choose your role to get started:</p>
        <div class="d-flex justify-content-center">
            <!-- User Login Link -->
            <a href="{{ route('login') }}" class="btn btn-primary mx-2">User Login</a>
            <a href="{{ route('register') }}" class="btn btn-success mx-2">User Register</a> <!-- User Register Link -->
            
            <!-- Admin Login Link -->
            <a href="{{ route('admin.login') }}" class="btn btn-secondary mx-2">Admin Login</a>
            <a href="{{ route('admin.register') }}" class="btn btn-warning mx-2">Admin Register</a> <!-- Admin Register Link -->
        </div>
    </div>
</body>
</html>
