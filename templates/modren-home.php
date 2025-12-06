<?php
/*
Template Name: Modren Home Page
Template Post Type: page
*/
 
?>


<?php get_header(); ?>


<div  class='pt-0'>
 
        
        <!-- ========== HERO with Recent Articles ========== -->
        <section class="relative !bg-[#58112A] overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="hero-pattern text-white"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
                <!-- Hero Header -->
                <!-- <div class="text-center mb-12">
                    <p class="text-[#B8973D] font-medium tracking-widest uppercase mb-4 animate-fade-in">Welcome to</p>
                    <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 animate-slide-up">
                        I Love Wine
                    </h1>
                    <p class="max-w-2xl mx-auto text-lg text-[#E1B2BD] animate-slide-up" style="animation-delay: 0.2s;">
                        Discover the world's finest wines, exquisite food pairings, and unforgettable travel experiences.
                    </p>
                </div> -->
                
                <!-- Recent Articles Grid -->
               <?php
// Get Travel category posts
$travel_args = array(
    'category_name' => 'travel', // Use category slug
    'posts_per_page' => 3, // Get 3 posts for the grid
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
);

$travel_query = new WP_Query($travel_args);
?>

<!-- Travel Articles Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-12">
    <?php 
    $counter = 0;
    $animation_delay = 0.3;
    
    if ($travel_query->have_posts()) : 
        while ($travel_query->have_posts()) : $travel_query->the_post();
            $counter++;
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $read_time = ""; // If using ACF for read time
            $author_name = get_the_author();
            
            // First post (featured large post)
            if ($counter === 1) : ?>
                
                <article class="lg:col-span-2 group relative rounded-2xl overflow-hidden animate-slide-up" style="animation-delay: <?php echo $animation_delay; ?>s;">
                    <a href="<?php the_permalink(); ?>" class="block">
                        <div class="aspect-[16/9] lg:aspect-[2/1]">
                            <?php if ($featured_image) : ?>
                                <img src="<?php echo $featured_image; ?>" 
                                     alt="<?php echo esc_attr(get_the_title()); ?>" 
                                     class="w-full h-full object-cover img-zoom-slow">
                            <?php else : ?>
                                <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                                    <span class="text-gray-500">No image</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <span class="inline-block px-3 py-1 bg-[#C9285A] text-white text-xs font-semibold rounded-full uppercase tracking-wide mb-1">
                                Featured
                            </span>
                            <h2 class="font-serif text-lg md:text-2xl lg:text-3xl font-bold text-white mb-3 group-hover:text-gold-400 transition-colors">
                                <?php the_title(); ?>
                            </h2>
                            <div class="flex items-center gap-4 text-white/80 text-sm">
                                <span>by <?php echo $author_name; ?></span>
                                <span>•</span>
                                <?php if ($read_time) : ?>
                                    <span><?php echo $read_time; ?> min read</span>
                                <?php else : ?>
                                    <span><?php echo ""; ?> min read</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </article>
                
                <!-- Start side posts container after first post -->
                <div class="space-y-6 animate-slide-up" style="animation-delay: <?php echo $animation_delay + 0.1; ?>s;">
            
            <?php 
            // Second and third posts (side posts)
            else : ?>
                
                <article class="group relative rounded-2xl overflow-hidden">
                    <a href="<?php the_permalink(); ?>" class="block">
                        <div class="aspect-[16/9]">
                            <?php if ($featured_image) : ?>
                                <img src="<?php echo $featured_image; ?>" 
                                     alt="<?php echo esc_attr(get_the_title()); ?>" 
                                     class="w-full h-full object-cover img-zoom">
                            <?php else : ?>
                                <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                                    <span class="text-gray-500">No image</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <span class="inline-block px-2 py-0.5 bg-[#B8973D] text-wine-950 text-xs font-semibold rounded-full uppercase tracking-wide mb-2">
                                Travel
                            </span>
                            <h3 class="font-serif text-lg font-bold text-white group-hover:text-gold-400 transition-colors line-clamp-2">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                    </a>
                </article>
                
            <?php 
            endif;
        endwhile; 
        // Close the side posts div if we have more than 1 post
        if ($counter > 1) : ?>
            </div>
        <?php endif;
    else : ?>
        <p class="lg:col-span-3 text-center py-12">No travel articles found.</p>
    <?php endif; 
    
    // Reset post data
    wp_reset_postdata(); 
    ?>
</div>
            </div>
        </section>

        <!-- ========== WINE SECTION with Sidebar ========== -->
       <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Main Content -->
            <div class="flex-1">
                <!-- Section Header -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-10 gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-wine-700 rounded-xl flex items-center justify-center">
                            <span class="text-2xl">🍷</span>
                        </div>
                        <div>
                            <h2 class="font-serif text-3xl font-bold text-gray-900">Wine & Food</h2>
                            <p class="text-gray-500 text-sm">Guides, reviews & recommendations</p>
                        </div>
                    </div>
                   <?php
// Define which category you want to show
$category_slug = 'food-and-wine'; // Change this to your category slug
$category = get_category_by_slug($category_slug);

if ($category) {
    $category_link = get_category_link($category->term_id);
    ?>
    <a href="<?php echo esc_url($category_link); ?>" class="text-wine-700 font-medium hover:text-wine-800 flex items-center gap-1">
        View All <?php echo esc_html($category->name); ?> Articles
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </a>
    <?php
}
?>
                </div>
                
                <!-- Wine & Food Posts Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <?php
                    // Get posts from Wine and Food categories
                    $wine_food_args = array(
                        'category_name' => 'food-and-wine', // Get posts from both categories
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                        'ignore_sticky_posts' => 1,
                    );
                    
                    $wine_food_query = new WP_Query($wine_food_args);
                    
                    if ($wine_food_query->have_posts()) : 
                        while ($wine_food_query->have_posts()) : $wine_food_query->the_post();
                            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                            $author_name = get_the_author();
                            
                            // Calculate reading time
                            $content = get_the_content();
                            $word_count = str_word_count(strip_tags($content));
                            $reading_time = ceil($word_count / 200);
                            
                            // Get categories for badge
                            $categories = get_the_category();
                            $category_name = !empty($categories) ? $categories[0]->name : 'Wine';
                            $category_class = 'category-badge-wine'; // Default
                            
                            // Set category-specific badge class
                            if (!empty($categories)) {
                                $first_category = $categories[0];
                                if (in_array($first_category->slug, array('food', 'recipes', 'pairing'))) {
                                    $category_class = 'category-badge-food';
                                } elseif (in_array($first_category->slug, array('sparkling', 'champagne'))) {
                                    $category_class = 'category-badge-sparkling';
                                } elseif (in_array($first_category->slug, array('education', 'guides', 'learn'))) {
                                    $category_class = 'category-badge-education';
                                }
                            }
                            
                            // Fallback image or emoji
                            $has_image = !empty($featured_image);
                            $emoji = '🍷'; // Default wine emoji
                            
                            // Set emoji based on category
                            if (!empty($categories)) {
                                $first_category_slug = $categories[0]->slug;
                                if (in_array($first_category_slug, array('food', 'recipes'))) {
                                    $emoji = '🍽️';
                                } elseif (in_array($first_category_slug, array('sparkling', 'champagne'))) {
                                    $emoji = '🥂';
                                } elseif (in_array($first_category_slug, array('education'))) {
                                    $emoji = '🍇';
                                }
                            }
                            ?>
                            
                            <article class="post-card">
                                <a href="<?php the_permalink(); ?>" class="block">
                                    <div class="post-card-image <?php echo !$has_image ? 'bg-wine-100 flex items-center justify-center' : ''; ?>">
                                        <?php if ($has_image) : ?>
                                            <img src="<?php echo esc_url($featured_image); ?>" 
                                                 alt="<?php echo esc_attr(get_the_title()); ?>" 
                                                 loading="lazy">
                                        <?php else : ?>
                                            <span class="text-6xl"><?php echo $emoji; ?></span>
                                        <?php endif; ?>
                                        <div class="absolute top-4 left-4">
                                            <span class="category-badge <?php echo $category_class; ?>">
                                                <?php echo esc_html($category_name); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="post-card-content">
                                        <h3 class="post-card-title line-clamp-2">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="flex items-center justify-between text-sm text-gray-500 mt-4">
                                            <span>by <?php echo esc_html($author_name); ?></span>
                                            <span><?php echo $reading_time; ?> min read</span>
                                        </div>
                                    </div>
                                </a>
                            </article>
                            
                        <?php 
                        endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <div class="col-span-2 text-center py-12">
                            <p class="text-gray-500">No wine or food articles found.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Sidebar -->
            <aside class="w-full lg:w-80 flex-shrink-0">
                <div class="lg:sticky lg:top-28 space-y-8">
                    
                    <!-- Widget: Popular Posts -->
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Popular Articles</h3>
                        <div class="space-y-0">
                            <?php
                            // Get popular posts (you might want to use a popular posts plugin or customize this)
                            $popular_args = array(
                                'posts_per_page' => 3,
                                'post_status' => 'publish',
                                'orderby' => 'comment_count', // Simple popularity by comments
                                'order' => 'DESC',
                                'ignore_sticky_posts' => 1,
                            );
                            
                            $popular_query = new WP_Query($popular_args);
                            
                            if ($popular_query->have_posts()) :
                                while ($popular_query->have_posts()) : $popular_query->the_post();
                                    $popular_image = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                    $content = get_the_content();
                                    $word_count = str_word_count(strip_tags($content));
                                    $reading_time = ceil($word_count / 200);
                                    ?>
                                    
                                    <a href="<?php the_permalink(); ?>" class="post-card-small group">
                                        <div class="post-card-small-image">
                                            <?php if ($popular_image) : ?>
                                                <img src="<?php echo esc_url($popular_image); ?>" 
                                                     alt="<?php echo esc_attr(get_the_title()); ?>">
                                            <?php else : ?>
                                                <div class="w-full h-full bg-wine-100 flex items-center justify-center">
                                                    <span class="text-2xl">🍷</span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="post-card-small-title line-clamp-2">
                                                <?php the_title(); ?>
                                            </h4>
                                            <span class="text-xs text-gray-400 mt-1 block">
                                                <?php echo $reading_time; ?> min read
                                            </span>
                                        </div>
                                    </a>
                                    
                                <?php 
                                endwhile;
                                wp_reset_postdata();
                            else : ?>
                                <p class="text-gray-500 text-sm py-4">No popular articles found.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Widget: Newsletter -->
                    <div class="sidebar-widget bg-gradient-to-br from-wine-700 to-wine-800 text-white">
                        <div class="text-center">
                            <span class="text-3xl mb-3 block">✉️</span>
                            <h3 class="text-lg font-bold mb-2">Join Our Newsletter</h3>
                            <p class="text-wine-200 text-sm mb-4">Get weekly wine tips & exclusive guides</p>
                             <div class='w-[100%]'>
 <?php 
$form_html = do_shortcode('[contact-form-7 id="7bebd09" title="Subscribe form"]');
echo $form_html;
?>
</div>
                        </div>
                    </div>
                    
                    <!-- Widget: Ad Space Placeholder -->
                    <div class="sidebar-widget bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center min-h-[250px]">
                        <div class="text-center text-gray-400">
                            <span class="text-4xl block mb-2">📢</span>
                            <p class="font-medium">Ad Widget Space</p>
                            <p class="text-sm">300 x 250</p>
                        </div>
                    </div>
                    
                </div>
            </aside>
        </div>
    </div>
</section>

        <!-- ========== FOOD & PAIRING SECTION ========== -->
      <section class="py-20 bg-gradient-to-b from-cream-100 to-cream-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-10 gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center">
                    <span class="text-2xl">🍽️</span>
                </div>
                <div>
                    <h2 class="font-serif text-3xl font-bold text-gray-900">Food & Pairings</h2>
                    <p class="text-gray-500 text-sm">Recipes, pairings & culinary inspiration</p>
                </div>
            </div>
                 <?php
// Define which category you want to show
$category_slug = 'food-and-wine-pairing'; // Change this to your category slug
$category = get_category_by_slug($category_slug);

if ($category) {
    $category_link = get_category_link($category->term_id);
    ?>
    <a href="<?php echo esc_url($category_link); ?>" class="text-[#059669] font-medium hover:text-wine-800 flex items-center gap-1">
        View All <?php echo esc_html($category->name); ?> Articles
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </a>
    <?php
}
?>
        </div>
        
        <!-- Food Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            // Get Food & Pairings category posts
            $food_args = array(
                'category_name' => 'food-and-wine-pairing', // Use 'food' category slug
                'posts_per_page' => 4,
                'post_status' => 'publish',
                'ignore_sticky_posts' => 1,
            );
            
            $food_query = new WP_Query($food_args);
            
            if ($food_query->have_posts()) : 
                while ($food_query->have_posts()) : $food_query->the_post();
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                    $author_name = get_the_author();
                    
                    // Calculate reading time
                    $content = get_the_content();
                    $word_count = str_word_count(strip_tags($content));
                    $reading_time = ceil($word_count / 200);
                    
                    // Get categories for badge
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? $categories[0]->name : 'Food';
                    
                    // Set category-specific badge class
                    $category_class = 'category-badge-food'; // Default
                    $emoji = '🍽️'; // Default food emoji
                    
                    if (!empty($categories)) {
                        $first_category = $categories[0];
                        $first_category_slug = $first_category->slug;
                        
                        // Set badge class based on category
                        if (in_array($first_category_slug, array('pairing', 'pairings'))) {
                            $category_class = 'category-badge-pairing';
                            $emoji = '🍷';
                        } elseif (in_array($first_category_slug, array('restaurant', 'restaurants', 'dining'))) {
                            $category_class = 'category-badge-restaurant';
                            $emoji = '🏨';
                        } elseif (in_array($first_category_slug, array('recipe', 'recipes'))) {
                            $category_class = 'category-badge-recipe';
                            $emoji = '👨‍🍳';
                        } elseif (in_array($first_category_slug, array('guide', 'guides'))) {
                            $category_class = 'category-badge-guide';
                            $emoji = '📚';
                        }
                        
                        // If no specific category found, use parent category name
                        if ($category_name === 'Food' && !empty($categories[0]->name)) {
                            $category_name = $categories[0]->name;
                        }
                    }
                    
                    // Check if post has featured image
                    $has_image = !empty($featured_image);
                    ?>
                    
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>" class="block">
                            <div class="post-card-image <?php echo !$has_image ? 'bg-emerald-100 flex items-center justify-center' : ''; ?>">
                                <?php if ($has_image) : ?>
                                    <img src="<?php echo esc_url($featured_image); ?>" 
                                         alt="<?php echo esc_attr(get_the_title()); ?>" 
                                         loading="lazy">
                                <?php else : ?>
                                    <span class="text-6xl"><?php echo $emoji; ?></span>
                                <?php endif; ?>
                                <div class="absolute top-4 left-4">
                                    <span class="category-badge <?php echo $category_class; ?>">
                                        <?php echo esc_html($category_name); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="post-card-content">
                                <h3 class="post-card-title line-clamp-2">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="flex items-center justify-between text-sm text-gray-500 mt-4">
                                    <span>by <?php echo esc_html($author_name); ?></span>
                                    <span><?php echo $reading_time; ?> min read</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    
                <?php 
                endwhile;
                wp_reset_postdata();
            else : ?>
                <!-- Fallback content if no food posts found -->
                <div class="lg:col-span-4 text-center py-12">
                    <p class="text-gray-500 mb-4">No food & pairings articles found.</p>
                    <a href="<?php echo esc_url(admin_url('post-new.php')); ?>" class="inline-block px-6 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">
                        Create Your First Food Post
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

        <!-- ========== TRAVEL SECTION ========== -->
       <section class="py-20 bg-gradient-to-br from-wine-950 via-wine-900 to-wine-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-10 gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-gold-500 rounded-xl flex items-center justify-center">
                    <span class="text-2xl">✈️</span>
                </div>
                <div>
                    <h2 class="font-serif text-3xl font-bold">Travel</h2>
                    <p class="text-wine-300 text-sm">Wine destinations & travel guides</p>
                </div>
            </div>
             <?php
// Define which category you want to show
$category_slug = 'travel'; // Change this to your category slug
$category = get_category_by_slug($category_slug);

if ($category) {
    $category_link = get_category_link($category->term_id);
    ?>
    <a href="<?php echo esc_url($category_link); ?>" class="text-[#B8973D] font-medium hover:text-wine-800 flex items-center gap-1">
        View All <?php echo esc_html($category->name); ?> Articles
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </a>
    <?php
}
?>
        </div>
        
        <!-- Travel Destination Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            // Get Travel category posts
            $travel_args = array(
                'category_name' => 'travel',
                'posts_per_page' => 4,
                'post_status' => 'publish',
                'ignore_sticky_posts' => 1,
                'meta_key' => '_thumbnail_id', // Only get posts with featured images
            );
            
            $travel_query = new WP_Query($travel_args);
            
            if ($travel_query->have_posts()) : 
                while ($travel_query->have_posts()) : $travel_query->the_post();
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                    $post_title = get_the_title();
                    $excerpt = get_the_excerpt();
                    
                    // Extract location/destination info (you might want to use custom fields for this)
                    $location = ''; // Default empty
                    $destination = ''; // Default empty
                    
                    // Try to get location from custom field or extract from title
                    if (function_exists('get_field')) {
                        $location = get_field('location', get_the_ID());
                    }
                    
                    // If no custom field, try to extract from title or categories
                    if (empty($location)) {
                        // Check for common wine destinations in title
                        $destinations = array(
                            'Napa' => 'California, USA',
                            'Tuscany' => 'Italy', 
                            'Bordeaux' => 'France',
                            'Santorini' => 'Greece',
                            'Chile' => 'Chile',
                            'Australia' => 'Australia',
                            'South Africa' => 'South Africa',
                            'Portugal' => 'Portugal',
                            'Spain' => 'Spain',
                            'Oregon' => 'Oregon, USA',
                            'Washington' => 'Washington, USA',
                            'Sonoma' => 'California, USA',
                        );
                        
                        foreach ($destinations as $dest => $loc) {
                            if (stripos($post_title, $dest) !== false) {
                                $destination = $dest;
                                $location = $loc;
                                break;
                            }
                        }
                    }
                    
                    // Fallback: Use first category as location
                    if (empty($location)) {
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            $first_category = $categories[0];
                            // Check if category is a location
                            $location_categories = array('usa', 'europe', 'asia', 'australia', 'africa', 'south-america');
                            if (in_array($first_category->slug, $location_categories)) {
                                $location = ucfirst($first_category->name);
                            }
                        }
                    }
                    
                    // Ultimate fallback
                    if (empty($location)) {
                        $location = 'Wine Destination';
                    }
                    if (empty($destination)) {
                        // Use first 2-3 words from title as destination
                        $words = explode(' ', $post_title);
                        $destination = implode(' ', array_slice($words, 0, 3));
                    }
                    
                    // Limit excerpt length
                    $short_excerpt = wp_trim_words($excerpt, 15, '...');
                    ?>
                    
                    <article class="group relative aspect-[3/4] rounded-2xl overflow-hidden card-lift">
                        <a href="<?php the_permalink(); ?>" class="block h-full">
                            <?php if ($featured_image) : ?>
                                <img src="<?php echo esc_url($featured_image); ?>" 
                                     alt="<?php echo esc_attr($post_title); ?>" 
                                     class="w-full h-full object-cover img-zoom-slow" loading="lazy">
                            <?php else : ?>
                                <!-- Fallback background with destination emoji -->
                                <div class="w-full h-full bg-gradient-to-br from-wine-800 to-wine-900 flex items-center justify-center">
                                    <span class="text-6xl">🏔️</span>
                                </div>
                            <?php endif; ?>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <span class="text-gold-400 text-sm font-medium"><?php echo esc_html($location); ?></span>
                                <h3 class="font-serif text-2xl text-white font-bold mt-1 group-hover:text-gold-400 transition-colors">
                                    <?php echo esc_html($destination); ?>
                                </h3>
                                <p class="text-white/70 text-sm mt-2 line-clamp-2">
                                    <?php echo esc_html($short_excerpt); ?>
                                </p>
                            </div>
                        </a>
                    </article>
                    
                <?php 
                endwhile;
                wp_reset_postdata();
            else : ?>
                <!-- Fallback destinations if no travel posts -->
                <?php
                $fallback_destinations = array(
                    array(
                        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400',
                        'location' => 'California, USA',
                        'destination' => 'Napa Valley',
                        'description' => 'World-class Cabernets and luxury wine experiences',
                        'link' => get_category_link(get_category_by_slug('travel'))
                    ),
                    array(
                        'image' => 'https://images.unsplash.com/photo-1523531294919-4bcd7c65e216?w=400',
                        'location' => 'Italy',
                        'destination' => 'Tuscany',
                        'description' => 'Rolling hills, Chianti, and authentic Italian culture',
                        'link' => get_category_link(get_category_by_slug('travel'))
                    ),
                    array(
                        'image' => 'https://images.unsplash.com/photo-1499002238440-d264f4e22b13?w=400',
                        'location' => 'France',
                        'destination' => 'Bordeaux',
                        'description' => 'Legendary châteaux and prestigious wine estates',
                        'link' => get_category_link(get_category_by_slug('travel'))
                    ),
                    array(
                        'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400',
                        'location' => 'Greece',
                        'destination' => 'Santorini',
                        'description' => 'Volcanic wines with stunning Aegean views',
                        'link' => get_category_link(get_category_by_slug('travel'))
                    ),
                );
                
                foreach ($fallback_destinations as $dest) : ?>
                    <article class="group relative aspect-[3/4] rounded-2xl overflow-hidden card-lift">
                        <a href="<?php echo esc_url($dest['link']); ?>" class="block h-full">
                            <img src="<?php echo esc_url($dest['image']); ?>" 
                                 alt="<?php echo esc_attr($dest['destination']); ?>" 
                                 class="w-full h-full object-cover img-zoom-slow" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <span class="text-gold-400 text-sm font-medium"><?php echo esc_html($dest['location']); ?></span>
                                <h3 class="font-serif text-2xl font-bold mt-1 group-hover:text-gold-400 transition-colors">
                                    <?php echo esc_html($dest['destination']); ?>
                                </h3>
                                <p class="text-white/70 text-sm mt-2 line-clamp-2">
                                    <?php echo esc_html($dest['description']); ?>
                                </p>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
        <!-- ========== EVENTS SECTION ========== -->
    <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-10 gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-violet-600 rounded-xl flex items-center justify-center">
                    <span class="text-2xl">🎉</span>
                </div>
                <div>
                    <h2 class="font-serif text-3xl font-bold text-gray-900">Events</h2>
                    <p class="text-gray-500 text-sm">Wine festivals, tastings & happenings</p>
                </div>
            </div>
            <?php
// Define which category you want to show
$category_slug = 'events'; // Change this to your category slug
$category = get_category_by_slug($category_slug);

if ($category) {
    $category_link = get_category_link($category->term_id);
    ?>
    <a href="<?php echo esc_url($category_link); ?>" class="text-[#7C3AED] font-medium hover:text-wine-800 flex items-center gap-1">
        View All <?php echo esc_html($category->name); ?> Articles
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </a>
    <?php
}
?>
        </div>
        
        <!-- Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php
            // Get Events category posts
            $events_args = array(
                'category_name' => 'events',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'ignore_sticky_posts' => 1,
                'meta_key' => '_thumbnail_id', // Only get posts with featured images
                'orderby' => 'date',
                'order' => 'DESC',
            );
            
            $events_query = new WP_Query($events_args);
            
            if ($events_query->have_posts()) : 
                $event_counter = 0;
                $event_backgrounds = array('bg-violet-100', 'bg-gold-100', 'bg-wine-100');
                $event_emojis = array('🍷', '🥂', '🎓', '🍾', '🏆', '🎪');
                $event_types = array('Festival', 'Tasting', 'Workshop', 'Seminar', 'Auction', 'Tour');
                
                while ($events_query->have_posts()) : $events_query->the_post();
                    $event_counter++;
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                    $post_title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $post_date = get_the_date('M j, Y');
                    
                    // Get event date (try to use ACF if available, otherwise use post date)
                    $event_date = $post_date;
                    if (function_exists('get_field')) {
                        $event_start_date = get_field('event_start_date', get_the_ID());
                        $event_end_date = get_field('event_end_date', get_the_ID());
                        
                        if ($event_start_date) {
                            $start_date = date('M j', strtotime($event_start_date));
                            if ($event_end_date) {
                                $end_date = date('j, Y', strtotime($event_end_date));
                                $event_date = $start_date . '-' . $end_date;
                            } else {
                                $event_date = date('M j, Y', strtotime($event_start_date));
                            }
                        }
                    }
                    
                    // Get categories for badge
                    $categories = get_the_category();
                    $event_type = 'Event';
                    
                    if (!empty($categories)) {
                        // Try to match category with event types
                        foreach ($categories as $category) {
                            $category_name = strtolower($category->name);
                            foreach ($event_types as $type) {
                                if (strpos($category_name, strtolower($type)) !== false) {
                                    $event_type = $type;
                                    break 2;
                                }
                            }
                        }
                        
                        // If no match found, use first category
                        if ($event_type === 'Event') {
                            $event_type = $categories[0]->name;
                        }
                    }
                    
                    // Select background and emoji
                    $bg_class = isset($event_backgrounds[$event_counter - 1]) ? $event_backgrounds[$event_counter - 1] : 'bg-violet-100';
                    $emoji = isset($event_emojis[$event_counter - 1]) ? $event_emojis[$event_counter - 1] : '🍷';
                    
                    // Check if post has featured image
                    $has_image = !empty($featured_image);
                    
                    // Limit excerpt length
                    $short_excerpt = wp_trim_words($excerpt, 15, '...');
                    ?>
                    
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>" class="block">
                            <div class="post-card-image <?php echo !$has_image ? $bg_class . ' flex items-center justify-center' : ''; ?>">
                                <?php if ($has_image) : ?>
                                    <img src="<?php echo esc_url($featured_image); ?>" 
                                         alt="<?php echo esc_attr($post_title); ?>" 
                                         loading="lazy">
                                <?php else : ?>
                                    <span class="text-6xl"><?php echo $emoji; ?></span>
                                <?php endif; ?>
                                <div class="absolute top-4 left-4">
                                    <span class="category-badge category-badge-events">
                                        <?php echo esc_html($event_type); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="post-card-content">
                                <div class="flex items-center gap-2 text-violet-600 text-sm font-medium mb-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <?php echo esc_html($event_date); ?>
                                </div>
                                <h3 class="post-card-title line-clamp-2">
                                    <?php echo esc_html($post_title); ?>
                                </h3>
                                <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                    <?php echo esc_html($short_excerpt); ?>
                                </p>
                            </div>
                        </a>
                    </article>
                    
                <?php 
                endwhile;
                wp_reset_postdata();
            else : ?>
                <!-- Fallback events if no events posts found -->
                <?php
                $fallback_events = array(
                    array(
                        'bg' => 'bg-violet-100',
                        'emoji' => '🍷',
                        'type' => 'Festival',
                        'date' => 'Jan 15-18, 2025',
                        'title' => 'Napa Valley Wine Festival 2025',
                        'description' => 'Experience over 200 wineries showcasing their finest vintages.',
                        'link' => get_category_link(get_category_by_slug('events'))
                    ),
                    array(
                        'bg' => 'bg-gold-100',
                        'emoji' => '🥂',
                        'type' => 'Tasting',
                        'date' => 'Feb 8, 2025',
                        'title' => 'Winter Wine Tasting in Sonoma',
                        'description' => 'An intimate evening exploring premium Sonoma wines.',
                        'link' => get_category_link(get_category_by_slug('events'))
                    ),
                    array(
                        'bg' => 'bg-wine-100',
                        'emoji' => '🎓',
                        'type' => 'Workshop',
                        'date' => 'Mar 12, 2025',
                        'title' => 'Wine Pairing Masterclass with Chef Marcus',
                        'description' => 'Learn the art of food and wine pairing from experts.',
                        'link' => get_category_link(get_category_by_slug('events'))
                    ),
                );
                
                foreach ($fallback_events as $event) : ?>
                    <article class="post-card">
                        <a href="<?php echo esc_url($event['link']); ?>" class="block">
                            <div class="post-card-image <?php echo $event['bg']; ?> flex items-center justify-center">
                                <span class="text-6xl"><?php echo $event['emoji']; ?></span>
                                <div class="absolute top-4 left-4">
                                    <span class="category-badge category-badge-events">
                                        <?php echo $event['type']; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="post-card-content">
                                <div class="flex items-center gap-2 text-violet-600 text-sm font-medium mb-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <?php echo $event['date']; ?>
                                </div>
                                <h3 class="post-card-title line-clamp-2">
                                    <?php echo $event['title']; ?>
                                </h3>
                                <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                    <?php echo $event['description']; ?>
                                </p>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

        <!-- ========== FEATURED EXPERIENCES CTA ========== -->
        <section class="py-20 bg-cream-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative bg-gradient-to-r from-wine-800 to-wine-900 rounded-3xl overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="hero-pattern text-white"></div>
                    </div>
                    
                    <div class="relative grid lg:grid-cols-2 gap-8 items-center p-8 lg:p-16">
                        <div class="text-white">
                            <span class="text-gold-400 font-medium tracking-widest uppercase text-sm">Book an Experience</span>
                            <h2 class="font-serif text-3xl lg:text-4xl font-bold mt-4 mb-6">
                                Create Unforgettable Wine Memories
                            </h2>
                            <p class="text-wine-200 text-lg mb-8">
                                From private vineyard tours to exclusive tastings, discover curated wine experiences that will elevate your journey.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="https://experiences.ilovewine.com/" class="btn-gold">
                                    Explore Experiences
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                                <a href="/food-and-wine-pairing/" class="inline-flex items-center gap-2 px-6 py-3 text-white font-medium border-2 border-white/30 rounded-full hover:bg-white/10 transition-colors">
                                    Free Pairing Guide
                                </a>
                            </div>
                        </div>
                        <div class="hidden lg:flex justify-center">
                            <div class="relative">
                                <div class="w-64 h-64 bg-gold-500/20 rounded-full absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
                                <span class="text-[150px] relative z-10 animate-float">🍷</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== INSTAGRAM SECTION ========== -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-3xl font-bold text-gray-900 mb-4">Follow @ilovewine</h2>
                    <p class="text-gray-600">Join our community of 50K+ wine lovers on Instagram</p>
                </div>
                
                <!-- Instagram Grid -->
                <div class="grid grid-cols-3 md:grid-cols-6 gap-3">
                    <a href="https://www.instagram.com/ilovewine/" target="_blank" rel="noopener" class="aspect-square rounded-xl overflow-hidden bg-wine-50 group">
                        <div class="w-full h-full flex items-center justify-center group-hover:bg-wine-100 transition-colors">
                            <span class="text-4xl">🍷</span>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/ilovewine/" target="_blank" rel="noopener" class="aspect-square rounded-xl overflow-hidden bg-gold-100 group">
                        <div class="w-full h-full flex items-center justify-center group-hover:bg-gold-200 transition-colors">
                            <span class="text-4xl">🍇</span>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/ilovewine/" target="_blank" rel="noopener" class="aspect-square rounded-xl overflow-hidden bg-cream-200 group">
                        <div class="w-full h-full flex items-center justify-center group-hover:bg-cream-300 transition-colors">
                            <span class="text-4xl">🥂</span>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/ilovewine/" target="_blank" rel="noopener" class="aspect-square rounded-xl overflow-hidden bg-wine-100 group">
                        <div class="w-full h-full flex items-center justify-center group-hover:bg-wine-200 transition-colors">
                            <span class="text-4xl">🧀</span>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/ilovewine/" target="_blank" rel="noopener" class="aspect-square rounded-xl overflow-hidden bg-gold-50 group">
                        <div class="w-full h-full flex items-center justify-center group-hover:bg-gold-100 transition-colors">
                            <span class="text-4xl">✈️</span>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/ilovewine/" target="_blank" rel="noopener" class="aspect-square rounded-xl overflow-hidden bg-wine-700 group flex items-center justify-center text-white">
                        <div class="text-center p-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                            </svg>
                            <span class="text-sm font-medium">Follow</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>