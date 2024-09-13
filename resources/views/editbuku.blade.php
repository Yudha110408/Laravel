<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            background-image: url('wallpaperflare.com_wallpaper.jpg'); /* Background image for body */
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
    <h3>Update Book Data</h3>
    <a href="/buku">Back</a>
    <br/><br/>

    <form action="/buku/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $buku->buku_id }}">
        
        <label for="judul">Title:</label>
        <input type="text" required="required" name="judul" id="judul" value="{{ $buku->buku_judul }}">

        <label for="penulis">Author:</label>
        <input type="text" required="required" name="penulis" id="penulis" value="{{ $buku->buku_penulis }}">

        <label for="tahun_terbit">Year of Publication:</label>
        <input type="number" required="required" name="tahun_terbit" id="tahun_terbit" value="{{ $buku->buku_tahun_terbit }}">

        <label for="penerbit">Publisher:</label>
        <textarea required="required" name="penerbit" id="penerbit">{{ $buku->buku_penerbit }}</textarea>
        
        <input type="submit" value="Save Data">
    </form>
</body>
</html>
