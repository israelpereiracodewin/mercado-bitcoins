import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

// Lê todos os arquivos .scss no diretório especificado
const scssPageFiles = fs.readdirSync('resources/scss/pages').map(file => `resources/scss/pages/${file}`);
console.log(scssPageFiles)
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                ...scssPageFiles,
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
          output: {
            entryFileNames: `assets/index.js`,
            chunkFileNames: `assets/index-chunk.js`,
            assetFileNames: `assets/[name].[ext]`,
          },
        },
      },
});
