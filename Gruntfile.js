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

        /*concat: {
            dist: {
                src: [
                    'js/plugins.js', // This specific file
                    'js/scripts.js'  // This specific file
                ],
                dest: 'js/build/production.js',
            }
        },

        jshint: {
            beforeconcat: ['js/scripts.js'],
        },

        uglify: {
            global: {
                files: {
                    "js/build/production.min.js": "js/build/production.js"
                }
            }
        },*/

        // Grunt-sass 
        sass: {
          app: {
            // Takes every file that ends with .scss from the scss 
            // directory and compile them into the css directory. 
            // Also changes the extension from .scss into .css. 
            // Note: file name that begins with _ are ignored automatically
            files: [{
              expand: true,
              cwd: 'scss',
              src: ['*.scss'],
              dest: 'css',
              ext: '.css'
            }]
          },
          options: {
            sourceMap: true, 
            outputStyle: 'nested', 
            imagePath: "../",
          },
          global: {
                options: {
                    style: "compressed",
                    precision: 10
                },
                files: {
                    "css/style-unprefixed.css": "scss/style.scss" 
                }
            }
        },

        autoprefixer: {
            global: {
                src: "css/style-unprefixed.css",
                dest: "css/style.css"
            }
        },

        watch: {
            options: {
                spawn: false
            },
            css: {
                files: ["scss/**/*.scss"],
                tasks: ["sass", "autoprefixer"]
            }
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'css/style.css',
                        'scss/**/*.scss',
                        'js/*.js',
                        '*.php',
                        '*.html',
                        'img/**/.{png,jpg,gif,svg}'
                    ]
                },
                options: {
                    watchTask: true, // < VERY important
                    proxy: "backit.je.dev"
                }
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    require("load-grunt-tasks")(grunt);

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask("default", ["sass", "autoprefixer", "browserSync", "watch"]);

};
