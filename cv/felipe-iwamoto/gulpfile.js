let gulp = require("gulp");
let gulpSass = require("gulp-sass");

// Start: felipe-iwamoto
(() => {
    let sass = () => {
        return gulp.src("./scss/**/*.scss")
            .pipe(gulpSass())
            .pipe(gulp.dest("./css"));
    }
    
    gulp.task("sass", () => {
        gulp.watch("./scss/**/*.scss", sass);
    });
})();
// Start: felipe-iwamoto