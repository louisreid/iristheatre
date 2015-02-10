/*global module:false*/

module.exports = function(grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            scss: {
                files: 'iristheatre-wp/wp-content/themes/iristheatre-2015/scss/**/*.scss',
                tasks: ['sass'],
            },
        },

        sass: {
            dev: {
                files: {
                    'iristheatre-wp/wp-content/themes/iristheatre-2015/css/main.css':'iristheatre-wp/wp-content/themes/iristheatre-2015/scss/main.scss',
                    'iristheatre-wp/wp-content/themes/iristheatre-2015/css/main-ie8.css':'iristheatre-wp/wp-content/themes/iristheatre-2015/scss/main-ie8.scss'
                }
            }
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src : ['*wp-content/themes/iristheatre-2015/**/*.css','wp-content/themes/iristheatre-2015/**/*.html','wp-content/themes/iristheatre-2015/**/*.php']
                },
                options: {
                    watchTask: true,
                    host: 'localhost'
                }
            }
        },

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-browser-sync');

    grunt.registerTask('default', ['browserSync','watch']);
    grunt.registerTask('compile', ['sass']);
};
