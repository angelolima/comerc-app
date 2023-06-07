<p align="center">
    <img src="https://laradock.io/images/laradock-full-logo.jpg?raw=true" alt="Laradock Logo"/>
</p>
## Sobre o Container Laradock.io


O projeto está rodando com o Laradock, para instalar e instanciar o container, digite o comando abaixo dentro da pasta da aplicação:

##### >: git clone https://github.com/Laradock/laradock.git
Acesse a pasta /laradock e digite:
##### >: cp .env.example .env

Acesse o arquivo .env e altere a versão do PHP para 8.1
##### >: PHP_VERSION=8.1

Digite o comando abaixo para instanciar o container:
##### >: docker-compose up -d nginx mysql phpmyadmin redis workspace 

Após subir o container digite o comando abaixo para acessar o container criado:
##### >: docker-compose exec workspace bash

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Instalação do Laravel:
##### >: composer install



## PHPunit - Testando CRUD

##### >: php artisan test 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
