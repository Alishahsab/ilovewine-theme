<?php
/**
 * Static Footer Template
 * Displays the exact footer from your HTML
 */
?>
 <!-- Scroll to Top Button -->
    <button id="scrollTop" class="fixed bottom-8 right-8 w-12 h-12 bg-wine-700 text-white rounded-full shadow-lg hover:bg-wine-800 transition-all opacity-0 invisible z-40" aria-label="Scroll to top">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
</main>
<footer class="bg-wine-950 text-white">
    <!-- Main Footer -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Brand Column -->
            <div class="lg:col-span-1">
                <img src="https://ilovewine.com/wp-content/uploads/2022/06/I-Love-Wine-Footer-Logo.svg" 
                     alt="I Love Wine" class="h-12 mb-6" width="180" height="48">
                <p class="text-wine-200 text-sm mb-6">
                    Your guide to the world's finest wines, exquisite food pairings, and unforgettable travel experiences.
                </p>
                <div class="flex gap-4">
                    <a href="https://instagram.com/ilovewine" target="_blank" rel="noopener" class="w-10 h-10 bg-wine-800 rounded-full flex items-center justify-center hover:bg-wine-700 transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="white" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                        </svg>
                    </a>
                    <a href="https://pinterest.com/ilovewinecom" target="_blank" rel="noopener" class="w-10 h-10 bg-wine-800 rounded-full flex items-center justify-center hover:bg-wine-700 transition-colors" aria-label="Pinterest">
                        <svg class="w-5 h-5" fill="white" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="https://facebook.com/ilovewinecom" target="_blank" rel="noopener" class="w-10 h-10 bg-wine-800 rounded-full flex items-center justify-center hover:bg-wine-700 transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="white" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385h-3.047v-3.47h3.047v-2.642c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953h-1.514c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385c5.737-.9 10.125-5.864 10.125-11.854z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="font-semibold text-lg mb-6">Explore</h3>
                <ul class="space-y-4 m-0">
                    <li><a href="/category/wine/" class="text-wine-200 hover:text-white transition-colors text-sm">Wine Guides</a></li>
                    <li><a href="/category/food/" class="text-wine-200 hover:text-white transition-colors text-sm">Food & Pairings</a></li>
                    <li><a href="/category/travel/" class="text-wine-200 hover:text-white transition-colors text-sm">Travel</a></li>
                    <li><a href="/category/events/" class="text-wine-200 hover:text-white transition-colors text-sm">Events</a></li>
                    <li><a href="/shop/" class="text-wine-200 hover:text-white transition-colors text-sm">Shop</a></li>
                </ul>
            </div>
            
            <!-- Company -->
            <div>
                <h3 class="font-semibold text-lg mb-6">Company</h3>
                <ul class="space-y-4 m-0">
                    <li><a href="/about/" class="text-wine-200 hover:text-white transition-colors text-sm">About Us</a></li>
                    <li><a href="/join-our-team/" class="text-wine-200 hover:text-white transition-colors text-sm">Join Our Team</a></li>
                    <li><a href="/advertise/" class="text-wine-200 hover:text-white transition-colors text-sm">Advertise</a></li>
                    <li><a href="/contact/" class="text-wine-200 hover:text-white transition-colors text-sm">Contact Us</a></li>
                </ul>
            </div>
            
            <!-- Legal -->
            <div>
                <h3 class="font-semibold text-lg mb-6">Legal</h3>
                <ul class="space-y-4 m-0">
                    <li><a href="/terms-of-use/" class="text-wine-200 hover:text-white transition-colors text-sm">Terms of Use</a></li>
                    <li><a href="/privacy-policy/" class="text-wine-200 hover:text-white transition-colors text-sm">Privacy Policy</a></li>
                    <li><a href="/business-inquiries-and-partnerships/" class="text-wine-200 hover:text-white transition-colors text-sm">Partnerships</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Sub Footer -->
    <div class="border-t border-wine-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-wine-300 m-0 text-sm">© 2025 ILoveWine.com. All Rights Reserved.</p>
                <p class="text-wine-400 m-0 text-sm">Made with 🍷 for wine lovers everywhere</p>
            </div>
        </div>
    </div>
</footer>