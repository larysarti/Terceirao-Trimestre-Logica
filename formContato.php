<?php
include('cabecalho.php');
print(date("l, F d, Y, H:i:s"));

?>


<form method="post" action="gravarContato.php">
	
	
	<label for="nome">Nome:</label>
	<input type="text" name="nome"/>
	<br>
	<label for="telefone">Telefone:</label>
	<input type="text" name="telefone"/>
	<br>
	<label for="email">E-mail:</label>
	<input type="email" name="email"/>
	<br>
	<label for="foto">Foto:</label>
	<input type="text" name="foto"/>
	<br>
	
	<input type="submit" name="gravar" value="Gravar"/>
</form>

<?php
include('rodape.html');
?>