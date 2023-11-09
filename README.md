## Como rodar o projeto:

#### 1 - Configurações de env: É necessário duplicar a env de exemplo e renomear para .env
#### 2 - Composer: Para instalar o composer é apenas digitar no terminal:
```
composer install
```
#### 3 - DB: criação do db com as respectivas entidades:
```
vendor/bin/doctrine orm:schema-tool:create
```
#### 4 - Com isso, basta apenas digitar o comando abaixo do docker, que a aplicação estará rodando localmente
```
docker-compose up -d
```
