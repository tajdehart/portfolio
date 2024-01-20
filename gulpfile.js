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
            replace('/*main.css*/', () => {
                return `${fs.readFileSync('src/styles/main.css', 'utf8')}`;
            })
        )
        .pipe(
            replace('/*index.js*/', () => {
                return `${fs.readFileSync('src/scripts/index.js', 'utf8')}`;
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
                return `${fs.readFileSync('src/scripts/studies.css', 'utf8')}`;
            })
        )
        .pipe(
            replace('/*studies.js*/', () => {
                return `${fs.readFileSync('src/scripts/studies.js', 'utf8')}`;
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

async function php() {
    return gulp.src('src/index.php').pipe(gulp.dest('public/'))
}

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

/**
 * Converts all images to .webp
 */

async function images() {
    return gulp.src('src/images/*').pipe(webp()).pipe(gulp.dest('public/images/'));
}

gulp.task('default', gulp.series(images, gulp.parallel(markup, videos, fonts, scrub, access, php)));

/*
 * Pull updates to case studies from public desktop
 */

async function pushStudies() {
    return gulp.src('/mnt/c/users/public/desktop/reference/freelance/portfolio/studies/*.md').pipe(gulp.dest('src/studies/'))
}

async function pushImages() {
    return gulp.src('/mnt/c/users/public/desktop/reference/freelance/portfolio/images/*').pipe(gulp.dest('src/images/'))
}

gulp.task('push-wsl', gulp.series(pushStudies, pushImages))