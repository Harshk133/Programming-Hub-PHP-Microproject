<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgrammingHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3>Welcome to Programming Hub Website! </h3>
        <h3> Type your code below and you can share it, save it, update it or delete
            it 😉</h3>
        <form action="create.php" method="post">
            <div>
                <label for="desc">Provide Your code Description:- </label>
                <br>
                <textarea name="description" id="desc" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="codespace">Provide Your Code Below:- </label>
                <br>
                <textarea name="codespace" id="codespace" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" name="submit" value="Create">
        </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>