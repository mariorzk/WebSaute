<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $instituicao = $_POST["input-instituicao"];
        $nivel = $_POST["select-nivel"];
        $endereco = $_POST["input-endereco"];
        $numero = $_POST["input-numero"];
        $bairro = $_POST["input-bairro"];
        $municipio = $_POST["select-municipio"];
        $email = $_POST["input-email"];
        $dependencia = $_POST["select-dependencia"];
        $entidade = $_POST["select-entidade"];
        $credenciamento = $_POST["input-credenciamento"];
        $val_credenciamento = $_POST["input-val-credenciamento"];
        $recredenciamento = $_POST["input-recredenciamento"];
        $val_recredenciamento = $_POST["input-val-recredenciamento"];

        $sql = "INSERT INTO cad_inst (instituicao, id_nivel, endereco, num, bairr_dist, id_mun, email, id_dep, id_ent, creden, v_creden, recreden, v_recreden) VALUES ('{$instituicao}', '{$nivel}', '{$endereco}', '{$numero}', '{$bairro}', '{$municipio}', '{$email}', '{$dependencia}', '{$entidade}', '{$credenciamento}', '{$val_credenciamento}', '{$recredenciamento}', '{$val_recredenciamento}')"; 
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=instituicao';</script>";
        }else {
            print "<script>alert('Erro ao cadastrar');</script>";
            print "<script>location.href='?page=instituicao';</script>";
        }
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}