/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
    },
    fontFamily : {
      'sans': ['Lato', 'sans-serif'],
      'serif': ['Merriweather', 'serif'],
      'mono': ['Menlo', 'monospace'],
      'display': ['Oswald', 'sans-serif'],
      'body': ['Lato', 'sans-serif']
    },
    extend: {
      colors: {
        'primary': '#4540dc',
        'accent': '#918eea' 
      }
    },
  },
  plugins: [],
}
