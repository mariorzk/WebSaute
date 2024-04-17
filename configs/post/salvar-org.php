<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $orgao = $_POST["input-orgao"];
            
        $sql = "INSERT INTO cad_orgao (orgao) VALUES ('{$orgao}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso')</script>";
            print "<script>location.href='?page=orgao'</script>";
        }else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=orgao'</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}