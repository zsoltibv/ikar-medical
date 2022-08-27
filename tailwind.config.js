/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'body': ['Source Sans Pro', 'sans-serif'],
        'heading' : ['Fira Sans', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
