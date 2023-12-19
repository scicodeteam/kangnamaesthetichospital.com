var tns = function() { var t = window,
        e = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.msRequestAnimationFrame || function(t) { return setTimeout(t, 16) },
        n = window,
        i = n.cancelAnimationFrame || n.mozCancelAnimationFrame || function(t) { clearTimeout(t) };

    function a() { for (var t, e, n, i = arguments[0] || {}, a = 1, r = arguments.length; a < r; a++)
            if (null !== (t = arguments[a]))
                for (e in t) i !== (n = t[e]) && void 0 !== n && (i[e] = n);
        return i }

    function r(t) { return ["true", "false"].indexOf(t) >= 0 ? JSON.parse(t) : t }

    function o(t, e, n, i) { if (i) try { t.setItem(e, n) } catch (t) {}
        return n }

    function u() { var t = document,
            e = t.body; return e || ((e = t.createElement("body")).fake = !0), e } var l = document.documentElement;

    function s(t) { var e = ""; return t.fake && (e = l.style.overflow, t.style.background = "", t.style.overflow = l.style.overflow = "hidden", l.appendChild(t)), e }

    function c(t, e) { t.fake && (t.remove(), l.style.overflow = e, l.offsetHeight) }

    function f(t, e, n, i) { "insertRule" in t ? t.insertRule(e + "{" + n + "}", i) : t.addRule(e, n, i) }

    function d(t) { return ("insertRule" in t ? t.cssRules : t.rules).length }

    function v(t, e, n) { for (var i = 0, a = t.length; i < a; i++) e.call(n, t[i], i) } var p = "classList" in document.createElement("_"),
        h = p ? function(t, e) { return t.classList.contains(e) } : function(t, e) { return t.className.indexOf(e) >= 0 },
        m = p ? function(t, e) { h(t, e) || t.classList.add(e) } : function(t, e) { h(t, e) || (t.className += " " + e) },
        y = p ? function(t, e) { h(t, e) && t.classList.remove(e) } : function(t, e) { h(t, e) && (t.className = t.className.replace(e, "")) };

    function g(t, e) { return t.hasAttribute(e) }

    function x(t, e) { return t.getAttribute(e) }

    function b(t) { return void 0 !== t.item }

    function w(t, e) { if (t = b(t) || t instanceof Array ? t : [t], "[object Object]" === Object.prototype.toString.call(e))
            for (var n = t.length; n--;)
                for (var i in e) t[n].setAttribute(i, e[i]) }

    function C(t, e) { t = b(t) || t instanceof Array ? t : [t]; for (var n = (e = e instanceof Array ? e : [e]).length, i = t.length; i--;)
            for (var a = n; a--;) t[i].removeAttribute(e[a]) }

    function M(t) { for (var e = [], n = 0, i = t.length; n < i; n++) e.push(t[n]); return e }

    function T(t, e) { "none" !== t.style.display && (t.style.display = "none") }

    function E(t, e) { "none" === t.style.display && (t.style.display = "") }

    function A(t) { return "none" !== window.getComputedStyle(t).display }

    function L(t) { if ("string" == typeof t) { var e = [t],
                n = t.charAt(0).toUpperCase() + t.substr(1);
            ["Webkit", "Moz", "ms", "O"].forEach((function(i) { "ms" === i && "transform" !== t || e.push(i + n) })), t = e } for (var i = document.createElement("fakeelement"), a = (t.length, 0); a < t.length; a++) { var r = t[a]; if (void 0 !== i.style[r]) return r } return !1 }

    function N(t, e) { var n = !1; return /^Webkit/.test(t) ? n = "webkit" + e + "End" : /^O/.test(t) ? n = "o" + e + "End" : t && (n = e.toLowerCase() + "end"), n } var B = !1; try { var S = Object.defineProperty({}, "passive", { get: function() { B = !0 } });
        window.addEventListener("test", null, S) } catch (t) {} var H = !!B && { passive: !0 };

    function O(t, e, n) { for (var i in e) { var a = ["touchstart", "touchmove"].indexOf(i) >= 0 && !n && H;
            t.addEventListener(i, e[i], a) } }

    function D(t, e) { for (var n in e) { var i = ["touchstart", "touchmove"].indexOf(n) >= 0 && H;
            t.removeEventListener(n, e[n], i) } }

    function k() { return { topics: {}, on: function(t, e) { this.topics[t] = this.topics[t] || [], this.topics[t].push(e) }, off: function(t, e) { if (this.topics[t])
                    for (var n = 0; n < this.topics[t].length; n++)
                        if (this.topics[t][n] === e) { this.topics[t].splice(n, 1); break } }, emit: function(t, e) { e.type = t, this.topics[t] && this.topics[t].forEach((function(n) { n(e, t) })) } } }
    Object.keys || (Object.keys = function(t) { var e = []; for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && e.push(n); return e }), "remove" in Element.prototype || (Element.prototype.remove = function() { this.parentNode && this.parentNode.removeChild(this) }); var R = function(t) { t = a({ container: ".slider", mode: "carousel", axis: "horizontal", items: 1, gutter: 0, edgePadding: 0, fixedWidth: !1, autoWidth: !1, viewportMax: !1, slideBy: 1, center: !1, controls: !0, controlsPosition: "top", controlsText: ["&#10094", "&#10095"], controlsContainer: !1, prevButton: !1, nextButton: !1, nav: !0, navPosition: "top", navContainer: !1, navAsThumbnails: !1, arrowKeys: !1, speed: 300, autoplay: !1, autoplayPosition: "top", autoplayTimeout: 5e3, autoplayDirection: "forward", autoplayText: ["start", "stop"], autoplayHoverPause: !1, autoplayButton: !1, autoplayButtonOutput: !0, autoplayResetOnVisibility: !0, animateIn: "tns-fadeIn", animateOut: "tns-fadeOut", animateNormal: "tns-normal", animateDelay: !1, loop: !0, rewind: !1, autoHeight: !1, responsive: !1, lazyload: !1, lazyloadSelector: ".tns-lazy-img", touch: !0, mouseDrag: !1, swipeAngle: 15, nested: !1, preventActionWhenRunning: !1, preventScrollOnTouch: !1, freezable: !0, onInit: !1, useLocalStorage: !0, nonce: !1 }, t || {}); var n = document,
            l = window,
            p = { ENTER: 13, SPACE: 32, LEFT: 37, RIGHT: 39 },
            b = {},
            B = t.useLocalStorage; if (B) { var S = navigator.userAgent,
                H = new Date; try {
                (b = l.localStorage) ? (b.setItem(H, H), B = b.getItem(H) == H, b.removeItem(H)) : B = !1, B || (b = {}) } catch (t) { B = !1 }
            B && (b.tnsApp && b.tnsApp !== S && ["tC", "tPL", "tMQ", "tTf", "t3D", "tTDu", "tTDe", "tADu", "tADe", "tTE", "tAE"].forEach((function(t) { b.removeItem(t) })), localStorage.tnsApp = S) } var I = b.tC ? r(b.tC) : o(b, "tC", function() { var t = document,
                    e = u(),
                    n = s(e),
                    i = t.createElement("div"),
                    a = !1;
                e.appendChild(i); try { for (var r, o = "(10px * 10)", l = ["calc" + o, "-moz-calc" + o, "-webkit-calc" + o], f = 0; f < 3; f++)
                        if (r = l[f], i.style.width = r, 100 === i.offsetWidth) { a = r.replace(o, ""); break } } catch (t) {} return e.fake ? c(e, n) : i.remove(), a }(), B),
            P = b.tPL ? r(b.tPL) : o(b, "tPL", function() { var t, e = document,
                    n = u(),
                    i = s(n),
                    a = e.createElement("div"),
                    r = e.createElement("div"),
                    o = "";
                a.className = "tns-t-subp2", r.className = "tns-t-ct"; for (var l = 0; l < 70; l++) o += "<div></div>"; return r.innerHTML = o, a.appendChild(r), n.appendChild(a), t = Math.abs(a.getBoundingClientRect().left - r.children[67].getBoundingClientRect().left) < 2, n.fake ? c(n, i) : a.remove(), t }(), B),
            z = b.tMQ ? r(b.tMQ) : o(b, "tMQ", function() { if (window.matchMedia || window.msMatchMedia) return !0; var t, e = document,
                    n = u(),
                    i = s(n),
                    a = e.createElement("div"),
                    r = e.createElement("style"),
                    o = "@media all and (min-width:1px){.tns-mq-test{position:absolute}}"; return r.type = "text/css", a.className = "tns-mq-test", n.appendChild(r), n.appendChild(a), r.styleSheet ? r.styleSheet.cssText = o : r.appendChild(e.createTextNode(o)), t = window.getComputedStyle ? window.getComputedStyle(a).position : a.currentStyle.position, n.fake ? c(n, i) : a.remove(), "absolute" === t }(), B),
            W = b.tTf ? r(b.tTf) : o(b, "tTf", L("transform"), B),
            q = b.t3D ? r(b.t3D) : o(b, "t3D", function(t) { if (!t) return !1; if (!window.getComputedStyle) return !1; var e, n = document,
                    i = u(),
                    a = s(i),
                    r = n.createElement("p"),
                    o = t.length > 9 ? "-" + t.slice(0, -9).toLowerCase() + "-" : ""; return o += "transform", i.insertBefore(r, null), r.style[t] = "translate3d(1px,1px,1px)", e = window.getComputedStyle(r).getPropertyValue(o), i.fake ? c(i, a) : r.remove(), void 0 !== e && e.length > 0 && "none" !== e }(W), B),
            F = b.tTDu ? r(b.tTDu) : o(b, "tTDu", L("transitionDuration"), B),
            j = b.tTDe ? r(b.tTDe) : o(b, "tTDe", L("transitionDelay"), B),
            V = b.tADu ? r(b.tADu) : o(b, "tADu", L("animationDuration"), B),
            G = b.tADe ? r(b.tADe) : o(b, "tADe", L("animationDelay"), B),
            Q = b.tTE ? r(b.tTE) : o(b, "tTE", N(F, "Transition"), B),
            X = b.tAE ? r(b.tAE) : o(b, "tAE", N(V, "Animation"), B),
            Y = (l.console && l.console.warn, ["container", "controlsContainer", "prevButton", "nextButton", "navContainer", "autoplayButton"]),
            K = {}; if (Y.forEach((function(e) { if ("string" == typeof t[e]) { var i = t[e],
                        a = n.querySelector(i); if (K[e] = i, !a || !a.nodeName) return;
                    t[e] = a } })), !(t.container.children.length < 1)) { var J = t.responsive,
                U = t.nested,
                _ = "carousel" === t.mode; if (J) { 0 in J && (t = a(t, J[0]), delete J[0]); var Z = {}; for (var $ in J) { var tt = J[$];
                    tt = "number" == typeof tt ? { items: tt } : tt, Z[$] = tt }
                J = Z, Z = null } if (_ || function t(e) { for (var n in e) _ || ("slideBy" === n && (e[n] = "page"), "edgePadding" === n && (e[n] = !1), "autoHeight" === n && (e[n] = !1)), "responsive" === n && t(e[n]) }(t), !_) { t.axis = "horizontal", t.slideBy = "page", t.edgePadding = !1; var et = t.animateIn,
                    nt = t.animateOut,
                    it = t.animateDelay,
                    at = t.animateNormal } var rt, ot, ut = "horizontal" === t.axis,
                lt = n.createElement("div"),
                st = n.createElement("div"),
                ct = t.container,
                ft = ct.parentNode,
                dt = ct.outerHTML,
                vt = ct.children,
                pt = vt.length,
                ht = Hn(),
                mt = !1;
            J && _n(), _ && (ct.className += " tns-vpfix"); var yt, gt, xt, bt, wt, Ct, Mt, Tt, Et, At = t.autoWidth,
                Lt = Rn("fixedWidth"),
                Nt = Rn("edgePadding"),
                Bt = Rn("gutter"),
                St = Dn(),
                Ht = Rn("center"),
                Ot = At ? 1 : Math.floor(Rn("items")),
                Dt = Rn("slideBy"),
                kt = t.viewportMax || t.fixedWidthViewportWidth,
                Rt = Rn("arrowKeys"),
                It = Rn("speed"),
                Pt = t.rewind,
                zt = !Pt && t.loop,
                Wt = Rn("autoHeight"),
                qt = Rn("controls"),
                Ft = Rn("controlsText"),
                jt = Rn("nav"),
                Vt = Rn("touch"),
                Gt = Rn("mouseDrag"),
                Qt = Rn("autoplay"),
                Xt = Rn("autoplayTimeout"),
                Yt = Rn("autoplayText"),
                Kt = Rn("autoplayHoverPause"),
                Jt = Rn("autoplayResetOnVisibility"),
                Ut = (Mt = null, Tt = Rn("nonce"), Et = document.createElement("style"), Mt && Et.setAttribute("media", Mt), Tt && Et.setAttribute("nonce", Tt), document.querySelector("head").appendChild(Et), Et.sheet ? Et.sheet : Et.styleSheet),
                _t = t.lazyload,
                Zt = t.lazyloadSelector,
                $t = [],
                te = zt ? (wt = function() { if (At || Lt && !kt) return pt - 1; var e = Lt ? "fixedWidth" : "items",
                        n = []; if ((Lt || t[e] < pt) && n.push(t[e]), J)
                        for (var i in J) { var a = J[i][e];
                            a && (Lt || a < pt) && n.push(a) }
                    return n.length || n.push(0), Math.ceil(Lt ? kt / Math.min.apply(null, n) : Math.max.apply(null, n)) }(), Ct = _ ? Math.ceil((5 * wt - pt) / 2) : 4 * wt - pt, Ct = Math.max(wt, Ct), kn("edgePadding") ? Ct + 1 : Ct) : 0,
                ee = _ ? pt + 2 * te : pt + te,
                ne = !(!Lt && !At || zt),
                ie = Lt ? Mi() : null,
                ae = !_ || !zt,
                re = ut ? "left" : "top",
                oe = "",
                ue = "",
                le = Lt ? function() { return Ht && !zt ? pt - 1 : Math.ceil(-ie / (Lt + Bt)) } : At ? function() { for (var t = 0; t < ee; t++)
                        if (yt[t] >= -ie) return t } : function() { return Ht && _ && !zt ? pt - 1 : zt || _ ? Math.max(0, ee - Math.ceil(Ot)) : ee - 1 },
                se = Nn(Rn("startIndex")),
                ce = se,
                fe = (Ln(), 0),
                de = At ? null : le(),
                ve = t.preventActionWhenRunning,
                pe = t.swipeAngle,
                he = !pe || "?",
                me = !1,
                ye = t.onInit,
                ge = new k,
                xe = " tns-slider tns-" + t.mode,
                be = ct.id || (bt = window.tnsId, window.tnsId = bt ? bt + 1 : 1, "tns" + window.tnsId),
                we = Rn("disable"),
                Ce = !1,
                Me = t.freezable,
                Te = !(!Me || At) && Un(),
                Ee = !1,
                Ae = { click: Oi, keydown: function(t) { t = qi(t); var e = [p.LEFT, p.RIGHT].indexOf(t.keyCode);
                        e >= 0 && (0 === e ? Ye.disabled || Oi(t, -1) : Ke.disabled || Oi(t, 1)) } },
                Le = { click: function(t) { if (me) { if (ve) return;
                            Si() } var e = Fi(t = qi(t)); for (; e !== Ze && !g(e, "data-nav");) e = e.parentNode; if (g(e, "data-nav")) { var n = nn = Number(x(e, "data-nav")),
                                i = Lt || At ? n * pt / tn : n * Ot;
                            Hi(Re ? n : Math.min(Math.ceil(i), pt - 1), t), an === n && (cn && Pi(), nn = -1) } }, keydown: function(t) { t = qi(t); var e = n.activeElement; if (!g(e, "data-nav")) return; var i = [p.LEFT, p.RIGHT, p.ENTER, p.SPACE].indexOf(t.keyCode),
                            a = Number(x(e, "data-nav"));
                        i >= 0 && (0 === i ? a > 0 && Wi(_e[a - 1]) : 1 === i ? a < tn - 1 && Wi(_e[a + 1]) : (nn = a, Hi(a, t))) } },
                Ne = { mouseover: function() { cn && (ki(), fn = !0) }, mouseout: function() { fn && (Di(), fn = !1) } },
                Be = { visibilitychange: function() { n.hidden ? cn && (ki(), vn = !0) : vn && (Di(), vn = !1) } },
                Se = { keydown: function(t) { t = qi(t); var e = [p.LEFT, p.RIGHT].indexOf(t.keyCode);
                        e >= 0 && Oi(t, 0 === e ? -1 : 1) } },
                He = { touchstart: Qi, touchmove: Xi, touchend: Yi, touchcancel: Yi },
                Oe = { mousedown: Qi, mousemove: Xi, mouseup: Yi, mouseleave: Yi },
                De = kn("controls"),
                ke = kn("nav"),
                Re = !!At || t.navAsThumbnails,
                Ie = kn("autoplay"),
                Pe = kn("touch"),
                ze = kn("mouseDrag"),
                We = "tns-slide-active",
                qe = "tns-complete",
                Fe = { load: function(t) { oi(Fi(t)) }, error: function(t) { e = Fi(t), m(e, "failed"), ui(e); var e } },
                je = "force" === t.preventScrollOnTouch; if (De) var Ve, Ge, Qe = t.controlsContainer,
                Xe = t.controlsContainer ? t.controlsContainer.outerHTML : "",
                Ye = t.prevButton,
                Ke = t.nextButton,
                Je = t.prevButton ? t.prevButton.outerHTML : "",
                Ue = t.nextButton ? t.nextButton.outerHTML : ""; if (ke) var _e, Ze = t.navContainer,
                $e = t.navContainer ? t.navContainer.outerHTML : "",
                tn = At ? pt : Ji(),
                en = 0,
                nn = -1,
                an = Sn(),
                rn = an,
                on = "tns-nav-active",
                un = "Carousel Page ",
                ln = " (Current Slide)"; if (Ie) var sn, cn, fn, dn, vn, pn = "forward" === t.autoplayDirection ? 1 : -1,
                hn = t.autoplayButton,
                mn = t.autoplayButton ? t.autoplayButton.outerHTML : "",
                yn = ["<span class='tns-visually-hidden'>", " animation</span>"]; if (Pe || ze) var gn, xn, bn = {},
                wn = {},
                Cn = !1,
                Mn = ut ? function(t, e) { return t.x - e.x } : function(t, e) { return t.y - e.y };
            At || An(we || Te), W && (re = W, oe = "translate", q ? (oe += ut ? "3d(" : "3d(0px, ", ue = ut ? ", 0px, 0px)" : ", 0px)") : (oe += ut ? "X(" : "Y(", ue = ")")), _ && (ct.className = ct.className.replace("tns-vpfix", "")),
                function() { kn("gutter");
                    lt.className = "tns-outer", st.className = "tns-inner", lt.id = be + "-ow", st.id = be + "-iw", "" === ct.id && (ct.id = be);
                    xe += P || At ? " tns-subpixel" : " tns-no-subpixel", xe += I ? " tns-calc" : " tns-no-calc", At && (xe += " tns-autowidth");
                    xe += " tns-" + t.axis, ct.className += xe, _ ? ((rt = n.createElement("div")).id = be + "-mw", rt.className = "tns-ovh", lt.appendChild(rt), rt.appendChild(st)) : lt.appendChild(st); if (Wt) {
                        (rt || st).className += " tns-ah" } if (ft.insertBefore(lt, ct), st.appendChild(ct), v(vt, (function(t, e) { m(t, "tns-item"), t.id || (t.id = be + "-item" + e), !_ && at && m(t, at), w(t, { "aria-hidden": "true", tabindex: "-1" }) })), te) { for (var e = n.createDocumentFragment(), i = n.createDocumentFragment(), a = te; a--;) { var r = a % pt,
                                o = vt[r].cloneNode(!0); if (m(o, "tns-slide-cloned"), C(o, "id"), i.insertBefore(o, i.firstChild), _) { var u = vt[pt - 1 - r].cloneNode(!0);
                                m(u, "tns-slide-cloned"), C(u, "id"), e.appendChild(u) } }
                        ct.insertBefore(e, ct.firstChild), ct.appendChild(i), vt = ct.children } }(),
                function() { if (!_)
                        for (var e = se, n = se + Math.min(pt, Ot); e < n; e++) { var i = vt[e];
                            i.style.left = 100 * (e - se) / Ot + "%", m(i, et), y(i, at) }
                    ut && (P || At ? (f(Ut, "#" + be + " > .tns-item", "font-size:" + l.getComputedStyle(vt[0]).fontSize + ";", d(Ut)), f(Ut, "#" + be, "font-size:0;", d(Ut))) : _ && v(vt, (function(t, e) { t.style.marginLeft = function(t) { return I ? I + "(" + 100 * t + "% / " + ee + ")" : 100 * t / ee + "%" }(e) }))); if (z) { if (F) { var a = rt && t.autoHeight ? Fn(t.speed) : "";
                            f(Ut, "#" + be + "-mw", a, d(Ut)) }
                        a = In(t.edgePadding, t.gutter, t.fixedWidth, t.speed, t.autoHeight), f(Ut, "#" + be + "-iw", a, d(Ut)), _ && (a = ut && !At ? "width:" + Pn(t.fixedWidth, t.gutter, t.items) + ";" : "", F && (a += Fn(It)), f(Ut, "#" + be, a, d(Ut))), a = ut && !At ? zn(t.fixedWidth, t.gutter, t.items) : "", t.gutter && (a += Wn(t.gutter)), _ || (F && (a += Fn(It)), V && (a += jn(It))), a && f(Ut, "#" + be + " > .tns-item", a, d(Ut)) } else { _ && Wt && (rt.style[F] = It / 1e3 + "s"), st.style.cssText = In(Nt, Bt, Lt, Wt), _ && ut && !At && (ct.style.width = Pn(Lt, Bt, Ot));
                        a = ut && !At ? zn(Lt, Bt, Ot) : "";
                        Bt && (a += Wn(Bt)), a && f(Ut, "#" + be + " > .tns-item", a, d(Ut)) } if (J && z)
                        for (var r in J) { r = parseInt(r); var o = J[r],
                                u = (a = "", ""),
                                s = "",
                                c = "",
                                p = "",
                                h = At ? null : Rn("items", r),
                                g = Rn("fixedWidth", r),
                                x = Rn("speed", r),
                                b = Rn("edgePadding", r),
                                w = Rn("autoHeight", r),
                                C = Rn("gutter", r);
                            F && rt && Rn("autoHeight", r) && "speed" in o && (u = "#" + be + "-mw{" + Fn(x) + "}"), ("edgePadding" in o || "gutter" in o) && (s = "#" + be + "-iw{" + In(b, C, g, x, w) + "}"), _ && ut && !At && ("fixedWidth" in o || "items" in o || Lt && "gutter" in o) && (c = "width:" + Pn(g, C, h) + ";"), F && "speed" in o && (c += Fn(x)), c && (c = "#" + be + "{" + c + "}"), ("fixedWidth" in o || Lt && "gutter" in o || !_ && "items" in o) && (p += zn(g, C, h)), "gutter" in o && (p += Wn(C)), !_ && "speed" in o && (F && (p += Fn(x)), V && (p += jn(x))), p && (p = "#" + be + " > .tns-item{" + p + "}"), (a = u + s + c + p) && Ut.insertRule("@media (min-width: " + r / 16 + "em) {" + a + "}", Ut.cssRules.length) } }(), Vn(); var Tn = zt ? _ ? function() { var t = fe,
                        e = de;
                    t += Dt, e -= Dt, Nt ? (t += 1, e -= 1) : Lt && (St + Bt) % (Lt + Bt) && (e -= 1), te && (se > e ? se -= pt : se < t && (se += pt)) } : function() { if (se > de)
                        for (; se >= fe + pt;) se -= pt;
                    else if (se < fe)
                        for (; se <= de - pt;) se += pt } : function() { se = Math.max(fe, Math.min(de, se)) },
                En = _ ? function() { var t, e, n, i, a, r, o, u, l, s, c;
                    wi(ct, ""), F || !It ? (Ai(), It && A(ct) || Si()) : (t = ct, e = re, n = oe, i = ue, a = Ti(), r = It, o = Si, u = Math.min(r, 10), l = a.indexOf("%") >= 0 ? "%" : "px", a = a.replace(l, ""), s = Number(t.style[e].replace(n, "").replace(i, "").replace(l, "")), c = (a - s) / r * u, setTimeout((function a() { r -= u, s += c, t.style[e] = n + s + l + i, r > 0 ? setTimeout(a, u) : o() }), u)), ut || Ki() } : function() { $t = []; var t = {};
                    t[Q] = t[X] = Si, D(vt[ce], t), O(vt[se], t), Li(ce, et, nt, !0), Li(se, at, et), Q && X && It && A(ct) || Si() }; return { version: "2.9.2", getInfo: _i, events: ge, goTo: Hi, play: function() { Qt && !cn && (Ii(), dn = !1) }, pause: function() { cn && (Pi(), dn = !0) }, isOn: mt, updateSliderHeight: vi, refresh: Vn, destroy: function() { if (Ut.disabled = !0, Ut.ownerNode && Ut.ownerNode.remove(), D(l, { resize: Kn }), Rt && D(n, Se), Qe && D(Qe, Ae), Ze && D(Ze, Le), D(ct, Ne), D(ct, Be), hn && D(hn, { click: zi }), Qt && clearInterval(sn), _ && Q) { var e = {};
                        e[Q] = Si, D(ct, e) }
                    Vt && D(ct, He), Gt && D(ct, Oe); var i = [dt, Xe, Je, Ue, $e, mn]; for (var a in Y.forEach((function(e, n) { var a = "container" === e ? lt : t[e]; if ("object" == typeof a && a) { var r = !!a.previousElementSibling && a.previousElementSibling,
                                    o = a.parentNode;
                                a.outerHTML = i[n], t[e] = r ? r.nextElementSibling : o.firstElementChild } })), Y = et = nt = it = at = ut = lt = st = ct = ft = dt = vt = pt = ot = ht = At = Lt = Nt = Bt = St = Ot = Dt = kt = Rt = It = Pt = zt = Wt = Ut = _t = yt = $t = te = ee = ne = ie = ae = re = oe = ue = le = se = ce = fe = de = pe = he = me = ye = ge = xe = be = we = Ce = Me = Te = Ee = Ae = Le = Ne = Be = Se = He = Oe = De = ke = Re = Ie = Pe = ze = We = qe = Fe = gt = qt = Ft = Qe = Xe = Ye = Ke = Ve = Ge = jt = Ze = $e = _e = tn = en = nn = an = rn = on = un = ln = Qt = Xt = pn = Yt = Kt = hn = mn = Jt = yn = sn = cn = fn = dn = vn = bn = wn = gn = Cn = xn = Mn = Vt = Gt = null, this) "rebuild" !== a && (this[a] = null);
                    mt = !1 }, rebuild: function() { return R(a(t, K)) } } }

        function An(t) { t && (qt = jt = Vt = Gt = Rt = Qt = Kt = Jt = !1) }

        function Ln() { for (var t = _ ? se - te : se; t < 0;) t += pt; return t % pt + 1 }

        function Nn(t) { return t = t ? Math.max(0, Math.min(zt ? pt - 1 : pt - Ot, t)) : 0, _ ? t + te : t }

        function Bn(t) { for (null == t && (t = se), _ && (t -= te); t < 0;) t += pt; return Math.floor(t % pt) }

        function Sn() { var t, e = Bn(); return t = Re ? e : Lt || At ? Math.ceil((e + 1) * tn / pt - 1) : Math.floor(e / Ot), !zt && _ && se === de && (t = tn - 1), t }

        function Hn() { return l.innerWidth || n.documentElement.clientWidth || n.body.clientWidth }

        function On(t) { return "top" === t ? "afterbegin" : "beforeend" }

        function Dn() { var t = Nt ? 2 * Nt - Bt : 0; return function t(e) { if (null != e) { var i, a, r = n.createElement("div"); return e.appendChild(r), a = (i = r.getBoundingClientRect()).right - i.left, r.remove(), a || t(e.parentNode) } }(ft) - t }

        function kn(e) { if (t[e]) return !0; if (J)
                for (var n in J)
                    if (J[n][e]) return !0;
            return !1 }

        function Rn(e, n) { if (null == n && (n = ht), "items" === e && Lt) return Math.floor((St + Bt) / (Lt + Bt)) || 1; var i = t[e]; if (J)
                for (var a in J) n >= parseInt(a) && e in J[a] && (i = J[a][e]); return "slideBy" === e && "page" === i && (i = Rn("items")), _ || "slideBy" !== e && "items" !== e || (i = Math.floor(i)), i }

        function In(t, e, n, i, a) { var r = ""; if (void 0 !== t) { var o = t;
                e && (o -= e), r = ut ? "margin: 0 " + o + "px 0 " + t + "px;" : "margin: " + t + "px 0 " + o + "px 0;" } else if (e && !n) { var u = "-" + e + "px";
                r = "margin: 0 " + (ut ? u + " 0 0" : "0 " + u + " 0") + ";" } return !_ && a && F && i && (r += Fn(i)), r }

        function Pn(t, e, n) { return t ? (t + e) * ee + "px" : I ? I + "(" + 100 * ee + "% / " + n + ")" : 100 * ee / n + "%" }

        function zn(t, e, n) { var i; if (t) i = t + e + "px";
            else { _ || (n = Math.floor(n)); var a = _ ? ee : n;
                i = I ? I + "(100% / " + a + ")" : 100 / a + "%" } return i = "width:" + i, "inner" !== U ? i + ";" : i + " !important;" }

        function Wn(t) { var e = "";!1 !== t && (e = (ut ? "padding-" : "margin-") + (ut ? "right" : "bottom") + ": " + t + "px;"); return e }

        function qn(t, e) { var n = t.substring(0, t.length - e).toLowerCase(); return n && (n = "-" + n + "-"), n }

        function Fn(t) { return qn(F, 18) + "transition-duration:" + t / 1e3 + "s;" }

        function jn(t) { return qn(V, 17) + "animation-duration:" + t / 1e3 + "s;" }

        function Vn() { if (kn("autoHeight") || At || !ut) { var t = ct.querySelectorAll("img");
                v(t, (function(t) { var e = t.src;
                    _t || (e && e.indexOf("data:image") < 0 ? (t.src = "", O(t, Fe), m(t, "loading"), t.src = e) : oi(t)) })), e((function() { ci(M(t), (function() { gt = !0 })) })), kn("autoHeight") && (t = li(se, Math.min(se + Ot - 1, ee - 1))), _t ? Gn() : e((function() { ci(M(t), Gn) })) } else _ && Ei(), Xn(), Yn() }

        function Gn() { if (At && pt > 1) { var t = zt ? se : pt - 1;! function e() { var n = vt[t].getBoundingClientRect().left,
                        i = vt[t - 1].getBoundingClientRect().right;
                    Math.abs(n - i) <= 1 ? Qn() : setTimeout((function() { e() }), 16) }() } else Qn() }

        function Qn() { ut && !At || (pi(), At ? (ie = Mi(), Me && (Te = Un()), de = le(), An(we || Te)) : Ki()), _ && Ei(), Xn(), Yn() }

        function Xn() { if (hi(), lt.insertAdjacentHTML("afterbegin", '<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">' + ii() + "</span>  of " + pt + "</div>"), xt = lt.querySelector(".tns-liveregion .current"), Ie) { var e = Qt ? "stop" : "start";
                hn ? w(hn, { "data-action": e }) : t.autoplayButtonOutput && (lt.insertAdjacentHTML(On(t.autoplayPosition), '<button type="button" data-action="' + e + '">' + yn[0] + e + yn[1] + Yt[0] + "</button>"), hn = lt.querySelector("[data-action]")), hn && O(hn, { click: zi }), Qt && (Ii(), Kt && O(ct, Ne), Jt && O(ct, Be)) } if (ke) { if (Ze) w(Ze, { "aria-label": "Carousel Pagination" }), v(_e = Ze.children, (function(t, e) { w(t, { "data-nav": e, tabindex: "-1", "aria-label": un + (e + 1), "aria-controls": be }) }));
                else { for (var n = "", i = Re ? "" : 'style="display:none"', a = 0; a < pt; a++) n += '<button type="button" data-nav="' + a + '" tabindex="-1" aria-controls="' + be + '" ' + i + ' aria-label="' + un + (a + 1) + '"></button>';
                    n = '<div class="tns-nav" aria-label="Carousel Pagination">' + n + "</div>", lt.insertAdjacentHTML(On(t.navPosition), n), Ze = lt.querySelector(".tns-nav"), _e = Ze.children } if (Ui(), F) { var r = F.substring(0, F.length - 18).toLowerCase(),
                        o = "transition: all " + It / 1e3 + "s";
                    r && (o = "-" + r + "-" + o), f(Ut, "[aria-controls^=" + be + "-item]", o, d(Ut)) }
                w(_e[an], { "aria-label": un + (an + 1) + ln }), C(_e[an], "tabindex"), m(_e[an], on), O(Ze, Le) }
            De && (Qe || Ye && Ke || (lt.insertAdjacentHTML(On(t.controlsPosition), '<div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button" data-controls="prev" tabindex="-1" aria-controls="' + be + '">' + Ft[0] + '</button><button type="button" data-controls="next" tabindex="-1" aria-controls="' + be + '">' + Ft[1] + "</button></div>"), Qe = lt.querySelector(".tns-controls")), Ye && Ke || (Ye = Qe.children[0], Ke = Qe.children[1]), t.controlsContainer && w(Qe, { "aria-label": "Carousel Navigation", tabindex: "0" }), (t.controlsContainer || t.prevButton && t.nextButton) && w([Ye, Ke], { "aria-controls": be, tabindex: "-1" }), (t.controlsContainer || t.prevButton && t.nextButton) && (w(Ye, { "data-controls": "prev" }), w(Ke, { "data-controls": "next" })), Ve = yi(Ye), Ge = yi(Ke), bi(), Qe ? O(Qe, Ae) : (O(Ye, Ae), O(Ke, Ae))), Zn() }

        function Yn() { if (_ && Q) { var e = {};
                e[Q] = Si, O(ct, e) }
            Vt && O(ct, He, t.preventScrollOnTouch), Gt && O(ct, Oe), Rt && O(n, Se), "inner" === U ? ge.on("outerResized", (function() { Jn(), ge.emit("innerLoaded", _i()) })) : (J || Lt || At || Wt || !ut) && O(l, { resize: Kn }), Wt && ("outer" === U ? ge.on("innerLoaded", si) : we || si()), ri(), we ? ei() : Te && ti(), ge.on("indexChanged", fi), "inner" === U && ge.emit("innerLoaded", _i()), "function" == typeof ye && ye(_i()), mt = !0 }

        function Kn(t) { e((function() { Jn(qi(t)) })) }

        function Jn(e) { if (mt) { "outer" === U && ge.emit("outerResized", _i(e)), ht = Hn(); var i, a = ot,
                    r = !1;
                J && (_n(), (i = a !== ot) && ge.emit("newBreakpointStart", _i(e))); var o, u, l = Ot,
                    s = we,
                    c = Te,
                    p = Rt,
                    h = qt,
                    g = jt,
                    x = Vt,
                    b = Gt,
                    w = Qt,
                    C = Kt,
                    M = Jt,
                    A = se; if (i) { var L = Lt,
                        N = Wt,
                        B = Ft,
                        S = Ht,
                        H = Yt; if (!z) var k = Bt,
                        R = Nt } if (Rt = Rn("arrowKeys"), qt = Rn("controls"), jt = Rn("nav"), Vt = Rn("touch"), Ht = Rn("center"), Gt = Rn("mouseDrag"), Qt = Rn("autoplay"), Kt = Rn("autoplayHoverPause"), Jt = Rn("autoplayResetOnVisibility"), i && (we = Rn("disable"), Lt = Rn("fixedWidth"), It = Rn("speed"), Wt = Rn("autoHeight"), Ft = Rn("controlsText"), Yt = Rn("autoplayText"), Xt = Rn("autoplayTimeout"), z || (Nt = Rn("edgePadding"), Bt = Rn("gutter"))), An(we), St = Dn(), ut && !At || we || (pi(), ut || (Ki(), r = !0)), (Lt || At) && (ie = Mi(), de = le()), (i || Lt) && (Ot = Rn("items"), Dt = Rn("slideBy"), (u = Ot !== l) && (Lt || At || (de = le()), Tn())), i && we !== s && (we ? ei() : function() { if (!Ce) return; if (Ut.disabled = !1, ct.className += xe, Ei(), zt)
                            for (var t = te; t--;) _ && E(vt[t]), E(vt[ee - t - 1]); if (!_)
                            for (var e = se, n = se + pt; e < n; e++) { var i = vt[e],
                                    a = e < se + Ot ? et : at;
                                i.style.left = 100 * (e - se) / Ot + "%", m(i, a) }
                        $n(), Ce = !1 }()), Me && (i || Lt || At) && (Te = Un()) !== c && (Te ? (Ai(Ti(Nn(0))), ti()) : (! function() { if (!Ee) return;
                        Nt && z && (st.style.margin = ""); if (te)
                            for (var t = "tns-transparent", e = te; e--;) _ && y(vt[e], t), y(vt[ee - e - 1], t);
                        $n(), Ee = !1 }(), r = !0)), An(we || Te), Qt || (Kt = Jt = !1), Rt !== p && (Rt ? O(n, Se) : D(n, Se)), qt !== h && (qt ? Qe ? E(Qe) : (Ye && E(Ye), Ke && E(Ke)) : Qe ? T(Qe) : (Ye && T(Ye), Ke && T(Ke))), jt !== g && (jt ? (E(Ze), Ui()) : T(Ze)), Vt !== x && (Vt ? O(ct, He, t.preventScrollOnTouch) : D(ct, He)), Gt !== b && (Gt ? O(ct, Oe) : D(ct, Oe)), Qt !== w && (Qt ? (hn && E(hn), cn || dn || Ii()) : (hn && T(hn), cn && Pi())), Kt !== C && (Kt ? O(ct, Ne) : D(ct, Ne)), Jt !== M && (Jt ? O(n, Be) : D(n, Be)), i) { if (Lt === L && Ht === S || (r = !0), Wt !== N && (Wt || (st.style.height = "")), qt && Ft !== B && (Ye.innerHTML = Ft[0], Ke.innerHTML = Ft[1]), hn && Yt !== H) { var I = Qt ? 1 : 0,
                            P = hn.innerHTML,
                            W = P.length - H[I].length;
                        P.substring(W) === H[I] && (hn.innerHTML = P.substring(0, W) + Yt[I]) } } else Ht && (Lt || At) && (r = !0); if ((u || Lt && !At) && (tn = Ji(), Ui()), (o = se !== A) ? (ge.emit("indexChanged", _i()), r = !0) : u ? o || fi() : (Lt || At) && (ri(), hi(), ni()), u && !_ && function() { for (var t = se + Math.min(pt, Ot), e = ee; e--;) { var n = vt[e];
                            e >= se && e < t ? (m(n, "tns-moving"), n.style.left = 100 * (e - se) / Ot + "%", m(n, et), y(n, at)) : n.style.left && (n.style.left = "", m(n, at), y(n, et)), y(n, nt) }
                        setTimeout((function() { v(vt, (function(t) { y(t, "tns-moving") })) }), 300) }(), !we && !Te) { if (i && !z && (Nt === R && Bt === k || (st.style.cssText = In(Nt, Bt, Lt, It, Wt)), ut)) { _ && (ct.style.width = Pn(Lt, Bt, Ot)); var q = zn(Lt, Bt, Ot) + Wn(Bt);! function(t, e) { "deleteRule" in t ? t.deleteRule(e) : t.removeRule(e) }(Ut, d(Ut) - 1), f(Ut, "#" + be + " > .tns-item", q, d(Ut)) }
                    Wt && si(), r && (Ei(), ce = se) }
                i && ge.emit("newBreakpointEnd", _i(e)) } }

        function Un() { if (!Lt && !At) return pt <= (Ht ? Ot - (Ot - 1) / 2 : Ot); var t = Lt ? (Lt + Bt) * pt : yt[pt],
                e = Nt ? St + 2 * Nt : St + Bt; return Ht && (e -= Lt ? (St - Lt) / 2 : (St - (yt[se + 1] - yt[se] - Bt)) / 2), t <= e }

        function _n() { for (var t in ot = 0, J) t = parseInt(t), ht >= t && (ot = t) }

        function Zn() {!Qt && hn && T(hn), !jt && Ze && T(Ze), qt || (Qe ? T(Qe) : (Ye && T(Ye), Ke && T(Ke))) }

        function $n() { Qt && hn && E(hn), jt && Ze && E(Ze), qt && (Qe ? E(Qe) : (Ye && E(Ye), Ke && E(Ke))) }

        function ti() { if (!Ee) { if (Nt && (st.style.margin = "0px"), te)
                    for (var t = "tns-transparent", e = te; e--;) _ && m(vt[e], t), m(vt[ee - e - 1], t);
                Zn(), Ee = !0 } }

        function ei() { if (!Ce) { if (Ut.disabled = !0, ct.className = ct.className.replace(xe.substring(1), ""), C(ct, ["style"]), zt)
                    for (var t = te; t--;) _ && T(vt[t]), T(vt[ee - t - 1]); if (ut && _ || C(st, ["style"]), !_)
                    for (var e = se, n = se + pt; e < n; e++) { var i = vt[e];
                        C(i, ["style"]), y(i, et), y(i, at) }
                Zn(), Ce = !0 } }

        function ni() { var t = ii();
            xt.innerHTML !== t && (xt.innerHTML = t) }

        function ii() { var t = ai(),
                e = t[0] + 1,
                n = t[1] + 1; return e === n ? e + "" : e + " to " + n }

        function ai(t) { null == t && (t = Ti()); var e, n, i, a = se; if (Ht || Nt ? (At || Lt) && (n = -(parseFloat(t) + Nt), i = n + St + 2 * Nt) : At && (n = yt[se], i = n + St), At) yt.forEach((function(t, r) { r < ee && ((Ht || Nt) && t <= n + .5 && (a = r), i - t >= .5 && (e = r)) }));
            else { if (Lt) { var r = Lt + Bt;
                    Ht || Nt ? (a = Math.floor(n / r), e = Math.ceil(i / r - 1)) : e = a + Math.ceil(St / r) - 1 } else if (Ht || Nt) { var o = Ot - 1; if (Ht ? (a -= o / 2, e = se + o / 2) : e = se + o, Nt) { var u = Nt * Ot / St;
                        a -= u, e += u }
                    a = Math.floor(a), e = Math.ceil(e) } else e = a + Ot - 1;
                a = Math.max(a, 0), e = Math.min(e, ee - 1) } return [a, e] }

        function ri() { if (_t && !we) { var t = ai();
                t.push(Zt), li.apply(null, t).forEach((function(t) { if (!h(t, qe)) { var e = {};
                        e[Q] = function(t) { t.stopPropagation() }, O(t, e), O(t, Fe), t.src = x(t, "data-src"); var n = x(t, "data-srcset");
                        n && (t.srcset = n), m(t, "loading") } })) } }

        function oi(t) { m(t, "loaded"), ui(t) }

        function ui(t) { m(t, qe), y(t, "loading"), D(t, Fe) }

        function li(t, e, n) { var i = []; for (n || (n = "img"); t <= e;) v(vt[t].querySelectorAll(n), (function(t) { i.push(t) })), t++; return i }

        function si() { var t = li.apply(null, ai());
            e((function() { ci(t, vi) })) }

        function ci(t, n) { return gt ? n() : (t.forEach((function(e, n) {!_t && e.complete && ui(e), h(e, qe) && t.splice(n, 1) })), t.length ? void e((function() { ci(t, n) })) : n()) }

        function fi() { ri(), hi(), ni(), bi(),
                function() { if (jt && (an = nn >= 0 ? nn : Sn(), nn = -1, an !== rn)) { var t = _e[rn],
                            e = _e[an];
                        w(t, { tabindex: "-1", "aria-label": un + (rn + 1) }), y(t, on), w(e, { "aria-label": un + (an + 1) + ln }), C(e, "tabindex"), m(e, on), rn = an } }() }

        function di(t, e) { for (var n = [], i = t, a = Math.min(t + e, ee); i < a; i++) n.push(vt[i].offsetHeight); return Math.max.apply(null, n) }

        function vi() { var t = Wt ? di(se, Ot) : di(te, pt),
                e = rt || st;
            e.style.height !== t && (e.style.height = t + "px") }

        function pi() { yt = [0]; var t = ut ? "left" : "top",
                e = ut ? "right" : "bottom",
                n = vt[0].getBoundingClientRect()[t];
            v(vt, (function(i, a) { a && yt.push(i.getBoundingClientRect()[t] - n), a === ee - 1 && yt.push(i.getBoundingClientRect()[e] - n) })) }

        function hi() { var t = ai(),
                e = t[0],
                n = t[1];
            v(vt, (function(t, i) { i >= e && i <= n ? g(t, "aria-hidden") && (C(t, ["aria-hidden", "tabindex"]), m(t, We)) : g(t, "aria-hidden") || (w(t, { "aria-hidden": "true", tabindex: "-1" }), y(t, We)) })) }

        function mi(t) { return t.nodeName.toLowerCase() }

        function yi(t) { return "button" === mi(t) }

        function gi(t) { return "true" === t.getAttribute("aria-disabled") }

        function xi(t, e, n) { t ? e.disabled = n : e.setAttribute("aria-disabled", n.toString()) }

        function bi() { if (qt && !Pt && !zt) { var t = Ve ? Ye.disabled : gi(Ye),
                    e = Ge ? Ke.disabled : gi(Ke),
                    n = se <= fe,
                    i = !Pt && se >= de;
                n && !t && xi(Ve, Ye, !0), !n && t && xi(Ve, Ye, !1), i && !e && xi(Ge, Ke, !0), !i && e && xi(Ge, Ke, !1) } }

        function wi(t, e) { F && (t.style[F] = e) }

        function Ci(t) { return null == t && (t = se), At ? (St - (Nt ? Bt : 0) - (yt[t + 1] - yt[t] - Bt)) / 2 : Lt ? (St - Lt) / 2 : (Ot - 1) / 2 }

        function Mi() { var t = St + (Nt ? Bt : 0) - (Lt ? (Lt + Bt) * ee : yt[ee]); return Ht && !zt && (t = Lt ? -(Lt + Bt) * (ee - 1) - Ci() : Ci(ee - 1) - yt[ee - 1]), t > 0 && (t = 0), t }

        function Ti(t) { var e; if (null == t && (t = se), ut && !At)
                if (Lt) e = -(Lt + Bt) * t, Ht && (e += Ci());
                else { var n = W ? ee : Ot;
                    Ht && (t -= Ci()), e = 100 * -t / n }
            else e = -yt[t], Ht && At && (e += Ci()); return ne && (e = Math.max(e, ie)), e += !ut || At || Lt ? "px" : "%" }

        function Ei(t) { wi(ct, "0s"), Ai(t) }

        function Ai(t) { null == t && (t = Ti()), ct.style[re] = oe + t + ue }

        function Li(t, e, n, i) { var a = t + Ot;
            zt || (a = Math.min(a, ee)); for (var r = t; r < a; r++) { var o = vt[r];
                i || (o.style.left = 100 * (r - se) / Ot + "%"), it && j && (o.style[j] = o.style[G] = it * (r - t) / 1e3 + "s"), y(o, e), m(o, n), i && $t.push(o) } }

        function Ni(t, e) { ae && Tn(), (se !== ce || e) && (ge.emit("indexChanged", _i()), ge.emit("transitionStart", _i()), Wt && si(), cn && t && ["click", "keydown"].indexOf(t.type) >= 0 && Pi(), me = !0, En()) }

        function Bi(t) { return t.toLowerCase().replace(/-/g, "") }

        function Si(t) { if (_ || me) { if (ge.emit("transitionEnd", _i(t)), !_ && $t.length > 0)
                    for (var e = 0; e < $t.length; e++) { var n = $t[e];
                        n.style.left = "", G && j && (n.style[G] = "", n.style[j] = ""), y(n, nt), m(n, at) }
                if (!t || !_ && t.target.parentNode === ct || t.target === ct && Bi(t.propertyName) === Bi(re)) { if (!ae) { var i = se;
                        Tn(), se !== i && (ge.emit("indexChanged", _i()), Ei()) } "inner" === U && ge.emit("innerLoaded", _i()), me = !1, ce = se } } }

        function Hi(t, e) { if (!Te)
                if ("prev" === t) Oi(e, -1);
                else if ("next" === t) Oi(e, 1);
            else { if (me) { if (ve) return;
                    Si() } var n = Bn(),
                    i = 0; if ("first" === t ? i = -n : "last" === t ? i = _ ? pt - Ot - n : pt - 1 - n : ("number" != typeof t && (t = parseInt(t)), isNaN(t) || (e || (t = Math.max(0, Math.min(pt - 1, t))), i = t - n)), !_ && i && Math.abs(i) < Ot) { var a = i > 0 ? 1 : -1;
                    i += se + i - pt >= fe ? pt * a : 2 * pt * a * -1 }
                se += i, _ && zt && (se < fe && (se += pt), se > de && (se -= pt)), Bn(se) !== Bn(ce) && Ni(e) } }

        function Oi(t, e) { if (me) { if (ve) return;
                Si() } var n; if (!e) { for (var i = Fi(t = qi(t)); i !== Qe && [Ye, Ke].indexOf(i) < 0;) i = i.parentNode; var a = [Ye, Ke].indexOf(i);
                a >= 0 && (n = !0, e = 0 === a ? -1 : 1) } if (Pt) { if (se === fe && -1 === e) return void Hi("last", t); if (se === de && 1 === e) return void Hi("first", t) }
            e && (se += Dt * e, At && (se = Math.floor(se)), Ni(n || t && "keydown" === t.type ? t : null)) }

        function Di() { sn = setInterval((function() { Oi(null, pn) }), Xt), cn = !0 }

        function ki() { clearInterval(sn), cn = !1 }

        function Ri(t, e) { w(hn, { "data-action": t }), hn.innerHTML = yn[0] + t + yn[1] + e }

        function Ii() { Di(), hn && Ri("stop", Yt[1]) }

        function Pi() { ki(), hn && Ri("start", Yt[0]) }

        function zi() { cn ? (Pi(), dn = !0) : (Ii(), dn = !1) }

        function Wi(t) { t.focus() }

        function qi(t) { return ji(t = t || l.event) ? t.changedTouches[0] : t }

        function Fi(t) { return t.target || l.event.srcElement }

        function ji(t) { return t.type.indexOf("touch") >= 0 }

        function Vi(t) { t.preventDefault ? t.preventDefault() : t.returnValue = !1 }

        function Gi() { return r = wn.y - bn.y, o = wn.x - bn.x, e = Math.atan2(r, o) * (180 / Math.PI), n = pe, i = !1, (a = Math.abs(90 - Math.abs(e))) >= 90 - n ? i = "horizontal" : a <= n && (i = "vertical"), i === t.axis; var e, n, i, a, r, o }

        function Qi(t) { if (me) { if (ve) return;
                Si() }
            Qt && cn && ki(), Cn = !0, xn && (i(xn), xn = null); var e = qi(t);
            ge.emit(ji(t) ? "touchStart" : "dragStart", _i(t)), !ji(t) && ["img", "a"].indexOf(mi(Fi(t))) >= 0 && Vi(t), wn.x = bn.x = e.clientX, wn.y = bn.y = e.clientY, _ && (gn = parseFloat(ct.style[re].replace(oe, "")), wi(ct, "0s")) }

        function Xi(t) { if (Cn) { var n = qi(t);
                wn.x = n.clientX, wn.y = n.clientY, _ ? xn || (xn = e((function() {! function t(n) { if (!he) return void(Cn = !1);
                        i(xn), Cn && (xn = e((function() { t(n) }))); "?" === he && (he = Gi()); if (he) {!je && ji(n) && (je = !0); try { n.type && ge.emit(ji(n) ? "touchMove" : "dragMove", _i(n)) } catch (t) {} var a = gn,
                                r = Mn(wn, bn); if (!ut || Lt || At) a += r, a += "px";
                            else a += W ? r * Ot * 100 / ((St + Bt) * ee) : 100 * r / (St + Bt), a += "%";
                            ct.style[re] = oe + a + ue } }(t) }))) : ("?" === he && (he = Gi()), he && (je = !0)), ("boolean" != typeof t.cancelable || t.cancelable) && je && t.preventDefault() } }

        function Yi(n) { if (Cn) { xn && (i(xn), xn = null), _ && wi(ct, ""), Cn = !1; var a = qi(n);
                wn.x = a.clientX, wn.y = a.clientY; var r = Mn(wn, bn); if (Math.abs(r)) { if (!ji(n)) { var o = Fi(n);
                        O(o, { click: function t(e) { Vi(e), D(o, { click: t }) } }) }
                    _ ? xn = e((function() { if (ut && !At) { var t = -r * Ot / (St + Bt);
                            t = r > 0 ? Math.floor(t) : Math.ceil(t), se += t } else { var e = -(gn + r); if (e <= 0) se = fe;
                            else if (e >= yt[ee - 1]) se = de;
                            else
                                for (var i = 0; i < ee && e >= yt[i];) se = i, e > yt[i] && r < 0 && (se += 1), i++ }
                        Ni(n, r), ge.emit(ji(n) ? "touchEnd" : "dragEnd", _i(n)) })) : he && Oi(n, r > 0 ? -1 : 1) } } "auto" === t.preventScrollOnTouch && (je = !1), pe && (he = "?"), Qt && !cn && Di() }

        function Ki() {
            (rt || st).style.height = yt[se + Ot] - yt[se] + "px" }

        function Ji() { var t = Lt ? (Lt + Bt) * pt / St : pt / Ot; return Math.min(Math.ceil(t), pt) }

        function Ui() { if (jt && !Re && tn !== en) { var t = en,
                    e = tn,
                    n = E; for (en > tn && (t = tn, e = en, n = T); t < e;) n(_e[t]), t++;
                en = tn } }

        function _i(t) { return { container: ct, slideItems: vt, navContainer: Ze, navItems: _e, controlsContainer: Qe, hasControls: De, prevButton: Ye, nextButton: Ke, items: Ot, slideBy: Dt, cloneCount: te, slideCount: pt, slideCountNew: ee, index: se, indexCached: ce, displayIndex: Ln(), navCurrentIndex: an, navCurrentIndexCached: rn, pages: tn, pagesCached: en, sheet: Ut, isOn: mt, event: t || {} } } }; return R }();