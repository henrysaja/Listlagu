<!-- filepath: /c:/Users/ACER/OneDrive/Dokumen/Code/Belajar-Laravel/lagu_suci/resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')
    <div class="container mt-5">
        <h1>Dashboard</h1>
        <p>Welcome to the Lagu App Dashboard. Use the navigation bar to manage Lagu records.</p>
        <a href="{{ url('/lagu') }}" class="btn btn-primary">View List of Lagu</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
