const gulp = require('gulp');
const zip = require('gulp-zip');
const config = require('../../package.json');

function packageTheme() {
  gulp
    .src([
      '../**/*',
      '!../**/readme.md',
      '!../{node_modules,node_modules/**/*}',
      '!../{build,build/**/*}',
      '!../{assets/src,assets/src/**/*}',
      '!../.editorconfig',
      '!../.gitignore',
      '!../*.json'
    ])
    .pipe(zip(`rendered-${config.version}.zip`))
    .pipe(gulp.dest('../'));
}

module.exports = packageTheme;
