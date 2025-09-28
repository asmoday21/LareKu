@extends('guru.guru_master')

@section('guru')
<style>
    :root {
        --primary-blue: #2563eb;
        --secondary-blue: #3b82f6;
        --accent-green: #16a34a;
        --warm-orange: #ea580c;
        --soft-purple: #7c3aed;
    }

    body {
        background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
    }

    .hero-section {
        background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
        color: white;
        padding: 2.5rem 2rem;
        margin: 1rem 0 2rem 0;
        border-radius: 1.5rem;
        text-align: center;
        box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
    }

    .hero-section h1 {
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .hero-section .lead {
        margin-bottom: 0.5rem;
        opacity: 0.95;
    }

    .stats-section {
        background: white;
        border-radius: 1rem;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
    }

    .stat-card {
        text-align: center;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 0.75rem;
        border: 1px solid #e2e8f0;
        transition: transform 0.2s ease;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        background: #f1f5f9;
    }

    .stat-number {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--primary-blue);
        display: block;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        color: #6b7280;
        font-size: 0.9rem;
    }

    .themes-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .theme-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .theme-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    }

    .theme-header {
        padding: 1.5rem;
        color: white;
        cursor: pointer;
        position: relative;
        user-select: none;
    }

    .theme-01 { background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue)); }
    .theme-02 { background: linear-gradient(135deg, var(--accent-green), #22c55e); }
    .theme-03 { background: linear-gradient(135deg, var(--warm-orange), #f97316); }
    .theme-04 { background: linear-gradient(135deg, var(--soft-purple), #8b5cf6); }

    .theme-number {
        position: absolute;
        top: 1rem;
        right: 1.5rem;
        font-size: 2.5rem;
        font-weight: 800;
        opacity: 0.2;
    }

    .theme-icon {
        font-size: 2.2rem;
        margin-bottom: 0.75rem;
        display: block;
    }

    .theme-title {
        font-weight: 600;
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }

    .theme-subtitle {
        opacity: 0.9;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .theme-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.85rem;
        opacity: 0.8;
    }

    .chevron-icon {
        transition: transform 0.3s ease;
        font-size: 1.2rem;
    }

    .theme-header[aria-expanded="true"] .chevron-icon {
        transform: rotate(180deg);
    }

    .collapse-content {
        background: #f8fafc;
    }

    .materi-section {
        padding: 1.5rem;
    }

    .materi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .materi-item {
        padding: 0.75rem 1rem;
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
    }

    .materi-item:hover {
        background: #f1f5f9;
        border-color: #cbd5e1;
        transform: translateY(-1px);
    }

    .materi-item i {
        color: #64748b;
        margin-right: 0.75rem;
        font-size: 1.1rem;
        flex-shrink: 0;
    }

    .materi-text {
        font-size: 0.9rem;
        font-weight: 500;
        color: #374151;
        line-height: 1.4;
    }

    .tujuan-section {
        border-top: 2px solid #e2e8f0;
        padding-top: 1.5rem;
    }

    .tujuan-title {
        color: #1f2937;
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .tujuan-title i {
        color: #10b981;
        margin-right: 0.5rem;
        font-size: 1.2rem;
    }

    .tujuan-list {
        display: grid;
        gap: 0.75rem;
    }

    .tujuan-item {
        padding: 1rem;
        background: white;
        border: 1px solid #e2e8f0;
        border-left: 3px solid var(--primary-blue);
        border-radius: 0.5rem;
        display: flex;
        align-items: flex-start;
        transition: all 0.2s ease;
    }

    .tujuan-item:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
    }

    .tujuan-badge {
        background: var(--primary-blue);
        color: white;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 0.8rem;
        margin-right: 0.75rem;
        flex-shrink: 0;
    }

    .theme-02 .tujuan-item { border-left-color: var(--accent-green); }
    .theme-02 .tujuan-badge { background: var(--accent-green); }

    .theme-03 .tujuan-item { border-left-color: var(--warm-orange); }
    .theme-03 .tujuan-badge { background: var(--warm-orange); }

    .theme-04 .tujuan-item { border-left-color: var(--soft-purple); }
    .theme-04 .tujuan-badge { background: var(--soft-purple); }

    .tujuan-text {
        color: #374151;
        line-height: 1.5;
        font-size: 0.9rem;
    }

    .footer-section {
        text-align: center;
        padding: 2rem 0;
        margin-top: 3rem;
        border-top: 1px solid #e2e8f0;
        color: #6b7280;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-section {
            padding: 2rem 1.5rem;
            margin: 0.5rem 0 1.5rem 0;
        }
        
        .hero-section h1 {
            font-size: 2rem;
        }
        
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .themes-container {
            grid-template-columns: 1fr;
        }
        
        .materi-grid {
            grid-template-columns: 1fr;
        }
        
        .stat-number {
            font-size: 1.8rem;
        }
    }

    /* Ensure all content is visible */
    * {
        box-sizing: border-box;
    }

    .container-fluid {
        max-width: 1400px;
        margin: 0 auto;
    }
</style>

<div class="container-fluid px-4">
    <!-- Hero Section -->
    <div class="hero-section">
        <h1 class="display-5">
            <i class="bi bi-book-fill me-2"></i>
            Materi Pembelajaran Kelas VII
        </h1>
        <p class="lead">Semester Ganjil & Genap - Tahun Ajaran 2024/2025</p>
        <p class="mb-0">
            <i class="bi bi-diagram-3 me-2"></i>
            Materi Terpadu: Geografi • Sejarah • Ekonomi • Sosiologi
        </p>
    </div>

    <!-- Stats Section -->
    <div class="stats-section">
        <div class="stats-grid">
            <div class="stat-card">
                <span class="stat-number">4</span>
                <div class="stat-label">
                    <i class="bi bi-collection me-1"></i>
                    Tema Utama
                </div>
            </div>
            <div class="stat-card">
                <span class="stat-number">25</span>
                <div class="stat-label">
                    <i class="bi bi-list-ul me-1"></i>
                    Sub Materi
                </div>
            </div>
            <div class="stat-card">
                <span class="stat-number">15</span>
                <div class="stat-label">
                    <i class="bi bi-bullseye me-1"></i>
                    Tujuan Pembelajaran
                </div>
            </div>
            <div class="stat-card">
                <span class="stat-number">4</span>
                <div class="stat-label">
                    <i class="bi bi-mortarboard me-1"></i>
                    Bidang Ilmu
                </div>
            </div>
        </div>
    </div>

    <!-- Theme Cards -->
    <div class="themes-container">
        <!-- Tema 01 -->
        <div class="theme-card theme-01">
            <div class="theme-header" data-bs-toggle="collapse" data-bs-target="#tema01" aria-expanded="false">
                <div class="theme-number">01</div>
                <i class="bi bi-globe-americas theme-icon"></i>
                <h3 class="theme-title">Kehidupan Sosial dan Kondisi Lingkungan</h3>
                <p class="theme-subtitle">Eksplorasi lingkungan sekitar dan dinamika sosial</p>
                <div class="theme-meta">
                    <small>
                        <i class="bi bi-list me-1"></i>7 Sub Materi
                    </small>
                    <i class="bi bi-chevron-down chevron-icon"></i>
                </div>
            </div>
            <div class="collapse collapse-content" id="tema01">
                <div class="materi-section">
                    <div class="materi-grid">
                        <div class="materi-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span class="materi-text">Mengenal Lokasi Tempat Tinggal</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-arrows-move"></i>
                            <span class="materi-text">Konektivitas Antarruang</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-thermometer-sun"></i>
                            <span class="materi-text">Perubahan Iklim</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            <span class="materi-text">Potensi Bencana Alam di Indonesia</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-graph-up-arrow"></i>
                            <span class="materi-text">Kegiatan Ekonomi</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-people-fill"></i>
                            <span class="materi-text">Interaksi Sosial</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-clock-history"></i>
                            <span class="materi-text">Konsep Dasar Ilmu Sejarah</span>
                        </div>
                    </div>
                    <div class="tujuan-section">
                        <h4 class="tujuan-title">
                            <i class="bi bi-target"></i>
                            Tujuan Pembelajaran
                        </h4>
                        <div class="tujuan-list">
                            <div class="tujuan-item">
                                <div class="tujuan-badge">1</div>
                                <span class="tujuan-text">Mendeskripsikan kondisi lingkungan sekitar tempat tinggal</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">2</div>
                                <span class="tujuan-text">Menjelaskan konektivitas antarruang, menguraikan dampak perubahan iklim, dan potensi bencana alam di Indonesia</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">3</div>
                                <span class="tujuan-text">Mengidentifikasi berbagai kegiatan ekonomi dan interaksi sosial</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">4</div>
                                <span class="tujuan-text">Menjelaskan konsep dasar ilmu sejarah</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tema 02 -->
        <div class="theme-card theme-02">
            <div class="theme-header" data-bs-toggle="collapse" data-bs-target="#tema02" aria-expanded="false">
                <div class="theme-number">02</div>
                <i class="bi bi-tree-fill theme-icon"></i>
                <h3 class="theme-title">Keberagaman Lingkungan Sekitar</h3>
                <p class="theme-subtitle">Memahami diversitas dan pelestarian lingkungan</p>
                <div class="theme-meta">
                    <small>
                        <i class="bi bi-list me-1"></i>3 Sub Materi
                    </small>
                    <i class="bi bi-chevron-down chevron-icon"></i>
                </div>
            </div>
            <div class="collapse collapse-content" id="tema02">
                <div class="materi-section">
                    <div class="materi-grid">
                        <div class="materi-item">
                            <i class="bi bi-eye-fill"></i>
                            <span class="materi-text">Berkenalan dengan Lingkungan Sekitar</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="materi-text">Pembiasaan Diri untuk Melestarikan Lingkungan</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-basket-fill"></i>
                            <span class="materi-text">Pembiasaan Diri dalam Kebutuhan</span>
                        </div>
                    </div>
                    <div class="tujuan-section">
                        <h4 class="tujuan-title">
                            <i class="bi bi-target"></i>
                            Tujuan Pembelajaran
                        </h4>
                        <div class="tujuan-list">
                            <div class="tujuan-item">
                                <div class="tujuan-badge">1</div>
                                <span class="tujuan-text">Menjelaskan dinamika sosial dan perubahan sosial budaya</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">2</div>
                                <span class="tujuan-text">Mengidentifikasi kehidupan dari aspek sosial ekonomi dan geografis</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">3</div>
                                <span class="tujuan-text">Membandingkan persamaan dan perbedaan fenomena lingkungan sekitar sebagai proses geografis</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">4</div>
                                <span class="tujuan-text">Membandingkan persamaan dan perbedaan suatu lokasi berdasarkan kondisi alam dan komposisi penduduk</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">5</div>
                                <span class="tujuan-text">Menganalisis perubahan karakteristik lokasi dari waktu ke waktu berdasarkan aspek fisik dan sosial</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tema 03 -->
        <div class="theme-card theme-03">
            <div class="theme-header" data-bs-toggle="collapse" data-bs-target="#tema03" aria-expanded="false">
                <div class="theme-number">03</div>
                <i class="bi bi-currency-dollar theme-icon"></i>
                <h3 class="theme-title">Potensi Ekonomi Lingkungan</h3>
                <p class="theme-subtitle">Mengkaji sumber daya dan peluang ekonomi</p>
                <div class="theme-meta">
                    <small>
                        <i class="bi bi-list me-1"></i>5 Sub Materi
                    </small>
                    <i class="bi bi-chevron-down chevron-icon"></i>
                </div>
            </div>
            <div class="collapse collapse-content" id="tema03">
                <div class="materi-section">
                    <div class="materi-grid">
                        <div class="materi-item">
                            <i class="bi bi-gem"></i>
                            <span class="materi-text">Pemanfaatan dan Pelestarian Potensi Sumber Daya Alam</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-flag-fill"></i>
                            <span class="materi-text">Potensi Indonesia Menjadi Negara Maju</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-signpost-fill"></i>
                            <span class="materi-text">Toponimi</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-shop"></i>
                            <span class="materi-text">Ekonomi di Lingkungan Sekitar</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-chat-dots-fill"></i>
                            <span class="materi-text">Interaksi Sosial</span>
                        </div>
                    </div>
                    <div class="tujuan-section">
                        <h4 class="tujuan-title">
                            <i class="bi bi-target"></i>
                            Tujuan Pembelajaran
                        </h4>
                        <div class="tujuan-list">
                            <div class="tujuan-item">
                                <div class="tujuan-badge">1</div>
                                <span class="tujuan-text">Mengklasifikasikan pemanfaatan dan pelestarian potensi sumber daya alam</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">2</div>
                                <span class="tujuan-text">Menjelaskan faktor yang menyebabkan perubahan potensi sumber daya alam dan penentuan harga pasar</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">3</div>
                                <span class="tujuan-text">Menganalisis potensi Indonesia menjadi negara maju</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">4</div>
                                <span class="tujuan-text">Menganalisis toponimi daerah dan mendemonstrasikan interaksi sosial dalam masyarakat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tema 04 -->
        <div class="theme-card theme-04">
            <div class="theme-header" data-bs-toggle="collapse" data-bs-target="#tema04" aria-expanded="false">
                <div class="theme-number">04</div>
                <i class="bi bi-people-fill theme-icon"></i>
                <h3 class="theme-title">Pemberdayaan Masyarakat</h3>
                <p class="theme-subtitle">Membangun komunitas yang berdaya dan berkarakter</p>
                <div class="theme-meta">
                    <small>
                        <i class="bi bi-list me-1"></i>4 Sub Materi
                    </small>
                    <i class="bi bi-chevron-down chevron-icon"></i>
                </div>
            </div>
            <div class="collapse collapse-content" id="tema04">
                <div class="materi-section">
                    <div class="materi-grid">
                        <div class="materi-item">
                            <i class="bi bi-palette-fill"></i>
                            <span class="materi-text">Keragaman Sosial Budaya di Masyarakat</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <span class="materi-text">Permasalahan Kehidupan Sosial Budaya</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-arrow-up-circle-fill"></i>
                            <span class="materi-text">Pemberdayaan Masyarakat</span>
                        </div>
                        <div class="materi-item">
                            <i class="bi bi-diagram-3-fill"></i>
                            <span class="materi-text">Peranan Komunitas dalam Kehidupan Masyarakat</span>
                        </div>
                    </div>
                    <div class="tujuan-section">
                        <h4 class="tujuan-title">
                            <i class="bi bi-target"></i>
                            Tujuan Pembelajaran
                        </h4>
                        <div class="tujuan-list">
                            <div class="tujuan-item">
                                <div class="tujuan-badge">1</div>
                                <span class="tujuan-text">Mempelajari keragaman sosial budaya dan penyebab terjadinya keragaman tersebut</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">2</div>
                                <span class="tujuan-text">Menguraikan masalah yang terjadi karena keragaman sosial budaya dan menemukan solusi untuk mengatasinya</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">3</div>
                                <span class="tujuan-text">Mampu menerapkan prinsip hidup bersama dalam keragaman sosial budaya masyarakat</span>
                            </div>
                            <div class="tujuan-item">
                                <div class="tujuan-badge">4</div>
                                <span class="tujuan-text">Mengidentifikasi aktivitas pemberdayaan masyarakat dan mengetahui peranan komunitas dalam pemberdayaan tersebut serta belajar tentang literasi keuangan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-section">
        <p>
            <i class="bi bi-mortarboard me-2"></i>
            Materi Pembelajaran Kelas VII SMP - Tahun Ajaran 2024/2025
        </p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all collapse states
    const collapseHeaders = document.querySelectorAll('[data-bs-toggle="collapse"]');
    const collapseElements = document.querySelectorAll('.collapse');
    
    // Ensure all are closed initially
    collapseElements.forEach(collapse => {
        collapse.classList.remove('show');
    });
    
    collapseHeaders.forEach(header => {
        header.setAttribute('aria-expanded', 'false');
        const chevron = header.querySelector('.chevron-icon');
        if (chevron) {
            chevron.style.transform = 'rotate(0deg)';
        }
    });
    
    // Handle accordion collapse functionality
    collapseHeaders.forEach(header => {
        header.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const targetId = this.getAttribute('data-bs-target');
            const targetElement = document.querySelector(targetId);
            const chevron = this.querySelector('.chevron-icon');
            const currentlyExpanded = this.getAttribute('aria-expanded') === 'true';
            
            console.log('Clicked:', targetId, 'Currently expanded:', currentlyExpanded); // Debug log
            
            if (currentlyExpanded) {
                // Close current dropdown
                console.log('Closing dropdown'); // Debug log
                targetElement.classList.remove('show');
                this.setAttribute('aria-expanded', 'false');
                if (chevron) {
                    chevron.style.transform = 'rotate(0deg)';
                    chevron.style.transition = 'transform 0.3s ease';
                }
            } else {
                // First close all other dropdowns
                collapseHeaders.forEach(otherHeader => {
                    if (otherHeader !== this) {
                        const otherTargetId = otherHeader.getAttribute('data-bs-target');
                        const otherTarget = document.querySelector(otherTargetId);
                        const otherChevron = otherHeader.querySelector('.chevron-icon');
                        
                        if (otherTarget && otherTarget.classList.contains('show')) {
                            otherTarget.classList.remove('show');
                            otherHeader.setAttribute('aria-expanded', 'false');
                            if (otherChevron) {
                                otherChevron.style.transform = 'rotate(0deg)';
                                otherChevron.style.transition = 'transform 0.3s ease';
                            }
                        }
                    }
                });
                
                // Then open current dropdown
                console.log('Opening dropdown'); // Debug log
                targetElement.classList.add('show');
                this.setAttribute('aria-expanded', 'true');
                if (chevron) {
                    chevron.style.transform = 'rotate(180deg)';
                    chevron.style.transition = 'transform 0.3s ease';
                }
                
                // Smooth scroll to the opened content
                setTimeout(() => {
                    const headerRect = this.getBoundingClientRect();
                    const scrollTop = window.pageYOffset + headerRect.top - 100;
                    
                    window.scrollTo({
                        top: scrollTop,
                        behavior: 'smooth'
                    });
                }, 200);
            }
        });
    });
    
    // Prevent Bootstrap collapse from interfering
    collapseElements.forEach(collapse => {
        collapse.addEventListener('show.bs.collapse', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
        
        collapse.addEventListener('hide.bs.collapse', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
        
        // Add smooth transitions
        collapse.style.transition = 'all 0.3s ease';
        collapse.style.overflow = 'hidden';
    });
    
    // Handle responsive behavior
    function handleResponsiveLayout() {
        const screenWidth = window.innerWidth;
        
        if (screenWidth <= 576) {
            // Close all dropdowns on mobile resize
            collapseHeaders.forEach(header => {
                const targetId = header.getAttribute('data-bs-target');
                const target = document.querySelector(targetId);
                const chevron = header.querySelector('.chevron-icon');
                
                if (target && target.classList.contains('show')) {
                    target.classList.remove('show');
                    header.setAttribute('aria-expanded', 'false');
                    if (chevron) {
                        chevron.style.transform = 'rotate(0deg)';
                    }
                }
            });
        }
    }
    
    // Listen for window resize with debouncing
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(handleResponsiveLayout, 150);
    });
});
</script>

@endsection