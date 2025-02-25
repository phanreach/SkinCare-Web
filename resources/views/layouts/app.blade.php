<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeYoung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="h-full">
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand d-flex align-items-center" href="home">
                <img src="{{ asset('storage/weyoung_logo.jpg') }}" alt="We Young Logo" class="rounded-circle me-2" style="width: 40px; height: 40px;">
                <span class="h5 fw-bold mb-0">WeYoung</span>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Main Navigation -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->is('/home') ? 'active fw-bold' : '' }} fw-bold" href="/home">
                            <i class="bi bi-house-door me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->is('/about') ? 'active fw-bold' : '' }} fw-bold" href="/about">
                            <i class="bi bi-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->is('/product') ? 'active fw-bold' : '' }} fw-bold" href="/product">
                            <i class="bi bi-box me-1"></i>Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->is('/contact') ? 'active fw-bold' : '' }} fw-bold" href="/contact">
                            <i class="bi bi-envelope me-1"></i>Contact
                        </a>
                    </li>
                </ul>

                <!-- User Profile & Notifications -->
                <div class="d-flex align-items-center gap-3">
                    <!-- Notifications -->
                    <div class="position-relative">
                        <button class="btn btn-light rounded-circle position-relative">
                            <i class="bi bi-bell"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2
                                <span class="visually-hidden">unread notifications</span>
                            </span>
                        </button>
                    </div>

                    <!-- User Profile Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-light rounded-circle" type="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('storage/weyoung_logo.jpg') }}" alt="Profile" class="rounded-circle" style="width: 32px; height: 32px;">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>