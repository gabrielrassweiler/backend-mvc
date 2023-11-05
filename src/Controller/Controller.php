<?php

namespace backend\Controller;

use backend\View\View;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class Controller
{
	protected $View;
	protected $Model;
	protected $nomeModel;
	protected EntityManager $entityManager;

    public function __construct()
    {
        $this->entityManager = $this->getConexao();
    }

	protected function carregaMVC()
	{
        require_once __DIR__ . '/../Model/Model' . ucfirst($_GET['classe']) . '.php';
        require_once __DIR__ . '/../View/View' . ucfirst($_GET['classe']) . '.php';

        $model = 'Model' . ucfirst($_GET['classe']);
        $view = 'View' . ucfirst($_GET['classe']);
        $this->nomeModel = $model;

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
				case ['contato', 'listar']:
					(new ControllerContato())->listar();
					return;
				case ['pessoa', 'alterar']:
					(new ControllerPessoa())->alterar($_GET['id'] ?? '');
					return;
				case ['contato', 'alterar']:
					(new ControllerContato())->alterar($_GET['id'] ?? '');
					return;
				case ['pessoa', 'visualizar']:
					(new ControllerPessoa())->visualizar($_GET['id']);
					return;
				case ['contato', 'visualizar']:
					(new ControllerContato())->visualizar($_GET['id']);
					return;
				case ['pessoa', 'deletar']:
					(new ControllerPessoa())->deletar($_GET['id']);
					return;
				case ['contato', 'deletar']:
					(new ControllerContato())->deletar($_GET['id']);
					return;
				default:
					(new View())->listarRotaNaoEncontrada();
					return;
			}
		}

		(new View())->listarRotaHome();
	}

	private function getConexao(): EntityManager
	{
		$paths = [__DIR__ . '../../src/Model'];
		$isDevMode = true;

		// the connection configuration
		$dbParams = [
			'driver' => 'pdo_pgsql',
			'user' => getenv('POSTGRES_USER'),
			'password' => getenv('POSTGRES_PASSWORD'),
			'dbname' => getenv('POSTGRES_DB'),
		];

		$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
		$connection = DriverManager::getConnection($dbParams, $config);
		return new EntityManager($connection, $config);
	}
}
