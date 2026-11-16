<h1>Imóveis</h1>
<hr>
<div>
    <table class="table" style="top:40px;">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Foto</th>
                <th><a href="index.php?action=cadImovel">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'controller/ImovelController.php';
            $imoveis = call_user_func(array('ImovelController','listar'));

            $tipos = array('C' => 'Casa', 'A' => 'Apartamento', 'T' => 'Terreno');

            if (isset($imoveis) && !empty($imoveis)) {
                foreach ($imoveis as $imovel) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($imovel->getDescricao()); ?></td>
                <td><?php echo isset($tipos[$imovel->getTipo()]) ? $tipos[$imovel->getTipo()] : $imovel->getTipo(); ?></td>
                <td>R$ <?php echo number_format($imovel->getValor(), 2, ',', '.'); ?></td>
                <td><?php echo htmlspecialchars($imovel->getFoto()); ?></td>
                <td>
                    <a href="index.php?action=editarImovel&id=<?php echo $imovel->getId(); ?>">Editar</a>
                    <a href="index.php?action=excluirImovel&id=<?php echo $imovel->getId(); ?>">Excluir</a>
                </td>
            </tr>
            <?php
                }
            } else {
            ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>