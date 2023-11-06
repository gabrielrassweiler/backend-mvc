<?php

class ViewContato
{
    public function form($contato, $metodo = '')
    {
        if ($metodo === 'alterar') {
            $action = 'index.php?classe=contato&metodo=alterar';
            $button = '<button class="btn btn-primary float-right ml-2" type="submit">Enviar</button>';
        } elseif ($metodo === 'criar') {
            $action = 'index.php?classe=contato&metodo=criar';
            $button = '<button class="btn btn-primary float-right ml-2" type="submit">Enviar</button>';
        } else {
            $action = '';
            $button = '';
        }

        echo '
            <div class="d-flex justify-content-center">
                <form style="width: 70%; border: 1px solid #343a40; border-radius: 5px" class="p-3 row" method="post" action="' . $action . '">
                    <select clas>s="form-control col-md-4" id="tipo">
                        <option value="telefone">Telefone</option>
                        <option value="email">Email</option>
                    </select>
                    <input type="text" class="form-control col-md-4" id="id_pessoa" placeholder="Digite o id da pessoa" value="' . $contato->getIdPessoa() ?? '' . '">
                    <input type="text" class="form-control col-md-4" id="descricao" placeholder="Digite a descrição" value="' . $contato->getDescricao() ?? '' . '">

                    <div class="col-md-12 mt-3">
                        ' . $button . '
                        <a class="btn btn-secondary float-right" href="index.php?classe=contato&metodo=listar" role="button">Voltar</a>
                    </div>
                </form>
            </div>
        ';
    }

    public function listar(ModelContato $contatos): void
    {
        $linhas = '';
        foreach ($contatos as $contato) {
            $linhas .= '
                <tr>
                    <td>' . $contato->getId() . '</td>
                    <td>' . $contato->getIdPessoa() . '</td>
                    <td>' . $contato->getTipo() . '</td>
                    <td>' . $contato->getDescrição() . '</td>
                    <td>
                        <a class="btn btn-warning mr-1" href="index.php?classe=contato&metodo=alterar&id="' . $contato->getId() . '" role="button"><i class="bi bi-pencil"></i></a>
                        <a class="btn btn-info mr-1" href="index.php?classe=contato&metodo=visualizar&id="' . $contato->getId() . '" role="button"><i class="bi bi-eye"></i></a>
                        <a class="btn btn-danger" href="index.php?classe=contato&metodo=deletar&id="' . $contato->getId() . '" role="button"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            ';
        }

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
                    <tbody>' . $linhas . '</tbody>
                </table>
            </div>
        ';
    }
}
