<?php

namespace backend\Controller;

class ControllerPessoa extends Controller
{
    public function __construct()
    {
        $this->carregaMVC();
    }

    public function listar()
    {
        return $this->View->listar();
    }
}
