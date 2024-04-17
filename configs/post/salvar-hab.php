<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $habilitacao = $_POST["input-habilitacao"];
            
        $sql = "INSERT INTO cad_hab (habilitacao) VALUES ('{$habilitacao}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso')</script>";
            print "<script>location.href='?page=habilitacao'</script>";
        }else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=habilitacao'</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}