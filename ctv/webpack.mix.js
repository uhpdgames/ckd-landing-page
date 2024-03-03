// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/main.js', 'assets/js')
	.postCss('src/main.css', 'assets/css',[
		require("tailwindcss")
	
	]);


