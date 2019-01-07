<h1>Introdução</h1>

<h3>CMD</h3>
<p>Comando para instalação do laravel 55</p>
<ul>
    <li><b>composer create-project --prefer-dist laravel/laravel laravel-form-validatioin-55 "5.5.*"</b></li>
</ul>

<h3>Banco de Dados</h3>
<p>Caso ultilize banco de dados MySQL versão antiga adicionar a configuração abaixo no metódo <b>boot()</b> da classe <b>AppServiceProvider</b>.</p>
<ul>
    <li>\Schema::defualtStringLength(191);</li>
</ul>

<h3>Configurações do Ambiente</h3>
<p>Configurações de acesso ao banco de dados.</p>
<b><pre>DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=son_laravel_form_validation_55
DB_USERNAME=postgres 
DB_PASSWORD=admin</pre></b>

<h3>Criando banco de dados no postgres</h3>
<p>Comando para acessar ao banco de dados:</p>
<ul>
    <li><b>psql -h 127.0.0.1 -U postgres</b></li>
    <li><b>CREATE DATABASE son_laravel_form_validation_55
        WITH 
        OWNER = postgres
        ENCODING = 'UTF8'
        CONNECTION LIMIT = -1;</b></li>
</ul>

<h3>Criando as tabelas no banco de dados</h3>
<p>Execute o comando abaixo no terminal para criar as tabelas.</p>
<ul>
    <li>php artisan migrate</li>
</ul>