<?php
/**
 * Template functions
 *
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
/**
 * Is gallery
 *
 * @since 1.0
 * @return boolean
 */

// generate thumbnail 
if (!function_exists('thumb')) { 
    if (function_exists('silas_image_resize')) { 
        function thumb($url, $width = NULL, $height = NULL, $crop = true, $retina = false) { 
            $image = silas_image_resize($url, $width, $height, $crop, $retina); 
            if ( is_wp_error( $image ) ) return array('url' => $url); 
            return $image; 
        } 
    } else { 
        function thumb() { 
            return false; 
        } 
    } 
}

function silas_image_url(){
    if ( has_post_thumbnail() ) {
        $url = wp_get_attachment_url( get_post_thumbnail_id() );     // Required
        echo $url;
    }
}
function silas_the_thumbnail_url($height,$width,$crop,$retina) {
    if ( has_post_thumbnail() ) {
    $url = wp_get_attachment_url( get_post_thumbnail_id() );     // Required
    
    // Call the resizing function (returns an array)
    $image = silas_image_resize( $url, $width, $height, $crop, $retina );
        
    echo $image['url'];
    }
}

function silas_thumbnail_url_by_id($id) {
       
     $url = wp_get_attachment_url( get_post_thumbnail_id($id) );      
    echo $url;
}

function silas_the_thumbnail($height,$width,$crop,$retina){
    if ( has_post_thumbnail() ) {
     $url = wp_get_attachment_url( get_post_thumbnail_id() );     // Required
    $image_alt = get_post_meta(  get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    $image_title = get_post_meta(  get_post_thumbnail_id(), '_wp_attachment_image_title', true);
    // Call the resizing function (returns an array)
    $image = silas_image_resize( $url, $width, $height, $crop, $retina );

    // Outputs resized image URL, http://yourwordpressdomain.com/wp-content/uploads/01/image1-300x200.png
    echo "<a href='" . $url . "' data-fancybox='thumbnail' data-caption='" . $image_alt . "' title='" . get_the_title(get_post_thumbnail_id()) . "' class='thumbnail'><img src='" . $image['url'] . "' alt='" . $image_alt . "'></a>";
    }
}

function silas_the_gallery_by_id($id,$height,$width,$crop,$retina){
    if ( has_post_thumbnail() ) {
     $url = wp_get_attachment_url( $id );     // Required
    
    // Call the resizing function (returns an array)
        
    $image = silas_image_resize( $url, $width, $height, $crop, $retina );

    // Outputs resized image URL, http://yourwordpressdomain.com/wp-content/uploads/01/image1-300x200.png
    echo "<a href='" . $url  . "'  data-fancybox='gallery' data-caption='" . $image_alt . "' title='" . get_the_title(get_post_thumbnail_id()) . "'><img src='" . $image['url'] . "' alt='" . $image_alt . "'></a>";
    }
}

function silas_image_gallery_is_gallery() {

	$attachment_ids = get_post_meta( get_the_ID(), '_silas_image_gallery', true );

	if ( $attachment_ids ) {
		return true;
	}

	return false;
}

/**
 * Check the current post for the existence of a short code
 *
 * @since 1.0
 * @return boolean
 */
function silas_image_gallery_has_shortcode( $shortcode = '' ) {
	global $post;

	// false because we have to search through the post content first
	$found = false;

	// if no short code was provided, return false
	if ( !$shortcode ) {
		return $found;
	}

	if (  is_object( $post ) && stripos( $post->post_content, '[' . $shortcode ) !== false ) {
		// we have found the short code
		$found = true;
	}

	// return our final results
	return $found;
}


/**
 * Returns the correct rel attribute for the anchor links
 *
 * @since 1.0
 * @return string
 */


/**
 * Has linked images
 *
 * @since 1.0
 * @return boolean true
 */
function silas_image_gallery_has_linked_images() {

	$link_images = get_post_meta( get_the_ID(), '_silas_image_gallery_link_images', true );

	if ( 'on' == $link_images )
		return true;
}


/**
 * Get list of post types for populating the checkboxes on the admin page
 *
 * @since 1.0
 * @return array
 */
function silas_image_gallery_get_post_types() {

	$args = array(
		'public' => true
	);

	$post_types = array_map( 'ucfirst', get_post_types( $args ) );

	// remove attachment
	unset( $post_types[ 'attachment' ] );

	return apply_filters( 'silas_image_gallery_get_post_types', $post_types );

}

/**
 * Retrieve the allowed post types from the option row
 * Defaults to post and page when the settings have not been saved
 *
 * @return array
 * @since 1.0
*/

function silas_image_gallery_allowed_post_types() {
	
	$defaults['post_types']['post'] = 'on';
	$defaults['post_types']['page'] = 'on';

	// get the allowed post type from the DB
	$settings = ( array ) get_option( 'silas-image-gallery', $defaults );
	$post_types = isset( $settings['post_types'] ) ? $settings['post_types'] : '';

	// post types don't exist, bail
	if ( ! $post_types )
		return;

	return $post_types;
}


/**
 * Is the currently viewed post type allowed?
 * For use on the front-end when loading scripts etc
 *
 * @since 1.0
 * @return boolean
 */
function silas_image_gallery_allowed_post_type() {

	// post and page defaults
	$defaults['post_types']['post'] = 'on';
	$defaults['post_types']['page'] = 'on';

	// get currently viewed post type
	$post_type = ( string ) get_post_type();

	//echo $post_type; exit; // download

	// get the allowed post type from the DB
	$settings = ( array ) get_option( 'silas-image-gallery', $defaults );
	$post_types = isset( $settings['post_types'] ) ? $settings['post_types'] : '';

	// post types don't exist, bail
	if ( ! $post_types )
		return;

	// check the two against each other
	if ( array_key_exists( $post_type, $post_types ) )
		return true;
}


/**
 * Retrieve attachment IDs
 *
 * @since 1.0
 * @return string
 */
function silas_image_gallery_get_image_ids() {
	global $post;

	if( ! isset( $post->ID) )
		return;

	$attachment_ids = get_post_meta( $post->ID, '_silas_image_gallery', true );
	$attachment_ids = explode( ',', $attachment_ids );

	return array_filter( $attachment_ids );
}


/**
 * Shortcode
 *
 * @since 1.0
 */

function silas_image_gallery_shortcode() {

	// return early if the post type is not allowed to have a gallery
	if ( ! silas_image_gallery_allowed_post_type() )
		return;

	return silas_image_gallery();
}
add_shortcode( 'silas_image_gallery', 'silas_image_gallery_shortcode' );


/**
 * Count number of images in array
 *
 * @since 1.0
 * @return integer
 */
function silas_image_gallery_count_images() {

	$images = get_post_meta( get_the_ID(), '_silas_image_gallery', true );
	$images = explode( ',', $images );

	$number = count( $images );

	return $number;
}


/**
 * Output gallery
 *
 * @since 1.0
 */
function silas_image_gallery($height,$width,$crop) {
	$attachment_ids = silas_image_gallery_get_image_ids();
	global $post;

	if ( $attachment_ids ) { 
		$has_gallery_images = get_post_meta( get_the_ID(), '_silas_image_gallery', true );

		if ( $has_gallery_images ) { ?>
       
        <ul class="image-gallery <?php echo $classes; ?>">
        
        <?php
                                   
		foreach ( $attachment_ids as $attachment_id ) {
     
			// get original image
			$image_url	= wp_get_attachment_image_src( $attachment_id,false,false);
			$image_url	= $image_url[0];	
            $image_alt = get_post_meta(  $attachment_id, '_wp_attachment_image_alt', true);
            $image_title = get_post_meta(  $attachment_id, '_wp_attachment_image_title', true);
            
            if(isset($height) && !empty($height) && 
                isset($width) && !empty($width)){
                    $image = silas_image_resize( $image_url, $height ,$width ,$crop, false ); 
                    echo "<li><a href='" . $image_url . "'  data-fancybox='gallery' data-caption='" . $image_alt . "' title='" . get_the_title(get_post_thumbnail_id()) . "' class='gallery fancybox'><img class='picture' src='" . $image['url'] . "' alt='" . $image_alt . "' /></a></li>";
            }
            else{
                
                echo "<li><a href='" . $image_url . "'  data-fancybox='gallery' data-caption='" . $image_alt . "' title='" . get_the_title(get_post_thumbnail_id()) . "' class='gallery fancybox'><img class='picture' src='" . $image_url . "' alt='" . $image_alt . "' /></a></li>";  
            }
            
            
			
            
		
       
         

			//echo apply_filters( 'silas_image_gallery_html', $html, $rel, $image_link, $image_class, $image_caption, $image, $attachment_id, $post->ID );
		}
        ?>
    </ul>

    <?php } }
}


function silas_single_image_gallery($x,$height,$width,$crop) {
    $x = $x - 1;
	$attachment_ids = silas_image_gallery_get_image_ids();
	global $post;

	if ( $attachment_ids ) { 
		$has_gallery_images = get_post_meta( get_the_ID(), '_silas_image_gallery', true );

		if ( $has_gallery_images ) { ?>
 
        <?php
                                   
		
     
			// get original image
			$image_url	= wp_get_attachment_image_src( $attachment_ids[$x],false,false);
                                         
			$image_url	= $image_url[0];	
         
            $image_alt = get_post_meta(  $attachment_id, '_wp_attachment_image_alt', true);
            $image_title = get_post_meta(  $attachment_id, '_wp_attachment_image_title', true);
                          
            
            $image = silas_image_resize( $image_url, $height ,$width ,$crop, false );
			
		
           echo "<a href='" . $image_url . "' class='single-gallery fancybox'  data-fancybox='gallery' data-caption='" . $image_alt . "' title='" . get_the_title(get_post_thumbnail_id()) . "' ><img class='picture' src='" . $image['url'] . "' alt='" . $image_alt . "' /></a>";
         

			//echo apply_filters( 'silas_image_gallery_html', $html, $rel, $image_link, $image_class, $image_caption, $image, $attachment_id, $post->ID );
		
        ?>
    <?php } }
}

function silas_single_image_gallery_url($x,$height,$width,$crop) {
    $x = $x - 1;
	$attachment_ids = silas_image_gallery_get_image_ids();
	global $post;

	if ( $attachment_ids ) { 
		$has_gallery_images = get_post_meta( get_the_ID(), '_silas_image_gallery', true );

		if ( $has_gallery_images ) { ?>
 
        <?php
                                   
		
     
			// get original image
			$image_url	= wp_get_attachment_image_src( $attachment_ids[$x],false,false);
                                         
			$image_url	= $image_url[0];	
         
                           
            
            $image = silas_image_resize( $image_url, $height ,$width ,$crop, false );
			
		
           echo $image['url'];
         

			//echo apply_filters( 'silas_image_gallery_html', $html, $rel, $image_link, $image_class, $image_caption, $image, $attachment_id, $post->ID );
		
        ?>
    <?php } }
}


/**
 * Append gallery images to page automatically
 *
 * @since 1.0
 */

/*function silas_image_gallery_append_to_content( $content ) {

	if ( is_singular() && is_main_query() && silas_image_gallery_allowed_post_type() ) {
		$new_content = silas_image_gallery();
		$content .= $new_content;
	}

	return $content;

}
add_filter( 'the_content', 'silas_image_gallery_append_to_content' ); */


/**
 * Remove the_content filter if shortcode is detected on page
 *
 * @since 1.0
 */
function silas_image_gallery_template_redirect() {

	if ( silas_image_gallery_has_shortcode( 'silas_image_gallery' ) )
		remove_filter( 'the_content', 'silas_image_gallery_append_to_content' );

}
add_action( 'template_redirect', 'silas_image_gallery_template_redirect' );





