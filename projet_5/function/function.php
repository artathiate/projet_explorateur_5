
                
<?php
//debut du programme
//faire afficher les dossiers et les fichiers avec la verifictaion du conetnu enitulisa is_ dir
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
                 <div class="dos">
                <a href="index.php?dossier=<?php echo $dossier.$dir; ?>/">
                <img src='image/dossier.png' alt=''width='60'><?php echo $dir; ?>
                </a></div><br><br><br>
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
                <img src='image/fichier.png' alt=''width='30'></a>".$dir."
                </a>
            ";
    }
}
?><br><br><a href="index.php">retour au menu</a><br><br>
<!--fin du affichage-->

<!--manipulation des fonctionalité ou bien des boutons-->

<!-- creation d'un dossier avec $_GET en recuperant le bonton submit(CreerDossier)
    recuperer le name du premier input (LeNomDossier) et declarer un variable  recuperer 
    le name faire une verification avec is_dir -->
<?php
if (isset($_GET['CreerDossier'])){
    if (isset($_GET['LeNomDossier'])) {
        $creer=$_GET['LeNomDossier'];
        if (!is_dir($creer)) {
            mkdir($creer);
            echo '<script> alert ("votre dossier est creer");</script>';
        
        }
        else {
            echo '<script> alert ("votre dossier  existe deja");</script>';
    }
}
}
?>
<!--fin du creation de dossier-->


<!-- creation d'un fichier avec $_GET en recuperant le bonton submit(CreerFchier)
    recuperer le name du premier input (LeNomFichier) et recuperer 
    le name -->
<?php
if (isset($_GET['LeNomFichier'])) {
    file_put_contents($_GET['CreerFchier'], "NouveauFichier");
}
?>
<!--fin du fichier-->



<!--creer la fonction Renommer d'un fichier et d'un dossier avec $_POST 
faire un verification avec is_dir pour avoir la confirmation si c'est doosier
ou un fichier apres entrer le nom a renommer plus le nouveau nom  executer 
NB  AVEC  echo'le nom '.$_POST['saisiLeNouveau'].' existe deja'; ON VERIFIE 
LE NOM EXISTE DEJA ET LE SIGNAL-->
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
<!--fin du creer du fichier-->


<!--creer un copy pour cellae on a 2 input le premier permet de recuperer
 le nom du fichier ou du dossier a copier 
 NB si on veut copier dans un autre dossier il faut especifier le chemin-->
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
<!--fin du copy-->


<!--Supprimer un dossier en recuperant le bonton submit declarer une variable 
    et l'excuter avec la fonction unlink -->
<?php
if (isset($_GET['executeSupDossier'])){
    $sup=$_GET['saisiSupDossier'];
    unlink($sup);
   
} 
?>
<!--fin du supprimer-->

<!-- la fonction upload qui nous permet aller recuperer des donnés dans le systeme-->
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
?>
    <!-- fin du upload-->







