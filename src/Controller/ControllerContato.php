<?php

namespace backend\Controller;

class ControllerContato extends Controller
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
