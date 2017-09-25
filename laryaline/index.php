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
				$cor= 'cinza';

			}else{
				$cor= 'branco';

			}

		print('<tr class=" '.$cor. '">
			<td><a href="contato.php?cod='.$partes[0].'">'. $partes[1].'</a></td>
			<td>'.$partes[3].'</td>
			</tr>');

		}

		$cont++;
	}
	print('</table>');
		


	
	

	$rodape = file_get_contents('roda.html');
		print($rodape);
?>