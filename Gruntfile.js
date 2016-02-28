
module.exports = function(grunt) {

    grunt.initConfig({
        watch: {    
            php: {
                files: [
                    '**/*.php'
                ],
                options: {
                    livereload: true,
                }
            },
            js: {
                files: [
                    'js/*.js'
                ],
                tasks: [
                    'jshint'
                ],
                options: {
                    livereload: true,
                }
            },
            less: {
                files: [
                    'less/**/*.less'
                ],
                tasks: [
                    'less:dev'
                ],
                options: {
                    livereload: true
                }
            }
        },
        jshint: {
            all: [
                "Gruntfile.js",
                "js/*.js"
            ],
            options: {
                jshintrc: ".jshintrc",
            }
        },
        clean: {
            build: "build",
            languages: "build/languages/*.po",
            temp: "build/temp",
            js: ["build/js/*.js", "!build/js/build.js"]
        },
        copy: {
            main: {
                expand: true,
                src: [
                    "**", 
                    "!bower_components/**",
                    "!less/**",
                    "!node_modules/**",
                    "!.ftppass",
                    "!.gitignore",
                    "!.jshintrc",
                    "!bower.json",
                    "!Gruntfile.js",
                    "!package.json"
                ],
                dest: "build/"
            }
        },
        less: {
            dev: {
                files: {
                    "css/style.css": "less/style.less"
                }
            },
            build: {
                options: {
                    compress: true
                },
                files: {
                    "build/css/style.css": "less/style.less"
                }
            }
        },
        useref: {
            html: 'build/templates/footer.tpl.php',
            temp: 'build/temp'
        }, 
        concat: {
            dist: {
                src: [
                    'bower_components/jquery/dist/jquery.min.js',
                    'js/modernizr-2.8.3.min.js',
                    'bower_components/slick.js/slick/slick.min.js',
                    'bower_components/prefixfree/prefixfree.min.js',
                    'js/jquery.easing.1.3.js',
                    'bower_components/skrollr/dist/skrollr.min.js',
                    'bower_components/bootstrap/js/affix.js',
                    'bower_components/bootstrap/js/alert.js',
                    'bower_components/bootstrap/js/button.js',
                    'bower_components/bootstrap/js/carousel.js',
                    'bower_components/bootstrap/js/collapse.js',
                    'bower_components/bootstrap/js/dropdown.js',
                    'bower_components/bootstrap/js/modal.js',
                    'bower_components/bootstrap/js/tooltip.js',
                    'bower_components/bootstrap/js/popover.js',
                    'bower_components/bootstrap/js/scrollspy.js',
                    'bower_components/bootstrap/js/tab.js',
                    'bower_components/bootstrap/js/transition.js',
                    'bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js',
                    'bower_components/adapt-img/adapt-img.js',
                    'form/placeholder.js',
                    'form/validation.js',
                    'js/script.js'
                ],
                dest: 'build/js/build.js'
            }
        },
        uglify: {
            files: {
                expand: true, 
                src: "build/js/build.js"
            }
        },
        'ftp-deploy': {
            build: {
                auth: {
                  host: "",
                  port: 21,
                  authKey: "key1"
                },
                src: "build/",
                dest: "",
                forceVerbose: true
            }
        }
    });

    grunt.loadNpmTasks("grunt-contrib-clean");
    grunt.loadNpmTasks("grunt-contrib-concat");
    grunt.loadNpmTasks("grunt-contrib-copy");
    grunt.loadNpmTasks("grunt-contrib-jshint");
    grunt.loadNpmTasks("grunt-contrib-less");
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-ftp-deploy");
    grunt.loadNpmTasks("grunt-useref");

    grunt.registerTask("default", [
        "watch"
    ]);

    grunt.registerTask("build", [
        "clean:build", 
        "copy", 
        "less",
        "useref",
        "concat",
        "uglify",
        "clean:temp",
        "clean:js",
        "clean:languages", 
        "ftp-deploy", 
        "clean:build"
    ]);

};