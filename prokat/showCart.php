<?php
    session_start();
    if(!empty($_SESSION['user'])) {
        $id = $_GET['id'];
        $conn = new mysqli('a236477.mysql.mchost.ru', 'a236477_1', 'fwvm52cy9N5A', 'a236477_1');
        $res = $conn->query("SELECT * FROM goods WHERE id=$id")->fetch_assoc();
        echo
        "<form class='goodiePopup' name=\"addtocart\" method='post' action='addtocart.php'>
            <input name='count' type='number' min='1' max='3'>
            <input name='art' id='art' value='$id' type='number'>
            <input type='button' onclick='addToCart()'>
        </form>";
    }else{
        echo
        "<div class='goodiePopupBody'>
            Пройдите <a title='Регистрация' href='/register'>бесплатную регистрацию</a> для того чтобы покупать товары у нас онлайн, в противном случае вы можете оставить свой заказ по телефону <a title='Номер телефона' href='tel:89006215678'>+7-(900)-621-56-78</a> или лично в офисе по адресу <a title='Перейти на карту' href='http://yandex.ru/maps/-/CBqdF-xi3D'>Санкт-Петербург, ул. Большая Пушкарская, д. 20, офис 2-204</a>
        </div>
        <a class='button' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode)'>Назад</a>";
    }