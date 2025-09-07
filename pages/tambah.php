<?php include "../config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Tambah Siswa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../includes/link.php'; ?>
</head>

<body>
  <main class="d-grid vh-100 overflow-hidden">
    <div class="row row-cols-md-2">
      <?php
      $activePage = 'tambah';
      include '../includes/sidebar.php';
      ?>

      <content class="container-fluid col-lg-10 bg-light-subtle p-4">
        <div class="mb-4 border-bottom pb-2">
          <h4 class="fw-semibold text-dark-emphasis">
            <i class="bi bi-person-plus-fill me-2"></i> Tambah Siswa
          </h4>
        </div>

        <div class="card shadow-sm border-0">
          <div class="card-body">
            <form method="POST" action="../actions/simpan.php" class="row g-3">
              <div class="col-md-4">
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
              </div>

              <div class="col-md-4">
                <select name="kelas" class="form-select" required>
                  <option disabled selected>Pilih Kelas</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
              </div>

              <div class="col-md-4">
                <select name="jurusan" class="form-select" required>
                  <option disabled selected>Pilih Jurusan</option>
                  <option value="PPLG">PPLG</option>
                  <option value="TKJT">TKJT</option>
                  <option value="ANIMASI">ANIMASI</option>
                  <option value="TKI">TKI</option>
                  <option value="PEKSOS">PEKSOS</option>
                  <option value="TF">TF</option>
                  <option value="BCF">BCF</option>
                  <option value="DKV">DKV</option>
                </select>
              </div>

              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-save"></i> Simpan
                </button>
                <a href="daftar.php" class="btn btn-secondary">
                  <i class="bi bi-arrow-left"></i> Kembali
                </a>
              </div>
            </form>
          </div>
        </div>
      </content>
    </div>
  </main>
  <?php include '../includes/footer.php'; ?>
</body>

</html>