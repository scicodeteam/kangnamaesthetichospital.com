<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module/Post/regist_1_0_1';

    include(locate_template("Module/Post/regist_1_0_1/css/regist_1_0_1_css.php"));
?>
<div class="regist_1_0_1">
    <div class="regist_1_0_1__tt font">Đặt lịch tư vấn cùng chuyên gia</div>
    <article>
        <div>
            <input id="iname" name="iname" type="textbox" placeholder="Họ tên*:">
            <input id="imob" name="imob" type="textbox" placeholder="Điện thoại*:">
            <input id="iemail" name="iemail" type="textbox" placeholder="Email:" style="display:none;">
            <textarea id="itext" type="hidden" name="itext" placeholder="Nhu cầu tư vấn" style="display:none"></textarea>
            <input type="hidden" id="gclid_field" name="gclid_field" value="">
            <input type="hidden" id="code_campaign" name="code_campaign" value="582387663">
            <input type="hidden" id="name_campaign" name="name_campaign" value="[Kangnam - Beauty] Tư Vấn">
        </div>
        <div>
            <input class="regist_1_0_1__Sent" onclick="ants_send_contact(this);" type="button" value="Đăng ký ngay">
            <div class="regist_1_0_1__note">tư vấn 24/7 hotline: 0019099998070</div>
        </div>
    </article>
</div>