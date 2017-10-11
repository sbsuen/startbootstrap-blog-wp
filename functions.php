<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function get_stylesheets(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '4.0.0');
    wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog-home.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
    wp_enqueue_script('popper', get_template_directory_uri() . '/vendor/popper/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.js', array('jquery'), '4.0.0');   
}
add_action( 'wp_enqueue_scripts', 'get_stylesheets' );

//Custom function used to dynamically populate the navbar
function get_navbar(){
    $pages = wp_list_pluck(get_pages(), 'post_title');
    
    foreach ($pages as $page){
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="';
        echo get_bloginfo('wpurl');
        echo "/",$page,'">',$page;
        echo '</a></li>';
    }
}

<<<<<<< HEAD

/* Custom Settings Page Setup */
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

  register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

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
<?php }<?php }
=======
function bootstrap_pagination( $echo = true ) {
	global $wp_query;

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type'  => 'array',
			'prev_next'   => true,
			'prev_text'    => __('« Prev'),
			'next_text'    => __('Next »'),
		)
	);

	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

		$pagination = '<ul class="pagination">';

		foreach ( $pages as $page ) {
			$pagination .= "<li>$page</li>";
		}

		$pagination .= '</ul>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
}
>>>>>>> b30e647d981fba8689f4dd3671467e35cc1372de
