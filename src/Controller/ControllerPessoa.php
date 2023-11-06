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
        if (!array_key_exists('filtro_nome', $_POST) || !$_POST['filtro_nome']) {
            $repository = $this->entityManager->getRepository($this->nomeModel);

            $dados = $repository->findBy([], ['id' => 'desc']);
        } else {
            $repository = $this->entityManager->getRepository($this->nomeModel);

            $dados = $repository->createQueryBuilder('pessoa')
                ->where('lower(pessoa.nome) like lower(:pessoa_nome)')
                ->setParameter(':pessoa_nome', '%' . $_POST['filtro_nome'] . '%')
                ->getQuery()
                ->execute();
        }

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

        echo '
            <script type="text/javascript">
                window.location.href="index.php?classe=pessoa&metodo=listar";
                alert("Registro deletado com sucesso!");
            </script>
        ';
    }
}
