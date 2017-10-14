<?php
/**************************************************************************************************************************************/
/* Theme Setup                                                                                                                        */
/**************************************************************************************************************************************/
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action( 'after_setup_theme', 'custom_nav_setup' );
function custom_nav_setup() {  
    register_nav_menu( 'Primary', __( 'Start Bootstrap Blog - Wordpress', 'wptuts' ) );
}

function get_stylesheets(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '4.0.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog-home.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
    wp_enqueue_script('popper', get_template_directory_uri() . '/vendor/popper/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '4.0.0', true);   
}
add_action( 'wp_enqueue_scripts', 'get_stylesheets' );

/**************************************************************************************************************************************/
/* Navbar Setup                                                                                                                       */
/**************************************************************************************************************************************/
function nav_li_class($classes,$item){
    $new_classes[] = 'nav-item';
    if ( in_array( 'current-menu-item', $classes ) ) {
		$new_classes[] = 'active';
	}
    return $new_classes;
}
add_filter( 'nav_menu_item_id', '__return_empty_string' );
add_filter('nav_menu_css_class','nav_li_class',10,2);

function nav_a_class($atts,$item){
    $new_atts = array( 'class' => 'nav-link');
    if (isset($atts['href'])){
        $new_atts['href'] = $atts['href'];
    }
    return $new_atts;
}
add_filter( 'nav_menu_link_attributes', 'nav_a_class', 10, 4 );

/**************************************************************************************************************************************/
/* Custom Settings Page Setup                                                                                                         */
/**************************************************************************************************************************************/
function custom_settings_add_menu(){
    add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

function custom_settings_page_setup() {
    add_settings_section( 'section', 'All Settings', null, 'theme-options' );
    add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
    add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );
    add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
    add_settings_field( 'linkedin', 'LinkedIn URL', 'setting_linkedin', 'theme-options', 'section' );
    add_settings_field( 'twitter', 'Twitter URL', 'setting_instagram', 'theme-options', 'section' );

    register_setting('section', 'facebook');
    register_setting('section', 'github');
    register_setting('section', 'instagram');
    register_setting('section', 'linkedin');
    register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

/**************************************************************************************************************************************/
/* Social Media Icon Setup                                                                                                            */
/**************************************************************************************************************************************/

// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>" />
<?php }

// GitHub
function setting_github() { ?>
  <input type="text" name="github" id="github" value="<?php echo get_option( 'github' ); ?>" />
<?php }

// Instagram
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }

// LinkedIn
function setting_linkedin() { ?>
  <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option( 'linkedin' ); ?>" />
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

//Add Social Media Icons
function get_social_media_icons(){
    $facebook = get_option('facebook');
    $github = get_option('github');
    
    echo "<br>\n";
    if(!empty($facebook)){
        ?><a class="social-icon" href="<?php echo get_option( 'facebook' ) ?>"><i class="fa fa-facebook-square fa-fw fa-2x"></i></a>
        <?php
    }
    if(!empty($github)){
        ?><a class="social-icon" href="<?php echo get_option( 'github' ) ?>"><i class="fa fa-github fa-fw fa-2x"></i></a>
        <?php
    }
}

/**************************************************************************************************************************************/
/* Pagination                                                                                                                         */
/**************************************************************************************************************************************/
function get_pagination_links(){
    //If older posts exist
    if (!get_next_posts_link()) :?>
        <li class="page-item disabled"><a class="page-link" href="#">&larr; Older</a></li>
    <?php
    else: ?>
        <li class="page-item"><a class="page-link" href="<?php echo get_next_posts_page_link(); ?>">&larr; Older</a></li>
    <?php
    endif;
    
    //If newer posts don't exist
    if (!get_previous_posts_link()) :?>
        <li class="page-item disabled"><a class="page-link" href="#">Newer &rarr;</a></li>
    <?php
    else:?>
        <li class="page-item"><a class="page-link" href="<?php echo get_previous_posts_page_link(); ?>">Newer &rarr;</a></li>
    <?php
    endif;
}
