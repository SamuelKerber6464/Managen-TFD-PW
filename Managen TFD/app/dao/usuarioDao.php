<?php

require_once "core/database.php";

Class UsuarioDao{

      @var $pdo

    private $pdo;

    public function __construct(){
        $this->pdo = Database::getInstance();
    }

    public function save(usuarioModel $usuario){

    }

    public function listUsuario(){

    }

    public function update(usuarioModel $usuario){

    }

    public function delete($id){

    }

    public function doLogin(usuarioModel $usuario){
        try{

            $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha LIMIT 0, 1";


            $query = $this->pdo->prepare($sql);


            $email = $usuario->__get("email");
            $senha = $usuario->__get("senha");

            $query->bindParam("email", $email);
            $query->bindParam("senha", $senha);

          
            if($query->execute() && $query->rowCount() == 1){
                session_start();
                $_SESSION["usuario"] = $query->fetch(PDO::FETCH_OBJ);
                $_SESSION["logged"] = true;
                return true; 
            }

            return false;

        }catch (Exception $e){
            throw new Exception("We had an error: " . $e->getMessage(), 1);
        }
    }

}