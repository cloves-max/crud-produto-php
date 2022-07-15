<?php
 require_once 'Crud.php';
 
 class Produto extends Crud{
    
    protected $table = 'produtos';

    private $nome;
    private $descricao;
    private $modelo;

    public function setNome($nome){
        $this->nome = $nome;
       
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function insert()
    {
        $sql  = "INSERT INTO $this->table (nome, descricao, modelo) VALUES (:nome, :descricao, :modelo)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':modelo', $this->modelo);
        return $stmt->execute();
    }
    public function update($id)
    {
       
        $sql= "UPDATE $this->table SET nome= :nome, descricao= :descricao, modelo= :modelo WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':email',$this->nome);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':modelo',$this->modelo);
    }

 }
?>