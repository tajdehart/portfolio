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
import symbols from 'gulp-svg-symbols';
import svgmin from 'gulp-svgmin';
import fs from 'fs';
import path from 'path';

/**
 * Replaces all injection strings with their respective files
 */

function fileReplace(replaceString, path) {
    return replace(`${replaceString}`, () => {
        return '' + fs.readFileSync(`${path}`, 'utf8');
    })
}

function fileCombine(replaceString, path1, path2) {
    return replace(`${replaceString}`, () => {
        return '' + fs.readFileSync(`${path2}`, 'utf8') + fs.readFileSync(`${path1}`, 'utf8');
    })
}

/**
 * Creates index.html
 */

async function index() {
    return gulp
        .src('src/index.html')
        .pipe(
            fileReplace('/*main.css*/','src/main.css')
        )
        .pipe(
            fileReplace('/*index.css*/','src/index.css')
        )
        .pipe(
            fileCombine('/*both.js*/','src/index.js','src/main.js')
        )
        .pipe(
            fileReplace('<!--symbols.svg-->','src/svg/svg-symbols.svg')
        )
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                removeComments: true,
                minifyCSS: true,
                minifyJS: true,
            })
        )
        .pipe(gulp.dest('public'))
}

/**
 * Creates studies folder
 */

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
            fileReplace('/*studies.css*/','src/studies/studies.css')
        )
        .pipe(
            fileReplace('/*index.css*/','src/index.css')
        )
        .pipe(
            fileCombine('/*both.js*/','src/index.js','src/studies/studies.js')
        )
        .pipe(
            fileReplace('<!--symbols.svg-->','src/svg/svg-symbols.svg')
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
    const files = ['robots.txt', '.htaccess'];
    files.forEach((file)=>{
        gulp.src(`src/${file}`).pipe(gulp.dest('public/'));
    });
    return
}

async function staticFolders() {
    const folders = ['zine', 'resume', 'fonts', 'videos', 'images'];
    folders.forEach((folder)=>{
        gulp.src(`src/${folder}/*`).pipe(gulp.dest(`public/${folder}/`));
    });
    return
}

/**
 * Cleans unneccessary files
 */

async function scrub() {
    return gulp.src(['public/*.js', 'public/*.css']).pipe(clean());
}

gulp.task('default', gulp.parallel(index, studies, scrub, staticFiles, staticFolders));


/* Pull images/studies from vault
   ========================================================================== */

/**
 * Pulls studies and converts all .jpg/.png references to webp
 */

async function pullStudies() {
    return gulp
        .src('/mnt/v/reference/freelance/portfolio/studies/*')
        .pipe(
            replace('.png', () => {
                return '.webp';
            })
        )
        .pipe(
            replace('.jpg', () => {
                return '.webp';
            })
        )
        .pipe(
            replace('.jpeg', () => {
                return '.webp';
            })
        )
        .pipe(gulp.dest('src/studies/'));
}

/**
 * Converts all images to webp
 */

async function pullImages() {
    return gulp
        .src('/mnt/v/reference/freelance/portfolio/images/*')
        .pipe(webp())
        .pipe(gulp.dest('src/images/'));
}

/**
 * Pulls svg and puts into symbols.svg 
 */

async function pullSVG() {
    return gulp.src('/mnt/v/reference/freelance/portfolio/svg/*')
    .pipe(svgmin({
        full: true,
        plugins: [
            'removeStyleElement',
            {
            name: "removeViewBox",
            active: false,
            },
            {
            name: 'removeAttrs',
            params: {
                attrs: ['path:style','path:id','path:class'],
                elemSeparator: ":",
            }
        },
        ]
    }))
    .pipe(symbols())
    .pipe(gulp.dest('src/svg/'))
}

/**
 * Pulls my resume .pdf and the climatique zine to webp 
 */

async function pullResume() {
    return gulp.src('/mnt/v/reference/resume/exports/resume.pdf*').pipe(gulp.dest('src/resume/'))
}

async function pullZine() {
    return gulp.src('/mnt/v/reference/climatique/zine/exports/better-world.pdf*').pipe(gulp.dest('src/zine/'))
}

gulp.task('pull-wsl', gulp.series(pullStudies, pullImages, pullResume, pullZine, pullSVG))
gulp.task('pull-studies', pullStudies);
gulp.task('pull-images', pullImages);
gulp.task('pull-svg', pullSVG);