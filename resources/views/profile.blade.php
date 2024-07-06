<x-auth.layouts :title="$title">
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Profile</span>
    </div>
    <div class=" py-4 px-6">
        <div class="md:flex md:justify-start">
            <div id="foto" class="md:w-1/2">
                <div id="foto-profile" class="max-w-full">
                    @if($user['imgUri'] != null) :
                        <img src="{{asset('storage'. '/' . $user['imgUri'])}}" class="w-[100px] h-[100px] md:w-[200px] md:h-[200px] border-4 border-gray-700 rounded-md drop-shadow-lg mx-auto md:mx-auto">
                    @else:
                        <img src="{{asset('storage/profile/profile-default.png')}}" class="w-[100px] h-[100px] md:w-[200px] md:h-[200px] border-4 border-gray-700 rounded-md drop-shadow-lg mx-auto md:mx-auto">
                    @endif
                </div>
                <div id="name-profile" class="max-w-full md:mt-4">
                    <h1 class="text-center font-bold text-xl">{{$user['name']}}</h1>
                </div>
            </div>

            <div class="md:block w-full">
                <div id="biodata" class="md:w-1/2">
                    <div class="mt-2">
                        <label class="text-lg">Username</label>
                        <input type="text" value="{{$user['username']}}" disabled class="profile-input">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Jenis Kelamin</label>
                        <input type="text" value="{{$user['gender']}}" disabled class="profile-input">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Role</label>
                        <input type="text" value="{{$user['role']}}" disabled class="profile-input">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Kelas</label>
                        <input type="text" value="IPS 10 A" disabled class="profile-input">
                    </div>
                    <div class="mt-2">
                        <label class="text-lg" for="bio">Bio</label>
                        <textarea name="bio" id="bio"rows="4" class="bio-input" disabled>{{$user['bio']}}</textarea>
                    </div>
                </div>
                <div id="update-data" class="mt-2">
                    <a href="/update-profile" class="border-2 bg-teal-400 rounded-xl py-2 px-1 hover:bg-teal-700 text-white">Update</a>
                </div>
            </div>
        </div>
    </div>
</x-auth.layouts>
