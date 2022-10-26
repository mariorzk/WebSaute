<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $dependencia = $_POST["input-dependencia"];
            
        $sql = "INSERT INTO cad_dep (dependencia) VALUES ('{$dependencia}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso')</script>";
            print "<script>location.href='?page=dependencia'</script>";
        }else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=dependencia'</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}