var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename');

gulp.task('sass', function() {
  return gulp.src('assets/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/css'));
});

gulp.task('js', function() {
  return gulp.src(['assets/js/*.js', '!assets/js/*.min.js'])
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('assets/js'));
});

gulp.task('watch', function() {
  gulp.watch('assets/scss/**/*.scss', gulp.series('sass'));
  gulp.watch(['assets/js/**/*.js', '!assets/js/*.min.js'], gulp.series('js'));
});
