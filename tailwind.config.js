//const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {    
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
