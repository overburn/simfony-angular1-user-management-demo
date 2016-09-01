var webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  context: __dirname + 'app',

  entry: {
    app: '../app/app.js',
    vendor: ['angular', 'angular-ui-router', 'angular-ui-bootstrap']
  },

  output: {
    path: __dirname + '/../build/',
    filename: 'app.bundle.js'
  },

  module: {
    loaders: [
        { test: /\.js$/ , exclude: /node_modules/, loader: 'babel-loader' },
        { test: /\.css$/, loader: ExtractTextPlugin.extract('css'),},
        { test: /\.eot(\?v=\d+\.\d+\.\d+)?$/, loader: "file" },
        { test: /\.(woff|woff2)$/, loader:"url?prefix=font/&limit=5000" },
        { test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/, loader: "url?limit=10000&mimetype=application/octet-stream" },
        { test: /\.svg(\?v=\d+\.\d+\.\d+)?$/, loader: "url?limit=10000&mimetype=image/svg+xml" },
        { test: /\.tpl.html$/, exclude: /node_modules/, loader: 'raw'}
    ]
  },

  plugins: [
    new webpack.optimize.CommonsChunkPlugin(/* chunkName= */"vendor", /* filename= */"vendor.bundle.js"),
    /*
    new webpack.optimize.UglifyJsPlugin({
      compress: { warnings: false }
    })
    */
    new ExtractTextPlugin('style.bundle.css'),
    new HtmlWebpackPlugin({
      filename: '../index.html',
      template: '../app/templates/index.tpl.html'
    })
  ],

  watch: true,
  debug: true
};
