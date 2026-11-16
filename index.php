<?php
ob_start();
require_once 'controller/UsuarioController.php';
require_once 'controller/ImovelController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliária</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.1.0/css/all.css' rel='stylesheet'>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
</head>
<body>
<div class="container">
<?php

if(isset($_GET['action'])){

    // ---------- USUÁRIO ----------
    if($_GET['action'] == 'cadUsuario'){
        require_once 'view/cadUsuario.php';
    }

    if($_GET['action'] == 'listar'){
        require_once 'view/listUsuario.php';
    }

    if($_GET['action'] == 'editar'){
        $usuario = call_user_func(array('UsuarioController','editar'), $_GET['id']);
        require_once 'view/cadUsuario.php';
    }

    if($_GET['action'] == 'excluir'){
        call_user_func(array('UsuarioController','excluir'), $_GET['id']);
        require_once 'view/listUsuario.php';
    }

    // ---------- IMÓVEL ----------
    if($_GET['action'] == 'cadImovel'){
        require_once 'view/cadImovel.php';
    }

    if($_GET['action'] == 'listarImovel'){
        require_once 'view/listImovel.php';
    }

    if($_GET['action'] == 'editarImovel'){
        $imovel = call_user_func(array('ImovelController','editar'), $_GET['id']);
        require_once 'view/cadImovel.php';
    }

    if($_GET['action'] == 'excluirImovel'){
        call_user_func(array('ImovelController','excluir'), $_GET['id']);
        require_once 'view/listImovel.php';
    }
}else{
    require_once 'view/cadUsuario.php';
}

?>
</div>
</body>
</html>