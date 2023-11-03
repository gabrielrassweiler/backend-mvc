<?php

class ViewPessoa
{
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
                            <a class="btn btn-info mr-1" href="index.php?classe=pessoa&metodo=vizualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=pessoa&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=pessoa&metodo=alterar" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=pessoa&metodo=vizualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=pessoa&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=pessoa&metodo=alterar" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=pessoa&metodo=vizualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=pessoa&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        ';
    }
}
