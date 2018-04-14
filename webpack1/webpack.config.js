const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const glob = require('glob');
const PurifyCSSPlugin = require('purifycss-webpack');
const webpack = require('webpack');
const  entry = require('./webpack_config/entry_webpack.js');
const CopyPlugin = require('copy-webpack-plugin');
module.exports = {
    // entry:{ /*入口*/
    //    index: './src/index.js'
    // },
    entry:entry,

    output: {/*出口*/
        filename:"[name].js",/*接收多个入口*/
        path:path.resolve(__dirname,'dist')/*出口路径，默认是dist*/
    },
    devServer:{ /*start服务*/
        contentBase: path.resolve(__dirname,'dist'),/*start服务的地址*/
        host: '127.0.0.1',
        port: '8081',
        compress: true
    },
    plugins:[ /*插件，是数组*/
        new ExtractTextPlugin('./css/main.css'),
        new HtmlWebpackPlugin({
            title:"index",
            minify:{
                removeAttributeQuotes:true
            },
            template:"./src/index.html"
        }),
        new PurifyCSSPlugin({
            paths: glob.sync(path.join(__dirname,'src/*.html'))
        }),
        new webpack.BannerPlugin('HELLO'),
        new webpack.ProvidePlugin({
            $:'jquery'
        }),
        // new vue({}),
        new CopyPlugin([{
            from :__dirname + '/src/public',
            to:'./public'
        }])
    ],
    module:{
        rules:[{
            test:/\.css$/,
            // use:['style-loader','css-loader'],
            use:ExtractTextPlugin.extract({
                fallback:"style-loader",
               // use:"css-loader",
                use:[{
                    loader:"css-loader",
                    options:{importLoaders: 1}
                },'postcss-loader'],
                publicPath:'../',
            })
        },{
            test:/\.(png|jpg|gif)$/,
            use:[{
               loader:  'file-loader',  /*load是用来转化处理非JS文件的，webpack不能处理非JS文件*/
                options:{
                    limit:500000000,
                    outputPath:'images/'
                }
            }]
        },{
            test:/\.(html|htm)$/i,
            loader:"html-withimg-loader"
        },{
            test:/\.scss$/,
            use:ExtractTextPlugin.extract({
               fallback:'style-loader' ,
                use:['css-loader','sass-loader'],
            })

        },
        //     {
        //     test:/\.js$/,
        //     use:{
        //         loader:'babel-loader',
        //         options:{presets:'env'}
        //     },
        // },
        ]
    },
    watchOptions:{
        poll: 1000,/*检测修改时间，1000ms一次*/
        aggregateTimeout: 500, /*500ms保存一次，防止重复保存*/
        ignored:/node_modules/, /*设置不监听文件(这个文件是自动生成的，不需要人工修改)*/
    },
    optimization :{
        splitChunks:{
            filename:'assets/js/jquery.js',/*新建一个第三方资源库的文件夹*/
            cacheGroups:{
                jquery:{
                    chunks: 'initial',
                    name: 'jquery',
                },
                // vue:{
                //     chunks: 'initial',
                //     name: 'vue',
                // },
            }
        }
    }
};