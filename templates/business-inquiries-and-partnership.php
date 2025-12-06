<?php
/*
Template Name: Business Inquiries Page
Template Post Type: page
*/
 
?>


<?php get_header(); ?>





 <section class="py-20 lg:py-28 bg-wine-900">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-3xl lg:text-4xl font-bold text-white mb-6">
                       Business Inquiries and Partnerships
                    </h2>
                    <p class="text-lg text-white/80">
                        If you have another idea that does not follow the above categories, or an article idea that you don't see on our site already, send us your pitch! If we think that your piece follows the voice we are trying to convey, we'll accept it!
                    </p>
                </div>
                
                <!-- Contact Form -->
                <?php 
$form_html = do_shortcode('[contact-form-7 id="19b228d" title="join team form"]');
echo $form_html;
?>
            </div>
        </section>







  <!-- ========== NEWSLETTER SECTION ========== -->
        <section class="py-20 bg-gradient-to-br from-wine-950 via-wine-900 to-wine-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="text-white">
                        <h2 class="font-serif text-3xl lg:text-4xl font-bold mb-4">
                            Sign up to our newsletter
                        </h2>
                        <p class="text-wine-200 text-lg mb-8">
                            Subscribe now get amazing articles about wine every week!
                        </p>
                          <div class='w-[100%]'>
 <?php 
$form_html = do_shortcode('[contact-form-7 id="7bebd09" title="Subscribe form"]');
echo $form_html;
?>
</div>
                        <label class="flex items-center gap-3 mt-4 cursor-pointer">
                            <input type="checkbox" checked 
                                   class="w-5 h-5 rounded border-white/30 bg-white/10 text-gold-500 focus:ring-gold-500">
                            <span class="text-wine-200 text-sm">I would like to receive news and special offers.</span>
                        </label>
                    </div>
                    <div class="hidden lg:block">
                        <img src="https://ilovewine.com/wp-content/uploads/2022/06/food-festival-with-different-cheeses-white-wine-vintage-restaurant-bottle-white-wine-fresh-grapes.png" 
                             alt="Wine and Cheese" 
                             class="w-full max-w-md ml-auto rounded-2xl">
                    </div>
                </div>
            </div>
        </section>




    <?php get_footer(); ?>