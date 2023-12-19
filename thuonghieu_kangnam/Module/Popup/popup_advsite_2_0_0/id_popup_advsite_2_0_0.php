<?php
    /*POPUP ADV SITE 2.0.0*/
    'id_popup_advsite_2_0_0' => array(
        'key' => 'id_popup_advsite_2_0_0',
        'name' => 'popup_advsite_2_0_0',
        'label' => 'Popup Advsite 2.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab tiêu đề*/
                'key' => 'id_popup_advsite_2_0_0_tab1',
                'label' => 'Popup Site',
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
                'key' => 'id_popup_advsite_2_0_0_tab1_sub',
                'label' => 'Cập nhật POPUP theo chỉ dẫn',
                'name' => 'data',
                'type' => 'textarea',
                'instructions' => '
                    Dòng 1 : Tiêu đề Popup <br>
                    Dòng 2 : Tiêu đề form Đăng ký <br>
                    Dòng 3 : Link ảnh hiển thị (650px x 450px) <br>
                    Dòng 4 : Tiêu đề nút đăng ký
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
                'rows' => 4,
                'new_lines' => '',
            ),
            /*End field*/
        ),
        'min' => '',
        'max' => '',
    ),
    /*END POPUP ADV SITE 2.0.0*/
?>