<x-auth.layouts>
    <div class="text-2xl md:text-4xl text-center mt-2">
        <span class="font-bold">Tugas</span>
    </div>
    <div>
        <div class="px-4 md:px-8">
            <span class="text-sm md:text-lg">Soal :</span>
            <br>
            <span class="text-base md:text-xl">Buatlah Kalimat Teks Anekdot</span>
        </div>
        <hr class="border-2 border-blue-500 my-4 md:my-8 w-1/2 mx-auto">
        <div class="px-4 md:px-8">
            <select id="option-tugas" class="border-2 border-gray-400 rounded-md px-2 py-1 focus:border-blue-500">
                <option disabled selected>Pilih Jenis Jawaban</option>
                <option value="teks">Teks</option>
                <option value="gambar">Gambar</option>
                <option value="video">Video</option>
            </select>
        </div>
        <div class="px-4 md:px-8">
            <span class="text-base md:text-xl">Jawaban :</span>
        </div>
        <div>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div id="tipe-teks" class="hidden">
                    <div class="px-4 md:px-8">
                        <input id="jawaban" type="hidden" name="jawaban">
                        <trix-editor input="jawaban"></trix-editor>
                        <input type="hidden" value="tipe-teks">
                    </div>
                </div>
                <div id="tipe-gambar" class="hidden">
                    <div class="px-4 md:px-8">
                        <label>Upload Image :</label>
                        <input type="file" name="answerImg" class="input-up-img">
                        <span class="italic text-red-500">*Pastikan format file ".jpg atau .png"</span>
                        <input type="hidden" value="tipe-gambar">
                    </div>
                </div>
                <div id="tipe-video" class="hidden">
                    <div class="px-4 md:px-8">
                        <label>Upload Video :</label>
                        <input type="file" name="answerImg" class="input-up-img">
                        <span class="italic text-red-500">*Pastikan format file ".mp4 atau .mkv"</span>
                        <br>
                        <span class="italic text-red-500">*Ukuran file harus di bawah 100mb"</span>
                        <input type="hidden" value="tipe-video">
                    </div>
                </div>
                <div id="kirimBtn" class="hidden mt-2 md:mt-4">
                    <div class="px-4 md:px-8">
                        <button type="submit" class="border-2 bg-blue-500 rounded-md px-2 py-1 text-white hover:bg-blue-800 text-base md:text-lg">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const option = document.querySelector('#option-tugas');
        let tipeTeks = document.querySelector('#tipe-teks');
        let tipeGambar = document.querySelector('#tipe-gambar');
        let tipeVideo = document.querySelector('#tipe-video');
        const kirim = document.querySelector('#kirimBtn');
        option.addEventListener('change', (e)=>{
            kirim.classList.remove('hidden');
            console.log(jawaban);
            if(e.target.value == 'teks'){
                tipeTeks.classList.remove('hidden');
                tipeGambar.classList.add('hidden');
                tipeVideo.classList.add('hidden');

            } else if(e.target.value == 'gambar'){
                tipeGambar.classList.remove('hidden');
                tipeTeks.classList.add('hidden');
                tipeVideo.classList.add('hidden');
            } else {
                tipeVideo.classList.remove('hidden');
                tipeTeks.classList.add('hidden');
                tipeGambar.classList.add('hidden');
            }
        })
    </script>
</x-auth.layouts>
