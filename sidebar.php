<?php 

if ( ! is_active_sidebar( 'sidebar-1' ) ) return; 

?>

<aside id="secondary" class="widget-area col-md-4">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>