<?php 
include_once("header.php"); //INCLUSAO DE CABECALHO
include_once("errmsg.php"); //INCLUSAO DE MSG DE ERROS
include_once("config.db.php"); //CONFIGURACAO DO BD
?>

<!--    FORMULARIO PADRAO -->
    <form action="inclui_dado.php" method="POST">
    
        <input type="hidden" name="id" value=""><br>
         
            Nome:<br>
            <input type="text" class="form-control" name="nome" value=""><br>
            CPF:<br>
            <input type="number" class="form-control" name="cpf" value=""><br>
            e-mail:<br>
            <input type="text" class="form-control" name="email" value=""><br>
            Nascimento:<br>
            <input type="date" class="form-control" name="nascimento" value=""><br>
        
            <br><br>
  
<!--         BOTAO DE SUBIMISSAO -->
        <input type="submit" class="btn btn-success" value="CADASTRAR">
  
    </form>
    
    
    </body>

</html>
