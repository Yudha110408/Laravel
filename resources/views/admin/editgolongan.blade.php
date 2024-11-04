<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Golongan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h3 {
            margin-bottom: 20px;
            color: #004d00;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            margin-bottom: 20px;
            display: inline-block;
            font-size: 1.1em;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="number"] {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
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
    <h3>Update Data Golongan</h3>
    <a href="/golongan">Kembali</a>
    <br/><br/>

    @foreach ($golongan as $g)
    <form action="/golongan/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $g->golongan_id }}">
        
        <label for="golongan_nama">Golongan Nama:</label>
        <input type="text" required="required" name="golongan_nama" id="golongan_nama" value="{{ $g->golongan_nama }}">

        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number" required="required" name="gaji_pokok" id="gaji_pokok" value="{{ $g->gaji_pokok }}">

        <label for="tunjangan_keluarga">Tunjangan Keluarga:</label>
        <input type="number" required="required" name="tunjangan_keluarga" id="tunjangan_keluarga" value="{{ $g->tunjangan_keluarga }}">

        <label for="tunjangan_transport">Tunjangan Transport:</label>
        <input type="number" required="required" name="tunjangan_transport" id="tunjangan_transport" value="{{ $g->tunjangan_transport }}">

        <label for="tunjangan_makan">Tunjangan Makan:</label>
        <input type="number" required="required" name="tunjangan_makan" id="tunjangan_makan" value="{{ $g->tunjangan_makan }}">
        
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
    <a href="/home">HOME</a>
</body>
</html>
