import preset from './vendor/filament/support/tailwind.config.preset'
const colors = require('tailwindcss/colors')
const { fontFamily } = require('tailwindcss/defaultTheme')

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.purple,
                success: colors.green,
                warning: colors.amber,
                cream: '#FFF9F5',
                butter: '#d8c9ef',
                midnight: '#0F033A',
                evening: '#251A4D',
                merino: '#F2E7DD',
                hurricane: '#807575',
                dolphin: '#6C6489',
                'burnt-dolphin': '#454059',
                'peach-orange': '#aa97ff',
                'seashell-peach': '#FFF0E8',
                'dawn-pink': '#F1E5E4',
                salmon: '#c593ef',
                'fair-pink': '#FFEAE4',
                'bg-main': '#FAF8FF',
                "bg-secondary": "#F2F0F4",
                'text-main': '#D0A9F8',
                "border-main": "#E9E8FF",
                "text-primary": "#282424",
                "bg-dark": "#290B50",
                "icon-main": "#FF2AAC",
                'bg-gray': "#F8F4F9",
                'bg-overlay': "#211d3f",
                'bg-selection': "#f8f2c6",
                'gradient-start': 'rgba(41, 11, 80, 0)',
                'gradient-end': '#290B50',
                'border-gray': '#D1D5DB',
                'btn-bg': '#010afe',
                'btn-dark': '#282424',
                'btn-lg': '#FF8E51',
                'bg-category-1': '#E32525',
                'bg-category-1-secondary': '#E3252533',
                'bg-category-2': '#000000',
                'bg-category-2-secondary': '#00000033',
                'bg-category-3': '#E9A500',
                'bg-category-3-secondary': '#E9A50033',
                'bg-category-4': '#010afe',
                'bg-category-4-secondary': '#010afe33',
                'bg-category-5': '#5751ff',
                'bg-category-5-secondary': '#5751ff33',
                'bg-category-6': '#E9C310',
                'bg-category-6-secondary': '#E9C31033'
                
            },
            fontFamily: {
                cursive: ['Kalam', ...fontFamily.serif],
                heading: ['Lexend', ...fontFamily.sans],
                mono: ['JetBrains Mono', ...fontFamily.sans],
                sans: ['DM Sans', ...fontFamily.sans],
                vietnam: ['Be Vietnam Pro', ...fontFamily.sans],
                'roboto-mono': ['Roboto Mono', ...fontFamily.sans],
                'manrope': ['Manrope', 'Arial', 'sans-serif'],
                'reddit': ['Reddit Sans', 'Arial', 'sans-serif'],
            },
            maxWidth: {
                '8xl': '88rem',
                'default': '1190px',
                'laptop': '1280px'
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        a: {
                            '&:hover': {
                                color: theme('colors.primary.600'),
                            },
                            '&:focus': {
                                color: theme('colors.primary.600'),
                            },
                        },
                        blockquote: {
                            fontStyle: 'normal',
                        },
                        'blockquote p:first-of-type::before': {
                            content: 'none',
                        },
                        'blockquote p:first-of-type::after': {
                            content: 'none',
                        },
                        code: {
                            fontWeight: theme('fontWeight.normal'),
                        },
                    },
                },
                invert: {
                    css: {
                        a: {
                            '&:hover': {
                                color: theme('colors.primary.500'),
                            },
                            '&:focus': {
                                color: theme('colors.primary.500'),
                            },
                        },
                    },
                },
            }),
            zIndex: {
                '-1': '-1',
            },
            backgroundImage: {
                'custom-gradient': 'linear-gradient(180deg, rgba(41, 11, 80, 0) 0%, #290B50 100%)',
            },
            scale: {
                '115': '1.15',
            },
            screens: {
                'phone': '480px',
                'tablet2': '900px',
                'default': '1190px'
            },
            keyframes: {
                morph: {
                    '0%': { borderRadius: '60% 40% 30% 70% / 60% 30% 70% 40%' },
                    '50%': { borderRadius: '30% 60% 70% 40% / 50% 60% 30% 60%' },
                    '100%': { borderRadius: '60% 40% 30% 70% / 60% 30% 70% 40%' },
                },
            },
            animation: {
                morph: 'morph 10s infinite ease-in-out',
            },
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
    darkMode: 'class',
}
