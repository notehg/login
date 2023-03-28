<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="login.php" method="post">
<h2>Formulario alunos marta</h2>


<form>
  <div class="mb-3">
    <label for="nome" class="form-label">usuario</label>
    <div class="col-sm-10">
    <input type="text"  name="x"   >
  </div>

  <div class="mb-3">
    <label for="sobre" class="form-label">senha</label>
    <div class="col-sm-10">
    <input type="text"  name="w" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <div class="col-sm-10">
  <div class="mb-3">

  </div>
</form>


<div id="nex">
<?php

include 'conecxao.php';


$nome =$_POST["x"];
$senha =$_POST["w"];




$sql = "SELECT * FROM usuario WHERE nome='$nome'
and senha = '$senha'"; 
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  echo "login efetuado" ;
} else {
  echo "erro";
}

?>

</body>
</html>

