<?php 
  
require("../conexao_db.php");

$conexao_db = conexao(); 

$sql = "SELECT id, titulo, corpo, hora_da_notica, imagem FROM noticias ORDER BY hora_da_notica DESC LIMIT 3";

$resultado = mysqli_query($conexao_db, $sql) or die(mysqli_error($conexao_db));

$xml = new DOMDocument('1.0', 'iso-8859-1');
$xml->preservewhiteSpace = false;
$xml->formatOutput = true;

$noticias = $xml->createElement('Noticias');

while($dados = mysqli_fetch_object($resultado)){
	$noticia = $xml->createElement('Noticias');
	$titulo = $xml->createElement('titulo', $dados->titulo);
	$texto = $xml->createElement('texto', $dados->corpo);
	$imagem = $xml->createElement('imagem', $dados->imagem);
	$hora_da_notica = $xml->createElement('hora_da_notica', $dados->hora_da_notica);
	
	$noticia->appendChild($titulo);
	$noticia->appendChild($texto);
	$noticia->appendChild($imagem);
	$noticia->appendChild($hora_da_notica);
	
	$noticias->appendChild($noticia);
}

$xml->appendChild($noticias);

header('content-type: text/xml');
print $xml->saveXML();

?>