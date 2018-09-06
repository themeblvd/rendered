const gulp = require('gulp');
const del = require('del');

function clean() {
  return del(['../*.zip'], { force: true });
}

module.exports = clean;
