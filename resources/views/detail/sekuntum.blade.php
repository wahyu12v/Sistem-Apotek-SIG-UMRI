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
    .img {
        background-image: url('https://media.istockphoto.com/id/1135284188/id/foto/jika-anda-membutuhkan-itu-di-sini.jpg?s=612x612&w=0&k=20&c=R3bFJz3fpjOgWeHZ5XYTJfrN8GbKflsTtkXKngimtdA=');
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-blend-mode: overlay;
        background-color: rgba(0, 0, 0, 0.397);
    }
</style>

</head>

<body>
    <header>
        @include('partials.navbar')
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center img text-white">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
                <h2 class="display-3 fw-bold">Detail Apotek</h2>
                <h3 class="fw-normal mb-3 text-light">Get in Contact</h3>

            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </header>


<main>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-lg-6">
                <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Apotek Sekuntum</h2>
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z" />
                        </svg>
                        <span class="text-body-secondary p-2 fs-6">Jl. Sekuntum No.148A, Kelurahan Sialang Sakti, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28292</span>
                    </li>

                    <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        <span class="text-body-secondary p-2 fs-6">82169974460</span>
                    </li>

                    <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-clock" viewBox="0 0 16 16">
                            <path
                                d="M8 1.5a6.5 6.5 0 0 0-6.5 6.5c0 3.58 2.91 6.5 6.5 6.5s6.5-2.92 6.5-6.5S11.58 1.5 8 1.5zm0 12a5.5 5.5 0 0 1-5.5-5.5c0-3.033 2.467-5.5 5.5-5.5s5.5 2.467 5.5 5.5a5.5 5.5 0 0 1-5.5 5.5z" />
                            <path
                                d="M8 3a.5.5 0 0 0-1 0v5.5a.5.5 0 0 0 1 0z" />
                            <path
                                d="M14.5 8a.5.5 0 0 0-1 0V9H9a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-2.5V8a.5.5 0 0 0-1 0v2.5a.5.5 0 0 0 1 0V9h2.5a.5.5 0 0 0 0-1z" />
                        </svg>
                        <span class="text-body-secondary p-2 fs-6">08:00 - 22:00</span>
                    </li>

                    <!-- Kordinat -->

                    <li class="list-group-item">
                        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="text-body-secondary p-2 fs-6">Lat : 0.5025543822316741</span>
                    </li>
                    <li class="list-group-item">
                        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="text-body-secondary p-2 fs-6">Long :   10,150,362,780,678,700</span>
                    </li>


                 
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ asset('images/apotek/APOTEK SEKUNTUM.jpeg') }}" alt="Apotek Hangtuah Bertuah" class="img-fluid" style="height: 70vh; width: 100%;">
            </div>
            <a href="{{ url('apotek') }}" class="btn btn-dark mb-3">Kembali</a>
        </div>
    </div>
</main>




    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
