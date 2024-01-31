<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Obat Pintar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        iframe {
            flex: 1;
            border: 0;
        }
    </style>
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>

    <div class="container mt-4">
        <h2 class="text-center">Apotek Obat Pintar</h2>
        <p class="text-center">Sistem obat pintar adalah solusi modern yang memberikan informasi terkini tentang data dan lokasi apotek. Dengan teknologi canggih, sistem ini mempermudah akses ke informasi yang dibutuhkan untuk mendapatkan obat dengan cepat dan efisien..</p>
    </div>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7979.409315588318!2d101.40352176177888!3d0.43248474856650676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1704726224439!5m2!1sid!2sid"
        width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
