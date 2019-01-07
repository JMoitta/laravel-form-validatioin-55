<h1>Geração de CPF aleatórios</h1>

<h3>Gerador de CPF e CNPJ</h3>
<p>Crie dentro da pasta <b>database</b> a pasta <b>faker_data</b> e dentro dela crie um arquivo <b>document_number.php</b> com conteudo desse <a href="https://github.com/schoolofnetcom/laravel55-form-validation/blob/master/database/faker_data/document_number.php">link</a></p>

<h3>Criando e salvado clients</h3>
<p>Entre no terminal do tinker executando o seguinte comando: <b>php artisan tinker</b></p>
<p>Depois digite o comando abaixo:</p>
<ul>
    <li><b>factory(\App\Client::class, 10)->create()</b></li>
</ul>

<small>video completo</small>