<x-public.layouts :title="$title">
    @if(session()->has('failed')):
    <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Failed!</span> Username sudah dipakai
        </div>
    </div>
    @endif

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Daftar Akun Baru</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <div>
                <form action="/register" method="post">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                        <div class="mt-2">
                            <input id="name" name="name" type="text" required class="input-public" placeholder="Masukan Nama Lengkap">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                        </div>
                        <div class="mt-2">
                            <input id="username" name="username" type="text" required class="input-public" placeholder="Masukan Username">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Jenis Kelamin</label>
                        </div>
                        <div class="mt-2">
                            <select id="gender" name="gender" class="w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="laki_laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Jenis Akun</label>
                        </div>
                        <div class="mt-2">
                            <select id="type" name="role" class="w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option disabled selected>Pilih Jenis Akun</option>
                                <option value="siswa">Siswa</option>
                                <option value="guru">Guru</option>
                            </select>
                        </div>
                    </div>

                    <div id="kode_kelas">

                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="input-public">
                        </div>
                    </div>
                    <button type="submit" class="border-2 bg-blue-500 px-2 py-1 rounded-md mt-2 text-white hover:bg-blue-800">Daftar</button>

                </form>
            </div>
            <p class="mt-10 text-center text-sm text-gray-500">
                Sudah memiliki akun ?
                <a href="{{route('login')}}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
            </p>
        </div>
    </div>
</x-public.layouts>

