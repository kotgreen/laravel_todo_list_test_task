<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


Развертывание проекта:

1. git clone https://github.com/kotgreen/laravel_todo_list_test_task.git laravel_todo_list_test_task
2. cd laravel_todo_list_test_task
3. composer install
4. cp .env.example .env, пропишите настройки
5. php artisan key:generate
6. php artisan migrate --seed
7. php artisan serve
