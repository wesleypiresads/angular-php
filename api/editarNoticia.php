<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("conexao_db.php");  

  $conexao_db = conexao(); 
  
  
  mysqli_query($conexao_db, "UPDATE noticias 
	SET titulo='$params->titulo', 
		corpo='$params->corpo' 
	WHERE id=$params->id");    
  
  class Result {}
  
  $response = new Result();
  $response->resultado = 'OK';
  $response->mensagem = 'Notícia atualizada com sucesso';

  header('Content-Type: application/json');

  echo json_encode($response); 
?>