<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Gaji Karyawan</title>
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

        input[type="number"], input[type="text"], input[type="date"] {
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
    <h3>Update Data Gaji Karyawan</h3>
    <a href="/gaji">Kembali</a>
    <br/><br/>

    @foreach ($gaji as $j)
    <form action="/gaji/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $j->gaji_id }}">

        <label for="pegawai_id">Pegawai ID:</label>
        <input type="number" required="required" name="pegawai_id" id="pegawai_id" value="{{ $j->pegawai_id }}">

        <label for="jumlah_gaji">Jumlah Gaji:</label>
        <input type="number" required="required" name="jumlah_gaji" id="jumlah_gaji" value="{{ $j->jumlah_gaji }}">

        <label for="jumlah_lembur">Jumlah Lembur:</label>
        <input type="number" required="required" name="jumlah_lembur" id="jumlah_lembur" value="{{ $j->jumlah_lembur }}">

        <label for="potongan">Potongan:</label>
        <input type="number" required="required" name="potongan" id="potongan" value="{{ $j->potongan }}">

        <label for="gaji_diterima">Gaji Diterima:</label>
        <input type="number" required="required" name="gaji_diterima" id="gaji_diterima" value="{{ $j->gaji_diterima }}">

        <label for="tanggal_gaji">Tanggal Gaji:</label>
        <input type="date" required="required" name="tanggal_gaji" id="tanggal_gaji" value="{{ $j->tanggal_gaji }}">

        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>
