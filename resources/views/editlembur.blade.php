<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Update Data Lembur</title>
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

        input[type="number"], input[type="text"] {
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
    <h3>Update Data Lembur Karyawan</h3>
    <a href="/lembur">Kembali</a>
    <br/><br/>

    @foreach ($lembur as $r)
    <form action="/lembur/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $r->lembur_id }}">

        <label for="pegawai_id">Pegawai ID:</label>
        <input type="number" required="required" name="pegawai_id" id="pegawai_id" value="{{ $r->pegawai_id }}">

        <label for="bulan_lembur">Bulan Lembur:</label>
        <input type="text" required="required" name="bulan_lembur" id="bulan_lembur" value="{{ $r->bulan_lembur }}">

        <label for="jumlah_lembur">Jumlah Lembur:</label>
        <input type="number" required="required" name="jumlah_lembur" id="jumlah_lembur" value="{{ $r->jumlah_lembur }}">

        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>
