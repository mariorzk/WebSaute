<?php
    switch(@$_REQUEST["page"]){
        case "home":
            include("pages/home.php");
            break;
        case "instituicao":
            include("pages/cad-inst.php");
            break;
        case "processo":
            include("pages/cad-proc.php");
            break;
        case "professor":
            include("pages/cad-prof.php");
            break;
        case "autorizacao":
            include("pages/cad-auto.php");
            break;
        case "municipio":
            include("pages/cad-mun.php");
            break;
        case "nivel":
            include("pages/cad-niv.php");
            break;
        case "dependencia":
            include("pages/cad-dep.php");
            break;
        case "entidade":
            include("pages/cad-ent.php");
            break;
        case "orgao":
            include("pages/cad-org.php");
            break;
        case "habilitacao":
            include("pages/cad-hab.php");
            break;
        case "grau":
            include("pages/cad-grau.php");
            break;

        //Paginas de POST
        case "salvar-inst":
            include("configs/post/salvar-inst.php");
            break;
        case "salvar-mun":
            include("configs/post/salvar-mun.php");
            break;
        case "salvar-niv":
            include("configs/post/salvar-niv.php");
            break;
        case "salvar-dep":
            include("configs/post/salvar-dep.php");
            break;
        case "salvar-ent":
            include("configs/post/salvar-ent.php");
            break;
        case "salvar-proc":
            include("configs/post/salvar-proc.php");
            break;
        case "salvar-prof":
            include("configs/post/salvar-prof.php");
            break;
        case "salvar-org":
            include("configs/post/salvar-org.php");
            break;
        case "salvar-hab":
            include("configs/post/salvar-hab.php");
            break;
        case "salvar-grau":
            include("configs/post/salvar-grau.php");
            break;     

        default:
        include("pages/home.php");
    }
?>