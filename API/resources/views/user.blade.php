<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Pengguna</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['name']['firstname'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
