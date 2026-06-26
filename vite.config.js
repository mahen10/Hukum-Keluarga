import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  base: './',
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        artikel: resolve(__dirname, 'artikel.html'),
        'tentang-kami': resolve(__dirname, 'tentang-kami.html')
      }
    }
  }
});
