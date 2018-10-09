<?php


$bar_url="../" ;//chemin du dossier
if(isset($_GET['dossier'])){
    $dossier = ($_GET['dossier']);
    $bar_url=$bar_url.$dossier; 
}

$dirs = scandir($bar_url);  

foreach ($dirs as $dir) {
    # code...
    if (is_dir($bar_url.$dir)) {
        # code...
        if ($dir == "..") {
            # code...
        } else {
            # code...
            if (isset($_GET['dossier'])) {
                # code...
                ?>
                <a href="index.php?dossier=<?php echo $dossier.$dir; ?>/">
                <img src='image/dossier.png' alt=''width='60'><?php echo $dir; ?>
                </a>
                <?php

            } else {
                # code...
                ?>
                <a href="index.php?dossier=<?php echo $dir; ?>/">
                <img src='image/dossier.png' alt=''width='60'><?php echo $dir; ?>
                </a>
                
                <?php
            }
        }
    } else {
        # code...
        echo "
                <a>
                <img src='image/index.png' alt=''width='60'></a>".$dir."
                </a>
            ";
    }
}
?><br><br><a href="index.php">retour au menu</a><br><br>
<?php
if (isset($_GET['test'])){
    if (isset($_GET['action'])) {
        $creer=$_GET['action'];
        if (!is_dir($creer)) {
            mkdir($creer);
            echo '<script> alert ("votre dossier est creer");</script>';
/*            header('Location: ../index.php');
            exit();*/
        }
        else {
            echo '<script> alert ("votre dossier existe pas");</script>';
    }
}
}
?>
<?php
if (isset($_POST['executeRenommerFichier'])){
    if (is_dir($_POST['saisiRenommerFichier'])) {
        if(is_dir($_POST['saisiLeNouveau'])){
            echo'le nom '.$_POST['saisiLeNouveau'].' existe deja';
        } else {
            rename($_POST['saisiRenommerFichier'], $_POST['saisiLeNouveau']);
        }
    }else if (is_file($_POST['saisiRenommerFichier'])) {
        if (is_file($_POST['saisiLeNouveau'])) {
            echo'le nom '.$_POST['saisiLeNouveau'].' existe deja';
        } else {
            rename($_POST['saisiRenommerFichier'], $_POST['saisiLeNouveau']);
        }
    }
}
?>
<?php
if (isset($_GET['test1'])) {
    file_put_contents($_GET['action1'], "NouveauFichier");
}
?>
<?php
if (isset($_GET['executeSupDossier'])){
    $sup=$_GET['saisiSupDossier'];
    unlink($sup);
}
?>
<?php
if(isset($_POST['copy']) && isset($_POST['copy2']))
{
$file = $_POST['copy'];
$newfile = $_POST['copy2'];

    if (copy($file, $newfile)) {
        echo "La copie $file du fichier a reussie...\n";
        die();
    }
if (!copy($file, $newfile)) {
    echo "La copie $file du fichier a échoué...\n";
    die();
}
}

?>

<!--upload-->
<?php
function upload(){
    if(!empty($_FILES['uploaded_file']))
    {
        $path = "upload/";
        $path = $path . basename( $_FILES['uploaded_file']['name']);
        if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
            echo "Le fichier ".  basename( $_FILES['uploaded_file']['name']).
                " v a été enregistrez avez succés ";
        } else{
            echo "Il y a une erreurs veillez réessayez svp";
        }
    }
}
upload();


/*header('Location: ../index.php');
exit(); */

?>

