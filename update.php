<?php
include("connect.php"); 

if(isset($_POST["id"]) && isset($_POST["content"]) && isset($_POST["description"])){
    $id = $_POST['id'];
    $content = $_POST['content'];
    $description = $_POST["description"];
    
    $query = "UPDATE snippets SET code='$content', description='$description' WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        // echo "Snippet updated successfully!";
        header("location:retrieve.php?id=$id");
    } else {
        echo "Error updating snippet: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>