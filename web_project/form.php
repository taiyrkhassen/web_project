
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        if(!isset($_COOKIE['send'])){
            echo "<form action='send.php' method='post'>
            Email<input type='email' name='email'>
            Feedback<input type='text' name='feedback'>
            <input type='submit'>
        </form>";
        }else{
            echo "Thanks for your response. We will contact with you in meantime";
        }
    ?>
</body>
</html>