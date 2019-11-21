var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-105342918-1']);
_gaq.push(['_trackPageview']);
function popitup(url) {
    newwindow = window.open(url, 'name', 'height=400,width=650,status=0,titlebar=0,resizable=1');
    if (window.focus) { newwindow.focus() }
    return false;
}
//script for popup window of Rate_Article.aspx
function popitup1(url) {
    showModalPopUp(url);
}
// modal popup
var popUpObj;
function showModalPopUp(url) {
    popUpObj = window.open(url,
    "ModalPopUp",
    "toolbar=no," +
    "scrollbars=no," +
    "location=no," +
    "statusbar=no," +
    "menubar=no," +
    "resizable=0," +
    "width=300," +
    "height=100," +
    "left = 490," +
    "top=300"
    );
    popUpObj.focus();
    LoadModalDiv();
}
function LoadModalDiv() {
    var bcgDiv = document.getElementById("divBackground");
    bcgDiv.style.display = "block";
}
function HideModalDiv() {
    var bcgDiv = document.getElementById("divBackground");
    bcgDiv.style.display = "none";
}

(function () {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

!function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
  n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
} (window, document, 'script',
  '../connect.facebook.net/en_US/fbevents.js');
fbq('init', '301801893918213');
fbq('track', 'PageView');