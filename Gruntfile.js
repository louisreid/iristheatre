/*global module:false*/

module.exports = function(grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            scss: {
                files: 'iristheatre-wp/wp-content/themes/iristheatre-2014/scss/**/*.scss',
                tasks: ['compass'],
            },
        },

        compass: {
            dist: {
              options: {
                sassDir: 'iristheatre-wp/wp-content/themes/iristheatre-2014/scss',
                cssDir: 'iristheatre-wp/wp-content/themes/iristheatre-2014/css'
              }
            }
        },


        browserSync: {
            dev: {
                bsFiles: {
                    src : ['*wp-content/themes/iristheatre-2014/**/*.css','wp-content/themes/iristheatre-2014/**/*.html','wp-content/themes/iristheatre-2014/**/*.php']
                },
                options: {
                    watchTask: true,
                    host: 'localhost'
                }
            }
        },

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-browser-sync');

    grunt.registerTask('default', ['browserSync','watch']);
};
