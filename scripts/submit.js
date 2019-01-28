let formData = new FormData();
function getData(item) {
    formData.append(item.name, item.value);
}
function formSubmit(a) {
    let children = [].slice.call(a.children);
    children.forEach(getData);
    let req = new XMLHttpRequest();
    req.open('POST','report.php',true);
    req.onreadystatechange = function () {
        if(this.readyState === 4){
            if(this.status === 200) {
                if(this.responseText.search(/OK.*/g) !== -1) {
                    let rid = this.responseText.slice(2);
                    alert('Ваше обращение зарегистрированно!\nНомер вашего обращения: ' + rid);
                }
            }
        }
    }
    req.send(formData);
}