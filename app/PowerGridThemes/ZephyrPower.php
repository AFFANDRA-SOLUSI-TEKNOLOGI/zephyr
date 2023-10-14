<?php

namespace App\PowerGridThemes;

use \PowerComponents\LivewirePowerGrid\Themes\Tailwind;
use \PowerComponents\LivewirePowerGrid\Themes\Theme;

use PowerComponents\LivewirePowerGrid\Themes\Components\{
    SearchBox,
    Table
};

class ZephyrPower extends Tailwind
{
    public string $name = 'tailwind';

    public function table(): Table
    {
        return Theme::table('rounded-lg min-w-full dark:bg-pg-primary-600')
            ->div('my-3 bg-white shadow-lg rounded-lg relative')
            ->thead('shadow-sm bg-pg-primary-100 dark:bg-pg-primary-800')
            ->thAction('!font-bold')
            ->tdAction('')
            ->tr('')
            ->trFilters('bg-white shadow-sm dark:bg-pg-primary-700')
            ->th('font-semibold px-2 pr-4 py-3 text-left text-xs font-semibold text-pg-primary-700 tracking-wider whitespace-nowrap dark:text-pg-primary-300')
            ->tbody('text-pg-primary-800')
            ->trBody('hover:bg-pg-primary-50 dark:bg-pg-primary-700 dark:odd:bg-pg-primary-800 dark:odd:hover:bg-pg-primary-900 dark:hover:bg-pg-primary-700')
            ->tdBody('pl-[19px] px-3 py-2 whitespace-nowrap dark:text-pg-primary-200')
            ->tdBodyEmpty('px-3 py-2 whitespace-nowrap dark:text-pg-primary-200')
            ->tdBodyTotalColumns('px-3 py-2 whitespace-nowrap dark:text-pg-primary-200 text-sm text-pg-primary-600 text-right space-y-2');
    }

    public function searchBox(): SearchBox
    {
        return Theme::searchBox()
            ->input('pl-11 pr-4 input input-bordered h-10 placeholder-pg-primary-400 text-sm pl-[36px] block w-full float-right rounded-lg py-2 px-3 leading-tight pl-10')
            ->iconClose('text-pg-primary-400 dark:text-pg-primary-200')
            ->iconSearch('text-pg-primary-300 mr-2 w-5 h-5 dark:text-pg-primary-200');
    }
}