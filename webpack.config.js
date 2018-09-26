// webpack.config.js
var Encore = require('@symfony/webpack-encore');

// export the final configuration
module.exports = Encore.getWebpackConfig();

Encore
// the project directory where all compiled assets will be stored
    .setOutputPath('public/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // will create public/build/main.js and public/build/base.css
    .addEntry('app', './assets/js/main.js')

    // enable source maps during development
    .enableSourceMaps(!Encore.isProduction())

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    .enableBuildNotifications()

    // For Vuejs
    .enableVueLoader()

// create hashed filenames (e.g. app.abc123.css)
// .enableVersioning()

// allow sass/scss files to be processed
// .enableSassLoader()
;
