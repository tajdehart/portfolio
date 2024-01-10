import gulp from 'gulp';
import htmlmin from 'gulp-html-minifier-terser';
import tap from 'gulp-tap';
import flatten from 'gulp-flatten';
import replace from 'gulp-replace';
import filter from 'gulp-filter';
import clean from 'gulp-clean';
import markdown from 'gulp-markdown';
import header from 'gulp-header';
import footer from 'gulp-footer';
import webp from 'gulp-webp';
import fs from 'fs';
import path from 'path';

/**
 * Replaces all injection strings with their respective files,
 * then minifies and pushes to /public
 */

async function markup() {
    const md = filter('src/studies/*.md');
    function getSlug(file) {
        return path.basename(file.path, '.html');
    }
    function getTitle(file) {
        let slug = getSlug(file);
        let words = slug.split('-');
        for (let i = 0; i < words.length; i++) {
            let word = words[i];
            words[i] = word.charAt(0).toUpperCase() + word.slice(1);
        }
        return words.join(' ');
    }
    function slugs(file) {
        file.contents = new Buffer(
            String(file.contents).replaceAll('%slug%', getSlug(file))
        );
    }
    function titles(file) {
        file.contents = new Buffer(
            String(file.contents).replaceAll('<!--title-->', getTitle(file))
        );
    }
    return gulp
        .src('src/index.html')
        .pipe(
            replace('/*index.css*/', () => {
                return `${fs.readFileSync('src/css/index.css', 'utf8')}`;
            })
        )
        .pipe(
            replace('/*index.js*/', () => {
                return `${fs.readFileSync('src/js/index.js', 'utf8')}`;
            })
        )
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                removeComments: true,
                minifyCSS: true,
                minifyJS: true,
            })
        )
        .pipe(header(fs.readFileSync('src/index.php', 'utf8')))
        .pipe(gulp.dest('public'))
        .pipe(gulp.src('src/studies/*.md'))
        .pipe(md)
        .pipe(markdown())
        .pipe(header(fs.readFileSync('src/studies/header.html', 'utf8')))
        .pipe(footer(fs.readFileSync('src/studies/footer.html', 'utf8')))
        .pipe(
            replace('/*studies.css*/', () => {
                return `${fs.readFileSync('src/css/studies.css', 'utf8')}`;
            })
        )
        .pipe(
            replace('/*studies.js*/', () => {
                return `${fs.readFileSync('src/js/studies.js', 'utf8')}`;
            })
        )
        .pipe(tap(titles))
        .pipe(tap(slugs))
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                removeComments: true,
                minifyCSS: true,
                minifyJS: true,
            })
        )
        .pipe(flatten())
        .pipe(gulp.dest('public/studies'));
}

/**
 * Moves static files to /public
 */

async function access() {
    return gulp.src('src/.htaccess').pipe(gulp.dest('public/'))
}

async function fonts() {
    return gulp.src('src/fonts/*').pipe(gulp.dest('public/fonts/'));
}

async function videos() {
    return gulp.src('src/videos/*').pipe(gulp.dest('public/videos'));
}

async function scrub() {
    return gulp.src(['public/*.js', 'public/*.css']).pipe(clean());
}

gulp.task('default', gulp.parallel(markup, videos, fonts, scrub, access));
