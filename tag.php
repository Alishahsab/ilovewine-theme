<?php
/**
 * Tag Archive Template
 * Displays posts for a specific tag
 */

get_header();

// Get current tag info
$tag_id = get_queried_object_id();
$tag = get_tag($tag_id);
$tag_name = $tag->name;
$tag_description = $tag->description;
$tag_count = $tag->count;

// Get current page info
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_option('posts_per_page', 12);
?>

<section class="pt-[15px]">
    <!-- ========== TAG HEADER ========== -->
    <header class="bg-white pb-8 md:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <nav class="mb-6 !mt-5 pt-[10px]" aria-label="Breadcrumb">
                <?php if (function_exists('yoast_breadcrumb')) : ?>
                    <?php yoast_breadcrumb('<ol class="flex items-center space-x-2 text-sm">', '</ol>'); ?>
                <?php else : ?>
                    <ol class="flex items-center space-x-2 text-sm">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-500 hover:text-wine-700 transition-colors">Home</a>
                        </li>
                        <li class="text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="text-gray-500 hover:text-wine-700 transition-colors">Blog</a>
                        </li>
                        <li class="text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </li>
                        <li>
                            <span class="text-gray-700 font-medium">Tag: <?php echo esc_html($tag_name); ?></span>
                        </li>
                    </ol>
                <?php endif; ?>
            </nav>
            
            <!-- Tag Info -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="text-4xl">🏷️</span>
                    <h1 class="font-serif text-4xl sm:text-5xl font-bold text-gray-900">
                        <?php echo esc_html($tag_name); ?>
                    </h1>
                </div>
                
                <?php if ($tag_description) : ?>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-6">
                        <?php echo esc_html($tag_description); ?>
                    </p>
                <?php endif; ?>
                
                <div class="inline-flex items-center gap-3 bg-wine-50 text-wine-700 px-4 py-2 rounded-full">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="font-medium"><?php echo esc_html($tag_count); ?> <?php echo $tag_count === 1 ? 'Article' : 'Articles'; ?></span>
                </div>
            </div>
            
            <!-- Sort/Filter Options -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mt-8 pt-8 border-t border-gray-200">
                <div class="flex items-center gap-2 text-sm text-gray-600">
                    <span>Showing <?php echo min(($paged - 1) * $posts_per_page + 1, $tag_count); ?>-<?php echo min($paged * $posts_per_page, $tag_count); ?> of <?php echo esc_html($tag_count); ?> articles</span>
                </div>
                <div class="flex items-center gap-4">
                    <label for="sort" class="text-sm text-gray-600">Sort by:</label>
                    <select id="sort" class="text-sm border border-gray-300 rounded-lg px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-wine-500 focus:border-transparent">
                        <option value="date_desc">Newest First</option>
                        <option value="date_asc">Oldest First</option>
                        <option value="title_asc">Title A-Z</option>
                        <option value="title_desc">Title Z-A</option>
                    </select>
                </div>
            </div>
        </div>
    </header>
    
    <!-- ========== POSTS GRID ========== -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <?php if (have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $post_categories = get_the_category();
                    $first_category = !empty($post_categories) ? $post_categories[0] : null;
                    $post_content = get_post_field('post_content');
                    $post_word_count = str_word_count(strip_tags($post_content));
                    $reading_time = ceil($post_word_count / 200);
                    ?>
                    
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
                                    <div class="w-full h-full bg-wine-100 flex items-center justify-center">
                                        <span class="text-6xl">🍷</span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($first_category) : ?>
                                    <div class="absolute top-4 left-4">
                                        <span class="category-badge category-badge-wine">
                                            <?php echo esc_html($first_category->name); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="post-card-content">
                                <h3 class="post-card-title line-clamp-2">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="post-card-excerpt line-clamp-3">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <div class="flex items-center justify-between text-sm text-gray-500 mt-4">
                                    <span class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <?php echo $reading_time; ?> min read
                                    </span>
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date('M j, Y'); ?>
                                    </time>
                                </div>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="mt-16 pt-8 border-t border-gray-200">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Previous', 'textdomain'),
                    'next_text' => __('Next &raquo;', 'textdomain'),
                    'screen_reader_text' => __('Posts navigation', 'textdomain'),
                    'aria_label' => __('Posts', 'textdomain'),
                    'class' => 'flex justify-center items-center space-x-2',
                    'before_page_number' => '<span class="px-3 py-1 bg-gray-100 text-gray-700 rounded hover:bg-wine-100 hover:text-wine-700 transition-colors">',
                    'after_page_number' => '</span>',
                ));
                ?>
            </div>
            
        <?php else : ?>
            <!-- No Posts Found -->
            <div class="text-center py-16">
                <div class="inline-flex items-center justify-center w-24 h-24 bg-wine-50 rounded-full mb-6">
                    <span class="text-4xl">📝</span>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">No Articles Found</h2>
                <p class="text-gray-600 max-w-md mx-auto mb-8">
                    No articles have been tagged with "<?php echo esc_html($tag_name); ?>" yet.
                </p>
                <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="inline-flex items-center gap-2 px-6 py-3 bg-wine-700 text-white font-medium rounded-lg hover:bg-wine-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Browse All Articles
                </a>
            </div>
        <?php endif; ?>
    </div>
    
    <!-- ========== OTHER TAGS ========== -->
    <?php
    $other_tags = get_tags(array(
        'orderby' => 'count',
        'order' => 'DESC',
        'number' => 10,
        'exclude' => array($tag_id)
    ));
    
    if ($other_tags) : ?>
    <section class="py-16 bg-wine-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-serif text-3xl font-bold text-gray-900 mb-8 text-center">Explore Other Tags</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <?php foreach ($other_tags as $other_tag) : ?>
                    <a href="<?php echo esc_url(get_tag_link($other_tag->term_id)); ?>" class="group px-4 py-2 bg-white text-gray-700 font-medium rounded-full hover:bg-wine-700 hover:text-white transition-all hover:scale-105 shadow-sm hover:shadow-md">
                        <span class="flex items-center gap-2">
                            <?php echo esc_html($other_tag->name); ?>
                            <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5 rounded-full group-hover:bg-white/20 group-hover:text-white/80">
                                <?php echo esc_html($other_tag->count); ?>
                            </span>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- ========== FEATURED POSTS ========== -->
    <?php
    $featured_args = array(
        'posts_per_page' => 3,
        'meta_key' => '_is_featured',
        'meta_value' => '1',
        'post__not_in' => wp_list_pluck($wp_query->posts, 'ID')
    );
    $featured_posts = new WP_Query($featured_args);
    
    if ($featured_posts->have_posts()) : ?>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-serif text-3xl font-bold text-gray-900 mb-10 text-center">Featured Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'card'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</section>

<?php get_footer(); ?>