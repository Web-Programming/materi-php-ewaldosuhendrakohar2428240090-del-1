# KISI-KISI UTS — Penjelasan Kode Proyek Raharja Sawit

> Dokumen ini menjelaskan fungsi setiap baris kode dari kelima file utama proyek website portofolio **Raharja Sawit**.

---

## Daftar Isi

1. [index.php](#1-indexphp)
2. [privacy-policy.php](#2-privacy-policyphp)
3. [terms-conditions.php](#3-terms-conditionsphp)
4. [css/style.css](#4-cssstylecss)
5. [js/script.js](#5-jsscriptjs)

---

## 1. `index.php`

File ini adalah **halaman utama (homepage)** website Raharja Sawit. Berisi navbar, hero section, tentang, galeri hasil kebun, form kontak, dan footer.

### `<head>` — Bagian Kepala Dokumen

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 1 | `<!DOCTYPE html>` | Deklarasi tipe dokumen sebagai HTML5 agar browser merender halaman dengan standar modern |
| 2 | `<html lang="id">` | Membuka tag HTML dan menyatakan bahasa halaman adalah **Indonesia** (`id`) untuk aksesibilitas dan SEO |
| 3 | `<head>` | Membuka bagian `head` — berisi metadata dan link ke resource eksternal, tidak tampil di halaman |
| 4 | `<meta charset="UTF-8">` | Menetapkan encoding karakter ke **UTF-8** agar karakter khusus (huruf Indonesia, simbol) tampil benar |
| 5 | `<meta name="viewport" ...>` | Membuat halaman **responsif** di perangkat mobile — `width=device-width` menyamakan lebar dengan layar, `initial-scale=1.0` mencegah zoom otomatis |
| 6 | `<title>...</title>` | Judul halaman yang tampil di tab browser dan hasil pencarian Google |
| 7 | `<link href="https://fonts.googleapis.com/...">` | Mengimpor font **Outfit** dari Google Fonts dengan variasi berat 300 (tipis), 400 (normal), 600 (semi-bold), 700 (bold) |
| 8 | `<link href="bootstrap...css">` | Mengimpor framework CSS **Bootstrap 5.3** dari CDN untuk sistem grid, komponen, dan utilitas siap pakai |
| 9 | `<link rel="stylesheet" href="bootstrap-icons...">` | Mengimpor library **Bootstrap Icons** untuk ikon SVG siap pakai (dipakai di halaman lain) |
| 10 | `<link rel="stylesheet" href="css/style.css">` | Menghubungkan file CSS **kustom** milik proyek ini — memuat semua gaya unik yang dibuat sendiri |

### `<body>` — Navbar

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 12 | `<body>` | Membuka tag body — semua konten yang tampil di browser ada di sini |
| 13 | `<!-- Navbar -->` | Komentar HTML untuk menandai awal bagian navbar (tidak tampil di browser) |
| 14 | `<nav class="navbar navbar-expand-lg fixed-top shadow-sm" id="mainNav">` | Membuat **navbar Bootstrap** yang: `navbar-expand-lg` = tampil horizontal di layar besar, `fixed-top` = selalu menempel di atas layar saat scroll, `shadow-sm` = bayangan tipis, `id="mainNav"` = target JavaScript |
| 15 | `<div class="container">` | Membungkus konten navbar agar lebarnya terbatas dan **terpusat** sesuai breakpoint Bootstrap |
| 16 | `<a class="navbar-brand fw-bold text-uppercase" href="index.php">RAHARJA <span class="text-gold">SAWIT</span></a>` | Logo/brand navbar: teks "RAHARJA" berwarna default (hijau), kata "SAWIT" diberi kelas `.text-gold` agar berwarna emas — klik mengarah ke `index.php` |
| 17 | `<button class="navbar-toggler" ...>` | Tombol **hamburger menu** yang muncul di layar kecil/mobile untuk toggle menu navigasi |
| 18 | `<span class="navbar-toggler-icon"></span>` | Ikon tiga garis (≡) di dalam tombol hamburger, dirender oleh Bootstrap |
| 19 | `</button>` | Menutup tag button hamburger |
| 20 | `<div class="collapse navbar-collapse" id="navbarNav">` | Kontainer menu yang **tersembunyi** di mobile dan muncul saat tombol hamburger diklik — `id="navbarNav"` dipasangkan dengan `data-bs-target` di tombol |
| 21 | `<ul class="navbar-nav ms-auto">` | Daftar item navigasi — `ms-auto` (margin-start: auto) mendorong menu ke **sisi kanan** |
| 22 | `<li class="nav-item"><a class="nav-link px-3 active" href="#hero">Beranda</a></li>` | Item menu pertama — `active` menandai halaman ini sebagai halaman aktif, `href="#hero"` scroll ke section hero di halaman yang sama |
| 23 | `<li ... href="#tentang">Tentang</a></li>` | Item menu kedua — klik akan scroll ke section `id="tentang"` |
| 24 | `<li ... href="#hasil">Hasil Kebun</a></li>` | Item menu ketiga — scroll ke section galeri hasil kebun |
| 25 | `<li ... href="#hubungi">Hubungi Kami</a></li>` | Item menu keempat — scroll ke section form kontak |
| 26 | `</ul>` | Menutup daftar navbar |
| 27 | `</div>` | Menutup div collapse |
| 28 | `</div>` | Menutup div container |
| 29 | `</nav>` | Menutup tag navbar |

### Hero Section (Baris 31–38)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 32 | `<section id="hero" class="d-flex align-items-center">` | Section hero dengan `id="hero"` sebagai anchor link — `d-flex align-items-center` memusatkan konten secara **vertikal** |
| 33 | `<div class="container text-center text-white">` | Container isi hero — semua teks **rata tengah** dan berwarna putih |
| 34 | `<h1 class="display-3 fw-bold mb-3 animate-up">Nyawit Raharja</h1>` | Judul besar halaman — `display-3` = font ekstra besar Bootstrap, `fw-bold` = tebal, `animate-up` = kelas animasi kustom CSS (fade in dari bawah) |
| 35 | `<p class="lead mb-5 opacity-75 animate-up delay-1">...</p>` | Paragraf tagline — `lead` = font lebih besar, `opacity-75` = sedikit transparan, `delay-1` = animasi tertunda 0.2 detik |
| 36 | `<a href="#tentang" class="btn btn-gold btn-lg px-5 py-3 rounded-pill fw-semibold animate-up delay-2">Kenali Saya Lebih Dekat</a>` | Tombol Call-to-Action — `btn-gold` warna emas kustom, `rounded-pill` sudut membulat penuh, `delay-2` animasi muncul paling akhir (0.4s) |

### About Section (Baris 40–77)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 41 | `<section id="tentang" class="py-5">` | Section tentang dengan anchor `#tentang` — `py-5` = padding vertikal besar |
| 43 | `<div class="row align-items-center g-5">` | Row Bootstrap 2 kolom — `align-items-center` sejajarkan secara vertikal, `g-5` = jarak antar kolom besar |
| 44–47 | `<div class="col-lg-5">` + `<div class="img-wrapper ...">` | Kolom kiri 5/12 — berisi wrapper foto profil dengan class `rounded-circle overflow-hidden` agar gambar **berbentuk lingkaran** |
| 46 | `<img src="assets/img/profile.png" ...>` | Gambar profil Nyawit Raharja |
| 49–74 | `<div class="col-lg-7">` | Kolom kanan 7/12 — berisi teks perkenalan dan kartu statistik |
| 51–52 | `<p class="text-muted ...">` | Paragraf bio — `text-muted` warna abu-abu lembut |
| 54–73 | `<div class="row text-center g-4">` ... `stat-card` | Tiga kartu statistik dalam grid 3 kolom (`col-md-4`) |
| 57 | `<h3 class="counter" data-target="50">0</h3>` | Angka counter yang mulai dari 0 dan akan dianimasi JavaScript menuju nilai `data-target="50"` (Hektar Lahan) |
| 63 | `data-target="100"` | Target counter kedua: 100% Organik Parsial |
| 69 | `data-target="25"` | Target counter ketiga: 25 Tahun Pengalaman |

### Gallery Section (Baris 79–126)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 80 | `<section id="hasil" class="py-5 bg-light">` | Section galeri dengan background abu-abu muda (`bg-light`) untuk membedakan dari section lain |
| 83 | `<h2 class="fw-bold">Dokumentasi & Hasil Panen</h2>` | Judul section — `&` ditulis sebagai entitas HTML `&` untuk keamanan |
| 84 | `<div class="divider mx-auto mb-4"></div>` | Garis pemisah kuning dekoratif — `mx-auto` memusatkannya secara horizontal |
| 89–98 | Card 1 | Kartu galeri pertama: `gallery-card` (hover efek), `hover-zoom` pada gambar (zoom saat hover), gambar `seeds.png` = Pembibitan Unggul |
| 101–110 | Card 2 | Kartu galeri kedua: gambar `maintenance.png` = Pemeliharaan Intensif |
| 113–122 | Card 3 | Kartu galeri ketiga: gambar `harvest.png` = Panen Raya TBS |

### Contact Section (Baris 128–160)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 129 | `<section id="hubungi" class="py-5">` | Section kontak dengan anchor `#hubungi` |
| 132 | `<div class="col-lg-8">` | Kolom form, lebar 8/12 dan **terpusat** (`justify-content-center`) |
| 133 | `<div class="contact-card p-5 rounded-5 shadow-lg text-center">` | Card putih besar berisi form — `rounded-5` = sudut sangat membulat, `shadow-lg` = bayangan besar |
| 137 | `<form id="contactForm" action="process_contact.php" method="POST">` | Form HTML — `id="contactForm"` untuk JavaScript, `action` = file PHP penerima data, `method="POST"` = data dikirim via body (tidak terlihat di URL) |
| 141 | `<input type="text" ... name="nama" ... required>` | Input nama — `required` = wajib diisi, `name="nama"` = nama field yang dikirim ke server |
| 145 | `<input type="email" ... name="email" ... required>` | Input email — `type="email"` memastikan format email valid sebelum submit |
| 149 | `<textarea ... name="pesan" rows="4" ... required>` | Kotak teks pesan — `rows="4"` = tinggi 4 baris |
| 152 | `<button type="submit" ...>Kirim Pesan Sekarang</button>` | Tombol submit form dengan gaya `btn-gold` |

### Footer (Baris 161–172)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 162 | `<footer class="py-5 text-white">` | Footer gelap (warna diatur di CSS `#261f14`) dengan teks putih |
| 164 | `<p>© 2026 Portofolio Nyawit Raharja...</p>` | Copyright — `©` adalah simbol © dalam HTML |
| 165 | `<p class="small opacity-50 ...">` | Teks kecil dengan transparansi 50% |
| 167 | `<a href="privacy-policy.php" ...>Privacy Policy</a>` | Link ke halaman kebijakan privasi |
| 168 | `<span class="opacity-50">|</span>` | Pembatas vertikal antar link |
| 169 | `<a href="terms-conditions.php" ...>Terms & Conditions</a>` | Link ke halaman syarat ketentuan |
| 173–174 | `<script src="bootstrap...bundle.min.js">` | Memuat JavaScript Bootstrap (termasuk Popper.js) untuk komponen interaktif seperti navbar collapse |
| 176 | `<script src="js/script.js"></script>` | Memuat file JavaScript kustom proyek |

---

## 2. `privacy-policy.php`

File ini adalah **halaman Kebijakan Privasi** yang menjelaskan bagaimana Raharja Sawit mengumpulkan dan menggunakan data pengguna.

### `<head>` (Baris 1–76)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 1–10 | (sama dengan index.php) | Deklarasi DOCTYPE, bahasa Indonesia, meta charset, viewport, title "Kebijakan Privasi - Raharja Sawit", import font Outfit, Bootstrap CSS, Bootstrap Icons, dan style.css |
| 11 | `<style>` | Membuka blok CSS **inline** (khusus halaman ini saja, tidak perlu file terpisah) |
| 12–16 | `.policy-header { ... }` | Gaya header halaman: background **gradient hijau** dari `--forest-green` ke `--leaf-green`, padding besar atas-bawah, teks putih |
| 17–23 | `.policy-content { ... }` | Kontainer konten utama: background putih, sudut membulat 20px, bayangan besar, padding 40px, `margin-top: -40px` = **efek overlap** ke atas header |
| 24–28 | `.policy-section { ... }` | Setiap blok topik: margin bawah 40px, padding bawah 30px, garis pemisah bawah abu-abu |
| 29–31 | `.policy-section:last-child { border-bottom: none; }` | Menghapus garis pemisah pada section **terakhir** agar tidak ada garis di bagian bawah |
| 32–36 | `.policy-section h3 { color: var(--forest-green); ... }` | Judul setiap section: warna hijau tua, tebal (700), margin bawah |
| 37–42 | `.policy-section h4 { color: var(--leaf-green); ... }` | Sub-judul: warna hijau daun lebih terang, semi-bold (600) |
| 43–45 | `.policy-section ul { padding-left: 20px; }` | List diberi padding kiri agar bullet tidak terlalu ke tepi |
| 46–49 | `.policy-section li { margin-bottom: 10px; color: #555; }` | Setiap item list: jarak bawah, warna abu-abu gelap |
| 50–53 | `.policy-section p { color: #666; line-height: 1.8; }` | Paragraf: warna abu-abu lebih terang, `line-height: 1.8` = jarak antar baris lebar agar mudah dibaca |
| 54–61 | `.last-updated { ... }` | Badge "Terakhir Diperbarui": background emas, teks hijau tua, padding, `border-radius: 50px` = bentuk pill/oval, bold |
| 62–70 | `.back-btn { ... }` | Tombol kembali: background emas, teks hijau, tanpa border, sudut pill |
| 71–75 | `.back-btn:hover { background: #e5b82e; transform: translateY(-3px); }` | **Efek hover**: warna emas lebih gelap, tombol naik 3px ke atas |

### Navbar (Baris 79–95)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 80 | `<nav class="navbar navbar-expand-lg shadow-sm" id="mainNav">` | Navbar tanpa `fixed-top` di halaman ini (tidak sticky) — di halaman lain bisa scroll |
| 82 | `href="index.php"` (brand) | Klik logo kembali ke halaman utama |
| 88–91 | Link navigasi dengan `href="index.php"`, `href="index.php#tentang"`, dll. | Link mengarah ke halaman index dengan anchor — karena ini halaman terpisah, perlu prefix `index.php` |

### Header Section (Baris 97–109)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 98 | `<section class="policy-header">` | Section header dengan gaya gradient hijau |
| 101 | `<i class="bi bi-shield-check display-1">` | Ikon **perisai centang** dari Bootstrap Icons, ukuran `display-1` = sangat besar, menggambarkan keamanan/privasi |
| 103 | `<h1 class="fw-bold mb-3">Kebijakan Privasi</h1>` | Judul halaman H1 |
| 104 | `<p class="lead opacity-75">Komitmen Kami...</p>` | Sub-judul deskriptif |
| 105–107 | `<div class="last-updated ...">` | Badge tanggal pembaruan kebijakan |
| 106 | `<i class="bi bi-calendar-check me-2">` | Ikon kalender berwarna, `me-2` = margin kanan kecil |

### Konten Kebijakan (Baris 111–203)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 116–118 | `<a href="index.php" class="back-btn">` | Tombol "Kembali ke Beranda" di atas konten |
| 121–126 | `.policy-section` — Pendahuluan | Menjelaskan tujuan dan ruang lingkup kebijakan privasi |
| 128–131 | `.policy-section` — Persetujuan | Dengan menggunakan website, pengguna dianggap menyetujui kebijakan ini |
| 133–138 | `.policy-section` — Informasi yang Dikumpulkan | Jenis data yang dikumpulkan saat pengguna menghubungi atau mendaftar |
| 140–152 | `.policy-section` — Cara Penggunaan | Daftar `<ul>` berisi 7 poin cara data digunakan (operasional, pemasaran, pencegahan penipuan, dll.) |
| 154–157 | `.policy-section` — Log Files | Penjelasan file log server (IP, browser, ISP, timestamp) |
| 159–163 | `.policy-section` — Cookies | Penjelasan penggunaan cookie untuk menyimpan preferensi pengguna |
| 165–169 | `.policy-section` — Kebijakan Mitra Periklanan | Penjelasan bahwa iklan pihak ketiga punya cookie dan teknologi sendiri |
| 171–175 | `.policy-section` — Hak Privasi | Pengguna berhak akses, perbarui, atau hapus data kapan saja |
| 177–194 | `.policy-section` — Hubungi Kami | Kontak email dan telepon dalam dua kolom Bootstrap (`col-md-6`) |
| 196–199 | Tombol kembali kedua | Tombol "Kembali ke Beranda" di bawah konten (duplikasi untuk UX) |

### Footer & Script (Baris 205–221)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 206–216 | `<footer>` | Footer identik dengan index.php — copyright, tagline, link Privacy Policy (dibold karena halaman aktif) dan Terms |
| 219 | `<script src="bootstrap...bundle.min.js">` | Bootstrap JS tetap dimuat untuk navbar collapse di mobile |

---

## 3. `terms-conditions.php`

File ini adalah **halaman Syarat dan Ketentuan** yang berisi aturan penggunaan website Raharja Sawit. Strukturnya sangat mirip dengan `privacy-policy.php`.

### `<head>` — CSS Inline Khusus (Baris 11–83)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 12–16 | `.terms-header { ... }` | Identik dengan `.policy-header` — gradient hijau, padding, teks putih |
| 17–23 | `.terms-content { ... }` | Identik dengan `.policy-content` — card putih dengan overlap -40px |
| 24–53 | `.terms-section` | Sama persis dengan `.policy-section` — garis pemisah, warna teks h3/h4/li/p |
| 54–61 | `.last-updated` | Identik — badge emas |
| 62–75 | `.back-btn` dan `.back-btn:hover` | Identik — tombol emas dengan efek hover |
| 76–82 | `.highlight-box { ... }` | **Kelas unik di halaman ini** — kotak dekoratif dengan: background kuning sangat transparan (gradient), border kiri kuning 4px solid, `border-radius: 10px`, digunakan untuk menampilkan definisi terminologi di section "Selamat Datang" |

### Header Section (Baris 104–116)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 108 | `<i class="bi bi-file-text display-1">` | Ikon **dokumen teks** (berbeda dari policy yang pakai shield) — menggambarkan kontrak/ketentuan |
| 110 | `<h1>Syarat dan Ketentuan</h1>` | Judul halaman |
| 111 | `<p class="lead opacity-75">Aturan Penggunaan Website Raharja Sawit</p>` | Sub-judul deskriptif |

### Konten Syarat (Baris 118–227)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 128–140 | Section "Selamat Datang" | Pengantar S&K — berisi elemen `<div class="highlight-box">` yang menampilkan definisi terminologi (Klien, Perusahaan, Pihak) dalam kotak kuning bergaris |
| 132–139 | `.highlight-box` | Kotak terminologi — `fw-semibold` = teks semi-bold, daftar `<ul>` dengan `<strong>` untuk istilah-istilah |
| 142–154 | Section "Lisensi" | Hak kekayaan intelektual — daftar 4 larangan (dilarang menerbitkan ulang, menjual, mereproduksi, mendistribusikan konten) |
| 156–167 | Section "Hyperlinking" | Daftar organisasi yang boleh menautkan (pemerintah, mesin pencari, berita) dan syaratnya |
| 169–172 | Section "iFrames" | Larangan membuat frame/iframe yang mengubah tampilan website |
| 174–177 | Section "Tanggung Jawab Konten" | Klarifikasi bahwa Raharja Sawit tidak bertanggung jawab atas konten di website pihak ketiga |
| 179–182 | Section "Pencadangan Hak" | Hak Raharja Sawit untuk meminta penghapusan tautan kapan saja |
| 184–187 | Section "Penghapusan Tautan" | Prosedur jika ditemukan tautan yang menyinggung |
| 189–199 | Section "Penafian" | Pembatasan tanggung jawab hukum — daftar 4 hal yang tidak bisa dikecualikan (kematian, cedera, penipuan, dll.) |
| 201–218 | Section "Hubungi Kami" | Kontak email dan telepon dalam dua kolom Bootstrap |
| 220–224 | Tombol kembali | Tombol "Kembali ke Beranda" di bagian bawah konten |

### Footer & Script (Baris 229–244)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 230–239 | `<footer>` | Footer identik — link Terms & Conditions dibold (`fw-bold`) karena halaman ini aktif |
| 243 | `<script src="bootstrap...bundle.min.js">` | Bootstrap JS untuk navbar collapse |

---

## 4. `css/style.css`

File ini adalah **stylesheet utama global** yang digunakan oleh semua halaman dalam proyek. Menggunakan CSS Variables (Custom Properties) dan berbagai teknik modern.

### CSS Variables / Root (Baris 1–8)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 1 | `:root { ... }` | Selector pseudo-class untuk elemen paling atas (`<html>`) — digunakan untuk mendefinisikan **CSS Custom Properties** (variabel) yang berlaku global |
| 2 | `--forest-green: #1a4314;` | Variabel warna **hijau hutan tua** — digunakan pada navbar, judul, tombol |
| 3 | `--leaf-green: #2d5a27;` | Variabel warna **hijau daun** — sedikit lebih terang dari forest green |
| 4 | `--harvest-gold: #f4c430;` | Variabel warna **emas panen** — warna aksen utama (tombol, garis, badge) |
| 5 | `--premium-dark: #2c2c2c;` | Variabel warna **abu-abu sangat gelap** — warna teks utama body |
| 6 | `--soft-white: #f8f9fa;` | Variabel warna **putih lembut** — background card kontak |
| 7 | `--transition-smooth: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);` | Variabel **transisi halus** menggunakan fungsi cubic-bezier untuk animasi easing yang terasa natural (tidak kaku) |

### Body Global (Baris 10–15)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 11 | `font-family: 'Outfit', sans-serif;` | Menetapkan font utama ke **Outfit** (diimpor dari Google Fonts), fallback ke `sans-serif` |
| 12 | `color: var(--premium-dark);` | Warna teks default seluruh halaman — menggunakan variabel `--premium-dark` (#2c2c2c) |
| 13 | `scroll-behavior: smooth;` | Membuat **scroll halaman terasa mulus** (tidak langsung meloncat) saat klik anchor link |
| 14 | `overflow-x: hidden;` | Menyembunyikan scrollbar horizontal — mencegah layout "melar" ke samping saat ada elemen yang keluar batas |

### Navbar (Baris 17–70)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 18–23 | `#mainNav { ... }` | Style default navbar: background putih 95% opacity, **backdrop-filter: blur(10px)** = efek kaca buram (glassmorphism), transisi smooth, padding vertikal |
| 25–28 | `#mainNav.scrolled { ... }` | Saat JavaScript menambahkan class `scrolled` — background berubah ke **hijau tua**, padding mengecil (navbar jadi lebih tipis saat scroll) |
| 30–33 | `#mainNav.scrolled .navbar-brand, .nav-link { color: white !important; }` | Saat navbar berwarna hijau, teks brand dan link berubah **putih** agar kontras |
| 35–37 | `#mainNav.scrolled .nav-link.active { color: var(--harvest-gold) !important; }` | Link aktif saat navbar scrolled: **warna emas** agar tetap menonjol di atas hijau |
| 39–43 | `.navbar-brand { font-size: 1.5rem; letter-spacing: 1px; color: var(--forest-green) !important; }` | Gaya logo: ukuran font 1.5rem, jarak antar huruf 1px, warna hijau tua |
| 45–47 | `.text-gold { color: var(--harvest-gold); }` | Kelas utilitas untuk teks berwarna emas |
| 49–53 | `.nav-link { font-weight: 500; color: var(--forest-green) !important; position: relative; }` | Link navigasi: medium-bold, hijau, `position: relative` agar elemen `::after` (garis bawah) bisa diposisikan |
| 55–65 | `.nav-link::after { ... scaleX(0); }` | **Pseudo-element garis bawah** yang tersembunyi secara default (`scaleX(0)` = lebar nol), tinggi 2px, warna emas, animasi transform |
| 67–70 | `.nav-link:hover::after, .nav-link.active::after { transform: scaleX(1); }` | Garis bawah menjadi **full-width** (`scaleX(1)`) saat hover atau link aktif — efek underline animasi |

### Hero Section (Baris 72–92)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 73 | `#hero { height: 100vh; ... }` | Hero mengisi **100% tinggi viewport** |
| 75–76 | `background: linear-gradient(...), url('../assets/img/hero.png') ...` | **Dua layer background**: (1) overlay hitam semi-transparan di atas (2) gambar hero yang memenuhi layar (`center center/cover`) — overlay membuat teks tetap terbaca |
| 77 | `position: relative;` | Posisi relative agar child element bisa di-absolute |
| 78 | `padding-top: 80px;` | Padding atas 80px mencegah konten tertutup navbar fixed |
| 81–86 | `.btn-gold { ... }` | Tombol emas: background emas, border emas, teks hijau, transisi smooth |
| 88–92 | `.btn-gold:hover { background-color: #e5b82e; transform: translateY(-3px); box-shadow: ...; }` | Hover: warna emas lebih gelap, tombol **naik 3px**, bayangan muncul — efek "tombol terangkat" |

### Divider (Baris 94–100)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 95–100 | `.divider { width: 60px; height: 4px; background: var(--harvest-gold); border-radius: 2px; }` | **Garis dekoratif emas** berukuran 60×4px, sudut sedikit membulat — digunakan sebagai pemisah visual di bawah judul section |

### About Section (Baris 102–121)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 103–107 | `.img-wrapper img { width: 100%; height: auto; transition: transform 0.5s ease; }` | Gambar profil mengisi penuh wrapper, transisi transform |
| 109–111 | `.img-wrapper:hover img { transform: scale(1.05); }` | Hover pada wrapper: gambar **membesar 5%** dengan transisi lembut (efek zoom in) |
| 113–116 | `.stat-card { background: white; transition: var(--transition-smooth); }` | Kartu statistik: background putih, siap transisi |
| 118–121 | `.stat-card:hover { transform: translateY(-10px); border-color: var(--harvest-gold) !important; }` | Hover: kartu **naik 10px** dan border berubah emas |

### Gallery Section (Baris 123–139)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 124–126 | `.gallery-card { transition: var(--transition-smooth); }` | Card galeri siap transisi |
| 128–131 | `.gallery-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px ...; }` | Hover: card naik 10px, **bayangan besar** muncul di bawah |
| 133–135 | `.hover-zoom { transition: transform 0.5s ease; }` | Class untuk gambar yang akan di-zoom |
| 137–139 | `.gallery-card:hover .hover-zoom { transform: scale(1.1); }` | Saat hover card, gambar di dalamnya **zoom 1.1x** |

### Contact Section (Baris 141–150)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 142–145 | `.contact-card { background: var(--soft-white); border: 1px solid rgba(0,0,0,0.05); }` | Card form: background putih lembut, border sangat tipis hampir transparan |
| 147–150 | `.form-control:focus { border-color: var(--harvest-gold); box-shadow: 0 0 0 0.25rem rgba(244, 196, 48, 0.25); }` | Input saat **difokus**: border emas, glow kuning transparan — override style Bootstrap default |

### Footer (Baris 152–155)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 153–155 | `footer { background-color: #261f14; }` | Warna background footer: **coklat tua kehijauan** (meniru warna tanah/kebun) |

### Animasi (Baris 157–172)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 158–162 | `.animate-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.8s forwards; }` | Class animasi: elemen dimulai **transparan** dan **30px ke bawah**, kemudian dianimasikan dengan keyframe `fadeInUp` selama 0.8 detik — `forwards` mempertahankan keadaan akhir |
| 164 | `.delay-1 { animation-delay: 0.2s; }` | Tunda animasi 0.2 detik — untuk elemen kedua di hero |
| 165 | `.delay-2 { animation-delay: 0.4s; }` | Tunda animasi 0.4 detik — untuk tombol CTA hero |
| 167–172 | `@keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }` | Definisi animasi: dari state awal (opacity 0, geser 30px bawah) ke state akhir (opacity 1, posisi normal) |

### Responsive (Baris 174–178)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 175 | `@media (max-width: 768px) { ... }` | **Media query** — CSS di dalam hanya berlaku pada layar ≤768px (tablet/mobile) |
| 176 | `#hero h1 { font-size: 2.5rem; }` | Di mobile, judul hero diperkecil ke 2.5rem agar tidak terlalu besar |
| 177 | `.contact-card { padding: 2rem !important; }` | Di mobile, padding card kontak dikurangi ke 2rem agar tidak terlalu sempit |

---

## 5. `js/script.js`

File JavaScript ini menambahkan **interaktivitas** pada halaman — dieksekusi setelah semua HTML selesai dimuat.

### Inisialisasi (Baris 1–5)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 1 | `document.addEventListener('DOMContentLoaded', () => {` | Mendaftarkan event listener — semua kode di dalamnya baru **dieksekusi setelah DOM (seluruh HTML) selesai diparse**. Mencegah error akibat elemen belum ada |
| 2 | `const mainNav = document.getElementById('mainNav');` | Mengambil referensi elemen navbar (`id="mainNav"`) dan menyimpannya di variabel `mainNav` |
| 3 | `const counters = document.querySelectorAll('.counter');` | Mengambil **semua elemen** dengan kelas `.counter` (tiga angka statistik) sebagai NodeList |
| 4 | `const contactForm = document.getElementById('contactForm');` | Mengambil referensi elemen form kontak |

### Fitur 1: Navbar Scroll Effect (Baris 6–15)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 7 | `window.addEventListener('scroll', () => {` | Mendaftarkan listener pada event **scroll** jendela browser — dipanggil setiap kali pengguna scroll |
| 8 | `if (window.scrollY > 50) {` | Mengecek apakah halaman sudah discroll **lebih dari 50 pixel** dari atas |
| 9 | `mainNav.classList.add('scrolled', 'shadow-lg');` | Jika ya, tambahkan class `scrolled` (ubah BG ke hijau) dan `shadow-lg` (bayangan besar) |
| 10 | `mainNav.classList.remove('shadow-sm');` | Dan hapus class `shadow-sm` (bayangan kecil default) |
| 11–14 | `else { ... }` | Jika scroll < 50px (hampir di atas): hapus `scrolled` dan `shadow-lg`, kembalikan `shadow-sm` |

### Fitur 2: Counter Animation (Baris 17–47)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 18–20 | `const observerOptions = { threshold: 0.5 };` | Opsi Intersection Observer: `threshold: 0.5` = callback dipanggil saat **50% elemen terlihat** di viewport |
| 22 | `const counterObserver = new IntersectionObserver((entries, observer) => {` | Membuat instance **IntersectionObserver** — API browser modern untuk mendeteksi apakah elemen memasuki/keluar dari area pandang |
| 23 | `entries.forEach(entry => {` | Iterasi semua elemen yang sedang diobservasi |
| 24 | `if (entry.isIntersecting) {` | Jika elemen **terlihat** di layar |
| 25 | `const counter = entry.target;` | Menyimpan referensi elemen counter yang terlihat |
| 26 | `const target = +counter.getAttribute('data-target');` | Ambil nilai target dari atribut `data-target` — `+` mengkonversi string ke **angka** |
| 27 | `const speed = 200;` | Variabel kecepatan — semakin kecil, semakin lambat animasinya |
| 29 | `const updateCount = () => {` | Mendefinisikan fungsi rekursif `updateCount` yang akan dipanggil terus sampai target tercapai |
| 30 | `const count = +counter.innerText;` | Ambil nilai angka saat ini yang ditampilkan, konversi ke number |
| 31 | `const inc = target / speed;` | Hitung **increment per frame**: target dibagi speed (misal 50/200 = 0.25 per tick) |
| 33 | `if (count < target) {` | Jika angka belum mencapai target |
| 34 | `counter.innerText = Math.ceil(count + inc);` | Tambahkan increment, bulatkan ke atas — update tampilan |
| 35 | `setTimeout(updateCount, 1);` | Panggil diri sendiri lagi setelah **1 milidetik** (membuat loop animasi) |
| 37 | `} else {` | Jika angka sudah = target |
| 37 | `counter.innerText = target + (target === 50 ? '+' : target === 100 ? '%' : 'thn');` | Tambahkan **suffix** sesuai nilai target: 50 → "50+", 100 → "100%", selainnya → "thn" (25thn) |
| 41 | `updateCount();` | Mulai animasi counter |
| 42 | `observer.unobserve(counter);` | **Hentikan observasi** setelah animasi selesai — mencegah animasi berulang saat scroll balik |
| 47 | `counters.forEach(counter => counterObserver.observe(counter));` | Daftarkan semua elemen `.counter` ke observer agar dimonitor |

### Fitur 3: Smooth Scroll (Baris 49–61)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 50 | `document.querySelectorAll('a[href^="#"]').forEach(anchor => {` | Pilih semua `<a>` yang `href`-nya dimulai dengan `#` (anchor link internal) — lakukan untuk setiap elemen |
| 51 | `anchor.addEventListener('click', function (e) {` | Tambahkan listener klik pada setiap anchor — pakai `function` bukan arrow function agar `this` merujuk ke elemen yang diklik |
| 52 | `e.preventDefault();` | **Batalkan** perilaku default browser (langsung lompat ke anchor) |
| 53 | `const target = document.querySelector(this.getAttribute('href'));` | Cari elemen tujuan berdasarkan ID dari href |
| 54 | `if (target) {` | Jika elemen tujuan ditemukan |
| 55–58 | `window.scrollTo({ top: target.offsetTop - 70, behavior: 'smooth' });` | Scroll ke posisi elemen dikurangi **70px** (tinggi navbar fixed) agar judul section tidak tertutup navbar, dengan perilaku `smooth` |

### Fitur 4: Form Submission (Baris 63–82)

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 64 | `if (contactForm) {` | Cek apakah form ada di halaman (hanya ada di `index.php`) — mencegah error di halaman lain |
| 65 | `contactForm.addEventListener('submit', (e) => {` | Listener event **submit** form |
| 66 | `e.preventDefault();` | Batalkan submit default (agar tidak reload halaman/kirim ke server langsung dalam demo ini) |
| 69 | `const btn = contactForm.querySelector('button');` | Ambil tombol submit di dalam form |
| 70 | `const originalText = btn.innerText;` | Simpan teks asli tombol ("Kirim Pesan Sekarang") |
| 72 | `btn.disabled = true;` | **Nonaktifkan** tombol agar tidak bisa diklik dua kali saat proses |
| 73 | `btn.innerText = 'Mengirim...';` | Ubah teks tombol jadi "Mengirim..." sebagai feedback visual |
| 75 | `setTimeout(() => {` | Tunda eksekusi selama... |
| 76 | `alert('Pesan Anda telah terkirim!...');` | Tampilkan **alert popup** konfirmasi setelah 1.5 detik |
| 77 | `contactForm.reset();` | **Reset** semua field form ke kondisi kosong |
| 78 | `btn.disabled = false;` | Aktifkan kembali tombol |
| 79 | `btn.innerText = originalText;` | Kembalikan teks tombol ke semula |
| 80 | `}, 1500);` | Durasi timeout: **1500 milidetik = 1.5 detik** |
| 82 | `}` | Penutup `if (contactForm)` |
| 83 | `});` | Penutup event listener DOMContentLoaded |

---

## Ringkasan Arsitektur Proyek

```
UTS-Sawit/
├── index.php              → Halaman utama (homepage + form kontak)
├── privacy-policy.php     → Halaman kebijakan privasi
├── terms-conditions.php   → Halaman syarat dan ketentuan
├── css/
│   └── style.css          → Stylesheet global (variabel warna, animasi, layout)
├── js/
│   └── script.js          → JavaScript interaktif (navbar, counter, scroll, form)
└── assets/
    └── img/
        ├── hero.png        → Gambar latar hero section
        ├── profile.png     → Foto profil Nyawit Raharja
        ├── seeds.png       → Foto pembibitan
        ├── maintenance.png → Foto pemeliharaan
        └── harvest.png     → Foto panen
```

### Teknologi yang Digunakan

| Teknologi | Versi | Fungsi |
|-----------|-------|--------|
| HTML5 | — | Struktur halaman web |
| CSS3 | — | Styling & animasi |
| JavaScript (ES6+) | — | Interaktivitas (scroll, counter, form) |
| Bootstrap | 5.3.0 | Framework CSS grid & komponen |
| Bootstrap Icons | 1.11.1 | Library ikon SVG |
| Google Fonts (Outfit) | — | Typography premium |
| PHP | — | Ekstensi file (untuk masa depan: form processing) |
| Intersection Observer API | — | Deteksi elemen di viewport (counter animation) |
