import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  presets: [
    require('./vendor/tallstackui/tallstackui/tailwind.config.js')
  ],
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/tallstackui/tallstackui/src/**/*.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {},
  },

  plugins: [forms],
};
