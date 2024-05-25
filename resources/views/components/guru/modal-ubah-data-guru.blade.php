<!-- Modal -->
<div class="modal fade" id="modal-update-data" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <img src="/img/gita-profile.jpg" class="border border-1 border-dark" style="width: 50px; height: 50px">
                        <div>
                            <label for="profile" class="form-label mb-2">Foto Profile</label>
                            <input type="file" class="form-control" id="profile">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="namalengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namalengkap" aria-describedby="namaLengkap" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Masukan username">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example">
                            <option disabled>Pilih Jenis Kelamin</option>
                            <option selected value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NUPTK</label>
                        <input type="text" class="form-control" id="nis" aria-describedby="nis" placeholder="Masukan NUPTK">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" aria-describedby="alamat" placeholder="Masukan alamat">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
