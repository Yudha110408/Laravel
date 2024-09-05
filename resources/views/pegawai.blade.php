<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <style>
        /* Custom Colors */
        :root {
            --primary-color: #006400; /* Dark green color */
            --header-bg-color: #003300; /* Darker green for header */
            --footer-bg-color: #003300; /* Darker green for footer */
            --link-color: #FFFFFF; /* White color for links */
            --link-hover-bg-color: #004d00; /* Darker green for hover effect */
            --text-color: #000000; /* Default text color */
            --table-bg-color: #f0f0f0; /* Light gray for table background */
            --table-header-bg-color: #006400; /* Dark gray for table header */
            --table-row-bg-color: #FFFFFF; /* Light gray for table rows */
            --table-row-hover-bg-color: #c0c0c0; /* Gray for table row hover */
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: var(--text-color);
            margin: 0;
            background-image: url('wallpaperflare.com_wallpaper.jpg'); /* Background image for body */

            padding: 20px;
            text-align: center; /* Center-align all text */
        }

        h2 {
            color: var(--text-color);
            margin-bottom: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .button-container {
            margin-bottom: 20px;
        }

        a.button {
            text-decoration: none;
            color: var(--text-color);
            background-color: var(--primary-color);
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: var(--link-hover-bg-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: var(--table-bg-color);
            color: var(--text-color);
            margin-top: 20px;
            border-radius: 5px;
            overflow: hidden;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
            border: 1px solid var(--text-color);
        }

        table th {
            background-color: var(--table-header-bg-color);
        }

        table tr:nth-child(even) {
            background-color: var(--table-row-bg-color);
        }

        table tr:hover {
            background-color: var(--table-row-hover-bg-color);
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

        .btn-warning {
            background-color: #f0ad4e;
        }

        .btn-warning:hover {
            background-color: #ec971f;
        }

        .btn-danger {
            background-color: #d9534f;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pegawai</h2>
        <div class="button-container">
            <a href="/pegawai/tambah" class="button">+ Tambah Pegawai Baru</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_id }}</td>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td class="action-buttons">
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn-warning">
                            Edit
                        </a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn-danger">
                            Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/home">HOME</a>
    </div>
</body>
</html>
