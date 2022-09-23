<?php

require_once "dao/usuarioDao.php";
require_once "model/usuarioModel.php";

Class Usuario{

    @throws Exception
    @var usuarioDao

    private $usuarioDao;

      @throws Exception
      @var usuarioModel

    private $usuarioModel;

      @method __construct

    public  function __construct(){

        $this->usuarioDao = new UsuarioDao();
    }

    public function doLogin(){

        $this->usuarioModel = new usuarioModel();

        $this->usuarioModel->__set("email", $_POST["usuario"]);
        $this->usuarioModel->__set("senha", $_POST["senha"]);

        if($this->usuarioDao->doLogin($this->usuarioModel)){
            echo "true";
            return;
        }
    
        echo "false";
        return;
    }
}