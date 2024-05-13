<x-layouts>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="mt-5">
        <div>
            <span class="fs-3 fw-bold">Soal :</span>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="fs-5 fw-semibold">
                    Buatlah Sebuah Anekdot yang bertemakan JKT48
                </h3>
            </div>
        </div>
    </div>
    <div>
        <div>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
            </span>
            <span>Pembuat : <b>Melody</b></span>
        </div>
        <div>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1"/>
                </svg>
            </span>
            <span>Batas Waktu sebelum Tanggal :<b>12 Juni 2024</b></span>
        </div>
    </div>
    <div class="my-5">
        <div>
            <span>Tulis jawabannya di bawah ini :</span>
        </div>
        <div>
            <form>
                <input id="tugas" name="jawabanTugas" type="hidden">
                <trix-editor input="tugas"></trix-editor>
                <div class="mt-2">
                    <button class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts>
