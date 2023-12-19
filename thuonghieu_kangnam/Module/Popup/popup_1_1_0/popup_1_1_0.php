<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Popup/popup_1_1_0'; 
    if($check == 0){
        include(locate_template("Module/Popup/popup_1_1_0/css/popup_1_1_0_css.php"));           
    }
?> 
    
    <!-- <a href="#" class="modal-btn btn btnkntvv" data-modal="modal-pop"> click để nhận tư vấn</a>
    <a href="#" class="modal-btn btn" data-modal="modal-top"> click để lại sđt</a> -->
    <section class="pop_regkn_1_1_0">
        <div class="pop_regkn_1_1_0__box">
            <div class="modal" id="modal-pop">
                <div class="modal-bg"></div>
                <div class="modal-box animate-pop">
                    <div class="modal-header">
                        <div class="modal-close" id="modal-close">×</div>
                        <div class="modal-title">
                            <img src="/css/lib/images/logo-kn-white.svg" alt="logo">
                            <div class="pop_regkn_1_1_0__des">
                                <p>Để lại thông tin nhận tư vấn & ưu đãi</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div>
                            <input id="iname" name="iname" type="textbox" required="" placeholder="Họ tên*:">
                            <input id="imob" name="imob" type="textbox" required="" placeholder="Điện thoại*:">
                            <input type="hidden" style="display:none" id="iemail" name="iemail" placeholder="Email:">
                            <input type="hidden" id="gclid_field" name="gclid_field" value="">
                            <input type="hidden" id="code_campaign" name="code_campaign" value="582387663">
                            <input type="hidden" id="name_campaign" name="name_campaign" value="[Kangnam - Beauty] Tư Vấn">
                        </div>
                        <div class="pop_regkn_1_1_0__clicknow">
                            <input id="pop_regkn_1_1_0_clicknow" onclick="ants_send_contact(this);" type="button" value="ĐĂNG KÝ NGAY">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pop_callkn_1_1_0">
        <div class="pop_callkn_1_1_0__box">
            <div class="modal" id="modal-top">
                <div class="modal-bg"></div>
                <div class="modal-box animate-top">
                    <div class="modal-header">
                        <div class="modal-close">×</div>
                        <div class="modal-title">
                            <img src="/css/lib/images/logo-kn-white.svg" alt="logo">
                            <p class="pop_callkn_1_1_0__heading mt20 mb">Để lại số điện thoại <br> BVTM KangNam sẽ gọi tư vấn cho bạn</p>
                            <div class="modal-body">

                                <div>
                                    <div style="display:none">
                                        <input type="text" placeholder="Họ và tên (*)" value="Yêu Cầu Gọi Lại" id="iname" name="iname">
                                        <textarea type="text" placeholder="Nhu cầu tư vấn" id="itext" name="itext"></textarea>
                                        <input id="iemail" name="iemail" value="no@email.kangnambeauty.com" type="hidden" placeholder="Email">
                                        <input type="hidden" id="gclid_field" name="gclid_field" value="">
                                        <input type="hidden" id="name_campaign" name="name_campaign" value="[Kangnam - Beauty] Yêu Cầu Gọi Lại">
                                        <input type="hidden" id="code_campaign" name="code_campaign" value="582387664">
                                    </div>
                                    <input id="imob" name="imob" type="textbox" placeholder="Nhập số điện thoại của bạn*:">
                                </div>
                                <div class="pop_callkn_1_1_0__click">
                                    <input onclick="ants_sent_phone(this);" id="pop_sent" type="button" value="NHẬN TƯ VẤN NGAY">
                                </div>
                                <div class="pop_callkn_1_1_0__contact">
                                    <p class="pop_callkn_1_1_0__or mb mt20">Hoặc </p>
                                </div>
                            </div>
                            <div class="pop_callkn_1_1_0__des">
                                <div class="pop_callkn_1_1_0__phone pc ">
                                    <p><img src="images/call.png" alt=""> Tư vấn trực tiếp 24/7: <a href=""> 1900.6466</a></p>
                                </div>
                                <p class="pop_callkn_1_1_0__more mb">Liên hệ <img src="images/call_form.png" alt=""> <a href="">1900.6466</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        if(document.querySelectorAll('.btnkn1tv')){
            let btnkn1tv = document.querySelectorAll('.btnkn1tv');
            
            for(let item of btnkn1tv){
                item.setAttribute('data-modal','modal-pop');
                item.classList.add('modal-btn');
            }
        }
        
    </script>