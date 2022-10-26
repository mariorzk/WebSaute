<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $processo = $_POST["input-processo"];
        $instituicao = $_POST["select-instituicao"];
        
        $sql = "INSERT INTO cad_proc (processo, id_inst) VALUES ('{$processo}', '{$instituicao}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso')</script>";
            print "<script>location.href='?page=processo'</script>";
        }else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=processo'</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}