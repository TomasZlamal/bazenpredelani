/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "bs-white": "hsl(0, 0%, 100%)",
                "bs-black": "hsl(0, 0%, 6.3%)",
                "bs-yellow": "hsl(50, 100%, 50%)",
                "bs-blue": {
                    100: "hsl(216, 100%, 97.1%)",
                    150: "hsl(215, 100%, 92%)",
                    200: "hsl(215, 100%, 87.1%)",
                    300: "hsl(216, 100%, 77.1%)",
                    400: "hsl(216, 100%, 67.1%)",
                    500: "hsl(216, 100%, 57.1%)",
                    600: "hsl(216, 100%, 47.1%)",
                    700: "hsl(216, 100%, 36.7%)",
                    800: "hsl(216, 100%, 27.1%)",
                    900: "hsl(216, 100%, 17.1%)",
                    950: "hsl(215, 100%, 12%)",
                    1000: "hsl(215, 100%, 7.1%)",
                },
                "bs-grey": {
                    150: "hsl(0, 0%, 94.9%)",
                    200: "hsl(0, 0%, 90.2%)",
                    300: "hsl(0, 0%, 80%)",
                    400: "hsl(0, 0%, 70.2%)",
                    500: "hsl(0, 0%, 60%)",
                    600: "hsl(0, 0%, 50.2%)",
                    700: "hsl(0, 0%, 40%)",
                    800: "hsl(0, 0%, 30.2%)",
                    900: "hsl(0, 0%, 20%)",
                    1000: "hsl(0, 0%, 10.2%)",
                },
            },
            fontSize: {
                small: "0.875rem",
                body: "1rem",
                h5: "1.15rem",
                h4: "1.3rem",
                h3: "1.65rem",
                h2: "2.3rem",
                h1: "3.75rem",

                "h1-mobile": "2.5rem",
            },
            lineHeight: {
                "very-tight": 1.05,
                "120%": "120%",
            },
            borderRadius: {
                sm: "0.5rem",
                lg: "1rem",
            },
            screens: {
                sm: "26rem",
                md: "35rem",
                lg: "52rem",
                nav: "75rem",
            },
            gridTemplateRows: {
                "showcase-grid": "repeat(5, minmax(25vw)",
            },
            maxWidth: {
                content: "68.75rem",
                article: "45rem",
            },
        },
    },
    plugins: [],
};
