var webpack = require('webpack')
var path = require('path')

global.Vue = require('vue')
global.Vue.config.delimiters = ['${', '}']

module.exports = {
    entry: './web/js/app.js',
    output: {
        path: './web/js/compiled',
        publicPath: '/dist/',
        filename: 'build.test.js'
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: /node_modules/
            },
            {
                test: /\.scss$/,
                loader: 'ignore-loader'
            }
        ]
    }
}