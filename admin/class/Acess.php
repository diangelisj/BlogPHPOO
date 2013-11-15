<?php

/* Acess é a clase que fará acesso ao recursos de administrador
 * a classe acess extende a clase con, onde ocorre a conexão com o banco de dados
 * iAcess é a clsse que implementa a interface, nesta temos os metodos que são implementados */

require_once 'interface/iAcess.php';
require_once"class/Conn.php";
class Acess  extends Conn implements iAcess{

 
    private $user;
    private $pass;
    private $error;
    
    public function login(){
        
        
    }

    public function logout() {
        
    }

    public function verifiq() {
        
    }

}