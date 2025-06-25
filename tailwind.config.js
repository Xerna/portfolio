/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  "./views/**/*.php"
],
  theme: {
    extend: {
      colors: {
          // Fondo principal
        'dark-navy': '#2C2C54',
        'lavender-light': '#FAF9FF',

        // Colores de acento
        'vibrant-red': '#FF4C60',
        'sun-yellow': '#FFD15C',
        'sky-blue': '#6C6CE5',
        'rich-purple': '#7D6AEF',

        // Grises y texto
        'soft-grey': '#F3F3F3',
        'mid-grey': '#C6C9D8',
        'blackish': '#2F2F41',
      }
    },
  },
  plugins: [],
}

