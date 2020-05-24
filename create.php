<?php
function __autoload($classe){
   require_once "classes/$classe.php";
}

   if(isset($_POST['submit'])){
      $id=time()."".rand(1,100);
      $nom=$_POST['txtnom'];
      $ville=$_POST['txtville'];
      $tel=$_POST['txttel'];
      $employee=new employee();
      $res=$employee->add($id,$nom,$ville,$tel);
      if($res){
        echo "Enregistrement reussi avec success";
      }

}
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
          <h4 class="mb-4">Ajouter un employe</h4>

        <form action="" method="post">
            <div class="form-group">
            <label for="txtnom">Nom Complet:</label>
            <input type="text" class="form-control" name="txtnom" placeholder="Ex:Fleurine Kenley">
            </div>
            <div class="form-group">
            <label for="txtville">Ville:</label>
            <input type="text" name="txtville" placeholder="Ex:Tabarre" class="form-control">
            </div>
            <div class="form-group">
            <label for="txttel">Telephone:</label>
            <input type="text" name="txttel" placeholder="E:47663774" class="form-control">
            </div>

            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            </form>

        </div>
    </div>
  </div>

</div>

        <!-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> -->

  </body>

</html>
