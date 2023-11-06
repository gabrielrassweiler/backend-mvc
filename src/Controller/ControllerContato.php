<?php

namespace backend\Controller;

class ControllerContato extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->carregaMVC();
    }

    public function listar()
    {
        $repository = $this->entityManager->getRepository($this->nomeModel);

        $dados = $repository->findBy([], ['id' => 'desc']);

        return $this->View->listar($dados);
    }

    public function alterar($id)
    {
        $model = $this->entityManager->find($this->nomeModel, $id);

        return $this->View->form($model, 'alterar');
    }

    public function visualizar($id)
    {
        $model = $this->entityManager->find($this->nomeModel, $id);

        return $this->View->form($model, '');
    }

    public function criar()
    {
        return $this->View->form((object)[], 'criar');
    }

    public function deletar($id)
    {
        $model = $this->entityManager->find($this->nomeModel, $id);

        $this->entityManager->remove($model);
        $this->entityManager->flush();

        return $this->View->deletar();
    }
}
