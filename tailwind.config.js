/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*/*.blade.php",
    "./resources/**/*/*.js",
  ],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: ["light"]
  }
  ,
  plugins: [require("daisyui")],
}

