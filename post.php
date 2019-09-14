
<form method="POST">
	<label>Insira seu nome</label><br>
	<input type="text" name="nome"><br><br>
	<input type="submit" value="Enviar">
</form>
<?php
$nome = '';
if(!empty($_POST['nome'])){
	$nome = $_POST['nome'];
}

echo "Valor recebido: ".$nome;

