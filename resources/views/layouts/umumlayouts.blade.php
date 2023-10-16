<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RF</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@600&family=Poppins:wght@300;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    @include('sweetalert::alert')

    <div id="loading-container">
        <div id="loading-icon">
        </div>
        <h5 class="loading">Loading....</h5>
    </div>

    <div class="container-fluid overflow-hidden">
        <div class="row">
            <div class="col-lg-2 col-xl-2 col-md-3 d-none d-sm-none d-md-block d-xl-block d-lg-block sidebar">
                <div class="text-logo">
                    <h1>RF</h1>
                </div>
                <hr>
                <ul class="menu-sidebar">
                    <li class="li-item"><i class="fa-solid fa-house"></i> <a href=""
                            class="menu-item">Beranda</a></li>
                    <li class="li-item"><i class="fa-solid fa-magnifying-glass"></i> <a href=""
                            class="menu-item">Cari</a></li>
                    <li class="li-item"><i class="fa-solid fa-compass"></i> <a href=""
                            class="menu-item">Jelajahi</a></li>
                    <li class="li-item"><i class="fa-regular fa-message"></i> <a href=""
                            class="menu-item">Pesan</a></li>
                    <li class="li-item"><i class="fa-solid fa-heart"></i> <a href=""
                            class="menu-item">Notifikasi</a></li>
                    <li class="li-item"><i class="fa-solid fa-plus"></i> <a href="" class="menu-item">Buat</a>
                    </li>
                    <li class="li-item"><i class="fa-solid fa-user"></i> <a href="" class="menu-item">Profil</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 col-xl-9 col-md-9 col-12 d-sm-block d-md-block d-xl-block d-lg-block content">
                @yield('content')
            </div>
            <div
                class="col-lg-3 col-xl-3 col-md-3 d-sm-none d-none d-md-block d-xl-block d-lg-block sidebar-disarankan">
                <div class="row d-flex justify-content-between gap-2">
                    <div class="col-3 col-img-profil">
                        <img src="{{ asset('assets/images/profil/rian.jpeg') }}" alt="profil" class="img-profil">
                    </div>
                    <div class="col-9 col-nama-profil">
                        <p class="username">rianfirmansyah730</p>
                        <p class="nama-lengkap">Rian Firmansyah, S.Kom</p>
                    </div>
                    <div class="col-pengguna-disarankan row d-flex justify-content-between">
                        <div class="col-6">
                            <p>Disarankan Untuk Anda</p>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a href="" class="btn-lihat-semua">Lihat Semua</a>
                        </div>
                        <div class="row d-flex justify-content-between data-pengguna-disarankan">
                            <div class="col-9 row ">
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/profil/3.jpg') }}" alt="img-profil"
                                        class="img-pengguna-disarankan">
                                </div>
                                <div class="col-6">
                                    rinahanisa
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn-ikuti">Ikuti</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between data-pengguna-disarankan">
                            <div class="col-9 row ">
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/profil/4.jpg') }}" alt="img-profil"
                                        class="img-pengguna-disarankan">
                                </div>
                                <div class="col-6">
                                    cantika275
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn-ikuti">Ikuti</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between data-pengguna-disarankan">
                            <div class="col-9 row ">
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/profil/5.jpg') }}" alt="img-profil"
                                        class="img-pengguna-disarankan">
                                </div>
                                <div class="col-6">
                                    lisaamanda
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn-ikuti">Ikuti</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between data-pengguna-disarankan">
                            <div class="col-9 row ">
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/profil/6.jpg') }}" alt="img-profil"
                                        class="img-pengguna-disarankan">
                                </div>
                                <div class="col-6">
                                    Nuri.me
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn-ikuti">Ikuti</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-footer">
                        <p class="text-small">&copy; Rian Firmansyah {{ date('Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
