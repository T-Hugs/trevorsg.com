// tailwind.config.js
module.exports = {
    purge: ["./trevor.html", "./script.js"],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            gridTemplateColumns: {
                scores: "1fr 8rem 1fr",
            },
            minWidth: {
                player: "36px",
            },
            width: {
                doublesPlayer: "20px",
                player: "36px",
            }
        },
        colors: {
            primary: {
                100: "#c5d8ee",
                200: "#269aff",
                300: "#1254a1",
                400: "#0a193e",
            },
            secondary: {
                white: "#ffffff",
                100: "#faf9f8",
                200: "#e1dfdd",
                300: "#c8c6c4",
                400: "#605e5c",
                500: "#201f1e",
                black: "#000000",
            },
            accent: {
                1: "#e04a53",
            },
            rock: {
                blue: "#0000ff",
                red: "#ff0000",
                yellow: "#ffff00",
            },
        },
    },
    variants: {},
    plugins: [],
};
