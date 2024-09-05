<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gaji Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('zuka-zurabishvili-IzR0mZxEevE-unsplash.jpg');
            background-size: cover; /* Menyesuaikan gambar agar mencakup seluruh area latar belakang */
            background-position: center center; /* Memastikan gambar berada di tengah */
            background-image: url('wallpaperflare.com_wallpaper.jpg'); /* Background image for body */

            background-attachment: fixed; /* Gambar tetap di tempat saat menggulir halaman */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        h2 {
            color: #004d00;
            margin-top: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            margin-bottom: 20px;
            display: inline-block;
            background-color: #f0f0f0;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #e0e0e0;
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

        .center-links {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Daftar Gaji Pegawai</h2>
    <div class="center-links">
        <a href="/gaji/tambah">+ Tambah Gaji Pegawai</a>
    </div>
    <table border="1">
        <tr>
            <th>Gaji ID</th>
            <th>Pegawai ID</th>
            <th>Jumlah Gaji</th>
            <th>Jumlah Lembur</th>
            <th>Potongan</th>
            <th>Gaji Diterima</th>
            <th>Tanggal Gaji</th>
            <th>Aksi</th>
        </tr>
        @foreach ($gaji as $j)
        <tr>
            <td>{{ $j->gaji_id }}</td>
            <td>{{ $j->pegawai_id }}</td>
            <td>{{ $j->jumlah_gaji }}</td>
            <td>{{ $j->jumlah_lembur }}</td>
            <td>{{ $j->potongan }}</td>
            <td>{{ $j->gaji_diterima }}</td>
            <td>{{ $j->tanggal_gaji }}</td>
            <td>
                <a href="/gaji/edit/{{ $j->gaji_id }}">Edit</a> |
                <a href="/gaji/hapus/{{ $j->gaji_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="center-links">
        <a href="/home">HOME</a>
    </div>
</body>
</html>
