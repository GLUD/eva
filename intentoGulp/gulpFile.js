/*
* Dependencias
*/
var gulp = require('gulp'),
	minifyCSS = require('gulp-minify-css'),
	concatCss = require('gulp-concat-css'),
	concatJs = require('gulp-concat'),
  notify = require('gulp-notify'),
	uglify = require('gulp-uglify');

/*
* Configuración
*/
gulp.task('css', function ()
{
  gulp.src('css/*.css')
    .pipe(concatCss("css/evabase.css"))
    .pipe(minifyCSS({keepBreaks:false}))
    .pipe(gulp.dest('out/css'))
    .pipe(notify("Ha finalizado la task css!"));
})

gulp.task('js', function()
{
  gulp.src('js/*.js')
  	.pipe(concatJs('todo.js'))
    .pipe(uglify())
    .pipe(gulp.dest('out/js'))
    .pipe(notify("Ha finalizado la task js!"));
});
