<x-layouts>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="">
        <div class="mx-auto w-25">
            <h1 class="fs-1">Daftar Tugas</h1>
        </div>
    </div>
    <div>
        <div class="w-25 mb-4 mt-4">
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih keterangan</option>
                <option value="1">Dibuka</option>
                <option value="2">Ditutup</option>
            </select>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-secondary">
                <tr>
                    <th>No</th>
                    <th>Judul Tugas</th>
                    <th>Tanggal Berakhir</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1.</th>
                    <th>Membuat Anekdot</th>
                    <th>12 Januari 2025</th>
                    <th><button class="btn btn-primary">Kerjakan</button></th>
                </tr>
                <tr>
                    <th>2.</th>
                    <th>Membuat Anekdot</th>
                    <th>12 Januari 2025</th>
                    <th><button class="btn btn-danger">Ditutup</button></th>
                </tr>
                <tr>
                    <th>3.</th>
                    <th>Membuat Anekdot</th>
                    <th>12 Januari 2025</th>
                    <th><button class="btn btn-danger">Ditutup</button></th>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

</x-layouts>
