<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan data berita.
     *
     * @return View
     */
    public function index(): View
    {
        // Data ini mensimulasikan apa yang akan Anda dapatkan dari database
        // menggunakan Model Eloquent di aplikasi nyata.
        $featuredArticle = [
            'category' => 'Artificial Intelligence',
            'title' => 'GPT-5 Diluncurkan: Era Baru AI yang Mengubah Segalanya',
            'author' => 'Sarah Tech',
            'date' => '5 menit lalu',
            'reads' => '12.5K',
            'image_url' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&h=400&fit=crop',
        ];

        $sideArticles = [
            ['category' => 'Gadget', 'title' => 'iPhone 16 Pro Max: Kamera 200MP Pertama dari Apple', 'excerpt' => 'Apple akhirnya menghadirkan sensor kamera 200 megapixel...'],
            ['category' => 'Startup', 'title' => 'Unicorn Baru Indonesia Raih Pendanaan $500 Juta', 'excerpt' => 'GoTo rival ini berhasil menutup Series D dengan valuasi...'],
            ['category' => 'Gaming', 'title' => 'PlayStation 6 Konfirmasi Tanggal Rilis Global', 'excerpt' => 'Sony umumkan konsol next-gen dengan performa 8K gaming...'],
        ];

        $latestNews = [
            ['category' => 'Teknologi', 'title' => 'Microsoft Luncurkan Windows 12 dengan AI Terintegrasi', 'excerpt' => 'Windows terbaru hadir dengan asisten AI...', 'image_url' => 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?w=400&h=200&fit=crop', 'read_time' => '5 menit'],
            ['category' => 'Keamanan', 'title' => 'Serangan Siber Global Targetkan Infrastruktur Kritikal', 'excerpt' => 'Kelompok hacker internasional melancarkan serangan...', 'image_url' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=400&h=200&fit=crop', 'read_time' => '7 menit'],
            ['category' => 'Blockchain', 'title' => 'Bitcoin Tembus Rekor Baru di Level $150,000', 'excerpt' => 'Cryptocurrency terbesar dunia mencapai all-time high...', 'image_url' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=400&h=200&fit=crop', 'read_time' => '4 menit'],
             ['category' => 'Startup', 'title' => 'TikTok Luncurkan Platform E-commerce di Indonesia', 'excerpt' => 'Platform video pendek ini kembali masuk pasar e-commerce...', 'image_url' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=400&h=200&fit=crop', 'read_time' => '6 menit'],
        ];

        // --- PERBAIKAN DI SINI ---
        // Kita ubah dari 'home' menjadi 'pages.home' untuk memberitahu Laravel
        // agar mencari file home.blade.php di dalam folder pages.
        return view('pages.home', compact('featuredArticle', 'sideArticles', 'latestNews'));
    }
}
