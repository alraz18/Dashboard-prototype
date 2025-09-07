<?php include "../config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Daftar Siswa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../includes/link.php'; ?>
</head>

<body>
  <main class="d-grid vh-100 overflow-hidden">
    <div class="row row-cols-md-2">
      <?php
      $activePage = 'daftar';
      include '../includes/sidebar.php';
      ?>

      <content class="container-fluid col-lg-10 bg-light-subtle p-4">
        <div class="mb-4 border-bottom pb-2">
          <h4 class="fw-semibold text-dark-emphasis">
            <i class="bi bi-people-fill me-2"></i> Daftar Siswa
          </h4>
        </div>

        <div class="card shadow-sm border-0">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="table-dark">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $data = mysqli_query($koneksi, "SELECT * FROM siswa");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= htmlspecialchars($d['nama']); ?></td>
                      <td><?= htmlspecialchars($d['kelas']); ?></td>
                      <td><?= htmlspecialchars($d['jurusan']); ?></td>
                      <td class="text-center">
                        <button type="button"
                          class="btn btn-sm btn-warning me-1"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal"
                          data-id="<?= $d['id']; ?>"
                          data-nama="<?= htmlspecialchars($d['nama']); ?>"
                          data-kelas="<?= htmlspecialchars($d['kelas']); ?>"
                          data-jurusan="<?= htmlspecialchars($d['jurusan']); ?>">
                          <i class="bi bi-pencil-square"></i>
                        </button>

                        <a href="../actions/hapus.php?id=<?= $d['id']; ?>"
                          class="btn btn-sm btn-danger"
                          onclick="return confirm('Yakin ingin menghapus data ini?');">
                          <i class="bi bi-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <?php include '../includes/modal_edit.php'; ?>
            </div>
          </div>
          <div class="card-footer bg-white text-end">
            <a href="../pages/cetak_pdf.php" class="btn btn-danger">
              <i class="bi bi-file-earmark-pdf"></i> Export PDF
            </a>
          </div>
        </div>
      </content>
    </div>
  </main>
  <?php include '../includes/footer.php'; ?>

  <script>
    const editModal = document.getElementById('editModal')
    editModal.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget
      const id = button.getAttribute('data-id')
      const nama = button.getAttribute('data-nama')
      const kelas = button.getAttribute('data-kelas')
      const jurusan = button.getAttribute('data-jurusan')

      document.getElementById('edit-id').value = id
      document.getElementById('edit-nama').value = nama
      document.getElementById('edit-kelas').value = kelas
      document.getElementById('edit-jurusan').value = jurusan
    })
  </script>
</body>

</html>