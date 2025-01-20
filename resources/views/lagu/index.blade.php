<!-- filepath: /c:/Users/ACER/OneDrive/Dokumen/Code/Belajar-Laravel/lagu_suci/resources/views/lagu/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>List of Lagu</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')
    <div class="container mt-5">
        <h1>List of Lagu</h1>
        <form action="{{ route('lagu.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by Nomor Lagu or Nama Lagu" value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nomor Lagu</th>
                    <th>Nama Lagu</th>
                    <th>Link Lagu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lagus as $lagu)
                    <tr>
                        <td>{{ $lagu->id }}</td>
                        <td>{{ $lagu->nomor_lagu }}</td>
                        <td>{{ $lagu->nama_lagu }}</td>
                        <td>{{ $lagu->link_lagu }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
