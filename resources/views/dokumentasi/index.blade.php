<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Obat Pintar - Dokumentasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>

    <main>
        <div class="container mt-4 mb-4">
            <h2 class="text-center">Dokumentasi</h2>
            <p class="text-center">Dokumentasi santai dari kelompok kita! Memberikan info terkini seputar data dan lokasi apotek dengan teknologi canggih. Jadi, lebih gampang deh buat dapetin obat dengan cepat dan efisien.</p>
        </div>

        <div class="container">
            <div class="row">
            <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/rahman.jpg') }}" alt="Kasuari farma" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/Kasuari farma.jpg') }}" alt="Kasuari farma" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/keluarga cabang 3.jpg') }}" alt="keluarga cabang 3" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/keluarga cabang 9.jpg') }}" alt="Keluarga cabang 9" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/panam.jpg') }}" alt="panam" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/stifar mandiri.jpg') }}" alt="stifar mandiri" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/zhafira.jpg') }}" alt="zhafira" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/dr septika.jpg') }}" alt="dr septika" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/fachri.jpg') }}" alt="fachri" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/insan farm.jpg') }}" alt="insan farm" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/stifar mandiri2.jpg') }}" alt="insan farm" class="img-fluid" style="height: 60vh;">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/dokumentasi/rahman2.jpg') }}" alt="insan farm" class="img-fluid" style="height: 60vh;">
                </div>
            </div>
        </div>
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
