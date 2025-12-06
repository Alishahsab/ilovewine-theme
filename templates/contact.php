<?php
/*
Template Name: Contact Page
Template Post Type: page
*/
 
?>


<?php get_header(); ?>


     <!-- ========== CONTACT FORM SECTION ========== -->
        <section id="advertise-form" class="py-20 lg:py-28 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                        Get In Touch With I Love Wine
                    </h2>
                    <p class="text-gray-600 text-lg">
                       We want to hear from you. Send us an email, ship us a package (of wine!). Just fill out the contact form below and we’ll route it to the appropriate person.
<br> 
<br>
Please Note! We do not offer phone based customer support at this time. If you need to contact us regarding an order please check out our FAQ and/or submit a support ticket.
                    </p>
                </div>
                
              <?php echo do_shortcode('[contact-form-7 id="c796c06" title="Advertise New"]'); ?>
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