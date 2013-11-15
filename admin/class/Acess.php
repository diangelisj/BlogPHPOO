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
    
    public function getUser() {
        return $this->user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getError() {
        return $this->error;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function setError($error) {
        $this->error = $error;
    }

        
    public function login(){
        $pdo = parent::getDB();
        
        try{
        $login =$pdo->prepare("SELECT * FROM admin WHERE admin_usuario = :usuario
            AND admin_senha = :senha");
        $login->bindValue(":usuario",$this->getUser());
        $login->bindValue(":senha",$this->getPass());
        
        $login->execute();
        
        if($login->rowCount()==1):
            $data = $login->fetch(PDO::FETCH_ASSOC);
        $_SESSION['logado']=true;
        $_SESSION['nome_logado']=$data['admin_nome'];
            
        return true;
        
            else:
                
                $this->setError("Usuário ou senha inválido!");
            $_SESSION['nome_logado']="Deslogado!";
        endif;
        }  catch (PDOException $e){
            
            echo "Aconteceu um erro : ".$e->getMessage();
        }
    }

    public function logout() {
        
    }

    public function verifiq() {
        
    }

}