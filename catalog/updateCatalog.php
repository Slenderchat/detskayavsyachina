<?php
$conn = new mysqli("localhost", "id8550022_detskayavsyachina", "%sha512pass%", "id8550022_detskayavsyachina");
if($conn) {
    $query = 'SELECT `thumb_x400`, `name`, `price`, `id` FROM `tovary` WHERE 1';
    $url = '/catalog?';
    if ($_GET['search'] && $_GET['search'] !== '') {
        $query .= ' AND `name` LIKE \'%' . $conn->escape_string($_GET['search']) . '%\'';
        $url .= '&search=' . urlencode($conn->escape_string($_GET['search']));
    }
    if($_GET['category'] && $_GET['category'] !== ''){
        $query .= ' AND `category` LIKE \'%' . $conn->escape_string($_GET['category']) . '%\'';
        $url .= '&category=' . urlencode($conn->escape_string($_GET['category']));
    }
    if($_GET['sort'] && $_GET['sort'] !== ''){
        if($_GET['sort'] === 'DESC'){
            $query .= ' ORDER BY `price` DESC';
            $url .= '&sort=' . urlencode('DESC');
        }elseif($_GET['sort'] === 'ASC'){
            $query .= ' ORDER BY `price` ASC';
            $url .= '&sort=' . urlencode('ASC');
        }
    }else{
        $query .= ' ORDER BY `price` ASC';
        $url .= '&sort=' . urlencode('ASC');
    }
    $res = $conn->query($query);
    $maxPage = ceil($res->num_rows / 8);
    if($_GET['page'] && $_GET['page'] !== ''){
        $query .= $conn->escape_string(' LIMIT 8 OFFSET ' . (8 * ($_GET['page'] - 1)));
        $page = $_GET['page'];
        $url .= '&page=' . urlencode($_GET['page']);
    }else{
        $query .= ' LIMIT 8';
        $page = 1;
    }
    if(($page - 2) >= 1) {
        for ($i = -2, $iP = $page + $i; $i < 3 && $iP <= $maxPage; $i++, $iP++) {
            $pageCTRL .= '<a href=\"' . $url . '&page=' . ($iP) . '\">' . ($iP) . '</a>';
        }
    }else if(($page - 1) >= 1){
        for ($i = -1, $iP = $page + $i; $i < 4 && $iP <= $maxPage; $i++, $iP++) {
            $pageCTRL .= '<a href=\"' . $url . '&page=' . ($iP) . '\">' . ($iP) . '</a>';
        }
    }else{
        for ($i = 0, $iP = $page + $i; $i < 5 && $iP <= $maxPage; $i++, $iP++) {
            $pageCTRL .= '<a href=\"' . $url . '&page=' . ($iP) . '\">' . ($iP) . '</a>';
        }
    }
    $res = $conn->query($query);
    if($res){
        $res = $res->fetch_all();
        foreach ($res as $value){
            $catalog .= '<div class=\"tovar\" onclick=\"location.href=\'/catalog/tovar/?id=' . $value[3] . '\'\">' . '<img src=' . $value[0] . '>' . '<h2>' . $value[1] . '</h2>' . '<div class=\"price\" style=\"text-align: center\">' . $value[2] . ' руб.</div>' . '</div>' . '\n';
        }
    }
    $response = "{
                    \"url\": \"$url\",
                    \"pageCTRL\": \"$pageCTRL\",
                    \"catalog\": \"$catalog\"
                 }";
    header('Content-type: application/json');
    echo($response);
}