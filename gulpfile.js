import gulp from 'gulp';
import htmlmin from 'gulp-html-minifier-terser';
import tap from 'gulp-tap';
import flatten from 'gulp-flatten';
import replace from 'gulp-replace';
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

async function index() {
    return gulp
        .src('src/index.html')
        .pipe(
            replace('/*main.css*/', () => {
                return `${fs.readFileSync('src/main.css', 'utf8')}`;
            })
        )
        .pipe(
            replace('/*index.js*/', () => {
                return `${fs.readFileSync('src/index.js', 'utf8')}`;
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
}

async function studies() {  
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
        file.contents = Buffer.from(
            String(file.contents).replaceAll('%slug%', getSlug(file))
        );
    }
    function titles(file) {
        file.contents = Buffer.from(
            String(file.contents).replaceAll('<!--title-->', getTitle(file))
        );
    }
    return gulp
        .src('src/studies/*.md')
        .pipe(markdown())
        .pipe(header(fs.readFileSync('src/studies/header.html', 'utf8')))
        .pipe(footer(fs.readFileSync('src/studies/footer.html', 'utf8')))
        .pipe(
            replace('/*studies.css*/', () => {
                return `${fs.readFileSync('src/studies/studies.css', 'utf8')}`;
            })
        )
        .pipe(
            replace('/*studies.js*/', () => {
                return `${fs.readFileSync('src/studies/studies.js', 'utf8')}`;
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

async function staticFiles() {
    const files = ['index.php', '.htaccess'];
    files.forEach((file)=>{
        gulp.src(`src/${file}`).pipe(gulp.dest('public/'));
    });
    return
}

async function staticFolders() {
    const folders = ['zine', 'resume', 'fonts', 'videos',];
    folders.forEach((folder)=>{
        gulp.src(`src/${folder}/*`).pipe(gulp.dest(`public/${folder}/`));
    });
    return
}

/**
 * Converts all images to .webp
 */

async function images() {
    return gulp.src('src/images/*').pipe(webp()).pipe(gulp.dest('public/images/'));
}

/**
 * Cleans unneccessary files
 */

async function scrub() {
    return gulp.src(['public/*.js', 'public/*.css']).pipe(clean());
}

gulp.task('default', gulp.series(images, gulp.parallel(index, studies, scrub, staticFiles, staticFolders)));

/*
 * Pull updates to case studies from public desktop
 */

async function pullStudies() {
    return gulp.src('/mnt/c/users/public/desktop/reference/freelance/portfolio/studies/*.md').pipe(gulp.dest('src/studies/'))
}

async function pullImages() {
    return gulp.src('/mnt/c/users/public/desktop/reference/freelance/portfolio/images/*').pipe(gulp.dest('src/images/'))
}

async function pullResume() {
    return gulp.src('/mnt/c/users/public/desktop/reference/resume/exports/resume.pdf*').pipe(gulp.dest('src/resume/'))
}

async function pullZine() {
    return gulp.src('/mnt/c/users/public/desktop/reference/climatique/zine/exports/better-world.pdf*').pipe(gulp.dest('src/zine/'))
}

gulp.task('pull-wsl', gulp.series(pullStudies, pullImages, pullResume, pullZine))