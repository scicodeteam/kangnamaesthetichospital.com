<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Post/banner_1_0_1';

	if($check == 0){
		$css_inline .= '
			<style>
				.banner_1_0_1 img {
					width: 100%;
					height:auto;
					display: block;
					margin: 0px auto 20px;
				}
			</style>
        ';
	}
?>

<?php
	$banner_detail = $value['banner_detail'];
	$data = explode("\n", $banner_detail);
	if($banner_detail):
	echo '
		<a href="'.$data[3].'" class="banner_1_0_1" target="_blank" rel="nofollow">
			<picture>
				<source media="(min-width:600px)" srcset="'.$data[1].'">
				<img width="698" height="86" src="'.$data[2].'" alt="'.$data[0].'">
			</picture>
		</a>
	';
	endif;
?>

