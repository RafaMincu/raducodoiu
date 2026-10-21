import { defineConfig } from 'vite'
import laravel from '@laravel/vite-plugin-laravel'

export default defineConfig({
  plugins: [laravel()],
})
