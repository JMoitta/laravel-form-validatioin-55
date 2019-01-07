<h1>Migração e cliente pessoa física</h1>

<h3>Criando modelos das entidades e migrações</h3>
<p>Execute o comando abaixo para criar modelo da entidade e migração</p>
<ul>
    <li><b>php artisan make:model Client -m</b></li>
    <li><b>php artisan make:model Category -m</b></li>
</ul>

<h3>Removendo uma modelo e sua migração</h3>
<p>Para remover uma modelo e usa migração dele os arquivos respectivos a cada um e execute o comando a seguir:</p>
<ul>
    <li><b>composer dumpautoload</b></li>
</ul>

<h3>Criando tabela clients no Banco de Dados</h3>
<p>Execute o comando abaixo para criar a tabela de clients:</p>
<ul>
    <li><b>php artisan migrate</b></li>
</ul>

<small>video completo</small>