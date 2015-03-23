module.exports = function(grunt) {
  // Project configuration
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    meta: {
      banner: '/*!\n' +
        '* <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
        '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
        '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %> (<%= pkg.author.url %>)\n' +
        '* Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %>\n*/\n'
    },
    sass: {
      dist: {
        files: {
          'calendar/calendar.css': 'styles/calendar.scss'
        }
      }
    }
  });
  grunt.loadNpmTasks('grunt-sass');

  grunt.registerTask('default', ['sass']);
  grunt.registerTask('build', ['sass']);
};