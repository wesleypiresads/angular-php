<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input'); // RECEBO O JSON DO ANGULAR 
 
  $params = json_decode($json); // GUARDO O JSON NA VARIAVEL
  
  require("conexao_db.php"); // IMPORTO A CONEXAO COM BANCO

  $conexao_db = conexao(); // CRIO A CONEXAO
  
    
  // REALIZO A QUERY NA TABELA
  mysqli_query($conexao_db, "INSERT INTO noticias(titulo, corpo) VALUES
                  ('$params->titulo', '$params->corpo')");
  
  class Result {}

  // AQUI EU GERO OS DADOS DA QUERY
  $response = new Result();
  $response->resultado = 'OK';
  $response->mensagem = 'Notícia inserida com sucesso';

  header('Content-Type: application/json');

  echo json_encode($response); // EXIBINDO JSON GERADO
?>