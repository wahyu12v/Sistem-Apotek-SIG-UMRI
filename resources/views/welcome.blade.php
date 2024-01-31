<!DOCTYPE html>
<html lang="id">


@include('layouts.head')


<body>
    <header>
        @include('partials.navbar')
        <div id="corousel">
            <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('images/carousel1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/carousel2.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel3.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div id="about" style="background-color: #F5F7F8;" >
            <div class="container mt-5 mb-4">
                <div class="row align-items-md-stretch">
                    <div class="col-md-5">
                        <div class="h-100 p-2">
                            <img src="https://media.istockphoto.com/id/1325914490/id/foto/toko-obat-farmasi-modern-dengan-rak-penuh-paket-penuh-obat-modern-obat-obatan-kotak-vitamin.jpg?s=612x612&w=0&k=20&c=7q9o8wOR4gU61jz5AEy218bADAMT1xgZ6-1y24b-pjs="
                                class="img-thumbnail" alt="...">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <img src="https://media.istockphoto.com/id/1502427908/id/foto/rak-dengan-obat-obatan-di-apotek.jpg?s=612x612&w=0&k=20&c=1yS7bhlzdM5eJMnBGWY_x9AvrwXa1lD2nPAvrNOVWQo="
                                            class="img-thumbnail" alt="...">
                                    </div>
                                    <div class="col">
                                        <img src="https://media.istockphoto.com/id/1053043226/id/foto/pemasok-kebutuhan-medis-anda.jpg?s=612x612&w=0&k=20&c=kSPZHzEfApzQEZKj-sfUApT15adCpaP2D-8I2Lfk2cw="
                                            class="img-thumbnail" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7" style="color: #554931">
                        <div class="h-100 p-3">
                            <h5>About Us</h5>
                            <h3>Apa sebernanya sistem obat pintar itu?</h3>
                            <p>
                                Sistem obat pintar adalah solusi modern yang memberikan informasi terkini tentang data dan lokasi apotek. Dengan teknologi canggih, sistem ini mempermudah akses ke informasi yang dibutuhkan untuk mendapatkan obat dengan cepat dan efisien.
                            </p>
                            <div class="col-md-7" style="color: #554931">
                                <h5>Nama Kelompok:</h5>
                                <ul class="list-group">
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Ardian Wahyu Saputra</span>
                                        <span class="member-nim">NIM: 210401011</span>
                                    </li>
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Muhammad Rayhan</span>
                                        <span class="member-nim">NIM: 210401024</span>
                                    </li>
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Fitra Wahyudi</span>
                                        <span class="member-nim">NIM: 210401042</span>
                                    </li>
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Muhammad Rendi Syahputra</span>
                                        <span class="member-nim">NIM: 210401013</span>
                                    </li>
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Muhammad Hafizh Fadhillah</span>
                                        <span class="member-nim">NIM: 210401021</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <style>
                        .member-item {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            padding: 10px;
                            margin-bottom: 10px;
                            background-color: #f8f9fa; /* Optional: Add a light background color for better visibility */
                            border-radius: 5px;
                        }
                        .member-name {
                            font-weight: bold;
                        }
                        .member-nim {
                            color: #6c757d;
                        }
                    </style>

                </div>
            </div>
        </div>

    </header>

    <main>






<section id="apotek" class="py-4">
    <div class="container text-center">
        <h1 class="fw-light">Lokasi Apotek di Sistem Kami</h1>
        <p class="lead text-body-secondary">
            Temukan apotek terdekat dengan sistem kami. Kami menyediakan informasi lengkap tentang lokasi apotek
            di sekitar Anda, memudahkan akses Anda untuk mendapatkan obat dengan cepat dan mudah.
        </p>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7979.409315588318!2d101.40352176177888!3d0.43248474856650676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1704726224439!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

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

                    

            </div>
        </div>
    </div>

    <div class="container mt-4 text-center">
        <a href="{{ url('/apotek') }}" class="btn text-light btn-lg" style="background-color: #BBAB8C">Lihat Apotek</a>
    </div>
</section>



    </main>

    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
