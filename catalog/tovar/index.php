<?php
    $conn = new mysqli("localhost", "id8550022_detskayavsyachina", "%sha512pass%", "id8550022_detskayavsyachina");
    if($conn){
        $id = $_GET['id'];
        $query = 'SELECT `name`,`photo0_x604`,`photo0_x807`,`photo0_x1280`,`photo1_x604`,`photo2_x604`,`photo2_x807`,`photo2_x1280`,`photo2_x2560`,`photo3_x604`,`photo3_x807`,`photo3_x1280`,`photo3_x2560`,`desc`,`price` FROM `tovary` WHERE `id` = ' . $id;
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
                <i class="material-icons">navigate_before</i>
                <div class="galleryPictures">
                    <picture>
                        <?php $ls = 0;
                        for($i=1;$i <= 3;$i++){
                                if($res[$i] != ''){
                                    switch ($i){
                                        case '1':
                                            $dim = "max-width: 604px";
                                            break;
                                        case '2':
                                            $dim = "max-width: 807px";
                                            break;
                                    }
                                    echo "<source srcset=\"" . $res[$i] . "\" media = \"" . $dim . "\">";
                                    $ls = $i;
                                }
                            }
                        echo "<img src=\"" . $res[$ls] . "\">"; ?>
                    </picture>
                    <picture>
                        <?php
                            if($res[4] != ''){
                                echo "<img src=\"" . $res[4] . "\">";
                            } ?>
                    </picture>
                    <picture>
                        <?php $ls = 0;
                        for($i=5;$i <= 8;$i++){
                            if($res[$i] != ''){
                                switch ($i){
                                    case '5':
                                        $dim = "max-width: 604px";
                                        break;
                                    case '6':
                                        $dim = "max-width: 807px";
                                        break;
                                    case '7':
                                        $dim = "max-width: 1280px";
                                        break;
                                }
                                echo "<source srcset=\"" . $res[$i] . "\" media = \"" . $dim . "\">";
                                $ls = $i;
                            }
                        }
                        echo "<img src=\"" . $res[$ls] . "\">"; ?>
                    </picture>
                    <picture>
                        <?php $ls = 0;
                        for($i=9;$i <= 12;$i++){
                            if($res[$i] != ''){
                                switch ($i){
                                    case '9':
                                        $dim = "max-width: 604px";
                                        break;
                                    case '10':
                                        $dim = "max-width: 807px";
                                        break;
                                    case '11':
                                        $dim = "max-width: 1280px";
                                }
                                echo "<source srcset=\"" . $res[$i] . "\" media = \"" . $dim . "\">";
                                $ls = $i;
                            }
                        }
                        echo "<img src=\"" . $res[$ls] . "\">"; ?>
                    </picture>
                </div>
                <i class="material-icons">navigate_next</i>
            </div>
            <p><span class="tovarPrice"><?php echo $res[14]?> руб.</span></p>
            <p>
                <?php echo $res[13]?>
            </p>
        </div>
        <script src="/scripts/gallery.js"></script>
    </body>
</html>