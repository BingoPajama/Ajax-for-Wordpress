<?php
/**
 * Template Name: Futurum Ajax Test Page
 *
 * @package WordPress
 * @subpackage Futurum Custom Theme
 * @since Futurum 1.0
 */
 ?>



<?php get_header(); ?>




<div class="innerwrapper">

	
			      <div class="content">
				  			
                  <?php $args=array(
				         'post_type'=>'classroom',
						 'posts_per_page'=>'-1'
				  );
				  
				  $query = new WP_Query($args);
				  
				  if ($query->have_posts()) :
				    while ($query->have_posts()) : $query->the_post();
				  
				  the_title('<h2>' , '</h2>');
				  
				  endwhile;
				  endif;
				  wp_reset_postdata();
				  
				  ?>
				  
				  <div class="category-selectors-box">
				  
				  <ul>
				  
				      <li class="js-filter-item" ><a href="<?php home_url(); ?>">All</a></li>
				  
				  
				  <?php $cat_args=array(
				  
				         'exclude' => 'array(1)',
						 'option_all' => 'All'
				  
				  );
				  
				  $categories=get_categories($cat_args);
				  
				  foreach($categories as $cat) :?>
				      <li class="js-filter-item" ><a data-category="<?php echo $cat->term_id; ?>" href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
				  
				  <?php endforeach;
				  
				  ?>
				  
				  
				  </ul>
				  
				  
				  </div>
				  
					 
	  
	  
	             </div>  <!--------end content----->
				 
				
				 
				 

</div><!---


<?php get_footer(); ?>