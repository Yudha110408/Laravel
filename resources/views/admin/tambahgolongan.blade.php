<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Golongan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #000000;
            margin: 0;
            padding: 20px;
        }

        h3 {
            text-align: center;
            color: #000000;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            text-decoration: none;
            color: #006400;
            font-weight: bold;
        }

        a:hover {
            color: #004d00;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 1em;
        }

        input[type="submit"] {
            background-color: #006400;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #004d00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Tambah Golongan</h3>
        <br/>
        <br/>
        <form action="/golongan/storetambah" method="post">
            {{ csrf_field() }}
            <label for="golongan_nama">Golongan Nama:</label>
            <input type="text" id="golongan_nama" name="golongan_nama" required>

            <label for="gaji_pokok">Gaji Pokok:</label>
            <input type="number" id="gaji_pokok" name="gaji_pokok" step="0.01" required>

            <label for="tunjangan_keluarga">Tunjangan Keluarga:</label>
            <input type="number" id="tunjangan_keluarga" name="tunjangan_keluarga" step="0.01" required>

            <label for="tunjangan_transport">Tunjangan Transport:</label>
            <input type="number" id="tunjangan_transport" name="tunjangan_transport" step="0.01" required>

            <label for="tunjangan_makan">Tunjangan Makan:</label>
            <input type="number" id="tunjangan_makan" name="tunjangan_makan" step="0.01" required>

            <input type="submit" value="Simpan Data">
            <a href="/golongan">Kembali</a>

        </form>
    </div>
</body>
</html>
