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
        return $this->View->alterar($id);
    }

    public function visualizar($id)
    {
        return $this->View->visualizar($id);
    }

    public function deletar($id)
    {
        return $this->View->deletar();
    }
}
