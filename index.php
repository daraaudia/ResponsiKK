<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Masuk Sebagai</h2>
        <form action="" method="POST">
            <input type="submit" name="submitadmin" value="Operator" class="btn">
            <input type="submit" name="submituser" value="Pengguna" class="btn">
        </form>
    </div>
    <?php
        if (isset($_POST['submitadmin'])) {
            echo '<script>window.location="loginadmin.php"</script>';
        }elseif(isset($_POST['submituser'])){
            echo '<script>window.location="loginuser.php"</script>';
        }
    ?>
</body>
</html>