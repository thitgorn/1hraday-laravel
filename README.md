# 1hraday-laravel
coding at least one hour for each day learning laravel


Practicing, internship at Rabbitstale.

### Day-0

- install composer
- install laravel
- create laravel project
- run ``` php artisan serve ```

### [Day-1](https://github.com/thitgorn/1hraday-laravel/tree/master/day-1)

- blade templete
- if else loop in blade
- @include(' filename ')
- @yeild(' content ')
- @extends('./layouts.app')
- @section('content') with @endsection
- layout in blade templete
- get route
- laravel boostrap

### [Day-2](https://github.com/thitgorn/1hraday-laravel/tree/master/day-2)

- setup database mysql , phpmyadmin
- post route
Example ```Route::post('/contact/submit', 'MessageController@submit');```
- php artisan make:controller , making controller to post route Example ```write function submit()``` handle something in Route::post
- php artisan make:model -m , make database model migrations by -m and make model at /app/[model]
- when connected to database run ```php artisan migration``` to create database table
- @See in Day-2 folder for more info how to setup.

### [Day-3](https://github.com/thitgorn/1hraday-laravel/tree/master/day-3)

- get message from Message Object right the way
- get message from Database sql
- Set up React to laravel 5.6 project 
- @see in Day-3 folder for more info of code
