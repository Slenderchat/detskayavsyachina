<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
        <title>Новости</title>
        <meta name="description" content="Новости" />
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
                <?php
                @$id = $_GET['id'];
                $conn = new mysqli("localhost", "id6035521_detskayavsyachina", "detskayavsyachina", "id6035521_users");
                $conn->query("SET NAMES utf8");
                $query = "SELECT * FROM news WHERE 1";
                if(!empty($id)){
                    $query .= " AND id = '$id";
                }
                $query .= " ORDER BY id DESC";
                $result = $conn->query($query);
                while($res = $result->fetch_assoc()){
                    $name = $res['name'];
                    $thumb = $res['thumb'];
                    $description = $res['description'];
                    $date = $res['date'];
                    echo
                    "<div class=\"new\">
                                <div class=\"table\">";
                    if(!empty($thumb)){
                        echo
                        "<div class=\"cell\">
                                        <img alt=\"$name\" src=\"$thumb\">
                                    </div>";
                    }
                    echo
                    "<div class=\"cell\">
                                            <h1>$name</h1>
                                            <h3>$description</h3>
                                            <h4>$date</h4>
                                    </div>
                                </div>
                            </div>";
                }
                $conn->close();
                ?>
            </div>
        </div>
    <script src="/scripts/index.js"></script>
    </body>
</html>