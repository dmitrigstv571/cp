<html lang="pt-BR" class="">

<head>
    <style type="text/css">
        [uib-typeahead-popup].dropdown-menu {
            display: block;
        }
    </style>
    <style type="text/css">
        .uib-time input {
            width: 50px;
        }
    </style>
    <style type="text/css">
        [uib-tooltip-popup].tooltip.top-left>.tooltip-arrow,
        [uib-tooltip-popup].tooltip.top-right>.tooltip-arrow,
        [uib-tooltip-popup].tooltip.bottom-left>.tooltip-arrow,
        [uib-tooltip-popup].tooltip.bottom-right>.tooltip-arrow,
        [uib-tooltip-popup].tooltip.left-top>.tooltip-arrow,
        [uib-tooltip-popup].tooltip.left-bottom>.tooltip-arrow,
        [uib-tooltip-popup].tooltip.right-top>.tooltip-arrow,
        [uib-tooltip-popup].tooltip.right-bottom>.tooltip-arrow,
        [uib-tooltip-html-popup].tooltip.top-left>.tooltip-arrow,
        [uib-tooltip-html-popup].tooltip.top-right>.tooltip-arrow,
        [uib-tooltip-html-popup].tooltip.bottom-left>.tooltip-arrow,
        [uib-tooltip-html-popup].tooltip.bottom-right>.tooltip-arrow,
        [uib-tooltip-html-popup].tooltip.left-top>.tooltip-arrow,
        [uib-tooltip-html-popup].tooltip.left-bottom>.tooltip-arrow,
        [uib-tooltip-html-popup].tooltip.right-top>.tooltip-arrow,
        [uib-tooltip-html-popup].tooltip.right-bottom>.tooltip-arrow,
        [uib-tooltip-template-popup].tooltip.top-left>.tooltip-arrow,
        [uib-tooltip-template-popup].tooltip.top-right>.tooltip-arrow,
        [uib-tooltip-template-popup].tooltip.bottom-left>.tooltip-arrow,
        [uib-tooltip-template-popup].tooltip.bottom-right>.tooltip-arrow,
        [uib-tooltip-template-popup].tooltip.left-top>.tooltip-arrow,
        [uib-tooltip-template-popup].tooltip.left-bottom>.tooltip-arrow,
        [uib-tooltip-template-popup].tooltip.right-top>.tooltip-arrow,
        [uib-tooltip-template-popup].tooltip.right-bottom>.tooltip-arrow,
        [uib-popover-popup].popover.top-left>.arrow,
        [uib-popover-popup].popover.top-right>.arrow,
        [uib-popover-popup].popover.bottom-left>.arrow,
        [uib-popover-popup].popover.bottom-right>.arrow,
        [uib-popover-popup].popover.left-top>.arrow,
        [uib-popover-popup].popover.left-bottom>.arrow,
        [uib-popover-popup].popover.right-top>.arrow,
        [uib-popover-popup].popover.right-bottom>.arrow,
        [uib-popover-html-popup].popover.top-left>.arrow,
        [uib-popover-html-popup].popover.top-right>.arrow,
        [uib-popover-html-popup].popover.bottom-left>.arrow,
        [uib-popover-html-popup].popover.bottom-right>.arrow,
        [uib-popover-html-popup].popover.left-top>.arrow,
        [uib-popover-html-popup].popover.left-bottom>.arrow,
        [uib-popover-html-popup].popover.right-top>.arrow,
        [uib-popover-html-popup].popover.right-bottom>.arrow,
        [uib-popover-template-popup].popover.top-left>.arrow,
        [uib-popover-template-popup].popover.top-right>.arrow,
        [uib-popover-template-popup].popover.bottom-left>.arrow,
        [uib-popover-template-popup].popover.bottom-right>.arrow,
        [uib-popover-template-popup].popover.left-top>.arrow,
        [uib-popover-template-popup].popover.left-bottom>.arrow,
        [uib-popover-template-popup].popover.right-top>.arrow,
        [uib-popover-template-popup].popover.right-bottom>.arrow {
            top: auto;
            bottom: auto;
            left: auto;
            right: auto;
            margin: 0;
        }

        [uib-popover-popup].popover,
        [uib-popover-html-popup].popover,
        [uib-popover-template-popup].popover {
            display: block !important;
        }
    </style>
    <style type="text/css">
        .uib-datepicker-popup.dropdown-menu {
            display: block;
            float: none;
            margin: 0;
        }

        .uib-button-bar {
            padding: 10px 9px 2px;
        }
    </style>
    <style type="text/css">
        .uib-position-measure {
            display: block !important;
            visibility: hidden !important;
            position: absolute !important;
            top: -9999px !important;
            left: -9999px !important;
        }

        .uib-position-scrollbar-measure {
            position: absolute !important;
            top: -9999px !important;
            width: 50px !important;
            height: 50px !important;
            overflow: scroll !important;
        }

        .uib-position-body-scrollbar-measure {
            overflow: scroll !important;
        }
    </style>
    <style type="text/css">
        .uib-datepicker .uib-title {
            width: 100%;
        }

        .uib-day button,
        .uib-month button,
        .uib-year button {
            min-width: 100%;
        }

        .uib-left,
        .uib-right {
            width: 100%
        }
    </style>
    <style type="text/css">
        .ng-animate.item:not(.left):not(.right) {
            -webkit-transition: 0s ease-in-out left;
            transition: 0s ease-in-out left
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <style>
        .basepix {
            background: #ffffff;
            padding: 12px;
            display: flex;
            justify-content: center;
        }

        @media (max-width: 600px) {
            .basepix {
                display: block;
            }
        }
    </style>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>
        ! function(e, i) {
            "undefined" != typeof module && module.exports ? module.exports = i() : "function" == typeof define && define
                .amd ? define(i) : this[e] = i()
        }("bowser", function() {
            function e(e) {
                function o(i) {
                    var o = e.match(i);
                    return o && o.length > 1 && o[1] || ""
                }

                function r(i) {
                    var o = e.match(i);
                    return o && o.length > 1 && o[2] || ""
                }
                var s, n = o(/(ipod|iphone|ipad)/i).toLowerCase(),
                    a = /like android/i.test(e),
                    t = !a && /android/i.test(e),
                    d = /CrOS/.test(e),
                    m = o(/edge\/(\d+(\.\d+)?)/i),
                    v = o(/version\/(\d+(\.\d+)?)/i),
                    c = /tablet/i.test(e),
                    w = !c && /[^-]mobi/i.test(e);
                /opera|opr/i.test(e) ? s = {
                        name: "Opera",
                        opera: i,
                        version: v || o(/(?:opera|opr)[\s\/](\d+(\.\d+)?)/i)
                    } : /yabrowser/i.test(e) ? s = {
                        name: "Yandex Browser",
                        yandexbrowser: i,
                        version: v || o(/(?:yabrowser)[\s\/](\d+(\.\d+)?)/i)
                    } : /windows phone/i.test(e) ? (s = {
                            name: "Windows Phone",
                            windowsphone: i
                        },
                        m ? (s.msedge = i,
                            s.version = m) : (s.msie = i,
                            s.version = o(/iemobile\/(\d+(\.\d+)?)/i))) : /msie|trident/i.test(e) ? s = {
                        name: "Internet Explorer",
                        msie: i,
                        version: o(/(?:msie |rv:)(\d+(\.\d+)?)/i)
                    } : d ? s = {
                        name: "Chrome",
                        chromeBook: i,
                        chrome: i,
                        version: o(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)
                    } : /chrome.+? edge/i.test(e) ? s = {
                        name: "Microsoft Edge",
                        msedge: i,
                        version: m
                    } : /chrome|crios|crmo/i.test(e) ? s = {
                        name: "Chrome",
                        chrome: i,
                        version: o(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)
                    } : n ? (s = {
                            name: "iphone" == n ? "iPhone" : "ipad" == n ? "iPad" : "iPod"
                        },
                        v && (s.version = v)) : /sailfish/i.test(e) ? s = {
                        name: "Sailfish",
                        sailfish: i,
                        version: o(/sailfish\s?browser\/(\d+(\.\d+)?)/i)
                    } : /seamonkey\//i.test(e) ? s = {
                        name: "SeaMonkey",
                        seamonkey: i,
                        version: o(/seamonkey\/(\d+(\.\d+)?)/i)
                    } : /firefox|iceweasel/i.test(e) ? (s = {
                            name: "Firefox",
                            firefox: i,
                            version: o(/(?:firefox|iceweasel)[ \/](\d+(\.\d+)?)/i)
                        },
                        /\((mobile|tablet);[^\)]*rv:[\d\.]+\)/i.test(e) && (s.firefoxos = i)) : /silk/i.test(e) ? s = {
                        name: "Amazon Silk",
                        silk: i,
                        version: o(/silk\/(\d+(\.\d+)?)/i)
                    } : t ? s = {
                        name: "Android",
                        version: v
                    } : /phantom/i.test(e) ? s = {
                        name: "PhantomJS",
                        phantom: i,
                        version: o(/phantomjs\/(\d+(\.\d+)?)/i)
                    } : /blackberry|\bbb\d+/i.test(e) || /rim\stablet/i.test(e) ? s = {
                        name: "BlackBerry",
                        blackberry: i,
                        version: v || o(/blackberry[\d]+\/(\d+(\.\d+)?)/i)
                    } : /(web|hpw)os/i.test(e) ? (s = {
                            name: "WebOS",
                            webos: i,
                            version: v || o(/w(?:eb)?osbrowser\/(\d+(\.\d+)?)/i)
                        },
                        /touchpad\//i.test(e) && (s.touchpad = i)) : s = /bada/i.test(e) ? {
                        name: "Bada",
                        bada: i,
                        version: o(/dolfin\/(\d+(\.\d+)?)/i)
                    } : /tizen/i.test(e) ? {
                        name: "Tizen",
                        tizen: i,
                        version: o(/(?:tizen\s?)?browser\/(\d+(\.\d+)?)/i) || v
                    } : /safari/i.test(e) ? {
                        name: "Safari",
                        safari: i,
                        version: v
                    } : {
                        name: o(/^(.*)\/(.*) /),
                        version: r(/^(.*)\/(.*) /)
                    },
                    !s.msedge && /(apple)?webkit/i.test(e) ? (s.name = s.name || "Webkit",
                        s.webkit = i,
                        !s.version && v && (s.version = v)) : !s.opera && /gecko\//i.test(e) && (s.name = s.name ||
                        "Gecko",
                        s.gecko = i,
                        s.version = s.version || o(/gecko\/(\d+(\.\d+)?)/i)),
                    s.msedge || !t && !s.silk ? n && (s[n] = i,
                        s.ios = i) : s.android = i;
                var b = "";
                s.windowsphone ? b = o(/windows phone (?:os)?\s?(\d+(\.\d+)*)/i) : n ? (b = o(
                            /os (\d+([_\s]\d+)*) like mac os x/i),
                        b = b.replace(/[_\s]/g, ".")) : t ? b = o(/android[ \/-](\d+(\.\d+)*)/i) : s.webos ? b = o(
                        /(?:web|hpw)os\/(\d+(\.\d+)*)/i) : s.blackberry ? b = o(/rim\stablet\sos\s(\d+(\.\d+)*)/i) : s
                    .bada ? b = o(/bada\/(\d+(\.\d+)*)/i) : s.tizen && (b = o(/tizen[\/\s](\d+(\.\d+)*)/i)),
                    b && (s.osversion = b);
                var p = b.split(".")[0];
                return c || "ipad" == n || t && (3 == p || 4 == p && !w) || s.silk ? s.tablet = i : (w || "iphone" ==
                        n || "ipod" == n || t || s.blackberry || s.webos || s.bada) && (s.mobile = i),
                    s.msedge || s.msie && s.version >= 10 || s.yandexbrowser && s.version >= 15 || s.chrome && s
                    .version >= 20 || s.firefox && s.version >= 20 || s.safari && s.version >= 6 || s.opera && s
                    .version >= 10 || s.ios && s.osversion && s.osversion.split(".")[0] >= 6 || s.blackberry && s
                    .version >= 10.1 ? s.a = i : s.msie && s.version < 10 || s.chrome && s.version < 20 || s.firefox &&
                    s.version < 20 || s.safari && s.version < 6 || s.opera && s.version < 10 || s.ios && s.osversion &&
                    s.osversion.split(".")[0] < 6 ? s.c = i : s.x = i,
                    s
            }
            var i = !0,
                o = e("undefined" != typeof navigator ? navigator.userAgent : "");
            return o.test = function(e) {
                    for (var i = 0; i < e.length; ++i) {
                        var r = e[i];
                        if ("string" == typeof r && r in o)
                            return !0
                    }
                    return !1
                },
                o._detect = e,
                o
        });
        var browser_verf = function(e) {
                return e.msie && e.version < 10 || e.chrome && e.version < 47 && !e.ios && !e.android && !e.windowsphone ||
                    e.firefox && e.version < 42 && !e.ios && !e.android && !e.windowsphone || e.safari && e.version < 5 && !
                    e.ios && !e.android && !e.windowsphone || e.opera && e.version < 34 && !e.ios && !e.android && !e
                    .windowsphone
            },
            browser_ie = function(e) {
                return e.msie
            };
        browser_verf(bowser) && (window.location.href = window.location.protocol + "//" + window.location.hostname + (window
            .location.port ? ":" + window.location.port : "") + "/agencia-webapp/erro.html");
    </script>
    <title>CPFL Energia - Serviços OnLine</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta name="theme-color" content="#006699">
    <meta name="keywords" content="Transmissão e Energia, Produtos de Energia, Subestação, Subestações, Linhas de Transmissão, Empresas de Energia, Sustentabilidade, Mercado Livre, Mercado Cativo, Energia Elétrica, Energia Sustentável, Energia Renovável, Energia">
    <link rel="stylesheet" href="/faturas//loadingScreen.css">
    <link rel="stylesheet" href="/faturas//app.css">
    <link rel="stylesheet" href="/faturas//vendor.css">
    <link rel="stylesheet" href="/faturas//font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css"></style>
    <style>
        .swal2-popup.swal2-toast {
            box-sizing: border-box;
            grid-column: 1/4 !important;
            grid-row: 1/4 !important;
            grid-template-columns: min-content auto min-content;
            padding: 1em;
            overflow-y: hidden;
            background: #fff;
            box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
            pointer-events: all
        }

        .swal2-popup.swal2-toast>* {
            grid-column: 2
        }

        .swal2-popup.swal2-toast .swal2-title {
            margin: .5em 1em;
            padding: 0;
            font-size: 1em;
            text-align: initial
        }

        .swal2-popup.swal2-toast .swal2-loading {
            justify-content: center
        }

        .swal2-popup.swal2-toast .swal2-input {
            height: 2em;
            margin: .5em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-validation-message {
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            grid-column: 3/3;
            grid-row: 1/99;
            align-self: center;
            width: .8em;
            height: .8em;
            margin: 0;
            font-size: 2em
        }

        .swal2-popup.swal2-toast .swal2-html-container {
            margin: .5em 1em;
            padding: 0;
            overflow: initial;
            font-size: 1em;
            text-align: initial
        }

        .swal2-popup.swal2-toast .swal2-html-container:empty {
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-loader {
            grid-column: 1;
            grid-row: 1/99;
            align-self: center;
            width: 2em;
            height: 2em;
            margin: .25em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            grid-column: 1;
            grid-row: 1/99;
            align-self: center;
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0 .5em 0 0
        }

        .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 1.8em;
            font-weight: bold
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            justify-content: flex-start;
            height: auto;
            margin: 0;
            margin-top: .5em;
            padding: 0 .5em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: .25em .5em;
            padding: .4em .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 1.6em;
            height: 3em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -0.8em;
            left: -0.5em;
            transform: rotate(-45deg);
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -0.25em;
            left: .9375em;
            transform-origin: 0 1.5em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
            animation: swal2-toast-animate-success-line-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
            animation: swal2-toast-animate-success-line-long .75s
        }

        .swal2-popup.swal2-toast.swal2-show {
            animation: swal2-toast-show .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            animation: swal2-toast-hide .1s forwards
        }

        .swal2-container {
            display: grid;
            position: fixed;
            z-index: 1060;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-sizing: border-box;
            grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
            grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
            height: 100%;
            padding: .625em;
            overflow-x: hidden;
            transition: background-color .1s;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-backdrop-show,
        .swal2-container.swal2-noanimation {
            background: rgba(0, 0, 0, .4)
        }

        .swal2-container.swal2-backdrop-hide {
            background: rgba(0, 0, 0, 0) !important
        }

        .swal2-container.swal2-top-start,
        .swal2-container.swal2-center-start,
        .swal2-container.swal2-bottom-start {
            grid-template-columns: minmax(0, 1fr) auto auto
        }

        .swal2-container.swal2-top,
        .swal2-container.swal2-center,
        .swal2-container.swal2-bottom {
            grid-template-columns: auto minmax(0, 1fr) auto
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-center-end,
        .swal2-container.swal2-bottom-end {
            grid-template-columns: auto auto minmax(0, 1fr)
        }

        .swal2-container.swal2-top-start>.swal2-popup {
            align-self: start
        }

        .swal2-container.swal2-top>.swal2-popup {
            grid-column: 2;
            align-self: start;
            justify-self: center
        }

        .swal2-container.swal2-top-end>.swal2-popup,
        .swal2-container.swal2-top-right>.swal2-popup {
            grid-column: 3;
            align-self: start;
            justify-self: end
        }

        .swal2-container.swal2-center-start>.swal2-popup,
        .swal2-container.swal2-center-left>.swal2-popup {
            grid-row: 2;
            align-self: center
        }

        .swal2-container.swal2-center>.swal2-popup {
            grid-column: 2;
            grid-row: 2;
            align-self: center;
            justify-self: center
        }

        .swal2-container.swal2-center-end>.swal2-popup,
        .swal2-container.swal2-center-right>.swal2-popup {
            grid-column: 3;
            grid-row: 2;
            align-self: center;
            justify-self: end
        }

        .swal2-container.swal2-bottom-start>.swal2-popup,
        .swal2-container.swal2-bottom-left>.swal2-popup {
            grid-column: 1;
            grid-row: 3;
            align-self: end
        }

        .swal2-container.swal2-bottom>.swal2-popup {
            grid-column: 2;
            grid-row: 3;
            justify-self: center;
            align-self: end
        }

        .swal2-container.swal2-bottom-end>.swal2-popup,
        .swal2-container.swal2-bottom-right>.swal2-popup {
            grid-column: 3;
            grid-row: 3;
            align-self: end;
            justify-self: end
        }

        .swal2-container.swal2-grow-row>.swal2-popup,
        .swal2-container.swal2-grow-fullscreen>.swal2-popup {
            grid-column: 1/4;
            width: 100%
        }

        .swal2-container.swal2-grow-column>.swal2-popup,
        .swal2-container.swal2-grow-fullscreen>.swal2-popup {
            grid-row: 1/4;
            align-self: stretch
        }

        .swal2-container.swal2-no-transition {
            transition: none !important
        }

        .swal2-popup {
            display: none;
            position: relative;
            box-sizing: border-box;
            grid-template-columns: minmax(0, 100%);
            width: 32em;
            max-width: 100%;
            padding: 0 0 1.25em;
            border: none;
            border-radius: 5px;
            background: #fff;
            color: #545454;
            font-family: inherit;
            font-size: 1rem
        }

        .swal2-popup:focus {
            outline: none
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-title {
            position: relative;
            max-width: 100%;
            margin: 0;
            padding: .8em 1em 0;
            color: inherit;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-actions {
            display: flex;
            z-index: 1;
            box-sizing: border-box;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: auto;
            margin: 1.25em auto 0;
            padding: 0
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
        }

        .swal2-loader {
            display: none;
            align-items: center;
            justify-content: center;
            width: 2.2em;
            height: 2.2em;
            margin: 0 1.875em;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border-width: .25em;
            border-style: solid;
            border-radius: 100%;
            border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
        }

        .swal2-styled {
            margin: .3125em;
            padding: .625em 1.1em;
            transition: box-shadow .1s;
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
            font-weight: 500
        }

        .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #7066e0;
            color: #fff;
            font-size: 1em
        }

        .swal2-styled.swal2-confirm:focus {
            box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
        }

        .swal2-styled.swal2-deny {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #dc3741;
            color: #fff;
            font-size: 1em
        }

        .swal2-styled.swal2-deny:focus {
            box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
        }

        .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #6e7881;
            color: #fff;
            font-size: 1em
        }

        .swal2-styled.swal2-cancel:focus {
            box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
        }

        .swal2-styled.swal2-default-outline:focus {
            box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-styled:focus {
            outline: none
        }

        .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-footer {
            justify-content: center;
            margin: 1em 0 0;
            padding: 1em 1em 0;
            border-top: 1px solid #eee;
            color: inherit;
            font-size: 1em
        }

        .swal2-timer-progress-bar-container {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            grid-column: auto !important;
            overflow: hidden;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px
        }

        .swal2-timer-progress-bar {
            width: 100%;
            height: .25em;
            background: rgba(0, 0, 0, .2)
        }

        .swal2-image {
            max-width: 100%;
            margin: 2em auto 1em
        }

        .swal2-close {
            z-index: 2;
            align-items: center;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            margin-top: 0;
            margin-right: 0;
            margin-bottom: -1.2em;
            padding: 0;
            overflow: hidden;
            transition: color .1s, box-shadow .1s;
            border: none;
            border-radius: 5px;
            background: rgba(0, 0, 0, 0);
            color: #ccc;
            font-family: serif;
            font-family: monospace;
            font-size: 2.5em;
            cursor: pointer;
            justify-self: end
        }

        .swal2-close:hover {
            transform: none;
            background: rgba(0, 0, 0, 0);
            color: #f27474
        }

        .swal2-close:focus {
            outline: none;
            box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-close::-moz-focus-inner {
            border: 0
        }

        .swal2-html-container {
            z-index: 1;
            justify-content: center;
            margin: 1em 1.6em .3em;
            padding: 0;
            overflow: auto;
            color: inherit;
            font-size: 1.125em;
            font-weight: normal;
            line-height: normal;
            text-align: center;
            word-wrap: break-word;
            word-break: break-word
        }

        .swal2-input,
        .swal2-file,
        .swal2-textarea,
        .swal2-select,
        .swal2-radio,
        .swal2-checkbox {
            margin: 1em 2em 3px
        }

        .swal2-input,
        .swal2-file,
        .swal2-textarea {
            box-sizing: border-box;
            width: auto;
            transition: border-color .1s, box-shadow .1s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            background: rgba(0, 0, 0, 0);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
            color: inherit;
            font-size: 1.125em
        }

        .swal2-input.swal2-inputerror,
        .swal2-file.swal2-inputerror,
        .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-input:focus,
        .swal2-file:focus,
        .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: none;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-input::placeholder,
        .swal2-file::placeholder,
        .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-range {
            margin: 1em 2em 3px;
            background: #fff
        }

        .swal2-range input {
            width: 80%
        }

        .swal2-range output {
            width: 20%;
            color: inherit;
            font-weight: 600;
            text-align: center
        }

        .swal2-range input,
        .swal2-range output {
            height: 2.625em;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        .swal2-file {
            width: 75%;
            margin-right: auto;
            margin-left: auto;
            background: rgba(0, 0, 0, 0);
            font-size: 1.125em
        }

        .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            background: rgba(0, 0, 0, 0);
            color: inherit;
            font-size: 1.125em
        }

        .swal2-radio,
        .swal2-checkbox {
            align-items: center;
            justify-content: center;
            background: #fff;
            color: inherit
        }

        .swal2-radio label,
        .swal2-checkbox label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-radio input,
        .swal2-checkbox input {
            flex-shrink: 0;
            margin: 0 .4em
        }

        .swal2-input-label {
            display: flex;
            justify-content: center;
            margin: 1em auto 0
        }

        .swal2-validation-message {
            align-items: center;
            justify-content: center;
            margin: 1em 0 0;
            padding: .625em;
            overflow: hidden;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300
        }

        .swal2-validation-message::before {
            content: "!";
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center
        }

        .swal2-icon {
            position: relative;
            box-sizing: content-box;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 2.5em auto .6em;
            border: 0.25em solid rgba(0, 0, 0, 0);
            border-radius: 50%;
            border-color: #000;
            font-family: inherit;
            line-height: 5em;
            cursor: default;
            user-select: none
        }

        .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
            color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-error.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
            animation: swal2-animate-error-x-mark .5s
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-warning.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        .swal2-icon.swal2-warning.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-i-mark .5s
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-info.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        .swal2-icon.swal2-info.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-i-mark .8s
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-question.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        .swal2-icon.swal2-question.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-question-mark .8s
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
            color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -0.4375em;
            left: -2.0635em;
            transform: rotate(-45deg);
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -0.6875em;
            left: 1.875em;
            transform: rotate(-45deg);
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            z-index: 2;
            top: -0.25em;
            left: -0.25em;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            z-index: 1;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            z-index: 2;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .8125em;
            width: 1.5625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-progress-steps {
            flex-wrap: wrap;
            align-items: center;
            max-width: 100%;
            margin: 1.25em auto;
            padding: 0;
            background: rgba(0, 0, 0, 0);
            font-weight: 600
        }

        .swal2-progress-steps li {
            display: inline-block;
            position: relative
        }

        .swal2-progress-steps .swal2-progress-step {
            z-index: 20;
            flex-shrink: 0;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #2778c4;
            color: #fff;
            line-height: 2em;
            text-align: center
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
            background: #2778c4
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
            background: #add8e6;
            color: #fff
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
            background: #add8e6
        }

        .swal2-progress-steps .swal2-progress-step-line {
            z-index: 10;
            flex-shrink: 0;
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #2778c4
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .swal2-show {
            animation: swal2-show .3s
        }

        .swal2-hide {
            animation: swal2-hide .15s forwards
        }

        .swal2-noanimation {
            transition: none
        }

        .swal2-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        .swal2-rtl .swal2-close {
            margin-right: initial;
            margin-left: 0
        }

        .swal2-rtl .swal2-timer-progress-bar {
            right: 0;
            left: auto
        }

        @keyframes swal2-toast-show {
            0% {
                transform: translateY(-0.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(0.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0deg)
            }
        }

        @keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -0.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes swal2-show {
            0% {
                transform: scale(0.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(0.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(0.5);
                opacity: 0
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -0.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(0.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(0.4);
                opacity: 0
            }

            80% {
                margin-top: -0.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-animate-question-mark {
            0% {
                transform: rotateY(-360deg)
            }

            100% {
                transform: rotateY(0)
            }
        }

        @keyframes swal2-animate-i-mark {
            0% {
                transform: rotateZ(45deg);
                opacity: 0
            }

            25% {
                transform: rotateZ(-25deg);
                opacity: .4
            }

            50% {
                transform: rotateZ(15deg);
                opacity: .8
            }

            75% {
                transform: rotateZ(-5deg);
                opacity: 1
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-container {
            background-color: rgba(0, 0, 0, 0) !important;
            pointer-events: none
        }

        body.swal2-no-backdrop .swal2-container .swal2-popup {
            pointer-events: all
        }

        body.swal2-no-backdrop .swal2-container .swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: static !important
            }
        }

        body.swal2-toast-shown .swal2-container {
            box-sizing: border-box;
            width: 360px;
            max-width: 100%;
            background-color: rgba(0, 0, 0, 0);
            pointer-events: none
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-start,
        body.swal2-toast-shown .swal2-container.swal2-top-left {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-start,
        body.swal2-toast-shown .swal2-container.swal2-center-left {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-start,
        body.swal2-toast-shown .swal2-container.swal2-bottom-left {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }
    </style>
</head>

<body data-="" class="pg-loaded" style="overflow: visible; padding-right: 0px;">
    <style>
        .embeddedServiceHelpButton .helpButton .uiButton {
            background-color: #006699;
            font-family: 'Lato', sans-serif;
            font-size: 12px;
            display: block;
        }

        .embeddedServiceHelpButton .helpButton .uiButton:focus {
            outline: 1px solid #006699;
        }

        .embeddedServiceHelpButton .helpButton .uiButton .embeddedServiceIcon::before {
            font-family: 'embeddedserviceiconfont' !important;
        }

        .embeddedServiceLiveAgentStateChatMenuMessage .rich-menu-item,
        .embeddedServiceLiveAgentStateChatMenuMessage .rich-menu-itemOptionIsClicked {
            text-align: center;
            font-family: 'Lato', sans-serif;
            font-size: 12px;
            padding: 12px 5px;
            display: block;
            width: inherit;
            margin: 0;
        }

        .embeddedServiceLiveAgentStateChatMessage .uiOutputRichText {
            text-align: left;
            font-family: 'Lato', sans-serif;
            font-size: 12px;
        }

        .embeddedServiceLiveAgentStateChatPlaintextMessageDefaultUI.agent.plaintextContent {
            color: #444C64;
            font-family: 'Lato', sans-serif;
            background: #D8D8E0;
            border-radius: 10px 10px 10px 0;
            float: left;
        }

        .embeddedServiceLiveAgentStateChatPlaintextMessageDefaultUI.chasitor.plaintextContent {
            font-family: 'Lato', sans-serif;
            background: #006699;
            color: #FFFFFF;
        }

        .message {
            font-size: 12px;
            color: #FFFFFF;
            font-family: 'Lato', sans-serif;
        }

        .headerTextContent {
            font-size: 12px;
            color: #FFFFFF;
            font-family: 'Lato', sans-serif;
        }
    </style>
    <script>
        var dataLayer = window.dataLayer = window.dataLayer || [];
    </script>
    <script>
        ! function(n, i) {
            "object" == typeof exports ? i(exports) : "function" == typeof define && define.amd ? define(["exports"], i) :
                i(n)
        }(this, function(n) {
            var i, t, o, l, e, a, s, d, r, m, g, h, u, c, p, _;
            a = document.createElement("fakeelement"),
                l = !1,
                u = !1,
                o = "animationend",
                h = null,
                e = "Webkit Moz O ms".split(" "),
                g = {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd",
                    msTransition: "MSTransitionEnd",
                    transition: "transitionend"
                };
            for (s in g)
                if (c = g[s],
                    null != a.style[s]) {
                    h = c,
                        u = !0;
                    break
                }
            if (null != a.style.animationName && (l = !0),
                !l)
                for (p = 0,
                    _ = e.length; _ > p; p++)
                    if (d = e[p],
                        null != a.style["" + d + "AnimationName"]) {
                        switch (d) {
                            case "Webkit":
                                o = "webkitAnimationEnd";
                                break;
                            case "Moz":
                                o = "animationend";
                                break;
                            case "O":
                                o = "oanimationend";
                                break;
                            case "ms":
                                o = "MSAnimationEnd"
                        }
                        l = !0;
                        break
                    }
            return t = function(n, i) {
                    return i.classList ? i.classList.add(n) : i.className += " " + n
                },
                m = function(n, i) {
                    return i.classList ? i.classList.remove(n) : i.className = i.className.replace(n, "").trim()
                },
                i = function() {
                    function n(n) {
                        var i, e, a, s;
                        i = this.constructor._defaultOptions,
                            this.options = {},
                            this.loaded = !1,
                            this.finishing = !1;
                        for (e in i)
                            s = i[e],
                            this.options[e] = null != n[e] ? n[e] : s;
                        this._loadingElem = document.createElement("div"),
                            this._loadingHtmlToDisplay = [],
                            this._loadingElem.className = "pg-loading-screen",
                            null != this.options.backgroundColor && (this._loadingElem.style.backgroundColor = this
                                .options.backgroundColor),
                            this._loadingElem.innerHTML = this.options.template,
                            this._loadingHtmlElem = this._loadingElem.getElementsByClassName("pg-loading-html")[0],
                            null != this._loadingHtmlElem && (this._loadingHtmlElem.innerHTML = this.options
                                .loadingHtml),
                            this._readyToShowLoadingHtml = !1,
                            this._logoElem = this._loadingElem.getElementsByClassName("pg-loading-logo")[0],
                            null != this._logoElem && (this._logoElem.src = this.options.logo),
                            m("pg-loaded", document.body),
                            t("pg-loading", document.body),
                            document.body.appendChild(this._loadingElem),
                            t("pg-loading", this._loadingElem),
                            this._onLoadedCallback = this.options.onLoadedCallback,
                            a = function(n) {
                                return function(i) {
                                    return n.loaded = !0,
                                        n._readyToShowLoadingHtml = !0,
                                        t("pg-loaded", n._loadingHtmlElem),
                                        l && n._loadingHtmlElem.removeEventListener(o, a),
                                        n._loadingHtmlToDisplay.length > 0 && n._changeLoadingHtml(),
                                        n.finishing ? (null != i && i.stopPropagation(),
                                            n._finish()) : void 0
                                }
                            }(this),
                            null != this._loadingHtmlElem && (l ? this._loadingHtmlElem.addEventListener(o, a) : a(),
                                this._loadingHtmlListener = function(n) {
                                    return function() {
                                        return n._readyToShowLoadingHtml = !0,
                                            m("pg-loading", n._loadingHtmlElem),
                                            u && n._loadingHtmlElem.removeEventListener(h, n._loadingHtmlListener),
                                            n._loadingHtmlToDisplay.length > 0 ? n._changeLoadingHtml() : void 0
                                    }
                                }(this),
                                this._removingHtmlListener = function(n) {
                                    return function() {
                                        return n._loadingHtmlElem.innerHTML = n._loadingHtmlToDisplay.shift(),
                                            m("pg-removing", n._loadingHtmlElem),
                                            t("pg-loading", n._loadingHtmlElem),
                                            u ? (n._loadingHtmlElem.removeEventListener(h, n._removingHtmlListener),
                                                n._loadingHtmlElem.addEventListener(h, n._loadingHtmlListener)) : n
                                            ._loadingHtmlListener()
                                    }
                                }(this))
                    }
                    return n._defaultOptions = {
                            backgroundColor: null,
                            logo: null,
                            loadingHtml: null,
                            template: "<div class='pg-loading-inner'>\n  <div class='pg-loading-center-outer'>\n    <div class='pg-loading-center-middle'>\n      <h1 class='pg-loading-logo-header'>\n        <img class='pg-loading-logo'></img>\n      </h1>\n      <div class='pg-loading-html'>\n      </div>\n    </div>\n  </div>\n</div>",
                            onLoadedCallback: null
                        },
                        n.prototype.finish = function(n, i) {
                            return null == n && (n = !1),
                                window.document.hidden && (n = !0),
                                this.finishing = !0,
                                null != i && this.updateOption("onLoadedCallback", i),
                                this.loaded || n ? this._finish(n) : void 0
                        },
                        n.prototype.updateOption = function(n, i) {
                            switch (n) {
                                case "backgroundColor":
                                    return this._loadingElem.style.backgroundColor = i;
                                case "logo":
                                    return this._logoElem.src = i;
                                case "loadingHtml":
                                    return this.updateLoadingHtml(i);
                                case "onLoadedCallback":
                                    return this._onLoadedCallback = i;
                                default:
                                    throw new Error("Unknown option '" + n + "'")
                            }
                        },
                        n.prototype.updateOptions = function(n) {
                            var i, t, o;
                            null == n && (n = {}),
                                o = [];
                            for (i in n)
                                t = n[i],
                                o.push(this.updateOption(i, t));
                            return o
                        },
                        n.prototype.updateLoadingHtml = function(n, i) {
                            if (null == i && (i = !1),
                                null == this._loadingHtmlElem)
                                throw new Error(
                                    "The loading template does not have an element of class 'pg-loading-html'");
                            return i ? (this._loadingHtmlToDisplay = [n],
                                    this._readyToShowLoadingHtml = !0) : this._loadingHtmlToDisplay.push(n),
                                this._readyToShowLoadingHtml ? this._changeLoadingHtml() : void 0
                        },
                        n.prototype._changeLoadingHtml = function() {
                            return this._readyToShowLoadingHtml = !1,
                                this._loadingHtmlElem.removeEventListener(h, this._loadingHtmlListener),
                                this._loadingHtmlElem.removeEventListener(h, this._removingHtmlListener),
                                m("pg-loading", this._loadingHtmlElem),
                                m("pg-removing", this._loadingHtmlElem),
                                u ? (t("pg-removing", this._loadingHtmlElem),
                                    this._loadingHtmlElem.addEventListener(h, this._removingHtmlListener)) : this
                                ._removingHtmlListener()
                        },
                        n.prototype._finish = function(n) {
                            var i;
                            return null == n && (n = !1),
                                null != this._loadingElem ? (t("pg-loaded", document.body),
                                    "function" == typeof this._onLoadedCallback && this._onLoadedCallback.apply(this),
                                    i = function(n) {
                                        return function() {
                                            return document.body.removeChild(n._loadingElem),
                                                m("pg-loading", document.body),
                                                l && n._loadingElem.removeEventListener(o, i),
                                                n._loadingElem = null
                                        }
                                    }(this),
                                    !n && l ? (t("pg-loaded", this._loadingElem),
                                        this._loadingElem.addEventListener(o, i)) : i()) : void 0
                        },
                        n
                }(),
                r = function(n) {
                    return null == n && (n = {}),
                        new i(n)
                },
                n.pleaseWait = r,
                r
        }),
        window.loading_screen = window.pleaseWait({
            logo: "/index/images/logos/logo-cpfl-energia.svg",
            backgroundColor: "#006699",
            loadingHtml: "<div class='spinner-initial-loader'><div class='bounce1'></div><div class='bounce2'></div><div class='bounce3'></div></div>"
        });
    </script>
    <div class="cpfl-style">
        <!-- uiView: -->
        <div ui-view="" autoscroll="false" class="ng-scope">
            <script type="text/javascript" class="ng-scope">
                if (window.loading_screen && window.loading_screen.finishing == false) {
                    window.loading_screen.finish();
                }
            </script>
            <div ng-controller="MenuController as menuCtrl" class="ng-scope">
                <main id="panelMobile" class="panelMobile slideout-panel slideout-panel-left">
                    <div class="container-fluid">
                        <!-- ngIf: menuCtrl.showMenuContingencia -->
                        <div ng-if="menuCtrl.showMenuContingencia" id="menu-header" class="ng-scope">
                            <!-- ngInclude: -->
                            <ng-include src="'modules/common/partials/menu-superior.html'" class="ng-scope">
                                <div class="row ng-scope">
                                    <nav class="navbar navbar-custom navbar-fixed-top navbar-static-top">
                                        <div class="container">
                                            <div class="navbar-header">
                                                <!-- ngIf: menuCtrl.showMenu() -->
                                                <button id="btnMenu" type="button" class="navbar-toggle toggle-button ng-scope" ng-click="menuCtrl.toggleMenu()" ng-if="menuCtrl.showMenu()">
                                                    <span class="hamburguer"></span>
                                                </button>
                                                <!-- end ngIf: menuCtrl.showMenu() -->
                                                <div class="navbar-brand navbar-brand-cpfl-energia" ng-class="{'navbar-brand-cpfl-energia':menuCtrl.logo == './cpfl/images/logos/logo-cpfl-energia.svg' }">
                                                    <a ui-sref="app.home" ui-sref-opts="{reload: true}" href="#/home">
                                                        <img class="navbar-logo-empresa" ng-src="./cpfl/images/logos/logo-cpfl-energia.svg" src="/faturas//logo-cpfl-energia.svg">
                                                    </a>
                                                </div>
                                                <!-- ngIf: menuCtrl.isLogged -->
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </ng-include>
                        </div>
                        <!-- end ngIf: menuCtrl.showMenuContingencia -->
                        <!-- ngIf: !menuCtrl.showMenuContingencia -->
                        <!-- ngIf: menuCtrl.exibirMenuServicos -->
                        <subcabecalho ng-if="menuCtrl.exibirMenuServicos" class="ng-scope ng-isolate-scope">
                            <style type="text/css"></style>
                            <!-- ngIf: vm.isAuthenticated() && vm.isCredenciado() && vm.showSubcabecalho() -->
                            <!-- ngIf: vm.isAuthenticated() && vm.isCredenciado() && !vm.showSubcabecalho() && vm.verificaProcedimentos() -->
                            <!-- ngIf: vm.isAuthenticated() && !vm.isCredenciado() -->
                        </subcabecalho>
                        <!-- end ngIf: menuCtrl.exibirMenuServicos -->
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-24">
                                        <!-- uiView: content -->
                                        <div ui-view="content" autoscroll="false" class="pages-content ng-scope">
                                            <div id="HistoricoContas" class="historico-contas ng-scope">
                                                <div class="row">
                                                    <div class="col-xs-24">
                                                        <!-- ngIf: vm.situacao.Protocolo -->
                                                        <section id="info-protocolo" ng-if="vm.situacao.Protocolo" class="ng-scope">
                                                            <div class="protocolo">
                                                                <div class="protocolo-primary">
                                                                    <span translate="@APP-VIA-PAGAMENTO-PROTOCOLO" class="ng-scope">Protocolo de Atendimento:
                                                                    </span>
                                                                    <span class="numero-protocolo ng-binding" ng-bind="vm.situacao.Protocolo">1352260922</span>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <!-- end ngIf: vm.situacao.Protocolo -->
                                                    </div>
                                                    <!-- ngIf: vm.situacao -->
                                                    <div ng-if="vm.situacao" class="ng-scope">
                                                        <div class="row">
                                                            <div class="col-xs-24">
                                                                <alert target="via-pagamento" class="ng-isolate-scope">
                                                                    <!-- ngRepeat: alert in $ctrl.alerts  | filter: $ctrl.filtro -->
                                                                </alert>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-24">
                                                                <section id="debitosPendentes" class="historicoContas">
                                                                    <div class="panel panel-default">
                                                                        <div class="panelHistoricoContasHeader">
                                                                            <!-- ngIf: !vm.possuiDebitosEmAberto -->
                                                                            <!-- ngIf: vm.possuiDebitosEmAberto -->
                                                                            <div class="panel-heading ng-scope" ng-if="vm.possuiDebitosEmAberto">

                                                                                <span ng-bind="vm.valorDebitos | currency" class="historicoContasValor ng-binding">R$ {{ str_replace('.', ',',$obj->valor_total)}}</span>
                                                                                <span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-TITULO" class="historicoContasTitulo ng-scope">Total
                                                                                    de débitos em aberto</span>
                                                                            </div>
                                                                            <!-- end ngIf: vm.possuiDebitosEmAberto -->
                                                                        </div>
                                                                        <div class="alert alert-warning" role="alert">
                                                                            <div class="alert-icon warning-icon"></div>
                                                                            <span class="alert-message ng-scope" translate="@APP-VIA-PAGAMENTO-ALERTA-PRIVACIDADE">Para
                                                                                manter a privacidade dos seus dados
                                                                                ocultamos parte do nome e endereço na
                                                                                via simplificada</span>
                                                                        </div>
                                                                        <!-- ngIf: vm.possuiDebitosEmAberto -->
                                                                        <div class="panel-body ng-scope" ng-if="vm.possuiDebitosEmAberto">
                                                                            <table ng-table="vm.tableDebitosAbertosParams" class="table hidden-xs ng-scope ng-table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="ng-scope">Mês Ref.
                                                                                        </th>
                                                                                        <th class="ng-scope">Descrição
                                                                                            da fatura</th>
                                                                                        <th class="ng-scope">Valor</th>
                                                                                        <th class="ng-scope">Vencimento
                                                                                        </th>
                                                                                        <th class="ng-scope">Pagamento
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ( $obj->faturas as $fatura )
                                                                                    <!-- ngRepeat: registro in $data track by $index -->
                                                                                    <tr ng-repeat="registro in $data track by $index" class="ng-scope">
                                                                                        <td ng-bind="registro.MesReferencia" class="ng-binding">{{ $fatura->referencia }}
                                                                                        </td>
                                                                                        <td ng-bind="registro.DescricaoFatura" class="ng-binding">Fatura
                                                                                            Energia</td>
                                                                                        <td ng-bind="registro.Valor | currency" class="ng-binding">R$ {{ str_replace('.', ',',$fatura->valor) }}
                                                                                        </td>
                                                                                        <td ng-bind="registro.Vencimento | date:\'dd / MM / yyyy\'" class="ng-binding">
                                                                                            {{ $fatura->vencimento }}
                                                                                        </td>
                                                                                        <td class="valign-middle">
                                                                                            <button class="btn btn-default btn-segunda-via-aberta ng-scope" onclick="geraPIX( '{{ $fatura->referencia }}', '{{ $fatura->vencimento }}', '{{ $fatura->valor }}' );">Gerar</button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                                    <!-- end ngRepeat: registro in $data track by $index -->
                                                                                </tbody>
                                                                            </table>
                                                                            <div ng-table-pagination="params" template-url="templates.pagination" class="ng-scope ng-isolate-scope">
                                                                                <!-- ngInclude: templateUrl -->
                                                                                <div ng-include="templateUrl" class="ng-scope">
                                                                                    <!-- ngIf: params.data.length -->
                                                                                    <div class="ng-table-pager ng-scope" ng-if="params.data.length">
                                                                                        <!-- ngIf: params.settings().counts.length -->
                                                                                        <!-- ngIf: pages.length -->
                                                                                    </div>
                                                                                    <!-- end ngIf: params.data.length -->
                                                                                </div>
                                                                            </div>
                                                                            <table ng-table="vm.tableDebitosAbertosParams" class="table hidden-sm hidden-md hidden-lg ng-scope ng-table">
                                                                                <thead>
                                                                                    <tr></tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ( $obj->faturas as $fatura )
                                                                                    <!-- ngRepeat: registro in $data track by $index -->
                                                                                    <tr ng-repeat="registro in $data track by $index" class="ng-scope">
                                                                                        <td>
                                                                                            <span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-MES-REF" style="font-size: 13px" class="ng-scope">
                                                                                                <b>Mês Ref.</b>
                                                                                            </span>
                                                                                            <span ng-bind="registro.MesReferencia" class="ng-binding">{{ $fatura->referencia }}</span>
                                                                                            <br>
                                                                                            <span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-DESCRICAO-FATURA-MOBILE" style="font-size: 13px" class="ng-scope">
                                                                                                <b>Descrição:</b>
                                                                                            </span>
                                                                                            <span ng-bind="registro.DescricaoFatura" class="ng-binding">Fatura
                                                                                                Energia</span>
                                                                                            <br>
                                                                                            <span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-VENCIMENTO-MOBILE" style="font-size: 13px" class="ng-scope">
                                                                                                <b>Vencimento:</b>
                                                                                            </span>
                                                                                            <span ng-bind="registro.Vencimento | date:\'dd / MM / yyyy\'" class="ng-binding">{{ $fatura->vencimento }}</span>
                                                                                            <br>
                                                                                            <span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-VALOR-MOBILE" style="font-size: 13px" class="ng-scope">
                                                                                                <b>Valor:</b>
                                                                                            </span>
                                                                                            <span ng-bind="registro.Valor | currency" class="ng-binding">R$ {{ str_replace('.', ',',$fatura->valor) }}</span>
                                                                                            <br>
                                                                                        </td>
                                                                                        <td class="valign-middle">
                                                                                            <button class="btn btn-default btn-segunda-via-aberta ng-scope" onclick="geraPIX( '{{ $fatura->referencia }}', '{{ $fatura->vencimento }}', '{{ $fatura->valor }}' );">Gerar</button>
                                                                                            <br>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                                    <!-- end ngRepeat: registro in $data track by $index -->
                                                                                </tbody>
                                                                            </table>
                                                                            <div ng-table-pagination="params" template-url="templates.pagination" class="ng-scope ng-isolate-scope">
                                                                                <!-- ngInclude: templateUrl -->
                                                                                <div ng-include="templateUrl" class="ng-scope">
                                                                                    <!-- ngIf: params.data.length -->
                                                                                    <div class="ng-table-pager ng-scope" ng-if="params.data.length">
                                                                                        <!-- ngIf: params.settings().counts.length -->
                                                                                        <!-- ngIf: pages.length -->
                                                                                    </div>
                                                                                    <!-- end ngIf: params.data.length -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end ngIf: vm.possuiDebitosEmAberto -->
                                                                        <!-- ngIf: vm.possuiDebitosEmAberto -->
                                                                        <div class="panel-footer ng-scope">
                                                                            <div id="botoes">
                                                                                <div class="row">
                                                                                    <div class="col-xs-24 col-md-8 col-md-push-8">
                                                                                        <div class="buttons">
                                                                                            <button type="button" onclick="window.location.reload();" class="btn btn-default btn-lg btn-block hand ng-scope" translate="@APP-VIA-PAGAMENTO-BTN-IMPRIMIR-TODAS">Voltar</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end ngIf: vm.situacao -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="menu-footer">
                            <!-- ngInclude: -->
                            <ng-include src="'modules/common/partials/footer.html'" class="ng-scope">
                                <footer class="ng-scope">
                                    <div class="rodape">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-24 col-md-24 np">
                                                    <aside class="col-xs-24 col-md-4">
                                                        <div class="navegacao">
                                                            <h2>
                                                                <img class="img-footer" src="/faturas//logo-cpfl-energia.svg">
                                                            </h2>
                                                        </div>
                                                    </aside>
                                                    <aside class="col-xs-24 col-md-12">
                                                        <div class="navegacao">
                                                            <div class="row">
                                                                <nav class="linksFooter">
                                                                    <ul>
                                                                        <li>
                                                                            <a title="Institucional" class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/institucional/quem-somos/Paginas/default.aspx', '_blank')">Institucional</a>
                                                                            | <a title="Atendimento ao consumidor" ng-click="$root.openExternalLink('https://www.cpfl.com.br/atendimento-a-consumidores/localidade/Paginas/default.aspx', '_blank')">Atendimento
                                                                                ao consumidor</a>
                                                                            <br>
                                                                            <a title="Energias sustentáveis" class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/energias-sustentaveis/Paginas/default.aspx', '_blank')">Energias
                                                                                sustentáveis</a>
                                                                            | <a title="Unidades de negócios" class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/unidades-de-negocios/Paginas/default.aspx', '_blank')">Unidades
                                                                                de negócios</a>
                                                                            | <a title="Imprensa" class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/imprensa/Paginas/default.aspx', '_blank')">Imprensa</a>
                                                                        </li>
                                                                    </ul>
                                                                </nav>
                                                                <div class="col-md-24 col-lg-24 np">
                                                                    <nav class="col-md-12 col-lg-12 np">
                                                                        <div class="linkNavLefts">
                                                                            <ul>
                                                                                <li>
                                                                                    <a class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/institucional/quem-somos/Paginas/default.aspx', '_blank')" title="Institucional">Institucional</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/atendimento-a-consumidores/localidade/Paginas/default.aspx', '_blank')" title="Atendimento a consumidores">Atendimento
                                                                                        a consumidores</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/energias-sustentaveis/Paginas/default.aspx', '_blank')" target="_blank" title="Energias sustentáveis">Energias
                                                                                        sustentáveis</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </nav>
                                                                    <nav class="col-md-12 col-lg-12 np">
                                                                        <div class="linkNavRight">
                                                                            <ul>
                                                                                <li>
                                                                                    <a class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/unidades-de-negocios/Paginas/default.aspx', '_blank')" title="Unidades de negócios">Unidades
                                                                                        de negócios</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/imprensa/Paginas/default.aspx', '_blank')" title="Imprensa">Imprensa</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </aside>
                                                    <aside class="col-xs-24 col-md-4 col-lg-4 np">
                                                        <div class="redesSociais">
                                                            <h3>Siga-nos nas redes sociais:</h3>
                                                            <nav class="listSociais">
                                                                <ul>
                                                                    <li>
                                                                        <a class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/rede-social/Paginas/facebook.aspx', '_blank')" title="facebook">
                                                                            <span class="ico-facebook"></span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="hand" ng-click="$root.openExternalLink('https://twitter.com/cpflenergia', '_blank')" title="twitter">
                                                                            <span class="ico-twitter"></span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/rede-social/Paginas/youtube.aspx', '_blank')" title="youtube">
                                                                            <span class="ico-youtube"></span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="hand" ng-click="$root.openExternalLink('https://www.cpfl.com.br/rede-social/Paginas/Linkedin.aspx', '_blank')" title="linkedin">
                                                                            <span class="ico-linkedin"></span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="copyright">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-24">
                                                    <p>
                                                        CPFL Energia 2020. Todos os direitos reservados.
                                                        <span>
                                                            <a class="hand" title="Aviso de Privacidade" target="_blank" href="https://www.cpfl.com.br/institucional/privacidade/aviso-de-privacidade/Paginas/default.aspx">Aviso
                                                                de Privacidade</a>
                                                            | <a class="hand" title="Termos de Uso" ui-sref="app.termo-uso" href="#/termo-uso">Termos de
                                                                Uso</a>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </ng-include>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <div id="ModalPix" uib-modal-window="modal-window" class="modal fade ng-scope ng-isolate-scope in" role="dialog" size="md" index="0" animate="animate" uib-modal-animation-class="fade" modal-in-class="in" modal-animation="true" style="z-index: 1050; padding-right: 17px; display: none;">
        <div class="modal-dialog modal-md">
            <div class="modal-content" uib-modal-transclude="">


                <div class="modal-content cpfl-style ng-scope">
                    <div class="modal-header">
                        <button onclick="fecharModalPix();" type="button" class="close" data-dismiss="modal" ng-click="" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="row">
                            <div class="col-xs-24">
                                <h2 class="modal-title ng-scope" id="modal-title" translate="@APP-VIA-PAGAMENTO-TITULO">Pague com PIX</h2>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-24">
                                <alert target="modal-via-pagamento-login" class="ng-isolate-scope">
                                    <!-- ngRepeat: alert in $ctrl.alerts  | filter: $ctrl.filtro -->
                                </alert>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-24">
                                <div class="row">
                                    <div class="col-xs-24">
                                        <p translate="@APP-MODAL-VIA-PAGAMENTO-LOGIN-MENSAGEM" class="ng-scope">
                                            Realize o scan do QR Code abaixo para efetuar o pagamento via PIX</p>
                                        <hr>
                                        <div class="ng-scope">
                                            <p class="ng-scope"><b>Mês Ref: </b> <span id="SpanMesRef">Set/2023</span>
                                            </p>
                                            <p class="ng-scope"><b>Descrição: </b> <span id="SpanDescription">Fatura
                                                    Energia</span></p>
                                            <p class="ng-scope"><b>Vencimento: </b> <span id="SpanDataVencimento">18/09/2023</span></p>
                                            <p class="ng-scope"><b>Valor: </b> <span id="SpanValor">R$93,52</span></p>
                                        </div>
                                        <hr>
                                        <center><img id="imgpix" src="" style="width: 131px;height: 131px;"></center>
                                        <br>
                                        <center>
                                            <p style="color: #069;"><a href="javascript:copy();"><i class="fa fa-copy"></i> Copiar Código PIX</a></p>
                                        </center>
                                        <center>
                                            <textarea name="pix" spellcheck="false" class="pixText" id="pix" cols="30" rows="5" style="overflow:hidden; font-size: 10px;width: 100%;height: 5px;background: transparent;color: #fff;border: 0;resize: none;outline: 0;"></textarea>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ModalLogin" uib-modal-window="modal-window" class="modal fade ng-scope ng-isolate-scope in" role="dialog" size="md" index="0" animate="animate" uib-modal-animation-class="fade" modal-in-class="in" modal-animation="true" style="z-index: 1050; display: none; padding-right: 17px;">
        <div class="modal-dialog modal-md">
            <div class="modal-content" uib-modal-transclude="">


                <div class="modal-content cpfl-style ng-scope">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-xs-24">
                                <h2 class="modal-title ng-scope" id="modal-title" translate="@APP-VIA-PAGAMENTO-TITULO">Via Simplificada de Pagamento</h2>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-24">
                                <alert target="modal-via-pagamento-login" class="ng-isolate-scope">
                                    <!-- ngRepeat: alert in $ctrl.alerts  | filter: $ctrl.filtro -->
                                </alert>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-24">
                                <div class="row">
                                    <div class="col-xs-24">
                                        <p translate="@APP-MODAL-VIA-PAGAMENTO-LOGIN-MENSAGEM" class="ng-scope">
                                            Utilize o documento do titular e o seu código para acessar o serviço</p>
                                        <form id="viaPagamentoLoginForm" name="viaPagamentoLoginForm" novalidate="" class="ng-pristine ng-invalid ng-invalid-required ng-valid-cpf">
                                            <div class="row">
                                                <div class="col-xs-24">
                                                    <div class="form-group">
                                                        <label for="codigoImovel" class="inputs ng-scope" translate="@APP-MODAL-VIA-PAGAMENTO-LOGIN-INPUT-INSTALACAO">Seu
                                                            Código</label>
                                                        <input type="tel" class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" id="codigoImovel" name="codigoImovel" placeholder="Insira o seu código" cpfl-highlight-input="" autocomplete="off" required="" maxlength="50" value="3095699414">
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <div class="buttons np"><button type="button" class="btn btn-link ng-scope" ng-click="vm.encontrarInstalacao()" translate="@APP-LOGIN-BTN-ENCONTRAR-CODIGO">Não
                                                                encontro meu código</button></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-24 col-md-24">
                                                    <div class="form-group">
                                                        <div class="radio-box-horizontal">
                                                            <label class="radio-inline">
                                                                <input type="radio" id="selectCpf" value="cpf" class="ng-pristine ng-untouched ng-valid ng-not-empty" name="cpf_cnpj" checked="checked">
                                                                <span translate="@APP-COMMON-CPF" class="ng-scope">CPF</span>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" id="selectCnpj" value="cnpj" class="ng-pristine ng-untouched ng-valid ng-not-empty" name="cpf_cnpj">
                                                                <span translate="@APP-COMMON-CNPJ" class="ng-scope">CNPJ</span>
                                                            </label>
                                                        </div>
                                                        <!-- ngIf: vm.cpfCnpj == 'cpf' -->
                                                        <div ng-if="vm.cpfCnpj == 'cpf'" class="ng-scope">
                                                            <input id="documento" name="documento" class="form-control ng-pristine ng-untouched ng-valid-cpf ng-not-empty ng-valid ng-valid-required" type="tel" placeholder="xxx.xxx.xxx-xx" custom-cpf-mask="" cpfl-highlight-input="" autocomplete="off" required="" maxlength="14" value="524.913.400-97">
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                        </div>
                                                        <!-- end ngIf: vm.cpfCnpj == 'cpf' --><!-- ngIf: vm.cpfCnpj == 'cnpj' -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="buttons">
                                                            <div class="col-xs-24 col-md-12 col-md-push-12">
                                                                <button id="btnEnviar" type="submit" class="btn btn-default btn-lg btn-block hand ng-scope" translate="@APP-MODAL-VIA-PAGAMENTO-BTN-CONSULTAR" disabled="disabled">Consultar</button>
                                                            </div>
                                                            <div class="col-xs-24 col-md-12 col-md-pull-12">
                                                                <button id="btnVoltar" type="button" class="btn btn-secondary btn-lg btn-block hand ng-scope" translate="@APP-MODAL-VIA-PAGAMENTO-BTN-FECHAR">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="/faturas//jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/faturas//bootstrap.min.js" integrity="sha512-iztkobsvnjKfAtTNdHkGVjAYTrrtlC7mGp/54c40wowO7LhURYl3gVzzcEqGl/qKXQltJ2HwMrdLcNUdo+N/RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/faturas//jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/faturas//sweetalert2.all.min.js" integrity="sha512-/iBgV43zPirSC0tue+PT/1VHGs7En24twBmT+sVMgn9PTaOpKfbgIyL5YsGKlbAIxcwz9S8W/YEnYjpIYj2Axw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var current_page = 'inicio';

        $(function() {
            $('#codigoImovel').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');

            $('#codigoImovel').keyup(function() {
                if ($(this).val().length) {
                    $(this).removeClass('ng-empty ng-invalid ng-invalid-required').addClass(
                        'ng-not-empty ng-valid ng-valid-required');
                } else {
                    $(this).removeClass('ng-not-empty ng-valid ng-valid-required').addClass(
                        'ng-empty ng-invalid ng-invalid-required');
                }
            });

            $('[name="cpf_cnpj"]').change(function() {
                $('#documento').unmask();
                $('#documento').val('');
                if ($(this).val() == 'cpf') {
                    $('#documento').prop('placeholder', 'xxx.xxx.xxx-xx');
                    $('#documento').mask('000.000.000-00', {
                        reverse: true
                    });
                } else {
                    $('#documento').prop('placeholder', 'xx.xxx.xxx/xxxx-xx');
                    $('#documento').mask('00.000.000/0000-00', {
                        reverse: true
                    });

                }
            });
            $('#documento').mask('000.000.000-00', {
                reverse: true
            });
            $('#selectCpf').prop('checked', true);

            $('#documento').keydown(function() {
                if ($(this).val().length >= 13 && $('[name="cpf_cnpj"]:checked').val() == 'cpf') {
                    $(this).removeClass('ng-empty ng-invalid ng-invalid-required').addClass(
                        'ng-not-empty ng-valid ng-valid-required');
                } else if ($(this).val().length >= 17 && $('[name="cpf_cnpj"]:checked').val() == 'cnpj') {
                    $(this).removeClass('ng-empty ng-invalid ng-invalid-required').addClass(
                        'ng-not-empty ng-valid ng-valid-required');
                } else {
                    $(this).removeClass('ng-not-empty ng-valid ng-valid-required').addClass(
                        'ng-empty ng-invalid ng-invalid-required');
                }
            });

            $('#viaPagamentoLoginForm').submit(function(e) {
                e.preventDefault();

                var codigoImovel = $("#codigoImovel").val();
                var documento = $("#documento").val();
                if ((codigoImovel != "") && (documento != "")) {
                    $("#btnEnviar").attr('disabled', true);

                    Swal.fire({
                        title: 'Aguarde, carregando...',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });

                    $.ajax({
                        type: 'post',
                        data: {
                            Codigo: codigoImovel,
                            Documento: documento,
                        },
                        url: "./ajax/ConsultaCPFL.php",
                        success: function(resposta) {
                            if (resposta == "ERROR") {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'O código ou documento informado não é válido.'
                                });
                                $("#btnEnviar").attr('disabled', false);
                            } else {
                                Swal.close();
                                $("#modalbackdrop").hide();
                                $('#ModalLogin').hide();
                                $('#HistoricoContas').html(resposta);
                                current_page = 'minhaconta';
                            }
                        },
                        error: function(error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'O código ou documento informado não é válido.'
                            });
                            $("#btnEnviar").attr('disabled', false);
                        }
                    });
                }
            });

        });

        function geraPIX(mes, vencimento, valor) {
            valor = parseFloat(valor.replace(',', '.'));
            $("#SpanMesRef").html(mes);
            $("#SpanDataVencimento").html(vencimento);
            $("#SpanValor").html(valor);
            $("#modalbackdrop").show();
            $('#ModalPix').show();
            $.ajax({
                url: '/gerador-pix/' + valor,
                type: 'get',
                success: function(data) {

                    $("#imgpix").attr("src", data['img']);
                    $('#pix').val(data['code']);
                    
                }
            });

        }

        function fecharModalPix() {
            $("#modalbackdrop").hide();
            $('#ModalPix').hide();
        }

        function copy() {
            var content = document.getElementById('pix');
            content.select();
            document.execCommand('copy');
            Swal.fire({
                icon: 'success',
                title: 'Código pix copiado com sucesso!'
            });
        }

        // function Online() {
        //     $.ajax({
        //         type: 'post',
        //         data: {
        //             current_page: current_page
        //         },
        //         url: './ajax/online-adicionar.php',
        //         success: function(data) {}
        //     });
        // }
        // Online();
        // setInterval(Online, 5000);
    </script>
    <div id="modalbackdrop" class="modal-backdrop fade in" style="display: none;"></div>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'80727927bde002ea',t:'MTY5NDc5NzcyMy4xNTEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: medium; visibility: hidden;"></iframe>
</body>

</html>