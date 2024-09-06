/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      backgroundColor: {
        dark: "#000000",
      },
      fontFamily: {
        poppins: "[Poppins]",
      },
      colors: {
        primary: "#687EFF",
        primary_hover: "#6366f1",
        dark: "#000000",
        secondary: "#EAEDFF",
        secondary_hover: "#D0D3EB",
        secondary_bg: "#F9FAFC",
        white: "#ffffff",
        footer: "#071018",
      },
    },
  },
  plugins: [],
};
