<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## TechPulse: Berita Teknologi Terkini

**TechPulse** adalah platform berita teknologi mutakhir yang dirancang untuk memberikan informasi terkini dan komprehensif seputar dunia teknologi. Dibangun di atas kerangka kerja Laravel yang kuat, aplikasi ini menyajikan artikel unggulan, berita terbaru, dan topik yang sedang tren dalam antarmuka yang intuitif dan responsif.

## Fitur Aplikasi

* **Dasbor Berita Komprehensif**: Menampilkan artikel unggulan, berita sisi, dan aliran berita terbaru untuk pengalaman membaca yang kaya.
* **Navigasi Berbasis Kategori**: Memungkinkan pengguna menjelajahi berita berdasarkan kategori spesifik seperti AI & ML, Gadget, Startup, Gaming, dan Blockchain.
* **Fungsionalitas Pencarian**: Fitur pencarian terintegrasi untuk menemukan artikel berita yang relevan dengan cepat.
* **Bagian Topik Tren**: Menyoroti artikel dan topik yang sedang populer untuk menjaga pengguna tetap terinformasi.
* **Langganan Buletin**: Pengguna dapat dengan mudah berlangganan buletin untuk menerima pembaruan berita teknologi terkini langsung ke kotak masuk mereka.
* **Desain Adaptif**: Menggunakan Tailwind CSS untuk memastikan pengalaman yang mulus di berbagai perangkat dan ukuran layar.
* **Animasi Visual**: Animasi scroll yang halus untuk meningkatkan interaksi dan estetika pengguna.

## Teknologi yang Digunakan

* **Laravel**: Kerangka kerja aplikasi web PHP yang digunakan untuk arsitektur backend yang kuat dan efisien.
* **Vite**: Tool pengembangan frontend modern untuk kompilasi aset yang cepat dan hot module reloading.
* **Tailwind CSS**: Kerangka kerja CSS utility-first yang memungkinkan pengembangan antarmuka pengguna yang cepat dan kustomisasi yang tinggi.
* **Axios**: Klien HTTP berbasis Promise untuk browser dan Node.js, digunakan untuk permintaan data asinkron.

## Memulai

Ikuti langkah-langkah ini untuk menyiapkan dan menjalankan proyek TechPulse di lingkungan lokal Anda.

### Prasyarat

Pastikan Anda telah menginstal perangkat lunak berikut di sistem Anda:

* PHP (versi 8.2 atau lebih tinggi)
* Composer
* Node.js (versi 16 atau lebih tinggi)
* npm atau Yarn

### Instalasi

1.  **Kloning Repositori:**
    ```bash
    git clone <URL_REPOSITORI_ANDA>
    cd my-website
    ```

2.  **Instal Dependensi Backend:**
    ```bash
    composer install
    ```

3.  **Instal Dependensi Frontend:**
    ```bash
    npm install
    ```

4.  **Konfigurasi Lingkungan:**
    Buat salinan file `.env.example` dan beri nama `.env`:
    ```bash
    cp .env.example .env
    ```

5.  **Buat Kunci Aplikasi:**
    Hasilkan kunci aplikasi Laravel:
    ```bash
    php artisan key:generate
    ```

6.  **Konfigurasi Database:**
    Secara default, proyek ini dikonfigurasi untuk menggunakan SQLite. Pastikan file database ada atau buatlah:
    ```bash
    touch database/database.sqlite
    ```
    Kemudian, jalankan migrasi database untuk membuat tabel yang diperlukan:
    ```bash
    php artisan migrate
    ```

7.  **Isi Database (Opsional):**
    Jika tersedia seeder data dummy, Anda dapat mengisinya dengan perintah berikut:
    ```bash
    php artisan db:seed
    ```

### Menjalankan Aplikasi

Untuk menjalankan server pengembangan dan memantau aset frontend, gunakan perintah berikut:

```bash
npm run dev
