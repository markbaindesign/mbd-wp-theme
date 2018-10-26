'use strict';

module.exports = function(grunt) {

    // auto-load all grunt tasks matching the `grunt-*` pattern in package.json
    // no need for grunt.loadNpmTasks!
    require('load-grunt-tasks')(grunt);
    require('time-grunt')(grunt);
    
    var mozjpeg = require('imagemin-mozjpeg');

    grunt.initConfig({

        /**
        *
        * Variables
        *
        */
			
        // Variables from package.json
        pkg: grunt.file.readJSON( 'package.json' ),

        // Global variables
        vars: grunt.file.readJSON( 'gruntVars.json' ),
        
        // README
        rdm: 'README.md', 

        /**
        *
        * Grunt plugin configuration
        *
        */

        // autoprefixer
        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 9'],
                map: true
            },
            target_file: {
               src: '<%= vars.theme_path %>/<%= vars.theme_name %>/<%= vars.stylesheet_name %>.css',
            },
        },

        // Increment the version number in package.json
	  	bump: {
			options: {
  			    updateConfigs: ['pkg'], // make sure to check updated pkg variables
  			    push: false,
                commitFiles: ['-a'], // Commit all files
                createTag: false, // Branch is tagged by git flow
                commitMessage: 'Bump the version to %VERSION%',
                prereleaseName: 'rc',
			}
		},

        // Delete temporary files
		clean: {
            dir_release: ['release/**/*'], // Clean out the release dir
            copy_theme: ['release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.theme_name %>.<%= pkg.version %>'],
			copy_plugin: ['release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.plugin_name %>.<%= pkg.version %>']
		},

        // Create an archive
		compress: {

			plugin: {
				options: {
					mode: 'zip',
					archive: 'release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.plugin_name %>.<%= pkg.version %>.zip'
				},
				expand: true,
				cwd: 'release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.plugin_name %>.<%= pkg.version %>',
				src: ['**/*']
			},

            theme: {
                options: {
                    mode: 'zip',
                    archive: 'release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.theme_name %>.<%= pkg.version %>.zip'
                },
                expand: true,
                cwd: 'release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.theme_name %>.<%= pkg.version %>',
                src: ['**/*']
            }		
		},

        copy: {

            theme: {
                files:  [ 
                    {
                        expand: true, // includes files within path and its sub-directories
                        cwd: '<%= vars.theme_path %>/<%= vars.theme_name %>/', // Target dir
                        src: [
                            '**',
                            '!<%= vars.stylesheet_name %>.css.map',
                            '!assets/images/wp-screenshot-template.psd',
                            '!**/*.*.orig' // Don't copy .orig copies
                        ], 
                        dest: 'release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.theme_name %>.<%= pkg.version %>'
                    },
                ],
            },

            plugin: {
                files:  [
                    // includes files within path and its sub-directories
                    {expand: true, 
                    cwd: '<%= vars.plugin_path %>/<%= vars.plugin_name %>', // Target dir
                    src: [
                        '**',
                        '!**/*.*.orig' // Don't copy .orig copies
                    ], 
                    dest: 'release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.plugin_name %>.<%= pkg.version %>'},
                    ],
            },

            mu_plugins: {
                files:  [
                    // includes files within path and its sub-directories
                {expand: true, 
                    cwd: 'httpdocs/wp-content/mu-plugins/',
                    src: [
                        '**',
                    ], 
                    dest: 'release/<%= pkg.name %>.<%= pkg.version %>/<%= vars.mu_plugin_path %>'},
                    ],
            },

            font_awesome: {
                 expand: true,
                 flatten: true,
                 src: ['bower_components/fontawesome/fonts/*'],
                 dest: '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/fonts'
            },

            deploy_scripts: {
                 expand: true,
                 flatten: true,
                 src: ['node_modules/mbd-wp-deploy-scripts/scripts/*'],
                 dest: 'scripts'
            }
        },

        // Runt Grunt tasks via Git hooks
        /*
        githooks: {
            all: {
                // Run the default Grunt task after a git merge
                // Ensures CSS is compiled
                'post-merge': 'default',
            }
        },
        */

        // Optimize images
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true,
                    interlaced: true,
                    use: [mozjpeg()],
                },
                files: [{
                    expand: true,
                    cwd: '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/images/src',
                    src: ['**/*.{png,jpg,jpeg,gif}'],
                    dest: '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/images/dist'
                }]
            }
        },

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/js/src/custom/**/*.js',
                '<%= vars.plugin_path %>/<%= vars.plugin_name %>/assets/js/src/custom/**/*.js',
            ]
        },

        // Modernizr
        modernizr: {
            dist: {
                // [REQUIRED] Path to the build you're using for development.
                "devFile" : "bower_components/modernizr/modernizr.js",

                // Path to save out the built file.
                "outputFile" : "<%= vars.theme_path %>/<%= vars.theme_name %>/assets/js/dist/custom/modernizr-custom.js",
            }
        },

        // Sass
        sass: {
            dist: {
                options: {
                    style: 'expanded',
                    sourceMap: true
                },
                files: {
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/<%= vars.stylesheet_name %>.css': 'sass/styles.scss',
                    // '<%= vars.theme_path %>/<%= vars.theme_name %>/style-custom-login.css': 'sass/custom-login-styles.scss',
                }
            }
        },

        // Shell
        shell: {
            exp: {
                command: [
                    'cd bin/scripts',
                    './local-export.sh',
                    'cd ../..'
                ].join('&&')
            },
            imp: {
                command: [
                    'cd bin/scripts',
                    './local-import.sh',
                    'cd ../..'
                ].join('&&')
            }       
        },

        sprite:{
          tech: {
            src: 'assets/images/sprites/*.png',
            dest: '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/images/spritesheet.png',
            destCss: '<%= vars.sass_theme_path %>/vars/_spritesheet.scss',
            imgPath: 'assets/images/spritesheet.png'
          },
          features: {
            src: 'assets/images/features-page-sprite/*.png',
            dest: '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/images/features/features-page-sprites.png',
            destCss: '<%= vars.sass_theme_path %>/vars/_spritesheet-features-page.scss',
            imgPath: 'assets/images/features/features-page-sprites.png'
          },

        },

        // Version
        version: {
            bower: {
                options: {
                   prefix: '"version"\\:\\s"'
                },
                src: [ 'bower.json' ],
            },
            css: {
                options: {
                   prefix: 'Version\\:\\s'
                },
                src: [ 
                    'sass/styles.scss',

                    // Edit the version directly in the generated CSS file.
                    // Avoids having to run the Sass task just for this. 
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/<%= vars.stylesheet_name %>.css',

                    // Edit the version directly in the default CSS file.
                    // Avoids having to run the Sass task just for this.  
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/style.css', 
                ],
            },
            theme: {
                options: {
                   prefix: 'Version\\:\\s'
                },
                src: [ 
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/theme-version.php',
                ],
            },
            readme: {
                options: {
                    prefix: 'Version\\:\\s'
                },
                src: [ '<%= rdm %>' ],
            },
            plugin: {
                options: {
                prefix: 'Version\\:\\s'
                },
                src: [ '<%= vars.plugin_path %>/<%= vars.plugin_name %>/<%= vars.plugin_name %>.php' ],
           },           
        },

        // watch for changes and trigger sass, jshint, uglify and livereload
        watch: {
            img: {
                files: [
                    // Images
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/images/src/*.{png,jpg,jpeg,gif,webp,svg}'],
                tasks: [
                    'newer:imagemin:dist'
                ]
            },
            sprites: {
                files: [
                    // Sprites
                    'assets/images/sprites/*.png',
                    'assets/images/features-page-sprites/*.png',
                ],
                tasks: [
                    'sprite'
                ]
            },
            sass: {
                files: ['sass/**/*.{scss,sass}'],
                tasks: [
                        'sass', 
                        //'autoprefixer'
                    ]
            },
            /* js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint']
            },*/

            livereload: {
                options: { livereload: true },
                files: [

                    // Gruntfile
                    'Gruntfile.js',

                    // Theme files
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/**/*.php', 
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/lib/**/*.php',
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/<%= vars.stylesheet_name %>.css', 
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/js/src/**/*.js', 
                    '<%= vars.theme_path %>/<%= vars.theme_name %>/assets/images/dist/**/*.{png,jpg,jpeg,gif,webp,svg}',

                    // Plugin files
                    '<%= vars.plugin_path %>/<%= vars.plugin_name %>/**/*',

                ]
            }
        }

    });

    /**
    *
    * Register tasks
    *
    */

    grunt.registerTask('default', [
        'imagemin:dist',
		'sass',
        // 'jshint',		
		'watch',
	]);

    grunt.registerTask( 'bump-minor', [
        'bump-only:minor',
        'version', 
        'bump-commit',        
    ]);

    grunt.registerTask( 'sprite', [
        'sprite:tech',
        'sprite:features',       
    ]);

    grunt.registerTask( 'bump-patch', [
        'bump-only:patch',
        'version', 
        'bump-commit',        
    ]);

    // Build Task
    grunt.registerTask('build', [

        'imagemin:dist',
        'autoprefixer',
        'modernizr', 

        // Start with a clean release dir
        // If required, legacy releases can be rebuild based on their git tag
        // and running this task

        'clean:dir_release', 

        // NOTE
        // This task does not automatically bump the version
        // Precede with grunt bump-{minor|patch} to change the version across the project

        // Compile styles
        // Do this because if you haven't run grunt after switching to this branch, 
        // the CSS won't have been updated!
        'sass',

        // Make a copy of files for upload to the server

        /***
         *
         * We copy the dirs first so we can add the version to the zipped dir and
         * remove some files we don't want.
         *
         */

        'copy:theme',
        'copy:plugin',

        // Create an archive from the copies
        // 'compress', 

        // Delete the uncompressed copies
        // 'clean:copy_plugin', 
        // 'clean:copy_theme', 

    ]);
	
	// Copy assets 
	grunt.registerTask('copyassets', [
		'copy:font_awesome',
        'copy:deploy_scripts'       
	]);	

    // Export entire WP site for deployment
    grunt.registerTask('export', [
        'shell:exp'
    ]); 

    // Import entire WP site for local development
    grunt.registerTask('import', [
        'shell:imp'
    ]); 

};