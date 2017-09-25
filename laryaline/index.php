<?php

	$cabecalho = file_get_contents('cab.html');
	print($cabecalho);



	$dados = file ("nomebonito.csv");


//tabela com php

	print('<table border="1">');

	$cont=0;
	foreach($dados as $linha ){
	
//partes é um array que recebe o resultado da separacao de texto pelo separador ','
		
		$partes = explode (",", $linha);
		

		if($cont==0){		
			print('<tr>
				<th>' .$partes[0]. '</th>
				<th>' .$partes[1]. '</th>
				<th>' .$partes[2]. '</th>
				<th>' .$partes[3]. '</th>
				</tr>');
		}else{

			if($cont % 2 ==0){
				print('<tr class="pares">
				<td>' .$partes[$cont]. '</td>
				</tr>');

			}else{
				print('<tr class="impar">
				<td>' .$partes[$cont]. '</td>
				</tr>');

			}
		}

		$cont++;
	}
	print('</table>');
		


	
	

	$rodape = file_get_contents('roda.html');
		print($rodape);
?>