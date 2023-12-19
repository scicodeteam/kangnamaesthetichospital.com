if (typeof jQuery == 'undefined') {
    var script = document.createElement('script');
    script.type = "text/javascript";
    script.src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js";
    var t = document.getElementsByTagName('script')[0];
    t.parentNode.insertBefore(script, t);
}

var ccp;
var ncp;
var first_url = document.URL;
var campaign;
var type_email;
var email_cc = "";
var _guid = "";


function getParam(p) {
    var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

function addToStorage(key, value) {
    var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 day expiry in milliseconds
    var expiryDate = new Date().getTime() + expiryPeriod;

    var record = { value: value, expiryDate: expiryDate };

    localStorage.setItem(key, JSON.stringify(record));
}

function storeGclid() {
    var gclidParam = getParam('gclid');

    if (gclidParam) {
        addToStorage('gclid', gclidParam);
    }
}

function addGclid() {
    storeGclid(); // store gclid param to localstorage

    var gclidFormFieldList = document.querySelectorAll('input[name="gclid_field"]');
    console.log(gclidFormFieldList);

    var currDate = new Date().getTime();

    var gclsrcParam = getParam('gclsrc');
    var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;


    var gclid = JSON.parse(localStorage.getItem('gclid'));
    var isGclidValid = gclid && currDate < gclid.expiryDate;

    if (gclidFormFieldList && isGclidValid && isGclsrcValid) {
        //   gclidFormField.value = gclid.value;
        for (let i = 0; i < gclidFormFieldList.length; i++) {
            gclidFormFieldList[i].value = gclid.value;
        }
    }
}

window.addEventListener('load', addGclid);

// Hàm xử lý form

function guid() {
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
        s4() + '-' + s4() + s4() + s4();
}

function s4() {
    return Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);
}

function ants_fn_CrossDomain() {
    var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
    var eventer = window[eventMethod];
    var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
    eventer(messageEvent, function(e) {
        if (typeof e == 'undefined') return;
        if (typeof e.data == 'undefined') return;
        var strlst = e.data.toString().split(",");
        if (strlst[0] != "postuser") return;
        var __userInfo = {
            name: "",
            phone: "",
            email: "",
            address: "",
            description: "",
            gender: "",
            birthday: "",
            socialId: 0,
            socialType: 0,
            app: 0,
            others: JSON.stringify([{ "field": "fromInfo", "value": "0", "label": "" }])
        };
        var strlst = e.data.split(",");
        __userInfo.name = strlst[1];
        __userInfo.phone = strlst[2];
        __userInfo.email = strlst[3];
        __userInfo.address = strlst[4];
        __userInfo.description = strlst[5];
        __userInfo.birthday = strlst[6];
        __userInfo.socialId = strlst[7];
        __userInfo.socialType = strlst[8];
        __userInfo.app = strlst[9];
        get_info(__userInfo);
    }, false);
}

var userInfo = {
    name: "",
    phone: "",
    email: "",
    address: "",
    description: "",
    gender: "",
    birthday: "",
    socialId: 0,
    socialType: 0,
    app: 0,
    others: JSON.stringify([{ "field": "fromInfo", "value": "0", "label": "" }])
};

function get_info(_userInfo) {
    $("input[name=iname]").val(_userInfo.name);
    $("input[name=iemail]").val(_userInfo.email);
    $("input[name=imob]").val(_userInfo.phone);
    $("input[name=itext]").val(_userInfo.description);
    userInfo = _userInfo;
}

function err_msg() {
    var btn = $('input[value="Đang xử lý ..."]');
    btn.val("Gửi liên hệ ngay");
    btn.css("background", "green");
    var main = btn.parent().parent();
    main.find("input").removeAttr("disabled");
    main.find("textarea").removeAttr("disabled");
    alert("Hệ thống đang bận, bạn vui lòng gửi lại liên hệ sau ít phút nữa!");
}
/* Check Số điện thoại */
function getValidNumber(value) {
    value = $.trim(value).replace(/\D/g, '');
    if (value.substring(0, 1) == '1') {
        value = value.substring(1);
    }
    if (value.length == 10) {
        return value;
    }
    return false;
}

function ants_send_contact(o) {
    var btn = $(o);
    try {
        //$(".guilienhe_tt ul").remove();
        _guid = guid();

        var main = btn.parent().parent().parent();
        var name = main.find("#iname").val().trim();
        var phone = main.find("#imob").val().trim();
        var email = main.find("#iemail").val().trim();
        var description = main.find("#itext").val();
        var ititle = main.find("#ititle").val();
        var icity = main.find("#icity").val();
        var isource = main.find("#isource").val();
        var itime = main.find("#itime").val();
        var idate = main.find(".idate").val();
        var fInfo_id = main.find("#form_info_id").val();
        var fInfo_name = main.find("#form_info_name").val();
        var gclid = main.find("#gclid_field").val();
        var code_campaign = main.find("#code_campaign").val();
        var name_campaign = main.find("#name_campaign").val();
        main.find("input").attr("disabled", "disabled");
        main.find("textarea").attr("disabled", "disabled");


        // Khai bao campaign
        var itype = main.find(".itype").val();
        if (typeof(code_campaign) == "undefined") {
            code_campaign = ccp;
        }
        if (typeof(name_campaign) == "undefined") {
            name_campaign = ncp;
        }

        console.log(code_campaign);
        console.log(name_campaign);
        if (typeof(description) == "undefined") {
            description = "";
        }

        if (typeof(ititle) != "undefined") {
            description = ititle + " " + description;
        }
        if (typeof(icity) != "undefined") {
            description = "Thành Phố: " + icity + " " + description;
        }

        if (typeof(idate) != "undefined") {
            description = description + " - Lich Goi Lai: " + idate;
        }

        if (typeof(itime) != "undefined" && itime != "0") {
            description = description + " : " + itime;
        }

        campaign = main.find("#frmcampaign").val();
        if (typeof(main.find("#frm_email").val()) != "undefined") {
            type_email = main.find("#frm_email").val();
        } else {
            type_email = "da";
        }
        if (typeof(main.find("#frm_cc").val()) != "undefined") {
            email_cc = main.find("#frm_cc").val();
        } else {
            email_cc = "";
        }

        var err = "";
        //validate
        if (name == "") {
            err += "<li>Tên không được bỏ trống</li>";
            main.find("#iname").attr("style", "border:1px solid red;");
        } else {
            main.find("#iname").removeAttr("style");
        }
        if (phone == "") {
            err += "<li>Điện thoại không được bỏ trống</li>";
            main.find("#imob").attr("style", "border:1px solid red;");
            // } else if (!getValidNumber(phone)) {
            //     err += "Bạn nhập sai số điện thoại";
            //     alert('Bạn nhập sai số điện thoại');
            // } else if (isNaN(phone)) {
            //     err += "<li>Điện thoại không đúng</li>";
            //     alert('Số điện thoại của bạn có ký tự');
            //     main.find("#imob").attr("style", "border:1px solid red;");
        } else {
            main.find("#imob").removeAttr("style");
        }

        if (err != "") {
            main.find("input").prop('disabled', false);
            main.find("textarea").prop('disabled', false);
            //$(".guilienhe_tt").append("<ul>" + err + "</ul>")
            return false;
        }

        btn.val("Đang xử lý ...");
        btn.css("background", "#ccc");


        var _antsInfoCustomTargetKey = [{
            field: 'fromInfo',
            value: fInfo_id,
            label: fInfo_name
        }, {
            field: 'GUID',
            value: _guid
        }];

        var _userInfo = {
            name: name,
            gclid: gclid,
            code_campaign: code_campaign,
            name_campaign: name_campaign,
            isource: isource,
            phone: phone,
            email: email,
            address: icity,
            description: description,
            gender: userInfo.gender,
            birthday: userInfo.birthday,
            socialId: userInfo.socialId,
            socialType: userInfo.socialType,
            app: userInfo.app,
            others: JSON.stringify(_antsInfoCustomTargetKey)
        };
        userInfo = _userInfo;
        // tracking goal 
        ants_callback_check = true;
        console.log(_userInfo);

        //add form cu neu sot code
        try {
            adx_analytic.trackingEvent('tup', userInfo, true, 519121938);
        } catch (ex) {

        }
        //add form moi
        try {
            admp_event.track('lead', 'register', {
                name: 'register lead',
                item: userInfo,
                goal_id: 519121938
            });
        } catch (ex) {

        }

        main.find("button").attr("disabled", "disabled");

        jQuery.get("https://ipinfo.io", function(response) {
            var name_location = response.city;
            console.log(name_location);
            $.ajax({
                type: "POST",
                dataType: "jsonp",
                jsonpCallback: false,
                url: "https://insight.scigroup.com.vn/form/insert",
                data: { my_pie: 3.14, form_id: 1, phone: phone, contact_name: name, referred: gclid, first_link: first_url, website: refer, code_campaign: code_campaign, name_campaign: name_campaign, name_location: name_location, email_from: email, description: description },
                success: function(data) {
                    console.log('oki');
                }
            });

        }, "jsonp");

        setTimeout(function() {
            window.top.location.href = "/dang-ky-thanh-cong?guid=" + _guid;
        }, 3000);

    } catch (ex) {
        btn.val("Loi: " + ex);
        adx_analytic.trackEvent('Error', 'error_send_form', { name: "Loi:" + ex }, true, true);
    }

}

function ants_sent_phone(o) {
    var btn = $(o);
    try {
        _guid = guid();

        var main = btn.parent().parent().parent();
        var name = main.find("#iname").val().trim();
        var phone = main.find("#imob").val().trim();
        var email = main.find("#iemail").val().trim();
        var description = main.find("#itext").val();
        var ititle = main.find("#ititle").val();
        var icity = main.find("#icity").val();
        var itime = main.find("#itime").val();
        var idate = main.find(".idate").val();
        var gclid = main.find("#gclid_field").val();
        var code_campaign = main.find("#code_campaign").val();
        var name_campaign = main.find("#name_campaign").val();
        var fInfo_id = main.find("#form_info_id").val();
        var fInfo_name = main.find("#form_info_name").val();

        main.find("input").attr("disabled", "disabled");
        main.find("textarea").attr("disabled", "disabled");

        if (typeof(ititle) != "undefined") {
            description = ititle + " " + description;
        }

        if (typeof(idate) != "undefined") {
            description = description + " - Lich Goi Lai: " + idate;
        }

        if (typeof(itime) != "undefined" && itime != "0") {
            description = description + " : " + itime;
        }

        campaign = main.find("#frmcampaign").val();
        if (typeof(main.find("#frm_email").val()) != "undefined") {
            type_email = main.find("#frm_email").val();
        } else {
            type_email = "da";
        }
        if (typeof(main.find("#frm_cc").val()) != "undefined") {
            email_cc = main.find("#frm_cc").val();
        } else {
            email_cc = "";
        }

        var err = "";
        //validate
        if (name == "") {
            err += "<li>Tên không được bỏ trống</li>";
            main.find("#iname").attr("style", "border:1px solid red;");
        } else {
            main.find("#iname").removeAttr("style");
        }
        if (phone == "") {
            err += "<li>Điện thoại không được bỏ trống</li>";
            main.find("#imob").attr("style", "border:1px solid red;");
        }
        // else if(!getValidNumber(phone)){
        //     err += "Bạn nhập sai số điện thoại";
        //     alert('Bạn nhập sai số điện thoại');
        // }
        // else if(isNaN(phone)){
        // 	err +="<li>Điện thoại không đúng</li>";
        // 	main.find("#imob").attr("style","border:1px solid red;");
        // }
        else {
            main.find("#imob").removeAttr("style");
        }

        if (err != "") {
            main.find("input").prop('disabled', false);
            main.find("textarea").prop('disabled', false);
            return false;
        }

        btn.val("Đang xử lý ...");
        btn.css("background", "#ccc");


        var _antsInfoCustomTargetKey = [{
            field: 'fromInfo',
            value: fInfo_id,
            label: fInfo_name
        }, {
            field: 'GUID',
            value: _guid
        }];

        var _userInfo = {
            name: name,
            phone: phone,
            email: email,
            address: icity,
            description: description,
            gender: userInfo.gender,
            birthday: userInfo.birthday,
            socialId: userInfo.socialId,
            socialType: userInfo.socialType,
            app: userInfo.app,
            others: JSON.stringify(_antsInfoCustomTargetKey)
        };
        userInfo = _userInfo;
        // tracking goal 
        ants_callback_check = true;
        console.log(_userInfo);

        //add form cu neu sot code
        try {
            adx_analytic.trackingEvent('tup', userInfo, true, 519121938);
        } catch (ex) {

        }
        //add form moi
        try {
            admp_event.track('lead', 'register', {
                name: 'register lead',
                item: userInfo,
                goal_id: 519121938
            });
        } catch (ex) {

        }

        $.ajax({
            type: "POST",
            dataType: "jsonp",
            jsonpCallback: false,
            url: "https://insight.scigroup.com.vn/form/insert",
            data: { my_pie: 3.14, form_id: 1, phone: phone, contact_name: name, referred: gclid, first_link: first_url, website: refer, code_campaign: code_campaign, name_campaign: name_campaign, email_from: email, description: description },
            success: function(data) {
                console.log('oki');
            }
        });

        setTimeout(function() {
            window.top.location.href = "/dang-ky-goi-thanh-cong?guid=" + _guid;

        }, 3000);

    } catch (ex) {
        btn.val("Loi: " + ex);
        adx_analytic.trackEvent('Error', 'error_send_form', { name: "Loi:" + ex }, true, true);
    }


}

function IsValidEmail(email) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return filter.test(email);
}

ants_fn_CrossDomain();