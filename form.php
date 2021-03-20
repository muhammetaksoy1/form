<?php  <form action="form.php" method="get">

<p>İsminiz: <input type="text" name="isim" /></p>

<p>Yaşınız: <input type="text" name="yaş" /></p>

<p><input type="submit" /></p>

</form> 
 ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>


        Hoşgeldin <?php echo htmlspecialchars($_GET['isim']); ?>.
         <?php echo (int)$_GET['yaş']; ?> yaşındasın.
    </body>
    </html>
    