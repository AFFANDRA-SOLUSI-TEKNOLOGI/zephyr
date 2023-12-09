const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [
        require("./vendor/power-components/livewire-powergrid/tailwind.config.js"),
    ],
    
    darkMode: 'media',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './app/Http/Livewire/**/*Table.php', 
        './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
        './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php',
        './app/Livewire/*.php',
        './app/PowerGridThemes/*.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                zephyr: {
                    50: "#f1fcf9",
                    100: "#cff8ec",
                    200: "#a0efda",
                    300: "#68e0c4",
                    400: "#38c8ab",
                    500: "#20ac92",
                    600: "#178a77",
                    700: "#166f61",
                    800: "#16594f",
                    900: "#174a42",
                    950: "#072c28",
                },
                dark: {
                    'eval-0': '#151823',
                    'eval-1': '#222738',
                    'eval-2': '#2A2F42',
                    'eval-3': '#2C3142',
                },
            },
        },
    },

    daisyui: {
        themes: [
            {
                light: {
                    ...require("daisyui/src/theming/themes")[
                        "[data-theme=light]"
                    ],
                    primary: "#20ac92",
                },

                dark: {
                    ...require("daisyui/src/theming/themes")[
                        "[data-theme=dark]"
                    ],
                    primary: "#20ac92",
                },
            },
        ],
    },

    plugins: [
        require("daisyui"),
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms')({
            strategy: 'class',
        })
    ],
}
