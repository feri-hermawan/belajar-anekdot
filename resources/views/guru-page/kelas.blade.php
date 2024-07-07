<x-auth.layouts :title="$title">
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Daftar Kelas</span>
    </div>
    <div class="px-2 md:px-6 mt-6">
        <a href="/guru/create-kelas" class="bg-blue-500 py-2 px-1 rounded-md text-white">Tambah Kelas</a>
    </div>
    <div class="max-w-full px-2 md:px-6 mt-6">
        <table class="text-lg w-full border-2 table-auto border-gray-500">
            <thead class="border-2 border-black">
            <tr class="text-center bg-sky-500 text-white">
                <th class="border-2 px-2 py-1 w-[10px]">No.</th>
                <th class="border-2 px-2 py-1">Nama Kelas</th>
                <th class="border-2 px-2 py-1">Kode Kelas</th>
                <th class="border-2 px-2 py-1">Jumlah Siswa</th>
            </tr>
            </thead>
            <tbody class="bg-white">
            @foreach($kelas as $kls)
            <tr class="text-center">
                <td class="table-tugas w-[10px]">{{$loop->iteration}}</td>
                <td class="table-tugas text-left">
                    <a href="/detail-kelas/{{$kls['id']}}">{{$kls['nama']}}</a>
                </td>
                <td class="table-tugas w-[10px]">{{$kls['kode_kelas']}}</td>
                <td class="table-tugas">
                    <div>10</div>
                </td>
            </tr>
            @endforeach()
            </tbody>
        </table>
    </div>
</x-auth.layouts>
