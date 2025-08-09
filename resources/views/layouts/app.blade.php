<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Joglo Media Web Development</title>
    <link rel="icon" href="{{ asset('images/logo-putih2.png') }}" type="image/png" width="100">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @stack('styles')
</head>

<body class="font-inter bg-gradient-to-b from-[#c9d6e3] to-[#e8ebf2] text-[#1a1a1a]">
    <div class="relative min-h-screen flex flex-col w-full">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        <div id="consultationModal" class="modal-overlay">
            <div class="modal-content">
                <button id="closeConsultationModal" class="modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
                <h2>Konsultasi Gratis</h2>
                <form id="consultationForm">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required />
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required />
                    <label for="message">Pesan</label>
                    <input type="text" id="message" name="message" placeholder="Ceritakan kebutuhan Anda" required />
                    <button type="submit">Kirim Konsultasi</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navContainer = document.querySelector('.nav-container');
    const navLinks = document.querySelectorAll('.nav-links a'); // Select all navigation links

    if (hamburger && navContainer) {
        // Function to close the mobile navigation menu
        const closeMobileMenu = () => {
            if (navContainer.classList.contains('active')) {
                navContainer.classList.remove('active');
                navContainer.classList.add('inactive');
                setTimeout(() => {
                    navContainer.classList.remove('inactive');
                    if (window.innerWidth < 768) { // Only hide for small screens
                        navContainer.style.display = 'none';
                    }
                    hamburger.classList.remove('active'); // Deactivate hamburger icon
                }, 300); // Match animation duration
            }
        };

        // Hamburger click event
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            if (navContainer.classList.contains('active')) {
                closeMobileMenu();
            } else {
                navContainer.style.display = 'flex'; // Show for animation
                setTimeout(() => navContainer.classList.add('active'), 10);
            }
        });

        // Navigation link click event
        navLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                const targetId = link.getAttribute('href').split('#')[1]; // Get the ID after '#'
                const targetElement = document.getElementById(targetId);

                // Check if it's an internal anchor link
                if (targetElement && link.getAttribute('href').startsWith('{{ route ('home') }}#')) {
                    event.preventDefault(); // Prevent default jump
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start' // Scrolls to the top of the element
                    });

                    // Close mobile menu after clicking an internal link
                    closeMobileMenu();

                    // Optional: Update active class for desktop nav (you might already have this)
                    navLinks.forEach(navLink => navLink.classList.remove('active:font-bold'));
                    link.classList.add('active:font-bold');

                } else if (!link.getAttribute('href').startsWith('https://wa.me/')) {
                    // For other internal links that aren't WhatsApp, close mobile menu
                    // (e.g., if Cara Pemesanan is on a separate page but you want the menu to close)
                    closeMobileMenu();
                }
                // For external links like WhatsApp, don't prevent default, just let it open
            });
        });

        // Click outside nav to close mobile menu
        document.addEventListener('click', (event) => {
            if (window.innerWidth < 768 && !hamburger.contains(event.target) && !navContainer.contains(event.target) && navContainer.classList.contains('active')) {
                closeMobileMenu();
            }
        });

        // Resize listener to handle transitions between mobile and desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) { // If desktop
                navContainer.style.display = 'flex'; // Ensure it's visible
                navContainer.classList.remove('active', 'inactive'); // Clean up mobile classes
                hamburger.classList.remove('active'); // Deactivate hamburger icon
            } else { // If mobile
                // If currently open on desktop and resized to mobile, ensure it's hidden
                if (!navContainer.classList.contains('active') && !navContainer.classList.contains('inactive')) {
                    navContainer.style.display = 'none';
                }
            }
        });

        // Initialize state on load based on screen size
        if (window.innerWidth < 768) {
            navContainer.style.display = 'none';
        } else {
            navContainer.style.display = 'flex';
        }
    }
});
    </script>
    @stack('scripts')
</body>

</html>