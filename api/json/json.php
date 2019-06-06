<?php 

require("../conexao_db.php");

$conexao_db = conexao(); 

$sql = "SELECT id, titulo, corpo, hora_da_notica, imagem FROM noticias ORDER BY hora_da_notica DESC LIMIT 3";

$resultado = mysqli_query($conexao_db, $sql) or die(mysqli_error($conexao_db));

while($dados = mysqli_fetch_array($resultado)){

$dados = array(
	'Titulo' => $dados['titulo'],
	'Assunto' => $dados['corpo'],
	'Data Hora' => $dados['hora_da_notica']
);
echo json_encode($dados);
}

?>