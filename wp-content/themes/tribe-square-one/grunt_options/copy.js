/**
 *
 * Module: grunt-contrib-copy
 * Documentation: https://github.com/gruntjs/grunt-contrib-copy
 * Example:
 *
 */

module.exports = {

	theme: {
		files: [
			{
				expand : true,
				flatten: true,
				src    : [
					'<%= pkg._npmpath %>/babel-polyfill/dist/polyfill.js',
					'<%= pkg._npmpath %>/jquery/dist/jquery.js',
					'<%= pkg._npmpath %>/jquery/dist/jquery.min.js',
					'<%= pkg._npmpath %>/jquery/dist/jquery.min.map',
					'<%= pkg._componentpath %>/js/globals.js',
					'<%= pkg._npmpath %>/tota11y/build/tota11y.min.js'
				],
				dest   : 'js/vendor/'
			}
		]
	}

};