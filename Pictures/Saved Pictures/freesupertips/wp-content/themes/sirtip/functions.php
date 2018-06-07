<?php
add_action( 'after_setup_theme', 'sirtips_setup' );
function sirtips_setup()
{
load_theme_textdomain( 'sirtips', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'sirtips' ) )
);
}
add_action( 'wp_enqueue_scripts', 'sirtips_load_scripts' );
function sirtips_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'sirtips_enqueue_comment_reply_script' );
function sirtips_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'sirtips_title' );
function sirtips_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'sirtips_filter_wp_title' );
function sirtips_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'sirtips_widgets_init' );
function sirtips_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'sirtips' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function sirtips_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'sirtips_comments_number' );
function sirtips_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
function tutsplus_widgets_init() {
    
        // First footer widget area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Footer 1', 'tutsplus' ),
            'id' => 'first-footer-widget-area',
            'description' => __( 'The first footer widget area', 'tutsplus' ),
            'before_widget' => '',
            'after_widget' => '',
        
        ) );
    
        // Second Footer Widget Area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Footer 2', 'tutsplus' ),
            'id' => 'second-footer-widget-area',
            'description' => __( 'The second footer widget area', 'tutsplus' ),
            'before_widget' => '',
            'after_widget' => '',
        ) );
    
        // Third Footer Widget Area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Footer 3', 'tutsplus' ),
            'id' => 'third-footer-widget-area',
            'description' => __( 'The third footer widget area', 'tutsplus' ),
            'before_widget' => '',
            'after_widget' => '',
        ) );
    
        // // Fourth Footer Widget Area, located in the footer. Empty by default.
        // register_sidebar( array(
        //     'name' => __( 'Footer 4', 'tutsplus' ),
        //     'id' => 'fourth-footer-widget-area',
        //     'description' => __( 'The fourth footer widget area', 'tutsplus' ),
        //     'before_widget' => '<footer id="footer">',
        //     'after_widget' => '</footer>',
        // ) );
            
    }
    
    // Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
    add_action( 'widgets_init', 'tutsplus_widgets_init' );

/* Tips Custom Post Type */
function tips() {
    $args = array(
        'label' => 'Tips',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'tips'),
        'query_var' => true,
        'menu_icon' => 'dashicons-awards',
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'tips', $args );
}
add_action( 'init', 'tips' );

/* Matches Custom Post Type */
function matches() {
    $args = array(
        'label' => 'Matches',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'matches'),
        'query_var' => true,
        'menu_icon' => 'dashicons-shield',
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'matches', $args );
}
add_action( 'init', 'matches' );

/* Previews Custom Post Type */
function previews() {
    $args = array(
        'label' => 'Previews',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'previews'),
        'query_var' => true,
        'menu_icon' => 'dashicons-star-half',
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'previews', $args );
}
add_action( 'init', 'previews' );

/* Blog Custom Post Type */
function blog() {
    $args = array(
        'label' => 'Blog',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'blog'),
        'query_var' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'blog', $args );
}
add_action( 'init', 'blog' );

/* Recenet Winners Custom Post Type */
function recent_winners() {
    $args = array(
        'label' => 'Recent Winners',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'recentwinners'),
        'query_var' => true,
        'menu_icon' => 'dashicons-editor-paste-word',
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'recent_winners', $args );
}
add_action( 'init', 'recent_winners' );






