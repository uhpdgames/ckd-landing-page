/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/views/*.twig",
    "./app/views/*.html",
    "./app/views/*.php",
    "./app/views/**/*.twig",
    "./app/views/**/*.html",
    "./app/views/**/*.php",
    "./app/views/**/**/*.twig",
    "./app/views/**/**/*.html",
    "./app/views/**/**/*.php",
  ],
  theme: {
    fontFamily: {
      title: ["sans-serif"],
      base: ["sans-serif"],
      sans: ["sans-serif"],
      main: ["sans-serif"],
    },
    colors: {
      transparent: "transparent",
      current: "currentColor",
      bluepink: "#f8c4cb",
    },
    extend: {
      colors: {
        clifford: "#da373d",
        primary: {
          500: "#FF6363;",
          800: "#FF1313;",
        },
      },
    },
  },
  plugins: [],
};
