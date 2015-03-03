<?php
/*Modelo para página de arquivo de serviços
 *
 *
 */

get_header('page'); ?>

	<div id="primary" class="<?php echo odin_classes_page_full(); ?>">
		<div  class="main-interno" role="main">
			<div class="row" id="arquivo-servicos">
			<?php
			  $temp = $wp_query; 
			  $wp_query = null; 
			  $wp_query = new WP_Query(); 
			  $wp_query->query('showposts=1&post_type=servico'.'&paged='.$paged); 
		?>
			<div id="titulo-servicos-interno" class="interno" >
				<h1>
				   <?php
				   	$post_type = get_post_type_object( $post->post_type);
				   	echo $post_type->name;
				   ?>
				</h1>
			</div>
			<div id="descricao-servicos-interno" class="interno-page" >
				<h3>
					<?php echo $post_type->description;?>
				   	
				</h3>
			</div><!--descricao-servicos-interno-->
		<?php	  while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>
			
			// my content from my custom field that I want paginated

			<p><?php the_field('image'); ?></p>

			<?php endwhile; ?>

			<nav>
			    <?php previous_posts_link('&laquo; Newer') ?>
			    <?php next_posts_link('Older &raquo;') ?>
			</nav>

			<?php 
			  $wp_query = null; 
			  $wp_query = $temp;  // Reset
			?>
			
				
				
            
            
				<div id="servicos-rolo" class="interno-page" >


			
				</div><!--descricao-servicos-interno-->
			</div><!--row-->
		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer('page');
