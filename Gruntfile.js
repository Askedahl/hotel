module.exports = function (grunt) {
    require('jit-grunt')(grunt);


    grunt.initConfig({
        path: './wp-content/themes/boilerplate',


        // Uglify
        uglify: {
            options: {
                mangle: true
            },
            my_target: {
                files: {
                    '<%= path %>/theme.js': ['<%= path %>/theme.js']
                }
            }
        },

        // concat
        concat: {
            js: {
            options: {
                separator: ';\n',
            },
            src: [
                '<%= path %>/js/main.js',
                '<%= path %>/template-parts/blocks/*/*.js'
            ],
            dest: '<%= path %>/theme.js',
            },    
        },        


        //SASS builder
        sass: {
            build: {
                options: {
                    outputStyle: 'compressed',
                    sourcemap: false
                },
                files: {
                    '<%= path %>/style.css': '<%= path %>/sass/styles.scss',
                    '<%= path %>/style-editor.css': '<%= path %>/sass/_blocks.scss'
                }
            }
        },

        //sass autoprefixer
        autoprefixer: {
            options: {
                browsers: ['last 2 version', 'safari 6', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'],
            },
            dist: {
                files: {
                    '<%= path %>/style.css': '<%= path %>/style.css'
                }
            }
        },


        // Watcher
        watch: {
            options: {
                livereload: true,
            },
            scripts: {
                files: [
                    '<%= path %>/js/main.js',
                    '<%= path %>/template-parts/blocks/*/*.js'
                ],
                tasks: ['concat:js', 'uglify'],
            },
            sass: {
                files: [
                    '<%= path %>/template-parts/blocks/**.scss',
                    '<%= path %>/template-parts/blocks/*/**.scss',
                    '<%= path %>/template-parts/components/**.scss',
                    '<%= path %>/template-parts/components/*/**.scss',
                    '<%= path %>/sass/*.scss', 
                    '<%= path %>/sass/*/*.scss', 
                ],
                tasks: ['sass:build', 'autoprefixer']
            },
        },

        
    }); // initConfig close


    grunt.registerTask('default', ['dev']);
    grunt.registerTask('build', ['concat', 'uglify', 'sass:build', 'autoprefixer']);

    grunt.registerTask('dev', [
        'build',
        'watch' // Any other watch tasks you want to run
    ]);

};