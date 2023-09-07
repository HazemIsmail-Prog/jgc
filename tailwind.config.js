/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ], theme: {
    extend: {
      colors:{
        primary:'#2882c3',
        secondary:'#175b7b',
      }
    },
  },
  plugins: [],
}

