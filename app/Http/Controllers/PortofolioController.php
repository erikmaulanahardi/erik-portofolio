<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PortofolioController extends Controller
{
    public function index(Request $request): View
    {
        $lang = $request->query('lang', 'id');

        if (! in_array($lang, ['id', 'en'], true)) {
            $lang = 'id';
        }

        $content = [
            'id' => [
                'nav_home' => 'Beranda',
                'nav_about' => 'Tentang',
                'nav_contact' => 'Kontak Saya',
                'nav_projects' => 'Proyek',
                'nav_experience' => 'Pengalaman',
                'nav_education' => 'Pendidikan',
                'nav_certificates' => 'Sertifikasi',
                'eyebrow' => 'Portofolio Web Developer',
                'headline' => 'Junior Web Developer',
                'mini-headline' => 'Berfokus di Backend · PHP · MySQL · Laravel',
                'intro' => 'Halo! Saya Erik Maulana Hardianto, Lulusan S1 Teknik Informatika yang berfokus pada Software Engineering. Saya sedang membangun karier di bidang web development dan ingin terus mengembangkan kemampuan dalam membangun aplikasi web. Saya berfokus ingin mendalami ilmu mengenai perancangan RESTful API, pemrosesan data relasional, dan pengembangan logika bisnis menggunakan PHP, Laravel, serta MySQL.',
                'projects_title' => 'Karya & Proyek Saya',
                'projects_intro' => 'Berbagai project yang akan saya tampilkan di sini.',
                'project_placeholder' => 'Detail project akan ditambahkan setelah informasi project tersedia.',
                'about_title' => 'Tentang saya',
                'about_text' => 'Saya berfokus pada pengembangan backend menggunakan PHP, Laravel dan MySQL. Saya memiliki pengalaman dalam membangun aplikasi berbasis database dan terus belajar untuk mengembangkan keterampilan saya dalam pengembangan REST API, serta menulis kode yang maintainable.',
                'skills_title' => 'Teknologi',
                'experience_title' => 'Pengalaman',
                'experience_text' => 'Detail pengalaman magang atau freelance akan ditambahkan setelah posisi, periode, dan tanggung jawab dikonfirmasi.',
                'education_title' => 'Pendidikan',
                'education_text' => 'Informasi institusi, program studi, dan tahun kelulusan akan ditambahkan.',
                'certificates_title' => 'Sertifikasi',
                'certificates_text' => 'Sertifikasi yang tersedia akan ditambahkan di sini.',
                'contact_title' => 'Mari terhubung',
                'contact_text' => 'Silakan hubungi saya melalui tautan kontak profesional yang akan dicantumkan di sini.',
                'projects_button' => 'Lihat proyek',
                'contact_button' => 'Hubungi saya',
                'footer' => 'Dibuat dengan Laravel dan Tailwind CSS.',
            ],

            'en' => [
                'nav_home' => 'Home',
                'nav_projects' => 'Projects',
                'nav_about' => 'About',
                'nav_contact' => 'My Contact',
                'nav_experience' => 'Experiences',
                'nav_education' => 'Education',
                'nav_certificates' => 'Certifications',
                'eyebrow' => 'Web Developer Portfolio',
                'headline' => 'Junior Web Developer',
                'mini-headline' => 'Backend-Focused · PHP · MySQL · Laravel',
                'intro' => "Hello! I'm Erik Maulana Hardianto, a Computer Science graduate with a focus on Software Engineering. I am building my career in web development and continuously seeking to enhance my skills in creating web applications. My focus is on deepening my knowledge in designing RESTful APIs, processing relational data, and developing business logic using PHP, Laravel, and MySQL.",
                'projects_title' => 'My Work & Projects',
                'projects_intro' => 'Here are some of the projects I have worked on.',
                'project_placeholder' => 'Project details will be added once the project information is available.',
                'about_title' => 'About me',
                'about_text' => "I focus on backend web development using PHP and MySQL, with experience in building database-driven applications. I am continuously improving my skills in Laravel, REST API development, and writing maintainable code.",
                'skills_title' => 'Technologies',
                'experience_title' => 'Experiences',
                'experience_text' => 'Internship or freelance details will be added after confirming the role, dates, and responsibilities.',
                'education_title' => 'Education',
                'education_text' => 'Institution, degree, and graduation year will be added.',
                'certificates_title' => 'Certifications',
                'certificates_text' => 'Available certifications will be listed here.',
                'contact_title' => "Let's connect",
                'contact_text' => 'Contact details and professional profile links will be added here.',
                'projects_button' => 'View projects',
                'contact_button' => 'Contact me',
                'footer' => 'Built with Laravel and Tailwind CSS.',
            ],
        ];

        $projects = [
            [
                'id' => [
                    'title' => 'Sistem Manajemen Data Karyawan dan Rekapitulasi Payroll pada PT BPR BKK Ungaran',
                    'type' => 'Tugas Akhir',
                    'description' => 'Aplikasi berbasis web untuk mengelola data karyawan dan mendukung proses penggajian di PT BPR BKK Ungaran. Sistem ini membantu mengorganisasi informasi karyawan serta menghitung gaji berdasarkan jam kerja, insentif, dan lembur.',
                    'features' => [
                        'CRUD data karyawan',
                        'Perhitungan otomatis gaji berdasarkan jam kerja, insentif, dan lembur',
                        'Presensi karyawan',
                        'Cetak slip gaji dalam format PDF',
                    ],
                    'technologies' => ['PHP', 'MySQL', 'Bootstrap'],
                    'github' => 'https://github.com/erikmaulanahardi/employee-payroll-management-system-php',
                    'image' => 'images/projects/ttu-dashboard-screenshot.png',
                ],

                'en' => [
                    'title' => 'Employee Data Management and Payroll Recapitulation System at PT BPR BKK Ungaran',
                    'type' => 'Final Project',
                    'description' => 'A web-based application for managing employee data and supporting payroll processes at PT BPR BKK Ungaran, including salary calculations based on working hours, incentives, and overtime.',
                    'features' => [
                        'Employee data CRUD',
                        'Automatic salary calculations',
                        'Employee attendance tracking',
                        'PDF payslip generation',
                    ],
                    'technologies' => ['PHP', 'MySQL', 'Bootstrap'],
                    'github' => 'https://github.com/erikmaulanahardi/employee-payroll-management-system-php',
                    'image' => 'images/projects/ttu-dashboard-screenshot.png',
                ],
            ],

            [
                'id' => [
                    'title' => 'Grafika Komputer - Visualisasi 2D Gedung Asrama FTI UKSW',
                    'description' => ' Proyek grafika komputer untuk mereplikasi tampak depan gedung asrama Fakultas Teknik Informasi Universitas Kristen Satya Wacana menggunakan C++ dan OpenGL.',
                    'type' => 'Proyek Akademik',
                    'features' => [
                        'Visualiasi bangunan asrama dalam 2D',
                        'Penggunaan bentuk geometris dan warna',
                        'Penggambaran detail bangunan seperti jendela, pintu, dan atap yang cukup detail dan akurat',
                    ],
                    'technologies' => ['C++', 'OpenGL', 'GLUT'],
                    'github' => 'https://github.com/erikmaulanahardi/opengl-faculty-dormitory-2d',
                    'image' => 'images/projects/faculty-dormitory-2d.png',
                ],

                'en' => [
                    'title' => 'Computer Graphics - 2D Visualization of the FTI UKSW Dormitory Building',
                    'description' => '2D visualization of the dormitory building at Faculty of Computer Science, Satya Wacana Christian University.',
                    'type' => 'Academic Project',
                    'features' => [
                        '2D visualization of the dormitory building',
                        'Use of geometric shapes and colors',
                        'Detailed representation of building features such as windows, doors, and roof',
                    ],
                    'technologies' => ['C++', 'OpenGL', 'GLUT'],
                    'github' => 'https://github.com/erikmaulanahardi/opengl-faculty-dormitory-2d',
                    'image' => 'images/projects/faculty-dormitory-2d.png',
                ],
            ],

        ];

        $about = [
            'id' => [
                'title' => 'Tentang Saya',
                'description' => "Saya merupakan lulusan Teknik Informatika yang memiliki minat besar pada pengembangan web backend dan pengelolaan basis data relasional.\n\n Melalui tugas akhir, saya mengembangkan secara mandiri Sistem Manajemen Data Karyawan dan Rekapitulasi Payroll menggunakan PHP dan MySQL, dengan fitur pengelolaan data karyawan serta perhitungan gaji otomatis.\n\n Saya juga memperoleh pengalaman praktik melalui program magang sebagai Web Developer di Balai PSDA Bodri Kuto. Selama magang, saya membantu membangun ulang website instansi menggunakan Joomla CMS serta membantu menangani kendala teknis komputer yang dialami staf.\n\n Saat ini saya sedang memperkuat kemampuan pengembangan backend, khususnya dalam PHP, MySQL, pengembangan REST API, dan Laravel. Saya berharap dapat belajar dari para pengembang berpengalaman serta berkontribusi pada proyek perangkat lunak yang bersifat praktis.",
            ],

            'en' => [
                'title' => 'About Me',
                'description' => "I'm a Computer Science graduate with a strong interest in backend web development and relational database management.\n\n Through my final project, I independently developed an Employee Data Management and Payroll Recapitulation System using PHP and MySQL, featuring employee data management and automated payroll calculations.\n\n I also gained practical experience through an internship program as a Web Developer at Balai PSDA Bodri Kuto. During the internship, I assisted in rebuilding the institution's website using Joomla CMS and helped address technical computer issues faced by staff.\n\n I am currently strengthening my backend development skills, particularly in PHP, MySQL, REST API development, and Laravel. I look forward to learning from experienced developers and contributing to practical software projects",
            ],
        ];

        $experience = [
            [
                'company' => 'Balai Pengelolaan Sumber Daya Air Bodri Kuto, Semarang, Central Java, Indonesia',
                'position' => 'Web Developer Intern (April 2025 - July 2025)',
                'description' => [
                    'id' => [
                        'Membangun ulang website Sistem Informasi Balai PSDA Bodri Kuto menggunakan Joomla CMS setelah menemukan masalah signifikan pada tata letak dan penyajian konten website sebelumnya.',
                        'Menata ulang halaman website dan mengorganisasi informasi untuk meningkatkan keterbacaan, navigasi, dan akses terhadap informasi instansi balai sehingga dapat mudah diakses oleh masyarakat maupun internal balai.',
                        'Membantu staf menangani kendala teknis terkait komputer selama periode magang',
                    ],
                    'en' => [
                        "Rebuilt the Balai PSDA Bodri Kuto Information System website using Joomla CMS after identifying significant issues with the previous website's layout and content presentation.",
                        "Reorganized the website's pages and structured information to enhance readability, navigation, and access to the institution's information, making it easily accessible to both the public and internal staff.",
                        "Assisted staff in addressing technical computer issues during the internship period.",
                    ],
                ],
            ],
        ];

        $education = [
            [
                'degree' => [
                    'id' => 'S1 Teknik Informatika, S.Kom.',
                    'en' => 'Bachelor of Computer Science (S.Kom.)',
                ],

                'university' => [
                    'id' => 'Universitas Kristen Satya Wacana',
                    'en' => 'Satya Wacana Christian University',
                ],
                'year' => '2026',
            ],
        ];

        $skills = [
            'PHP',
            'Laravel',
            'MySQL',
            'HTML',
            'JavaScript',
            'Joomla CMS',
        ];

        return view('pages.home', [
            'content' => $content[$lang],
            'skills' => $skills,
            'projects' => $projects,
            'about' => $about,
            'experience' => $experience,
            'education' => $education,
            'lang' => $lang,
        ]);
    }
}
