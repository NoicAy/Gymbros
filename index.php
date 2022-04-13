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
        <h1> <span id="achtbaanSpan">Home</h1>
            <div class = "achtbaanBox">
                
                <h3>MagnaDrive</h3>
                <p>Onze nieuwe achtbaantechniek heet MagnaDrive. Door middel van een aantal onderdelen die ons ontwikkelteam uitgevonden heeft, kunnen we een achtbaan produceren die tot 5-10% sneller kan gaan dan de snelste achtbaan tot nu toe, enkele graden scherpte kan toevoegen aan bochten, en ook nog langer meegaat dan achtbanen gemaakt van gebruikelijke onderdelen. 
                Het mooiste is nog dat de onderdelen niet veel duurder zullen zijn dan onze concurrentie. Vanwege de scherpere bochten is in veel gevallen ook de achtbaan compacter te maken, wat ook weer ruimte vrijmaakt voor andere attracties.</p>
            </div>
    </main>
</body>
<?php

  require_once('footer.php');

?>
</html>