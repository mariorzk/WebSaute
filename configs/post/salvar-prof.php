<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["input-nome"];
        $nascimento = $_POST["input-nascimento"];
        $naturalidade = $_POST["select-naturalidade"];
        $cpf = $_POST["input-cpf"];
        $rg = $_POST["input-rg"];
        $orgao = $_POST["select-orgao"];
        $endereco = $_POST["input-endereco"];
        $numero = $_POST["input-numero"];
        $celular = $_POST["input-celular"];
        $fixo = $_POST["input-fixo"];
        $email = $_POST["input-email"];
        $mae = $_POST["input-mae"];
        $pai = $_POST["input-pai"];
        $habilitacao = $_POST["select-habilitacao"];
        $niv_habilitacao = $_POST["select-niv-hab"];
        $foto = $_FILES["input-foto"];

        // Verifica se o arquivo foi enviado com sucesso
        if ($foto['error'] === UPLOAD_ERR_OK) {
            
            $foto_nome = $foto['name']; 
            $foto_tmp = $foto['tmp_name']; 
            $diretorio_destino = 'configs/uploads'; // Diretório onde os arquivos serão armazenados
            $foto_destino = $diretorio_destino . $foto_nome; 

            if (move_uploaded_file($foto_tmp, $foto_destino)) {
               
                $sql = "INSERT INTO cad_prof (nome, foto, nasc, id_nat, cpf, rg, id_orgao, endereco, num, fixo, celular, email, pai, mae, id_hab, id_niv_hab) VALUES ('$nome', '$foto_destino', '$nascimento', '$naturalidade', '$cpf', '$rg', '$orgao', '$endereco', '$numero', '$fixo', '$celular', '$email', '$pai', '$mae', '$habilitacao', '$niv_habilitacao')"; 
                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=professor';</script>";
                } else {
                    print "<script>alert('Erro ao cadastrar');</script>";
                    print "<script>location.href='?page=professor';</script>";
                }
            } else {
                
                print "<script>alert('Erro ao enviar foto para o servidor');</script>";
                print "<script>location.href='?page=professor';</script>";
            }
        } else {
           
            print "<script>alert('Erro ao enviar a foto');</script>";
            print "<script>location.href='?page=professor';</script>";
        }
        break;

    case 'editar':
        //code...
        break;

    case 'excluir':
        //code...
        break;
}
?>
