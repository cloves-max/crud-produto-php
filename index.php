<?php
	function __autoload($class_name){
		require_once '' . $class_name . '.php';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<?php 
	if(isset($_POST['cadastrar'])):
	
		$produto = new Produto();

		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$modelo = $_POST['modelo'];

		$produto->setNome($nome);
		$produto->setDescricao($descricao);
		$produto->setModelo($modelo);
		$produto->insert();
	endif;
	?>
<form method="POST" action="">
    <label for="fname">Nome</label>
    <input type="text" id="fname" name="nome" placeholder="Nome">

    <label for="lname">descricao</label>
    <input type="text" id="lname" name="descricao" placeholder="descricao">

	<label for="lname">modelo</label>
    <input type="text" id="lname" name="modelo" placeholder="modeloo">
  
    <input type="submit" name="cadastrar" >
  </form>
</body>
</html>