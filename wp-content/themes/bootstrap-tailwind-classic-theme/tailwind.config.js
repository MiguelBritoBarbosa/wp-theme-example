/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./*.php", "./template-parts/*.php"],
	theme: {
		extend: {},
	},
	plugins: [],
	prefix: "tw-",
	corePlugins: {
		preflight: false,
	},
};
