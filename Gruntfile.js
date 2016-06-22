module.exports = function (grunt) {
    grunt.initConfig({
        watch: {
            src: {
                files: ['**/*.scss', '**/*.php'],
                tasks: ['compass:dev']
            },
           options: {
                //livereload: true,
                sass: {
				  dist: {
				    options: {
				      style: 'expanded',
				      //require: 'susy'
				    },
				    files: {
				        'css/style.css': 'stylesheets/style.scss'
				    }
				  }
				}
            },
        },
        compass: {
            dev: {
                options: {
                    sassDir: 'stylesheets',
                    cssDir: 'css',
                    imagesPath: 'assets/img',
                    noLineComments: false,
                    outputStyle: 'compressed',
                    //require: 'susy'
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
	grunt.registerTask('default', ['watch']);
};
