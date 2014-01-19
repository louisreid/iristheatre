/*global module:false*/

module.exports = function(grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            scss: {
                files: 'iristheatre-flat/scss/**/*.scss',
                tasks: ['compass'],
            },
        },

        compass: {
            dist: {
              options: {
                sassDir: 'iristheatre-flat/scss',
                cssDir: 'iristheatre-flat/css'
              }
            }
        },


        browser_sync: {
            dev: {
                bsFiles: {
                    src : ['**/*.css','**/*.html']
                },
                options: {
                    watchTask: true,
                    server: {
                        baseDir: "iristheatre-flat"
                    }
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-browser-sync');

    grunt.registerTask('default', ['browser_sync','watch']);
};
