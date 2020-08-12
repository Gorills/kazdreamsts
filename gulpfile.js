var gulp      = require('gulp'), // Подключаем Gulp
    sass        = require('gulp-sass'), //Подключаем Sass пакет,
    browserSync = require('browser-sync'); // Подключаем Browser Sync

gulp.task('scss', function(){ // Создаем таск Sass
    return gulp.src('scss/**/*.scss') // Берем источник
        .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(gulp.dest('css')) // Выгружаем результата в папку app/css
        .pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browserSync
        server: { // Определяем параметры сервера
            proxy: "https://localhost/project/kazdreamsts/"
        },
        notify: false // Отключаем уведомления
    });
});

gulp.task('watch', function() {
    gulp.watch('scss/**/*.scss', gulp.parallel('scss')); // Наблюдение за sass файлами
});
gulp.task('default', gulp.parallel('scss', 'browser-sync', 'watch'));
	