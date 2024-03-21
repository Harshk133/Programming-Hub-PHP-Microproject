<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <p>Your Code is here 👉</p>
        <?php
include("connect.php");
if(isset($_GET["id"])){
    $id = $_GET['id'];
    $query = "SELECT * FROM snippets WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // echo nl2br(htmlspecialchars($row['code']));
        echo '<form action="update.php" method="post">';
        echo '<textarea name="description" rows="10" cols="50">' . htmlspecialchars($row['description']) . '</textarea><br>';
        echo '<textarea name="content" rows="10" cols="50">' . htmlspecialchars($row['code']) . '</textarea><br>';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<input type="submit" value="Update">';
        echo '</form>';
        echo "<a href='delete.php?id=$id'>Delete</a>";
    } else {
        echo "Snippet not found";
    }
    
    mysqli_close($conn);
}
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>