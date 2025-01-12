import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import fs from 'fs';
import path from 'path'

export default defineConfig({
    plugins: [vue()],
    server: {
        https: {
            key: fs.readFileSync(path.resolve(__dirname, '../path/to/privkey.pem')),
      	    cert: fs.readFileSync(path.resolve(__dirname, '../path/to/fullchain.pem'))
        },
    },
});
