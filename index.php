<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    
    <title>Exploreateur De Fichier</title>
</head>

<body >


    <nav class="navbar navbar-expand-lg  navbar-transparent" id="menu">

        <div class="container">


            <a href="#" class="navbar-brand" style="margin-left:10px !important;"><img id="logo" src=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav" style="">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="font-weight: bold !important;">Retournez a la racine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?form" style="font-weight: bold !important;">Creer un dossier </a>
                    </li>
                  
<!--                     <li class="nav-item">
                        <a class="nav-link" href="traitement.php" style="font-weight: bold !important;">Ajoutez un fichier</a>
                    </li> -->
                </ul>



            </div>
        </div>
    </nav>
    
<?php

if (isset($_GET['form'])){
echo ' 
<form method="GET" action="function/function.php" id="creerDossier">
    <input type="hidden" >
    <input type="text" name="action" value="">
    <input type="submit" name="test" value="creerDossier">
</form>


<hr>


<form method="GET" action="function/function.php" id="creerFICHIER">
    <input type="hidden" >
    <input type="text" name="action1" value="">
    <input type="submit" name="test1" value="creerFICHIER">
</form>



<form action="function/function.php" method="POST">
<input type="text" name="saisiRenommerFichier" >
<input type="text" name="saisiLeNouveau">
<input type="submit" name="executeRenommerFichier" value="renommerFichier">
</form><br>


<form method="post" action="function/function.php">
    <input type="text" name="copy" >
    <input type="text" name="copy2">
    <input type="submit" name="submit" value="copier fichier">
</form><br>


<form action="function/function.php" method="get">
<input type="text" name="saisiSupDossier" id="saisiSupnommerDossier">
<input type="submit" name="executeSupDossier" value="SupprimerFichier">
</form><br>


<form enctype="multipart/form-data" action="function/function.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
</form>
<br><br>
';
}

?>


<?php
require "function/function.php";
$bar_url="../";
?>

  </body>
</html>


