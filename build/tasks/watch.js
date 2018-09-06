const gulp = require('gulp');

function watch() {
  gulp.watch('../scss/**/*.scss', ['build-css-dev']);
}

module.exports = watch;
