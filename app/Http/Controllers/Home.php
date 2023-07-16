<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $pelayanan = [
            ['judul' => 'Pelatihan Mengemudi Dasar', 'deskripsi' => 'Pelatihan untuk pemula yang baru belajar mengemudi. Pelajaran ini mencakup dasar-dasar mengemudi seperti operasi kendaraan, manuver, pengereman, dan navigasi lalu lintas.'],
            ['judul' => 'Pelatihan Mengemudi Lanjutan', 'deskripsi' => 'Kursus lanjutan bagi mereka yang telah memiliki pengetahuan dasar dan ingin meningkatkan keterampilan mereka. Ini dapat mencakup mengemudi defensif, mengemudi di malam hari, dan mengemudi dalam kondisi cuaca buruk.'],
            ['judul' => 'Pelatihan Simulasi', 'deskripsi' => 'Pelatihan ini menggunakan simulator mengemudi untuk memberikan pengalaman yang realistis kepada pengemudi, memungkinkan mereka untuk berlatih dalam berbagai skenario sebelum mereka benar-benar berada di jalan.'],
            ['judul' => 'Kursus Keselamatan Jalan Raya', 'deskripsi' => 'Kursus ini memberikan pengetahuan tentang aturan dan peraturan jalan raya, serta teknik keselamatan yang penting.'],
            ['judul' => 'Pelatihan untuk Ujian SIM', 'deskripsi' => 'Layanan ini membantu siswa mempersiapkan ujian Surat Izin Mengemudi (SIM), dengan pelajaran teoritis dan praktis berfokus pada persyaratan ujian'],
            ['judul' => 'Pelatihan Mengemudi untuk Orang Tua', 'deskripsi' => ' Kursus khusus ini ditujukan untuk orang tua yang mungkin membutuhkan refreshment pada keterampilan mengemudi mereka atau beradaptasi dengan teknologi baru dalam kendaraan modern.'],
            ['judul' => 'Pelatihan Mengemudi Difabel:', 'deskripsi' => 'Kursus ini dirancang untuk orang-orang dengan kebutuhan khusus, dengan mobil yang telah dimodifikasi untuk memenuhi kebutuhan mereka.'],
            ['judul' => 'Konsultasi dan Bantuan Pembelian Mobil', 'deskripsi' => ' Layanan ini membantu siswa memilih mobil yang tepat untuk mereka, memberikan saran tentang model, fitur keselamatan, dan lainnya.'],
            // ['judul' => 'Layanan Pickup dan Drop-off', 'deskripsi' => 'Sebagai tambahan, perusahaan dapat menawarkan layanan di mana instruktur akan menjemput dan mengantarkan siswa dari dan ke rumah mereka.'],
            // tambahkan lebih banyak data jika diperlukan
        ];
        $paket = [
            [
                'nama_paket' => 'Paket Dasar',
                'durasi' => '10 sesi (Satu sesi 2 jam)',
                'layanan' => 'Pelatihan Mengemudi Dasar, Persiapan untuk Ujian SIM',
                'harga' => 'Rp 2,000,000'
            ],
            [
                'nama_paket' => 'Paket Lanjutan',
                'durasi' => '10 sesi (Satu sesi 2 jam)',
                'layanan' => 'Pelatihan Mengemudi Lanjutan, Kursus Keselamatan Jalan Raya',
                'harga' => 'Rp 2,500,000'
            ],
            [
                'nama_paket' => 'Paket Komprehensif',
                'durasi' => '20 sesi (Satu sesi 2 jam)',
                'layanan' => 'Pelatihan Mengemudi Dasar dan Lanjutan, Pelatihan Simulasi, Kursus Keselamatan Jalan Raya, Persiapan untuk Ujian SIM',
                'harga' => 'Rp 4,500,000'
            ],
            [
                'nama_paket' => 'Paket Refresher (Orang Tua)',
                'durasi' => '5 sesi (Satu sesi 2 jam)',
                'layanan' => 'Pelatihan Mengemudi untuk Orang Tua',
                'harga' => 'Rp 1,500,000'
            ],
            [
                'nama_paket' => 'Paket Difabel',
                'durasi' => '10 sesi (Satu sesi 2 jam)',
                'layanan' => 'Pelatihan Mengemudi Difabel',
                'harga' => 'Rp 2,500,000'
            ]
        ];
        $data = [
            'pelayanan' => $pelayanan,
            'paket' => $paket,
        ];
        return view('home', $data);
    }
    public function service()
    {
        $pelayanan = [
            ['judul' => 'Pelatihan Mengemudi Dasar', 'deskripsi' => 'Pelatihan untuk pemula yang baru belajar mengemudi. Pelajaran ini mencakup dasar-dasar mengemudi seperti operasi kendaraan, manuver, pengereman, dan navigasi lalu lintas.'],
            ['judul' => 'Pelatihan Mengemudi Lanjutan', 'deskripsi' => 'Kursus lanjutan bagi mereka yang telah memiliki pengetahuan dasar dan ingin meningkatkan keterampilan mereka. Ini dapat mencakup mengemudi defensif, mengemudi di malam hari, dan mengemudi dalam kondisi cuaca buruk.'],
            ['judul' => 'Pelatihan Simulasi', 'deskripsi' => 'Pelatihan ini menggunakan simulator mengemudi untuk memberikan pengalaman yang realistis kepada pengemudi, memungkinkan mereka untuk berlatih dalam berbagai skenario sebelum mereka benar-benar berada di jalan.'],
            ['judul' => 'Kursus Keselamatan Jalan Raya', 'deskripsi' => 'Kursus ini memberikan pengetahuan tentang aturan dan peraturan jalan raya, serta teknik keselamatan yang penting.'],
            ['judul' => 'Pelatihan untuk Ujian SIM', 'deskripsi' => 'Layanan ini membantu siswa mempersiapkan ujian Surat Izin Mengemudi (SIM), dengan pelajaran teoritis dan praktis berfokus pada persyaratan ujian'],
            ['judul' => 'Pelatihan Mengemudi untuk Orang Tua', 'deskripsi' => ' Kursus khusus ini ditujukan untuk orang tua yang mungkin membutuhkan refreshment pada keterampilan mengemudi mereka atau beradaptasi dengan teknologi baru dalam kendaraan modern.'],
            ['judul' => 'Pelatihan Mengemudi Difabel', 'deskripsi' => 'Kursus ini dirancang untuk orang-orang dengan kebutuhan khusus, dengan mobil yang telah dimodifikasi untuk memenuhi kebutuhan mereka.'],
            ['judul' => 'Konsultasi dan Bantuan Pembelian Mobil', 'deskripsi' => ' Layanan ini membantu siswa memilih mobil yang tepat untuk mereka, memberikan saran tentang model, fitur keselamatan, dan lainnya.'],
            // ['judul' => 'Layanan Pickup dan Drop-off', 'deskripsi' => 'Sebagai tambahan, perusahaan dapat menawarkan layanan di mana instruktur akan menjemput dan mengantarkan siswa dari dan ke rumah mereka.'],
            // tambahkan lebih banyak data jika diperlukan
        ];

        $data = [
            'pelayanan' => $pelayanan,
        ];
        return view('service', $data);
    }
    public function schedule()
    {
        $jadwal_belajar = [
            ['hari' => 'Senin', 'jam' => '09:00 - 11:00', 'kelas' => 'Mengemudi Dasar'],
            ['hari' => 'Senin', 'jam' => '13:00 - 15:00', 'kelas' => 'Mengemudi Lanjutan'],
            ['hari' => 'Selasa', 'jam' => '09:00 - 11:00', 'kelas' => 'Simulasi dan Ujian'],
            ['hari' => 'Selasa', 'jam' => '13:00 - 15:00', 'kelas' => 'Kursus Keselamatan Jalan Raya'],
            ['hari' => 'Rabu', 'jam' => '09:00 - 11:00', 'kelas' => 'Mengemudi Difabel'],
            ['hari' => 'Rabu', 'jam' => '13:00 - 15:00', 'kelas' => 'Mengemudi Untuk Orang Tua'],
            ['hari' => 'Kamis', 'jam' => '09:00 - 11:00', 'kelas' => 'Mengemudi Dasar'],
            ['hari' => 'Kamis', 'jam' => '13:00 - 15:00', 'kelas' => 'Mengemudi Lanjutan'],
            ['hari' => 'Jumat', 'jam' => '09:00 - 11:00', 'kelas' => 'Simulasi dan Ujian'],
            ['hari' => 'Jumat', 'jam' => '13:00 - 15:00', 'kelas' => 'Kursus Keselamatan Jalan Raya'],
            ['hari' => 'Sabtu', 'jam' => '10:00 - 12:00', 'kelas' => 'Mengemudi Difabel'],
            ['hari' => 'Sabtu', 'jam' => '13:00 - 15:00', 'kelas' => 'Mengemudi Untuk Orang Tua']
        ];
        $instruktur = [
            ['nama' => 'Bapak Budi Santoso', 'spesialisasi' => 'Mengemudi Dasar'],
            ['nama' => 'Bapak Agus Prasetyo', 'spesialisasi' => 'Mengemudi Lanjutan'],
            ['nama' => 'Ibu Lestari Sutanto', 'spesialisasi' => 'Simulasi dan Ujian'],
            ['nama' => 'Bapak Dedy Hermawan', 'spesialisasi' => 'Mengemudi Difabel'],
            ['nama' => 'Ibu Rina Anggraini', 'spesialisasi' => 'Mengemudi Untuk Orang Tua']
        ];

        $pengurus = [
            ['jabatan' => 'Direktur', 'nama' => 'Bapak Andi Pranata'],
            ['jabatan' => 'Wakil Direktur', 'nama' => 'Ibu Sari Wijaya'],
            ['jabatan' => 'Manajer Operasional', 'nama' => 'Bapak Rudi Hartono'],
            ['jabatan' => 'Sekretaris', 'nama' => 'Ibu Tuti Kusumawati'],
            ['jabatan' => 'Bendahara', 'nama' => 'Bapak Joko Sutrisno'],
            ['jabatan' => 'Humas', 'nama' => 'Ibu Nina Rahmawati'],
            ['jabatan' => 'Manajer Pemasaran', 'nama' => 'Bapak Ari Wibisono'],
            ['jabatan' => 'Manajer SDM', 'nama' => 'Ibu Rina Dewi']
        ];

        $data = [

            'pengurus' => $pengurus,
            'instruktur' => $instruktur,
            'jadwal_belajar' => $jadwal_belajar,
        ];

        return view('schedule', $data);
    }
    public function cars()
    {


        $data = [];

        return view('cars', $data);
    }
    public function contact()
    {


        $data = [];

        return view('contact', $data);
    }
}
