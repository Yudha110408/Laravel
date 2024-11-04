<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create & Insert Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h3 {
            color: #004d00;
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            margin-bottom: 20px;
            display: inline-block;
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
            width: 100%;
            max-width: 500px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #004d00;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #003300;
        }

    </style>
</head>
<body>

    <form action="/gaji/storetambah" method="post">
        {{ csrf_field() }}
        <h3>Data Gaji</h3>

        <label for="pegawai_id">Pegawai ID:</label>
        <input type="number" id="pegawai_id" name="pegawai_id" required="required">

        <label for="jumlah_gaji">Jumlah Gaji:</label>
        <input type="number" id="jumlah_gaji" name="jumlah_gaji" required="required">

        <label for="jumlah_lembur">Jumlah Lembur:</label>
        <input type="number" id="jumlah_lembur" name="jumlah_lembur" required="required">

        <label for="potongan">Potongan:</label>
        <input type="number" id="potongan" name="potongan" required="required">

        <label for="gaji_diterima">Gaji Diterima:</label>
        <input type="number" id="gaji_diterima" name="gaji_diterima" required="required">

        <label for="tanggal_gaji">Tanggal Gaji:</label>
        <input type="date" id="tanggal_gaji" name="tanggal_gaji" required="required">

        <input type="submit" value="Simpan Data">
        <a href="/gaji">Kembali</a>

    </form>

</body>
</html>
