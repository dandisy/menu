## Webcore Menu management

### Installation

    composer require dandisy/webcore-menu:dev-master

    php artisan vendor:publish --provider="Harimayco\Menu\MenuServiceProvider"

    php artisan vendor:publish --provider="Webcore\Menu\MenuServiceProvider" --tag=models



### Dependency

* harimayco/laravel-menu

    for harimayco/laravel-menu installation & usage see https://github.com/harimayco/wmenu-builder


* atayahmet/laravel-nestable

    for atayahmet/laravel-nestable installation & usage see https://github.com/atayahmet/laravel-nestable

    but don't run !
    php artisan vendor:publish --provider="Nestable\NestableServiceProvider"

    because webcore already config nestable config refer to harimayco/laravel-menu tables


#
by dandi@redbuzz.co.id