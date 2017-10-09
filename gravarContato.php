<?php

include("cabecalho.php");

print(date("l, F d, Y, H:i:s"));

print_r($_POST);

	//abrir o arquivo e pegar o ultimo coigo existente

	$dados = file("agenda.csv");
	foreach($dados as $linha){
		
		$colunas = explode (";", $linha);
		
		$cod_atual = $colunas[0];

	}

	$codigo = $cod_atual+1;
	
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$foto = $_POST['foto'];

	$texto = $codigo. ";" .$nome. ";" .$telefone. ";" .$email. ";" .$foto;

	print($texto);

	//abrir o arquivo agenda.csv em modo escrita

	$arquivo  = fopen("agenda.csv", "a+");

	//escrever o texto no arquivo

	fwrite($arquivo, "\n".$texto );

	//fechar o arquivo

	fclose($arquivo);

	print("Acho q escreveu");

include("rodape.html")
?>