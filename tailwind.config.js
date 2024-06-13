import defaultTheme from 'tailwindcss/defaultTheme'

export default {
    content: ['./resources/**/*.{js,vue,blade.php}'],
    theme: {
        extend: {
            colors: {
                indigo: {
                    100: '#e6e8ff',
                    300: '#b2b7ff',
                    400: '#7886d7',
                    500: '#6574cd',
                    600: '#5661b3',
                    800: '#2f365f',
                    900: '#191e38',
                },
                'main' : '#F6F5F2',
                'menu' : '#B5C0D0',
                'text' : '#F5E8DD'
            },
            fontFamily: {
                inter: ['Inter','sans-serif'],
            },
        },
    },
}
