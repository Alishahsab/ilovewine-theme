<?php
/**
 * Archive Template
 * Handles category, tag, date, and custom post type archives
 */

get_header();

// Check if this is a category archive
if (is_category()) {
    // Get current category information
    $category = get_queried_object();
    $category_id = $category->term_id;
    $category_name = $category->name;
    $category_description = $category->description ?: 'Explore our comprehensive wine guides, reviews, and recommendations. From varietals to regions, discover everything about the world of wine.';
    $category_count = $category->count;
    
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
    
    // Get featured post
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
        'order' => 'DESC'
    );
    $popular_query = new WP_Query($popular_args);
    
    // Get popular tags
    $popular_tags = get_tags(array(
        'number' => 8,
        'orderby' => 'count',
        'order' => 'DESC'
    ));
    
    // OUTPUT THE CATEGORY TEMPLATE
    ?>
    
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo esc_html($category_name); ?> - Category Archive | <?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php echo esc_attr(wp_trim_words($category_description, 20)); ?>">
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class('font-sans bg-cream-50 text-gray-900 antialiased'); ?>>
        
        <!-- YOUR ENTIRE CATEGORY DESIGN HERE -->
        <!-- Copy everything from the category template I provided earlier -->
        <!-- Starting from the Skip Link to the end of the main content -->
        
    <?php
    // After the category template, we need to close properly
    wp_footer();
    ?>
    </body>
    </html>
    
    <?php
    // Stop execution here for category pages
    exit;
    
} else {
    // This is for other archive types (tags, dates, etc.)
    // Your existing archive.php code for other archives
    ?>
    
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo wp_title('|', false, 'right') . bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class('font-sans bg-cream-50 text-gray-900 antialiased'); ?>>
        
        <!-- Your default archive template for non-category archives -->
        <header>...</header>
        
        <main>
            <h1><?php the_archive_title(); ?></h1>
            <div class="posts">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </main>
        
        <?php get_footer(); ?>
        
    </body>
    </html>
    
    <?php
}