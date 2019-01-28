let search = '', category = '', sort = '', getRegEx = /(?:search|category|sort)=.+?(?=&|$)/g, iRegEx = /(?:search|category|sort)=(.+?)(?=&|$)/g;
let ctrl = document.getElementsByClassName("catalogControls")[0].children;
let srch = ctrl[0];
let slct = ctrl[1];
let srt = ctrl[2];
let ctlg = document.getElementsByClassName("catalog")[0];
let pgCtrl = document.getElementsByClassName("pageControls")[0];
function parseGet(item){
    let val = iRegEx.exec(item)[1];
    if(item.search("search=") !== -1){
        srch.value = decodeURI(val).replace(/\+/g, " ");
    }else if(item.search("category=") !== -1){
        slct.value = decodeURI(val).replace(/\+/g, " ");
    }else if(item.search("sort=") !== -1){
        if(val === "ASC"){
            srt.innerHTML = "keyboard_arrow_up";
        }else if (val === "DESC"){
            srt.innerHTML = "keyboard_arrow_down";
        }
    }
}
function getCatalog(){
    let req = new XMLHttpRequest();
    req.open("GET", "/catalog/updateCatalog.php/" + window.location.search);
    req.onreadystatechange = function () {
        if(this.readyState === 4 && this.status === 200){
            let resp = JSON.parse(this.responseText);
            ctlg.innerHTML = resp['catalog'];
            pgCtrl.innerHTML = resp['pageCTRL'];
            window.history.pushState("", "", resp['url']);
        }
    };
    req.send();
}
function removePage(){
    if(window.location.href.search("page=") != -1){
        window.history.pushState("", "", window.location.href.replace(/&page=.+?(?=&|$)/g, ""));
    }
}
document.body.onload = function () {
    let get = window.location.search;
    if(get !== ''){
        let res = getRegEx.exec(get);
        res.forEach(parseGet);
    }
    getCatalog();
};
srch.oninput = function () {
    removePage();
    let get = window.location.search;
    if(srch.value === ''){
        if (get.search("search=") !== -1) {
            let buf = window.location.href;
            buf = buf.replace(/&search=.+?(?=&|$)/g, "");
            window.history.pushState("", "", buf);
        }
    }else {
        if (get.search("search=") === -1) {
            window.history.pushState("", "", window.location.href + "&search=" + srch.value);
        } else {
            let buf = window.location.href;
            let repl = "$1" + encodeURI(srch.value);
            buf = buf.replace(/(search=).+?(?=&|$)/g, repl);
            window.history.pushState("", "", buf);
        }
    }
    getCatalog();
};
slct.onclick = function (){
    removePage();
    let get = window.location.search;
    if(slct.value === ''){
        if (get.search("category=") !== -1) {
            let buf = window.location.href;
            buf = buf.replace(/&category=.+?(?=&|$)/g, "");
            window.history.pushState("", "", buf);
        }
    }else {
        if (get.search("category=") === -1) {
            window.history.pushState("", "", window.location.href + "&category=" + slct.value);
        } else {
            let buf = window.location.href;
            let repl = "$1" + encodeURI(slct.value);
            buf = buf.replace(/(category=).+?(?=&|$)/g, repl);
            window.history.pushState("", "", buf);
        }
    }
    getCatalog();
};
srt.onclick = function () {
    removePage();
    if(srt.innerHTML === "keyboard_arrow_up"){
        srt.innerHTML = "keyboard_arrow_down";
        let buf = window.location.href;
        let repl = "$1" + encodeURI("DESC");
        buf = buf.replace(/(sort=).+?(?=&|$)/g, repl);
        window.history.pushState("", "", buf);
    }else if(srt.innerHTML === "keyboard_arrow_down"){
        srt.innerHTML = "keyboard_arrow_up";
        let buf = window.location.href;
        let repl = "$1" + encodeURI("ASC");
        buf = buf.replace(/(sort=).+?(?=&|$)/g, repl);
        window.history.pushState("", "", buf);
    }
    getCatalog();
};