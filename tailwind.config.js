module.exports = {
  purge: {
    enabled: true,
    content: [
      'source/**/*.html',
      'source/**/*.md',
      'source/**/*.js',
      'source/**/*.php',
      'source/**/*.vue',
    ],
    options: {
      safelist: [
        /language/,
        /hljs/,
        /mce/,
      ],
    },
  },
  darkMode: false,
  theme: {
    extend: {
      typography: {
        DEFAULT: {
          css: {
            color: '#333',
            ul: {
              li: {
                a: {
                  marginTop: '0 !important',
                  marginBottom: '0 !important',
                },
              },
            },
          },
        },
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
