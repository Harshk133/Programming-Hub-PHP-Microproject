<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Hub!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
</head>

<body>
    <h2>Programming Hub!</h2>
    <button><a href="index.php">+</a></button>
    <?php
    include("connect.php");
    $query = "SELECT * FROM `snippets`";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <div style="border: 1px solid black; padding: 10px; margin: 5px; border-radius: 3px;">
                <?php echo $row["description"]; ?>
                <pre>
                    <code class="language-php">
<?php echo htmlspecialchars($row['code']); ?>
                    </code>
                </pre>
                <a href="retrieve.php?id=<?php echo $row["id"]; ?>">
                    <button>Read Post</button>
                </a>
                <a href="retrieve.php?id=<?php echo $row["id"]; ?>" onclick="copyToClipboard(this); return false;">
                    <button>Share</button>
                </a>
            </div>
            <?php
        }
    }
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <script>
    hljs.highlightAll();

    function copyToClipboard(element) {
        var link = element.href;
        navigator.clipboard.writeText(link).then(function() {
            console.log('Link copied to clipboard: ' + link);
        }, function(err) {
            console.error('Unable to copy link: ', err);
        });
    }
    </script>

</body>

</html>