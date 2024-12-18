import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/views/frontend/sass/app.scss', 'resources/views/frontend/js/app.js'], // corrected 'sas' to 'sass'
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'jquery': 'jquery/dist/jquery.js',
        },
    }, // moved closing bracket here
});
