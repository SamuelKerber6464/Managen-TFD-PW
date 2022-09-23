<?php
Class Database{

    @var

    private static $instance;


    public static function getInstance(){
        if(!self::$instance){
                self::$instance = new PDO("mysql:host=localhost:3307;dbname=usuario;charset=utf8","root","");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

}