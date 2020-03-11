const gulp = require('gulp'),
	sass = require('gulp-sass'),
	browserSync = require('browser-sync'),
	concat = require('gulp-concat'),
	cleancss = require('gulp-clean-css'),
	autoprefixer = require('gulp-autoprefixer'),
	webp = require('gulp-webp'),
	clone = require('gulp-clone'),
	clonesink = clone.sink(),
	newer = require('gulp-newer'),
	rename = require('gulp-rename'),
	imagemin = require('gulp-imagemin'),
	notify = require('gulp-notify'),
	debug = require('gulp-debug'),
	del = require('del'),
	webpack = require('webpack-stream');

const isDev = process.env.NODE_ENV == 'development';

const webpackConfig = {
	output: {
		filename: 'scripts.min.js'
	},
	module: {
			rules: [{
				test: /\.js$/,
				loader: 'babel-loader',
				exclude: '/node_modules/'
			}]
	},
	mode: isDev ? 'development' : 'production',
	devtool: isDev ? 'source-map' : 'none',
	optimization: {
		minimize: !isDev
	}
};

const bsReload = (done => {
	browserSync.reload();
	done();
});

// Local Server
gulp.task('browser-sync', () => {
	browserSync({
		server: {
			baseDir: 'src'
		},
		notify: false,
		// online: false, // Work offline without internet connection
		//tunnel: true, tunnel: 'webpack-starter', // Demonstration page: http://projectname.localtunnel.me
	})
});



// Styles
gulp.task('styles:page', () => {
	return gulp.src(['src/sass/page/**/*.sass', 'src/scss/page/**/*.scss'])
		.pipe(sass({
			outputStyle: 'expanded',
			includePaths: [__dirname + '/node_modules']
		}))
		.on('error', notify.onError((err) => {
			return {
				title: 'Styles',
				message: err.message
			}
		}))
		.pipe(concat('styles.css'))
		.pipe(autoprefixer({
			grid: true,
			overrideBrowserslist: ['last 10 versions']
		}))
		.pipe(cleancss({
			level: {
				1: {
					specialComments: 0
				}
			}
		})) // Optional. Comment out when debugging
		.pipe(gulp.dest('src'))
		.pipe(browserSync.stream())
});

gulp.task('styles:template', () => {
	return gulp.src(['src/sass/template/**/*.sass', 'src/scss/template/**/*.scss'])
		.pipe(sass({
			outputStyle: 'expanded',
			includePaths: [__dirname + '/node_modules']
		}))
		.on('error', notify.onError((err) => {
			return {
				title: 'Styles',
				message: err.message
			}
		}))
		.pipe(concat('template_styles.css'))
		.pipe(autoprefixer({
			grid: true,
			overrideBrowserslist: ['last 10 versions']
		}))
		.pipe(cleancss({
			level: {
				1: {
					specialComments: 0
				}
			}
		})) // Optional. Comment out when debugging
		.pipe(gulp.dest('src'))
		.pipe(browserSync.stream())
});

// Scripts
gulp.task('scripts', () => {
	return gulp.src('src/js/index.js')
		.pipe(webpack(webpackConfig))
		.pipe(debug({
			title: 'webpack'
		}))
		.pipe(gulp.dest('src/js'))
		.pipe(browserSync.reload({
			stream: true
		}))
});

// Images
gulp.task('images', async () => {
	return gulp.src('src/img/_src/**/*.{png,jpg,jpeg,webp,raw,svg,gif}')
		.pipe(imagemin([
	    imagemin.gifsicle({interlaced: true}),
	    imagemin.mozjpeg({quality: 75, progressive: true}),
	    imagemin.optipng({optimizationLevel: 5}),
	    imagemin.svgo({
	        plugins: [
	            {removeViewBox: true},
	            {cleanupIDs: false}
	        ]
	    })
    ]))
		.pipe(newer('src/img'))
		.pipe(rename((path => path.extname = path.extname.replace('jpeg', 'jpg'))))
		.pipe(clonesink) // start stream
		.pipe(webp()) // convert images to webp and save a copy of the original format
		.pipe(clonesink.tap()) // close stream
		
		.pipe(gulp.dest('src/img'))
});

gulp.task('img', gulp.series('images', bsReload));

// Clean IMG's
gulp.task('cleanimg', () => {
	return del(['src/img/**/*', '!src/img/_src', '!src/img/favicon.*'], {
		force: true
	})
});

// Code & Reload
gulp.task('code', () => {
	return gulp.src('src/**/*.html')
		.pipe(browserSync.reload({
			stream: true
		}))
});

// Watch
gulp.task('watch', () => {
	gulp.watch(['src/sass/page/**/*.sass', 'src/scss/page/**/*.scss'], gulp.parallel('styles:page'));
	gulp.watch(['src/sass/template/**/*.sass', 'src/scss/template/**/*.scss'], gulp.parallel('styles:template'));
	gulp.watch(['src/js/*.js', '!src/js/scripts.min.js'], gulp.parallel('scripts'));
	gulp.watch('src/*.html', gulp.parallel('code'));
	gulp.watch('src/img/_src/**/*', gulp.parallel('img'));
});


gulp.task('build', gulp.parallel('scripts'))

gulp.task('default', gulp.parallel('img', 'styles:page', 'styles:template', 'scripts', 'browser-sync', 'watch'));