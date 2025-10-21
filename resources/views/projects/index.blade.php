<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Portofolio — Umi Fatmawati</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a id="top"></a>


    <!-- Navbar -->
    <header class="nav-wrap">
        <nav class="nav container">
            <div class="brand">umiftmwtiii</div>
            <ul class="nav-links">
                <li><a href="#home"
                        onclick="document.getElementById('home').scrollIntoView({ behavior: 'smooth' }); return false;">Home</a>
                </li>
                <li><a href="#about"
                        onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' }); return false;">About</a>
                </li>
                <li><a href="#skills"
                        onclick="document.getElementById('skills').scrollIntoView({ behavior: 'smooth' }); return false;">Skills</a>
                </li>
                <li><a href="#projects"
                        onclick="document.getElementById('projects').scrollIntoView({ behavior: 'smooth' }); return false;">Project</a>
                </li>
                <li><a href="#timeline"
                        onclick="document.getElementById('timeline').scrollIntoView({ behavior: 'smooth' }); return false;">Timeline</a>
                </li>

            </ul>
            <button class="nav-cta"
                onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });">
                Contact
            </button>

        </nav>
    </header>

    <!-- Hero -->
    <section id="home" class="hero">
        <div class="container hero-grid">
            <div class="hero-left">
                <h1 class="hero-title">Halo, aku <span class="accent">Umi Fatmawati</span></h1>
                <p class="hero-sub"> Aspiring <span id="typing"></span></p>
                <div class="hero-actions">
                    <a class="btn btn-ghost" href="{{ asset('images/cv.pdf') }}" target="_blank">Lihat CV</a>
                </div>
            </div>

            <div class="hero-right">
                <!-- Donut profile -->
                <div class="donut-wrap" aria-hidden="true">
                    <!-- animated SVG donut (background strokes) -->
                    <svg class="donut" viewBox="0 0 120 120" width="240" height="240"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <defs>
                            <linearGradient id="g1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#00b7eb" />
                                <stop offset="100%" stop-color="#b9f2ff" />
                            </linearGradient>
                        </defs>

                        <circle cx="60" cy="60" r="48" class="donut-bg" />
                        <!-- skill arcs: stroke-dasharray animated via CSS -->
                        <circle cx="60" cy="60" r="48" class="donut-arc arc-1" data-percent="85" />
                        <circle cx="60" cy="60" r="38" class="donut-arc arc-2" data-percent="75" />
                        <circle cx="60" cy="60" r="28" class="donut-arc arc-3" data-percent="60" />
                    </svg>

                    <div class="profile-frame">
                        <!-- ganti path gambar sesuai punyamu -->
                        <img class="profile-img" src="{{ asset('images/profil.jpg') }}" alt="Foto Profil">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="section container reveal">
        <h2 class="section-title">About Me</h2>
        <div class="about-grid">
            <div class="about-card">
                <p>Saya siswa SMK jurusan Pengembangan Perangkat Lunak dan Gim (PPLG). Fokus pada front-end, desain
                    UI/UX, dan proyek
                    sekolah. Saya suka belajar AI dan ingin terjun ke bidang pengembangan aplikasi yang estetis dan
                    fungsional.</p>
                <ul class="about-list">
                    <li><strong>Sekolah:</strong> SMK Negeri 3 Banjar</li>
                    <li><strong>Kelas:</strong> XII PPLG </li>
                    <li><strong>Minat:</strong> Web, Desain, AI</li>
                </ul>
            </div>
            <div class="about-stats">
                <div class="stat">
                    <div class="stat-value">3+</div>
                    <div class="stat-label">Proyek Sekolah</div>
                </div>
                <div class="stat">
                    <div class="stat-value">Canva</div>
                    <div class="stat-label">Desain UI</div>
                </div>
                <div class="stat">
                    <div class="stat-value">Aktif</div>
                    <div class="stat-label">Komunitas Sekolah</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="section container reveal">
        <h2 class="section-title">Skills</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <h3>Front-end</h3>
                <div class="skill-bar" data-percent="85"><span></span></div>
            </div>
            <div class="skill-card">
                <h3>UI / UX & Canva</h3>
                <div class="skill-bar" data-percent="70"><span></span></div>
            </div>
            <div class="skill-card">
                <h3>JavaScript</h3>
                <div class="skill-bar" data-percent="45"><span></span></div>
            </div>
            <div class="skill-card">
                <h3>Laravel / PHP</h3>
                <div class="skill-bar" data-percent="38"><span></span></div>
            </div>
        </div>
    </section>

    <!-- Projects Sekolah-->
    <section id="projects" class="section container reveal">
        <h2 class="section-title">Project Sekolah</h2>
        <div class="projects-grid">
            <!-- Card 1 -->
            <article class="project-card">
                <div class="project-media-4"><img src="{{ asset('images/kalkulator.png') }}" alt="Project 1"></div>
                <div class="project-body">
                    <h4>Aplikasi Kalkulator</h4>
                    <p>Proyek ini dibuat sebagai latihan awal untuk
                        memahami dasar-dasar Flutter. Aplikasi ini dapat menambahkan, mengurangi, mengalikan, dan
                        membagi dua angka.</p>
                    <div class="project-tags"><span>UI</span><span>Flutter</span></div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="project-card">
                <div class="project-media-2"><img src="{{ asset('images/buku.png') }}" alt="Project 2"></div>
                <div class="project-body">
                    <h4>Aplikasi Buku</h4>
                    <p>Aplikasi Buku dengan CRUD sederhana menggunakan Laravel dan PHP.</p>
                    <div class="project-tags"><span>Laravel</span><span>PHP</span></div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="project-card">
                <div class="project-media-3"><img src="{{ asset('images/latihan.png') }}" alt="Project 3"></div>
                <div class="project-body">
                    <h4>Yamaha</h4>
                    <p>Project awal pembelajaran HTML dan CSS dengan tema website Yamaha.</p>
                    <div class="project-tags"><span>Design</span><span>Figma</span></div>
                </div>
            </article>
        </div>
    </section>

    <!-- Projects Real -->
    <section id="projects" class="section container reveal">
        <h2 class="section-title">Project Real</h2>
        <div class="projects-grid">

            <!-- Card 1 -->
            <article class="project-card">
                <div class="project-media-2"><img src="{{ asset('images/Haadirin.png') }}" alt="Project 2"></div>
                <div class="project-body">
                    <h4>Aplikasi Haadirin</h4>
                    <p>Ikut serta terlibat membuat panduan pada aplikasi haadirin di perusahaan Access Media</p>
                    <div class="project-tags"><span>Panduan</span><span>Haadirin</span></div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="project-card">
                <div class="project-media-1"><img src="{{ asset('images/tanimas.png') }}" alt="Project 1"></div>
                <div class="project-body">
                    <h4>Landing Page Website Tanimas</h4>
                    <p>Ikut serta terlibat membuat landing page website Tanimas di perusahaan Access Media</p>
                    <div class="project-tags"><span>UI</span><span>HTML & Tailwind</span></div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="project-card">
                <div class="project-media-3"><img src="{{ asset('images/f27.png') }}" alt="Project 3"></div>
                <div class="project-body">
                    <h4>Aplikasi Sistem Informasi Pengelolaan F27 Custom</h4>
                    <p>Menjadi bagian dari tim training pada aplikasi F27 Custom di perusahaan Access Media</p>
                    <div class="project-tags"><span>Data Management System</span>
                    </div>
            </article>

        </div>
    </section>

    <!-- Timeline -->
    <section id="timeline" class="section container reveal">
        <h2 class="section-title">Timeline Pendidikan</h2>
        <ol class="timeline">
            <li>
                <div class="year">2023</div>
                <div class="content">
                    <strong>Mulai belajar Database, bahasa C++, dan HTML</strong>
                    <p>Pertama kali mempelajari dasar-dasar database, bahasa C++, dan HTML di sekolah.
                        Dari situ mulai tertarik untuk mendalami dunia pemrograman dan pembuatan website.”</p>
                </div>
            </li>
            <li>
                <div class="year">2024</div>
                <div class="content">
                    <strong>Lanjut mempelajari Figma, CSS, dan JavaScript. Proyek pertama: Website</strong>
                    <p>Mengerjakan proyek website sederhana sebagai tugas.</p>
                </div>
            </li>
            <li>
                <div class="year">2025</div>
                <div class="content">
                    <strong>Belajar Laravel, Figma & membuat aplikasi tugas</strong>
                    <p>Memulai pengenalan Laravel dan PHP untuk backend</p>
                </div>
            </li>
        </ol>
    </section>


    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="contact section reveal">
        <div class="container">
            <h2 class="section-title">Contact</h2>

            <div class="contact">
                <!-- Form -->
                <form action="https://formspree.io/f/xblzbopn" method="POST">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama kamu" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="email@domain.com" required>

                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" placeholder="Halo, saya ingin ..." required></textarea>

                    <button type="submit">Kirim Pesan</button>
                </form>

                <div class="info">
                    <h3>Hubungi Saya</h3>
                    <p>Kalau kamu punya pertanyaan, kerja sama, atau sekadar mau kenalan — kirim aja pesannya lewat form
                        di samping 👋</p>

                    <div class="contact-links">
                        <a href="https://wa.me/6287730123223" class="link-item" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i> Chat via WhatsApp
                        </a>


                        <a href="https://www.linkedin.com/in/umi-fatmawati-1b638538b" class="link-item"
                            target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                            <span>Umi Fatmawati</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div>© {{ date('Y') }} Umi Fatmawati — SMK PPLG</div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <button id="btnTop" class="back-to-top" title="Ke atas">↑</button>

    <!-- Script -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
