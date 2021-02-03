'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});

gulp.task('dev', function () {
    gulp.watch('./sass/**/*.scss', gulp.series(['sass']));
});

