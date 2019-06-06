<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  require("conexao_db.php");

  $conexao_db = conexao(); 

  $registros = mysqli_query($conexao_db, "SELECT * FROM noticias WHERE id=$_GET[id]");
  
  if ($resultado = mysqli_fetch_array($registros))  
  {
    $dados[] = $resultado;
  }
  
  $json = json_encode($dados);

  echo $json; 
  
  header('Content-Type: application/json');
?>