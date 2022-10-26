<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nivel = $_POST["input-nivel"];
            
        $sql = "INSERT INTO cad_niv (nivel) VALUES ('{$nivel}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso')</script>";
            print "<script>location.href='?page=nivel'</script>";
        }else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=nivel'</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}