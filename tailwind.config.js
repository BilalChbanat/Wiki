/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}", 
            "./views/*.php",
            "./views/includes*.php",

          ],
  theme: {
    extend: {
      colors: {
        footer: '#004930',
        DDDDDD: '#DDDDDD',
        subfooter: '#33B133',
        DDD: '#D9D9D9',
      },
    },
  },
  plugins: [],
};