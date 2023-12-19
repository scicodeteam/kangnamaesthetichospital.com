<?php 
    function post_CTA_button_1_0_0_shortcode($atts,$content=null){
        static $count = 0;
        $id = $atts['id'];
        $count++;	
        $style = '
            <style>
                .post_CTA_button_1_0_0 {
                margin: 15px 0;
                }
                .post_CTA_button_1_0_0 a{
                    text-decoration:none!important;
                    color: #333!important;
                    font-weight:normal!important;
                }
                .post_CTA_button_1_0_0_box {
                    text-align: center;
                    display: table;
                    align-items: center;
                    justify-content: center;
                    margin: 10px auto;
                }
                .post_CTA_button_1_0_0_box a {
                text-transform: uppercase;
                font-size: 18px;
                font-family: monospace;
                display: block;
                float:left;
                }
                .post_CTA_button_1_0_0_box_tv img {
                    width: 240px;
                }
                .post_CTA_button_1_0_0_box_dk {
                background-color: #D7D7D7;
                padding: 4px 10px 0 5px;
                border-radius: 10px;
                color: #333;
                margin: 0 10px;
                box-shadow: 0px 2px 0px 2px #D7D7D7;
                }
                .post_CTA_button_1_0_0_box_number {
                    background-color: #092771;
                    color: #fff;
                    font-size: 22px;
                    border-radius: 100%;
                    font-weight: 600;
                    width: 35px;
                    height: 35px;
                    display: inline-table;
                    line-height: 35px;
                }

                @media (max-width: 414px) {
                    .post_CTA_button_1_0_0_box{
                        margin:10px auto;
                    }
                    .post_CTA_button_1_0_0_box_tv img{
                        width:220px;
                    }
                    .post_CTA_button_1_0_0_box a{
                        float:none;
                        margin:0 auto;
                        display:table;
                    }
                    .post_CTA_button_1_0_0_box_dk{
                        padding:2px 10px;
                    }
                    .post_CTA_button_1_0_0_box_number{
                        font-size:17px;
                        width:30px;
                        height:30px;
                        line-height:30px;
                    }
                }
            
            </style>
        ';
        if ($count > 1):
            $style = '';
        endif;
        $module_id =  get_option('mfpd_option_name');
        $page_field = get_field('group_page_field',$module_id);
        foreach($page_field as $field_0){
            foreach($field_0 as $field_1){
                foreach($field_1 as $field_2){
                    foreach($field_2 as $value_3){
                        if( $value_3['acf_fc_layout'] == 'post_CTA_button_1_0_0' ):
                            foreach($value_3 as $value_4):
                                foreach($value_4 as $value):
                                    $data = explode("\n",  $value['info']);
                                    $doctor_id = substr("$data[0]", 0,-1);
                                    if ($id == $doctor_id):
                                        $chuyenkhoa = $value['about_1'];
                                        $diachi = $value['about_2'];
                                        $content = '
                                            <div class="post_CTA_button_1_0_0">
                                                <div class="post_CTA_button_1_0_0_box regist_uudai">
                                                    <a href="#" class="post_CTA_button_1_0_0_box_tv '.$data[3].'">
                                                        <img src="'.$data[2].'" alt="'.$data[1].'">
                                                    </a>
                                                    <a href="#" class="post_CTA_button_1_0_0_box_dk '.$data[3].'">
                                                        <span class="post_CTA_button_1_0_0_box_number">'.$data[4].'</span> Đã đăng ký
                                                    </a>
                                                </div>
                                            </div>
                                        ';
                                    endif;
                                endforeach;
                            endforeach;
                        endif;
                        
                    }
                }
            }
        }
        return $style.$content;		
    }
    add_shortcode('post_CTA_button_1_0_0','post_CTA_button_1_0_0_shortcode');
?>