/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'body': ['Source Sans Pro', 'sans-serif'],
        'heading' : ['Fira Sans', 'sans-serif'],
      },
    },
    container: {
       screens: {
        sm: '600px',
        md: '728px',
        lg: '984px',
        xl: '1240px',
        '2xl': '1260px',
      },
    },
  },
  plugins: [],
}
