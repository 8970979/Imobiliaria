<h1>Cadastro de Imóvel</h1>
<hr>
<form name="cadImovel" id="cadImovel" action="" method="post">
    <input type="hidden" name="id" id="id"
        value="<?php echo isset($imovel) && $imovel ? $imovel->getId() : ''; ?>" />

    Descrição: <input type="text" class="form-control col-sm-8" name="descricao" id="descricao" maxlength="200"
        value="<?php echo isset($imovel) && $imovel ? htmlspecialchars($imovel->getDescricao()) : ''; ?>" /><br/>

    Foto: <input type="text" class="form-control col-sm-8" name="foto" id="foto" maxlength="30" placeholder="ex.: casa1.jpg"
        value="<?php echo isset($imovel) && $imovel ? htmlspecialchars($imovel->getFoto()) : ''; ?>" /><br/>

    Valor: <input type="number" step="0.01" min="0" class="form-control col-sm-8" name="valor" id="valor"
        value="<?php echo isset($imovel) && $imovel ? $imovel->getValor() : ''; ?>" /><br/>

    Tipo:
    <select name="tipo" id="tipo" class="form-control col-sm-8">
        <option value="C" <?php echo isset($imovel) && $imovel && $imovel->getTipo()=='C' ? 'selected' : ''; ?>>Casa</option>
        <option value="A" <?php echo isset($imovel) && $imovel && $imovel->getTipo()=='A' ? 'selected' : ''; ?>>Apartamento</option>
        <option value="T" <?php echo isset($imovel) && $imovel && $imovel->getTipo()=='T' ? 'selected' : ''; ?>>Terreno</option>
    </select><br/>

    <input type="submit" class="btn btn-primary" name="btnSalvar" id="btnSalvar" value="Salvar">
</form>

<?php

if(isset($_POST['btnSalvar'])){

    require_once 'controller/ImovelController.php';
    call_user_func(array('ImovelController','salvar'));
    header('Location: index.php?action=listarImovel');
    exit;
}

?>