<?php
/**
 * Template Name: Ajax Test Page
 *
 * @package WordPress
 * @subpackage Futurum Custom Theme
 * @since Futurum 1.0
 */
 ?>



<?php get_header(); ?>


<div class="innerwrapper">


			      <div class="content">





				  <div class="category-selectors-box">

				              <ul class="cat-picker">

				                      <li class="js-filter-item" ><a href="<?php home_url(); ?>">All</a></li>
				                      <?php $cat_args=array(

				                            'exclude'    => 'array(1)',
						                    'option_all' => 'All'
				                            );

				                            $categories=get_categories($cat_args);

				                                foreach($categories as $cat) :?>

   									  <li class="js-filter-item" ><a data-posttype="classroom" data-category="<?php echo $cat->term_id; ?>" href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>

				                                 <?php endforeach;

				                                  ?>

				               </ul>


				  </div><!-----end category selectors box------->










                  <?php $args=array(
				         'post_type'=>'classroom',
						 'posts_per_page'=> -1
				  );

				  $query = new WP_Query($args);

				  if ($query->have_posts()) :
				    while ($query->have_posts()) : $query->the_post();?>




				        <div class="posts-boxes">

						    <div class="posts-boxes-inner">

					            <a href="<?php echo get_post_permalink(); ?>"><div class="post-box-thumbnail"><?php the_post_thumbnail(); ?></div></a>

						        <div class="post-box-custom-fields"><?php the_category(); ?></div>

						        <div class="post-box-title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title('<h2>' , '</h2>'); ?></a></div>

							</div>

				        </div>

				  <?php endwhile;
				        endif;


				  ?>



	             </div>  <!--------end content----->





</div><!---



<?php get_footer(); ?>
