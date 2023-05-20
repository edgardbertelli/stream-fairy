# Stream Fairy
Este aplicativo consiste em gerenciar filmes e usuários.

## Donwload
Faça o download da aplicação executando o comando `git clone https://github.com/edgardbertelli/stream-fairy.git` no terminal.

## Configurando
Primeiramente, vamos instalar as dependências da aplicação executando o seguinte comando `composer install`.

Em seguida, na pasta raiz, crie um arquivo __.env__ e copie o conteúdo do __.env.example__ no seu arquivo __.env__.

Nossa aplicação precisa de uma chave que é gerada pelo comando `php artisan key:generate`. Execute este comando e automaticamente esta chave é preenchida no __.env__.

Agora, precisamos configurar o banco de dados de nossa aplicação.

Crie um banco de dados. Em seguida, ainda no arquivo __.env__, preencha os dados da conexão com o seu banco de dados como no seguinte exemplo:

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=_nome_do_banco_de_dados_<br>
DB_USERNAME=_nome_do_usuário_<br>
DB_PASSWORD=_senha_do_usuário_

Vamos rodar as migrações em nossa banco para que as tabelas da aplicação sejam criadas e alguns dados (como um usuário administrador) sejam injetados.

Através do terminal, dentro da pasta raiz, execute `php artisan migrate --seed`.

Pronto! Estamos prontos para iniciar a aplicação!

## Rodando a aplicação
Na pasta, raiz, através do terminal execute `php artisan serve`. Isto vai rodar o servidor da aplicação.

## Usando a aplicação
No seu navegador web, entre no endereço `http://127.0.0.1:8000/`. Este é o endereço do nosso servidor local.

Clique em entrar e faça o login com as seguintes credenciais:

__e-mail:__ _bertelliedgard@gmail.com_<br>
__senha:__ _avidaeboa123_

Você já poderá ver alguns filmes listados e um usuário comum que foi criado quando rodamos as migrações.
