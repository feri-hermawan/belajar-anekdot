<x-auth.layouts>
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Profile</span>
    </div>
    <div class=" py-4 px-6">
        <div class="md:flex md:justify-start">
            <div id="foto" class="md:w-1/2">
                <div id="foto-profile" class="max-w-full">
                    <img src="/img/dummy/flora.jpg" class="w-[100px] h-[100px] md:w-[200px] md:h-[200px] border-4 border-gray-700 rounded-md drop-shadow-lg mx-auto md:mx-auto">
                </div>
                <div id="name-profile" class="max-w-full md:mt-4">
                    <h1 class="text-center font-bold text-xl">Flora Syafiq Riyadi</h1>
                </div>
            </div>

            <div class="md:block w-full">
                <div id="biodata" class="md:w-1/2">
                    <div class="mt-2">
                        <label class="text-lg">Username</label>
                        <input type="text" value="flora123" disabled class="profile-input">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Jenis Kelamin</label>
                        <input type="text" value="Perempuan" disabled class="profile-input">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Role</label>
                        <input type="text" value="Siswa" disabled class="profile-input">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Kelas</label>
                        <input type="text" value="IPS 10 A" disabled class="profile-input">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg" for="bio">Bio</label>
                        <textarea name="bio" id="bio"rows="4" class="bio-input" disabled>Ayo ke dunia flora, simsalabim akan ku buat kamu menjadi berbunga-bunga</textarea>
                    </div>
                </div>
                <div id="update-data" class="mt-2">
                    <button class="border-2 bg-teal-400 rounded-xl py-2 px-1 hover:bg-teal-700 text-white">Update</button>
                </div>
            </div>
        </div>
    </div>
</x-auth.layouts>
