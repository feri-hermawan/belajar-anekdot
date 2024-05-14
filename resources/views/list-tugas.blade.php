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
                    <th>Membuat Anekdot
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-x" viewBox="0 0 16 16">
                                <path d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </span>
                    </th>
                    <th>12 Januari 2025</th>
                    <th><button class="btn btn-success">Review</button></th>
                </tr>
                <tr>
                    <th>3.</th>
                    <th>Membuat Anekdot
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-x" viewBox="0 0 16 16">
                                <path d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </span>
                    </th>
                    <th>12 Januari 2025</th>
                    <th><button class="btn btn-success">Review</button></th>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

</x-layouts>
