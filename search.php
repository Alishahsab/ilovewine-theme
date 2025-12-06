<?php
/*
Template Name: Search Page
Template Post Type: page
*/
 



get_header(); 

// Get search query
$search_query = get_search_query();
$results_count = $GLOBALS['wp_query']->found_posts;

?>
<!-- ========== SEARCH HEADER ========== -->
<section class="relative bg-gradient-to-br from-wine-950 via-wine-900 to-wine-800 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="hero-pattern text-white"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="text-center max-w-3xl mx-auto">
            <!-- Breadcrumb -->
            <nav class="flex items-center justify-center gap-2 text-wine-300 text-sm mb-6" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-white">Search Results</span>
            </nav>
            
            <!-- Search Icon -->
            <div class="w-16 h-16 bg-wine-800/50 rounded-full flex items-center justify-center mx-auto mb-6 animate-fade-in">
                <svg class="w-8 h-8 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            
            <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 animate-slide-up">
                Search Results
            </h1>
            
            <p class="text-wine-200 text-lg mb-8 animate-slide-up" style="animation-delay: 0.1s;">
                <?php if ($results_count > 0): ?>
                    Showing <span class="text-gold-400 font-semibold"><?php echo $results_count; ?> results</span> for
                <?php else: ?>
                    <span class="text-gold-400 font-semibold">No results found</span> for
                <?php endif; ?>
            </p>
            
            <!-- Search Query Display -->
            <?php if (!empty($search_query)): ?>
            <div class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 animate-slide-up" style="animation-delay: 0.2s;">
                <span class="text-2xl">🔍</span>
                <span class="font-serif text-xl font-semibold text-white">"<?php echo esc_html($search_query); ?>"</span>
            </div>
            <?php endif; ?>
            
            <!-- Search Form -->
            <form action="<?php echo home_url('/'); ?>" method="get" class="mt-8 max-w-xl mx-auto animate-slide-up" style="animation-delay: 0.3s;">
                <div class="relative">
                    <input type="search" name="s" value="<?php echo esc_attr($search_query); ?>" placeholder="Search wine, food, travel..." 
                           class="w-full px-6 py-4 pr-14 !p-[30px] !rounded-[33px] text-lg bg-white/10 border-2 border-white/20 rounded-full text-white placeholder-wine-300 focus:bg-white/20 focus:border-gold-400 outline-none transition-all">
                    <button type="submit" class="absolute right-2 top-[39%] -translate-y-1/2 p-3 bg-gold-500 text-wine-950 rounded-full hover:bg-gold-400 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ========== SEARCH RESULTS SECTION ========== -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- Main Content -->
            <div class="flex-1">
                <?php if (have_posts()): ?>
                
                <!-- Results Header -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8 pb-6 border-b border-gray-200">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $posts_per_page = get_option('posts_per_page');
                    $start = (($paged - 1) * $posts_per_page) + 1;
                    $end = min($paged * $posts_per_page, $results_count);
                    ?>
                    <div class="flex items-center gap-3">
                        <span class="text-gray-600">
                            Showing <span class="font-semibold text-gray-900"><?php echo $start; ?>-<?php echo $end; ?></span> of <span class="font-semibold text-gray-900"><?php echo $results_count; ?></span> results
                        </span>
                    </div>
                    
                    <!-- Sort Dropdown -->
                    <div class="flex items-center gap-3">
                        <label for="sort" class="text-sm text-gray-600">Sort by:</label>
                        <select id="sort" name="sort" class="px-4 py-2 text-sm border border-gray-200 rounded-lg focus:border-wine-500 focus:ring-2 focus:ring-wine-100 outline-none cursor-pointer" onchange="location = this.value;">
                            <option value="<?php echo add_query_arg('orderby', 'relevance'); ?>" <?php selected(get_query_var('orderby'), 'relevance'); ?>>Most Relevant</option>
                            <option value="<?php echo add_query_arg('orderby', 'date'); ?>" <?php selected(get_query_var('orderby'), 'date'); ?>>Most Recent</option>
                            <option value="<?php echo add_query_arg('orderby', 'comment_count'); ?>" <?php selected(get_query_var('orderby'), 'comment_count'); ?>>Most Popular</option>
                            <option value="<?php echo add_query_arg('orderby', 'title'); ?>" <?php selected(get_query_var('orderby'), 'title'); ?>>Title A-Z</option>
                        </select>
                    </div>
                </div>
                
                <!-- Search Results Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    
                    <?php while (have_posts()): the_post(); 
                        $categories = get_the_category();
                        $category_class = '';
                        $category_text = '';
                        
                        if (!empty($categories)) {
                            $category = $categories[0];
                            $category_text = $category->name;
                            
                            // Assign category-specific badge classes
                            if (in_array($category->slug, array('wine-reviews', 'wine-guides', 'education', 'comparisons', 'tips'))) {
                                $category_class = 'category-badge-wine';
                            } elseif (in_array($category->slug, array('pairing', 'food-pairings'))) {
                                $category_class = 'category-badge-food';
                            } elseif (in_array($category->slug, array('travel', 'destinations'))) {
                                $category_class = 'category-badge-travel';
                            }
                        }
                        
                        // Get reading time
                        $content = get_the_content();
                        $word_count = str_word_count(strip_tags($content));
                        $reading_time = ceil($word_count / 200); // Average reading speed: 200 words per minute
                    ?>
                    
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>" class="block">
                            <div class="post-card-image">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover', 'alt' => get_the_title(), 'loading' => 'lazy')); ?>
                                <?php else: ?>
                                    <div class="bg-wine-100 flex items-center justify-center w-full h-full">
                                        <span class="text-6xl">🍇</span>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($category_text): ?>
                                <div class="absolute top-4 left-4">
                                    <span class="category-badge <?php echo esc_attr($category_class); ?>"><?php echo esc_html($category_text); ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="post-card-content">
                                <h3 class="post-card-title line-clamp-2">
                                    <?php 
                                    $title = get_the_title();
                                    if (!empty($search_query)) {
                                        // Highlight search term in title
                                        $title = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<mark class="bg-gold-200 text-wine-900 px-0.5 rounded">$1</mark>', $title);
                                    }
                                    echo $title;
                                    ?>
                                </h3>
                                <p class="text-gray-600 text-sm mt-3 line-clamp-2">
                                    <?php 
                                    $excerpt = get_the_excerpt();
                                    if (!empty($search_query)) {
                                        // Highlight search term in excerpt
                                        $excerpt = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<mark class="bg-gold-200 text-wine-900 px-0.5 rounded">$1</mark>', $excerpt);
                                    }
                                    echo $excerpt;
                                    ?>
                                </p>
                                <div class="flex items-center justify-between text-sm text-gray-500 mt-4">
                                    <span><?php the_author(); ?></span>
                                    <span><?php echo $reading_time; ?> min read</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    
                    <?php endwhile; ?>
                    
                </div>
                
                <!-- Pagination -->
                <?php if (paginate_links()): ?>
                <nav class="mt-12 flex items-center justify-center" aria-label="Pagination">
                    <div class="flex items-center gap-2">
                        <?php
                        $paginate_args = array(
                            'prev_text' => '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Previous',
                            'next_text' => 'Next <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                            'type' => 'array'
                        );
                        
                        $paginate_links = paginate_links($paginate_args);
                        
                        if ($paginate_links) {
                            foreach ($paginate_links as $link) {
                                echo str_replace(
                                    array('page-numbers', 'current'),
                                    array('w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-wine-50 hover:text-wine-700 hover:border-wine-200 transition-colors', 'text-white bg-wine-700'),
                                    $link
                                );
                            }
                        }
                        ?>
                    </div>
                </nav>
                <?php endif; ?>
                
                <?php else: ?>
                
                <!-- No Results Message -->
                <div class="text-center py-12">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">🔍</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">No results found</h3>
                    <p class="text-gray-600 max-w-md mx-auto mb-8">
                        Sorry, we couldn't find any posts matching "<?php echo esc_html($search_query); ?>".
                        Try checking your spelling or using different keywords.
                    </p>
                    <a href="<?php echo home_url('/'); ?>" class="px-6 py-3 bg-wine-700 text-white rounded-lg hover:bg-wine-800 transition-colors inline-block">
                        Back to Home
                    </a>
                </div>
                
                <?php endif; ?>
            </div>
            
            <!-- Sidebar -->
            <aside class="w-full lg:w-80 flex-shrink-0">
                <div class="lg:sticky lg:top-28 space-y-8">
                    
                    <!-- Widget: Filter by Category -->
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Filter by Category</h3>
                        <div class="space-y-3">
                            <?php
                            $categories = get_categories(array(
                                'hide_empty' => true
                            ));
                            
                            foreach ($categories as $category):
                                $count = $category->count;
                                $category_url = add_query_arg('cat', $category->term_id, get_search_link($search_query));
                            ?>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-5 h-5 rounded border-gray-300 text-wine-700 focus:ring-wine-500 cursor-pointer" 
                                       onchange="window.location.href='<?php echo esc_url($category_url); ?>'">
                                <span class="flex-1 text-sm text-gray-700 group-hover:text-wine-700 transition-colors">
                                    <?php echo esc_html($category->name); ?>
                                </span>
                                <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full"><?php echo $count; ?></span>
                            </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <!-- Widget: Popular Searches -->
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Popular Searches</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php
                            $popular_searches = array(
                                'Cabernet Sauvignon',
                                'Wine Tasting',
                                'Napa Valley',
                                'Chardonnay',
                                'Wine & Cheese',
                                'Red Wine',
                                'Tuscany',
                                'Champagne'
                            );
                            
                            foreach ($popular_searches as $search_term):
                                $search_url = add_query_arg('s', urlencode($search_term), home_url('/'));
                            ?>
                            <a href="<?php echo esc_url($search_url); ?>" class="px-3 py-1.5 text-sm bg-wine-50 text-wine-700 rounded-full hover:bg-wine-100 transition-colors">
                                <?php echo esc_html($search_term); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <!-- Widget: Newsletter -->
                    <div class="sidebar-widget bg-gradient-to-br from-wine-700 to-wine-800 text-white">
                        <div class="text-center">
                            <span class="text-3xl mb-3 block">✉️</span>
                            <h3 class="text-lg font-bold mb-2">Join Our Newsletter</h3>
                            <p class="text-wine-200 text-sm mb-4">Get weekly wine tips & exclusive guides</p>
                            <?php echo do_shortcode('[your-newsletter-shortcode]'); ?>
                            <!-- Or use your own form -->
                            <form class="space-y-3" method="post" action="#">
                                <input type="email" name="email" placeholder="Your email" 
                                       class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-wine-200 focus:bg-white/20 focus:border-white/40 outline-none transition-all text-sm">
                                <button type="submit" class="w-full px-4 py-3 bg-gold-500 text-wine-950 font-semibold rounded-lg hover:bg-gold-400 transition-colors">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Widget: Featured Article -->
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Featured Article</h3>
                        <?php
                        $featured_args = array(
                            'posts_per_page' => 1,
                            'meta_key' => '_is_featured',
                            'meta_value' => '1',
                            'post_type' => 'post',
                            'post_status' => 'publish'
                        );
                        
                        $featured_query = new WP_Query($featured_args);
                        
                        if ($featured_query->have_posts()):
                            while ($featured_query->have_posts()): $featured_query->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="block group">
                            <div class="aspect-video rounded-lg overflow-hidden mb-4">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                <?php else: ?>
                                    <div class="bg-wine-100 w-full h-full flex items-center justify-center">
                                        <span class="text-4xl">🍷</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <span class="category-badge category-badge-wine text-xs mb-2 inline-block">Featured</span>
                            <h4 class="font-serif text-lg font-bold text-gray-900 group-hover:text-wine-700 transition-colors line-clamp-2">
                                <?php the_title(); ?>
                            </h4>
                            <p class="text-gray-600 text-sm mt-2"><?php the_author(); ?></p>
                        </a>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            // Fallback to latest post
                            $latest_args = array(
                                'posts_per_page' => 1,
                                'post_type' => 'post',
                                'post_status' => 'publish'
                            );
                            
                            $latest_query = new WP_Query($latest_args);
                            
                            if ($latest_query->have_posts()):
                                while ($latest_query->have_posts()): $latest_query->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="block group">
                            <div class="aspect-video rounded-lg overflow-hidden mb-4">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                <?php else: ?>
                                    <div class="bg-wine-100 w-full h-full flex items-center justify-center">
                                        <span class="text-4xl">🍷</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <span class="category-badge category-badge-wine text-xs mb-2 inline-block">Latest</span>
                            <h4 class="font-serif text-lg font-bold text-gray-900 group-hover:text-wine-700 transition-colors line-clamp-2">
                                <?php the_title(); ?>
                            </h4>
                            <p class="text-gray-600 text-sm mt-2"><?php the_author(); ?></p>
                        </a>
                        <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        endif;
                        ?>
                    </div>
                    
                </div>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>