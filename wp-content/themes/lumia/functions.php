<?php

function lumia_setup() {

	include( get_template_directory() . '/inc/customizer.php' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background' , array(
		'default-image'			 => '',
		'default-size'			 => '',
		'default-image'          => '',
	    'default-preset'         => 'default', 
	    'default-position-x'     => 'left',    
	    'default-position-y'     => 'top',     
	    'default-size'           => 'auto',    
	    'default-repeat'         => 'repeat',  
	    'default-attachment'     => 'scroll', 
	    'default-color'          => '', 
	) );
	add_theme_support( 'custom-header' , array(
		'default-image'          => '',
	    'random-default'         => false,
	    'width'                  => 1500,
	    'height'                 => 150,
	    'flex-height'            => false,
	    'flex-width'             => false,
	    'default-text-color'     => '',
	    'header-text'            => true,
	    'uploads'                => true,
	    'video'					 => true,
	    'audio'					 => true,

	));

	add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
	) );

	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'audio', 'video' ));

}

add_action( 'after_setup_theme', 'lumia_setup' );


function lumia_scripts() {
	//style
	wp_enqueue_style( 'lumia-bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.css', array() );

	wp_enqueue_style( 'lumia-bootstrap-responsive', get_template_directory_uri() .'/assets/css/bootstrap-responsive.css', array() );

	wp_enqueue_style( 'lumia-prettyPhoto', get_template_directory_uri() .'/assets/css/prettyPhoto.css', array() );

	wp_enqueue_style( 'lumia-prettify', get_template_directory_uri() .'/assets/js/google-code-prettify/prettify.css', array() );
	wp_enqueue_style( 'lumia-flexslider', get_template_directory_uri() .'/assets/css/flexslider.css', array() );
	wp_enqueue_style( 'lumia-custom', get_template_directory_uri() .'/assets/css/custom.css', array() );
	wp_enqueue_style( 'lumia-style', get_stylesheet_uri() );

	wp_enqueue_style( 'lumia-default', get_template_directory_uri() .'/assets/color/default.css', array() );
	wp_enqueue_style( 'lumia-fonts', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700', array() );

	//scripts
	

	wp_enqueue_script( 'lumia-raphael-min-js', get_template_directory_uri() .'/assets/js/raphael-min.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-jquery.easing.1.3-js', get_template_directory_uri() .'/assets/js/jquery.easing.1.3.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-bootstrap-js', get_template_directory_uri() .'/assets/js/bootstrap.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-prettify-js', get_template_directory_uri() .'/assets/js/google-code-prettify/prettify.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-elastislide-js', get_template_directory_uri() .'/assets/js/jquery.elastislide.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-prettyPhoto-js', get_template_directory_uri() .'/assets/js/jquery.prettyPhoto.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-flexslider-js', get_template_directory_uri() .'/assets/js/jquery.flexslider.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-hover-effect', get_template_directory_uri() .'/assets/js/jquery-hover-effect.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-animate-js', get_template_directory_uri() .'/assets/js/animate.js', array( 'jquery' ) );

	wp_enqueue_script( 'lumia-custom-js', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery' ) );

}

add_action( 'wp_enqueue_scripts', 'lumia_scripts' );

//menu
function register_my_menu() {
  register_nav_menu( 'header-menu', __( 'Header Menu') );
}

add_action( 'after_setup_theme', 'register_my_menu' );


//sidebar
function sidebar_regster() {

	$args = array(
		'name'          => sprintf( __( 'Sidebar' ) ),
		'id'            => "sidebar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	);	
	register_sidebar( $args );

	register_sidebar( array(
		'name' 		    => 'First Footer Sidebar',
		'id'   		    => 'first-footer-sidebar',
		'description'   => 'This is Footer sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		));
	register_sidebar( array(
		'name' 		    => 'Second Footer Sidebar',
		'id'   		    => 'second-footer-sidebar',
		'description'   => 'This is Footer sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		));
	register_sidebar( array(
		'name' 		    => 'Third Footer Sidebar',
		'id'   		    => 'third-footer-sidebar',
		'description'   => 'This is Footer sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		));

	register_sidebar( array(
		'name' 		    => 'Service Sidebar',
		'id'   		    => 'service-sidebar',
		'description'   => 'This is service sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		));

	register_sidebar( array(
		'name' 		    => 'Recent Work Sidebar',
		'id'   		    => 'recent-work-sidebar',
		'description'   => 'This is recent work sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		));
}

add_action( 'widgets_init', 'sidebar_regster' );


//call to action widget
class custom_call_to_action_widget extends WP_Widget {
	function __construct()
	{
		$widget_ops = array(
			'classname'					  => 'custom_calltoaction_widget',
			'description'     			  =>  __('This is custom call to acion widget','demo'),
			'customize_selective_refresh' =>  true,

		);

		$control_ops = array(
			'width' => 100,
			'height' => 400,

		);
		parent::__construct( false, $name=__( 'Custom Call to Action Widget','demo' ), $widget_ops, $control_ops );
	}

	function form( $instance )	{
		$defaults[ 'text_main' ]		='';
		$defaults[ 'text_additional' ]	='';
		$defaults[ 'button_text' ]		='';
		$defaults[ 'button_url' ]		='';
		$instance 						= wp_parse_args( (array) $instance, $defaults );
		$text_main						= esc_textarea( $instance[ 'text_main' ] );
		$text_additional				= esc_textarea( $instance[ 'text_additional' ] );
		$button_text					= esc_attr( $instance[ 'button_text' ] );
		$button_url						= esc_url( $instance[ 'button_url' ] );
		?>

		<?php _e( ' main Text', 'demo' ); ?>
		<textarea class="widefat" rows="3" cols="10" id="<?php echo $this->get_field_id( 'text_main' ); ?>" name="<?php echo $this->get_field_name( 'text_main' ); ?>" ><?php echo $text_main; ?> </textarea>

		<?php _e( 'Additional Text', 'demo' ); ?>
		<textarea class="widefat" rows="3" cols="10" id="<?php echo $this->get_field_id( 'text_additional' ); ?>" name="<?php echo $this->get_field_name( 'text_additional' ); ?>" ><?php echo $text_additional; ?> 
		</textarea> 

		<p>
			<label for="<?php echo $this->get_field_id( 'button_text' ); ?>"><?php _e( 'Button Text:', 'demo'); ?></label>
			<input id="<?php echo $this->get_field_id( 'button_text' ); ?>" name="<?php echo $this->get_field_name( 'button_text' );?>" type="text" value="<?php echo $button_text; ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'button_url' );?>"><?php _e( 'Button Redirect Url:', 'demo'); ?></label>
			<input id="<?php echo $this->get_field_id( 'button_url' );?>" name="<?php echo $this->get_field_name( 'button_url' ); ?>" type="text" value="<?php echo $button_url; ?>"/>
		</p>		

	<?php
	}

	function update( $new_instance, $old_instance ) {
		$old_instance =	$old_instance;
		$instance[ 'text_main' ] 		= strip_tags( $new_instance[ 'text_main' ] );
		$instance[ 'text_additional' ]  = strip_tags( $new_instance[ 'text_additional' ] );
		$instance[ 'button_text' ]      = strip_tags( $new_instance[ 'button_text' ] );
		$instance[ 'button_url' ]       = esc_url( $new_instance[ 'button_url' ] );
		return $instance;
	}

	function widget( $args, $instance )	{
		extract( $args );
		extract( $instance);
		$text_main 		 = !empty( $instance[ 'text_main' ] ) ? $instance[ 'text_main' ] : '';
		$text_additional = !empty( $instance[ 'text_additional' ] ) ? $instance[ 'text_additional' ] : '';
		$button_text 	 = isset( $instance[ 'button_text' ] ) ? $instance[ 'button_text' ] : '';
		$button_url      = isset( $instance[ 'button_url' ] ) ? $instance[ 'button_url' ] : '';
		?>
		 <div class="call-action">
		 	<div class="text">
				<?php
				if( !empty( 'text_main' )) {
				?>
					<h2><?php echo esc_html( $text_main )?></h2>

				<?php		
				}

				if( !empty( 'text_additional' )) {
				?>
					<p><?php echo esc_html( $text_additional )?></p>

				<?php		
				}
				?>
			</div>
			<div class="cta">

				<?php
				if( !empty( 'button_text' )) {
				?>
				  <a class="btn btn-large btn-theme" href="<?php echo  $button_url; ?>" title="<?php echo $button_text;?>"> <i class="icon-plane icon-white"></i> <?php echo esc_html( $button_text );?> </a>
				<?php 
				} ?>
			</div>
		</div>
			
  <?php
	}
}

function load_add_to_action_widget() {

	register_widget( 'custom_call_to_action_widget' );
}
add_action( 'widgets_init', 'load_add_to_action_widget' );


//Service Widget
class my_service_widget extends WP_Widget {
	function __construct() {
		$widdget_ops = array (
			'classname'   => 'service_widget',
			'description' => __( 'Display service pages', 'lumia' ),
			
		);
		$control_ops = array(
			'width'	 => 200,
			'height' => 200
			);
		parent::__construct( false, $name = __( 'Custom Service Widget' ), $widget_ops, $control_ops );

	}

	function form( $instance ) {
		for( $i = 0; $i < 5; $i++ ) {
			$var			  		= 'page_id' .$i;
			$defaults[ $var ] 		= '';
			
				
		}
		$instance = wp_parse_args( ( array ) $instance, $defaults  );

		//var_dump($defaults);
		for( $i = 0; $i < 5; $i++ ) {

		?>
			<p>
				<label for="<?php $this->get_field_id( key( $defaults ) );?>"><?php _e( 'Page', 'lumia' );?>
					<?php wp_dropdown_pages( array( 'show_option_none' => ' ', 'name' =>$this->get_field_name( key( $defaults ) ), 'selected' => $instance[ key( $defaults ) ] ) );?>
		   </p>
		   
		<?php next( $defaults );
		
		}

		
		$icons = isset ( $instance['icons'] ) ? $instance['icons'] : array();
        $icon_num = count( $icons );
        $icons[ $icon_num + 1 ] = '';
        $icons_html = array();
        $icons_counter = 0;

        foreach ( $icons as $name => $value )
        {
            $icons_html[] = sprintf(
                '<input type="text" name="%1$s[%2$s]" value="%3$s" >',
                $this->get_field_name( 'icons' ),
                $icons_counter,
                esc_attr( $value )
            );
            $icons_counter += 1;
        }

        print 'Icons<br />' . join( '<br />', $icons_html );
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		for	( $i = 0; $i < 5; $i++) {
			$var			  		= 'page_id' .$i ;
			$instance[ $var ] 		= absint( $new_instance[ $var] );
			// $iconvar          		= 'icon_id' .$i;
			// $instance[ $iconvar ] 	= strip_tags( $new_instance[ $iconvar ] );

			}

		$instance['icons'] = array();

        if ( isset ( $new_instance['icons'] ) )
        {
            foreach ( $new_instance['icons'] as $value )
            {
                if ( '' !== trim( $value ) )
                    $instance['icons'][] = $value;
            }
        }

		return $instance;
	}
	

	function widget( $args, $instance ) {
		extract( $args );
		extract( $instance );
		global $post;
		$page_array = array();
		for	( $i =0; $i < 5; $i++) {
			$var			  = 'page_id' .$i ;
			$page_id		  = isset( $instance[ $var ] )? $instance[ $var ] : '';
			

			if ( !empty( $page_id ) ) {
				array_push( $page_array, $page_id 	);
				
			}


		}

		$get_pages = new WP_Query( array(
			'posts_per_page' => -1,
			'post_type'		 => array( 'page' ),
			'post__in'		 => $page_array,
			'orderby'		 => 'post__in',
		) );

		
		while( $get_pages->have_posts() ): $get_pages->the_post();
			$page_title	= get_the_title();
			?>
			<div class="span3 features e_pulse" >
				<?php if ( has_post_thumbnail( ) ) { 
					 the_post_thumbnail();
				  } ?>
				
				<div class="box">
	              <div class="divcenter">
	                <a href="<?php the_permalink();?>"><i class="icon-circled icon-48 icon-<?php echo $icon ;?>icon"></i></a>
	                <?php echo $before_title;?>
	                <h4><?php echo $page_title; ?></h4>
	              </div>
            	</div>
				
				<?php echo $after_title; ?>	
			</div>
			<?php  
		endwhile;
		wp_reset_query();
		echo $after_widget;
	 
	}
}

function load_service_widget() {
	register_widget( 'my_service_widget' );

}
add_action( 'widgets_init', 'load_service_widget' );


//recent work widget
class custom_text_widget extends WP_Widget {
	function __construct() {
		$widget_options= array(
			'classname'					  => 'widget_custom_text',
			'description'				  => __( 'Description - It displays custom text', 'lumia' ),
			'customize_selective_refresh' => true,
		);

		$control_options= array(
			'width'	=> 100,
			'height' => 300,
		);

		parent::__construct( false, $name = __( 'My Recent Work Widget', 'lumia' ), $widget_options, $control_options );
	}

	function form( $instance ) {
		$default[ 'title' ]		  = '';
		$default[ 'description' ] = '';
		$instance 				  = wp_parse_args( (array) $instance, $default );
		$title 					  = sanitize_text_field( $instance[ 'title' ] );
		$description 			  = wp_filter_post_kses( $instance[ 'description' ] ) ;
		$button_text			  = esc_attr( $instance[ 'button_text' ] );
		$button_url				  = esc_url( $instance[ 'button_url' ] );
		?>
		<p>
	 	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'lumia' ); ?></label> 
		<input id="<?php echo $this->get_field_id( 'title' );?>" name="<?php echo $this->get_field_name( 'title' );?>" type="text" value="<?php echo $title; ?>"/>
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:', 'lumia' ); ?></label> 
		<textarea class="widefat" rows="4" cols="10" id="<?php echo $this->get_field_id( 'description' ); ?>" 
			name="<?php echo $this->get_field_name( 'description' ); ?>"> <?php echo $description;?>		
		</textarea> 
		</p> 

		<p>
			<label for="<?php echo $this->get_field_id( 'button_text' ); ?>"><?php _e( 'Button Text:', 'lumia'); ?></label>
			<input id="<?php echo $this->get_field_id( 'button_text' ); ?>" name="<?php echo $this->get_field_name( 'button_text' );?>" type="text" value="<?php echo $button_text; ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'button_url' );?>"><?php _e( 'Button Redirect Url:', 'lumia'); ?></label>
			<input id="<?php echo $this->get_field_id( 'button_url' );?>" name="<?php echo $this->get_field_name( 'button_url' ); ?>" type="text" value="<?php echo $button_url; ?>"/>
		</p>
	<?php 	
	}

	function update( $new_instance,$old_instance ) {
		$instance 				   = $old_instance;
		$instance[ 'title' ] 	   = strip_tags( $new_instance[ 'title' ] );
		$instance[ 'description' ] = ( $new_instance[ 'description' ] );
		$instance[ 'button_text' ] = strip_tags( $new_instance[ 'button_text' ] );
		$instance[ 'button_url' ]  = esc_url( $new_instance[ 'button_url' ] );
		return $instance;		
	}

	function widget( $args, $instance ) {
		extract( $args );
		extract( $args );
		$title 		 =isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
		$title 		 =apply_filters( 'widget_title', $title );
		$description =isset( $instance[ 'description' ] ) ? $instance[ 'description' ] : '';
		$button_text = isset( $instance[ 'button_text' ] ) ? $instance[ 'button_text' ] : '';
		$button_url  = isset( $instance[ 'button_url' ] ) ? $instance[ 'button_url' ] : '';
	?>
		<h4 class="rheading">
			<?php echo esc_html( $title );?>
		<span></span>
		</h4>
		<div class="row">
            <div class="span3">
				<p class="hidden-phone">
					<?php echo esc_html( $description );?>
				</p>
				<a href="<?php echo esc_url( $button_url );?>" class="btn btn-theme"><?php echo esc_html( $button_text );?></a>
			</div>

		
	<?php
	}
}

function load_custom_widget() {
	register_widget( 'custom_text_widget' );
}
add_action( 'widgets_init', 'load_custom_widget' );


//menu walker
class custom_nav_walker extends Walker_Nav_Menu {

     function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output )
    {
        if (!$element)
            return;
        $id_field = $this->db_fields['id'];

        //display this element
        if (is_array($args[0]))
            $args[0]['has_children'] = !empty($children_elements[$element->$id_field]);
        else if (is_object($args[0]))
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        $cb_args = array_merge(array(&$output, $element, $depth), $args);
        call_user_func_array(array(&$this, 'start_el'), $cb_args);

        $id = $element->$id_field;

        // descend only when the depth is right and there are childrens for this element
        if (($max_depth == 0 || $max_depth > $depth + 1) && isset($children_elements[$id])) {

            foreach ($children_elements[$id] as $child) {

                if (!isset($newlevel)) {
                    $newlevel = true;
                    //start the child delimiter
                    $cb_args = array_merge(array(&$output, $depth), $args);
                    call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
                }
                $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
            }
            unset($children_elements[$id]);
        }

        if (isset($newlevel) && $newlevel) {
            //end the child delimiter
            $cb_args = array_merge(array(&$output, $depth), $args);
            call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
        }

        //end this element
        $cb_args = array_merge(array(&$output, $element, $depth), $args);
        call_user_func_array(array(&$this, 'end_el'), $cb_args);
    }// display_element


    
     function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) 
    {
        if ((is_object($item) && $item->title == null) || (!is_object($item))) {
            return ;
        }

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        //Add class and attribute to LI element that contains a submenu UL.
        if (is_object($args) && $args->has_children) {
            $classes[] = 'dropdown';
            $li_attributes .= ' class="dropdown"';
        }
        $classes[] = 'menu-item-' . $item->ID;
        //If we are on the current page, add the active class to that menu item.
        $classes[] = ($item->current) ? 'active' : '';

        //Make sure you still add all of the WordPress classes.
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        //Add attributes to link element.
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .=!empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .=!empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .=!empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        // $attributes .= (is_object($args) && $args->has_children) ? ' class="dropdown" data-toggle="dropdown"' : '';

        $item_output = (is_object($args)) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= (is_object($args) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (is_object($args) ? $args->link_after : '');
        $item_output .= (is_object($args) && $args->has_children) ? ' <span class="caret"></span> ' : '';
        $item_output .= '</a>';
        $item_output .= (is_object($args) ? $args->after : '');

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }// start_el


  	function start_lvl( &$output, $depth = 0, $args = array() ) 
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }



    
}


?>