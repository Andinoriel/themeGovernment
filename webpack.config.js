const path = require('path')
const HTMLWebpackPlugin = require('html-webpack-plugin')
const {CleanWebpackPlugin} = require('clean-webpack-plugin')
const CopyWebpackPlugin = require('copy-webpack-plugin')
const MiniCSSExtractPlugin = require('mini-css-extract-plugin')
const OptimizeCSSAssetsWebpackPlugin = require('optimize-css-assets-webpack-plugin')
const TerserWebpackPlugin = require('terser-webpack-plugin')


const isDev = process.env.NODE_ENV === 'development'
const isProd = !isDev

const optimization = () => {
  const config = {
    splitChunks: {
      chunks: "all"
    }
  }
  if (isProd) {
    config.minimizer = [
      new OptimizeCSSAssetsWebpackPlugin(),
      new TerserWebpackPlugin()
    ]
  }
  return config
}

const cssLoaders = extra => {
  const loaders = [{
    loader: MiniCSSExtractPlugin.loader,
    options:
      {
        hmr: isDev,
        reloadAll: true
      }
  },
    'css-loader'
  ]
  if (extra) {
    loaders.push(extra)
  }
  return loaders

}

console.log('IS DEV:', isDev)

module.exports = {
  context: path.resolve(__dirname, 'src'),
  mode: 'development',
  entry: {
    main: './js/index.js'
  },
  output: {
    filename: "[name].[contenthash].js",
    path: path.resolve(__dirname, 'dist')
  },
  resolve: {
    extensions: ['.js', '.json'],
    alias: {
      '@css': path.resolve(__dirname, 'src/css'),
      '@js': path.resolve(__dirname, 'src/js'),
      '@fonts': path.resolve(__dirname, 'src/fonts'),
      '@': path.resolve(__dirname, 'src')
    }
  },
  optimization: optimization(),
  devServer: {
    port: 4200,
    hot: isDev
  },
  plugins: [
    new CleanWebpackPlugin(),
    // new CopyWebpackPlugin({
    //   patterns: [
    //     {
    //       from: path.resolve(__dirname, 'src/favicon.ico'),
    //       to: path.resolve(__dirname, 'dist')
    //     }
    //   ]
    // }),
    new MiniCSSExtractPlugin({
      filename: "[name].[contenthash].css",
    }),
    new HTMLWebpackPlugin({
      filename: '404.html',
      template: "./404.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'about.html',
      template: "./about.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'buttons.html',
      template: "./buttons.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'contacts.html',
      template: "./contacts.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'events.html',
      template: "./events.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'events-view.html',
      template: "./events-view.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      template: "./index.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'index-raspberry.html',
      template: "./index-raspberry.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'index-sandybay.html',
      template: "./index-sandybay.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'index-skyline.html',
      template: "./index-skyline.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'main-bordered.html',
      template: "./main-bordered.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'news.html.html',
      template: "./news.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'news-no-image.html',
      template: "./news-no-image.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'news-view.html',
      template: "./news-view.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'projects.html',
      template: "./projects.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'projects-view.html',
      template: "./projects-view.html",
      minify: {
        collapseWhitespace: isProd
      }
    }),
    new HTMLWebpackPlugin({
      filename: 'stuff.html',
      template: "./stuff.html",
      minify: {
        collapseWhitespace: isProd
      }
    })
  ],
  module: {
    rules: [
      {
        test: /\.css$/,
        use: cssLoaders()
      },
      {
        test: /\.(scss)$/,
        use: [
          {
            loader: MiniCSSExtractPlugin.loader,
            options:
              {
                hmr: isDev,
                reloadAll: true
              }
          },
          {
            loader: 'css-loader', // translates CSS into CommonJS modules
          },
          {
            loader: 'postcss-loader', // Run post css actions
            options: {
              plugins: function () { // post css plugins, can be exported to postcss.config.js
                return [
                  require('precss'),
                  require('autoprefixer')
                ];
              }
            }
          }, {
            loader: 'sass-loader' // compiles Sass to CSS
          }]
      },
      {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              outputPath: 'fonts/'
            }
          }
        ]
      },
      {
        test: /\.(png|jpg|gif)$/,
        use: ['file-loader']
      }
    ]
  }
}