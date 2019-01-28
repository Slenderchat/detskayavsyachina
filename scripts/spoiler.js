function spoilerHandler(item) {
    item.children[0].children[0].onclick = function () {
        let splHd = item.children[0];
        let btn = item.children[0].children[0];
        let cont = item.children[1];
        if(btn.innerHTML === "keyboard_arrow_down"){
            btn.innerHTML="keyboard_arrow_up";
            cont.style.maxHeight = "1000px";
            cont.style.transform = "scaleY(1)";
            splHd.style.borderRadius = "16px 16px 0 0";
        }else if(btn.innerHTML === "keyboard_arrow_up"){
            btn.innerHTML="keyboard_arrow_down";
            cont.style.maxHeight = "0";
            cont.style.transform = "scaleY(0)";
            splHd.style.borderRadius = "16px";
        }
    }
}
let splr = Array.from(document.getElementsByClassName("spoiler"));
splr.forEach(spoilerHandler);