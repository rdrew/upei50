"use strict";

//===================
// Dev site settings
// ==================

var devSiteUrl = "https://upei50.dev.islandarchives.ca/";
//what should BS serve?
var filesToServe = ["."];
// what css/js files in dist should trigger bs reload
var bsReloadTriggers = [
  "./dist/css/upei50.styles.css",
  "./dist/js/upei50.behaviors.js"
];
// bs url match/replace
var cssRemoteMatch   = "/sites/upei50.dev.islandarchives.ca/themes/upei50/dist/css/upei50.styles.css";
var cssRemoteReplace = "/dist/css/upei50.styles.css";
var jsRemoteMatch    = "/sites/upei50.dev.islandarchives.ca/themes/upei50/dist/js/upei50.behaviors.js";
var jsRemoteReplace  = "/dist/js/upei50.behaviors.js";

//font src
var copyFontSrc              = "./src/fonts/**/*";
//font destination
var copyFontDest             = "./dist/fonts";
// sass source
var sassWatchDir             = "./src/sass/**/*.scss";
// css destination
var compiledCssDir           = "./dist/css";
// js src
var jsWatchDir               = "./src/js/*.js";
// js destination
var compiledJsDir            = "upei50.behaviors.js";
// compliled js filename
var jsFileName               = "./dist/js/";
//img src
var imgSrc                   = "./src/gfx/**/*";
// img destination
var imgDest                  = "./dist/gfx";

//GULP TASK TRIGGERS
//location of sass src files
var watchSass                = sassWatchDir;
//location of js src files
var watchJs                  = jsWatchDir;
//location of font src files
var watchFonts               = copyFontSrc;
// img src

//====================
//NPM package includes
//====================
var watchImages              = imgSrc;
var gulp         = require("gulp");
var browserSync  = require("browser-sync").create();
var imagemin     = require("gulp-imagemin");
var plumber      = require("gulp-plumber");
var sass         = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps   = require("gulp-sourcemaps");
var concat       = require("gulp-concat");
//var cache = require('gulp-cache');

//===================
// Browsersync Proxy
//===================

gulp.task("browser-sync", function() {
  browserSync.init({
    proxy: devSiteUrl,
    serveStatic: filesToServe,
    files: bsReloadTriggers,
    //files: ['./dist/css/upei50.styles.css'],
    plugins: ["bs-rewrite-rules"],
    rewriteRules: [
      {
        match: cssRemoteMatch,

        replace: cssRemoteReplace
      },
      {
        match: jsRemoteMatch,

        replace: jsRemoteReplace
      }
    ]
  });
});

//====================
// copy fonts
//===================
gulp.task("copyfonts", function() {
  gulp.src(copyFontSrc).pipe(gulp.dest(copyFontDest));
});

//====================
// Sass Compilation
//===================
gulp.task("sass", function() {
  return gulp
    .src(sassWatchDir)
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(compiledCssDir));
});

//====================
// JS Concatination
//===================

gulp.task("js", function() {
  gulp
    .src(jsWatchDir) // path to your files
    .pipe(concat(compiledCssDir)) // concat and name it "concat.js"
    .pipe(gulp.dest(jsFileName));
});

//====================
// Image Optimization
//===================

gulp.task("images", function() {
  gulp
    .src(imgSrc)
    //.pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    .pipe(
      imagemin([
        imagemin.jpegtran({ progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
        imagemin.svgo({
          plugins: [{ removeViewBox: true }, { cleanupIDs: false }]
        })
      ])
    )
    .pipe(gulp.dest(imgDest));
});

//==================
// Default Gulp Task
//=================
gulp.task("default", ["browser-sync"], function() {
  //watch sass folder and compile changes
  gulp.watch(watchSass, ["sass"]);
  //watch js folder and compile changes
  gulp.watch(watchJs, ["js"]);
  //watch font folder and copy to dist
  gulp.watch(watchFonts, ["copyfonts"]);
  //watch image folder and optimize
  gulp.watch(watchImages, ["images"]);
});
