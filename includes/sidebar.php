<nav class="col-lg-2 bg-dark p-4 text-white d-flex flex-column justify-content-between vh-100">
    <div>
        <a href="index.php" class="navbar-brand fs-4 fw-semibold text-white">
            <i class="bi bi-speedometer2 me-2"></i>Dashboard
        </a>
        <ul class="nav flex-column mt-4 nav-pills">
            <li class="nav-item mb-2">
                <a href="index.php"
                    class="nav-link sidebar-link text-white <?= ($activePage == 'beranda') ? 'active bg-info' : ''; ?>">
                    <i class="bi bi-house-door-fill me-2"></i>Beranda
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="tambah.php"
                    class="nav-link sidebar-link text-white <?= ($activePage == 'tambah') ? 'active bg-info' : ''; ?>">
                    <i class="bi bi-person-plus-fill me-2"></i>Tambah Siswa
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="daftar.php"
                    class="nav-link sidebar-link text-white <?= ($activePage == 'daftar') ? 'active bg-info' : ''; ?>">
                    <i class="bi bi-table me-2"></i>Data Siswa
                </a>
            </li>
        </ul>
    </div>
    <div class="d-flex align-items-center mt-4">
        <img src="../assets/img/WhatsApp Image 2025-08-17 at 22.53.42_a96c6df1.jpg"
            alt="User"
            class="rounded-circle me-2"
            style="width: 40px; height: 40px; object-fit: cover;">
        <div>
            <strong>Damorh</strong><br>
            <small class="text-secondary">Administrator</small>
        </div>
    </div>
</nav>