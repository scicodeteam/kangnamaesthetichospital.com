<?php

/*BANNER 1.0.1*/
'id_banner_1_0_1' => array(
    'key' => 'id_banner_1_0_1',
    'name' => 'banner_1_0_1',
    'label' => 'Banner 1.0.1',
    'display' => 'block',
    'sub_fields' => array(
        /*B?t d?u field*/
        array(
            /* Tab ti�u d?*/
            'key' => 'id_banner_1_0_1_tab1',
            'label' => 'Thông Tin Chung',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'id_banner_1_0_1_tab1_sub1',
            'label' => 'Cập nhật thông tin',
            'name' => 'banner_detail',
            'type' => 'textarea',
            'instructions' => '
                Dòng 1 : Tiêu đề banner<br>
                Dòng 2 : Link banner PC <br>
                Dòng 3 : Link banner MB <br>
                Dòng 4 : Link xem chi tiết <br>
            ',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 5,
            'new_lines' => '',
        ),
        
        /*End field*/
    ),
    'min' => '',
    'max' => '',
),
/*END BANNER 1.0.1*/

?>