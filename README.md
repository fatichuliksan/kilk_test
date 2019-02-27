# kilk_test

1. Clone this project
2. Duplicate `.env.example` to `.env`  and set your db setting
3. Run command `composer install` to install laravel dependency 
4. Generate key with command `php artisan key:generate`
5. db migration with command `php artisan migrate`
6. seeding the basic account with command `php artisan db:seed`, default account using `admin@mail.com` password `admin`

### Requirement
- a login page
 - once logged in, the user can list/create/edit/delete Classrooms, Teachers and Students.
 - the user can assign teachers and students to classrooms
 - the user can download a PDF file that lists all the Classrooms with the names of Teachers and Students in them.
