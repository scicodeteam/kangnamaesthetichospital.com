<?php
    $page_field = get_field('group_page_field');
    // Đường dẫn đến theme
    $path = get_template_directory_uri();
    $arrcheck = array();
    foreach($page_field as $field_0){
        foreach($field_0 as $field_1){
            foreach($field_1 as $field_2){
                foreach($field_2 as $field){
                    $name = $field['acf_fc_layout'];
                    if(in_array($name,$arrcheck)){
                        $check = 1;
                    }else{
                        array_push($arrcheck,$name);
                        $check = 0;
                    }
                    include(locate_template('template-parts/content-'.$name.'.php'));
                }
            }
        }
    }
?>