<?php
  $path = get_template_directory_uri();
  $path = $path.'/Module/Popup/popup_call_1_0_0';
?>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {

    const bvkn_dkcall = document.querySelectorAll(".btnkn1call, .btncallnow");
    const popup_call_1_0_0_overlayClickform = document.getElementById("popup_call_1_0_0_overlayClickform");
    const popup_call_1_0_0_overlay = document.getElementById("popup_call_1_0_0_overlay");
    const popup_call_1_0_0_closePopup = document.getElementById("popup_call_1_0_0_closePopup");

    for (const call of bvkn_dkcall) {
        call.addEventListener("click", function() {
            popup_call_1_0_0_overlayClickform.style.display = "block";
            popup_call_1_0_0_overlay.style.display = "block";
        });
    }

    popup_call_1_0_0_closePopup.addEventListener("click", function() {
        popup_call_1_0_0_overlayClickform.style.display = "none";
        popup_call_1_0_0_overlay.style.display = "none";
    });

    popup_call_1_0_0_overlay.addEventListener("click", function() {
        popup_call_1_0_0_overlayClickform.style.display = "none";
        popup_call_1_0_0_overlay.style.display = "none";
    });

});
</script>

<style>
.popup_call_1_0_0_overlay{background:rgba(0,0,0,0.9)}
#popup_call_1_0_0_closePopup{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMBJREFUeNqc0z0KAjEQhuFx8E5qrqFeQdBCu0WwF2zsxd7fG+QCC+reyW8kgRjza+DdIksedgLb01rfiWiPWqpfA9QwHjt0QaM/gJucF+SFxpWQBabowWbTQucC6AuQDXZeCjTJQD+Aj+SgIBBCfEjlgBjiQie0SAGy+okLFGiLDmgeA1JfYkfYoBlaO6MVI0Mzgox0dEZTpYgAV3PwGbgjlUNCAOUgLgSSEFcAUYgrAfL+tQ8kyKoSsKsz0PItwAC6cz7Ubz7EKgAAAABJRU5ErkJggg==)}
.popup_call_1_0_0{font-size:14px;font-size:14px;position:fixed;z-index:100;top:120px;left:calc(50% - 180px)}
.popup_call_1_0_0 input,.popup_call_1_0_0 textarea{box-sizing:border-box;-moz-box-sizing:border-box}
.popup_call_1_0_0 .popup_call_1_0_0_overlay{position:fixed;left:0;top:0;width:100%;height:100%;z-index:10;opacity:.7}
.popup_call_1_0_0_logo{background:url(<?php echo $path ?>/images/logo.png) center 0 no-repeat;height:60px}
.popup_call_1_0_0_box{position:relative;z-index:12;background:#fff;margin:0;padding:20px 0;width:350px;border-radius:4px;box-shadow:0 1px 10px rgba(0,0,0,0.1)}
#popup_call_1_0_0_closePopup{background-position:0 0;background-repeat:no-repeat;width:17px;height:17px;position:absolute;top:-18px;right:-24px;transition:all .5s ease 0;font-family:arial}
#popup_call_1_0_0_closePopup:hover{transform:rotate(360deg)}
.popup_call_1_0_0_header{text-align:center;position:relative;padding:0 20px}
.popup_call_1_0_0_header-note{text-align:center;padding:20px 0 10px;color:#777;font-weight:600;font-style:italic}
.popup_call_1_0_0_header img{display:block;padding:0 0 20px;margin:0 auto}
.popup_call_1_0_0_content{padding:5px 20px 1px}
.popup_call_1_0_0_content input,.popup_call_1_0_0_content textarea{padding:9px 12px}
.popup_call_1_0_0_content>div:nth-child(1) input,.popup_call_1_0_0_content>div:nth-child(1) textarea{background:#fff;border:1px solid #b7b7b7;border-radius:4px}
.popup_call_1_0_0_content>div:nth-child(1) input{width:100%;margin-bottom:4px;font-size:14px;padding:15px 0;text-align:center;color:#333}
.popup_call_1_0_0_content>div:nth-child(1) select{width:100%;margin-bottom:5px;padding:5px 8px;background:#ddd;border:1px solid #adadad;color:#444;cursor:pointer}
.popup_call_1_0_0_content>div:nth-child(1) textarea{width:100%;font-family:arial;font-size:13px;margin-bottom:4px;resize:none;height:96px}
.popup_call_1_0_0_content>div:nth-child(2) input{width:100%;background:#00abe2;color:#fff;border:none;cursor:pointer;font-size:14px;margin-top:5px;border-radius:4px;text-transform:uppercase;padding:15px 0}
.popup_call_1_0_0_content>div:nth-child(2) input#pop_sent{font-weight:700}
.popup_call_1_0_0_clickPopup2{color:#fff;width:100px;height:20px;padding:10px;background-color:#6e2daa}
.popup_call_1_0_0_clickPopup2:hover{background-color:#00abe2;cursor:pointer}
@media (max-width: 414px) {
.popup_call_1_0_0{top:35px}
.popup_call_1_0_0_box{width:360px}
.popup_call_1_0_0_header-note{padding:10px 0}
.popup_call_1_0_0_logo{height:80px}
#popup_call_1_0_0_closePopup{top:10px;right:10px}
}
@media screen and (max-width: 375px) {
.popup_call_1_0_0{left:calc(50% - 175px)}
.popup_call_1_0_0_box{width:345px}
}
@media screen and (max-width: 360px) {
.popup_call_1_0_0{left:calc(50% - 165px)}
.popup_call_1_0_0_box{width:330px}
}
@media screen and (max-width: 320px) {
.popup_call_1_0_0{left:calc(50% - 150px)}
.popup_call_1_0_0_box{width:300px;width:300px;left:calc(50% - 150px)}
.popup_call_1_0_0 .pop_fr>div:nth-child(2) .sol p{margin:3px 0}
.popup_call_1_0_0 .pop_fr{padding:8px 10px 10px}
.popup_call_1_0_0 .pop_tt p{padding:2px 30px 14px;background:none}
.popup_call_1_0_0 .pop_fr>div:nth-child(2) .note{display:none}
.popup_call_1_0_0 .pop_fr>div:nth-child(1) textarea{height:70px}
}
</style>

<div id="popup_call_1_0_0_overlayClickform" class="popup_call_1_0_0" style="display:none">
    <div class="popup_call_1_0_0_box">
        <div class="popup_call_1_0_0_header">
            <div class="popup_call_1_0_0_logo"></div>
            <div class="popup_call_1_0_0_header-note">Nhập số điện thoại để được gọi tư vấn!</div>
        </div>
        <div class="popup_call_1_0_0_content">
            <div>
                <div style="display:none">
                    <input type="text" placeholder="Họ và tên (*)" value="Yêu Cầu Gọi Lại" id="iname" name="iname">
                    <textarea type="text" placeholder="Nhu cầu tư vấn" id="itext" name="itext"></textarea>
                    <input id="iemail" name="iemail" value="no@email.kangnambeauty.com" type="hidden"
                        placeholder="Email">
                    <input type="hidden" id="gclid_field" name="gclid_field" value="">
                    <input type="hidden" id="name_campaign" name="name_campaign" value="[Kangnam - Beauty] Yêu Cầu Gọi Lại">
                    <input type="hidden" id="code_campaign" name="code_campaign" value="582387664">
                </div>
                <input id="imob" name="imob" type="textbox" placeholder="Nhập số điện thoại của bạn*:">
            </div>
            <div>
                <input onclick="ants_sent_phone(this);" id="pop_sent" type="button" value="Yêu cầu tư vấn">
            </div>
        </div>
        <div class="popup_call_1_0_0_headerpc">
            <div class="popup_call_1_0_0_header-note">* Hoặc gọi ngay hotline <a href="tel:0019099998070">0019099998070</a></div>
        </div>
        <a id="popup_call_1_0_0_closePopup"></a>
    </div>
    <div class="popup_call_1_0_0_overlay" id="popup_call_1_0_0_overlay" style="display:none"></div>
</div>