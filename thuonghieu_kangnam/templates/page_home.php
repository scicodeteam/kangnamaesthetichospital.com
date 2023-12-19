<?php 
	/* Template Name: Page Home
	* Template Post Type: page
    */       

//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <?php 
    if (current_user_can('administrator') || current_user_can('editor')) {
      wp_admin_bar_render();
      echo '
        <meta name="robots" content="noindex,follow"/>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/admin-bar.min.css?ver=4.9.10" />
        <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/dashicons.min.css?ver=4.9.10" />
      ';
    }
  ?>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="IB7NazsflCxonm5I-jtz9EjeMeRSs0sb0rkHSYAAhBA" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title() ?></title>
    <?php wp_head(); ?>

    <style>
        <?php include(locate_template('options/theme_css.php')); ?>
    </style>
    
</head>

<body class="home">
    <?php get_template_part('Module/module_header'); ?>
    <?php 
        get_template_part('Module/module');	
        get_template_part('Module/module_footer');
    ?>

    <?php 
        // Module Other
        include(locate_template('Module/Other/tool_info_1_2_0/tool_info_1_2_0.php')); 
        include(locate_template('Module/Popup/popup_map_1_0_0/popup_map_1_0_0.php')); 

        // Tracking
        get_template_part('options/code_tracking/code_tracking'); 
    ?>
     <script src="https://benhvienthammykangnam.com.vn/css/lib/js_v2.min.js?v=1"></script>
    <script>
        <?php include(locate_template('options/theme_js.php')); ?>
    </script>
</body>