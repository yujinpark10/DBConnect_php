<?php 
    $con = mysqli_connect("localhost", "yujinpark10", "qkr147147!!", "yujinpark10");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["userID"];
    $userPassword = $_POST["userPassword"];
    $userName = $_POST["userName"];
    $userBirth = $_POST["userBirth"];
    $userNum = $_POST["userNum"];
    $userEmail = $_POST["userEmail"];

    $statement = mysqli_prepare($con, "INSERT INTO member VALUES (?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssi", $userID, $userPassword, $userName, $userBirth, $userNum, $userEmail);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);



?>