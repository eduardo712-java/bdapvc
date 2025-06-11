var gulp = require('gulp');

/*
 * ----------------------------------------------------------
 * Include Our Plugins
 * ----------------------------------------------------------
 */
var jshint = require('gulp-jshint');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var prefix = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var purgecss = require('gulp-purgecss')
var purgecssWordpress = require('purgecss-with-wordpress');

gulp.task('default', defaultTask);

/*
 * ----------------------------------------------------------
 * Lint Task
 * ----------------------------------------------------------
 */
gulp.task('lint', function () {
  return gulp.src([
      //'assets/plugins/**/*.js', // Plugins
      'assets/plugins/aos/aos.js', // Plugins
      //'assets/plugins/jarallax/*.min.js', // Plugins
      'assets/plugins/owl/owl.carousel.min.js', // Plugins
      //'assets/plugins/simplelightbox/simple-lightbox.min.js', // Plugins
      //'assets/plugins/smoothscroll/smooth-scroll.min.js', // Plugins
      'assets/js/y-ajax.js', // Scripts do Ajax
      'assets/js/y-run.js' // Scripts do tema
    ])
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});


/*
 * ----------------------------------------------------------
 * Concatenate & Minify JS
 * ----------------------------------------------------------
 */
gulp.task('scripts', function () {
  return gulp.src([
      'assets/js/jquery.min.js', // Jquery
      'assets/js/popper.min.js', // Popper
      'assets/js/bootstrap.bundle.min.js', // Bootstrap
      //'assets/plugins/**/*.js', // Plugins
      'assets/plugins/aos/aos.js', // Plugins
      //'assets/plugins/jarallax/*.min.js', // Plugins
      'assets/plugins/owl/owl.carousel.min.js', // Plugins
      //'assets/plugins/simplelightbox/simple-lightbox.min.js', // Plugins
      //'assets/plugins/smoothscroll/smooth-scroll.min.js', // Plugins
      'assets/js/y-ajax.js', // Scripts do tema
      'assets/js/y-run.js' // Scripts do tema

    ])
    .pipe(concat('y-all.js'))
    .pipe(gulp.dest('assets/dist/js/'))
    .pipe(rename('y-all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/dist/js/'));
});



/*
 * ----------------------------------------------------------
 * Concatenate & Minify CSS
 * ----------------------------------------------------------
 */
gulp.task('styles', function () {
  return gulp.src([
      'assets/css/bootstrap.min.css', // Bootstrap
      //'assets/plugins/**/*.css', // Plugins 
      'assets/plugins/animate/animate.min.css', // Plugins
      'assets/plugins/aos/aos.css', // Plugins
      'assets/plugins/font-awesome/css/all.min.css', // Plugins      
      'assets/plugins/owl/assets/owl.carousel.min.css', // Plugins
      //'assets/plugins/simplelightbox/simple-lightbox.min.css', // Plugins
	  
	  'assets/css/y-blocks.css', // CSS base do tema
      'assets/css/y-responsive.css', // CSS responsivo base do tema
      'assets/css/y-custom.css' // CSS customizado do tema
	  
    ])
    .pipe(concat('y-all.css'))
    .pipe(gulp.dest('assets/dist/css/'))
    .pipe(rename('y-all.min.css'))
    .pipe(cleanCSS({
      compatibility: 'ie8'
    }))
    .pipe(prefix('last 2 versions'))
    .pipe(gulp.dest('assets/dist/css/'))
});


/*
 * ----------------------------------------------------------
 * Purgecss Task
 * ----------------------------------------------------------
 */
gulp.task('purgecss-rejected', () => {
    return gulp.src('assets/dist/css/y-all.min.css')
        .pipe(rename({
            suffix: '.used'
        }))
        .pipe(purgecss({
            content: ['*.php'],
			//safelist: purgecssWordpress.safelist	
			safelist: 
			[
				...purgecssWordpress.safelist,
				/^aos-/,
				'emoji'
			]
            //rejected: true
        }))
        .pipe(gulp.dest('assets/dist/css/'))
})


/*
 * ----------------------------------------------------------
 * Watch Files For Changes
 * ----------------------------------------------------------
 */
gulp.task('watch', function () {
  gulp.watch(['lint', 'scripts', 'styles']);
});

/*
 * ----------------------------------------------------------
 * Default Task
 * ----------------------------------------------------------
 */
gulp.task('default', ['lint', 'scripts', 'styles', 'purgecss-rejected', 'watch']);


function defaultTask(done) {
  // place code for your default task here
  done();
}