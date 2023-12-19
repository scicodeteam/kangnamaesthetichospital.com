<?php
    include(locate_template("Module/Post/sidebar_1_1_0/css/sidebar_1_1_0_css.php"));
?>
<div class="sidebar_1_1_0">
	<div class="sidebar_1_1_0__title2">Dịch vụ nổi bật</div>
	<div class="sidebar_1_1_0__list" id="sidebar_1_1_0__list">
		<?php echo $sidebar_service ?>
	</div>

	<div class="sidebar_1_1_0__title">BÀI VIẾT ĐƯỢC QUAN TÂM</div>
	<div class="sidebar_1_1_0__newsOther">
		<ul>
			<?php
				foreach( $sidebar_news as $post ):
					setup_postdata($post);
					$link = get_permalink();
					$title = get_the_title();
					$img = get_the_post_thumbnail_url();
					$public =  $post->post_status;

					if ($public == 'publish'):
						echo'
							<li>
								<div class="sidebar_1_1_0__newsOther__pic">
									<a href="'.$link.'"><img width="61" height="61" src="/rs/?w=60&h=60&src='.$img.'" alt="'.$title.'"></a>
								</div>
								<div class="sidebar_1_1_0__newsOther__des">
									<div class="sidebar_1_1_0__newsOther__title">
										<a href="'.$link.'">'.$title.'</a>
									</div>
								</div>
							</li>
						';
					endif;
				endforeach;
				wp_reset_postdata(); 
			?>
		</ul>
	</div>
		
	<div id="stick">
		<?php //include(locate_template('Module/Post/regist_1_0_1/regist_1_0_1.php')); ?>
		<?php echo do_shortcode( '[sc name="kn_sidebar_banner"][/sc]' );  ?>
	</div>
</div>
	