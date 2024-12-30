import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        'resources/css/themes/default.scss',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',

    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: 'var(--color-primary)',
                normal:'var(--color-text-normal)',
                // secondary: 'var(--color-secondary)',
                // warning: 'var(--color-secondary)',
                // info: 'var(--color-info)',
                // success: 'var(--color-success)',
                // danger: 'var(--color-danger)',
                // error: 'var(--color-error)',
                default: 'var(--color-default)',

                // muted: "var(--color-text-muted)",
                // mutedfr: "var(--color-text-muted-fr)",
                // highlighted: "var(--color-text-highlighted)",
                // placeholder: "var(--color-text-placeholder)",
                // divider: "var(--color-divider)",
                // border: "var(--color-border)",
                // input: "var(--color-input)",
            },
        },
    },
    plugins: [],
};
