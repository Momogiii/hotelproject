<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .costum-card {
            border-radius: 8px;
        }

        .costum-img {
            transition: transform 0.3s ease;
            cursor: pointer;
            width: 100%;
            height: 300px;
            object-fit: cover;

        }

        .costum-card:hover .costum-img {
            transform: scale(1.05);

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/image/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Nudoriel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
                <span></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end">
                <div class="navbar-nav ">
                    <a class="nav-link" href="">Home</a>
                    <a class="nav-link" href="">Kamar</a>
                    <a class="nav-link" href="">Cek ketersediaan</a>
                    <a class="nav-link" href="">Booking</a>
                    <a class="nav-link" href="">Kontak</a>
                    <button class="btn btn-outline-success" type="submit">Login </button>

                </div>

            </div>
        </div>
    </nav>
    <section>
        <div class="container-fluid p-0 text-start position-relative">
            <img src="https://cdn.pixabay.com/photo/2021/12/11/07/59/hotel-6862159_1280.jpg" style="width: 100%; height: 630px;" class="img-fluid" alt="...">
            <div class="position-absolute top-50 start-0 text-white translate-middle-y ps-5    ">
                <h1 class="display-3 fw-bold">Selamat Datang</h1>
                <p class="fs-4">Cari hotel yang menarik dan nyaman untuk keluarga kalian</p>
            </div>
        </div>
    </section>
    <section>
        <div class="mt-5">
            <div class="text-center">
                <h3>Recommended Hotels</h3>
            </div>
        </div>
        <div class="text-center">
            <p>Sudah banyak terakreditasi A, dan kebanyaka puas</p>
        </div>
    </section>
    <section class="container py-5 text-center">
        <h1>Katalog</h1>
        <div class="row bg-white justify-content-center">
            <div class="col-md-6 col-lg-3 position-relative mb-4 costum-card">
                <img src="https://cdn.pixabay.com/photo/2017/05/31/10/23/manor-house-2359884_960_720.jpg" style="width: 100%; height: 300px; object-fit: cover;" class=" costum-img border rounded" alt="Halaman">
                <div class="position-absolute top-0 start-0 w-100 text-white p-2 fw-bold">
                    Halaman
                </div>
            </div>
            <div class="col-md-6 col-lg-3 position-relative mb-4 costum-card">
                <img src="https://cdn.pixabay.com/photo/2014/07/10/17/17/hotel-389256_960_720.jpg" style="width: 100%; height: 300px; object-fit: cover;" class=" costum-img border rounded" alt="Ruangan">
                <div class="position-absolute top-0 start-0 w-100 text-white p-2 fw-bold">
                    Ruangan
                </div>
            </div>
            <div class="col-md-6 col-lg-3 position-relative mb-4 costum-card">
                <img src="https://cdn.pixabay.com/photo/2012/11/21/10/24/building-66789_960_720.jpg" style="width: 100%; height: 300px; object-fit: cover;" class=" costum-img border rounded" alt="Kamar">
                <div class="position-absolute top-0 start-0 w-100 text-white p-2 fw-bold">
                    Kamar
                </div>
            </div>
            <div class="col-md-6 col-lg-3 position-relative mb-4 costum-card">
                <img src="https://cdn.pixabay.com/photo/2017/04/05/15/58/hotelroom-2205447_960_720.jpg" style="width: 100%; height: 300px; object-fit: cover;" class="costum-img border rounded" alt="VIP">
                <div class="position-absolute top-0 start-0  w-100 text-white p-2 fw-bold">
                    VIP
                </div>
            </div>
        </div>
        <section>
            <div class="card" style="width: 18rem;">
                <img src="https://cdn.pixabay.com/photo/2017/04/05/15/58/hotelroom-2205447_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </section>

        <h3> {{$judul}} </h3>
        <p>Cek isi beranda berhasil</p>
        @if(Auth::check())
        <p>Halo, {{ Auth::user()->name }}</p>
        @else
        <p>Tidak login!</p>
        @endif
    </section>



</body>

</html>