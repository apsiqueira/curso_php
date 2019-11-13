<?php    
include_once("header.php"); //INCLUSAO DE CABECALHO
include_once("errmsg.php"); //INCLUSAO DE MSG DE ERROS
include_once("config.db.php"); //CONFIGURACAO DO BD

    //PEGA O VALOR DE ID COMO PARAMETRO NA URL
    $id_cliente=$_GET['id'];
    
    //MONTA A SQL QUERY
    $sql_read = "SELECT * FROM `minicurso`.`clientes` WHERE id=$id_cliente ORDER BY cliente";

    //EXECUTA A SQL QUERY
    $saida_sql=$MySQLi->query($sql_read) OR trigger_error($MySQLi->error, E_USER_ERROR);

    //PEGA O RESULTADO DA SAIDA, E ATRIBUI A UM VETOR
    while ($coluna = $saida_sql->fetch_object()) {
        
        
            //DEFINI CADA VETOR
        $id_cliente=$coluna->id;
        $nome[$id_cliente]=$coluna->cliente;
        $cpf[$id_cliente]=$coluna->cpf;
        $email[$id_cliente]=$coluna->email;
        $nascimento[$id_cliente]=$coluna->nascimento;

    }


    
    ?>
    
<!--     FORMULARIO PADRAO -->
    <form action="edita_dado.php" method="POST">
    
        <input type="hidden" name="id" value="<?php echo $id_cliente;?>"><br>
         
<!--         CADA CAMPO TERA UM VALOR RECEBIDO ATRAVES DA CONSULTA SQL -->
            Nome:<br>
            <input type="text" class="form-control" name="nome" value="<?php echo $nome[$id_cliente];?>"><br>
            CPF:<br>
            <input type="text" class="form-control" name="cpf" value="<?php echo $cpf[$id_cliente];?>"><br>
            e-mail:<br>
            <input type="text" class="form-control" name="email" value="<?php echo $email[$id_cliente];?>"><br>
            Nascimento:<br>
            <input type="date" class="form-control" name="nascimento" value="<?php echo $nascimento[$id_cliente];?>"><br>
        
            <br><br>
<!--         BOTAO DE SUMISSAO -->
        <input type="submit" class="btn btn-success"  value="EDITAR">
  
    </form>
    
    
    </body>

</html>
