<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<?php get_template_part('Module/Post/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>
			<div class="cate_1_0_0">
				<?php 
					if ( is_search() ): 
						include(locate_template("Module/Category/search_1_0_0/search_1_0_0.php")); 
				?>
				<?php else: ?>
					<div class="cate_1_0_0__box">
						<h1 class="cate_1_0_0__title"><?php echo single_cat_title();?></h1>
						<?php 
							$cate_desc = category_description();
							if($cate_desc){
								echo '
									<div class="cate_1_0_0__info">'.$cate_desc.'</div>
								';
							}
						?>					
					</div>
				<?php endif; ?>

				<div class="cate_1_0_0__content">
					<ul>
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
									global $post; 
										$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');            
										$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
										
										$sapo = get_field('sapo',$post->ID);

										if($sapo != ''){
											$excerpt = wp_trim_words( $sapo, 30);
										} else {
											$excerpt = wp_trim_words( get_the_excerpt($post->ID), 30 );
										}

										echo'<li class="media">';
										if($kim):
											echo'
												<div class="cate_1_0_0__contentPic">
													<a href="'.get_permalink($post->ID).'"><img  width="250" height="250" src="/rs/?w=250&h=250&src='.$img.'" alt="'.get_the_title($post->ID).'"></a>
												</div>
											';
										endif;
										echo '
												<div class="cate_1_0_0__contentBody">
													<h2 class="cate_1_0_0__contentTitle"><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a></h2>
													<div class="cate_1_0_0__contentDesc">'.$excerpt.'</div>
													<div class="cate_1_0_0__contentMore"><a href="'.get_permalink($post->ID).'">Xem tiếp</a></div>
												</div>
											';
										echo '</li>';
								endwhile;
							endif;

						?>
					</ul>
					<?php get_template_part('Module/Category/pagination_1_0_0/pagination_1_0_0'); ?>

				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>