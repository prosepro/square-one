/**
 *
 * Module: grunt-sass
 * Documentation: https://github.com/sindresorhus/grunt-sass
 * Example:
 *
 */

module.exports = {

	theme: {
		options: {
			outputStyle: 'nested',
			sourceMap     : false
		},
		files  : {
			'<%= pkg._themepath %>/css/master-temp.css'             : '<%= pkg._themepath %>/scss/master.scss',
			'<%= pkg._themepath %>/css/print-temp.css'              : '<%= pkg._themepath %>/scss/print.scss',
			'<%= pkg._themepath %>/css/admin/editor-style-temp.css' : '<%= pkg._themepath %>/scss/admin/editor-style.scss',
			'<%= pkg._themepath %>/css/admin/login-temp.css'        : '<%= pkg._themepath %>/scss/admin/login.scss'
		}
	},

	legacy: {
		options: {
			outputStyle: 'nested',
			sourceMap  : false
		},
		files  : {
			'<%= pkg._themepath %>/css/legacy-temp.css' : '<%= pkg._themepath %>/scss/legacy.scss'
		}
	}

};