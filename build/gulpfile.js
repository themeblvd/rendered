const gulp = require('gulp');
const buildCss = require('./tasks/build-css');
const watch = require('./tasks/watch');

const tasks = ['build-css'];

gulp.task('build-css-dev', () => buildCss('dev'));

gulp.task('build-css-prod', () => buildCss('prod'));

gulp.task('build-css', ['build-css-dev', 'build-css-prod']);

gulp.task('watch', tasks, () => watch(tasks));

gulp.task('clean', require('./tasks/clean'));

gulp.task('package-theme', require('./tasks/package-theme'));

gulp.task('default', tasks);
