<?php
    $conn = new mysqli("localhost", "id8550022_detskayavsyachina", "%sha512pass%", "id8550022_detskayavsyachina");
    if($conn){
        $id = $_GET['id'];
        $query = 'SELECT `name`,`photo0_x75`,`photo0_x130`,`photo0_x604`,`photo0_x807`,`photo0_x1280`,`photo1_x75`,`photo1_x130`,`photo1_x604`, `photo2_x75`, `photo2_x130`, `photo2_x604`, `photo2_x807`, `photo2_x1280`, `photo2_x2560`, `photo3_x75`, `photo3_x130`, `photo3_x604`, `photo3_x807`, `photo3_x1280`, `photo3_x2560`, `desc`, `price` FROM `tovary` WHERE `id` = ' . $id;
        $res = $conn->query($query);
        if($res){
            $res = $res->fetch_array();
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="/index.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="logo">
            <img src="/images/logo.jpg" width="795" height="200" alt="Логотип проката &quot;Детская Всячина&quot;">
        </div>
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/templates/menu.html");?>
        <div class="content">
            <h1><?php echo $res[0]?></h1>
            <div class="gallery">
                <picture>
                    <source srcset="<?php echo $res[1]?>" media="(max-width: 75px)">
                    <source srcset="<?php echo $res[2]?>" media="(max-width: 130px)">
                    <source srcset="<?php echo $res[3]?>" media="(max-width: 604px)">
                    <source srcset="<?php echo $res[4]?>" media="(max-width: 807px)">
                    <source srcset="<?php echo $res[5]?>" media="(min-width: 807px)">
                    <img src="<?php echo $res[5]?>">
                </picture>
                <picture>
                    <source srcset="<?php echo $res[6]?>" media="(max-width: 75x)">
                    <source srcset="<?php echo $res[7]?>" media="(max-width: 130px)">
                    <source srcset="<?php echo $res[8]?>" media="(min-width: 130px)">
                    <img src="<?php echo $res[8]?>">
                </picture>
                <picture>
                    <source srcset="<?php echo $res[9]?>" media="(max-width: 75px)">
                    <source srcset="<?php echo $res[10]?>" media="(max-width: 130px)">
                    <source srcset="<?php echo $res[11]?>" media="(max-width: 604px)">
                    <source srcset="<?php echo $res[12]?>" media="(max-width: 807px)">
                    <source srcset="<?php echo $res[13]?>" media="(max-width: 1280px)">
                    <source srcset="<?php echo $res[14]?>" media="(min-width: 1280px)">
                    <img src="<?php echo $res[14]?>">
                </picture>
                <picture>
                    <source srcset="<?php echo $res[15]?>" media="(max-width: 75px)">
                    <source srcset="<?php echo $res[16]?>" media="(max-width: 130px)">
                    <source srcset="<?php echo $res[17]?>" media="(max-width: 604px)">
                    <source srcset="<?php echo $res[18]?>" media="(max-width: 807px)">
                    <source srcset="<?php echo $res[19]?>" media="(max-width: 1280px)">
                    <source srcset="<?php echo $res[20]?>" media="(min-width: 1280px)">
                    <img src="<?php echo $res[20]?>">
                </picture>
            </div>
            <span class="price"><?php echo $res[22]?> руб.</span>
            <div class="text">
                <?php echo $res[21]?>
            </div>
        </div>
    </body>
</html>