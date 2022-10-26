<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $municipio = $_POST["input-municipio"];
        $cep = $_POST["input-cep"];
        $uf = $_POST["input-uf"];
        
        $sql = "INSERT INTO cad_mun (municipio, cep, uf) VALUES ('{$municipio}', '{$cep}', '{$uf}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso')</script>";
            print "<script>location.href='?page=municipio'</script>";
        }else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=municipio'</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}