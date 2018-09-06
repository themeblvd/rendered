const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserslist = require('../browserslist');
const tildeImporter = require('node-sass-tilde-importer');

function buildCss(mode) {
  const style = mode === 'dev' ? 'expanded' : 'compressed';

  gulp
    .src('../assets/src/scss/style.scss')
    .pipe(sass({ outputStyle: style, importer: tildeImporter }).on('error', sass.logError))
    .pipe(autoprefixer({ browsers: browserslist }))
    .pipe(gulp.dest('../'));
}

module.exports = buildCss;
