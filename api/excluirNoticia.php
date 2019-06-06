<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  require("conexao_db.php"); // IMPORTA A CONEXAO COM BANCO DE DADOS

  $conexao_db = conexao(); // CREA A CONEXÃO
  
  // REALIZA A QUERY NO BANCO
  mysqli_query($conexao_db, "DELETE FROM noticias WHERE id=$_GET[id]");
    
  
  class Result {}

  // GERA OS DADOS DA RESPOSTA
  $response = new Result();
  $response->resultado = 'OK';
  $response->mensagem = 'Notícia excluída com sucesso';

  header('Content-Type: application/json');

  echo json_encode($response); // MOSTRA O JSON GERADO
?>