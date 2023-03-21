<?php

/**
 * Enqueue scripts and styles.
 */
function add_scripts() {
	wp_enqueue_style( 'twenty-twenty-one-child-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twenty-twenty-one-child-style', get_stylesheet_uri() );
	wp_dequeue_style( 'twenty-twenty-one-style' );
	// wp_enqueue_style( 'child-theme-image', get_stylesheet_directory_uri() . '/assets/images/facebookOrange.png');
	// wp_enqueue_style( 'child-theme-image', get_stylesheet_directory_uri() . '/assets/images/facebookOrange.png');
	// wp_enqueue_style( 'child-theme-image', get_stylesheet_directory_uri() . '/assets/images/facebookOrange.png');
	// wp_enqueue_style( 'child-theme-image', get_stylesheet_directory_uri() . '/assets/images/facebookOrange.png');
	// wp_enqueue_style( 'child-theme-image', get_stylesheet_directory_uri() . '/assets/images/facebookOrange.png');
	// wp_enqueue_style( 'child-theme-image', get_stylesheet_directory_uri() . '/assets/images/facebookOrange.png');
}
add_action( 'wp_enqueue_scripts', 'add_scripts', 99 );


register_nav_menu('main-menu', __( 'Main Menu', 'twentytwentyonechild'));
register_nav_menu('primary', __( 'Primary Menu', 'twentytwentyonechild'));

/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Class', 'Post Type General Name', 'twentytwentyonechild' ),
			'singular_name'       => _x( 'Class', 'Post Type Singular Name', 'twentytwentyonechild' ),
			'menu_name'           => __( 'Classses', 'twentytwentyonechild' ),
			'parent_item_colon'   => __( 'Class', 'twentytwentyonechild' ),
			'all_items'           => __( 'All Classes', 'twentytwentyonechild' ),
			'view_item'           => __( 'View Class', 'twentytwentyonechild' ),
			'add_new_item'        => __( 'Add New Class', 'twentytwentyonechild' ),
			'add_new'             => __( 'Add Class', 'twentytwentyonechild' ),
			'edit_item'           => __( 'Edit Class', 'twentytwentyonechild' ),
			'update_item'         => __( 'Update Class', 'twentytwentyonechild' ),
			'search_items'        => __( 'Search Class', 'twentytwentyonechild' ),
			'not_found'           => __( 'Not Found', 'twentytwentyonechild' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyonechild' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'class', 'twentytwentyonechild' ),
			'description'         => __( 'Class news and reviews', 'twentytwentyonechild' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'classes', $args );
	  
	}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'custom_post_type', 0 );

	function course_detail_custom_meta_box() {
		add_meta_box(
			'course_details', // ID for the meta box
			'Course Details', // Title of the meta box
			'courseTrainerCallback', // Callback function to display the HTML for the meta box
			'classes', // Post type to add the meta box to
			'normal', // Context (normal, advanced, or side)
			'default' // Priority (default or high)
		);
	}
	add_action( 'add_meta_boxes', 'course_detail_custom_meta_box' );
	
	function courseTrainerCallback( $post ) {
		// Get the current value of the meta field
		$courseTrainerVal = get_post_meta( $post->ID, 'courseTrainer', true );
		$courseGenreVal = get_post_meta( $post->ID, 'courseGenre', true );
		$courseLevelVal = get_post_meta( $post->ID, 'courseLevel', true );
		$memberfeeslVal = get_post_meta( $post->ID, 'memberfees', true );
		$nonmemberfeesVal = get_post_meta( $post->ID, 'nonmemberfees', true );
		$startingDatesVal = get_post_meta( $post->ID, 'startingDate', true );
		$endingDateVal = get_post_meta( $post->ID, 'endingDate', true );
		$addressVal = get_post_meta( $post->ID, 'address', true );
		$regDeadlineVal = get_post_meta( $post->ID, 'regDeadline', true );
		$daysVal10 = get_post_meta( $post->ID, 'days10', true );
		$daysVal3_9 = get_post_meta( $post->ID, 'days3_9', true );
		$daysVal2 = get_post_meta( $post->ID, 'days2', true );
		$day_afterVal1 = get_post_meta( $post->ID, 'day_after1', true );
		$about_the_remote_classes_val = get_post_meta( $post->ID, 'about_the_remote_classes', true );
		$cancelation_policy_val = get_post_meta( $post->ID, 'cancelation_policy', true );
		
		$facebook_url_val = get_post_meta( $post->ID, 'facebook_url', true );
		$twitter_url_val = get_post_meta( $post->ID, 'twitter_url', true );
		$linkedin_url_val = get_post_meta( $post->ID, 'linkedin_url', true );
		$other_url_val = get_post_meta( $post->ID, 'other_url', true );
		?>
			<div style="    display: flex; flex-wrap: wrap; flex-direction: column;">
				<label for="courseTrainer">Course Trainer:</label>
				<input type="text" id="courseTrainer" name="courseTrainer" value="<?php echo esc_attr( $courseTrainerVal ); ?>" >
				
				<label for="courseGenre">Course Genre:</label>
				<input type="text" id="courseGenre" name="courseGenre" value="<?php echo esc_attr( $courseGenreVal ); ?>" >
				
				<label for="courseLevel">Course Level:</label>
				<input type="text" id="courseLevel" name="courseLevel" value="<?php echo esc_attr( $courseLevelVal ); ?>" >
				
				<label for="memberfees">Member Fees:</label>
				<input type="text" id="memberfees" name="memberfees" value="<?php echo esc_attr( $memberfeeslVal ); ?>" >
				
				<label for="nonmemberfees">Non-Member Fees:</label>
				<input type="text" id="nonmemberfees" name="nonmemberfees" value="<?php echo esc_attr( $nonmemberfeesVal ); ?>" >
				
				<label for="startingDate">Starting Date:</label>
				<input type="text" id="startingDate" name="startingDate" value="<?php echo esc_attr( $startingDatesVal ); ?>" >
				
				<label for="endingDate">Ending Date:</label>
				<input type="text" id="endingDate" name="endingDate" value="<?php echo esc_attr( $endingDateVal ); ?>" >
				
				<label for="address">Address:</label>
				<input type="text" id="address" name="address" value="<?php echo esc_attr( $addressVal ); ?>" >
				
				<label for="regDeadline">Registration deadline:</label>
				<input type="text" id="regDeadline" name="regDeadline" value="<?php echo esc_attr( $regDeadlineVal ); ?>" >
				
				<label for="days10">10 days or more:</label>
				<input type="text" id="days10" name="days10" value="<?php echo esc_attr( $daysVal10 ); ?>" >
				
				<label for="days3_9">3-9 days:</label>
				<input type="text" id="days3_9" name="days3_9" value="<?php echo esc_attr( $daysVal3_9 ); ?>" >
				
				<label for="days2">2 days or less:</label>
				<input type="text" id="days2" name="days2" value="<?php echo esc_attr( $daysVal2 ); ?>" >
				
				<label for="day_after1">On the day or after:</label>
				<input type="text" id="day_after1" name="day_after1" value="<?php echo esc_attr( $day_afterVal1 ); ?>" >

				<label for="about_the_remote_classes">About the remote classes:</label>
				<input type="text" id="about_the_remote_classes" name="about_the_remote_classes" value="<?php echo esc_attr( $about_the_remote_classes_val ); ?>" >

				<label for="cancelation_policy">Cancelation Policy:</label>
				<input type="text" id="cancelation_policy" name="cancelation_policy" value="<?php echo esc_attr( $cancelation_policy_val ); ?>" >

				<label for="facebook_url">Facebook Account Url:</label>
				<input type="text" id="facebook_url" name="facebook_url" value="<?php echo esc_attr( $facebook_url_val ); ?>" >

				<label for="twitter_url">Twitter Account Url:</label>
				<input type="text" id="twitter_url" name="twitter_url" value="<?php echo esc_attr( $twitter_url_val ); ?>" >

				<label for="linkedin_url">LinkedIn Account Url:</label>
				<input type="text" id="linkedin_url" name="linkedin_url" value="<?php echo esc_attr( $linkedin_url_val ); ?>" >
				
				<label for="other_url">Any Other Account Url:</label>
				<input type="text" id="other_url" name="other_url" value="<?php echo esc_attr( $other_url_val ); ?>" >

			</div>


		<?php
	}

	function save_course_details( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		// Check the user's permissions.
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
		// Sanitize user input.
		$courseTrainerVal = sanitize_text_field( $_POST['courseTrainer'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'courseTrainer', $courseTrainerVal );
		// Sanitize user input.
		$courseGenreVal = sanitize_text_field( $_POST['courseGenre'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'courseGenre', $courseGenreVal );
		// Sanitize user input.
		$courseLevelVal = sanitize_text_field( $_POST['courseLevel'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'courseLevel', $courseLevelVal );
		
		$memberfeesVal = sanitize_text_field( $_POST['memberfees'] );
		update_post_meta( $post_id, 'memberfees', $memberfeesVal );

		$nonmemberfeesVal = sanitize_text_field( $_POST['nonmemberfees'] );
		update_post_meta( $post_id, 'nonmemberfees', $nonmemberfeesVal );

		$startingDateVal = sanitize_text_field( $_POST['startingDate'] );
		update_post_meta( $post_id, 'startingDate', $startingDateVal );

		$endingDateVal = sanitize_text_field( $_POST['endingDate'] );
		update_post_meta( $post_id, 'endingDate', $endingDateVal );

		$addressVal = sanitize_text_field( $_POST['address'] );
		update_post_meta( $post_id, 'address', $addressVal );

		$regDeadlineVal = sanitize_text_field( $_POST['regDeadline'] );
		update_post_meta( $post_id, 'regDeadline', $regDeadlineVal );

		$daysVal10 = sanitize_text_field( $_POST['days10'] );
		update_post_meta( $post_id, 'days10', $daysVal10 );
		
		$daysVal3_9 = sanitize_text_field( $_POST['days3_9'] );
		update_post_meta( $post_id, 'days3_9', $daysVal3_9 );
		
		$daysVal2 = sanitize_text_field( $_POST['days2'] );
		update_post_meta( $post_id, 'days2', $daysVal2 );
		
		$day_afterVal1 = sanitize_text_field( $_POST['day_after1'] );
		update_post_meta( $post_id, 'day_after1', $day_afterVal1 );


		$about_the_remote_classes_val = sanitize_text_field( $_POST['about_the_remote_classes'] );
		update_post_meta( $post_id, 'about_the_remote_classes', $about_the_remote_classes_val );

		$cancelation_policy_val = sanitize_text_field( $_POST['cancelation_policy'] );
		update_post_meta( $post_id, 'cancelation_policy', $cancelation_policy_val );


		$facebook_url_val = sanitize_text_field( $_POST['facebook_url'] );
		update_post_meta( $post_id, 'facebook_url', $facebook_url_val );

		$twitter_url_val = sanitize_text_field( $_POST['twitter_url'] );
		update_post_meta( $post_id, 'twitter_url', $twitter_url_val );

		$linkedin_url_val = sanitize_text_field( $_POST['linkedin_url'] );
		update_post_meta( $post_id, 'linkedin_url', $linkedin_url_val );

		$other_url_val = sanitize_text_field( $_POST['other_url'] );
		update_post_meta( $post_id, 'other_url', $other_url_val );

	}
	add_action( 'save_post', 'save_course_details' );
	

?>