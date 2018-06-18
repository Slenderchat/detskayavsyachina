<?php
    @$id = $_GET['id'];
    if(!empty($id)) {
        $conn = new mysqli("localhost", "id6035521_detskayavsyachina", "detskayavsyachina", "id6035521_users");
        $conn->query("SET NAMES utf8");
        $query = "SELECT * FROM goods WHERE id = $id";
        $result = $conn->query($query)->fetch_assoc();
        $thumb = $result['thumb'];
        $image0 = $result['image1_604'];
        $image1 = $result['image2_604'];
        $image2 = $result['image3_604'];
        $image3 = $result['image4_604'];
        $name = $result['name'];
        $price = $result['price'];
        $description = $result['description'];
    }else{
        header("Location: /prodazha");
    }
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
        <title><?php echo $name; ?></title>
        <meta name="description" content="<?php echo $name; ?>" />
    </head>
    <body onload="removeAd()">
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        </header>
        <div class="wrap">
            <div class="menu">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>
            </div>
            <div class="content">
                <?php echo
                    "<div class=\"tovar\">
                        <h1>$name</h1>
                        <div class=\"imgview\">
                            <i class=\"material-icons\" onclick=\"doScroll('left')\">arrow_back_ios</i>
                            <div id='imgview'>
                                <img src=\"$thumb\" />";
                                if(!empty($image0)){
                                    echo "<img src=\"$image0\" />";
                                }if(!empty($image1)){
                                    echo "<img src=\"$image1\" />";
                                }if(!empty($image2)){
                                    echo "<img src=\"$image2\" />";
                                }if(!empty($image3)){
                                    echo "<img src=\"$image3\" />";
                                }
                            echo
                           "</div>
                            <i class=\"material-icons\" onclick=\"doScroll('right')\">arrow_forward_ios</i>
                            </div>
                                <h2>Стоимость</h2>
                                <p><span class=\"price\">$price рублей</span></p>
                                <h3>Описание</h3>
                                <p>$description</p>
                            </div>
                        </div>
                    </div>";
                ?>
            </div>
        </div>
    <script src="/scripts/index.js"></script>
    </body>
</html>