{{-- <form action="{{ route('admin.register.post') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
</form> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center mt-5">
        <h1 class="mb-4">Admin Registration</h1>
        
        <!-- Admin Registration Form -->
        <div class="mb-4">
            <form action="{{ route('admin.register.post') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name" class="form-control mb-3" required>
                <input type="email" name="email" placeholder="Email" class="form-control mb-3" required>
                <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control mb-3" required>
                <button type="submit" class="btn btn-success">Register</button>
            </form>
        </div>

        <!-- Link to Admin Login -->
        <div class="mt-4">
            <p>Already have an account? <a href="{{ route('admin.login') }}" class="btn btn-secondary">Admin Login</a></p>
        </div>

     
    </div>
</body>
</html>
