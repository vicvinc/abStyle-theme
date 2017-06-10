/*
* @Author: maxm
* @Date:   2016-12-12 16:47:53
* @Last Modified 2016-12-23
* @Last Modified time: 2017-01-20 10:16:32
*/

var gulp = require('gulp');
var path = require('path');
var glob = require('glob');

var gulpServer = require('gulp-express');
var less = require('gulp-less');
var postcss = require('gulp-postcss');
var cssmin = require('gulp-cssmin');

var browserify = require('browserify');
var envify = require('loose-envify/custom');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');

/*
var browserify = require('browserify');
var envify = require('loose-envify/custom');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
*/
var notify = require('gulp-notify');

var staticDir = './static/',
    assetsDir = './public/',
    appDir = './app/';

var errInfo = function(err) {
    console.error(err);
};

/*
    样式代码编译
*/
gulp.task('compile:less', function() {
    return gulp.src(['less/main.less'])
        .pipe(less().on('error', errInfo))
        .on('error', errInfo)
        .pipe(cssmin())
        .pipe(postcss([require('autoprefixer'), require('precss')]))
        .pipe(gulp.dest(assetsDir + 'css'))
        .pipe(notify({ message: 'less compile finished', onLast: true }))
});

/*
    js代码合并
*/
gulp.task('bundle:js', function() {
    var testFiles = glob.sync('app/**/*.js'),
        b = browserify({
            entries: ['app/main.js'],
            extensions: ['.js']
        })
        .transform(envify({ NODE_ENV: 'production' }));

    return b.bundle()
        .on('error', function(err) {
            console.log(err);
            this.emit('end');
        })
        .pipe(source('bundle.js'))
        .pipe(buffer())
        .pipe(gulp.dest(assetsDir + 'js'))
        .pipe(notify({ message: 'js bundle finished', onLast: true }))
});

gulp.task('development', function() {
    gulp.watch(['less/**/*.less'], ['compile:less']);
});