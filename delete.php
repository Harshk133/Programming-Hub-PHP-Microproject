<?php
include("connect.php");
if(isset($_GET["id"])){
    $deleteId = $_GET["id"];
    // echo $deleteId;
    $query = "DELETE FROM snippets WHERE `snippets`.`id` = $deleteId";
    $result = mysqli_query($conn, $query);
    if($result){
        header("location:homepage.php");
    }else{
        echo "Error occured!".mysqli_error($conn);
    }
}
?>