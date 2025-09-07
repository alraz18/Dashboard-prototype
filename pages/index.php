<?php
include("../config/koneksi.php");
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../includes/link.php'; ?>
</head>

<body>
  <main class="d-grid vh-100 overflow-hidden">
    <div class="row row-cols-md-2">
      <?php
        $activePage = 'beranda';
        include '../includes/sidebar.php';
      ?>

      <content class="container-fluid col-lg-10 bg-light-subtle p-4">
        <div class="mb-4 border-bottom pb-2">
          <h4 class="fw-semibold text-dark-emphasis">
            <i class="bi bi-house-door-fill me-2"></i> Beranda
          </h4>
        </div>

        <div class="mb-4">
          <h2 class="fw-bold">Selamat Datang 👋</h2>
          <p class="text-muted">Ringkasan data siswa pada sistem</p>
        </div>

        <div class="row g-3 mb-4">
          <div class="col-md-4">
            <div class="card text-bg-primary text-center shadow-sm border-0">
              <div class="card-body">
                <i class="bi bi-people fs-1 mb-2"></i>
                <h6 class="fw-semibold">Total Siswa</h6>
                <p class="fs-4 mb-0">120</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-bg-success text-center shadow-sm border-0">
              <div class="card-body">
                <i class="bi bi-book fs-1 mb-2"></i>
                <h6 class="fw-semibold">Jurusan</h6>
                <p class="fs-4 mb-0">8</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card shadow-sm border-0">
          <div class="card-header bg-white fw-semibold">
            <i class="bi bi-clock-history me-2"></i> Siswa Terbaru
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Budi - XI RPL</li>
            <li class="list-group-item">Siti - XI TKJ</li>
          </ul>
        </div>
      </content>
    </div>
  </main>
  <?php include '../includes/footer.php'; ?>
</body>

</html>