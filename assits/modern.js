document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const closeMobileMenuBtn = document.getElementById('closeMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const body = document.body;

    // Open mobile menu
    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        body.style.overflow = 'hidden';
    });

    // Close mobile menu
    closeMobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
        body.style.overflow = '';
        
        // Close all mobile mega menus
        document.querySelectorAll('.mobile-mega-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
        // Reset all toggle icons
        document.querySelectorAll('.mobile-nav-toggle svg').forEach(icon => {
            icon.classList.remove('rotate-180');
        });
    });

    // Mobile dropdown/mega menu toggle functionality - FIXED VERSION
    const mobileNavToggles = document.querySelectorAll('.mobile-nav-toggle');
    mobileNavToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            // Find the next sibling element which should be the mobile-mega-menu
            const targetMenu = this.nextElementSibling;
            const icon = this.querySelector('svg');
            
            // Check if the next element is actually a mega menu
            if (targetMenu && targetMenu.classList.contains('mobile-mega-menu')) {
                // Toggle the target menu
                targetMenu.classList.toggle('hidden');
                
                // Rotate the icon
                icon.classList.toggle('rotate-180');
                
                // Close other open mega menus (excluding the current one)
                document.querySelectorAll('.mobile-mega-menu').forEach(menu => {
                    if (menu !== targetMenu && !menu.classList.contains('hidden')) {
                        menu.classList.add('hidden');
                        // Reset other toggle icons
                        const otherToggle = menu.previousElementSibling;
                        if (otherToggle && otherToggle.classList.contains('mobile-nav-toggle')) {
                            otherToggle.querySelector('svg').classList.remove('rotate-180');
                        }
                    }
                });
            }
        });
    });

    // Close menu when clicking on a link (optional)
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('translate-x-full');
            body.style.overflow = '';
            
            // Close all mobile mega menus
            document.querySelectorAll('.mobile-mega-menu').forEach(menu => {
                menu.classList.add('hidden');
            });
            // Reset all toggle icons
            document.querySelectorAll('.mobile-nav-toggle svg').forEach(icon => {
                icon.classList.remove('rotate-180');
            });
        });
    });

    // Close mobile menu when clicking outside (optional)
    mobileMenu.addEventListener('click', function(e) {
        if (e.target === mobileMenu) {
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('translate-x-full');
            body.style.overflow = '';
            
            // Close all mobile mega menus
            document.querySelectorAll('.mobile-mega-menu').forEach(menu => {
                menu.classList.add('hidden');
            });
            // Reset all toggle icons
            document.querySelectorAll('.mobile-nav-toggle svg').forEach(icon => {
                icon.classList.remove('rotate-180');
            });
        }
    });

    // Search functionality
    const searchBtn = document.getElementById('searchBtn');
    const closeSearchBtn = document.getElementById('closeSearch');
    const searchOverlay = document.getElementById('searchOverlay');
    const searchInput = searchOverlay.querySelector('input[name="s"]');

    // Open search overlay
    searchBtn.addEventListener('click', function() {
        searchOverlay.classList.remove('hidden');
        searchInput.focus();
        body.style.overflow = 'hidden';
    });

    // Close search overlay
    closeSearchBtn.addEventListener('click', function() {
        searchOverlay.classList.add('hidden');
        body.style.overflow = '';
    });

    // Close search on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            searchOverlay.classList.add('hidden');
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('translate-x-full');
            body.style.overflow = '';
            
            // Close all mobile mega menus
            document.querySelectorAll('.mobile-mega-menu').forEach(menu => {
                menu.classList.add('hidden');
            });
            // Reset all toggle icons
            document.querySelectorAll('.mobile-nav-toggle svg').forEach(icon => {
                icon.classList.remove('rotate-180');
            });
        }
    });

    // Close search when clicking outside
    searchOverlay.addEventListener('click', function(e) {
        if (e.target === searchOverlay) {
            searchOverlay.classList.add('hidden');
            body.style.overflow = '';
        }
    });
});