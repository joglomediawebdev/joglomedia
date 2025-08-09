<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Joglo Media Web Development</title>
    <link rel="icon" href="images/logo-putih2.png" type="image/png" width="100">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Library for Scroll Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>

<body class="font-inter bg-gradient-to-b from-[#c9d6e3] to-[#e8ebf2] text-[#1a1a1a]">

<header class="navbar fixed top-0 w-full z-[1000] flex items-center justify-between py-4 h-[120px] backdrop-blur-sm px-8" data-aos="fade-down" data-aos-duration="1000">
    <div class="flex items-center">
        <div class="logo flex items-start">
            <img src="{{ asset('images/logo-biru.png') }}" alt="Joglo Media" class="h-[100px]" />
        </div>
    </div>
    <button class="hamburger md:hidden flex flex-col justify-center items-center w-10 h-10 focus:outline-none z-50">
        <span class="w-6 h-1 bg-[#024673] mb-1 transition-transform duration-300 line"></span>
        <span class="w-6 h-1 bg-[#024673] mb-1 transition-opacity duration-300 line"></span>
        <span class="w-6 h-1 bg-[#024673] transition-transform duration-300 line"></span>
    </button>
    <div class="nav-container hidden md:flex items-center gap-10 z-40">
        <nav class="nav-links flex items-center gap-10">
            <a href="{{ route('home') }}#beranda" class="text-[#024673] font-medium text-sm hover:text-[#1e3a8a] transition-colors active:font-bold">Beranda</a>
            <a href="{{ route('home') }}#paket" class="text-[#024673] font-medium text-sm hover:text-[#1e3a8a] transition-colors">Paket</a>
            <a href="{{ route('home') }}#layanan-kami" class="text-[#024673] font-medium text-sm hover:text-[#1e3a8a] transition-colors">Tentang Kami</a>
            <a href="{{ route('order_steps') }}" class="text-[#024673] font-medium text-sm hover:text-[#1e3a8a] transition-colors">Cara Pemesanan</a>
            <a href="{{ route('home') }}#portofolio" class="text-[#024673] font-medium text-sm hover:text-[#1e3a8a] transition-colors">Portofolio</a>
            <a href="{{ route('testimonials') }}" class="text-[#024673] font-medium text-sm hover:text-[#1e3a8a] transition-colors">Testimoni</a>
            <a href="https://wa.me/6288980472165?text=Halo%2C%20saya%20ingin%20memesan%20produk%20ini"
                target="_blank"
                class=" border-none py-3 px-5 rounded-full font-normal text-sm cursor-pointer bg-[#024673] text-white hover:bg-[#1e3a8a] hover:scale-105 transition-all duration-200 hidden md:block">
                Pesan Sekarang
            </a>
        </nav>
    </div>
</header>
    <section id="template-gallery" class="template-gallery py-16 px-8 lg:px-16 relative w-full overflow-hidden" style="padding-top: 120px;">
<div class="max-w-7xl mx-auto text-center mb-12" data-aos="fade-up" data-aos-duration="800">
        <div class="mb-8">
            <img src="{{ asset('images/logo-biru.png') }}" alt="Joglo Media Logo" class="mx-auto h-[200px] mb-4" />
        </div>
        <div class="flex justify-center items-center gap-4">
            <div class="h-px bg-[#334155] w-36"></div>
            <h2 class="text-[36px] text-[#2C3E50] font-black">GALLERY TEMPLATE</h2>
            <div class="h-px bg-[#334155] w-36"></div>
        </div>
        <p class="text-lg text-[#374151] max-w-2xl mx-auto mt-4">
            Silahkan pilih template sesuai dengan kebutuhan Anda. Kami menyediakan berbagai pilihan template website dan aplikasi yang siap pakai untuk membantu bisnis Anda tampil profesional dan menarik.
        </p>
    </div>

        <!-- Search Bar -->
        <div class="max-w-7xl mx-auto relative z-10 mb-8">
            <div class="flex justify-center">
                <input type="text" id="template-search"
                       class="w-full max-w-md px-6 py-3 rounded-full border-2 border-[#024673] text-[#374151] placeholder-gray-400 focus:outline-none focus:border-[#1e3a8a] transition-all duration-300"
                       placeholder="Cari template..." aria-label="Cari template">
            </div>
        </div>

        <!-- Main Category Filter Buttons -->
        <div class="max-w-7xl mx-auto relative z-10 mb-6">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="main-filter-btn active px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-200"
                        data-main-filter="website">
                    Website
                </button>
                <button class="main-filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-main-filter="aplikasi">
                    Aplikasi
                </button>
            </div>
        </div>

        <!-- Subcategory Filter Buttons -->
        <div class="max-w-7xl mx-auto relative z-10 mb-8" id="subcategory-filters">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-btn active px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="all">
                    Semua Template
                </button>
                <button class="filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="company-profile">
                    Company Profile
                </button>
                <button class="filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="e-commerce">
                    E-Commerce
                </button>
                <button class="filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="portfolio">
                    Portfolio
                </button>
                <button class="filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="custom">
                    Custom
                </button>
            </div>
        </div>

        <!-- Image Modal -->
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
            <div class="relative bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-auto">
                <button id="closeModal" class="absolute top-4 right-4 text-white bg-[#024673] rounded-full p-2 hover:bg-[#1e3a8a] transition-all duration-300" aria-label="Close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <img id="modalImage" src="" alt="Template Preview" class="w-full h-auto object-contain max-h-[80vh] p-4">
            </div>
        </div>

        <!-- Template Cards -->
        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Main Grid for Aplikasi (Hidden Initially) -->
            <div id="main-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 hidden"></div>
            <!-- Website Templates -->
            <div id="website-projects" class="mb-12">
                <h3 class="text-2xl font-bold text-[#2C3E50] mb-6">Website</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Company Profile Template -->
                    <div class="project-card show relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                         data-main-category="website" data-category="company-profile" data-image="images/template-company-profile.jpg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="images/template-company-profile.jpg" alt="Company Profile Template"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Template Company Profile</h3>
                            <p class="text-sm text-[#374151] mb-4 leading-relaxed">Template profesional untuk menampilkan profil perusahaan dengan desain modern dan responsif.</p>
                            <a href=""
                               class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                Pilih Template
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Company Profile
                        </div>
                    </div>

                    <!-- E-Commerce Template -->
                    <div class="project-card show relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                         data-main-category="website" data-category="e-commerce" data-image="images/template-ecommerce.jpg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="images/template-ecommerce.jpg" alt="E-Commerce Template"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Template E-Commerce</h3>
                            <p class="text-sm text-[#374151] mb-4 leading-relaxed">Template ideal untuk toko online dengan fitur katalog produk dan pembayaran terintegrasi.</p>
                            <a href="https://wa.me/6288980472165?text=Halo%2C%20saya%20ingin%20template%20e-commerce"
                               class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                Pilih Template
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            E-Commerce
                        </div>
                    </div>

                    <!-- Portfolio Template -->
                    <div class="project-card show relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                         data-main-category="website" data-category="portfolio" data-image="images/template-portfolio.jpg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="images/template-portfolio.jpg" alt="Portfolio Template"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Template Portfolio</h3>
                            <p class="text-sm text-[#374151] mb-4 leading-relaxed">Template untuk menampilkan karya kreatif dengan desain elegan dan galeri interaktif.</p>
                            <a href="https://wa.me/6288980472165?text=Halo%2C%20saya%20ingin%20template%20portfolio"
                               class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                Pilih Template
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Portfolio
                        </div>
                    </div>

                    <!-- Custom Template -->
                    <div class="project-card show relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                         data-main-category="website" data-category="custom" data-image="images/template-custom.jpg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="images/template-custom.jpg" alt="Custom Template"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Template Custom</h3>
                            <p class="text-sm text-[#374151] mb-4 leading-relaxed">Template yang dirancang khusus sesuai kebutuhan spesifik dengan fitur unik.</p>
                            <a href="https://wa.me/6288980472165?text=Halo%2C%20saya%20ingin%20template%20custom"
                               class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                Pilih Template
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Custom
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aplikasi Templates -->
            <div id="aplikasi-projects" class="mb-12 hidden">
                <h3 class="text-2xl font-bold text-[#2C3E50] mb-6">Aplikasi</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Aplikasi Template -->
                    <div class="project-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                         data-main-category="aplikasi" data-category="aplikasi" data-image="images/template-aplikasi.jpg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="images/template-aplikasi.jpg" alt="Aplikasi Template"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Template Aplikasi Mobile</h3>
                            <p class="text-sm text-[#374151] mb-4 leading-relaxed">Template aplikasi mobile dengan desain modern dan fitur kustom untuk bisnis Anda.</p>
                            <a href="https://wa.me/6288980472165?text=Halo%2C%20saya%20ingin%20template%20aplikasi"
                               class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                Pilih Template
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                        <div class="absolute top-4 left-4 bg-purple-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Aplikasi
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="800">
                <a href="https://wa.me/6288980472165?text=Halo%2C%20saya%20ingin%20konsultasi%20template%20kustom"
                   class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-[#024673] to-[#0369a1] text-white rounded-full font-semibold text-base hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                    Konsultasi Template Kustom
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <script>
        AOS.init();

        // Main Category Filter
        const mainFilterButtons = document.querySelectorAll('.main-filter-btn');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const websiteProjects = document.getElementById('website-projects');
        const aplikasiProjects = document.getElementById('aplikasi-projects');
        const projectCards = document.querySelectorAll('.project-card');
        const searchInput = document.getElementById('template-search');
        const subcategoryFilters = document.getElementById('subcategory-filters');

        mainFilterButtons.forEach(button => {
            button.addEventListener('click', () => {
                mainFilterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const mainFilter = button.getAttribute('data-main-filter');
                websiteProjects.classList.toggle('hidden', mainFilter !== 'website');
                aplikasiProjects.classList.toggle('hidden', mainFilter !== 'aplikasi');

                // Reset subcategory filter to "all"
                filterButtons.forEach(btn => btn.classList.remove('active'));
                document.querySelector('.filter-btn[data-filter="all"]').classList.add('active');

                // Show all cards for the selected main category
                projectCards.forEach(card => {
                    const mainCategory = card.getAttribute('data-main-category');
                    card.classList.toggle('show', mainCategory === mainFilter);
                    card.style.display = mainCategory === mainFilter ? 'block' : 'none';
                });

                // Adjust subcategory filters based on main category
                const websiteSubcategories = ['all', 'company-profile', 'e-commerce', 'portfolio', 'custom'];
                const aplikasiSubcategories = ['all', 'aplikasi'];
                const subFilterContainer = subcategoryFilters.querySelector('div');
                subFilterContainer.innerHTML = '';

                const subcategories = mainFilter === 'website' ? websiteSubcategories : aplikasiSubcategories;
                subcategories.forEach(sub => {
                    const btn = document.createElement('button');
                    btn.className = `filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105 ${sub === 'all' ? 'active' : ''}`;
                    btn.setAttribute('data-filter', sub);
                    btn.textContent = sub === 'all' ? 'Semua Template' :
                                     sub === 'company-profile' ? 'Company Profile' :
                                     sub === 'e-commerce' ? 'E-Commerce' :
                                     sub === 'portfolio' ? 'Portfolio' :
                                     sub === 'custom' ? 'Custom' : 'Aplikasi';
                    subFilterContainer.appendChild(btn);
                });

                // Reattach event listeners to new filter buttons
                subFilterContainer.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.addEventListener('click', () => {
                        filterButtons.forEach(b => b.classList.remove('active'));
                        btn.classList.add('active');
                        filterProjects(mainFilter, btn.getAttribute('data-filter'), searchInput.value.toLowerCase());
                    });
                });
            });
        });

        // Subcategory Filter
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const mainFilter = document.querySelector('.main-filter-btn.active').getAttribute('data-main-filter');
                const subFilter = button.getAttribute('data-filter');
                filterProjects(mainFilter, subFilter, searchInput.value.toLowerCase());
            });
        });

        // Search Functionality
        searchInput.addEventListener('input', () => {
            const mainFilter = document.querySelector('.main-filter-btn.active').getAttribute('data-main-filter');
            const subFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
            filterProjects(mainFilter, subFilter, searchInput.value.toLowerCase());
        });

        // Filter Projects Function
        function filterProjects(mainFilter, subFilter, searchTerm) {
            projectCards.forEach(card => {
                const mainCategory = card.getAttribute('data-main-category');
                const subCategory = card.getAttribute('data-category');
                const title = card.querySelector('h3').textContent.toLowerCase();
                const description = card.querySelector('p').textContent.toLowerCase();

                const matchesMain = mainCategory === mainFilter;
                const matchesSub = subFilter === 'all' || subCategory === subFilter;
                const matchesSearch = title.includes(searchTerm) || description.includes(searchTerm);

                card.classList.toggle('show', matchesMain && matchesSub && matchesSearch);
                card.style.display = matchesMain && matchesSub && matchesSearch ? 'block' : 'none';
            });
        }

        // Modal Functionality
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeModal = document.getElementById('closeModal');

        projectCards.forEach(card => {
            card.addEventListener('click', () => {
                modalImage.src = card.getAttribute('data-image');
                modal.classList.remove('hidden');
            });
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
