const mix = require('laravel-mix');

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

mix.
styles([

    'resources/views/front/assets/css/bootstrap.min.css',
    'resources/views/front/assets/css/owl.carousel.min.css',
    'resources/views/front/assets/css/magnific-popup.css',
    'resources/views/front/assets/css/font-awesome.min.css',
    'resources/views/front/assets/css/themify-icons.css',
    'resources/views/front/assets/css/nice-select.css',
    'resources/views/front/assets/css/flaticon.css',
    'resources/views/front/assets/css/gijgo.css',
    'resources/views/front/assets/css/animate.css',
    'resources/views/front/assets/css/slicknav.css',
    'resources/views/front/assets/css/style.css'


], 'public/front/assets/css/estilos.css')

.scripts([

    'resources/views/front/assets/js/vendor/modernizr-3.5.0.min.js',
    'resources/views/front/assets/js/vendor/jquery-1.12.4.min.js',
    'resources/views/front/assets/js/popper.min.js',
    'resources/views/front/assets/js/bootstrap.min.js',
    'resources/views/front/assets/js/owl.carousel.min.js',
    'resources/views/front/assets/js/isotope.pkgd.min.js',
    'resources/views/front/assets/js/ajax-form.js',
    'resources/views/front/assets/js/waypoints.min.js',
    'resources/views/front/assets/js/jquery.counterup.min.js',
    'resources/views/front/assets/js/imagesloaded.pkgd.min.js',
    'resources/views/front/assets/js/scrollIt.js',
    'resources/views/front/assets/js/jquery.scrollUp.min.js',
    'resources/views/front/assets/js/wow.min.js',
    'resources/views/front/assets/js/nice-select.min.js',
    'resources/views/front/assets/js/jquery.slicknav.min.js',
    'resources/views/front/assets/js/jquery.magnific-popup.min.js',
    'resources/views/front/assets/js/plugins.js',
    'resources/views/front/assets/js/gijgo.min.js',
    'resources/views/front/assets/js/contact.js',
    'resources/views/front/assets/js/jquery.ajaxchimp.min.js',
    'resources/views/front/assets/js/jquery.form.js',
    'resources/views/front/assets/js/mail-script.js',
    'resources/views/front/assets/js/main.js',

], 'public/front/assets/js/scripts.js')

.copyDirectory('resources/views/front/assets/fonts', 'public/front/assets/fonts')
    .copyDirectory('resources/views/front/assets/img', 'public/front/assets/img')


.options({
    processCssUrls: false
})

.version();