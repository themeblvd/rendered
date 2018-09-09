const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserslist = require('../browserslist');
const tildeImporter = require('node-sass-tilde-importer');
const rename = require('gulp-rename');

function buildCss(mode) {
  const style = mode === 'dev' ? 'expanded' : 'compressed';
  const fileName = mode === 'dev' ? 'style.css' : 'style.min.css';

  gulp
    .src('../assets/src/scss/style.scss')
    .pipe(sass({ outputStyle: style, importer: tildeImporter }).on('error', sass.logError))
    .pipe(autoprefixer({ browsers: browserslist }))
    .pipe(rename(fileName))
    .pipe(gulp.dest('../'));
}

module.exports = buildCss;
