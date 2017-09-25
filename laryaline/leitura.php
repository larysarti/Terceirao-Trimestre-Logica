<?php
	
//file_get_contents(): pega conteudo - retorna string; reaproveita codigos


//variavel recebera conteudo de um arquivo e sera um string

	$contatos = file_get_contents("nomebonito.csv");

		echo($contatos);


//file(): Abre um arquivo e retorna seu conteudo para um Array

	$dados = file("nomebonito.csv");

		echo($dados);
?>