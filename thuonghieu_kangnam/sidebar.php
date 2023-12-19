<?php
    $module_id =  get_option('mfpd_option_name');

    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$slug = str_replace('/','',parse_url($actual_link)['path']);
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$cat_item =  get_category_by_slug($slug); 
	$id_category =  $cat_item->term_id;	
    
    // $check_sb = get_field('group_page_field','category_'.$category_id);

    $sidebar_service = get_field('sidebar_service','category_'.$category_id);
    $sidebar_news = get_field('sidebar_news','category_'.$category_id);
    $sidebar_banner = get_field('sidebar_banner','category_'.$category_id);

    $page_field = get_field('group_page_field',$module_id);

    // Đường dẫn đến theme
    $path = get_template_directory_uri();
    $arrcheck = array();
    $css_inline = '';
    $js_inline = '';

    foreach($page_field as $field_0):
        foreach($field_0 as $field):
            $field['acf_fc_layout'];
            if(in_array($name,$arrcheck)){
                $check = 1;
            }else{
                array_push($arrcheck,$name);
                $check = 0;
            }
        endforeach;
    endforeach;

    include(locate_template('Module/Post/sidebar_1_0_0/sidebar_1_0_0.php'));
?>
