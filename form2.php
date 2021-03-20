<form action="form2.php" method="post">
 <p>İsminiz: <input type="text" name="isim" /></p>
 <p>Yaşınız: <input type="text" name="yaş" /></p>
 <p><input type="submit" /></p>
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Hoşgeldin <?php echo htmlspecialchars($_POST['isim']); ?>.
Siz <?php echo (int)$_POST['yaş']; ?> yaşındasınız.
</body>
</html>