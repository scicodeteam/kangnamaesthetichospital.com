const regist_kn_hn_1_0_1 = `
    <form class="regist_kn_hn_1_0_1" id="regist_kn_hn_1_0_1">
        <div class="regist_kn_hn_1_0_1__box">
            <div class="modal" id="modal-pop" style="display: flex;">
                <div class="modal-bg"></div>
                <div class="modal-box animate-zoom">
                    <div class="modal-header">
                        <div class="modal-close">×</div>
                        <div class="modal-title">
                            <div class="regist_kn_hn_1_0_1__hidden"></div>
                            <div class="regist_kn_hn_1_0_1__text">
                                <div class="regist_kn_hn_1_0_1__title">Xin chào Quý khách !</div>
                                <div class="regist_kn_hn_1_0_1__desc">
                                    Quý khách vui lòng để lại thông tin để Kangnam tư vấn chi tiết về dịch
                                    vụ giúp bạn!
                                </div>
                                <div class="regist_kn_hn_1_0_1__note">
                                    (Quý khách để lại một trong số các thông tin liên hệ dưới đây)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <article>
                            <div class="fct">
                                <div style="display:none">
                                    <input id="imob" name="imob" value="">
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
                                    <div class="regist_kn_hn_1_0_1__name">
                                        <img width="48" height="48" src="https://kangnamaesthetichospital.com/wp-content/themes/thuonghieu_kangnam/Module/Popup/regist_kn_hn_1_0_1/images/icon-user.png" alt="">
                                        <input name="iname" type="text" placeholder="* Họ và tên: ">
                                    </div>
                                    <div class="form-message"></div>
                                </div>

                                <div class="regist_kn_hn_1_0_1__viber form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/wp-content/themes/thuonghieu_kangnam/Module/Popup/regist_kn_hn_1_0_1/images/icon-viber.png" alt="">
                                    <input onsubmit="return checkInp()" name="iviber" type="text"
                                        placeholder="* Viber:">
                                        <div class="form-message"></div>
                                </div>
                                <div class="regist_kn_hn_1_0_1__whatsapp form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/wp-content/themes/thuonghieu_kangnam/Module/Popup/regist_kn_hn_1_0_1/images/icon-whatsapp.png" alt="">
                                    <input onsubmit="return checkInp()" name="iwhatsapp" type="text"
                                        placeholder="* Whatsapp:">
                                        <div class="form-message"></div>

                                </div>
                                <div class="regist_kn_hn_1_0_1__zalo form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/wp-content/themes/thuonghieu_kangnam/Module/Popup/regist_kn_hn_1_0_1/images/icon-zalo.png" alt="">
                                    <input onsubmit="return checkInp()" name="izalo" type="text"
                                        placeholder="* Zalo:">
                                        <div class="form-message"></div>
                                </div>

                            </div>
                            <div class="regist_kn_hn_1_0_1__noti">
                                <p>* Cam kết bảo mật thông tin khách hàng</p>
                            </div>
                            <div class="regist_kn_hn_1_0_1__sub">
                                <input class="target fbt bmk submit_s" type="submit" value="ĐĂNG KÝ NGAY">
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
`;
if (document.querySelectorAll(".knkm")) {
  const callregist_kn_hn_1_0_1 = document.querySelectorAll(".knkm");
  for (let i = 0; i < callregist_kn_hn_1_0_1.length; i++) {
    callregist_kn_hn_1_0_1[i].addEventListener("click", () => {
      document
        .getElementsByTagName("body")[0]
        .insertAdjacentHTML("beforeend", regist_kn_hn_1_0_1);
      // Call auto form
      autoInputForm();

      // Validate Form
      Validator({
        form: "#regist_kn_hn_1_0_1",
        errorSelector: ".form-message",
        formGroupSelector: ".form-group",
        rules: [
          Validator.isRequired('input[name="iname"]'),
          Validator.addInput("#regist_kn_hn_1_0_1 #imob", () => {
            if (
              document.querySelector('#regist_kn_hn_1_0_1 input[name="iviber"]')
                .value
            ) {
              return document.querySelector(
                '#regist_kn_hn_1_0_1 input[name="iviber"]'
              ).value;
            } else if (
              document.querySelector(
                '#regist_kn_hn_1_0_1 input[name="iwhatsapp"]'
              ).value
            ) {
              return document.querySelector(
                '#regist_kn_hn_1_0_1 input[name="iwhatsapp"]'
              ).value;
            } else if (
              document.querySelector('#regist_kn_hn_1_0_1 input[name="izalo"]')
                .value
            ) {
              return document.querySelector(
                '#regist_kn_hn_1_0_1 input[name="izalo"]'
              ).value;
            }
          }),
          Validator.addInput("#regist_kn_hn_1_0_1 #itext", () => {
            return (
              "Viber : " +
              document.querySelector('#regist_kn_hn_1_0_1 input[name="iviber"]')
                .value +
              " - Whatsapp : " +
              document.querySelector(
                '#regist_kn_hn_1_0_1 input[name="iwhatsapp"]'
              ).value +
              " - Zalo : " +
              document.querySelector('#regist_kn_hn_1_0_1 input[name="izalo"]')
                .value
            );
          }),
        ],
        onSubmit: function (data) {
          sendFormregist_kn_hn_1_0_1(data);
        },
      });
      //Call Function Close Form
      closeFormregist_kn_hn_1_0_1();
    });
  }
}

// Send Form to API
function sendFormregist_kn_hn_1_0_1(data) {
  if (
    document.querySelector('#regist_kn_hn_1_0_1 input[name="iviber"]').value ||
    document.querySelector('#regist_kn_hn_1_0_1 input[name="iwhatsapp"]')
      .value ||
    document.querySelector('#regist_kn_hn_1_0_1 input[name="izalo"]').value
  ) {
    phoneRemoveErrorregist_kn_hn_1_0_1();
    regist_kn_hn_1_0_1__hideForm();
    // console.log(data);
    sendForm(data, "/dang-ky-thanh-cong");
  } else {
    // Call Function Error Phone
    phoneErrorregist_kn_hn_1_0_1();
  }
}

// Auto Input Form
function autoInputForm() {
  document.querySelector('.regist_kn_hn_1_0_1 input[name="first_link"]').value =
    document.URL;
  document.querySelector('.regist_kn_hn_1_0_1 input[name="website"]').value =
    document.referrer;
  getLocation().then((data) => {
    document.querySelector('.regist_kn_hn_1_0_1 input[name="location"]').value =
      data.city;
  });
}
// Function Error Phone
function phoneErrorregist_kn_hn_1_0_1() {
  alert("Bạn hãy nhập ít nhất một số điện thoại");
  document.querySelector(
    ".regist_kn_hn_1_0_1 .regist_kn_hn_1_0_1__viber"
  ).style.border = "1px solid red";
  document.querySelector(
    ".regist_kn_hn_1_0_1 .regist_kn_hn_1_0_1__whatsapp"
  ).style.border = "1px solid red";
  document.querySelector(
    ".regist_kn_hn_1_0_1 .regist_kn_hn_1_0_1__zalo"
  ).style.border = "1px solid red";
}
// Function Remove Error Phone
function phoneRemoveErrorregist_kn_hn_1_0_1() {
  document.querySelector(
    ".regist_kn_hn_1_0_1 .regist_kn_hn_1_0_1__viber"
  ).style.border = "";
  document.querySelector(
    ".regist_kn_hn_1_0_1 .regist_kn_hn_1_0_1__whatsapp"
  ).style.border = "";
  document.querySelector(
    ".regist_kn_hn_1_0_1 .regist_kn_hn_1_0_1__zalo"
  ).style.border = "";
}

// Logic xử lý đóng form
function closeFormregist_kn_hn_1_0_1() {
  document
    .querySelector(".regist_kn_hn_1_0_1 .modal-close")
    .addEventListener("click", () => {
      regist_kn_hn_1_0_1__closeForm();
    });
  document
    .querySelector(".regist_kn_hn_1_0_1 .modal-bg")
    .addEventListener("click", () => {
      regist_kn_hn_1_0_1__closeForm();
    });
}

// Hide Form
function regist_kn_hn_1_0_1__closeForm() {
  document.querySelector(".regist_kn_hn_1_0_1").remove();
}
function regist_kn_hn_1_0_1__hideForm() {
  document.querySelector(".regist_kn_hn_1_0_1").style.display = "none";
}
