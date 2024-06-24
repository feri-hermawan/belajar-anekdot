const inputTipeAkun = document.querySelector('#type');
const divKodeKelas = document.querySelector('#kode_kelas')
inputTipeAkun.addEventListener('change', (e)=>{
    if(e.target.value == 'siswa'){
        divKodeKelas.innerHTML = `<div class="flex items-center justify-between">
                                    <label for="kode_kelas" class="block text-sm font-medium leading-6 text-gray-900">Kode Kelas</label>
                                </div>
                                <div class="mt-2">
                                    <input id="kode_kelas" name="kode_kelas" type="text" required class="input-public" placeholder="Masukan Kode Kelas">
                                </div>`
    } else {
        divKodeKelas.innerHTML=''
    }
})
