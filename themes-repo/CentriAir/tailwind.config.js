/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/*.html",
    "./resources/views/**/*.blade.php",
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        'blue-primary': '#007AB7',
        'light-grey': '#808080',
        'black': '#00161F',
        'white-grey': '#FAFAFA',
        'medium-grey': '#E6E6E6',
        'divider-grey': '#BFBFBF',
        'card-outline-grey': '#F3F4F4',
        'hover': '#CCE4F1',
        'light-blue-primary': '#00AEEF',
        'table-odd': '#F2F2F2',
        'black-title': '#00161F',
        'black-primary': '#404040'
      },
      backgroundImage: {
        'landing-bg': 'url("../photos/background-landing.png")',
        'quality-services-bg': 'url("../photos/quality-services.jpg")'
      },
      boxShadow: {
        'custom': '3px 4px 10px rgba(0,0,0,0.3)',
      }
    }
  },
  plugins: [
  ],
}

