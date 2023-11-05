<div align="center">
    <img src="./public/zephyr.png" alt="zephyr logo" width="200"/>
</div>

## About Zephyr

Zephyr is a starter template for building web-based applications with [Laravel](https://laravel.com/) as the main framework, [Laravel Breeze](https://github.com/laravel/breeze) for dashboard authentication, [Livewire Powergrid](https://livewire-powergrid.com/) as a data table, [KUI](https://github.com/Kamona-WD/kui-laravel-breeze) for different designs in Laravel Breeze, and [TailwindCSS](https://tailwindcss.com/) + [Daisyui](https://daisyui.com/) for the CSS framework.

What does Zephyr have?

- Includes simple user CRUD.
- Using Heroicon icons with the [blade-ui-kit/blade-heroicons](https://github.com/blade-ui-kit/blade-heroicons) package.
- Modified KUI with navbar always at the top.
- Some configurations can be found in [config/zephyr.php](/config/zephyr.php).
- The website theme (light/dark) will only be consistent with the system theme.
- Using PowerGrid, you can quickly create data tables.
- Easy styling with Daisyui.
- Initial seeder of admin account.
- SPA-like effect using `<x-link />` component.
- Configurable login (with username or email).
- Plus additional features that will be added in the future!

## Installation

```shell
composer create-project affandra-solusi-teknologi/zephyr
```

After init the project you can install the node dependencies using:
```
npm i
```

## Getting started

To start the development server:
```shell
php artisan serve
```

```
npm run dev
```

## Credit

- Everyone who contributed to this project.
- The project logo was made in Bing Image Creator using DALL-E 3.