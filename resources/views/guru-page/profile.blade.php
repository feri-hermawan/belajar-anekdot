<x-guru.layouts>

    <x-slot:title>{{$title}}</x-slot:title>
    <x-slot:header>{{$headerTitle}}</x-slot:header>
    <div class="mt-4 row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="d-flex justify-content-center">
                                <img class="border border-1 border-dark rounded-circle" src="/img/gita-profile.jpg" alt="user-profile" style="width: 150px; height: 150px">
                            </div>
                            <h5 class="text-center">Gita Sekar Andini</h5>
                        </div>
                        <div class="text-center">
                            <h5>About</h5>
                            <p>Diam bukan berarti tak memperhatikannmu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" value="Gita Sekar Andini" placeholder="Masukan nama lengkap" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="gita123" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin" value="Perempuan" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="nuptk">NUPTK</label>
                                <input type="text" class="form-control" id="nuptk" value="12345678" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary">Alamat</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" readonly>Jl. Prapatan Bantarkawung RT02.01</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters mt-4">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <button type="button" id="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-update-data">Ubah Data</button>
                                <button type="button" id="submit" name="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-update-pass">Ubah Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-guru.modal-ubah-data-guru></x-guru.modal-ubah-data-guru>
    <x-modal-pass-baru></x-modal-pass-baru>
</x-guru.layouts>
