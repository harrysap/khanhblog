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
                'bg-main': '#290b50',
                "bg-secondary": "#F2F0F4",
                'text-main': '#D0A9F8',
                "border-main": "#E9DDF4",
                "text-primary": "#29282D",
                "bg-dark": "#290B50",
                "icon-main": "#D0A9F8",
                'bg-gray': "#F8F4F9",
                'gradient-start': 'rgba(41, 11, 80, 0)',
                'gradient-end': '#290B50',
                'border-gray': '#D1D5DB'
            },
            fontFamily: {
                cursive: ['Kalam', ...fontFamily.serif],
                heading: ['Lexend', ...fontFamily.sans],
                mono: ['JetBrains Mono', ...fontFamily.sans],
                sans: ['DM Sans', ...fontFamily.sans],
                vietnam: ['Be Vietnam Pro', ...fontFamily.sans],
                'roboto-mono': ['Roboto Mono', ...fontFamily.sans],
            },
            maxWidth: {
                '8xl': '88rem',
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
