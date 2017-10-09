<?php
//inclui o código PHP, executando-o
include("cabecalho.php");

print(date("l, F d, Y, H:i:s"));
?>
		<a href="formContato.php">Inserir novo contato...</a>

<?php
//Funcao file abre um arquivo e retorna seu conteudo para unm ARRAY
	$dados = file("agenda.csv");
//percorrer o array e exibir cada um dos elementos
	print('<table border="1">');
	$cont=0;
	foreach ($dados as $linha) {
		//partes é um array que recebe o resultado da separação do texto pelo separador ";"

		$partes = explode(";", $linha);
		if($cont==0){
			print('<tr class="titulo">
					 <th>'.$partes[0].'</th>
				     <th>'.$partes[1].'</th>
				     <th>'.$partes[2].'</th>
				     <th>'.$partes[3].'</th>
				    
				   </tr>');

		}else{
			if($cont%2==0){
				$cor = 'cinza';
			}else{
				$cor = 'branco';
			}
			print('<tr class="'.$cor.'">
					 <th>'.$partes[0].'</th>
				     <td><a href="contato.php?cod='.$partes[0].'">'.$partes[1].'</a></td>
				     <th>'.$partes[2].'</th>
				     <th>'.$partes[3].'</th>
				     

					
				   </tr>');


		}
		$cont++;
	}
	print('<tr><td class="titulo" colspan="5">'.($cont-1).' contato(s) listado(s)</td></tr>');
	print('</table>');



//Funcao abre um arquivo e retorna seu conteudo em uma STRING
	$rodape = file_get_contents('rodape.html');
	print($rodape);
?>

