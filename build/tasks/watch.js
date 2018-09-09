const gulp = require('gulp');

function watch(tasks) {
  gulp.watch('../assets/src/scss/**/*.scss', tasks);
}

module.exports = watch;
