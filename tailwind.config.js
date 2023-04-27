/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    fontFamily: {
      "poppins": ["Poppins", "sans-serif"],
      "roboto": ["Roboto", "sans-serif"],
      "inter": ["Inter", "sans-serif"],
      "montserrat": ["Montserrat", "sans-serif"],
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
    require('flowbite/plugin'),
  ]
}
