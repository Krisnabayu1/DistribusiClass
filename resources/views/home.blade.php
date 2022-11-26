@extends('layouts.main')

@section ('container')

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<head>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <main>

        <section class="py-5 text-center container">
            <div class="row ">
                <div class="col-lg-6 col-md-8 mx-auto ">
                    <h1 class="animate__animated animate__bounce animate__delay-1s animate__repeat-2 animate__slower-3s" class="fw-light fw-bold ">Distribution Class</h1>
                    <h1 class=" lead text-muted">Selamat Datang Di Apikasi Pendistribusian Kelas,Semoga Dapat Mempercepat Pekerjaan Anda.Terima Kasih</h1>

                </div>
            </div>
        </section>

        <div class="album  bg-light ">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm ">
                            <div class="card card bg-primary card-border-danger">
                                <h4 class="card-header fw-bold text-light">Member</h4>
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Member</h5>
                                    <p class="card-text text-light">#</p>
                                    <a href="/members" class="btn btn-primary bg-warning">Go To Member</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm ">
                            <div class="card bg-primary card-border-danger">
                                <h4 class="card-header  fw-bold text-light">Kloter</h4>
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Kloter</h5>
                                    <p class="card-text text-light">#</p>
                                    <a href="/kloters" class="btn btn-primary  bg-warning">Go To Kloter</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card bg-primary card-border-danger">
                                <h4 class="card-header fw-bold text-light">Tutor</h4>
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Tutor</h5>
                                    <p class="card-text text-light">#</p>
                                    <a href="/tutors" class="btn btn-primary bg-warning">Go To Tutor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card bg-primary card-border-danger">
                                <h4 class="card-header fw-bold text-light">Ruangan</h4>
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Ruangan</h5>
                                    <p class="card-text text-light">#</p>
                                    <a href="/ruangans" class="btn btn-primary bg-warning">Go To Ruangan</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card bg-primary">
                                <h4 class="card-header fw-bold text-light">Subject</h4>
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Subject</h5>
                                    <p class="card-text text-light">#</p>
                                    <a href="/subjects" class="btn btn-primary bg-warning">Go To Subject</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card bg-primary">
                                <h4 class="card-header fw-bold text-light">Sesi Jam</h4>
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Sesi Jam</h5>
                                    <p class="card-text text-light">#</p>
                                    <a href="/jams" class="btn btn-primary bg-warning">Go To Sesi Jam</a>
                                </div>
                            </div>


                        </div>
                    </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">

            <p class="mb-1 fw-bold"> &copy; GE | Global English Pare 2022</p>
            <p class="mb-0 fw-bold">Aplikasi Ini di Buat Oleh Mr.Rizal Dan Amik Taruna Team </p>
            <p><a href="https://globalenglish.co.id/">Go To Website</a> </p>
        </div>
    </footer>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>


@endsection