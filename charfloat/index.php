<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>charFloat</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="form">
        <form action="index.php" method="POST">
            <input type="text" name="text" placeholder="type something...">
            <input type="submit" name="submit" id="submit">
        </form>
    </div>

    <?php
        $input = fopen("includes/input.txt","a") or die("unable to open!");
        if(isset($_POST['submit']) && !empty($_POST['submit'])){
        $text = $_POST['text'];
        fwrite($input,$text);
        fclose($input);
        }
    ?>

</body>
</html>