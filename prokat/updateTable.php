<?php
    @$num = $_GET['num'];
    @$search = $_GET['search'];
    @$category = $_GET['category'];
    $conn = new mysqli('a236477.mysql.mchost.ru', 'a236477_1', 'fwvm52cy9N5A', 'a236477_1');
    $conn->query("SET NAMES utf8");
    $query = "SELECT id, name, description, price, thumb FROM goods WHERE 1";
    if($category == "Все"){
        $category = null;
    }
    if(!empty($search) && !empty($category)){
        $query .= " AND name LIKE '%$search%' AND album = '$category' ORDER BY price DESC";
    }elseif(!empty($search) && empty($category)){
        $query .= " AND name LIKE '%$search%' ORDER BY price DESC";
    }
    elseif(empty($search) && !empty($category)){
        $query .= " AND album = '$category' ORDER BY price DESC";
    }elseif(empty($search) && empty($category)){
        $query .= " AND album NOT LIKE '%(продажа)%' ORDER BY price DESC LIMIT 10";
    }
    $result = $conn->query($query);
    while($res = $result->fetch_assoc()){
        $title = $res['name'];
        $image = $res['thumb'];
        $price = $res['price'];
        $desc = $res['description'];
        $id = $res['id'];
        echo
        "<div class=\"goodie\">
            <h2>$title</h2>
            <div class='goodieBody'>
                <div class='goodieThumb'>
                    <img alt=\"$title\" src=\"$image\">
                    <div class=\"price\">$price руб.</div>
                </div>
                <div class='goodieInfo'>
                    $desc
                </div>
            </div>
            <div class=\"goodieControls\">
                <a class=\"button\" title=\"К описанию\" href=\"/prokat/tovar/?id=$id\">К описанию</a>
                <a class=\"button\" title=\"В корзину\" href=\"#\" onclick='showCart(this, $id, \"prokat\")'>В корзину</a>
            </div>
        </div>";
    }
    $conn->close();