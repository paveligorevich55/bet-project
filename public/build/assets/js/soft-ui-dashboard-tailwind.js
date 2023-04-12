var page = window.location.pathname.split("/").pop().split(".")[0];
var aux = window.location.pathname.split("/");
var to_build = (aux.includes('dashboard')?'../':'./');
var root = window.location.pathname.split("/")
if (!aux.includes("dashboard")) {
    page = "dashboard";
}

loadStylesheet(to_build + "../build/assets/css/perfect-scrollbar.css");
loadJS(to_build + "../build/assets/js/perfect-scrollbar.js", true);

if (document.querySelector("nav [navbar-trigger]")) {
    loadJS(to_build + "../build/assets/js/navbar-collapse.js", true);
}

if (document.querySelector("[data-target='tooltip']")) {
    loadJS(to_build + "../build/assets/js/tooltips.js", true);
    loadStylesheet(to_build + "../build/assets/css/tooltips.css");
}

if (document.querySelector("[nav-pills]")) {
    loadJS(to_build + "../build/assets/js/nav-pills.js", true);
}

if (document.querySelector("[text-editor]")) {

    loadJS( 'https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js', true);
    loadJS('//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    loadStylesheet('https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css')

}

if (document.querySelector("[dropdown-trigger]")) {
    loadJS(to_build + "../build/assets/js/dropdown.js", true);

}

if (document.querySelector("[fixed-plugin]")) {
    loadJS(to_build + "../build/assets/js/fixed-plugin.js", true);
}

if (document.querySelector("[navbar-main]")) {
    loadJS(to_build + "../build/assets/js/sidenav-burger.js", true);
    loadJS(to_build + "../build/assets/js/navbar-sticky.js", true);
}

if (document.querySelector("canvas")) {
    loadJS(to_build + "../build/assets/js/chart-1.js", true);
    loadJS(to_build + "../build/assets/js/chart-2.js", true);
}

function initPlugin(Data) {
    let dynamicInit = document.createElement('script');

    dynamicInit.append(Data);
    document.body.appendChild(dynamicInit);
}

function loadJS(FILE_URL, async) {
    let dynamicScript = document.createElement("script");

    dynamicScript.setAttribute("src", FILE_URL);
    dynamicScript.setAttribute("type", "text/javascript");
    dynamicScript.setAttribute("async", async);

    document.body.appendChild(dynamicScript);
}

function loadStylesheet(FILE_URL) {
    let dynamicStylesheet = document.createElement("link");

    dynamicStylesheet.setAttribute("href", FILE_URL);
    dynamicStylesheet.setAttribute("type", "text/css");
    dynamicStylesheet.setAttribute("rel", "stylesheet");

    document.head.appendChild(dynamicStylesheet);
}
