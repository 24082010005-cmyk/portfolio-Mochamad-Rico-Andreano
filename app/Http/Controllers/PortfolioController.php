<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $educations = [
            [
                'institution' => 'SMKS YAPALIS KRIAN',
                'degree' => 'SMK',
                'field_of_study' => 'Teknik Komputer dan Jaringan',
                'start_date' => '2021-07-01',
                'end_date' => '2024-06-30',
                'description' => 'Predikat: Eligible 10 Besar Teknik Komputer dan Jaringan.',
            ],
            [
                'institution' => 'UPN Veteran Jawa Timur',
                'degree' => 'S1',
                'field_of_study' => 'Sistem Informasi',
                'start_date' => '2024-08-01',
                'end_date' => null,
                'description' => 'Fakultas Ilmu Komputer. Saat ini menempuh Semester 5.',
            ],
        ];

        $experiences = [
            [
                'date' => 'Okt 2024',
                'company' => 'PANITIA FUNTASTECH 2024 – UPNVJT, Surabaya',
                'image' => 'FuntasTeech.png',
                'position' => 'Anggota Panitia Perlengkapan dan Konsumsi',
                'description' => [
                    'Bertanggung jawab dalam pengadaan dan distribusi perlengkapan serta konsumsi selama kegiatan berlangsung',
                    'Memastikan ketersediaan logistik sesuai kebutuhan acara secara tepat waktu',
                    'Berkoordinasi dengan tim untuk mendukung kelancaran operasional kegiatan',
                ],
            ],
            [
                'date' => 'Jul 2025',
                'company' => 'PANITIA DIES NATALIS SISTEM INFORMASI 2025 – UPNVJT, Surabaya',
                'image' => 'DiesnatalisSIFO.png',
                'position' => 'Anggota Panitia Perlengkapan dan Konsumsi',
                'description' => [
                    'Menyiapkan dan mengelola perlengkapan serta konsumsi selama kegiatan berlangsung',
                    'Mengatur distribusi logistik agar berjalan efektif dan efisien',
                    'Mendukung kelancaran acara melalui pengelolaan kebutuhan operasional',
                ],
            ],
            [
                'date' => 'Agu 2025',
                'company' => 'PANITIA INFORMATION SYSTEM COMPETITION (ISC) 2025 – UPNVJT, Surabaya',
                'image' => 'ISC.png',
                'position' => 'Anggota Panitia Perlengkapan dan Konsumsi',
                'description' => [
                    'Bertanggung jawab terhadap kesiapan perlengkapan dan konsumsi selama kompetisi berlangsung',
                    'Mengelola distribusi kebutuhan peserta dan panitia',
                    'Berkoordinasi dengan tim untuk menjaga kelancaran kegiatan',
                ],
            ],
            [
                'date' => 'Agu 2025',
                'company' => 'PANITIA DIES NATALIS FASILKOM 2025 – UPNVJT, Surabaya',
                'image' => 'DiesnatalisFIK.png',
                'position' => 'Anggota Panitia Perlengkapan dan Konsumsi',
                'description' => [
                    'Mengelola kebutuhan logistik dan konsumsi untuk mendukung kegiatan fakultas',
                    'Memastikan distribusi perlengkapan berjalan sesuai perencanaan',
                    'Berkolaborasi dengan panitia lain untuk menjaga efektivitas pelaksanaan acara',
                ],
            ],
            [
                'date' => 'Agu 2025',
                'company' => 'PANITIA MOSAIK KADERISASI FASILKOM 2025 – UPNVJT, Surabaya',
                'image' => 'Mosaik.png',
                'position' => 'Senior Pendamping',
                'description' => [
                    'Membimbing dan mendampingi mahasiswa baru dalam proses kaderisasi fakultas',
                    'Membantu membangun kedisiplinan, kerja sama tim, dan adaptasi lingkungan kampus',
                    'Berperan aktif dalam menciptakan suasana pembelajaran yang kondusif',
                ],
            ],
            [
                'date' => 'Agu 2025',
                'company' => 'PANITIA DIMENSI (GRADASI) SISTEM INFORMASI 2025 – UPNVJT, Surabaya',
                'image' => 'Dimensi.png',
                'position' => 'Senior Pendamping',
                'description' => [
                    'Mendampingi mahasiswa baru dalam kegiatan kaderisasi program studi',
                    'Memberikan arahan serta membantu proses pengembangan soft skill peserta',
                    'Mendorong partisipasi aktif dan kerja sama dalam setiap kegiatan',
                ],
            ],
            [
                'date' => 'Sep 2025',
                'company' => 'PANITIA EDISI (GRADASI) SISTEM INFORMASI 2025 – UPNVJT, Surabaya',
                'image' => 'Edisi.png',
                'position' => 'Anggota Panitia Perlengkapan dan Konsumsi',
                'description' => [
                    'Menyiapkan kebutuhan perlengkapan dan konsumsi selama kegiatan kaderisasi',
                    'Mengatur distribusi logistik untuk mendukung kelancaran acara',
                    'Berkoordinasi dengan tim dalam memastikan kesiapan operasional',
                ],
            ],
            [
                'date' => 'Okt 2025',
                'company' => 'KETUA DIVISI AKSI PKM SISTEM INFORMASI 2025 – UPNVJT, Surabaya',
                'image' => 'AksiPKM.png',
                'position' => 'Ketua Divisi',
                'description' => [
                    'Memimpin tim dalam perencanaan dan pengelolaan perlengkapan serta konsumsi kegiatan',
                    'Mengatur distribusi logistik dan memastikan seluruh kebutuhan acara terpenuhi',
                    'Berkoordinasi dengan panitia inti untuk menjaga efektivitas dan kelancaran kegiatan',
                ],
            ],
            [
                'date' => 'Nov 2025',
                'company' => 'PANITIA PENSI (GRADASI) SISTEM INFORMASI 2025 – UPNVJT, Surabaya',
                'image' => 'Pensi.png',
                'position' => 'Anggota Panitia Perlengkapan dan Konsumsi',
                'description' => [
                    'Mengelola kebutuhan perlengkapan dan konsumsi dalam kegiatan pentas seni kaderisasi',
                    'Memastikan distribusi logistik berjalan dengan baik selama acara',
                    'Mendukung kelancaran operasional kegiatan melalui koordinasi tim',
                ],
            ],
            [
                'date' => 'Des 2025',
                'company' => 'PANITIA PEMIRA SISTEM INFORMASI 2025 – UPNVJT, Surabaya',
                'image' => 'PemiraSIFO.png',
                'position' => 'Anggota Panitia Perlengkapan dan Konsumsi',
                'description' => [
                    'Mengelola kebutuhan perlengkapan dan konsumsi untuk mendukung jalannya kegiatan pemira',
                    'Melakukan koordinasi dengan divisi lain untuk memastikan kesiapan logistik',
                    'Membantu memastikan kelancaran pelaksanaan acara melalui dukungan operasional',
                ],
            ],
            [
                'date' => 'Apr 2026',
                'company' => 'PANITIA KPU PEMIRA FASILKOM 2026 – UPNVJT, Surabaya',
                'image' => 'KPUPemira.jpeg',
                'position' => 'Anggota KPU',
                'description' => [
                    'Terlibat dalam penyelenggaraan proses pemilihan raya mahasiswa tingkat fakultas',
                    'Membantu pelaksanaan teknis pemira agar berjalan sesuai prosedur',
                    'Berkoordinasi dengan tim untuk menjaga transparansi dan kelancaran proses pemilihan',
                ],
            ],
            [
                'date' => 'Apr 2026',
                'company' => 'PANITIA PEMIRA FASILKOM 2026 – UPNVJT, Surabaya',
                'image' => 'BPHPemiraFIK.jpeg',
                'position' => 'Bendahara BPH',
                'description' => [
                    'Bertanggung jawab dalam pengelolaan keuangan kegiatan',
                    'Melakukan pencatatan pemasukan dan pengeluaran secara terstruktur',
                    'Menyusun RAB serta memastikan penggunaan anggaran sesuai perencanaan',
                ],
            ],
            [
                'date' => '2026/2027',
                'company' => 'KETUA KOMISI 3 BADAN LEGISLATIF MAHASISWA 2026/2027 – UPNVJT, Surabaya',
                'image' => 'KetuaKomisi3.png',
                'position' => 'Ketua Komisi (2026/2027)',
                'description' => [
                    'Bertanggung jawab memimpin dan mengelola Departemen PSDM (Pengembangan Sumber Daya Manusia) yang menaungi bidang kaderisasi, penelitian dan pengembangan, kewirausahaan, serta seni dan olahraga',
                    'Mengawasi pelaksanaan program kerja departemen guna meningkatkan kualitas sumber daya mahasiswa, kreativitas organisasi, dan pengembangan potensi anggota',
                    'Berkoordinasi dengan pengurus serta anggota dalam menjaga efektivitas, komunikasi, dan keberlangsungan kegiatan organisasi secara aktif dan terarah',
                ],
            ],
        ];

        $skills = [
            ['name' => 'PHP', 'category' => 'Web Development', 'level' => 75],
            ['name' => 'Laravel', 'category' => 'Web Development', 'level' => 75],
            ['name' => 'HTML', 'category' => 'Frontend Development', 'level' => 80],
            ['name' => 'CSS', 'category' => 'Frontend Development', 'level' => 75],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend Development', 'level' => 70],
            ['name' => 'JavaScript', 'category' => 'Frontend Development', 'level' => 60],
            ['name' => 'MySQL', 'category' => 'Database Management', 'level' => 75],
            ['name' => 'Flutter', 'category' => 'Mobile Development', 'level' => 65],
            ['name' => 'Dart', 'category' => 'Mobile Development', 'level' => 60],
            ['name' => 'Firebase', 'category' => 'Backend Services', 'level' => 65],
            ['name' => 'Networking', 'category' => 'Computer Networks', 'level' => 75],
            ['name' => 'MikroTik', 'category' => 'Network Configuration', 'level' => 70],
        ];

        $projects = [
            [
                'title' => 'Teknisi Lab Komputer',
                'slug' => 'teknisi-lab-komputer',
                'description' => 'Kegiatan pemeliharaan, pengecekan, dan perawatan perangkat komputer untuk mendukung operasional laboratorium.',
                'image' => 'images/projects/TeknisiLabKomputer.jpg',
                'tech_stack' => ['Hardware', 'Computer Maintenance'],
            ],
            [
                'title' => 'Pengembangan dan Implementasi Lab Komputer',
                'slug' => 'implementasi-lab-komputer',
                'description' => 'Pengembangan fasilitas laboratorium komputer serta implementasi perangkat pendukung kegiatan praktikum.',
                'image' => 'images/projects/PengembangandanImplementasiLabKomputer.jpeg',
                'tech_stack' => ['Computer Hardware', 'Networking'],
            ],
            [
                'title' => 'Sistem WiFi Voucher Berbasis MikroTik',
                'slug' => 'wifi-voucher-mikrotik',
                'description' => 'Perancangan dan konfigurasi jaringan WiFi menggunakan MikroTik dengan sistem autentikasi berbasis voucher.',
                'image' => 'images/projects/SistemWiFiVoucherBerbasisMikroTik.png',
                'tech_stack' => ['MikroTik', 'Networking', 'Hotspot'],
            ],
            [
                'title' => 'Website Reservasi Lapangan Badminton',
                'slug' => 'reservasi-lapangan-badminton',
                'description' => 'Website untuk mendukung proses pemesanan lapangan dan pengelolaan informasi reservasi badminton.',
                'image' => 'images/projects/WebsiteReservasiLapanganBadminton.jpeg',
                'tech_stack' => ['Laravel', 'Tailwind CSS', 'Vite'],
            ],
            [
                'title' => 'MoMind',
                'slug' => 'momind',
                'description' => 'Aplikasi kesehatan mental untuk membantu pengguna mengenali, mencatat, dan mengelola suasana hati.',
                'image' => 'images/projects/projectMoMind.jpeg',
                'tech_stack' => ['Flutter', 'Dart', 'Firebase', 'Cloud Firestore'],
            ],
            [
                'title' => 'Aplikasi Simple Paint',
                'slug' => 'simple-paint',
                'description' => 'Aplikasi desktop sederhana yang menyediakan fasilitas menggambar dan membuat objek visual.',
                'image' => 'images/projects/AplikasiSimplePaint.jpeg',
                'tech_stack' => ['Desktop Application'],
            ],
            [
                'title' => 'Aplikasi Toko Kebutuhan Bayi',
                'slug' => 'toko-kebutuhan-bayi',
                'description' => 'Aplikasi untuk membantu pengelolaan informasi produk kebutuhan bayi.',
                'image' => 'images/projects/AplikasiTokoKebutuhanBayi.jpeg',
                'tech_stack' => ['Application Development'],
            ],
            [
                'title' => 'Sistem Iuran Kebersihan RT',
                'slug' => 'iuran-kebersihan-rt',
                'description' => 'Sistem untuk membantu pencatatan dan pengelolaan iuran kebersihan lingkungan RT.',
                'image' => 'images/projects/SistemIuranKebersihanRT.jpeg',
                'tech_stack' => ['Information System', 'Database'],
            ],
        ];

        return view('portfolio.index', compact(
            'educations',
            'experiences',
            'skills',
            'projects'
        ));
    }
}
