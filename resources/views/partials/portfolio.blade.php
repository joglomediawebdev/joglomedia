        <section id="portofolio"
            class="portfolio py-16 px-8 lg:px-16 bg-gradient-to-b from-[#f3f4f6] to-[#e8ebf2] relative w-full overflow-hidden">
            <div class="max-w-7xl mx-auto text-center mb-12" data-aos="fade-up" data-aos-duration="800">
                <div class="flex justify-center items-center gap-4">
                    <div class="h-px bg-[#334155] w-36"></div>
                    <h2 class="text-[36px] text-[#2C3E50] font-black">PORTOFOLIO KAMI</h2>
                    <div class="h-px bg-[#334155] w-36"></div>
                </div>
                <p class="text-lg text-[#374151] max-w-2xl mx-auto mt-4">Lihat karya terbaik kami yang telah membantu
                    UMKM, instansi, dan komunitas tampil profesional di dunia digital.</p>
            </div>

            <!-- Main Category Filter Buttons -->
            <div class="max-w-7xl mx-auto relative z-10 mb-6">
                <div class="flex flex-wrap justify-center gap-4">
                    <button
                        class="main-filter-btn active px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-200"
                        data-main-filter="website">
                        Website
                    </button>
                    <button
                        class="main-filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-main-filter="aplikasi">
                        Aplikasi
                    </button>
                </div>
            </div>

            <!-- Subcategory Filter Buttons -->
            <div class="max-w-7xl mx-auto relative z-10 mb-8" id="subcategory-filters">
                <div class="flex flex-wrap justify-center gap-4">
                    <button
                        class="filter-btn active px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="all">
                        Semua Project
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="company-profile">
                        Website Company Profile
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="instansi">
                        Instansi/Sekolah
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full font-semibold text-sm border-2 border-[#024673] text-[#024673] hover:bg-[#024673] hover:text-white transition-all duration-300 transform hover:scale-105"
                        data-filter="custom">
                        Custom
                    </button>
                </div>
            </div>

            <!-- Image Modal -->
            <div id="imageModal"
                class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
                <div class="relative bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-auto">
                    <button id="closeModal"
                        class="absolute top-4 right-4 text-white bg-[#024673] rounded-full p-2 hover:bg-[#1e3a8a] transition-all duration-300"
                        aria-label="Close modal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <img id="modalImage" src="" alt="Project Image"
                        class="w-full h-auto object-contain max-h-[80vh] p-4">
                </div>
            </div>

            <!-- Portfolio Cards -->
            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Main Grid for Aplikasi (Hidden Initially) -->
                <div id="main-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 hidden"></div>
                <!-- Website Projects -->
                <div id="website-projects" class="mb-12">
                    <h3 class="text-2xl font-bold text-[#2C3E50] mb-6">Website</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Company Profile Project -->
                        <div class="project-card show relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                            data-main-category="website" data-category="custom"
                            data-image="images/cetaphil.jpg">
                            <div class="relative h-64 overflow-hidden">
                                <img src="images/cetaphil.jpg" alt="Custom Website"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Cetaphil</h3>
                                <p class="text-sm text-[#374151] mb-4 leading-relaxed">Website untuk mengelola data Produk, Sales, dan penjualan sebuah Produk.</p>
                                <a href="#"
                                    class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                    Lihat Proyek
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Custom Website</div>
                        </div>

                        <!-- Instansi/Sekolah Project -->
                        <div class="project-card show relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                            data-main-category="website" data-category="custom" data-image="images/akumulasi.jpg">
                            <div class="relative h-64 overflow-hidden">
                                <img src="images/akumulasi.jpg" alt="Custom"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Website Akumulasi Koin Kasir</h3>
                                <p class="text-sm text-[#374151] mb-4 leading-relaxed">Website untuk mengelola sebuah penukaran kembalian uang kecil ke koin, yang dimana koin itu nantinya dapat ditukarkan dengan uang kembali.
                                </p>
                                <a href="#"
                                    class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                    Lihat Proyek
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Custom Website</div>
                        </div>

                        <!-- Custom Project -->
                        <div class="project-card show relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                            data-main-category="website" data-category="custom" data-image="images/vistore.jpg">
                            <div class="relative h-64 overflow-hidden">
                                <img src="images/vistore.jpg" alt="Custom Project"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Custom Website</h3>
                                <p class="text-sm text-[#374151] mb-4 leading-relaxed">Pengembangan website custom
                                    sesuai kebutuhan spesifik klien dengan fitur-fitur khusus dan desain unik.</p>
                                <a href="#"
                                    class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                    Lihat Proyek
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Custom Website</div>
                        </div>
                    </div>
                </div>

                <!-- Aplikasi Projects (Hidden Initially) -->
                <div id="aplikasi-projects" class="mb-12 hidden">
                    <h3 class="text-2xl font-bold text-[#2C3E50] mb-6">Aplikasi</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Aplikasi Project Example -->
                        <div class="project-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group cursor-pointer"
                            data-main-category="aplikasi" data-category="aplikasi"
                            data-image="images/aplikasi-sample.jpg">
                            <div class="relative h-64 overflow-hidden">
                                <img src="images/aplikasi-sample.jpg" alt="Aplikasi Sample"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#024673]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#2C3E50] mb-2">Aplikasi Mobile</h3>
                                <p class="text-sm text-[#374151] mb-4 leading-relaxed">Aplikasi mobile dengan fitur
                                    kustom untuk mendukung kebutuhan bisnis Anda.</p>
                                <a href="#"
                                    class="view-project inline-flex items-center px-4 py-2 bg-[#024673] text-white rounded-full font-semibold text-sm hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                                    Lihat Proyek
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="absolute top-4 left-4 bg-purple-600 text-white text-xs font-semibold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Aplikasi</div>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-[#024673] to-[#0369a1] text-white rounded-full font-semibold text-base hover:bg-[#1e3a8a] transition-all duration-300 transform hover:scale-105">
                        Lihat Semua Proyek
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
