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
        $prouto = new Produto(); 
        
        $id = (int)$_GET['id'];
        
		$produto = $prouto->find($id);
	
	?>
    <?php 
     
     if(isset($_POST['atualizar'])):
	
		$produto = new Produto();
        $id = $_GET['id'];
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$modelo = $_POST['modelo'];

		$produto->setNome($nome);
		$produto->setDescricao($descricao);
		$produto->setModelo($modelo);
		$produto->update($id);
	endif;
    ?>
<form method="POST" action="">
    <label for="fname">Nome</label>
    <input type="text" id="fname" name="nome" value="<?php echo $produto->nome; ?>" placeholder="Nome">

    <label for="lname">descricao</label>
    <input type="text" id="lname" name="descricao"value="<?php echo $produto->descricao; ?>"placeholder="descricao">
    <input type="hidden" name="id" value="<?php $produto->id?>">
	<label for="lname">modelo</label>
    <input type="text" id="lname" name="modelo" value="<?php echo $produto->modelo; ?>"placeholder="modelo">
    <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">
  </form>
</body>
</html>