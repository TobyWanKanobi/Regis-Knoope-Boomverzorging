'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
  console.log('Bulding Styles');
  return gulp.src('./resources/sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./public/css'))
};

function javascript() {
  return gulp.src('./resources/js/**/*.js')
    .pipe(gulp.dest('./public/js'));
};

function watch() {
  gulp.watch('./resources/sass/**/*.scss', gulp.series('buildStyles'));
  gulp.watch('./resources/js/**/*.js', gulp.series('javascript'));
};

function defaultTask(cb) {
  watch();
};

exports.default = defaultTask;
exports.watch = watch;
exports.buildStyles = buildStyles;
exports.javascript = javascript;