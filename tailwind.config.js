/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "*.{html,js,php}",
    "activties/*.{html,js,php}",
    "./components/*.{html,js,php}",
    "./components/buttons/*.{html,js,php}",
    "./includes/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        abril: ["Abril Fatface", "sans-serif"],
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
