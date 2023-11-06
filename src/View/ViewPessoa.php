<?php

class ViewPessoa
{
    public function deletar()
    {
        echo '
            <div class="justify-content-center">
                <p>Registro removido com sucesso!</p>
                <a class="btn btn-secondary" href="index.php?classe=pessoa&metodo=listar" role="button">Voltar</a>
            </div>
        ';
    }

    public function visualizar(): void
    {
        echo '
            <div class="d-flex justify-content-center">
                <form style="width: 70%; border: 1px solid #343a40; border-radius: 5px" class="p-3 row">
                    <input type="text" class="form-control col-md-6" id="nome" placeholder="Digite o nome">
                    <input type="text" class="form-control col-md-6" id="cpf" placeholder="Digite o CPF">

                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary float-right ml-2" type="submit">Enviar</button>
                        <a class="btn btn-secondary float-right" href="index.php?classe=pessoa&metodo=listar" role="button">Voltar</a>
                    </div>
                </form>
            </div>
        ';
    }

    public function alterar(): void
    {
        echo '
            <div class="d-flex justify-content-center">
                <form style="width: 70%; border: 1px solid #343a40; border-radius: 5px" class="p-3 row">
                    <input type="text" class="form-control col-md-6" id="nome" placeholder="Digite o nome">
                    <input type="text" class="form-control col-md-6" id="cpf" placeholder="Digite o CPF">

                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary float-right ml-2" type="submit">Enviar</button>
                        <a class="btn btn-secondary float-right" href="index.php?classe=pessoa&metodo=listar" role="button">Voltar</a>
                    </div>
                </form>
            </div>
        ';
    }

    public function listar(ModelPessoa $pessoas): void
    {
        $linhas = '';
        foreach ($pessoas as $pessoa) {
            $linhas .= `
                <tr>
                    <td>{$pessoa->getId()}</td>
                    <td>{$pessoa->getNome()}</td>
                    <td>{$pessoa->getCpf()}</td>
                    <td>
                        <a class="btn btn-warning mr-1" href="index.php?classe=pessoa&metodo=alterar&id={$pessoa->getId()}" role="button"><i class="bi bi-pencil"></i></a>
                        <a class="btn btn-info mr-1" href="index.php?classe=pessoa&metodo=visualizar&id={$pessoa->getId()}" role="button"><i class="bi bi-eye"></i></a>
                        <a class="btn btn-danger" href="index.php?classe=pessoa&metodo=deletar&id={$pessoa->getId()}" role="button"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            `;
        }

        echo `
            <div class="d-flex justify-content-center mb-3">
                <div class="input-group d-flex justify-content-between" style="width: 70%;">
                    <button type="button" class="btn btn-secondary">Novo</button>

                    <form class="col-md-4 input-group" action="index.php?classe=pessoa&metodo=listar" method="post">
                        <div class="form-group d-flex">
                            <input name="filtro_nome" type="text" class="form-control"/>
                            <button class="btn btn-outline-secondary">Pesquisar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <table class="table table-striped" style="width: 70%">
                    <thead class="thead-secondary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        {$linhas}
                    </tbody>
                </table>
            </div>
        `;
    }
}
