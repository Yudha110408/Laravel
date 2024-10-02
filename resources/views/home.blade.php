<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUS</title>
    <style>
        /* Custom Colors */
        :root {
            --primary-color: #006400; /* Dark green color */
            --header-bg-color: rgba(0, 0, 0, 0.6); /* Semi-transparent overlay for header */
            --footer-bg-color: rgba(0, 0, 0, 0.8); /* Darker for footer */
            --link-color: #FFFFFF; /* White color for links */
            --link-hover-bg-color: #32CD32; /* Light green for hover effect */
            --text-color: #FFFFFF; /* Darker text color */
            --shadow-color: rgba(0, 0, 0, 0.1); /* Shadow effect color */
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: var(--text-color);
            background-image: url('wallpaperflare.com_wallpaper.jpg'); /* Background image for body */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-blur: 5px;
            text-align: center;
        }

        header {
            background: var(--header-bg-color);
            padding: 40px;
            color: var(--link-color);
            box-shadow: 0 4px 8px var(--shadow-color);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--header-bg-color);
            opacity: 0.7;
        }

        header h1 {
            position: relative;
            z-index: 1;
            font-weight: bolder; /* Mengatur ketebalan font menjadi lebih tebal */
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 6px 12px var(--shadow-color);
        }

        h1, h2 {
            margin: 0 0 20px;
        }

        p {
            font-size: 1.2em;
            line-height: 1.8;
            margin: 20px 0;
            color: var(--text-color);
        }

        .text-black {
            color: #000000; /* Black color for specific text */
        }

        .text-bold {
            font-weight: bold; /* Mengatur ketebalan font menjadi tebal */
        }

        .list-group {
            margin: 30px 0;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        a {
            color: var(--link-color);
            background-color: var(--primary-color);
            padding: 15px 20px;
            margin: 5px 0;
            text-decoration: none;
            border-radius: 50px;
            transition: background-color 0.4s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px var(--shadow-color);
        }

        a:hover {
            background-color: var(--link-hover-bg-color);
            transform: scale(1.05);
        }

        footer {
            background: var(--footer-bg-color);
            color: var(--link-color);
            padding: 20px;
            font-size: 1.2em;
            box-shadow: 0 -4px 8px var(--shadow-color);
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .text-light {
            color: var(--link-color);
            font-weight: bold;
        }

        .text-light:hover {
            color: #cccccc;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome To PERPUS SMKN 21 JAKARTA</h1>
    </header>
    <main>
        <p class="text-black text-bold"><strong>Selamat Datang Di Perpustakaan SMKN 21 Jakarta</strong></p>
        <h2 class="text-black text-bold">INFO PERPUS</h2>
        <div class="list-group">
            <a href="/">LogOut</a>
            <a href="buku">Buku</a>

        </div>
    </main>
    <footer>
        <p>Pelayanan kami pasti baik? Hubungi kami untuk beri penilaian <a href="mailto:yudhamatraman@gmail.com" class="text-light">yudhamatraman@gmail.com</a></p>
    </footer>
</body>
</html>
