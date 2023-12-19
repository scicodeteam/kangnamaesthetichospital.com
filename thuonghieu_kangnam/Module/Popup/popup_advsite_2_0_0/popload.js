function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}



//add html
var _domain = location.host;

var pop_brand = '%3Cdiv%20id%3D%22modal01%22%20style%3D%22display%3Anone%22%20class%3D%22pop-modal%22%20onclick%3D%22this.style.display%3D%27none%27%22%20%3E%0A%20%20%20%20%3Cdiv%20class%3D%22pop-modal-content%20pop-animate-zoom%20popBox%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cspan%20class%3D%22closeBox%22%3E%26times%3B%3C/span%3E%0A%20%20%20%20%3Ca%20href%3D%22%23%22%3E%3Cimg%20id%3D%22img01%22%20style%3D%22width%3A100%25%22%20src%3D%22https%3A//nhakhoaparis.vn/wp-content/uploads/2018/03/31/%255E43804E5F3A36587E29AC0A7C9428616D69047EC61637CA7DE7%255Epimgpsh_fullsize_distr.jpg%22%3E%3C/a%3E%0A%20%20%3C/div%3E%0A%3C/div%3E';

var pop_cookie = getCookie('popup');
if (pop_cookie != 1) {
    setCookie('popup', 1);
    console.log('Hiện');
    var pop_service = '%3Cdiv%20id%3D%22modal01%22%20class%3D%22pop-modal%20open%22%20onclick%3D%22this.style.display%3D%27none%27%22%20%3E%0A%20%20%20%20%3Cdiv%20class%3D%22pop-modal-content%20pop-animate-zoom%20popBox%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cspan%20class%3D%22closeBox%22%3E%26times%3B%3C/span%3E%0A%20%20%20%20%3Ca%20target%3D%22_blank%22%20href%3D%22https%3A//nhakhoaparis.vn/khuyen-mai/tham-my-rang-tieu-chuan-phap.html/%22%3E%3Cimg%20id%3D%22img01%22%20style%3D%22width%3A100%25%22%20src%3D%22https%3A//quangcao247.com.vn/nhakhoa/popload/600x400.jpg%22%3E%3C/a%3E%0A%20%20%3C/div%3E%0A%3C/div%3E';
} else {
    console.log('Tắt');
    var pop_service = '%3Cdiv%20id%3D%22modal01%22%20class%3D%22pop-modal%22%20onclick%3D%22this.style.display%3D%27none%27%22%20%3E%0A%20%20%20%20%3Cdiv%20class%3D%22pop-modal-content%20pop-animate-zoom%20popBox%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cspan%20class%3D%22closeBox%22%3E%26times%3B%3C/span%3E%0A%20%20%20%20%3Ca%20target%3D%22_blank%22%20href%3D%22https%3A//nhakhoaparis.vn/khuyen-mai/tham-my-rang-tieu-chuan-phap.html/%22%3E%3Cimg%20id%3D%22img01%22%20style%3D%22width%3A100%25%22%20src%3D%22https%3A//quangcao247.com.vn/nhakhoa/popload/600x400.jpg%22%3E%3C/a%3E%0A%20%20%3C/div%3E%0A%3C/div%3E';
}

// add file css after Document Load

function importstylefile() {

    var linkfile = document.createElement("link");

    var scriptfile = document.createElement("script");

    if (_domain.indexOf('nhorangaa.com.vn') > -1 || _domain.indexOf('viendieutrinam.vn') > -1) {

        linkfile.href = "https://quangcao247.com.vn/nhakhoa/popload/popload.css";

        $(document).ready(function() {

            // $(".address .container").append('<div class="hoa"></div>');

            console.log('ok123');
            $("body").append(unescape(pop_service));

        });

    } else {

        linkfile.href = "https://quangcao247.com.vn/nhakhoa/popload/popload.css";

        scriptfile.src = 'https://quangcao247.com.vn/donga/jquery.min.js';

        $(document).ready(function() {

            $("body").append(unescape(pop_service));

        })

        // document.write(unescape(pop_service));

    }

    linkfile.rel = "stylesheet";
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.src = "https://quangcao247.com.vn/donga/jquery.min.js";
    var head = document.getElementsByTagName("head")[0];

    head.appendChild(linkfile);

}



function load() {

    if (_domain.indexOf('thammyviendonga.vn') > -1 || _domain.indexOf('viendieutrinam.vn') > -1) {

        $(document).ready(function() {

            importstylefile();

        });

    } else {

        jQuery(document).ready(function() {

            importstylefile();

        });

    }

}

load();