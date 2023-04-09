var page = window.location.pathname.split("/").pop().split(".")[0];
var aux = window.location.pathname.split("/");
var to_build = (aux.includes('dashboard')?'../':'./');

var totalAside = document.querySelectorAll("[aside-nav-items]");

if (aux.includes("dashboard") && aux.length <=2) {
    page = "dashboard";
} else if (aux.includes("category")){
    page = "Categories"
} else if (aux.includes("post")) {
    page = "Posts"
} else if (aux.includes("promo")) {
    page = "Promo Codes"
} else if (aux.includes("bookmaker")) {
    page = "Bookmakers"
} else if (aux.includes("link")){
    page = "Links"
}

console.log(page)



