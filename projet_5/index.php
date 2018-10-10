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
<div >

   <header>
                
                 <nav>
           <ul>
                <li class="nav-item">
       
                <a class="nav-link" href="index.php" style="font-weight: bold !important;">ACTUALISER</a>
                   </li> 
                <center>
                    <li class="menu-accueil">EXPLORATEUR DE FICHIERS</li>
                   </center>
            
  </nav>
</header>
        
  <section class="raa">
    <center>
<div class="container-fluid" >
    <ul class="nav">
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Nouveau Dossier</button>
        </li>

        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalfichier">Nouveau Fichier</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalrenommer">Renommer</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalcopier">Copier</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalsupp">Supprimer</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalupload">Upload</button>
        </li>
    </ul>
</div>
</center>
</section>


    <div class="container-fluid bg-grey">
  <?php

include "function/function.php";

?>
    
            <!-- Creation du Dossier-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Creation de Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="get">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom du Dossier:</label>
                                    <input type="text" name="LeNomDossier" id="saisi" class="form-control"> <br>
                                    <div class="modal-footer">
                                    <input type="submit" name="CreerDossier"  class="btn btn-default" value="Nouveau Dossier">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin de creation de dossier-->
            
             <!-- Creation Fichier  -->
            <div class="modal fade" id="myModalfichier" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Creation de Fichier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="get">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom du Fichier:</label>
                                    <input type="text" name="LeNomFichier" id="saisifich" class="form-control"> <br>
                                    <div class="modal-footer">
                                        <input type="submit" name="CreerFchier"  class="btn btn-default" value="Nouveau Fichier">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Creation Fichier-->

<!-- Renommer un Fichier-->
            <div class="modal fade" id="myModalrenommer" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Renommer Fichier ou Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="saisiRenommerFichier" id="saisiNomFichieraRenomer" placeholder="Nom a Renommer" class="form-control">
                                    <input type="text" name="saisiLeNouveau" id="saisiRenomFichier" placeholder="Nouveau Nom" class="form-control">
                                    <div class="modal-footer">
                                        <input type="submit" name="executeRenommerFichier"  class="btn btn-default"value="Renommer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Renommer Fichier -->


             <!-- Copier -->
            <div class="modal fade" id="myModalcopier" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Copier un Fichier ou Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="copy" id="saisiFichierACopier" placeholder="Nom a Copier" class="form-control">
                                    <input type="text" name="copy2" id="saisiNouvNomFichierCopier" placeholder="Nouveau Nom" class="form-control">
                                    <div class="modal-footer">
                                        <input type="submit" name="submit"  class="btn btn-default" value="Copier">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Copier-->

             <!-- Suppression de Dossier-->
            <div class="modal fade" id="myModalsupp" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Supprimer un Fichier ou Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="get">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom</label>
                                    <input type="text" name="saisiSupDossier" id="saisisup" placeholder="Nom du Fichier ou Dossier" class="form-control"> <br>
                                    <div class="modal-footer">
                                        <input type="submit" name="executeSupDossier"  class="btn btn-default"value="Supprimer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin de Suppression de dossier-->


                <!-- Upload-->
            <div class="modal fade" id="myModalupload" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Supprimer un Fichier ou Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="get">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom</label>
                                    <input type="file" name="uploaded_file" id="file" placeholder="Nom du Fichier ou Dossier" class="form-control"> <br>
                                    <div class="modal-footer">
                                        <input type="submit" name="file"  class="btn btn-default"value="Supprimer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin Upload
    </div>
        
    

       
  </body>
</html>


