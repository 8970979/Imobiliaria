<?php
require_once 'model/Imovel.php';

class ImovelController{

    public function salvar()
    {
        $imovel = new Imovel;

        $imovel->setId($_POST['id']);
        $imovel->setDescricao($_POST['descricao']);
        $imovel->setFoto($_POST['foto']);
        $imovel->setValor($_POST['valor']);
        $imovel->setTipo($_POST['tipo']);

        $imovel->save();
    }

    public function listar()
    {
        $imoveis = new Imovel;
        return $imoveis->listAll();
    }

    public function editar($id)
    {
        $imovel = new Imovel;

        $imovel = $imovel->find($id);

        return $imovel;
    }

    public function excluir($id)
    {
        $imovel = new Imovel;

        $imovel = $imovel->remove($id);
    }
}