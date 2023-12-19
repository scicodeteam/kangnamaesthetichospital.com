<?php
	$path = get_template_directory_uri();
    $path = $path.'/Module/Footer/pop_formreg_1_2_0';
?>
<style>
    .pop_formreg_1_2_0__box .modal-close{font-size:25px;line-height:.9;margin-right:-16px;margin-top:-10px}
    .pop_formreg_1_2_0__box .modal-box{max-width:350px;min-width:310px}
    .pop_formreg_1_2_0__box .modal-header{text-align:center;border-bottom:unset}
    .pop_formreg_1_2_0__des p{font-size:18px;font-weight:600;color:#004a80;margin:0}
    .pop_formreg_1_2_0__des i{color:#004a80;font-size:16px}
    .pop_formreg_1_2_0__viber,.pop_formreg_1_2_0__whatsapp,.pop_formreg_1_2_0__zalo,.pop_formreg_1_2_0__name{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:space-evenly;-ms-flex-pack:space-evenly;justify-content:space-evenly;padding:5px 10px;border:1px solid #004a80;border-radius:10px;margin-bottom:15px}
    .pop_formreg_1_2_0__viber input,.pop_formreg_1_2_0__whatsapp input,.pop_formreg_1_2_0__zalo input,.pop_formreg_1_2_0__name input{border:none}
    .pop_formreg_1_2_0__name input{color:#000}
    .pop_formreg_1_2_0__viber input{color:#834995}
    .pop_formreg_1_2_0__whatsapp input{color:#00a859}
    .pop_formreg_1_2_0__zalo input{color:#0180c7}
    .pop_formreg_1_2_0__sub{text-align:center}
    .pop_formreg_1_2_0__sub input{font-style:unset;background:url(<?php echo $path ?>/media/images/button.png) center 0 no-repeat;background-size:100%;color:#fff;text-transform:uppercase;font-weight:600;width:62%;height:44px;font-size:16px;cursor:pointer;border:none;margin-bottom:5px}
    .pop_formreg_1_2_0__sub p{margin:0;font-style:italic}
    @media (max-width: 280px) {
    .pop_formreg_1_2_0__box .modal-box{min-width:250px}
    .pop_formreg_1_2_0__viber,.pop_formreg_1_2_0__whatsapp,.pop_formreg_1_2_0__zalo,.pop_formreg_1_2_0__name{width:100%}
    .pop_formreg_1_2_0__viber input,.pop_formreg_1_2_0__whatsapp input,.pop_formreg_1_2_0__zalo input,.pop_formreg_1_2_0__name input{width:100%}
    .pop_formreg_1_2_0__des i{font-size:12px}
    .pop_formreg_1_2_0__sub input{width:90%}
    .pop_formreg_1_2_0__sub p{font-size:12px}
    }
</style>
<a style="display:none" href="#" class="modal-btn btn" data-modal="modal-zoom"> .animate-zoom</a>
<section class="pop_formreg_1_2_0">
    <div class="pop_formreg_1_2_0__box">
        <div class="modal" id="modal-zoom" style="display: none;">
            <div class="modal-bg"></div>
            <div class="modal-box animate-zoom">
                <div class="modal-header">
                    <div class="modal-close">×</div>
                    <div class="modal-title">
                        <img src="<?php echo $path ?>/media/images/logo.png" alt="">
                        <div class="pop_formreg_1_2_0__des">
                            <p>Nhận tư vấn và ưu đãi</p>
                            <i>(Để lại số đăng ký 1 trong các app sau)</i>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <article>
                        <div class="fct">
                            <div class="pop_formreg_1_2_0__name">
                                <img width="48" height="48" src="<?php echo $path ?>/media/images/user.svg" alt="">
                                <input name="iname" type="text" placeholder="* Tên:......................">
                            </div>
                            <div class="pop_formreg_1_2_0__viber">
                                <img width="48" height="48" src="<?php echo $path ?>/media/images/icons8-viber.svg" alt="">
                                <input name="iviber" type="text" placeholder="* Viber:......................">
                            </div>
                            <div class="pop_formreg_1_2_0__whatsapp">
                                <img width="48" height="48" src="<?php echo $path ?>/media/images/icons8-whatsapp.svg" alt="">
                                <input name="iwhatsapp" type="text" placeholder="* Whatsapp:......................">

                            </div>
                            <div class="pop_formreg_1_2_0__zalo">
                                <img width="48" height="48" src="<?php echo $path ?>/media/images/icons8-zalo.svg" alt="">
                                <input name="izalo" type="text" placeholder="* Zalo:......................">
                            </div>
                            <textarea style="display: none;" id="itext" name="itext" value=""></textarea>
                            <input type="hidden" id="iname" value="" name="inamePop" type="text" required="" placeholder="* Họ tên:">
                            <input type="hidden" id="imob" value="" name="imobPop" type="text" required="" placeholder="* Số điện thoại:">
                            <input type="hidden" id="iemail" value="noEmail@noemail.com" name="iemail" type="email" style="display:none;" required="" placeholder=" Email(không bắt buộc):">
                            <input type="hidden" id="gclid_field" name="gclid_field" value="">
                            <input type="hidden" id="code_campaign" name="code_campaign" value="582387663">
                            <input type="hidden" id="name_campaign" name="name_campaign" value="[Kangnam - Beauty] Tư Vấn">
                        </div>
                        <div class="pop_formreg_1_2_0__sub">
                            <input onclick="send(); ants_send_contact(this);" class="target fbt bmk submit_s" type="submit" value="ĐĂNG KÝ NGAY">
                            <p>(Chúng tôi sẽ kết nối và chat với bạn)</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function send() {
            const name = document.querySelector('.pop_formreg_1_2_0__name input');
            const viber = document.querySelector('.pop_formreg_1_2_0__viber input');
            const whatsapp = document.querySelector('.pop_formreg_1_2_0__whatsapp input');
            const zalo = document.querySelector('.pop_formreg_1_2_0__zalo input');

            if (name.value != '') {
                document.querySelector('#iname').value = name.value;
                document.querySelector('.pop_formreg_1_2_0__name').classList.remove("border");
                
            } else {
                alert('Bạn chưa nhập tên');
                document.querySelector('.pop_formreg_1_2_0__name').classList.add("border");
                return;
            }
            
            if (viber.value != '' || whatsapp.value != '' || zalo.value != ''){
                document.querySelector('.pop_formreg_1_2_0__viber').classList.remove("border");
                document.querySelector('.pop_formreg_1_2_0__whatsapp').classList.remove("border");
                document.querySelector('.pop_formreg_1_2_0__zalo').classList.remove("border");
                document.getElementsByName('itextPop').value = `
                    Thông tin số điện thoại khách hàng  
                    Viber: ${viber.value }
                    whatsapp: ${whatsapp.value }
                    zalo: ${zalo.value }
                `;
                if (viber.value) {
                    document.querySelector('#imob').value = viber.value;
                } else if (whatsapp.value) {
                    document.querySelector('#imob').value = whatsapp.value;
                } else {
                    document.querySelector('#imob').value = zalo.value;
                }

            } else {
                alert('Bạn cần nhập ít nhất 1 số điện thoại');
                document.querySelector('.pop_formreg_1_2_0__viber').classList.add("border");
                document.querySelector('.pop_formreg_1_2_0__whatsapp').classList.add("border");
                document.querySelector('.pop_formreg_1_2_0__zalo').classList.add("border");
                return;
            }
        }
    </script>
    <style>
        .border {
            border: 1px solid #c00!important;
        }
    </style>
</section>
