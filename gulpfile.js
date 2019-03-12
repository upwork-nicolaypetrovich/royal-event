'use strict';


// loading libraries
const   gulp = require('gulp'),
     plumber = require('gulp-plumber'),
         log = require('fancy-log'),
  sourcemaps = require('gulp-sourcemaps'),
        sass = require('gulp-sass'),
         ftp = require('vinyl-ftp'),
autoprefixer = require('gulp-autoprefixer');


// loading compiler
sass.compiler = require('node-sass');


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
    gulp.src( ['./sass/theme.css','./sass/theme.css.map'], { base: '.', buffer: false } )
        .pipe(conn.newer('/'))
        .pipe(conn.dest('/'))
        .on('finish', function() {
            cb();
        });
}


// main watcher
function watcher(cb){
    gulp.watch(['./sass/theme.sass','./sass/inc/*.sass'],
        { ignoreInitial: false, delay: 100 },
        gulp.series(sassCompiler, deploy)
    );
}


// sass compiler
function sassCompiler(cb) {
    gulp.src('./sass/theme.sass')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
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