/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#0B1E33',
          light: '#183354',
          dark: '#061120',
        },
        accent: {
          DEFAULT: '#B58A3D',
          light: '#D0A75C',
          dark: '#926E2A',
        }
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        serif: ['Playfair Display', 'Georgia', 'Cambria', 'serif'],
      }
    },
  },
  plugins: [],
}
