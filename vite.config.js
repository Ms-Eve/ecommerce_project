import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            publicDir: 'public',

            // Optional but recommended for complex projects
            //   This gives you more control over the input files
            //   and how they're bundled.
            build: {
                rollupOptions: {
                    input: {
                        // e.g. multiple entry points
                        main: 'resources/js/app.js',
                        vendor: 'resources/js/vendor.js',
                    },
                },
            },
        }),
    ],
});

