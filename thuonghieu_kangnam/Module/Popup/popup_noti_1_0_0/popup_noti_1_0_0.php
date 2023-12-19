<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Popup/popup_noti_1_0_0';
	if($check == 0){
		$css_inline .= '
            <style>
                a {
                    text-decoration: none;
                }
                
                .icon_sale img {
                    width: auto;
                }
                
                .popup_noti_1_0_0 {
                    position:fixed;
                    display: none;
                    z-index: 16;
                    height: 100%;
                    width: 100%;
                    top: 0;
                    left: 0;
                    background:rgba(0,0,0,0.5);
                }
                
                .popup_noti_1_0_0_box {
                    height: 100%;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-image: url('.$path.'/images/bg_bell.png);
                    background-position: center;
                    background-repeat: no-repeat;
                    min-height: 700px;
                    position: relative;
                }
                
                .popup_noti_1_0_0 article {
                    z-index: 11;
                    margin: 10px auto;
                    width: 440px;
                    position: relative;
                    border-radius: 4px;
                }
                
                .popup_noti_1_0_0_header h3 {
                    margin-top: 0;
                    text-transform: uppercase;
                    color: #000;
                    font-weight: 600;
                }
                
                .popup_noti_1_0_0_content .scrollbar {
                    float: left;
                    height: 500px;
                    width: 100%;
                    overflow-y: scroll;
                }
                
                .popup_noti_1_0_0_content .force-overflow {
                    min-height: 320px;
                }
                
                .popup_noti_1_0_0_content #style-1::-webkit-scrollbar-track {
                    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                    border-radius: 15px;
                    background-color: #F5F5F5;
                }
                
                .popup_noti_1_0_0_content #style-1::-webkit-scrollbar {
                    width: 0px;
                    background-color: #F5F5F5;
                }
                
                .popup_noti_1_0_0_content #style-1::-webkit-scrollbar-thumb {
                    border-radius: 15px;
                    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                    background-color: #0055A4;
                }
                
                .popup_noti_1_0_0_item {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 10px;
                    align-items: center;
                }
                
                .popup_noti_1_0_0_item_pic img {
                    width: 100%;
                }
                
                .popup_noti_1_0_0_item_sub {
                    padding-left: 10px;
                    color: #000;
                    flex:1;
                }
                
                .popup_noti_1_0_0_item_sub .time {
                    color: #838383;
                }
                
                .popup_noti_1_0_0 #popup_noti_1_0_0_closePopup {
                    position: absolute;
                    top: 0px;
                    right: 0px;
                    transition: all 0.5s ease 0s;
                    display: block;
                }
                
                .popup_noti_1_0_0 #popup_noti_1_0_0_closePopup i {
                    font-size: 30px;
                    color: #FF0000;
                }
                
                @media (max-width: 414px) {
                    .popup_noti_1_0_0_box {
                        background-size: 100%;
                        min-height: 500px;
                    }
                    .popup_noti_1_0_0 article {
                        width: 340px;
                    }
                    .popup_noti_1_0_0_content .scrollbar {
                        height: 400px;
                    }
                }
                
                @media (max-width: 375px) {
                    .popup_noti_1_0_0 article {
                        width: 310px;
                    }
                    .popup_noti_1_0_0_header h3 {
                        font-size: 20px;
                    }
                    .popup_noti_1_0_0_content {
                        font-size: 14px;
                    }
                    .popup_noti_1_0_0_content .scrollbar {
                        height: 350px;
                    }
                    .popup_noti_1_0_0 #popup_noti_1_0_0_closePopup i {
                        font-size: 25px;
                    }
                }
                
                @media (max-width: 360px) {
                    .popup_noti_1_0_0 article {
                        width: 300px;
                    }
                    .popup_noti_1_0_0_item {
                        margin-bottom: 5px;
                    }
                }
                
                @media (max-width: 320px) {
                    .popup_noti_1_0_0 article {
                        width: 265px;
                    }
                    .popup_noti_1_0_0_header h3 {
                        font-size: 18px;
                    }
                    .popup_noti_1_0_0 #popup_noti_1_0_0_closePopup i {
                        font-size: 22px;
                    }
                    .popup_noti_1_0_0_content {
                        font-size: 13px;
                    }
                    .popup_noti_1_0_0_content .scrollbar {
                        height: 300px;
                    }
                }
                /*# sourceMappingURL=popup_noti_1_0_0.css.map */
            </style>
		';	

		add_action('wp_footer', 'popup_noti_1_0_0');
		function popup_noti_1_0_0(){ 
			echo '
                <script>
                    $(document).ready(function() {
                        $(".bvkn_noti").click(function() {
                            $(".popup_noti_1_0_0").fadeIn(5);
                            $(".popup_noti_1_0_0 .popup_noti_1_0_0_box").fadeIn(500);
                        });
                        $(".popup_noti_1_0_0 #popup_noti_1_0_0_closePopup").click(function() {
                            $(".popup_noti_1_0_0").fadeOut(500);
                            $(".popup_noti_1_0_0 .popup_noti_1_0_0_box").fadeOut(500);
                
                        });
                    });
                </script>				
			';           
		};
    }
?>
    <section class="popup_noti_1_0_0">
        <div class="container">
            <div class="popup_noti_1_0_0_box">
                <article>
                    <div class="popup_noti_1_0_0_header">
                        <h3><?php echo $field['title']; ?></h3>
                    </div>
                    <div class="popup_noti_1_0_0_content">
                        <div class="scrollbar" id="style-1">
                            <div class="force-overflow">
                                <?php 
                                    foreach($field['content'] as $key => $post):
                                        setup_postdata($post);
                                        $link = get_permalink();
                                        $title = get_the_title();
                                        $img = get_the_post_thumbnail_url();
                                        $date = get_the_time('h:i  | d/m');
                                        echo '
                                            <a href="'.$link.'">
                                                <div class="popup_noti_1_0_0_item">
                                                    <div class="popup_noti_1_0_0_item_pic">
                                                        <img class="img-lazy" data-src="/rs/?w=107&h=100&src='.$img.'" alt="'.$title.'">
                                                    </div>
                                                    <div class="popup_noti_1_0_0_item_sub">
                                                        <div class="time">
                                                            '.$date.'
                                                        </div>
                                                        <div class="desc">
                                                            '.$title.'
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        ';
                                    endforeach;
                                    wp_reset_postdata(); 
                                ?>
                                
                            
                            </div>
                        </div>
                    </div>
                    <a id="popup_noti_1_0_0_closePopup"><i class="icon-cancel"></i></a>
                </article>
            </div>
        </div>
    </section>


