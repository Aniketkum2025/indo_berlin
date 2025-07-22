/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/**/*.html',    // Include all HTML files in resources
    './public/**/*.html',       // Optionally include HTML files in public folder
    './*.html', 
    './**/*.{html,js,vue,php}',             // Root-level HTML files
  ],
  
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
],
}
