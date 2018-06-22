<?php
$conn = new mysqli('a236477.mysql.mchost.ru', 'a236477_1', 'fwvm52cy9N5A', 'a236477_1');
$conn->query("SET NAMES utf8");
$query = "SELECT * FROM news WHERE 1";
$query .= " ORDER BY id DESC LIMIT 10";
$result = $conn->query($query);
while($res = $result->fetch_assoc()){
    $name = $res['name'];
    $thumb = $res['thumb'];
    $description = $res['description'];
    $date = $res['date'];
    echo
    "<div class=\"new\">";
    if(!empty($thumb)){
        echo
        "<div class=\"imgview\">
            <div id=\"imgview\">
                <img alt=\"$name\" src=\"$thumb\">
            </div>
        </div>";
    }
    echo
        "<div class=\"newBody\">
                <h2>$name</h2><hr>
                <h3>$description</h3><hr>
                <h3>$date</h3>
        </div>
    </div>";
}
$conn->close();