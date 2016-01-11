var gulp = require('gulp'),
    less = require('gulp-less'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    cssmin = require('gulp-cssmin'),
    browserify = require('browserify'),
    debowerify = require('debowerify'),
    babel = require('babelify'),
    reactify = require('reactify'),
    duration = require('gulp-duration'),
    source = require('vinyl-source-stream'),
    buffer = require('vinyl-buffer'),
    replace = require('gulp-replace'),
    watchify = require('watchify'),
    pwd = process.env.PWD + '/'
    node_modules_alias = '/node_modules/';


gulp.task('site-copy-fonts', function() {
    gulp.src('bower_components/fontawesome/fonts/*')
        .pipe(gulp.dest('web/fonts/'));
});

gulp.task('site-copy-scripts', function() {
    gulp.src('src/Site/Webroot/Scripts/*')
        .pipe(gulp.dest('web/scripts/'));
});

/*
gulp.task('pdf-design', function() {
    gulp.src([
        'src/Site/Webroot/Styles/less/pdf.less'
    ])
        .pipe(less())
        .pipe(concat('pdf.css'))
        .pipe(cssmin())
        .pipe(gulp.dest('public/styles/'));
});
*/

gulp.task('site-design', function() {
    gulp.src([

        'bower_components/bootstrap-sortable/Contents/bootstrap-sortable.css',
        'bower_components/jquery.ui/themes/base/jquery.ui.core.css',
        'bower_components/jquery.ui/themes/base/jquery.ui.theme.css',
        'bower_components/jquery.ui/themes/base/jquery.ui.slider.css',

      //  'bower_components/bootstrap/less/pagination.css',

        'src/Webroot/Styles/font-awesome.min.css',
        'bower_components/bootstrap/dist/css/bootstrap.min.css',

      //  'src/Webroot/Styles/less/site.less',

    //    'node_modules/datatables.net-bs/css/dataTables.bootstrap.css',

      //  'src/Webroot/Styles/main.css'
    ])
        .pipe(less())
        .pipe(concat('style.css'))
     //   .pipe(cssmin())
        .pipe(gulp.dest('web/styles/'));
});

gulp.task('site-scripts', function() {
    gulp.src([
        // jQuery
        'bower_components/jquery/jquery.js',
        //'src/Webroot/Scripts/jquery.easing.min.js',
        //'src/Webroot/Scripts/jquery.lazyloadxt.extra.min.js',
        'node_modules/datatables.net/js/jquery.dataTables.js',
        'node_modules/datatables.net-bs/js/dataTables.bootstrap.js',
      //      'src/Webroot/Scripts/natural.js',
        // IE Shim
        'bower_components/augment.js/augment.js',

        // jQuery UI

        'bower_components/jquery.ui/ui/jquery.ui.core.js',
        'bower_components/jquery.ui/ui/jquery.ui.widget.js',
        'bower_components/jquery.ui/ui/jquery.ui.mouse.js',
        'bower_components/jquery.ui/ui/jquery.ui.slider.js',
        'bower_components/jquery.ui/ui/jquery.ui.position.js',

        'bower_components/momentjs/moment.js',
        'bower_components/momentjs/lang/nl.js',
        // Bootstrap Sortable

        //'bower_components/bootstrap-sortable/Scripts/bootstrap-sortable.js',
        // Bootstrap
        'bower_components/bootstrap/js/transition.js',
        'bower_components/bootstrap/js/button.js',
        'bower_components/bootstrap/js/collapse.js',
        'bower_components/bootstrap/js/modal.js',
        'bower_components/bootstrap/js/dropdown.js',
        'bower_components/bootstrap/js/carousel.js',

        // see line 84
        'bower_components/bootstrap/js/tooltip.js',
        'bower_components/bootstrap/js/tab.js',

        // lurn
        'bower_components/lunr.js/lunr.js',

            'src/Webroot/Scripts/custom.js'



    ])
        .pipe(concat('scripts.js'))
      //  .pipe(uglify())
        .pipe(gulp.dest('web/scripts/'));
});
/*
gulp.task('site-google-maps', function () {
    var bundler = watchify(browserify('./src/Webroot/Assets/search/index.js', watchify.args).transform(babel));
    bundler.transform(reactify);
    bundler.transform(debowerify);

    bundler.on('update', bundle);

    function bundle() {
        console.log('Bundling app.js');
        var bundleTime = duration('bundling');
        var totalTime = duration('total');
        return bundler.bundle()
            .pipe(source('search-map.js'))
            .pipe(bundleTime)
            .pipe(buffer())
            .pipe(uglify())
            .pipe(replace(pwd, '/'))
            .pipe(replace('/node_modules/', node_modules_alias))
            .pipe(totalTime)
            .pipe(gulp.dest('./public/scripts/'));
    }

    return bundle();
});
 */
// The default task (called when you run `gulp` from cli)
gulp.task('default', [
  //  'pdf-design',
    'site-design',
    'site-scripts',
    'site-copy-fonts'
    //'site-google-maps'
]);

