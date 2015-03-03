<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- #main -->
		
		<footer id="footer" role="contentinfo">
			<div class="interno" id="parceiros"  >
				<h2>Parceiros</h2>
				<a href="http://cinegramafilmes.com.br/">
					<img src="http://cinepix.com.br/wp-content/uploads/2014/10/Cinegrama-Logo-e1412606455209.png">
				</a>
				<a href="http://falantecultural.com.br/">
					<img src="http://cinepix.com.br/wp-content/uploads/2014/10/cabecalho-peq1-e1412606645235.png"					
				</a>
			</div><!--parceiros-->
			<div id="contatos"><a href="mailto:e-mail:cinepix@cinepix.com.br">cinepix@cinepix.com.br</a> | Rua Augusta, 1239 - Cj 23 | telefones: (11) 32310265 / (11)23389631 / (11) 954584844</div>
			<div class="site-info">
				<span>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> </span>
			</div><!-- .site-info -->
		</footer><!-- #footer -->
	</div><!-- .container -->

	<?php wp_footer(); ?>
	<script>
	  jQuery(document).ready(function(){
	    // Target your .container, .wrapper, .post, etc.
	    jQuery("#video_port").fitVids();
	  });
	</script>
</body>
</html>
