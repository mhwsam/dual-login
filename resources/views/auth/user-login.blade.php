{{-- <!-- user-login.blade.php -->
<form action="{{ route('login.post') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center mt-5">
        <h1 class="mb-4">User Login </h1>
        
        <!-- User Login Form -->
        <div class="mb-4">
         
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" class="form-control mb-3" required>
                <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </body>
    </html>