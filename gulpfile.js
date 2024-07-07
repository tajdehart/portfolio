import gulp from 'gulp';
import htmlmin from 'gulp-html-minifier-terser';
import terser from 'gulp-terser';
import phpmin from '@cedx/php-minifier';
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

/* Main compression task
   ========================================================================== */

/**
 * Replaces all injection strings with their respective files
 */

function fileReplace(pragma, path) {
    return replace(`${pragma}`, () => {
        return '' + fs.readFileSync(`${path}`, 'utf8');
    });
}

/**
 * Creates a new public folder if one doesn't already exist
 */

async function init() {
    if (!fs.existsSync('public')) {
        fs.mkdirSync('public');
    }
    return;
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
    return gulp
        .src('src/js/*') /*.pipe(terser())*/
        .pipe(gulp.dest('public/js'));
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

/**
 * Convert images to webp and moves them
 */

async function images() {
    return gulp
        .src('src/images/*', {encoding: false})
        .pipe(webp())
        .pipe(gulp.dest('public/images/'));
}

/**
 * Convert images to webp and moves them
 */

async function form() {
    return gulp.src('src/form/index.php').pipe(phpmin()).pipe(gulp.dest('public/form'));
}

/**
 * Moves static files to /public
 */

async function statics() {
    const paths = ['robots.txt', '.htaccess', 'zine', 'resume', 'fonts', 'videos'];
    paths.forEach((path) => {
        fs.cpSync(`src/${path}`, `public/${path}`, {recursive: true});
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
        init,
        svg,
        gulp.parallel(html, js, css, form, images, studies, statics),
        scrub
    )
);

/* Pull images/studies from crypt
   ========================================================================== */

/**
 * Pulls studies and converts all .jpg/.png references to webp
 */

async function pullStudies() {
    return gulp
        .src('/mnt/c/users/public/desktop/reference/freelance/portfolio/studies/*.md')
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
        .src('/mnt/c/users/public/desktop/reference/freelance/portfolio/images/*', {
            encoding: false,
        })
        .pipe(gulp.dest('src/images/'));
}

/**
 * Pulls svg and puts into symbols.svg
 */

async function pullSVG() {
    return gulp
        .src('/mnt/c/users/public/desktop/reference/freelance/portfolio/svg/*', {
            encoding: false,
        })
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
        .pipe(gulp.dest('src/svg/'));
}

/**
 * Pulls my resume .pdf and the climatique zine to webp
 */

async function pullResume() {
    return gulp
        .src('/mnt/c/users/public/desktop/reference/resume/exports/resume.pdf*', {
            encoding: false,
        })
        .pipe(gulp.dest('src/resume/'));
}

async function pullZine() {
    return gulp
        .src(
            '/mnt/c/users/public/desktop/reference/climatique/zine/exports/better-world.pdf*',
            {encoding: false}
        )
        .pipe(gulp.dest('src/zine/'));
}

gulp.task(
    'pull-wsl',
    gulp.series(pullStudies, pullImages, pullResume, pullZine, pullSVG)
);

gulp.task('pull-studies', pullStudies);
gulp.task('pull-images', pullImages);
gulp.task('pull-svg', pullSVG);

/* Get robots.txt from DarkVisitors
   ========================================================================== */

async function pullRobots() {
    const token = '7515ff20-f0c1-44bb-a1ce-10dbbfe472dc';

    const robotsJSON = await fetch('https://api.darkvisitors.com/robots-txts', {
        method: 'POST',
        headers: {
            Authorization: 'Bearer ' + token,
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            agent_types: [
                'AI Assistant',
                'AI Data Scraper',
                'AI Search Crawler',
                'Undocumented AI Agent',
            ],
            disallow: '/',
        }),
    });

    const robotsTXT = await robotsJSON.text();

    return fs.writeFile('src/robots.txt', robotsTXT, (err) => {
        if (err) {
            console.error(err);
        }
    });
}

gulp.task('pull-robots', pullRobots);
