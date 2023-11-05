<?php

class ViewContato
{
    public function deletar()
    {
        echo '
            <div class="justify-content-center">
                <p>Registro removido com sucesso!</p>
                <a class="btn btn-secondary" href="index.php?classe=contato&metodo=listar" role="button">Voltar</a>
            </div>
        ';
    }

    public function visualizar()
    {
        echo '
            <div class="d-flex justify-content-center">
                <form style="width: 70%; border: 1px solid #343a40; border-radius: 5px" class="p-3 row">
                    <select class="form-control col-md-4" id="pessoa">
                        <option value="1">1 - Gabriel</option>
                    </select>
                    <select class="form-control col-md-4" id="tipo">
                        <option value="telefone">Telefone</option>
                        <option value="email">Email</option>
                    </select>
                    <input type="text" class="form-control col-md-4" id="descricao" placeholder="Digite a descrição">

                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary float-right ml-2" type="submit">Enviar</button>
                        <a class="btn btn-secondary float-right" href="index.php?classe=contato&metodo=listar" role="button">Voltar</a>
                    </div>
                </form>
            </div>
        ';
    }

    public function alterar()
    {
        echo '
            <div class="d-flex justify-content-center">
                <form style="width: 70%; border: 1px solid #343a40; border-radius: 5px" class="p-3 row">
                    <select class="form-control col-md-4" id="pessoa">
                        <option value="1">1 - Gabriel</option>
                    </select>
                    <select class="form-control col-md-4" id="tipo">
                        <option value="telefone">Telefone</option>
                        <option value="email">Email</option>
                    </select>
                    <input type="text" class="form-control col-md-4" id="descricao" placeholder="Digite a descrição">

                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary float-right ml-2" type="submit">Enviar</button>
                        <a class="btn btn-secondary float-right" href="index.php?classe=contato&metodo=listar" role="button">Voltar</a>
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
                            <a class="btn btn-warning mr-1" href="index.php?classe=contato&metodo=alterar&id=1" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=contato&metodo=visualizar&id=1" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=contato&metodo=deletar&id=1" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>Email</td>
                        <td>Thornton</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=contato&metodo=alterar&id=1" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=contato&metodo=visualizar&id=1" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=contato&metodo=deletar&id=1" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                        <td>Email</td>
                        <td>the Bird</td>
                        <td>
                            <a class="btn btn-warning mr-1" href="index.php?classe=contato&metodo=alterar&id=1" role="button"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-info mr-1" href="index.php?classe=contato&metodo=visualizar&id=1" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-danger" href="index.php?classe=contato&metodo=deletar&id=1" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        ';
	}
}
