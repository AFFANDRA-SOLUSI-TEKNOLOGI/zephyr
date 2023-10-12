const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'media',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
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

    plugins: [require('@tailwindcss/forms')],
}
