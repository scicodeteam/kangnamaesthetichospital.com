const pop_formreg_1_2_0 = `
    <form class="pop_formreg_1_2_0" id="pop_formreg_1_2_0">
        <div class="pop_formreg_1_2_0__box">
            <div class="modal" id="modal-pop" style="display: flex;">
                <div class="modal-bg"></div>
                <div class="modal-box animate-zoom">
                    <div class="modal-header">
                        <div class="modal-close">×</div>
                        <div class="modal-title">
                            <img class="logo" src="https://kangnamaesthetichospital.com/css/lib/images/logo-kn-white.svg" alt="">
                            <div class="pop_formreg_1_2_0__des">
                                <p>Nhận tư vấn</p>
                                <i>(Để lại số đăng ký 1 trong các app sau)</i>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <article>
                            <div class="fct">
                                <div style="display:none">
                                    <input id="iemail" name="iemail" type="textbox" placeholder="Email:">
                                    <input id="gclid_field" name="referred" value="">
                                    <input id="code_campaign" name="code_campaign" value="582387659">
                                    <input id="name_campaign" name="name_campaign" value="[Kangnam - Hải Ngoại] Tư Vấn">
                                    <input id="first_link" name="first_link" value="">
                                    <input id="website" name="website" value="">
                                    <input id="location" name="location" value="">
                                </div>
                                <div class="form-group" style="display:none">
                                    <input id="imob" name="imob" type="textbox" placeholder="Số điện thoại">
                                    <div class="form-message"></div>
                                </div>   
                                <div class="form-group" style="display:none">
                                    <input id="itext" name="itext" type="textbox" placeholder="Ghi chú">
                                    <div class="form-message"></div>
                                </div>   
                                <div class="form-group">
                                    <div class="pop_formreg_1_2_0__name">
                                        <img width="48" height="48" src="https://kangnamaesthetichospital.com/wp-content/themes/thuonghieu_kangnam/Module/Popup/pop_formreg_1_2_0/images/user.svg" alt="">
                                        <input name="iname" type="text" placeholder="* Tên:......................">
                                    </div>
                                    <div class="form-message"></div>
                                </div>

                                <div class="pop_formreg_1_2_0__viber form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/wp-content/themes/thuonghieu_kangnam/Module/Popup/pop_formreg_1_2_0/images/icons8-viber.svg" alt="">
                                    <input onsubmit="return checkInp()" name="iviber" type="number"
                                        placeholder="* Viber:......................">
                                        <div class="form-message"></div>
                                </div>
                                <div class="pop_formreg_1_2_0__whatsapp form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/wp-content/themes/thuonghieu_kangnam/Module/Popup/pop_formreg_1_2_0/images/icons8-whatsapp.svg" alt="">
                                    <input onsubmit="return checkInp()" name="iwhatsapp" type="number"
                                        placeholder="* Whatsapp:......................">
                                        <div class="form-message"></div>

                                </div>
                                <div class="pop_formreg_1_2_0__zalo form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/wp-content/themes/thuonghieu_kangnam/Module/Popup/pop_formreg_1_2_0/images/icons8-zalo.svg" alt="">
                                    <input onsubmit="return checkInp()" name="izalo" type="number"
                                        placeholder="* Zalo:......................">
                                        <div class="form-message"></div>
                                </div>
                            </div>
                            <div class="pop_formreg_1_2_0__sub">
                                <input class="target fbt bmk submit_s" type="submit" value="ĐĂNG KÝ NGAY">
                                <p>(Chúng tôi sẽ kết nối và chat với bạn)</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
`;
if(document.querySelectorAll(".kntv")){
    const callpop_formreg_1_2_0 = document.querySelectorAll(".kntv");
    for (let i = 0; i < callpop_formreg_1_2_0.length; i++) {
        callpop_formreg_1_2_0[i].addEventListener('click', () => {
            document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", pop_formreg_1_2_0);
            // Call auto form
            autoInputForm();

            // Validate Form
            Validator({
                form: '#pop_formreg_1_2_0',
                errorSelector: '.form-message',
                formGroupSelector: '.form-group',
                rules: [
                    Validator.isRequired('input[name="iname"]'),
                    Validator.addInput('#pop_formreg_1_2_0 #imob', () => {
                        if (document.querySelector('#pop_formreg_1_2_0 input[name="iviber"]').value){
                            return document.querySelector('#pop_formreg_1_2_0 input[name="iviber"]').value;
                        } else if (document.querySelector('#pop_formreg_1_2_0 input[name="iwhatsapp"]').value) {
                            return document.querySelector('#pop_formreg_1_2_0 input[name="iwhatsapp"]').value;
                        } else if (document.querySelector('#pop_formreg_1_2_0 input[name="izalo"]').value) {
                            return document.querySelector('#pop_formreg_1_2_0 input[name="izalo"]').value
                        }
                    }),
                    Validator.addInput('#pop_formreg_1_2_0 #itext', () => {
                        return (
                            'Viber : ' + document.querySelector('#pop_formreg_1_2_0 input[name="iviber"]').value + 
                            ' - Whatsapp : ' + document.querySelector('#pop_formreg_1_2_0 input[name="iwhatsapp"]').value + 
                            ' - Zalo : ' + document.querySelector('#pop_formreg_1_2_0 input[name="izalo"]').value
                        );
                    }),
                ],
                onSubmit: function (data) {
                    sendFormpop_formreg_1_2_0(data);
                }
            });
            //Call Function Close Form
            closeFormpop_formreg_1_2_0()
        })
    }
}

// Send Form to API
function sendFormpop_formreg_1_2_0(data){
    if(
        document.querySelector('#pop_formreg_1_2_0 input[name="iviber"]').value ||
        document.querySelector('#pop_formreg_1_2_0 input[name="iwhatsapp"]').value ||
        document.querySelector('#pop_formreg_1_2_0 input[name="izalo"]').value
    ){
        phoneRemoveErrorpop_formreg_1_2_0();
        pop_formreg_1_2_0__hideForm();
        // console.log(data);
        sendForm(data, '/dang-ky-thanh-cong');             
    } else{
        // Call Function Error Phone
        phoneErrorpop_formreg_1_2_0();
    }
}

// Auto Input Form
function autoInputForm(){
    document.querySelector('.pop_formreg_1_2_0 input[name="first_link"]').value = document.URL;
    document.querySelector('.pop_formreg_1_2_0 input[name="website"]').value = document.referrer;
    getLocation().then((data) => {
        document.querySelector('.pop_formreg_1_2_0 input[name="location"]').value = data.city;            
    });
}
// Function Error Phone
function phoneErrorpop_formreg_1_2_0(){
    alert('Bạn hãy nhập ít nhất một số điện thoại');
    document.querySelector('.pop_formreg_1_2_0 .pop_formreg_1_2_0__viber').style.border = '1px solid red';
    document.querySelector('.pop_formreg_1_2_0 .pop_formreg_1_2_0__whatsapp').style.border = '1px solid red';
    document.querySelector('.pop_formreg_1_2_0 .pop_formreg_1_2_0__zalo').style.border = '1px solid red';
}
// Function Remove Error Phone
function phoneRemoveErrorpop_formreg_1_2_0(){
    document.querySelector('.pop_formreg_1_2_0 .pop_formreg_1_2_0__viber').style.border = '';
    document.querySelector('.pop_formreg_1_2_0 .pop_formreg_1_2_0__whatsapp').style.border = '';
    document.querySelector('.pop_formreg_1_2_0 .pop_formreg_1_2_0__zalo').style.border = '';
}

// Logic xử lý đóng form
function closeFormpop_formreg_1_2_0(){
    document.querySelector('.pop_formreg_1_2_0 .modal-close').addEventListener('click', () => {
        pop_formreg_1_2_0__closeForm()
    });
    document.querySelector('.pop_formreg_1_2_0 .modal-bg').addEventListener('click', () => {
        pop_formreg_1_2_0__closeForm()
    });
   
}

// Hide Form
function pop_formreg_1_2_0__closeForm(){
    document.querySelector('.pop_formreg_1_2_0').remove();        
}
function pop_formreg_1_2_0__hideForm(){
    document.querySelector('.pop_formreg_1_2_0').style.display = 'none';       
}


