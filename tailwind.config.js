const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
  presets: [require('./vendor/wireui/wireui/tailwind.config.js')],
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
    './vendor/wireui/wireui/resources/**/*.blade.php',
    './vendor/wireui/wireui/ts/**/*.ts',
    './vendor/wireui/wireui/src/View/**/*.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        danger: colors.rose,
        primary: colors.indigo,
        success: colors.green,
        warning: colors.yellow,
        darbc: colors.indigo,
      },
    },
  },

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}
