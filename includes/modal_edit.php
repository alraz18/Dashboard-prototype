<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="update.php">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i> Edit Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="edit-nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select name="kelas" id="edit-kelas" class="form-select" required>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <select name="jurusan" id="edit-jurusan" class="form-select" required>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning"><i class="bi bi-save"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>