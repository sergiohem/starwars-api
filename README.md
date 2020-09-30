
# Star Wars API - Listagem de Filmes

Este é um projeto desenvolvido em PHP utilizando o framework Laravel (versão 7.x) para a construção de uma API, cuja responsabilidade é capturar a lista de filmes da Saga Star Wars, disponível na API aberta Swapi (https://swapi.dev/).

## Como executar o projeto:

### 1) Na pasta raiz do projeto, instale o Composer (caso não o tenha instalado) e execute o seguinte comando:

> composer update

Este comando adicionará todos os pacotes do vendor presentes no projeto.

### 2) Configurando seu arquivo .env

2.1) Utilize o arquivo .env.example presente na pasta raiz do projeto e o replique criando um novo arquivo .env

2.2) Altere as configurações de banco de dados no seu arquivo .env criado, com as credenciais do seu banco. Na propriedade "DB_DATABASE" informe o nome do schema que será criado para receber as tabelas.

2.3) Adicione a seguinte linha no arquivo .env para informar a URL da Swapi API que fornecerá a lista de filmes:

> API_URL=https://swapi.dev/api/

2.4) Execute o seguinte comando para gerar uma chave do projeto no arquivo .env:

> php artisan key:generate

### 3) Configurando o banco de dados

3.1) O banco de dados utilizado para o projeto é o MySQL. Crie um schema no seu gerenciador de preferência para que ele receba as tabelas que serão geradas no próximo item (lembre-se de utilizar o mesmo nome que definiu no arquivo .env).

3.2) Como o schema criado, execute o seguinte comando para gerar as tabelas:

> php artisan migrate

3.3) Com as tabelas geradas, execute o seguinte comando para registrar as ordens de listagem dos filmes em sua respectiva tabela:

> php artisan db:seed

### 4) Executando o projeto

Para executar o projeto, execute o seguinte comando:

> php artisan serve

### 5) Obtendo a lista de filmes

5.1) Com o projeto em execução, acesse a rota http://localhost:8000/api/films para obter a lista de todos os filmes.

5.2) Para obter a lista de filmes levando em consideração algum ordem específica, acrescente na rota acima a ordem como parâmetro. Segue exemplo:

> http://localhost:8000/api/films?order=lee

5.3) O retorno da lista de filmes é em JSON, e deverá ser tratado no seu front-end.

OBS.: as ordens devem ser inseridas na rota em letra minúscula e as opções de ordem são as seguintes: lucas, realease, rinster, machete, magnotta, lee.

