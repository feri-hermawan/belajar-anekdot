<x-auth.layouts>
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Daftar Tugas</span>
    </div>
    <div class="px-2 md:px-6 mt-5 md:mt-8">
        <select class="border-2 border-gray-400 rounded-md px-2 py-1 focus:border-blue-500">
            <option disabled selected>Pilih Berasarkan</option>
            <option>Selesai</option>
            <option>Belum Selesai</option>
        </select>
    </div>
    <div class="max-w-full px-2 md:px-6 mt-6">
        <table class="text-lg w-full border-2 table-auto border-gray-500">
            <thead class="border-2 border-black">
            <tr class="text-center bg-sky-500 text-white">
                <th class="border-2 px-2 py-1 w-[10px]">No.</th>
                <th class="border-2 px-2 py-1">Nama Tugas</th>
                <th class="border-2 px-2 py-1">Status</th>
            </tr>
            </thead>
            <tbody class="bg-white">
                <tr class="text-center">
                    <td class="table-tugas w-[10px]">1</td>
                    <td class="table-tugas text-left">
                        <a href="#">Membuat Anekdot</a>
                    </td>
                    <td class="table-tugas">
                         <div class="tugas-selesai">Selesai</div>
                    </td>
                </tr>
                <tr class="text-center">
                    <td class="table-tugas w-[10px] ">2</td>
                    <td class="table-tugas text-left">
                        <a href="#">Membuat Video Anekdot</a>
                    </td>
                    <td class="table-tugas w-[100px] md:w-[150px]">
                        <div class="tugas-belum-selesai">Belum Selesai</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-auth.layouts>
