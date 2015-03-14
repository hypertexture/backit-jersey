module.exports = function(grunt) {

    // because why not
    "use strict";

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),

        devUpdate: {
            main: {
                options: {
                    reportUpdated: false,
                    updateType: "prompt",
                    semver: false
                }
            }
        },

        concat: {
            dist: {
                src: [
                    'js/plugins.js', // This specific file
                    'js/scripts.js'  // This specific file
                ],
                dest: 'js/production.js',
            }
        },

        jshint: {
            beforeconcat: ['js/scripts.js'],
        },

        uglify: {
            global: {
                files: {
                    "js/production.min.js": "js/production.js"
                }
            }
        },

        sass: {
            global: {
                options: {
                    style: "compressed",
                    precision: 10
                },
                files: {
                    "css/main-unprefixed.css": "scss/main.scss"   
                }
            }
        },

        autoprefixer: {
            global: {
                src: "css/main-unprefixed.css",
                dest: "css/main.css"
            }
        },

        watch: {
            options: {
                spawn: false
            },
            js: {
                files: ["js/*.js"],
                tasks: ["jshint", "concat", "uglify"]
            },
            css: {
                files: ["scss/**/*.scss"],
                tasks: ["sass", "autoprefixer"]
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    require("load-grunt-tasks")(grunt);

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask("default", ["sass", "autoprefixer", "watch"]);

};
