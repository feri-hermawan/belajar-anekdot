<x-auth.layouts :title="$title">
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Detail Kelas</span>
    </div>
    <div class="px-6">
        <div class="md:flex">
            <div class="md:block w-full max-w-full">
                <form method="post" action="/kelas/update">
                    @csrf
                    <div id="biodata" class="max-w-full">
                        <div class="mt-2">
                            <label class="text-lg">Nama Kelas</label>
                            <input name="nama_kelas" type="text" class="profile-input-update" value="{{$kelas->nama}}">
                            <input type="hidden" name="id" value="{{$kelas->id}}">
                        </div>
                        <div class="mt-2">
                            <label class="text-lg">Kode Kelas</label>
                            <input name="kode_kelas" type="text" value="{{$kelas->kode_kelas}}" class="profile-input-update" readonly>
                        </div>
                    </div>
                    <div id="update-data" class="mt-2">
                        <button type="submit" class="border-2 bg-teal-400 rounded-xl py-2 px-1 hover:bg-teal-700 text-white">Simpan</button>
                    </div>
                </form>
                <table class="text-lg w-full border-2 table-auto border-gray-500">
                    <thead class="border-2 border-black">
                    <tr class="text-center bg-sky-500 text-white">
                        <th class="border-2 px-2 py-1 w-[10px]">No.</th>
                        <th class="border-2 px-2 py-1">Nama Siswa</th>
                        <th class="border-2 px-2 py-1">Jumlah Siswa</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    <tr class="text-center">
                        <td class="table-tugas w-[10px]">1</td>
                        <td class="table-tugas w-[10px]">dade</td>
                        <td class="table-tugas">
                            <div>10</div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="table-tugas w-[10px]">1</td>
                        <td class="table-tugas w-[10px]">dade</td>
                        <td class="table-tugas">
                            <div>10</div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="table-tugas w-[10px]">1</td>
                        <td class="table-tugas w-[10px]">dade</td>
                        <td class="table-tugas">
                            <div>10</div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="table-tugas w-[10px]">1</td>
                        <td class="table-tugas w-[10px]">dade</td>
                        <td class="table-tugas">
                            <div>10</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-auth.layouts>


