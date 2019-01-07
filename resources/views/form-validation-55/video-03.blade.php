<h1>Model factory</h1>

<h3>Criando a model factory do modelo Client</h3>
<p>Execute o comando a baixa para criar o model factory do modelo Client</p>
<ul>
    <li><b>php artisan make:factory ClientFactory --model=App\Client</b></li>
</ul>

<h3>Criando client apartir do factory</h3>
<p>Entre no terminal do tinker executando o seguinte comando: <b>php artisan tinker</b></p>
<p>Depois digite o comando abaixo:</p>
<ul>
    <li><b>$client = factory(\App\Client::class, 10)->make()</b></li>
</ul>

<small>video completo</small>