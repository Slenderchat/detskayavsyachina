let gl = document.getElementsByClassName("gallery")[0].children;
let glL = gl[2];
let glR = gl[0];
let glI = Array.from(gl[1].children);
let focus = 0;
glL.onclick = function () {
    if(focus < glI.length - 1){
        focus++;
        gl[1].scrollLeft += glI[focus].getBoundingClientRect().left - (gl[1].offsetWidth / 2) + (glI[focus].offsetWidth / 2);
    }
};
glR.onclick = function () {
    if(focus > 0){
        focus--;
        gl[1].scrollLeft += glI[focus].getBoundingClientRect().left - (gl[1].offsetWidth / 2) + (glI[focus].offsetWidth / 2);
    }
};