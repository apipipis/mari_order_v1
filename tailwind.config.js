module.exports = {
  darkMode: 'class',
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {backgroundImage: {
      'hero-pattern': "url('/img/Frame.png')",
      },
      margin: {
        'left-main': '64px'
      },
      margin: {
        'right-main' : '64px',
      }
    }
  },
  plugins: [],
}
