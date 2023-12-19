<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Popup/popup_advsite_2_0_0';
	if($check == 0){
		$css_inline .= '
        <style>
            .pop-animate-zoom {
                animation: animatezoom 0.6s
            }
            
            @keyframes animatezoom {
                from {
                    transform: scale(0)
                }
                to {
                    transform: scale(1)
                }
            }
            
            .pop-modal {
                z-index: 12;
                display: none;
                padding-top: 150px;
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(59, 62, 64, 0.4);
            }
            
            .pop-modal-content {
                margin: auto;
                position: relative;
                padding: 0;
                outline: 0;
                max-width: 700px;
            }
            
            .popBox {
                position: relative;
            }
            
            .popBox img {
                display: block;
                max-width: 100%;
            }
            
            .open {
                display: block;
            }
            
            .popup_advsite_2_0_0__close {
                background: #F2664B;
                width: 30px;
                height: 30px;
                color: #fff;
                font-weight: bold;
                position: absolute;
                top: 0;
                right: 0;
                z-index: 99;
                text-align: center;
                line-height: 30px;
                cursor: pointer;
            }
            .popup_advsite_2_0_0__pic{
                position: relative;
            }
            .popup_advsite_2_0_0__form{
                position: absolute;
                top: 200px;
                left: 10px;
                text-align: center;
            }
            .popup_advsite_2_0_0__form h3{
                color: #fff;
                font-family: Arial, sans-serif;
                font-weight: 400;
            }
            .popup_advsite_2_0_0__form .fct input{
                width: 80%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                margin-bottom: 10px;
            }
            .popup_advsite_2_0_0__form .dkbt input{
                padding: 10px 30px;
                border: none;
                border-radius: 20px;
                background: linear-gradient(to top, #ED5F47, #B52C23);
                text-transform: uppercase;
                color: #fff;
                font-size: 20px;
                font-weight: 600;
                margin-top: 20px;
                cursor: pointer;
                outline: none;
            }
            @media screen and (max-width:1440px) {
                .pop-modal-content {
                    max-width: 550px;
                }
                .popup_advsite_2_0_0__form{
                    top: 160px;
                    width: 52%;
                }
                .popup_advsite_2_0_0__form h3{
                    font-size: 14px;
                }
                .popup_advsite_2_0_0__form .dkbt input{
                    font-size: 14px;
                }
            }
            
            @media screen and (max-width:414px) {
                .popup_advsite_2_0_0  {
                    display: none;
                }
            }
        </style>
		';	

		add_action('wp_footer', 'popup_advsite_2_0_0');
		function popup_advsite_2_0_0(){ 
			echo '
               
                <script>
                    $(document).ready(function() {
                        var pop_cookie = getCookie("popup");
                        $(".popup_advsite_2_0_0__close").click(function() {
                            setCookie("popup", "1");
            
                            $(".popup_advsite_2_0_0").hide();
            
                        });
                        if (pop_cookie == null || pop_cookie == "") {
                            console.log("Hien");
                            setTimeout(function(){ 
                                $(".popup_advsite_2_0_0").addClass("open");    
                            }, 5000);
                        } else {
                            console.log("An");
                            $(".popup_advsite_2_0_0").hide();
            
                        }
                    });
                </script>			
			';           
		};
    }
?>
<?php
    $data = explode("\n", $field['data']);
?>

    <div class="popup_advsite_2_0_0 pop-modal">
        <div class="pop-modal-content pop-animate-zoom popBox">
            <span class="closeBox popup_advsite_2_0_0__close">&times;</span>
            <div class="popup_advsite_2_0_0__pic">
                <img id="img02" style="width:100%" src="<?php echo $data[2] ?>" alt="<?php echo $data[0] ?>">
            </div>
            <div class="popup_advsite_2_0_0__form run">
                <h3><?php echo $data[1] ?></h3>
                <article>
                    <div class="fct">
                        <input id="iname" class="iname" name="iname" type="text" required placeholder="* Họ Và Tên:...">
                        <input id="imob" class="imob" name="imob" type="text" required placeholder="* Số Điện Thoại:...">
                        <input id="iemail" name="iemail" type="email" required placeholder="Email:" style="display: none;">
                        <input type="hidden" id="gclid_field" name="gclid_field" value="">
                        <input type="hidden" id="code_campaign" name="code_campaign" value="583971142">
                        <input type="hidden" id="name_campaign" name="name_campaign" value="[Kangnam] Sale Kangnam">
                    </div>
                    <div class="dkbt">
                        <input onclick="ants_send_contact(this)" class="target fbt bmk submit_s" type="button" value="<?php echo $data[3] ?>">
                    </div>
                </article>
            </div>
        </div>
    </div>




