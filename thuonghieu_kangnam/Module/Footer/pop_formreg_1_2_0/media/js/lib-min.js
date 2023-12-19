document.addEventListener("DOMContentLoaded", (function() { var e = document.getElementsByClassName("accordions-title"); for (t = 0; t < e.length; t++) e[t].addEventListener("click", (function() { this.classList.toggle("active"); var e = this.nextElementSibling;
        e.style.maxHeight ? e.style.maxHeight = null : e.style.maxHeight = e.scrollHeight + "px" })); var t;
    e = document.getElementsByClassName("accordions_lv-title"); for (t = 0; t < e.length; t++) e[t].addEventListener("click", (function() { this.classList.toggle("active"); var e = this.nextElementSibling; "block" === e.style.display ? e.style.display = "none" : e.style.display = "block" })); let l = document.querySelectorAll("ul.tabs li");
    document.querySelectorAll("ul.tabs li.tab-link"); for (let e of l) e.addEventListener("click", (t => { let l = e.getAttribute("data-tab"),
            n = e.parentElement.children; for (let e of n) e.classList.remove("current"); let o = e.parentElement.parentElement.children; for (let e of o) e.classList.remove("current"); let c = document.getElementById(l);
        e.classList.add("current"), c.classList.add("current") })); const n = document.querySelectorAll(".tabs .tab"); for (let e of n) e.addEventListener("click", (t => { let l = t.target.parentElement.children; for (let e of l) e.classList.remove("active");
        e.classList.add("active") })); const o = document.querySelectorAll(".tabs .tab img"); for (let e of o) e.addEventListener("click", (t => { let l = t.target.parentElement.parentElement.children; for (let e of l) e.classList.remove("active");
        e.classList.add("active") })); let c = document.getElementsByClassName("modal-btn"),
        s = document.getElementsByClassName("modal"),
        a = document.getElementsByClassName("modal-close"),
        i = document.getElementsByClassName("modal-closePic"),
        r = document.getElementsByClassName("modal-bg"); for (let e = 0; e < c.length; e++)
        for (let t = 0; t < s.length; t++) { let l = c[e].getAttribute("data-modal"),
                n = s[t].getAttribute("id"),
                o = function() { if (l == n) return !0 };
            c[e].addEventListener("click", (() => { o() && (s[t].style.display = "block") })); let d = function(e) { for (let l = 0; l < e.length; l++) e[l].addEventListener("click", (() => { o() && (s[t].style.display = "none") })) };
            d(a), d(r), d(i) }
    document.getElementsByTagName("body")[0].insertAdjacentHTML("beforeEnd", '<div class="modal modal-clipBox" id="modal-clip">\n    <div class="modal-closePic">&times;</div>\n    <div class="modal-bg"></div>\n    <div class="modal-box modal-box-video animate-zoom">\n        <div class="modal-video">\n            <iframe id="youtube" src="" frameborder="0" allowfullscreen></iframe>\n        </div>\n    </div>\n</div>'); let d = document.getElementsByClassName("modal-clip"); for (let e of d) { let t = e.getAttribute("data-video");
        t = `//www.youtube-nocookie.com/embed/${t}?rel=0&controls=1&autoplay=1&nocookie=true&mute=true`; let l = document.getElementsByClassName("modal-clipBox"),
            n = document.getElementById("youtube");
        e.addEventListener("click", (() => { n.setAttribute("src", t), setTimeout((() => { l[0].style.display = "block" }), 200) })); for (let e of i)
            for (let t of l) e.addEventListener("click", (() => { t.style.display = "none", n.setAttribute("src", "") })); for (let e of r)
            for (let t of l) e.addEventListener("click", (() => { t.style.display = "none", n.setAttribute("src", "") })) } }));
var Accordion = function(e) { var t = "string" == typeof e.element ? document.getElementById(e.element) : e.element,
        l = e.openTab,
        n = e.oneOpen || !1,
        o = "accordion-title",
        c = "accordion-content";

    function s(e) { var l, c; - 1 !== e.target.className.indexOf(o) && (n ? (a(), [].forEach.call(t.querySelectorAll("." + o), (function(e) { e.classList.remove("active") })), e.target.classList.add("active")) : e.target.classList.toggle("active"), l = e.target.nextElementSibling, c = l.scrollHeight, "0px" === l.style.height || "" === l.style.height ? l.style.height = c + "px" : l.style.height = 0) }

    function a() {
        [].forEach.call(t.querySelectorAll("." + c), (function(e) { e.style.height = 0 })) }

    function i(e) { return t.querySelectorAll("." + c)[e - 1] }

    function r(e) { var t = i(e);
        t && (n && a(), t.style.height = t.scrollHeight + "px") } return [].forEach.call(t.querySelectorAll("button"), (function(e) { e.classList.add(o), e.nextElementSibling.classList.add(c) })), t.addEventListener("click", s), a(), l && r(l), { open: r, close: function(e) { var t = i(e);
            t && (t.style.height = 0) }, destroy: function() { t.removeEventListener("click", s) } } };

function onScroll() { const e = document.querySelectorAll(".menu a"); let t = document.documentElement.scrollTop,
        l = document.querySelectorAll(".temp"),
        n = 0;
    l.forEach((function(l) { let o = l.offsetTop - 70,
            c = document.querySelectorAll(".menu a.active");
        o <= t && (c[0].classList.remove("active"), e[n].classList.add("active")), n < e.length - 1 && n++ })) }

function addClass(e, t, l) { let n = document.querySelectorAll(e),
        o = document.querySelectorAll(t); for (let e = 0; e < n.length; e++) n[e].addEventListener("click", (() => { for (let e = 0; e < o.length; e++) o[e].classList.add(l) })) }

function removeClass(e, t, l) { let n = document.querySelectorAll(e),
        o = document.querySelectorAll(t); for (let e = 0; e < n.length; e++) n[e].addEventListener("click", (() => { for (let e = 0; e < o.length; e++) o[e].classList.remove(l) })) }