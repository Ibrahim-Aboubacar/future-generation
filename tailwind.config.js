/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./public_html/**/*.{html,js,php}", "./includes/**/*.{html,php}"],
    theme: {
        extend: {
            keyframes: {
                "wiggle-x": {
                    "0%, 50%, 100%": { transform: "translateX(0px)" },
                    "10%": { transform: "translateX(25px)" },
                },
                "wiggle-y": {
                    "0%, 65%, 100%": { transform: "translateY(0px)" },
                    "35%": { transform: "translateY(15px)" },
                },
            },
            animation: {
                "wiggle-x": "wiggle-x 3s ease-in-out infinite",
                "wiggle-y": "wiggle-y 2s ease-in-out infinite",
            },
        },
    },
    plugins: [],
}; // npx tailwindcss -i ./src/css.css -o ./public_html/assets/css/styles.css --watch
