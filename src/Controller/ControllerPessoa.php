<?php

namespace backend\Controller;

class ControllerPessoa extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->carregaMVC();
    }

    public function listar()
    {
        return $this->View->listar();
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
