<h1>Cadastro de Usuário</h1>
<hr>
<form name="cadUsuario" id="cadUsuario" action="" method="post">
    <input type="hidden" name="id" id="id"
        value="<?php echo isset($usuario) && $usuario ? $usuario->getId() : ''; ?>" />

    Login: <input type="text" class="form-control col-sm-8" name="login" id="login" maxlength="10"
        value="<?php echo isset($usuario) && $usuario ? htmlspecialchars($usuario->getLogin()) : ''; ?>" /><br/>

    Senha: <input type="password" class="form-control col-sm-8" name="senha1" id="senha1"
        value="<?php echo isset($usuario) && $usuario ? htmlspecialchars($usuario->getSenha()) : ''; ?>" /><br/>

    Confirmação da Senha: <input type="password" class="form-control col-sm-8" name="senha2" id="senha2"
        value="<?php echo isset($usuario) && $usuario ? htmlspecialchars($usuario->getSenha()) : ''; ?>" /><br/>

    Permissão:
    <select name="permissao" id="permissao" class="form-control col-sm-8">
        <option value="0"></option>
        <option value="A" <?php echo isset($usuario) && $usuario && $usuario->getPermissao()=='A' ? 'selected' : ''; ?>>Administrador</option>
        <option value="C" <?php echo isset($usuario) && $usuario && $usuario->getPermissao()=='C' ? 'selected' : ''; ?>>Comum</option>
    </select><br/>

    <input type="submit" class="btn btn-primary" name="btnSalvar" id="btnSalvar" value="Salvar">
</form>

<?php

if(isset($_POST['btnSalvar'])){

    require_once 'controller/UsuarioController.php';
    call_user_func(array('UsuarioController','salvar'));
    header('Location: index.php?action=listar');
    exit;
}

?>