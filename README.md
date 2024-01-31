
<img
  src="/public/imgs/logo.png"
  alt="Alt text"
  title="Optional title"
  style="display: inline-block; margin: 0 auto; max-width: 300px">

## About Projeto

A aplicação fornece um registo de utilizadores e uma lista de criptomoedas para visualizar como tabela ou gráfico.
Foi desenvolvido de maneira responsivo como first-mobile. Utiliza a syntaxe [B.E.M](https://getbem.com/) do SASS. 

## Stack

- PHP_VERSION=8.3
- MYSQL_VERSION=latest

## Install

- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate --seed
- php artisan db:seed --class=QuotesTableSeeder
- php artisan db:seed --class=CryptosTableSeeder
- php artisan serve