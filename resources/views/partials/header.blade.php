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
