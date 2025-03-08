import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/tailwind_output.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
