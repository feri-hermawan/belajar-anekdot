<x-auth.layouts>
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Update Profile</span>
    </div>
    <div class="px-6">
        <div class="md:flex">
            <div class="md:block w-full max-w-full">
                <form method="post" action="#">
                    @csrf
                <div class="mt-2 ">
                    <label class="text-lg">Foto</label>
                    <br>
                    <input name="imgUri" type="file"  class="w-full md:w-1/2 border-gray-500 border-2 rounded-md file:text-lg file:font-bold">
                    <p class="italic text-red-500 text-sm md:text-md">* Kosongkan jika tidak ingin mengubah foto profile</p>
                </div>
                <div id="biodata" class="max-w-full">
                    <div class="mt-2">
                        <label class="text-lg">Name</label>
                        <input name="name" type="text" value="Flora Syafiq Riyadi"  class="profile-input-update">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Username</label>
                        <input name="username" type="text" value="flora123" class="profile-input-update">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Jenis Kelamin</label>
                        <select id="countries" class="profile-input-update">
                            <option disabled selected class="text-lg">Pilih Jenis Kelamin</option>
                            <option value="laki_laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Password</label>
                        <input name="password" type="password" value="" class="profile-input-update">
                        <p class="italic text-red-500 text-sm md:text-md">* Kosongkan jika tidak ingin mengubah password</p>
                    </div>
                    <div class="mt-2">
                        <label class="text-lg" for="bio">Bio</label>
                        <textarea name="bio" id="bio"rows="4" class="bio-input">Ayo ke dunia flora, simsalabim akan ku buat kamu menjadi berbunga-bunga</textarea>
                    </div>
                </div>
                <div id="update-data" class="mt-2">
                    <button class="border-2 bg-teal-400 rounded-xl py-2 px-1 hover:bg-teal-700 text-white">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-auth.layouts>
