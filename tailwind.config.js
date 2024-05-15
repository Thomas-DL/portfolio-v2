import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['inter', 'sans-serif'],
                heading: ['degular', 'sans-serif'],
            },
            colors: {
                primary:   '#FF007A',
                secondary: '#FF7A00',
                white:     '#F5F5F5',
                black:     '#1D1D1D',
            }
        },
    },

    plugins: [forms],
};
