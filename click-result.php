<?php

add_action('wp_ajax_no_priv_filter' , 'filter_ajax');
add_action('wp_ajax_filter' , 'filter_ajax');

?>




<?php function filter_ajax(){


         $category = $_POST['category'];
				 $post_type = $_POST["posttype"];

		 $args=array(
				         'post_type' => $post_type,
						 'posts_per_page' => -1


					);

				  if(isset($category)) {

					  $args['category__in'] = array($category);


				  }






				  $query = new WP_Query($args);

				  if ($query->have_posts()) :
				    while ($query->have_posts()) : $query->the_post();?>



						<!--------- click result ONE------->


					<div class="posts-boxes">

					  <div class="posts-boxes-inner">

					      <a href="<?php echo get_post_permalink(); ?>"><div class="post-box-thumbnail"><?php the_post_thumbnail(); ?></div></a>

						  <div class="post-box-custom-fields"><?php the_category(); ?></div>

						  <div class="post-box-title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title('<h2>' , '</h2>'); ?></a></div>

					  </div>

				    </div>



				    <?php endwhile;
				          endif;
				          wp_reset_postdata();




	    die();
}





?>
