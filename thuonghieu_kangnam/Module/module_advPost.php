<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$slug = str_replace('/','',parse_url($actual_link)['path']);
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$cat_item =  get_category_by_slug($slug); 
	// var_dump($cat_item);
	$id_category =  $cat_item->term_id;	
    $sidebar_cate = get_field('page_field','category_'.$category_id);
    $js_inline = '';
    $css_inline = '';

    // endif;
    if ($sidebar_cate):
        foreach($sidebar_cate as $sidebar_cate_0):
            foreach($sidebar_cate_0 as $sidebar_cate_1):
                foreach($sidebar_cate_1 as  $value):
                    $name = $field['acf_fc_layout'];
                    if(in_array($name,$arrcheck)):
                        $check = 1;
                    else:
                        array_push($arrcheck,$name);
                        $check = 0;
                    endif;
                endforeach;
            endforeach;
        endforeach;
        include(locate_template('Module/Post/banner_1_0_1/banner_1_0_1.php')); 
        echo $css_inline;
    endif;

?>

<?php echo $js_inline; ?>