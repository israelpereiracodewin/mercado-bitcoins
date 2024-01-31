
<img
  src="/public/imgs/logo.png"
  alt="Alt text"
  title="Optional title"
  width="180"
  style="display: inline-block; margin: 0 auto; max-width: 180px">

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

## Ecrãs do Sistema

### Login
<img
  src="/public/imgs/login.png"
  alt="Alt text"
  title="Optional title"
  width="280"
  style="display: inline-block; margin: 0 auto; max-width: 280px">

### Register
<img
  src="/public/imgs/register.png"
  alt="Alt text"
  title="Optional title"
  width="280"
  style="display: inline-block; margin: 0 auto; max-width: 280px">

### Dashboard Mobile
<img
  src="/public/imgs/dashboard_mobile.png"
  alt="Alt text"
  title="Optional title"
  width="280"
  style="display: inline-block; margin: 0 auto; max-width: 280px">

### Dashboard Mobile
<img
  src="/public/imgs/dashboard_desktop.png"
  alt="Alt text"
  title="Optional title"
  width="280"
  style="display: inline-block; margin: 0 auto; max-width: 280px">

### Profile
<img
  src="/public/imgs/profile.png"
  alt="Alt text"
  title="Optional title"
  width="280"
  style="display: inline-block; margin: 0 auto; max-width: 280px">

### View Graph
<img
  src="/public/imgs/graph.png"
  alt="Alt text"
  title="Optional title"
  width="280"
  style="display: inline-block; margin: 0 auto; max-width: 280px">