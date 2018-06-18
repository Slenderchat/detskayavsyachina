function removeAd() {
    "use strict";
    var elements = document.querySelectorAll('body div[style = "text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;"]'), i;
    for (i = 0; i < elements.length; i += 1) {
        elements[i].remove();
    }
}
var isMenuShown = false;
function toggleMenu() {
    "use strict";
    var menu = document.getElementsByClassName("menu")[0];
    if(!isMenuShown){
        menu.style.display = "flex";
        isMenuShown = !isMenuShown;
    }else{
        menu.style.display = "none";
        isMenuShown = !isMenuShown;
    }
}
function switchCategory(me){
    "use strict";
    var url = document.URL;
    if(me.value !== "Все"){
        if(url.search(/.*category=.*/g) !== -1){
            url.replace(/.*category=.*/g, "category=" + me.value);
        }else if(url.search(/.*\?.*/g) === -1){
            url += "/?category=" + me.value;
        }else{
            url += "&category=" + me.value;
        }
    }else{
        if(url.search(/.*category=.*/g) !== -1){
            url.replace(/.*category=.*/g, "");
        }
    }
    window.history.pushState("", "", url);
}
var imgIndex = 0;
function doScroll(dir){
    "use strict";
    var imgview = document.getElementById("imgview");
    if(dir === "left" && imgIndex > 0){
        imgIndex -= 1;
        imgview.scrollLeft -= 200;
    }else if(dir === "right" && imgIndex < imgview.children.length - 1){
        imgIndex += 1;
        imgview.scrollLeft += 200;
    }
}
function showCart(goodie, id) {
    "use strict";
    var good = goodie.parentNode.parentNode, popup = document.createElement('div'), req = new XMLHttpRequest();
    popup.style.position = 'absolute';
    popup.style.left = '0px';
    popup.style.top = '0px';
    popup.style.width = '100%';
    popup.style.height = '100%';
    popup.style.fontSize = '0.8em';
    popup.style.borderRadius = '8px';
    popup.style.backgroundColor = '#595959';
    good.appendChild(popup);
    req.onreadystatechange = function () {
        if(this.readyState === 4 && this.status === 200){
            popup.innerHTML = this.responseText;
        }
    };
    req.open("GET", "showcart.php?id=" + id);
    req.send();
}
function loadGoodies(from){
    "use strict";
    var req = new XMLHttpRequest(), target = document.getElementById("sellView"),search = document.getElementById("srch"), category = document.getElementById("category"), url = "updateTable.php", brurl = "/" + from;
    if(search.value !== ""){
        url += "/?search=" + search.value;
        brurl += "/?search=" + search.value;
        if(category.value !== "Все"){
            url += "&category="+category.value;
            brurl += "&category="+category.value;
        }
    }else if(category.value !== "Все"){
        url += "/?category="+category.value;
        brurl += "/?category="+category.value;
    }
    req.onreadystatechange = function () {
        if(this.readyState === 4 && this.status === 200){
            target.innerHTML = this.responseText;
        }
    };
    req.open("GET", url);
    req.send();
    window.history.pushState("", "", brurl);
}