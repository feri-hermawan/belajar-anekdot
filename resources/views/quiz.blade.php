<x-layouts>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="my-4">
        <div class="text-center">
            <h2>
                Quiz Belajar Anekdot
            </h2>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body s">
                <form>
                    <div id="soal1 mb-2">
                        <span>No.1</span>
                        <span>Ini adalah soal quiz nomor 1</span>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="soal1-a">
                            <label class="form-check-label" for="soal1-a">
                                Pilihan A
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="soal1-b">
                            <label class="form-check-label" for="soal1-b">
                                Pilihan B
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="soal1-c">
                            <label class="form-check-label" for="soal1-c">
                                Pilihan C
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="soal1-d">
                            <label class="form-check-label" for="soal1-d">
                                Pilihan C
                            </label>
                        </div>
                    </div>
                    <div id="soal2 mb-2">
                        <span>No.2</span>
                        <span>Ini adalah soal quiz nomor 2</span>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="soal2-a">
                            <label class="form-check-label" for="soal2-a">
                                Pilihan A
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="soal2-b">
                            <label class="form-check-label" for="soal2-b">
                                Pilihan B
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="soal2-c">
                            <label class="form-check-label" for="soal2-c">
                                Pilihan C
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="soal2-d">
                            <label class="form-check-label" for="soal2-d">
                                Pilihan C
                            </label>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-result-quiz">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<x-modal-result-quiz></x-modal-result-quiz>
</x-layouts>
