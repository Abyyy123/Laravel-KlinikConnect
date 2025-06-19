<x-app-layout>
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-black">
                    <h1 class="text-3xl font-bold mb-6">Selamat Datang di KlinikConnect!</h1>
                    <p class="mb-4 text-lg text-black">
                        Platform inovatif yang memudahkan Anda mendaftarkan diri dan membuat janji dengan berbagai spesialis medis di Klinik XYZ secara online.
                    </p>

                    <hr class="my-6 border-gray-300">

                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-black mb-4">Layanan Unggulan Klinik XYZ</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach (['Poli Umum' => 'Penanganan awal untuk berbagai keluhan kesehatan umum.',
                                       'Poli Gigi' => 'Layanan perawatan gigi dan mulut yang komprehensif.',
                                       'Spesialis Anak' => 'Konsultasi dan penanganan kesehatan khusus untuk anak-anak.'] as $title => $desc)
                                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                                    <h3 class="text-xl font-semibold mb-2 text-black">{{ $title }}</h3>
                                    <p class="text-black">{{ $desc }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <hr class="my-6 border-gray-300">

                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-black mb-4">Informasi Penting</h2>
                        <p class="mb-4 text-black">
                            Unduh panduan lengkap proses berobat di Klinik XYZ untuk pengalaman yang lebih mudah:
                        </p>
                        <a href="{{ asset('downloads/panduan_berobat_klinikxyz.pdf') }}" class="inline-flex items-center px-4 py-2 bg-white border border-black rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-100 focus:outline-none transition ease-in-out duration-150">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Unduh Panduan Berobat
                        </a>
                        <p class="mt-2 text-sm text-gray-500">
                            (Pastikan file panduan_berobat_klinikxyz.pdf ada di direktori public/downloads)
                        </p>
                    </div>

                    <hr class="my-6 border-gray-300">

                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-black mb-4">Apa Kata Pasien Kami?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
                                <p class="italic text-black">"KlinikConnect membuat proses pendaftaran berobat jadi sangat mudah. Tidak perlu antre lama lagi, sangat membantu!"</p>
                                <p class="mt-3 text-right font-semibold text-black">- Ibu Siti, 45 tahun</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
                                <p class="italic text-black">"Saya sangat puas dengan pelayanan dokter di Klinik XYZ. Informasinya jelas dan penanganannya profesional."</p>
                                <p class="mt-3 text-right font-semibold text-black">- Bapak Budi, 55 tahun</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-6 border-gray-300">

                    <div>
                        <h2 class="text-2xl font-bold text-black mb-4">Pengumuman & Tautan Berguna</h2>
                        <ul class="list-disc list-inside text-black">
                            <li class="mb-2"><a href="#" class="text-black hover:underline">Formulir Pendaftaran Rawat Inap (Unduh PDF)</a></li>
                            <li class="mb-2"><a href="#" class="text-black hover:underline">Panduan Kesehatan Umum untuk Keluarga</a></li>
                            <li class="mb-2"><a href="#" class="text-black hover:underline">Jadwal Vaksinasi Terbaru</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>