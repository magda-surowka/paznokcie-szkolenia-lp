var gulp = require("gulp");
var browserSync = require("browser-sync");
var less = require("gulp-less");
var sourcemaps = require("gulp-sourcemaps");
var autoprefixer = require("gulp-autoprefixer");
var cleanCSS = require("gulp-clean-css");

var config = {
  phpIn: "./**/*.php",
  lessDir: "./library/custom//**/*.less",
  lessIn: "./library/custom/style.less",
  lessOut: "./css/",
  lessPanelDir: "./dist-panel-klienta/less//**/*.less",
  lessPanelIn: "./dist-panel-klienta/less/style-panel-klienta.less",
  lessPanelOut: "./css/",
  sourcemapOut: "./maps/",
  cssIn: "./css/**/*.css",
  cssOut: "./css/",
  cssOutName: "style.css",
  localhostIn: "http://localhost/malwina-chalat",
};

gulp.task("reload", function () {
  browserSync.reload();
});

gulp.task("serve", ["less", "less-panel-klienta"], function () {
  browserSync({
    notify: false,
    proxy: config.localhostIn,
  });

  gulp.watch([config.phpIn], ["reload"]);
  gulp.watch(config.lessDir, ["less"]);
  gulp.watch(config.lessPanelDir, ["less-panel-klienta"]);
});

gulp.task("default", ["serve"]);

gulp.task("less", function () {
  gulp
    .src(config.lessIn)
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(
      autoprefixer({
        browsers: ["last 3 versions"],
      })
    )
    .pipe(cleanCSS({ compatibility: "ie8", level: 2, advanced: false }))
    .pipe(sourcemaps.write(config.sourcemapOut))
    .pipe(gulp.dest(config.lessOut))
    .pipe(browserSync.stream());
});

gulp.task("less-panel-klienta", function () {
  gulp
    .src(config.lessPanelIn)
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(
      autoprefixer({
        cascade: false,
        browsers: ["last 3 versions"],
      })
    )
    .pipe(cleanCSS({ compatibility: "ie8", level: 2, advanced: false }))
    .pipe(sourcemaps.write(config.sourcemapOut))
    .pipe(gulp.dest(config.lessPanelOut))
    .pipe(browserSync.stream());
});
