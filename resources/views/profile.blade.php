<x-layouts>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="md:flex md:flex-row block p-8">
        <div class="basis-1/4">
            <div class="">
                <div class="mx-auto border-4 w-[150px] h-[150px] md:w-[250px] md:h-[250px] border-stone-700 bg-origin-border bg-center bg-cover rounded shadow-lg" style="background-image: url('/img/flora-profile.jpg');"></div>
            </div>
            <div class="my-4 text-center">
                <h1 class="font-bold">Bio</h1>
                <span class="italic">"Siapa yang mau ikut aku?? ayo ke dunia flora"</span>
            </div>
        </div>
        <div class="basis-3/4">
            <div class="w-[full] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 md:flex">
                <div class="biodata md:w-[50%] md:p-8">
                    <div class="my-2">
                        <span class="text-2xl font-bold">Nama :</span>
                        <span class="text-xl font-medium">Flora Syafiq</span>
                    </div>
                    <div class="my-2">
                        <span class="text-2xl font-bold">Username :</span>
                        <span class="text-xl font-medium">flora123</span>
                    </div>
                    <div class="my-2">
                        <span class="text-2xl font-bold">NIS :</span>
                        <span class="text-xl font-medium">12345678</span>
                    </div>
                    <div class="my-2">
                        <span class="text-2xl font-bold">Kelas :</span>
                        <span class="text-xl font-medium">12 A</span>
                    </div>
                    <div class="">
                        <button type="button" class="border rounded-lg bg-green-500 text-white py-2 px-1 hover:bg-green-700 update-profile">Ubah Data</button>
                    </div>
                </div>
                <div class="hidden form-update mb-4">
                    <form class="form-update" action="">
                        <div class="my-4">
                            <label class="block text-lg font-bold" for="name">Name</label>
                            <input id="update-form" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-bold" type="text" name="name" id="name" value="Flora Syafiq Sidiq">
                        </div>
                        <div class="my-4">
                            <label class="block text-lg font-bold" for="">Username</label>
                            <input class="border shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-bold" type="text" name="username" id="username" value="floraJkt48">
                        </div>
                        <div class="my-4">
                            <label class="block text-lg font-bold" for="">Kelas</label>
                            <input class="border shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-bold" type="text" name="kelas" id="kelas" value="11 A">
                        </div>
                        <div class="my-4">
                            <label class="block text-lg font-bold" for="">NIS (Nomor Induk Siswa)</label>
                            <input class="border shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-bold" type="text" name="nis" id="nis" value="1122334455667788">
                        </div>
                        <div class="my-4">
                            <label class="block text-lg font-bold" for="">Bio</label>
                            <input class="border shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-bold" type="text" name="nis" id="nis" value="Siapa yang mau ikut aku?? ayo ke dunia flora">
                        </div>
                        <div class="flex">
                            <div class="">
                                <button type="button" class="border rounded-lg bg-rose-500 text-white py-2 px-1 hover:bg-rose-700" id="btn-cancel">Batalkan</button>
                            </div>
                            <div class="">
                                <button class="border rounded-lg bg-blue-500 text-white py-2 px-1 hover:bg-blue-700 ">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=" md:flex md:justify-end md:w-[50%]">
                    <div>
                        <button id="btn-modal" data-modal-target="static-modal" data-modal-toggle="static-modal" class="border rounded-lg bg-red-500 text-white py-2 px-1 hover:bg-red-700" type="button" onclick="ToggleModal()">Ganti Password</button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <x-modal-pass-baru></x-modal-pass-baru>

</x-layouts>