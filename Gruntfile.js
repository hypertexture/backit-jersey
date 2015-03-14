module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dev: {
                options: {
                    loadPath: [
                        'scss'
                    ],
                    style: 'expanded',
                    sourcemap: 'none',
                    noCache: true
                },
                files: {
                    'css/main.css': 'scss/main.scss'
                }
            }
        },

        watch: {
            sass: {
                files: [
                    'scss/*.scss'
                ],
                tasks: ['sass:dev'],
                options: {
                    spawn: false,
                    livereload: true
                }
            }

        }

    });



    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['watch']); // 'ctrl and c' to stop
    grunt.registerTask('css-dev', ['sass:dev']);



};