import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "sky-50": "#f0f9ff",
                "sky-100": "#e0f2fe",
                "sky-200": "#bae6fd",
                "sky-300": "#7dd3fc",
                "sky-400": "#0369a1",
                "sky-500": "#075985",
                "sky-600": "#0c4a6e",
                white: "#FFFFFF",
                "frost-white": "#F0F0F8",
                black: "#121212",
                "dark-gray": "#1A1A1A",
            },
            fontSize: {
                base: "0.75rem",
                lg: "0.875rem",
                xl: "1rem",
                "2xl": "1.125rem",
                "3xl": "1.25rem",
                "4xl": "1.5rem",
                "5xl": "2rem",
                "6xl": "2.5rem",
                "7xl": "3rem",
                "8xl": "4rem",
            },
            fontFamily: {
                poppins: "Poppins",
                lato: "Lato",
            },
            boxShadow: {
                "Shadow/Shadow 1": "0px 4px 15px 0px rgba(0,0,0,0.25)",
                "Shadow/Shadow 2": "0px 4px 10px 0px rgba(0,0,0,0.2)",
                "Shadow/Shadow 3": "0px 4px 15px 0px rgba(0,0,0,0.15)",
            },
            borderRadius: {
                "rounded-0": "0rem",
                "rounded-1": "0.08333333333333333rem",
                "rounded-2": "0.16666666666666666rem",
                "rounded-3": "0.3333333333333333rem",
                "rounded-4": "0.4166666666666667rem",
                "rounded-5": "0.5rem",
                "rounded-6": "0.6666666666666666rem",
                "rounded-7": "0.8333333333333334rem",
                "rounded-8": "1rem",
                "rounded-9": "1.25rem",
                "rounded-10": "83.25rem",
            },
        },
    },
    plugins: [],
};
