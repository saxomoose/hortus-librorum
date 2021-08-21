# Philoblog

A blog powered by [Laravel 8](https://laravel.com/docs/8.x). The blog is designed to serve as a repository of book summaries. Public visitors can look for summaries by author name or by category (tag).

## Sources and inspirations

- [Laracasts](https://laracasts.com/series/laravel-8-from-scratch) - Laravel 8 From Scratch including source code available on this [github repo](https://github.com/JeffreyWay/Laravel-From-Scratch-Blog-Project).
- [Welcm Software](https://welcm.uk/blog/creating-a-contact-form-for-your-laravel-website) - Creating a contact form for your Laravel website.
- [Laravel Daily](https://www.youtube.com/watch?v=NuGBzmHlINQ) - Auth in Laravel 8: Fortify and Laravel UI (without Jetstream).

## Dependencies

- Authentication layer built with [Laravel Fortify](https://laravel.com/docs/8.x/fortify) (back-end) and [Laravel-UI](https://github.com/laravel/ui) powered by [Bootstrap 4](https://getbootstrap.com/docs/4.6/getting-started/introduction/) (front-end).
- Blade views make use of [Bootstrap 4](https://getbootstrap.com/docs/4.6/getting-started/introduction/) CSS and JS bundle.
- Laravel requires installation of Composer and npm package managers.

## Installation

- Install Composer packages: `composer update`
- Install npm packages: `npm install`
- Run database migrations and seed test data: `php artisan migrate:fresh --seed`

## Use of admin section

- Admin section is accessible via `admin` route. Access requires prior login via `login` route. There is only one registered user (generated at seed not via `register` route) who is also the (only) admin. The credentials can be found at `database/factories/UserFactory.php` (to be changed in production).
- Admin section is decomposed in three admin panels. In order to add a new summary, the admin should create the appropriate author(s) and tag(s) first and link them subsequently to the new summary. Summaries can have many authors and tags (and vice versa).
- The admin can also edit and delete existing summaries, authors and tags.

## License

[MIT license](https://opensource.org/licenses/MIT)
