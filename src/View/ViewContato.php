<?php

class ViewContato
{
	public function listar(): void
	{
        echo '
            <div class="d-flex justify-content-center mb-3">
                <div class="input-group d-flex justify-content-between" style="width: 70%;">
                    <button type="button" class="btn btn-secondary">Novo</button>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <table class="table table-striped" style="width: 70%">
                    <thead class="thead-secondary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID Pessoa</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Email</td>
                        <td>Otto</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=contato&metodo=alterar" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=contato&metodo=vizualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=contato&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>Email</td>
                        <td>Thornton</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=contato&metodo=alterar" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=contato&metodo=vizualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=contato&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                        <td>Email</td>
                        <td>the Bird</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=contato&metodo=alterar" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=contato&metodo=vizualizar" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=contato&metodo=deletar" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        ';
	}
}
