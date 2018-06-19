<div class="headerwrap">
    <div class="left">
        <a title="Меню" href="#menu" onclick="toggleMenu()"><i class="material-icons">menu</i></a>
        <?php
            @session_start();
            if(empty($_SESSION['user'])){
                echo '<a  title="Вход" href="/login">Вход</a>';
                echo '<a  title="Регистрация" href="/register">Регистрация</a>';
            }else{
                echo '<a  title="Выход" href="/logout">Выход</a>';
                echo '<a  title="Личный кабинет" href="/account">Личный кабинет</a>';
            }
        ?>
    </div>
    <div class="right">
        <a title="В корзину" href="/korzina"><i class="material-icons">shopping_cart</i></a>
    </div>
</div>