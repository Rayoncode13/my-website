/**
 * File: public/js/app.js
 * Description: Skrip JavaScript utama untuk fungsionalitas interaktif
 * pada aplikasi TechPulse.
 */

document.addEventListener('DOMContentLoaded', function() {

    // Smooth scrolling untuk link navigasi internal
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Menangani pengiriman form newsletter
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('.newsletter-input');
            const email = emailInput.value;
            // Di aplikasi nyata, Anda akan mengirim ini ke backend
            // Untuk sekarang, kita hanya menampilkan alert. Hindari alert di production.
            console.log(`Email untuk berlangganan: ${email}`);
            alert(`Terima kasih! Kami akan mengirimkan update ke ${email}`);
            this.reset();
        });
    }

    // Opsi untuk Intersection Observer (animasi saat scroll)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    // Callback untuk observer
    const observerCallback = function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                // Berhenti mengamati elemen setelah animasi berjalan
                observer.unobserve(entry.target);
            }
        });
    };

    // Membuat instance observer
    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Mengamati semua elemen yang ingin dianimasikan
    document.querySelectorAll('.news-card, .trending-item, .side-article, .featured-article').forEach(el => {
        // Atur state awal untuk animasi
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(el);
    });

    // Menangani fungsionalitas pencarian
    const searchBar = document.querySelector('.search-bar');
    if (searchBar) {
        searchBar.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value;
                if (searchTerm) {
                    // Di aplikasi nyata, ini akan mengarahkan ke halaman hasil pencarian
                    // window.location.href = '/search?q=' + encodeURIComponent(searchTerm);
                    alert(`Mencari: ${searchTerm}`);
                }
            }
        });
    }
});
