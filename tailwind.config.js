/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "auth-bg": "url('/public/assets/authbg.webp')",
            },
        },
    },
    plugins: [],
};
