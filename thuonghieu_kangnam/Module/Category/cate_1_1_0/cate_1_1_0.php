<?php include(locate_template("Module/Category/cate_1_1_0/css/cate_1_1_0_css.php")); ?>

<style>
	.kh-top{
		height: auto;
		margin: 0px 0 5px;
		background: #eef9ff;
	}
	.author{
		display:flex;
	}
	.author_details{
		margin: 0;
	}
	.author_details img{
		border: 1px solid #D8D8D8;
		border-radius: 50%;
		width:90px;
		height:90px;
	}
	.author__body{
		flex: 1;
    	padding-left: 20px;
	}
	.top-description{
		padding: 15px 20px;
		margin-top:15px;
	}
	.top-description .ct{
		font-style: italic;
		color: #313131;
	}
	.top-description .tt{
		color: #00597d;
		text-transform: uppercase;
		margin: 0px 0 10px;
		font-size: 18px;
		font-weight:600;
	}
	.media-title a{
		font-size:17px;
		font-weight:600;
		color:#105496;
	}

</style>
<?php 
	$url = $_SERVER["REQUEST_URI"];
	$author_id = get_post_field ('post_author', $cause_id);
	$display_name = get_the_author_meta( 'display_name' , $author_id ); 
	$user_email = get_avatar( get_the_author_meta('user_email') , 90 ) ;
	$user_description = get_the_author_meta( 'user_description', $post->post_author );
	$us = str_replace('[]', '</br>', $user_description);
	
?>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<?php get_template_part('Module/Post/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>
			<div class="kh-top">
				<div class="top-description">
					<div class="author">
						<p class="author_details">
							<?php echo $user_email; ?>
						</p>						
						<div class="author__body">
							<h1 class="tt"><?php echo $display_name;?></h1>							
							<div class="ct"><?php echo $us ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="cate_1_1_0">
				<div class="cate_1_1_0__content">
					<ul>
						<?php

							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
									global $post; 
										$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');            
										$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
										
										// Show Sapo
										$sapo = get_field('sapo',$post->ID);

										if($sapo != ''){
											$excerpt = wp_trim_words( $sapo, 30);
										} else {
											$excerpt = wp_trim_words( get_the_excerpt($post->ID), 30 );
										}

										echo'<li class="media">';
										if($kim):
											echo'
												<div class="cate_1_1_0__contentPic">
													<a href="'.get_permalink($post->ID).'"><img width="250" height="250" src="/rs/?w=250&h=250&src='.$img.'" alt="'.get_the_title($post->ID).'"></a>
												</div>
											';
										endif;
										echo '
												<div class="cate_1_1_0__contentBody">
													<h2 class="cate_1_1_0__contentTitle"><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a></h2>
													<div class="cate_1_1_0__contentDesc">'.$excerpt.'</div>
													<div class="cate_1_1_0__contentMore"><a href="'.get_permalink($post->ID).'">Xem tiếp</a></div>
												</div>
											';
										echo '</li>';
								endwhile;
							endif;

						?>
					
					</ul>
					
					<!-- Pagination -->
					<?php get_template_part('Module/Category/pagination_1_0_0/pagination_1_0_0'); ?>
					<!-- Pagination -->

				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>



	