<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="/img/student-login-illustration.png"
                         class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div>
                            <h1>Login</h1>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" id="username" class="form-control form-control-lg" placeholder="Masukan username" />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg" placeholder="Masukan password" />
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                     style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun ?
                                <a href="{{route('registrasi')}}" class="link-danger">Register</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts>
