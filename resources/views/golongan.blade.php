<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golongan</title>
    <style>
        /* Custom Colors */
        :root {
            --primary-color: #006400; /* Dark green color */
            --header-bg-color: #003300; /* Darker green for header */
            --table-header-bg-color: #006400; /* Dark gray for table header */
            --table-row-bg-color: #e0e0e0; /* Light gray for table rows */
            --table-row-hover-bg-color: #c0c0c0; /* Gray for table row hover */
            --text-color: #000000; /* Default text color */
            --link-color: #FFFFFF; /* White color for links */
            --link-hover-bg-color: #004d00; /* Darker green for hover effect */
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: var(--text-color);
            margin: 0;
            background-image: url('wallpaperflare.com_wallpaper.jpg'); /* Background image for body */

            padding: 20px;
        }

        h2 {
            text-align: center;
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
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: var(--link-color);
            background-color: var(--primary-color);
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: var(--link-hover-bg-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
            color: var(--text-color);
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
            color: var(--link-color);
        }

        table tr:nth-child(even) {
            background-color: var(--table-row-bg-color);
        }

        table tr:hover {
            background-color: var(--table-row-hover-bg-color);
        }

        .action-buttons a {
            text-decoration: none;
            color: var(--link-color);
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
    </style>
</head>
<body>
    <div class="container">
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
                        <a href="/golongan/edit/{{ $g->golongan_id }}" class="btn-edit">
                            Edit
                        </a>
                        <a href="/golongan/hapus/{{ $g->golongan_id }}" class="btn-delete">
                            Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/home">HOME</a>

</body>
</html>
