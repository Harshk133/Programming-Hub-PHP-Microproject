<?php 
include("connect.php");

if(isset($_POST["submit"])){
    $desc = $_POST["description"];
    $code = $_POST["codespace"];
    // write query for insert!
    $query = "INSERT INTO snippets (code, description) VALUES ('$code', '$desc')";
    $result = mysqli_query($conn, $query);
    if($result){
        $last_id = mysqli_insert_id($conn);
        echo "Snippet shared successfully! Here's the link: <a href='retrieve.php?id=$last_id'>View Snippet</a>";
    }else{
        die(mysqli_error($conn));
    }
    mysqli_close($conn);
}
?>