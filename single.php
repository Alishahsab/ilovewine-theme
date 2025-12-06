<?php
/**
 * Single Post Template
 * Displays individual blog posts
 */

get_header();

// Get post data
$post_id = get_the_ID();
$author_id = get_post_field('post_author', $post_id);

// Get author info
$author_name = get_the_author_meta('display_name', $author_id);
$author_description = get_the_author_meta('description', $author_id);
$author_avatar = get_avatar_url($author_id, array('size' => 100));
$author_url = get_author_posts_url($author_id);

// Get categories
$categories = get_the_category();
$primary_category = !empty($categories) ? $categories[0] : null;

// Get tags
$tags = get_the_tags();

// Get reading time
$content = get_post_field('post_content', $post_id);
$word_count = str_word_count(strip_tags($content));
$reading_time = ceil($word_count / 200); // Average reading speed

// Get featured image
$featured_image = get_the_post_thumbnail_url($post_id, 'full');

// Get post format
$post_format = get_post_format($post_id) ?: 'standard';

// Get related posts
$related_posts_args = array(
    'category__in' => wp_get_post_categories($post_id),
    'post__not_in' => array($post_id),
    'posts_per_page' => 3,
    'orderby' => 'rand'
);
$related_posts = new WP_Query($related_posts_args);

// Get next and previous posts
$previous_post = get_previous_post();
$next_post = get_next_post();
?>

 
    
 
    
     

    

    <!-- ========== MAIN CONTENT ========== -->
    <section class="pt-[15px]">
        
        <!-- ========== ARTICLE HEADER ========== -->
        <article itemscope itemtype="https://schema.org/Article">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <header class="bg-white  ">
                <div class="!pt-[20px] max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                    <!-- Breadcrumbs -->
                    <nav class="mb-6 !mt-5 pt-[10px]" aria-label="Breadcrumb">
                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<ol class="flex items-center space-x-2 text-sm">', '</ol>');
                        } else {
                            ?>
                            <ol class="flex items-center space-x-2 text-sm">
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-500 hover:text-wine-700 transition-colors">Home</a>
                                </li>
                                <li class="text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </li>
                                <?php if ($primary_category) : ?>
                                    <li>
                                        <a href="<?php echo esc_url(get_category_link($primary_category->term_id)); ?>" class="text-gray-500 hover:text-wine-700 transition-colors">
                                            <?php echo esc_html($primary_category->name); ?>
                                        </a>
                                    </li>
                                    <li class="text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <span class="text-gray-700 font-medium"><?php the_title(); ?></span>
                                </li>
                            </ol>
                            <?php
                        }
                        ?>
                    </nav>
                    
                    <!-- Category & Date -->
                    <div class="flex flex-wrap items-center gap-3 mb-6">
                        <?php if ($primary_category) : ?>
                            <a href="<?php echo esc_url(get_category_link($primary_category->term_id)); ?>" class="px-3 py-1 bg-wine-100 text-wine-700 text-sm font-semibold rounded-full hover:bg-wine-200 transition-colors">
                                <?php echo esc_html($primary_category->name); ?>
                            </a>
                            <span class="text-gray-400">•</span>
                        <?php endif; ?>
                        <time datetime="<?php echo get_the_date('c'); ?>" class="text-gray-500 text-sm" itemprop="datePublished">
                            <?php echo get_the_date('F j, Y'); ?>
                        </time>
                        <span class="text-gray-400">•</span>
                        <span class="text-gray-500 text-sm"><?php echo $reading_time; ?> min read</span>
                    </div>
                    
                    <!-- Title -->
                    <h1 class="font-serif text-4xl sm:text-5xl font-bold text-gray-900 leading-tight mb-6" itemprop="headline">
                        <?php the_title(); ?>
                    </h1>
                    
                    <!-- Excerpt -->
                    <?php if (has_excerpt()) : ?>
                        <p class="text-xl text-gray-600 leading-relaxed mb-8" itemprop="description">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    <?php endif; ?>
                    
                    <!-- Author & Share -->
                    <div class="flex flex-col sm:flex-row mb-5 sm:items-center sm:justify-between gap-6">
                        <!-- Author -->
                        <div class="flex items-center gap-4" itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <a href="<?php echo esc_url($author_url); ?>" class="flex-shrink-0">
                                <img src="<?php echo esc_url($author_avatar); ?>" 
                                     alt="<?php echo esc_attr($author_name); ?>" 
                                     class="w-14 h-14 rounded-full object-cover ring-2 ring-wine-100"
                                     itemprop="image">
                            </a>
                            <div>
                                <div class="flex items-center gap-2">
                                    <a href="<?php echo esc_url($author_url); ?>" class="font-semibold text-gray-900 hover:text-wine-700 transition-colors" itemprop="name">
                                        <?php echo esc_html($author_name); ?>
                                    </a>
                                    <?php if (user_can($author_id, 'edit_posts')) : ?>
                                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20" title="Verified Author">
                                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    <?php endif; ?>
                                </div>
                                <?php if (get_the_author_meta('position', $author_id)) : ?>
                                    <p class="text-sm text-gray-500"><?php echo esc_html(get_the_author_meta('position', $author_id)); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Share Buttons -->
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-gray-500 mr-2">Share:</span>
                            <?php
                            $share_url = urlencode(get_permalink());
                            $share_title = urlencode(get_the_title());
                            ?>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-blue-600 hover:text-white transition-colors" aria-label="Share on Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385h-3.047v-3.47h3.047v-2.642c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953h-1.514c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385c5.737-.9 10.125-5.864 10.125-11.854z"/>
                                </svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-black hover:text-white transition-colors" aria-label="Share on X">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                            <a href="https://pinterest.com/pin/create/button/?url=<?php echo $share_url; ?>&media=<?php echo urlencode($featured_image); ?>&description=<?php echo $share_title; ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-red-600 hover:text-white transition-colors" aria-label="Share on Pinterest">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-wine-700 hover:text-white transition-colors" aria-label="Copy link" onclick="copyLink()">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Featured Image -->
            <?php if ($featured_image) : ?>
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-4 mb-12">
                    <figure class="relative">
                        <img src="<?php echo esc_url($featured_image); ?>" 
                             alt="<?php echo esc_attr(get_the_title()); ?>" 
                             class="w-full aspect-[16/9] object-cover rounded-2xl shadow-xl"
                             itemprop="image">
                        <?php if (get_the_post_thumbnail_caption()) : ?>
                            <figcaption class="text-center text-sm text-gray-500 mt-4">
                                <?php echo esc_html(get_the_post_thumbnail_caption()); ?>
                            </figcaption>
                        <?php endif; ?>
                    </figure>
                </div>
            <?php endif; ?>
            
            <!-- ========== ARTICLE BODY with SIDEBAR ========== -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
                <div class="flex flex-col lg:flex-row gap-12">
                    
                    <!-- Main Content -->
                    <div class="flex-1 max-w-3xl">
                        
                        <!-- Table of Contents (Optional) -->
                        <?php if (has_category()) : ?>
                            <div class="bg-cream-100 rounded-2xl p-6 mb-10">
                                <h2 class="font-serif text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-wine-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                    </svg>
                                    Table of Contents
                                </h2>
                                <nav>
                                    <ol class="space-y-2 text-gray-600">
                                        <?php
                                        // This is a simple TOC - you might want to implement a more advanced one
                                        $headings = array();
                                        preg_match_all('/<h[2-3].*?>(.*?)<\/h[2-3]>/i', get_the_content(), $headings);
                                        
                                        if (!empty($headings[1])) {
                                            $counter = 1;
                                            foreach ($headings[1] as $heading) {
                                                $heading_slug = sanitize_title($heading);
                                                ?>
                                                <li>
                                                    <a href="#<?php echo esc_attr($heading_slug); ?>" class="toc-link hover:text-wine-700">
                                                        <?php echo $counter . '. ' . esc_html($heading); ?>
                                                    </a>
                                                </li>
                                                <?php
                                                $counter++;
                                            }
                                        } else {
                                            echo '<li class="text-gray-500">No headings found in this article.</li>';
                                        }
                                        ?>
                                    </ol>
                                </nav>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Article Content -->
                        <div class="article-content" itemprop="articleBody">
                            <?php the_content(); ?>
                            
                            <?php
                            // Pagination for multi-page posts
                            wp_link_pages(array(
                                'before' => '<div class="post-pagination mt-8 pt-8 border-t border-gray-200"><nav class="flex items-center gap-2"><span class="text-sm text-gray-600">Pages:</span>',
                                'after' => '</nav></div>',
                                'link_before' => '<span class="px-3 py-1 bg-gray-100 text-gray-700 rounded hover:bg-wine-100 hover:text-wine-700 transition-colors">',
                                'link_after' => '</span>',
                                'separator' => '',
                            ));
                            ?>
                        </div>
                        
                        <!-- Tags -->
                        <?php if ($tags) : ?>
                            <div class="mt-10 pt-8 border-t border-gray-200">
                                <h3 class="text-sm font-semibold text-gray-700 mb-4">Tags:</h3>
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="px-3 py-1.5 bg-gray-100 text-gray-700 text-sm rounded-full hover:bg-wine-100 hover:text-wine-700 transition-colors">
                                            <?php echo esc_html($tag->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!-- ========== AUTHOR BIO ========== -->
                        <div class="mt-10 p-8 bg-gradient-to-br from-wine-50 to-cream-100 rounded-2xl border border-wine-100">
                            <div class="flex flex-col sm:flex-row gap-6">
                                <a href="<?php echo esc_url($author_url); ?>" class="flex-shrink-0">
                                    <img src="<?php echo esc_url($author_avatar); ?>" 
                                         alt="<?php echo esc_attr($author_name); ?>" 
                                         class="w-24 h-24 rounded-2xl object-cover ring-4 ring-white shadow-lg">
                                </a>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="text-wine-600 text-sm font-medium uppercase tracking-wider">Written by</span>
                                    </div>
                                    <h3 class="font-serif text-2xl font-bold text-gray-900 mb-1">
                                        <a href="<?php echo esc_url($author_url); ?>" class="hover:text-wine-700 transition-colors">
                                            <?php echo esc_html($author_name); ?>
                                        </a>
                                    </h3>
                                    <?php if (get_the_author_meta('position', $author_id)) : ?>
                                        <p class="text-wine-700 font-medium text-sm mb-3 flex items-center gap-2">
                                            <?php echo esc_html(get_the_author_meta('position', $author_id)); ?>
                                            <?php if (user_can($author_id, 'edit_posts')) : ?>
                                                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20" title="Verified">
                                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                                </svg>
                                            <?php endif; ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if ($author_description) : ?>
                                        <p class="text-gray-600 leading-relaxed mb-4">
                                            <?php echo esc_html($author_description); ?>
                                        </p>
                                    <?php endif; ?>
                                    <div class="flex items-center gap-3">
                                        <a href="<?php echo esc_url($author_url); ?>" class="px-4 py-2 bg-wine-700 text-white text-sm font-medium rounded-full hover:bg-wine-800 transition-colors">
                                            View All Posts
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Post Navigation -->
                        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <?php if ($previous_post) : ?>
                                <a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>" class="group p-6 bg-white rounded-xl border border-gray-200 hover:border-wine-300 hover:shadow-lg transition-all">
                                    <span class="text-sm text-gray-500 flex items-center gap-1 mb-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                        Previous Article
                                    </span>
                                    <h4 class="font-serif text-lg font-bold text-gray-900 group-hover:text-wine-700 transition-colors line-clamp-2">
                                        <?php echo esc_html($previous_post->post_title); ?>
                                    </h4>
                                </a>
                            <?php else : ?>
                                <div class="p-6 bg-gray-50 rounded-xl border border-gray-200 text-center text-gray-500">
                                    No older articles
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($next_post) : ?>
                                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="group p-6 bg-white rounded-xl border border-gray-200 hover:border-wine-300 hover:shadow-lg transition-all text-right">
                                    <span class="text-sm text-gray-500 flex items-center justify-end gap-1 mb-2">
                                        Next Article
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                    <h4 class="font-serif text-lg font-bold text-gray-900 group-hover:text-wine-700 transition-colors line-clamp-2">
                                        <?php echo esc_html($next_post->post_title); ?>
                                    </h4>
                                </a>
                            <?php else : ?>
                                <div class="p-6 bg-gray-50 rounded-xl border border-gray-200 text-center text-gray-500">
                                    No newer articles
                                </div>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                    
                    <!-- Sidebar -->
                    <aside class="w-full lg:w-80 flex-shrink-0">
                        <div class="lg:sticky lg:top-28 space-y-8">
                            
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
</div>
                                </div>
                            </div>
                            
                            <!-- Widget: Related Posts -->
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Related Articles</h3>
                                <div class="space-y-0">
                                    <?php if ($related_posts->have_posts()) : ?>
                                        <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
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
                                                        $post_content = get_post_field('post_content');
                                                        $post_word_count = str_word_count(strip_tags($post_content));
                                                        echo ceil($post_word_count / 200) . ' min read';
                                                        ?>
                                                    </span>
                                                </div>
                                            </a>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php else : ?>
                                        <p class="text-gray-500 text-sm">No related articles found.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <!-- Widget: Ad Space -->
                            <div class="sidebar-widget bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center min-h-[300px]">
                                <?php
                                if (is_active_sidebar('single-sidebar')) {
                                    dynamic_sidebar('single-sidebar');
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
            
            <?php endwhile; endif; ?>
        </article>
        
        <!-- ========== RELATED POSTS ========== -->
        <section class="py-16 bg-white border-t border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="font-serif text-3xl font-bold text-gray-900 mb-10 text-center">You May Also Like</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php
                    // Get more related posts
                    $more_related_args = array(
                        'category__in' => wp_get_post_categories($post_id),
                        'post__not_in' => array($post_id),
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $more_related_posts = new WP_Query($more_related_args);
                    
                    if ($more_related_posts->have_posts()) :
                        while ($more_related_posts->have_posts()) : $more_related_posts->the_post();
                            $post_categories = get_the_category();
                            $first_category = !empty($post_categories) ? $post_categories[0] : null;
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
                                        <div class="flex items-center justify-between text-sm text-gray-500 mt-4">
                                            <span>by <?php the_author(); ?></span>
                                            <span>
                                                <?php 
                                                $post_content = get_post_field('post_content');
                                                $post_word_count = str_word_count(strip_tags($post_content));
                                                echo ceil($post_word_count / 200) . ' min read';
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="col-span-3 text-center py-12">
                            <p class="text-gray-600 text-lg">No related posts found.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

                    </section>

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
    

    <?php wp_footer(); ?>
