<div class="sidebar_1_0_0">
	<?php if($sidebar_service): ?>
	<div class="sidebar_1_0_0__titleService"> DỊCH VỤ NỔI BẬT </div>
	<div class="sidebar_1_0_0__list">
		<?php 
			echo $sidebar_service;
		?>
	</div>
	<?php endif; ?>

	<div class="sidebar_1_0_0__title">BÀI VIẾT ĐƯỢC QUAN TÂM</div>
	<div class="sidebar_1_0_0__newsOther">
		<ul>
			<?php
				if(is_single()):

					$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 8, 'post__not_in' => array($post->ID) ) );

					if( $related ) foreach( $related as $key => $post ) {
						setup_postdata($post); 
						echo '
							<li>
								<div class="sidebar_1_0_0__newsOther__pic">
									<a href="' . get_permalink() . '">
										<img width="61" height="61"  src="'.get_the_post_thumbnail_url(get_the_ID(),'thumbnail').'" alt="' . get_the_title() . '">
									</a>
								</div>
								<div class="sidebar_1_0_0__newsOther__des">
									<h3 class="sidebar_1_0_0__newsOther__title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>
								</div>
							</li>	
						';
					}
					wp_reset_postdata(); 

				else:
					// cate, other
					$args = array(
						'post_status' => 'publish',
						'showposts' => 0,
						'orderby' => 'desc',
						'category__not_in' => array( 295 ),
					);
					$getposts = new WP_query($args); 
					$num = 0; 
					while ($getposts->have_posts() && $num < 8) : 
						$num++;
						$getposts->the_post(); 
						$link = get_permalink();
						$title = get_the_title();
						$img = get_the_post_thumbnail_url();
						$time = get_the_date('d/m/Y');
						echo'
							<li>
								<div class="sidebar_1_0_0__newsOther__pic">
									<a href="'.$link.'">
										<img width="61" height="61"  src="' . $img . '" alt="'.$title.'">
									</a>
								</div>
								<div class="sidebar_1_0_0__newsOther__des">
									<h3 class="sidebar_1_0_0__newsOther__title"><a href="'.$link.'">'.$title.'</a></h3>
								</div>
							</li>	
						';
					endwhile; wp_reset_postdata(); 
				endif;

				if(is_singular( 'doi-ngu-bac-si' )):
					$args = array(
						'post_status' => 'publish',
						'showposts' => 0,
						'orderby' => 'desc',
						'category__not_in' => array( 295 ),
					);
					$getposts = new WP_query($args); 
					$num = 0; 
					while ($getposts->have_posts() && $num < 8) : 
						$num++;
						$getposts->the_post(); 
						$link = get_permalink();
						$title = get_the_title();
						$img = get_the_post_thumbnail_url();
						$time = get_the_date('d/m/Y');
						echo'
							<li>
								<div class="sidebar_1_0_0__newsOther__pic">
									<a href="'.$link.'">
										<img width="61" height="61"  src="' . $img . '" alt="'.$title.'">
									</a>
								</div>
								<div class="sidebar_1_0_0__newsOther__des">
									<h3 class="sidebar_1_0_0__newsOther__title"><a href="'.$link.'">'.$title.'</a></h3>
								</div>
							</li>	
						';
					endwhile; wp_reset_postdata(); 
				endif;
			?>
		</ul>
	</div>
	<?php
		if($sidebar_banner){
			echo '
				<div id="stick">
					<a href="'.$sidebar_banner['description'].'"><img class=" aligncenter" src="'.$sidebar_banner['url'].'" alt="'.$sidebar_banner['title'].'" width="255" height="570"></a>	
				</div>
			';
			
		}
	?>
</div>
	