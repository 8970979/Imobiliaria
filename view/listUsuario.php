<h1>Usuários</h1>
<hr>
<div>
    <table class="table" style="top:40px;">
        <thead>
            <tr>
                <th>Login</th>
                <th>Permissão</th>
                <th><a href="index.php?action=cadUsuario">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'controller/UsuarioController.php';
            $usuarios = call_user_func(array('UsuarioController','listar'));

            if (isset($usuarios) && !empty($usuarios)) {
                foreach ($usuarios as $usuario) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($usuario->getLogin()); ?></td>
                <td><?php echo $usuario->getPermissao(); ?></td>
                <td>
                    <a href="index.php?action=editar&id=<?php echo $usuario->getId(); ?>">Editar</a>
                    <a href="index.php?action=excluir&id=<?php echo $usuario->getId(); ?>">Excluir</a>
                </td>
            </tr>
            <?php
                }
            } else {
            ?>
            <tr>
                <td colspan="3">Nenhum registro encontrado</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>