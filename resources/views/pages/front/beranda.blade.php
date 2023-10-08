<!DOCTYPE html>
<html lang="en">

<head>
    <title>UMKM GIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
        /* @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap'); */
        @import url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');

        body {
            /* font-family: 'Poppins', sans-serif; */
            font-family: 'Nunito' !important;
            overflow-x: hidden;
            transition: 1s;
        }



        .overflow-hidden {
            overflow: hidden !important;
        }

        .bg-main {
            background-color: #74b440;
        }

        .bg-main:hover {
            background-color: #74b440;
        }

        .text-main {
            color: #74b440;
        }

        .secondary-bg {
            background-color: #3F3D56 !important;
        }


        .nav-item a {
            color: #74b440 !important;
        }

        .navbar a.navbar-brand {
            color: #74b440 !important;
        }

        .dark-mode {
            background-color: #1B1B1D;
        }

        .dark-mode .box-shadow {
            box-shadow: -1px 2px 20px rgba(255, 255, 255, 0.6),
                0 0 50px rgba(255, 255, 255, 0.1);
        }

        .dark-mode .secondary {
            /* background: #F3F3F5 !important; */
            background: linear-gradient(to bottom, transparent, #000000, transparent);
        }

        .dark-mode p small {
            color: #bbb;
        }

        .dark-mode li.nav-item a.active {
            color: #bebebe;
        }

        .dark-mode footer {
            background-color: #151516;
        }

        .dark-mode,
        .dark-mode li a,
        .dark-mode li a i,
        .dark-mode nav a {
            color: white;
        }





        .full-height {
            height: 100vh;
        }

        nav.navbar {
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
        }

        .bg-second {
            background-color: #F3F3F5;
        }

        footer ul li {
            list-style-type: none;
        }

        footer ul {
            margin: 0;
            padding: 0;
        }

        footer ul li a {
            text-decoration: none;
            color: inherit;
        }

        .secondary {
            /* background: #F3F3F5 !important; */
            background: linear-gradient(to bottom, transparent, #ccc, transparent);
        }

        #hero h1 {
            font-size: 46px;
            letter-spacing: 2px;
            font-weight: 700;
        }

        .main-radius {
            border-radius: 14px !important;
        }

        .img-card-mobile {
            height: 500px;
            width: 250px;
            object-fit: cover;
            object-position: top left;
        }

        .img-card {
            width: 424px;
            height: 333px;
            object-fit: cover;
            object-position: top left;
        }

        #portfolio-mobile {
            height: auto;
        }

        .bg-diagonal {
            position: absolute;
            background-image: linear-gradient(to right, #ffffff, #C1834D);
            z-index: -1;
            transform: translateX(10px) rotate(5deg);
            transition: 1s;
        }

        .bg-diagonal.secondary {
            background-image: linear-gradient(to right, #E0E0E0, #C1834D);
        }

        .dark-mode .bg-diagonal {
            background-image: linear-gradient(to right, #1b1b1b, #00AA95);
        }

        .dark-mode .bg-diagonal.secondary {
            background-image: linear-gradient(to right, #000000, #00AA95);
        }

        .img-card-wrapper,
        .img-card-mobile-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box-shadow {
            box-shadow:
                12.5px 12.5px 10px rgba(0, 0, 0, 0.035),
                100px 100px 80px rgba(0, 0, 0, 0.07);
        }

        #hubungi_kami {
            height: 100vh !important;
            display: flex;
            align-items: center;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1120px;
            }
        }



        @media (max-width: 480px) {

            #keunggulan img {
                display: none;
            }

            #fitur_unggulan img {
                display: none !important;
            }

            #fitur_unggulan .card {
                height: auto !important;
                margin-top: 10px;
                padding: 10px !important;
            }

            #paket_kelas .card {
                margin-top: 10px;
            }

            #fitur_unggulan .card div {
                padding: 0px !important;
                margin: 0px !important;
            }

            #tentang img {
                width: 300px;
            }

            #hero {
                margin-top: 200px;
            }

            #hero img {
                transform: perspective(0px) rotateY(0deg) skew(0deg, 0deg);
                margin-top: 20px;
                width: 350px;
            }

            .full-height {
                height: auto;
            }

            .img-card {
                margin-top: 100px;
                width: 324px;
                height: 233px;
            }

            .img-card-mobile {
                margin-top: 120px !important;
                height: 400px;
                width: 200px;
                object-fit: cover;
                object-position: top left;
            }



            #hubungi_kami {
                height: 100vh !important;
                display: flex;
                align-items: center;
            }



        }
    </style>
</head>


<body id="page-top">

    <nav class="navbar navbar-expand-sm navbar-light p-4 fixed-top">
        <div class="container">
            <a class="navbar-brand " href="#"><strong>Gis Umkm</strong></a>
            {{-- <img src="assets/img/logo.png" alt="Example Image" width="100" class="navbar-brand"> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#keunggulan">Maps</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#paket_kelas">Terdekat</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#cerita_alumni">Tentang</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ URL::to('/login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" class="full-height d-flex justify-content-center flex-column">
        <div class="container text-main">
            <div class="row  ">
                <div class="col-sm-6 pe-5 d-flex justify-content-center align-items-start flex-column">
                    <h1><span class="text-black">Temukan Umkm <br> Terdekat </span> Dengan Gis Umkm</h1>
                    <p class="my-4 text-black">Mencari umkm terdekat ? Cari di Gis Umkm dengan cepat dan mudah </p>
                    <div class="d-flex">
                        <a href="{{ URL::to('/login') }}"
                            class="btn secondary-bg text-white main-radius py-2 px-3 ">Login</a>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <img src="{{ asset('img/svg/ilustration/maps.svg') }}" alt="Example Image" width="540">



                </div>
            </div>
        </div>
    </section>


    <section class="mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">Peta UMKM Toraja</h1>
                </div>
                <div class="col-sm-12">
                    <iframe width="100%" height="800" src="{{ URL::to('/testing') }}" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Jarak 10 Terdekat</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Current Lat</th>
                                        <th>Current Long</th>
                                        <th>Lat</th>
                                        <th>Long</th>
                                        <th>Jarak (km)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lokasi_umkm as $row)
                                        <tr>
                                            <td>{{ $row->umkm->nama }}</td>
                                            <td>{{ $lat }}</td>
                                            <td>{{ $long }}</td>
                                            <td>{{ $row->long }}</td>
                                            <td>{{ $row->lat }}</td>
                                            <td>
                                                {{ round(calculateDistanceInKm($lat, $long, $row->long, $row->lat), 2) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="mb-5 pb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 text-center ">
                    <h2>10 UMKM Terdekat </h2>
                    <p><small>10 umkm dengan jarak terdekat dari lokasimu</small></p>
                </div>
            </div>
            <div class="row">
                @foreach ($lokasi_umkm as $row)
                    <div class="col-sm-4 mb-4">
                        <div class="card border-0 shadow main-radius">
                            <div class="card-body ">
                                <img src="{{ asset('img/png/store.png') }}" alt="" width="100"
                                    class="mb-4">
                                <h5 class="card-title">{{ $row->umkm->nama }}</h5>
                                <p class="card-text">{{ $row->umkm->alamat }}</p>
                                <p>Jarak : {{ round(calculateDistanceInKm($lat, $long, $row->long, $row->lat), 2) }} Km
                                </p>
                                <div class="rate">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="mt-5 pt-5 pb-5 secondary-bg text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h5>Copyright &copy; Gis Umkm</h5>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>
