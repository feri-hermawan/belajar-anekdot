<x-layouts>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="flex justify-center">
        <span class="font-bold md:text-3xl text-lg text-center">Selamat Datang di Aplikasi Belajar Anekdot Berbasis Komik</span>
    </div>
    <div class="md:flex md:flex-row block">
        <div class="hidden basis-1/2 md:flex md:visible md:justify-center">
            <div class="md:w-[500px] md:h-[500px]">
                <div class="bg-cover w-full h-full">
                    <img src="{{url('/img/register-illustration.png')}}" alt="resitrasi">
                </div>
            </div>
        </div>
        <div class="basis-1/2">
            <div class="w-full max-w-xs mx-auto py-auto">
                <form action="" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mt-10">
                    <div class="flex justify-center font-bold text-3xl mb-6">Daftar</div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Name">
                            Nama
                        </label>
                        <input asp-for="Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input type="text" asp-for="Username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            NIS
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nomor Induk Siswa">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Kode Kelas
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Kode Kelas">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="flex item-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:shadow-outline" type="button">Sign Up</button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{route('login')}}">Masuk</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts>