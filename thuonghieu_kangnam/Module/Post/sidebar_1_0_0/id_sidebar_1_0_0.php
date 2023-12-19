<?php

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

?>