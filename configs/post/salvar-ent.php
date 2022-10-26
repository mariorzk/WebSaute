<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $entidade = $_POST["input-entidade"];
            
        $sql = "INSERT INTO cad_ent (entidade) VALUES ('{$entidade}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso')</script>";
            print "<script>location.href='?page=entidade'</script>";
        }else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=entidade'</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}