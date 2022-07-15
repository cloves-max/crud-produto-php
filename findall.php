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
    <link rel="stylesheet" href="table.css">
    <title>Document</title>
</head>
<body>
<table id="customers">
  <tr>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Modelo</th>
    <th>Ações</th>
    <tr>
        <?php 
        $produto = new Produto();	
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

          $id = (int)$_GET['id'];
          if($produto->delete($id)){
            echo "Deletado com sucesso!";
          }
    
        endif;
        foreach ($produto->findall() as $key => $value):?>
            <td><?php echo  $value->nome; ?></td>
    <td><?php echo $value->descricao; ?></td>
    <td><?php echo $value->modelo; ?></td>
    <td><?php echo "<a href='update.php?id=" . $value->id . "'>Editar</a>"; ?> 
    <?php echo "<a href='findall.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?></td>
</tr>
<?php endforeach;?>
  </tr>
</table>
</table>
</body>
</html>

