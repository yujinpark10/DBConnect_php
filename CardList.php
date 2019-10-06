<?php 
    header("Content-Type: text/html; charset=UTF-8");
    $con = mysqli_connect("localhost", "yujinpark10", "qkr147147!!", "yujinpark10");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_GET["userID"];

    $result = mysqli_query($con, "SELECT card.name FROM card, member WHERE member.userID = card.userID AND card.mine = false");
    $response = array();

    while($row = mysqli_fetch_array($result)) {
        $array_push($response, array("cardNum"=>$row[0], "name"=>$row[1], "company"=>$row[2], "team"=>$row[3], "position"=>$row[4], "coNum"=>$row[5], "num"=>$row[6], "e_mail"=>$row[7], "faxNum"=>$row[8], "address"=>$row[9], "userID"=>$row[10], "mine"=>$row[11]));
    }

    echo json_encode(array("response"=>$response), JSON_UNESCAPED_UNITCODE);
    mysql_close($con);
?>