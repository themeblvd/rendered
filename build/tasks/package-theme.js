const gulp = require('gulp');
const zip = require('gulp-zip');

function packageTheme() {
  gulp
    .src([
      '../**/*',
      '!../**/readme.md',
      '!../{node_modules,node_modules/**/*}',
      '!../{build,build/**/*}',
      '!../{scss,scss/**/*}',
      '!../.editorconfig',
      '!../.gitignore',
      '!../*.json'
    ])
    .pipe(zip('wp-react-portfolio.zip'))
    .pipe(gulp.dest('../'));
}

module.exports = packageTheme;
