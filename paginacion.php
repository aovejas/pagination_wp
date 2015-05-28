<?php 

 /* Paginación
–––––––––––––––––––––––––––––––––––––––––––––––––– */

	function byadr_pagination( ) {
		$args = array(
			
			'prev_text' => __('Anterior', 'byadr'),
			'next_text' => __('Siguiente', 'byadr'),
			'type'		=> 'list',

			);

	?>

	<nav class="pageNav">
		<?php echo paginate_links( $args ); ?>
	</nav>

	<?php
	}
