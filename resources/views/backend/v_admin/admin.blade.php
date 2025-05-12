<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start bg-dark text-white" id="offcanvasSidebar" data-bs-theme="dark" aria-labelledby="offcanvasSidebarLabel">
        <div class="bg-dark p-4">
            <div class="offcanvas-header">
                <h5 class="text-body-emphasis h4">Collapsed content</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="/admin/dashboard" class="nav-link text-white">Dashboard</a></li>
                <li class="nav-item"><a href="/admin/rooms" class="nav-link text-white">Kamar</a></li>
                <li class="nav-item"><a href="/admin/bookings" class="nav-link text-white">Booking</a></li>
                <li class="nav-item"><a href="/admin/users" class="nav-link text-white">Data Tamu</a></li>
                <li class="nav-item"><a href="/admin/reports" class="nav-link text-white">Laporan</a></li>
            </ul>
            <span class="text-body-secondary">Toggleable via the navbar brand.</span>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body border-top">
                <h5 class="card-title"> {{$judul}}</h5>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading"> Selamat Datang, {{ Auth::user()->name
}}</h4>
                    <p>Halo, {{ Auth::user()->name }}</p>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>