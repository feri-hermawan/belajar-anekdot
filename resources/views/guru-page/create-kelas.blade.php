<x-auth.layouts :title="$title">
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Buat Kelas Baru</span>
    </div>
    <div class="px-6">
        <div class="md:flex">
            <div class="md:block w-full max-w-full">
                <form method="post" action="/kelas/create">
                @csrf
                <div id="biodata" class="max-w-full">
                    <div class="mt-2">
                        <label class="text-lg">Nama Kelas</label>
                        <input name="nama_kelas" type="text" class="profile-input-update" required>
                    </div>
                    <div class="mt-2">
                        <label class="text-lg">Kode Kelas</label>
                        <input name="kode_kelas" type="text" value="{{$kode}}" class="profile-input-update" readonly>
                    </div>
                </div>
                <div id="update-data" class="mt-2">
                    <button type="submit" class="border-2 bg-teal-400 rounded-xl py-2 px-1 hover:bg-teal-700 text-white">Buat</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-auth.layouts>


