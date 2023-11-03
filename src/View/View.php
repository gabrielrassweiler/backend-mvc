<?php

namespace backend\View;

class View
{
	public function listarRotaNaoEncontrada(): void
	{
		echo '
			<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
				<div class="text-center">
					<h1>Página não encontrada!</h1>
					<a class="btn btn-secondary" href="index.php" role="button">Home</a>
				</div>
			</div>
		';
	}

	public function listarRotaHome(): void
	{
		echo '
			<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
				<div class="text-center">
					<h1 class="text-secondary">Bem vindo!</h1>
				</div>
			</div>
		';
	}
}
