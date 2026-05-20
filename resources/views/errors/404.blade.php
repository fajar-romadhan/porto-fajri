<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 — Halaman Tidak Ditemukan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #FFFFFF;
            font-family: 'Inter', sans-serif;
            color: #111111;
            text-align: center;
            padding: 2rem;
        }
        .error-code {
            font-family: 'Playfair Display', serif;
            font-size: 8rem;
            font-weight: 400;
            color: #D4AF37;
            line-height: 1;
            margin-bottom: 1rem;
        }
        .error-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 400;
            margin-bottom: 1rem;
        }
        .error-desc {
            color: #666666;
            font-size: 1rem;
            margin-bottom: 2.5rem;
            max-width: 400px;
            line-height: 1.6;
        }
        .back-link {
            display: inline-block;
            padding: 0.8rem 2rem;
            border: 1px solid #111111;
            color: #111111;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.8rem;
            transition: all 0.3s ease;
        }
        .back-link:hover {
            background: #111111;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="error-code">404</div>
    <h1 class="error-title">Halaman Tidak Ditemukan</h1>
    <p class="error-desc">Maaf, halaman yang Anda cari tidak ada atau sudah dipindahkan.</p>
    <a href="/" class="back-link">Kembali ke Beranda</a>
</body>
</html>
