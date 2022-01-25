import { defineConfig } from 'vite'
import presetEnv from 'postcss-preset-env'
import fg from 'fast-glob'

export default defineConfig({
  server: {
    proxy: {
      '/': 'http://localhost:9560',
    },
  },
  build: {
    sourcemap: true,
    rollupOptions: {
      output: {
        dir: 'dist/assets',
        entryFileNames: '[name].js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
      },
    },
  },
  css: {
    postcss: { plugins: [presetEnv({ stage: 1 })] },
  },
  plugins: [
    {
      name: 'watch-public',
      async buildStart() {
        const files = await fg('public/**/*')
        for (let file of files) {
          this.addWatchFile(file)
        }
      },
    },
  ],
})
