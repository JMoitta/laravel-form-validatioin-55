<h1>Seeders</h1>

<h3>Criando Seeders</h3>
<p>Execute o comando abaixo para criar o Seeder</p>
<ul>
    <li><b>php artisan make:seeder ClientsTableSeeder</b></li>
</ul>

<h3>Executando seeder</h3>
<p>Executando todas as seeders</p>
<ul>
    <li><b>php artisan db:seed</b></li>
</ul>
<p>Obs.: a cada execução da seeders e incluso no banco a quantidade de seed a mais.</p>

<h3>Consultar Client</h3>
<p>Acesse o terminal do tinker <small><b>(php artisan tinker)</b></small></p>
<p>Digite: <b>\App\Client::all()</b>, para pode ver todos os registros da tabela.</p>

<h3>Excluir os registros</h3>
<p>Execute os comandos abaixo e para deletar os registros e re criar as tabelas e preencher como seeders</p>
<ul>
    <li><b>php artisan migrate:refresh --seed</b></li>
</ul>



<small>video completo</small>