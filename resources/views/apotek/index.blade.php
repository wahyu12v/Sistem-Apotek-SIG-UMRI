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
                <h1 class="display-3 fw-bold">Data Apotek</h1>
                <h3 class="fw-normal mb-3 text-light">Silahkan Cari Apotek Yang Anda Cari</h3>

            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </header>

    <main>

       <section id="blogs">
           
    <div class="album">
        <div class="container">
            <div class="row row-cols-3 row-cols-md-3 g-4 mt-2"> 

            <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK AISYAH 2.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK AISYAH 2</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('/detail/apotekaisyah2') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK BERTUAH HANGTUAH.png') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK BERTUAH HANGTUAH</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/apotekbertuahhangtuah') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK CENDANA FARMA.jpg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK CENDANA FARMA</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/cendanafarma') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK dr. Septika.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK dr. Septika</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/septika') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK FACHRI.png') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Fachri</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/fachri') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK Insan Farma.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Insan Farma</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/insanfarma') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK KASUARI FARMA.png') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Kasuari Farma</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/kasuarifarma') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK KELUARGA Cabang Ke-3.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Keluarga Cabang 3</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/keluargacabang3') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/cabang9.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Keluarga Cabang 9</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/keluargacabang9') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK RAHMAN.jpeg') }}" class="card-img-top"  alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Rahman</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/rahman') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK KELUARGA HANGTUAH.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK keluarga Hangtuah</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/keluargahangtuah') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK STIFAR Mandiri.png') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Stifar Mandiri</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/stifarmandiri') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK Zhafira.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Zhafira</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/zhafira') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK KIMIA FARMA HANGTUAH.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Kimia Farma Hangtuah</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/kimiafarmahangtuah') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK KULIM FARMA.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Kulim Farma</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/kulimfarma') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTIK ALITA.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Alita</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/alita') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK SEKUNTUM.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Sekuntum</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/sekuntum') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK KELUARGA 24.png') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Keluarga 24</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/keluarga24') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK TAMAN SARI.png') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Taman Sari</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/tamansari') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                               
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/APOTEK NEO FARMA.png') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Neo Farma</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/neofarma') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                                   
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/apotek/Apotek Kimia Farma 614 Harapan.jpeg') }}" class="card-img-top" alt="..."
                                    style="max-height: 20vh; object-fit: cover;">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">APOTEK Kimia Farma 614</h5>
                                    <p class="card-text">Dapatkan penawaran menarik dan konsultasi obat-obatan yang informatif di Apotek ini.</p>
                                    <a href="{{ url('detail/kimiafarma614') }}" class="btn btn-dark">Selengkapnya</a>
                                </div>
                            </div>
                        </div>


            </div>
        </div>
    </div>

        </section>




    </main>


    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
