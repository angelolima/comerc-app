<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Sobre o Container Laradock.io


O projeto está rodando com o Laradock, para instanciar o container é necessário acessar a pasta laradock e digite o comando:
##### > docker-compose up -d nginx mysql phpmyadmin redis workspace 

Após subir o container digite o comando abaixo para acessar o container criado:
##### > docker-compose exec workspace bash
##### > composer install



## PHPunit - Testando CRUD

##### > php artisan test 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
