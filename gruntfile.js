module.exports = function (grunt) {
    grunt.initConfig({
        concat: {
            options: {
                sourceMap: true
            },
            dist: {
                src: [
                    'bower_components/jquery/dist/jquery.js',
                    'bower_components/sharrre/jquery.sharrre.js',
                    'bower_components/instafeed.js/instafeed.js'

                ],
                dest: 'js/scripts.min.js'
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    loadPath: [
                    ]
                },
                files: [{
                    expand: true,
                    cwd: 'sass',
                    src: ['*.scss'],
                    dest: 'css',
                    ext: '.css'
                }]
            }
        },
        uglify: {
            dist: {
                files: {
                    'assets/js/theme.min.js': ['js/scripts.min.js']
                }
            }
        },
        watch: {
            css: {
                files: [
                    'sass/**/*.scss'
                ],
                tasks: ['notify:start', 'sass', 'notify:finish']
            },
            js: {
                files: [
                    'js/scripts.js',
                    'js/scroll-blur.js'
                ],
                tasks: ['notify:start', 'concat', 'uglify', 'notify:finish']
            }
        },
      notify: {
          start: {
            options: {
              title: 'Grunt Watch',
              message: 'Started...'
            }
          },
          finish: {
            options: {
              title: 'Grunt Watch',
              message: 'Finished!'
            }
          }
    }
    });

    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass', 'concat', 'uglify']);
};
