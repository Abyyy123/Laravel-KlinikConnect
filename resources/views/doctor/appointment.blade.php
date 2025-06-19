<x-app-layout>
    {{-- Slot untuk header halaman --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Bertemu Dokter') }}
        </h2>
    </x-slot>

    {{-- Konten utama halaman --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-900">Buat Janji Temu dengan Dokter</h3>

                {{-- Menampilkan pesan sukses jika ada --}}
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Berhasil!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                {{-- Formulir untuk membuat janji temu --}}
                <form action="{{ route('doctor.appointment.store') }}" method="POST">
                    @csrf {{-- Token CSRF untuk keamanan formulir Laravel --}}

                    <div class="mb-4">
                        <x-input-label for="doctor_id" :value="__('Pilih Dokter')" />
                        <select id="doctor_id" name="doctor_id" class="block w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                            <option value="">-- Pilih Dokter --</option>
                            {{-- Melakukan iterasi pada daftar dokter yang diterima dari controller --}}
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}" {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                                    {{ $doctor->name }} ({{ $doctor->specialization }}) - {{ $doctor->work_days }} {{ $doctor->work_hours }}
                                </option>
                            @endforeach
                        </select>
                        {{-- Menampilkan pesan error validasi untuk doctor_id --}}
                        <x-input-error :messages="$errors->get('doctor_id')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="appointment_date" :value="__('Tanggal Janji Temu')" />
                        {{-- Input tanggal dengan tipe 'date' --}}
                        <x-text-input id="appointment_date" class="block mt-1 w-full" type="date" name="appointment_date" :value="old('appointment_date')" required />
                        {{-- Menampilkan pesan error validasi untuk appointment_date --}}
                        <x-input-error :messages="$errors->get('appointment_date')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="appointment_time" :value="__('Waktu Janji Temu')" />
                        {{-- Input waktu dengan tipe 'time' --}}
                        <x-text-input id="appointment_time" class="block mt-1 w-full" type="time" name="appointment_time" :value="old('appointment_time')" required />
                        {{-- Menampilkan pesan error validasi untuk appointment_time --}}
                        <x-input-error :messages="$errors->get('appointment_time')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="notes" :value="__('Catatan Tambahan (Opsional)')" />
                        {{-- Textarea untuk catatan tambahan --}}
                        <textarea id="notes" name="notes" rows="3" class="block w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('notes') }}</textarea>
                        {{-- Menampilkan pesan error validasi untuk notes --}}
                        <x-input-error :messages="$errors->get('notes')" class="mt-2" />
                    </div>

                    {{-- Tombol untuk mengirim formulir --}}
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Kirim Janji Temu') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>