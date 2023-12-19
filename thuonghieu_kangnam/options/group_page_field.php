<?php
$doctor_10_0_0_templateSlide = '
<p class="cn">Mô tả bác sĩ</p>
<p class="cg">Chức vụ</p>
<div class="doctor_10_0_0__name">Tên bác sĩ</div>
<ul>
    <li>- Thành tích 1</li>
    <li>- Thành tích 2</li>
</ul>';

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e534d93e4dbc',
        'title' => 'Cấu Hình Hệ Thống',
        'fields' => array(
            array(
                'key' => 'group_admin_control',
                'label' => '',
                'name' => 'group_admin_control',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show' => 'Hiển Thị Module',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'group_admin',
                'label' => '',
                'name' => 'group_admin',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show_header_footer' => 'Header/Footer',
                    'show_module_main' => 'Module Main',
                    'show_module_sidebar' => 'Sidebar',
                    'show_module_site' => 'WebSite',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'field_5e534e2c90dac',
                'label' => '',
                'name' => 'group_page_field',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(      
                        'key' => 'group_page_field_header',
                        'label' => 'Cài đặt Header - Footer',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'header_custom',
                        'label' => '',
                        'name' => 'header_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*HEADER*/
                            'header' => array(
                                'key' => 'header',
                                'name' => 'header',
                                'label' => 'Header Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'header_sub_fields',
                                        'label' => '',
                                        'name' => 'header_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*HEADER 20.0.0*/
                                            'id_header_20_0_0' => array(
                                                'key' => 'id_header_20_0_0',
                                                'name' => 'header_20_0_0',
                                                'label' => 'Header 20.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_20_0_0_tab2',
                                                        'label' => 'Menu Popup & Mobile',
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
                                                        'key' => 'id_header_20_0_0_sub1',
                                                        'label' => 'Menu',
                                                        'name' => 'id_header_20_0_0_sub1',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'id_header_20_0_0_sub1_layout1' => array(
                                                                'key' => 'id_header_20_0_0_sub1_layout1',
                                                                'name' => 'menu_don',
                                                                'label' => 'Menu Đơn',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout1_sub',
                                                                        'label' => 'Tên Menu',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu | Link ',
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
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_header_20_0_0_sub1_layout2' => array(
                                                                'key' => 'id_header_20_0_0_sub1_layout2',
                                                                'name' => 'menu_sub',
                                                                'label' => 'Menu Sub',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout2_sub1',
                                                                        'label' => 'Menu Cha',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu <br> Link ',
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
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout2_sub2',
                                                                        'label' => 'Sub Menu',
                                                                        'name' => 'col1',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_header_20_0_0_sub1_layout3' => array(
                                                                'key' => 'id_header_20_0_0_sub1_layout3',
                                                                'name' => 'menu_sub_full',
                                                                'label' => 'Mega Menu',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2',
                                                                        'label' => '',
                                                                        'name' => 'hd_title',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2',
                                                                        'label' => 'Dịch vụ',
                                                                        'name' => 'hd_title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Dòng 1: Tên Dịch vụ <br>
                                                                                           Dòng 2: Tên icon (Giới thiệu : 1, Mắt : 2, Mũi : 3, Khuôn mặt : 4, Body : 5, Trẻ hóa : 6, Da liễu : 7, Spa:8, Nha khoa :9 ',
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
                                                                        'rows' => 2,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab1',
                                                                        'label' => 'Menu',
                                                                        'name' => 'id_header_20_0_0_sub1_layout3_sub2_tab1',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'id_header_20_0_0_sub1_layout3_sub2_tab1_tab1' => array(
                                                                                'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab1_tab1',
                                                                                'name' => 'menu_don_sub',
                                                                                'label' => 'Menu Sub (1 cấp)',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    array(
                                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab1_tab1_layout1',
                                                                                        'name' => 'titlesig',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Tên menu <br>
                                                                                            Dòng 2 : Link <br>
                                                                                            Dòng 3 : Điền rel="nofollow" Không có để trống
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
                                                                                        'rows' => 3,
                                                                                        'new_lines' => '',
                                                                                    ),
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                            'id_header_20_0_0_sub1_layout3_sub2_tab1_tab2' => array(
                                                                                'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2_tab1',
                                                                                'name' => 'menu_da_cap_sub',
                                                                                'label' => 'Menu Sub (2 cấp)',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    array(
                                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2_tab1_layout1',
                                                                                        'name' => 'title2',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Tên menu <br>
                                                                                            Dòng 2 : Link <br>                                                                                            
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
                                                                                        'rows' => 2,
                                                                                        'new_lines' => '',
                                                                                    ),
                                                                                    array(
                                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2_tab1_layout2',
                                                                                        'label' => 'Sub Menu',
                                                                                        'name' => 'col1',
                                                                                        'type' => 'wysiwyg',
                                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'tabs' => 'all',
                                                                                        'toolbar' => 'full',
                                                                                        'media_upload' => 1,
                                                                                        'delay' => 0,
                                                                                    ),
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                          
                                                                        ),
                                                                        'button_label' => 'Thêm Menu sub',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Menu',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_header_20_0_0_tab3',
                                                        'label' => 'Menu Desktop',
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
                                                        'key' => 'id_header_20_0_0_sub3',
                                                        'label' => 'Menu PC',
                                                        'name' => 'id_header_20_0_0_sub3',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'id_header_20_0_0_sub3_layout1' => array(
                                                                'key' => 'id_header_20_0_0_sub3_layout1',
                                                                'name' => 'menu_donPC',
                                                                'label' => 'Menu Đơn',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout1_sub',
                                                                        'label' => 'Tên Menu',
                                                                        'name' => 'titlePC',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu | Link ',
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
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_header_20_0_0_sub3_layout2' => array(
                                                                'key' => 'id_header_20_0_0_sub3_layout2',
                                                                'name' => 'menu_subPC',
                                                                'label' => 'Menu Sub PC',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout2_sub1',
                                                                        'label' => 'Menu Cha PC',
                                                                        'name' => 'titlePC',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu <br> Link ',
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
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout2_sub2',
                                                                        'label' => 'Sub Menu PC',
                                                                        'name' => 'col1pc',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_header_20_0_0_sub3_layout3' => array(
                                                                'key' => 'id_header_20_0_0_sub3_layout3',
                                                                'name' => 'menu_sub_fullPC',
                                                                'label' => 'Mega Menu PC',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout3_sub1',
                                                                        'label' => 'Menu cha pc',
                                                                        'name' => 'titlePC',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tên menu <br>
                                                                            Dòng 2 : Link <br>
                                                                            Dòng 3 : Ảnh đại diện (Size 340 x 221)
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
                                                                        'rows' => 6,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout3_sub2',
                                                                        'label' => 'Sub Menu PC',
                                                                        'name' => 'col1pc',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Menu PC',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                                ),
                                            /*END HEADER 20.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Header',
                                        'min' => '',
                                        'max' => '2',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END HEADER*/ 

                            /*FOOTER*/
                            'footer' => array(
                                'key' => 'footer',
                                'name' => 'footer',
                                'label' => 'Footer Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'footer_sub_fields',
                                        'label' => '',
                                        'name' => 'footer_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*FOOTER 5.0.0*/
                                            'id_footer_5_0_0' => array(
                                                'key' => 'id_footer_5_0_0',
                                                'name' => 'footer_5_0_0',
                                                'label' => 'Footer 5.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_footer_5_0_0_sub',
                                                        'label' => 'Thông Tin',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
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
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END FOOTER 5.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Footer',
                                        'min' => '',
                                        'max' => '2',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END FOOTER*/ 
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                    array(      
                        'key' => 'group_page_field_body',
                        'label' => 'Cài đặt Module Main',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                
                    array(
                        'key' => 'body_custom',
                        'label' => '',
                        'name' => 'body_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*SLIDER*/
                            'slider' => array(
                                'key' => 'slider',
                                'name' => 'slider',
                                'label' => 'Slider Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'slider_sub_fields',
                                        'label' => '',
                                        'name' => 'slider_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*SLIDER 1.0.1*/
                                            'id_slider_1_0_1' => array(
                                                'key' => 'id_slider_1_0_1',
                                                'name' => 'slider_1_0_1',
                                                'label' => 'Slider 1.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        /* Tab Slider Desktop*/
                                                        'key' => 'id_slider_1_0_1_tab1',
                                                        'label' => 'Slider Desktop',
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
                                                        'key' => 'id_slider_1_0_1_sub1',
                                                        'label' => 'Slide Desktop',
                                                        'name' => 'slide_pc',
                                                        'type' => 'gallery',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'return_format' => 'array',
                                                        'preview_size' => 'medium',
                                                        'insert' => 'append',
                                                        'library' => 'all',
                                                        'min' => '',
                                                        'max' => '',
                                                        'min_width' => '',
                                                        'min_height' => '',
                                                        'min_size' => '',
                                                        'max_width' => '',
                                                        'max_height' => '',
                                                        'max_size' => '',
                                                        'mime_types' => '',
                                                    ),
                                                    array(
                                                        /* Tab Slider Mobile*/
                                                        'key' => 'id_slider_1_0_1_tab2',
                                                        'label' => 'Slider Mobile',
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
                                                        'key' => 'id_slider_1_0_1_sub2',
                                                        'label' => 'Slide Mobile',
                                                        'name' => 'slide_mb',
                                                        'type' => 'gallery',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'return_format' => 'array',
                                                        'preview_size' => 'medium',
                                                        'insert' => 'append',
                                                        'library' => 'all',
                                                        'min' => '',
                                                        'max' => '',
                                                        'min_width' => '',
                                                        'min_height' => '',
                                                        'min_size' => '',
                                                        'max_width' => '',
                                                        'max_height' => '',
                                                        'max_size' => '',
                                                        'mime_types' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '1',
                                            ),
                                            /*END SLIDER 1.0.1*/                             

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Slider',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SLIDER*/ 
                              

                            /*SERVICE*/
                            'service' => array(
                                'key' => 'service',
                                'name' => 'service',
                                'label' => 'Service Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'service_sub_fields',
                                        'label' => '',
                                        'name' => 'service_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module                          

                                             /*SERVICES 15.0.0 */
                                             'id_service_15_0_0' => array(
                                                'key' => 'id_service_15_0_0',
                                                'name' => 'service_15_0_0',
                                                'label' => 'Service 15.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_service_15_0_0_tab1',
                                                        'label' => 'Tiêu Đề',
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
                                                        'key' => 'id_service_15_0_0_tab1_sub1',
                                                        'label' => '',
                                                        'name' => 'service_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        /* Tab Service*/
                                                        'key' => 'id_service_15_0_0_tab2',
                                                        'label' => 'Dịch Vụ',
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
                                                        'key' => 'id_service_15_0_0_tab2_sub1',
                                                        'label' => 'Danh Sách Dịch Vụ',
                                                        'name' => 'service_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_service_15_0_0_tab2_sub1_layout1',
                                                                'name' => 'service_info_box1',
                                                                'label' => 'Dịch Vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_service_15_0_0_tab2_sub1_layout1_sub1',
                                                                        'label' => 'Cập nhật Dịch Vụ theo chỉ dẫn:',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => ' Link ảnh(120x125)<br>
                                                                                            Tên dịch vụ<br>
                                                                                            Link liên kết(#)',
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
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),                                       
                                                                
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    array(
                                                        /* Tab nội dung các dv tiêu biểu*/
                                                        'key' => 'id_service_15_0_0_tab3',
                                                        'label' => 'Content Dịch Vụ',
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
                                                        'key' => 'id_service_15_0_0_tab3_sub1',
                                                        'label' => 'Nội dung Dịch Vụ',
                                                        'name' => 'service_info2',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_service_15_0_0_tab3_sub1_layout1',
                                                                'name' => 'service_info_box2',
                                                                'label' => 'Dịch Vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_service_15_0_0_tab3_sub1_layout1_sub1',
                                                                        'label' => 'Link ảnh',
                                                                        'name' => 'serive_img',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),                                    
                                                                    array(
                                                                        'key' => 'id_service_15_0_0_tab3_sub1_layout1_sub2',
                                                                        'label' => 'Dịch vụ',
                                                                        'name' => 'serive_dv',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),                                    
                                                                    array(
                                                                        'key' => 'id_service_15_0_0_tab3_sub1_layout1_sub3',
                                                                        'label' => 'Nội dung',
                                                                        'name' => 'serive_cont',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),                                     
                                                                
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SERVICE 15.0.0 */

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Service',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SERVICE*/                                     

                            /*BASIS*/
                            'basis' => array(
                                'key' => 'basis',
                                'name' => 'basis',
                                'label' => 'Basis Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'basis_sub_fields',
                                        'label' => '',
                                        'name' => 'basis_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                             /*BASISS 9.0.0*/
                                             'id_basis_9_0_0' => array(
                                                'key' => 'id_basis_9_0_0',
                                                'name' => 'basis_9_0_0',
                                                'label' => 'Basis 9.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_basis_9_0_0_tab1',
                                                        'label' => 'Tiêu Đề',
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
                                                        'key' => 'id_basis_9_0_0_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => 'Dòng 1: Tiêu đề lớn<br>
                                                                            Dòng 2: Tiêu đề nhỏ<br>
                                                                            Dòng 3: Link ảnh đội ngũ bác sĩ',
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
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_basis_9_0_0_tab2',
                                                        'label' => 'Thông tin PC',
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
                                                        'key' => 'id_basis_9_0_0_tab2_sub1',
                                                        'label' => 'Thông tin',
                                                        'name' => 'title2',
                                                        'type' => 'textarea',
                                                        'instructions' => 'Dòng 1: Tiêu đề lớn<br>
                                                                            Dòng 2: Tiêu đề nhỏ<br>
                                                                            Dòng 3: Nội dung',
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
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END BASIS 9.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Basis',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END BASIS*/   

                            /*DOCTOR*/
                            'doctor' => array(
                                'key' => 'doctor',
                                'name' => 'doctor',
                                'label' => 'Doctor Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'doctor_sub_fields',
                                        'label' => '',
                                        'name' => 'doctor_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*DOCTOR 10.0.0*/
                                                'id_doctor_10_0_0' => array(
                                                'key' => 'id_doctor_10_0_0',
                                                'name' => 'doctor_10_0_0',
                                                'label' => 'Doctor 10.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab nội dung các dv tiêu biểu*/
                                                        'key' => 'id_doctor_10_0_0_tab3',
                                                        'label' => 'Slide Bác Sĩ',
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
                                                        'key' => 'id_doctor_10_0_0_tab3_sub1',
                                                        'label' => 'Nội dung Dịch Vụ',
                                                        'name' => 'doctor_info2',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_doctor_10_0_0_tab3_sub1_layout1',
                                                                'name' => 'doctor_info_box2',
                                                                'label' => 'Dịch Vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_doctor_10_0_0_tab3_sub1_layout1_sub1',
                                                                        'label' => 'Link ảnh',
                                                                        'name' => 'doctor_img',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),                                    
                                                                    array(
                                                                        'key' => 'id_doctor_10_0_0_tab3_sub1_layout1_sub2',
                                                                        'label' => 'Nội dung',
                                                                        'name' => 'doctor_dv',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Cập nhật HTML theo mẫu',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => $doctor_10_0_0_templateSlide,
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 7,
                                                                        'new_lines' => '',
                                                                    ),                                    
                                                                
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    array(
                                                        /* Tab doctor*/
                                                        'key' => 'id_doctor_10_0_0_tab2',
                                                        'label' => 'Ảnh Bác Sĩ Nhỏ',
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
                                                        'key' => 'id_doctor_10_0_0_tab2_sub1',
                                                        'label' => 'Danh Sách Bác Sĩ',
                                                        'name' => 'doctor_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_doctor_10_0_0_tab2_sub1_layout1',
                                                                'name' => 'doctor_info_box1',
                                                                'label' => 'Thông tin dịch vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_doctor_10_0_0_tab2_sub1_layout1_sub1',
                                                                        'label' => 'Nội Dung',
                                                                        'name' => 'content',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Cập nhật DỊCH VỤ theo chỉ dẫn:<br>
                                                                            Dòng 1: Link ảnh bác sĩ<br>
                                                                            Dòng 2: Tên bác sĩ
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
                                                                        'rows' => 2,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_doctor_10_0_0_tab2_sub1_layout1_sub2',
                                                                        'label' => 'Mô tả',
                                                                        'name' => 'about_des',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Thông tin bác sĩ cấu trúc UL > LI',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 0,
                                                                        'delay' => 0,
                                                                    ),                                       
                                                                
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Bác Sĩ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),                                                    

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END DOCTOR 10.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Doctor',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END DOCTOR*/  

                            /*VIDEO*/
                            'video' => array(
                                'key' => 'video',
                                'name' => 'video',
                                'label' => 'Video Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'video_sub_fields',
                                        'label' => '',
                                        'name' => 'video_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                                            
                                            /*VIDEO 12.0.0*/
                                            'id_video_12_0_0' => array(
                                                'key' => 'id_video_12_0_0',
                                                'name' => 'video_12_0_0',
                                                'label' => 'Video 12.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/

                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_video_12_0_0_tab1',
                                                        'label' => 'Tiêu Đề',
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
                                                        'key' => 'id_video_12_0_0_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => 'Dòng 1: Tiêu đề lớn<br>
                                                                            Dòng 2: Tiêu đề nhỏ<br>
                                                                            Dòng 3: Trích dẫn',
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
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_video_12_0_0_tab2',
                                                        'label' => 'Video',
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
                                                        'key' => 'id_video_12_0_0_tab2_sub1',
                                                        'label' => 'Thông tin',
                                                        'name' => 'video_if',
                                                        'type' => 'textarea',
                                                        'instructions' => 'Dòng 1: Link ảnh iphone<br>
                                                                            Dòng 2: Link ảnh thumb video(size:345x190)<br>
                                                                            Dòng 3: ID video(ID youtube)',
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
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_video_12_0_0_tab3',
                                                        'label' => 'Video PC',
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
                                                        'key' => 'id_video_12_0_0_tab3_layout1',
                                                        'label' => 'Nhân vật',
                                                        'name' => 'video_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_video_12_0_0_tab3_layout1_sub1',
                                                                'name' => 'video_info_box',
                                                                'label' => 'Video',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_video_12_0_0_tab3_layout1_sub1_tab1',
                                                                        'label' => 'Thông tin video',
                                                                        'name' => 'video_info_ct',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Link ảnh Video ( Size : 835x475 ) <br>
                                                                            Dòng 2 : Tiêu đề <br>
                                                                            Dòng 3 : ID Youtube <br>
                                                                            Dòng 4 : Nội dung 
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
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Video',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END VIDEO 12.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Video',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END VIDEO*/  

                            /*PERSON*/
                            'person' => array(
                                'key' => 'person',
                                'name' => 'person',
                                'label' => 'Person Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'person_sub_fields',
                                        'label' => '',
                                        'name' => 'person_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module  
                                            
                                            /*PERSON 11.0.0*/
                                            'id_person_11_0_0' => array(
                                                'key' => 'id_person_11_0_0',
                                                'name' => 'person_11_0_0',
                                                'label' => 'Person 11.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab Service*/
                                                        'key' => 'id_person_11_0_0_tab1',
                                                        'label' => 'Ảnh khách hàng',
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
                                                        'key' => 'id_person_11_0_0_tab1_sub1',
                                                        'label' => 'Khách hàng',
                                                        'name' => 'content',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Cập nhật KHÁCH HÀNG theo chỉ dẫn:<br>
                                                            Dòng 1: Link ảnh khách hàng<br>
                                                            Dòng 2: Chương trình tham gia<br>
                                                            Dòng 3: Tên khách hàng<br>
                                                            Dòng 4: Link xem thêm kh
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
                                                    
                                                    array(
                                                        /* Tab Service*/
                                                        'key' => 'id_person_11_0_0_tab2',
                                                        'label' => 'Thông tin',
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
                                                        'key' => 'id_person_11_0_0_tab2_sub1',
                                                        'label' => 'Danh Sách Khách Hàng',
                                                        'name' => 'person_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_person_11_0_0_tab2_sub1_layout1',
                                                                'name' => 'person_info_box1',
                                                                'label' => 'Thông tin dịch vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_person_11_0_0_tab2_sub1_layout1_sub1',
                                                                        'label' => 'Nội Dung',
                                                                        'name' => 'content2',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Cập nhật DỊCH VỤ theo chỉ dẫn:<br>
                                                                            Dòng 1: Link ảnh khách hàng PC<br>
                                                                            Dòng 2: Link ảnh khách hàng MB<br>
                                                                            Dòng 3: Tên khách hàng<br>
                                                                            Dòng 4: Thành tích

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
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),                                       
                                                                
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Thông tin',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PERSON 11.0.0*/

                                            /*PERSON 12.0.0*/
                                            'id_person_12_0_0' => array(
                                                'key' => 'id_person_12_0_0',
                                                'name' => 'person_12_0_0',
                                                'label' => 'Person 12.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab Service*/
                                                        'key' => 'id_person_12_0_0_tab1',
                                                        'label' => 'Ảnh khách hàng',
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
                                                        'key' => 'id_person_12_0_0_tab1_sub1',
                                                        'label' => 'Ảnh khách hàng',
                                                        'name' => 'content',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Cập nhật DỊCH VỤ theo chỉ dẫn:<br>
                                                            Dòng 1: Link ảnh background<br>
                                                            Dòng 2: Link ảnh khách hàng 1<br>
                                                            Dòng 2: Link ảnh khách hàng 2

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
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),        
                                                    array(
                                                        /* Tab Service*/
                                                        'key' => 'id_person_12_0_0_tab2',
                                                        'label' => 'Ảnh PC',
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
                                                        'key' => 'id_person_12_0_0_tab2_sub1',
                                                        'label' => 'Ảnh PC',
                                                        'name' => 'content2',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Cập nhật Hình ảnh theo chỉ dẫn:<br>
                                                            Dòng 1: Link ảnh background<br>
                                                            Dòng 2: Link ảnh khách kh

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
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),        

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PERSON 12.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Person',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END PERSON*/ 

                            /*NEWS*/
                            'news' => array(
                                'key' => 'news',
                                'name' => 'news',
                                'label' => 'News Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'news_sub_fields',
                                        'label' => '',
                                        'name' => 'news_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                        // Bat dau Module
                                        
                                        /*NEWS 10.0.0*/
                                        'id_news_10_0_0' => array(
                                            'key' => 'id_news_10_0_0',
                                            'name' => 'news_10_0_0',
                                            'label' => 'News 10.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    'key' => 'id_news_10_0_0_tab1',
                                                    'label' => 'Bài Viết Quan Tâm',
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
                                                    'key' => 'id_news_10_0_0_tab1_sub1',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'title',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                ),
                                                array(
                                                    'key' => 'id_news_10_0_0_tab1_sub3',
                                                    'label' => 'Danh sách tin',
                                                    'name' => 'content1',
                                                    'type' => 'relationship',
                                                    'instructions' => 'Chọn 4 bài viết',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'post_type' => '',
                                                    'taxonomy' => '',
                                                    'filters' => array(
                                                        0 => 'search',
                                                        1 => 'post_type',
                                                        2 => 'taxonomy',
                                                    ),
                                                    'elements' => array(
                                                        0 => 'featured_image',
                                                    ),
                                                    'min' => '',
                                                    'max' => 4,
                                                    'return_format' => 'id',
                                                ),

                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END NEWS 10.0.0*/

                                        // End Module
                                        ),
                                        'button_label' => 'Thêm News',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END NEWS*/

                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                      
                    array(      
                        'key' => 'group_page_field_sidebar',
                        'label' => 'Cài đặt Sidebar',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_sidebar',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'sidebar_custom',
                        'label' => '',
                        'name' => 'sidebar_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_sidebar',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*SIDEBAR 1.0.0*/
                            'id_sidebar_1_0_0' => array(
                                'key' => 'id_sidebar_1_0_0',
                                'name' => 'sidebar_1_0_0',
                                'label' => 'Sidebar 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/

                                    array(
                                        'key' => 'id_sidebar_1_0_0_sub',
                                        'label' => 'Sidebar',
                                        'name' => 'sidebar',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            'id_sidebar_1_0_0_sub_layout1' => array(
                                                'key' => 'id_sidebar_1_0_0_sub_layout1',
                                                'name' => 'sidebar_title',
                                                'label' => 'Tiêu đề SideBar',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_1_0_0_sub_layout1_sub1',
                                                        'label' => 'Tiêu đề chuyên mục',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_1_0_0_sub_layout5' => array(
                                                'key' => 'id_sidebar_1_0_0_sub_layout5',
                                                'name' => 'sidebar_title2',
                                                'label' => 'Tiêu đề SideBar 2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_1_0_0_sub_layout5_sub1',
                                                        'label' => 'Tiêu đề chuyên mục',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_1_0_0_sub_layout2' => array(
                                                'key' => 'id_sidebar_1_0_0_sub_layout2',
                                                'name' => 'sidebar_sv',
                                                'label' => 'Dịch Vụ',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_1_0_0_sub_layout2_sub',
                                                        'label' => 'Danh Sách DV',
                                                        'name' => 'content',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_1_0_0_sub_layout3' => array(
                                                'key' => 'id_sidebar_1_0_0_sub_layout3',
                                                'name' => 'sidebar_new',
                                                'label' => 'Tin tức chọn',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_1_0_0_sub_layout3_sub',
                                                        'label' => 'Bài viết quan tâm',
                                                        'name' => 'content',
                                                        'type' => 'relationship',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'post_type' => '',
                                                        'taxonomy' => '',
                                                        'filters' => array(
                                                            0 => 'search',
                                                            1 => 'post_type',
                                                            2 => 'taxonomy',
                                                        ),
                                                        'elements' => '',
                                                        'min' => '',
                                                        'max' => '',
                                                        'return_format' => 'object',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_1_0_0_sub_layout4' => array(
                                                'key' => 'id_sidebar_1_0_0_sub_layout4',
                                                'name' => 'sidebar_moi',
                                                'label' => 'Bài viết mới nhất',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                        ),
                                        'button_label' => 'Thêm Chức Năng',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END SIDEBAR 1.0.0*/   

                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                               
                    array(      
                        'key' => 'group_page_field_site',
                        'label' => 'Cài đặt Website',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_site',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'site_custom',
                        'label' => '',
                        'name' => 'site_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_site',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),   

                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-cau-hinh-website',
                ),
            ),
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    endif;
?>