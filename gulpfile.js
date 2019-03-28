'use strict';

var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var imagemin = require('gulp-imagemin');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
//var cache = require('gulp-cache');


//===================
// Browsersync Proxy
//===================

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "http://upei50.dev.islandarchives.ca/",
        serveStatic: ['.'],
        files: ['./dist/css/upei50.styles.css','./dist/js/upei50.behaviors.js'],
        //files: ['./dist/css/upei50.styles.css'],
        plugins: ['bs-rewrite-rules'],
        rewriteRules: [
            {
                match: '/sites/upei50.dev.islandarchives.ca/themes/upei50/dist/js/upei50.behaviors.js',

                replace: '/dist/js/upei50.behaviors.js'
            },
            {
                match: '/sites/upei50.dev.islandarchives.ca/themes/upei50/dist/css/upei50.styles.css',

                replace: '/dist/css/upei50.styles.css'
            }
        ]
    });
});



//====================
// copy fonts
//===================
gulp.task('copyfonts', function() {
   gulp.src('./src/fonts/**/*')
   .pipe(gulp.dest('./dist/fonts'));
});




//====================
// Sass Compilation
//===================

gulp.task('sass', function () {
  return gulp.src('./src/sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist/css'));
});

//====================
// JS Concatination
//===================

gulp.task('js', function () {
    gulp.src('./src/js/*.js') // path to your files
    .pipe(concat('upei50.behaviors.js'))  // concat and name it "concat.js"
    .pipe(gulp.dest('./dist/js/'));
});

//====================
// Image Optimization
//===================

gulp.task('images', function(){
    gulp.src('./src/gfx/**/*')
    //.pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
        .pipe(imagemin([
            imagemin.jpegtran({progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            })
        ]))
        .pipe(gulp.dest('./dist/gfx'));
});

//==================
// Default Gulp Task
//=================

gulp.task ('default',['browser-sync'], function(){
    //watch sass folder and compile changes
    gulp.watch('src/sass/**/*.scss', ['sass']);
    //watch js folder and compile changes
    gulp.watch('src/js/**/*.js', ['js']);
    //watch image folder and optimize
    gulp.watch('src/gfx/**/*', ['images']);
});


