<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor; // Penting: Import model Doctor Anda

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Opsional: Hapus data lama jika ingin mengulang seed setiap kali
        // Hati-hati: ini akan menghapus semua data di tabel doctors jika sudah ada!
        // Doctor::truncate();

        $doctors = [
            [
                'name' => 'Dr. Budi Santoso, Sp.A',
                'specialization' => 'Spesialis Anak',
                'education' => 'Fakultas Kedokteran Universitas Indonesia',
                'experience_years' => '12 tahun',
                'bio' => 'Berpengalaman dalam kesehatan anak, tumbuh kembang, dan imunisasi. Ramah anak dan keluarga.',
                'gender' => 'Laki-laki',
                'sip_number' => 'SIP/DU/001/2020',
                'phone_number' => '081234567890',
                'email' => 'budi.santoso@klinikxyz.com',
                'clinic_address' => 'Jl. Kesehatan No. 10, Jakarta Pusat',
                'city' => 'Jakarta',
                'work_days' => 'Senin, Rabu, Jumat',
                'work_hours' => '09:00 - 17:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Ayu Lestari, Sp.OG',
                'specialization' => 'Spesialis Kandungan',
                'education' => 'Fakultas Kedokteran Universitas Gadjah Mada',
                'experience_years' => '9 tahun',
                'bio' => 'Fokus pada kesehatan ibu dan kandungan, program kehamilan, dan persalinan. Mendukung persalinan normal dan minim trauma.',
                'gender' => 'Perempuan',
                'sip_number' => 'SIP/OG/002/2021',
                'phone_number' => '087654321098',
                'email' => 'ayu.lestari@klinikxyz.com',
                'clinic_address' => 'Jl. Kebahagiaan No. 5, Jakarta Selatan',
                'city' => 'Jakarta',
                'work_days' => 'Selasa, Kamis, Sabtu',
                'work_hours' => '10:00 - 18:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Candra Wijaya, Sp.PD',
                'specialization' => 'Spesialis Penyakit Dalam',
                'education' => 'Fakultas Kedokteran Universitas Padjadjaran',
                'experience_years' => '15 tahun',
                'bio' => 'Ahli dalam penanganan penyakit kronis seperti diabetes, hipertensi, dan masalah pencernaan. Mengedepankan pendekatan personal.',
                'gender' => 'Laki-laki',
                'sip_number' => 'SIP/PD/003/2019',
                'phone_number' => '085012345678',
                'email' => 'candra.wijaya@klinikxyz.com',
                'clinic_address' => 'Jl. Kesejahteraan No. 1, Jakarta Barat',
                'city' => 'Jakarta',
                'work_days' => 'Senin - Jumat',
                'work_hours' => '08:00 - 16:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Dian Permata, Sp.M',
                'specialization' => 'Spesialis Mata',
                'education' => 'Fakultas Kedokteran Universitas Airlangga',
                'experience_years' => '7 tahun',
                'bio' => 'Fokus pada diagnostik dan penanganan berbagai masalah mata, termasuk katarak dan glaukoma. Memberikan perawatan mata komprehensif.',
                'gender' => 'Perempuan',
                'sip_number' => 'SIP/M/004/2022',
                'phone_number' => '089876543210',
                'email' => 'dian.permata@klinikxyz.com',
                'clinic_address' => 'Jl. Penglihatan Indah No. 7, Jakarta Utara',
                'city' => 'Jakarta',
                'work_days' => 'Selasa, Kamis',
                'work_hours' => '13:00 - 20:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Eko Prasetyo, Sp.THT-KL',
                'specialization' => 'Spesialis THT-KL',
                'education' => 'Fakultas Kedokteran Universitas Hasanuddin',
                'experience_years' => '10 tahun',
                'bio' => 'Menangani masalah telinga, hidung, tenggorokan, kepala dan leher. Berpengalaman dalam prosedur bedah minor.',
                'gender' => 'Laki-laki',
                'sip_number' => 'SIP/THT/005/2020',
                'phone_number' => '081122334455',
                'email' => 'eko.prasetyo@klinikxyz.com',
                'clinic_address' => 'Jl. Pendengaran No. 12, Jakarta Timur',
                'city' => 'Jakarta',
                'work_days' => 'Rabu, Jumat',
                'work_hours' => '09:00 - 15:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Fina Maharani, Sp.KK',
                'specialization' => 'Spesialis Kulit & Kelamin',
                'education' => 'Fakultas Kedokteran Universitas Diponegoro',
                'experience_years' => '8 tahun',
                'bio' => 'Pakar dalam masalah kulit dan kecantikan, serta penyakit menular seksual. Memberikan konsultasi estetik medis.',
                'gender' => 'Perempuan',
                'sip_number' => 'SIP/KK/006/2022',
                'phone_number' => '087788990011',
                'email' => 'fina.maharani@klinikxyz.com',
                'clinic_address' => 'Jl. Cantik Jelita No. 3, Jakarta Selatan',
                'city' => 'Jakarta',
                'work_days' => 'Senin, Kamis',
                'work_hours' => '11:00 - 19:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Gilang Ramadhan, Sp.JP',
                'specialization' => 'Spesialis Jantung & Pembuluh Darah',
                'education' => 'Fakultas Kedokteran Universitas Brawijaya',
                'experience_years' => '14 tahun',
                'bio' => 'Konsentrasi pada penyakit jantung koroner, aritmia, dan gagal jantung. Menerima pasien dengan rujukan dan umum.',
                'gender' => 'Laki-laki',
                'sip_number' => 'SIP/JP/007/2018',
                'phone_number' => '085210987654',
                'email' => 'gilang.ramadhan@klinikxyz.com',
                'clinic_address' => 'Jl. Detak Jantung No. 8, Jakarta Pusat',
                'city' => 'Jakarta',
                'work_days' => 'Selasa, Jumat',
                'work_hours' => '08:00 - 15:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Hani Putri, Sp.KFR',
                'specialization' => 'Spesialis Kedokteran Fisik & Rehabilitasi',
                'education' => 'Fakultas Kedokteran Universitas Sebelas Maret',
                'experience_years' => '6 tahun',
                'bio' => 'Membantu pasien memulihkan fungsi tubuh pasca cedera atau penyakit. Terapi fisik dan rehabilitasi komprehensif.',
                'gender' => 'Perempuan',
                'sip_number' => 'SIP/KFR/008/2023',
                'phone_number' => '081928374650',
                'email' => 'hani.putri@klinikxyz.com',
                'clinic_address' => 'Jl. Pemulihan No. 15, Jakarta Barat',
                'city' => 'Jakarta',
                'work_days' => 'Rabu, Sabtu',
                'work_hours' => '10:00 - 16:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Ivan Pratama, Sp.BS',
                'specialization' => 'Spesialis Bedah Saraf',
                'education' => 'Fakultas Kedokteran Universitas Padjadjaran',
                'experience_years' => '18 tahun',
                'bio' => 'Pakar dalam bedah otak dan tulang belakang. Mengutamakan keselamatan dan hasil terbaik bagi pasien.',
                'gender' => 'Laki-laki',
                'sip_number' => 'SIP/BS/009/2016',
                'phone_number' => '081345678901',
                'email' => 'ivan.pratama@klinikxyz.com',
                'clinic_address' => 'Jl. Bedah Unggul No. 20, Jakarta Pusat',
                'city' => 'Jakarta',
                'work_days' => 'Senin, Kamis',
                'work_hours' => '07:00 - 14:00',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Jenny Widya, Sp.GK',
                'specialization' => 'Spesialis Gizi Klinik',
                'education' => 'Fakultas Kedokteran Universitas Indonesia',
                'experience_years' => '5 tahun',
                'bio' => 'Menyediakan konsultasi gizi untuk berbagai kondisi medis dan kebutuhan gaya hidup sehat. Rencana diet personal.',
                'gender' => 'Perempuan',
                'sip_number' => 'SIP/GK/010/2024',
                'phone_number' => '082233445566',
                'email' => 'jenny.widya@klinikxyz.com',
                'clinic_address' => 'Jl. Nutrisi Sehat No. 9, Jakarta Utara',
                'city' => 'Jakarta',
                'work_days' => 'Selasa, Jumat',
                'work_hours' => '09:00 - 16:00',
                'is_active' => true,
            ],
        ];

        foreach ($doctors as $doctorData) {
            Doctor::create($doctorData);
        }
    }
}
