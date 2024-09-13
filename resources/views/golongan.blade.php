<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golongan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('wallpaperflare.com_wallpaper.jpg'); /* Background image for body */
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        h2 {
            color: #FFFFFF; /* Warna teks putih */
            margin-top: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #FFFFFF;
            background-color: #006400; /* Warna hijau gelap sesuai tabel golongan */
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #004d00; /* Warna hijau yang lebih gelap saat hover */
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

        .action-buttons a {
            text-decoration: none;
            color: #FFFFFF;
            padding: 5px 10px;
            border-radius: 5px;
            margin: 2px;
            display: inline-block;
            font-size: 0.9em;
        }

        .btn-edit {
            background-color: #f0ad4e;
        }

        .btn-edit:hover {
            background-color: #ec971f;
        }

        .btn-delete {
            background-color: #d9534f;
        }

        .btn-delete:hover {
            background-color: #c9302c;
        }

        .button-container {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Golongan</h2>
    <div class="button-container">
        <a href="/golongan/tambah">+ Tambah Golongan Baru</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID Golongan</th>
                <th>Nama Golongan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan Keluarga</th>
                <th>Tunjangan Transport</th>
                <th>Tunjangan Makan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($golongan as $g)
            <tr>
                <td>{{ $g->golongan_id }}</td>
                <td>{{ $g->golongan_nama }}</td>
                <td>{{ $g->gaji_pokok }}</td>
                <td>{{ $g->tunjangan_keluarga }}</td>
                <td>{{ $g->tunjangan_transport }}</td>
                <td>{{ $g->tunjangan_makan }}</td>
                <td class="action-buttons">
                    <a href="/golongan/edit/{{ $g->golongan_id }}" class="btn-edit">Edit</a>
                    <a href="/golongan/hapus/{{ $g->golongan_id }}" class="btn-delete" onclick="return confirmDelete();">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="button-container">
        <a href="/home">HOME</a>
    </div>

    <script>
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus data ini?');
        }
    </script>
</body>
</html>
