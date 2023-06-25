/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: { 
    
        screens: {
          sm: '480px',
          md: '768px',
          lg: '976px',
          xl: '1440px',
        },
        colors: {
    
        },
    
        extend: {
    
          
    colors: {
    
    
      transparent: 'transparent',
      current: 'currentColor',
      zincDark: '#09090b',
      neutralDark: '#262626',
      darkGrey: '#3f3f46',
      dark:'#09090b',
      lightDark:'#262626',
      white:'#e5e5e5',
      yellowishWhite:'#fed7aa',
      verybrightYellow:'#ffedd5',
      quiteDark:'#171717',
      seaBlue:'#0284c7',
      'blue': '#1fb6ff',
      'purple': '#7e5bef',
      'pink': '#ff49db',
      'orange': '#ff7849',
      'green': '#13ce66',
      'yellow': '#ffc82c',
      'gray-dark': '#273444',
      'gray': '#8492a6',
      'gray-light': '#d3dce6',
      
    }
        },
      },
      plugins: [],
    }
    
    