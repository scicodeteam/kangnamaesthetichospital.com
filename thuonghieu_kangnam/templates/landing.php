<?php 
/* Template Name: Langding Page  
* Template Post Type: post
*/
//wp_head();

if (current_user_can('administrator') || current_user_can('editor')) {
 
 $addcode = '<meta name="robots" content="noindex,nofollow"/>
 <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/admin-bar.min.css?ver=4.9.10" />
 <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/dashicons.min.css?ver=4.9.10" />
 <script>var refer = document.referrer;</script>
 </head>';

}else{
	$addcode = '
	<meta name="robots" content="noindex,nofollow"/>
	<script>var refer = document.referrer;</script>
	</head>';
}


global $post; ?>

<?php
	// Get data
	$field_html = get_post_meta($post->ID,'html_code',true);
	$lp_link = get_post_meta($post->ID,'lp_link',true);
	
	$field_html_m = get_post_meta($post->ID,'html_code_m',true);
	$lp_link_m = get_post_meta($post->ID,'lp_link_m',true);

	function showPost($field, $link, $addcode) {
		if($field != ''):
			
			$html = str_replace('"media/','"'.$link.'media/',$field);
			echo $html = str_replace('</head>',$addcode,$html);
			wp_admin_bar_render();
		else:
			echo '<html><head>'.$addcode.'<body><h3 style="margin-top:200px;text-align:center">MISSING HTML CODE</h3></body></html>';
		endif;
	}

	// Kiem tra xem co ban mobile hay ko
	if($field_html_m != ''):
		// Check Ipad
		if( (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) ):
			showPost($field_html, $lp_link, $addcode);
		else:
			if( !wp_is_mobile() ):
				showPost($field_html, $lp_link, $addcode);
			else:
				// Neu la Mobile
				showPost($field_html_m, $lp_link_m, $addcode);
			endif;

		endif;
	
	else:
	// Trương hop ko co ban mobile	
		showPost($field_html,$lp_link, $addcode);
	endif;
?>