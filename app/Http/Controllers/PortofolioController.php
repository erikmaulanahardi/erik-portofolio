<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PortofolioController extends Controller
{
    public function index(Request $request): View
    {
        $lang = $request->query('lang', 'id');

        if(! in_array($lang, ['id', 'en'], true)) {
            $lang = 'id';
        }

        $content = [
            'id' => [
                'nav_home' => 'Beranda',
                'nav_about' => 'Tentang',
                'nav_contact' => 'Kontak',
                'nav_projects' => 'Proyek',
                'nav_experience' => 'Pengalaman',
                'nav_education' => 'Pendidikan',
                'nav_certificates' => 'Sertifikat',
                'eyebrow' => 'Portofolio Backend Developer',
                'headline' => 'Junior Back-End Developer yang Memiliki Fokus pada Pengembangan Aplikasi Web & Database yang Andal',
                'intro' => 'Halo! Saya Erik Maulana Hardianto, Lulusan S1 Teknik Informatika yang berfokus pada Back-End Web Development. Saya sedang membangun karier di bidang backend development dan ingin terus mengembangkan kemampuan dalam membangun aplikasi web. Saya berfokus pada perancangan RESTful API, pemrosesan data relasional, dan pengembangan logika bisnis menggunakan PHP, Laravel, serta MySQL.',
                'projects_title' => 'Proyek pilihan',
                'projects_intro' => 'Project kuliah dan tugas akhir yang akan saya tampilkan di sini.',
                'project_placeholder' => 'Detail project akan ditambahkan setelah informasi project tersedia.',
                'about_title' => 'Tentang saya',
                'about_text' => 'Berfokus pada pengembangan arsitektur server-side yang andal, optimasi query database, serta penerapan praktik clean code untuk membangun sistem web yang scalable.',
                'skills_title' => 'Teknologi',
                'experience_title' => 'Pengalaman',
                'experience_text' => 'Detail pengalaman magang atau freelance akan ditambahkan setelah posisi, periode, dan tanggung jawab dikonfirmasi.',
                'education_title' => 'Pendidikan',
                'education_text' => 'Informasi institusi, program studi, dan tahun kelulusan akan ditambahkan.',
                'certificates_title' => 'Sertifikat',
                'certificates_text' => 'Sertifikat yang tersedia akan ditambahkan di sini.',
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
                'nav_contact' => 'Contact',
                'nav_experience' => 'Experience',
                'nav_education' => 'Education',
                'nav_certificates' => 'Certificates',
                'eyebrow' => 'Backend Developer Portfolio',
                'headline' => 'Junior Back-End Developer with a Focus on Building Reliable Web Applications & Databases',
                'intro' => "Hello! I'm Erik Maulana Hardianto, a Computer Science graduate specializing in Back-End Web Development. I am currently building my career in backend development and eager to enhance my skills in creating web applications. My focus lies in designing RESTful APIs, processing relational data, and developing business logic using PHP, Laravel, and MySQL.",
                'projects_title' => 'Selected projects',
                'projects_intro' => 'Academic projects and my final project will be featured here.',
                'project_placeholder' => 'Project details will be added once the project information is available.',
                'about_title' => 'About me',
                'about_text' => "I focus on developing reliable server-side architecture, optimizing database queries, and implementing clean code practices to build scalable web systems.",
                'skills_title' => 'Technologies',
                'experience_title' => 'Experience',
                'experience_text' => 'Internship or freelance details will be added after confirming the role, dates, and responsibilities.',
                'education_title' => 'Education',
                'education_text' => 'Institution, degree, and graduation year will be added.',
                'certificates_title' => 'Certificates',
                'certificates_text' => 'Available certificates will be listed here.',
                'contact_title' => "Let's connect",
                'contact_text' => 'Contact details and professional profile links will be added here.',
                'projects_button' => 'View projects',
                'contact_button' => 'Contact me',
                'footer' => 'Built with Laravel and Tailwind CSS.',
            ],
        ];

        $projects = [
            'id'=> [
            'title' => 'Sistem Manajemen Data Karyawan dan Rekapitulasi Payroll pada PT BPR BKK Ungaran',
            'type' => 'Tugas Akhir',
            'description' => 'Aplikasi berbasis web yang dikembangkan untuk mengelola data karyawan dan mendukung proses penggajian di PT BPR BKK Ungaran. Dibangun menggunakan PHP dan MySQL, sistem ini membantu mengorganisasi informasi karyawan serta menghitung gaji berdasarkan jam kerja, insentif, dan lembur.',
            'features' => [
            'CRUD data karyawan',
            'Perhitungan otomatis gaji karyawan berdasarkan jam kerja, insentif, dan lembur',
            'Presensi Karyawan',
            'Cetak slip gaji karyawan (Take Home Pay) dalam format PDF',
            ],
            'technologies' => ['PHP', 'MySQL', 'Bootstrap'],
            'github' => 'https://github.com/erikmaulanahardi/employee-payroll-management-system-php',
            ],

            'en' => [
            'title' => 'Employee Data Management and Payroll Recapitulation System at PT BPR BKK Ungaran',
            'type' => 'Final Project',
            'description' => 'A web-based application developed to manage employee data and support the payroll process at PT BPR BKK Ungaran. Built using PHP and MySQL, this system helps organize employee information and calculate salaries based on working hours, incentives, and overtime.',
            'features' => [
            'CRUD employee data',
            'Automatic salary calculation based on working hours, incentives, and overtime',
            'Employee attendance tracking',
            'Generate employee payslips (Take Home Pay) in PDF format', 
            ],
            'technologies' => ['PHP', 'MySQL', 'Bootstrap'],
            'github' => 'https://github.com/erikmaulanahardi/employee-payroll-management-system-php',
            ],
        ];

        $about = [
            'id' => [
            'title' => 'Tentang Saya',
            'description' => "Saya merupakan lulusan Teknik Informatika yang memiliki minat besar pada pengembangan web backend dan pengelolaan basis data relasional.\n\n Melalui tugas akhir, saya mengembangkan secara mandiri Sistem Manajemen Data Karyawan dan Rekapitulasi Payroll menggunakan PHP dan MySQL, dengan fitur pengelolaan data karyawan serta perhitungan gaji otomatis.\n\n Saya juga memperoleh pengalaman praktik melalui program magang sebagai Web Developer di Balai PSDA Bodri Kuto. Selama magang, saya membantu membangun ulang website instansi menggunakan Joomla CMS serta membantu menangani kendala teknis komputer yang dialami staf.\n\n Saat ini, saya terus mengembangkan kemampuan menggunakan Laravel dan teknologi web modern. Saya antusias untuk belajar dari developer berpengalaman, berkontribusi dalam proyek nyata, dan bertumbuh sebagai Backend Developer.",
            ],

            'en' => [
            'title' => 'About Me',
            'description' => "I'm a Computer Science graduate with a strong interest in backend web development and relational database management.\n\n Through my final project, I independently developed an Employee Data Management and Payroll Recapitulation System using PHP and MySQL, featuring employee data management and automated payroll calculations.\n\n I also gained practical experience through an internship program as a Web Developer at Balai PSDA Bodri Kuto. During the internship, I assisted in rebuilding the institution's website using Joomla CMS and helped address technical computer issues faced by staff.\n\n Currently, I am continuously enhancing my skills with Laravel and modern web technologies. I am eager to learn from experienced developers, contribute to real-world projects, and grow as a Backend Developer.",
            ],
        ];

        $experience = [
        [
            'company' => 'Balai Pengelolaan Sumber Daya Air Bodri Kuto, Semarang, Central Java, Indonesia',
            'position' => 'Web Developer Intern (April 2025 - July 2025)',
            'description' => [
            'id' => [
                'Membuat dan mengembangkan ulang website Sistem Informasi Balai PSDA Bodri Kuto dari versi lama menjadi versi baru menggunakan CMS Joomla.',
                'Membantu karyawan menangani kendala pada komputer mereka.',
            ],
            'en' => [
                'Worked on rebuilding and developing the Balai PSDA Bodri Kuto Information System website, replacing the older version with a new version using Joomla CMS.',
                'Assisted staff with computer-related technical issues.',
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
            'Oracle SQL',
            'Bootstrap',
            'Tailwind CSS',
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
