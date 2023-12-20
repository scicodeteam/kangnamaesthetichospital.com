const regist_kn_hn_1_0_0 = `
    <form class="regist_kn_hn_1_0_0" id="regist_kn_hn_1_0_0">
        <div class="regist_kn_hn_1_0_0__box">
            <div class="modal" id="modal-pop" style="display: flex;">
                <div class="modal-bg"></div>
                <div class="modal-box animate-zoom">
                    <div class="modal-header">
                        <div class="modal-close">×</div>
                        <div class="modal-title">
                            <div class="regist_kn_hn_1_0_0__hidden"></div>
                            <div class="regist_kn_hn_1_0_0__text">
                                <div class="regist_kn_hn_1_0_0__title">Hi! Welcome to Kangnam</div>
                                <div class="regist_kn_hn_1_0_0__desc">
                                    Please leave your information so Kangnam can send you a preferential quote!
                                </div>
                                <div class="regist_kn_hn_1_0_0__note">
                                    (Please leave one of the following contact information below)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <article>
                            <div class="fct">
                                <div style="display:none">
                                    <input id="iemail" name="iemail" type="textbox" placeholder="Email:">
                                    <input id="gclid_field" name="referred" value="">
                                    <input id="code_campaign" name="code_campaign" value="582387663">
                                    <input id="name_campaign" name="name_campaign" value="[Kangnam - Hải Ngoại EN] Tư Vấn">
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
                                    <div class="regist_kn_hn_1_0_0__name">
                                        <img width="48" height="48" src="https://kangnamaesthetichospital.com/en/wp-content/themes/thuonghieu_kangnam/Module/Popup/regist_kn_hn_1_0_0/images/icon-user.png" alt="">
                                        <input name="iname" type="text" placeholder="* Fullname: ">
                                    </div>
                                    <div class="form-message"></div>
                                </div>

                                <div class="regist_kn_hn_1_0_0__viber form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/en/wp-content/themes/thuonghieu_kangnam/Module/Popup/regist_kn_hn_1_0_0/images/icon-viber.png" alt="">
                                    <input onsubmit="return checkInp()" name="iviber" type="text"
                                        placeholder="* Viber:">
                                        <div class="form-message"></div>
                                </div>
                                <div class="regist_kn_hn_1_0_0__whatsapp form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/en/wp-content/themes/thuonghieu_kangnam/Module/Popup/regist_kn_hn_1_0_0/images/icon-whatsapp.png" alt="">
                                    <input onsubmit="return checkInp()" name="iwhatsapp" type="text"
                                        placeholder="* Whatsapp:">
                                        <div class="form-message"></div>

                                </div>
                                <div class="regist_kn_hn_1_0_0__zalo form-group">
                                    <img width="48" height="48" src="https://kangnamaesthetichospital.com/en/wp-content/themes/thuonghieu_kangnam/Module/Popup/regist_kn_hn_1_0_0/images/icon-zalo.png" alt="">
                                    <input onsubmit="return checkInp()" name="izalo" type="text"
                                        placeholder="* Zalo:">
                                        <div class="form-message"></div>
                                </div>

                            </div>
                            <div class="regist_kn_hn_1_0_0__noti">
                                <p>* We are committed to protecting custommer information</p>
                            </div>
                            <div class="regist_kn_hn_1_0_0__sub">
                                <input class="target fbt bmk submit_s" type="submit" value="REGISTER NOW">
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
`;
if (document.querySelectorAll(".kntv")) {
  const callregist_kn_hn_1_0_0 = document.querySelectorAll(".kntv");
  for (let i = 0; i < callregist_kn_hn_1_0_0.length; i++) {
    callregist_kn_hn_1_0_0[i].addEventListener("click", () => {
      document
        .getElementsByTagName("body")[0]
        .insertAdjacentHTML("beforeend", regist_kn_hn_1_0_0);
      // Call auto form
      autoInputForm();

      // Validate Form
      Validator({
        form: "#regist_kn_hn_1_0_0",
        errorSelector: ".form-message",
        formGroupSelector: ".form-group",
        rules: [
          Validator.isRequired('input[name="iname"]', 'Please enter this field!'),
          Validator.addInput("#regist_kn_hn_1_0_0 #imob", () => {
            if (
              document.querySelector('#regist_kn_hn_1_0_0 input[name="iviber"]')
                .value
            ) {
              return document.querySelector(
                '#regist_kn_hn_1_0_0 input[name="iviber"]'
              ).value;
            } else if (
              document.querySelector(
                '#regist_kn_hn_1_0_0 input[name="iwhatsapp"]'
              ).value
            ) {
              return document.querySelector(
                '#regist_kn_hn_1_0_0 input[name="iwhatsapp"]'
              ).value;
            } else if (
              document.querySelector('#regist_kn_hn_1_0_0 input[name="izalo"]')
                .value
            ) {
              return document.querySelector(
                '#regist_kn_hn_1_0_0 input[name="izalo"]'
              ).value;
            }
          }),
          Validator.addInput("#regist_kn_hn_1_0_0 #itext", () => {
            return (
              "Viber : " +
              document.querySelector('#regist_kn_hn_1_0_0 input[name="iviber"]')
                .value +
              " - Whatsapp : " +
              document.querySelector(
                '#regist_kn_hn_1_0_0 input[name="iwhatsapp"]'
              ).value +
              " - Zalo : " +
              document.querySelector('#regist_kn_hn_1_0_0 input[name="izalo"]')
                .value
            );
          }),
        ],
        onSubmit: function (data) {
          sendFormregist_kn_hn_1_0_0(data);
        },
      });
      //Call Function Close Form
      closeFormregist_kn_hn_1_0_0();
    });
  }
}

// Send Form to API
function sendFormregist_kn_hn_1_0_0(data) {
  if (
    document.querySelector('#regist_kn_hn_1_0_0 input[name="iviber"]').value ||
    document.querySelector('#regist_kn_hn_1_0_0 input[name="iwhatsapp"]')
      .value ||
    document.querySelector('#regist_kn_hn_1_0_0 input[name="izalo"]').value
  ) {
    phoneRemoveErrorregist_kn_hn_1_0_0();
    regist_kn_hn_1_0_0__hideForm();
    // console.log(data);
    sendForm(data, "/en/dang-ky-thanh-cong");
  } else {
    // Call Function Error Phone
    phoneErrorregist_kn_hn_1_0_0();
  }
}

// Auto Input Form
function autoInputForm() {
  document.querySelector('.regist_kn_hn_1_0_0 input[name="first_link"]').value =
    document.URL;
  document.querySelector('.regist_kn_hn_1_0_0 input[name="website"]').value =
    document.referrer;
  getLocation().then((data) => {
    document.querySelector('.regist_kn_hn_1_0_0 input[name="location"]').value =
      data.city;
  });
}
// Function Error Phone
function phoneErrorregist_kn_hn_1_0_0() {
  alert("Please enter at least one phone number");
  document.querySelector(
    ".regist_kn_hn_1_0_0 .regist_kn_hn_1_0_0__viber"
  ).style.border = "1px solid red";
  document.querySelector(
    ".regist_kn_hn_1_0_0 .regist_kn_hn_1_0_0__whatsapp"
  ).style.border = "1px solid red";
  document.querySelector(
    ".regist_kn_hn_1_0_0 .regist_kn_hn_1_0_0__zalo"
  ).style.border = "1px solid red";
}
// Function Remove Error Phone
function phoneRemoveErrorregist_kn_hn_1_0_0() {
  document.querySelector(
    ".regist_kn_hn_1_0_0 .regist_kn_hn_1_0_0__viber"
  ).style.border = "";
  document.querySelector(
    ".regist_kn_hn_1_0_0 .regist_kn_hn_1_0_0__whatsapp"
  ).style.border = "";
  document.querySelector(
    ".regist_kn_hn_1_0_0 .regist_kn_hn_1_0_0__zalo"
  ).style.border = "";
}

// Logic xử lý đóng form
function closeFormregist_kn_hn_1_0_0() {
  document
    .querySelector(".regist_kn_hn_1_0_0 .modal-close")
    .addEventListener("click", () => {
      regist_kn_hn_1_0_0__closeForm();
    });
  document
    .querySelector(".regist_kn_hn_1_0_0 .modal-bg")
    .addEventListener("click", () => {
      regist_kn_hn_1_0_0__closeForm();
    });
}

// Hide Form
function regist_kn_hn_1_0_0__closeForm() {
  document.querySelector(".regist_kn_hn_1_0_0").remove();
}
function regist_kn_hn_1_0_0__hideForm() {
  document.querySelector(".regist_kn_hn_1_0_0").style.display = "none";
}
