'use strict';


// loading libraries
const   gulp = require('gulp'),
     plumber = require('gulp-plumber'),
         log = require('fancy-log'),
  sourcemaps = require('gulp-sourcemaps'),
        scss = require('gulp-scss'),
         ftp = require('vinyl-ftp'),
autoprefixer = require('gulp-autoprefixer');


// server data
const server = {
        host:     'envatode.ftp.tools',
        user:     'envatode_test',
        password: 'test',
        parallel: 10,
        log:      log
    };


// main launcher tasks
exports.default  = gulp.series(watcher);


// ftp uploader
function deploy(cb) {
    let conn = ftp.create(server);
    gulp.src( ['./scss/theme.css','./scss/theme.css.map'], { base: '.', buffer: false } )
        .pipe(conn.newer('/'))
        .pipe(conn.dest('/'))
        .on('finish', function() {
            cb();
        });
}


// main watcher
function watcher(cb){
    gulp.watch(['./scss/theme.scss','./scss/inc/*.scss'],
        { ignoreInitial: false, delay: 100 },
        gulp.series(sassCompiler, deploy)
    );
}


// scss compiler
function sassCompiler(cb) {
    gulp.src('./scss/theme.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(scss())
        .pipe(autoprefixer({
            browsers: [ 'last 3 versions', 'ie >= 10' ],
            cascade: false
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(function(file) {
            return file.base;
        }))
        .on('finish', function() {
            cb();
        });
}