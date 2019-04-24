<?php
/**
 * Displays footer site info for child theme
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	 
    <p>This website was produced by students in the Faculty of Arts & Design, University of Canberra. 
The text and images reproduced on this site were generously provided by <a href="http://www.canberrahouse.com.au">Canberra House.</a></p>
    

</div><!-- .site-info -->
