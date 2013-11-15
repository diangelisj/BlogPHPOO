<?php

session_start();

require_once 'class/Acess.php';

if(isset($_POST['logar'])):
    $Acess = new Acess();
    $Acess->setUser($_POST['usuario']);
    $Acess->setPass($_POST['senha']);
    $Acess->login();
    if($Acess->getError()):
      echo  $err=$Acess->getError();
    endif;
endif;
;?>
<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
        <title>Blog PHPOO </title>
        <link href="style_acess.css" rel="stylesheet"type="text/css"/>
    </head>
       
    <body>
        <div id="login">
            <?php echo $_SESSION['nome_logado'] ;?>
            <form action ="" method="POST">
                <label for ="usuario">Usuário:</label> 
                <input type="text"  name="usuario" class="input"/>
                
                <label for="senha"> Senha</label>
                <input type="text" name="senha"class="input"/>
                
                <label for="submit"></label>
                <input type="submit" name="logar" value="ok" clas="input_submit"/>
                      
                
            </form>
        </div>
        
    </body>
    
    
</html>