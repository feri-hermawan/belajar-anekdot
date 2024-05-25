<x-layouts>
    @if(session()->has('sucess')) :
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Akun anda telah dibuat, silahkan lakukan login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('failed')) :
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Gagal!</strong> Nomor NIS yang anda masukan sudah dimasukan orang lain.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <x-slot:title>{{$title}}</x-slot:title>
    <section class="vh-100">
        <div class="container-fluid h-custom mb-4">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="/img/teacher-illustration.png"
                         class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="/register">
                        @csrf
                        @method('POST')
                        <div>
                            <h1>Registrasi Guru</h1>
                        </div>
                        <div>
                            <input type="hidden" name="role" value="guru">
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="namalengkap">Nama Lengkap</label>
                            <input type="text" name="name" id="namalengkap" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Masukan nama lengkap" value="{{old('name')}}" />
                            @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="Masukan username" value="{{old('username')}}" />
                            @error('username')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div data-mdb-init class="form-outline mb-4">
                            <label class="form-label" for="username">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option selected>Pilih jenis kelamin</option>
                                <option value="laki_laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Masukan password" />
                            @error('password')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2 mb-5">
                            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                     style="padding-left: 2.5rem; padding-right: 2.5rem;">Daftar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Sudah punya akun ?
                                <a href="{{route('login')}}" class="link-danger">Login</a>
                            </p>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Anda sebagai pelajar?
                                <a href="{{route('student_register')}}" class="link-danger">Daftar di sini</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts>
