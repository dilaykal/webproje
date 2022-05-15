
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php 

        include("kullanıcı.php");


        if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
        {
            $_SESSION["login"] = "true";
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;

            echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");

        }

        else 
        {
            echo "Kullancı Adı veya Şifre Yanlış.<br>";
            echo "!!!TEKRAR DENEYİN!!!";
            header("Refresh: 1; url=login.php");
        }
        ?>
    </div>

</body>
</html>