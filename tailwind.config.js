/** @type {import('tailwindcss').Config} */ 
module.exports = { 
  content: [ 
    './**/*.php', 
    './*.php', 
    './**/*.html', 
    './**/*.js', 
  ], 
  theme: { 
    extend: {
        colors: {
                        wine: {
                            50: '#fdf2f4',
                            100: '#fce7ea',
                            200: '#f9d0d9',
                            300: '#f4a9b8',
                            400: '#ec7691',
                            500: '#df4a6e',
                            600: '#c9285a',
                            700: '#a91d4a',
                            800: '#8d1b42',
                            900: '#781b3d',
                            950: '#430a1e',
                        },
                        cream: {
                            50: '#fefdf8',
                            100: '#fdfbf0',
                            200: '#fbf6e3',
                            300: '#f6edd1',
                            400: '#efdeb0',
                            500: '#e6cb8a',
                        },
                        gold: {
                            400: '#c9a962',
                            500: '#b8973d',
                            600: '#a17f2f',
                        }
                    },
                    fontFamily: {
                        'serif': ['Cormorant Garamond', 'Georgia', 'serif'],
                        'sans': ['DM Sans', 'system-ui', 'sans-serif'],
                    }
    }, 
  }, 
  plugins: [], 
} 
