module.exports = {
    theme: {
        extend: {
            animation: {
                blob: "blob 4s infinite",
            },
            keyframes: {
                blob: {
                    "0%": {
                        transform: "scale(1)",
                    },
                    "33%": {
                        transform: "scale(1.1)",
                    },
                    "66%": {
                        transform: "scale(0.9)",
                    },
                    "100%": {
                        transform: "scale(1)",
                    },
                },
            },
        },
    },
    plugins: [],
};
