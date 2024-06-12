import gulp from 'gulp';
import htmlmin from 'gulp-html-minifier-terser';
import terser from 'gulp-terser';
import cssnano from 'gulp-cssnano';
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
import frontMatter from 'gulp-front-matter';

/**
 * Replaces all injection strings with their respective files
 */

function fileReplace(pragma, path) {
    return replace(`${pragma}`, () => {
        return '' + fs.readFileSync(`${path}`, 'utf8');
    });
}

/**
 * Creates index.html
 */

async function html() {
    return gulp
        .src('src/*.html')
        .pipe(fileReplace('<!--symbols.svg-->', 'src/svg-symbols.svg'))
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                removeComments: true,
                minifyCSS: true,
                minifyJS: true,
            })
        )
        .pipe(gulp.dest('public'));
}

/**
 * Compress css
 */

async function css() {
    return gulp.src('src/css/*').pipe(cssnano()).pipe(gulp.dest('public/css'));
}

/**
 * Compress css
 */

async function js() {
    return gulp.src('src/js/*').pipe(terser()).pipe(gulp.dest('public/js'));
}

/**
 * Creates studies folder
 */

async function studies() {
    function hero(file) {
        file.contents = Buffer.from(
            String(file.contents).replaceAll('%hero%', file.frontMatter.hero)
        );
    }
    function title(file) {
        file.contents = Buffer.from(
            String(file.contents).replaceAll('<!--title-->', file.frontMatter.title)
        );
    }
    function description(file) {
        file.contents = Buffer.from(
            String(file.contents).replaceAll(
                '%description%',
                file.frontMatter.description
            )
        );
    }
    return gulp
        .src('src/studies/*.md')
        .pipe(
            frontMatter({
                property: 'frontMatter',
                remove: true,
            })
        )
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
        .pipe(markdown())
        .pipe(header(fs.readFileSync('src/studies/header.html', 'utf8')))
        .pipe(footer(fs.readFileSync('src/studies/footer.html', 'utf8')))
        .pipe(fileReplace('<!--symbols.svg-->', 'src/svg-symbols.svg'))
        .pipe(tap(title))
        .pipe(tap(hero))
        .pipe(tap(description))
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
 * Creates symbol sheet from svg source
 */
async function svg() {
    return gulp
        .src('src/svg/*.svg')
        .pipe(
            svgmin({
                full: true,
                plugins: [
                    'removeStyleElement',
                    {
                        name: 'removeViewBox',
                        active: false,
                    },
                    {
                        name: 'removeAttrs',
                        params: {
                            attrs: ['path:style', 'path:id', 'path:class'],
                            elemSeparator: ':',
                        },
                    },
                ],
            })
        )
        .pipe(symbols())
        .pipe(gulp.dest('src/'));
}

async function images() {
    return gulp.src('src/images/*').pipe(webp()).pipe(gulp.dest('public/images/'));
}

/**
 * Moves static files to /public
 */

async function staticFiles() {
    const files = ['robots.txt', '.htaccess'];
    files.forEach((file) => {
        gulp.src(`src/${file}`).pipe(gulp.dest('public/'));
    });
    return;
}

async function staticFolders() {
    const folders = ['zine', 'resume', 'fonts', 'videos'];
    folders.forEach((folder) => {
        gulp.src(`src/${folder}/*`).pipe(gulp.dest(`public/${folder}/`));
    });
    return;
}

/**
 * Cleans unneccessary files
 */

async function scrub() {
    return gulp
        .src(['public/*.js', 'public/*.css', 'src/svg-symbols.css'])
        .pipe(clean());
}

gulp.task(
    'default',
    gulp.series(
        svg,
        gulp.parallel(html, js, css, images, studies, scrub, staticFiles, staticFolders)
    )
);