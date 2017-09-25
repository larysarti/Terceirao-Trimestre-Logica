<?php

include('cab.html');

?>

<form method="post" action="gravarContato.php">
	
	<label for="nome">Nome:</label>
		<input type="text" name="nome"/>
	<label for="endereço">Endereço:</label>
		<input type="text" name="endereço"/>
	<label for="email">Email:</label>
		<input type="email" name="email"/>
	<label for="telefone">Telefone:</label>
		<input type="text"  name="telefone"/>
		
		<input type="submit" name="gravar" value="Gravar"/>

</form>

<?php

include('roda.html');


?>
