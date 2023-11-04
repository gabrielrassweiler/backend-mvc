<?php

class ViewPessoa
{
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

    public function listar(): void
    {
        echo '
            <div class="d-flex justify-content-center mb-3">
                <div class="input-group d-flex justify-content-between" style="width: 70%;">
                    <button type="button" class="btn btn-secondary">Novo</button>

                    <form class="col-md-4 input-group" action="index.php?classe=pessoa&metodo=listar" method="post">
                        <div class="form-group d-flex">
                            <input name="filtro" type="text" class="form-control"/>
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
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=pessoa&metodo=alterar" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=pessoa&metodo=visualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=pessoa&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=pessoa&metodo=alterar" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=pessoa&metodo=visualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=pessoa&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=pessoa&metodo=alterar" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=pessoa&metodo=visualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=pessoa&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        ';
    }
}
