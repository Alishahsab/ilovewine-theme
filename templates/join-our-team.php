<?php
/*
Template Name: Join Our Team Page
Template Post Type: page
*/
 
?>


<?php get_header(); ?>



       <!-- Hero Section -->
        <section class="relative bg-wine-900 py-24 lg:py-32 overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5" class="text-white"/>
                        </pattern>
                    </defs>
                    <rect width="100" height="100" fill="url(#grid)"/>
                </svg>
            </div>
            
            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="inline-block text-gold-400 font-medium tracking-widest uppercase text-sm mb-6">Write For Us</span>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mb-8">
                   We are always looking <span class="text-gold-400">for passionate </span>writers; are you the one?
                </h1>
                <p class="text-xl text-white/80 max-w-2xl mx-auto leading-relaxed">
                   Do you have a passion for writing and share a unique perspective on the wide world of wine? Are you interested in becoming part of our wine lovers community? We are always looking for talented writers and sommeliers to share their work and insights on several related topics and wine trends. If you believe you could be valuable, we’d love to invite you to come to write for us!


                </p>
            </div>
            
            <!-- Decorative Image -->
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
                <img src="https://ilovewine.com/wp-content/uploads/2022/06/elegant-wine-sommelier-his-attractive-assistant-are-ready-try-new-wine-private-wine-boutique.png" 
                     alt="Wine sommeliers at work" 
                     class="rounded-2xl shadow-2xl w-full object-cover"
                     loading="lazy">
            </div>
        </section>

        <!-- Topics Section -->
        <section class="py-20 lg:py-28 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="font-serif text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                        Topics our readers love to read

                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                       Familiarity with different aspects of wine culture is crucial to offer valuable content to our readers; The article should be informative and exciting. Content strategy suggestions are welcome, but a mix of evergreen articles, winemaking, wine storage, industry news, wine regions, wine reviews, educational wine articles (did you know?), what’s trendy now, viral articles, wine, and food pairings, tasting guides, etc
                    </p>
                </div>
                
                <!-- Topics Grid -->
                
                
                <div class="mt-12 p-6 bg-wine-50 rounded-2xl border border-wine-100">
                    <h3 class="font-serif text-xl font-semibold text-wine-900 mb-3">What Topics Should I Write About?</h3>
                    <p class="text-gray-700 leading-relaxed">
                        We are looking for writers who are familiar with different aspects of wine culture. Please take a look at our Learning Center for a better idea of what we are looking for.
                    </p>
                    <p class="text-gray-600 text-sm mt-3 italic">
                        Editor's Note: We recommend that you review other articles posted on our website for fresh ideas and contributions. Our editorial team will review every submission and provide feedback if necessary before publishing.
                    </p>
                </div>
            </div>
        </section>

        <!-- Pitch Your Idea Section -->
        <section class="py-20 lg:py-28 bg-wine-900">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-3xl lg:text-4xl font-bold text-white mb-6">
                        Pitch Your Idea
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

        <!-- Guidelines Section -->
        <section class="py-20 lg:py-28 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="font-serif text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                        Content Submission Guidelines:
                    </h2>
                    <p class="text-lg text-gray-600">
We are looking for passionate writers and bloggers to join our growing family of contributors. I Love Wine is the right platform to publish your article if you feel you can offer our readers unique and valuable information that caters to their passion for Wine. We welcome all kinds of content, from news articles to blog posts, as long as they are relevant to our audience. This guide will help you prepare your content for submission and also let you know how we approach the editorial process once we’ve received it.                    </p>
                </div>
                
                <!-- Guidelines List -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="flex-shrink-0 w-10 h-10 bg-wine-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-wine-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div>
                            <!-- <h3 class="font-semibold text-gray-900 mb-2">Format Your Article</h3> -->
                            <p class="text-gray-600">Format & Attach your article in Google Docs/MS Word. Do not add the article in the contact form or the Email Directly.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="flex-shrink-0 w-10 h-10 bg-wine-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-wine-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <!-- <h3 class="font-semibold text-gray-900 mb-2">Image Permissions</h3> -->
                            <p class="text-gray-600">Ensure that you have permission to use all images, video clips, and audio clips that are included in your article. If you are using Stock Free Images, please mention the source of these images.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="flex-shrink-0 w-10 h-10 bg-wine-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-wine-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                            </svg>
                        </div>
                        <div>
                            <!-- <h3 class="font-semibold text-gray-900 mb-2">Include Relevant Links</h3> -->
                            <p class="text-gray-600">Include any links to relevant websites or other online resources (e.g., press releases) within the body of the text rather than in an attachment at the bottom of an email; they will automatically be added when we publish the article on our website.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="flex-shrink-0 w-10 h-10 bg-wine-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-wine-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                            </svg>
                        </div>
                        <div>
                            <!-- <h3 class="font-semibold text-gray-900 mb-2">No Promotional Content</h3> -->
                            <p class="text-gray-600">Do not submit articles that are promotional in any way. We only accept articles that provide value to our readers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 lg:py-28 bg-cream-100">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="font-serif text-3xl lg:text-4xl font-bold text-gray-900 mb-12 text-center">
                    Frequently Asked Questions
                </h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- FAQ Item -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">How Long Should My Article Be?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">The length of your article should be between 500 and 1500 words. Your content should be well-researched and written in a conversational tone, with a clear introduction, body, and conclusion. It should also be grammatically correct and well-structured so that it makes sense to readers from all walks of life.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">Will My Article Be Edited?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Your article will be checked for plagiarism and proofread for readability, SEO, shareability, and engagement. We will make sure that your writing is consistent with the tone of our blog and that you have a clear voice throughout your piece. After our editors analyze the article, we may edit it if needed. If you have any more questions about our editing process or need help with revisions, ask us!</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">Can I Submit My Article Elsewhere too?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">If you submit your article to multiple websites, then we will not be able to publish it.

Please only send us articles that aren’t currently published anywhere else online (including on social media). The article should also be your own work. We do not accept copied or plagiarized content.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">Should I Include Images In My Article?
</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Yes, it’s a great idea to include images in your articles. Images can be used to break up text and add visual interest, but make sure that the image you use is relevant to the content of your article. If possible, keep images over 500 pixels wide, so they aren’t too small on large screens.
The most important thing to remember is that you submit only images for which you have the right to redistribution. Also, mentioning the source of your images is required for publication.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">What should be the Voice and tone of the Article?
</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">The voice and tone of your article should be in line with the brand’s voice and style, which is conversational and friendly.
It is essential to make sure that the content is aligned with the brand’s target audience.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">Can I include links in my article?
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Yes, you can include links in your article. But be careful about the relevance of your link. Links should always be relevant to the topic and content of your post and its title</p>
                    </div>
                     <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">Will I get credit for my content?
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Yes, you will get credit for your content. We will credit you in the article and on our website.
Remember to add your details while submitting the article and ask to be mentioned.

We hope that this article has helped answer your questions on how to submit an article to ILovewine.com. If you have any more questions or concerns, please feel free to reach out, and we will be happy to help you!</p>
                    </div>
                     
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-wine-900">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="font-serif text-3xl font-bold text-white mb-4">Have a Question?</h2>
                <a href="tel:1-855-846-9766" class="inline-flex items-center text-gold-400 text-3xl lg:text-4xl font-serif font-bold hover:text-gold-300 transition-colors">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    1-855-846-9766
                </a>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-20 lg:py-28 bg-wine-900">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="font-serif text-3xl lg:text-4xl font-bold text-white mb-4">
                            Sign up to our newsletter
                        </h2>
                        <p class="text-white/80 text-lg mb-8">
                            Subscribe now and get amazing articles about wine every week!
                        </p>
                          <div class='w-[100%]'>
 <?php 
$form_html = do_shortcode('[contact-form-7 id="7bebd09" title="Subscribe form"]');
echo $form_html;
?>
</div>
                        <label class="flex items-center mt-4 text-white/70 text-sm cursor-pointer">
                            <input type="checkbox" class="mr-3 w-4 h-4 rounded border-white/30" checked>
                            I would like to receive news and special offers.
                        </label>
                    </div>
                    <div class="hidden lg:block">
                        <img src="https://ilovewine.com/wp-content/uploads/2022/06/food-festival-with-different-cheeses-white-wine-vintage-restaurant-bottle-white-wine-fresh-grapes.png" 
                             alt="Wine and cheese" 
                             class="rounded-2xl shadow-2xl"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </section>




          <?php get_footer(); ?>