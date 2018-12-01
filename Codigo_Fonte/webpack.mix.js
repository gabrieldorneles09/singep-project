let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
// arquivo de mascaras
mix.js('resources/assets/js/mascaras.js','public/resources/js').version();

mix.js('resources/assets/js/cadastro/participante.js','public/resources/js').version();
 mix.styles(['resources/assets/css/main.css'],'public/resources/css/main.css').version();

mix.styles([
   'node_modules/@fortawesome/fontawesome/styles.css',
   'node_modules/mdbootstrap/css/mdb.min.css',
   'node_modules/bootstrap/dist/css/bootstrap.css'
 ],'public/resources/vendor/css/vendor.css').version();



mix.scripts([
   'node_modules/jquery/dist/jquery.min.js',
   'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
   'node_modules/mdbootstrap/js/mdb.min.js',
   'node_modules/@fortawesome/fontawesome/index.js',
   'node_modules/@fortawesome/fontawesome-free-solid/index.js',
   'node_modules/@fortawesome/fontawesome-free-regular/index.js',
   'node_modules/@fortawesome/fontawesome-free-brands/index.js',
   'node_modules/vue/dist/vue.js',
   'node_modules/vue-resource/dist/vue-resource.js',
   'node_modules/jquery-mask-plugin/dist/jquery.mask.min.js',
 ],'public/resources/vendor/js/vendor.js').version();

mix.copyDirectory('node_modules/font-awesome/fonts','public/resources/vendor/fonts');
mix.copyDirectory('node_modules/mdbootstrap/font','public/resources/vendor/font');
mix.copyDirectory('../Arquivos_de_apoio/fonts/ubuntu','public/resources/vendor/fonts/ubuntu');
mix.copyDirectory('../Arquivos_de_apoio/fonts/fredoka','public/resources/vendor/fonts/fredoka');
// mix.copyDirectory('resources/assets/images','public/resources/images');
