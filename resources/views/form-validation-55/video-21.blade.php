<h1>Modelando no banco de dados tipos de cliente</h1>

<h3>Criando nova Migração</h3>
<p>Criação de nova migração para inserir o campo type na tabela clients.</p>
<ul>
    <li><b>php artisan make:migration alter_to_client_type_clients_table --table=clients</b></li>
</ul>

<h3>Instalado o Doctrine/dbal</h3>
<ul>
    <li><b>composer require doctrine/dbal:~2.5</b></li>
</ul>

<h3>Executando a migração</h3>
<p>Execute o comando a baixo para efetuar as alteraçoes no banco de dados</p>
<ul>
    <li><b>php artisan migrate</b></li>
</ul>
<small>video completo</small>