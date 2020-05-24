<?php

 function __autoload($classe){
    require_once "classes/$classe.php";
}
//  require_once "classes/Db.php";
  //require_once 'classes/employee.php';

?>

<html>
<head>
  <title>Gestion des employees</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <head>
  <body>
<!--Navbar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ENERGIE EMPLOYEE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>
<!--liste de table d'employees-->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <div class="jumbotron">
          <h4 class="mb-4">Tous les employees</h4>
                      <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Non Complet</th>
                  <th scope="col">Ville</th>
                  <th scope="col">telephone</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $employee=new employee();
                  $rows=$employee->select();
                  foreach ($rows as $row) {

                    ?>
                    <tr>
                      <th scope="row"><?php echo $row->id_client?></th>
                      <td><?php echo $row->nom_complet?></td>
                      <td><?php echo $row->ville?></td>
                      <td><?php echo $row->telephone?></td>
                      <td><a class="btn btn-sm btn-primary" href="">Modfier</a> &nbsp; <a class="btn btn-sm btn-danger" href="">Supprimer</a></td>
                    </tr>

                  <?php
                    $resultat[]=[
                      'id_client'=>$row->id_client,
                      'nom_complet'=>$row->nom_complet,
                      'ville'=>$row->ville,
                      'telephone'=>$row->telephone
                    ];
                  }

                    // echo $data=json_encode($resultat);
                  file_put_contents('employee.json',$data);

                ?>


              </tbody>
            </table>

        </div>
    </div>
  </div>

</div>

        <!-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> -->

  </body>

</html>
