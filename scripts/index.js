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
function showCart(goodie, id, from) {
    "use strict";
    var good = goodie.parentNode.parentNode, popup = document.createElement('div'), req = new XMLHttpRequest();
    popup.className = 'goodiePopup';
    good.appendChild(popup);
    req.onreadystatechange = function () {
        if(this.readyState === 4 && this.status === 200){
            popup.innerHTML = this.responseText;
        }
    };
    req.open("GET", "/" + from + "/showCart.php?id=" + id);
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
function doLogin(){
    "use strict";
    var req = new XMLHttpRequest(), uname = document.getElementById('username'), passwd = document.getElementById('password');
    req.onreadystatechange = function () {
        if(this.readyState === 4 && this.status === 200){
            var resp = JSON.parse(this.response), uname = document.getElementById('username'), passwd = document.getElementById('password'), lbl = document.getElementsByClassName('userFormError')[0];
            if(resp.isPassInv === 1 || resp.isUnameInv ===1){
                lbl.style.display = "block";
            }
            if(resp.isPassInv === 1){
                passwd.style.borderColor = "#D81E5B";
            }else{
                passwd.style.borderColor = "green";
            }
            if(resp.isUnameInv === 1){
                uname.style.borderColor = "#D81E5B";
            }else{
                uname.style.borderColor = "green";
            }
            if(resp.isPassInv === 0 && resp.isUnameInv === 0){
                window.location.replace("/account");
            }
        }
    };
    req.open("POST", "/login/dologin.php");
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.send("username=" + uname.value + "&password=" + passwd.value);
}
function doRegister() {
    "use strict";
    var req = new XMLHttpRequest(), uname = document.getElementById("username"), passwd = document.getElementById("password"), email = document.getElementById("email"), fname = document.getElementById("firstname"), lname = document.getElementById("lastname"), tname = document.getElementById("thirdname"), pnum = document.getElementById("phonenumber"), adrr = document.getElementById("address"), met = document.getElementById("metro");
    req.onreadystatechange = function () {
        if(this.readyState === 4 && this.status === 200){
            var resp = JSON.parse(this.response);
            if(resp.isSuccessful === 1){
                window.location.replace("/account");
            }
        }
    };
    req.open("POST", "/register/doregister.php");
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.send("username=" + uname.value + "&password=" + passwd.value + "&email=" + email.value + "&firstname=" + fname.value + "&lastname=" + lname.value + "&thirdname=" + tname.value + "&phonenumber=" + pnum.value + "&address=" + adrr.value + "&metro=" + met.value);
}