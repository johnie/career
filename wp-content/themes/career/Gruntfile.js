module.exports = function(grunt) {
  // load all grunt tasks
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      compass: {
          files: ['style/**/*.{scss,sass}'],
          tasks: ['compass']
      },
      js: {
          files: '<%= jshint.all %>',
          tasks: ['jshint']
      },
      livereload: {
          options: { livereload: true },
          files: ['style.css', 'js/*.js', '*.html', '*.php', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}']
      }
    },

    compass: {
      dist: {
        options: {
          config: 'config.rb',
          force: true
        }
      }
    },

    jshint: {
      options: {
        jshintrc: '.jshintrc',
        "force": true
      },
      all: [
        'Gruntfile.js',
        'js/**/*.js'
      ]
    },

    uglify: {
      main: {
        option: {
          sourceMap: 'js/main.js.map',
          sourceMappingURL: 'main.js.map',
          sourceMapPrefix: 2
        },
        files: {
            'js/main.min.js': [
            'js/**/*.js'
          ]
        }
      }
    },

    // Only watch for specific changed file and not all
    concurrent: {
      dev: {
        tasks: ['watch'],
        options: {
          logConcurrentOutput: true
        },
        watch: [
            'watch:compass',
            'watch:livereload',
        ],
      }
    }

  });

  grunt.registerTask('default', ['concurrent']);
};
