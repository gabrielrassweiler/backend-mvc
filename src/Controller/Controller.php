<?php

namespace backend\Controller;

use backend\Helper\EntityManagerFactory;
use backend\View\View;
use Doctrine\ORM\EntityManager;
use stdClass;

class Controller
{
    protected $View;
    protected $Model;
    protected $nomeModel;
    protected EntityManager $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerFactory())->getEntityManager();
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
        if ($_GET && !$_POST) {
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
                    (new ControllerPessoa())->visualizar($_GET['id'] ?? '');
                    return;
                case ['contato', 'visualizar']:
                    (new ControllerContato())->visualizar($_GET['id'] ?? '');
                    return;
                case ['pessoa', 'deletar']:
                    (new ControllerPessoa())->deletar($_GET['id'] ?? '');
                    return;
                case ['contato', 'deletar']:
                    (new ControllerContato())->deletar($_GET['id'] ?? '');
                    return;
                case ['pessoa', 'criar']:
                    (new ControllerPessoa())->criar();
                    return;
                case ['contato', 'criar']:
                    (new ControllerContato())->criar();
                    return;
                default:
                    (new View())->listarRotaNaoEncontrada();
                    return;
            }
        } elseif ($_GET && $_POST) {
            // Cria ou altera registro no banco
            if ($_GET['metodo'] === 'criar') {
                $this->inserirRegistro();
            } elseif ($_GET['metodo'] === 'alterar') {
                $this->alterarRegistro($_GET['id']);
            }
        }

        (new View())->listarRotaHome();
    }

    public function inserirRegistro(): void
    {
        $model = new stdClass();
        foreach ($_POST as $field => $value) {
            $model->{'set' . ucfirst($field)}($value);
        }

        $this->entityManager->persist($model);
        $this->entityManager->flush();

        echo '
            <script type="text/javascript">
                window.location.href="index.php?classe=' . $_GET['classe'] . '&metodo=listar";
                alert("Registro criado com sucesso!");
            </script>
        ';
    }

    public function alterarRegistro(string $id): void
    {
        $model = $this->entityManager->find($this->nomeModel, $id);

        foreach ($_POST as $field => $value) {
            if ($value === $model->{'get' . ucfirst($field)}()) {
                continue;
            }

            $model->{'set' . ucfirst($field)}($value);
        }

        $this->entityManager->flush();

        echo '
            <script type="text/javascript">
                window.location.href="index.php?classe=' . $_GET['classe'] . '&metodo=listar";
                alert("Registro alterado com sucesso!");
            </script>
        ';
    }
}
