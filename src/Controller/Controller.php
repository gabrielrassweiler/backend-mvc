<?php

namespace backend\Controller;

use backend\View\View;

class Controller
{
	protected $View;
	protected $Model;

	protected function carregaMVC()
	{
        require_once __DIR__ . '/../Model/Model' . ucfirst($_GET['classe']) . '.php';
        require_once __DIR__ . '/../View/View' . ucfirst($_GET['classe']) . '.php';

        $model = 'Model' . ucfirst($_GET['classe']);
        $view = 'View' . ucfirst($_GET['classe']);

        $this->Model = new $model();
        $this->View = new $view();
	}

	public function controleRotas(): void
	{
		if ($_GET) {
			$classe = $_GET['classe'];
			$metodo = $_GET['metodo'];

			switch ([$classe, $metodo]) {
				case ['pessoa', 'listar']:
					(new ControllerPessoa())->listar();
					return;
				case ['pessoa', 'alterar']:
					(new ControllerPessoa())->alterar();
					return;
				case ['contato', 'alterar']:
					(new ControllerPessoa())->alterar();
					return;
				case ['contato', 'listar']:
					(new ControllerContato())->listar();
					return;
				default:
					(new View())->listarRotaNaoEncontrada();
					return;
			}
		}

		(new View())->listarRotaHome();
	}
}
