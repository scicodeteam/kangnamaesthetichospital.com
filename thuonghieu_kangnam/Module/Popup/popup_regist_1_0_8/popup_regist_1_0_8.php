<?php
  $path = get_template_directory_uri();
  $path = $path.'/Module/Popup/popup_regist_1_0_8/';
?>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {

    const notiprice = document.getElementsByClassName("notiprice");
    const popup_regist_1_0_8_overlayClickForm = document.getElementById("popup_regist_1_0_8_overlayClickForm");
    const popup_regist_1_0_8_overlay = document.getElementById("popup_regist_1_0_8_overlay");
    const close_form = document.getElementById("close-form");

    for (const regist of notiprice) {
        regist.addEventListener("click", function() {
            popup_regist_1_0_8_overlayClickForm.style.display = "block";
            popup_regist_1_0_8_overlay.style.display = "block";
        });
    }

    close_form.addEventListener("click", function() {
        popup_regist_1_0_8_overlayClickForm.style.display = "none";
        popup_regist_1_0_8_overlay.style.display = "none";
    });

    popup_regist_1_0_8_overlay.addEventListener("click", function() {
        popup_regist_1_0_8_overlayClickForm.style.display = "none";
        popup_regist_1_0_8_overlay.style.display = "none";
    });

});
</script>

<style>
.popup_regist_1_0_8 {
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    font-size: 14px;
    position: fixed;
    width: 100%;
    height:100%;
    top: 0;
    padding: 10px;
    z-index: 12;
    overflow-y: auto;
}

.popup_regist_1_0_8 input,
.popup_regist_1_0_8 textarea {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}

.popup_regist_1_0_8_overlay {
    background: rgba(0, 0, 0, 0.9);
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 10;
    opacity: 0.7;
}

.popup_regist_1_0_8__form {
    padding-bottom: 20px;
    border-bottom: 1px solid #ccc;
    z-index: 12;
    background-color: #fff;
    width: 450px;
    margin: 100px auto 0;
    position: relative;
}

.popup_regist_1_0_8 #close-form {
    cursor: pointer;
}

.popup_regist_1_0_8 .title {
    margin: 0;
    background: #0E4F82;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 17px;
    padding: 10px 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.popup_regist_1_0_8 .title b {
    font-size: 10px;
    padding: 10px;
}

.popup_regist_1_0_8 span {
    padding: 10px 15px;
    display: block;
    color: #000;
}

.popup_regist_1_0_8 hr {
    border-top: 2px solid #9c9c9c;
    margin: 10px 15px;
}

.popup_regist_1_0_8 article {
    margin: 20px 15px;
}

.popup_regist_1_0_8 article>div {
    margin-bottom: 10px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

.popup_regist_1_0_8 article>div label {
    width: 40%;
    color: #000;
}

.popup_regist_1_0_8 article>div input {
    width: 60%;
    border-radius: 5px;
    outline: none;
    border: 1px solid #707070;
    padding: 5px 10px;
}

.popup_regist_1_0_8 article>div select {
    width: 60%;
    border-radius: 5px;
    outline: none;
    border: 1px solid #707070;
    padding: 5px 10px;
}

.popup_regist_1_0_8 .reg {
    text-align: center;
}

.popup_regist_1_0_8 .reg input {
    color: #ffffff;
    background: #f26649;
    border: 1px solid #ffffff;
    outline: none;
    border-radius: 5px;
    padding: 5px 40px;
    font-weight: 600;
    cursor: pointer;
}

@media (max-width: 414px) {   
    .popup_regist_1_0_8__form{
        width: 100%;
        margin-top:65px;
    } 
    .popup_regist_1_0_8 .title {
        font-size: 16px;
        padding: 10px 8px;
    }

    .popup_regist_1_0_8 .title img {
        width: 115px;
    }
}

@media (max-width: 375px) {
    .popup_regist_1_0_8 .title {
        font-size: 14px;
    }

    .popup_regist_1_0_8 .title img {
        width: 100px;
    }
}

@media (max-width: 360px) {
    .popup_regist_1_0_8 .title {
        font-size: 17px;
    }
}

@media (max-width: 320px) {

    .pop_tt p {
        padding: 2px 30px 14px;
        background: none;
    }

    .popup_regist_1_0_8 .title {
        font-size: 13px;
    }

    .popup_regist_1_0_8 .title img {
        width: 90px;
    }
}
</style>

<div class="popup_regist_1_0_8" id="popup_regist_1_0_8_overlayClickForm" style="display:none">
    <div class="popup_regist_1_0_8_overlay" id="popup_regist_1_0_8_overlay" style="display:none"></div>
    <div class="popup_regist_1_0_8__form">
        <div class="title">
            <img width="130" height="auto" src="<?php echo $path; ?>/images/logo.png" alt="Logo Kangnam">
            Nhận báo giá thẩm mỹ
            <b id="close-form">╳</b>
        </div>
        <span>* Để lại thắc mắc về chi phí, Kangnam liên hệ giải đáp cho bạn</span>
        <hr>
        <article>
            <div>
                <label>* Tên:</label>
                <input id="iname" name="iname" type="textbox" required>
            </div>
            <div>
                <label>* Số điện thoại:</label>
                <input id="imob" name="imob" type="textbox" required>
            </div>
            <div>
                <label>* Dịch vụ quan tâm:</label>
                <select name="icity" id="icity">
                    <option value="- Chọn -">--- Chọn ---</option>
                    <option value="Cắt mí - Bấm mí">Cắt mí - Bấm mí</option>
                    <option value="Nâng mũi">Nâng mũi</option>
                    <option value="Nâng ngực">Nâng ngực</option>
                    <option value="Giảm mỡ">Giảm mỡ</option>
                    <option value="Hàm mặt">Hàm mặt</option>
                    <option value="Tạo hình môi">Tạo hình môi</option>
                    <option value="Phun xăm">Phun xăm</option>
                    <option value="Trị nám - Tàn nhang">Trị nám - Tàn nhang</option>
                    <option value="Trị mụn - Mụn thịt">Trị mụn - Mụn thịt</option>
                    <option value="Căng da - Cấy mỡ">Căng da - Cấy mỡ</option>
                    <option value="Thẩm mỹ khác">Thẩm mỹ khác</option>
                </select>
            </div>
            <input type="hidden" style="display:none" id="iemail" name="iemail" type="textbox"
                placeholder="Email:">
            <!-- <textarea id="itext" type="hidden" name="itext" value="" placeholder="Dịch vụ quan tâm"></textarea> -->
            <input type="hidden" id="gclid_field" name="gclid_field" value="">
            <input type="hidden" id="code_campaign" name="code_campaign" value="583971142">
            <input type="hidden" id="name_campaign" name="name_campaign" value="[Kangnam] Sale Kangnam">
        </article>
        <div class="reg">
            <input id="popup_regist_1_0_2_clickSent" onclick="ants_send_contact(this);" type="button" value="HOÀN THÀNH">
        </div>
    </div>
</div>