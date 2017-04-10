/**
 * Webpack mix configuration
 *
 *
 * @category  development
 * @package   AndreLademann\lagfolk\Development
 * @project   AndreLademannDe
 * @author    André Lademann <vergissberlin@googlemail.com>
 * @copyright MIT
 * @license   https://opensource.org/licenses/MIT
 */

let mix = require('laravel-mix').mix
let bundle = 'src/AppBundle/Resources/private'

mix.autoload({
	jquery: ['$', 'window.jQuery']
})

mix.browserSync('symfony.dev/app_dev.php')
mix
	.babel([bundle + '/js/app.js'], 'web/js/app.js')
	.sass(bundle + '/sass/app.sass', 'web/css/app.css', {outputStyle: 'nested', sourceMap: false})
	.copy(bundle + '/img/', 'web/img/', false)
