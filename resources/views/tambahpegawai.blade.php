<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Insert Database Pegawai</title>
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

        h3 {
            margin-bottom: 20px;
            color: #004d00;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            margin-bottom: 20px;
            display: inline-block;
            font-size: 1.1em;
            background-color: #e0e0e0;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #cfcfcf;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="number"], textarea {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            background-color: #004d00;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #003300;
        }
    </style>
</head>
<body>
    <h3>Tambah Data Pegawai</h3>
 
    <br/><br/>

    <form action="/pegawai/storetambah" method="post">
        {{ csrf_field() }}

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required="required">

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" required="required">

        <label for="umur">Umur:</label>
        <input type="number" name="umur" id="umur" required="required">

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required="required"></textarea>

        <input type="submit" value="Simpan Data">
        <a href="/pegawai">Kembali</a>
    </form>
</body>
</html>
