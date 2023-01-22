import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/stories/stories.js',
                'resources/js/utils/textarea-plugin.js',
                'resources/js/stories/create.js'
            ],
            refresh: true,
        }),
    ],
});
