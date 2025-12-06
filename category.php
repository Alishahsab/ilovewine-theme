<?php
/**
 * Category Template
 * Displays category archive pages
 */

get_header();

// Get current category information
$category = get_queried_object();
$category_id = $category->term_id;
$category_name = $category->name;
$category_description = $category->description ?: 'Explore our comprehensive wine guides, reviews, and recommendations. From varietals to regions, discover everything about the world of wine.';
$category_count = $category->count;
$category_slug = $category->slug;

// Get subcategories
$subcategories = get_categories(array(
    'parent' => $category_id,
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC'
));

// Get current page for pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_option('posts_per_page');
$total_posts = $wp_query->found_posts;
$start = (($paged - 1) * $posts_per_page) + 1;
$end = min($paged * $posts_per_page, $total_posts);

// Get featured post (first post in the category)
$featured_args = array(
    'cat' => $category_id,
    'posts_per_page' => 1,
    'meta_query' => array(
        array(
            'key' => '_is_featured',
            'value' => '1'
        )
    )
);
$featured_query = new WP_Query($featured_args);

// If no featured post, get the latest post
if (!$featured_query->have_posts()) {
    $featured_args = array(
        'cat' => $category_id,
        'posts_per_page' => 1
    );
    $featured_query = new WP_Query($featured_args);
}

// Get popular posts for sidebar
$popular_args = array(
    'cat' => $category_id,
    'posts_per_page' => 4,
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'paged' => 1 // Always show first page for popular posts
);
$popular_query = new WP_Query($popular_args);

// Get popular tags
$popular_tags = get_tags(array(
    'number' => 8,
    'orderby' => 'count',
    'order' => 'DESC'
));

// Handle sorting
$orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : 'date_desc';

// Modify main query if sorting is applied
if ($orderby !== 'date_desc') {
    global $wp_query;
    
    switch ($orderby) {
        case 'popular':
            $wp_query->set('meta_key', 'post_views_count');
            $wp_query->set('orderby', 'meta_value_num');
            $wp_query->set('order', 'DESC');
            break;
        case 'oldest':
            $wp_query->set('orderby', 'date');
            $wp_query->set('order', 'ASC');
            break;
        case 'title':
            $wp_query->set('orderby', 'title');
            $wp_query->set('order', 'ASC');
            break;
    }
    
    // Re-run the query with new parameters
    $wp_query->get_posts();
}
?>

 

    <!-- ========== MAIN CONTENT ========== -->
    <main id="main-content" class="pt-20">
        
        <!-- ========== CATEGORY HEADER ========== -->
        <section class="relative bg-gradient-to-br from-wine-950 via-wine-900 to-wine-800 py-16 lg:py-24 overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="hero-pattern text-white"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Breadcrumbs -->
                <nav class="mb-6" aria-label="Breadcrumb">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<ol class="flex items-center space-x-2 text-sm">', '</ol>');
                    } else {
                        ?>
                        <ol class="flex items-center space-x-2 text-sm">
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-wine-300 hover:text-white transition-colors">Home</a>
                            </li>
                            <li class="text-wine-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </li>
                            <li>
                                <span class="text-white font-medium"><?php echo esc_html($category_name); ?></span>
                            </li>
                        </ol>
                        <?php
                    }
                    ?>
                </nav>
                
                <!-- Category Info -->
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
                    <div class="max-w-2xl">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-wine-700/50 rounded-2xl flex items-center justify-center">
                                <span class="text-4xl">🍷</span>
                            </div>
                            <div>
                                <span class="text-gold-400 font-medium tracking-widest uppercase text-sm">Category</span>
                                <h1 class="font-serif text-4xl lg:text-5xl font-bold text-white"><?php echo esc_html($category_name); ?></h1>
                            </div>
                        </div>
                        <p class="text-wine-200 text-lg leading-relaxed">
                            <?php echo esc_html($category_description); ?>
                        </p>
                    </div>
                    
                    <!-- Category Stats -->
                    <div class="flex items-center gap-8">
                        <div class="text-center">
                            <span class="block text-3xl font-bold text-white"><?php echo esc_html($category_count); ?></span>
                            <span class="text-wine-300 text-sm">Articles</span>
                        </div>
                        <div class="w-px h-12 bg-wine-700"></div>
                        <div class="text-center">
                            <span class="block text-3xl font-bold text-white"><?php echo count($subcategories); ?></span>
                            <span class="text-wine-300 text-sm">Subcategories</span>
                        </div>
                    </div>
                </div>
                
                <!-- Subcategories -->
                <?php if (!empty($subcategories)) : ?>
                <div class="mt-10 pt-8 border-t border-wine-700/50">
                    <h2 class="text-wine-300 text-sm font-medium uppercase tracking-wider mb-4">Browse Subcategories</h2>
                    <div class="flex flex-wrap gap-3">
                        <?php foreach ($subcategories as $subcat) : ?>
                            <a href="<?php echo esc_url(get_category_link($subcat->term_id)); ?>" 
                               class="px-4 py-2 bg-white/10 text-white text-sm font-medium rounded-full hover:bg-white/20 transition-colors">
                                <?php echo esc_html($subcat->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- ========== FEATURED POST ========== -->
        <?php if ($featured_query->have_posts()) : ?>
            <?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                <section class="py-12 bg-white border-b border-gray-100">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <article class="group">
                            <a href="<?php the_permalink(); ?>" class="grid lg:grid-cols-2 gap-8 items-center">
                                <div class="relative aspect-[16/10] rounded-2xl overflow-hidden">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array(
                                            'class' => 'w-full h-full object-cover img-zoom-slow',
                                            'loading' => 'lazy',
                                            'alt' => get_the_title()
                                        )); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full bg-wine-100 flex items-center justify-center">
                                            <span class="text-6xl">🍷</span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="absolute top-4 left-4">
                                        <span class="px-3 py-1.5 bg-gold-500 text-wine-950 text-xs font-bold rounded-full uppercase tracking-wide">
                                            Featured
                                        </span>
                                    </div>
                                </div>
                                <div class="lg:py-8">
                                    <div class="flex items-center gap-3 mb-4">
                                        <?php 
                                        $post_categories = get_the_category();
                                        if (!empty($post_categories)) : ?>
                                            <span class="px-3 py-1 bg-wine-100 text-wine-700 text-xs font-semibold rounded-full">
                                                <?php echo esc_html($post_categories[0]->name); ?>
                                            </span>
                                        <?php endif; ?>
                                        <span class="text-gray-400 text-sm"><?php echo get_the_date('M j, Y'); ?></span>
                                    </div>
                                    <h2 class="font-serif text-3xl lg:text-4xl font-bold text-gray-900 mb-4 group-hover:text-wine-700 transition-colors">
                                        <?php the_title(); ?>
                                    </h2>
                                    <p class="text-gray-600 text-lg mb-6 line-clamp-3">
                                        <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <?php 
                                        $author_id = get_the_author_meta('ID');
                                        echo get_avatar($author_id, 48, '', '', array('class' => 'w-12 h-12 rounded-full object-cover'));
                                        ?>
                                        <div>
                                            <span class="font-medium text-gray-900"><?php the_author(); ?></span>
                                            <div class="flex items-center gap-2 text-sm text-gray-500">
                                                <?php
                                                $reading_time = ceil(str_word_count(get_the_content()) / 200);
                                                ?>
                                                <span><?php echo $reading_time; ?> min read</span>
                                                <span>•</span>
                                                <span>
                                                    <?php 
                                                    $views = get_post_meta(get_the_ID(), 'post_views_count', true);
                                                    echo $views ? number_format($views) . ' views' : '1.2K views';
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                </section>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <!-- ========== POSTS ARCHIVE with SIDEBAR ========== -->
        <section class="py-16 bg-cream-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row gap-12">
                    
                    <!-- Main Content -->
                    <div class="flex-1">
                        <!-- Filter/Sort Bar -->
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8 pb-6 border-b border-gray-200">
                            <p class="text-gray-600">
                                Showing <span class="font-semibold text-gray-900"><?php echo $start; ?>-<?php echo $end; ?></span> 
                                of <span class="font-semibold text-gray-900"><?php echo $total_posts; ?></span> articles
                            </p>
                            <div class="flex items-center gap-4">
                                <label class="text-sm !w-[70%] text-gray-600">Sort by:</label>
                                <select id="sort-posts" class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm focus:border-wine-500 focus:ring-2 focus:ring-wine-100 outline-none">
                                    <option value="date_desc" <?php echo ($orderby == 'date_desc') ? 'selected' : ''; ?>>Latest</option>
                                    <option value="popular" <?php echo ($orderby == 'popular') ? 'selected' : ''; ?>>Most Popular</option>
                                    <option value="oldest" <?php echo ($orderby == 'oldest') ? 'selected' : ''; ?>>Oldest</option>
                                    <option value="title" <?php echo ($orderby == 'title') ? 'selected' : ''; ?>>A-Z</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Posts Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <article class="post-card">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <div class="post-card-image">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('medium_large', array(
                                                        'class' => 'w-full h-full object-cover',
                                                        'loading' => 'lazy',
                                                        'alt' => get_the_title()
                                                    )); ?>
                                                <?php else : ?>
                                                    <?php
                                                    // Determine background color based on category
                                                    $post_cats = get_the_category();
                                                    $bg_class = 'bg-wine-100'; // default
                                                    if (!empty($post_cats)) {
                                                        $first_cat = $post_cats[0]->slug;
                                                        switch($first_cat) {
                                                            case 'sparkling':
                                                                $bg_class = 'bg-gold-100';
                                                                break;
                                                            case 'storage':
                                                                $bg_class = 'bg-cream-200';
                                                                break;
                                                            case 'reviews':
                                                                $bg_class = 'bg-wine-50';
                                                                break;
                                                            default:
                                                                $bg_class = 'bg-wine-100';
                                                        }
                                                    }
                                                    ?>
                                                    <div class="w-full h-full <?php echo $bg_class; ?> flex items-center justify-center">
                                                        <span class="text-6xl">
                                                            <?php
                                                            // Emoji based on category
                                                            if (!empty($post_cats)) {
                                                                $first_cat = $post_cats[0]->slug;
                                                                switch($first_cat) {
                                                                    case 'sparkling': echo '🥂'; break;
                                                                    case 'storage': echo '🍾'; break;
                                                                    case 'reviews': echo '🏆'; break;
                                                                    default: echo '🍇';
                                                                }
                                                            } else {
                                                                echo '🍷';
                                                            }
                                                            ?>
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="absolute top-4 left-4">
                                                    <?php 
                                                    $post_categories = get_the_category();
                                                    if (!empty($post_categories)) : ?>
                                                        <span class="category-badge category-badge-wine">
                                                            <?php echo esc_html($post_categories[0]->name); ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="post-card-content">
                                                <h3 class="post-card-title line-clamp-2">
                                                    <?php the_title(); ?>
                                                </h3>
                                                <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                                </p>
                                                <div class="flex items-center justify-between text-sm text-gray-500 mt-4 pt-4 border-t border-gray-100">
                                                    <span>by <?php the_author(); ?></span>
                                                    <span>
                                                        <?php 
                                                        $reading_time = ceil(str_word_count(get_the_content()) / 200);
                                                        echo $reading_time . ' min read';
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </article>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <div class="col-span-2 text-center py-12">
                                    <p class="text-gray-600 text-lg">No posts found in this category.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Pagination -->
                        <?php if ($total_posts > $posts_per_page) : ?>
                            <nav class="mt-12 flex items-center justify-center" aria-label="Pagination">
                                <ul class="flex items-center gap-2">
                                    <!-- Previous Page -->
                                    <?php if ($paged > 1) : ?>
                                        <li>
                                            <a href="<?php echo get_pagenum_link($paged - 1); ?>" 
                                               class="w-10 h-10 flex items-center justify-center border border-gray-200 rounded-lg hover:bg-wine-50 hover:border-wine-200 transition-colors"
                                               aria-label="Previous page">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    
                                    <!-- Page Numbers -->
                                    <?php
                                    $total_pages = ceil($total_posts / $posts_per_page);
                                    $max_pages_to_show = 5;
                                    $start_page = max(1, $paged - floor($max_pages_to_show / 2));
                                    $end_page = min($total_pages, $start_page + $max_pages_to_show - 1);
                                    
                                    // Adjust start page if we're near the end
                                    if ($end_page - $start_page + 1 < $max_pages_to_show) {
                                        $start_page = max(1, $end_page - $max_pages_to_show + 1);
                                    }
                                    
                                    // Show first page if not in range
                                    if ($start_page > 1) : ?>
                                        <li>
                                            <a href="<?php echo get_pagenum_link(1); ?>" 
                                               class="w-10 h-10 flex items-center justify-center border border-gray-200 rounded-lg hover:bg-wine-50 hover:border-wine-200 transition-colors">
                                                1
                                            </a>
                                        </li>
                                        <?php if ($start_page > 2) : ?>
                                            <li class="flex items-center">
                                                <span class="px-2 text-gray-400">...</span>
                                            </li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    
                                    <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
                                        <li>
                                            <a href="<?php echo get_pagenum_link($i); ?>" 
                                               class="w-10 h-10 flex items-center justify-center border <?php echo ($i == $paged) ? 'bg-wine-600 text-white border-wine-600' : 'border-gray-200 hover:bg-wine-50 hover:border-wine-200'; ?> rounded-lg transition-colors"
                                               aria-label="Page <?php echo $i; ?>" <?php echo ($i == $paged) ? 'aria-current="page"' : ''; ?>>
                                                <?php echo $i; ?>
                                            </a>
                                        </li>
                                    <?php endfor; ?>
                                    
                                    <!-- Show last page if not in range -->
                                    <?php if ($end_page < $total_pages) : ?>
                                        <?php if ($end_page < $total_pages - 1) : ?>
                                            <li class="flex items-center">
                                                <span class="px-2 text-gray-400">...</span>
                                            </li>
                                        <?php endif; ?>
                                        <li>
                                            <a href="<?php echo get_pagenum_link($total_pages); ?>" 
                                               class="w-10 h-10 flex items-center justify-center border border-gray-200 rounded-lg hover:bg-wine-50 hover:border-wine-200 transition-colors">
                                                <?php echo $total_pages; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    
                                    <!-- Next Page -->
                                    <?php if ($paged < $total_pages) : ?>
                                        <li>
                                            <a href="<?php echo get_pagenum_link($paged + 1); ?>" 
                                               class="w-10 h-10 flex items-center justify-center border border-gray-200 rounded-lg hover:bg-wine-50 hover:border-wine-200 transition-colors"
                                               aria-label="Next page">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Sidebar -->
                    <aside class="w-full lg:w-80 flex-shrink-0">
                        <div class="lg:sticky lg:top-28 space-y-8">
                            
                            <!-- Widget: Search -->
                             
                            
                            <!-- Widget: Popular Posts -->
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Popular in <?php echo esc_html($category_name); ?></h3>
                                <div class="space-y-0">
                                    <?php if ($popular_query->have_posts()) : ?>
                                        <?php while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
                                            <a href="<?php the_permalink(); ?>" class="post-card-small group">
                                                <div class="post-card-small-image">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('thumbnail', array(
                                                            'class' => 'w-full h-full object-cover',
                                                            'alt' => get_the_title()
                                                        )); ?>
                                                    <?php else : ?>
                                                        <div class="w-full h-full bg-wine-100 flex items-center justify-center">
                                                            <span class="text-2xl">🍷</span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4 class="post-card-small-title line-clamp-2"><?php the_title(); ?></h4>
                                                    <span class="text-xs text-gray-400 mt-1 block">
                                                        <?php 
                                                        $reading_time = ceil(str_word_count(get_the_content()) / 200);
                                                        echo $reading_time . ' min read';
                                                        ?>
                                                    </span>
                                                </div>
                                            </a>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php else : ?>
                                        <p class="text-gray-500 text-sm">No popular posts yet.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <!-- Widget: Newsletter -->
                            <div class="sidebar-widget bg-gradient-to-br from-wine-700 to-wine-800 text-white">
                                <div class="text-center">
                                    <span class="text-3xl mb-3 block">✉️</span>
                                    <h3 class="text-lg font-bold mb-2">Wine Newsletter</h3>
                                    <p class="text-wine-200 text-sm mb-4">Get weekly wine tips & exclusive guides</p>
 <div class='w-[100%]'>
 <?php 
$form_html = do_shortcode('[contact-form-7 id="7bebd09" title="Subscribe form"]');
echo $form_html;
?>
</div>                               </div>
                            </div>
                            
                            <!-- Widget: Tags -->
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Popular Tags</h3>
                                <div class="flex flex-wrap gap-2">
                                    <?php if ($popular_tags) : ?>
                                        <?php foreach ($popular_tags as $tag) : ?>
                                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                                               class="px-3 py-1.5 bg-gray-100 text-gray-700 text-sm rounded-full hover:bg-wine-100 hover:text-wine-700 transition-colors">
                                                <?php echo esc_html($tag->name); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p class="text-gray-500 text-sm">No tags yet.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <!-- Widget: Ad Space -->
                            <div class="sidebar-widget bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center min-h-[300px]">
                                <?php
                                if (is_active_sidebar('category-sidebar')) {
                                    dynamic_sidebar('category-sidebar');
                                } else {
                                    ?>
                                    <div class="text-center text-gray-400">
                                        <span class="text-4xl block mb-2">📢</span>
                                        <p class="font-medium">Ad Widget Space</p>
                                        <p class="text-sm">300 x 300</p>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            
                        </div>
                    </aside>
                    
                </div>
            </div>
        </section>

    </main>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-wine-950 text-white">
        <?php get_footer(); ?>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="fixed bottom-8 right-8 w-12 h-12 bg-wine-700 text-white rounded-full shadow-lg hover:bg-wine-800 transition-all opacity-0 invisible z-40" aria-label="Scroll to top">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMobileMenu = document.getElementById('closeMobileMenu');

        mobileMenuBtn?.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        });

        closeMobileMenu?.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
            document.body.style.overflow = '';
        });

        // Search Overlay
        const searchBtn = document.getElementById('searchBtn');
        const searchOverlay = document.getElementById('searchOverlay');
        const closeSearch = document.getElementById('closeSearch');

        searchBtn?.addEventListener('click', () => {
            searchOverlay.classList.remove('hidden');
            searchOverlay.querySelector('input')?.focus();
        });

        closeSearch?.addEventListener('click', () => {
            searchOverlay.classList.add('hidden');
        });

        searchOverlay?.addEventListener('click', (e) => {
            if (e.target === searchOverlay) {
                searchOverlay.classList.add('hidden');
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                searchOverlay?.classList.add('hidden');
                mobileMenu?.classList.add('translate-x-full');
                document.body.style.overflow = '';
            }
        });

        // Scroll to Top
        const scrollTopBtn = document.getElementById('scrollTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.remove('opacity-0', 'invisible');
                scrollTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollTopBtn.classList.add('opacity-0', 'invisible');
                scrollTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        scrollTopBtn?.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Header shadow on scroll
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });

        // Sorting functionality
        const sortSelect = document.getElementById('sort-posts');
        if (sortSelect) {
            sortSelect.addEventListener('change', function() {
                const sortValue = this.value;
                const currentUrl = new URL(window.location.href);
                
                if (sortValue === 'date_desc') {
                    currentUrl.searchParams.delete('orderby');
                } else {
                    currentUrl.searchParams.set('orderby', sortValue);
                }
                
                // Reset to page 1 when sorting
                currentUrl.searchParams.set('paged', '1');
                
                window.location.href = currentUrl.toString();
            });
        }
    </script>

    <?php wp_footer(); ?>
 