<x-auth.layouts :title="$title">
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Update Profile</span>
    </div>
    <div class="px-6">
        <div class="md:flex">
            <div class="md:block w-full max-w-full">
                <form method="post" action="/update-profile" enctype="multipart/form-data" ">
                    @csrf
                <div class="mt-2 ">
                    <label class="text-lg">Foto</label>
                    <br>
                    <input name="imgUri" type="file"  class="profile-input-update file:text-lg file:font-bold">
                    <p class="italic text-red-500 text-sm md:text-md">* Kosongkan jika tidak ingin mengubah foto profile</p>
                    <p class="italic text-red-500 text-sm md:text-md">* Maksimal ukuran gambar 1MB</p>
                </div>
                <div id="biodata" class="max-w-full">
                    <div class="mt-2">
                        <label class="text-lg">Name</label>
                        <input name="name" type="text" value="{{$user['name']}}"  class="profile-input-update">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Username</label>
                        <input name="username" type="text" value="{{$user['username']}}" class="profile-input-update">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Jenis Kelamin</label>
                        <select id="gender" name="gender" class="profile-input-update">
                            <option @if($user['gender'] == 'laki_laki') selected @endif value="laki_laki">Laki-laki</option>
                            <option @if($user['gender'] == 'perempuan') selected @endif value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Password</label>
                        <input name="password" type="password" value="" class="profile-input-update">
                        <p class="italic text-red-500 text-sm md:text-md">* Kosongkan jika tidak ingin mengubah password</p>
                    </div>
                    <div class="mt-2">
                        <label class="text-lg" for="bio">Bio</label>
                        <textarea name="bio" id="bio"rows="4" class="profile-input-update">{{$user['bio']}}</textarea>
                    </div>
                </div>
                <div id="update-data" class="mt-2">
                    <button type="submit" class="border-2 bg-teal-400 rounded-xl py-2 px-1 hover:bg-teal-700 text-white">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-auth.layouts>
