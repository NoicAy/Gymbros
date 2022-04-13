<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Supercoaster</title>
</head>
<body>

<?php

  require_once('header.php');

?>

    <main>
        <div class ="main-menu">
            <div class ="wrapper">
            <?php if(isset($_GET['msg']))
                {
                    echo "<div class='msg'>" . $_GET['msg'] . "</div>";
                } ?>
            </div>
        </div>

       
       <div class = "wrapper">
        <h1> <span id="serV">Ser</span>vices</h1>
            <div class = "serviceBox">
                
                <h3>Coffee</h3>
                <p><span id = "coffeeBox">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Officiis hic porro quis sed vel, sunt, vero nam rerum, eum quae consectetur. Sint nesciunt voluptatem voluptate natus, ex ab laborum deserunt.</span></p>
            </div>
    </main>
</body>
<?php

  require_once('footer.php');

?>
</html>