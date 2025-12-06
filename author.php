<?php
/**
 * Author Archive Template
 * Displays posts by a specific author
 */

get_header();

// Get author info
$author_id = get_queried_object_id();
$author_name = get_the_author_meta('display_name', $author_id);
$author_description = get_the_author_meta('description', $author_id);
$author_avatar = get_avatar_url($author_id, array('size' => 200));
$author_position = get_the_author_meta('position', $author_id);
$author_website = get_the_author_meta('user_url', $author_id);
$author_email = get_the_author_meta('user_email', $author_id);
$author_posts_count = count_user_posts($author_id);

// Get author social media
$author_twitter = get_the_author_meta('twitter', $author_id);
$author_facebook = get_the_author_meta('facebook', $author_id);
$author_instagram = get_the_author_meta('instagram', $author_id);
$author_linkedin = get_the_author_meta('linkedin', $author_id);

// Get current page info
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_option('posts_per_page', 12);
?>

<section class="pt-[15px]">
    <!-- ========== AUTHOR HEADER ========== -->
    <header class="bg-gradient-to-b from-white to-cream-50 pb-12">
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
                            <span class="text-gray-700 font-medium">Author: <?php echo esc_html($author_name); ?></span>
                        </li>
                    </ol>
                <?php endif; ?>
            </nav>
            
            <!-- Author Bio Section -->
            <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8 lg:gap-12">
                <!-- Author Avatar -->
                <div class="flex-shrink-0">
                    <div class="relative">
                        <img src="<?php echo esc_url($author_avatar); ?>" 
                             alt="<?php echo esc_attr($author_name); ?>" 
                             class="w-48 h-48 rounded-2xl object-cover ring-4 ring-white shadow-xl">
                        <?php if (user_can($author_id, 'edit_posts')) : ?>
                            <div class="absolute -bottom-2 -right-2 bg-blue-500 text-white p-2 rounded-full">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" title="Verified Author">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Author Info -->
                <div class="flex-1 text-center lg:text-left">
                    <div class="mb-6">
                        <h1 class="font-serif text-4xl sm:text-5xl font-bold text-gray-900 mb-2">
                            <?php echo esc_html($author_name); ?>
                        </h1>
                        
                        <?php if ($author_position) : ?>
                            <p class="text-xl text-wine-700 font-medium mb-4">
                                <?php echo esc_html($author_position); ?>
                            </p>
                        <?php endif; ?>
                        
                        <div class="inline-flex items-center gap-3 bg-wine-50 text-wine-700 px-4 py-2 rounded-full mb-6">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span class="font-medium"><?php echo esc_html($author_posts_count); ?> <?php echo $author_posts_count === 1 ? 'Article' : 'Articles'; ?></span>
                        </div>
                    </div>
                    
                    <?php if ($author_description) : ?>
                        <div class="prose prose-lg max-w-none mb-8">
                            <p class="text-gray-600 leading-relaxed">
                                <?php echo wpautop(esc_html($author_description)); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Author Social Links -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <?php if ($author_website) : ?>
                            <a href="<?php echo esc_url($author_website); ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-wine-700 hover:text-white transition-colors" aria-label="Author Website">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($author_email) : ?>
                            <a href="mailto:<?php echo esc_attr($author_email); ?>" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-blue-600 hover:text-white transition-colors" aria-label="Email Author">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($author_twitter) : ?>
                            <a href="<?php echo esc_url($author_twitter); ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-black hover:text-white transition-colors" aria-label="Twitter">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($author_facebook) : ?>
                            <a href="<?php echo esc_url($author_facebook); ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-blue-600 hover:text-white transition-colors" aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385h-3.047v-3.47h3.047v-2.642c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953h-1.514c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385c5.737-.9 10.125-5.864 10.125-11.854z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($author_instagram) : ?>
                            <a href="<?php echo esc_url($author_instagram); ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-pink-600 hover:text-white transition-colors" aria-label="Instagram">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($author_linkedin) : ?>
                            <a href="<?php echo esc_url($author_linkedin); ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-blue-700 hover:text-white transition-colors" aria-label="LinkedIn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- ========== AUTHOR'S POSTS ========== -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex items-center justify-between mb-10">
            <h2 class="font-serif text-3xl font-bold text-gray-900">
                Latest Articles by <?php echo esc_html($author_name); ?>
            </h2>
            <div class="text-sm text-gray-600">
                <span>Showing <?php echo min(($paged - 1) * $posts_per_page + 1, $author_posts_count); ?>-<?php echo min($paged * $posts_per_page, $author_posts_count); ?> of <?php echo esc_html($author_posts_count); ?> articles</span>
            </div>
        </div>
        
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
                    <span class="text-4xl">✍️</span>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">No Articles Yet</h2>
                <p class="text-gray-600 max-w-md mx-auto mb-8">
                    <?php echo esc_html($author_name); ?> hasn't published any articles yet.
                </p>
            </div>
        <?php endif; ?>
    </div>
    
    <!-- ========== AUTHOR STATS ========== -->
    <?php
    // Get author's categories
    $author_categories = array();
    $author_posts = get_posts(array(
        'author' => $author_id,
        'posts_per_page' => -1,
    ));
    
    foreach ($author_posts as $post) {
        $categories = get_the_category($post->ID);
        foreach ($categories as $category) {
            if (!isset($author_categories[$category->term_id])) {
                $author_categories[$category->term_id] = array(
                    'name' => $category->name,
                    'count' => 0,
                    'link' => get_category_link($category->term_id)
                );
            }
            $author_categories[$category->term_id]['count']++;
        }
    }
    
    usort($author_categories, function($a, $b) {
        return $b['count'] - $a['count'];
    });
    
    $top_categories = array_slice($author_categories, 0, 5);
    ?>
    
    <?php if (!empty($top_categories)) : ?>
    <section class="py-16 bg-cream-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-serif text-3xl font-bold text-gray-900 mb-10 text-center">Top Categories</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <?php foreach ($top_categories as $category) : ?>
                    <a href="<?php echo esc_url($category['link']); ?>" class="group bg-white p-6 rounded-xl border border-gray-200 hover:border-wine-300 hover:shadow-lg transition-all text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-wine-50 text-wine-700 rounded-full mb-4 group-hover:bg-wine-100 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2 group-hover:text-wine-700 transition-colors">
                            <?php echo esc_html($category['name']); ?>
                        </h3>
                        <p class="text-sm text-gray-600">
                            <?php echo esc_html($category['count']); ?> article<?php echo $category['count'] === 1 ? '' : 's'; ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- ========== OTHER AUTHORS ========== -->
    <?php
    $other_authors = get_users(array(
        'role__in' => array('author', 'editor', 'administrator'),
        'exclude' => array($author_id),
        'orderby' => 'post_count',
        'order' => 'DESC',
        'number' => 4
    ));
    ?>
    
    <?php if (!empty($other_authors)) : ?>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-serif text-3xl font-bold text-gray-900 mb-10 text-center">Meet Our Other Writers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($other_authors as $other_author) : 
                    $other_author_posts_count = count_user_posts($other_author->ID);
                    if ($other_author_posts_count > 0) :
                ?>
                    <div class="text-center">
                        <a href="<?php echo esc_url(get_author_posts_url($other_author->ID)); ?>" class="block group">
                            <div class="relative inline-block mb-4">
                                <img src="<?php echo esc_url(get_avatar_url($other_author->ID, array('size' => 120))); ?>" 
                                     alt="<?php echo esc_attr($other_author->display_name); ?>" 
                                     class="w-24 h-24 rounded-full object-cover ring-4 ring-white shadow-lg group-hover:scale-105 transition-transform">
                                <?php if (user_can($other_author->ID, 'edit_posts')) : ?>
                                    <div class="absolute -bottom-1 -right-1 bg-blue-500 text-white p-1.5 rounded-full">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" title="Verified">
                                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <h3 class="font-semibold text-gray-900 mb-1 group-hover:text-wine-700 transition-colors">
                                <?php echo esc_html($other_author->display_name); ?>
                            </h3>
                            <?php if (get_the_author_meta('position', $other_author->ID)) : ?>
                                <p class="text-sm text-wine-600 mb-2">
                                    <?php echo esc_html(get_the_author_meta('position', $other_author->ID)); ?>
                                </p>
                            <?php endif; ?>
                            <p class="text-xs text-gray-500">
                                <?php echo esc_html($other_author_posts_count); ?> articles
                            </p>
                        </a>
                    </div>
                <?php endif; endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</section>

<?php get_footer(); ?>