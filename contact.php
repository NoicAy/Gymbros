<!doctype html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Supercoaster</title>
</head>
<body>
    <?php require_once 'header.php'; ?>

    
    <div class="container">
    <form action="backend/rollercoasterController.php" method="post">
        <input type="hidden" name="action" value="contact">
            <div class="style">
                <div class="wrapper">
                    <div class="form">
                        <h2 class="contact">Contact</h2>
                        <label for="fname">Volledige naam: </label>
                        <input type="text" id="fname" name="fullname"><br>
                        <label for="email">E-mail: </label>
                        <input type="email" name="email"><br>
                        <label for="message">Bericht: </label><br>
                        <textarea name="message" id="message" cols="100" rows="10"></textarea>
                        <hr>
                        <input type="submit" id="submit" value="Indienen">
                    </div>
                </div>
    </div>

</body>
<?php

  require_once('footer.php');

?>
</html>