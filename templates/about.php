<?php
/*
Template Name: About Page
Template Post Type: page
*/
 
?>


<?php get_header(); ?>



        <section class="relative bg-wine-950 overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="wine-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <circle cx="10" cy="10" r="2" fill="currentColor" class="text-gold-400"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#wine-pattern)"/>
                </svg>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left: Image -->
                    <div class="order-2 lg:order-1 text-center animate-fade-in">
                        <div class="relative">
                            <div class="absolute -inset-4 bg-gradient-to-r from-wine-600/20 to-gold-500/20 rounded-2xl blur-xl"></div>
                            <img src="https://ilovewine.com/wp-content/uploads/2022/06/cellar-with-bottles.png" 
                                 alt="Wine cellar with bottles" 
                                 class="relative rounded-2xl shadow-2xl w-full max-w-md mx-auto lg:mx-0"
                                 loading="eager">
                        </div>
                    </div>
                    
                    <!-- Right: Content -->
                    <div class="order-1 lg:order-2 text-center lg:text-left animate-slide-up">
                        <span class="inline-block px-4 py-1.5 bg-gold-500/20 text-gold-300 text-sm font-medium rounded-full mb-6">
                            Est. 2006
                        </span>
                        <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                            <em>About Us</em>
                        </h1>
                        <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                            Ilovewine.com is a wine publication that offers all the latest industry news for wine lovers across the globe that are interested in staying up to date with food & wine pairings, wine reviews, events, wine accessories, and wine & travel guides.
                        </p>
                        <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                            We are a team who share a passion for tasting, learning about, and sharing all things wine with current wine enthusiasts and those who wish to become so. As lifelong wine enthusiasts, we each offer a unique perspective, and we love to learn from each other.
                        </p>
                        <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                            This website helps keep each other and a wider audience updated on our wine-related adventures, opinions, and discoveries. We aspire to share our insight and experiences with wine lovers of all kinds by delivering accessible and enjoyable content.
                        </p>
                        
                        <!-- Mission Quote -->
                        <blockquote class="border-l-4 border-gold-500 pl-6 py-2">
                            <p class="text-xl text-white italic font-serif">
                                "We believe anyone from any background can become a wine expert with the right amount of information, experience, and enthusiasm. Our very different journeys to wine expertise showcase that well"
                            </p>
                        </blockquote>
                    </div>
                </div>
                
                <!-- Second Row: Image -->
                <div class="mt-16 animate-fade-in text-center">
                    <img src="https://ilovewine.com/wp-content/uploads/2022/06/cheerful-mid-adult-man-drinking-wine-with-his-senior-father-kitchen.png" 
                         alt="Father and son enjoying wine together" 
                         class="rounded-2xl shadow-2xl w-full max-w-4xl mx-auto"
                         loading="lazy">
                </div>
            </div>
        </section>

        <!-- Write For Us Section -->
        

        <!-- Our Values Section -->
        <section class="py-20 bg-cream-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-1.5 bg-wine-100 text-wine-700 text-sm font-medium rounded-full mb-4">
                        Our Values
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        What Drives Us
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Our commitment to the wine community is built on these core principles.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 gap-8">
                    



<div class="relative bg-gradient-to-br from-wine-900 to-wine-950 rounded-3xl p-8 md:p-12 lg:p-16 overflow-hidden">
                    <!-- Background Glow -->
                    <div class="absolute top-0 right-0 w-96 h-96 bg-gold-500/10 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-wine-600/20 rounded-full blur-3xl"></div>
                    
                    <div class="relative text-center max-w-3xl mx-auto">
                        <span class="inline-block px-4 py-1.5 bg-gold-500/20 text-[white] text-sm font-medium rounded-full mb-6">
                            Write For Us
                        </span>
                        <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                            Share Your Knowledge About Wine
                        </h2>
                        <p class="text-lg text-gray-300 mb-10 leading-relaxed">
                            Are you interested in becoming part of our blogging community? Do you think you can offer a unique perspective on the wide world of wine? We are always looking for talented writers to share their work with us on a number of related topics. If you think you have something to add, then we'd like to invite you to come write for us!
                        </p>
                        <a href="/join-our-team/" 
                           class="inline-flex items-center gap-2 px-8 py-4 bg-cream-300 text-wine-950 font-semibold rounded-full hover:bg-cream-400 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Join Our Team
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>



                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="bg-wine-950 py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left: Newsletter Form -->
                    <div class="bg-gradient-to-br from-wine-900/50 to-wine-800/30 rounded-2xl p-8 md:p-10 border border-wine-700/30">
                        <span class="inline-block px-4 py-1.5 bg-gold-500/20 text-gold-300 text-sm font-medium rounded-full mb-6">
                            Stay Connected
                        </span>
                        <h2 class="font-serif text-3xl md:text-4xl font-bold text-white mb-4">
                            Sign Up to Our Newsletter
                        </h2>
                        <p class="text-lg text-gray-300 mb-8">
                            Subscribe now to get amazing articles about wine every week! Be the first to know about new wine releases, pairing tips, and exclusive offers.
                        </p>
                        
                        <?php 
$form_html = do_shortcode('[contact-form-7 id="7bebd09" title="Subscribe form"]');
echo $form_html;
?>
                    </div>
                    
                    <!-- Right: Image -->
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-gold-500/20 to-wine-600/20 rounded-2xl blur-xl"></div>
                        <img src="https://ilovewine.com/wp-content/uploads/2022/06/food-festival-with-different-cheeses-white-wine-vintage-restaurant-bottle-white-wine-fresh-grapes.png" 
                             alt="Wine and cheese pairing" 
                             class="relative rounded-2xl shadow-2xl w-full"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <!-- Instagram Feed Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <a href="https://www.instagram.com/ilovewine/" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center space-x-4 group">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-600 via-pink-500 to-orange-400 rounded-full flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                            </svg>
                        </div>
                        <div class="text-left">
                            <span class="block font-serif text-xl font-bold text-gray-900 group-hover:text-wine-700 transition-colors">@ilovewine</span>
                            <span class="block text-sm text-gray-500">Follow us on Instagram</span>
                        </div>
                    </a>
                    <p class="mt-4 text-gray-600 max-w-xl mx-auto">
                        Explore the best in wine, travel, & food 🍷🌍🍴<br>
                        Connect with enthusiasts & experts alike! Join our global community.
                    </p>
                </div>
                
                <!-- Instagram Grid Placeholder -->
                <div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-10 gap-2">
                    <!-- Placeholder images - in production, these would be dynamically loaded -->
                    <div class="aspect-square bg-gradient-to-br from-wine-100 to-wine-200 rounded-lg overflow-hidden group cursor-pointer relative">
                        <div class="absolute inset-0 bg-wine-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-gold-100 to-gold-200 rounded-lg overflow-hidden group cursor-pointer relative">
                        <div class="absolute inset-0 bg-wine-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-wine-200 to-wine-300 rounded-lg overflow-hidden"></div>
                    <div class="aspect-square bg-gradient-to-br from-cream-200 to-cream-300 rounded-lg overflow-hidden"></div>
                    <div class="aspect-square bg-gradient-to-br from-gold-200 to-gold-300 rounded-lg overflow-hidden"></div>
                    <div class="aspect-square bg-gradient-to-br from-wine-100 to-wine-200 rounded-lg overflow-hidden"></div>
                    <div class="aspect-square bg-gradient-to-br from-cream-100 to-cream-200 rounded-lg overflow-hidden"></div>
                    <div class="aspect-square bg-gradient-to-br from-gold-100 to-gold-200 rounded-lg overflow-hidden"></div>
                    <div class="aspect-square bg-gradient-to-br from-wine-200 to-wine-300 rounded-lg overflow-hidden"></div>
                    <div class="aspect-square bg-gradient-to-br from-cream-200 to-cream-300 rounded-lg overflow-hidden"></div>
                </div>
                
                <div class="text-center mt-8">
                    <a href="https://www.instagram.com/ilovewine/" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 via-pink-500 to-orange-400 text-white font-semibold rounded-full hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                        </svg>
                        Follow on Instagram
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact CTA Section -->
        <section class="py-16 bg-cream-100">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Want to Get in Touch?
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Whether you have questions, partnership inquiries, or just want to share your wine story, we'd love to hear from you.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact/" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-wine-700 text-white font-semibold rounded-lg hover:bg-wine-800 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5">
                        Contact Us
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </a>
                    <a href="/business-inquiries-and-partnerships/" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-wine-700 font-semibold rounded-lg border-2 border-wine-700 hover:bg-wine-50 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                        Business Inquiries
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>


           <?php get_footer(); ?>