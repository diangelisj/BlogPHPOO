<?php

class Acess {

    
    const USER="root";
    CONST PASS="";
    
    public function connect(){
        
        $pdo = new PDO($dsn, self::USER, self::PASS);
        
    }
    
    
    
}