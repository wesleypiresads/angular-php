<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  require("conexao_db.php"); // IMPORTANDO A CONEXAO COM BANCO DE DADOS

  $conexao_db = conexao(); // CREANDO A CONEXAO

  // EXCUTANDO A QUERY NA TABELA
  $registros = mysqli_query($conexao_db, "SELECT * FROM noticias ORDER BY hora_da_notica DESC");
  
  // PERCORRE O REGISTRO E ARMAZENDO NO ARRAY
  while ($resultado = mysqli_fetch_array($registros))  
  {
    $dados[] = $resultado;
  }
  
  $json = json_encode($dados); // GERA O JSON COM DADOS OBTIDOS 
  
  echo $json; // MUESTRA EL JSON GENERADO
  
  header('Content-Type: application/json');
?>