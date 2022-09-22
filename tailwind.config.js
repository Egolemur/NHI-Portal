/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {    
    extend: {      
      backgroundImage: {
        'hero-pattern': "url('/img/hero.jpg')",
      },

      height: {
        '128': '32rem',
        '112': '28rem',
    },

    minWidth: {
      '1/2': '50%',
    },
   
  },
  plugins: [],
}
}

