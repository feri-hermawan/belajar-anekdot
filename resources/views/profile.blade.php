<x-layouts>
    <x-slot:title>{{$title}}</x-slot:title>
        <div class="mt-4 row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="d-flex justify-content-center">
                                    <img class="border border-1 border-dark rounded-circle" src="/img/flora-profile.jpg" alt="user-profile" style="width: 150px; height: 150px">
                                </div>
                                <h5 class="text-center">Flora Syafiqa</h5>
                            </div>
                            <div class="text-center">
                                <h5>About</h5>
                                <p>Ada yang mau ikut aku ??, ayo ke dunia flora.</p>
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
                                    <label for="fullName">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="fullName" value="Flora Syafiq" placeholder="Masukan nama lengkap" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Username</label>
                                    <input type="text" class="form-control" id="eMail" placeholder="Masukan username" value="flora123" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">No. NIS</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Masukan nomor NIS" value="12345678" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Kelas</label>
                                    <input type="text" class="form-control" readonly value="10 A">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mt-3 mb-2 text-primary">Alamat</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>Jl. Prapatan Bantarkawung RT02.01</textarea>
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
    <x-modal-ubah-data></x-modal-ubah-data>
    <x-modal-pass-baru></x-modal-pass-baru>
</x-layouts>
