<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $grau = $_POST["input-grau"];
            
        $sql = "INSERT INTO cad_niv_hab (niv_hab) VALUES ('{$grau}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso')</script>";
            print "<script>location.href='?page=grau'</script>";
        }else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=grau'</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}