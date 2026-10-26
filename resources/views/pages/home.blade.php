@extends('layouts.app')

@section('content')
<header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
        <a href="#home" class="text-lg font-bold tracking-tight text-slate-950">
            Erik's Portfolio<span class="text-blue-600"></span>
        </a>

        <div class="hidden items-center gap-6 text-sm font-medium md:flex">
            <a href="#home" class="hover:text-blue-600">{{ $content['nav_home'] }}</a>
            <a href="#about" class="hover:text-blue-600">{{ $content['nav_about'] }}</a>
            <a href="#education" class="hover:text-blue-600">{{ $content['nav_education'] }}</a>
            <a href="#projects" class="hover:text-blue-600">{{ $content['nav_projects'] }}</a>
            <a href="#experience" class="hover:text-blue-600">{{ $content['nav_experience'] }}</a>
            <a href="#certificates" class="hover:text-blue-600">{{ $content['nav_certificates'] }}</a>
            <a href="#contact" class="hover:text-blue-600">{{ $content['nav_contact'] }}</a>
        </div>

        <div class="flex items-center gap-2 text-sm font-semibold">
            <a href="{{ route('pages.home', ['lang' => 'id']) }}"
                class="{{ $lang === 'id' ? 'text-blue-600' : 'text-slate-500' }}">
                ID
            </a>
            <span class="text-slate-300">/</span>
            <a href="{{ route('pages.home', ['lang' => 'en']) }}"
                class="{{ $lang === 'en' ? 'text-blue-600' : 'text-slate-500' }}">
                EN
            </a>
        </div>
    </nav>
</header>

<main>
    <section id="home" class="mx-auto grid max-w-6xl gap-12 px-6 py-24 md:grid-cols-5 md:items-center md:py-32">
        <div class="md:col-span-3">
            <p class="mb-5 text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">
                {{ $content['eyebrow'] }}
            </p>

            <h1 class="max-w-3xl text-4xl font-bold leading-tight tracking-tight text-slate-950 mb-5 sm:text-5xl lg:text-6xl">
                {{ $content['headline'] }}
            </h1>

            <h4 class="max-w-3xl text-4xl font-bold leading-tight tracking-tight text-blue-700 sm:text-sm lg:text-2xl">
                {{ $content['mini-headline'] }}
            </h4>
            <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600">
                {{ $content['intro'] }}
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a href="#projects"
                    class="rounded-lg bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">
                    {{ $content['projects_button'] }}
                </a>

                <a href="#contact"
                    class="rounded-lg border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-blue-600 hover:text-blue-600">
                    {{ $content['contact_button'] }}
                </a>
            </div>
        </div>

        <div class="md:col-span-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <p class="text-sm font-medium text-slate-500">Tech Stack</p>

                <div class="mt-5 flex flex-wrap gap-2">
                    @foreach ($skills as $skill)
                    <span class="rounded-md bg-slate-100 px-3 py-2 text-sm font-medium text-slate-700">
                        {{ $skill }}
                    </span>
                    @endforeach
                </div>

                <div class="mt-6 border-t border-slate-100 pt-5">
                    <p class="text-sm leading-6 text-slate-600">
                        {{ $content['about_text'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="mx-auto max-w-6xl px-6 py-20">
        <div class="grid gap-10 md:grid-cols-2">

            <div>
                <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">
                    {{ $content['nav_about'] }}
                </p>

                <h2 class="mt-3 text-3xl font-bold text-slate-950">
                    {{ $about[$lang]['title'] }}
                </h2>

                <p class="whitespace-pre-line mt-4 text-base leading-7 text-slate-600">
                    {{ $about[$lang]['description'] }}
                </p>
            </div>

            <div>
                <h3 class="text-xl font-bold text-slate-950">
                    {{ $content['skills_title'] }}
                </h3>

                <ul class="mt-5 space-y-3">
                    @foreach ($skills as $skill)
                    <li class="flex items-center gap-3 rounded-lg border border-slate-200 bg-white p-4">
                        <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                        <span class="font-medium">{{ $skill }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section id="education" class="border-t border-slate-200 bg-white px-6 py-20 sm:px-8 lg:px-10">
        <div class="mx-auto max-w-5xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">
                {{ $lang === 'id' ? 'Pendidikan' : 'Education' }}
            </p>

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                {{ $lang === 'id' ? 'Latar Belakang Pendidikan' : 'Educational Background' }}
            </h2>

            <div class="mt-10 grid gap-5 sm:grid-cols-2">
                @foreach ($education as $item)
                <article class="rounded-2xl border border-slate-200 bg-slate-50 p-6 transition hover:border-blue-200 hover:bg-blue-50/40">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white text-blue-700 shadow-sm">
                        <svg
                            class="h-6 w-6"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true">
                            <path d="m2 10 10-6 10 6-10 6-10-6Z" />
                            <path d="M6 12.5V17c3.5 3 8.5 3 12 0v-4.5M22 10v6" />
                        </svg>
                    </div>

                    <h3 class="mt-5 text-lg font-bold leading-7 text-slate-950">
                        {{ $item['university'][$lang] }}
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        {{ $lang === 'id'
                            ? 'S1 Teknik Informatika, S.Kom. (2026)'
                            : 'Bachelor of Computer Science (S.Kom.) (2026)' }}
                    </p>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        {{ $lang === 'id'
                            ? 'IPK: 3.83 / 4.00'
                            : 'GPA: 3.83 / 4.00' }}
                    </p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="projects" class="scroll-mt-24 border-y border-slate-200 bg-white">
        <div class="mx-auto max-w-6xl px-6 py-20">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">
                {{ $content['nav_projects'] }}
            </p>

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950">
                {{ $content['projects_title'] }}
            </h2>

            <p class="mt-4 max-w-2xl leading-7 text-slate-600">
                {{ $content['projects_intro'] }}
            </p>

            <div class="mt-10 grid gap-6 md:grid-cols-2">
                @foreach ($projects as $projectTranslations)
                @php
                $project = $projectTranslations[$lang]
                ?? $projectTranslations['id'];
                @endphp

                <article class="flex h-full flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                            {{ $project['type'] }}
                        </span>

                        <span class="text-xs font-medium text-slate-500">
                            {{ implode(' · ', $project['technologies']) }}
                        </span>
                    </div>

                    <div class="mt-6 overflow-hidden rounded-xl border border-slate-200 bg-slate-50">
                        <img
                            src="{{ asset($project['image']) }}"
                            alt="{{ $project['title'] }}"
                            class="aspect-video w-full object-cover object-top"
                            loading="lazy" />
                    </div>

                    <h3 class="mt-5 text-xl font-bold leading-8 text-slate-950">
                        {{ $project['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-slate-600">
                        {{ $project['description'] }}
                    </p>

                    <div class="mt-6">
                        <h4 class="text-sm font-semibold text-slate-900">
                            {{ $lang === 'id' ? 'Fitur utama' : 'Key features' }}
                        </h4>

                        <ul class="mt-3 space-y-3">
                            @foreach ($project['features'] as $feature)
                            <li class="flex items-start gap-3 text-sm leading-6 text-slate-600">
                                <svg
                                    class="mt-1 h-4 w-4 shrink-0 text-blue-600"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true">
                                    <path
                                        fill-rule="evenodd"
                                        d="M16.704 5.29a1 1 0 010 1.414l-7.2 7.2a1 1 0 01-1.414 0l-3.6-3.6a1 1 0 011.414-1.414l2.893 2.893 6.493-6.493a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-6 flex flex-wrap gap-2">
                        @foreach ($project['technologies'] as $technology)
                        <span class="rounded-md bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700">
                            {{ $technology }}
                        </span>
                        @endforeach
                    </div>

                    <div class="mt-auto pt-7">
                        <a
                            href="{{ $project['github'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">
                            GitHub Repository
                            <svg
                                class="h-4 w-4"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                aria-hidden="true">
                                <path d="M7 17 17 7M7 7h10v10" />
                            </svg>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="experience" class="border-t border-slate-200 bg-slate-50 px-6 py-20 sm:px-8 lg:px-10">
        <div class="mx-auto max-w-5xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">
                {{ $lang === 'id' ? 'Pengalaman' : 'Experience' }}
            </p>

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                {{ $lang === 'id' ? 'Pengalaman Profesional' : 'Professional Experience' }}
            </h2>

            <div class="mt-10 space-y-6">
                @foreach ($experience as $item)
                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                    <div class="flex gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-700">
                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                aria-hidden="true">
                                <rect x="3" y="7" width="18" height="14" rx="2" />
                                <path d="M8 7V4h8v3M3 12h18M10 12v2h4v-2" />
                            </svg>
                        </div>

                        <div class="min-w-0 flex-1">
                            <h3 class="text-xl font-bold text-slate-950">
                                {{ $item['position'] }}
                            </h3>

                            <p class="mt-1 font-medium text-blue-700">
                                {{ $item['company'] }}
                            </p>

                            <ul class="mt-5 space-y-3">
                                @foreach ($item['description'][$lang] as $description)
                                <li class="flex items-start gap-3 text-sm leading-7 text-slate-600 sm:text-base">
                                    <span class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-blue-600"></span>
                                    <span>{{ $description }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="certificates" class="border-t border-slate-200 bg-slate-50 px-6 py-20 sm:px-8 lg:px-10">
        <div class="mx-auto max-w-5xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">
                {{ $lang === 'id' ? 'Sertifikasi' : 'Certifications' }}
            </p>

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                {{ $lang === 'id'
                ? 'Sertifikat & Pencapaian'
                : 'Certificates & Achievements' }}
            </h2>

            <div class="mt-8 grid gap-6 sm:grid-cols-2">
                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700">
                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                aria-hidden="true">
                                <ellipse cx="12" cy="5" rx="8" ry="3" />
                                <path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5" />
                                <path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3" />
                            </svg>
                        </div>

                        <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                            Oracle Academy
                        </span>
                    </div>

                    <h3 class="mt-5 text-xl font-bold leading-7 text-slate-950">
                        Database Design and Programming with SQL
                    </h3>

                    <p class="mt-2 text-sm font-medium text-slate-600">
                        Award of Completion
                    </p>

                    <p class="mt-4 text-sm leading-7 text-slate-600">
                        {{ $lang === 'id'
                        ? 'Penghargaan atas penyelesaian seluruh coursework dalam program Database Design and Programming with SQL.'
                        : 'Awarded for satisfactory completion of all coursework in Database Design and Programming with SQL.' }}
                    </p>

                    <div class="mt-5 flex items-center gap-2 text-sm text-slate-500">
                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true">
                            <rect x="3" y="5" width="18" height="16" rx="2" />
                            <path d="M16 3v4M8 3v4M3 10h18" />
                        </svg>
                        15 December 2024
                    </div>

                    <a
                        href="{{ asset('certificates/Sertifikat Database SQL - ERIK MAULANA HARDIANTO.pdf') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">
                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true">
                            <path d="M14 3h7v7M10 14 21 3" />
                            <path d="M19 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h7" />
                        </svg>

                        {{ $lang === 'id'
                        ? 'Lihat Sertifikat'
                        : 'View Certificate' }}
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section id="contact" class="border-t border-slate-200 bg-white">
        <div class="mx-auto max-w-6xl px-6 py-20">

            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">
                {{ $lang === 'id' ? 'Kontak' : 'Get in touch' }}
            </p>

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950">
                {{ $content['contact_title'] }}
            </h2>

            <p class="mt-4 max-w-2xl leading-7 text-slate-600">
                {{ $content['contact_text'] }}
            </p>

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=emhardianto@gmail.com"
                    class="group rounded-2xl border border-slate-200 p-5 transition hover:-translate-y-1 hover:border-blue-300 hover:shadow-md">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 7l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 font-semibold text-slate-900">Email</h3>
                    <p class="mt-1 break-words text-sm text-slate-600">
                        {{ $lang === 'id' ? 'Hubungi saya melalui email' : 'Send me an email' }}
                    </p>
                </a>

                <a href="https://github.com/erikmaulanahardi"
                    target="_blank" rel="noopener noreferrer"
                    class="group rounded-2xl border border-slate-200 p-5 transition hover:-translate-y-1 hover:border-blue-300 hover:shadow-md">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .9a11.1 11.1 0 00-3.51 21.63c.55.1.76-.24.76-.53v-2.08c-3.1.67-3.76-1.32-3.76-1.32-.5-1.29-1.24-1.63-1.24-1.63-1.01-.69.08-.68.08-.68 1.12.08 1.71 1.15 1.71 1.15 1 .1.76 2.11 3.36 1.6.1-.72.39-1.2.7-1.48-2.48-.28-5.09-1.24-5.09-5.53 0-1.22.44-2.22 1.15-3-.12-.28-.5-1.42.11-2.96 0 0 .94-.3 3.05 1.15a10.6 10.6 0 015.55 0c2.12-1.44 3.05-1.15 3.05-1.15.61 1.54.23 2.68.11 2.96.72.78 1.15 1.78 1.15 3 0 4.3-2.61 5.25-5.1 5.52.4.35.75 1.03.75 2.08V22c0 .29.2.63.76.52A11.1 11.1 0 0012 .9z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 font-semibold text-slate-900">GitHub</h3>
                    <p class="mt-1 text-sm text-slate-600">
                        {{ $lang === 'id' ? 'Lihat proyek dan kode saya' : 'Explore my projects and code' }}
                    </p>
                </a>

                <a href="https://www.linkedin.com/in/erik-maulana-hardianto-8479392ab/"
                    target="_blank" rel="noopener noreferrer"
                    class="group rounded-2xl border border-slate-200 p-5 transition hover:-translate-y-1 hover:border-blue-300 hover:shadow-md">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.45 2H3.55C2.69 2 2 2.68 2 3.52v16.96c0 .84.69 1.52 1.55 1.52h16.9c.86 0 1.55-.68 1.55-1.52V3.52c0-.84-.69-1.52-1.55-1.52zM8 18H5V9h3v9zM6.5 7.75a1.75 1.75 0 110-3.5 1.75 1.75 0 010 3.5zM19 18h-3v-4.5c0-1.07-.02-2.45-1.5-2.45S12.75 12.2 12.75 13.4V18h-3V9h2.88v1.23h.04A3.16 3.16 0 0115.5 8.7c3 0 3.5 1.97 3.5 4.53V18z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 font-semibold text-slate-900">LinkedIn</h3>
                    <p class="mt-1 text-sm text-slate-600">
                        {{ $lang === 'id' ? 'Mari terhubung secara profesional dengan saya' : 'Connect professionally with me' }}
                    </p>
                </a>

                <!-- <a href="https://instagram.com/erikcharonz._"
               target="_blank" rel="noopener noreferrer"
               class="group rounded-2xl border border-slate-200 p-5 transition hover:-translate-y-1 hover:border-blue-300 hover:shadow-md">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r=".8" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="mt-4 font-semibold text-slate-900">Instagram</h3>
                <p class="mt-1 text-sm text-slate-600">
                    {{ $lang === 'id' ? 'Kenali saya lebih jauh' : 'Get to know me better' }}
                </p>
            </a> -->

            </div>
        </div>
    </section>
</main>

<footer class="border-t border-slate-200 bg-slate-50">
    <div class="mx-auto flex max-w-6xl flex-col gap-2 px-6 py-6 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between">
        <p>&copy; {{ date('Y') }} Erik Maulana Hardianto</p>
        <p>{{ $content['footer'] }}</p>
    </div>
</footer>
@endsection