module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'onedoc-blue': '#0055CC',
        'onedoc-blue-dark': '#003399',
        'onedoc-blue-light': '#0078D4',
        'onedoc-pink': '#E8306F',
        'onedoc-orange': '#FF8C42',
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
