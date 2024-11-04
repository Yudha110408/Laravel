<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lembur Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('wallpaperflare.com_wallpaper.jpg'); /* Background image for body */

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #004d00;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            margin-bottom: 20px;
            display: inline-block;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #004d00;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td a {
            color: #0066cc;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Daftar Lembur Pegawai</h2>
    <a href="/lembur/tambah">+ Menambahkan Jumlah Lembur</a>
    <br/><br/>
    <table border="1">
        <tr>
            <th>Lembur ID</th>
            <th>Pegawai ID</th>
            <th>Bulan Lembur</th>
            <th>Jumlah Lembur</th>
            <th>Aksi</th>
        </tr>
        @foreach ($lembur as $r)
        <tr>
            <td>{{ $r->lembur_id }}</td>
            <td>{{ $r->pegawai_id }}</td>
            <td>{{ $r->bulan_lembur }}</td>
            <td>{{ $r->jumlah_lembur }}</td>
            <td>
                <a href="/lembur/edit/{{ $r->lembur_id }}">Edit</a> |
                <a href="/lembur/hapus/{{ $r->lembur_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/home">Home</a>
</body>
</html>
