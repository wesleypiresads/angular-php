<?php

// CONEXAO COM BANCO DE DADOS
function conexao() {
  $conexao = mysqli_connect("localhost", "root", "", "gerenciador");
  
  return $conexao;
}

?>