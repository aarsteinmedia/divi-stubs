<?php
/**
 * Generated stub declarations for DIVI.
 * https://www.elegantthemes.com
 * https://github.com/aarsteinmedia/divi-stubs
 */

/**
 * Divi extension base class.
 *
 * @package    Builder
 * @subpackage API
 * @since      4.6.2
 */
/**
 * Core class used to implement the Divi Extension.
 */
class DiviExtension {

	/**
	 * Utility class instance.
	 *
	 * @since 3.1
	 * @var ET_Core_Data_Utils
	 */
	protected static $_;
	/**
	 * Dependencies for the extension's JavaScript bundles.
	 *
	 * @since 3.1
	 *
	 * @var array {
	 *     JavaScript Bundle Dependencies
	 *
	 * @type string[] $builder  Dependencies for the builder bundle
	 * @type string[] $frontend Dependencies for the frontend bundle
	 * }
	 */
	protected $_bundle_dependencies = array();
	/**
	 * Builder bundle data
	 *
	 * @since 3.1
	 *
	 * @var array
	 */
	protected $_builder_js_data = array();
	/**
	 * Frontend bundle data
	 *
	 * @since 3.1
	 *
	 * @var array
	 */
	protected $_frontend_js_data = array();
	/**
	 * Whether or not the extension's debug mode is enabled. This should always be enabled
	 * during development and never be enabled in production.
	 *
	 * @since 3.1
	 *
	 * @var bool
	 */
	protected $_debug;
	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 3.1
	 *
	 * @var string
	 */
	public $gettext_domain;
	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 3.1
	 *
	 * @var string
	 */
	public $name;
	/**
	 * Absolute path to the extension's directory.
	 *
	 * @since 3.1
	 *
	 * @var string
	 */
	public $plugin_dir;
	/**
	 * The extension's directory URL.
	 *
	 * @since 3.1
	 *
	 * @var string
	 */
	public $plugin_dir_url;
	/**
	 * The extension's version.
	 *
	 * @since 3.1
	 *
	 * @var string
	 */
	public $version;
	/**
	 * DiviExtension constructor.
	 *
	 * @since 3.1
	 *
	 * @param string $name This Divi Extension's WP Plugin name/slug.
	 * @param array  $args Argument flexibility for child classes.
	 */
	public function __construct( $name = '', $args = array() ) {
	}
	/**
	 * Enqueues minified, production javascript bundles.
	 *
	 * @since 3.1
	 */
	protected function _enqueue_bundles() {
	}
	/**
	 * Enqueues non-minified, hot reloaded javascript bundles.
	 *
	 * @since 3.1
	 */
	protected function _enqueue_debug_bundles() {
	}
	/**
	 * Enqueues minified (production) or non-minified (hot reloaded) backend styles.
	 *
	 * @since 4.4.9
	 */
	protected function _enqueue_backend_styles() {
	}
	/**
	 * Sets initial value of {@see self::$_bundle_dependencies}.
	 *
	 * @since 3.1
	 */
	protected function _set_bundle_dependencies() {
	}
	/**
	 * Sets {@see self::$_debug} based on the extension's global DEBUG constant.
	 *
	 * @since 3.1
	 */
	protected function _set_debug_mode() {
	}
	/**
	 * Loads custom modules when the builder is ready.
	 *
	 * @since      3.1
	 * @deprecated ?? - Use {@see 'hook_et_builder_ready'} instead.
	 */
	public function hook_et_builder_modules_loaded() {
	}
	/**
	 * Loads custom modules when the builder is ready.
	 * {@see 'et_builder_ready'}
	 *
	 * @since 4.10.0
	 */
	public function hook_et_builder_ready() {
	}
	/**
	 * Performs initialization tasks.
	 *
	 * @since 3.1
	 */
	protected function _initialize() {
	}
	/**
	 * Performs tasks when the plugin is activated.
	 * {@see 'activate_$PLUGINNAME'}
	 *
	 * @since 3.1
	 */
	public function wp_hook_activate() {
	}
	/**
	 * Performs tasks when the plugin is deactivated.
	 * {@see 'deactivate_$PLUGINNAME'}
	 *
	 * @since 3.1
	 */
	public function wp_hook_deactivate() {
	}
	/**
	 * Enqueues the extension's scripts and styles.
	 * {@see 'wp_enqueue_scripts'}
	 *
	 * @since 3.1
	 * @since 4.4.9 Added backend styles for handling custom builder styles.
	 */
	public function wp_hook_enqueue_scripts() {
	}
	/**
	 * Enqueues the extension's scripts and styles for admin area.
	 *
	 * @since 4.4.9
	 */
	public function admin_hook_enqueue_scripts() {
	}
}
/**
 * Extension API: DiviExtensions class.
 *
 * @package    Builder
 * @subpackage API
 */
/**
 * Composite class to manage all Divi Extensions.
 */
class DiviExtensions {




	/**
	 * Utility class instance.
	 *
	 * @since 3.1
	 *
	 * @var ET_Core_Data_Utils
	 */
	protected static $_;
	/**
	 * The first extension to enable debug mode for itself. Only one Divi Extension can be in
	 * debug mode at a time.
	 *
	 * @var DiviExtension
	 */
	protected static $_debugging_extension;
	/**
	 * List of all instances of the Divi Extension.
	 *
	 * @since 3.1
	 *
	 * @var DiviExtension[] {
	 *     All current Divi Extension instances
	 *
	 * @type DiviExtension $name Instance
	 * }
	 */
	private static $_extensions;
	/**
	 * Register a Divi Extension instance.
	 *
	 * @since 3.1
	 *
	 * @param DiviExtension $instance Instance.
	 */
	public static function add( $instance ) {
	}
	/**
	 * Get one or all Divi Extension instances.
	 *
	 * @since 3.1
	 *
	 * @param string $name The extension name. Default: 'all'.
	 *
	 * @return DiviExtension|DiviExtension[]|null
	 */
	public static function get( $name = 'all' ) {
	}
	/**
	 * Initialize the base `DiviExtension` class.
	 */
	public static function initialize() {
	}
	/**
	 * Whether or not a Divi Extension is in debug mode.
	 *
	 * @since 3.1
	 *
	 * @return bool
	 */
	public static function is_debugging_extension() {
	}
	/**
	 * Register's an extension instance for debug mode if one hasn't already been registered.
	 *
	 * @since 3.1
	 *
	 * @param DiviExtension $instance Instance.
	 *
	 * @return bool Whether or not request was successful
	 */
	public static function register_debug_mode( $instance ) {
	}
}
/**
 * Class for custom REST API endpoint for Divi Layout block.
 */
class ET_Api_Rest_Block_Layout {




	/**
	 * Instance of `ET_Api_Rest_Block_Layout`.
	 *
	 * @var ET_Api_Rest_Block_Layout
	 */
	private static $_instance;
	/**
	 * Constructor.
	 *
	 * ET_Api_Rest_Block_Layout constructor.
	 */
	public function __construct() {
	}
	/**
	 * Get class instance
	 *
	 * @since 4.1.0
	 *
	 * @return object class instance
	 */
	public static function instance() {
	}
	/**
	 * Register callback for Layout block REST API
	 *
	 * @since 4.1.0
	 */
	public function register() {
	}
	/**
	 * Register REST API routes for Layout block
	 *
	 * @since 4.1.0
	 */
	public function register_routes() {
	}
	/**
	 * Get layout content based on given post ID
	 *
	 * @since 4.1.0
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 *
	 * @return string|WP_Error
	 */
	public function get_layout_content_callback( \WP_REST_Request $request ) {
	}
	/**
	 *  Process /block/layout/builder_edit_data route request
	 *
	 * @param WP_Rest_Request $request Request to prepare items for.
	 *
	 * @return string|WP_Error
	 * @since  4.1.0
	 */
	public function process_builder_edit_data( \WP_Rest_Request $request ) {
	}
	/**
	 * Sanitize int value
	 *
	 * @since 4.1.0
	 *
	 * @param int|mixed $value Value.
	 *
	 * @return int
	 */
	public function sanitize_int( $value ) {
	}
	/**
	 *  Sanitize request "action" argument
	 *
	 * @since 4.1.0
	 *
	 * @param string $value Action value.
	 *
	 * @return string
	 */
	public function sanitize_action( $value ) {
	}
	/**
	 * Validate request "action" argument
	 *
	 * @since 4.1.0
	 *
	 * @param string $value Action value.
	 *
	 * @return bool
	 */
	public function validate_action( $value ) {
	}
	/**
	 * Permission callback for get layout permalink REST API endpoint
	 *
	 * @since 4.1.0
	 *
	 * @return bool
	 */
	public function rest_api_layout_block_permission() {
	}
}
/**
 * Feature base class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.10.0
 */
/**
 * Base Feature feature.
 *
 * @since 4.10.0
 */
class ET_Builder_Global_Feature_Base {




	const CACHE_META_KEY = '_et_builder_global_feature_cache';
	/**
	 * Primed status.
	 *
	 * @access protected
	 * @var    bool
	 */
	protected $_primed = \false;
	/**
	 * Cache array.
	 *
	 * @access protected
	 * @var    array
	 */
	protected $_cache = array();
	/**
	 * Cache status.
	 *
	 * @access protected
	 * @var    array
	 */
	protected $_cache_dirty = \false;
	/**
	 * Construct instance.
	 */
	public function __construct() {
	}
	/**
	 * Purge the features cache.
	 *
	 * @since 4.10.0
	 */
	public static function purge_cache() {
	}
	/**
	 * Get the features cache.
	 *
	 * @since 4.10.0
	 *
	 * @return mixed
	 */
	public static function load_cache() {
	}
	/**
	 * Tell whether we should use cache or not.
	 *
	 * @since 4.10.0
	 *
	 * @return bool
	 */
	public static function enabled() {
	}
	/**
	 * Prime the cache.
	 *
	 * @since 4.10.0
	 */
	public function cache_prime() {
	}
	/**
	 * Save the cache.
	 *
	 * @since 4.10.0
	 */
	public function cache_save() {
	}
	/**
	 * Get Cache Version Index Items.
	 *
	 * @since  4.10.0
	 * @access protected
	 * @return array Cache version items.
	 */
	protected static function _get_cache_index_items() {
	}
	/**
	 * Get Cache Version Index.
	 *
	 * @since  4.10.0
	 * @access protected
	 * @return string .Cache version index.
	 */
	public static function _get_cache_index() {
	}
	/**
	 * Get cache
	 *
	 * @since 4.10.0
	 * @param string $key   Cache key.
	 * @param string $group Cache Group.
	 */
	public function cache_get( $key, $group = 'default' ) {
	}
	/**
	 * Set cache
	 *
	 * @since 4.10.0
	 * @param string $key   Cache key.
	 * @param mixed  $value To be cached.
	 * @param string $group Cache group.
	 */
	public function cache_set( $key, $value, $group = 'default' ) {
	}
	/**
	 * Check for cached value.
	 *
	 * First check cache if present, if not, determine
	 * from calling the callback.
	 *
	 * @param string   $key   Name of item.
	 * @param function $cb    Callback function to perform logic.
	 * @param string   $group Cache group.
	 *
	 * @return bool/mixed Result.
	 */
	public function get( $key, $cb, $group = 'default' ) {
	}
}
/**
 * Dynamic_Assets feature class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.10.0
 */
/**
 * Handles Dynamic_Assets feature.
 *
 * @since 4.10.0
 */
class ET_Builder_Dynamic_Assets_Feature extends \ET_Builder_Global_Feature_Base {




	/**
	 * Hold the class instance.
	 *
	 * @var null
	 */
	private static $_instance = \null;
	const CACHE_META_KEY      = '_et_builder_da_feature_cache';
	/**
	 * Initialize ET_Builder_Dynamic_Assets_Feature class.
	 */
	public static function instance() {
	}
}
/**
 * Google_Fonts feature class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.10.0
 */
/**
 * Handles Google_Fonts feature.
 *
 * @since 4.10.0
 */
class ET_Builder_Google_Fonts_Feature extends \ET_Builder_Global_Feature_Base {




	/**
	 * `ET_Builder_Google_Fonts_Feature` instance.
	 *
	 * @var ET_Builder_Google_Fonts_Feature
	 */
	private static $_instance;
	const CACHE_META_KEY = '_et_builder_gf_feature_cache';
	/**
	 * Returns instance of the class.
	 *
	 * @since 4.10.0
	 */
	public function __construct() {
	}
	/**
	 * Initialize ET_Builder_Google_Fonts_Feature class.
	 */
	public static function instance() {
	}
	/**
	 * Setup transient to purge cache once a day.
	 *
	 * @since 4.10.0
	 */
	public static function setup_transient() {
	}
	/**
	 * Add to cache index items.
	 *
	 * @since 4.10.0
	 *
	 * @param array  $items Assoc array of cache index items.
	 * @param string $key   The cache meta key that the cache index items belong to.
	 *
	 * @return array  $items Assoc array of cache index items.
	 */
	public static function cache_index_items( $items, $key ) {
	}
	/**
	 * Determines if an option is enabled.
	 *
	 * @since 4.10.0
	 *
	 * @param string $sub_option Google Fonts Sub Option.
	 *
	 * @return bool Whether the sub option is enabled.
	 */
	public function is_option_enabled( $sub_option = '' ) {
	}
	/**
	 * Builds the full URL to the Google Font css file to load the fonts
	 * provided by the parameter.
	 *
	 * @since 4.19.1
	 *
	 * @param array $google_fonts_url_args An array containing query-parameters.
	 *
	 * @return string The full URL to the Google Fonts resource.
	 */
	public function get_google_fonts_url( $google_fonts_url_args ) {
	}
	/**
	 * Get User Agents.
	 *
	 * @since 4.10.0
	 *
	 * @return array[string] List of user agents.
	 */
	protected function _get_user_agents() {
	}
	/**
	 * Fetch CSS file contents from google fonts URL.
	 *
	 * @since 4.10.0
	 *
	 * @param string $url The Google Fonts URL to fetch the contents for.
	 *
	 * @return string $url CSS file contents.
	 */
	public function fetch( $url ) {
	}
	/**
	 * Minify CSS string.
	 *
	 * @since 4.10.0
	 *
	 * @param string $data Multiline CSS data.
	 *
	 * @return string Minifed CSS data.
	 */
	public static function minify( $data ) {
	}
}
/**
 * Feature base class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.10.0
 */
/**
 * Post Based Feature Base.
 *
 * @since 4.10.0
 */
class ET_Builder_Post_Feature_Base {




	// Only save cache if time (milliseconds) to generate it is above this threshold.
	const CACHE_SAVE_THRESHOLD = 15;
	const CACHE_META_KEY       = '_et_builder_module_feature_cache';
	/**
	 * Post ID.
	 *
	 * @access protected
	 * @var    int
	 */
	protected $_post_id = 0;
	/**
	 * Primed status.
	 *
	 * @access protected
	 * @var    bool
	 */
	protected $_primed = \false;
	/**
	 * Cache array.
	 *
	 * @access protected
	 * @var    array
	 */
	protected $_cache = array();
	/**
	 * Total time needed to populate the cache.
	 *
	 * @access protected
	 * @var    float
	 */
	protected $_cache_set_time = 0;
	/**
	 * Whether the feature manager is enabled.
	 *
	 * @access protected
	 * @var    null|bool
	 */
	protected static $_enabled = \null;
	/**
	 * Whether this page load is loading the cache or using existing cache.
	 *
	 * @access protected
	 * @var    bool
	 */
	protected $_cache_loading = \false;
	/**
	 * `ET_Builder_Post_Feature_Base` instance.
	 *
	 * @var ET_Builder_Post_Feature_Base
	 */
	private static $_instance;
	/**
	 * Construct instance.
	 */
	public function __construct() {
	}
	/**
	 * Initialize ET_Builder_Post_Feature_Base class.
	 */
	public static function instance() {
	}
	/**
	 * Purge the features cache for a given post.
	 *
	 * @since 4.10.0
	 *
	 * @param int $post_id The post ID to purge cache from.
	 */
	public static function purge_cache( $post_id = '' ) {
	}
	/**
	 * Get the features cache for a given post.
	 *
	 * @since 4.10.0
	 *
	 * @param  int $post_id The post ID to get cache from.
	 * @return mixed
	 */
	public static function load_cache( $post_id ) {
	}
	/**
	 * Tell whether we should use cache or not.
	 *
	 * @since 4.10.0
	 *
	 * @return bool
	 */
	public static function enabled() {
	}
	/**
	 * Prime the cache.
	 *
	 * @since 4.10.0
	 */
	public function cache_prime() {
	}
	/**
	 * Save the cache.
	 *
	 * @since 4.10.0
	 */
	public function cache_save() {
	}
	/**
	 * Get Cache Version Index Items.
	 *
	 * @since  4.10.0
	 * @access protected
	 * @return array Cache version items.
	 */
	protected static function _get_cache_index_items() {
	}
	/**
	 * Get Cache Version Index.
	 *
	 * @since  4.10.0
	 * @access protected
	 * @return string .Cache version index.
	 */
	protected static function _get_cache_index() {
	}
	/**
	 * Get cache
	 *
	 * @since 4.10.0
	 * @param string $key   Cache key.
	 * @param string $group Cache group.
	 */
	public function cache_get( $key, $group = 'default' ) {
	}
	/**
	 * Set cache
	 *
	 * @since 4.10.0
	 * @param string $key     Cache key.
	 * @param mixed  $value   To be cached.
	 * @param string $group   Cache group.
	 * @param float  $elapsed How much time it took to generate the value.
	 */
	public function cache_set( $key, $value, $group = 'default', $elapsed = 0 ) {
	}
	/**
	 * Check for cached value.
	 *
	 * First check cache if present, if not, determine
	 * from calling the callback.
	 *
	 * @param string   $key   Name of item.
	 * @param function $cb    Callback function to perform logic.
	 * @param string   $group Cache group.
	 *
	 * @return bool/mixed Result.
	 */
	public function get( $key, $cb, $group = 'default' ) {
	}
}
/**
 * Module Features feature class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.10.0
 */
/**
 * Handles Builder Module Features.
 *
 * @since 4.10.0
 */
class ET_Builder_Module_Features extends \ET_Builder_Post_Feature_Base {




	const CACHE_META_KEY = '_et_builder_module_features_cache';
	/**
	 * Cache group.
	 *
	 * @access protected
	 * @var    array
	 */
	protected $_cache_group = array();
	/**
	 * Construct instance.
	 */
	public function __construct() {
	}
	/**
	 * Creates a key from a shortcode tag and its attributes.
	 *
	 * @since  4.10.0
	 * @access public
	 * @param  string $tag   Shortcode tag.
	 * @param  string $attrs Shortcode attributes.
	 *
	 * @return string
	 */
	public static function get_key( $tag, $attrs ) {
	}
	/**
	 * Set cache group.
	 *
	 * @since  4.10.0
	 * @access public
	 * @param  mixed  $override Whether to override do_shortcode return value or not.
	 * @param  string $tag      Shortcode tag.
	 * @param  string $attrs    Shortcode attributes.
	 * @return mixed
	 */
	public function set_cache_group( $override, $tag, $attrs ) {
	}
	/**
	 * Restore previous cache group when current shortcode execution ends.
	 *
	 * @since  4.10.0
	 * @access public
	 * @param  mixed $output Shortcode content.
	 * @return mixed
	 */
	public function restore_previous_cache_group( $output ) {
	}
	/**
	 * Check for cached value.
	 *
	 * First check cache if present, if not, determine
	 * from calling the callback.
	 *
	 * @param string   $key   Name of item.
	 * @param function $cb    Callback function to perform logic.
	 * @param string   $group Cache group.
	 *
	 * @return bool/mixed Result.
	 */
	public function get( $key, $cb, $group = 'default' ) {
	}
}
/**
 * Module Use Detection class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.10.0
 */
/**
 * Handles Module Use Detection.
 *
 * @since 4.10.0
 */
class ET_Builder_Module_Use_Detection {




	/**
	 * Module Slugs Used.
	 *
	 * @access protected
	 * @var    array
	 */
	protected $_modules_used = array();
	/**
	 * Module Attrs Used.
	 *
	 * @access protected
	 * @var    array
	 */
	protected $_module_attrs_used = array();
	/**
	 * Module Attr Values Used.
	 *
	 * @access protected
	 * @var    array
	 */
	protected $_module_attr_values_used = array();
	/**
	 * Valid Shortcode Slugs.
	 *
	 * @access protected
	 * @var    array
	 */
	protected $_valid_slugs = array();
	/**
	 * `ET_Builder_Module_Use_Detection` instance.
	 *
	 * @var ET_Builder_Module_Use_Detection
	 */
	private static $_instance;
	/**
	 * Construct instance.
	 */
	public function __construct() {
	}
	/**
	 * Get instance.
	 */
	public static function instance() {
	}
	/**
	 * Get valid slugs.
	 */
	public function _setup_valid_slugs() {
	}
	/**
	 * Log the Shortcode Tag/Slug.
	 *
	 * @since  4.10.0
	 * @access public
	 * @param  mixed  $override Whether to override do_shortcode return value or not.
	 * @param  string $tag      Shortcode tag.
	 * @param  array  $attrs    Shortcode attrs.
	 * @return mixed
	 */
	public function log_slug_used( $override, $tag, $attrs ) {
	}
	/**
	 * Add footer actions.
	 */
	public function footer() {
	}
	/**
	 * Get modules used.
	 *
	 * @return array List of module slugs used.
	 * @since  4.10.0
	 * @access public
	 */
	public function get_modules_used() {
	}
	/**
	 * Get module attrs used.
	 *
	 * @return array List of interested module attrs used.
	 * @since  4.10.0
	 * @access public
	 */
	public function get_module_attrs_used() {
	}
	/**
	 * Get module attr values used.
	 *
	 * @return array List of interested module attrs and values used.
	 * @since  4.10.0
	 * @access public
	 */
	public function get_module_attr_values_used() {
	}
}
/**
 * Base class for plugin compatibility file
 *
 * @since 0.7 (builder version)
 */
class ET_Builder_Plugin_Compat_Base {




	public $plugin_id;
	/**
	 * Get plugin dir path based on plugin_id
	 *
	 * @return sting
	 */
	function get_plugin_dir_path() {
	}
	/**
	 * Get plugin data based on initialized plugin_id
	 *
	 * @return array
	 */
	function get_plugin_data() {
	}
	/**
	 * Get plugin version based on initialized plugin_id
	 *
	 * @return string
	 */
	function get_plugin_version() {
	}
}
/**
 * Class ET_Builder_Plugin_Compat_Loader.
 */
class ET_Builder_Plugin_Compat_Loader {




	/**
	 * Unique instance of class.
	 *
	 * @var ET_Builder_Plugin_Compat_Loader
	 */
	public static $instance;
	/**
	 * Constructor.
	 */
	private function __construct() {
	}
	/**
	 * Gets the instance of the class.
	 */
	public static function init() {
	}
	/**
	 * Hook methods to WordPress action and filter.
	 *
	 * @return void
	 */
	private function init_hooks() {
	}
}
/**
 * Base class for plugin compatibility file.
 *
 * @since 4.10.0
 */
class ET_Builder_Theme_Compat_Base {




	/**
	 * Theme name.
	 *
	 * @access private
	 * @var    array
	 */
	public $theme_id;
	/**
	 * Get theme dir path based on theme_id.
	 *
	 * @return sting
	 */
	public function get_theme_dir_path() {
	}
	/**
	 * Get theme data.
	 *
	 * @return object
	 */
	public function get_theme_data() {
	}
}
/**
 * Class ET_Builder_Plugin_Compat_Loader.
 */
class ET_Builder_Theme_Compat_Handler {




	/**
	 * Unique instance of class.
	 *
	 * @var ET_Builder_Theme_Compat_Handler
	 */
	public static $instance;
	/**
	 * Constructor.
	 */
	private function __construct() {
	}
	/**
	 * Gets the instance of the class.
	 */
	public static function init() {
	}
	/**
	 * Hook methods to WordPress action and filter.
	 *
	 * @return void
	 */
	private function _init_hooks() {
	}
}
/**
 * Represent a simple value or a dynamic one.
 * Used for module attributes and content.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      3.17.2
 */
/**
 * Class ET_Builder_Value.
 */
class ET_Builder_Value {




	/**
	 * Flag whether the value is static or dynamic.
	 *
	 * @since 3.17.2
	 *
	 * @var bool
	 */
	protected $dynamic = \false;
	/**
	 * Value content. Represents the dynamic content type when dynamic.
	 *
	 * @since 3.17.2
	 *
	 * @var string
	 */
	protected $content = '';
	/**
	 * Array of dynamic content settings.
	 *
	 * @since 3.17.2
	 *
	 * @var mixed[]
	 */
	protected $settings = array();
	/**
	 * ET_Builder_Value constructor.
	 *
	 * @since 3.17.2
	 *
	 * @param boolean $dynamic  Whether content is dynamic.
	 * @param string  $content  Value content.
	 * @param array   $settings Dynamic content settings.
	 */
	public function __construct( $dynamic, $content, $settings = array() ) {
	}
	/**
	 * Check if the value is dynamic or not.
	 *
	 * @since 3.17.2
	 *
	 * @return bool
	 */
	public function is_dynamic() {
	}
	/**
	 * Retrieve the value content.
	 *
	 * @since 4.4.4
	 *
	 * @return string
	 */
	public function get_content() {
	}
	/**
	 * Get the resolved content.
	 *
	 * @since 3.17.2
	 *
	 * @param integer $post_id Post id.
	 *
	 * @return string
	 */
	public function resolve( $post_id ) {
	}
	/**
	 * Get the static content or a serialized representation of the dynamic one.
	 *
	 * @since 3.17.2
	 *
	 * @return string
	 */
	public function serialize() {
	}
	/**
	 * Get settings value.
	 *
	 * @since 4.23.2
	 *
	 * @param string $setting_name Setting name.
	 *
	 * @return mixed
	 */
	public function get_settings( $setting_name ) {
	}
	/**
	 * Set settings value.
	 *
	 * @since 4.23.2
	 *
	 * @param string $setting_name  Setting name.
	 * @param mixed  $setting_value Setting value.
	 *
	 * @return void
	 */
	public function set_settings( $setting_name, $setting_value ) {
	}
}
/**
 * Global modules settings.
 *
 * @package    Divi
 * @subpackage Builder
 */
/**
 * Global settings class.
 *
 * @todo Rename this class to `ET_Builder_Module_Settings` so that its name clearly indicates its purpose.
 */
class ET_Global_Settings {




	/**
	 * List of default settings.
	 *
	 * @var array
	 */
	private static $_settings = array();
	/**
	 * Whether reinit default setting values.
	 *
	 * @var bool
	 */
	private static $_reinit_values = \false;
	/**
	 * Initialize the global settings.
	 */
	public static function init() {
	}
	/**
	 * Allow global settings value to be reinitialized. Initially added a to make global
	 * settings modifieable during unit/integration testing which uses PHPUnit & wp-browser
	 */
	public static function reinit() {
	}
	/**
	 * Set default global setting value
	 */
	private static function set_values() {
	}
	/**
	 * Get default global setting value
	 *
	 * @param string $name      Setting name.
	 * @param string $get_value Defines the value it should get: actual or default.
	 *
	 * @return mixed             Global setting value or FALSE
	 */
	public static function get_value( $name, $get_value = 'actual' ) {
	}
	/**
	 * Translate 'on'/'off' into true/false
	 * Pagebuilder use pseudo checkbox with 'on'/'off' value while customizer use true/false
	 * which cause ET_Global_Settings' default value incompatibilities.
	 *
	 * @param string $name      Setting name.
	 * @param string $get_value Defines the value it should get: actual or default.
	 * @param string $source    pagebuilder or customizer.
	 *
	 * @return bool|string
	 */
	public static function get_checkbox_value( $name, $get_value = 'actual', $source = 'pagebuilder' ) {
	}
}
/**
 * Class to cache commonly used AJAX requests.
 */
class ET_Builder_Ajax_Cache {




	/**
	 * Instance of this class.
	 *
	 * @var ET_Builder_Ajax_Cache
	 */
	private static $_instance;
	/**
	 * Transient name.
	 *
	 * @var string
	 */
	protected $_transient = 'et_builder_ajax_cache';
	/**
	 * Flag to determine whether to save cache or not on `shutdown` hook.
	 *
	 * @var bool
	 */
	protected $_dirty = \false;
	/**
	 * List of all ajax cache.
	 *
	 * @var Array
	 */
	protected $_cache;
	/**
	 * ET_Builder_Ajax_Cache constructor.
	 */
	public function __construct() {
	}
	/**
	 * Returns whether cache file exists or not.
	 *
	 * @since 4.0.10
	 *
	 * @return bool
	 */
	public function file_exists() {
	}
	/**
	 * Returns whether cache is empty or not.
	 *
	 * @since 4.0.10
	 *
	 * @return bool
	 */
	public function is_empty() {
	}
	/**
	 * Enqueue ajax cache as definitions dependency.
	 *
	 * @since 4.0.10
	 *
	 * @param array  $deps Dependencies array.
	 * @param string $key  Script handle.
	 *
	 * @return array
	 */
	public function add_cache_dep( $deps, $key ) {
	}
	/**
	 * Load cache.
	 *
	 * @since 4.0.10
	 *
	 * @return void
	 */
	public function load() {
	}
	/**
	 * Save cache.
	 *
	 * @since 4.0.10
	 *
	 * @return void
	 */
	public function save() {
	}
	/**
	 * Write cache file.
	 *
	 * @since 4.0.10
	 *
	 * @return bool
	 */
	public function write_file() {
	}
	/**
	 * Delete cache file.
	 *
	 * @since 4.0.10
	 *
	 * @return void
	 */
	public function delete_file() {
	}
	/**
	 * Set cache key.
	 *
	 * @since 4.0.10
	 *
	 * @param string $key     Cache key.
	 * @param string $content Cache value.
	 *
	 * @return void
	 */
	public function set( $key, $content ) {
	}
	/**
	 * Unset cache key.
	 *
	 * @since 4.0.10
	 *
	 * @param string $key Cache key.
	 *
	 * @return void
	 */
	public function unset_( $key ) {
	}
	/**
	 * Clear cache.
	 *
	 * @return void
	 */
	public function clear() {
	}
	/**
	 * Get cache file name.
	 *
	 * @since 4.0.10
	 *
	 * @return string.
	 */
	public function get_file_name() {
	}
	/**
	 * Get cache url.
	 *
	 * @since 4.0.10
	 *
	 * @return string
	 */
	public function get_url() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 4.0.10
	 *
	 * @return ET_Builder_Ajax_Cache
	 */
	public static function instance() {
	}
}
/**
 * Editing GB blocks inside Divi.
 *
 * @since 3.18 Added support for WP 5.0
 * @since 3.10.2
 */
class ET_Builder_Block_Editor_Integration {




	/**
	 * Regex to match gallery in block editor.
	 *
	 * @var string
	 */
	protected $_gb_gallery_regexp = '/<ul class="wp-block-gallery[^"]*?">.*?<\\/ul>/mis';
	/**
	 * Constructor.
	 *
	 * ET_Builder_Block_Editor_Integration constructor.
	 */
	public function __construct() {
	}
	/**
	 * Return whether the post can be edited in the block editor.
	 *
	 * @param mixed $post Post ID or WP_Post object.
	 *
	 * @return bool
	 */
	protected function _can_edit_post( $post ) {
	}
	/**
	 * Return whether a post type is compatible with the block editor.
	 *
	 * @param string $type The post type.
	 *
	 * @return bool
	 */
	protected function _can_edit_post_type( $type ) {
	}
	/**
	 * Check if the current editor is set to load Gutenberg.
	 *
	 * @return bool
	 */
	protected function _is_block_editor_page() {
	}
	/**
	 * Filter on map_meta_cap.
	 *
	 * @param array  $caps    Capabilities.
	 * @param string $cap     Capability to check.
	 * @param string $user_id User ID.
	 * @param array  $args    Additional args.
	 *
	 * @return array
	 */
	public function map_meta_cap( $caps, $cap, $user_id, $args ) {
	}
	/**
	 * Get user capabilities that is relevant to block editor integration
	 *
	 * @since 4.1.0
	 *
	 * @return array
	 */
	public function get_current_user_capabilities() {
	}
	/**
	 * Filter used to disable GB for certain post types.
	 *
	 * @param bool   $can_edit  Whether post type can be editable with gutenberg or not.
	 * @param string $post_type Post type name.
	 *
	 * @return bool
	 */
	public function gutenberg_can_edit_post_type( $can_edit, $post_type ) {
	}
	/**
	 * Enqueue our GB compatibility bundle.
	 *
	 * @return void
	 */
	public function enqueue_block_editor_assets() {
	}
	/**
	 * Add new Divi page
	 *
	 * @return void
	 */
	public function add_new_button() {
	}
	/**
	 * This filter allows VB to be directly activated for Auto Drafts.
	 *
	 * @param object $post Auto Draft post.
	 *
	 * @return void
	 */
	public function auto_draft( $post ) {
	}
	/**
	 * Add 'Edit With Divi Editor' links
	 *
	 * @param array  $actions Currently defined actions for the row.
	 * @param object $post    Current post object.
	 *
	 * @return array
	 */
	public function add_edit_link( $actions, $post ) {
	}
	/**
	 * Add filters needed to show our extra row action.
	 *
	 * @return void
	 */
	public function add_edit_link_filters() {
	}
	/**
	 * Add 'Divi' to post states when builder is enabled for it.
	 *
	 * @param array  $post_states Existing post states.
	 * @param object $post        Current post object.
	 *
	 * @return array
	 */
	public function display_post_states( $post_states, $post ) {
	}
	/**
	 * Ensures that Divi enabled CPTs support 'custom-fields'.
	 *
	 * @since 3.19.12
	 */
	public function ensure_post_type_supports() {
	}
	/**
	 * Alter update_post_metadata return value from during a REST API update
	 * when meta value isn't changed.
	 *
	 * @param mixed  $result     Previous result.
	 * @param int    $object_id  Post ID.
	 * @param string $meta_key   Meta key.
	 * @param mixed  $meta_value Meta value.
	 *
	 * @return mixed
	 */
	public function update_post_metadata( $result, $object_id, $meta_key, $meta_value ) {
	}
	/**
	 * Remove empty Divi GB placeholder when processing shortcode.
	 *
	 * @param string $post_content Raw post content (shortcode).
	 *
	 * @return string
	 */
	public function et_fb_load_raw_post_content( $post_content ) {
	}
	/**
	 * Convert a single GB gallery to shortcode.
	 *
	 * @param string $gallery Post content.
	 *
	 * @return string
	 */
	public function gb_gallery_to_shortcode( $gallery ) {
	}
	/**
	 * Convert all GB galleries to shortcodes.
	 *
	 * @param string $content Post content.
	 *
	 * @return string
	 */
	public function gb_galleries_to_shortcodes( $content ) {
	}
	/**
	 * Check a specified post's content for GB gallery and, if present, return the first
	 *
	 * @param string      $gallery Gallery data and srcs parsed from the expanded shortcode.
	 * @param int|WP_Post $post    Post ID or object.
	 *
	 * @return string|array Gallery data and srcs parsed from the expanded shortcode.
	 */
	public function get_post_gallery( $gallery, $post ) {
	}
	/**
	 * Delete first GB gallery in content
	 *
	 * @param  string $content Content.
	 * @param  bool   $deleted Whether a gallery has been already deleted or not.
	 * @return string
	 */
	public function et_delete_post_gallery( $content, $deleted ) {
	}
	/**
	 * Remove custom style from our metabox when GB is showing it.
	 *
	 * @param string $post_type Post type.
	 *
	 * @return void
	 */
	public function add_meta_boxes( $post_type ) {
	}
	/**
	 * Hook into REST API page call.
	 *
	 * @return void
	 */
	public function rest_insert_page() {
	}
	/**
	 * Custom auth function for meta updates via REST API.
	 *
	 * @param boolean $allowed  True if allowed to view the meta field by default, false if else.
	 * @param string  $meta_key The meta key.
	 * @param int     $id       Post ID.
	 *
	 * @return bool
	 */
	public function meta_auth( $allowed, $meta_key, $id ) {
	}
	/**
	 * Hook methods to WordPress
	 * Latest plugin version: 1.5
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Load classic editor and disable Gutenberg/Block Editor
 *
 * Adapted from Classic Editor plugin by WordPress Contributors.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * Classic Editor
 *
 * Copyright 2018 by WordPress Contributors
 *
 * Classic Editor  is released under the GPL-2.0+
 */
class ET_Builder_Classic_Editor {




	/**
	 * Instance of `ET_Builder_Classic_Editor`.
	 *
	 * @var ET_Builder_Classic_Editor
	 */
	private static $_instance;
	/**
	 * ET_Builder_Classic_Editor constructor.
	 */
	public function __construct() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.18
	 *
	 * @return ET_Builder_Classic_Editor
	 */
	public static function instance() {
	}
	/**
	 * Add & remove necessary actions and filters needed to load Classic Editor back
	 * These filters are based on Classic Editor plugin to ensure required filters & actions needed
	 * to load Classic Editor on Gutenberg / Block Editor (WordPress 5.0). All conditiononal Block Editor
	 * loader based on query string has been removed.
	 *
	 * @since 3.18
	 */
	public function register_actions() {
	}
}
/**
 * Extract Critical CSS
 */
class ET_Builder_Critical_CSS {




	// Include in Critical CSS the Required Assets (those which don't depends on Content).
	// To force some of the Required Assets in the BTF, check `maybe_defer_global_asset` method.
	const INCLUDE_REQUIRED = \true;
	// Used to estimate height for percentage based units like `vh`,`em`, etc.
	const VIEWPORT_HEIGHT = 1000;
	const FONT_HEIGHT     = 16;
	/**
	 * Is Critical CSS Threshold Height.
	 *
	 * @var int
	 */
	protected $_above_the_fold_height;
	/**
	 * Root element.
	 *
	 * @var stdClass
	 */
	protected $_root;
	/**
	 * Modules.
	 *
	 * @var array
	 */
	protected $_modules = array();
	/**
	 * Modules.
	 *
	 * @var stdClass
	 */
	protected $_content;
	/**
	 * Above The Fold Sections.
	 *
	 * @var array
	 */
	protected $_atf_sections = array();
	/**
	 * Builder Style Manager.
	 *
	 * @var array
	 */
	protected $_builder_styles = array();
	/**
	 * Instance of `ET_Builder_Critical_CSS`.
	 *
	 * @var ET_Builder_Critical_CSS
	 */
	private static $_instance;
	/**
	 * ET_Builder_Critical_CSS constructor.
	 */
	public function __construct() {
	}
	/**
	 * Defer some global assets if threshold is met.
	 *
	 * @param array $assets assets to defer.
	 *
	 * @since 4.10.0
	 *
	 * @return array $assets assets to be deferred.
	 */
	public function maybe_defer_global_asset( $assets ) {
	}
	/**
	 * Force a PageResource to write its content on file, even when empty
	 *
	 * @param bool  $force    Default value.
	 * @param array $resource Critical/Deferred PageResources.
	 *
	 * @since 4.10.0
	 *
	 * @return bool
	 */
	public function force_resource_write( $force, $resource ) {
	}
	/**
	 * Analyze Builder style manager.
	 *
	 * @since 4.10.0
	 *
	 * @param array $styles Style Managers.
	 *
	 * @return array
	 */
	public function enable_builder( $styles ) {
	}
	/**
	 * Prints deferred Critical CSS stlyesheet.
	 *
	 * @param string $tag    stylesheet template.
	 * @param string $slug   stylesheet slug.
	 * @param string $scheme stylesheet URL.
	 * @param string $onload stylesheet onload attribute.
	 *
	 * @since 4.10.0
	 *
	 * @return string
	 */
	public function builder_style_tag( $tag, $slug, $scheme, $onload ) {
	}
	/**
	 * Safari doesn't support `prefetch`......
	 *
	 * @since 4.10.7
	 *
	 * @return void
	 */
	public function add_safari_prefetch_workaround() {
	}
	/**
	 * Add `set_style` filter when rendering an ATF section.
	 *
	 * @since 4.10.0
	 *
	 * @param false|string $value Short-circuit return value. Either false or the value to replace the shortcode with.
	 * @param string       $tag   Shortcode name.
	 * @param array|string $attr  Shortcode attributes array or empty string.
	 * @param array        $m     Regular expression match array.
	 *
	 * @return false|string
	 */
	public function check_section_start( $value, $tag, $attr, $m ) {
	}
	/**
	 * Remove `set_style` filter after rendering an ATF section.
	 *
	 * @since 4.10.0
	 *
	 * @param string $output Shortcode output.
	 * @param string $tag    Shortcode name.
	 *
	 * @return string
	 */
	public function check_section_end( $output, $tag ) {
	}
	/**
	 * Filter used to analize content coming from Dynamic Access Class.
	 *
	 * @param array  $value   Default shortcodes list (empty).
	 * @param string $content TB/Post Content.
	 *
	 * @since 4.10.0
	 *
	 * @return array List of ATF shortcodes.
	 */
	public function dynamic_assets_modules_atf( $value, $content = '' ) {
	}
	/**
	 * Returns splitted (ATF/BFT) Content.
	 *
	 * @since 4.10.0
	 *
	 * @return stdClass
	 */
	public function dynamic_assets_content() {
	}
	/**
	 * While the filter is applied, any rendered style will be considered critical.
	 *
	 * @param array $style Style.
	 *
	 * @since 4.10.0
	 *
	 * @return array
	 */
	public function set_style( $style ) {
	}
	/**
	 * Parse Content into shortcodes.
	 *
	 * @param string $content TB/Post Content.
	 *
	 * @since 4.10.0
	 *
	 * @return array|boolean
	 */
	public static function parse_shortcode( $content ) {
	}
	/**
	 * Estimates height to split Content in ATF/BTF.
	 *
	 * @param string $content TB/Post Content.
	 *
	 * @since 4.10.0
	 *
	 * @return array List of ATF shortcodes.
	 */
	public function extract( $content ) {
	}
	/**
	 * Calculate margin and padding.
	 *
	 * @param string $value Margin and padding values.
	 *
	 * @since 4.10.0
	 *
	 * @return int margin/padding height value.
	 */
	public static function get_margin_padding_height( $value ) {
	}
	/**
	 * Disable Critical CSS.
	 *
	 * @since 4.12.0
	 *
	 * @return void
	 */
	public function disable() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 4.10.0
	 *
	 * @return ET_Builder_Critical_CSS
	 */
	public static function instance() {
	}
}
/**
 * Class to send an error report.
 */
class ET_Builder_Error_Report {




	/**
	 * Instance of `ET_Core_Data_Utils`.
	 *
	 * @var ET_Core_Data_Utils
	 */
	protected static $_;
	/**
	 * Instance of `ET_Builder_Error_Report`.
	 *
	 * @var ET_Builder_Error_Report
	 */
	private static $_instance;
	/**
	 * ET_Builder_Error_Report constructor.
	 */
	public function __construct() {
	}
	/**
	 * Get json_decode data and stripslashes if needed.
	 *
	 * @since 3.24
	 *
	 * @param string $data Data to be decoded.
	 *
	 * @return mixed
	 */
	public static function json_decode_maybe_stripslashes( $data ) {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.21.4
	 *
	 * @return ET_Builder_Error_Report
	 */
	public static function instance() {
	}
	/**
	 * Get information sent for error reporting
	 *
	 * @since 3.21.4
	 *
	 * @return array
	 */
	public static function get_debug_info() {
	}
	/**
	 * Get current product name
	 *
	 * @since 3.21.4
	 *
	 * @return string|bool
	 */
	protected function _get_product() {
	}
	/**
	 * Get debug item value
	 *
	 * @since 3.21.4
	 *
	 * @param string $info_name debug info item name.
	 * @param object $post      alias for $_POST.
	 *
	 * @return string|array|object
	 */
	protected function _get_debug_value( $info_name, $post ) {
	}
	/**
	 * Get error report content
	 *
	 * @since 3.21.4
	 *
	 * @param string $data Report data.
	 *
	 * @return string
	 */
	protected function _get_report_content( $data ) {
	}
	/**
	 * Get attachment data as string to be passed into endpoint
	 *
	 * @since 3.21.4
	 *
	 * @param string $data  Report data.
	 * @param string $field Debug info item name.
	 *
	 * @return string
	 */
	protected function _get_exported_layout_content( $data, $field ) {
	}
	/**
	 * Endpoint for sending error report request
	 *
	 * @since 3.21.4
	 */
	public static function endpoint() {
	}
}
/**
 * Commonly used translations.
 */
class ET_Builder_I18n {




	/**
	 * Retrieve a commonly used translation.
	 *
	 * @since 4.4.9
	 *
	 * @param string $key Translation key.
	 *
	 * @return string
	 */
	public static function get( $key ) {
	}
}
/**
 * Class to move JQuery from head to body.
 */
class ET_Builder_JQuery_Body {




	/**
	 * Cache.
	 *
	 * @var array.
	 */
	protected $_has_jquery_dep = array();
	/**
	 * Should move jquery.
	 *
	 * @var bool|null.
	 */
	protected static $_should_move_jquery = \null;
	/**
	 * Instance of `ET_Builder_JQuery_Body`.
	 *
	 * @var ET_Builder_JQuery_Body
	 */
	private static $_instance;
	/**
	 * ET_Builder_JQuery_Body constructor.
	 */
	public function __construct() {
	}
	/**
	 * Get post content from Theme Builder templates.
	 * Combine it with the post content from the current post and integration code.
	 *
	 * @return string
	 * @since  4.10.0
	 */
	public function get_all_content() {
	}
	/**
	 * Recursively check if a script (or its deps) depends on JQuery.
	 *
	 * @since 4.10.0
	 * @param string $script Script Handle.
	 *
	 * @return bool
	 */
	public function has_jquery_dep( $script ) {
	}
	/**
	 * Get script deps.
	 *
	 * @since 4.10.0
	 * @param string $script Script Handle.
	 *
	 * @return array
	 */
	public function get_deps( $script ) {
	}
	/**
	 * Check if a script is currently enqueued in HEAD.
	 *
	 * @since 4.10.0
	 * @param string $handle Script Handle.
	 *
	 * @return bool
	 */
	public function in_head( $handle ) {
	}
	/**
	 * Check whether some content includes jQuery or not.
	 *
	 * @since 4.10.0
	 * @param string $content Content.
	 *
	 * @return bool
	 */
	public static function has_jquery_content( $content ) {
	}
	/**
	 * Move jQuery / migrate / 3P scripts in BODY.
	 *
	 * @since 4.10.0
	 *
	 * @return void
	 */
	public function wp_print_scripts() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 4.10.0
	 *
	 * @return ET_Builder_JQuery_Body
	 */
	public static function instance() {
	}
	/**
	 * Fake jQuery in head when jQuery body option is true.
	 */
	public function add_jquery_sub() {
	}
	/**
	 * Disable the Fake jQuery in head when jQuery body option is true.
	 */
	public function remove_jquery_sub() {
	}
	/**
	 * Check if jQuery should be moved to the body.
	 */
	public function should_move_jquery() {
	}
}
/**
 * Divi Split Library.
 *
 * @package Builder
 */
/**
 * Core class used to Split library item.
 */
class ET_Builder_Split_Library {




	/**
	 * Instance of `ET_Builder_Split_Library`.
	 *
	 * @var ET_Builder_Split_Library
	 */
	private static $_instance;
	/**
	 * Get the class instance.
	 *
	 * @since 4.20.3
	 *
	 * @return ET_Builder_Split_Library
	 */
	public static function instance() {
	}
	/**
	 * ET_Builder_Split_Library constructor.
	 */
	public function __construct() {
	}
	/**
	 * Registers the Split Library's AJAX callbacks.
	 *
	 * @since 4.20.3
	 */
	protected function _register_ajax_callbacks() {
	}
	/**
	 * Split library item based on split type
	 */
	public function split_library_item() {
	}
	/**
	 * Get content with type.
	 *
	 * @since 4.20.3
	 *
	 * @param string $content Content to be processed.
	 * @param string $type    Type of the content.
	 */
	private function _get_content_with_type( $content, $type ) {
	}
	/**
	 * Get formatted data for cloud item split to cloud.
	 *
	 * @since 4.20.3
	 *
	 * @param array  $cloud_content Cloud Item data.
	 * @param string $content       Shortcode after split cloud item.
	 * @param array  $assoc_data    Related data after split cloud item.
	 */
	private function _get_cloud_to_cloud_formatted_data( $cloud_content, $content, $assoc_data ) {
	}
	/**
	 * Get formatted data for local item split to cloud.
	 *
	 * @since 4.20.3
	 *
	 * @param string $content    Shortcode after split cloud item.
	 * @param array  $assoc_data Related data after split cloud item.
	 *
	 * @return array
	 */
	private function _get_local_to_cloud_formatted_data( $content, $assoc_data ) {
	}
	/**
	 * Get formatted data for cloud item split to local.
	 *
	 * @since 4.20.3
	 *
	 * @param array  $cloud_content Cloud Item data.
	 * @param string $content       Shortcode after split cloud item.
	 * @param array  $assoc_data    Related data after split cloud item.
	 *
	 * @return array
	 */
	private function _get_cloud_to_local_formatted_data( $cloud_content, $content, $assoc_data ) {
	}
	/**
	 * Get common formatted data for cloud item.
	 *
	 * @since 4.20.3
	 *
	 * @param string $content    Shortcode after split cloud item.
	 * @param array  $assoc_data Related data after split cloud item.
	 *
	 * @return array
	 */
	private function _get_common_cloud_formatted_data( $content, $assoc_data ) {
	}
	/**
	 * Get all the updated terms.
	 *
	 * @since 4.20.3
	 *
	 * @return array
	 */
	private function _get_all_updated_terms() {
	}
}
/**
 * Class ET_Builder_Background_Mask_Options
 *
 * @since 4.15.0
 */
class ET_Builder_Background_Mask_Options {




	/**
	 * Class instance object.
	 *
	 * @var ET_Builder_Background_Mask_Options
	 */
	private static $_instance;
	/**
	 * Mask Settings.
	 *
	 * @var array
	 */
	private static $_settings = \null;
	/**
	 * Get instance of ET_Builder_Background_Mask_Options.
	 *
	 * @return ET_Builder_Background_Mask_Options
	 */
	public static function get() {
	}
	/**
	 * Get SVG Settings for a Mask Style.
	 *
	 * @param string $name Style Name.
	 *
	 * @return array
	 */
	public function get_style( $name ) {
	}
	/**
	 * Returns SVG url for Mask style.
	 *
	 * @param string $name     Style Name.
	 * @param string $color    Color value.
	 * @param string $type     SVG type, valid options: landscape | portrait | square | thumbnail.
	 * @param bool   $rotated  Rotated or not.
	 * @param bool   $inverted Inverted or not.
	 * @param string $size     Size value.
	 *
	 * @return string
	 */
	public function get_svg( $name, $color, $type, $rotated, $inverted, $size ) {
	}
	/**
	 * Get SVG content for a Mask Style.
	 *
	 * @param string $name     Style Name.
	 * @param string $type     Valid options: landscape | portrait | square | thumbnail.
	 * @param bool   $rotated  Default false, set true to get rotated version.
	 * @param bool   $inverted Default false, set true to get inverted version.
	 *
	 * @return string
	 */
	public function get_svg_content( $name, $type, $rotated = \false, $inverted = \false ) {
	}
	/**
	 * Get viewBox for a Mask Style.
	 *
	 * @param string $name Style name.
	 * @param string $type viewBox type, valid options: landscape | portrait | square | thumbnail.
	 *
	 * @return string
	 */
	public function get_view_box( $name, $type ) {
	}
	/**
	 * Mask SVG Settings.
	 *
	 * @return array
	 */
	public function settings() {
	}
	/**
	 * Default viewBox settings for Mask.
	 *
	 * @return string[]
	 */
	public function view_box_settings() {
	}
	/**
	 * Get default mask style.
	 *
	 * @return string Default Style Name.
	 */
	public function get_default_style_name() {
	}
}
/**
 * ET_Builder_Background_Mask_Style_Base.
 *
 * @since 4.15.0
 */
abstract class ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	abstract public function settings();
}
/**
 * Class ET_Builder_Background_Mask_Style_Factory.
 *
 * @since 4.15.0
 */
class ET_Builder_Background_Mask_Style_Factory {




	/**
	 * Class instance object
	 *
	 * @var array Holds all Mask Style instance.
	 */
	private static $_instance = array();
	/**
	 * Get instance of the Class
	 *
	 * @param string $name Mask Style Name.
	 *
	 * @return ET_Builder_Background_Mask_Style_Base
	 */
	public static function get( $name ) {
	}
}
/**
 * Class ET_Builder_Background_Pattern_Options
 *
 * @since 4.15.0
 */
class ET_Builder_Background_Pattern_Options {




	/**
	 * Class instance object.
	 *
	 * @var ET_Builder_Background_Pattern_Options
	 */
	private static $_instance;
	/**
	 * Pattern Settings.
	 *
	 * @var array
	 */
	private static $_settings = \null;
	/**
	 * Get instance of ET_Builder_Background_Pattern_Options.
	 *
	 * @return ET_Builder_Background_Pattern_Options
	 */
	public static function get() {
	}
	/**
	 * Get SVG Settings for a Pattern Style.
	 *
	 * @param string $name Style name.
	 *
	 * @return array
	 */
	public function get_style( $name ) {
	}
	/**
	 * Returns SVG content for a Pattern style.
	 *
	 * @param string $name     Style Name.
	 * @param string $color    Color value.
	 * @param string $type     SVG Type.
	 * @param bool   $rotated  Default false, set true to get rotated version.
	 * @param bool   $inverted Default false, set true to get inverted version.
	 *
	 * @return string
	 */
	public function get_svg( $name, $color, $type, $rotated = \false, $inverted = \false ) {
	}
	/**
	 * Get SVG content for a Pattern Style.
	 *
	 * @param string $name     Pattern style name.
	 * @param string $type     Valid options: default | thumbnail.
	 * @param bool   $rotated  Default false, set true to get rotated version.
	 * @param bool   $inverted Default false, set true to get inverted version.
	 *
	 * @return string
	 */
	public function get_svg_content( $name, $type, $rotated = \false, $inverted = \false ) {
	}
	/**
	 * Get Width/Height/viewBox for a Pattern Style.
	 *
	 * @param string $name    Style name.
	 * @param string $type    Value Style.
	 * @param bool   $rotated Default false, set true to get rotated version.
	 *
	 * @return string
	 */
	public function get_value( $name, $type, $rotated = \false ) {
	}
	/**
	 * Get value for thumbnail settings.
	 *
	 * @param string $key Attr key.
	 *
	 * @return string
	 */
	public function get_thumbnail_value( $key ) {
	}
	/**
	 * Pattern SVG Settings.
	 *
	 * @return array
	 */
	public function settings() {
	}
	/**
	 * Default thumbnail settings for Pattern.
	 *
	 * @return string[]
	 */
	public function thumbnail_settings() {
	}
	/**
	 * Get default pattern style.
	 *
	 * @return string Default Style Name.
	 */
	public function get_default_style_name() {
	}
}
/**
 * ET_Builder_Background_Pattern_Style_Base.
 */
abstract class ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	abstract public function settings();
}
/**
 * Class ET_Builder_Background_Pattern_Style_Factory.
 */
class ET_Builder_Background_Pattern_Style_Factory {




	/**
	 * Class instance object
	 *
	 * @var array Holds all Pattern Style instance.
	 */
	private static $_instance = array();
	/**
	 * Get instance of the Class
	 *
	 * @param string $name Pattern Style Name.
	 *
	 * @return ET_Builder_Background_Pattern_Style_Base
	 */
	public static function get( $name ) {
	}
}
/**
 * Class ET_Builder_Mask_Arch
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Arch extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Bean
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Bean extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Blades
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Blades extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Caret
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Caret extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Chevrons
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Chevrons extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Corner_Blob
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Corner_Blob extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Corner_Lake
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Corner_Lake extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Corner_Paint
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Corner_Paint extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Corner_Pill
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Corner_Pill extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Corner_Square
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Corner_Square extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Diagonal_Bars_2
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Diagonal_Bars_2 extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Diagonal_Bars
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Diagonal_Bars extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Diagonal_Pills
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Diagonal_Pills extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Diagonal
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Diagonal extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Ellipse
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Ellipse extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Floating_Squares
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Floating_Squares extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Honeycomb
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Honeycomb extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Layer_Blob
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Layer_Blob extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Paint
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Paint extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Rock_Stack
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Rock_Stack extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Square_Stripes
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Square_Stripes extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Triangles
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Triangles extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Mask_Wave
 *
 * @since 4.15.0
 */
class ET_Builder_Mask_Wave extends \ET_Builder_Background_Mask_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_3D_Diamonds
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_3D_Diamonds extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Checkerboard
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Checkerboard extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Confetti
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Confetti extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Crosses
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Crosses extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Cubes
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Cubes extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Diagonal_Srtipes_2
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Diagonal_Srtipes_2 extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Diagonal_Stripes
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Diagonal_Stripes extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Diamonds
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Diamonds extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Honeycomb
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Honeycomb extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Inverted_Chevrons_2
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Inverted_Chevrons_2 extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Inverted_Chevrons
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Inverted_Chevrons extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Ogees
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Ogees extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Pills
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Pills extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Pinwheel
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Pinwheel extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Polka_Dots
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Polka_Dots extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Scallops
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Scallops extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Shippo
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Shippo extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Smiles
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Smiles extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Squares
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Squares extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Triangles
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Triangles extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Tufted
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Tufted extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Waves
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Waves extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Zig_Zag_2
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Zig_Zag_2 extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
/**
 * Class ET_Builder_Pattern_Zig_Zag
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Zig_Zag extends \ET_Builder_Background_Pattern_Style_Base {




	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
	}
}
class ET_Builder_Global_Presets_Settings {




	const CUSTOM_DEFAULTS_OPTION            = 'builder_custom_defaults';
	const CUSTOM_DEFAULTS_UNMIGRATED_OPTION = 'builder_custom_defaults_unmigrated';
	const CUSTOMIZER_SETTINGS_MIGRATED_FLAG = 'customizer_settings_migrated_flag';
	const PRESETS_STORAGE_MIGRATED_FLAG     = 'presets_storage_migrated_flag';
	const GLOBAL_PRESETS_OPTION_LEGACY      = 'builder_global_presets';
	const GLOBAL_PRESETS_OPTION             = 'builder_global_presets_ng';
	const GLOBAL_PRESETS_OPTION_TEMP        = 'builder_global_presets_temp';
	const CUSTOM_DEFAULTS_MIGRATED_FLAG     = 'custom_defaults_migrated_flag';
	const MODULE_PRESET_ATTRIBUTE           = '_module_preset';
	const MODULE_INITIAL_PRESET_ID          = '_initial';
	/**
	 * @var array - The list of the product short names we allowing to do a Module Customizer settings migration rollback.
	 */
	public static $allowed_products = array(
		'customizer_settings' => array(
			'divi'  => '4.5',
			'extra' => '4.5',
		),
		'storage_migration'   => array(
			'divi'         => '4.19.2',
			'extra'        => '4.19.2',
			'divi-builder' => '4.19.2',
		),
	);
	// Migration phase two settings
	public static $phase_two_settings                     = array( 'body_font_size', 'captcha_font_size', 'caption_font_size', 'filter_font_size', 'form_field_font_size', 'header_font_size', 'meta_font_size', 'number_font_size', 'percent_font_size', 'price_font_size', 'sale_badge_font_size', 'sale_price_font_size', 'subheader_font_size', 'title_font_size', 'toggle_font_size', 'icon_size', 'padding', 'custom_padding' );
	protected static $_module_additional_slugs            = array(
		'et_pb_section' => array( 'et_pb_section_fullwidth', 'et_pb_section_specialty' ),
		'et_pb_slide'   => array( 'et_pb_slide_fullwidth' ),
		'et_pb_column'  => array( 'et_pb_column_specialty' ),
	);
	protected static $_module_types_conversion_map        = array(
		'et_pb_section'      => '_convert_section_type',
		'et_pb_column'       => '_convert_column_type',
		'et_pb_column_inner' => '_convert_column_type',
		'et_pb_slide'        => '_convert_slide_type',
	);
	protected static $_module_import_types_conversion_map = array(
		'et_pb_section_specialty' => 'et_pb_section',
		'et_pb_section_fullwidth' => 'et_pb_section',
		'et_pb_column_inner'      => 'et_bp_column',
		'et_pb_slide_fullwidth'   => 'et_pb_slide',
		'et_pb_column_specialty'  => 'et_pb_column',
	);
	protected static $_instance;
	protected $_settings;
	protected function __construct() {
	}
	/**
	 * Migrates global presets into a separate setting.
	 *
	 * @since 4.19.3
	 *
	 * @return void
	 */
	protected function _migrate_presets_storage() {
	}
	/**
	 * Fix global colors in Global Presets.
	 * Clean up global_colors_info array which may contain duplicates.
	 *
	 * @since 4.19.3
	 *
	 * @param object|array $presets The object representing Global Presets settings.
	 *
	 * @return object
	 */
	protected function _fix_presets_before_migration( $presets ) {
	}
	protected function _register_hooks() {
	}
	/**
	 * Returns instance of the singleton class
	 *
	 * @since 4.5.0
	 *
	 * @return ET_Builder_Global_Presets_Settings
	 */
	public static function instance() {
	}
	/**
	 * Returns the list of additional module slugs used to separate Global Presets settings.
	 * For example defaults for sections must be separated depends on the section type (regular, fullwidth or specialty).
	 *
	 * @since 4.5.0
	 *
	 * @param $module_slug - The module slug for which additional slugs are looked up.
	 *
	 * @return array       - The list of the additional slugs.
	 */
	public function get_module_additional_slugs( $module_slug ) {
	}
	/**
	 * Returns builder Global Presets settings.
	 *
	 * @since 4.5.0
	 *
	 * @return object
	 */
	public function get_global_presets() {
	}
	/**
	 * Returns builder Temp Presets settings.
	 *
	 * @since 4.17.0
	 *
	 * @return object
	 */
	public function get_temp_presets() {
	}
	/**
	 * Remove Temp Presets settings from the database.
	 *
	 * @since 4.17.0
	 *
	 * @return object
	 */
	public function clear_temp_presets() {
	}
	/**
	 * Checks if the gives preset ID exists
	 *
	 * @since 4.5.0
	 *
	 * @param string $module_slug
	 * @param string $preset_id
	 *
	 * @return bool
	 */
	protected function is_module_preset_exist( $module_slug, $preset_id ) {
	}
	/**
	 * Returns a default preset ID for the given module type
	 *
	 * @since 4.5.0
	 *
	 * @param string $module_slug
	 *
	 * @return string
	 */
	public function get_module_default_preset_id( $module_slug ) {
	}
	/**
	 * Returns the module preset ID
	 * If the preset ID doesn't exist it will return the default preset ID
	 *
	 * @since 4.5.0
	 *
	 * @param string $module_slug
	 * @param array  $module_attrs
	 *
	 * @return string
	 */
	public function get_module_preset_id( $module_slug, $module_attrs ) {
	}
	/**
	 * Returns the module preset by the given preset ID
	 * Returns an empty object if no preset found
	 *
	 * @since 4.5.0
	 *
	 * @param string $module_slug
	 * @param string $preset_id
	 *
	 * @return stdClass
	 */
	public function get_module_preset( $module_slug, $preset_id ) {
	}
	/**
	 * Returns Global Presets settings for the particular module.
	 *
	 * @since 4.5.0
	 *
	 * @param string $module_slug The module slug.
	 * @param array  $attrs       The module attributes.
	 *
	 * @return array
	 */
	public function get_module_presets_settings( $module_slug, $attrs ) {
	}
	/**
	 * Returns Global Presets settings with global colors injected.
	 *
	 * @since 4.10.0
	 * @since 4.17.2 Perform substring replacement (for compound settings like background gradient stops).
	 *
	 * @param array $attrs - The module attributes.
	 *
	 * @return array
	 */
	public static function maybe_set_global_colors( $attrs ) {
	}
	/**
	 * Checks whether customizer settings migrated or not
	 *
	 * @since 4.5.0
	 *
	 * @return bool
	 */
	public static function is_customizer_migrated() {
	}
	/**
	 * Checks whether Custom Defaults settings migrated or not
	 *
	 * @since 4.5.0
	 *
	 * @return bool
	 */
	public static function are_custom_defaults_migrated() {
	}
	/**
	 * Checks whether presets storage migrated or not.
	 *
	 * @since 4.19.3
	 *
	 * @return bool
	 */
	public static function is_presets_storage_migrated() {
	}
	/**
	 * Migrates Module Customizer settings to Custom Defaults
	 *
	 * @since 4.5.0
	 *
	 * @param array $defaults - The list of modules default settings
	 */
	public function migrate_customizer_settings( $defaults ) {
	}
	/**
	 * Generates `_initial` module presets structure
	 *
	 * @since 4.5.0
	 *
	 * @param string $module_slug
	 * @param array  $all_modules
	 *
	 * @return object
	 */
	public static function generate_module_initial_presets_structure( $module_slug, $all_modules ) {
	}
	/**
	 * Converts Custom Defaults to the new Global Presets format
	 *
	 * @since 4.5.0
	 *
	 * @param object $custom_defaults - The previous Custom Defaults.
	 *
	 * @return object
	 */
	public static function migrate_custom_defaults_to_global_presets( $custom_defaults ) {
	}
	/**
	 * Migrates existing Custom Defaults to the Global Presets structure
	 *
	 * @since 4.5.0
	 */
	public function migrate_custom_defaults() {
	}
	/**
	 * Apply attribute migrations.
	 *
	 * @since 4.14.0
	 */
	public function apply_attribute_migrations() {
	}
	/**
	 * Configuring and running migration of global presets via "et_pb_module_shortcode_attributes".
	 *
	 * @since 4.14.0
	 *
	 * @param object $preset      Global preset object.
	 * @param string $module_slug Module slug.
	 *
	 * @return void
	 */
	public static function migrate_settings_as_module_attributes( $preset, $module_slug ) {
	}
	/**
	 * Handles Presets Storage Rollback.
	 *
	 * @since 4.19.3
	 *
	 * @param string $product_name          - The short name of the product rolling back.
	 * @param string $rollback_from_version - Rollback from version.
	 * @param string $rollback_to_version   - Rollback to version.
	 */
	public function rollback_presets_storage( $product_name, $rollback_from_version, $rollback_to_version ) {
	}
	/**
	 * Handles theme version rollback.
	 *
	 * @since 4.5.0
	 *
	 * @param string $product_name          - The short name of the product rolling back.
	 * @param string $rollback_from_version
	 * @param string $rollback_to_version
	 */
	public function after_version_rollback( $product_name, $rollback_from_version, $rollback_to_version ) {
	}
	/**
	 * Converts module type (slug).
	 *
	 * Used to separate Global Presets settings for modules sharing the same slug but having different meaning
	 * For example: Regular, Fullwidth and Specialty section types
	 *
	 * @since 4.5.0
	 *
	 * @param string $type  The module type (slug).
	 * @param array  $attrs The module attributes.
	 *
	 * @return string      The converted module type (slug)
	 */
	public function maybe_convert_module_type( $type, $attrs ) {
	}
	/**
	 * Converts Section module slug to appropriate slug used in Global Presets
	 *
	 * @since 4.5.0
	 *
	 * @param array $attrs - The section attributes
	 *
	 * @return string      - The converted section type depends on the section attributes
	 */
	protected function _convert_section_type( $attrs ) {
	}
	/**
	 * Converts Slide module slug to appropriate slug used in Global Presets
	 *
	 * @since 4.5.0
	 *
	 * @return string - The converted slide type depends on the parent slider type
	 */
	protected function _convert_slide_type() {
	}
	/**
	 * Converts Column module slug to appropriate slug used in Global Presets
	 *
	 * @since 4.5.0
	 *
	 * @return string - The converted column type
	 */
	protected function _convert_column_type( $attrs, $type ) {
	}
	/**
	 * Filters Global Presets setting to avoid non plain values like arrays or objects.
	 *
	 * Returns FALSE when the value is an Object or an array.
	 *
	 * @since 4.13.0 Included PHPDoc description.
	 * @since 4.5.0
	 *
	 * @param $value - The Global Presets setting value
	 *
	 * @return bool
	 */
	protected static function _filter_global_presets_setting_value( $value ) {
	}
	/**
	 * Performs Global Presets format normalization.
	 * Usually used to cast format from array to object
	 * Also used to normalize global colors
	 *
	 * @since 4.5.0
	 * @since 4.17.2 Modified the global color option check to perform a substring match on multipart settings (like gradient stops).
	 *
	 * @param object|array $presets The object representing Global Presets settings.
	 *
	 * @return object
	 */
	protected function _normalize_global_presets( $presets ) {
	}
}
/**
 * Block Templates Compatibility Class.
 *
 * @since 4.9.8
 */
class ET_Builder_Block_Templates {




	/**
	 * Instance of `ET_Builder_Block_Templates`.
	 *
	 * @var ET_Builder_Block_Templates
	 */
	private static $_instance;
	/**
	 * ET_Builder_Block_Templates constructor.
	 */
	public function __construct() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 4.9.8
	 *
	 * @return ET_Builder_Block_Templates
	 */
	public static function instance() {
	}
	/**
	 * Initialize some hooks to support compatibility with block templates.
	 *
	 * @since 4.14.7
	 */
	public function init_hooks() {
	}
	/**
	 * Filter specific template loaders to use theme template files if any instead of
	 * 'wp_template' posts.
	 *
	 * @since 4.17.4
	 */
	public static function filter_template_loaders() {
	}
	/**
	 * Maybe override block templates.
	 *
	 * This action should be executed only when:
	 * - TB Template is active on current page
	 * - Current template is block template canvas
	 *
	 * @since 4.14.7
	 *
	 * @param string $template Current template path.
	 */
	public static function override_block_template( $template = '', $type = '', $templates = array() ) {
	}
	/**
	 * Set main content opening wrapper.
	 *
	 * Provide the opening wrapper tags only to ensure TB layout works smoothly. The same
	 * wrapper is being used on Divi theme.
	 *
	 * @since 4.14.7
	 */
	public static function main_content_opening_wrapper() {
	}
	/**
	 * Set main content closing wrapper.
	 *
	 * Provide the closing wrapper tag only to ensure TB layout works smoothly. The same
	 * wrapper is being used on Divi theme.
	 *
	 * @since 4.14.7
	 */
	public static function main_content_closing_wrapper() {
	}
	/**
	 * Enqueue block templates compatibility styles.
	 *
	 * @since 4.14.7
	 */
	public static function block_template_styles() {
	}
	/**
	 * Disable deprecated files warnings.
	 *
	 * Since themes that support block template may don't have some files, the template
	 * may fall into backward compatibility for those files and trigger warnings. Hence,
	 * we need to disable them temporarily. The list of files:
	 * - header
	 * - footer
	 * - comments
	 *
	 * @since 4.14.7
	 *
	 * @param string $file File info.
	 */
	public static function disable_deprecated_file_warnings( $file ) {
	}
	/**
	 * Remove unsupported theme filters for WooCommerce.
	 *
	 * When current theme supports FSE, WooCommerce will mark it as unsupported theme and
	 * overrides some filters and few of them are related to builder. Hence, we need to
	 * remove those filters to ensure Divi Builder works normally.
	 *
	 * @since 4.14.7
	 */
	public static function remove_unsupported_theme_filter() {
	}
	/**
	 * Determine whether block templates compatibility support is needed or not.
	 *
	 * Support block templates compatibility only if:
	 * - Current WordPress or Gutenberg supports block templates
	 * - Current theme supports block templates
	 *
	 * @since 4.17.4
	 *
	 * @return boolean Compatibility status.
	 */
	public static function is_block_templates_compat_needed() {
	}
	/**
	 * Get supported template slugs.
	 *
	 * Those template slugs are available on TB.
	 *
	 * @since 4.17.4
	 *
	 * @return string[] List of supported template slugs.
	 */
	public static function get_supported_template_slugs() {
	}
}
/**
 * Class use theme's chosen fonts in Gutenberg editor.
 *
 * Class ET_GB_Editor_Typography
 */
class ET_GB_Editor_Typography {




	/**
	 * `ET_GB_Editor_Typography` instance.
	 *
	 * @var ET_GB_Editor_Typography
	 */
	private static $_instance;
	/**
	 * TB's body layout post
	 *
	 * @var WP_Post
	 */
	private $_body_layout_post;
	/**
	 * The `et_pb_post_content` shortcode content extracted from the TB's body layout post content
	 *
	 * @var string
	 */
	private $_post_content_shortcode;
	/**
	 * The `et_pb_post_title shortcode` content extracted from the TB's body layout post content
	 *
	 * @var string
	 */
	private $_post_title_shortcode;
	/**
	 * Constructor.
	 *
	 * ET_GB_Editor_Typography constructor.
	 */
	public function __construct() {
	}
	/**
	 * Get class instance.
	 *
	 * @return object class instance.
	 */
	public static function instance() {
	}
	/**
	 * Register hooks
	 */
	public function register_hooks() {
	}
	/**
	 * Filter editor styles pass to the GB editor.
	 *
	 * @param array                   $editor_settings      editor settings.
	 * @param WP_Block_Editor_Context $block_editor_context The current block editor context.
	 *
	 * @return mixed
	 */
	public function block_editor_settings_all( $editor_settings, $block_editor_context ) {
	}
	/**
	 * Set the et_pb_post_content and et_pb_post_title shortcode from the body layout post content.
	 *
	 * @param string $prop     {@see self::$_post_content_shortcode} or {@see self::$_post_title_shortcode} property.
	 * @param array  $tagnames Shortcode tagnames.
	 */
	private function _initialize_shortcode( $prop, $tagnames ) {
	}
	/**
	 * Print GB typography style.
	 */
	public function enqueue_block_typography_styles() {
	}
	/**
	 * Print the post content style.
	 */
	public function get_body_styles() {
	}
	/**
	 * Print post title styles.
	 */
	public function get_title_styles() {
	}
	/**
	 * Print TB's style.
	 */
	public function get_tb_styles() {
	}
	/**
	 * Generate the heading levels font size from the Header Size customizer setting and return style.
	 *
	 * @return string
	 */
	public function get_heading_levels_font_size_style() {
	}
}
class ET_GB_Block_Layout {




	/**
	 * @var ET_GB_Block_Layout
	 */
	private static $_instance;
	private $block_name = 'divi/layout';
	function __construct() {
	}
	/**
	 * Get class instance
	 *
	 * @since 4.1.0
	 *
	 * @return object class instance
	 */
	public static function instance() {
	}
	/**
	 * Register block
	 *
	 * @since 4.1.0
	 */
	public function register_block() {
	}
	/**
	 * Register hooks
	 *
	 * @since 4.1.0
	 */
	public function register_hooks() {
	}
	/**
	 * Check if current request is Divi Layout preview for block request. Layout block preview page
	 * is only valid for logged in user with edit_posts cap with query string for activating block
	 * layout preview and its nonce to verify it.
	 *
	 * Initially, is_singular() check existed but reusable block at `wp_block` CPT and any other CPT
	 * that has no frontend due to its post type registration sets `public` attribute to `false`
	 * renders layout block preview at non singular page makes is_singular() check need to be dropped
	 *
	 * @since 4.1.0
	 *
	 * @return bool
	 */
	public static function is_layout_block_preview() {
	}
	/**
	 * Check if current builder shortcode rendering is done inside layout block
	 *
	 * @since 4.1.0
	 *
	 * @return bool
	 */
	public static function is_layout_block() {
	}
	/**
	 * Register portability which is needed to import premade and saved Layout via Divi Library;
	 * Portability is intentionally disabled on builder page by `et_builder_should_load_framework()`
	 * nevertheless excluding GB there doesn't work because it is being too early before any
	 * GB check is hooked. Thus Register another portability for GB + builder page
	 *
	 * @since 4.1.0
	 */
	public function register_portability_on_builder_page() {
	}
	/**
	 * Filter rendered Divi - Layout block on FE.
	 *
	 * @since 4.1.0
	 * @since 4.10.0 Filter core/post-excerpt rendered output.
	 * @since 4.14.5 Move other blocks. {@see feature/gutenberg/blocks}.
	 * @since 4.14.8 Add support for WP Editor.
	 *
	 * @param string $block_content Saved & serialized block data.
	 * @param array  $block         Block info.
	 */
	public function render_block( $block_content, $block ) {
	}
	/**
	 * Overwrite template path if current request is Divi Layout block preview
	 *
	 * @since 4.1.0
	 *
	 * @return string
	 */
	public function register_preview_template( $template ) {
	}
	/**
	 * Get Theme Builder's template settings of current (layout block preview) page
	 *
	 * @since 4.3.4
	 *
	 * @return array
	 */
	public static function get_preview_tb_template() {
	}
	/**
	 * Early scripts and styles queue for Layout Block Preview page
	 * Need to queue early because `et-builder-modules-script` uses localize scripts on this method
	 *
	 * @since 4.4.1 Compatibility fixes for WP 5.4
	 * @since 4.1.0
	 */
	public function enqueue_block_preview_styles_scripts() {
	}
	/**
	 * Late scripts and styles queue for Layout Block Preview page
	 * Need to queue late because localize script needs to populate settings from rendered modules
	 *
	 * @since 4.4.1 Renamed into `enqueue_block_preview_footer_styles_scripts`. Localize script
	 *                 value which is used by `et-builder-modules-script` is queued on earlier hook
	 * @since 4.1.0
	 */
	public function enqueue_block_preview_footer_styles_scripts() {
	}
	/**
	 * Add builder classname on body class if layout block exist on the page
	 *
	 * @since 4.1.0
	 *
	 * @param array classname
	 *
	 * @return array modified classname
	 */
	public function add_body_classnames( $classes ) {
	}
	/**
	 * Add box shadow's highest offset value if box shadow is used on section so block preview area
	 * can adjust its padding to make section's box shadow previewable on block preview
	 *
	 * @since 4.1.0
	 *
	 * @return array
	 */
	public function add_section_boxshadow_attributes( $attributes, $props, $render_count ) {
	}
	/**
	 * Modify layout content condition. Preview template should consider itself is_single = true
	 *
	 * @since 4.1.0
	 * @since 4.4.1 don't overwrite `p` and `post_type` query vars if homepage displays static page
	 *
	 * @param object
	 */
	public function modify_layout_content_condition( $query ) {
	}
	/**
	 * Modify layout content content output based on layout shortcode layout sent over POST for
	 * previewing layout block on gutenberg editor
	 *
	 * @since 4.1.0
	 *
	 * @param string $content post's content
	 *
	 * @return string
	 */
	public function modify_layout_content_output( $content ) {
	}
	/**
	 * Modify post meta for enabling builder status and disabling static css if current request is
	 * layout block preview
	 *
	 * @since 4.1.0
	 *
	 * @param null   $value
	 * @param int    $object_id
	 * @param string $meta_key
	 * @param bool   $single
	 *
	 * @return mixed
	 */
	public function modify_layout_content_builder_meta( $value, $object_id, $meta_key, $single ) {
	}
	/**
	 * Modify raw post content for visual builder for layout content edit screen
	 *
	 * @since 4.1.0
	 *
	 * @param string $post_content
	 *
	 * @return string modified post content
	 */
	public function modify_layout_content_visual_builder_raw_post_content( $post_content ) {
	}
	/**
	 * Modify Theme Builder body layout that is used on layout block preview
	 *
	 * @since 4.3.4
	 *
	 * @param string $content
	 *
	 * @return string
	 */
	public function modify_theme_builder_body_layout( $content ) {
	}
	/**
	 * Get current active WP Editor template on block render.
	 *
	 * @since 4.14.8
	 *
	 * @return WP_Block_Template|null Template. Return null if it doesn't exist.
	 */
	public function get_wp_editor_template_on_render() {
	}
	/**
	 * Get default template slug.
	 *
	 * @since 4.14.8
	 *
	 * @return string Template type.
	 */
	public function get_default_template_slug() {
	}
}
/**
 * Class to handle Core - Post Excerpt block integration.
 */
class ET_GB_Block_Post_Excerpt {




	/**
	 * Class instance.
	 *
	 * @var ET_GB_Block_Post_Excerpt
	 */
	private static $_instance;
	/**
	 * Class constructor.
	 */
	public function __construct() {
	}
	/**
	 * Get class instance.
	 *
	 * @since 4.14.5
	 *
	 * @return ET_GB_Block_Post_Excerpt Class instance.
	 */
	public static function instance() {
	}
	/**
	 * Register hooks
	 *
	 * @since 4.14.5
	 */
	public function register_hooks() {
	}
	/**
	 * Filter rendered Core - Post Excerpt block on FE.
	 *
	 * @since 4.14.5
	 *
	 * @param string $block_content Saved & serialized block data.
	 * @param array  $parsed_block  Block info.
	 *
	 * @return string Modified block post excerpt.
	 */
	public function render_block( $block_content, $parsed_block ) {
	}
	/**
	 * Filter post excerpt of REST API request.
	 *
	 * Only filter post excerpt rendered from REST API request. This API request is being
	 * used by Block Editor.
	 *
	 * @since 4.14.5
	 *
	 * @param string $post_excerpt Current post excerpt rendered.
	 *
	 * @return string Modified post excerpt.
	 */
	public function get_the_post_excerpt( $post_excerpt ) {
	}
	/**
	 * Get rendered post excerpt built with builder. Always return rendered $block_excerpt
	 * because it's already wrapped with Post Excerpt block wrapper.
	 *
	 * @since 4.14.5
	 *
	 * @param string  $block_excerpt Current rendered post excerpt.
	 * @param boolean $is_wrapped    Whether the post excerpt is wrapped or not.
	 * @param array   $attributes    Block attributes values.
	 *
	 * @return string Old or new rendered post excerpt.
	 */
	public function get_rendered_post_excerpt( $block_excerpt, $is_wrapped = \false, $attributes = array() ) {
	}
}
/**
 * Class ET_GB_Utils_Conversion
 *
 * Handling Gutenberg serialized content conversion into builder shortcode layout
 */
class ET_GB_Utils_Conversion {




	// Populate all layout block which is placed inside other block. Layout block contains
	// section which has to be the first level element once converted into VB content
	private $deep_layout_blocks = array();
	// Layout list. Layout block got its own section. Others are concatenated into text module
	private $layout_list = array();
	// Temporary variable to hold non layout block into one
	private $text_module_content = '';
	// Serialized layout
	private $shortcode_layout = '';
	/**
	 * Check if given block is layout block
	 *
	 * @since 4.1.0
	 *
	 * @todo being set as static so it is easier to be used outside this class. If being used quite
	 *       frequently, probably consider wrap this into function. Not needed at the moment tho
	 *
	 * @param array $block Parsed block.
	 *
	 * @return bool
	 */
	public static function is_layout_block( $block = array() ) {
	}
	/**
	 * Check if given block is reusable block
	 *
	 * @since 4.1.0
	 *
	 * @todo being set as static so it is easier to be used outside this class. If being used quite
	 *       frequently, probably consider wrap this into function. Not needed at the moment tho
	 *
	 * @param array $block Parsed block.
	 *
	 * @return bool
	 */
	public static function is_reusable_block( $block = array() ) {
	}
	/**
	 * Get reusable block's parsed content. NOTE: WordPress has built in `render_block_core_block()`
	 * but it renders the block and its content instead of parse its content.
	 *
	 * @since 4.1.0
	 *
	 * @see render_block_core_block()
	 *
	 * @todo being set as static so it is easier to be used outside this class. If being used quite
	 *       frequently, probably consider wrap this into function. Not needed at the moment tho
	 *
	 * @param array $block Parsed block.
	 *
	 * @return array
	 */
	public static function get_reusable_block_content( $block ) {
	}
	/**
	 * Parse reusable block by getting its content and append it as innerBlocks
	 *
	 * @since 4.1.0
	 *
	 * @param array Parsed block.
	 *
	 * @return array Modified parsed block.
	 */
	public static function parse_reusable_block( $block ) {
	}
	/**
	 * Pull layout block that is located deep inside inner blocks. Layout block contains section;
	 * in builder, section has to be on the first level of document
	 *
	 * @since 4.1.0
	 *
	 * @param array $block Parsed block.
	 */
	private function pull_layout_block( $block ) {
	}
	/**
	 * Convert serialized block into shortcode layout
	 *
	 * @since 4.1.0
	 *
	 * @param string $serialized_block
	 *
	 * @return string
	 */
	public function block_to_shortcode( $serialized_block = '' ) {
	}
}
/**
 * Simple Product Placeholder.
 *
 * @package Builder.
 */
/**
 * Class ET_Builder_Woocommerce_Product_Simple_Placeholder
 */
class ET_Builder_Woocommerce_Product_Simple_Placeholder extends \WC_Product_Simple {




	/**
	 * Create pre-filled WC Product (variable) object which acts as placeholder generator in TB
	 *
	 * @since 4.0.10 Instead of empty product object that is set later, pre-filled default data properties
	 *
	 * @param int|WC_Product|object $product Product to init.
	 */
	public function __construct( $product = 0 ) {
	}
    // phpcs:disable Generic.Commenting.DocComment.MissingShort -- Avoiding repetition.
    // phpcs:disable Squiz.Commenting.FunctionComment.Missing -- Avoiding repetition.
    // phpcs:disable Squiz.Commenting.FunctionComment.MissingParamTag -- Avoiding repetition.
	/**
	 * @inheritDoc
	 */
	public function get_image( $size = 'woocommerce_thumbnail', $attr = array(), $placeholder = \true ) {
	}
}
/**
 * ET_Theme_Builder_Local_Library_Item class
 *
 * @package    Builder
 * @subpackage ThemeBuilder
 * @since      4.18.0
 */
/**
 * Class used to implement local library in the theme builder.
 * */
class ET_Theme_Builder_Local_Library_Item {




	/**
	 * Data util.
	 *
	 * @var ET_Core_Data_Utils
	 */
	protected static $_;
	/**
	 * The library item post.
	 *
	 * @var WP_Post|null
	 */
	public $item_post = \null;
	/**
	 *  The library item type. i.e template and preset.
	 *
	 * @deprecated Use get_item_type() instead. This should be private variable, eventually.
	 *
	 * @var string
	 */
	public $item_type;
	/**
	 * The contructor.
	 *
	 * @since 4.18.0
	 *
	 * @param integer|null $item_id Iem post id.
	 */
	public function __construct( $item_id = \null ) {
	}
	/**
	 * Returns the Library Item type.
	 *
	 * @return string
	 */
	public function get_item_type() {
	}
	/**
	 * Init item.
	 *
	 * @param integer $item_id Item post id.
	 */
	public function init_item( $item_id ) {
	}
	/**
	 * Use the local library item.
	 *
	 * @param array $args Item details.
	 */
	public function use_library_item( $args = array() ) {
	}
    // phpcs:disable Squiz.Commenting.FunctionComment.ParamCommentFullStop -- Respecting punctuation.
	/**
	 * Use local library template.
	 *
	 * @param array $global_layouts Optional. Array containing the necessary params.
	 *                              $params = [
	 *                              'header' => (int|string) Header Layout ID. `use_global` string when TB global layout (relink option) is to be used.
	 *                              'body'   => (int|string) Body Layout ID. `use_global` string when TB global layout (relink option) is to be used.
	 *                              'footer' => (int|string) Footer Layout ID. `use_global` string when TB global layout (relink option) is to be used.
	 *                              ]
	 */
	public function use_template( $global_layouts = array() ) {
	}
    // phpcs:enable
	/**
	 * Populate Data to implement Use Preset functionality in TB.
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return array
	 */
	public function use_preset( $args = array() ) {
	}
	/**
	 * Returns TRUE when the given Preset ID contains a global layout.
	 *
	 * @return bool
	 */
	public function has_global_layouts() {
	}
	/**
	 * Returns TRUE when the given Preset ID contains a default template.
	 *
	 * @return bool
	 */
	public function has_default_template() {
	}
	/**
	 * Gets the default template ID when the $item_type is preset.
	 *
	 * @return bool
	 */
	public function get_default_template_id() {
	}
	/**
	 * Get the theme builder id.
	 *
	 * @since 4.18.0
	 *
	 * @return int The theme builder id.
	 */
	public function get_theme_builder_id() {
	}
	/**
	 * Gets the item field.
	 *
	 * @param  string $field_name Database field name.
	 * @param  string $context    Refer get_post_field() for context.
	 * @param  string $default    Default value to return when actual value does not exist.
	 * @return string
	 */
	public function get_item_field( $field_name = 'post_title', $context = 'display', $default = '' ) {
	}
	/**
	 * Gets the item title field.
	 *
	 * @param  string $context Refer get_post_field() for context.
	 * @param  string $default Default value to return when actual value does not exist.
	 * @return string
	 */
	public function get_item_title( $context = 'display', $default = '' ) {
	}
	/**
	 * Gets the item title field formatted to be displayed in Theme Builder.
	 *
	 * @return int|WP_Error Valid Post ID on success. 0 or WP_Error on failure.
	 */
	public function duplicate_template_item() {
	}
	/**
	 * Duplicates the Library Item.
	 *
	 * @return int
	 */
	public function duplicate_item() {
	}
}
/**
 * File containing Local Library Item Editor class.
 *
 * @package    Builder
 * @subpackage ThemeBuilder
 * @since      4.18.0
 */
/**
 * Local Library Item Editor class.
 */
class ET_Theme_Builder_Local_Library_Item_Editor {




	/**
	 * Hold the class instance.
	 *
	 * @var ET_Theme_Builder_Local_Library_Item_Editor[]
	 */
	private static $_instances;
	/**
	 * Interim Theme Builder Id.
	 *
	 * @var int
	 */
	protected static $_theme_builder_id;
	/**
	 * Library Item.
	 *
	 * @var ET_Theme_Builder_Local_Library_Item
	 */
	public $item;
	/**
	 * Class contructor.
	 *
	 * @param int $item_id Item Id.
	 */
	public function __construct( $item_id ) {
	}
	/**
	 * Get the singleton instance.
	 *
	 * @param int $item_id Item Id.
	 *
	 * @return ET_Theme_Builder_Local_Library_Item_Editor
	 */
	public static function instance( $item_id ) {
	}
	/**
	 * Gets the interim Theme Builder Id for the current request.
	 *
	 * @return int
	 */
	public static function get_interim_theme_builder_id() {
	}
	/**
	 * Init Library Template Item.
	 */
	public function init_library_template_item_editor() {
	}
	/**
	 * Init Library Template Item.
	 */
	public function init_library_set_item_editor() {
	}
	/**
	 * Init Library Item.
	 */
	public function init_library_item_editor() {
	}
	/**
	 * Gets the item title field formatted to be displayed in Theme Builder.
	 *
	 * @return string
	 */
	public function get_library_item_editor_item_title() {
	}
}
/**
 * Divi Theme Builder Item Library.
 *
 * @since 4.18.0
 *
 * @package Builder
 */
/**
 * Core class used to implement TB Item library.
 *
 * Register TB Item post type and its taxonomies.
 */
class ET_Builder_TBItem_Library {




	/**
	 * Instance of `ET_Builder_TBItem_Library`.
	 *
	 * @var ET_Builder_TBItem_Library
	 */
	private static $_instance;
	/**
	 * Instance of  `ET_Core_Data_Utils`.
	 *
	 * @var ET_Core_Data_Utils
	 */
	protected static $_;
	/**
	 * List of i18n strings.
	 *
	 * @var mixed[]
	 */
	protected static $_i18n;
	/**
	 * ET_Builder_Post_Taxonomy_TBItemCategory instance.
	 *
	 * Shall be used for querying `et_tb_item` taxonomy.
	 *
	 * @var ET_Builder_Post_Taxonomy_TBItemCategory
	 */
	public $item_categories;
	/**
	 * ET_Builder_Post_Taxonomy_TBItemTag instance.
	 *
	 * Shall be used for querying `et_tb_item` taxonomy .
	 *
	 * @var ET_Builder_Post_Taxonomy_TBItemTag
	 */
	public $item_tags;
	/**
	 * ET_Builder_Post_Taxonomy_TBItemType instance.
	 *
	 * Shall be used for querying `et_tb_item` taxonomy .
	 *
	 * @var ET_Builder_Post_Taxonomy_TBItemType
	 */
	public $item_types;
	/**
	 * ET_Builder_Post_Type_TBItem instance.
	 *
	 * Shall be used for querying `et_tb_item` posts .
	 *
	 * @var ET_Builder_Post_Type_TBItem
	 */
	public $items;
	/**
	 * Class constructor.
	 */
	public function __construct() {
	}
	/**
	 * Gets a translated string from {@see self::$_i18n}.
	 *
	 * @param string $string The untranslated string.
	 * @param string $path   Optional path for nested strings.
	 *
	 * @return string The translated string if found, the original string otherwise.
	 */
	public static function __( $string, $path = '' ) {
	}
	/**
	 * Dies if an instance already exists.
	 */
	protected function _instance_check() {
	}
	/**
	 * Registers the Theme Builder Library's custom post type and its taxonomies.
	 */
	protected function _register_cpt_and_taxonomies() {
	}
	/**
	 * Returns the ET_Builder_TBItem_Library instance.
	 *
	 * @return ET_Builder_TBItem_Library
	 */
	public static function instance() {
	}
}
class ET_Theme_Builder_Api_Errors {




	const UNKNOWN                       = 'unknown';
	const PORTABILITY_INCORRECT_CONTEXT = 'incorrect_context';
	const PORTABILITY_REQUIRE_INCOMING_LAYOUT_DUPLICATE_DECISION = 'require_incoming_layout_duplicate_decision';
	const PORTABILITY_IMPORT_PRESETS_FAILURE                     = 'import_presets_failure';
	const PORTABILITY_IMPORT_INVALID_FILE                        = 'invalid_file';
	/**
	 * Get map of all error codes.
	 *
	 * @since 4.0
	 *
	 * @return string[]
	 */
	public static function getMap() {
	}
}
class ET_Theme_Builder_Request {




	/**
	 * Type constants.
	 */
	const TYPE_FRONT_PAGE        = 'front_page';
	const TYPE_404               = '404';
	const TYPE_SEARCH            = 'search';
	const TYPE_SINGULAR          = 'singular';
	const TYPE_POST_TYPE_ARCHIVE = 'archive';
	const TYPE_TERM              = 'term';
	const TYPE_AUTHOR            = 'author';
	const TYPE_DATE              = 'date';
	/**
	 * Requested object type.
	 *
	 * @var string
	 */
	protected $type = '';
	/**
	 * Requested object subtype.
	 *
	 * @var string
	 */
	protected $subtype = '';
	/**
	 * Requested object id.
	 *
	 * @var integer
	 */
	protected $id = 0;
	/**
	 * Create a request object based on the current request.
	 *
	 * @since 4.0
	 *
	 * @return ET_Theme_Builder_Request|null
	 */
	public static function from_current() {
	}
	/**
	 * Create a request object based on a post id.
	 *
	 * @since 4.0
	 *
	 * @param integer $post_id
	 *
	 * @return ET_Theme_Builder_Request
	 */
	public static function from_post( $post_id ) {
	}
	/**
	 * Constructor.
	 *
	 * @since 4.0
	 *
	 * @param string  $type    Type.
	 * @param string  $subtype Subtype.
	 * @param integer $id      ID.
	 */
	public function __construct( $type, $subtype, $id ) {
	}
	/**
	 * Get the requested object type.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	public function get_type() {
	}
	/**
	 * Get the requested object subtype.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	public function get_subtype() {
	}
	/**
	 * Get the requested object id.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	public function get_id() {
	}
	/**
	 * Get the top ancestor of a setting based on its id. Takes the setting itself
	 * if it has no ancestors.
	 * Returns an empty array if the setting is not found.
	 *
	 * @since 4.0
	 *
	 * @param array  $flat_settings Flat settings.
	 * @param string $setting_id    Setting ID.
	 *
	 * @return array
	 */
	protected function _get_template_setting_ancestor( $flat_settings, $setting_id ) {
	}
	/**
	 * Get $a or $b depending on which template setting has a higher priority.
	 * Handles cases such as category settings with equal priority but in a ancestor-child relationship.
	 * Returns an empty string if neither setting is found.
	 *
	 * @since 4.0
	 *
	 * @param array  $flat_settings Flat settings.
	 * @param string $a             First template setting.
	 * @param string $b             Second template setting.
	 *
	 * @return string
	 */
	protected function _get_higher_priority_template_setting( $flat_settings, $a, $b ) {
	}
	/**
	 * Check if this request fulfills a template setting.
	 *
	 * @since 4.0
	 *
	 * @param array  $flat_settings Flat settings.
	 * @param string $setting_id    Setting ID.
	 *
	 * @return boolean
	 */
	protected function _fulfills_template_setting( $flat_settings, $setting_id ) {
	}
	/**
	 * Reduce callback for self::get_template() to get the highest priority template from all applicable ones.
	 *
	 * @since 4.0
	 *
	 * @param array $carry
	 * @param array $applicable_template
	 *
	 * @return array
	 */
	public function reduce_get_template( $carry, $applicable_template ) {
	}
	/**
	 * Get the highest-priority template that should be applied for this request, if any.
	 *
	 * @since 4.0
	 *
	 * @param array $templates
	 * @param array $flat_settings
	 *
	 * @return array
	 */
	public function get_template( $templates, $flat_settings ) {
	}
}
/**
 * Class ET_Theme_Builder_Woocommerce_Product_Variable_Placeholder
 *
 * Variable product class extension for displaying WooCommerce placeholder on Theme Builder
 */
class ET_Theme_Builder_Woocommerce_Product_Variable_Placeholder extends \WC_Product_Variable {




	/**
	 * Cached upsells id
	 *
	 * @since 4.0.10
	 *
	 * @var array
	 */
	protected static $tb_upsells_id;
	/**
	 * Cached product category ids
	 *
	 * @since 4.0.10
	 *
	 * @var array
	 */
	protected static $tb_category_ids;
	/**
	 * Cached product tag ids
	 *
	 * @since 4.0.10
	 *
	 * @var array
	 */
	protected static $tb_tag_ids;
	/**
	 * Cached attributes
	 *
	 * @since 4.0.10
	 *
	 * @var array
	 */
	protected static $tb_attributes;
	/**
	 * Create pre-filled WC Product (variable) object which acts as placeholder generator in TB
	 *
	 * @since 4.0.10 Instead of empty product object that is set later, pre-filled default data properties
	 *
	 * @param int|WC_Product|object $product Product to init.
	 */
	public function __construct( $product = 0 ) {
	}
	/**
	 * Get internal type.
	 * Define custom internal type so custom data store can be used to bypass database value retrieval
	 *
	 * @since 4.0.10
	 *
	 * @return string
	 */
	public function get_type() {
	}
	/**
	 * Get placeholder product as available variation. The method is basically identical to
	 * `WC_Product_Variable->get_available_variation()` except for the checks which are removed
	 * so placeholder value can be passed
	 *
	 * @since 4.3.3
	 *
	 * @param int|object $variation not needed since it will be overwritten by placeholder variation
	 *                              but it needs to be kept for compatibility with base class' method
	 *
	 * @return array
	 */
	function get_available_variation( $variation = 0 ) {
	}
	/**
	 * Add to cart's <select> requires variable product type and get_available_variations() method
	 * outputting product->children value. Filtering get_available_variations() can't be done so
	 * extending WC_Product_Variable and set fixed value for get_available_variations() method
	 *
	 * @since 4.5.7 Introduced $return arg to fix compatibility issue {@link https://github.com/elegantthemes/Divi/issues/20985}
	 * @since 4.3.3 `Replaced ET_Theme_Builder_Woocommerce_Product_Variable_Placeholder` with
	 *              `ET_Theme_Builder_Woocommerce_Product_Variation_Placeholder` (which is now
	 *              called at `get_available_variations()` method and similar to
	 *              `WC_Product_Variation`'s method with no check). It has all variation-required
	 *              methods and properties which makes it more reliable when WC add-ons are used
	 * @since 4.0.1
	 *
	 * @return array
	 */
	public function get_available_variations( $return = 'array' ) {
	}
	/**
	 * Display Divi's placeholder image in WC image in TB
	 *
	 * @since 4.0.10
	 *
	 * @param string not used but need to be declared to prevent incompatible declaration error
	 * @param array  not used but need to be declared to prevent incompatible declaration error
	 * @param bool   not used but need to be declared to prevent incompatible declaration error
	 *
	 * @return string
	 */
	public function get_image( $size = 'woocommerce_thumbnail', $attr = array(), $placeholder = \true ) {
	}
	/**
	 * Set product upsells id for TB's woocommerceComponent. This can't be called during class
	 * initialization and need to be called BEFORE `woocommerce_product_class` filter callback
	 * to avoid infinite loop
	 *
	 * @since 4.0.10
	 *
	 * @param array $args
	 */
	public static function set_tb_upsells_ids( $args = array() ) {
	}
	/**
	 * Get upsells id
	 *
	 * @since 4.0.10
	 *
	 * @param string not used but need to be declared to prevent incompatible declaration error
	 *
	 * @return array
	 */
	public function get_upsell_ids( $context = 'view' ) {
	}
	/**
	 * Get attributes
	 *
	 * @since 4.0.10
	 *
	 * @param string not used but need to be declared to prevent incompatible declaration error
	 *
	 * @return array
	 */
	public function get_attributes( $context = 'view' ) {
	}
	/**
	 * Get variation price
	 *
	 * @since 4.0.10
	 *
	 * @param bool not used but need to be declared to prevent incompatible declaration error
	 *
	 * @return array
	 */
	public function get_variation_prices( $for_display = \false ) {
	}
}
/**
 * Class ET_Theme_Builder_Woocommerce_Product_Variation_Placeholder
 *
 * Display variation (child of variable) placeholder product on Theme Builder. This needs to be
 * explicitly defined in case WC add-ons relies on any of variation's method.
 */
class ET_Theme_Builder_Woocommerce_Product_Variation_Placeholder extends \WC_Product_Variation {




	/**
	 * Get internal type.
	 * Define custom internal type so custom data store can be used to bypass database value retrieval
	 *
	 * @since 4.3.3
	 *
	 * @return string
	 */
	public function get_type() {
	}
}
class ET_Core_Post_Query {




	/**
	 * @var ET_Core_Data_Utils
	 */
	protected static $_;

	/**
	 * Whether or not to negate the next query arg that is set. Default 'false'.
	 *
	 * @since 3.0.99
	 * @var   bool
	 */
	protected $_negate = false;

	/**
	 * The query result.
	 *
	 * @since 3.0.99
	 * @var   WP_Post|WP_Post[]
	 */
	protected $_query_result;

	/**
	 * The args that will be passed to {@see WP_Query} the next time {@see self::run()} is called.
	 *
	 * @since 3.0.99
	 * @var   array
	 */
	protected $_wp_query_args;

	/**
	 * The name of the primary category-style taxonomy for this post type.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	public $category_tax;

	/**
	 * The post type (slug) for this instance.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	public $post_type;

	/**
	 * The name of the primary tag-style taxonomy for this post type.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	public $tag_tax;

	/**
	 * ET_Core_Post_Query constructor.
	 *
	 * @since 3.0.99
	 *
	 * @param string $post_type    See {@see self::$post_type}
	 * @param string $category_tax See {@see self::$category_tax}
	 * @param string $tag_tax      See {@see self::$tag_tax}
	 */
	public function __construct( $post_type = '', $category_tax = '', $tag_tax = '' ) {
	}

	/**
	 * Adds a meta query to the WP Query args for this instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $key    The meta key.
	 * @param string $value  The meta value.
	 * @param bool   $negate Whether or not to negate this meta query.
	 */
	protected function _add_meta_query( $key, $value, $negate ) {
	}

	/**
	 * Adds a tax query to the WP Query args for this instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $taxonomy The taxonomy name.
	 * @param array  $terms    Taxonomy terms.
	 * @param bool   $negate   Whether or not to negate this tax query.
	 */
	protected function _add_tax_query( $taxonomy, $terms, $negate ) {
	}

	/**
	 * Resets {@see self::$_negate} to default then returns the previous value.
	 *
	 * @return bool
	 */
	protected function _reset_negate() {
	}

	/**
	 * Adds a tax query to this instance's WP Query args for it's category taxonomy.
	 *
	 * @since 3.0.99
	 *
	 * @param mixed ...$categories Variable number of category arguments where each arg can be
	 *                             a single category name or ID or an array of names or IDs.
	 *
	 * @return $this
	 */
	public function in_category() {
	}

	/**
	 * Negates the next query arg that is set.
	 *
	 * @since 3.0.99
	 *
	 * @return $this
	 */
	public function not() {
	}

	/**
	 * Performs a new WP Query using the instance's current query params and then returns the
	 * results. Typically, this method is the last method call in a set of chained calls to other
	 * methods on this class during which various query params are set.
	 *
	 * Examples:
	 *
	 *     $cpt_query
	 *         ->in_category( 'some_cat' )
	 *         ->with_tag( 'some_tag' )
	 *         ->run();
	 *
	 *     $cpt_query
	 *         ->with_tag( 'some_tag' )
	 *         ->not()->in_category( 'some_cat' )
	 *         ->run();
	 *
	 * @since 3.0.99
	 *
	 * @param array $args Optional. Additional arguments for {@see WP_Query}.
	 *
	 * @return WP_Post|WP_Post[] $posts
	 */
	public function run( $args = array() ) {
	}

	/**
	 * Adds a meta query to this instance's WP Query args.
	 *
	 * @since 3.0.99
	 *
	 * @param string $key   The meta key.
	 * @param mixed  $value Optional. The meta value to compare. When `$value` is not provided,
	 *                      the comparison will be 'EXISTS' or 'NOT EXISTS' (when negated).
	 *                      When `$value` is an array, comparison will be 'IN' or 'NOT IN'.
	 *                      When `$value` is not an array, comparison will be '=' or '!='.
	 *
	 * @return $this
	 */
	public function with_meta( $key, $value = null ) {
	}

	/**
	 * Adds a tax query to this instance's WP Query args for it's primary tag-like taxonomy.
	 *
	 * @since 3.0.99
	 *
	 * @param mixed ...$tags Variable number of tag arguments where each arg can be
	 *                       a single tag name or ID, or an array of tag names or IDs.
	 *
	 * @return $this
	 */
	public function with_tag() {
	}
}
/**
 * Implement ET_Builder_Post_Query_TBItems to query `et_tb_item`.
 *
 * @since 4.18.0
 *
 * @package Builder
 */
/**
 * Class to handle `et_tb_item` query.
 *
 * Think of this class as WP_Query for ET_TB_ITEM_POST_TYPE.
 */
class ET_Builder_Post_Query_TBItems extends \ET_Core_Post_Query {




	/**
	 * {@inheritDoc}
	 *
	 * @param string $taxonomy The taxonomy name.
	 * @param array  $terms    Taxonomy terms.
	 * @param bool   $negate   Whether to negate this tax query.
	 */
	protected function _add_tax_query( $taxonomy, $terms, $negate = \null ) {
	}
}
abstract class ET_Core_Post_Taxonomy extends \ET_Core_Post_Object {




	/**
	 * The `$args` array used when registering this taxonomy.
	 *
	 * @since 3.0.99
	 * @var   array
	 */
	protected $_args;

	/**
	 * The WP Taxonomy object for this instance.
	 *
	 * @since 3.0.99
	 * @var   WP_Taxonomy
	 */
	protected $_wp_object;

	/**
	 * Taxonomy key.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	public $name;

	/**
	 * The post types to which this taxonomy applies.
	 *
	 * @since 3.0.99
	 * @var   array
	 */
	public $post_types;

	/**
	 * This taxonomy's terms.
	 *
	 * @var WP_Term[]
	 */
	public $terms;

	/**
	 * @inheritDoc
	 */
	public $wp_type;

	/**
	 * ET_Core_Post_Taxonomy constructor.
	 */
	public function __construct() {
	}

	/**
	 * Get the terms for this taxonomy.
	 *
	 * @return array|int|WP_Error|WP_Term[]
	 */
	public function get() {
	}

	/**
	 * Get a derived class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the derived object. Default is an empty string.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'taxonomy', $name = '' ) {
	}
}
/**
 * Init `et_tb_item` taxonomy.
 *
 * @since 4.18.0
 *
 * @package Builder
 */
/**
 * Class to handle `et_tb_item` taxonomy.
 *
 * Registers TB Item's Category taxonomy.
 */
class ET_Builder_Post_Taxonomy_TBItemCategory extends \ET_Core_Post_Taxonomy {




	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	protected $_owner;
	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	public $name;
	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	protected function _get_args() {
	}
	/**
	 * {@inheritDoc}
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return ET_Builder_Post_Taxonomy_TBItemCategory|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'et_tb_item_category' ) {
	}
}
/**
 * Init `et_tb_item` taxonomy.
 *
 * @since 4.18.0
 *
 * @package Builder
 */
/**
 * Class to handle `et_tb_item` taxonomy.
 *
 * Registers TB Item's Tag taxonomy.
 */
class ET_Builder_Post_Taxonomy_TBItemTag extends \ET_Core_Post_Taxonomy {




	/**
	 * Taxonomy key.
	 *
	 * @var string
	 */
	public $name;
	/**
	 * Owner name.
	 *
	 * @var string
	 */
	protected $_owner;
	/**
	 * Get the class instance.
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return ET_Builder_Post_Taxonomy_TBItemTag|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'et_tb_item_tag' ) {
	}
	/**
	 * {@inheritDoc}
	 */
	protected function _get_args() {
	}
	/**
	 * {@inheritDoc}
	 */
	protected function _get_labels() {
	}
}
/**
 * Init `et_tb_item` taxonomy.
 *
 * @since 4.18.0
 *
 * @package Builder
 */
/**
 * Class to handle `et_tb_item` taxonomy.
 *
 * Registers TB Item's Type taxonomy.
 */
class ET_Builder_Post_Taxonomy_TBItemType extends \ET_Core_Post_Taxonomy {




	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	protected $_owner;
	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	public $name;
	/**
	 * {@inheritDoc}
	 */
	protected function _get_args() {
	}
	/**
	 * {@inheritDoc}
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return ET_Builder_Post_Taxonomy_TBItemType|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'et_tb_item_type' ) {
	}
}
abstract class ET_Core_Post_Object {




	/**
	 * @var ET_Core_Data_Utils
	 */
	protected static $_;

	/**
	 * Current instances of this class organized by type.
	 *
	 * @since 3.0.99
	 * @var   array[] {
	 *
	 * @type ET_Core_Post_Object[] $type {
	 *
	 * @type ET_Core_Post_Object $name Instance.
	 *         ...
	 *     }
	 *     ...
	 * }
	 */
	private static $_instances = array();

	/**
	 * The `$args` array used when registering this post object.
	 *
	 * @since 3.0.99
	 * @var   array
	 */
	protected $_args;

	/**
	 * The owner of this instance. Default 'core'. Accepts 'divi', 'builder', 'epanel', 'bloom', 'monarch'.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	protected $_owner;

	/**
	 * Whether or not the object has been registered.
	 *
	 * @since 3.0.99
	 * @var   bool
	 */
	protected $_registered = false;

	/**
	 * The WP object for this instance.
	 *
	 * @since 3.0.99
	 * @var   WP_Post_Type|WP_Taxonomy
	 */
	protected $_wp_object;

	/**
	 * Post object key.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	public $name;

	/**
	 * Post object type. Accepts 'cpt', 'taxonomy'.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	public $wp_type;

	/**
	 * ET_Core_Post_Base constructor.
	 */
	public function __construct() {
	}

	/**
	 * Applies filters to the instance's filterable properties.
	 */
	protected function _apply_filters() {
	}

	/**
	 * This method is called right before registering the object. It is intended to be
	 * overridden by child classes as needed.
	 */
	protected function _before_register() {
	}

	/**
	 * Returns the args for the instance.
	 * See {@see register_post_type()} or {@see register_taxonomy()}.
	 *
	 * @return array $args
	 */
	abstract protected function _get_args();

	/**
	 * Returns labels for the instance.
	 * See {@see register_post_type()} or {@see register_taxonomy()}.
	 *
	 * @return array $labels
	 */
	abstract protected function _get_labels();

	/**
	 * Checks for required properties and existing instances.
	 */
	protected function _sanity_check() {
	}

	/**
	 * Get a derived class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'cpt'.
	 * @param string $name The name/slug of the derived object. Default is an empty string.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'cpt', $name = '' ) {
	}

	/**
	 * Calls either {@see register_post_type} or {@see register_taxonomy} for each instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $owner Optional. Only register objects owned by a part of the codebase.
	 *                      See {@see self::_owner} for accepted values.
	 */
	public static function register_all( $owner = null ) {
	}
}
abstract class ET_Core_Post_Type extends \ET_Core_Post_Object {




	/**
	 * The `$args` array used when registering this post type.
	 *
	 * @since 3.0.99
	 * @var   array
	 */
	protected $_args;

	/**
	 * The name of the primary category-style taxonomy for this post type.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	protected $_category_tax;

	/**
	 * The name of the primary tag-style taxonomy for this post type.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	protected $_tag_tax;

	/**
	 * The WP Post Type object for this instance.
	 *
	 * @since 3.0.99
	 * @var   WP_Post_Type
	 */
	protected $_wp_object;

	/**
	 * Post type key.
	 *
	 * @since 3.0.99
	 * @var   string
	 */
	public $name;

	/**
	 * @inheritDoc
	 */
	public $wp_type;

	/**
	 * @return ET_Core_Post_Query
	 */
	public function query() {
	}
}
/**
 * Class to handle `et_tb_item` post type.
 *
 * Registers TB Item.
 */
class ET_Builder_Post_Type_TBItem extends \ET_Core_Post_Type {




	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	protected $_category_tax;
	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	protected $_owner;
	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	protected $_tag_tax;
	/**
	 * {@inheritDoc}
	 *
	 * @var string
	 */
	public $name;
	/**
	 * {@inheritDoc}
	 */
	protected function _get_args() {
	}
	/**
	 * {@inheritDoc}
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'cpt'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'cpt', $name = ET_TB_ITEM_POST_TYPE ) {
	}
	/**
	 * Returns TRUE when a layout is Favorite.
	 *
	 * @param string $post_id Post ID.
	 *
	 * @return bool
	 */
	public function is_favorite( $post_id ) {
	}
	/**
	 * Determines if TB Item Library's CPT and its taxonomies are publicly queryable for the current request.
	 *
	 * @return bool
	 */
	public static function is_publicly_queryable() {
	}
	/**
	 * Returns an instance of ET_Builder_Post_Query_TBItems.
	 *
	 * The instance can then be used to get results.
	 *
	 * @see ET_Builder_Post_Query_TBItems::run()
	 *
	 * @return ET_Builder_Post_Query_TBItems
	 */
	public function query() {
	}
}
/**
 * ET_Item_Library_Local utility class.
 *
 * Item can be a layout, a template, a theme option, a code snippet, etc.
 *
 * @since 4.21.0
 *
 * @return void
 */
abstract class ET_Item_Library_Local {


	/**
	 * Instance.
	 *
	 * @var ET_Item_Library_Local Class instance.
	 */
	public static $_instance;

	/**
	 * Post Type.
	 *
	 * @var string Post Type.
	 */
	public $post_type;

	/**
	 * Ignore Process.
	 *
	 * @var array Ignore Process.
	 */
	public $exceptional_processes = array();

	/**
	 * Gets the library items.
	 *
	 * @param string $item_type Item Type.
	 *
	 * @return Array An array of items data.
	 */
	abstract public function get_library_items( $item_type );

	/**
	 * Remove, Rename or Add new Category/Tag into local library.
	 *
	 * @param array $payload Array with the update details.
	 *
	 * @return array
	 */
	public function perform_terms_update( $payload ) {
	}

	/**
	 * Gets the terms list and processes it into desired format.
	 *
	 * @since 4.18.0
	 *
	 * @param string $term_name Term Name.
	 *
	 * @return array $terms_by_id
	 */
	public function get_processed_terms( $term_name ) {
	}

	/**
	 * Processes item taxonomies for inclusion in the library UI items data.
	 *
	 * @since 4.18.0
	 *
	 * @param WP_POST $post          Unprocessed item.
	 * @param object  $item          Currently processing item.
	 * @param int     $index         The item's index position.
	 * @param array[] $item_terms    Processed items.
	 * @param string  $taxonomy_name Item name.
	 * @param string  $type          Item type.
	 *
	 * @return void
	 */
	public function process_item_taxonomy( $post, $item, $index, &$item_terms, $taxonomy_name, $type ) {
	}

	/**
	 * Update library item. Support following updates:
	 * - Duplicate
	 * - Rename
	 * - Toggle Favorite status
	 * - Delete
	 * - Delete Permanently
	 * - Restore
	 *
	 * @since 4.21.0
	 *
	 * @param array $payload Array with the id and update details.
	 *
	 * @return array Updated item details
	 */
	protected function _perform_item_common_updates( $payload ) {
	}

	/**
	 * Get all terms of an item and merge any newly passed IDs with the list.
	 *
	 * @since 4.19.0
	 *
	 * @param string $new_terms_list List of new terms.
	 * @param array  $taxonomies     Taxonomies.
	 * @param string $taxonomy_name  Taxonomy name.
	 *
	 * @return array
	 */
	private function _create_and_get_all_item_terms( $new_terms_list, $taxonomies, $taxonomy_name ) {
	}

	/**
	 * Prepare Library Categories or Tags List.
	 *
	 * @param string $taxonomy Name of the taxonomy.
	 *
	 * @return array Clean Categories/Tags array.
	 **/
	public function get_formatted_library_terms( $taxonomy = 'layout_category' ) {
	}
}
/**
 * ET_Theme_Builder_Library_Local utility class.
 *
 * Item can be a layout, a template, a theme option, a code snippet, etc.
 *
 * @since 4.21.0
 *
 * @return void
 */
class ET_Theme_Builder_Library_Local extends \ET_Item_Library_Local {




	/**
	 * Gets the class instance.
	 *
	 * @since 4.21.0
	 *
	 * @return ET_Item_Library_Local
	 */
	public static function instance() {
	}
	/**
	 * Constructor.
	 */
	public function __construct() {
	}
	/**
	 * Gets the library items.
	 *
	 * @param  string $item_type Item type.
	 * @return array
	 */
	public function get_library_items( $item_type ) {
	}
	/**
	 * Performs item exceptional updates.
	 *
	 * @param array $payload      Payload.
	 * @param array $updated_data Updated data.
	 *
	 * @since 4.21.0
	 *
	 * @return array
	 */
	private function _perform_item_exceptional_updates( $payload, $updated_data ) {
	}
	/**
	 * Updates the library item.
	 *
	 * @param array $payload Payload.
	 *
	 * @return array
	 */
	public function perform_item_update( $payload ) {
	}
}
/**
 * Section Element class
 *
 * @since 3.0.16
 */
class ET_Builder_Section extends \ET_Builder_Structure_Element {




	/**
	 * Sets up the element's properties.
	 */
	public function init() {
	}
	/**
	 * Get the settings fields data for this element.
	 *
	 * @return array|array[]
	 */
	public function get_fields() {
	}
	/**
	 * Get CSS fields transition of section.
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Check if current background is transparent background or not.
	 *
	 * @param string $background_color Background color.
	 *
	 * @return boolean Transparent color status.
	 * @since  3.24.1
	 */
	public function is_transparent_background( $background_color = '' ) {
	}
	/**
	 * Check if current background should have initial background color.
	 *
	 * @since 3.24.1
	 *
	 * @param string $mode Preview mode.
	 *
	 * @return boolean
	 */
	public function is_initial_background_color( $mode = 'desktop' ) {
	}
	/**
	 * Generate parallax image background markup.
	 *
	 * @since 3.24.1
	 * @since 4.15.0 Added $props property.
	 *
	 * @param string $base_name Background base name.
	 * @param array  $props     Props (optional).
	 *
	 * @return string
	 */
	public function get_parallax_image_background( $base_name = 'background', $props = array() ) {
	}
	/**
	 * Generates the structure module's HTML output based on {@see ET_Builder_Section::$props}.
	 *
	 * @param array  $atts          List of unprocessed attributes.
	 * @param mixed  $content       Content being processed.
	 * @param string $function_name Slug of module that is used for rendering output.
	 *
	 * @return string The module's HTML output.
	 */
	public function render( $atts, $content, $function_name ) {
	}
	/**
	 * Process box shadow CSS styles of section.
	 *
	 * @since 4.10.0
	 */
	public function is_section_divider_enabled() {
	}
	/**
	 * Process box shadow CSS styles of section.
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_box_shadow( $function_name ) {
	}
	/**
	 * Box shadow back compatibility.
	 *
	 * @param string $function_name Module slug.
	 *
	 * @return string
	 */
	private function _keep_box_shadow_compatibility( $function_name ) {
	}
}
/**
 * Base class for structure elements.
 *
 * Class ET_Builder_Structure_Element
 */
class ET_Builder_Structure_Element extends \ET_Builder_Element {



	/**
	 * Whether element is structure element.
	 *
	 * @var bool
	 */
	public $is_structure_element = true;

	/**
	 * BB :: Wrap setting option in parent div.
	 *
	 * @param string $option_output Setting options markup.
	 * @param array  $field         Setting field.
	 * @param string $name          Setting field name e.g background_color.
	 *
	 * @return string|string[]
	 */
	public function wrap_settings_option( $option_output, $field, $name = '' ) {
	}

	/**
	 * BB :: Generate custom css values for column padding settings.
	 *
	 * @return string
	 */
	public function generate_column_vars_css() {
	}

	/**
	 * BB :: Generate background values for column padding settings.
	 *
	 * @return string
	 */
	public function generate_column_vars_bg() {
	}

	/**
	 * BB :: Generate Padding values for column padding settings.
	 *
	 * @return string
	 */
	public function generate_column_vars_padding() {
	}

	/**
	 * BB :: Generate Background settings for columns.
	 *
	 * @return string
	 */
	public function generate_columns_settings_background() {
	}

	/**
	 * BB :: Generate Padding settings for columns.
	 *
	 * @return string
	 */
	public function generate_columns_settings_padding() {
	}

	/**
	 * BB :: Generate "Custom CSS" settings for columns.
	 *
	 * @return string
	 */
	public function generate_columns_settings_css() {
	}

	/**
	 * BB :: Generate "CSS ID & Classes" settings for columns.
	 *
	 * @return string
	 */
	public function generate_columns_settings_css_fields() {
	}
}
/**
 * Class used to process row element(module).
 *
 * @since 4.6.2
 */
class ET_Builder_Row extends \ET_Builder_Structure_Element {



}
/**
 * Class used to process inner row element(module).
 *
 * @since 4.6.2
 */
class ET_Builder_Row_Inner extends \ET_Builder_Structure_Element {



}
/**
 * Class used to process column element(module).
 *
 * @since 4.6.2
 */
class ET_Builder_Column extends \ET_Builder_Structure_Element {



}
/**
 * Base class for all builder elements.
 *
 * @since 1.0
 */
class ET_Builder_Element {





	/**
	 * Module name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Legacy template name (Extra).
	 *
	 * @var string
	 */
	public $template_name;

	/**
	 * Module plural name.
	 *
	 * @var string
	 */
	public $plural;

	/**
	 * Module slug.
	 *
	 * @var string
	 */
	public $slug;

	/**
	 * Module type e.g child.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Child module slug.
	 *
	 * @var string
	 */
	public $child_slug;

	/**
	 * Set true if module use raw content e.g Code module.
	 *
	 * @var bool
	 */
	public $use_raw_content = false;

	/**
	 * Modules fields.
	 *
	 * @var array
	 */
	public $fields = array();

	/**
	 * Modules advanced fields.
	 *
	 * @var mixed
	 */
	public $advanced_fields;

	/**
	 * Whether module has advanced fields.
	 *
	 * @var bool
	 */
	public $has_advanced_fields;

	/**
	 * ET_Builder_Module_Field_TextShadow utility class.
	 *
	 * @var ET_Builder_Module_Field_TextShadow
	 */
	public $text_shadow;

	/**
	 * ET_Builder_Module_Field_MarginPadding utility class.
	 *
	 * Utility class to handle margin and padding fields.
	 *
	 * @var ET_Builder_Module_Field_MarginPadding
	 */
	public $margin_padding;

	/**
	 * Holds module's additional fields.
	 *
	 * @var array
	 */
	public $_additional_fields_options;

	/**
	 * Holds new item(module) text.
	 *
	 * @var string
	 */
	public $child_item_text;

	/**
	 * Holds Title text.
	 *
	 * @var string
	 */
	public $advanced_setting_title_text;

	/**
	 * Holds Settings text.
	 *
	 * @var string
	 */
	public $settings_text;

	/**
	 * Holds defaults.
	 *
	 * @var array
	 */
	public $defaults;

	/**
	 * Legacy fields defaults.
	 *
	 * @var array
	 */
	public $fields_defaults;

	/**
	 * Additional shortcode slugs.
	 *
	 * @var string|array
	 */
	public $additional_shortcode_slugs;

	/**
	 * Boolean to indicate whether the module is a fullwidth module.
	 *
	 * @var bool
	 */
	public $fullwidth;

	/**
	 * Holds Module's global settings slug.
	 *
	 * @var string
	 */
	public $global_settings_slug;

	/**
	 * Cached translations.
	 *
	 * @since 4.4.9
	 *
	 * @var array[]
	 */
	protected static $i18n;

	/**
	 * See {@see deprecations.php}
	 *
	 * @var array[]
	 */
	protected static $_deprecations;

	/**
	 * Unprocessed attributes.
	 *
	 * @since 3.17.2
	 *
	 * @var mixed[]
	 */
	protected $attrs_unprocessed = array();

	/**
	 * Unprocessed content.
	 *
	 * @since 3.17.2
	 *
	 * @var string
	 */
	protected $content_unprocessed = '';

	/**
	 * Settings used to render the module's output.
	 *
	 * @since 3.1 Renamed from `$shortcode_atts` to `$props`.
	 * @since 1.0
	 *
	 * @var array
	 */
	public $props = array();

	/**
	 * What appears inside the element. For structure elements, this will contain children
	 * elements. For parent modules, this will include child modules.
	 *
	 * @since 3.1 Renamed from `$shortcode_content` to `$content`.
	 * @since 1.0
	 *
	 * @var string
	 */
	public $content;

	/**
	 * Configuration for module's wrapper and inner wrapper
	 *
	 * @since 3.1
	 *
	 * @var array
	 */
	public $wrapper_settings = array();

	/**
	 * Unique field definitions that are used in each modules.
	 *
	 * @var array
	 */
	public $fields_unprocessed = array();

	/**
	 * Main css selector of element.
	 *
	 * @var string
	 */
	public $main_css_element;

	/**
	 * Custom css fields of module.
	 *
	 * @var array|mixed
	 */
	public $custom_css_fields = array();

	/**
	 * Child item label var. e.x `admin_title` field var.
	 *
	 * @var string
	 */
	public $child_title_var;

	/**
	 * Child item label fallback var.
	 *
	 * @var string
	 */
	public $child_title_fallback_var;

	/**
	 * Divi Builder enabled Post Types.
	 *
	 * @var array|mixed|void
	 */
	public $post_types = array();

	/**
	 * Main modules tabs. e.g `Content`, `Design` and `Advanced`
	 *
	 * @var array|mixed|void
	 */
	public $main_tabs = array();

	/**
	 * BB :: Main modules tabs. e.g `general`, `advanced` and `custom_css`
	 *
	 * @var array
	 */
	public $used_tabs = array();

	/**
	 * Whether module support custom css options e.g `Advanced > Custom CSS` toggle.
	 *
	 * @var bool
	 */
	public $custom_css_tab;

	/**
	 * Whether module support visual builder. e.g `on` or `off`.
	 *
	 * @var string
	 */
	public $vb_support = 'off';

	/**
	 * Options list to not replace %22 with double quotes while rendering.
	 *
	 * @var array
	 */
	public $dbl_quote_exception_options = array( 'et_pb_font_icon', 'et_pb_button_one_icon', 'et_pb_button_two_icon', 'et_pb_button_icon', 'et_pb_content' );

	/**
	 * Module's settings modal custom tabs.
	 *
	 * @var array|array[]
	 */
	public $settings_modal_tabs = array();

	/**
	 * Module's settings modal toggles. e.x `background`, `custom css`.
	 *
	 * @var array|mixed
	 */
	public $settings_modal_toggles = array();

	/**
	 * Whether module support post featured image background.
	 *
	 * @var bool
	 */
	public $featured_image_background = false;

	/**
	 * All CSS classes name the module has.
	 *
	 * @var array
	 */
	public $classname = array();

	/**
	 * Module's help video configuration array.
	 *
	 * @var array
	 */
	public $help_videos = array();

	/**
	 * Whether `ET_Builder_Module_Settings_Migration` class initialized.
	 *
	 * @var bool
	 */
	public static $settings_migrations_initialized = false;

	/**
	 * An array of modules where `module_classname()` used.
	 *
	 * @var array
	 */
	public static $uses_module_classname = array();

	/**
	 * Holds module's shortcode.
	 *
	 * @var string|string[]|null
	 */
	public $_original_content;

	/**
	 * Unique field definitions across all modules.
	 *
	 * @var array
	 */
	protected static $_fields_unprocessed = array();

	/**
	 * Default props of each modules.
	 *
	 * @var array
	 */
	protected static $_default_props = array();

	/**
	 * Slugs of modules for which an option template has been rebuilt.
	 *
	 * @var array
	 */
	protected static $_has_rebuilt_option_template = array();

	/**
	 * Modules cache.
	 *
	 * @var bool|array
	 */
	private static $_cache = false;

	/**
	 * Keys map of unique BB templates.
	 *
	 * @var array
	 */
	private static $_unique_bb_keys_map = array();

	/**
	 * List of unique BB templates.
	 *
	 * @var array
	 */
	private static $_unique_bb_keys_values = array();

	/**
	 * List of tabs/newlines characters.
	 *
	 * @var array
	 */
	private static $_unique_bb_strip = array( "\t", "\r", "\n" );

	/**
	 * Scroll effects fields of all modules.
	 *
	 * @var array
	 */
	public static $_scroll_effects_fields = array(
		'desktop' => array(),
		'tablet'  => array(),
		'phone'   => array(),
	);

	/**
	 * Sticky element configuration
	 *
	 * @since 4.6.0
	 *
	 * @var array
	 */
	public static $sticky_elements = array();

	/**
	 * Number of times {@see self::render()} has been executed.
	 *
	 * @var int
	 */
	private $_render_count;

	/**
	 * Number of times {@see self::render()} has been executed for the shop module.
	 *
	 * @var int
	 */
	private static $_shop_render_count = 0;

	/**
	 * Slug of a module whose render count should also be bumped when this module's is bumped.
	 *
	 * @var string
	 */
	protected $_bumps_render_count;

	/**
	 * Priority number applied to some CSS rules.
	 *
	 * @var int
	 */
	protected $_style_priority;

	/**
	 * Nnly needed for BB + hover.
	 *
	 * @var bool
	 */
	protected $is_background = false;

	/**
	 * Whether module is official divi module.
	 *
	 * @var bool
	 */
	private $_is_official_module;

	/**
	 * Whether module is woocommerce module.
	 *
	 * @var bool
	 */
	private $_is_woocommerce_module;

	/**
	 * Uses for ligatures disabling at elements with letter-spacing CSS property.
	 *
	 * @var array
	 */
	private $letter_spacing_fix_selectors = array();

	/**
	 * Holds module styles for the current request.
	 *
	 * @var array
	 */
	private static $styles = array();

	/**
	 * Holds module free form styles for the current request.
	 *
	 * @var string
	 */
	private static $_free_form_styles = '';

	/**
	 * Holds internal module styles for the current module.
	 * e.x In the Blog post module, {@see $internal_modules_styles} will hold style of all posts.
	 *
	 * @var array
	 */
	private static $internal_modules_styles = array();

	/**
	 * Whether to save styles to the {@see $internal_modules_styles}.
	 *
	 * @var bool
	 */
	private static $prepare_internal_styles = false;

	/**
	 * Internal modules counter.
	 *
	 * @var int
	 */
	private static $internal_modules_counter = 10000;

	/**
	 * Media queries key value pairs. {@see get_media_quries()}
	 *
	 * @var array
	 */
	private static $media_queries = array();

	/**
	 * List of all modules instance that extends this class.
	 *
	 * @var array
	 */
	private static $modules = array();

	/**
	 * List of all parent modules instance that extends this class.
	 * e.x Accordion, BarCounters.
	 *
	 * @var array
	 */
	private static $parent_modules = array();

	/**
	 * List of all child modules instance that extends this class.
	 * e.x AccordionItem, BarCountersItems.
	 *
	 * @var array
	 */
	private static $child_modules = array();

	/**
	 * List of all woocommerce modules instance that extends this class.
	 *
	 * @var array
	 */
	private static $woocommerce_modules = array();

	/**
	 * Hold current module index while loading backbone templates in batch.
	 *
	 * @var int
	 */
	private static $current_module_index = 0;

	/**
	 * List of all structure modules objects.
	 * e.x Section, Row, Row Inner, Columns.
	 *
	 * @var array
	 */
	private static $structure_modules = array();

	/**
	 * List of all structure modules slugs.
	 *
	 * @var array
	 */
	private static $structure_module_slugs = array();

	/**
	 * List of all modules slugs by post type.
	 *
	 * @var array
	 */
	private static $_module_slugs_by_post_type = array();

	/**
	 * Module Icons displayed in Add Module modals.
	 *
	 * @var array
	 */
	private static $module_icons = array();

	/**
	 * List of all modules help videos.
	 *
	 * @var array
	 */
	private static $module_help_videos = array();

	/**
	 * Parent module's motion/scroll effects options settings.
	 *
	 * @var array
	 */
	private static $parent_motion_effects = array();

	/**
	 * A stack of the current active theme builder layout post type.
	 *
	 * @var string[]
	 */
	protected static $theme_builder_layout = array();

	/**
	 * A stack of the current active WP Editor template post type such as:
	 * - wp_template
	 * - wp_template_part
	 *
	 * @var array[]
	 */
	public static $wp_editor_template = array();

	/**
	 * Compile list of modules that has rich editor option.
	 *
	 * @var array
	 */
	protected static $has_content_modules = array();

	/**
	 * Whether loading backbone templates.
	 *
	 * @var bool
	 */
	private static $loading_backbone_templates = false;

	/**
	 * Instance of `ET_Core_Data_Utils`.
	 *
	 * @var ET_Core_Data_Utils
	 */
	protected static $_ = null;

	/**
	 * `ET_Core_PageResource` class instance.
	 *
	 * @var ET_Core_PageResource
	 */
	public static $advanced_styles_manager = null;

	/**
	 * `ET_Core_PageResource` class instance.
	 *
	 * @var ET_Core_PageResource
	 */
	public static $deferred_styles_manager = null;

	/**
	 * Whether to force inline styles.
	 *
	 * @var bool
	 */
	public static $forced_inline_styles = false;

	/**
	 * `ET_Core_Data_Utils` instance.
	 *
	 * @var ET_Core_Data_Utils
	 */
	public static $data_utils = null;

	/**
	 * `ET_Builder_Module_Helper_OptionTemplate` instance.
	 *
	 * @var ET_Builder_Module_Helper_OptionTemplate
	 */
	public static $option_template = null;

	/**
	 * Composite field dependencies settings.
	 * e.g `show_if`, `show_if_not`
	 *
	 * @var array
	 */
	public static $field_dependencies = array();

	/**
	 * Whether element indexes can be reset or not.
	 *
	 * @var bool
	 */
	public static $can_reset_element_indexes = true;

	const DEFAULT_PRIORITY = 10;
	const HIDE_ON_MOBILE   = 'et-hide-mobile';

	/**
	 * Credits of all custom modules.
	 *
	 * @var array
	 */
	protected $module_credits;

	/**
	 * Store various indices for modules etc.
	 *
	 * @since 4.0
	 *
	 * @var array $indices {
	 *     Module Indices By Post Type
	 *
	 * @type array $post_type {
	 *         Module Indices
	 *
	 * @type int|int[] $index_type Current index value(s) {
	 *             Index Values By Module Slug
	 *
	 * @type int $slug Index value
	 *         }
	 *     }
	 * }
	 */
	protected static $_indices = array();

	const INDEX_SECTION            = 'section';
	const INDEX_ROW                = 'row';
	const INDEX_ROW_INNER          = 'row_inner';
	const INDEX_COLUMN             = 'column';
	const INDEX_COLUMN_INNER       = 'column_inner';
	const INDEX_MODULE             = 'module';
	const INDEX_MODULE_ITEM        = 'module_item';
	const INDEX_MODULE_ORDER       = 'module_order';
	const INDEX_INNER_MODULE_ORDER = 'inner_module_order';

	/**
	 * Instance of `ET_Builder_Global_Presets_Settings`.
	 *
	 * @var ET_Builder_Global_Presets_Settings
	 */
	protected static $global_presets_manager = null;

	/**
	 * Flag whether the module is rendering.
	 *
	 * @var boolean
	 */
	protected $is_rendering = false;

	/**
	 * Flag if current module is sticky or not
	 *
	 * @var boolean
	 */
	protected $is_sticky_module = false;

	/**
	 * List of props keys that need to inherit the value
	 *
	 * Intended to be used in ET_Builder_Module_Helper_MultiViewOptions helper
	 *
	 * @since 4.0.2
	 *
	 * @var array
	 */
	public $mv_inherited_props = array();

	/**
	 * Background related values generated by process_advanced_background_options()
	 * Disabled by default; activated by setting $save_processed_background property to true
	 * Only gradient related value is saved right now; more can be added later if needed
	 *
	 * @since 4.15.0 No longer in use.
	 * @since 4.3.3
	 *
	 * @var array
	 */
	protected $processed_background = array();

	/**
	 * Set true to save processed background so it can be modified & reapplied on another element.
	 *
	 * @since 4.15.0 No longer in use.
	 *
	 * @var bool
	 */
	protected $save_processed_background = false;

	/**
	 * Holds active position origin/location for all devices.
	 *
	 * @var array
	 */
	protected $position_locations = array();

	/**
	 * Module settings that are exposed so layout block previewer can correctly render it
	 * despites tweaks performed to make block preview correctly aligned
	 *
	 * @var array
	 */
	protected static $layout_block_assistive_settings = array();

	/**
	 * Holds feature manager object.
	 *
	 * @var object
	 */
	protected $_features_manager;

	/**
	 * All module slugs.
	 *
	 * @since 4.10.0
	 *
	 * @var array
	 */
	public static $all_module_slugs = array();

	/**
	 * Whether current module uses unique ID or not.
	 *
	 * The unique ID will be added once the module is added via Divi Builder.
	 *
	 * @since 4.13.1
	 *
	 * @var boolean
	 */
	protected $_use_unique_id = false;

	/**
	 * Whether WordPress lazy load is disabled or not.
	 *
	 * @since 4.21.1
	 *
	 * @var boolean
	 */
	public static $is_wp_lazy_load_disabled = false;

	/**
	 * ET_Builder_Element constructor.
	 */
	public function __construct() {
	}

	/**
	 * Return all module slugs.
	 *
	 * @return array
	 *
	 * @since 4.10.0
	 */
	public static function get_all_module_slugs() {
	}

	/**
	 * Make private/protected methods readable.
	 *
	 * @param  string $name Method to call.
	 * @param  array  $args Arguments to pass when calling.
	 * @return mixed|bool Return value of the callback, false otherwise.
	 */
	public function __call( $name, $args ) {
	}

	/**
	 * Makes private properties readable.
	 *
	 * @param string $name Property name.
	 *
	 * @return mixed|string|null
	 */
	public function &__get( $name ) {
	}

	/**
	 * Make private properties checkable.
	 *
	 * @param  string $name Property to check if set.
	 * @return bool Whether the property is set.
	 */
	public function __isset( $name ) {
	}

	/**
	 * Set a property's value.
	 *
	 * @param string $name  Property key.
	 * @param mixed  $value Property value.
	 */
	public function __set( $name, $value ) {
	}

	/**
	 * Determine whether class is Divi official module or not.
	 *
	 * @param string $class_name Module class name.
	 *
	 * @return bool
	 */
	private static function _is_official_module( $class_name ) {
	}

	/**
	 * Determine whether class is WooCommerce module or not.
	 *
	 * @param string $class_name Module class name.
	 *
	 * @return bool
	 */
	private static function _is_woocommerce_module( $class_name ) {
	}
	/**
	 * Set configuration for module's advanced fields.
	 */
	protected function _set_advanced_fields_config() {
	}

	/**
	 * Get whether third party post interference should be respected.
	 * Current use case is for plugins like Toolset that render a
	 * loop within a layout which renders another layout for
	 * each post - in this case we must NOT override the
	 * current post so the loop works as expected.
	 *
	 * @since 4.0.6
	 *
	 * @return boolean
	 */
	protected static function _should_respect_post_interference() {
	}

	/**
	 * Retrieve the main query post id.
	 * Accounts for third party interference with the current post.
	 *
	 * @since 4.0.6
	 *
	 * @return integer|boolean
	 */
	protected static function _get_main_post_id() {
	}

	/**
	 * Retrieve Post ID from 1 of 4 sources depending on which exists:
	 * - $_POST['current_page']['id']
	 * - $_POST['et_post_id']
	 * - $_GET['post']
	 * - get_the_ID()
	 *
	 * @since 3.17.2
	 *
	 * @return int|bool
	 */
	public static function get_current_post_id() {
	}

	/**
	 * Retrieve Post ID from 1 of 3 sources depending on which exists:
	 * - get_the_ID()
	 * - $_GET['post']
	 * - $_POST['et_post_id']
	 *
	 * @since 4.0
	 *
	 * @return int|bool
	 */
	public static function get_current_post_id_reverse() {
	}

	/**
	 * Get the current ID depending on the current request.
	 *
	 * @since 4.0
	 *
	 * @return int|bool
	 */
	public function get_the_ID() {
        // phpcs:ignore WordPress.NamingConventions.ValidFunctionName -- This function name is consistent with WP core `get_the_ID()` function
	}

	/**
	 * Setup the advanced styles manager
	 *
	 * @param int $post_id Post id.
	 *
	 * @return array
	 * @since  4.0 Made public.
	 *
	 * {@internal
	 *   Before the styles manager was implemented, the advanced styles were output inline in the footer.
	 *   That resulted in them being the last styles parsed by the browser, thus giving them higher
	 *   priority than other styles on the page. With the styles manager, the advanced styles are
	 *   enqueued at the very end of the <head>. This is for backwards compatibility (to maintain
	 *   the same priority for the styles as before).}}
	 */
	public static function setup_advanced_styles_manager( $post_id = 0 ) {
	}

	/**
	 * Passes the module design styles for the current page to the advanced styles manager.
	 * {@see 'wp_footer' (19) Must run before the style manager's footer callback}
	 */
	public static function set_advanced_styles() {
	}

	/**
	 * Set {@see ET_Builder_Element::$advanced_styles_manager} to force inline styles.
	 */
	public static function maybe_force_inline_styles() {
	}

	/**
	 * Filters the unified page resource data. The data is an array of arrays of strings keyed by
	 * priority. The builder's styles are set with a priority of 40. Here we want to make sure
	 * only the builder's styles are output in the footer on first-page load so we aren't
	 * duplicating the customizer and custom css styles which are already in the <head>.
	 * {@see 'et_core_page_resource_get_data'}
	 *
	 * @param array[]              $data     {
	 *                                       Arrays
	 *                                       of
	 *                                       strings
	 *                                       keyed
	 *                                       by
	 *                                       priority.
	 *
	 * @type   string[] $priority Resource data.
	 *     ...
	 * }.
	 * @param  string               $context  Where the data will be used. Accepts 'inline', 'file'.
	 * @param  ET_Core_PageResource $resource The resource instance.
	 * @return array
	 */
	public static function filter_page_resource_data( $data, $context, $resource ) {
	}

	/**
	 * Get the slugs for all current builder modules.
	 *
	 * @since 3.0.85
	 *
	 * @param string $post_type Get module slugs for this post type. If falsy, all slugs are returned.
	 *
	 * @return array
	 */
	public static function get_module_slugs_by_post_type( $post_type = 'post' ) {
	}

	/**
	 * Get whether the module has Visual Builder support or not
	 *
	 * @since 3.1
	 *
	 * @return bool
	 */
	public function has_vb_support() {
	}

	/**
	 * Create Factory objects
	 *
	 * @since 3.23 Add margin padding fields object.
	 *
	 * @return void
	 */
	public function set_factory_objects() {
	}

	/**
	 * Populates {@see $fields_unprocessed}.
	 *
	 * @param array $fields Fields.
	 */
	protected function _set_fields_unprocessed( $fields ) {
	}

	/**
	 * Populates {@see self::$fields_unprocessed}.
	 */
	public function set_fields() {
	}

	/**
	 * Normalize default value depends on field type.
	 *
	 * @param string $field         Field.
	 * @param mixed  $default_value Default value.
	 * @param string $type          Field type.
	 *
	 * @return mixed|string
	 */
	protected function _normalize_field_default( $field, $default_value, $type = '' ) {
	}

	/**
	 * Normalize `affects` fields name if needed.
	 * Some 3rd party modules use `#et_pb_<field_name>` format which is wrong and doesn't work in VB, but works in BB.
	 * Convert it to correct format and output notice for developer
	 *
	 * @param string $field_name Field name.
	 *
	 * @return void
	 */
	public function normalize_affect_fields( &$field_name ) {
	}

	/**
	 * Finalizes the configuration of {@see self::$fields_unprocessed}.
	 * Includes filter and fields processing for Visual Builder
	 *
	 * @return void
	 */
	protected function _finalize_all_fields() {
	}

	/**
	 * Register builder enabled post types.
	 *
	 * @param string $post_type Post type.
	 */
	private function register_post_type( $post_type ) {
	}

	/**
	 * Double quote are saved as "%22" in shortcode attributes.
	 * Decode them back into "
	 *
	 * @param string[] $enabled_dynamic_attributes        Attributes which have dynamic content enabled.
	 * @param bool     $et_fb_processing_shortcode_object FB processing shortcode flag.
	 *
	 * @return void
	 */
	private function _decode_double_quotes( $enabled_dynamic_attributes, $et_fb_processing_shortcode_object ) {
	}

	/**
	 * Provide a way for sub-class to access $this->_render_count without a chance to alter its value
	 *
	 * @return int
	 */
	protected function render_count() {
	}

	/**
	 * Bumps the render count for this module instance and the module instance whose slug is
	 * set as {@see self::$_bumps_render_count} (if any).
	 *
	 * @since 3.10
	 */
	protected function _bump_render_count() {
	}

	/**
	 * Check whether ab testing enabled for current module and calculate whether it should be displayed currently or not
	 *
	 * @param array $shortcode_atts Shortcode attributes.
	 *
	 * @return bool
	 */
	private function _is_display_module( $shortcode_atts ) {
	}

	/**
	 * Check whether the current module should be displayed or not.
	 *
	 * @param bool|integer $ab_subject_id subject id.
	 *
	 * @return bool
	 */
	private function _check_ab_test_subject( $ab_subject_id = false ) {
	}

	/**
	 * Get an index.
	 *
	 * @since 4.0
	 * @since 4.14.8 Add WP Editor template check.
	 *
	 * @param string $key The path in the array.
	 *
	 * @return mixed
	 */
	protected static function _get_index( $key ) {
	}

	/**
	 * Set an index.
	 *
	 * @since 4.0
	 * @since 4.14.8 Add WP Editor template check.
	 *
	 * @param string $key   The path in the array.
	 * @param mixed  $index The value to set.
	 *
	 * @return void
	 */
	protected static function _set_index( $key, $index ) {
	}

	/**
	 * Resets indexes used when generating element addresses.
	 *
	 * @param string $content Element content.
	 * @param bool   $force   Whether forcefully reset indexes even when not the main query or
	 *                        {@see self::$can_reset_element_indexes} is false.
	 *
	 * @return string
	 */
	public static function reset_element_indexes( $content = '', $force = false ) {
	}

	/**
	 * Generates the element's address. Every builder element on the page is assigned an address
	 * based on it's index and those of it's parents using the following format:
	 *
	 * `$section.$row.$column.$module[.$module_item]`
	 *
	 * For example, if a module is the forth module in the first column in the third row in the
	 * second section on the page, it's address would be: `1.2.0.3` (indexes are zero-based).
	 *
	 * @since 3.1 Renamed from `_get_current_shortcode_address()` to `generate_element_address()`
	 * @since 3.0.60
	 *
	 * @param string $render_slug render slug.
	 *
	 * @return string
	 */
	public function generate_element_address( $render_slug = '' ) {
	}

	/**
	 * Resolves conditional defaults
	 *
	 * @param array  $values      Fields.
	 * @param string $render_slug Module slug.
	 *
	 * @return array
	 */
	public function resolve_conditional_defaults( $values, $render_slug = '' ) {
	}

	/**
	 * Get wrapper settings. Combining module-defined wrapper settings with default wrapper settings
	 *
	 * @since 3.1
	 *
	 * @param string $render_slug module slug.
	 *
	 * @return array
	 */
	protected function get_wrapper_settings( $render_slug = '' ) {
	}

	/**
	 * Wrap module's rendered output with proper module wrapper. Ensuring module has consistent
	 * wrapper output which compatible with module attribute and background insertion.
	 *
	 * @since 3.1
	 *
	 * @param string $output      Module's rendered output.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	protected function _render_module_wrapper( $output = '', $render_slug = '' ) {
	}

	/**
	 * Resolves the values for dynamic attributes.
	 *
	 * @since 3.17.2
	 *
	 * @param array $original_attrs List of attributes.
	 *
	 * @return array Processed attributes with resolved dynamic values.
	 */
	public function process_dynamic_attrs( $original_attrs ) {
	}

	/**
	 * Prepares for and then calls the module's {@see self::render()} method.
	 *
	 * @param array  $attrs              List of attributes.
	 * @param string $content            Content being processed.
	 * @param string $render_slug        Slug of module that is used for rendering output.
	 * @param string $parent_address     Parent address.
	 * @param string $global_parent      Global parent.
	 * @param string $global_parent_type Global parent type.
	 * @param string $parent_type        Parent type.
	 *
	 * @since 3.23 Add support for generating responsive animation.
	 * @since 3.1 Renamed from `_shortcode_callback()` to `_render()`.
	 * @since 1.0
	 *
	 * @return string The module's HTML output.
	 */
	public function _render( $attrs, $content, $render_slug, $parent_address = '', $global_parent = '', $global_parent_type = '', $parent_type = '', $theme_builder_area = '' ) {
	}

	/**
	 * Add "et_animated" class using filter. Obsolete method and only applied to old 3rd party modules without `modules_classname()` method
	 *
	 * @param string $output      Shortcode output.
	 * @param string $module_slug Module slug.
	 *
	 * @return string
	 */
	public function add_et_animated_class( $output, $module_slug ) {
	}

	/**
	 * Delete attribute values that are equal to the global default value (if one exists).
	 *
	 * @return void
	 */
	protected function _maybe_remove_global_default_values_from_props() {
	}

	/**
	 * Intended to be overridden as needed.
	 */
	public function maybe_inherit_values() {
	}

	/**
	 * Like {@see self::render()}, but sources the output from a template file. The template name
	 * should be set in {@see self::$template_name}.
	 *
	 * Note: this functionality is not currently supported by the Visual Builder. Pages containing
	 * modules that use this method to render their output cannot be edited using the Visual Builder
	 * at this time. However, full support will be added in the coming months.
	 *
	 * @since 3.1 Renamed from `shortcode_output()` to `output()`
	 * @since 2.4.6
	 *
	 * @return string
	 */
	public function output() {
	}

	/**
	 * Generates HTML data attributes from an array of props.
	 *
	 * @since 3.1 Rename from `shortcode_atts_to_data_atts()` to `props_to_html_data_attrs()`
	 * @since 1.0
	 *
	 * @param array $props Propeties to be use in data attributes.
	 *
	 * @return string
	 */
	public function props_to_html_data_attrs( $props = array() ) {
	}

	/**
	 * This method is called before {@self::_render()} for rows, columns, and modules. It can
	 * be overridden by elements that need to perform any tasks before rendering begins.
	 *
	 * @since 3.1 Renamed from `pre_shortcode_content()` to `before_render()`.
	 * @since 1.0
	 */
	public function before_render() {
	}

	/**
	 * Generates the module's HTML output based on {@see self::$props}. This method should be
	 * overridden in module classes.
	 *
	 * @since 3.1 Renamed from `shortcode_callback()` to `render()`.
	 * @since 1.0
	 *
	 * @param array  $attrs       List of unprocessed attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string The module's HTML output.
	 */
	public function render( $attrs, $content, $render_slug ) {
	}

	/**
	 * Replace the et_pb_row with et_pb_row_inner and et_pb_column with et_pb_column_inner.
	 * Used as a callback function in {@self::et_pb_maybe_fix_specialty_columns} when fixing content of Specialty Sections
	 *
	 * @param string $rows Row content.
	 *
	 * @return string Shortcode string.
	 * @since  3.19.16
	 */
	public function et_pb_fix_specialty_columns( $rows ) {
	}

	/**
	 * Run regex against the Specialty Section content to find and fix invalid inner shortcodes
	 *
	 * @param string $section_content Section content.
	 *
	 * @return string Shortcode string.
	 * @since  3.19.16
	 */
	public function et_pb_maybe_fix_specialty_columns( $section_content ) {
	}

	/**
	 * Generates data used to render the module in the builder.
	 * See {@see self::render()} for parameter info.
	 *
	 * @param array       $atts               Module attributes.
	 * @param string|null $content            Module content.
	 * @param string      $render_slug        Module slug.
	 * @param string      $parent_address     [description].
	 * @param string      $global_parent      [description].
	 * @param string      $global_parent_type [description].
	 * @param string      $parent_type        [description].
	 *
	 * @return array|string An array when called during AJAX request, an empty string otherwise.
	 * @since  3.1 Renamed from `_shortcode_passthru_callback()` to `render_as_builder_data()`
	 * @since  3.0.0
	 */
	public function render_as_builder_data( $atts, $content, $render_slug, $parent_address = '', $global_parent = '', $global_parent_type = '', $parent_type = '', $theme_builder_area = '' ) {
	}

	/**
	 * Determine if provided string contain line-breaks (`\r\n`)
	 *
	 * @param string $content String to check.
	 *
	 * @return bool
	 */
	public function has_line_breaks( $content ) {
	}

	/**
	 * Additional shortcode render callback.
	 *
	 * Intended to be overridden as needed.
	 *
	 * @param array  $attrs       Attributes.
	 * @param null   $content     Shortcode content.
	 * @param string $render_slug Shortcode tag.
	 */
	public function additional_render( $attrs, $content, $render_slug ) {
	}

	/**
	 * Intended to be overridden as needed.
	 */
	public function predefined_child_modules() {
	}

	/**
	 * Generate global setting name
	 *
	 * @param string $option_slug Option slug.
	 *
	 * @return string               Global setting name in the following format: "module_slug-option_slug"
	 */
	public function get_global_setting_name( $option_slug ) {
	}

	/**
	 * Add global default values to all fields, if they don't have defaults set
	 *
	 * @return void
	 */
	protected function _maybe_add_global_defaults() {
	}

	/**
	 * Rebuild option template in $this->fields_unprocessed property into actual field if needed.
	 *
	 * @since 3.28
	 */
	protected function _maybe_rebuild_option_template() {
	}

	/**
	 * Adds Global Presets settings.
	 *
	 * @since 3.26
	 *
	 * @param array  $attrs       The list of a module attributes.
	 * @param string $render_slug The real slug from the shortcode.
	 *
	 * @return array
	 */
	protected function _maybe_add_global_presets_settings( $attrs, $render_slug ) {
	}

	/**
	 * Add additional option fields.
	 *
	 * @since 3.23 Introduce form field options set. Also, add codes to generate responsive options
	 *           set with suffix automatically. It also supports mobile_options on composite, bg
	 *           field, and computed fields as well.
	 */
	protected function _add_additional_fields() {
	}

	/**
	 * Set i18n used by font fields.
	 *
	 * @since 4.4.9
	 *
	 * @return void
	 */
	protected function set_i18n_font() {
	}

	/**
	 * Add font option fields.
	 *
	 * @since 3.23 Introduce block elements sub options group. Add responsive settings for font set,
	 *           text color, text alignment, and text-shadow options set.
	 */
	protected function _add_font_fields() {
	}

	/**
	 * Add background option fields.
	 *
	 * @since 3.23 Add responsive settings for background settings.
	 */
	protected function _add_background_fields() {
	}

	/**
	 * Add text option fields.
	 *
	 * @since 3.23 Add responsive settings for text orientation and layout settings.
	 */
	protected function _add_text_fields() {
	}

	/**
	 * Add Border & Border Radius fields to each module. Default borders option are added on with
	 * Borders fields group on Design tab. However, module can add more borders field by adding
	 * more settings on $this->advanced_fields['borders']
	 *
	 * @since 3.1
	 *
	 * {@internal
	 *   border options are initially defined via _add_additional_border_fields() method and adding
	 *   more border options require overwriting it on module's class. This is repetitive so
	 *   the fields registration mechanics were simplified mimicing advanced fonts field mechanism.}
	 */
	protected function _add_borders_fields() {
	}

	/**
	 * Add transform fields.
	 */
	protected function _add_transforms_fields() {
	}
	/**
	 * Add sizing option fields.
	 */
	protected function _add_sizing_fields() {
	}

    // phpcs:ignore Generic.Commenting.DocComment -- Deprecated function.
	/**
	 * @deprecated
	 */
	public function _add_max_width_fields() {
	}

	/**
	 * Add overflow option fields.
	 */
	protected function _add_overflow_fields() {
	}

	/**
	 * Add display conditions option fields.
	 */
	protected function _add_display_conditions_fields() {
	}

	/**
	 * Return Scroll effects option fields.
	 *
	 * @return array
	 */
	public function get_scroll_effects_options() {
	}

	/**
	 * Add sticky fields to the additional fields options.
	 *
	 * @since 4.6.0
	 *
	 * @return void
	 */
	protected function _add_sticky_fields() {
	}

	/**
	 * Add scroll effects option fields.
	 */
	protected function _add_scroll_effects_fields() {
	}

	/**
	 * Add margin & padding option fields.
	 *
	 * @since 3.23 Add allowed CSS units for margin and padding.
	 */
	protected function _add_margin_padding_fields() {
	}

	/**
	 * Add button option fields.
	 *
	 * @since 3.23 Add custom padding for button options set. Add allowed CSS units. Set custom
	 *           default for text size and border width. Add responsive settings for button
	 *           settings. Set custom group label. Add ability hide and show the icon settings.
	 */
	protected function _add_button_fields() {
	}

	/**
	 * Add special image_icon option fields.
	 *
	 * @since ? Add custom margin-padding for image_icon field.
	 */
	protected function _add_image_icon_fields() {
	}
	/**
	 * Add animation option fields.
	 *
	 * @since 3.23 Introduce responsive settings on all animation options. Rename Animation label
	 *           for et_pb_team_member module as Image Animation. Reorder animation repeat option
	 *           to the bottom of animation settings.
	 */
	protected function _add_animation_fields() {
	}

	/**
	 * Add additional transition fields. e.x hover transition fields.
	 */
	private function _add_additional_transition_fields() {
	}

	/**
	 * Add CSS position controls affects top,right,bottom,left,position and transform translate CSS properties.
	 *
	 * @return void
	 * @since  4.2
	 */
	private function _add_position_fields() {
	}
	/**
	 * Add CSS filter controls (i.e. saturation, brightness, opacity) to the `_additional_fields_options` array.
	 *
	 * @since 3.23 Introduce responsive settings on all animation options. Add allowed CSS unit for
	 *           Blur option.
	 *
	 * @return void
	 */
	protected function _add_filter_fields() {
	}

	/**
	 * Add the divider options to the additional_fields_options array.
	 */
	protected function _add_divider_fields() {
	}

	/**
	 * Add additional Text Shadow fields to all modules
	 */
	protected function _add_text_shadow_fields() {
	}

	/**
	 * Add box shadow fields based on configuration on $this->advanced_fields['box_shadow']
	 *
	 * @since 3.1
	 */
	protected function _add_box_shadow_fields() {
	}

	/**
	 * Get css transition properties for box shadow fields.
	 *
	 * @param string|null $module Module slug.
	 *
	 * @return array
	 */
	public function get_transition_box_shadow_fields_css_props( $module = 'default' ) {
	}

	/**
	 * Get css transition properties for text shadow fields.
	 *
	 * @param string|null $module Module slug.
	 *
	 * @return array
	 */
	public function get_transition_text_shadow_fields_css_props( $module = null ) {
	}

	/**
	 * Get css transition properties for filters fields.
	 *
	 * @param string|null $module Module slug.
	 *
	 * @return array
	 */
	public function get_transition_filters_fields_css_props( $module = null ) {
	}

	/**
	 * Get css transition properties for borders fields.
	 *
	 * @param string|null $module Module slug.
	 *
	 * @return array
	 */
	public function get_transition_borders_fields_css_props( $module = 'default' ) {
	}

	/**
	 * Get margin and padding transition css properties.
	 *
	 * @param string|null $module Module slug.
	 *
	 * @return array
	 */
	public function get_transition_margin_padding_fields_css_props( $module = null ) {
	}

	/**
	 * Get transform transition css properties.
	 *
	 * @param string|null $module Module slug.
	 *
	 * @return array
	 */
	public function get_transition_transform_css_props( $module = null ) {
	}

	/**
	 * Get position transition css properties.
	 *
	 * @param string|null $module Module slug.
	 *
	 * @return array
	 */
	public function get_transition_position_css_props( $module = null ) {
	}

	/**
	 * Get font transition css properties.
	 *
	 * @return array
	 */
	public function get_transition_font_fields_css_props() {
	}

	/**
	 * Get height transition css properties.
	 *
	 * @param string $prefix The prefix string that may be added to field name.
	 *
	 * @return array
	 */
	public function get_transition_height_fields_css_props( $prefix = '' ) {
	}

	/**
	 * Get css transition properties for image fields.
	 *
	 * @return array
	 */
	public function get_transition_image_fields_css_props() {
	}
	/**
	 * Get css transition properties for button fields.
	 * *
	 *
	 * @return array
	 */
	public function get_transition_button_fields_css_props() {
	}

	/**
	 * Get transition form field CSS props.
	 *
	 * @since 3.23
	 *
	 * @return array Selector for each fields.
	 */
	public function get_transition_form_field_fields_css_props() {
	}
	/**
	 * Get css transition properties for gutter wudth fields.
	 * *
	 *
	 * @return array
	 */
	public function get_transition_gutter_fields_css_props() {
	}

	/**
	 * Get CSS fields transition.
	 *
	 * @since 3.23 Add form field options group and background image on the fields list.
	 */
	public function get_transition_fields_css_props() {
	}

	/**
	 * Add link options fields to all modules
	 *
	 * @since 3.15.1
	 */
	protected function _add_link_options_fields() {
	}

	/**
	 * Get transition style.
	 *
	 * @param array  $props  Transition css properties.
	 * @param string $device Device.
	 *
	 * @since 3.23 Add $device parameter to support responsive settings.
	 *
	 * @return string
	 */
	public function get_transition_style( array $props = array(), $device = 'desktop' ) {
	}

	/**
	 * Setup hover transitions.
	 *
	 * @param string $function_name Function name.
	 *
	 * @since 4.6.0 Add sticky style support
	 */
	public function setup_hover_transitions( $function_name ) {
	}

	/**
	 * Process hover transitions.
	 *
	 * @param string $function_name Module alias.
	 *
	 * @since 4.6.0 add sticky style support
	 */
	public function process_hover_transitions( $function_name ) {
	}

	/**
	 * Add custom css fields. e.g before, main_element and after.
	 */
	protected function _add_custom_css_fields() {
	}

	/**
	 * Add toggles in settings modal.
	 *
	 * @param string $tab_slug      Toggle tab slug.
	 * @param string $toggles_array Toggles.
	 */
	protected function _add_settings_modal_toggles( $tab_slug, $toggles_array ) {
	}

	/**
	 * Add settings under sub toggles.
	 *
	 * @since 3.23
	 * @since 3.26.7 Add support to set custom icons on sub toggles.
	 *
	 * @param string  $tab_slug          Current tab slug.
	 * @param string  $toggle_slug       Current toggle slug.
	 * @param array   $sub_toggle_items  Sub toggles settings need to be added.
	 * @param boolean $tabbed_subtoggles Tabbed sub toggle status.
	 * @param boolean $bb_icons_support  BB icons support status.
	 */
	protected function _add_settings_modal_sub_toggles( $tab_slug, $toggle_slug, $sub_toggle_items, $tabbed_subtoggles = false, $bb_icons_support = false ) {
	}

	/**
	 * Get all the fields.
	 *
	 * @return array|mixed|void
	 */
	private function _get_fields() {
	}

	/**
	 * Checks if the field value equals its default value
	 *
	 * @param string $name  Field name.
	 * @param mixed  $value Field value.
	 *
	 * @return bool
	 */
	protected function _is_field_default( $name, $value ) {
	}

	/**
	 * Intended to be overridden as needed.
	 *
	 * @param array $fields Module fields.
	 *
	 * @return mixed|void
	 */
	public function process_fields( $fields ) {
	}

	/**
	 * Get the settings fields data for this element.
	 *
	 * @since 1.0
	 * @todo  Finish documenting return value's structure.
	 *
	 * @return array[] {
	 *     Settings Fields
	 *
	 * @type mixed[] $setting_field_key {
	 *         Setting Field Data
	 *
	 * @type string   $type                Setting field type.
	 * @type string   $id                  CSS id for the setting.
	 * @type string   $label               Text label for the setting. Translatable.
	 * @type string   $description         Description for the settings. Translatable.
	 * @type string   $class               Optional. Css class for the settings.
	 * @type string[] $affects             Optional. The keys of all settings that depend on this setting.
	 * @type string[] $depends_on          Optional. The keys of all settings that this setting depends on.
	 * @type string   $depends_show_if     Optional. Only show this setting when the settings
	 *                                             on which it depends has a value equal to this.
	 * @type string   $depends_show_if_not Optional. Only show this setting when the settings
	 *                                             on which it depends has a value that is not equal to this.
	 *         ...
	 *     }
	 *     ...
	 * }
	 */
	public function get_fields() {
	}

	/**
	 * Returns props value by provided key, if the value is empty, returns the default value
	 *
	 * @param string $prop    Prop key.
	 * @param mixed  $default Default value.
	 *
	 * @return mixed|null
	 */
	public function prop( $prop, $default = null ) {
	}

	/**
	 * Get module defined fields + automatically generated fields
	 *
	 * @since 3.23 Add auto generate responsive settings suffix based on mobile_options parameter.
	 *
	 * @internal Added to make get_fields() lighter. Initially added during BFB's 3rd party support
	 *
	 * @return array
	 */
	public function get_complete_fields() {
	}

	/**
	 * Get configuration for module's advanced fields. This method is meant to be overridden in module classes.
	 *
	 * @since 3.1
	 *
	 * @return array[] {@see self::$advanced_fields}
	 */
	public function get_advanced_fields_config() {
	}

	/**
	 * Get configuration for module's custom css fields. This method is meant to be overridden in module classes.
	 *
	 * @since 3.1
	 *
	 * @return array[] {@see self::$custom_css_fields}
	 */
	public function get_custom_css_fields_config() {
	}

	/**
	 * Returns Global Presets settings
	 */
	public static function get_global_presets() {
	}

	/**
	 * Get custom tabs for the module's settings modal. This method is meant to be overridden in module classes.
	 *
	 * @since 3.1
	 *
	 * @return array[] {@see self::$settings_modal_tabs}
	 */
	public function get_settings_modal_tabs() {
	}

	/**
	 * Get toggles for the module's settings modal. This method is meant to be overridden in module classes.
	 *
	 * @since 3.1
	 *
	 * @return array[] {@see self::$settings_modal_toggles}
	 */
	public function get_settings_modal_toggles() {
	}

	/**
	 * Generate column fields.
	 *
	 * @param integer $column_number number of column.
	 * @param array   $base_fields   base fields for column.
	 *
	 * @return array column fields
	 */
	public function get_column_fields( $column_number = 1, $base_fields = array() ) {
	}

	/**
	 * Append suffix to simple array value.
	 *
	 * @param array  $values array value.
	 * @param string $suffix intended suffix for output's array.
	 *
	 * @return array suffixed value
	 */
	public function _append_suffix( $values, $suffix ) {
	}

	/**
	 * Returns unprocessed attrs.
	 *
	 * @since 4.15.0
	 *
	 * @return mixed[]
	 */
	public function get_attrs_unprocessed() {
	}

	/**
	 * Returns module style priority.
	 *
	 * @return int
	 */
	public function get_style_priority() {
	}

	/**
	 * Get current post's post type.
	 *
	 * @return string
	 */
	public function get_post_type() {
	}

	/**
	 * Removed extra tabs/newlines from template.
	 *
	 * @param string $content Template content.
	 *
	 * @return string|string[]
	 */
	public static function optimize_bb_chunk( $content ) {
	}

	/**
	 * Optimize template content.
	 *
	 * @param string $content Template content.
	 *
	 * @return string|string[]
	 */
	public static function get_unique_bb_key( $content ) {
	}

	/**
	 * Wrap settings option in wrapper div e.g `.et-pb-option-standard`.
	 *
	 * @param string $option_output Option markup.
	 * @param array  $field         Field settings.
	 * @param string $name          Field name.
	 *
	 * @return string|string[]
	 */
	public function wrap_settings_option( $option_output, $field, $name = '' ) {
	}

	/**
	 * Get field renderer data e.g renderer method.
	 *
	 * @param array $field Field options.
	 *
	 * @return array|mixed|void
	 */
	public function get_field_renderer( $field ) {
	}

	/**
	 * Prepare module field (option) for use within BB microtemplates.
	 * The own field renderer can be used.
	 *
	 * @param array  $field Module field.
	 *
	 * @param string $name  Unused name param.
	 *
	 * @return mixed|string Html code of the field
	 */
	public function wrap_settings_option_field( $field, $name = '' ) {
	}

	/**
	 * Wrap setting option label.
	 *
	 * @param array $field Field settings.
	 *
	 * @return mixed|string
	 */
	public function wrap_settings_option_label( $field ) {
	}

	/**
	 * Get svg icon as string.
	 *
	 * @param string $icon_name icon name.
	 *
	 * @return string div-wrapped svg icon.
	 */
	public function get_icon( $icon_name ) {
	}

	/**
	 * Get structure of background UI tabs
	 *
	 * @param string $base_name Background base.
	 *
	 * @return array
	 */
	public function get_background_fields_structure( $base_name = 'background' ) {
	}

	/**
	 * Get list of background fields names in one dimensional array
	 *
	 * @return array
	 */
	public function get_background_fields_names() {
		$background_structure = $this->get_background_fields_structure();
		$fields_names         = array();

		foreach ( $background_structure as $tab_name ) {
			foreach ( $tab_name as $field_name ) {
				$fields_names[] = $field_name;
			}
		}

		return $fields_names;
	}

	/**
	 * Get / extract background fields from all modules fields
	 *
	 * @param array  $all_fields All modules fields.
	 *
	 * @param string $base_name  Field base name.
	 *
	 * @return array background fields multidimensional array grouped based on its tab
	 */
	public function get_background_fields( $all_fields, $base_name = 'background' ) {
		$background_fields_structure = $this->get_background_fields_structure( $base_name );
		$background_tab_names        = array_keys( $background_fields_structure );
		$background_fields           = array_fill_keys( $background_tab_names, array() );

		foreach ( $all_fields as $field_name => $field ) {
			// Multiple foreaches seem overkill. Use single foreach with little bit if conditions
			// redundancy to get background fields grouped into multi-dimensional tab-based array.
			if ( in_array( $field_name, $background_fields_structure['color'], true ) ) {
				$background_fields['color'][ $field_name ] = $field;
			}

			if ( in_array( $field_name, $background_fields_structure['gradient'], true ) ) {
				$background_fields['gradient'][ $field_name ] = $field;
			}

			if ( in_array( $field_name, $background_fields_structure['image'], true ) ) {
				$background_fields['image'][ $field_name ] = $field;
			}

			if ( in_array( $field_name, $background_fields_structure['video'], true ) ) {
				$background_fields['video'][ $field_name ] = $field;
			}

			// QF_BACKGROUND_MASKS.

			if ( in_array( $field_name, $background_fields_structure['pattern'], true ) ) {
				$background_fields['pattern'][ $field_name ] = $field;
			}

			if ( in_array( $field_name, $background_fields_structure['mask'], true ) ) {
				$background_fields['mask'][ $field_name ] = $field;
			}
		}

		return $background_fields;
	}

	/**
	 * Generate background fields based on base name
	 *
	 * @since 3.23 Add allowed CSS units for gradient start and end position. Override computed callback.
	 *
	 * @param string $base_name       background base name.
	 * @param string $background_tab  background tab name.
	 * @param string $tab_slug        field's tab slug.
	 * @param string $toggle_slug     field's toggle slug.
	 * @param string $context         field's context.
	 * @param array  $options_filters list of filters that should be used to skip some options.
	 *
	 * @return array of background fields
	 */
	public function generate_background_options( $base_name, $background_tab, $tab_slug, $toggle_slug, $context = null, $options_filters = array() ) {
	}

	/**
	 * Get string of background fields UI. Used in place of background_color fields UI.
	 *
	 * @param array  $all_fields list of all module fields.
	 *
	 * @param string $base_name  background base name.
	 *
	 * @return string background fields UI
	 */
	public function wrap_settings_background_fields( $all_fields, $base_name = 'background' ) {
	}

	/**
	 * Get field name with prefix.
	 *
	 * @param array $field Field.
	 *
	 * @return mixed|string
	 */
	public function get_field_name( $field ) {
	}

	/**
	 * Get field name for use in underscore templates.
	 *
	 * @since 3.17.2
	 *
	 * @param array $field Field.
	 *
	 * @return string
	 */
	public function get_field_variable_name( $field ) {
	}

	/**
	 * Process field attributes into markup.
	 *
	 * @param array $field      Field.
	 * @param array $attributes Field attributes.
	 */
	public function process_html_attributes( $field, &$attributes ) {
	}

	/**
	 * Returns an underscore template for the options settings.
	 *
	 * @since 3.23 Disable mobile options (responsive settings) on unsupported field types. It's
	 *           added to adapt Options Harmony v2. Fix unexpected token because composite fields
	 *           with range type load empty last edited value.
	 *
	 * @param array  $field {
	 *                      Associative array.
	 *
	 * @type  'id'                  => (int),
	 * @type  string  'label'               => (string),
	 * @type  string  'description'         => (string),
	 * @type  string  'class'               => (string),
	 * @type  string  'type'                => (string),
	 * @type  string  'validate_input'      => (bool),
	 * @type  string  'name'                => (string),
	 * @type  string  'default'             => (string),
	 * @type  string  'defaults'            => (array),
	 * @type  string  'options'             => (array),
	 * @type  string 'option_category'     => (string),
	 * @type  string 'attributes'          => (string),
	 * @type  string 'affects'             => (string),
	 * @type  string 'before'              => (string),
	 * @type  string 'after'               => (string),
	 * @type  string 'display_if'          => (string),
	 * @type  string 'depends_on'          => (string),
	 * @type  string 'depends_show_if'     => (string),
	 * @type  string 'depends_show_if_not' => (string),
	 * @type  string 'show_if'             => (string),
	 * @type  string 'show_if_not'         => (string),
	 * @type  string 'tab_slug'            => (string),
	 * @type  string 'toggle_slug'         => (string),
	 * @type  string 'composite_type'      => (string),
	 * @type  string 'composite_structure' => (array),
	 *   }
	 * @param string $name  Field name.
	 *
	 * @return string        HTML underscore template.
	 */
	public function render_field( $field, $name = '' ) {
	}

	/**
	 * Returns an underscore template for the field before and after elements.
	 *
	 * @param array $elements Render field after/before these elements.
	 *
	 * @return string
	 */
	public function render_field_before_after_element( $elements ) {
	}

	/**
	 * Returns an underscore template for the font select options settings.
	 *
	 * @param string $name        Field name.
	 * @param string $id          Field id.
	 * @param string $group_label Field group label.
	 *
	 * @return string
	 */
	public function render_font_select( $name, $id, $group_label ) {
	}

	/**
	 * Returns an underscore template for the select options settings.
	 *
	 * @param string $name           Option name.
	 * @param array  $options        Option settings.
	 * @param string $id             Option id.
	 * @param string $class          Option css class.
	 * @param string $attributes     Option html attributes.
	 * @param string $field_type     Whether select field is with option groups.
	 * @param array  $button_options Yes/No button option.
	 * @param string $default        Option default value.
	 * @param bool   $only_options   Whether to return only option without <select>.
	 *
	 * @return string
	 */
	public function render_select( $name, $options, $id = '', $class = '', $attributes = '', $field_type = '', $button_options = array(), $default = '', $only_options = false ) {
	}

	/**
	 * Returns an underscore template for the multiple button options settings.
	 *
	 * @param string $name       Option name.
	 * @param array  $options    Option settings.
	 * @param string $id         Option id.
	 * @param string $class      Option css class.
	 * @param string $attributes Option html attributes.
	 * @param string $value      Option value.
	 * @param string $default    Option default value.
	 *
	 * @return string
	 */
	public function render_multiple_buttons( $name, $options, $id = '', $class = '', $attributes = '', $value = '', $default = '' ) {
	}

    // phpcs:disable -- Deprecated function.
    /**
     * @deprecated
     */
    public function get_main_tabs() {}
    // phpcs:enable

	/**
	 * Get validation rule attribute.
	 *
	 * @return array
	 */
	public function get_validation_attr_rules() {
	}

	/**
	 * Get validation class name to use in underscore template.
	 *
	 * @return array
	 */
	public function get_validation_class_rules() {
	}

	/**
	 * Sorting options by priority.
	 *
	 * @param array $fields Fields.
	 *
	 * @return array
	 */
	public function sort_fields( $fields ) {
	}

	/**
	 * Return setting options markup.
	 *
	 * @return string
	 */
	public function get_options() {
	}

	/**
	 * Return children(general) setting options markup.
	 *
	 * @return string
	 */
	public function children_settings() {
	}

	/**
	 * Return add new item(module) text.
	 *
	 * @return mixed|string|null
	 */
	public function add_new_child_text() {
	}

	/**
	 * Wrap module settings underscore template.
	 *
	 * @param string $output Module template content.
	 *
	 * @return string
	 */
	public function wrap_settings( $output ) {
	}

	/**
	 * Wrap module template into validation form.
	 *
	 * @param string $output Module template.
	 *
	 * @return string
	 */
	public function wrap_validation_form( $output ) {
	}

	/**
	 * Get the module's props mapped to their default values.
	 *
	 * @since 3.1 Renamed from `get_shortcode_fields()` to `get_default_props()`.
	 * @since 1.0
	 *
	 * @return array
	 */
	public function get_default_props() {
	}

	/**
	 * Get module data attributes.
	 *
	 * @return string
	 */
	public function get_module_data_attributes() {
	}

	/**
	 * Build underscore template for the module.
	 *
	 * @return string
	 */
	public function build_microtemplate() {
	}

	/**
	 * Generate gradient background.
	 *
	 * @param array $args Settings.
	 *
	 * @return string
	 */
	public function get_gradient( $args ) {
	}

	/**
	 * Get values for the rel attribute.
	 *
	 * @return array
	 */
	public function get_rel_values() {
	}

	/**
	 * Get rel attributes.
	 *
	 * @param string $saved_value Rel values.
	 * @param bool   $add_tag     Whether to add rel attribute.
	 *
	 * @return string
	 */
	public function get_rel_attributes( $saved_value, $add_tag = true ) {
	}

	/**
	 * Get text orientation.
	 *
	 * @since 3.23 Add device and desktop default parameter to get responsive value.
	 *
	 * @param  string $device          Device name.
	 * @param  string $desktop_default Default desktop value.
	 * @return string                  RTL ready text alignment value.
	 */
	public function get_text_orientation( $device = 'desktop', $desktop_default = '' ) {
	}

	/**
	 * Get text orientation class.
	 *
	 * @param bool $print_default Whether.
	 *
	 * @return string Text orientation class names.
	 * @since  3.23 Generate text orientation classes for tablet and phone.
	 */
	public function get_text_orientation_classname( $print_default = false ) {
	}

	/**
	 * Intended to be overridden as needed.
	 *
	 * @return string
	 */
	public function get_max_width_additional_css() {
	}

	/**
	 * Get type of element
	 */
	public function get_type() {
	}

	/**
	 * Remove suffix of a string
	 *
	 * @param string $string    Input string.
	 * @param string $separator Suffix to remove.
	 *
	 * @return string
	 */
	public function remove_suffix( $string, $separator = '_' ) {
	}

	/**
	 * Determine field visibility against its dependency.
	 *
	 * @param array $field Field.
	 *
	 * @return bool
	 */
	protected function _is_field_applicable( $field ) {
	}

	/**
	 * Update global colors info to match replace with value.
	 *
	 * @since 4.9.0
	 *
	 * @return void
	 */
	protected function _prepare_global_colors_info() {
	}

	/**
	 * Remove inactive global colors info from module.
	 *
	 * @since 4.9.0
	 *
	 * @param string $gc_info       Module's global colors info.
	 * @param array  $global_colors Global colors.
	 *
	 * @return array
	 */
	protected function _remove_inactive_global_colors_module_info( $gc_info, $global_colors ) {
	}

	/**
	 * Process global colors.
	 * If there is a global color id need to be replaced, that is done here.
	 *
	 * @since 4.9.0
	 *
	 * @return void
	 */
	public function process_global_colors() {
	}

	/**
	 * Process the fields.
	 *
	 * @since 3.23 Add function to process advanced form field options set.
	 *
	 * @param  string $function_name String of the function_name.
	 * @return void
	 */
	public function process_additional_options( $function_name ) {
	}

	/**
	 * Process inline fonts options into CSS style.
	 *
	 * @param string $fonts_list Font list.
	 */
	public function process_inline_fonts_option( $fonts_list ) {
	}

	/**
	 * Process advanced font styles.
	 *
	 * @since 3.23 Add support to generate responsive styles of font, text color, and text align.
	 *           And also process styles of block elements sub options group.
	 * @since 4.6.0 Add sticky style support
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_advanced_fonts_options( $function_name ) {
	}

	/**
	 * Maybe push element to the letter spacing fix list
	 *
	 * @since 4.4.7 Checks a element for the having of the letter-spacing property,
	 * adds a prefix to all its selectors, push prefixed selector
	 * to the array ($this->letter_spacing_fix_selectors) of elements
	 * that need to have ligature fix (same elements will be overridden).
	 *
	 * @param string $selector               CSS selector of the current element.
	 * @param array  $css_prefixes           array or string of CSS prefixes which will be added to the current element selector.
	 * @param string $declaration            CSS declaration of the current element.
	 * @param string $default_letter_spacing default letter-spacing value at the current element.
	 */
	public function maybe_push_element_to_letter_spacing_fix_list( $selector, $css_prefixes, $declaration, $default_letter_spacing ) {
	}

	/**
	 * Process background CSS styles.
	 *
	 * @since 3.23 Add responsive support.
	 * @since 4.6.0 Add sticky style support.
	 * @since 4.15.0 Use et_pb_background_options()->get_background_style() to process.
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_advanced_background_options( $function_name ) {
	}

	/**
	 * Process margin and padding advanced css.
	 *
	 * @since 4.10.0
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_margin_padding_advanced_css( $function_name ) {
	}

	/**
	 * Process text shadow options.
	 *
	 * @since 4.10.0
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_text_shadow( $function_name ) {
	}

	/**
	 * Process advanced text options.
	 *
	 * @since 3.23 Add support to generate responsive styles of text orientation.
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_advanced_text_options( $function_name ) {
	}

	/**
	 * Output border and border radius styling
	 *
	 * @param string $function_name Function name.
	 *
	 * @since 3.23 Add support to generate responsive styles of border styles and radii.]
	 * @since 4.6.0 Add sticky style support.
	 */
	public function process_advanced_borders_options( $function_name ) {
	}

	/**
	 * Get active position locations.
	 *
	 * @return array
	 */
	public function get_position_locations() {
	}

	/**
	 * Set active position locations.
	 *
	 * @param string $locations Location name e.x center_center, top_left_is_default.
	 */
	public function set_position_locations( $locations ) {
	}

	/**
	 * Process transform options.
	 *
	 * @param string $function_name Function name.
	 *
	 * @since 4.6.0 Add sticky style support.
	 */
	public function process_transform( $function_name ) {
	}

	/**
	 * Process position options.
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_position( $function_name ) {
	}

	/**
	 * Adds Filter styles to the page custom css code
	 *
	 * Wrapper for `generate_css_filters` used for module defaults
	 *
	 * @param string $function_name Module slug.
	 *
	 * @return string|void
	 */
	public function process_advanced_filter_options( $function_name ) {
	}

	/**
	 * Determine if max_width is used
	 *
	 * @since 4.10.0
	 *
	 * @param  string $slug Module slug.
	 * @return bool
	 */
	public function max_width_is_used( $slug ) {
	}

	/**
	 * Process max width options
	 *
	 * @param string $function_name Function name.
	 *
	 * @since 4.6.0 Add sticky style support.
	 */
	public function process_max_width_options( $function_name ) {
	}

	/**
	 * Return unique identifier for sticky element. For frontend, order class is considered unique
	 * and sufficient as identifier
	 *
	 * @since 4.6.0
	 *
	 * @param string $render_slug Render slug.
	 *
	 * @return string
	 */
	public function get_sticky_id( $render_slug = '' ) {
	}

	/**
	 * Process sticky element
	 *
	 * Append current module's sticky setting into static variable which will be exposed for js files
	 * Sticky element UX is fully handled via javascript; Module simply exposes the configuration
	 * for JS to initialized
	 *
	 * @since 4.6.0
	 *
	 * @param string $render_slug Render slug.
	 */
	public function process_sticky( $render_slug ) {
	}

	/**
	 * Process scroll effects options.
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_scroll_effects( $function_name ) {
	}

	/**
	 * Check if scroll effects is enabled.
	 *
	 * @param string $options Scroll options.
	 *
	 * @since 4.10.0
	 */
	public function is_scroll_effects_enabled( $options ) {
	}

	/**
	 * Process height options
	 *
	 * @param string $function_name Function name.
	 *
	 * @since 4.6.0 Add sticky style support.
	 */
	public function process_height_options( $function_name ) {
	}

	/**
	 * Process overflow options
	 *
	 * @param string $function_name Function name.
	 *
	 * @since 4.6.0 Add sticky style support.
	 */
	public function process_overflow_options( $function_name ) {
	}

	/**
	 * Determine if custom margin or padding is used.
	 *
	 * @since 4.10.0
	 *
	 * @return bool
	 */
	public function custom_margin_is_used() {
	}

	/**
	 * Determine if font options are being used.
	 *
	 * @since 4.10.0
	 *
	 * @param  string $slugs font option slugs.
	 * @return bool
	 */
	public function font_options_are_used( $slugs ) {
	}

	/**
	 * Process margin options
	 *
	 * @param string $function_name Function name.
	 *
	 * @since 4.6.0 Add sticky style support
	 */
	public function process_advanced_custom_margin_options( $function_name ) {
	}

	/**
	 * Process mobile margin options into CSS style.
	 *
	 * @param string $function_name Module slug.
	 * @param string $style_mobile  Style array.
	 * @param string $css_element   CSS element selector.
	 */
	public function process_advanced_mobile_margin_options( $function_name, $style_mobile, $css_element ) {
	}

	/**
	 * Returns setting hover value if hover is enabled.
	 *
	 * @param string $option Option name.
	 *
	 * @return mixed|null
	 */
	protected function get_hover_value( $option ) {
	}

	/**
	 * Process advanced button options.
	 *
	 * @since 3.23 Add support to generate responsive styles of padding and button alignment.
	 * @since 4.6.0 Add sticky style support.
	 * @since 4.6.0 Background rendering is refactored; it now uses et_pb_background_options().
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_advanced_button_options( $function_name ) {
	}

	/**
	 * Process form field options into correct CSS styles.
	 *
	 * Fields will be processed here (name, mode, custom selector):
	 *
	 * - Background Color       -> Hover -> Form field selector
	 * - Background Focus Color -> Hover -> Form field focus selector
	 * - Text Color             -> Hover -> Form field & placeholder selector
	 * - Text Focus Color       -> Hover -> Form field & placeholder focus selector
	 *
	 * @since 3.23
	 * @since 4.6.0 Add sticky style support
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_advanced_form_field_options( $function_name ) {
	}

	/**
	 * Apply free form CSS.
	 *
	 * @param string $function_name Module slug.
	 * @param string $css_string    CSS string.
	 *
	 * @return void
	 */
	public function apply_free_form_css( $function_name, $css_string ) {
	}

	/**
	 * Process custom css fields into CSS style.
	 *
	 * @param string $function_name Module slug.
	 *
	 * @return bool
	 */
	public function process_custom_css_fields( $function_name ) {
	}

	/**
	 * Process box shadow CSS styles.
	 *
	 * @since 3.23 Add responsive support. Pass device attributes and make sure no duplicate styles
	 *           are rendered.
	 * @since 4.6.0 Add sticky style support.
	 *
	 * @param string $function_name Module slug.
	 */
	public function process_box_shadow( $function_name ) {
	}

	/**
	 * Make Advanced Fields and Custom CSS Fields filterable.
	 */
	public function make_options_filterable() {
	}

	/**
	 * Disables wptexturize on the passed shortcode..
	 *
	 * @param array $shortcodes An array of shortcode names.
	 *
	 * @return array
	 */
	public function disable_wptexturize( $shortcodes ) {
	}

	/**
	 * Callback :: fix_wptexturized_scripts.
	 *
	 * @param array $matches Found matches.
	 *
	 * @return string|string[]
	 */
	public function fix_wptexturized_script( $matches ) {
	}

	/**
	 * Fix wptexturize ampersand bug.
	 *
	 * @param string $content Content.
	 *
	 * @return string|string[]|null
	 */
	public function fix_wptexturized_scripts( $content ) {
	}

	/**
	 * Callback :: Sort fields within tabs by priority.
	 *
	 * @param string $a Comparision field member.
	 * @param string $b Comparision field string.
	 *
	 * @return int|lt
	 */
	public static function compare_by_priority( $a, $b ) {
	}

	/**
	 * Reorder toggles based on the priority with respect to manually ordered items with no priority
	 *
	 * @param array $toggles_array Toggles to reorder.
	 *
	 * @return array
	 */
	public static function et_pb_order_toggles_by_priority( $toggles_array ) {
	}

	/**
	 * Callback :: Sort modules alphabetically by name.
	 *
	 * @param string $a Comparision member string.
	 * @param string $b Comparision member string.
	 *
	 * @return int|lt
	 */
	public static function compare_by_name( $a, $b ) {
	}

	/**
	 * Get total modules count.
	 *
	 * @param string $post_type Post type.
	 *
	 * @return int
	 */
	public static function get_modules_count( $post_type ) {
	}

	/**
	 * Get modules js array to use in backbone template.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @return string
	 */
	public static function get_modules_js_array( $post_type ) {
	}

	/**
	 * Get all modules array.
	 *
	 * @param string $post_type     Post type.
	 * @param bool   $include_child Whether to include childs.
	 *
	 * @return array
	 */
	public static function get_modules_array( $post_type = '', $include_child = false ) {
	}

	/**
	 * Get modules that does not support VB.
	 *
	 * @return array
	 */
	public static function get_fb_unsupported_modules() {
	}

	/**
	 * Get list of modules that has rich content option
	 *
	 * @since 3.18
	 *
	 * @return array
	 */
	public static function get_has_content_modules() {
	}

	/**
	 * Returns a regex pattern that includes all parent module slugs.
	 *
	 * @since 3.1 Renamed from `get_parent_shortcodes()` to `get_parent_slugs_regex()`
	 * @since 1.0
	 *
	 * @param string $post_type Post type.
	 *
	 * @return string
	 */
	public static function get_parent_slugs_regex( $post_type = 'page' ) {
	}

	/**
	 * Returns a regex pattern that includes all child module slugs.
	 *
	 * @since 3.1 Renamed from `get_child_shortcodes()` to `get_child_slugs_regex()`
	 * @since 1.0
	 *
	 * @param string $post_type Post type.
	 *
	 * @return string
	 */
	public static function get_child_slugs_regex( $post_type = 'page' ) {
	}

	/**
	 * Get child module slugs.
	 *
	 * @param string $post_type Post type.
	 *
	 * @return array
	 */
	public static function get_child_slugs( $post_type ) {
	}

	/**
	 * Get row content module slugs. e.x et_pb_code
	 *
	 * @param string $post_type Post type.
	 *
	 * @return string
	 */
	public static function get_raw_content_slugs( $post_type ) {
	}

	/**
	 * Get the portion of templates for specified slugs.
	 *
	 * @param string $post_type   Post type.
	 * @param array  $slugs_array Module slugs.
	 *
	 * @return array|string|void
	 */
	public static function get_modules_templates( $post_type, $slugs_array ) {
	}

	/**
	 * Output modules backbone templates.
	 *
	 * @param string $post_type  Post type.
	 * @param int    $start_from Unused arg.
	 * @param int    $amount     Unused arg.
	 *
	 * @return array
	 */
	public static function output_templates( $post_type = '', $start_from = 0, $amount = 999 ) {
	}

	/**
	 * Get structure module slugs.
	 *
	 * @return array
	 */
	public static function get_structure_module_slugs() {
	}

	/**
	 * Get structure modules.
	 *
	 * @return array
	 */
	public static function get_structure_modules() {
	}

	/**
	 * Get a filtered list of modules.
	 *
	 * @since 3.10
	 *
	 * @param string $post_type Leave empty for any.
	 * @param string $type      'parent' or 'child'. Leave empty for any.
	 *
	 * @return ET_Builder_Element[]
	 */
	public static function get_modules( $post_type = '', $type = '' ) {
	}

	/**
	 * Get modules by fallback post type for disabled post type.
	 *
	 * @param string $type Module type.
	 *
	 * @return ET_Builder_Element[]|mixed
	 */
	public static function get_custom_post_type_fallback_modules( $type = 'parent' ) {
	}

	/**
	 * Get all parent modules.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @return mixed|void
	 */
	public static function get_parent_modules( $post_type = '' ) {
	}

	/**
	 * Get all child modules.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @return mixed|void
	 */
	public static function get_child_modules( $post_type = '' ) {
	}

	/**
	 * Get woocommerce modules.
	 *
	 * @return mixed|void
	 */
	public static function get_woocommerce_modules() {
	}

	/**
	 * Get registered module icons
	 *
	 * @since 3.1
	 *
	 * @return array
	 */
	public static function get_module_icons() {
	}

	/**
	 * Get combined array of child and parent modules for provided post_type
	 *
	 * @param string $post_type Post type.
	 *
	 * @since 3.1
	 *
	 * @return array
	 */
	public static function get_parent_and_child_modules( $post_type = '' ) {
	}

	/**
	 * Get a module instance for provided post type by its slug.
	 *
	 * @since 3.10
	 *
	 * @param string $slug      Module slug.
	 * @param string $post_type Current post type.
	 *
	 * @return ET_Builder_Element|null
	 */
	public static function get_module( $slug, $post_type = 'post' ) {
	}

	/**
	 * Outputs list of all module help videos array
	 *
	 * @since 3.1
	 *
	 * @return array
	 */
	public static function get_help_videos() {
	}

	/**
	 * Get list of modules with support of featured image as background.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @return mixed|void
	 */
	public static function get_featured_image_background_modules( $post_type = '' ) {
	}

	/**
	 * Get field group toggles.
	 *
	 * @param string $post_type Post type.
	 *
	 * @return array
	 */
	public static function get_toggles( $post_type ) {
	}

	/**
	 * Get setting modal tabs.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @return array
	 */
	public static function get_tabs( $post_type = '' ) {
	}

	/**
	 * Get permission options categories.
	 *
	 * @return array
	 */
	public static function get_options_categories() {
	}

	/**
	 * Get custom permission option categories.
	 *
	 * @param string $post_type Post type.
	 *
	 * @return array
	 */
	public static function get_custom_options_categories( $post_type = '' ) {
	}

	/**
	 * Get all fields.
	 *
	 * @param string $post_type Post type.
	 *
	 * @return array
	 */
	public static function get_all_fields( $post_type = '' ) {
	}

	/**
	 * Get general fields of modules.
	 *
	 * @param string $post_type   Post type.
	 * @param string $mode        Modules Mode - Parent, Child and All.
	 * @param string $module_type Module Slug.
	 *
	 * @return array|mixed
	 */
	public static function get_general_fields( $post_type = '', $mode = 'all', $module_type = 'all' ) {
	}

	/**
	 * Get setting fields from custom tabs.
	 *
	 * @param string $post_type   Post type.
	 * @param string $mode        Modules Mode - Parent, Child and All.
	 * @param string $module_type Module Slug.
	 *
	 * @return array|mixed
	 */
	public static function get_settings_modal_tabs_fields( $post_type = '', $mode = 'all', $module_type = 'all' ) {
	}

	/**
	 * Get child module titles.
	 *
	 * @param string $post_type Post type.
	 *
	 * @return array
	 */
	public static function get_child_module_titles( $post_type ) {
	}

	/**
	 * Get advanced fields.
	 *
	 * @param string $post_type   Post type.
	 * @param string $mode        Whether modules are parent, child or all.
	 * @param string $module_type Module slug.
	 *
	 * @return array|mixed
	 */
	public static function get_advanced_fields( $post_type = '', $mode = 'all', $module_type = 'all' ) {
	}

	/**
	 * Get custom css fields.
	 *
	 * @param string $post_type   Post type.
	 * @param string $mode        Whether modules are parent, child or all.
	 * @param string $module_type Module slug.
	 *
	 * @return array|mixed
	 */
	public static function get_custom_css_fields( $post_type = '', $mode = 'all', $module_type = 'all' ) {
	}

	/**
	 * Get modules i10n.
	 *
	 * @param string $post_type   Post type.
	 * @param string $mode        Whether it is parent, child or all module.
	 * @param string $module_type Module slug.
	 *
	 * @return array|mixed
	 */
	public static function get_modules_i10n( $post_type = '', $mode = 'all', $module_type = 'all' ) {
	}

	/**
	 * Get CSS fields transition for module.
	 *
	 * @param string $post_type   Post type.
	 * @param string $mode        Whether it is parent, child or all module.
	 * @param string $module_type Module slug.
	 *
	 * @return array
	 */
	public static function get_modules_transitions( $post_type = '', $mode = 'all', $module_type = 'all' ) {
	}

	/**
	 * Get module items configs.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @return array
	 */
	public static function get_module_items_configs( $post_type ) {
	}

	/**
	 * Get combined array of parent and child modules fields.
	 *
	 * @param string $post_type Post type.
	 * @param string $module    Parent module slug.
	 *
	 * @return array|bool
	 */
	public static function get_module_fields( $post_type, $module ) {
	}

	/**
	 * Get all fields of parent module.
	 *
	 * @param string $post_type Post type.
	 * @param string $module    Module slug.
	 *
	 * @return bool
	 */
	public static function get_parent_module_fields( $post_type, $module ) {
	}

	/**
	 * Get all child module fields.
	 *
	 * @param string $post_type Post type.
	 * @param string $module    Module slug.
	 *
	 * @return bool
	 */
	public static function get_child_module_fields( $post_type, $module ) {
	}

	/**
	 * Get parent module field.
	 *
	 * @param string $post_type Post type.
	 * @param string $module    Module slug.
	 * @param string $field     Field slug.
	 *
	 * @return bool|mixed
	 */
	public static function get_parent_module_field( $post_type, $module, $field ) {
	}

	/**
	 * Return font icon fields of all modules.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @return array
	 */
	public static function get_font_icon_fields( $post_type = '' ) {
	}

	/**
	 * Retrieves credits of custom modules for VB
	 *
	 * @param string $post_type Current post type.
	 *
	 * @return array of credits info by module slug
	 */
	public static function get_custom_modules_credits( $post_type = '' ) {
	}

	/**
	 * Return media query key value pairs.
	 *
	 * @param bool $for_js Whether media queries is for js ETBuilderBackend.et_builder_css_media_queries variable.
	 *
	 * @return array|mixed|void
	 */
	public static function get_media_quries( $for_js = false ) {
	}

	/**
	 * Set media queries key value pairs.
	 */
	public static function set_media_queries() {
	}

	/**
	 * Return media query from the media query name.
	 * E.g For max_width_767 media query name, this function return "@media only screen and ( max-width: 767px )".
	 *
	 * @param string $name Media query name e.g max_width_767, max_width_980.
	 *
	 * @return bool|mixed
	 */
	public static function get_media_query( $name ) {
	}

	/**
	 * Get style key.
	 *
	 * @return int|string
	 */
	public static function get_style_key() {
	}

	/**
	 * Return style array from {@see self::$internal_modules_styles} or {@see self::$styles}.
	 *
	 * @param bool $internal Whether to return style from internal modules styles.
	 * @param int  $key      Style key.
	 *
	 * @return array|mixed
	 */
	public static function get_style_array( $internal = false, $key = 0 ) {
	}

	/**
	 * Return style string from {@see self::$_free_form_styles}.
	 *
	 * @return string
	 */
	public static function get_free_form_styles() {
	}

	/**
	 * Intended to be used for unit testing
	 *
	 * @intendedForTesting
	 */
	public static function reset_styles() {
	}

	/**
	 * Get styles of the current page.
	 *
	 * @see set_advanced_styles()
	 *
	 * @param bool $internal Whether or not module's internal style.
	 * @param int  $key      Style key.
	 *
	 * @return string
	 */
	public static function get_style( $internal = false, $key = 0, $critical = false ) {
	}

	/**
	 * Generate video background markup for columns.
	 *
	 * @param array $args             Background values.
	 * @param array $conditional_tags Conditional tags.
	 * @param array $current_page     Current page info.
	 *
	 * @return bool|mixed
	 */
	public static function get_column_video_background( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}

	/**
	 * Generate video background markup.
	 *
	 * @since 3.23 Add support for responsive settings.
	 *
	 * @param  array $args             Background values.
	 * @param  array $conditional_tags Conditional tags.
	 * @param  array $current_page     Current page info.
	 * @return mixed                    Mixed background content generated as video markup.
	 */
	public static function get_video_background( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}

	/**
	 * Clean the styles array {@see self::$internal_modules_styles}.
	 *
	 * @param bool $need_internal_styles Set the flag to make sure new styles will be saved to the correct place.
	 */
	public static function clean_internal_modules_styles( $need_internal_styles = true ) {
	}

	/**
	 * Set the field dependencies based on the `show_if` or `show_if_not` key from the
	 * field.
	 *
	 * @param string $slug       The module's slug. ie `et_pb_section`.
	 * @param string $field_id   The field id. id `background_color`.
	 * @param array  $field_info Associative array of the field's data.
	 */
	protected static function set_field_dependencies( $slug, $field_id, $field_info ) {
	}

	/**
	 * Get all modules fields dependencies.
	 *
	 * @param string $post_type Post type.
	 *
	 * @return array
	 */
	public static function get_field_dependencies( $post_type ) {
	}

	/**
	 * Set module style.
	 *
	 * @param string $function_name Module slug.
	 * @param array  $style         Style array.
	 */
	public static function set_style( $function_name, $style ) {
	}

	/**
	 * Check if the style processor allowed to be executed.
	 * Currently, we only use a custom processor from the method inside `ET_Builder_Module_Helper_Style_Processor`,
	 *
	 * NOTE: If there are more processors introduced, this needs to be updated
	 *
	 * @since 4.6.0
	 *
	 * @param array $processor Style processor.
	 *
	 * @return bool
	 */
	protected static function _is_style_processor_allowed( $processor ) {
	}

	/**
	 * Generate responsive + hover + sticky style using the same configuration at once
	 * {
	 *
	 * @type string       $mode
	 * @type string       $render_slug
	 * @type string       $base_attr_name
	 * @type array        $attrs
	 * @type string       $css_property
	 * @type string       $selector
	 * @type bool         $is_sticky_module
	 * @type bool|array   $important Allowed value ​​is boolean or array of mode, e.g ['sticky', 'hover'].
	 * @type string       $additional_css
	 * @type int          $priority
	 * @type bool         $responsive
	 * @type bool         $hover
	 * @type string       $hover_selector
	 * @type string       $hover_pseudo_selector_location
	 * @type bool         $sticky
	 * @type string       $sticky_pseudo_selector_location
	 * @type string       $utility_arg
	 * }
	 *
	 * NOTE: If there are more mode besides sticky and hover introduced, this needs to be updated.
	 *
	 * @since 4.6.0
	 *
	 * @param array $args Function arguments.
	 *
	 * @return void
	 */
	public function generate_styles( $args = array() ) {
	}

	/**
	 * Generate CSS declaration.
	 *
	 * @since 4.6.0
	 *
	 * @param array|string $css_property   CSS Property.
	 * @param string       $value          Value.
	 * @param bool         $important      Use important tag.
	 * @param string       $additional_css Additional CSS.
	 *
	 * @return string
	 */
	public function generate_declaration( $css_property, $value = '', $important = false, $additional_css = '' ) {
	}

	/**
	 * Applies the responsive and hover style for a specified option
	 *
	 * @since 3.25.3
	 *
	 * @param string $option   Setting option.
	 * @param string $selector CSS Selector.
	 * @param string $css_prop CSS property.
	 */
	public function generate_responsive_hover_style( $option, $selector, $css_prop ) {
	}

	/**
	 * Set module style.
	 *
	 * @param string $function_name Module slug.
	 * @param array  $style         Style array.
	 */
	protected static function _set_style( $function_name, $style ) {
	}

	/**
	 * Set free form module style.
	 *
	 * @param string $style Style string.
	 */
	protected static function _set_free_form_style( $style, $reset = false ) {
	}

	/**
	 * Return module order class.
	 *
	 * @param string $function_name Module slug.
	 *
	 * @return bool|string
	 */
	public static function get_module_order_class( $function_name ) {
	}

	/**
	 * Set module order class.
	 *
	 * @param string $function_name Module slug.
	 */
	public static function set_order_class( $function_name ) {
	}

	/**
	 * Add a modal order class e.g et_pb_section_0, et_pb_section_1.
	 *
	 * @param string $module_class  Module class e.g  et_pb_section_.
	 * @param string $function_name Module slug.
	 *
	 * @return string
	 */
	public static function add_module_order_class( $module_class, $function_name ) {
	}

	/**
	 * Generate video background markup.
	 *
	 * @since 3.23 Add support for responsive settings.
	 *
	 * @param  array  $args      Background values.
	 * @param  string $base_name Background base name.
	 * @return string            Video background string value.
	 */
	public function video_background( $args = array(), $base_name = 'background' ) {
	}

	/**
	 * Generate parallax image background markup.
	 *
	 * @param string $base_name Background base name.
	 * @param array  $props     Props (optional).
	 *
	 * @since 4.15.0 Added $props property.
	 *
	 * @return string
	 */
	public function get_parallax_image_background( $base_name = 'background', $props = array() ) {
	}

	/**
	 * Check if filters are used in a module.
	 *
	 * @since  4.10.0
	 * @return bool Use of filter.
	 */
	public function are_filters_used() {
	}

	/**
	 * Generate CSS Filters
	 * Check our shortcode arguments for CSS `filter` properties. If found, set the style rules for this block. (This
	 * function reads options set by the 'Filters' and 'Image Filters' builder menu fields.)
	 *
	 * @since 3.23 Add responsive setting styling processing here.
	 * @since 4.6.0 Add sticky style support.
	 *
	 * @param string $function_name Builder module's function name (keeps the CSS rules straight).
	 * @param string $prefix        Optional string prepended to the field name (i.e., `filter_saturate` -> `child_filter_saturate`).
	 * @param mixed  $selectors     Array or string containing all target DOM element(s), ID(s), and/or class(es).
	 *
	 * @return string Any additional CSS classes (added if filters were applied).
	 */
	public function generate_css_filters( $function_name = '', $prefix = '', $selectors = array( '%%order_class%%' ) ) {
	}

	/**
	 * Convert classes array to a string. Also removes any duplicate classes
	 *
	 * @param array $classes A list of CSS classnames.
	 *
	 * @return array
	 */
	public function stringify_css_filter_classes( $classes ) {
	}

	/**
	 * Adds a suffix at the end of the selector
	 * E.g: add_suffix_to_selectors(':hover', '%%order_class%%% .image') >>> '%%order_class%%% .image:hover'
	 *
	 * @param string $suffix   e.g ':hover'.
	 * @param string $selector CSS selector.
	 *
	 * @return string
	 */
	public function add_suffix_to_selectors( $suffix, $selector ) {
	}

	/**
	 * Adds `:hover` in selector at the end of the selector
	 * E.g: add_hover_to_selectors('%%order_class%%% .image') >>> '%%order_class%%% .image:hover'
	 *
	 * @param string $selector CSS selector.
	 *
	 * @return string
	 *
	 * @deprecated Use et_pb_hover_options()->add_hover_to_selectors( $selector );
	 */
	public function add_hover_to_selectors( $selector ) {
	}

	/**
	 * Adds `:hover` in selector at the end of the selector if $add_hover is true
	 * otherwise returns the original selector
	 *
	 * @param string $selector  CSS selector.
	 * @param bool   $add_hover Whether to add hover on selector.
	 *
	 * @return string
	 */
	protected function _maybe_add_hover_to_selectors( $selector, $add_hover = false ) {
	}

	/**
	 * Adds `:hover` in selector after `%%order_class%%`
	 * E.g: add_hover_to_order_class('%%order_class%%% .image') >>> '%%order_class%%%:hover .image'
	 *
	 * @param string $selector CSS selector.
	 *
	 * @return string
	 *
	 * @deprecated Use et_pb_hover_options()->add_hover_to_order_class( $selector );
	 */
	public function add_hover_to_order_class( $selector ) {
	}

	/**
	 * Adds `:hover` to order class only if is specified, in other cse returns original selector
	 * otherwise returns the original selector
	 *
	 * @param string $selector  CSS selector.
	 * @param bool   $add_hover Whether to add hover on selector.
	 *
	 * @return string
	 */
	protected function _maybe_add_hover_to_order_class( $selector, $add_hover = false ) {
	}

	/**
	 * Convert smart quotes and &amp; entity to their applicable characters
	 *
	 * @param string $text Input text.
	 *
	 * @return string
	 */
	public static function convert_smart_quotes_and_amp( $text ) {
	}

	/**
	 * Process multiple checkbox field value.
	 *
	 * @param array  $value_map Checkbox value map.
	 * @param string $value     Checkbox value.
	 *
	 * @return string
	 */
	public function process_multiple_checkboxes_field_value( $value_map, $value ) {
	}

	/**
	 * Adds one or more CSS classes to the module on the frontend.
	 *
	 * @since 3.1
	 *
	 * @param string|array $to_add   classname(s) to be added.
	 * @param number|bool  $position position of added classname (0-based). Some class need to be placed
	 *                               at exact position. i.e. .et_pb_column_{$type} on column inner.
	 */
	public function add_classname( $to_add, $position = false ) {
	}

	/**
	 * Removes one ore more CSS classes to the module on the frontend
	 *
	 * @since 3.1
	 *
	 * @param string|array $to_remove classname(s) to be removed.
	 */
	public function remove_classname( $to_remove ) {
	}

	/**
	 * Outputs module class
	 *
	 * @param string $function_name Module slug.
	 *
	 * @since 3.1
	 *
	 * @return string escaped class
	 */
	public function module_classname( $function_name = '' ) {
	}

	/**
	 * Outputs module id
	 *
	 * @since 3.1
	 *
	 * @param bool $include_attribute wrap module id with id attribute name or not (to be used directly on module div).
	 *
	 * @return string module id / module id wrapped by id attribute
	 */
	public function module_id( $include_attribute = true ) {
	}

	/**
	 * Helper method for rendering button markup which works compatible with advanced options' button
	 *
	 * @since 3.1
	 *
	 * @param array $args button settings.
	 *
	 * @return string rendered button HTML
	 */
	public function render_button( $args = array() ) {
	}

	/**
	 * Determine builder module is saving cache.
	 *
	 * @return mixed|void
	 */
	public static function is_saving_cache() {
	}

	/**
	 * Get array of attributes which have dynamic content enabled.
	 *
	 * @since 3.17.2
	 *
	 * @param mixed[] $attrs Module attributes.
	 *
	 * @return string[]
	 */
	protected function _get_enabled_dynamic_attributes( $attrs ) {
	}

	/**
	 * Check if an attribute value is dynamic or not.
	 *
	 * @since 3.17.2
	 *
	 * @param string $attribute                  Attribute name.
	 * @param string $value                      Attribute value.
	 * @param array  $enabled_dynamic_attributes Attributes which have dynamic content enabled.
	 *
	 * @return bool
	 */
	protected function _is_dynamic_value( $attribute, $value, $enabled_dynamic_attributes ) {
	}

	/**
	 * Re-encode legacy dynamic content values in an attrs array.
	 *
	 * @since 3.20.2
	 *
	 * @param string[] $attrs                      Module attributes.
	 * @param string[] $enabled_dynamic_attributes Attributes which have dynamic content enabled.
	 *
	 * @return string[]
	 */
	protected function _encode_legacy_dynamic_content( $attrs, $enabled_dynamic_attributes ) {
	}

	/**
	 * Re-encode legacy dynamic content value.
	 *
	 * @since 3.20.2
	 *
	 * @param string $field                      Attribute name.
	 * @param string $value                      Attribute value.
	 * @param array  $enabled_dynamic_attributes Attributes which have dynamic content enabled.
	 *
	 * @return string
	 */
	protected function _encode_legacy_dynamic_content_value( $field, $value, $enabled_dynamic_attributes ) {
	}

	/**
	 * Resolve a value, be it static or dynamic to a static one.
	 *
	 * @since 3.17.2
	 *
	 * @param integer  $post_id                    Current post id.
	 * @param string   $field                      Content key.
	 * @param string   $value                      Content value.
	 * @param string[] $enabled_dynamic_attributes Attributes which have dynamic content enabled.
	 * @param boolean  $serialize                  Whether value is serializable.
	 *
	 * @return string
	 */
	protected function _resolve_value( $post_id, $field, $value, $enabled_dynamic_attributes, $serialize ) {
	}

	/**
	 * Resolve a value from the legacy JSON format of dynamic content.
	 * This is essentially a migration but is implemented separately
	 * as it needs to parse every field of every module and do it
	 * before actual migrations are ran.
	 *
	 * @since 3.20.2
	 *
	 * @param string   $field                      Field content.
	 * @param string   $value                      Json value.
	 * @param string[] $enabled_dynamic_attributes Attributes which have dynamic content enabled.
	 *
	 * @return string
	 */
	protected function _resolve_value_from_json( $field, $value, $enabled_dynamic_attributes ) {
	}

	/**
	 * Escape an attribute's value.
	 *
	 * @since 3.17.2
	 *
	 * @param string $attribute        Attribute name.
	 * @param string $html             'limited', 'full', 'none'.
	 * @param string $predefined_value Predifined value need to escape.
	 *
	 * @return string
	 */
	protected function _esc_attr( $attribute, $html = 'none', $predefined_value = null ) {
	}

	/**
	 * Get the current TB layout ID if we are rendering one or the current post ID instead.
	 *
	 * @since 4.0
	 * @since 4.14.8 Get WP Template ID if we are rendering Divi Builder block in template.
	 *
	 * @return integer
	 */
	public static function get_layout_id() {
	}

	/**
	 * Get the current theme builder layout.
	 * Returns 'default' if no layout has been started.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	public static function get_theme_builder_layout_type() {
	}

	/**
	 * Check if a module is rendered as normal post content or theme builder layout.
	 *
	 * @since 4.0
	 *
	 * @return bool
	 */
	public static function is_theme_builder_layout() {
	}

	/**
	 * Get the current theme builder layout id.
	 * Returns 0 if no layout has been started.
	 *
	 * @since 4.0
	 *
	 * @return integer
	 */
	public static function get_theme_builder_layout_id() {
	}

	/**
	 * Begin a theme builder layout.
	 *
	 * @since 4.0
	 *
	 * @param integer $layout_id Layout post id.
	 *
	 * @return void
	 */
	public static function begin_theme_builder_layout( $layout_id ) {
	}

	/**
	 * End the current theme builder layout.
	 *
	 * @since 4.0
	 *
	 * @return void
	 */
	public static function end_theme_builder_layout() {
	}

	/**
	 * Get the order class suffix for the current theme builder layout, if any.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected static function _get_theme_builder_order_class_suffix() {
	}

	/**
	 * Begin Divi Builder block output on WP Editor template.
	 *
	 * As identifier od Divi Builder block render template location and the template ID.
	 * Introduced to handle Divi Layout block render on WP Template outside Post Content.
	 * WP Editor templates:
	 * - wp_template
	 * - wp_template_part
	 *
	 * @since 4.14.8
	 *
	 * @param array $template_id Template post ID.
	 *
	 * @return void
	 */
	public static function begin_wp_editor_template( $template_id ) {
	}

	/**
	 * End Divi Builder block output on WP Editor template.
	 *
	 * @since 4.14.8
	 *
	 * @return void
	 */
	public static function end_wp_editor_template() {
	}

	/**
	 * Whether a module is rendered in WP Editor template or not.
	 *
	 * @since 4.14.8
	 *
	 * @return bool WP Editor template status.
	 */
	public static function is_wp_editor_template() {
	}

	/**
	 * Get the current WP Editor template id.
	 *
	 * Returns 0 if no template has been started.
	 *
	 * @since 4.14.8
	 *
	 * @return integer Template post ID (wp_id).
	 */
	public static function get_wp_editor_template_id() {
	}

	/**
	 * Get the current WP Editor template type.
	 *
	 * Returns 'default' if no template has been started.
	 *
	 * @since 4.14.8
	 *
	 * @param boolean $is_id_needed Whether template ID is needed or not.
	 *
	 * @return string Template type.
	 */
	public static function get_wp_editor_template_type( $is_id_needed = false ) {
	}

	/**
	 * Get the order class suffix for the current WP Editor template, if any.
	 *
	 * @since 4.14.8
	 *
	 * @return string Order class suffix.
	 */
	protected static function _get_wp_editor_order_class_suffix() {
	}

	/**
	 * Convert field name into css property name.
	 *
	 * @param string $field Field name.
	 *
	 * @return string|string[]
	 */
	protected function field_to_css_prop( $field ) {
	}

	/**
	 * Initialize Modules Cache.
	 *
	 * @since 3.24
	 */
	public static function init_cache() {
	}

	/**
	 * Get Modules cache file name.
	 *
	 * @param mixed $post_type When set to `false`, autodetect.
	 *
	 * @since 3.24
	 *
	 * @return bool|mixed|string
	 */
	public static function get_cache_filename( $post_type = false ) {
	}

	/**
	 * Get Module cache file name's id.
	 *
	 * @since 3.28
	 *
	 * @param mixed $post_type When set to `false`, autodetect.
	 *
	 * @return bool|string
	 */
	public static function get_cache_filename_id( $post_type = false ) {
	}

	/**
	 * Save the builder module caache.
	 */
	public static function save_cache() {
	}

	/**
	 * Render image element HTML
	 *
	 * @since 3.27.1
	 *
	 * @param string $image_props        Image data props key or actual image URL.
	 * @param array  $image_attrs_raw    List of extra image attributes.
	 * @param bool   $echo               Whether to print the image output or return it.
	 * @param bool   $disable_responsive Whether to enable the responsive image or not.
	 *
	 * @return string              The images's HTML output. Empty string on failure.
	 */
	protected function render_image( $image_props, $image_attrs_raw = array(), $echo = true, $disable_responsive = false ) {
	}

	/**
	 * Get advanced field settings exposed for layout block preview
	 *
	 * @since 4.3.2
	 *
	 * @return array
	 */
	public static function get_layout_block_assistive_settings() {
	}

	/**
	 * Get whether the provided element content contains at least one of the
	 * specified modules based on their slugs.
	 *
	 * @since 4.3.3
	 *
	 * @param string   $content      Element content.
	 * @param string[] $module_slugs Module slug to search.
	 *
	 * @return bool
	 */
	protected static function contains( $content, $module_slugs ) {
	}

	/**
	 * Public access provider for self::contains().
	 *
	 * @since 4.17.4
	 *
	 * @param string   $content      Element content.
	 * @param string[] $module_slugs Module slug to search.
	 *
	 * @return bool
	 */
	public static function module_contains( $content, $module_slugs ) {
	}

	/**
	 * Generate background field setting properties by template
	 *
	 * NOTE: Unless the `priority` property is used, the order that settings are listed is the order
	 * that they'll appear in the settings modal.
	 *
	 * @param string $field_template Field template slug.
	 * @param array  $overrides      Field properties to override.
	 * @param array  $unsets         Field properties to unset.
	 *
	 * @return array
	 *
	 * @since 4.8.0
	 */
	public static function background_field_template( $field_template, $overrides = array(), $unsets = array() ) {
	}

	/**
	 * Generate markup for background pattern.
	 *
	 * @since 4.15.0
	 *
	 * @param array  $args      Props.
	 * @param string $base_name Background base name.
	 *
	 * @return string Background pattern markup.
	 */
	public function background_pattern( $args = array(), $base_name = 'background' ) {
	}

	/**
	 * Get components before & after module.
	 *
	 * This method is introduced to handle additional components added on WooCommerce
	 * product summary that should be moved to any suitable modules on builder preview.
	 *
	 * @since 4.14.5
	 *
	 * @param string $module_slug Module slug.
	 * @param array  $module_data Module data passed.
	 *
	 * @return array Components before & after module.
	 */
	public static function get_component_before_after_module( $module_slug, $module_data ) {
	}

	/**
	 * ================================================================================================================
	 * -------------------------->>> Class-level (static) deprecations begin here! <<<---------------------------------
	 * ================================================================================================================
	 */

    // phpcs:disable -- Deprecated functions.
    /**
     * @deprecated See {@see self::get_parent_slugs_regex()}
     */
    public static function get_parent_shortcodes($post_type) {}

    /**
     * @deprecated See {@see self::get_child_slugs_regex()}
     */
    public static function get_child_shortcodes($post_type) {}

    /**
     * Deprecated.
     *
     * @deprecated
     *
     * @param string $post_type
     * @param string $mode
     *
     * @return  array
     */
    public static function get_defaults($post_type = '', $mode = 'all') {}

    /**
     * Deprecated.
     *
     * @deprecated
     *
     * @param string $post_type
     * @param string $mode
     *
     * @return array
     */
    public static function get_fields_defaults($post_type = '', $mode = 'all') {}

    /**
     * @deprecated
     */
    public static function get_slugs_with_children($post_type) {}
    // phpcs:enable

	/**
	 * ================================================================================================================
	 * ------------------------------->>> Non-static deprecations begin here! <<<--------------------------------------
	 * ================================================================================================================
	 */

	/**
	 * Determine if current request is VB Data Request by checking $_POST['action'] value
	 *
	 * @deprecated {@see et_builder_is_loading_vb_data()}
	 *
	 * @since 4.0.7 Deprecated.
	 *
	 * @return bool
	 */
	protected function is_loading_vb_data() {
	}

	/**
	 * Determine if current request is BB Data Request by checking $_POST['action'] value
	 *
	 * @deprecated {@see et_builder_is_loading_bb_data()}
	 *
	 * @since 4.0.7 Deprecated.
	 *
	 * @return bool
	 */
	protected function is_loading_bb_data() {
	}
}
/**
 * Base class for module.
 *
 * Class ET_Builder_Module
 */
class ET_Builder_Module extends \ET_Builder_Element {




	/**
	 * Whether element is structure element.
	 *
	 * @var bool
	 */
	public $is_structure_element = false;

	/**
	 * Name of the folder under which the module should fall into..
	 *
	 * @var string
	 */
	public $folder_name;
}
class ET_Builder_Module_Accordion extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	function before_render() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	public function add_new_child_text() {
	}
}
class ET_Builder_Module_Accordion_Item extends \ET_Builder_Module {




	/**
	 * Should render module in Visual Builder.
	 *
	 * @var bool
	 */
	public $no_render;
	function init() {
	}
	function get_fields() {
	}
}
class ET_Builder_Module_Audio extends \ET_Builder_Module {




	function init() {
	}
	public function get_transition_fields_css_props() {
	}
	function get_fields() {
	}
	static function get_audio( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Bar_Counters extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	function before_render() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
abstract class ET_Builder_Module_Type_PostBased extends \ET_Builder_Module {




	public $is_post_based = \true;
	/**
	 * Loads and returns the contents of the "No Results" template.
	 *
	 * @since 3.0.77
	 *
	 * @param string $heading_tag
	 *
	 * @return string
	 */
	public static function get_no_results_template( $heading_tag = 'h1' ) {
	}
	/**
	 * Filters out invalid term ids from an array.
	 *
	 * @since 3.0.106
	 *
	 * @param integer[] $term_ids
	 * @param string    $taxonomy
	 *
	 * @return integer[]
	 */
	public static function filter_invalid_term_ids( $term_ids, $taxonomy ) {
	}
	/**
	 * Convert an array or comma-separated list of term ids and special keywords to an array of term ids.
	 *
	 * @since 3.17.2
	 *
	 * @param string|array $terms    Comma-separated list of term ids and special keywords.
	 * @param integer      $post_id  Optional post id to resolve "current" categories.
	 * @param string       $taxonomy
	 *
	 * @return integer[]
	 */
	protected static function filter_meta_categories( $categories, $post_id = 0, $taxonomy = 'category' ) {
	}
	/**
	 * Handle common filtering of included categories, including handling meta categories.
	 *
	 * @since 4.0
	 *
	 * @param string|array $include_categories Comma-separated list of term ids and special keywords.
	 * @param integer      $post_id
	 * @param string       $taxonomy
	 *
	 * @return array
	 */
	protected static function filter_include_categories( $include_categories, $post_id = 0, $taxonomy = 'category' ) {
	}
	public static function is_processing_computed_prop() {
	}
}
class ET_Builder_Module_Blog extends \ET_Builder_Module_Type_PostBased {




	/**
	 * Track if the module is currently rendering to prevent unnecessary rendering and recursion.
	 *
	 * @var bool
	 */
	protected static $rendering = \false;
	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Get blog posts for blog module
	 *
	 * @param  array   arguments that is being used by et_pb_blog
	 * @return string blog post markup
	 */
	static function get_blog_posts( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Render pagination element
	 *
	 * @since 3.27.1
	 *
	 * @param bool $echo Wether to print the output or return it.
	 *
	 * @return (void|string)
	 */
	function render_pagination( $echo = \true ) {
	}
	/**
	 * Filter the pagination url to add a flag so it can be filtered to avoid pagination clashes with the main query.
	 *
	 * @since 4.0
	 *
	 * @param string  $result
	 * @param integer $pagenum
	 *
	 * @return string
	 */
	public static function filter_pagination_url( $result ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	public function process_box_shadow( $function_name ) {
	}
	/**
	 * Since the styling file is not updated until the author updates the page/post,
	 * we should keep the drop shadow visible.
	 *
	 * @param string $functions_name
	 *
	 * @return string
	 */
	private function drop_shadow_back_compatibility( $functions_name ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Blurb extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Button extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Get button alignment.
	 *
	 * @since 3.23 Add responsive support by adding device parameter.
	 *
	 * @param  string $device Current device name.
	 * @return string         Alignment value, rtl or not.
	 */
	public function get_button_alignment( $device = 'desktop' ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Circle_Counter extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Code extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed $raw_value Props raw value.
	 * @param array $args      {
	 *                         Context
	 *                         data.
	 *
	 * @type string $context      Context param: content, attrs, visibility, classes.
	 * @type string $name         Module options props name.
	 * @type string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args ) {
	}
}
class ET_Builder_Module_Comments extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Get comments markup for comments module
	 *
	 * @since 4.0.9 Add custom form title heading level.
	 *
	 * @param {string} $header_level
	 * @param {string} $form_title_level
	 *
	 * @return string of comment section markup
	 */
	static function get_comments( $header_level, $form_title_level ) {
	}
	/**
	 * Action and filter hooks that are called before comment content rendering. These are
	 * abstracted into method so module which extends comment module can modify these
	 *
	 * @since 3.29
	 */
	function before_comments_content() {
	}
	/**
	 * Comment content rendering. These are abstracted into method so module which extends comment
	 * module can modify these
	 *
	 * @since 3.29
	 * @since 4.0.9 Add form title heading level.
	 */
	function get_comments_content() {
	}
	/**
	 * Action and filter hooks that are called after comment content rendering. These are
	 * abstracted into method so module which extends comment module can modify these
	 */
	function after_comments_content() {
	}
	function et_pb_comments_template() {
	}
	function et_pb_comments_submit_button( $submit_button ) {
	}
	function et_pb_modify_comments_request( $params ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
abstract class ET_Builder_Module_Type_WithSpamProtection extends \ET_Builder_Module {




	/**
	 * Spam protection providers class instance
	 *
	 * @since 4.0.7
	 *
	 * @var ET_Core_API_Spam_Providers
	 */
	protected static $_spam_providers;
	/**
	 * Enabled spam protection providers
	 *
	 * @since 4.0.7
	 *
	 * @var string[]
	 */
	public static $enabled_spam_providers;
	/**
	 * Shortcode attributes array checksum.
	 *
	 * @since 4.4.9
	 *
	 * @var
	 */
	protected $_checksum;
	/**
	 * Get module settings fields for spam protection providers
	 *
	 * @since 4.0.7
	 *
	 * @param $provider_slug
	 *
	 * @return array
	 */
	public static function _get_spam_account_fields( $provider_slug ) {
	}
	/**
	 * Returns the definitions of the options for the select_with_option_groups field used for selecting provider accounts.
	 *
	 * @since 4.0.7
	 *
	 * @return array[] $accounts {
	 *     Spam Accounts Options Fields
	 *
	 * @type string[] {
	 *       Spam Account Option Field
	 *
	 * @type string $account_slug Account display name
	 *     }
	 *     ...
	 * }
	 */
	public static function _get_spam_accounts() {
	}
	/**
	 * Returns the field definitions for all spam provider accounts.
	 *
	 * @since 4.0.7
	 *
	 * @return array
	 */
	public static function _get_spam_provider_fields() {
	}
	/**
	 * Gets spam providers class instance.
	 *
	 * @since 4.0.7
	 *
	 * @return ET_Core_API_Spam_Providers
	 */
	public static function spam_providers() {
	}
	/**
	 * Whether or not the form submitted in the current request is spam.
	 *
	 * @since 4.0.7
	 *
	 * @return bool
	 */
	public function is_spam_submission() {
	}
	public function init() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Contact_Form extends \ET_Builder_Module_Type_WithSpamProtection {




	function init() {
	}
	/**
	 * Get form map containing essential info (form number, field id/type/required) based on
	 * et_pb_contact_field's shortcode layout
	 *
	 * @since 3.26.5
	 *
	 * @param string $content_shortcode
	 * @param int    $contact_form_number
	 * @param array  $hidden_form_fields
	 *
	 * @return mixed[] {
	 *     Form Map
	 *
	 * @type int      $form_number Contact form number.
	 * @type string[] $fields      {
	 *         Form Field
	 *
	 * @type string $field_type    Field type
	 * @type string $field_id      Field id
	 * @type string $required_mark Required field status. Accepts 'on', 'off'.
	 *     }
	 * }
	 */
	function get_form_map( $content_shortcode = '', $contact_form_number = 0, $hidden_form_fields = array() ) {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	function predefined_child_modules() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Contact_Form_Item extends \ET_Builder_Module {




	public $additional_shortcode_slugs = array( 'et_pb_signup_custom_field' );
	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Checks if module has background.
	 *
	 * @since 4.9.3
	 *
	 * @return bool
	 */
	protected function _has_background() {
	}
}
class ET_Builder_Module_Countdown_Timer extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Cta extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	function get_max_width_additional_css() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Divider extends \ET_Builder_Module {




	/**
	 * Array to store divier options.
	 *
	 * @var array
	 */
	public $show_divider_options;
	function init() {
	}
	function get_fields() {
	}
	public function get_height_fields() {
	}
	public function get_max_height_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Filterable_Portfolio extends \ET_Builder_Module_Type_PostBased {




	function init() {
	}
	function get_fields() {
	}
	static function get_portfolio_item( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	static function get_portfolio_terms( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Fullwidth_Code extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed $raw_value Props raw value.
	 * @param array $args      {
	 *                         Context
	 *                         data.
	 *
	 * @type string $context      Context param: content, attrs, visibility, classes.
	 * @type string $name         Module options props name.
	 * @type string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args ) {
	}
}
class ET_Builder_Module_Fullwidth_Header extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Fullwidth_Image extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Fullwidth_Map extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Fullwidth_Menu extends \ET_Builder_Module {




	/**
	 * Menu module slug.
	 *
	 * @var string
	 */
	protected static $menu_slug = 'et_pb_fullwidth_menu';
	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Add the class with page ID to menu item so it can be easily found by ID in Frontend Builder
	 *
	 * @return menu item object
	 */
	static function modify_fullwidth_menu_item( $menu_item ) {
	}
	/**
	 * Get menu markup for menu module
	 *
	 * @return string of menu markup
	 */
	static function get_fullwidth_menu( $args = array() ) {
	}
	/**
	 * Apply logo styles.
	 *
	 * @since 4.0
	 *
	 * @param string $render_slug
	 *
	 * @return void
	 */
	protected function apply_logo_styles( $render_slug ) {
	}
	/**
	 * Determine if icon is enabled.
	 *
	 * @since 4.0
	 *
	 * @param string $icon
	 *
	 * @return boolean
	 */
	protected function is_icon_enabled( $icon ) {
	}
	/**
	 * Apply icon styles.
	 *
	 * @since 4.0
	 *
	 * @param string $render_slug
	 * @param string $icon
	 * @param string $selector
	 *
	 * @return void
	 */
	protected function apply_icon_styles( $render_slug, $icon, $selector ) {
	}
	/**
	 * Render logo.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected function render_logo() {
	}
	/**
	 * Render cart button.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected function render_cart() {
	}
	/**
	 * Render search button.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected function render_search() {
	}
	/**
	 * Render search form.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected function render_search_form() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Fullwidth_Portfolio extends \ET_Builder_Module_Type_PostBased {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Get portfolio objects for portfolio module
	 *
	 * @param  array  arguments that affect et_pb_portfolio query
	 * @param  array  passed conditional tag for update process
	 * @param  array  passed current page params
	 * @return array portfolio item data
	 */
	static function get_portfolio_item( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
abstract class ET_Builder_Module_Type_PostContent extends \ET_Builder_Module {




	public function get_advanced_fields_config() {
	}
	public function get_fields() {
	}
	public function get_settings_modal_toggles() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Fullwidth_PostContent extends \ET_Builder_Module_Type_PostContent {




	public $slug = 'et_pb_fullwidth_post_content';
	public function init() {
	}
}
class ET_Builder_Module_Fullwidth_Post_Slider extends \ET_Builder_Module_Type_PostBased {




	function init() {
	}
	static function get_blog_posts( $args = array(), $conditional_tags = array(), $current_page = array(), $is_ajax_request = \true ) {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	private function inner_shadow_back_compatibility( $functions_name ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Fullwidth_Post_Title extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Fullwidth_Slider extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	function before_render() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	private function inner_shadow_back_compatibility( $functions_name ) {
	}
}
class ET_Builder_Module_Gallery extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Get attachment data for gallery module
	 *
	 * @param array $args             {
	 *                                Gallery
	 *                                Options
	 *
	 * @type  array  $gallery_ids     Attachment Ids of images to be included in gallery.
	 * @type  string $gallery_orderby `orderby` arg for query. Optional.
	 * @type  string $fullwidth       on|off to determine grid / slider layout
	 * @type  string $orientation     Orientation of thumbnails (landscape|portrait).
	 * }
	 * @param array $conditional_tags
	 * @param array $current_page
	 *
	 * @return array Attachments data
	 */
	static function get_gallery( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Wrapper for ET_Builder_Module_Gallery::get_gallery() which is intended to be extended by
	 * module which uses gallery module renderer so relevant argument for other module can be added
	 *
	 * @since 3.29
	 * @see   ET_Builder_Module_Gallery::get_gallery()
	 * @param array $args {
	 *                    Gallery Options
	 *
	 * @type array  $gallery_ids     Attachment Ids of images to be included in gallery.
	 * @type string $gallery_orderby `orderby` arg for query. Optional.
	 * @type string $fullwidth       on|off to determine grid / slider layout
	 * @type string $orientation     Orientation of thumbnails (landscape|portrait).
	 * }
	 *
	 * @return array
	 */
	public function get_attachments( $args = array() ) {
	}
	public function get_pagination_alignment() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Heading Module Definition.
 *
 * @since 4.22.0
 *
 * @package Divi Builder
 */
/**
 * Class ET_Builder_Module_Heading
 */
class ET_Builder_Module_Heading extends \ET_Builder_Module {




	/**
	 * Init the module.
	 *
	 * @inherit
	 *
	 * @return void
	 */
	public function init() {
	}
	/**
	 * Fields definition.
	 *
	 * @return array
	 */
	public function get_fields() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Icon module class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      ?
 */
/**
 * Handles setting up everything for icon module.
 *
 * @since ?
 */
class ET_Builder_Module_Icon extends \ET_Builder_Module {




	/**
	 * Holds icon selector.
	 *
	 * @var string
	 */
	public $icon_element_selector;
	/**
	 * Holds icon element's classname.
	 *
	 * @var string
	 */
	public $icon_element_classname;
	/**
	 * Initialize the module class.
	 *
	 * @since ?
	 *
	 * @return void
	 */
	public function init() {
	}
	/**
	 * Get's the module fields.
	 *
	 * @since ?
	 *
	 * @return array $fields Module Fields.
	 */
	public function get_fields() {
	}
	/**
	 * Return an alignment value by device.
	 *
	 * @param string $device Device mode.
	 *
	 * @return string
	 */
	public function get_alignment( $device = 'desktop' ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed $raw_value Props raw value.
	 * @param array $args      {
	 *                         Context
	 *                         data.
	 *
	 * @type string $context      Context param: content, attrs, visibility, classes.
	 * @type string $name         Module options props name.
	 * @type string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args ) {
	}
	/**
	 * Transition fields for Icon module.
	 *
	 * @since ?
	 *
	 * @return array Fields list in array.
	 */
	public function get_transition_fields_css_props() {
	}
}
class ET_Builder_Module_Image extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_alignment( $device = 'desktop' ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Login extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Map extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Map_Item extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Menu extends \ET_Builder_Module {




	/**
	 * Menu module slug.
	 *
	 * @var string
	 */
	protected static $menu_slug = 'et_pb_menu';
	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Add the class with page ID to menu item so it can be easily found by ID in Frontend Builder
	 *
	 * @return menu item object
	 */
	static function modify_fullwidth_menu_item( $menu_item ) {
	}
	/**
	 * Get menu markup for menu module
	 *
	 * @return string of menu markup
	 */
	static function get_fullwidth_menu( $args = array() ) {
	}
	/**
	 * Apply logo styles.
	 *
	 * @since 4.0
	 *
	 * @param string $render_slug
	 *
	 * @return void
	 */
	protected function apply_logo_styles( $render_slug ) {
	}
	/**
	 * Determine if icon is disabled.
	 *
	 * @since 4.0
	 *
	 * @param string $icon
	 *
	 * @return boolean
	 */
	protected function is_icon_enabled( $icon ) {
	}
	/**
	 * Apply icon styles.
	 *
	 * @since 4.0
	 *
	 * @param string $render_slug
	 * @param string $icon
	 * @param string $selector
	 *
	 * @return void
	 */
	protected function apply_icon_styles( $render_slug, $icon, $selector ) {
	}
	/**
	 * Render logo.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected function render_logo() {
	}
	/**
	 * Render cart button.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected function render_cart() {
	}
	/**
	 * Render search button.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected function render_search() {
	}
	/**
	 * Render search form.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	protected function render_search_form() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Number_Counter extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Portfolio extends \ET_Builder_Module_Type_PostBased {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Get portfolio objects for portfolio module
	 *
	 * @param array $args             arguments that affect et_pb_portfolio query
	 * @param array $conditional_tags conditional tag for update process
	 * @param array $current_page     current page params
	 *
	 * @return mixed portfolio item data
	 */
	static function get_portfolio_item( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Get the next link
	 *
	 * @param int $paged Current page.
	 * @param int $max   Max number of pages.
	 *
	 * @return string|null
	 */
	private static function get_next_link( $paged, $max ) {
	}
	/**
	 * Get the previous link
	 *
	 * @param int $paged Current page.
	 *
	 * @return string|null
	 */
	private static function get_previous_link( $paged ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_PostContent extends \ET_Builder_Module_Type_PostContent {




	public $slug = 'et_pb_post_content';
	public function init() {
	}
}
class ET_Builder_Module_Post_Slider extends \ET_Builder_Module_Type_PostBased {




	/**
	 * Track if the module is currently rendering to prevent unnecessary rendering and recursion.
	 *
	 * @var bool
	 */
	protected static $_rendering = \false;
	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	static function get_blog_posts( $args = array(), $conditional_tags = array(), $current_page = array(), $is_ajax_request = \true ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	private function inner_shadow_back_compatibility( $functions_name ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Post_Title extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed $raw_value Props raw value.
	 * @param array $args      {
	 *                         Context
	 *                         data.
	 *
	 * @type string $context      Context param: content, attrs, visibility, classes.
	 * @type string $name         Module options props name.
	 * @type string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args ) {
	}
}
class ET_Builder_Module_Posts_Navigation extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Get prev and next post link data for frontend builder's post navigation module component
	 *
	 * @param int    post ID
	 * @param bool   show posts which uses same link only or not
	 * @param string excluded terms name
	 * @param string taxonomy name for in_same_terms
	 *
	 * @return string JSON encoded array of post's next and prev link
	 */
	static function get_posts_navigation( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Pricing_Tables extends \ET_Builder_Module {




	/**
	 * Holds additional shortcode.
	 *
	 * @var string
	 */
	public $additional_shortcode;
	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	function before_render() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Additional module output.
	 *
	 * @param array  $atts          List of attributes.
	 * @param string $content       Content being processed.
	 * @param string $function_name Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function additional_render( $atts, $content, $function_name ) {
	}
	private function get_featured_table( $content ) {
	}
	private function keep_box_shadow_compatibility( $atts, $content, $function_name ) {
	}
}
class ET_Builder_Module_Pricing_Tables_Item extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Inherit value from pricing tables (parent) module
	 *
	 * @since 4.6.0
	 */
	public function maybe_inherit_values() {
	}
	/**
	 * Generates the module's HTML output based on {@see self::$props}.
	 *
	 * @since 1.0
	 *
	 * @param array  $attrs       List of unprocessed attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string The module's HTML output.
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Search extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Sidebar extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	static function get_default_area() {
	}
	/**
	 * Get sidebar data for sidebar module
	 *
	 * @param string comma separated gallery ID
	 * @param string on|off to determine grid / slider layout
	 * @param array  passed current page params
	 *
	 * @return string JSON encoded array of attachments data
	 */
	static function get_sidebar( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Signup extends \ET_Builder_Module_Type_WithSpamProtection {




	protected static $_providers;
	public static $enabled_providers;
	public $child_slug          = 'et_pb_signup_custom_field';
	public $module_items_config = array(
		'toggle_slug' => 'fields',
		'location'    => 'bottom',
		'show_if'     => array( 'use_custom_fields' => 'on' ),
		'show_if_not' => array(
			'function.hasPredefinedFields' => 'off',
			'${provider}_list'             => array( '0|none', '' ),
		),
	);
	function init() {
	}
	protected static function _get_account_fields( $provider_slug ) {
	}
	protected static function _get_provider_fields() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	public static function get_lists() {
	}
	public static function get_account_name_for_list_id( $provider_slug, $list_id ) {
	}
	public function get_form_field_html( $field, $single_name_field = \false ) {
	}
	public static function providers() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Signup_Item extends \ET_Builder_Module {




	public $child_title_var  = 'field_title';
	public $bb_support       = \false;
	public $main_css_element = '.et_pb_newsletter_form %%order_class%%';
	public $no_render        = \true;
	public $slug             = 'et_pb_signup_custom_field';
	public $type             = 'child';
	public $vb_support       = 'on';
	public function init() {
	}
	public function get_advanced_fields_config() {
	}
	public function get_fields() {
	}
	public function get_settings_modal_toggles() {
	}
}
class ET_Builder_Module_Slider extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	function before_render() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	private function inner_shadow_back_compatibility( $functions_name ) {
	}
}
class ET_Builder_Module_Slider_Item extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	static function get_video_embed( $args = array(), $conditonal_args = array(), $current_page = array() ) {
	}
	function maybe_inherit_values() {
	}
	/**
	 * Get slider item normal or global background color.
	 *
	 * @since 4.9.0
	 *
	 * @return string
	 */
	public function get_slider_item_background_color() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Social_Media_Follow extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	function before_render() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Social_Media_Follow_Item extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	function get_network_name( $network ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Tabs extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Outputs tabs module nav markup
	 * The nav output is abstracted into method so tabs module can be extended
	 *
	 * @since 3.29
	 *
	 * @return string
	 */
	public function get_tabs_nav() {
	}
	/**
	 * Outputs tabs content markup
	 * The tabs content is abstracted into method so tabs module can be extended
	 *
	 * @since 3.29
	 *
	 * @return string
	 */
	public function get_tabs_content() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	public function process_box_shadow( $function_name ) {
	}
}
class ET_Builder_Module_Tabs_Item extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	/**
	 * Set the `product` prop on TabItem.
	 *
	 * `product` prop is only available w/ the Parents' Tab module and not w/ TabsItem module.
	 *
	 * The global $et_pb_wc_tabs variable is set
	 */
	function maybe_inherit_values() {
	}
	/**
	 * Return the Product ID when set. Otherwise return parent::get_the_ID()
	 *
	 * $this->props['product'] is set using
	 *
	 * @see ET_Builder_Module_Tabs_Item->maybe_inherit_values()
	 *
	 * @return bool|int
	 */
	function get_the_ID() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Team_Member extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Check if image has svg extension
	 *
	 * @param string $image_url Image URL.
	 *
	 * @return bool
	 */
	public function is_svg( $image_url ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Testimonial extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	public function get_transition_image_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Text extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	function convert_embeds( $matches ) {
	}
	/**
	 * Transition fields for Text module.
	 *
	 * @since 3.26
	 *
	 * @return array Fields list in array.
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Toggle extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type  string $context      Context param: content, attrs, visibility, classes.
	 * @type  string $name         Module options props name.
	 * @type  string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type  string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type  string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
}
class ET_Builder_Module_Video extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	static function get_video( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	static function get_video_cover_src( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @since 3.27.1
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed $raw_value Props raw value.
	 * @param array $args      {
	 *                         Context
	 *                         data.
	 *
	 * @type string $context      Context param: content, attrs, visibility, classes.
	 * @type string $name         Module options props name.
	 * @type string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type string $attr_sub_key Attribute sub key that availabe when passing attrs value as array such as styes. Example: padding-top, margin-botton, etc.
	 * }
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args ) {
	}
}
class ET_Builder_Module_Video_Slider extends \ET_Builder_Module {




	/**
	 * Indicates if module has box shadow.
	 *
	 * @var bool
	 */
	public $has_box_shadow;
	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	function before_render() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
class ET_Builder_Module_Video_Slider_Item extends \ET_Builder_Module {




	function init() {
	}
	function get_fields() {
	}
	public function get_transition_fields_css_props() {
	}
	protected static function resolve_oembed_thumbnail( $src, $post_id ) {
	}
	static function get_oembed_thumbnail( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	static function is_oembed( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	static function get_oembed( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	static function get_video( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
abstract class ET_Builder_Module_Field_Base {




	/**
	 * @param array $args
	 *
	 * @return array
	 */
	abstract public function get_fields( array $args = array() );
}
class ET_Builder_Module_Field_BoxShadow extends \ET_Builder_Module_Field_Base {




	private static $classes = array();
	/**
	 * ET_Builder_Module_Helper_OptionTemplate class
	 *
	 * @var ET_Builder_Module_Helper_OptionTemplate
	 */
	public $template;
	/**
	 * @var ET_Builder_Module_Helper_ResponsiveOptions
	 *
	 * @since 3.23
	 */
	public static $responsive = \null;
	/**
	 * Constructor.
	 */
	public function __construct() {
	}
	/**
	 * Set option template for Box Shadow
	 *
	 * @since 3.28
	 *
	 * @return void
	 */
	public function set_template() {
	}
	/**
	 * Get box shadow fields.
	 *
	 * @since 3.23 Add support for responsive settings. Add allowed units for range fields.
	 *
	 * @param  array $args Box shadow settings args.
	 * @return array       Box shadow fields.
	 */
	public function get_fields( array $args = array() ) {
	}
	/**
	 * Get box-shadow declaration style.
	 *
	 * @since 3.23 Add support for responsive settings.
	 *
	 * @param  array $atts Module attributes.
	 * @param  array $args Box-shadow arguments.
	 * @return string       Box shadow CSS declaration.
	 */
	public function get_value( $atts, array $args = array() ) {
	}
	public function get_presets() {
	}
	public function get_preset( $name ) {
	}
	public function get_style( $selector, array $atts = array(), array $args = array() ) {
	}
	public function has_overlay( $atts, $args ) {
	}
	public function get_overlay_selector( $selector ) {
	}
	public function get_overlay_style( $function_name, $selector, $atts, array $args = array() ) {
	}
	public function is_inset( $style ) {
	}
	public static function register_element( $class ) {
	}
	public static function get_elements() {
	}
	protected function fetch_preset( array $preset, $suffix ) {
	}
	protected function get_preset_field( $name, $field ) {
	}
	/**
	 * Get box shadow property value based on current active device.
	 *
	 * @since 3.23 Add responsive support. Check last edited value first for tablet/phone.
	 *
	 * @param string  $key    Box shadow property.
	 * @param array   $atts   All module attributes.
	 * @param boolean $hover  Hover mode status.
	 * @param string  $device Current device.
	 * @param boolean $sticky Sticky mode status.
	 *
	 * @return string          Box shadow property value.
	 */
	protected function get_key_value( $key, $atts = array(), $hover = \false, $device = 'desktop', $sticky = \false ) {
	}
	/**
	 * Check if box shadow is used.
	 *
	 * @since 4.10.0
	 * @param array  $attrs All module attributes.
	 * @param string $key   Box shadow property.
	 */
	public function is_used( $attrs, $key = '' ) {
	}
	/**
	 * Check if module has inset.
	 *
	 * @since 4.10.0
	 * @param array $attrs            All module attributes.
	 * @param array $advanced_options Advanced module options.
	 */
	public function has_inset( $attrs, $advanced_options, $_ ) {
	}
}
/**
 * Module Divider class.
 */
class ET_Builder_Module_Field_Divider extends \ET_Builder_Module_Field_Base {




	/**
	 * List of available dividers for the sections.
	 *
	 * @var array
	 */
	public $dividers = array();
	/**
	 * Markup for the SVG
	 *
	 * @var string
	 */
	public $svg;
	/**
	 * List of classes for using in styling.
	 *
	 * @var array
	 */
	public $classes = array( 'section_has_divider' );
	/**
	 * @var ET_Core_Data_Utils
	 */
	public static $data_utils = \null;
	/**
	 * @var ET_Builder_Module_Helper_ResponsiveOptions
	 *
	 * @since 3.23
	 */
	public static $responsive = \null;
	/**
	 * Number of times the module has been rendered.
	 *
	 * @var int
	 */
	public $count;
	/**
	 * Constructor for the class. This is done so that the divider options could be filtered
	 * by a child theme or plugin.
	 */
	public function __construct() {
	}
	/**
	 * Retrieves fields for divider settings.
	 *
	 * @since 3.23 Add responsive settings on Divider Style. Add allowed units on some range fields.
	 *
	 * @param  array $args Associative array for settings.
	 * @return array       Option settings.
	 */
	public function get_fields( array $args = array() ) {
	}
	/**
	 * Process Section Divider
	 *
	 * Adds a CSS class to the section, determines orientaion of the SVG, encodes an SVG to use as data
	 * for the background-image property.
	 *
	 * @since 3.23 Pass values parameter to support responsive settings.
	 * @since 4.6.0 Add sticky style support.
	 *
	 * @param string $placement  Whether it is the top or bottom divider.
	 * @param array  $atts       Associative array of shortcode and their
	 *                           respective values.
	 * @param string $breakpoint ''|tablet|phone
	 * @param array  $values     Existing responsive values.
	 */
	public function process_svg( $placement, $atts, $breakpoint = '', $values = array() ) {
	}
	/**
	 * Returns a placeholder for the section only if it is set to be inside of the section.
	 *
	 * @param  string $placement Whether it is the top or bottom
	 * @return string            HTML container
	 */
	public function get_svg( $placement ) {
	}
}
class ET_Builder_Module_Fields_Factory {




	protected static $fields = array();
	/**
	 * @param $fields_type
	 *
	 * @return ET_Builder_Module_Field_Base
	 */
	public static function get( $fields_type ) {
	}
}
/**
 * Module Margin and Padding class.
 *
 * This is not how main module margin and padding is generated. Mostly used by other custom options
 * group such as Button and Field Input. Doesn't support selective padding yet.
 *
 * Copy of ET_Builder_Element::process_advanced_custom_margin_options().
 *
 * @since 3.23
 * @since 4.6.0 Add sticky style support
 */
class ET_Builder_Module_Field_MarginPadding extends \ET_Builder_Module_Field_Base {




	/**
	 * True when Divi plugin is active.
	 *
	 * @since 3.23
	 *
	 * @var bool
	 */
	public $is_plugin_active = \false;
	/**
	 * Margin padding properties.
	 *
	 * @since 3.23
	 *
	 * @var array
	 */
	public $properties;
	/**
	 * Margin padding config.
	 *
	 * @since 3.23
	 *
	 * @var array
	 */
	public $config;
	/**
	 * Constructor.
	 */
	public function __construct() {
	}
	/**
	 * Returns prefixed field names.
	 *
	 * @since 3.23
	 *
	 * @param string $prefix Prefix.
	 *
	 * @return array
	 */
	public function get_prefixed_field_names( $prefix ) {
	}
	/**
	 * Add selector prefix if needed.
	 *
	 * @since 3.23
	 *
	 * Custom margin & padding selector for button element. This is custom selector exist on
	 * ET_Builder_Element. We should do the samething to override hardcoded padding generated
	 * by button element.
	 *
	 * @see ET_Builder_Element::process_advanced_button_options
	 */
	public function get_prefixed_selector( $css_element, $type = '', $is_divi_builder_plugin = \false ) {
	}
	/**
	 * Returns fields definition.
	 *
	 * @since 3.23
	 *
	 * @param array $args Field configuration.
	 *
	 * @return array
	 */
	public function get_fields( array $args = array() ) {
	}
	/**
	 * Adds CSS rule.
	 *
	 * @since 3.23
	 * @since 4.6.0 Add sticky style support
	 *
	 * @see ET_Builder_Element->process_advanced_custom_margin_options()
	 *
	 * @param ET_Builder_Element $module        Module object.
	 * @param string             $prefix        Label.
	 * @param array              $options       Field settings.
	 * @param string             $function_name Shortcode function.
	 * @param string             $type          Margin padding type.
	 */
	public function update_styles( $module, $prefix, $options, $function_name, $type ) {
	}
	/**
	 * Process Margin & Padding options and adds CSS rules.
	 *
	 * @since 3.23
	 *
	 * @param ET_Builder_Element $module        Module object.
	 * @param string             $function_name Shortcode function.
	 */
	public function process_advanced_css( $module, $function_name ) {
	}
	/**
	 * Process Margin & Padding options and adds CSS rules.
	 *
	 * @since 4.10.0
	 * @param array $attrs Module attributes.
	 */
	public function is_used( $attrs ) {
	}
}
class ET_Builder_Module_Field_Overflow extends \ET_Builder_Module_Field_Base {




	public function get_defaults() {
	}
	public function get_fields( array $args = array() ) {
	}
	protected function get_field( $axis, $args ) {
	}
}
class ET_Builder_Module_Field_Position extends \ET_Builder_Module_Field_Base {




	const TAB_SLUG    = 'custom_css';
	const TOGGLE_SLUG = 'position_fields';
	/**
	 * @var ET_Builder_Element
	 */
	private $module;
	public function get_fields( array $args = array() ) {
	}
	// Processing functions
	/**
	 * @param object $module Current module to be processed
	 */
	public function set_module( $module ) {
	}
	/**
	 * Interpreter of ET_Builder_Element::get_media_query
	 *
	 * @param string $view
	 *
	 * @return array
	 */
	public function get_media_query( $view ) {
	}
	/**
	 * @param array  $attrs
	 * @param string $name
	 * @param string $desktopDefault
	 * @param string $view
	 *
	 * @return mixed
	 */
	private function get_default( $attrs, $name, $desktopDefault = '', $view = 'desktop' ) {
	}
	/**
	 * @param array  $attrs
	 * @param string $name
	 * @param string $default_value
	 * @param string $view
	 * @param bool   $force_return
	 *
	 * @return mixed
	 */
	private function get_value( $attrs, $name, $default_value = '', $view = 'desktop', $force_return = \false ) {
	}
	/**
	 * Get exposed module settings for assisting layout block preview rendering
	 *
	 * @since 4.3.2
	 *
	 * @param string $function_name
	 *
	 * @return null|array
	 */
	public function get_layout_block_settings( $function_name ) {
	}
	/**
	 * @param string $function_name
	 *
	 * @since 4.6.0 Add sticky style support.
	 */
	public function process( $function_name ) {
	}
	/**
	 * Determine if Position Options are used.
	 *
	 * @since 4.10.0
	 *
	 * @param array $attrs Module attributes/props.
	 *
	 * @return bool
	 */
	public function is_used( $attrs ) {
	}
}
/**
 * Field definition for sticky elements feature.
 *
 * @package     Divi
 * @sub-package Builder
 * @since       4.6.0
 */
/**
 * Sticky field class.
 *
 * @since 4.6.0
 */
class ET_Builder_Module_Field_Sticky extends \ET_Builder_Module_Field_Base {




	/**
	 * Default sticky element field attributes (prefix, tab, and toggle).
	 *
	 * @var array Default sticky element field attributes.
	 */
	protected $defaults = array(
		'prefix'      => 'sticky',
		'tab_slug'    => 'custom_css',
		'toggle_slug' => 'scroll_effects',
	);
	/**
	 * Retrieves default settings for sticky fields.
	 *
	 * @since 4.6.0
	 *
	 * @return array $settings Default settings.
	 */
	public function get_defaults() {
	}
	/**
	 * Retrieves default value of specific field settings
	 *
	 * @since 4.6.0
	 *
	 * @param string $name    Default name.
	 * @param string $default Default's default value.
	 *
	 * @return mixed
	 */
	public function get_default( $name = '', $default = '' ) {
	}
	/**
	 * Retrieves fields for sticky settings.
	 *
	 * @since 4.6.0
	 *
	 * @param array $args Associative array for settings.
	 *
	 * @return array $fields Option settings.
	 */
	public function get_fields( array $args = array() ) {
	}
	/**
	 * Get limit position options based on Element Type.
	 *
	 * @since 4.6.0
	 *
	 * @param string $module_slug Module Slug.
	 *
	 * @return array $options     Limit options.
	 */
	private function get_limit_options( $module_slug ) {
	}
}
class ET_Builder_Module_Field_TextShadow extends \ET_Builder_Module_Field_Base {




	/**
	 * True when Divi plugin is active.
	 *
	 * @var bool
	 */
	public $is_plugin_active = \false;
	/**
	 * Text shadow properties.
	 *
	 * @var array
	 */
	public $properties;
	protected $template;
	/**
	 * Constructor.
	 */
	public function __construct() {
	}
	// end __construct()
	/**
	 * Returns prefixed field names.
	 *
	 * @param string $prefix Prefix.
	 *
	 * @return array
	 */
	public function get_prefixed_field_names( $prefix ) {
	}
	// end get_prefixed_field_names()
	/**
	 * Returns Text Shadow presets.
	 *
	 * @param string $prefix Prefix.
	 *
	 * @return array
	 */
	public function get_presets( $prefix, $suffix = '' ) {
	}
	// end get_presets()
	/**
	 * Returns conditional defaults array.
	 *
	 * @param string $prefix  Prefix.
	 * @param string $depend  Field whose value controls which default should be used.
	 * @param string $field   Field for which we're generating the defaults array.
	 * @param string $default Default value to be used when a Preset doesn't include a value for $field.
	 *
	 * @return array
	 */
	public function get_defaults( $prefix, $depend, $field, $default ) {
	}
	// end get_defaults()
	/**
	 * Set option template for Text Shadow
	 *
	 * @since 3.28
	 *
	 * @return void
	 */
	public function set_template() {
	}
	/**
	 * Returns fields definition.
	 *
	 * @since 3.23 Add mobile_options attributes for all fields to support responsive settings, except
	 *           text_shadow_style. Add allowed units for some fields with range type.
	 *
	 * @param array $args Field configuration.
	 *
	 * @return array
	 */
	public function get_fields( array $args = array() ) {
	}
	// end get_fields()
	/**
	 * Returns whether a declaration should be added !important or not.
	 *
	 * @param array  $options Field definition.
	 * @param string $key     Property name.
	 *
	 * @return bool
	 */
	public function get_important( $options, $key = \false ) {
	}
	// end get_important()
	/**
	 * Returns the text-shadow declaration
	 *
	 * @since 3.23 Add responsive settings support to get the correct tablet and phone values.
	 *
	 * @param string $label      Prefix.
	 * @param bool   $important  Whether to add !important or not.
	 * @param array  $all_values All shortcode values.
	 * @param bool   $is_hover   Hover status.
	 * @param string $device     Current active device.
	 *
	 * @return string
	 */
	public function get_declaration( $label, $important, $all_values, $is_hover = \false, $device = 'desktop' ) {
	}
	// end get_declaration()
	/**
	 * Adds CSS rule.
	 *
	 * @since 3.23 Add responsive settings support to render tablet and phone styles.
	 *
	 * @param ET_Builder_Element $module        Module object.
	 * @param string             $label         Label.
	 * @param array              $font          Field definition.
	 * @param string             $function_name Shortcode function.
	 * @param bool               $is_hover      Hover status.
	 * @param string             $device        Current active device.
	 *
	 * @return void
	 */
	public function update_styles( $module, $label, $font, $function_name, $is_hover = \false, $device = 'desktop' ) {
	}
	// end update_styles()
	/**
	 * Added to fix array_map can't access static class of Hover Options.
	 *
	 * @since 3.23
	 *
	 * @param string $selector Current selector.
	 *
	 * @return string Updated selector with hover suffix.
	 */
	private function add_hover_to_selectors( $selector ) {
	}
	/**
	 * Process Text Shadow options and adds CSS rules.
	 *
	 * @since 4.6.0 Add sticky style support
	 *
	 * @param ET_Builder_Element $module        Module object.
	 * @param string             $function_name Shortcode function.
	 *
	 * @return void
	 */
	public function process_advanced_css( $module, $function_name ) {
	}
	// end process_advanced_css()
	/**
	 * Determine if Text Shadow is used.
	 *
	 * @since 4.10.0
	 *
	 * @param array $attrs Module attributes/props.
	 *
	 * @return bool
	 */
	public function is_used( $attrs ) {
	}
}
class ET_Builder_Module_Field_Transform extends \ET_Builder_Module_Field_Base {




	private $processing_props = array();
	public $defaults          = array(
		'scale'     => '100%',
		'translate' => '0px',
		'rotate'    => '0deg',
		'skew'      => '0deg',
		'origin'    => '50%',
	);
	public $allTransforms     = array( 'scaleX', 'scaleY', 'translateX', 'translateY', 'rotateX', 'rotateY', 'rotateZ', 'skewX', 'skewY', 'originX', 'originY' );
	public function get_fields( array $args = array() ) {
	}
	// Processing functions
	public function percent_to_unit( $percent = 0 ) {
	}
	public function set_props( $props ) {
	}
	public function get_setting( $value, $default ) {
	}
	public function get_option( $typeAxis, $type = 'desktop' ) {
	}
	public function get_elements( $type ) {
	}
	public function getTransformDeclaration( $transformElements, $view = 'desktop' ) {
	}
	/**
	 * @param $animationType
	 * @param $elements
	 * @param $function_name
	 * @param $device
	 *
	 * @return array
	 */
	public function transformedAnimation( $animationType, $elements, $function_name, $device ) {
	}
	/**
	 * Check if we need to process transform.
	 * Here we also check positions since some of it
	 * requires transform css.
	 *
	 * @param array $attrs     Module attributes.
	 * @param array $positions Position locations.
	 *
	 * @return bool
	 */
	public function is_used( $attrs, $positions ) {
	}
}
/**
 * Parser of additional composite type attributes
 */
class ET_Builder_Module_Field_Attribute_Composite_Parser {




	/**
	 * @param string $type      type of composite attribute
	 * @param array  $structure attribute structure, depends on type
	 *
	 * @return array Additional attributes for merging with rest of module attributes
	 */
	public static function parse( $type, $structure ) {
	}
}
/**
 * Class for parsing shortcode attributes for tabbed controls.
 * The tabbed composite structure as follows
 * 'composite_structure' => array(
 *      //tab
 *      'border_all' => array(
 *          //tab icon
 *          'icon'     => 'border-all',
 *           //list of standard controls which will be placed within the tab
 *          'controls' => array(
 *              'border_width_all' => array(
 *                  'label'          => esc_html__( 'Border Width', 'et_builder' ),
 *                  'type'           => 'range',
 *                  'default'           => '0',
 *                  'range_settings' => array(
 *                      'min'  => 0,
 *                      'max'  => 50,
 *                      'step' => 1,
 *                  ),
 *              ),
 *              'border_color_all' => array(
 *                  'label'   => esc_html__( 'Border Color', 'et_builder' ),
 *                  'type'    => $color_type,
 *                  'default' => '#333333',
 *              ),
 *          ),
 *      ),
 *  )
 */
class ET_Builder_Module_Field_Attribute_Composite_Type_Tabbed {




	/**
	 * @var ET_Core_Data_Utils
	 */
	protected static $_;
	public static function parse( $structure ) {
	}
}
/**
 * Class ET_Builder_Module_Field_Template_Base
 * Base class for field renderers in BB
 */
abstract class ET_Builder_Module_Field_Template_Base {




	/**
	 * @param $field
	 * @param $render_helper
	 *
	 * @return template
	 */
	abstract public function render( $field, $render_helper );
	protected function _render_icon( $icon_name ) {
	}
	protected function _wrap_field_name( $name ) {
	}
}
class ET_Builder_Module_Field_Template_Tabbed extends \ET_Builder_Module_Field_Template_Base {




	/**
	 * @param $field         array Field settings
	 * @param $render_helper ET_Builder_Element
	 *
	 * @return string Control rendered html
	 */
	public function render( $field, $render_helper ) {
	}
	protected function _render_outside_preview() {
	}
	protected function _render_tab_preview( $tab ) {
	}
	protected function _get_control_class() {
	}
}
class ET_Builder_Module_Field_Template_Border_Radius extends \ET_Builder_Module_Field_Template_Base {




	public function render( $field, $render_helper ) {
	}
}
class ET_Builder_Module_Field_Template_Border_Styles extends \ET_Builder_Module_Field_Template_Tabbed {




	protected function _get_control_class() {
	}
	protected function _render_tab_preview( $tab ) {
	}
}
/**
 * Helper class that provides necessary functions for managing Sizing option
 *
 * Class ET_Builder_Module_Helper_Sizing
 */
abstract class ET_Builder_Module_Helper_Sizing {




	/**
	 * @var string The prefix string that may be added to field name
	 */
	private $prefix;
	/**
	 * Return raw field name to create the field
	 *
	 * @return string
	 */
	abstract public function get_raw_field();
	public function __construct( $prefix = '' ) {
	}
	/**
	 * Returns sizing options fields prefix
	 *
	 * @return string
	 */
	public function get_prefix() {
	}
	/**
	 * Returns field name of the sizing option
	 *
	 * @return string
	 */
	public function get_field() {
	}
	/**
	 * Check if the sizing feature option is enabled
	 *
	 * @return bool
	 */
	public function is_enabled() {
	}
	/**
	 * Returns sizing value
	 *
	 * @param array  $props
	 * @param string $default
	 *
	 * @return string
	 */
	public function get_value( array $props, $default = '' ) {
	}
}
/**
 * Helper class that provides necessary functions for managing alignment option
 *
 * Class ET_Builder_Module_Helper_Alignment
 */
class ET_Builder_Module_Helper_Alignment extends \ET_Builder_Module_Helper_Sizing {




	public function get_raw_field() {
	}
}
/**
 * Background helper methods.
 *
 * Intended for module that needs to extend module background mechanism with few modification
 * (eg. post slider which needs to apply module background on individual slide that has featured
 * image).
 *
 * @since 4.3.3
 * @since 4.6.0 Add sticky style support
 * @since 4.15.0 Add pattern/mask style support.
 *
 * Class ET_Builder_Module_Helper_Background
 */
class ET_Builder_Module_Helper_Background {




	/**
	 * Returns instance of the class.
	 *
	 * @return ET_Builder_Module_Helper_Background
	 */
	public static function instance() {
	}
	/**
	 * Get prop name alias. Some background settings (eg. button's gradient background enable) might
	 * use slightly different prop name to store background config;
	 *
	 * @since 4.6.0
	 *
	 * @param array  $aliases   Aliases.
	 * @param string $prop_name Prop name.
	 *
	 * @return string
	 */
	public function get_prop_name_alias( $aliases = array(), $prop_name = '' ) {
	}
	/**
	 * Get gradient properties for hover mode
	 *
	 * @since 4.3.3
	 * @since 4.6.0 add capability to look for sticky style's gradient
	 * @since 4.16.0   Uses the `_stops` field introduced in the Gradient Builder update.
	 *
	 * @param string $mode                        Mode name.
	 * @param array  $props                       Module's props.
	 * @param string $base_prop_name              Background base prop name.
	 * @param array  $gradient_properties_desktop {
	 * @type  string $mode
	 * @type  string $stops
	 * @type  string $type
	 * @type  string $direction
	 * @type  string $radial_direction
	 * @type  string $color_start
	 * @type  string $color_end
	 * @type  string $start_position
	 * @type  string $end_position
	 * }
	 *
	 * @return array|false
	 */
	public function get_gradient_mode_properties( $mode, $props, $base_prop_name, $gradient_properties_desktop = array() ) {
	}
	/**
	 * Get gradient properties based on given props
	 *
	 * @since 4.3.3
	 * @since 4.16.0   Uses the `_stops` field introduced in the Gradient Builder update.
	 *
	 * @param array  $props          Module's props.
	 * @param string $base_prop_name Background base prop name.
	 * @param string $suffix         Background base prop name's suffix.
	 *
	 * @return array
	 */
	public function get_gradient_properties( $props, $base_prop_name, $suffix ) {
	}
	/**
	 * Get background gradient style based on properties given
	 *
	 * @since 4.3.3
	 * @since 4.16.0   Uses the `_stops` field introduced in the Gradient Builder update.
	 *
	 * @param array $args {
	 * @type  string $repeat           Whether the gradient stops repeat.
	 * @type  string $type             Linear or radial gradient.
	 * @type  string $direction        The gradient line's angle of direction.
	 * @type  string $radial_direction The position of the gradient.
	 * @type  string $stops            Brace-delimited list of color stops.
	 * @type  string $color_start      Deprecated.
	 * @type  string $color_end        Deprecated.
	 * @type  string $start_position   Deprecated.
	 * @type  string $end_position     Deprecated.
	 * }
	 *
	 * @return string
	 */
	public function get_gradient_style( $args ) {
	}
	/**
	 * Get individual background image style
	 *
	 * @since 4.3.3
	 * @since 4.15.0 deprecated
	 *
	 * @deprecated Use {@see get_attr_value} instead.
	 *
	 * @param string $attr                 Background attribute name.
	 * @param string $base_prop_name       Base background prop name.
	 * @param string $suffix               Attribute name suffix.
	 * @param array  $props                Module props.
	 * @param array  $fields_definition    Module's fields definition.
	 * @param bool   $is_prev_image_active Whether previous background image is active or not.
	 *
	 * @return string
	 */
	public function get_image_style( $attr, $base_prop_name, $suffix = '', $props = array(), $fields_definition = array(), $is_prev_image_active = \true ) {
	}
	/**
	 * Get individual default value.
	 *
	 * @since 4.15.0
	 *
	 * @param string $attr                  Background attribute name.
	 * @param string $base_prop_name        Base background prop name.
	 * @param array  $fields_definition     Module's fields definition.
	 * @param bool   $is_prev_device_active Whether previous background image is active or not.
	 *
	 * @return string
	 */
	public function get_attr_default( $attr, $base_prop_name, $fields_definition = array(), $is_prev_device_active = \true ) {
	}
	/**
	 * Get individual background attribute value.
	 *
	 * @since 4.15.0
	 *
	 * @param string $attr                  Background attribute name.
	 * @param string $base_prop_name        Base background prop name.
	 * @param string $suffix                Attribute name suffix.
	 * @param array  $props                 Module props.
	 * @param array  $fields_definition     Module's fields definition.
	 * @param bool   $is_prev_device_active Whether is active in previous device or not.
	 *
	 * @return string
	 */
	public function get_attr_value( $attr, $base_prop_name, $suffix = '', $props = array(), $fields_definition = array(), $is_prev_device_active = \true ) {
	}
	/**
	 * Return CSS for Transform State.
	 *
	 * @since 4.15.0
	 *
	 * @param string $values Transform states.
	 * @param string $state  Query state, valid options: horizontal | vertical | rotate | invert.
	 *
	 * @return string
	 */
	public function get_transform_state( $values, $state ) {
	}
	/**
	 * Return CSS for Transform State.
	 *
	 * We use `scale` here because CSS Transform's `rotateX`/`rotateY` trigger a 10+
	 * year old Safari bug that hides rotated background images (including SVGs).
	 *
	 * @see https://bugs.webkit.org/show_bug.cgi?id=61824
	 *
	 * @since 4.15.0
	 *
	 * @param bool $horizontal Horizontal state.
	 * @param bool $vertical   Vertical state.
	 *
	 * @return string
	 */
	public function get_transform_css( $horizontal, $vertical ) {
	}
	/**
	 * Helper function to return CSS for BackgroundPosition.
	 *
	 * @since 4.15.0
	 *
	 * @param string $position          Position.
	 * @param string $horizontal_offset Horizontal Offset.
	 * @param string $vertical_offset   Vertical Offset.
	 * @param string $position_default  Default Position.
	 *
	 * @return array
	 */
	public function get_background_position_css( $position, $horizontal_offset, $vertical_offset, $position_default = '' ) {
	}
	/**
	 * Helper function to return CSS for BackgroundSize.
	 *
	 * @since 4.15.0
	 *
	 * @param string $size         Size.
	 * @param string $width        Width.
	 * @param string $height       Vertical Offset.
	 * @param string $size_default Default Size.
	 * @param string $type         Type, use to handle special case.
	 *
	 * @return array
	 */
	public function get_background_size_css( $size, $width, $height, $size_default = '', $type = '' ) {
	}
	/**
	 * Get background UI option's style based on given props and prop name
	 *
	 * @since 4.3.3
	 * @since 4.6.0 Add sticky style support.
	 * @since 4.15.0 Add pattern/mask style support.
	 *
	 * @todo Further simplify this method; Break it down into more encapsulated methods
	 *
	 * @param array $args {
	 * @type  string $base_prop_name
	 * @type  array  $props
	 * @type  string $important
	 * @type  array  $fields_Definition
	 * @type  string $selector
	 * @type  string $selector_hover
	 * @type  string $selector_sticky
	 * @type  number $priority
	 * @type  string $function_name
	 * @type  bool   $has_background_color_toggle
	 * @type  bool   $use_background_color
	 * @type  bool   $use_background_color_gradient
	 * @type  bool   $use_background_image
	 * @type  bool   $use_background_video
	 * @type  bool   $use_background_pattern
	 * @type  bool   $use_background_mask
	 * @type  bool   $use_background_color_reset
	 * @type  bool   $use_background_image_parallax
	 * }
	 */
	public function get_background_style( $args = array() ) {
	}
	/**
	 * Return default status for device modes.
	 *
	 * @since 4.15.0
	 *
	 * @return array
	 */
	public function get_default_mode_status() {
	}
	/**
	 * Returns real color value by the global color ID, if any.
	 *
	 * @param string $color Raw Color Value.
	 *
	 * @since 4.16.0 Refactored to perform a substring find/replace (for compound settings like in Gradient Builder).
	 *
	 * @return string
	 */
	public function get_color_value( $color ) {
	}
	/**
	 * Get array of attributes which have dynamic content enabled.
	 *
	 * @param mixed[] $attrs Module attributes.
	 *
	 * @see ET_Builder_Element::_get_enabled_dynamic_attributes()
	 *
	 * @since 4.15.0
	 *
	 * @return string[]
	 */
	protected function _get_enabled_dynamic_attributes( $attrs ) {
	}
	/**
	 * Check if an attribute value is dynamic or not.
	 *
	 * @param string $attribute                  Attribute name.
	 * @param string $value                      Attribute value.
	 * @param array  $enabled_dynamic_attributes Attributes which have dynamic content enabled.
	 *
	 * @see ET_Builder_Element::_is_dynamic_value()
	 *
	 * @since 4.15.0
	 *
	 * @return bool
	 */
	protected function _is_dynamic_value( $attribute, $value, $enabled_dynamic_attributes ) {
	}
	/**
	 * Get whether third party post interference should be respected.
	 * Current use case is for plugins like Toolset that render a
	 * loop within a layout which renders another layout for
	 * each post - in this case we must NOT override the
	 * current post so the loop works as expected.
	 *
	 * @see ET_Builder_Element::_should_respect_post_interference()
	 *
	 * @since 4.15.0
	 *
	 * @return boolean
	 */
	protected static function _should_respect_post_interference() {
	}
	/**
	 * Retrieve the main query post id.
	 * Accounts for third party interference with the current post.
	 *
	 * @see ET_Builder_Element::_get_main_post_id()
	 *
	 * @since 4.15.0
	 *
	 * @return integer|boolean
	 */
	protected static function _get_main_post_id() {
	}
}
/**
 * Background layout helper methods.
 *
 * @since 4.0.7
 *
 * Class ET_Builder_Module_Helper_BackgroundLayout
 */
class ET_Builder_Module_Helper_BackgroundLayout {




	public static function instance() {
	}
	/**
	 * Get background layout class names.
	 *
	 * @since 4.0.7
	 *
	 * @param array   $attrs
	 * @param boolean $is_skip_desktop Not all modules need to print desktop background layout.
	 * @param boolean $is_text_color   Not all modules need text color layout class name.
	 *
	 * @return array
	 */
	public function get_background_layout_class( $attrs, $is_skip_desktop = \false, $is_text_color = \false ) {
	}
	/**
	 * Get background layout data attributes.
	 *
	 * @since 4.0.7
	 *
	 * @param array $attrs
	 *
	 * @return string
	 */
	public function get_background_layout_attrs( $attrs ) {
	}
}
/**
 * Font helper methods.
 *
 * @since 4.0
 *
 * Class ET_Builder_Module_Helper_Font
 */
class ET_Builder_Module_Helper_Font {




	public static function instance() {
	}
	/**
	 * Check if current font is Default or not.
	 *
	 * @since 4.0
	 *
	 * @param array  $attrs
	 * @param string $name
	 * @param string $device
	 *
	 * @return boolean
	 */
	public function is_font_default( $attrs, $name, $device = 'desktop' ) {
	}
	/**
	 * Check if current font is empty or not.
	 *
	 * @since 4.0
	 *
	 * @param array  $attrs
	 * @param string $name
	 * @param string $device
	 *
	 * @return boolean
	 */
	public function is_font_empty( $attrs, $name, $device = 'desktop' ) {
	}
	/**
	 * Get font value based on device.
	 *
	 * @since 4.0
	 *
	 * @param array  $attrs
	 * @param string $name
	 * @param string $device
	 *
	 * @return string
	 */
	public function get_font_value( $attrs, $name, $device = 'desktop' ) {
	}
	/**
	 * Get custom breakpoint by font value.
	 *
	 * There is a case where tablet and phone use Default font. Default font means the element will
	 * use the original or font defined on Theme Customizer. It's different with empty string which
	 * means the font will be inherited from the larger device. So, when current device use non
	 * default font, we should check smaller device uses default font or not. If the smaller device
	 * use default font, we have to render current font inclusidely  on current device, something
	 * likes desktop_only, tablet_only, or desktop_tablet_only.
	 *
	 * @since 4.0
	 *
	 * @param array  $attrs
	 * @param string $name
	 * @param string $device
	 * @param string $default_breakpoint
	 *
	 * @return string
	 */
	public function get_breakpoint_by_font_value( $attrs, $name, $device = 'desktop', $default_breakpoint = '' ) {
	}
	/**
	 * Get font selector based on settings.
	 *
	 * @since 4.0
	 *
	 * @param array  $option_settings
	 * @param string $main_css_element
	 *
	 * @return string
	 */
	public function get_font_selector( $option_settings, $main_css_element ) {
	}
}
/**
 * Helper class that provides necessary functions for managing height option
 *
 * Class ET_Builder_Module_Helper_Height
 */
class ET_Builder_Module_Helper_Height extends \ET_Builder_Module_Helper_Sizing {




	public function get_raw_field() {
	}
}
/**
 * Hover Options helper methods
 *
 * Class ET_Builder_Module_Hover_Options
 */
class ET_Builder_Module_Helper_Hover_Options {




	private static $instance;
	public static function get() {
	}
	private function util_get( $key, $list, $default = \null ) {
	}
	/**
	 * Returns `__hover`
	 *
	 * @return string
	 */
	public function get_suffix() {
	}
	/**
	 * Return `__hover_enabled`
	 *
	 * @return string
	 */
	public function get_enabled_suffix() {
	}
	/**
	 * Returns the field original name by removing the `__hover` or `__hover_enabled` suffix if it exists.
	 *
	 * @param string $name
	 *
	 * @return string
	 */
	public function get_field_base_name( $name ) {
	}
	/**
	 * Check if the setting has enabled hover options
	 *
	 * @param string $setting
	 * @param array  $attrs
	 *
	 * @return bool
	 */
	public function is_enabled( $setting, $attrs ) {
	}
	/**
	 * Check if hover settings are enabled on one of the options list.
	 *
	 * @since 4.5.1
	 *
	 * @param  array $attrs All module attributes.
	 * @param  array $list  Options list.
	 * @return boolean      Hover settings status.
	 */
	public function is_any_hover_enabled( $attrs, $list ) {
	}
	/**
	 * Returns the hover setting field name
	 * E.g.: get_hover_enabled_field('test') => 'test__hover'
	 *
	 * @param string $setting
	 *
	 * @return string
	 */
	public function get_hover_field( $setting ) {
	}
	/**
	 * Returns the hover enabled setting field name
	 * E.g.: get_hover_enabled_field('test') => 'test__hover_enabled'
	 *
	 * @param string $setting
	 *
	 * @return string
	 */
	public function get_hover_enabled_field( $setting ) {
	}
	/**
	 * Returns setting hover value if hover is enabled;
	 * If it does not exist, return $default specified value
	 *
	 * @param string $setting
	 * @param array  $attrs
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	public function get_value( $setting, $attrs, $default = \null ) {
	}
	/**
	 * Returns setting hover value if hover is enabled for a compose option;
	 * If it does not exist, return $default specified value
	 *
	 * @param string $setting
	 * @param string $option
	 * @param array  $attrs
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	public function get_compose_value( $setting, $option, $attrs, $default = \null ) {
	}
	/**
	 * Returns setting hover value;
	 * If it does not exist, return $default specified value
	 *
	 * @param string $setting
	 * @param array  $attrs
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	public function get_raw_value( $setting, $attrs, $default = \null ) {
	}
	/**
	 * Adds `:hover` in selector at the end of the selector
	 * E.g: add_hover_to_selectors('%%order_class%%% .image') >>> '%%order_class%%% .image:hover'
	 *
	 * @since 4.6.0 moved the order of `-` in capturing group 4's character set so it captures
	 *           `::-` prefixed pseudo selector like `::-moz-placeholder` correctly
	 *
	 * @param string $selector
	 *
	 * @return string
	 */
	public function add_hover_to_selectors( $selector ) {
	}
	/**
	 * Adds `:hover` in selector after `%%order_class%%`
	 * E.g: add_hover_to_order_class('%%order_class%%% .image') >>> '%%order_class%%%:hover .image'
	 *
	 * @param string $selector
	 *
	 * @return string
	 */
	public function add_hover_to_order_class( $selector ) {
	}
}
/**
 * Helper class that provides necessary functions for managing max height option
 *
 * Class ET_Builder_Module_Helper_Max_Height
 */
class ET_Builder_Module_Helper_Max_Height extends \ET_Builder_Module_Helper_Sizing {




	public function get_raw_field() {
	}
}
/**
 * Helper class that provides necessary functions for managing max width option
 *
 * Class ET_Builder_Module_Helper_Max_Width
 */
class ET_Builder_Module_Helper_Max_Width extends \ET_Builder_Module_Helper_Sizing {




	public function get_raw_field() {
	}
}
/**
 * Class ET_Builder_Module_Helper_Media.
 *
 * Module helpers for media (image).
 *
 * @since 4.6.4
 */
class ET_Builder_Module_Helper_Media {




	/**
	 * Return instance of current class.
	 *
	 * @return ET_Builder_Module_Helper_Media
	 */
	public static function instance() {
	}
	/**
	 * Get image attachment class.
	 *
	 * - wp-image-{$id}
	 *   Add `wp-image-{$id}` class to let `wp_filter_content_tags()` fill in missing
	 *   height and width attributes on the image. Those attributes are required to add
	 *   loading "lazy" attribute on the image. WP doesn't have specific method to only
	 *   generate this class. It's included in get_image_tag() to generate image tags.
	 *
	 * @since 4.6.4
	 *
	 * @param array   $attrs         All module attributes.
	 * @param string  $source_key    Key of image source.
	 * @param integer $attachment_id Attachment ID. Optional.
	 *
	 * @return string
	 */
	public function get_image_attachment_class( $attrs, $source_key, $attachment_id = 0 ) {
	}
}
/**
 * Helper class that provides necessary functions for managing max height option
 *
 * Class ET_Builder_Module_Helper_Min_Height
 */
class ET_Builder_Module_Helper_Min_Height extends \ET_Builder_Module_Helper_Sizing {




	public function get_raw_field() {
	}
}
class ET_Builder_Module_Helper_Multi_Value {




	private static $instance;
	public static function instance() {
	}
	public function get_delimiter() {
	}
	/**
	 * Parses an array and transforms it in an valid multi value array
	 *
	 * @param array $value
	 * @param int   $elements
	 *
	 * @return array
	 */
	public function parse( array $value, $elements = \null ) {
	}
	/**
	 * Splits the multi value string in to an array of primitive values
	 * User can provide also the required number of elements that value must have
	 * In case the array original length will be larger then the required elements number
	 * the array will be cut from head to tail
	 * In cas the array length will be shorter, the array tail will be filled with empty strings `''`,
	 * till array length will match the requested elements number
	 *
	 * @param string $value
	 * @param int    $elements
	 *
	 * @return array
	 */
	public function split( $value, $elements = \null ) {
	}
	/**
	 * Takes an array and converts it to a valid multi value
	 * Provide the `elements` parameter to get the result string of the necessary length
	 *
	 * @param array $value
	 * @param int   $elements
	 *
	 * @return string
	 */
	public function to_value( array $value, $elements = \null ) {
	}
	/**
	 * Check if the multi value is not empty.
	 * A multi value is empty when all sub values are empty strings
	 *
	 * @param string $value
	 *
	 * @return bool
	 */
	public function has_value( $value ) {
	}
	/**
	 * Merges two multi values in to one.
	 * If value1 nth element is empty, value2 nth element will be used
	 *
	 * @param $value_1
	 * @param $value_2
	 * @param int     $elements
	 *
	 * @return string
	 */
	public function merge( $value_1, $value_2, $elements = \null ) {
	}
	/**
	 * Sets a value at specific position in provided multiValue.
	 *
	 * @param int    $key
	 * @param string $value
	 * @param string $motion_value
	 * @param int    $elements
	 *
	 * @return string
	 */
	public function set( $key, $value, $motion_value, $elements = \null ) {
	}
}
/**
 * Multi View Options helper class
 *
 * Class ET_Builder_Module_Helper_MultiViewOptions
 *
 * @since 3.27.1
 */
class ET_Builder_Module_Helper_MultiViewOptions {




	/**
	 * HTML data attribute key.
	 *
	 * @since 3.27.1
	 *
	 * @var string
	 */
	protected $data_attr_key = 'data-et-multi-view';
	/**
	 * Find and replace data regex pattern.
	 *
	 * @since 3.27.1
	 *
	 * @var string
	 */
	protected $pattern = '/\\{\\{(.+)\\}\\}/';
	/**
	 * Module Object.
	 *
	 * @since 4.10.0
	 *
	 * @var ET_Builder_Element
	 */
	protected $module;
	/**
	 * Module props data.
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	protected $props = array();
	/**
	 * Module slug.
	 *
	 * @since 3.27.1
	 *
	 * @var string
	 */
	protected $slug = '';
	/**
	 * Custom props data.
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	protected $custom_props = array();
	/**
	 * Conditional values data.
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	protected $conditional_values = array();
	/**
	 * Default values data.
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	protected $default_values = array();
	/**
	 * Cached values data.
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	protected $cached_values = array();
	/**
	 * Set list of props keys that need to inherit the value
	 *
	 * @since 4.0.2
	 *
	 * @var array
	 */
	protected $inherited_values = array();
	/**
	 * Hover enabled option name suffix
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	public static $hover_enabled_suffix = '__hover_enabled';
	/**
	 * Responsive enabled option name suffix
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	public static $responsive_enabled_suffix = '_last_edited';
	/**
	 * Hover option name suffix
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	public static $hover_suffix = '__hover';
	/**
	 * Tablet option name suffix
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	public static $tablet_suffix = '_tablet';
	/**
	 * Phone option name suffix
	 *
	 * @since 3.27.1
	 *
	 * @var array
	 */
	public static $phone_suffix = '_phone';
	/**
	 * List of props that inherited from previous breakpoint
	 *
	 * @var array
	 */
	public $inherited_props;
	/**
	 * Class constructor
	 *
	 * @since 3.27.1
	 *
	 * @param ET_Builder_Element $module             Module object.
	 * @param array              $custom_props       Defined custom props data.
	 * @param array              $conditional_values Defined options conditional values.
	 * @param array              $default_values     Defined options default values.
	 */
	public function __construct( $module = \false, $custom_props = array(), $conditional_values = array(), $default_values = array() ) {
	}
	/**
	 * Get props name by mode
	 *
	 * @since 3.27.1
	 *
	 * @param string $name Props name.
	 * @param string $mode Selected view mode.
	 *
	 * @return string
	 */
	public static function get_name_by_mode( $name, $mode ) {
	}
	/**
	 * Get regex field name suffix
	 *
	 * @since 4.0.1
	 *
	 * @return string
	 */
	public static function get_regex_suffix() {
	}
	/**
	 * Get props name base
	 *
	 * @since 4.0.1
	 *
	 * @param string $name Props name.
	 *
	 * @return string
	 */
	public static function get_name_base( $name ) {
	}
	/**
	 * Get view modes
	 *
	 * @since 3.27.1
	 *
	 * @return array
	 */
	public static function get_modes() {
	}
	/**
	 * Check if mode is enabled
	 *
	 * @since 3.27.1
	 *
	 * @param string $name Props name.
	 * @param string $mode Selected view mode.
	 *
	 * @return bool
	 */
	public function mode_is_enabled( $name, $mode ) {
	}
	/**
	 * Get responsive options filed suffixes
	 *
	 * @since 3.27.1
	 *
	 * @param bool $include_enabled_suffix Whether to include the responsive enabled suffix or not.
	 *
	 * @return array
	 */
	public static function responsive_suffixes( $include_enabled_suffix = \true ) {
	}
	/**
	 * Get hover options filed suffixes
	 *
	 * @since 3.27.1
	 *
	 * @param bool $include_enabled_suffix Whether to include the hover enabled suffix or not.
	 *
	 * @return array
	 */
	public static function hover_suffixes( $include_enabled_suffix = \true ) {
	}
	/**
	 * Check whether an option is responsive enabled.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name options name.
	 *
	 * @return bool
	 */
	public function responsive_is_enabled( $name ) {
	}
	/**
	 * Check whether an option is hover enabled.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name options name.
	 *
	 * @return bool
	 */
	public function hover_is_enabled( $name ) {
	}
	/**
	 * Get module props desktop mode value.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name          Props name.
	 * @param mixed  $default_value Default value as fallback data.
	 *
	 * @return mixed Value of selected mode.
	 */
	public function get_value_desktop( $name, $default_value = \null ) {
	}
	/**
	 * Get module props tablet mode value.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name          Props name.
	 * @param mixed  $default_value Default value as fallback data.
	 *
	 * @return mixed Value of selected mode.
	 */
	public function get_value_tablet( $name, $default_value = \null ) {
	}
	/**
	 * Get module props phone mode value.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name          Props name.
	 * @param mixed  $default_value Default value as fallback data.
	 *
	 * @return mixed Value of selected mode.
	 */
	public function get_value_phone( $name, $default_value = \null ) {
	}
	/**
	 * Get module props hover mode value.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name          Props name.
	 * @param mixed  $default_value Default value as fallback data.
	 *
	 * @return mixed Value of selected mode.
	 */
	public function get_value_hover( $name, $default_value = \null ) {
	}
	/**
	 * Get module props value.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name          Props name.
	 * @param string $mode          Select only specified modes: desktop, tablet, phone, hover.
	 * @param mixed  $default_value Default value as fallback data.
	 *
	 * @return mixed Value of selected mode.
	 */
	public function get_value( $name, $mode = 'desktop', $default_value = \null ) {
	}
	/**
	 * Get module props values.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name     Props name.
	 * @param bool   $distinct Wether to distinct the values or not.
	 *
	 * @return array Values of all view modes: desktop, tablet, phone, hover.
	 */
	public function get_values( $name, $distinct = \true ) {
	}
	/**
	 * Compare values
	 *
	 * @since 3.27.1
	 *
	 * @param string $value         Source value.
	 * @param [type] $value_compare Target value to compare.
	 *
	 * @return bool
	 */
	protected static function compare_value( $value, $value_compare = \null ) {
	}
	/**
	 * Check if module props has value in any of data breakpoint: desktop, tablet, phone, hover.
	 *
	 * @since 3.27.1
	 *
	 * @param string          $name          Field key.
	 * @param string|callable $value_compare The value to compare.
	 * @param string          $selected_mode Selected view mode.
	 * @param bool            $inherit       Should the value inherited from previous breakpoint.
	 *
	 * @return bool
	 */
	public function has_value( $name, $value_compare = \null, $selected_mode = \false, $inherit = \false ) {
	}
	/**
	 * Get props inherit value
	 *
	 * @since 3.27.1
	 *
	 * @param string $name          Field key.
	 * @param string $selected_mode Selected view mode.
	 *
	 * @return mixed
	 */
	public function get_inherit_value( $name, $selected_mode ) {
	}
	/**
	 * Get module props conditional value.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name         Props name.
	 * @param string $mode         Select only specified modes: desktop, tablet, phone, hover.
	 * @param mixed  $conditionals Extra data to compare.
	 *
	 * @return mixed Calculated conditional value. Will return null if not match any comparison.
	 */
	public function get_conditional_value( $name, $mode = 'desktop', $conditionals = array() ) {
	}
	/**
	 * Set module object.
	 *
	 * @since 3.27.1
	 *
	 * @param ET_Builder_Element $module Module object.
	 */
	public function set_module( $module ) {
	}
	/**
	 * Set props data.
	 *
	 * @since 4.0
	 *
	 * @param string $name  Props key.
	 * @param array  $value Props value.
	 */
	public function set_props( $name, $value ) {
	}
	/**
	 * Clear cached values
	 *
	 * @since 4.0
	 *
	 * @param string $name Props key.
	 *
	 * @return void
	 */
	public function clear_cached_values( $name ) {
	}
	/**
	 * Set list props that inherited.
	 *
	 * @since 4.0.2
	 */
	public function set_inherited_props() {
	}
	/**
	 * Check if props value suppose to be inherited
	 *
	 * @since 4.0.2
	 *
	 * @param string $name_by_mode Full name of the props.
	 * @param string $value        Props value.
	 *
	 * @return boolean
	 */
	public function is_props_inherited( $name_by_mode, $value ) {
	}
	/**
	 * Set option default value.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name          Data key.
	 * @param array  $default_value Default value.
	 */
	public function set_default_value( $name, $default_value ) {
	}
	/**
	 * Set options default values.
	 *
	 * @since 3.27.1
	 *
	 * @param array $default_values Default values.
	 */
	public function set_default_values( $default_values ) {
	}
	/**
	 * Set option conditional value.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name         Prop key.
	 * @param string $value        Custom conditional value.
	 * @param array  $props        Key value pair of props list to compare.
	 * @param array  $conditionals Conditionals parameter go compare to calculate the value.
	 */
	public function set_conditional_value( $name, $value, $props, $conditionals = array() ) {
	}
	/**
	 * Set option conditional values.
	 *
	 * @since 3.27.1
	 *
	 * @param array $conditional_values Default values.
	 */
	public function set_conditional_values( $conditional_values ) {
	}
	/**
	 * Set custom variable data.
	 *
	 * @since 3.27.1
	 *
	 * @param string $name   Data key.
	 * @param array  $values The values to inject.
	 */
	public function set_custom_prop( $name, $values ) {
	}
	/**
	 * Set custom variables data.
	 *
	 * @since 3.27.1
	 *
	 * @param array $custom_props Defined custom props data.
	 */
	public function set_custom_props( $custom_props ) {
	}
	/**
	 * Render the multi view HTML element
	 *
	 *      Example:
	 *
	 *      $multi_view->render_element( array(
	 *          'tag'     => 'div',
	 *          'content' => 'Hello {{name}}', // Assume name props value is John
	 *      ) );
	 *
	 *      - Will generate output:
	 *        <div>Hello John</div>
	 *
	 *      $multi_view->render_element( array(
	 *          'tag'     => 'p',
	 *          'content' => 'get_the_title', // Assume current page title is Hello World
	 *      ) );
	 *
	 *      - Will generate output:
	 *        <p>Hello World</p>
	 *
	 *      $multi_view->render_element( array(
	 *          'tag'     => 'h3',
	 *          'content' => get_the_title(), // Assume current page title is Hello World
	 *      ) );
	 *
	 *      - Will generate output:
	 *        <h3>Hello World</h3>
	 *
	 *      $multi_view->render_element( array(
	 *          'tag'     => 'img',
	 *          'attrs'   => array(
	 *              'src'    => '{{image_url}}, // Assume image_url props value is test.jpg
	 *              'width'  => '{{image_width}}px', // Assume image_width props value is 50
	 *              'height' => '{{image_height}}px', // Assume image_height props value is 100
	 *          ),
	 *      ) );
	 *
	 *      - Will generate output:
	 *        <img src="test.jpg" width="50px" height="100px" />
	 *
	 *      $multi_view->render_element( array(
	 *          'tag'     => 'div',
	 *          'content' => 'Lorem Ipsum',
	 *          'styles'  => array(
	 *              'background-image' => 'url({{image_url}})', // Assume image_url props value is test.jpg
	 *              'font-size'        => '{{title_font_size}}px', // Assume title_font_size props value is 20
	 *          ),
	 *      ) );
	 *
	 *      - Will generate output:
	 *        <div style="background-image: url(test.jpg); font-size: 20px;">Lorem Ipsum</div>
	 *
	 *      $multi_view->render_element( array(
	 *          'tag'     => 'div',
	 *          'content' => 'Lorem Ipsum',
	 *          'classes' => array(
	 *              'et_pb_slider_no_arrows' => array
	 *                 'show_arrows' => 'off', // Assume show_arrows props value is off
	 *              ),
	 *              'et_pb_slider_carousel'  => array
	 *                  'show_thumbnails' => 'on', // Assume show_thumbnails props value is on
	 *              ),
	 *          ),
	 *      ) );
	 *
	 *      - Will generate output:
	 *        <div class=et_pb_slider_no_arrows et_pb_slider_carousel">Lorem Ipsum</div>
	 *
	 *      $multi_view->render_element( array(
	 *          'tag'     => 'div',
	 *          'content' => 'Lorem Ipsum',
	 *          'visibility' => array(
	 *              'show_arrows'     => 'on',
	 *              'show_thumbnails' => 'off',
	 *          ),
	 *      ) );
	 *
	 *      - Will generate output that will visible when show_arrows is on and show_thumbnails is off:
	 *        <div>Lorem Ipsum</div>
	 *
	 * @param array   $contexts {
	 *                          Data contexts.
	 *
	 * @type string          $tag                HTML element tag name. Example: div, img, p. Default is span.
	 *
	 * @type string          $content            Param that will be used to populate the content data.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $attrs              Param that will be used to populate the attributes data.
	 *                                               Associative array key used as attribute name and the value will be used as attribute value.
	 *                                               Special case for 'class' and 'style' attribute name will only generating output for desktop mode.
	 *                                               Use 'styles' or 'classes' context for multi modes usage.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $styles             Param that will be used to populate the inline style attributes data.
	 *                                               Associative array key used as style property name and the value will be used as inline style property value.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $classes            Param that will be used to populate the class data.
	 *                                               Associative array key used as class name and the value is associative array as the conditional check compared with prop value.
	 *                                               The conditional check array key used as the prop name and the value used as the conditional check compared with prop value.
	 *                                               The class will be added if all conditional check is true and will be removed if any of conditional check is false.
	 *
	 * @type array           $visibility         Param that will be used to populate the visibility data.
	 *                                               Associative array key used as the prop name and the value used as the conditional check compared with prop value.
	 *                                               The element will visible if all conditional check is true and will be hidden if any of conditional check is false.
	 *
	 * @type string          $target             HTML element selector target which the element will be modified. Default is empty string.
	 *                                               Dynamic module order class wildcard string is accepted: %%order_class%%
	 *
	 * @type string          $hover_selector     HTML element selector which trigger the hover event. Default is empty string.
	 *                                               Dynamic module order class wildcard string is accepted: %%order_class%%
	 *
	 * @type string          $render_slug        Render slug that will be used to calculate the module order class. Default is current module slug.
	 *
	 * @type array           $custom_props       Defined custom props data.
	 *
	 * @type array           $conditional_values Defined data sources for data toggle.
	 *
	 * @type array           $required           List of required props key to render the element.
	 *                                               Will render the element if all of the props required keys is fulfilled.
	 *                                               Default is empty array it will try to gather any props name set in the 'content' context.
	 *                                               Set to false to disable conditional check.
	 *
	 * @type  array           $required_some      List of props key need to be fulfilled to render the element.
	 *                                               Will render the element if any one of the required props keys is fulfilled.
	 *                                               When defined, $required_some parameter will be prioritized over $required parameter.
	 * }
	 * @param boolean $echo     Whether to print the output instead returning it.
	 *
	 * @return string|void
	 *
	 * @since 3.27.1
	 */
	public function render_element( $contexts = array(), $echo = \false ) {
	}
	/**
	 * Get or render the multi content attribute.
	 *
	 * @param array $contexts       {
	 *                              Data
	 *                              contexts.
	 *
	 * @type string          $content            Param that will be used to populate the content data.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $attrs              Param that will be used to populate the attributes data.
	 *                                               Associative array key used as attribute name and the value will be used as attribute value.
	 *                                               Special case for 'class' and 'style' attribute name will only generating output for desktop mode.
	 *                                               Use 'styles' or 'classes' context for multi modes usage.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $styles             Param that will be used to populate the inline style attributes data.
	 *                                               Associative array key used as style property name and the value will be used as inline style property value.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $classes            Param that will be used to populate the class data.
	 *                                               Associative array key used as class name and the value is associative array as the conditional check compared with prop value.
	 *                                               The conditional check array key used as the prop name and the value used as the conditional check compared with prop value.
	 *                                               The class will be added if all conditional check is true and will be removed if any of conditional check is false.
	 *
	 * @type array           $visibility         Param that will be used to populate the visibility data.
	 *                                               Associative array key used as the prop name and the value used as the conditional check compared with prop value.
	 *                                               The element will visible if all conditional check is true and will be hidden if any of conditional check is false.
	 *
	 * @type string          $target             HTML element selector target which the element will be modified. Default is empty string.
	 *                                               Dynamic module order class wildcard string is accepted: %%order_class%%
	 *
	 * @type string          $hover_selector     HTML element selector which trigger the hover event. Default is empty string.
	 *                                               Dynamic module order class wildcard string is accepted: %%order_class%%
	 *
	 * @type string          $render_slug        Render slug that will be used to calculate the module order class. Default is current module slug.
	 *
	 * @type array           $custom_props       Defined custom props data.
	 *
	 * @type array           $conditional_values Defined data sources for data toggle.
	 *
	 * @type  array           $required           List of required props key to render the element.
	 *                                               Will returning empty string if any required props is empty.
	 *                                               Default is empty array it will try to gather any props name set in the 'content' context.
	 *                                               Set to false to disable conditional check.
	 * }
	 * @param bool  $echo           Whether to print the output instead returning it.
	 * @param array $populated_data Pre populated data in case just need to format the attributes output.
	 * @param bool  $as_array       Whether to return the output as array or string.
	 *
	 * @return string|void
	 *
	 * @since 3.27.1
	 */
	public function render_attrs( $contexts = array(), $echo = \false, $populated_data = \null, $as_array = \false ) {
	}
	/**
	 * Populate the multi view data.
	 *
	 * @param array $contexts {
	 *                        Data contexts.
	 *
	 * @type string          $content            Param that will be used to populate the content data.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $attrs              Param that will be used to populate the attributes data.
	 *                                               Associative array key used as attribute name and the value will be used as attribute value.
	 *                                               Special case for 'class' and 'style' attribute name will only generating output for desktop mode.
	 *                                               Use 'styles' or 'classes' context for multi modes usage.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $styles             Param that will be used to populate the inline style attributes data.
	 *                                               Associative array key used as style property name and the value will be used as inline style property value.
	 *                                               Use props name wrapped with 2 curly brackets within the value for find & replace wildcard: {{props_name}}
	 *
	 * @type array           $classes            Param that will be used to populate the class data.
	 *                                               Associative array key used as class name and the value is associative array as the conditional check compared with prop value.
	 *                                               The conditional check array key used as the prop name and the value used as the conditional check compared with prop value.
	 *                                               The class will be added if all conditional check is true and will be removed if any of conditional check is false.
	 *
	 * @type array           $visibility         Param that will be used to populate the visibility data.
	 *                                               Associative array key used as the prop name and the value used as the conditional check compared with prop value.
	 *                                               The element will visible if all conditional check is true and will be hidden if any of conditional check is false.
	 * }
	 *
	 * @return array
	 *
	 * @since 3.27.1
	 */
	public function populate_data( $contexts = array() ) {
	}
	/**
	 * Populate content data context.
	 *
	 * @since 3.27.1
	 *
	 * @param string $content Data contexts.
	 *
	 * @return array
	 */
	protected function populate_data__content( $content ) {
	}
	/**
	 * Populate attrs data context.
	 *
	 * @since 3.27.1
	 *
	 * @param array $attrs Data contexts.
	 *
	 * @return array
	 */
	protected function populate_data__attrs( $attrs ) {
	}
	/**
	 * Populate styles data context.
	 *
	 * @since 3.27.1
	 *
	 * @param array $styles Data contexts.
	 *
	 * @return array
	 */
	protected function populate_data__styles( $styles ) {
	}
	/**
	 * Populate classes data context.
	 *
	 * @since 3.27.1
	 *
	 * @param array $classes Data contexts.
	 *
	 * @return array
	 */
	protected function populate_data__classes( $classes ) {
	}
	/**
	 * Populate visibility data context.
	 *
	 * @since 3.27.1
	 *
	 * @param array $visibility Data contexts.
	 *
	 * @return array
	 */
	protected function populate_data__visibility( $visibility ) {
	}
	/**
	 * Props value filter.
	 *
	 * @since 3.27.1
	 *
	 * @param mixed $raw_value Props raw value.
	 * @param array $args      {
	 *                         Context
	 *                         data.
	 *
	 * @type string $context      Context param: content, attrs, visibility, classes.
	 * @type string $name         Module options props name.
	 * @type string $mode         Current data mode: desktop, hover, tablet, phone.
	 * @type string $attr_key     Attribute key for attrs context data. Example: src, class, etc.
	 * @type string $attr_sub_key Attribute sub key that available when passing attrs value as array such as styes. Example: padding-top, margin-bottom, etc.
	 * }
	 *
	 * @return mixed|WP_Error return WP_Error to skip the data.
	 */
	protected function filter_value( $raw_value, $args = array() ) {
	}
	/**
	 * Filter populated multi view data
	 *
	 * The use case of this method is to manipulate populated data such as injecting srcset attributes.
	 *
	 * @since 3.27.1
	 *
	 * @param array $data All populated raw data. The value value passed to this method has been processed by filter_value method.
	 *
	 * @return array
	 */
	protected function filter_data( $data ) {
	}
	/**
	 * Normalize values to inject value for all modes
	 *
	 * @since 3.27.1
	 *
	 * @param array $values Raw values.
	 *
	 * @return array Normalized values for all modes.
	 */
	protected function normalize_values( $values = array() ) {
	}
	/**
	 * Distinct values
	 *
	 * @since 3.27.1
	 *
	 * @param array $values Raw values.
	 *
	 * @return array Filtered out for mode that has duplicate values.
	 */
	public function distinct_values( $values ) {
	}
	/**
	 * Check wether self closing tag or not
	 *
	 * @since 3.27.1?
	 *
	 * @param string $tag Element tag.
	 *
	 * @return boolean
	 */
	protected function is_self_closing_tag( $tag ) {
	}
	/**
	 * Check if required props is fulfilled
	 *
	 * @since 3.27.1?
	 *
	 * @param string $contexts Element contexts data.
	 *
	 * @return bool
	 */
	protected function is_required_props_fulfilled( $contexts ) {
	}
	/**
	 * Sort conditionals values list by number of props and conditionals params.
	 *
	 * @since 3.27.1
	 *
	 * @param array $a Array data to compare.
	 * @param array $b Array data to compare.
	 *
	 * @return array
	 */
	public function sort_conditional_values( $a, $b ) {
	}
	/**
	 * Gets a prop from Module.
	 *
	 * @since 4.10.0
	 *
	 * @param string $name    Prop name.
	 * @param string $default Default value. Defaults to ''.
	 *
	 * @return string
	 */
	public function get_prop( $name, $default = '' ) {
	}
	/**
	 * Prepares the modules props to be consumed by this helper.
	 *
	 * @since 4.10.0
	 *
	 * @return array
	 */
	public function get_prepped_props() {
	}
	/**
	 * Gets the Module props.
	 *
	 * The Module is restricted in scope. Hence we use this getter.
	 *
	 * @since 3.29
	 *
	 * @used-by ET_Builder_Module_Woocommerce_Description::multi_view_filter_value()
	 *
	 * @return array
	 */
	public function get_module_props() {
	}
}
/**
 * Option Templates helper methods.
 *
 * @since 3.28
 *
 * Class ET_Builder_Module_Helper_OptionTemplate
 */
class ET_Builder_Module_Helper_OptionTemplate {




	private $map            = array();
	private $templates      = array();
	private $data           = array();
	private $cache          = array();
	private $tab_slug_map   = array();
	public $template_prefix = '%t';
	protected static $_     = \null;
	public static function instance() {
	}
	private function __construct() {
	}
	private function uniq( $prefix, $content ) {
	}
	/**
	 * Determine whether option template is enabled on current request or not
	 *
	 * @since 3.28
	 *
	 * @return bool
	 */
	public function is_enabled() {
	}
	/**
	 * Determine whether given field name is option template field based on its first two characters
	 *
	 * @since 3.28
	 *
	 * @return bool
	 */
	public function is_option_template_field( $field_name = '' ) {
	}
	public function has( $key ) {
	}
	public function add( $key, $template ) {
	}
	public function create( $key, $config, $return_template_id = \false ) {
	}
	/**
	 * Create placeholders for template's params
	 *
	 * @return string[]
	 */
	public function placeholders( $config, $idx = 1, $path = array() ) {
	}
	/**
	 * Get module's data
	 *
	 * @return array[]
	 */
	public function all() {
	}
	/**
	 * Get templates
	 *
	 * @since 3.28
	 *
	 * @return array
	 */
	public function templates() {
	}
	/**
	 * Set `$this->data` property from external source (ie: static field definition cache).
	 *
	 * @since 3.28
	 *
	 * @param array $cached_data
	 */
	public function set_data( $cached_data = array() ) {
	}
	/**
	 * Set `$this->templates` property from external source (ie: static field definition cache).
	 *
	 * @since 3.28
	 *
	 * @param array $cached_template
	 */
	public function set_templates( $cached_templates = array() ) {
	}
	/**
	 * Set `$this->tab_slug_map` from external source (ie: static field definition cache).
	 *
	 * @since 3.29
	 *
	 * @param array $cached_tab_slug_map
	 */
	public function set_tab_slug_map( $cached_tab_slug_map = array() ) {
	}
	/**
	 * Get template data based on given template id
	 *
	 * @since 3.28
	 *
	 * @param string $template_id
	 *
	 * @return array
	 */
	public function get_data( $template_id = '' ) {
	}
	/**
	 * Get template based on given template type
	 *
	 * @since 3.28
	 *
	 * @param string $type
	 *
	 * @return array
	 */
	public function get_template( $type = '' ) {
	}
	/**
	 * Get hashed cache key based on params given
	 *
	 * @since 3.28
	 *
	 * @param mixed $params
	 *
	 * @return string
	 */
	public function get_cache_key( $params ) {
	}
	/**
	 * Get cached value
	 * Return null if no cached value found
	 *
	 * @since 3.28
	 *
	 * @param string $name
	 * @param string $key
	 *
	 * @return mixed
	 */
	public function get_cache( $name, $key ) {
	}
	/**
	 * Set value to be cached
	 *
	 * @since 3.28
	 *
	 * @param string $name
	 * @param string $key
	 * @param mixed  $value
	 *
	 * @return void
	 */
	public function set_cache( $name, $key, $value ) {
	}
	/**
	 * Get placeholder of given template
	 *
	 * @since 3.28
	 *
	 * @param string $template
	 *
	 * @return array|bool
	 */
	public function get_template_placeholder( $template ) {
	}
	/**
	 * Get tab slug maps
	 *
	 * @since 3.29
	 *
	 * @return array
	 */
	public function get_tab_slug_map() {
	}
	public function is_template_inside_tab( $tab_name, $template_type ) {
	}
	public function rebuild_string_placeholder( $template, $data = array(), $settings = array() ) {
	}
	public function rebuild_preset_placeholder( $template, $data = array(), $settings = array() ) {
	}
	public function rebuild_composite_structure_placeholder( $template_type, $template, $data = array() ) {
	}
	public function rebuild_field_attr_value( $attr_name, $attr_value, $template_data ) {
	}
	public function rebuild_field_template( $template_id, $parent_template_id = \false ) {
	}
	public function rebuild_default_props( $template_id ) {
	}
}
/**
 * Overflow helper methods
 *
 * Class ET_Builder_Module_Helper_Overflow
 */
class ET_Builder_Module_Helper_Overflow {




	const OVERFLOW_DEFAULT = '';
	const OVERFLOW_VISIBLE = 'visible';
	const OVERFLOW_HIDDEN  = 'hidden';
	const OVERFLOW_SCROLL  = 'scroll';
	const OVERFLOW_AUTO    = 'auto';
	private static $instance;
	public static function get() {
	}
	/**
	 * Returns overflow settings X axis field
	 *
	 * @param string $prefix
	 *
	 * @return string
	 */
	public function get_field_x( $prefix = '' ) {
	}
	/**
	 * Returns overflow settings Y axis field
	 *
	 * @param string $prefix
	 *
	 * @return string
	 */
	public function get_field_y( $prefix = '' ) {
	}
	/**
	 * Return overflow X axis value
	 *
	 * @param array  $props
	 * @param mixed  $default
	 * @param string $prefix
	 *
	 * @return string
	 */
	public function get_value_x( $props, $default = \null, $prefix = '' ) {
	}
	/**
	 * Return overflow Y axis value
	 *
	 * @param array  $props
	 * @param mixed  $default
	 * @param string $prefix
	 *
	 * @return string
	 */
	public function get_value_y( $props, $default = \null, $prefix = '' ) {
	}
	/**
	 * Returns overflow valid values
	 *
	 * @return array
	 */
	public function get_overflow_values() {
	}
}
/**
 * Overlay helper methods.
 *
 * Class ET_Builder_Module_Helper_Overlay
 */
class ET_Builder_Module_Helper_Overlay {




	/**
	 * Get an overlay html tag's attributes.
	 *
	 * @since 3.29
	 *
	 * @param array $args
	 *
	 * @return array
	 */
	public static function get_attributes( $args ) {
	}
	/**
	 * Render an overlay html tag's attributes.
	 *
	 * @since 3.29
	 *
	 * @param array $args
	 *
	 * @return string
	 */
	public static function render_attributes( $args ) {
	}
	/**
	 * Render an overlay html tag.
	 *
	 * @since 3.29
	 *
	 * @param array $args
	 *
	 * @return string
	 */
	public static function render( $args ) {
	}
}
/**
 * Responsive options helper methods.
 *
 * @since 3.23 Add more helper functions. Originally, this class is introduced on Options Harmony v2.
 * @since 3.22
 *
 * Class ET_Builder_Module_Helper_ResponsiveOptions
 */
class ET_Builder_Module_Helper_ResponsiveOptions {




	const DESKTOP = 'desktop';
	const TABLET  = 'tablet';
	const PHONE   = 'phone';
	public static function instance() {
	}
	private function __construct() {
	}
	/**
	 * Get value from an array based on key. However, we can force to return default value if key
	 * doesn't exist or value is empty.
	 *
	 * @since 3.23
	 *
	 * @param  array  $list             Array of values.
	 * @param  string $key              Target key.
	 * @param  mixed  $default          Default value, return if the target doesn't exist.
	 * @param  mixed  $default_on_empty Force to return default if value is empty.
	 * @return mixed                    Value.
	 */
	private function get( $list, $key, $default = \null, $default_on_empty = \false ) {
	}
	/**
	 * Check if responsive settings is enabled or not on the option.
	 *
	 * Mostly used by FE.
	 *
	 * @since 3.23
	 *
	 * @param  array  $attrs All module attributes.
	 * @param  string $name  Option name.
	 * @return boolean        Responsive settings status.
	 */
	public function is_responsive_enabled( $attrs, $name ) {
	}
	/**
	 * Check if responsive settings are enabled on one of the options list.
	 *
	 * @since 3.23
	 *
	 * @param  array $attrs All module attributes.
	 * @param  array $list  Options list.
	 * @return boolean      Responsive styles status.
	 */
	public function is_any_responsive_enabled( $attrs, $list ) {
	}
	/**
	 * Get responsive status based one last edited value.
	 *
	 * Parsed *_last_edited value and determine wheter the passed string means it has responsive value
	 * or not. *_last_edited holds two values (responsive status and last opened tabs) in the following
	 * format: status|last_opened_tab.
	 *
	 * Copy of et_pb_get_responsive_status() with a little modified and to organize the code.
	 *
	 * @param  string $last_edited Last edited field value.
	 * @return bool                Responsive field status.
	 */
	public function get_responsive_status( $last_edited ) {
	}
	/**
	 * Generate video background markup.
	 *
	 * When background support responsive settings, the default callback will be replaced with
	 * get_video_background() function to retrieve all video values for desktop, hover, tablet,
	 * and phone.
	 *
	 * @since 3.23
	 *
	 * @param  array $args             Background values.
	 * @param  array $conditional_tags Conditional tags.
	 * @param  array $current_page     Current page info.
	 * @return mixed                    Mixed background content generated as video markup.
	 */
	public static function get_video_background( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Returns the field original name by removing the `_tablet` or `_phone` suffix if it exists.
	 *
	 * Only remove tablet/phone string of the last setting name. Doesn't work for other format.
	 *
	 * @since 3.23
	 *
	 * @param  string $name Setting name.
	 * @return string      Base setting name.
	 */
	public function get_field_base_name( $name ) {
	}
	/**
	 * Returns the field responsive name by adding the `_tablet` or `_phone` suffix if it exists.
	 *
	 * @since 3.27.4
	 *
	 * @param  string $name   Setting name.
	 * @param  string $device Device name.
	 * @return string         Field setting name.
	 */
	public function get_field_name( $name, $device = 'desktop' ) {
	}
	/**
	 * Returns the device name by removing the `name` prefix. If the result is one of tablet or phone,
	 * return it. But, if it's empty, return desktop.
	 *
	 * @since 3.23
	 *
	 * @param  string $name Setting name.
	 * @return string      Device name.
	 */
	public function get_device_name( $name ) {
	}
	/**
	 * Get responsive value based on field base name and device.
	 *
	 * NOTE: Function get_single_value() is different with get_any_value(). It will return only
	 *       current field value without checking the previous device value.
	 *
	 * For example: We have Title Text Font Size -> desktop 30px, tablet 10px, phone 10px. Fetch
	 *              the value for phone, it will return pure 10px even the value is same with tablet.
	 *              We have Subtitle Text Font Size -> desktop 20px, tablet 15px, phone ''. Fetch
	 *              the value for phone, it will return pure '' or default even the value is empty.
	 *
	 * To get tablet or phone value:
	 * 1. You can pass only field base name and device name as the 4th argument. The parameters
	 *    structure it's made like that to make it similar with other get* method we already have.
	 *    For example: get_single_value( $this->props, 'title_text_font_size', '', 'tablet' ).
	 *
	 * 2. Or you can pass the actual field name with device. If the field name is already contains
	 *    _tablet and _phone, don't pass device parameter because it will be added as suffix.
	 *    For example: get_single_value( $this->props, 'title_text_font_size_tablet', '' ).
	 *
	 * @since 3.23
	 *
	 * @param  array  $attrs         All module attributes.
	 * @param  string $name          Option name.
	 * @param  array  $default_value Default value.
	 * @param  string $device        Current device name.
	 * @return mixed                 Current option value based on active device.
	 */
	public function get_single_value( $attrs, $name = '', $default_value = '', $device = 'desktop' ) {
	}
	/**
	 * Get current active device value from attributes.
	 *
	 * NOTE: Function get_any_value() is different with get_value(). It also compare the value
	 *       with the previous device value to avoid duplication. Or you can also force to return
	 *       either current or previous default value if needed.
	 *
	 * For example: We have Title Text Font Size -> desktop 30px, tablet 30px, phone 10px. When
	 *              we fetch the value for tablet, it will return pure empty string ('') because
	 *              tablet value is equal with desktop value.
	 *
	 *              We have Title Text Font Size -> desktop 30px, tablet '', phone ''. When
	 *              we fetch the value for phone and force it to return any value, it will
	 *              return 30px because phone and tablet value is empty and the function will
	 *              look up to tablet or even desktop value.
	 *
	 * To get tablet or phone value:
	 * 1. You can pass only field base name and device name as the 4th argument. The parameters
	 *    structure it's made like that to make it similar with other get* method we already have.
	 *    For example: get_any_value( $this->props, 'title_text_font_size', '', 'tablet' ).
	 *
	 * 2. Or you can pass the actual field name with device. If the field name is already contains
	 *    _tablet and _phone, don't pass device parameter because it will be added as suffix.
	 *    For example: get_any_value( $this->props, 'title_text_font_size_tablet', '' ).
	 *
	 * 3. You can also force to return any value by passing true on the 5th argument. In some cases
	 *    we need this to fill missing tablet/phone value with desktop value.
	 *
	 * @since 3.23
	 *
	 * @param  array  $attrs         All module attributes.
	 * @param  string $name          Option name.
	 * @param  array  $default_value Default value.
	 * @param  bool   $force_return  Force to return any value.
	 * @param  string $device        Current device name.
	 * @return mixed                 Current option value based on active device.
	 */
	public function get_any_value( $attrs, $name = '', $default_value = '', $force_return = \false, $device = 'desktop' ) {
	}
	/**
	 * Get property's values for requested device.
	 *
	 * This function is added to summarize how we fetch desktop/hover/tablet/phone value. This
	 * function still uses get_any_value to get current device values.
	 *
	 * @since 3.23
	 *
	 * @param array   $attrs         List of all attributes and values.
	 * @param string  $name          Property name.
	 * @param mixed   $default_value Default value.
	 * @param string  $device        Device name.
	 * @param boolean $force_return  Force to return any values found.
	 *
	 * @return array Pair of devices and the values.
	 */
	public function get_property_value( $attrs, $name, $default_value = '', $device = 'desktop', $force_return = \false ) {
	}
	/**
	 * Get all properties values for all devices.
	 *
	 * This function is added to summarize how we fetch desktop/hover, tablet, and phone values. This
	 * function still use get_any_value to get current device values.
	 *
	 * @since 3.23
	 *
	 * @param array   $attrs         List of all attributes and values.
	 * @param string  $name          Property name.
	 * @param mixed   $default_value Default value.
	 * @param boolean $force_return  Force to return any values found.
	 *
	 * @return array Pair of devices and the values.
	 */
	public function get_property_values( $attrs, $name, $default_value = '', $force_return = \false ) {
	}
	/**
	 * Get property value after checking whether it uses responsive or not
	 *
	 * If responsive is used, automatically return array of all devices value.
	 * If responsive is not used, return string of desktop value
	 *
	 * @since 4.6.0
	 *
	 * @param array   $attrs         List of all attributes and values.
	 * @param string  $name          Property name.
	 * @param mixed   $default_value Default value.
	 * @param boolean $force_return  Force to return any values found.
	 *
	 * @return string|array String if not responsive, Pair of devices and the values if responsive.
	 */
	public function get_checked_property_value( $attrs, $name, $default_value = '', $force_return = \false ) {
	}
	/**
	 * Get composite property's value for requested device.
	 *
	 * This function is added to summarize how we fetch desktop/hover/tablet/phone value. This
	 * function still uses get_any_value to get current device values.
	 *
	 * @since 3.27.4
	 *
	 * @param array   $attrs          List of all attributes and values.
	 * @param string  $composite_name Composite property name.
	 * @param string  $name           Property name.
	 * @param mixed   $default_value  Default value.
	 * @param string  $device         Device name.
	 * @param boolean $force_return   Force to return any values found.
	 *
	 * @return array Pair of devices and the values.
	 */
	public function get_composite_property_value( $attrs, $composite_name, $name, $default_value = '', $device = 'desktop', $force_return = \false ) {
	}
	/**
	 * Get all composite properties values for all devices.
	 *
	 * This function is added to summarize how we fetch desktop/hover, tablet, and phone values. This
	 * function still use get_any_value to get current device values.
	 *
	 * @since 3.27.4
	 *
	 * @param array   $attrs          List of all attributes and values.
	 * @param string  $composite_name Composite property name.
	 * @param string  $name           Property name.
	 * @param mixed   $default_value  Default value.
	 * @param boolean $force_return   Force to return any values found.
	 *
	 * @return array Pair of devices and the values.
	 */
	public function get_composite_property_values( $attrs, $composite_name, $name, $default_value = '', $force_return = \false ) {
	}
	/**
	 * Get multiple attributes value from current active device.
	 *
	 * Basically, this function is combination of:
	 * - Get any value of attribute
	 * - Check attribute responsive status for tablet/phone
	 * - Only send non empty attributes, except you force to return any given value
	 * - Doing all of the process above for more than one fields
	 *
	 * @since 3.23
	 *
	 * @param  array  $attrs        All module attributes.
	 * @param  string $list         List of options name. Name should be field base name.
	 * @param  bool   $force_return Force to return any value.
	 * @param  string $device       Current device name.
	 * @return array                All option values.
	 */
	public function get_any_responsive_values( $attrs, $list, $force_return = \false, $device = 'desktop' ) {
	}
	/**
	 * Get default value of active device. Mechanism:
	 *
	 * - Desktop => Return default value.
	 * - Tablet  => Return desktop value or default value.
	 * - Phone   => Return tablet value or desktop value or default value.
	 *
	 * @since 3.23
	 *
	 * @param  array  $attrs         All module attributes.
	 * @param  string $name          Option name.
	 * @param  array  $default_value All module advanced defaults.
	 * @return mixed                 Previous option value based on active device.
	 */
	public function get_default_value( $attrs, $name = '', $default_value = '' ) {
	}
	/**
	 * Returns responsive modes list from largest to narrow
	 *
	 * @return string[]
	 */
	public function get_modes() {
	}
	/**
	 * Returns next wider mode then provided
	 *
	 * @param $mode
	 *
	 * @return null|string
	 */
	public function get_wider_mode( $mode ) {
	}
	/**
	 * Returns next narrower mode then provided
	 *
	 * @param $mode
	 *
	 * @return null|string
	 */
	public function get_narrower_mode( $mode ) {
	}
	/**
	 * Return default responsive mode
	 *
	 * @return string
	 */
	public function get_default_mode() {
	}
	/**
	 * Returns setting field name by responsive mode
	 *
	 * @param $setting
	 * @param $mode
	 *
	 * @return string
	 */
	public function get_field( $setting, $mode ) {
	}
	/**
	 * Returns setting field name of the last edited mode
	 *
	 * @param string $setting
	 *
	 * @return string
	 */
	public function get_last_edited_field( $setting ) {
	}
	/**
	 * Checks if setting responsive mode is enabled
	 *
	 * @param $setting
	 * @param $props
	 *
	 * @return bool
	 */
	public function is_enabled( $setting, $props ) {
	}
	/**
	 * Returns the props value by mode
	 * If no mode provided, the default mode is used
	 *
	 * @param $setting
	 * @param $props
	 * @param null    $mode
	 * @param string  $default
	 *
	 * @return mixed
	 */
	public function get_value( $setting, $props, $mode = \null, $default = '' ) {
	}
	/**
	 * Is the implementation of get_value specifically for desktop mode
	 *
	 * Note: since the desktop mode is the default mode,
	 * this method would similar to get_value without providing mode,
	 * but can be used for a more explicit representation
	 *
	 * @param string $setting
	 * @param array  $props
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	public function get_desktop_value( $setting, $props, $default = \null ) {
	}
	/**
	 * Is the implementation of get_value specifically for tablet mode
	 *
	 * @param string $setting
	 * @param array  $props
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	public function get_tablet_value( $setting, $props, $default = \null ) {
	}
	/**
	 * Is the implementation of get_value specifically for phone mode
	 *
	 * @param string $setting
	 * @param array  $props
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	public function get_phone_value( $setting, $props, $default = \null ) {
	}
	/**
	 * Returns the last edited responsive mode of the provided setting
	 * If not valid value is provided, default mode is returned
	 *
	 * @param $setting
	 * @param $props
	 *
	 * @return string
	 */
	public function get_last_edited( $setting, $props ) {
	}
	/**
	 * Get breakpoint minimum widths
	 *
	 * @since 4.3.2
	 *
	 * @return array
	 */
	public function get_breakpoint_min_widths() {
	}
	/**
	 * Get breakpoint based on device name.
	 *
	 * @since 4.0
	 *
	 * @param string $device
	 *
	 * @return string
	 */
	public function get_breakpoint_by_device( $device = 'desktop' ) {
	}
	/**
	 * @param $mode
	 *
	 * @return bool|string
	 */
	protected function validate_mode( $mode ) {
	}
	protected function get_mode_or_default( $mode ) {
	}
	/**
	 * Returns mode suffix
	 * The default mode suffix is empty
	 *
	 * @param $mode
	 *
	 * @return string
	 */
	protected function mode_field( $mode ) {
	}
	/**
	 * Generates the css code for responsive options.
	 *
	 * Uses array of values for each device as input parameter and css_selector with property to
	 * apply the css.
	 *
	 * Copy of et_pb_generate_responsive_css() with some modifications to improve.
	 *
	 * @since 3.23
	 *
	 * @param array  $values_array   All device values.
	 * @param mixed  $css_selector   CSS selector.
	 * @param string $css_property   CSS property.
	 * @param string $function_name  Module slug.
	 * @param string $additional_css Additional CSS.
	 * @param string $type           Value type to determine need filter or not. Previously, it only
	 *                               accept value from range control and run a function to process
	 *                               range value.
	 * @param string $priority       CSS style declaration priority.
	 */
	public function generate_responsive_css( $values_array, $css_selector, $css_property, $function_name, $additional_css = '', $type = 'range', $priority = '' ) {
	}
	/**
	 * Generates the CSS code for responsive options based on existing declaration.
	 *
	 * Similar with generate_responsive_css(), but it's only used to declare the CSS and selector
	 * without set styles on ET_Builder_Element.
	 *
	 * @since 3.23
	 *
	 * @param array  $values_array  All device values.
	 * @param mixed  $css_selector  CSS selector.
	 * @param string $function_name Module slug.
	 * @param string $priority      CSS style declaration priority.
	 */
	public function declare_responsive_css( $values_array, $css_selector, $function_name, $priority = '' ) {
	}
	/**
	 * Generate additional responsive fields such as _tablet, _phone, and _last_edited.
	 *
	 * @since 3.23
	 *
	 * @param  string $field_name  Base field name.
	 * @param  string $toggle_slug Toggle slug name.
	 * @param  string $tab_slug    Tab slug name.
	 * @param  array  $field       Field data in array.
	 * @return array               Responsive fields set.
	 */
	public function generate_responsive_fields( $field_name, $toggle_slug, $tab_slug, $field = array() ) {
	}
	/**
	 * Get main background value based on enabled status of current field. It's used to selectively
	 * get the correct color, gradient status, image, and video. It's introduced along with new
	 * enable fields to decide should we remove or inherit the value from larger device.
	 *
	 * @since 3.24.1
	 *
	 * @param array  $attrs           All module attributes.
	 * @param string $base_setting    Setting need to be checked.
	 * @param string $preview_mode    Current preview mode.
	 * @param string $background_base Background base name (background, button_bg, etc.)
	 * @param array  $fields          All module fields definition.
	 * @param string $value           Active value.
	 * @param string $default_value   Active default value.
	 *
	 * @return string New value.
	 */
	public function get_inheritance_background_value( $attrs, $base_setting, $preview_mode, $background_base = 'background', $fields = array(), $value = '', $default_value = '' ) {
	}
	public function create( $additional_options ) {
	}
}
/**
 * Class ET_Builder_Module_Helper_Slider
 */
class ET_Builder_Module_Helper_Slider {




	/**
	 * Returns slider arrows CSS selector
	 *
	 * @since 3.25.3
	 *
	 * @param string $prefix
	 *
	 * @return string
	 */
	public function get_arrows_selector( $prefix = '%%order_class%%' ) {
	}
	/**
	 * Returns slider dots CSS selector
	 *
	 * @since 3.25.3
	 *
	 * @param string $prefix
	 *
	 * @return string
	 */
	public function get_dots_selector( $prefix = '%%order_class%%' ) {
	}
	/**
	 * Reapply (fullwidth) post slider's module background on slide item which has featured image
	 *
	 * @since 4.3.3
	 *
	 * @param array $args {
	 * @type  int         $slide_post_id
	 * @type  string|bool $post_featured_image
	 * @type  string      $render_slug
	 * @type  array       $props
	 * }
	 */
	public static function reapply_module_background_on_slide( $args = array() ) {
	}
}
/**
 * Sticky Options helper methods
 *
 * @since 4.6.0
 *
 * Class ET_Builder_Module_Sticky_Options
 */
class ET_Builder_Module_Helper_Sticky_Options {




	/**
	 * Class instance object
	 *
	 * @var object Class instance.
	 */
	private static $instance;
	/**
	 * Get instance of ET_Builder_Module_Sticky_Options.
	 *
	 * @since 4.6.0
	 *
	 * @return object|ET_Builder_Module_Sticky_Options
	 */
	public static function get() {
	}
	/**
	 * Get Sticky field suffix
	 *
	 * @since 4.6.0
	 *
	 * @return string
	 */
	public function get_suffix() {
	}
	/**
	 * Get Sticky field enabled suffix
	 *
	 * @since 4.6.0
	 *
	 * @return string
	 */
	public function get_enabled_suffix() {
	}
	/**
	 * Returns the field original name by removing the `_sticky` or `__sticky_enabled` suffix if it exists.
	 *
	 * @since 4.6.0
	 *
	 * @param string $name Field name.
	 *
	 * @return string
	 */
	public function get_field_base_name( $name ) {
	}
	/**
	 * Get valid sticky_position which implies module is sticky element
	 *
	 * @since 4.6.0
	 *
	 * @return array
	 */
	public function get_valid_sticky_positions() {
	}
	/**
	 * Check if the setting has enabled sticky options
	 *
	 * @since 4.6.0
	 *
	 * @param string $setting Field name.
	 * @param array  $attrs   Module attributes.
	 *
	 * @return bool
	 */
	public function is_enabled( $setting, $attrs ) {
	}
	/**
	 * Check if current module is inside sticky module
	 *
	 * @since 4.6.2
	 *
	 * @return bool
	 */
	public function is_inside_sticky_module() {
	}
	/**
	 * Check if module with given attributes is a sticky module. Need to consider responsive value:
	 * desktop might have non sticky element value but its smaller breakpoint has sticky element value
	 *
	 * @since 4.6.0
	 *
	 * @param array $attrs Module attributes.
	 *
	 * @return bool
	 */
	public function is_sticky_module( $attrs ) {
	}
	/**
	 * Returns the field / setting name with sticky suffix
	 * E.g.: get_sticky_enabled_field('test') => 'test__sticky'
	 *
	 * @since 4.6.0
	 *
	 * @param string $setting Field name.
	 *
	 * @return string
	 */
	public function get_sticky_field( $setting ) {
	}
	/**
	 * Returns the sticky enabled setting field name
	 * E.g.: get_sticky_enabled_field('test') => 'test__sticky_enabled'
	 *
	 * @since 4.6.0
	 *
	 * @param string $setting Field name.
	 *
	 * @return string
	 */
	public function get_sticky_enabled_field( $setting ) {
	}
	/**
	 * Returns setting value for sticky if enabled, otherwise return the default value
	 *
	 * @since 4.6.0
	 *
	 * @param string $setting Field name.
	 * @param array  $attrs   Module attributes.
	 * @param mixed  $default Default value.
	 *
	 * @return mixed
	 */
	public function get_value( $setting, $attrs, $default = \null ) {
	}
	/**
	 * Returns setting sticky value if sticky is enabled for a compose option;
	 * If it does not exist, return $default specified value
	 *
	 * @since 4.6.0
	 *
	 * @param string $setting Field name.
	 * @param string $option  Option.
	 * @param array  $attrs   Module attributes.
	 * @param mixed  $default Default value.
	 *
	 * @return mixed
	 */
	public function get_compose_value( $setting, $option, $attrs, $default = \null ) {
	}
	/**
	 * Returns setting sticky raw value;
	 * If it does not exist, return $default specified value
	 *
	 * @since 4.6.0
	 *
	 * @param string $setting Field name.
	 * @param array  $attrs   Module attributes.
	 * @param mixed  $default Default value.
	 *
	 * @return mixed
	 */
	public function get_raw_value( $setting, $attrs, $default = \null ) {
	}
	/**
	 * Adds sticky state selector prefix before given selectors
	 *
	 * @since 4.6.0
	 *
	 * @param string|array $selector      CSS Selector.
	 * @param bool         $is_sticky     Whether current module is sticky or not, based on
	 *                                    `sticky_position` prop value.
	 * @param bool         $return_string Return modified selector as string or not.
	 *
	 * @return string
	 */
	public function add_sticky_to_selectors( $selector, $is_sticky = \true, $return_string = \true ) {
	}
	/**
	 * Add sticky state selector prefix to given selector
	 *
	 * @since 4.6.0
	 *
	 * @param string $selector  CSS Selector.
	 * @param bool   $is_sticky whether current module is sticky or not, based on `sticky_position`
	 *                          prop value.
	 *
	 * @return string
	 */
	public function add_sticky_to_order_class( $selector, $is_sticky = \true ) {
	}
	/**
	 * Check if given attrs has incompatible attribute value which makes sticky mechanism can't
	 * be used on current module
	 *
	 * @since 4.6.0
	 *
	 * @param array $attrs Module attributes.
	 *
	 * @return bool
	 */
	public function has_incompatible_attrs( $attrs = array() ) {
	}
	/**
	 * List of fields and its value which prevent sticky mechanism to work due to how it behaves
	 *
	 * @since 4.6.0
	 *
	 * @return array
	 */
	public function get_incompatible_fields() {
	}
}
/**
 * Icon Font helper methods.
 *
 * @since 4.6.0
 *
 * Class ET_Builder_Module_Helper_Style_Processor
 */
class ET_Builder_Module_Helper_Style_Processor {




	/**
	 * Custom `generate_styles()` processor for responsive, hover, and sticky styles of `icon_font_size`
	 * attributes which sets right property value of font icon in accordion/toggle title.
	 *
	 * @since 4.6.0
	 *
	 * @used-by ET_Builder_Module_Accordion->render()
	 * @used-by ET_Builder_Module_Toggle->render()
	 *
	 * @param string       $selector     CSS Selector.
	 * @param string|array $option_value Option value.
	 * @param array        $args         Arguments.
	 * @param string       $option_type  Option type (responsive|sticky|hover).
	 */
	public static function process_toggle_title_icon_font_size( $selector, $option_value, $args, $option_type ) {
	}
	/**
	 * Prepare and set icon styles(CSS properties `font-family` and `content`)
	 * for the specified $selector.
	 *
	 * @since ?
	 *
	 * @param string $icon_value  Extended Icon data.
	 * @param string $render_slug Module slug.
	 * @param string $selector    CSS selector for icon container.
	 * @param string $render_type If that param equal `icon_font_family_and_content` then CSS propert `content` will be also set.
	 * @param string $media_query Media query name e.g max_width_767, max_width_980.
	 * @param bool   $important   Is CSS decalration should containt `!important`.
	 *
	 * @return void.
	 */
	private static function _set_icon_styles( $icon_value, $render_slug, $selector, $render_type, $media_query, $important ) {
	}
	/**
	 * Custom `generate_styles()` processor for extended icon's css style such as `font-family` or `content`.
	 *
	 * @since ?
	 *
	 * @param string       $selector     CSS Selector.
	 * @param string|array $option_value Option value.
	 * @param array        $args         Arguments.
	 * @param string       $option_type  Option type (responsive|sticky|hover).
	 *
	 * @return void.
	 */
	public static function process_extended_icon( $selector, $option_value, $args, $option_type ) {
	}
	/**
	 * Custom `generate_styles()` processor for responsive, hover, and sticky styles of
	 * `icon_font_size` attributes which sets css properties for social media follow's icon and
	 * its dimension.
	 *
	 * @since 4.6.0
	 *
	 * @used-by ET_Builder_Module_Social_Media_Follow->render()
	 * @used-by ET_Builder_Module_Social_Media_Follow_Item->render()
	 *
	 * @param string       $selector     CSS Selector.
	 * @param string|array $option_value Option value.
	 * @param array        $args         Arguments.
	 * @param string       $option_type  Option type (responsive|sticky|hover).
	 */
	public static function process_social_media_icon_font_size( $selector, $option_value, $args, $option_type ) {
	}
	/**
	 * Custom `generate_styles()` processor for responsive, hover, and sticky styles of
	 * `icon_font_size` attributes which sets the size of overlay icon.
	 *
	 * @since 4.6.0
	 *
	 * @used-by ET_Builder_Module_Testimonial->render()
	 * @used-by ET_Builder_Module_Video->render()
	 * @used-by ET_Builder_Module_Video_Slider->render()
	 * @used-by ET_Builder_Module_Video_Slider_Item->render()
	 *
	 * @param string       $selector    CSS Selector.
	 * @param string|array $value       Option value.
	 * @param array        $args        Arguments.
	 * @param string       $option_type Option type (responsive|sticky|hover).
	 */
	public static function process_overlay_icon_font_size( $selector, $value, $args, $option_type ) {
	}
}
/**
 * Transition Options helper methods
 *
 * Class ET_Builder_Module_Transition_Options
 */
class ET_Builder_Module_Helper_Transition_Options {




	private static $instance;
	public static function get() {
	}
	/**
	 * Return transition value.
	 *
	 * @since 3.23 Add $device param to support responsive settings.
	 *
	 * @param string $key
	 * @param array  $list
	 * @param string $default
	 * @param string $device
	 *
	 * @return void
	 */
	private function get_value( $key, $list, $default = \null, $device = 'desktop' ) {
	}
	/**
	 * Returns the module transition duration,
	 * In case the setting is empty, a default value is returned
	 *
	 * @since 3.23 Add $device param to support responsive settings.
	 *
	 * @param array  $props
	 * @param string $device
	 *
	 * @return string
	 */
	public function get_duration( $props, $device = 'desktop' ) {
	}
	/**
	 * Returns the module transition speed curve,
	 * In case the setting is empty, a default value is returned
	 *
	 * @since 3.23 Add $device param to support responsive settings.
	 *
	 * @param array  $props
	 * @param string $device
	 *
	 * @return string
	 */
	public function get_easing( $props, $device = 'desktop' ) {
	}
	/**
	 * Returns the module transition transition delay,
	 * In case the setting is empty, a default value is returned
	 *
	 * @since 3.23 Add $device param to support responsive settings.
	 *
	 * @param array  $props
	 * @param string $device
	 *
	 * @return string
	 */
	public function get_delay( $props, $device = 'desktop' ) {
	}
	/**
	 * Return transition styles.
	 *
	 * @since 3.23 Add $device param to support responsive settings.
	 *
	 * @param string $property
	 * @param array  $props
	 * @param string $device
	 *
	 * @return string
	 */
	public function get_style( $property, $props, $device = 'desktop' ) {
	}
}
/**
 * Helper class that provides necessary functions for managing width option
 *
 * Class ET_Builder_Module_Helper_Width
 */
class ET_Builder_Module_Helper_Width extends \ET_Builder_Module_Helper_Sizing {




	public function get_raw_field() {
	}
}
/**
 * Class ET_Builder_Module_Helper_Woocommerce_Modules
 *
 * Shared code between all Woo Modules.
 */
class ET_Builder_Module_Helper_Woocommerce_Modules {




	/**
	 * Returns TRUE if the Product attribute value is valid.
	 *
	 * Valid values are Product Ids, `current` and `latest`.
	 *
	 * @param string $maybe_product_id Product ID.
	 *
	 * @return bool
	 */
	public static function is_product_attr_valid( $maybe_product_id ) {
	}
	/**
	 * Gets the Product Id by the given Product prop value.
	 *
	 * @param string $valid_product_attr
	 *
	 * @return int
	 */
	public static function get_product_id_by_prop( $valid_product_attr ) {
	}
	/**
	 * Gets the Product (WC_Product) by the value stored in the Product attribute.
	 *
	 * @see WC_Product
	 *
	 * @param string $maybe_product_id The Value stored in the Product attribute using VB.
	 *
	 * @return false|WC_Product
	 */
	public static function get_product( $maybe_product_id ) {
	}
	/**
	 * Gets the Product ID.
	 *
	 * @see WC_Product
	 *
	 * @param string $maybe_product_id The Value stored in the Product attribute using VB.
	 *
	 * @return int WP_Product ID.
	 */
	public static function get_product_id( $maybe_product_id ) {
	}
	/**
	 * Get reusable WooCommerce field definition
	 *
	 * @since 3.29
	 *
	 * @param string $name  Field template name.
	 * @param array  $attrs Attribute that need to be inserted into field definition.
	 * @param array  $unset Attribute that need to be removed from field definition.
	 *
	 * @return array
	 */
	public static function get_field( $name, $attrs = array(), $unset = array() ) {
	}
	/**
	 * Gets the Reviews title.
	 *
	 * @since 3.29
	 *
	 * @param WC_Product $product The Product Post.
	 *
	 * @return string
	 */
	public static function get_reviews_title( $product ) {
	}
	/**
	 * Gets the Reviews comment form.
	 *
	 * @since 3.29
	 *
	 * @param WC_Product   $product  The Product Post.
	 * @param WP_Comment[] $comments Array of Comment objects.
	 *
	 * @return string
	 */
	public static function get_reviews_comment_form( $product, $comments ) {
	}
	/**
	 * Gets the formatted weight markup for the given Product Id.
	 *
	 * @param int $product_id Product Id.
	 *
	 * @return string
	 */
	public static function get_weight_formatted( $product_id ) {
	}
	/**
	 * Gets the formatted dimension markup for the given Product Id.
	 *
	 * @param int $product_id Product Id.
	 *
	 * @return string
	 */
	public static function get_dimensions_formatted( $product_id ) {
	}
	/**
	 * Filters the $outer_wrapper_attrs.
	 * Adds 'data-background-layout' and 'data-background-layout-hover' attributes if needed.
	 *
	 * @since 3.29
	 *
	 * @param array              $outer_wrapper_attrs Key value pairs of outer wrapper attributes.
	 * @param ET_Builder_Element $this_class          Module's class.
	 *
	 * @return array filtered $outer_wrapper_attrs.
	 */
	public static function maybe_add_background_layout_data( $outer_wrapper_attrs, $this_class ) {
	}
	/**
	 * Processes the Background Layout options for Woocommerce Modules.
	 * Adds Background Layout related classes.
	 * Adds Filter for $outer_wrapper_attrs, so required data attributes can be added for specific modules.
	 *
	 * @since 3.29
	 *
	 * @param string             $render_slug Module's render slug.
	 * @param ET_Builder_Element $this_class  Module's class.
	 *
	 * @return void.
	 */
	public static function process_background_layout_data( $render_slug, $this_class ) {
	}
	/**
	 * Processes the Button Icon options for Woocommerce Modules.
	 * Adds et_pb_woo_custom_button_icon class if needed.
	 * Adds Filter for $outer_wrapper_attrs, so required button icon attributes can be added for specific modules.
	 *
	 * @since 3.29
	 *
	 * @param string             $render_slug Module's render slug.
	 * @param ET_Builder_Element $this_class  Module's class.
	 *
	 * @return void.
	 */
	public static function process_custom_button_icons( $render_slug, $this_class ) {
	}
	/**
	 * Filters the $outer_wrapper_attrs.
	 * Adds 'data-button-class', 'data-button-icon', 'data-button-icon-tablet' and 'data-button-icon-phone' attributes if needed.
	 *
	 * @since 3.29
	 *
	 * @param array              $outer_wrapper_attrs Key value pairs of outer wrapper attributes.
	 * @param ET_Builder_Element $this_class          Module's class.
	 *
	 * @return array filtered $outer_wrapper_attrs.
	 */
	public static function add_custom_button_icons( $outer_wrapper_attrs, $this_class ) {
	}
	/**
	 * Gets the columns default.
	 *
	 * @return string
	 */
	public static function get_columns_posts_default() {
	}
	/**
	 * Gets the columns default value for the current Product.
	 *
	 * @return string
	 */
	public static function get_columns_posts_default_value() {
	}
	/**
	 * Gets the Title header tag.
	 *
	 * WooCommerce version influences the returned header.
	 *
	 * @return string
	 */
	public static function get_title_header() {
	}
	/**
	 * Gets the Title selector.
	 *
	 * WooCommerce changed the title tag from h3 to h2 in v3.0.0
	 *
	 * @uses ET_Builder_Module_Helper_Woocommerce_Modules::get_title_header()
	 *
	 * @return string
	 */
	public static function get_title_selector() {
	}
	/**
	 * Appends Data Icon attribute to the Outer wrapper.
	 *
	 * @param array $outer_wrapper_attrs Key value pairs of outer wrapper attributes.
	 * @param mixed $this_class          Module's class.
	 *
	 * @return array
	 */
	public static function output_data_icon_attrs( $outer_wrapper_attrs, $this_class ) {
	}
	/**
	 * Return all possible product tabs.
	 * See woocommerce_default_product_tabs() in woocommerce/includes/wc-template-functions.php
	 *
	 * @return array
	 */
	public static function get_default_product_tabs() {
	}
	public static function get_default_tab_options() {
	}
	/**
	 * Get calculated star rating width based on letter spacing value.
	 *
	 * WooCommerce's .star-rating uses `em` based width on float layout;
	 * any additional width caused by letter-spacing makes the calculation incorrect;
	 * thus the `width: calc()` overwrite.
	 *
	 * @param string $value
	 *
	 * @return string
	 */
	public static function get_rating_width_style( $value ) {
	}
	/**
	 * Get margin properties & values based on current alignment status.
	 *
	 * Default star alignment is not controlled by standard text align system. It uses float to control
	 * how stars symbol will be displayed based on the percentage. It's not possible to convert it to
	 * simple text align. We have to use margin left & right to set the alignment.
	 *
	 * @param string $align
	 * @param string $mode
	 *
	 * @return string
	 */
	public static function get_rating_alignment_style( $align, $mode = 'desktop' ) {
	}
	/**
	 * Get specific star rating style based on property type.
	 *
	 * @param string $type
	 * @param string $value
	 * @param string $mode
	 *
	 * @return array
	 */
	public static function get_rating_style( $type, $value, $mode = 'desktop' ) {
	}
	/**
	 * Set styles for Woo's .star-rating element.
	 *
	 * @since 3.29
	 *
	 * @param string $render_slug
	 * @param array  $attrs
	 * @param string $selector
	 * @param string $hover_selector
	 *
	 * @return void
	 */
	public static function add_star_rating_style( $render_slug, $attrs, $selector = '%%order_class%% .star-rating', $hover_selector = '%%order_class%%:hover .star-rating', $props = array() ) {
	}
	/**
	 * Get the product default.
	 *
	 * @return array
	 */
	public static function get_product_default() {
	}
	/**
	 * Get the product default value for the current post type.
	 *
	 * @return string
	 */
	public static function get_product_default_value() {
	}
	/**
	 * Converts the special chars in to their entities to be used in :before or :after
	 * pseudo selector content.
	 *
	 * @param string $chars
	 *
	 * @since 4.0
	 * @see   https://github.com/elegantthemes/Divi/issues/16976
	 *
	 * @return string
	 */
	public static function escape_special_chars( $chars ) {
	}
	/**
	 * Gets the WooCommerce Tabs defaults.
	 *
	 * Implementation based on
	 *
	 * @see https://github.com/elegantthemes/submodule-builder/pull/6568
	 *
	 * @since 4.4.2
	 *
	 * @return array
	 */
	public static function get_woo_default_tabs() {
	}
	/**
	 * Gets the WooCommerce Tabs options for the given Product.
	 *
	 * @since 4.4.2
	 *
	 * @return string
	 */
	public static function get_woo_default_tabs_options() {
	}
	/**
	 * Sets the Display type to render only Products.
	 *
	 * @since 4.1.0
	 *
	 * @see https://github.com/elegantthemes/Divi/issues/17998
	 *
	 * @used-by ET_Builder_Module_Woocommerce_Related_Products::render()
	 * @used-by ET_Builder_Module_Woocommerce_Upsells::render()
	 *
	 * @param string $option_name
	 * @param string $display_type
	 *
	 * @return string
	 */
	public static function set_display_type_to_render_only_products( $option_name, $display_type = '' ) {
	}
	/**
	 * Resets the display type to the existing value.
	 *
	 * @since 4.1.0
	 *
	 * @see https://github.com/elegantthemes/Divi/issues/17998
	 *
	 * @used-by ET_Builder_Module_Woocommerce_Related_Products::render()
	 * @used-by ET_Builder_Module_Woocommerce_Upsells::render()
	 *
	 * @param $option_name
	 * @param $display_type
	 */
	public static function reset_display_type( $option_name, $display_type ) {
	}
	/**
	 * Stops Checkout Coupon form from rendering.
	 *
	 * @deprecated
	 */
	public static function detach_wc_before_checkout_form() {
	}
	/**
	 * Stops Checkout Coupon form from rendering.
	 */
	public static function detach_wc_checkout_coupon_form() {
	}
	/**
	 * Stops Login Coupon form from rendering.
	 */
	public static function detach_wc_checkout_login_form() {
	}
	/**
	 * Enable `woocommerce_before_checkout_form` hook.
	 *
	 * @since 4.14.0
	 */
	public static function attach_wc_before_checkout_form() {
	}
	/**
	 * Enable `woocommerce_before_checkout_form` hook.
	 *
	 * @since 4.14.0
	 */
	public static function attach_wc_checkout_coupon_form() {
	}
	/**
	 * Enable `woocommerce_before_checkout_form` hook.
	 *
	 * @since 4.14.0
	 */
	public static function attach_wc_checkout_login_form() {
	}
	/**
	 * Remove `woocommerce_checkout_billing` hook.
	 *
	 * @since 4.14.0
	 */
	public static function detach_wc_checkout_billing() {
	}
	/**
	 * Enable `woocommerce_checkout_billing` hook.
	 *
	 * @since 4.14.0
	 */
	public static function attach_wc_checkout_billing() {
	}
	/**
	 * Remove `woocommerce_checkout_shipping` hook.
	 *
	 * @since 4.14.0
	 */
	public static function detach_wc_checkout_shipping() {
	}
	/**
	 * Enable `woocommerce_checkout_shipping` hook.
	 *
	 * @since 4.14.0
	 */
	public static function attach_wc_checkout_shipping() {
	}
	/**
	 * Remove `woocommerce_checkout_order_review` hook.
	 *
	 * @since 4.14.0
	 */
	public static function detach_wc_checkout_payment() {
	}
	/**
	 * Enable `woocommerce_checkout_order_review` hook.
	 *
	 * @since 4.14.0
	 */
	public static function attach_wc_checkout_payment() {
	}
	/**
	 * Stops Order review (Mini cart) and Checkout Payment from rendering.
	 *
	 * @used-by ET_Builder_Module_Woocommerce_Checkout_Billing::get_checkout_billing()
	 * @used-by ET_Builder_Module_Woocommerce_Checkout_Additional_Info::get_additional_info()
	 */
	public static function detach_wc_checkout_order_review() {
	}
	/**
	 * Enable `woocommerce_checkout_order_review` hook.
	 *
	 * @since 4.14.0
	 */
	public static function attach_wc_checkout_order_review() {
	}
	/**
	 * Remove `woocommerce_cart_collaterals` hook.
	 *
	 * @since 4.14.0
	 */
	public static function detach_wc_cart_totals() {
	}
	/**
	 * Enable `woocommerce_cart_collaterals` hook.
	 *
	 * @since 4.14.0
	 */
	public static function attach_wc_cart_totals() {
	}
	/**
	 * Gets the required HTML data attributes based on the button name and slug.
	 *
	 * @param array  $module_props Module attributes.
	 * @param string $btn_slug     Shortcode attribute name (i.e button_{device}).
	 * @param string $btn_class    Class name of the button to target in JS.
	 *
	 * @return array
	 */
	public static function get_button_icon_attrs( $module_props, $btn_slug = 'button', $btn_class = 'button' ) {
	}
	/**
	 * Sets the Button's data-* attrs for the Icons to render.
	 *
	 * These attributes are set on the outer wrapper & will be set on the Button elements using JS.
	 *
	 * @param array $module_props Module attributes/properties.
	 *
	 * @return array
	 */
	public static function add_custom_icon_attrs( $module_props ) {
	}
	/**
	 * Adds mock Products to Cart.
	 *
	 * Otherwise Checkout modules won't output content. The output is made visible only to VB.
	 *
	 * @param array $cart_contents Cart contents.
	 *
	 * @return array
	 * @since  4.14.0
	 */
	public static function set_dummy_cart_contents( $cart_contents ) {
	}
	/**
	 * Get the product default.
	 *
	 * @return array
	 */
	public static function get_page_type_default() {
	}
	/**
	 * Get the Page Type default based on the Cart & Checkout pages.
	 *
	 * @since 4.14.0
	 *
	 * @return string
	 */
	public static function get_page_type_default_value() {
	}
	/**
	 * Gets the TB Post ID That Uses Body Template.
	 *
	 * @param int $post_id Post ID.
	 *
	 * @return mixed Template Post ID.
	 */
	public static function get_tb_template_id_by_current_page_id( $post_id ) {
	}
}
abstract class ET_Builder_Module_Helper_Motion_Sanitizer extends \ET_Builder_Module_Helper_Motion {




	/**
	 * @param string $value
	 *
	 * @return string
	 */
	public function getStartValue( $value ) {
	}
	/**
	 * @param string $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setStartValue( $value, $multi_value ) {
	}
	/**
	 * @param string $value
	 *
	 * @return string
	 */
	public function getMiddleValue( $value ) {
	}
	/**
	 * @param string $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setMiddleValue( $value, $multi_value ) {
	}
	/**
	 * @param string $value
	 *
	 * @return string
	 */
	public function getEndValue( $value ) {
	}
	/**
	 * @param string $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setEndValue( $value, $multi_value ) {
	}
	abstract protected function sanitize( $value );
}
class ET_Builder_Module_Helper_Motion_Blur extends \ET_Builder_Module_Helper_Motion_Sanitizer {




	/**
	 * @param string $value
	 *
	 * @return string
	 */
	protected function sanitize( $value ) {
	}
	protected function get_units() {
	}
	protected function get_default_unit() {
	}
}
/**
 * Motion Helper class.
 *
 * @package    Divi
 * @subpackage Builder
 */
/**
 * Motion Helpers.
 */
class ET_Builder_Module_Helper_Motion_Motions {




	private $START_LIMIT  = 0;
	private $START_MIDDLE = 1;
	private $END_MIDDLE   = 2;
	private $END_LIMIT    = 3;
	private $START_VALUE  = 4;
	private $MIDDLE_VALUE = 5;
	private $END_VALUE    = 6;
	private $LENGTH       = 7;
	private static $instance;
	public static function instance() {
	}
	/**
	 * Returns the Motion Effect value. Which is the merge of Saved and Default values.
	 *
	 * @param string $value, $default_value
	 *
	 * @return string
	 */
	public function getValue( $saved_value, $default_value ) {
	}
	/**
	 * Returns the non-empty value or default.
	 *
	 * @param string $value, $default
	 *
	 * @return string
	 */
	public static function getNonEmpty( $value, $default ) {
	}
	/**
	 * Returns start limit.
	 *
	 * @param string $value
	 *
	 * @return int
	 */
	public function getStartLimit( $value ) {
	}
	/**
	 * Set start limit.
	 *
	 * If limit:
	 * - is not a numeric value, return original motionValue
	 * - is lower then 0, set limit to 0
	 * - is higher then start middle, set limit equal to start middle
	 *
	 * @param int    $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setStartLimit( $value, $multi_value ) {
	}
	/**
	 * Returns start limit.
	 *
	 * @param string $value
	 *
	 * @return int
	 */
	public function getEndLimit( $value ) {
	}
	/**
	 * Set end limit.
	 *
	 * If limit:
	 * - is not a numeric value, return original motionValue
	 * - is lower then end middle, set limit equal to end middle
	 * - is higher then 100, set limit equal to 100
	 *
	 * @param int    $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setEndLimit( $value, $multi_value ) {
	}
	/**
	 * Get start middle.
	 *
	 * @param $value
	 *
	 * @return int
	 */
	public function getStartMiddle( $value ) {
	}
	/**
	 * Set start middle limit.
	 *
	 * If limit:
	 * - is not a numeric value, return original motionValue
	 * - is lower then start limit, set limit equal to start limit
	 * - is higher then end middle, set limit equal to end middle
	 *
	 * @param int    $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setStartMiddle( $value, $multi_value ) {
	}
	/**
	 * Get end middle.
	 *
	 * @param $value
	 *
	 * @return int
	 */
	public function getEndMiddle( $value ) {
	}
	/**
	 * Set end middle limit.
	 *
	 * If limit:
	 * - is not a numeric value, return original motionValue
	 * - is lower then start middle limit, set limit equal to start middle limit
	 * - is higher then end limit, set limit equal to end limit
	 *
	 * @param int    $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setEndMiddle( $value, $multi_value ) {
	}
	/**
	 * Returns option value for start.
	 *
	 * @param string $value
	 *
	 * @return string
	 */
	public function getStartValue( $value ) {
	}
	/**
	 * Sets option value for start.
	 *
	 * @param string $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setStartValue( $value, $multi_value ) {
	}
	/**
	 * Returns option value for middle.
	 *
	 * @param string $value
	 *
	 * @return string
	 */
	public function getMiddleValue( $value ) {
	}
	/**
	 * Sets option value for middle.
	 *
	 * @param string $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setMiddleValue( $value, $multi_value ) {
	}
	/**
	 * Returns option value for end.
	 *
	 * @param string $value
	 *
	 * @return string
	 */
	public function getEndValue( $value ) {
	}
	/**
	 * Sets option value for end.
	 *
	 * @param string $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	public function setEndValue( $value, $multi_value ) {
	}
	/**
	 * Same as Multi.merge, but applies the elements parameter
	 *
	 * @param string $value_1
	 * @param string $value_2
	 *
	 * @return string
	 */
	public function merge( $value_1, $value_2 ) {
	}
	/**
	 * Parses array value and converts it to a valid motion array
	 * - array length should be 7
	 * - first 4 values should be numeric values
	 * - first 4 values should respect 0-100 boundaries
	 * - first 4 values should be ordered in ascending order
	 * - last 3 values should be string values
	 *
	 * @param array $value
	 *
	 * @return array
	 */
	protected function parse( array $value ) {
	}
	/**
	 * Converts a value to a valid motion array value.
	 *
	 * @param string $value
	 *
	 * @return array
	 */
	protected function split( $value ) {
	}
	/**
	 * Converts a value to a valid motion string value.
	 *
	 * @param array $value
	 *
	 * @return string
	 */
	protected function to_value( array $value ) {
	}
	/**
	 * @return ET_Builder_Module_Helper_Multi_Value
	 */
	protected function multi() {
	}
	/**
	 * Returns specific key value
	 *
	 * @param int    $key
	 * @param string $value
	 *
	 * @return mixed
	 */
	protected function get( $key, $value ) {
	}
	/**
	 * @param int    $key
	 * @param $value
	 * @param string $multi_value
	 *
	 * @return string
	 */
	protected function set( $key, $value, $multi_value ) {
	}
	private function to_int( $value, $default ) {
	}
	/**
	 * @param int $min
	 * @param int $max
	 * @param int $value
	 *
	 * @return int
	 */
	private function range( $min, $max, $value ) {
	}
}
class ET_Builder_Module_Helper_Motion_Opacity extends \ET_Builder_Module_Helper_Motion_Sanitizer {




	/**
	 * @param string $value
	 *
	 * @return string
	 */
	protected function sanitize( $value ) {
	}
}
class ET_Builder_Module_Helper_Motion_Rotate extends \ET_Builder_Module_Helper_Motion_Sanitizer {




	/**
	 * @param string $value
	 *
	 * @return string
	 */
	protected function sanitize( $value ) {
	}
}
class ET_Builder_Module_Helper_Motion_Scale extends \ET_Builder_Module_Helper_Motion_Sanitizer {




	/**
	 * @param string $value
	 *
	 * @return string
	 */
	protected function sanitize( $value ) {
	}
}
class ET_Builder_Module_Helper_Motion_Translate extends \ET_Builder_Module_Helper_Motion_Sanitizer {




	/**
	 * @param string $value
	 *
	 * @return string
	 */
	protected function sanitize( $value ) {
	}
}
/**
 * Main migration class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      ?
 */
/**
 * Depending on the case (field name) determines the necessary migration scripts and launches it.
 *
 * @since ?
 */
abstract class ET_Builder_Module_Settings_Migration {




	/**
	 * Used to exclude names in case of BB.
	 *
	 * @var array
	 */
	protected static $_bb_excluded_name_changes = array();
	/**
	 * Used for migrations where we want to separate the logic for
	 * migrating post attributes and global migrating preset attributes.
	 *
	 * @var bool
	 */
	protected static $_maybe_global_presets_migration = \false;
	/**
	 * Used to migrate field names.
	 *
	 * @var array
	 */
	public static $field_name_migrations = array();
	/**
	 * Array of hooks.
	 *
	 * @var array
	 */
	public static $hooks = array( 'the_content', 'admin_enqueue_scripts', 'et_pb_get_backbone_templates', 'wp_ajax_et_pb_execute_content_shortcodes', 'wp_ajax_et_fb_get_saved_layouts', 'wp_ajax_et_fb_retrieve_builder_data' );
	/**
	 * The last checked hook.
	 *
	 * @var string
	 */
	public static $last_hook_checked;
	/**
	 * Last hook check decision .
	 *
	 * @var string
	 */
	public static $last_hook_check_decision;
	/**
	 * The largest version of the migrations defined in the migrations array.
	 *
	 * @var string
	 */
	public static $max_version = '4.22.2';
	/**
	 * Array of already migrated data.
	 *
	 * @var array
	 */
	public static $migrated = array();
	/**
	 * Array of migrations in format( [ 'version' => 'name of migration script' ] ).
	 *
	 * @var string[]
	 */
	public static $migrations = array(
		'3.0.48'  => 'BackgroundUI',
		'3.0.72'  => 'Animation',
		'3.0.74'  => 'OptionsHarmony',
		'3.0.84'  => 'FullwidthHeader',
		'3.0.87'  => 'BorderOptions',
		'3.0.91'  => 'FilterOptions',
		'3.0.92'  => 'ShopModuleSlugs',
		'3.0.94'  => 'DropShadowToBoxShadow',
		'3.0.99'  => 'InnerShadowToBoxShadow',
		'3.0.102' => 'FullwidthHeader2',
		'3.2'     => 'UIImprovements',
		'3.4'     => 'EmailOptinContent',
		'3.6'     => 'ContactFormItemOptionsSerialization',
		'3.12.3'  => 'TeamMemberIconHover',
		'3.16'    => 'HoverOptions',
		'3.17.3'  => 'DiscontinueHtmlEncoding',
		'3.22'    => 'RowCustomWidthToSizing',
		'3.22.3'  => 'RowZeroGutter',
		'3.23'    => 'OptionsHarmony2',
		'3.23.4'  => 'DividerHeight',
		'3.25'    => 'ColumnOptions',
		'3.25.3'  => 'ShopOrderByDefault',
		'3.27.4'  => 'TextAlignment',
		'4.13.0'  => 'IconManager',
		'4.13.1'  => 'ContactFormUniqueID',
		'4.14.0'  => 'WooTextOG',
		'4.15'    => 'BackgroundGradientOverlaysImage',
		'4.16'    => 'BackgroundGradientStops',
		'4.22.2'  => 'SocialMediaFollowNetworkTwitterToX',
	);
	/**
	 * Migrations by version.
	 *
	 * @var array
	 */
	public static $migrations_by_version = array();
	/**
	 * Fields.
	 *
	 * @var array
	 */
	public $fields;
	/**
	 * Modules.
	 *
	 * @var array
	 */
	public $modules;
	/**
	 * Version.
	 *
	 * @var string
	 */
	public $version;
	/**
	 * Add or not missing fields.
	 *
	 * @var bool
	 */
	public $add_missing_fields = \false;
	public function __construct() {
	}
	protected static function _migrate_field_names( $fields, $module_slug, $version ) {
	}
	abstract public function get_fields();
	public static function get_migrations( $module_version ) {
	}
	abstract public function get_modules();
	public function get_content_migration_modules() {
	}
	public function handle_field_name_migrations( $fields, $module_slug ) {
	}
	public static function init() {
	}
	/**
	 * Remove added filters.
	 *
	 * Used by WPUnit tests.
	 *
	 * @since 4.16.0
	 * @link  https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/#shared-setup-between-related-tests
	 */
	public static function tear_down() {
	}
	public static function maybe_override_processed_fields( $fields, $module_slug ) {
	}
	/**
	 * Maybe override shortcode attributes.
	 *
	 * @param array  $attrs                          Shortcode attributes.
	 * @param array  $unprocessed_attrs              Attributes that have not yet been processed.
	 * @param string $module_slug                    Internal system name for the module type.
	 * @param string $module_address                 Location of the current module on the page.
	 * @param string $content                        Text/HTML content within the current module.
	 * @param bool   $maybe_global_presets_migration Whether to include global presets.
	 *
	 * @since 4.17.1 If a `null` value is returned from `migrate()`, unset the attribute.
	 *
	 * @return array
	 */
	public static function maybe_override_shortcode_attributes( $attrs, $unprocessed_attrs, $module_slug, $module_address, $content = '', $maybe_global_presets_migration = \false ) {
	}
	public static function maybe_override_content( $content, $attrs, $unprocessed_attrs, $module_slug, $module_address, $global_content ) {
	}
	abstract public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address );
	// this could have been written as abstract, but its not as common so as to be expected to be implemented by every migration
	public function migrate_content( $module_slug, $attrs, $content ) {
	}
	public static function _should_handle_render( $slug ) {
	}
}
class ET_Builder_Module_Settings_Migration_Animation extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.0.72';
	public function get_fields() {
	}
	public function get_modules( $group = '' ) {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * ET_Builder_Module_Settings_Migration_BackgroundGradientOverlaysImage.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.15.0
 */
/**
 * Migrate Background Color Gradient Overlays Image option to 'off' based on condition.
 *
 * This migration will check three existing settings, and update as following:
 *
 * OLD:
 * - use_background_color_gradient: on
 * - background_color_gradient_overlays_image: on
 * - parallax: on
 *
 * NEW:
 * - background_color_gradient_overlays_image: off
 *
 * @package    Divi
 * @subpackage Builder/Migration
 * @since      4.15.0
 */
/**
 * Background Gradient Overlays Image migrations class.
 */
class ET_Builder_Module_Settings_Migration_BackgroundGradientOverlaysImage extends \ET_Builder_Module_Settings_Migration {




	/**
	 * The Divi release where this migration was introduced.
	 *
	 * @var string
	 *
	 * @since 4.15.0
	 */
	public $version = '4.15';
	/**
	 * Array of modules to inspect for settings to migrate.
	 *
	 * Pass attribute and it will return selected modules only. Default return all affected modules.
	 *
	 * @param string $attr Attribute name.
	 *
	 * @return array
	 *
	 * @since 4.15.0
	 */
	public function get_modules( $attr = '' ) {
	}
	/**
	 * Get fields that are affected by this migration.
	 *
	 * @return array
	 *
	 * @since 4.15.0
	 */
	public function get_fields() {
	}
	/**
	 * Migrate.
	 *
	 * @param string        $to_field_name        This migration's target field.
	 * @param string|array  $affected_field_value Affected field reference value.
	 * @param string|number $module_slug          Current module type.
	 * @param string        $to_field_value       Migration target's current value.
	 * @param string        $affected_field_name  Affected field attribute name.
	 * @param array         $module_attrs         Current module's full attributes.
	 * @param string        $module_content       Current module's content.
	 * @param string|number $module_address       Current module's address.
	 *
	 * @return string
	 *
	 * @since 4.15.0
	 */
	public function migrate( $to_field_name, $affected_field_value, $module_slug, $to_field_value, $affected_field_name, $module_attrs, $module_content, $module_address ) {
	}
	/**
	 * Get attributes value by field_name.
	 *
	 * @param string $field_name   Field name.
	 * @param array  $module_attrs Module's full attributes.
	 *
	 * @return string
	 */
	private function _get_attr_value( $field_name, $module_attrs ) {
	}
}
/**
 * Migrate Background Gradient Start/End to new Multi-stops format.
 *
 * This migration will take four existing settings and combine them into one
 * new, unified setting:
 *
 * OLD:
 * - background_color_gradient_start: #rrggbb
 * - background_color_gradient_start_position: xx%
 * - background_color_gradient_end: rgba(rr,gg,bb,aa)
 * - background_color_gradient_end_position: xx%
 *
 * NEW:
 * - background_gradient_stops: #rrggbb xx%|rgba(rr,gg,bb,aa) xx%
 *
 * This new format is not limited to only having defined points for gradient
 * start and end. In this way, we can enable unlimited gradient stops in our
 * gradient background settings.
 *
 * @package    Divi
 * @subpackage Builder/Migration
 * @since      4.16.0
 */
/**
 * Background Gradient Stops migrations class.
 */
class ET_Builder_Module_Settings_Migration_BackgroundGradientStops extends \ET_Builder_Module_Settings_Migration {




	/**
	 * The Divi release where this migration was introduced.
	 *
	 * @var string
	 *
	 * @since 4.16.0
	 */
	public $version = '4.16';
	/**
	 * This migration should add the defined field(s).
	 *
	 * This migration adds a new, combined field for background gradient stops. Older modules do not
	 * have this field, so it needs to be added.
	 *
	 * @var bool
	 *
	 * @since 4.16.1
	 */
	public $add_missing_fields = \true;
	/**
	 * Array of modules to inspect for settings to migrate.
	 *
	 * Pass attribute and it will return selected modules only. Default return all affected modules.
	 *
	 * @param string $attr Attribute name.
	 *
	 * @return array Collection of module types.
	 *
	 * @since 4.16.0
	 */
	public function get_modules( $attr = '' ) {
	}
	/**
	 * Get fields that are affected by this migration.
	 *
	 * We need to write gradient stops into the new attribute even if they're
	 * built using default values for gradient start/end settings, so we want to
	 * find any case where a background gradient is used (regardless of whether
	 * or not a custom color or position has been defined). As long as some form
	 * of `use[_background]_color_gradient` is saved to the module, we want to
	 * load it and migrate its data for the new `_gradient_stops` field.
	 *
	 * @return array Collection of affected attributes.
	 *
	 * @since 4.16.0
	 */
	public function get_fields() {
	}
	/**
	 * The various names of gradient *_type fields.
	 *
	 * @return array Collection of affected attributes.
	 *
	 * @since 4.16.0
	 */
	public function gradientTypeFields() {
	}
	/**
	 * Check if array key exists and has non-empty value.
	 *
	 * @param string $key   Name of an attribute being searched.
	 * @param array  $array Module attributes.
	 *
	 * @return bool Whether a matching attribute exists with a non-empty value.
	 *
	 * @since 4.16.0
	 */
	public function existsAndIsNotEmpty( $key, $array ) {
	}
	/**
	 * Gradient Type: Replace any "radial" gradient types with "elliptical".
	 *
	 * "Gradient Type" has been updated.
	 *
	 * Previously, the options were:
	 * - linear [`linear-gradient(...)`]
	 * - radial [`radial-gradient(...)`] (defaults to 'ellipse at' unless circle is defined)
	 *
	 * The options now are:
	 * - linear [`linear-gradient(...)`]
	 * - elliptical [`radial-gradient( ellipse at...)`]
	 * - circular [`radial-gradient( circle at...)`]
	 * - conic [`conic-gradient(...)`]
	 *
	 * This means that the old "radial" type needs to be updated to "ellipse" wherever it appears.
	 *
	 * @param string $current_value The current value (which may need replacing).
	 *
	 * @return string Value to assign to the migrated field.
	 *
	 * @since 4.16.0
	 */
	public function migrateGradientType( $current_value ) {
	}
	/**
	 * Gradient Stops: Formatting information for the old start/end values to be migrated.
	 *
	 * `background_color_gradient_start_position`:
	 * `background_color_gradient_end_position`:
	 *   string - percentage value (0%-100%); could also be a fraction of
	 *            a percent (ex. '25.68%'). We will be rounding these to the
	 *            nearest whole percent during migration, so:
	 *              pre-migration '25.48%' = post-migration '25%'
	 *              pre-migration '25.68%' = post-migration '26%'
	 *
	 * `background_color_gradient_start`:
	 * `background_color_gradient_end`:
	 *   string - CSS color code. Should be one of:
	 *              hex (ex. #ff00aa, #f0a)
	 *              rgba (ex. rgba(255,0,170,0.54)
	 *            Our color picker converts rgb(...) to hex and hsla(...)
	 *            to rgba, so they don't appear naturally. Customized layout
	 *            exports could have modified values, though, so we should
	 *            be prepared to handle them.
	 *
	 * @param string $field_name    Name of the field.
	 * @param string $current_value Current value.
	 * @param array  $attrs         The attrs.
	 *
	 * @return string Value to assign to the migrated field.
	 *
	 * @since 4.16.0 Added.
	 * @since 4.17.1 Check inheritance. If all values are inherited, unset the attribute.
	 */
	public function migrateGradientStops( $field_name, $current_value, $attrs ) {
	}
	/**
	 * Migrate.
	 *
	 * @param string        $to_field_name        This migration's target field.
	 * @param string|array  $affected_field_value Affected field reference value.
	 * @param string|number $module_slug          Current module type.
	 * @param string        $to_field_value       Migration target's current value.
	 * @param string        $affected_field_name  Affected field attribute name.
	 * @param array         $module_attrs         Current module's full attributes.
	 * @param string        $module_content       Current module's content.
	 * @param string|number $module_address       Current module's address.
	 *
	 * @return string
	 *
	 * @since 4.16.0
	 */
	public function migrate( $to_field_name, $affected_field_value, $module_slug, $to_field_value, $affected_field_name, $module_attrs, $module_content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_BackgroundUI extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.0.48';
	public function get_fields() {
	}
	public function get_modules( $for_affected_fields = \false ) {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_BorderOptions extends \ET_Builder_Module_Settings_Migration {




	public $version  = '3.0.87';
	public $defaults = array(
		'all_modules'         => array(
			'width' => '0px',
			'color' => '#ffffff',
			'style' => 'solid',
		),
		'post_based'          => array( 'width' => '1px' ),
		'toggles_and_tabs'    => array(
			'width' => '1px',
			'color' => '#d9d9d9',
			'style' => 'solid',
		),
		'et_pb_contact_form'  => array( 'width' => '1px' ),
		'et_pb_contact_field' => array(
			'width' => '14px',
			'color' => '#bbb',
		),
		'et_pb_blog'          => array(
			'width' => '1px',
			'color' => '#d8d8d8',
			'style' => 'solid',
		),
		'et_pb_signup'        => array( 'width' => '1px' ),
	);
	public function __construct() {
	}
	public function _get_border_style_default( $module_slug, $field_name ) {
	}
	public function get_modules( $group = '' ) {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
	private function migrate_border_radius( $radius_value ) {
	}
}
class ET_Builder_Module_Settings_Migration_ColumnOptions extends \ET_Builder_Module_Settings_Migration {




	public $version                  = '3.25';
	public $add_missing_fields       = \true;
	public $columnSettingsFromRow    = array();
	public $fieldsWithSuffix         = array(
		'padding'           => array( 'tablet', 'phone', 'last_edited', '_hover', '_hover_enabled' ),
		'padding_top'       => array( '_hover', '_hover_enabled' ),
		'padding_right'     => array( '_hover', '_hover_enabled' ),
		'padding_bottom'    => array( '_hover', '_hover_enabled' ),
		'padding_left'      => array( '_hover', '_hover_enabled' ),
		'background_color'  => array( '_hover', '_hover_enabled' ),
		'custom_css_before' => array( '_hover', '_hover_enabled' ),
		'custom_css_main'   => array( '_hover', '_hover_enabled' ),
		'custom_css_after'  => array( '_hover', '_hover_enabled' ),
	);
	public $fieldsWithSuffixAppended = array(
		'custom_padding'                         => '__no_suffix__',
		'custom_padding_tablet'                  => 'custom_padding',
		'custom_padding_phone'                   => 'custom_padding',
		'custom_padding_last_edited'             => 'custom_padding',
		'custom_padding__hover'                  => '__no_suffix__',
		'custom_padding__hover_enabled'          => 'custom_padding',
		'background_color__hover'                => 'background_color',
		'background_color__hover_enabled'        => 'background_color',
		'custom_css_before'                      => '__no_suffix__',
		'custom_css_main_element'                => '__no_suffix__',
		'custom_css_after'                       => '__no_suffix__',
		'custom_css_before__hover'               => 'custom_css_before',
		'custom_css_main_element__hover'         => 'custom_css_main_element',
		'custom_css_after__hover'                => 'custom_css_after',
		'custom_css_before__hover_enabled'       => 'custom_css_before',
		'custom_css_main_element__hover_enabled' => 'custom_css_main_element',
		'custom_css_after__hover_enabled'        => 'custom_css_after',
	);
	public function get_modules() {
	}
	public function get_fields() {
	}
	public function migrate_padding( $row_address, $column_index, $field_name, $saved_value ) {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Migration for the ContactFormItem module which fixes quote serialization for checkbox, radio and select field options.
 *
 * @since 3.10
 */
class ET_Builder_Module_Settings_Migration_ContactFormItemOptionsSerialization extends \ET_Builder_Module_Settings_Migration {




	public function get_modules() {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
	public function escape_quotes( $matches ) {
	}
}
/**
 * ET_Builder_Module_Settings_Migration_ContactFormUniqueID class file.
 *
 * @class   ET_Builder_Module_Settings_Migration_ContactFormUniqueID
 * @package Builder/Module/Settings/Migration
 */
/**
 * Migration process to fill in missing unique_id attribute on Contact Form module.
 *
 * @since 4.13.1
 */
class ET_Builder_Module_Settings_Migration_ContactFormUniqueID extends \ET_Builder_Module_Settings_Migration {




	/**
	 * Migration Version
	 *
	 * @since 4.13.1
	 *
	 * @var string
	 */
	public $version = '4.13.1';
	/**
	 * Get the field that need to be migrated.
	 *
	 * Contains array with:
	 * - key as new field
	 * - value consists affected fields as old field and module location
	 *
	 * @since 4.13.1
	 *
	 * @return array New and old fields need to be migrated.
	 */
	public function get_fields() {
	}
	/**
	 * Get all modules affected.
	 *
	 * @since 4.13.1
	 *
	 * @return array
	 */
	public function get_modules() {
	}
	/**
	 * Run migrate process.
	 *
	 * @since 4.13.1
	 *
	 * @param string $field_name       Field name.
	 * @param string $current_value    Current value.
	 * @param string $module_slug      Module slug.
	 * @param string $saved_value      Saved value.
	 * @param string $saved_field_name Saved field name.
	 * @param string $attrs            Module attributes values.
	 * @param string $content          Module content.
	 * @param string $module_address   Module address.
	 *
	 * @return string New value.
	 */
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Migration for the Code Module and Signup Module that had values html encoded.
 *
 * @since 3.15.1
 */
class ET_Builder_Module_Settings_Migration_DiscontinueHtmlEncoding extends \ET_Builder_Module_Settings_Migration {




	public function get_modules( $group = '' ) {
	}
	public function get_fields() {
	}
	private function decode_code_module_raw_content( $content ) {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
	public function get_content_migration_modules( $group = '' ) {
	}
	public function migrate_content( $module_slug, $attrs, $content ) {
	}
	private function _post_content_capability_check( $content ) {
	}
	private function _sanitize_code_module_content_regex( $matches ) {
	}
}
class ET_Builder_Module_Settings_Migration_DividerHeight extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.23.4';
	public function get_modules() {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_DropShadowToBoxShadow extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.0.94';
	public function get_modules() {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_EmailOptinContent extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.4';
	public function get_fields() {
	}
	public function get_modules( $for_affected_fields = \false ) {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_FilterOptions extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.0.91';
	public function get_fields() {
	}
	public function get_modules() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_Fullwidth_Header extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.0.84';
	public function get_fields() {
	}
	public function get_modules() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_Fullwidth_Header2 extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.0.102';
	public function get_fields() {
	}
	public function get_modules() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_HoverOptions extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.16';
	public function get_modules( $group = '' ) {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Icon manager migartion class.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      ?
 */
/**
 * Migration process to handle all the changes done in Icon Manager QF.
 *
 * @since ?
 */
class ET_Builder_Module_Settings_Migration_IconManager extends \ET_Builder_Module_Settings_Migration {




	/**
	 * Migration Version.
	 *
	 * @var string
	 */
	public $version = '4.13.0';
	/**
	 * Proccessing field name.
	 *
	 * @var string
	 */
	private $_field_name;
	/**
	 * Current field value.
	 *
	 * @var string
	 */
	private $_current_value;
	/**
	 * Saved field value.
	 *
	 * @var string
	 */
	private $_saved_value;
	/**
	 * Current field name.
	 *
	 * @var string
	 */
	private $_saved_field_name;
	/**
	 * Array of attributes.
	 *
	 * @var array
	 */
	private $_attrs;
	/**
	 * All responsive modes suffixes.
	 *
	 * @var array
	 */
	private $_responsive_modes_suffixes = array( '', '_tablet', '_phone', '__hover', '__hover_enabled', '_last_edited' );
	/**
	 * Responsive modes.
	 *
	 * @var array
	 */
	private $_responsive_modes = array( '', '_tablet', '_phone' );
	/**
	 * Default values for the fields related to icon placement migration.
	 *
	 * @var array
	 */
	private $_icon_placement_migration_values = array(
		'image_icon_width'          => array(
			'left' => '16px',
			'top'  => '48px',
		),
		'image_icon_custom_padding' => array(
			'left' => '8px|8px|8px|8px|false|false',
			'top'  => '25px|25px|25px|25px|false|false',
		),
		'border_width_all_image'    => array(
			'left' => '2px',
			'top'  => '3px',
		),
	);
	/**
	 * Border radii value for the circle icon attr migration.
	 *
	 * @var string
	 */
	private $_circle_border_radii_value = 'on|100%|100%|100%|100%';
	/**
	 * Attrs sticky suffixes.
	 *
	 * @var array
	 */
	private $_sticky_suffixes = array( '__sticky_enabled', '__sticky' );
	/**
	 * Get array with Blurb module slug.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	private function _get_blurb_modules() {
	}
	/**
	 * Returns the list of Divi modules with buttons that have a custom icons.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	private function _get_button_modules() {
	}
	/**
	 * Get array with slugs for modules that supported Hover Overlay functionality.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	private function _get_overlay_modules() {
	}
	/**
	 * Get array with slugs for modules that supported Toggle Icon functionality.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	private function _get_toggle_modules() {
	}
	/**
	 * Get Blurb fields.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	private function _get_blurb_fields() {
	}
	/**
	 * Get fields for modules with Button support.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	private function _get_button_fields() {
	}
	/**
	 * Get modules which are using overlay functionality by responsive suffix.
	 *
	 * @since ?
	 * @param string $suffix responsive suffix.
	 *
	 * @return array
	 */
	private function _get_overlay_modules_by_suffix( $suffix ) {
	}
	/**
	 * Get fields for modules with Hover Overlay functionality.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	private function _get_overlay_fields() {
	}
	/**
	 * Get fields for modules with Toggle icon functionality.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	private function _get_toggle_fields() {
	}
	/**
	 * Get all affected fields.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	public function get_fields() {
	}
	/**
	 * Get all affected modules.
	 *
	 * @since ?
	 *
	 * @return array
	 */
	public function get_modules() {
	}
	/**
	 * Base migrate method, which launching during migration.
	 *
	 * @since ?
	 *
	 * @param string $field_name       field name.
	 * @param string $current_value    current value.
	 * @param string $module_slug      module slug.
	 * @param string $saved_value      saved value.
	 * @param string $saved_field_name saved field name.
	 * @param array  $attrs            attrs array.
	 * @param string $content          content.
	 * @param string $module_address   module_address.
	 *
	 * @return array
	 */
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
	/**
	 * Initialize migration params from received args.
	 *
	 * @since ?
	 *
	 * @param string $field_name       field_name.
	 * @param string $current_value    current_value.
	 * @param string $saved_value      saved_value.
	 * @param string $saved_field_name saved_field_name.
	 * @param string $attrs            attrs.
	 *
	 * @return void
	 */
	private function _init_params( $field_name, $current_value, $saved_value, $saved_field_name, $attrs ) {
	}
	/**
	 * Check if an passed attribute is an on\off type via its name.
	 *
	 * @since ?
	 *
	 * @param string $attr_name attribute name.
	 *
	 * @return bool
	 */
	private function _maybe_on( $attr_name ) {
	}
	/**
	 * Check if current migrated `field_name` contains passed attribute name.
	 *
	 * @since ?
	 *
	 * @param  string $attr_name attribute name.
	 * @return bool
	 */
	private function _field_name_contains( $attr_name ) {
	}
	/**
	 * Check if current migrated `saved_name` contains passed attribute name.
	 *
	 * @since ?
	 *
	 * @param  string $attr_name attr_name.
	 * @return bool
	 */
	private function _saved_name_contains( $attr_name ) {
	}
	/**
	 * Get current migrated field name suffix.
	 *
	 * @param bool $use_sticky_suffixes use or not sticky_suffixes.
	 * @since ?
	 *
	 * @return string
	 */
	private function _get_field_suffix( $use_sticky_suffixes = \false ) {
	}
	/**
	 * Get current migrated field name without suffix.
	 *
	 * @since ?
	 *
	 * @return string
	 */
	private function _get_field_name_without_suffix() {
	}
	/**
	 * Migrate fields value "as is" if the current field is one of the
	 * service fields ( fields with suffix '__hover_enabled' or '_last_edited' ) or sticky fields.
	 *
	 * @since ?
	 *
	 * @return bool
	 */
	private function _maybe_service_or_sticky_field() {
	}
	/**
	 * Returns an attribute value from by attribute's name.
	 *
	 * @since ?
	 *
	 * @param  string $attr_name attribute name.
	 * @return bool
	 */
	private function _get_attr( $attr_name ) {
	}
	/**
	 * Migrate fields which depends on the icon placement option.
	 *
	 * @since ?
	 *
	 * @param  string $for_empty_current_value setting returned value for empty icon_placement.
	 * @return string
	 */
	private function _migrate_icon_placement( $for_empty_current_value = '' ) {
	}
	/**
	 * Migrate background color with circle color.
	 *
	 * @since ?
	 *
	 * @return string
	 */
	private function _migrate_background_color_with_circle_color() {
	}
	/**
	 * Migrate font icon.
	 *
	 * @since ?
	 *
	 * @return string
	 */
	private function _migrate_font_icon() {
	}
	/**
	 * Run Blurb's attributes migration when post's shortcodes attributes migrating.
	 *
	 * @since ?
	 *
	 * @return string
	 */
	private function _blurb_post_attrs_migration() {
	}
	/**
	 * Run Blurb's attributes migration when Global Presets attributes migrating.
	 *
	 * @since ?
	 *
	 * @return string
	 */
	private function _blurb_global_presets_attrs_migration() {
	}
}
class ET_Builder_Module_Settings_Migration_InnerShadowToBoxShadow extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.0.99';
	public function get_modules( $group = '' ) {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_OptionsHarmony extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.0.74';
	public function __construct() {
	}
	public function get_fields() {
	}
	public function get_modules( $attr = '' ) {
	}
	public function migrate_spacing( $current_value, $saved_value, $location, $saved_field_name = '', $module_slug = '' ) {
	}
	/**
	 * Re-map value to new value. Originally add to reverse yes/no button value due to option migration
	 *
	 * @param  string saved value
	 * @param  array  map of value, expected mapped value in key-value relationship
	 * @param  string default value
	 * @return string mapped value
	 */
	public function migrate_remap_value( $value, $map = array(), $default = 'on' ) {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Migration process to handle all the changes done in Options Harmony v2's QF.
 *
 * @since 3.23
 */
class ET_Builder_Module_Settings_Migration_OptionsHarmony2 extends \ET_Builder_Module_Settings_Migration {




	/**
	 * Migration Version
	 *
	 * @since 3.23
	 * @todo  Should be replaced with the correct release version.
	 *
	 * @var string
	 */
	public $version = '3.23';
	/**
	 * Get all fields need to be migrated.
	 *
	 * Contains array with:
	 * - key as new field
	 * - value consists affected fields as old field and module location
	 *
	 * @since 3.23
	 *
	 * @return array New and old fields need to be migrated.
	 */
	public function get_fields() {
	}
	/**
	 * Get all modules affected.
	 *
	 * Pass attribute and it will return selected modules only. Default return all affected modules.
	 *
	 * @since 3.23
	 *
	 * @param string $attr Attribute name.
	 *
	 * @return [type]       [description]
	 */
	public function get_modules( $attr = '' ) {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
	/**
	 * Text shadow properties need to be migrated.
	 *
	 * It's only used to check if current text shadow property is the correct field to migrate.
	 *
	 * @since 3.23
	 *
	 * @param  string $field_name New field name.
	 * @return string             Old field name.
	 */
	public function get_form_field_text_shadow( $field_name = '' ) {
	}
}
class ET_Builder_Module_Settings_Migration_RowCustomWidthToSizing extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.22';
	public function get_modules() {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
	private function get_keys() {
	}
	private function to_fields( $field ) {
	}
	private function get_width( $gutter ) {
	}
	private function class_name( $module ) {
	}
}
class ET_Builder_Module_Settings_Migration_RowZeroGutter extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.22.3';
	public function get_modules() {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
	protected function get_keys() {
	}
	protected function to_fields( $field ) {
	}
}
class ET_Builder_Module_Settings_Migration_ShopModuleSlugs extends \ET_Builder_Module_Settings_Migration {




	public function get_modules() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
	public function get_fields() {
	}
}
class ET_Builder_Module_Settings_Migration_ShopOrderByDefault extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.25.3';
	public function get_modules() {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Migrate Social Media Follow Network Twitter to X
 *
 * @package Divi/Builder/Migration
 */
/**
 * Divi ET_Builder_Migration_SocialMediaFollowNetworkTwitterToX class
 */
class ET_Builder_Migration_SocialMediaFollowNetworkTwitterToX extends \ET_Builder_Module_Settings_Migration {




	/**
	 * From which version we are migrating
	 *
	 * @var string
	 */
	public $version = '4.22.2';
	/**
	 * Get modules to migrate
	 *
	 * @return string[]
	 */
	public function get_modules() {
	}
	/**
	 * Get module fields to migrate
	 *
	 * @return array[]
	 */
	public function get_fields() {
	}
	/**
	 * Modify the saved value for the field
	 *
	 * @param  string $field_name       Field Name.
	 * @param  string $current_value    Current Value.
	 * @param  string $module_slug      Module Slug.
	 * @param  string $saved_value      Saved Value.
	 * @param  string $saved_field_name Saved Field name.
	 * @param  array  $attrs            Module Attributes.
	 * @param  string $content          Content.
	 * @param  string $module_address   Module Address.
	 * @return string
	 */
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
class ET_Builder_Module_Settings_Migration_TeamMemberIconHover extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.12.3';
	public function get_fields() {
	}
	public function get_modules() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Migration process to migrate Text Text Alignment into Text Orientation of Text module.
 *
 * @since 3.27.4
 */
class ET_Builder_Module_Settings_Migration_TextAlignment extends \ET_Builder_Module_Settings_Migration {




	/**
	 * Migration Version
	 *
	 * @since 3.27.4
	 *
	 * @var string
	 */
	public $version = '3.27.4';
	/**
	 * Get all fields need to be migrated.
	 *
	 * Contains array with:
	 * - key as new field
	 * - value consists affected fields as old field and module location
	 *
	 * @since 3.27.4
	 *
	 * @return array New and old fields need to be migrated.
	 */
	public function get_fields() {
	}
	/**
	 * Get all modules affected.
	 *
	 * @since 3.27.4
	 *
	 * @return array
	 */
	public function get_modules() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Migration for modules fields prior to UI Improvement Release. Some defaults are changes for better UI, these
 * migrations makes affected modules made prior UI Improvement to keep its current UI output
 *
 * @since 3.2
 */
class ET_Builder_Module_Settings_Migration_UIImprovement extends \ET_Builder_Module_Settings_Migration {




	public $version = '3.2';
	public function get_modules( $group = '' ) {
	}
	public function get_fields() {
	}
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Text OG Migration Class.
 *
 * Migrates Text OG fields to Title OG in Woo Cart Notice.
 * Migrates Text OG fields to Field Labels OG in Woo Add to Cart.
 */
class ET_Builder_Module_Settings_Migration_WooTextOG extends \ET_Builder_Module_Settings_Migration {




	/**
	 * Gets the modules that needs migration.
	 *
	 * @used-by ET_Builder_Module_Settings_Migration::handle_field_name_migrations()
	 *
	 * @return string[]
	 */
	public function get_modules() {
	}
    // phpcs:ignore Squiz.Commenting.FunctionComment.Missing -- Paresh's PR contains function comment.
	public function get_fields() {
	}
    // phpcs:ignore Squiz.Commenting.FunctionComment.Missing -- Paresh's PR contains function comment.
	public function migrate( $field_name, $current_value, $module_slug, $saved_value, $saved_field_name, $attrs, $content, $module_address ) {
	}
}
/**
 * Class representing WooCommerce Add to cart component.
 */
class ET_Builder_Module_Woocommerce_Add_To_Cart extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Replaces the Add to Cart form's action.
	 *
	 * @since 4.14.0
	 *
	 * @param string $permalink Permalink.
	 *
	 * @return string
	 */
	public static function replace_add_to_cart_form_action( $permalink ) {
	}
	/**
	 * Get add to cart markup as string
	 *
	 * @since 4.14.0 Update Add to Cart Form action {@see https://github.com/elegantthemes/Divi/issues/16682}
	 *
	 * @since 4.4.0 Fixed compatibility w/ WooCommerce Product Add-ons
	 * @see   https://github.com/elegantthemes/Divi/issues/19116
	 *
	 * @param array $args             Arguments from Computed Prop AJAX call.
	 * @param array $conditional_tags Conditional Tags.
	 *
	 * @return string
	 */
	public static function get_add_to_cart( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Gets the Button classname.
	 *
	 * @used-by ET_Builder_Module_Helper_Woocommerce_Modules::add_custom_button_icons()
	 *
	 * @return string
	 */
	public function get_button_classname() {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Breadcrumb markup, we inject Multi view
	 * attributes on to the Outer wrapper.
	 *
	 * @param array $outer_wrapper_attrs
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs ) {
	}
	/**
	 * Calculates any required additional CSS.
	 *
	 * Dropdown menu's Bottom & Left margin affects the Dropdown arrow placement.
	 * This is handled using additional CSS.
	 *
	 * @param array  $attrs
	 * @param string $render_slug
	 *
	 * @since 4.3.4
	 */
	public function add_additional_css( $attrs, $render_slug ) {
	}
	/**
	 * Calculates Dropdown's arrow margin values.
	 *
	 * The Dropdown's arrow margin values depend on the actual
	 * Dropdown margin values.
	 *
	 * @since 4.3.4
	 *
	 * @param $value
	 *
	 * @return string
	 */
	public function calculate_dropdown_arrow_margin( $value ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Additional Info component.
 */
class ET_Builder_Module_Woocommerce_Additional_Info extends \ET_Builder_Module {




	/**
	 * Initialize.
	 *
	 * @since 4.0.6 Implemented Attribute Row, Title and Body Custom CSS fields.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Get additional information
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return string
	 */
	public static function get_additional_info( $args = array() ) {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Additional Info markup, we inject Multi
	 * view attributes on to the Outer wrapper.
	 *
	 * @param array                                         $outer_wrapper_attrs
	 * @param ET_Builder_Module_Woocommerce_Additional_Info $this_class
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs, $this_class ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Breadcrumb component.
 */
class ET_Builder_Module_Woocommerce_Breadcrumb extends \ET_Builder_Module {




	/**
	 * Home URL.
	 *
	 * @var string
	 */
	public static $home_url;
	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * Includes any Module specific fields.
	 *
	 * Fields from Parent module that may be not needed are also removed.
	 *
	 * @since 4.0 Removed Hover options from Breadcrumb URL.
	 *
	 * @return array Parent's fields w/ module specific fields.
	 */
	public function get_fields() {
	}
	/**
	 * Get breadcrumb
	 *
	 * @since 3.29
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return string
	 */
	public static function get_breadcrumb( $args = array() ) {
	}
	/**
	 * Modify home url
	 *
	 * @since 3.29
	 *
	 * @return string
	 */
	public static function modify_home_url() {
	}
	/**
	 * Adds Multi view attributes to the Inner wrapper.
	 *
	 * Since we do not have control over the WooCommerce Breadcrumb markup, we inject Multi view
	 * attributes on to the Inner wrapper.
	 *
	 * Inner wrapper is selected to inject the Multi view attributes because, there is already
	 * a lot going on w/ the Outer wrapper.
	 *
	 * @param array $inner_wrapper_attrs
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $inner_wrapper_attrs ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Cart Notice component.
 */
final class ET_Builder_Module_Woocommerce_Cart_Notice extends \ET_Builder_Module {




	/**
	 * Initialize.
	 *
	 * @since 4.14.0 Fixed PHP Warnings
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 *
	 * @since 4.14.0 Dynamic defaults for Page Type & Placeholder color introduced.
	 */
	public function get_fields() {
	}
	/**
	 * Swaps login form template.
	 *
	 * By default WooCommerce displays these only when logged-out.
	 * However these templates must be shown in VB when logged-in. Hence we use these templates.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Swaps login form template.
	 *
	 * Aligning `Remember me` checkbox vertically requires change in HTML markup.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template_frontend( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Output Coupon error message for Divi user to design.
	 *
	 * This output is intentional in VB. However, WooCommerce will handle display on the FE.
	 *
	 * @since 4.14.0
	 */
	public static function output_coupon_error_message() {
	}
	/**
	 * Handle hooks.
	 *
	 * @param array $conditional_tags Conditional tags from AJAX callback.
	 */
	public static function maybe_handle_hooks( $conditional_tags ) {
	}
	/**
	 * Reset hooks.
	 *
	 * @param array $conditional_tags Conditional tags from AJAX callback.
	 */
	public static function maybe_reset_hooks( $conditional_tags ) {
	}
	/**
	 * Disable default WooCommerce notice if current page's main query post content contains
	 * Cart Notice module to prevent duplicate cart notices being rendered AND to make Cart Notice
	 * module can render the notices correctly (notices are cleared once they are rendered)
	 *
	 * @since 3.29
	 */
	public static function disable_default_notice() {
	}
	/**
	 * We update Woo Notices array during modules render and need to cleat it
	 * after Woo Product is fully rendered to avoid duplicated notifications on
	 * subsequent page loads.
	 */
	public static function clear_notices() {
	}
	/**
	 * Gets the Cart message based on the Page type.
	 *
	 * @since 4.14.0
	 *
	 * @param array $args Args.
	 *
	 * @return string
	 */
	public static function get_cart_message( $args ) {
	}
	/**
	 * Gets the Cart notice markup.
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return string
	 */
	public static function get_cart_notice( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Gets the Button classname.
	 *
	 * @used-by ET_Builder_Module_Helper_Woocommerce_Modules::add_custom_button_icons()
	 *
	 * @return string
	 */
	public function get_button_classname() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Cart Products component.
 */
class ET_Builder_Module_Woocommerce_Cart_Products extends \ET_Builder_Module {




	/**
	 * Initialize.
	 *
	 * @since 4.14.0 Fixed PHP Warnings {@link https://github.com/elegantthemes/Divi/issues/22104}
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Display mocked variation attribute in VB.
	 *
	 * @param array $cart_item Cart Item.
	 */
	public static function display_variation_attribute( $cart_item ) {
	}
	/**
	 * Sets dummy permalink.
	 *
	 * @return string
	 */
	public static function set_dummy_permalink() {
	}
	/**
	 * Sets dummy cart contents to be dipslayed in VB.
	 *
	 * @param array $cart_contents Cart Contents.
	 *
	 * @return array
	 */
	public static function set_dummy_cart_contents( $cart_contents ) {
	}
	/**
	 * Set readonly attribute when Show Update Cart btn is set to OFF.
	 *
	 * @param array $input_args Args for the input.
	 *
	 * @return mixed
	 */
	public static function set_quantity_input_readonly( $input_args ) {
	}
	/**
	 * Handle hooks.
	 *
	 * @param array $conditional_tags Array of conditional tags.
	 */
	public static function maybe_handle_hooks( $conditional_tags ) {
	}
	/**
	 * Reset hooks.
	 *
	 * @param array $conditional_tags Array of conditional tags.
	 */
	public static function maybe_reset_hooks( $conditional_tags ) {
	}
	/**
	 * Swaps Quantity input template.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_quantity_input_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Swaps login form template.
	 *
	 * By default WooCommerce displays these only when logged-out.
	 * However these templates must be shown in VB when logged-in. Hence we use these templates.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Gets Cart Products markup.
	 *
	 * @param array $args             Props.
	 * @param array $conditional_tags Conditional tags set during computed property AJAX call.
	 *
	 * @return string
	 */
	public static function get_cart_products( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * @param array $outer_wrapper_attrs Outer wrapper attributes.
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs ) {
	}
	/**
	 * Gets the required HTML data attributes based on the button name and slug.
	 *
	 * @param string $btn_name Button name.
	 * @param string $btn_slug Button slug.
	 *
	 * @return array
	 */
	public function get_button_icon_attrs( $btn_name, $btn_slug = 'button' ) {
	}
	/**
	 * Sets the Button's data-* attrs for the Icons to render.
	 *
	 * These attributes are set on the outer wrapper & will be set on the Button elements using JS.
	 *
	 * @param array $outer_wrapper_attrs Outer wrapper attributes.
	 *
	 * @return array
	 */
	public function add_custom_icon_attrs( $outer_wrapper_attrs ) {
	}
	/**
	 * Gets the actual css rule-set (i.e. a selector & a declaration block).
	 *
	 * @param string $value Shortcode attribute value.
	 *
	 * @return mixed
	 */
	public function get_width_style( $value ) {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Checkout order component.
 */
class ET_Builder_Module_Woocommerce_Cart_Totals extends \ET_Builder_Module {




	/**
	 * Initialize.
	 *
	 * @since 4.14.0 Fixed PHP Warnings {@link https://github.com/elegantthemes/Divi/issues/22104}
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Sets the Button's data-* attrs for the Icons to render.
	 *
	 * These attributes are set on the outer wrapper & will be set on the Button elements using JS.
	 *
	 * @param array $outer_wrapper_attrs Outer wrapper attributes.
	 *
	 * @return array
	 */
	public function add_custom_icon_attrs( $outer_wrapper_attrs ) {
	}
	/**
	 * Swaps Cart Totals template.
	 *
	 * By default WooCommerce displays Shipping calculator only for eligibleCart items.
	 * However, Shipping Calculator must be shown in VB. Hence we swap the template.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Show dummy subtotal.
	 *
	 * @param string $value Value.
	 *
	 * @return string
	 */
	public static function show_dummy_subtotal( $value ) {
	}
	/**
	 * Show dummy total.
	 *
	 * @param string $value Value.
	 *
	 * @return string
	 */
	public static function show_dummy_total( $value ) {
	}
	/**
	 * Displays message before shipping calculator in VB and in TB.
	 */
	public static function display_message_before_shipping_calculator() {
	}
	/**
	 * Handle hooks.
	 *
	 * @param array $conditional_tags Conditional tags from AJAX callback.
	 */
	public static function maybe_handle_hooks( $conditional_tags ) {
	}
	/**
	 * Reset hooks.
	 *
	 * @param array $conditional_tags Conditional tags from AJAX callback.
	 */
	public static function maybe_reset_hooks( $conditional_tags ) {
	}
	/**
	 * Gets Cart totals markup.
	 *
	 * @param array $args             List of attributes.
	 * @param array $conditional_tags Conditional tags from AJAX callback.
	 *
	 * @return string
	 */
	public static function get_cart_totals( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Gets the dropdown arrow style rule sets.
	 *
	 * @param string $value         Shortcode attribute value.
	 * @param string $property      CSS property.
	 * @param string $prop_position CSS Property position.
	 *
	 * @return string|void
	 */
	public function get_dropdown_arrow_style( $value, $property = 'margin', $prop_position = 'top' ) {
	}
	/**
	 * Adds custom width styles.
	 *
	 * @param string $render_slug    Module slug.
	 * @param array  $attrs          Module props.
	 * @param string $selector       The selector.
	 * @param string $hover_selector Hover selector.
	 * @param string $prop           Shortcode property used in computing styles.
	 */
	public function add_dropdown_arrow_style( $render_slug, $attrs, $selector, $hover_selector, $prop ) {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Checkout Additional Info component.
 */
final class ET_Builder_Module_Woocommerce_Checkout_Additional_Info extends \ET_Builder_Module {




	/**
	 * Initialize.
	 *
	 * @since 4.14.0 Fixed PHP Warnings {@link https://github.com/elegantthemes/Divi/issues/22104}
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Reset hooks.
	 */
	public static function maybe_reset_hooks( $conditional_tags ) {
	}
	/**
	 * Handle hooks.
	 */
	public static function maybe_handle_hooks( $conditional_tags ) {
	}
	/**
	 * Invoke WooCommerce hooks.
	 *
	 * When Dynamic framework is enabled, some of WooCommerce's actions/filters
	 * won't be invoked because of lazy loading.
	 *
	 * Since WooCommerce's hooks are required before render() they are
	 * invoked using the `et_builder_module_lazy_shortcodes_registered` hook.
	 *
	 * @see et_builder_wc_init()
	 * @see ET_Builder_Module_Shortcode_Manager::register_all_shortcodes()
	 */
	public static function maybe_invoke_woocommerce_hooks() {
	}
	/**
	 * Increases the Checkout Information Textarea `rows` attribute.
	 *
	 * @param array $fields Array of checkout fields.
	 *
	 * @return array
	 */
	public static function modify_order_comments_rows( $fields ) {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Swaps Checkout Order Details template.
	 *
	 * Coupon Remove Link must be shown in VB. Hence we swap the template.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Gets the Checkout Additional Info markup.
	 *
	 * @param array $args Settings used to render the module's output.
	 *                    Refer ET_Builder_Element::props.
	 *
	 * @return string
	 */
	public static function get_additional_info( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Additional Info markup,
	 * we inject Multi view attributes on to the Outer wrapper.
	 *
	 * @since 4.14.0
	 *
	 * @param array $outer_wrapper_attrs Outer wrapper attributes.
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Checkout billing component.
 */
class ET_Builder_Module_Woocommerce_Checkout_Billing extends \ET_Builder_Module {




	/**
	 * Initialize.
	 *
	 * @since 4.14.0 Fixed PHP Warnings {@link https://github.com/elegantthemes/Divi/issues/22104}
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Swaps Checkout Order Details template.
	 *
	 * Coupon Remove Link must be shown in VB. Hence we swap the template.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Reset hooks.
	 *
	 * @since 4.14.8 $conditional_tags param added.
	 *
	 * @param array $conditional_tags List of conditional tags.
	 */
	public static function maybe_reset_hooks( $conditional_tags ) {
	}
	/**
	 * Handle hooks.
	 *
	 * @since 4.14.8 $conditional_tags param added.
	 *
	 * @param array $conditional_tags List of conditional tags.
	 */
	public static function maybe_handle_hooks( $conditional_tags = array() ) {
	}
	/**
	 * Gets the Billing markup.
	 *
	 * @param array $args             List of Shortcode attributes.
	 * @param array $conditional_tags List of conditional tags.
	 *
	 * @return string
	 */
	public static function get_checkout_billing( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing Woo Checkout Details component.
 */
class ET_Builder_Module_Woocommerce_Checkout_Order_Details extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Swaps Checkout Order Details template.
	 *
	 * Coupon Remove Link must be shown in VB. Hence we swap the template.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template_fe( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Swaps Checkout Order Details template.
	 *
	 * Coupon Remove Link must be shown in VB. Hence we swap the template.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Reset hooks.
	 *
	 * @param array $conditional_tags Array of conditional tags.
	 */
	public static function maybe_reset_hooks( $conditional_tags ) {
	}
	/**
	 * Handle hooks.
	 *
	 * @param array $conditional_tags Array of conditional tags.
	 */
	public static function maybe_handle_hooks( $conditional_tags ) {
	}
	/**
	 * Gets the Checkout Order Details markup.
	 *
	 * @param array $args             Array of `depends_on` key/value pairs.
	 * @param array $conditional_tags Array of conditional tags.
	 *
	 * @return string
	 */
	public static function get_checkout_order_details( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Checkout Payment component.
 */
class ET_Builder_Module_Woocommerce_Checkout_Payment_Info extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Gets the Button classname.
	 *
	 * @used-by ET_Builder_Module_Helper_Woocommerce_Modules::add_custom_button_icons()
	 *
	 * @return string
	 */
	public function get_button_classname() {
	}
	/**
	 * Swaps login form template.
	 *
	 * By default WooCommerce displays these only when logged-out.
	 * However these templates must be shown in VB when logged-in. Hence we use these templates.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Reset hooks.
	 */
	public static function maybe_reset_hooks() {
	}
	/**
	 * Handle hooks.
	 */
	public static function maybe_handle_hooks() {
	}
	/**
	 * Gets the Checkout Payment info markup.
	 *
	 * @param array $args             Additional arguments.
	 * @param array $conditional_tags Array of conditional tags.
	 *
	 * @return string
	 */
	public static function get_checkout_payment_info( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Checks if module has background.
	 *
	 * @since 4.15.0
	 *
	 * @return bool
	 */
	protected function _module_has_background() {
	}
}
/**
 * Class representing WooCommerce Checkout shipping component.
 *
 * @since 4.14.0
 */
class ET_Builder_Module_Woocommerce_Checkout_Shipping extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Swaps Checkout Order Details template.
	 *
	 * Coupon Remove Link must be shown in VB. Hence we swap the template.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Handle hooks.
	 */
	public static function maybe_handle_hooks( $conditional_tags ) {
	}
	/**
	 * Reset hooks.
	 */
	public static function maybe_reset_hooks( $conditional_tags ) {
	}
	/**
	 * Gets the Checkout Shipping markup.
	 *
	 * @return string
	 */
	public static function get_checkout_shipping( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Cart Upsells component.
 *
 * @since 4.14.0
 */
class ET_Builder_Module_Woocommerce_Cross_Sells extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Swaps Cross-sells template.
	 *
	 * @param string $template      Template.
	 * @param string $template_name Template name.
	 * @param array  $args          Arguments.
	 * @param string $template_path Template path.
	 * @param string $default_path  Default path.
	 *
	 * @return string
	 */
	public static function swap_template( $template, $template_name, $args, $template_path, $default_path ) {
	}
	/**
	 * Gets Cross sells markup.
	 *
	 * @param array $args             Props.
	 * @param array $conditional_tags Conditional tags set during computed property AJAX call.
	 *
	 * @return string
	 */
	public static function get_cross_sells( $args = array(), $conditional_tags = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Description component.
 */
class ET_Builder_Module_Woocommerce_Description extends \ET_Builder_Module {




	/**
	 * Initialize.
	 *
	 * @since 4.0.6 Updated `toggle_slug` to avoid empty Tabs in Text OG.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Gets the Description
	 *
	 * @since 3.29
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return string
	 */
	public static function get_description( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Breadcrumb markup, we inject Multi view
	 * attributes on to the Outer wrapper.
	 *
	 * @param array                                     $outer_wrapper_attrs
	 * @param ET_Builder_Module_Woocommerce_Description $this_class
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs, $this_class ) {
	}
	/**
	 * Filter multi view value.
	 *
	 * @see ET_Builder_Module_Helper_MultiViewOptions::filter_value
	 *
	 * @param mixed                                     $raw_value  Props raw value.
	 * @param array                                     $args       {
	 *                                                              Context
	 *                                                              data.
	 *
	 * @type string                                     $context      Context param: content,
	 *       attrs, visibility, classes.
	 * @type string                                     $name         Module options props name.
	 * @type string                                     $mode         Current data mode: desktop,
	 *       hover, tablet, phone.
	 * @type string                                     $attr_key     Attribute key for attrs
	 *       context data. Example: src, class, etc.
	 * @type string                                     $attr_sub_key Attribute sub key that
	 *       availabe when passing attrs value as array such as styes. Example: padding-top,
	 *       margin-botton, etc.
	 * }
	 *
	 * @param ET_Builder_Module_Helper_MultiViewOptions $multi_view Multiview object instance.
	 *
	 * @return mixed
	 */
	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Gallery component.
 */
class ET_Builder_Module_Woocommerce_Gallery extends \ET_Builder_Module_Gallery {




	/**
	 * Modify properties defined on base module's (gallery) init()
	 *
	 * @since 3.29
	 */
	public function init() {
	}
	/**
	 * Insert Woo Galleries specific fields and modify fields inherited from base module (gallery)
	 *
	 * @return array
	 */
	public function get_fields() {
	}
	/**
	 * Gets Placeholder ID as Gallery IDs when in TB mode.
	 *
	 * @see https://github.com/elegantthemes/Divi/issues/18768
	 *
	 * @since 4.10.8
	 *
	 * @param array $conditional_tags Conditional Tags.
	 *
	 * @return array Array containing placeholder Id when in TB mode. Empty array otherwise.
	 */
	public static function get_gallery_ids( $conditional_tags ) {
	}
	/**
	 * Computed callback's callback method which adjusted arguments passed to original computed
	 * callback's callback so the result is suitable for Woo Gallery module
	 *
	 * @since 4.10.8 Load Placeholder Image when in TB mode.
	 * @since 3.29
	 *
	 * @param array $args             Arguments from Computed Prop AJAX call.
	 * @param array $conditional_tags Conditional Tags.
	 * @param array $current_page     Current page args.
	 *
	 * @return array
	 */
	public static function get_wc_gallery( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Modify module wrapper's classname
	 *
	 * @since 3.29
	 *
	 * @param array $classname    List of class names.
	 * @param int   $render_count Count of times the module is rendered.
	 *
	 * @return array
	 */
	public function add_wc_gallery_classname( $classname, $render_count ) {
	}
	/**
	 * Use ET_Builder_Module_Woocommerce_Gallery::get_wc_gallery() instead of base module's
	 * ET_Builder_Module_Gallery::get_gallery() method for defining attachment value in
	 * frontend's `render()` and visual builder's computed callback result
	 *
	 * @since 3.29
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return array
	 */
	public function get_attachments( $args = array() ) {
	}
}
/**
 * Class representing WooCommerce Images component.
 */
class ET_Builder_Module_Woocommerce_Images extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Get images output
	 *
	 * @since 4.12.0 Set $defaults['overwrite'] to array( 'product', 'post' )
	 * @since 3.29
	 *
	 * @param array $args Additional args.
	 *
	 * @return string
	 */
	public static function get_images( $args = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Meta component.
 */
class ET_Builder_Module_Woocommerce_Meta extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Get meta output
	 *
	 * @since 3.29
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return string
	 */
	public static function get_meta( $args = array() ) {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Breadcrumb markup, we inject Multi view
	 * attributes on to the Outer wrapper.
	 *
	 * @param array                              $outer_wrapper_attrs
	 * @param ET_Builder_Module_Woocommerce_Meta $this_class
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs, $this_class ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Price component.
 */
class ET_Builder_Module_Woocommerce_Price extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Get price data
	 *
	 * @since 3.29
	 *
	 * @param array $args             Arguments from Computed Prop AJAX call.
	 * @param array $conditional_tags Conditional Tags.
	 * @param array $current_page     Current page args.
	 *
	 * @return string
	 */
	public static function get_price( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Rating component.
 */
class ET_Builder_Module_Woocommerce_Rating extends \ET_Builder_Module {




	/**
	 * Initialize.
	 *
	 * @since 3.29.2 Added custom margin default.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Get rating output
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return string
	 */
	public static function get_rating( $args = array() ) {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Rating markup, we inject Multi view
	 * attributes on to the Outer wrapper.
	 *
	 * @param array $outer_wrapper_attrs
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Related Products component.
 *
 * @since 3.29
 */
class ET_Builder_Module_Woocommerce_Related_Products extends \ET_Builder_Module {




	/**
	 * Holds Prop values across static methods.
	 *
	 * @var array
	 *
	 * @used-by ET_Builder_Module_Woocommerce_Related_Products::get_related_products()
	 * @used-by ET_Builder_Module_Woocommerce_Related_Products::get_selected_related_product_args()
	 */
	public static $static_props;
	/**
	 * Number of products to be offset.
	 *
	 * @var int Default 0.
	 */
	public static $offset = 0;
	/**
	 * Initialize.
	 *
	 * @since 4.0.7 Introduced Product title toggle slug to allow Copy/Paste
	 * @see   {https://github.com/elegantthemes/Divi/issues/17436}
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Filters the related product category Ids.
	 *
	 * @since 4.14.0
	 *
	 * @param array $term_ids Term IDs.
	 *
	 * @return array
	 */
	public static function set_related_products_categories( $term_ids ) {
	}
	/**
	 * Appends offset to the WP_Query that retrieves Products.
	 *
	 * @since 4.14.0
	 *
	 * @param array $query_args Query args.
	 *
	 * @return array
	 */
	public static function append_offset( $query_args ) {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Gets the related Products.
	 *
	 * Used as a callback to the __related_products computed prop.
	 *
	 * @param array $args             Arguments from Computed Prop AJAX call.
	 * @param array $conditional_tags Conditional Tags.
	 * @param array $current_page     Current page args.
	 *
	 * @return string
	 */
	public static function get_related_products( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Returns the User selected Posts per page, columns and Order by values to WooCommerce.
	 *
	 * @param array $args Documented at
	 *                    {@see woocommerce_output_related_products()}.
	 *
	 * @return array
	 */
	public static function set_related_products_args( $args ) {
	}
	/**
	 * Gets the User set Posts per page, columns and Order by values.
	 *
	 * The static variable used in this method is set by
	 *
	 * @see ET_Builder_Module_Woocommerce_Related_Products::get_related_products()
	 *
	 * @return array
	 */
	public static function get_selected_related_product_args() {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Related Products markup, we inject Multi
	 * view attributes on to the Outer wrapper.
	 *
	 * @param array $outer_wrapper_attrs Outer wrapper attributes.
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @since 4.1.0 Show only Products irrespective of Customizer Product Catalog setting on Shop page.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Reviews component.
 */
class ET_Builder_Module_Woocommerce_Reviews extends \ET_Builder_Module_Comments {




	/**
	 * Modify properties defined on base module's (comment) init()
	 *
	 * @since 3.29
	 */
	public function init() {
	}
	/**
	 * Insert Woo Reviews specific fields and modify fields inherited from base module (comments).
	 *
	 * @return array
	 */
	public function get_fields() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Get reviews HTML.
	 *
	 * @param array $args             Arguments from Computed Prop AJAX call.
	 * @param array $conditional_tags Conditional Tags.
	 * @param array $current_page     Current page args.
	 *
	 * @return string
	 */
	public static function get_reviews_html( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Gets the Reviews markup.
	 *
	 * This includes the Reviews and the Review comment form.
	 *
	 * @since 3.29
	 *
	 * @param WC_Product $product      WooCommerce Product.
	 * @param string     $header_level Heading level.
	 * @param bool       $is_ajax      Should be set to TRUE when used in AJAX call for proper
	 *                                 results.
	 *
	 * @return string
	 */
	public static function get_reviews_markup( $product, $header_level, $is_ajax = \false ) {
	}
	/**
	 * Add classname into module wrapper.
	 *
	 * @param array $classname    List of class names.
	 * @param int   $render_count Count of times the module is rendered.
	 */
	public function add_wc_reviews_classname( $classname, $render_count ) {
	}
	/**
	 * Remove action and filter hook performed before comment contents rendering by extending
	 * the method because Woo Reviews doesn't need it
	 *
	 * @since 3.29
	 */
	public function before_comments_content() {
	}
	/**
	 * Render review (comments) content
	 *
	 * @since 3.29
	 */
	public function get_comments_content() {
	}
	/**
	 * Remove action and filter hook performed before comment contents rendering by extending
	 * the method because Woo Reviews doesn't need it.
	 *
	 * @since 3.29
	 */
	public function after_comments_content() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class ET_Builder_Module_Shop
 * Handles setting up everything we need for shop module.
 */
class ET_Builder_Module_Shop extends \ET_Builder_Module_Type_PostBased {




	/**
	 * Number of products to be offset.
	 *
	 * @var int Default 0.
	 */
	public static $offset = 0;
	/**
	 * Initialize the module class.
	 *
	 * @access public
	 * @return void
	 */
	public function init() {
	}
	/**
	 * Get's the module fields.
	 *
	 * @access public
	 * @return array $fields Module Fields.
	 */
	public function get_fields() {
	}
	/**
	 * Fixes the incorrect total results in the WooCommerce query results
	 * when both pagination and sorting is used.
	 *
	 * Since the following correct approaches doesn't work,
	 * this (the following function) workaround is used.
	 *
	 * #1 Approach (that had no success)
	 * `found_posts` filter is intended to manually fix the total count.
	 * {@link https://developer.wordpress.org/reference/hooks/found_posts/}
	 * However this filter turned out to be no good with the total count in this case.
	 *
	 * #2 Approach (that had no success)
	 * WP_Query's `no_found_rows` query var should be unset when pagination is turned on.
	 * This approach failed to show the correct count when Sorting was used
	 * but worked as expected when sorting wasn't used.
	 *
	 * @param stdClass $results Query results.
	 *
	 * @return mixed
	 */
	public static function adjust_offset_pagination( $results ) {
	}
	/**
	 * Appends offset to the WP_Query that retrieves Products.
	 *
	 * @since 4.14.0
	 *
	 * @param array $query_args Query args.
	 *
	 * @return array
	 */
	public static function append_offset( $query_args ) {
	}
	/**
	 * Get CSS fields transition.
	 *
	 * @inheritdoc
	 * @since      4.0.6 Handle star rating letter spacing.
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Insert class name where required.
	 *
	 * @param  array $classes Existing classes.
	 * @return array Classes to be added.
	 */
	public function add_product_class_name( $classes ) {
	}
	/**
	 * Get shop details for shop module
	 *
	 * @param  array $args             arguments that affect shop output.
	 * @param  array $conditional_tags passed conditional tag for update process.
	 * @param  array $current_page     passed current page params.
	 * @return string HTML markup for shop module
	 */
	public function get_shop( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Set correct default value for the orderby menu depending on module settings.
	 *
	 * @param  string $default_orderby default orderby value from woocommerce settings.
	 * @return string updated orderby value for current module
	 */
	public function set_default_orderby( $default_orderby ) {
	}
	/**
	 * Get shop HTML for shop module
	 *
	 * @param  array $args             arguments that affect shop output.
	 * @param  array $conditional_tags passed conditional tag for update process.
	 * @param  array $current_page     passed current page params.
	 * @return string HTML markup for shop module
	 */
	public static function get_shop_html( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * WooCommerce changed the title tag from h3 to h2 in 3.0.0
	 *
	 * @return string HTML markup for title selector.
	 */
	public function get_title_selector() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
	/**
	 * Filter the products query arguments.
	 *
	 * @since 4.0.5
	 *
	 * @param array $query_args Query array.
	 *
	 * @return array
	 */
	public function filter_products_query( $query_args ) {
	}
	/**
	 * Filter the vendors products query arguments on vendor archive page.
	 *
	 * @param array $query_args WP_Query arguments.
	 *
	 * @return array
	 */
	public function filter_vendors_products_query( $query_args ) {
	}
	/**
	 * Filter the products shortcode query so Woo widget filters apply.
	 *
	 * @since 4.0.8
	 *
	 * @param WP_Query $query WP QUERY object.
	 */
	public function apply_woo_widget_filters( $query ) {
	}
}
/**
 * Class representing WooCommerce Stock component.
 */
class ET_Builder_Module_Woocommerce_Stock extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Get stock output
	 *
	 * @since 3.29
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return string
	 */
	public static function get_stock( $args = array() ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Add to cart component.
 *
 * @since 3.29
 */
class ET_Builder_Module_Woocommerce_Tabs extends \ET_Builder_Module_Tabs {




	/**
	 * Holds WooCommerce Tabs data rendered by self::get_tabs().
	 *
	 * @var array
	 */
	public $rendered_tabs_data = array();
	/**
	 * Define WooCommerce Tabs property.
	 */
	public function init() {
	}
	/**
	 * Get product all possible tabs data
	 *
	 * @since 3.29
	 * @since 4.4.2   Fix to include Custom tabs.
	 *
	 * @global WP_Post    $post    WordPress Post.
	 * @global WC_Product $product WooCommerce Product.
	 *
	 * @return array
	 */
	public function get_product_tabs() {
	}
	/**
	 * Get product tabs options; product data formatted for checkbox control's options
	 *
	 * @since 3.29
	 *
	 * @return array
	 */
	public function get_tab_options() {
	}
	/**
	 * Get product tabs default based on product tabs options
	 *
	 * @since 3.29
	 *
	 * @return string
	 */
	public function get_tab_defaults() {
	}
	/**
	 * Define Woo Tabs fields
	 *
	 * @since 3.29
	 *
	 * @return array
	 */
	public function get_fields() {
	}
	/**
	 * Get tabs nav output
	 *
	 * @since 3.29
	 *
	 * @return string
	 */
	public function get_tabs_nav() {
	}
	/**
	 * Get tabs content output
	 *
	 * @since 4.4.1 Fix [embed][/embed] shortcodes not working in tab content
	 * @since 3.29
	 *
	 * @return string
	 */
	public function get_tabs_content() {
	}
	/**
	 * Load comments template.
	 *
	 * @param  string $template template to load.
	 * @return string
	 */
	public static function comments_template_loader( $template ) {
	}
	/**
	 * Get tabs data
	 *
	 * @since 4.0.9 Avoid fetching Tabs content using `the_content` when editing TB layout.
	 *
	 * @param array $args Additional args.
	 *
	 * @return array
	 */
	public static function get_tabs( $args = array() ) {
	}
	/**
	 * Gets Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Breadcrumb markup, we inject Multi view
	 * attributes on to the Outer wrapper.
	 *
	 * @used-by ET_Builder_Module_Tabs::render()
	 *
	 * @return string
	 */
	public function get_multi_view_attrs() {
	}
}
/**
 * Class representing WooCommerce Title component.
 */
class ET_Builder_Module_Woocommerce_Title extends \ET_Builder_Module {




	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Gets the Title.
	 *
	 * @param array $args Additional arguments.
	 *
	 * @return string
	 */
	public static function get_title( $args = array() ) {
	}
	/**
	 * Gets the WooCommerce Product Title markup.
	 *
	 * @return string
	 */
	protected function get_title_markup() {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Class representing WooCommerce Upsells component.
 */
class ET_Builder_Module_Woocommerce_Upsells extends \ET_Builder_Module {




	/**
	 * Holds Prop values across static methods.
	 *
	 * @var array
	 */
	public static $static_props;
	/**
	 * Number of products to be offset.
	 *
	 * @var int Default 0.
	 */
	public static $offset = 0;
	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_fields() {
	}
	/**
	 * Appends offset to the WP_Query that retrieves Products.
	 *
	 * @since 4.14.0
	 *
	 * @param array $query_args Query args.
	 *
	 * @return array
	 */
	public static function append_offset( $query_args ) {
	}
	/**
	 * {@inheritdoc}
	 */
	public function get_transition_fields_css_props() {
	}
	/**
	 * Gets the Upsells Products.
	 *
	 * Used as a callback to the __upsells computed prop.
	 *
	 * @param array $args             Arguments from Computed Prop AJAX call.
	 * @param array $conditional_tags Conditional Tags.
	 * @param array $current_page     Current page args.
	 *
	 * @return string
	 */
	public static function get_upsells( $args = array(), $conditional_tags = array(), $current_page = array() ) {
	}
	/**
	 * Returns the User selected Posts per page, columns and Order by values to WooCommerce.
	 *
	 * @param array $args Documented at
	 *                    {@see woocommerce_upsell_display()}.
	 *
	 * @return array
	 */
	public static function set_upsell_display_args( $args ) {
	}
	/**
	 * Gets the User set Posts per page, columns and Order by values.
	 *
	 * The static variable used in this method is set by
	 *
	 * @see ET_Builder_Module_Woocommerce_Upsells::get_upsells()
	 *
	 * @return array
	 */
	public static function get_selected_upsell_display_args() {
	}
	/**
	 * Adds Multi view attributes to the Outer wrapper.
	 *
	 * Since we do not have control over the WooCommerce Related Products markup, we inject Multi
	 * view attributes on to the Outer wrapper.
	 *
	 * @param array $outer_wrapper_attrs Outer wrapper attributes.
	 *
	 * @return array
	 */
	public function add_multi_view_attrs( $outer_wrapper_attrs ) {
	}
	/**
	 * Renders the module output.
	 *
	 * @param array  $attrs       List of attributes.
	 * @param string $content     Content being processed.
	 * @param string $render_slug Slug of module that is used for rendering output.
	 *
	 * @return string
	 */
	public function render( $attrs, $content, $render_slug ) {
	}
}
/**
 * Compatibility for the Advanced Custom Fields plugin.
 *
 * @since 3.17.2
 *
 * @link https://www.advancedcustomfields.com/
 */
class ET_Builder_Plugin_Compat_Advanced_Custom_Fields extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 3.17.2
	 */
	public function __construct() {
	}
	/**
	 * Get the currently activated ACF plugin id as the FREE and PRO versions are separate plugins.
	 *
	 * @since 3.18
	 *
	 * @return string
	 */
	protected function _get_plugin_id() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 3.17.2
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Format ACF meta values accordingly.
	 *
	 * @since 3.17.2
	 *
	 * @param string  $meta_value
	 * @param string  $meta_key
	 * @param integer $post_id
	 *
	 * @return string
	 */
	public function maybe_filter_dynamic_content_meta_value( $meta_value, $meta_key, $post_id ) {
	}
	/**
	 * Format ACF dynamic content field.
	 *
	 * @since 3.17.2
	 *
	 * @param array[] $custom_fields
	 * @param int     $post_id
	 * @param mixed[] $raw_custom_fields
	 *
	 * @return array[] modified $custom_fields
	 */
	public function maybe_filter_dynamic_content_fields( $custom_fields, $post_id, $raw_custom_fields ) {
	}
	/**
	 * Format ACF dynamic content fields for TB layouts.
	 *
	 * @since 4.0.9
	 *
	 * @param array[] $custom_fields
	 * @param int     $post_id
	 * @param mixed[] $raw_custom_fields
	 *
	 * @return array[] modified $custom_fields
	 */
	public function maybe_filter_dynamic_content_fields_from_groups( $custom_fields, $post_id, $raw_custom_fields ) {
	}
	/**
	 * Expand ACF fields into their subfields in the order they are specified, if any.
	 *
	 * @since 4.0.9
	 *
	 * @param array[] $fields
	 * @param string  $name_prefix
	 * @param string  $label_prefix
	 *
	 * @return array[]
	 */
	public function expand_fields( $fields, $name_prefix = '', $label_prefix = '' ) {
	}
	/**
	 * Format a field value based on the field type.
	 *
	 * @param mixed $value
	 * @param array $field
	 *
	 * @return mixed
	 */
	protected function format_field_value( $value, $field ) {
	}
	/**
	 * Format a placeholder value based on the field type.
	 *
	 * @param string  $meta_key
	 * @param integer $post_id
	 *
	 * @return mixed
	 */
	protected function format_placeholder_value( $meta_key, $post_id ) {
	}
}
/**
 * Plugin compatibility for Amazon S3 Offload
 *
 * @since 3.0.49
 *
 * @link https://wordpress.org/plugins/amazon-s3-and-cloudfront/
 */
class ET_Builder_Plugin_Compat_WP_Offload_S3_Pro extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 1.1.6
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * @param bool $verification
	 *
	 * @return bool
	 */
	function override_fb_ajax_save_verification( $verification ) {
	}
}
/**
 * Plugin compatibility for Amazon S3 Offload
 *
 * @since 3.0.49
 *
 * @link https://wordpress.org/plugins/amazon-s3-and-cloudfront/
 */
class ET_Builder_Plugin_Compat_WP_Offload_S3 extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 1.1.6
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * @param bool $verification
	 *
	 * @return bool
	 */
	function override_fb_ajax_save_verification( $verification ) {
	}
	/**
	 * Filter attachment ID in case it has an external/CDN URL.
	 *
	 * @since 4.2.1
	 *
	 * @param bool|int $attachment_id_pre Default value. Default is false.
	 * @param string   $url               URL of the image need to query.
	 *
	 * @return bool|int
	 */
	public function et_get_attachment_id_by_url_pre( $attachment_id_pre, $url ) {
	}
	/**
	 * Filter the raw post content to be used to generate the builder data.
	 * The `et_fb_get_builder_shortcode_object()` directly access the raw post_content, so the image URL not properly transformed
	 *
	 * @since 4.7.0
	 *
	 * @param  string $post_content The post content.
	 * @param  string $post_id      The post ID.
	 * @return string
	 */
	public function filter_urls_on_raw_post_content( $post_content, $post_id ) {
	}
}
/**
 * Plugin compatibility for Autoptimize
 *
 * @since 3.17.1
 *
 * @link https://wordpress.org/plugins/autoptimize/
 */
class ET_Builder_Plugin_Compat_Autoptimize extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Plugin compatibility for Caldera Forms
 *
 * @since 3.17.3
 *
 * @link https://wordpress.org/plugins/caldera-forms/
 */
class ET_Builder_Plugin_Compat_Caldera_Forms extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 1.7.6
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Compatibility for the Cartflows plugin.
 *
 * @since 4.0.7
 *
 * @link https://wordpress.org/plugins/cartflows/
 */
class ET_Builder_Plugin_Compat_Cartflows extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.0.7
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.0.7
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Disable theme builder for specific Cartflow templates that don't use
	 * the normal WordPress partials (get_header(), get_footer()).
	 *
	 * @since 4.0.7
	 */
	public function maybe_disable_theme_builder() {
	}
	/**
	 * Disable theme builder for the current request by returning no layouts for it.
	 *
	 * @since 4.0.7
	 *
	 * @param array $layouts
	 *
	 * @return array
	 */
	public function disable_theme_builder( $layouts ) {
	}
}
/**
 * Plugin compatibility for CDN Enabler
 *
 * @since 3.19.10
 *
 * @link https://wordpress.org/plugins/cdn-enabler/
 */
class ET_Builder_Plugin_Compat_CDN_Enabler extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Replace CDN Enabler option with custom values.
	 *
	 * @param string $value Option value.
	 *
	 * @access public.
	 * @return void
	 */
	public function option_cdn_enabler( $value ) {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 1.0.8
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Plugin compatibility for CoursePress Pro
 *
 * @since 3.21.3
 */
class ET_Builder_Plugin_Compat_CoursePress extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Add the filter again.
	 *
	 * @access public.
	 * @return void
	 */
	public function current_screen() {
	}
}
/**
 * Plugin Compatibility for Divi Filterable Blog Module.
 *
 * @since 4.11.4
 */
class ET_Builder_Plugin_Compat_Divi_Filterable_Blog_Module extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.11.4
	 */
	public function __construct() {
	}
	/**
	 * Initialize hooks.
	 *
	 * @since 4.11.4
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Plugin compatibility for Divi Code Snippet Module
 *
 * @since 3.17.3
 */
class ET_Builder_Plugin_Compat_Divi_Code_Snippet_Module extends \ET_Builder_Plugin_Compat_Base {




	protected $posts = '';
	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Saves filter value for later use.
	 *
	 * @return array
	 */
	public function the_posts( $posts ) {
	}
	/**
	 * Runs when the builder is ready.
	 *
	 * @return void
	 */
	public function et_builder_ready() {
	}
}
/**
 * Plugin compatibility for Divi Testimonial Slider.
 *
 * @since 4.0.10
 */
class ET_Builder_Plugin_Compat_DiviTestimonialSlider extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.0.10
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.0.10
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Replace the random default with a fixed value.
	 *
	 * @since 4.0.10
	 *
	 * @param array $advanced_fields
	 *
	 * @return array
	 */
	public function remove_random_default( $fields_unprocessed ) {
	}
}
/**
 * Plugin compatibility for Divi Layout Injector
 *
 * @since 3.0.62
 *
 * @link https://elegantmarketplace.com/downloads/divi-layout-injector
 */
class ET_Builder_Plugin_Compat_Divi_Layout_Injector extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * Disable layout injection when editing TB layouts.
	 *
	 * @since 4.0
	 */
	function maybe_disable_in_tb() {
	}
	function maybe_filter_builder_used() {
	}
	function updated_option_cb( $option, $old_value, $value ) {
	}
	function updated_post_meta_cb( $meta_id, $object_id, $meta_key, $_meta_value ) {
	}
	function will_inject_layout() {
	}
}
/**
 * Plugin compatibility for Divi Woo Layout Injector.
 *
 * @since 4.0.5
 *
 * @link https://elegantmarketplace.com/downloads/woo-layout-injector-subscription/
 */
class ET_Builder_Plugin_Compat_Divi_Woo_Layout_Injector extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * Disable layout injection when editing TB layouts.
	 *
	 * @since 4.0.5
	 *
	 * @param string $content
	 *
	 * @return string
	 */
	function maybe_disable_in_the_content( $content ) {
	}
}
/**
 * Plugin compatibility for dk-pdf
 *
 * @since 3.0.96
 * @link  https://wordpress.org/plugins/dk-pdf/
 */
class ET_Builder_Plugin_Compat_DK_Pdf extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 * Note: once this issue is fixed in future version, run version_compare() to limit the scope
	 * of the hooked fix
	 * Latest plugin version: 1.9.3
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * Modify priority of et_builder_add_main_elements() hook so it'll be triggered before dk-pdf
	 *
	 * @return int
	 */
	function fix_load_main_elements_priority( $priority ) {
	}
	/**
	 * Modify DK PDF button if the page uses builder
	 *
	 * @return void
	 */
	function fix_dkpdf_button_styling() {
	}
}
/**
 * Plugin compatibility for CoursePress Pro
 *
 * @since 3.21.3
 */
class ET_Builder_Plugin_Compat_DiviRocket extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Remove the extra shortcode manager.
	 *
	 * @since  4.10.0
	 * @return void
	 */
	public function remove_shortcode_manager() {
	}
}
/**
 * Plugin compatibility for easy-digital-downloads
 *
 * @since 0.7 (builder version)
 * @link  https://easydigitaldownloads.com
 */
class ET_Builder_Plugin_Compat_Easy_Digital_Downloads extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 * Note: once this issue is fixed in future version, run version_compare() to limit the scope of the hooked fix
	 * Latest plugin version: 2.6.17
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * Appended et_pb_button for various EDD button so it matches Divi styled button
	 *
	 * @param  array initial link configuration
	 * @return array moodified link configuration
	 */
	function purchase_link_defaults( $args ) {
	}
	/**
	 * Addded et_pb_button class for checkout button which has no attribute filter
	 *
	 * @param  string of HTML of the button
	 * @return string of modified HTML of the button
	 */
	function modify_edd_checkout_button_purchase( $button ) {
	}
	/**
	 * Added additional styling & scripts for EDD on Divi
	 *
	 * @return void
	 */
	function add_compatibility_scripts() {
	}
}
/**
 * Compatibility for the EventOn plugin.
 *
 * @since 3.10
 *
 * @link http://www.myeventon.com/
 */
class ET_Builder_Plugin_Compat_Eventon extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Event post type.
	 *
	 * @var string
	 */
	protected $event_post_type = 'ajde_events';
	/**
	 * Constructor.
	 *
	 * @since 3.10
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 3.10
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Get whether the EventOn content filter is set to WordPress' default one.
	 *
	 * @since 3.10
	 *
	 * @return boolean
	 */
	public function uses_default_filter() {
	}
	/**
	 * Maybe filter the post type blocklist if the post type is not supported.
	 *
	 * @since 3.10
	 *
	 * @param string[] $post_types
	 *
	 * @return string[]
	 */
	public function maybe_filter_post_type_blocklist( $post_types ) {
	}
	/**
	 * Maybe filter the supported post type allowlist if the post type is supported.
	 *
	 * @since 3.10
	 *
	 * @param string[] $post_types
	 *
	 * @return string[]
	 */
	public function maybe_filter_third_party_post_types( $post_types ) {
	}
	/**
	 * Maybe filter the enabled post type list if the post type has been enabled but the content
	 * filter has been changed back to the unsupported one.
	 *
	 * @since 3.10
	 *
	 * @param string[] $post_types
	 *
	 * @return string[]
	 */
	public function maybe_filter_builder_post_types( $post_types ) {
	}
	/**
	 * Maybe disable the FB for a given post if the builder was enabled but the
	 * content filter was switched after that.
	 *
	 * @since 3.10
	 *
	 * @param boolean $enabled
	 * @param integer $post_id
	 *
	 * @return boolean
	 */
	public function maybe_filter_fb_enabled_for_post( $enabled, $post_id ) {
	}
}
/**
 * Compatibility for Events Manager plugin.
 *
 * @since 3.10
 *
 * @link https://wordpress.org/plugins/events-manager/
 */
class ET_Builder_Plugin_Compat_Events_Manager extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 3.10
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 3.10
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Pass the single event content through et_fb_app_boot() since Events Manager skips usual
	 * `the_content` filters.
	 *
	 * @since 3.10
	 *
	 * @param string $replace
	 * @param mixed  $event
	 * @param string $full_result
	 * @param mixed  $target
	 *
	 * @return string
	 */
	public function maybe_filter_content( $replace, $event, $full_result, $target ) {
	}
}
/**
 * Compatibility for Image Photo Gallery Final Tiles Grid.
 *
 * @since 4.10.6
 *
 * @link https://wordpress.org/plugins/final-tiles-grid-gallery-lite/
 */
class ET_Builder_Plugin_Compat_Image_Photo_Gallery_Final_Tiles_Grid extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.6
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.6
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Maybe Disable JQuery Body feature.
	 *
	 * @since 4.10.6
	 *
	 * @param bool   $enabled Whether the feature should be enabled or not.
	 * @param string $content TB/Post content.
	 *
	 * @return bool
	 */
	public function maybe_disable_jquery_body( $enabled, $content ) {
	}
}
/**
 * Plugin compatibility for Gravityforms
 *
 * @since 3.19
 *
 * @link https://www.gravityforms.com/
 */
class ET_Builder_Plugin_Compat_Gravityforms extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Compatibility Gravity Forms Signature Add-On.
 *
 * @since 4.10.6
 *
 * @link https://gravityforms.com
 */
class ET_Builder_Plugin_Compat_GravityForms_Signature_AddOn extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.6
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.6
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Maybe Disable JQuery Body feature.
	 *
	 * @since 4.10.6
	 *
	 * @param bool   $enabled Whether the feature should be enabled or not.
	 * @param string $content TB/Post content.
	 *
	 * @return bool
	 */
	public function maybe_disable_jquery_body( $enabled, $content ) {
	}
}
/**
 * Compatibility for the Heroic Knowledge Base plugin.
 *
 * @link https://herothemes.com/plugins/heroic-wordpress-knowledge-base/
 */
class ET_Builder_Plugin_Compat_HT_Knowledge_Base extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Compatibility with Heroic Knowledge Base :: Theme Builder doesn't work on category pages
	 * https://github.com/elegantthemes/Divi/issues/22184
	 *
	 * @param string $template The template file.
	 *
	 * @return string $template The filtered template file.
	 */
	public function tb_category_page_compatibility( $template ) {
	}
}
/**
 * Compatibility for the Imagify plugin.
 *
 * @since 4.4.6
 *
 * @link https://wordpress.org/plugins/imagify/
 */
class ET_Builder_Plugin_Compat_Imagify extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.4.6
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.4.6
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Overrides main style if needed. Please modify it accordingly in the future.
	 *
	 * @since 4.4.6
	 */
	public function overrides_main_style() {
	}
	/**
	 * Overrides customizer style if needed. Please modify it accordingly in the future.
	 *
	 * @since 4.4.6
	 */
	function overrides_customizer_styles() {
	}
}
/**
 * Plugin compatibility for insert-pages
 *
 * @since 0.7 (builder version)
 * @link  https://wordpress.org/plugins/insert-pages/
 */
class ET_Builder_Plugin_Compat_Insert_Pages extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 * Note: once this issue is fixed in future version, run version_compare() to limit the scope of the hooked fix
	 * Latest plugin version: 2.7.2
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * insert-pages' tinyMCE button causes sub-module's tinyMCE editor to be empty when being opened.
	 * This might damage user's content. Since there's no hook to filter or modify insert-pages' js events,
	 * it'd be safer to deregister insert-pages' tinyMCE button
	 *
	 * @return void
	 */
	function disable_mce_buttons_on_builder() {
	}
}
/**
 * Plugin compatibility for Jucra ACF Maps.
 *
 * @since 4.10.5
 *
 * @link https://www.jucra.com/display-acf-maps-in-a-divi-theme-builder-page/
 */
class ET_Builder_Plugin_Compat_Jucra_ACF_Maps extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Disable JQuery Body feature when showing a map
	 *
	 * @since 4.10.5
	 *
	 * @param bool   $enabled Whether the feature should be enabled or not.
	 * @param string $content TB/Post Content.
	 *
	 * @return bool
	 */
	public function maybe_disable_jquery_body( $enabled, $content = '' ) {
	}
}
/**
 * Compatibility for kvCORE.
 *
 * @since 4.10.8
 *
 * @link https://wordpress.org/plugins/kvcore-idx/
 */
class ET_Builder_Plugin_Compat_KvCORE extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.8
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.8
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Plugin compatibility for WordPress Landing Pages
 */
class ET_Builder_Plugin_Compat_Landing_Pages extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	function fix_the_content_hooks() {
	}
}
/**
 * Compatibility for M Chart.
 *
 * @since 4.10.6
 *
 * @link http://github.com/methnen/m-chart
 */
class ET_Builder_Plugin_Compat_M_Chart extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.6
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.6
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Maybe Disable JQuery Body feature.
	 *
	 * @since 4.10.6
	 *
	 * @param bool   $enabled Whether the feature should be enabled or not.
	 * @param string $content TB/Post content.
	 *
	 * @return bool
	 */
	public function maybe_disable_jquery_body( $enabled, $content ) {
	}
}
/**
 * Plugin compatibility for "MapPress Easy Google Maps"
 *
 * @since 3.0.98
 * @link  https://wordpress.org/plugins/insert-pages/
 */
class ET_Builder_Plugin_Compat_Mappress extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 * Once this issue is fixed in future version, do version_compare() to limit the scope of the fix
	 * Latest plugin version: 2.47.5
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * Mappress loads the exact same Google Maps library Divi is using which causes an issue
	 *
	 * @return void
	 */
	function dequeue_scripts() {
	}
}
/**
 * Plugin compatibility for Max Mega Menu
 *
 * @since 4.4.5
 *
 * @link https://wordpress.org/plugins/megamenu/
 */
class ET_Builder_Plugin_Compat_Megamenu extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Remove Mega Menu sidebar from Builders widget areas list.
	 *
	 * @since 4.4.5
	 *
	 * @return void
	 */
	public function remove_sidebar( $list ) {
	}
}
/**
 * Compatibility for Modern Events Calendar Lite.
 *
 * @since 4.10.6
 *
 * @link https://wordpress.org/plugins/modern-events-calendar-lite/
 */
class ET_Builder_Plugin_Compat_Modern_Events_Calendar_Lite extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.6
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.6
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Compatibility for NEX-Forms.
 *
 * @since 4.10.8
 *
 * @link https://wordpress.org/plugins/nex-forms-express-wp-form-builder/
 */
class ET_Builder_Plugin_Compat_NEX_Forms extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.8
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.8
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Maybe Disable JQuery Body feature.
	 *
	 * @since 4.10.8
	 *
	 * @param bool   $enabled Whether the feature should be enabled or not.
	 * @param string $content TB/Post content.
	 *
	 * @return bool
	 */
	public function maybe_disable_jquery_body( $enabled, $content ) {
	}
}
/**
 * Plugin compatibility for Paid Membership Pro
 *
 * @since 3.20.2
 *
 * @link https://wordpress.org/plugins/paid-memberships-pro/
 */
class ET_Builder_Plugin_Compat_PaidMembershipProp extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Disable plugin redirections when VB/BFB page and current user can edit.
	 *
	 * @return void
	 */
	public function wp() {
	}
}
/**
 * Plugin compatibility for Photo Gallery
 *
 * @since 3.21.3
 */
class ET_Builder_Plugin_Compat_PhotoGallery extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Disable plugin's TinyMCE custom button because it doesn't work in VB
	 *
	 * @access public.
	 * @return void
	 */
	public function wp() {
	}
}
/**
 * Plugin compatibility for PilotPress Views
 *
 * @since 3.21.1
 *
 * @link https://wordpress.org/plugins/pilotpress/
 */
class ET_Builder_Plugin_Compat_PilotPress extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Remove plugin's custom content filter.
	 *
	 * @return void
	 */
	public function pilotpress_content_hiding() {
	}
}
/**
 * Compatibility for Popup Maker plugin.
 *
 * @since 4.13.0
 *
 * @link https://wordpress.org/plugins/popup-maker/
 */
class ET_Builder_Plugin_Compat_Popup_Maker extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.13.0
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.13.0
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Return false if Popup Maker is active to disable dynamic assets feature.
	 *
	 * @since 4.13.0
	 *
	 * @param bool $current_state Current state of the feature.
	 *
	 * @return string
	 */
	public function et_builder_disable_dynamic_features( $current_state ) {
	}
	/**
	 * Update Divi Builder selector for Popup Maker plugin.
	 * The purpose of this update is to make sure custom module styles applied to the content inside Popup Maker which placed outside the main page content and `#page-container` container
	 *
	 * @since 4.13.0
	 *
	 * @param string $selector Selector to modify.
	 *
	 * @return string
	 */
	public function et_builder_maybe_update_module_styles_selector( $selector ) {
	}
	/**
	 * Update Divi Builder selector for Popup Maker plugin.
	 * The purpose of this update is to make sure custom module styles applied to the content inside Popup Maker which placed outside the main page content and `#et-boc` container
	 *
	 * @since 4.13.0
	 *
	 * @param string $selector Selector to modify.
	 *
	 * @return string
	 */
	public function et_builder_maybe_update_selector( $selector ) {
	}
	/**
	 * Update divi-style handle when replacing divi main style with the CPT style for Popup Maker plugin.
	 * The purpose of this update is to make sure Divi main style is loaded along with the CPT style
	 * Otherwise Content inside Popup Maker plugin loses styles because it's placed outside the main page content and `#et-boc` container
	 *
	 * @since 4.13.0
	 *
	 * @param string $handle Handle to modify.
	 *
	 * @return string
	 */
	public function et_builder_maybe_update_style_handle( $handle ) {
	}
	/**
	 * Override Waypoints context for modules inside Popup Maker overlay.
	 *
	 * @since 4.15.0
	 *
	 * @param array $options Waypoints options.
	 *
	 * @return array Filtered Waypoints options.
	 */
	public function maybe_override_waypoints_options( $options ) {
	}
}
/**
 * Compatibility for the Relevanssi plugin.
 *
 * @since 4.7.0
 *
 * @link https://wordpress.org/plugins/relevanssi/
 */
class ET_Builder_Plugin_Compat_Relevanssi extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.7.0
	 */
	public function __construct() {
	}
	/**
	 * Get the currently activated plugin id as the FREE and PRO versions are separate plugins.
	 *
	 * @since 4.9.4
	 *
	 * @return string
	 */
	protected function _get_plugin_id() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.7.0
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Maybe modify blog query to intercept the posts result.
	 *
	 * @since 4.7.0
	 *
	 * @param WP_Query $query Main blog query.
	 *
	 * @return WP_Query Modified blog query.
	 */
	public function maybe_modify_blog_query( $query ) {
	}
}
/**
 * Plugin compatibility for Sellsy
 *
 * @since 4.17.5
 * @link  https://wordpress.org/plugins/sellsy/
 */
class ET_Builder_Plugin_Compat_Sellsy extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Method to return unseted variable
	 *
	 * @return void
	 */
	public function sellsy_restore_post_global() {
	}
}
/**
 * Compatibility for the Rank Math SEO plugin.
 *
 * @since 4.4.2
 *
 * @link https://wordpress.org/plugins/seo-by-rank-math/
 */
class ET_Builder_Plugin_Compat_Rank_Math_SEO extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.4.2
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.4.2
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Add Divi builder module's images to Rank Math sitemap.
	 *
	 * @since 4.4.2
	 *
	 * @param  array $images  Existing images.
	 * @param  int   $post_id
	 * @return array
	 */
	public function get_module_images( $images, $post_id ) {
	}
	/**
	 * Get module shortcode from post content.
	 *
	 * @since 4.4.2
	 *
	 * @param  string $content
	 * @param  string $module
	 * @return string
	 */
	private function _get_module_shortcode( $content, $module ) {
	}
	/**
	 * Get image attributes value and collect them as an array. Attributes list:
	 * source URL, title text, and alternative text.
	 *
	 * @since 4.4.2
	 *
	 * @param  string $module
	 * @param  array  $module_attrs
	 * @return array
	 */
	private function _get_image_attrs( $module, $module_attrs ) {
	}
	/**
	 * Get image attribute value from the module shortcode.
	 *
	 * @since 4.4.2
	 *
	 * @param  string $content
	 * @param  string $attr
	 * @return string
	 */
	private function _get_image_attr( $content, $attr ) {
	}
}
/**
 * Compatibility for the LearnDash plugin.
 *
 * @since 4.3.4
 *
 * @link https://www.learndash.com/
 */
class ET_Builder_Plugin_Compat_LearnDash extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Original `in_the_loop` property value for the layouts.
	 *
	 * @var array
	 */
	protected $_in_the_loop = array();
	/**
	 * Constructor.
	 *
	 * @since 4.3.4
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.3.4
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Maybe override `$wp_query` temporarily before TB layout body template.
	 *
	 * @since 4.7.4
	 *
	 * @param integer $layout_id      TB layout post ID (header, body, footer).
	 * @param boolean $layout_enabled Current layout status whether is enabled or not.
	 * @param integer $template_id    TB template post ID (parent of TB layout).
	 */
	public function maybe_override_query_before_body( $layout_id, $layout_enabled, $template_id ) {
	}
	/**
	 * Maybe restore `$wp_query` after TB layout body template rendered.
	 *
	 * @since 4.7.4
	 *
	 * @param integer $layout_id      TB layout post ID (header, body, footer).
	 * @param boolean $layout_enabled Current layout status whether is enabled or not.
	 * @param integer $template_id    TB template post ID (parent of TB layout).
	 */
	public function maybe_override_query_after_body( $layout_id, $layout_enabled, $template_id ) {
	}
	/**
	 * Disable TB hooks for Divi and Extra.
	 *
	 * @since 4.3.4
	 */
	public function fire_learndash_compatibility_action() {
	}
	/**
	 * Maybe inject the TB header back in.
	 *
	 * @since 4.3.4
	 */
	public function maybe_inject_theme_builder_header() {
	}
	/**
	 * Maybe inject the TB footer back in.
	 *
	 * @since 4.3.4
	 */
	public function maybe_inject_theme_builder_footer() {
	}
	/**
	 * Focus Mode compatibility for global header and footer.
	 */
	public function focus_mode_compatibility_script() {
	}
}
/**
 * Plugin compatibility for SiteGround Optimizer
 *
 * @since 4.11.0
 *
 * @link https://wordpress.org/plugins/sg-cachepress/
 */
class ET_Builder_Plugin_Compat_SiteGround_Optimizer extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Excluded stylesheets.
	 *
	 * @var null
	 */
	private $_excluded = array();
	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Get PageResource handles.
	 *
	 * @param string $tag    HTML tag.
	 * @param string $handle Resource handle.
	 * @param string $src    Resource src.
	 *
	 * @since 4.14.3
	 *
	 * @return string
	 */
	public function get_page_resource_handles( $tag, $handle, $src ) {
	}
	/**
	 * Exclude styles from being combined in SiteGround cache.
	 *
	 * @param array $excluded Excluded styles from being combined.
	 */
	public function exclude_inline_styles_from_siteground_cache( $excluded ) {
	}
}
/**
 * Plugin compatibility for siteorigin-panels
 *
 * @since 0.7 (builder version)
 * @link  https://wordpress.org/plugins/siteorigin-panels/
 */
class ET_Builder_Plugin_Compat_Siteorigin_Panels extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 * Note: once this issue is fixed in future version, run version_compare() to limit the scope of the hooked fix
	 * Latest plugin version: 2.4.21
	 *
	 * @return void
	 */
	private function init_hooks() {
	}
	/**
	 * If Divi Builder is used, disable siteorigin builder content alteration
	 *
	 * @return bool
	 */
	function disable_siteorigin_builder_content( $status ) {
	}
}
/**
 * Plugin compatibility for WPML Multilingual CMS
 *
 * @since 3.0.64
 *
 * @link https://wpml.org
 */
class ET_Builder_Plugin_Compat_WPML_Multilingual_CMS extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 3.7.1
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * @param array $config
	 *
	 * @return array
	 */
	function override_wpml_configuration( $config ) {
	}
	/**
	 * Convert selected categories ids to translated ones.
	 *
	 * @internal
	 *
	 * @param array  $shortcode_atts
	 * @param array  $atts
	 * @param string $slug
	 * @param string $address
	 *
	 * @return array
	 **/
	public function _filter_traslate_shop_module_categories_ids( $shortcode_atts, $atts, $slug, $address ) {
	}
	/**
	 * Override the language code used in the AJAX request that checks if
	 * cached definitions/helpers needs to be updated.
	 *
	 * @param array $params
	 *
	 * @return array
	 */
	public function override_current_page_params( $params ) {
	}
	/**
	 * Enqueues admin related scripts and styles for WPML compatiblity.
	 *
	 * @since 4.5.7
	 */
	public function maybe_enqueue_admin_scripts() {
	}
	/**
	 * Translate library layout on the background.
	 *
	 * @since 4.5.7
	 */
	public function translate_layout() {
	}
	/**
	 * Allow library layout with empty title and content to be inserted as new post for
	 * translation purpose.
	 *
	 * @since 4.5.7
	 *
	 * @param bool  $maybe_empty Original status.
	 * @param array $postarr     Array of post data.
	 */
	public function maybe_allow_save_empty_content( $maybe_empty, $postarr ) {
	}
}
/**
 * Plugin compatibility for Table Of Contents Plus
 *
 * @since 3.0.89
 *
 * @link https://wordpress.org/plugins/table-of-contents-plus/
 */
class ET_Builder_Plugin_Compat_Table_Of_Contents_Plus extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 1601
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * @param array $config
	 *
	 * @return array
	 */
	function et_pb_admin_excluded_shortcodes( $shortcodes ) {
	}
}
/**
 * Compatibility for The Events Calendar Community Events plugin.
 *
 * @since 4.4.9
 *
 * @link https://theeventscalendar.com/
 */
class ET_Builder_Plugin_Compat_The_Events_Calendar_Community_Events extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.4.9
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.4.9
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Maybe restore TB layout content.
	 *
	 * Restore global $pages content on TB layouts when they override the template.
	 *
	 * @param WP_Post $post
	 *
	 * @return void
	 */
	function maybe_restore_layout_content( $post ) {
	}
}
/**
 * Plugin compatibility for WordPress Toolbar Publish Button
 */
class ET_Builder_Plugin_Compat_Toolber_Publish_Button extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Add this plugin `publish` button to ignored Admin Bar click ids.
	 *
	 * @param array $ids Ignored Admin Bar click ids.
	 *
	 * @access public.
	 * @return array
	 */
	public function et_fb_ignore_adminbar_click_ids( $ids ) {
	}
}
/**
 * Compatibility for PayPal Plus for WooCommerce.
 *
 * @since 4.10.8
 *
 * @link https://wordpress.org/plugins/woo-paypalplus/
 */
class ET_Builder_Plugin_Compat_Woo_PayPal_Plus extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.8
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.8
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Maybe Disable JQuery Body feature.
	 *
	 * @since 4.10.8
	 *
	 * @param bool   $enabled Whether the feature should be enabled or not.
	 * @param string $content TB/Post content.
	 *
	 * @return bool
	 */
	public function maybe_disable_jquery_body( $enabled, $content ) {
	}
}
/**
 * Plugin compatibility for WooCommerce
 *
 * @since 3.0.65 (builder version)
 * @link  https://wordpress.org/plugins/woocommerce/
 */
class ET_Builder_Plugin_Compat_WooCommerce extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 * Latest plugin version: 3.1.1
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * When an order is cancelled, WooCommerce cart shortcode changes the order status to prevent
	 * the 'Your order was cancelled.' notice from being shown multiple times.
	 * Since grab_image renders shortcodes twice, it must be disabled in the cart page or else the notice
	 * will not be shown at all.
	 * My Account Page and Checkout Page is also affected by the same issue.
	 *
	 * @return bool
	 */
	function disable_et_grab_image_setting( $settings ) {
	}
	/**
	 * Remove comments_number filter added by Woo that caused missing comment
	 * count in Comment module
	 *
	 * @return void
	 */
	public function remove_filter_comments_number_by_woo() {
	}
	/**
	 * Restore comments_number that removed by remove_filter_comments_number_by_woo
	 *
	 * @return void
	 */
	public function restore_filter_comments_number_by_woo() {
	}
	/**
	 * Allowlist hidden WooCommerce meta keys for dynamic content.
	 *
	 * @since 3.17.2
	 *
	 * @param string[] $meta_keys
	 * @param integer  $post_id
	 *
	 * @return string[]
	 */
	public function filter_dynamic_content_display_hidden_meta_keys( $meta_keys, $post_id ) {
	}
	/**
	 * Rename label of known displayed hidden post meta fields in dynamic content.
	 *
	 * @since 3.17.2
	 *
	 * @param string $label
	 * @param string $key
	 *
	 * @return string
	 */
	public function filter_dynamic_content_custom_field_label( $label, $key ) {
	}
	/**
	 * Format WooCommerce meta values accordingly.
	 *
	 * @since 3.17.2
	 *
	 * @param string  $meta_value
	 * @param string  $meta_key
	 * @param integer $post_id
	 *
	 * @return string
	 */
	public function maybe_filter_dynamic_content_meta_value( $meta_value, $meta_key, $post_id ) {
	}
	/**
	 * Add Theme Builder template settings options.
	 *
	 * @since 4.0
	 *
	 * @param array $options
	 *
	 * @return array
	 */
	public function maybe_filter_theme_builder_template_settings_options( $options ) {
	}
	/**
	 * Theme Builder: Validate woocommerce:shop.
	 *
	 * @since 4.0
	 *
	 * @param string   $type
	 * @param string   $subtype
	 * @param integer  $id
	 * @param string[] $setting
	 *
	 * @return bool
	 */
	public function theme_builder_validate_woocommerce_shop( $type, $subtype, $id, $setting ) {
	}
	/**
	 * Theme Builder: Validate woocommerce:cart.
	 *
	 * @since 4.0
	 *
	 * @param string   $type
	 * @param string   $subtype
	 * @param integer  $id
	 * @param string[] $setting
	 *
	 * @return bool
	 */
	public function theme_builder_validate_woocommerce_cart( $type, $subtype, $id, $setting ) {
	}
	/**
	 * Theme Builder: Validate woocommerce:checkout.
	 *
	 * @since 4.0
	 *
	 * @param string   $type
	 * @param string   $subtype
	 * @param integer  $id
	 * @param string[] $setting
	 *
	 * @return bool
	 */
	public function theme_builder_validate_woocommerce_checkout( $type, $subtype, $id, $setting ) {
	}
	/**
	 * Theme Builder: Validate woocommerce:my_account.
	 *
	 * @since 4.0
	 *
	 * @param string   $type
	 * @param string   $subtype
	 * @param integer  $id
	 * @param string[] $setting
	 *
	 * @return bool
	 */
	public function theme_builder_validate_woocommerce_my_account( $type, $subtype, $id, $setting ) {
	}
	/**
	 * Trigger Woo hooks before a Theme Builder body layout is rendered
	 * so stuff like structured data is output.
	 *
	 * @since 4.0.10
	 *
	 * @param string $layout_type
	 */
	public function maybe_trigger_woo_hooks_in_theme_builder_body( $layout_type ) {
	}
}
/**
 * Plugin compatibility for WordPress MU Domain Mapping
 */
class ET_Builder_Plugin_Compat_Mu_Domain_Mapping extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * Disable plugin redirections when VB/BFB page and current user can edit.
	 *
	 * @return void
	 */
	public function redirect() {
	}
}
/**
 * Plugin compatibility for Yoast SEO
 *
 * @since 3.0.76 (builder version)
 * @link  https://wordpress.org/plugins/wordpress-seo/
 */
class ET_Builder_Plugin_Compat_WordPress_SEO extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 * Latest plugin version: 3.1.1
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Checks to see if the current request is for a sitemap and if so, loads the builder's
	 * modules so that they are loaded before Yoast generates the sitemap.
	 * {@see 'pre_get_posts' (0) Must run before Yoast's callback which has priority of 1.}
	 *
	 * @param WP_Query $query
	 */
	public function maybe_load_builder_modules_early( $query ) {
	}
	/**
	 * Exclude TB post types from indexable posts.
	 *
	 * @param array $post_types Post Types.
	 *
	 * @return array;
	 */
	public function exclude_tb_post_types( $post_types ) {
	}
	public function do_shortcode( $content ) {
	}
}
/**
 * Plugin compatibility for WP Job Manager.
 *
 * @since 4.0.10
 *
 * @link https://wordpress.org/plugins/wp-job-manager/
 */
class ET_Builder_Plugin_Compat_WPJobManager extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.0.10
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 * Latest plugin version: 1.33.3
	 *
	 * @since 4.0.10
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Always show the content even for expired jobs when editing in the builder.
	 *
	 * @since 4.0.10
	 *
	 * @param mixed $hide
	 *
	 * @return boolean
	 */
	public function never_hide_content_in_builder( $hide ) {
	}
	/**
	 * Maybe trigger the_content() instead of returning the description as the plugin
	 * does not call the_content().
	 * Do this only if the builder is used for the current post.
	 *
	 * @since 4.0.10
	 *
	 * @param string $content
	 *
	 * @return string
	 */
	public function maybe_call_the_content( $content ) {
	}
}
/**
 * Plugin compatibility for WP Responsive Table.
 *
 * @since 4.4.0
 *
 * @link https://wordpress.org/plugins/wp-responsive-table/
 */
class ET_Builder_Plugin_Compat_WPResponsiveTable extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 1.2.4
	 */
	public function init_hooks() {
	}
	/**
	 * Equivalent of ResponsiveTable\Frontend\Frontend::addContentWrapper().
	 * We have no sensible way to get the instance reference and run its method
	 * so we just add the container it would've added manually.
	 *
	 * @since 4.4.0
	 *
	 * @param string $content
	 *
	 * @return string
	 */
	public function add_content_wrapper( $content ) {
	}
}
/**
 * ET_Builder_Plugin_Compat_WP_Rocket class file.
 *
 * @class      ET_Builder_Plugin_Compat_WP_Rocket
 * @package    Divi
 * @subpackage Builder
 * @since      4.14.5
 * @link       https://wp-rocket.me/
 */
class ET_Builder_Plugin_Compat_WP_Rocket extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.14.5
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.14.5
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * CSS safelist to exclude from WP Rocket's 'Unused CSS' option.
	 * The array may contain CSS filenames, IDs or classes.
	 *
	 * @since 4.14.5
	 *
	 * @param array[] $css_safelist list of CSS filenames, IDs or classes.
	 *
	 * @return array[]
	 */
	public function et_rocket_css_safelist( $css_safelist ) {
	}
}
/**
 * Plugin compatibility for Toolset Views
 *
 * @since 3.20
 *
 * @link https://toolset.com
 */
class ET_Builder_Plugin_Compat_ToolsetViews extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 2.7.1
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Add `view-template` post type.
	 *
	 * @param  array $types
	 * @return array
	 */
	public function add_post_type( $types ) {
	}
	/**
	 * Disable Views for a post.
	 *
	 * @param null|array|string $value     The value get_metadata() should return - a single metadata value,
	 *                                     or an array of values.
	 * @param int               $object_id Object ID.
	 * @param string            $meta_key  Meta key.
	 * @param bool              $single    Whether to return only the first value of the specified $meta_key.
	 *
	 * @access public.
	 * @return void
	 */
	public function disable_views( $value, $object_id, $meta_key, $single ) {
	}
	/**
	 * Transform {!{ ... }!} shortcodes to [] ones.
	 *
	 * @since 4.0.10
	 *
	 * @param string $content
	 *
	 * @return string
	 */
	public function transform_shortcodes( $content ) {
	}
}
/**
 * Compatibility for WP3D Models.
 *
 * @since 4.10.8
 *
 * @link https://wp3dmodels.com/
 */
class ET_Builder_Plugin_Compat_WP3D_Models extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.8
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.8
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
/**
 * Plugin compatibility for WPML Sticky Links. This plugin needs WPML Multilingual
 * CMS plugin to work.
 *
 * @since 4.4.5
 *
 * @link https://wpml.org
 */
class ET_Builder_Plugin_Compat_WPML_Sticky_Links extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor
	 */
	function __construct() {
	}
	/**
	 * Hook methods to WordPress
	 *
	 * Latest plugin version: 1.5.1
	 *
	 * @return void
	 */
	function init_hooks() {
	}
	/**
	 * Convert sticky links into permalinks on Global items.
	 *
	 * @since 4.4.5
	 *
	 * @param  string $content
	 * @param  array  $props
	 * @param  array  $attrs
	 * @return string
	 */
	public function maybe_show_permalinks( $content, $props, $attrs ) {
	}
}
/**
 * ET_Builder_Plugin_Compat_Yith_Dynamic_Pricing_Discounts class file.
 *
 * @class      ET_Builder_Plugin_Compat_Yith_Dynamic_Pricing_Discounts
 * @package    Divi
 * @subpackage Builder
 * @since      4.18.1
 * @link       https://yithemes.com/themes/plugins/yith-woocommerce-dynamic-pricing-and-discounts/
 */
class ET_Builder_Plugin_Compat_Yith_Dynamic_Pricing_Discounts extends \ET_Builder_Plugin_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.18.1
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.18.1
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
	/**
	 * Includes the Pricing module stylesheet.
	 *
	 * This stylesheet should only be included when YITH discounts plugin is enabled.
	 *
	 * @return void
	 */
	public function pricing_styles() {
	}
	/**
	 * Adds the class required for YITH plugin to be compatible.
	 *
	 * @param array  $attrs  Module props.
	 * @param string $module Module slug.
	 *
	 * @return array $attrs
	 */
	public function add_summary_class( $attrs, $module ) {
	}
}
/**
 * Provide utilities to interact and replace the current post akin to setup_postdata()
 * but in a stacking manner.
 *
 * @since 4.0
 */
class ET_Post_Stack {




	/**
	 * Post override stack.
	 *
	 * @var (WP_Post|null)[]
	 */
	protected static $stack = array();
	/**
	 * Get the top post from the stack or the current one if the stack is empty.
	 *
	 * @since 4.0
	 *
	 * @param integer $offset Offset from the end of the array, 0 being the last post. Use negative integers.
	 *
	 * @return WP_Post|null
	 */
	public static function get( $offset = 0 ) {
	}
	/**
	 * Pop the top post off of the stack.
	 *
	 * @since 4.0
	 *
	 * @return void
	 */
	public static function pop() {
	}
	/**
	 * Setup a post as the global $post.
	 *
	 * @since 4.0
	 *
	 * @param WP_Post|null $with
	 * @param boolean      $force
	 *
	 * @return void
	 */
	protected static function setup( $with, $force = \false ) {
	}
	/**
	 * Equivalent to setup_postdata() but keeps a stack of posts so it can be nested.
	 * Pushes the specified post on the stack.
	 *
	 * @since 4.0
	 *
	 * @param WP_Post $with
	 *
	 * @return void
	 */
	public static function replace( $with ) {
	}
	/**
	 * Restores the last post from the stack.
	 * The final restore will setup the post that was setup when the stack was last empty.
	 *
	 * @since 4.0
	 *
	 * @return void
	 */
	public static function restore() {
	}
	/**
	 * Resets the post to the one at the top of the stack.
	 *
	 * @since 4.0
	 *
	 * @return void
	 */
	public static function reset() {
	}
	/**
	 * Returns the $post for the current true WordPress query post ignoring any posts that may be
	 * forced using setup_postdata().
	 *
	 * @since 4.0
	 *
	 * @return WP_Post|null
	 */
	public static function get_main_post() {
	}
	/**
	 * Returns the post ID for the current true WordPress query post.
	 * See ::get_main_post() for more information.
	 *
	 * @since 4.0
	 *
	 * @return integer
	 */
	public static function get_main_post_id() {
	}
}
class ET_Builder_Post_Query_Layouts extends \ET_Core_Post_Query {




	/**
	 * Whether or not to automatically exclude product tour layouts from the results.
	 *
	 * @since 3.0.99
	 * @var   bool
	 */
	protected $_exclude_product_tour = \true;
	/**
	 * @inheritDoc
	 */
	protected function _add_tax_query( $tax_name, $args, $negate = \null ) {
	}
	public function in_pack() {
	}
	public function is_fullwidth() {
	}
	public function is_type() {
	}
	/**
	 * @inheritDoc
	 */
	public function run( $args = array() ) {
	}
	/**
	 * @inheritDoc
	 */
	public function with_meta( $key, $value = \null ) {
	}
	public function with_scope() {
	}
}
class ET_Builder_Post_Taxonomy_LayoutCategory extends \ET_Core_Post_Taxonomy {




	/**
	 * @inheritDoc
	 */
	protected $_owner = 'builder';
	/**
	 * @inheritDoc
	 */
	public $name = 'layout_category';
	/**
	 * @inheritDoc
	 */
	protected function _get_args() {
	}
	/**
	 * @inheritDoc
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'layout_category' ) {
	}
}
class ET_Builder_Post_Taxonomy_LayoutPack extends \ET_Core_Post_Taxonomy {




	/**
	 * @inheritDoc
	 */
	protected $_owner = 'builder';
	/**
	 * @inheritDoc
	 */
	public $name = 'layout_pack';
	/**
	 * @inheritDoc
	 */
	protected function _get_args() {
	}
	/**
	 * @inheritDoc
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'layout_pack' ) {
	}
}
class ET_Builder_Post_Taxonomy_LayoutScope extends \ET_Core_Post_Taxonomy {




	/**
	 * @inheritDoc
	 */
	protected $_owner = 'builder';
	/**
	 * @inheritDoc
	 */
	public $name = 'scope';
	/**
	 * @inheritDoc
	 */
	protected function _get_args() {
	}
	/**
	 * @inheritDoc
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'scope' ) {
	}
}
/**
 * Init layout_tag taxonomy.
 *
 * @package Builder
 */
/**
 * Class to init layout_tag taxonomy.
 */
class ET_Builder_Post_Taxonomy_LayoutTag extends \ET_Core_Post_Taxonomy {




	/**
	 * Owner name.
	 *
	 * @since 4.17.0
	 * @var   string
	 */
	protected $_owner = 'builder';
	/**
	 * Taxonomy key.
	 *
	 * @since 4.17.0
	 * @var   string
	 */
	public $name = 'layout_tag';
	/**
	 * {@inheritDoc}
	 */
	protected function _get_args() {
	}
	/**
	 * {@inheritDoc}
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'layout_tag' ) {
	}
}
class ET_Builder_Post_Taxonomy_LayoutType extends \ET_Core_Post_Taxonomy {




	/**
	 * @inheritDoc
	 */
	protected $_owner = 'builder';
	/**
	 * @inheritDoc
	 */
	public $name = 'layout_type';
	/**
	 * @inheritDoc
	 */
	protected function _get_args() {
	}
	/**
	 * @inheritDoc
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'layout_type' ) {
	}
}
class ET_Builder_Post_Taxonomy_LayoutWidth extends \ET_Core_Post_Taxonomy {




	/**
	 * @inheritDoc
	 */
	protected $_owner = 'builder';
	/**
	 * @inheritDoc
	 */
	public $name = 'module_width';
	/**
	 * @inheritDoc
	 */
	protected function _get_args() {
	}
	/**
	 * @inheritDoc
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'taxonomy'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'taxonomy', $name = 'module_width' ) {
	}
}
class ET_Builder_Post_Type_Layout extends \ET_Core_Post_Type {




	/**
	 * @inheritDoc
	 */
	protected $_category_tax = 'layout_category';
	/**
	 * @inheritDoc
	 */
	protected $_owner = 'builder';
	/**
	 * @inheritDoc
	 */
	protected $_tag_tax = 'layout_pack';
	/**
	 * @inheritDoc
	 */
	public $name = ET_BUILDER_LAYOUT_POST_TYPE;
	/**
	 * ET_Builder_Post_Type_Layout constructor.
	 */
	public function __construct() {
	}
	/**
	 * @inheritDoc
	 */
	protected function _before_register() {
	}
	/**
	 * @inheritDoc
	 */
	protected function _get_args() {
	}
	/**
	 * @inheritDoc
	 */
	protected function _get_labels() {
	}
	/**
	 * Get the class instance.
	 *
	 * @since 3.0.99
	 *
	 * @param string $type See {@see self::$wp_type} for accepted values. Default is 'cpt'.
	 * @param string $name The name/slug of the post object. Default is {@see self::$name}.
	 *
	 * @return self|null
	 */
	public static function instance( $type = 'cpt', $name = 'et_pb_layout' ) {
	}
	/**
	 * Whether or not a layout is global.
	 *
	 * @param $post_id
	 *
	 * @return bool
	 */
	public function is_global( $post_id ) {
	}
	/**
	 * Whether or not a layout is Favorite.
	 *
	 * @param string $post_id Post ID.
	 *
	 * @return bool
	 */
	public function is_favorite( $post_id ) {
	}
	/**
	 * Determines if the Library's CPT and taxonomies should be publicly queryable for the current request.
	 *
	 * @sine ??
	 *
	 * @return bool
	 */
	public static function is_publicly_queryable() {
	}
	/**
	 * @return ET_Builder_Post_Query_Layouts
	 */
	public function query() {
	}
	/**
	 * Moves the excerpt meta box into the side column for this post type.
	 * {@see 'add_meta_boxes_{$type}'}
	 *
	 * @since 3.0.99
	 */
	public function wp_hook_add_meta_boxes() {
	}
	/**
	 * Adds custom columns to the Divi Library admin page.
	 * {@see 'manage_{$post_type}_posts_columns'}
	 *
	 * @since 3.1    Relocated from `builder/layouts.php`.
	 * @since 2.5.7
	 */
	public function wp_hook_manage_posts_columns( $columns ) {
	}
	/**
	 * Sets the content of our custom columns for each row on the Divi Library admin page.
	 * {@see 'manage_posts_custom_column'}
	 *
	 * @since 3.1    Relocated from `builder/layouts.php`.
	 * @since 2.5.7
	 */
	public function wp_hook_manage_posts_custom_column( $column_key, $post_id ) {
	}
}
/**
 * Theme compatibility for Divi Chef.
 *
 * @since 4.10.0
 */
class ET_Builder_Theme_Compat_DiviChef extends \ET_Builder_Theme_Compat_Base {




	/**
	 * Constructor.
	 *
	 * @since 4.10.0
	 */
	public function __construct() {
	}
	/**
	 * Hook methods to WordPress.
	 *
	 * @since 4.10.0
	 *
	 * @return void
	 */
	public function init_hooks() {
	}
}
class AboutMeWidget extends \WP_Widget {




	function __construct() {
	}
	/* Displays the Widget in the front-end */
	function widget( $args, $instance ) {
	}
	/*Saves the settings. */
	function update( $new_instance, $old_instance ) {
	}
	/*Creates the form for the widget in the back-end. */
	function form( $instance ) {
	}
}
class AdvWidget extends \WP_Widget {




	function __construct() {
	}
	/* Displays the Widget in the front-end */
	function widget( $args, $instance ) {
	}
	/*Saves the settings. */
	function update( $new_instance, $old_instance ) {
	}
	/*Creates the form for the widget in the back-end. */
	function form( $instance ) {
	}
}
class AdsenseWidget extends \WP_Widget {




	function __construct() {
	}
	/* Displays the Widget in the front-end */
	function widget( $args, $instance ) {
	}
	/*Saves the settings. */
	function update( $new_instance, $old_instance ) {
	}
	/*Creates the form for the widget in the back-end. */
	function form( $instance ) {
	}
}
/**
 * Enqueue styles for block editor
 *
 * @since ??
 */
function et_divi_block_editor_styles() {
}
/**
 * Setup page layout content width options for block editor
 *
 * @since ??
 *
 * @param array $content_widths
 *
 * @return array
 */
function et_divi_gb_content_widths( $content_widths = array() ) {
}
/**
 * AB Testing related data
 *
 * @param integer $post_id Post id.
 *
 * @return mixed|void {array} AB Testing related data
 */
function et_builder_ab_options( $post_id ) {
}
/**
 * Filterable AB Testing labels
 *
 * @return {array} AB Testing labels
 */
function et_builder_ab_labels() {
}
/**
 * AJAX endpoint for builder data
 *
 * @return void
 */
function et_pb_ab_builder_data() {
}
/**
 * Get AB Testing subject ranking data
 *
 * @param integer $post_id Post id.
 *
 * @return array
 */
function et_pb_ab_get_saved_subjects_ranks( $post_id ) {
}
/**
 * Define ranking-based subject color
 *
 * @return array
 */
function et_pb_ab_get_subject_rank_colors() {
}
/**
 * Print AB Testing subject-ranking color scheme
 *
 * @return string inline CSS styling for subject rank
 */
function et_pb_ab_get_subject_rank_colors_style() {
}
/**
 * Get subjects' ranks
 *
 * @param  int    $post_id       post ID.
 * @param  string $ranking_basis ranking basis. This can be any value on data's subjects_totals
 *                               view_page|read_page|view_goal|read_goal|click_goal|con_goal|clicks|reads|bounces|engagements|conversions.
 * @param  string $duration      duration of the data that is used.
 * @return array key = `subject_` + subject_id as key and the value as value, sorted in ascending
 */
function et_pb_ab_get_subjects_ranks( $post_id, $ranking_basis = 'engagements', $duration = 'week' ) {
}
/**
 * Get formatted stats data that is used by builder's AB Testing stats
 *
 * @param int    $post_id      post ID.
 * @param string $duration     day|week|month|all duration of stats.
 * @param bool   $time         has to be in Y-m-d H:i:s format.
 * @param bool   $force_update Whether to force stats update.
 * @param bool   $is_cron_task Is it a cron task.
 *
 * @return array stats data
 */
function et_pb_ab_get_stats_data( $post_id, $duration = 'week', $time = \false, $force_update = \false, $is_cron_task = \false ) {
}
/**
 * Outputs get data stats duration
 *
 * @return array of data
 */
function et_pb_ab_get_stats_data_duration() {
}
/**
 * Get list of AB Testing event type
 *
 * @return array of event types
 */
function et_pb_ab_get_event_types() {
}
/**
 * Get min and max timestamp from returned MySQL query
 *
 * @param  array  $query_result MySQL returned value. Expected to be array( array ( 'date' => 'YYYY-MM-DD' ) ) format.
 * @param  string $interval     day|week.
 * @return array using min and max key
 */
function et_pb_ab_get_min_max_timestamp( $query_result, $interval = 'day' ) {
}
/**
 * Get all days between min and max dates from logs
 *
 * @param  int    $min_date_timestamp start date timestamp.
 * @param  int    $max_date_timestamp end date timestamp.
 * @param  string $interval           day|week interval of rage.
 * @return array of dates
 */
function et_pb_ab_get_date_range( $min_date_timestamp, $max_date_timestamp, $interval = 'day' ) {
}
/**
 * Get list of Split analysis types
 *
 * @return array analysis types
 */
function et_pb_ab_get_analysis_types() {
}
/**
 * Get numerator and denominator of various stats types
 *
 * @return array stats' data type formula
 */
function et_pb_ab_get_analysis_formulas() {
}
/**
 * List modules' slug which has conversions support
 *
 * @return array slugs of modules which have conversions support
 */
function et_pb_ab_get_modules_have_conversions() {
}
/**
 * Check whether AB Testing active on current page
 *
 * @since 4.0 Added the $post_id parameter.
 *
 * @param integer $post_id post ID.
 *
 * @return bool
 */
function et_is_ab_testing_active( $post_id = 0 ) {
}
/**
 * Check whether AB Testing has report
 *
 * @param integer $post_id post ID.
 *
 * @return bool
 */
function et_pb_ab_has_report( $post_id ) {
}
/**
 * Check the status of the ab db version
 *
 * @return bool
 */
function et_pb_db_status_up_to_date() {
}
/**
 * Create AB Testing table needed for AB Testing feature
 *
 * @return void
 */
function et_pb_create_ab_tables() {
}
/**
 * Handle adding the AB testing log record via ajax
 *
 * @return void
 */
function et_pb_update_stats_table() {
}
/**
 * List of valid AB Testing refresh interval duration
 *
 * @return array
 */
function et_pb_ab_refresh_interval_durations() {
}
/**
 * Get refresh interval of particular AB Testing
 *
 * @param  int    $post_id post ID.
 * @param  string $default default interval.
 * @return string interval used in particular AB Testing
 */
function et_pb_ab_get_refresh_interval( $post_id, $default = 'hourly' ) {
}
/**
 * Get refresh interval duration of particular AB Testing
 *
 * @param  int    $post_id post ID.
 * @param  string $default default interval duration.
 * @return string test's interval duration
 */
function et_pb_ab_get_refresh_interval_duration( $post_id, $default = 'day' ) {
}
/**
 * Get goal module slug of particular AB Testing
 *
 * @param  int $post_id post ID.
 * @return string test's goal module slug
 */
function et_pb_ab_get_goal_module( $post_id ) {
}
/**
 * Register Divi's AB Testing cron
 * There are 2 options - daily and hourly, so schedule 2 events
 *
 * @return void
 */
function et_pb_create_ab_cron() {
}
/**
 * Perform Divi's AB Testing cron
 *
 * @param string $args Interval.
 *
 * @return void
 */
function et_pb_ab_cron( $args ) {
}
/**
 * Refresh testings stats.
 *
 * @param int $test_id Post id.
 */
function et_pb_ab_clear_cache_handler( $test_id ) {
}
/**
 * Ajax Callback :: Refresh stats
 */
function et_pb_ab_clear_cache() {
}
/**
 * Get all the test ID from db.
 *
 * @return array|bool|object|null
 */
function et_pb_ab_get_all_tests() {
}
/**
 * Ajax callback :: Stats removal immediately after test stopped.
 */
function et_pb_ab_clear_stats() {
}
/**
 * Remove AB Testing log and clear stats cache
 *
 * @param int $test_id Post ID.
 *
 * @return void|bool
 */
function et_pb_ab_remove_stats( $test_id ) {
}
/**
 * Shop trigger DOM
 *
 * @return void
 */
function et_pb_ab_shop_trigger() {
}
/**
 * Tracking shortcode
 *
 * @param array $atts User defined attributes in shortcode tag.
 *
 * @return string
 */
function et_pb_split_track( $atts ) {
}
/**
 * Get all posts loaded for the current request that have AB testing enabled.
 * This includes TB layouts and the current post, if any.
 *
 * @since 4.0
 *
 * @return integer[]
 */
function et_builder_ab_get_current_tests() {
}
/**
 * Initialize AB Testing. Check whether the user has visited the page or not by checking its cookie
 *
 * @since
 *
 * @return void
 */
function et_pb_ab_init() {
}
/**
 * Initialize AB testing for the specified post.
 *
 * @since 4.0
 *
 * @param integer $post_id Post id.
 *
 * @return void
 */
function et_builder_ab_initialize_for_post( $post_id ) {
}
/**
 * Register autoloader.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.6.2
 */
/**
 * Autoloader for module fields.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_fields( $class ) {
}
/**
 * Autoloader for module helpers.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_helpers( $class ) {
}
/**
 * Autoloader for module motion helpers.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_helpers_motion( $class ) {
}
/**
 * Autoloader for module mask style.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_mask_pattern_helpers( $class ) {
}
/**
 * Autoloader for module mask style.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_mask( $class ) {
}
/**
 * Autoloader for module pattern style.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_pattern( $class ) {
}
/**
 * Autoloader for module types.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_types( $class ) {
}
/**
 * Autoloader for woo modules.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_woo_modules( $class ) {
}
/**
 * Autoloader for modules.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload_modules( $class ) {
}
/**
 * Autoloader for module helpers and structure elements.
 *
 * @param string $class The class name.
 */
function _et_pb_autoload( $class ) {
}
/**
 * Get an instance of  `ET_Builder_Module_Helper_Multi_Value`.
 *
 * @return ET_Builder_Module_Helper_Multi_Value
 */
function et_pb_multi_value() {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Overflow`.
 *
 * @return ET_Builder_Module_Helper_Overflow
 */
function et_pb_overflow() {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Alignment`.
 *
 * @param string $prefix The prefix string that may be added to field name.
 *
 * @return ET_Builder_Module_Helper_Alignment
 */
function et_pb_alignment_options( $prefix = '' ) {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Height`.
 *
 * @param string $prefix The prefix string that may be added to field name.
 *
 * @return ET_Builder_Module_Helper_Height
 */
function et_pb_height_options( $prefix = '' ) {
}
/**
 * Get an instance of `ET_Builder_Module_Hover_Options`.
 *
 * @return ET_Builder_Module_Helper_Hover_Options
 */
function et_pb_hover_options() {
}
/**
 * Get sticky option instance.
 *
 * @since 4.6.0
 *
 * @return ET_Builder_Module_Helper_Sticky_Options
 */
function et_pb_sticky_options() {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Max_Height`.
 *
 * @param string $prefix The prefix string that may be added to field name.
 *
 * @return ET_Builder_Module_Helper_Max_Height
 */
function et_pb_max_height_options( $prefix = '' ) {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Max_Width`.
 *
 * @param string $prefix The prefix string that may be added to field name.
 *
 * @return ET_Builder_Module_Helper_Max_Width
 */
function et_pb_max_width_options( $prefix = '' ) {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Min_Height`.
 *
 * @param string $prefix The prefix string that may be added to field name.
 *
 * @return ET_Builder_Module_Helper_Min_Height
 */
function et_pb_min_height_options( $prefix = '' ) {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_ResponsiveOptions`.
 *
 * @return ET_Builder_Module_Helper_ResponsiveOptions
 */
function et_pb_responsive_options() {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Slider`.
 *
 * @return ET_Builder_Module_Helper_Slider
 */
function et_pb_slider_options() {
}
/**
 * Get an instance of `ET_Builder_Module_Transition_Options`.
 *
 * @return ET_Builder_Module_Transition_Options
 */
function et_pb_transition_options() {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Width`.
 *
 * @param string $prefix The prefix string that may be added to field name.
 *
 * @return ET_Builder_Module_Helper_Width
 */
function et_pb_width_options( $prefix = '' ) {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Font`.
 *
 * @return ET_Builder_Module_Helper_Font
 */
function et_pb_font_options() {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_BackgroundLayout`.
 *
 * @return ET_Builder_Module_Helper_BackgroundLayout
 */
function et_pb_background_layout_options() {
}
/**
 * Get helper instance
 *
 * @since 4.6.0
 *
 * @param string $helper_name Helper name.
 *
 * @return object
 */
function et_builder_get_helper( $helper_name ) {
}
/**
 * Class ET_Builder_Module_Helper_MultiViewOptions wrapper
 *
 * @since 3.27.1
 *
 * @param ET_Builder_Element|bool $module             Module object.
 * @param array                   $custom_props       Defined custom props data.
 * @param array                   $conditional_values Defined options conditional values.
 * @param array                   $default_values     Defined options default values.
 *
 * @return ET_Builder_Module_Helper_MultiViewOptions
 */
function et_pb_multi_view_options( $module = \false, $custom_props = array(), $conditional_values = array(), $default_values = array() ) {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_OptionTemplate`.
 *
 * @return ET_Builder_Module_Helper_OptionTemplate
 */
function et_pb_option_template() {
}
/**
 * Get an instance of `ET_Builder_Module_Helper_Background`.
 *
 * @return ET_Builder_Module_Helper_Background
 *
 * @since 4.3.3
 */
function et_pb_background_options() {
}
/**
 * Class ET_Builder_Module_Helper_Media wrapper
 *
 * @since 4.6.4
 *
 * @return ET_Builder_Module_Helper_Media
 */
function et_pb_media_options() {
}
/**
 * Class ET_Theme_Options_Library_Local wrapper
 *
 * @since 4.21.0
 *
 * @return ET_Theme_Options_Library_Local
 */
function et_pb_theme_options_library_local() {
}
/**
 * Class ET_Code_Snippets_Library_Local wrapper
 *
 * @since 4.21.0
 *
 * @return ET_Code_Snippets_Library_Local
 */
function et_pb_code_snippets_library_local() {
}
/**
 * Class ET_Theme_Builder_Library_Local wrapper
 *
 * @since 4.21.0
 *
 * @return ET_Theme_Builder_Library_Local
 */
function et_pb_theme_builder_library_local() {
}
/**
 * Initialize the global settings.
 */
function et_builder_init_global_settings() {
}
// WP Stateless Plugin.
function et_compat_stateless_skip_cache_busting( $result, $filename ) {
}
/**
 * Disable JQuery Body Feature.
 *
 * @since 4.10.3
 *
 * @return void
 */
function et_builder_disable_jquery_body() {
}
/**
 * Sets the loading attr threshold based on Post meta.
 *
 * @param int $omit_threshold The number of media elements where the `loading`
 *                            attribute will not be added. Default 1.
 *
 * @return int
 */
function et_builder_set_loading_attr_threshold_by_atf_content( $omit_threshold ) {
}
/**
 * Execute the following on `wp` hook.
 *
 * The loading attribute threshold is set on `wp` hook. This is because framework.php is run on `init` which determines the threshold value.
 * Once the value is determined (happens only on first load), it is the saved on to post meta.
 * The saved post meta is retrieved on every load until the page is changed or cache cleared.
 * The value is then fed to WordPress using the `wp_omit_loading_attr_threshold` filter.
 *
 * @return void
 */
function et_builder_on_wp() {
}
/**
 * Determines if current page is WooCommerce's shop page + uses builder.
 * NOTE: This has to be used after pre_get_post (et_builder_wc_pre_get_posts).
 *
 * @return bool
 */
function et_builder_used_in_wc_shop() {
}
/**
 * Use page.php as template for a page which uses builder & being set as shop page
 *
 * @param  string path to template
 * @return string modified path to template
 */
function et_builder_wc_template_include( $template ) {
}
/**
 * Overwrite WooCommerce's custom query in shop page if the page uses builder.
 * After proper shop page setup (page selection + permalink flushed), the original
 * page permalink will be recognized as is_post_type_archive by WordPress' rewrite
 * URL when it is being parsed. This causes is_page() detection fails and no way
 * to get actual page ID on pre_get_posts hook, unless by doing reverse detection:
 *
 * 1. Check if current page is product archive page. Most page will fail on this.
 * 2. Afterward, if wc_get_page_id( 'shop' ) returns a page ID, it means that
 *    current page is shop page (product post type archive) which is configured
 *    in custom page. Next, check whether Divi Builder is used on this page or not.
 *
 * @param object query object
 * @param void
 */
function et_builder_wc_pre_get_posts( $query ) {
}
/**
 * Remove woocommerce body classes if current shop page uses builder.
 * woocommerce-page body class causes builder's shop column styling to be irrelevant.
 *
 * @param  array body classes
 * @return array modified body classes
 */
function et_builder_wc_body_class( $classes ) {
}
/**
 * Determine whether current request is frontend.
 * This excludes the visual builder.
 *
 * @return bool
 */
function et_builder_is_frontend() {
}
/**
 * Determine whether current request is frontend.
 * This includes the visual builder.
 *
 * @since 4.10.0
 *
 * @return bool
 */
function et_builder_is_frontend_or_builder() {
}
/**
 * Determine whether builder is loading full data or not.
 *
 * @param string $type Is it a bb or vb.
 *
 * @return bool
 */
function et_builder_is_loading_data( $type = 'vb' ) {
}
/**
 * Determine whether to load full builder data.
 *
 * @return bool
 */
function et_builder_should_load_all_data() {
}
/**
 * Determine whether to load all module data.
 *
 * @return bool
 */
function et_builder_should_load_all_module_data() {
}
/**
 * Determine whether module framework is on.
 *
 * @return string
 */
function et_builder_dynamic_module_framework() {
}
/**
 * Determine whether Mod PageSpeed is enabled.
 *
 * @return bool
 */
function et_builder_is_mod_pagespeed_enabled() {
}
/**
 * Builder's core functionality.
 *
 * @package Builder
 * @since   1.0
 */
/**
 * Sanitizes the post content before saving it.
 *
 * This function is used as a filter callback for the 'pre_post_content' filter hook.
 * It removes the 'data-et-multi-view' attribute from the post content, unless the current user has the 'unfiltered_html' capability.
 *
 * @since 4.25.1
 *
 * @param  string $post_content The post content to be sanitized.
 * @return string The sanitized post content.
 */
function et_builder_sanitize_post_content_before_saving( $post_content ) {
}
/**
 * Render a builder layout to string.
 *
 * @since 4.0.8
 *
 * @param string $content the content.
 *
 * @return string
 */
function et_builder_render_layout( $content ) {
}
/**
 * Whether filter image tags on post content with different functions.
 *
 * @since 4.5.2
 *
 * @param string $content The HTML content to be filtered.
 *
 * @return string Converted content with images modified.
 */
function et_builder_filter_content_image_tags( $content ) {
}
/**
 * Add common filters depending on what builder is being used.
 * These hooks are not used in DBP as it has its own implementations for them.
 *
 * @return void
 */
function et_builder_add_filters() {
}
/**
 * Determine whether Divi Builder codebase should be loaded.
 *
 * @return bool
 */
function et_builder_should_load_framework() {
}
/**
 * Load Divi Library and Divi Cloud.
 *
 * @return void
 */
function et_builder_load_library() {
}
/**
 * Enable builder setting to output css styles inline in the footer.
 */
function et_builder_maybe_enable_inline_styles() {
}
/**
 * AJAX Callback: Generate video thumbnail from video url.
 */
function et_pb_video_get_oembed_thumbnail() {
}
/**
 * Remove protocol https or http from the video thumbnail url.
 *
 * @param string $return The returned oEmbed HTML.
 * @param object $data   A data object result from an oEmbed provider.
 * @param string $url    The URL of the content to be embedded.
 */
function et_pb_video_oembed_data_parse( $return, $data, $url ) {
}
/**
 * AJAX Callback: Create widget area from wp dashbaoard Widgets screen.
 */
function et_pb_add_widget_area() {
}
/**
 * AJAX Callback: Remove widget area from wp dashbaoard Widgets screen.
 */
function et_pb_remove_widget_area() {
}
/**
 * AJAX Callback: Check if current user has permission to lock/unlock content.
 */
function et_pb_current_user_can_lock() {
}
/**
 * Get the supported post types by default.
 *
 * @since 3.10
 *
 * @return string[]
 */
function et_builder_get_default_post_types() {
}
/**
 * Get the supported third party post types.
 *
 * @since 3.10
 *
 * @return string[]
 */
function et_builder_get_third_party_post_types() {
}
/**
 * Look for builder's registered third party post type that isn't publicly queryable.
 *
 * @since 3.19.9
 *
 * @return array
 */
function et_builder_get_third_party_unqueryable_post_types() {
}
/**
 * Get the list of registered Post Types options.
 *
 * @since 3.18
 * @since 4.0.7 Added the $require_editor parameter.
 *
 * @param boolean|callable $usort          Comparision callback.
 * @param boolean          $require_editor Optional. Whether to retrieve only post type that has editor support.
 *
 * @return array
 */
function et_get_registered_post_type_options( $usort = \false, $require_editor = \true ) {
}
/**
 * Clear post type options cache whenever a custom post type is registered.
 *
 * @since 3.21.2
 *
 * @return void
 */
function et_clear_registered_post_type_options_cache() {
}
/**
 * Get the list of unsupported Post Types.
 *
 * @since 4.5.1
 *
 * @return array
 */
function et_builder_get_blocklisted_post_types() {
}
/**
 * Get the list of unsupported Post Types.
 *
 * @deprecated ?? No longer used by internal code; use `et_builder_get_blocklisted_post_types` instead.
 *
 * @since 3.10
 * @since 4.5.1 Aliased to `et_builder_get_blocklisted_post_types`.
 *
 * @return array
 */
function et_builder_get_blacklisted_post_types() {
}
/**
 * Check whether the supplied post type is a custom post type as far as the builder is concerned.
 *
 * @since 3.10
 *
 * @param string $post_type the post type to be checked.
 *
 * @return boolean
 */
function et_builder_is_post_type_custom( $post_type ) {
}
/**
 * Check whether the supplied post is of a custom post type as far as the builder is concerned.
 * If no post id is supplied, checks whether the current page is the singular view of a custom post type.
 *
 * @since 3.10
 *
 * @param integer $post_id post id.
 *
 * @return boolean
 */
function et_builder_post_is_of_custom_post_type( $post_id = 0 ) {
}
/**
 * Check whether the current request is for a custom post type archive.
 *
 * @since 4.0.5
 *
 * @return boolean
 */
function et_builder_is_custom_post_type_archive() {
}
/**
 * Get an array of post types the Divi Builder is enabled on.
 *
 * @since 3.10
 *
 * @return string[]
 */
function et_builder_get_enabled_builder_post_types() {
}
/**
 * Return an array of post types which have the builder enabled.
 *
 * @return mixed|void
 */
function et_builder_get_builder_post_types() {
}
/**
 * Return an array of post types which have the frontend builder enabled.
 *
 * @return mixed|void
 */
function et_builder_get_fb_post_types() {
}
/**
 * Check whether the specified post can have the builder enabled.
 *
 * @since 3.10
 *
 * @param integer $post_id the post id to be checked.
 *
 * @return boolean
 */
function et_builder_enabled_for_post( $post_id ) {
}
/**
 * Check whether the specified post type can have the builder enabled.
 *
 * @since 3.10
 *
 * @param string $post_type the registered post type to be checked.
 *
 * @return boolean
 */
function et_builder_enabled_for_post_type( $post_type ) {
}
/**
 * Check whether the specified post can have the FB enabled.
 *
 * @since 3.10
 *
 * @param integer $post_id the post id to be checked for the FB enable.
 *
 * @return boolean
 */
function et_builder_fb_enabled_for_post( $post_id ) {
}
/**
 * Check whether the specified post type is public.
 *
 * @since 3.10
 *
 * @param string $post_type the post type to be checked.
 *
 * @return boolean
 */
function et_builder_is_post_type_public( $post_type ) {
}
/**
 * Check whether the styles for the current request should be wrapped.
 * We wrap styles on non-native custom post types and custom post archives.
 *
 * @since 4.10.6
 *
 * @return boolean
 */
function et_builder_should_wrap_styles() {
}
/**
 * Determine whether post is of post_type layout or not.
 *
 * @param integer $post_id the post id to be checked.
 *
 * @return bool
 */
function et_is_extra_library_layout( $post_id ) {
}
/**
 * Check whether the specified capability allowed for the user.
 *
 * @param array|string $capabilities capabilities names.
 * @param string       $role         - The user role. If empty the role of the current user is used.
 *
 * @return bool
 */
function et_pb_is_allowed( $capabilities, $role = '' ) {
}
/**
 * Performs a check against ET capabilities before passing on to {@see et_core_security_check()}.
 *
 * @since 4.0
 *
 * @param string $et_capability  ET Capability name.
 * @param string $wp_capability  WP Capability name.
 * @param string $nonce_action   Name of the nonce action to check.
 * @param string $nonce_key      The key to use to lookup nonce value.
 * @param string $nonce_location Where the nonce is stored (_POST|_GET|_REQUEST).
 * @param bool   $die            Whether or not to `die()` on failure.
 *
 * @return bool
 */
function et_builder_security_check( $et_capability, $wp_capability = 'manage_options', $nonce_action = '', $nonce_key = '', $nonce_location = '_POST', $die = \true ) {
}
/**
 * Gets the array of role settings
 *
 * @return array
 */
function et_pb_get_role_settings() {
}
/**
 * Determines the current user role.
 *
 * @return string
 */
function et_pb_get_current_user_role() {
}
/**
 * Generate the list of all roles ( with editing permissions ) registered in current WP.
 *
 * @return array
 */
function et_pb_get_all_roles_list() {
}
/**
 * Determine the current user role by checking every single registered role via current_user_can().
 *
 * @return string
 */
function et_pb_determine_current_user_role() {
}
/**
 * Retrieve similar post types for the given post type.
 *
 * @param string $post_type The post type for which retrieve similar post types.
 *
 * @return array
 */
function et_pb_show_all_layouts_built_for_post_type( $post_type ) {
}
/**
 * AJAX Callback :: Load layouts.
 */
function et_pb_show_all_layouts() {
}
/**
 * AJAX Callback :: Retrieves saved builder layouts.
 */
function et_pb_get_saved_templates() {
}
/**
 * Retrieves saved builder layouts.
 *
 * @since 2.0
 *
 * @param string $layout_type     Accepts 'section', 'row', 'module', 'fullwidth_section',
 *                                'specialty_section', 'fullwidth_module'.
 * @param string $module_width    Accepts 'regular', 'fullwidth'.
 * @param string $is_global       Filter layouts based on their scope. Accepts 'global' to include
 *                                only global layouts, 'false' to include only non-global layouts,
 *                                or 'all' to include both global and non-global layouts.
 * @param string $specialty_query Limit results to layouts of type 'row' that can be put inside
 *                                specialty sections. Accepts '3' to include only 3-column rows,
 *                                '2' for 2-column rows, or '0' to disable the specialty query. Default '0'.
 * @param string $post_type       Limit results to layouts built for this post type.
 * @param string $deprecated      Deprecated.
 * @param array  $boundaries      {
 *
 *                                Return a subset of the total results.
 *
 * @type int $offset Start from this point in the results. Default `0`.
 * @type int $limit  Maximum number of results to return. Default `-1`.
 * }
 *
 * @return array[] $layouts {
 *
 * @type mixed[] {
 *
 *         Layout Data
 *
 * @type int      $ID               The layout's post id.
 * @type string   $title            The layout's title/name.
 * @type string   $shortcode        The layout's shortcode content.
 * @type string   $is_global        The layout's scope. Accepts 'global', 'non_global'.
 * @type string   $layout_type      The layout's type. See {@see self::$layout_type} param for accepted values.
 * @type string   $applicability    The layout's applicability.
 * @type string   $layouts_type     Deprecated. Will always be 'library'.
 * @type string   $module_type      For layouts of type 'module', the module type/slug (eg. et_pb_blog).
 * @type string[] $categories       This layout's assigned categories (slugs).
 * @type string   $row_layout       For layout's of type 'row', the row layout type (eg. 4_4).
 * @type mixed[]  $unsynced_options For global layouts, the layout's unsynced settings.
 *     }
 *     ...
 * }
 */
function et_pb_retrieve_templates( $layout_type = 'layout', $module_width = '', $is_global = 'false', $specialty_query = '0', $post_type = 'post', $deprecated = '', $boundaries = array() ) {
}
/**
 * AJAX Callback :: Add template meta.
 */
function et_pb_add_template_meta() {
}
/**
 * AJAX Callback :: Save layout to database.
 */
function et_pb_add_new_layout() {
}
/**
 * Handles saving layouts to the database for the builder. Essentially just a wrapper for
 * {@see et_pb_create_layout()} that processes the data from the builder before passing it on.
 *
 * @since 1.0
 *
 * @param array $args {
 *                    Layout Data.
 *
 * @type string $layout_type          Accepts 'layout', 'section', 'row', 'module'.
 * @type string $layout_selected_cats Categories to which the layout should be added. This should
 *                                        be one or more IDs separated by pipe symbols. Example: '1|2|3'.
 * @type string $built_for_post_type  The post type for which the layout was built.
 * @type string $layout_new_cat       Name of a new category to which the layout should be added.
 * @type string $columns_layout       When 'layout_type' is 'row', the row's columns structure. Example: '1_4'.
 * @type string $module_type          When 'layout_type' is 'module', the module type. Example: 'et_pb_blurb'.
 * @type string $layout_scope         Optional. The layout's scope. Accepts: 'global', 'not_global'.
 * @type string $module_width         When 'layout_type' is 'module', the module's width. Accepts: 'regular', 'fullwidth'.
 * @type string $layout_content       The layout's content (unprocessed shortcodes).
 * @type string $layout_name          The layout's name.
 * }
 *
 * @return string $layout_data The 'post_id' and 'edit_link' for the saved layout (JSON encoded).
 */
function et_pb_submit_layout( $args ) {
}
/**
 * Create new layout.
 *
 * @param string $name         The layout name.
 * @param string $content      The layout content.
 * @param array  $meta         The layout meta.
 * @param array  $tax_input    Array of taxonomy terms keyed by their taxonomy name.
 * @param string $new_category The layout category.
 */
function et_pb_create_layout( $name, $content, $meta = array(), $tax_input = array(), $new_category = '', $new_tag = '', $post_status = 'publish' ) {
}
/**
 * AJAX Callback :: Save layout to the database for the builder.
 */
function et_pb_save_layout() {
}
/**
 * AJAX Callback :: Get layouts.
 */
function et_pb_get_global_module() {
}
/**
 * AJAX Callback :: Update layouts.
 */
function et_pb_update_layout() {
}
/**
 * AJAX Callback :: Get/load layout.
 */
function et_pb_load_layout() {
}
/**
 * AJAX Callback :: Delete layout.
 */
function et_pb_delete_layout() {
}
/**
 * Enables zlib compression if needed/supported.
 */
function et_builder_enable_zlib_compression() {
}
/**
 * AJAX Callback :: Get backbone templates.
 */
function et_pb_get_backbone_templates() {
}
/**
 * Determine if a post is built by a certain builder.
 *
 * @param int    $post_id          The post_id to check.
 * @param string $built_by_builder The builder to check if the post is built by. Allowed values: fb, bb.
 *
 * @return bool
 */
function et_builder_is_builder_built( $post_id, $built_by_builder ) {
}
/**
 * Determine et-editor-available-post-$post_id cookie is set or not.
 *
 * @return bool
 */
function et_is_builder_available_cookie_set() {
}
/**
 * Return heartbeat internal value.
 *
 * @return mixed|void
 */
function et_builder_heartbeat_interval() {
}
/**
 * Ensure hearbeat interval set properly.
 *
 * @param array  $response  The Heartbeat response.
 * @param string $screen_id The screen id.
 *
 * @return mixed
 */
function et_builder_ensure_heartbeat_interval( $response, $screen_id ) {
}
/**
 * Sync during WP heartbeat to have BB check if changes are made outside of itself, and to re-init with changed content if changes occurred.
 *
 * @param array $response The Heartbeat response.
 *
 * @return mixed
 */
function et_pb_heartbeat_post_modified( $response ) {
}
/**
 * Save a post submitted via ETBuilder Heartbeat.
 *
 * Adapted from WordPress
 *
 * @copyright 2016 by the WordPress contributors.
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * This program incorporates work covered by the following copyright and
 * permission notices:
 *
 * b2 is (c) 2001, 2002 Michel Valdrighi - m@tidakada.com - http://tidakada.com
 *
 * b2 is released under the GPL
 *
 * WordPress - Web publishing software
 *
 * Copyright 2003-2010 by the contributors
 *
 * WordPress is released under the GPL
 *
 * @param  array $post_data Associative array of the submitted post data.
 * @return mixed The value 0 or WP_Error on failure. The saved post ID on success.
 *               The ID can be the draft post_id or the autosave revision post_id.
 */
function et_fb_autosave( $post_data ) {
}
/**
 * Autosave builder settings.
 *
 * @param integer $post_id          post id.
 * @param array   $builder_settings builder settings.
 *
 * @return bool|int
 */
function et_pb_autosave_builder_settings( $post_id, $builder_settings ) {
}
/**
 * Autosave with heartbeat.
 *
 * Adapted from WordPress.
 *
 * @copyright 2016 by the WordPress contributors.
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * This program incorporates work covered by the following copyright and
 * permission notices:
 *
 * b2 is (c) 2001, 2002 Michel Valdrighi - m@tidakada.com - http://tidakada.com
 *
 * b2 is released under the GPL
 *
 * WordPress - Web publishing software
 *
 * Copyright 2003-2010 by the contributors
 *
 * WordPress is released under the GPL
 *
 * @param array $response The Heartbeat response.
 * @param array $data     The $_POST data sent.
 *
 * @return array The Heartbeat response.
 */
function et_fb_heartbeat_autosave( $response, $data ) {
}
/**
 * Builder settings autosave.
 *
 * @param array $response The Heartbeat response.
 * @param array $data     The $_POST data sent.
 *
 * @return mixed
 */
function et_bb_heartbeat_autosave( $response, $data ) {
}
/**
 * Builder settings sync.
 *
 * @param array $response The Heartbeat response.
 * @param array $data     The $_POST data sent.
 *
 * @return mixed
 */
function et_bb_heartbeat_builder_settings_autosave( $response, $data ) {
}
/**
 * Refresh nonces after user logs back in to an expired session.
 *
 * @param array   $response  The Heartbeat response.
 * @param array   $data      The $_POST data sent.
 * @param integer $screen_id The screen id.
 *
 * @return mixed
 */
function et_fb_wp_refresh_nonces( $response, $data, $screen_id ) {
}
/**
 * Return portability export url.
 *
 * @return string
 */
function et_fb_get_portability_export_url() {
}
/**
 * Return FB nonces.
 *
 * @return array
 */
function et_fb_get_nonces() {
}
/**
 * Determine the product tour enabled or not.
 */
function et_builder_is_product_tour_enabled() {
}
/**
 * Get module backbone template.
 */
function et_pb_get_backbone_template() {
}
/**
 * Ajax handler for the Email Opt-in Module's "Add Account" action.
 */
function et_builder_email_add_account() {
}
/**
 * Process the Email Optin OAuth2 authorization from builder / VB.
 * This will be loaded in a popup window.
 *
 * @since 4.9.0
 *
 * @throws Exception If the Provider or Account not exists.
 *
 * @return void
 */
function et_builder_finish_oauth2_authorization() {
}
/**
 * Retrieve the email fields by the provider.
 *
 * @param string  $provider_slug   the email provider slug.
 * @param boolean $is_spam_account Whether it is spam proctection provider or not.
 *
 * @return array
 */
function et_builder_email_get_fields_from_post_data( $provider_slug, $is_spam_account = \false ) {
}
/**
 * Get email list data in a builder's options field format.
 *
 * @param string $provider_slug The email provider slug.
 * @param bool   $is_bb         Whether is it backbend builder.
 * @param string $module_class  The ET_Builder_Module_ class suffix.
 *
 * @return array|string The data in the BB's format if `$is_bb` is `true`, the FB's format otherwise.
 */
function et_builder_email_get_lists_field_data( $provider_slug, $is_bb = \false, $module_class = 'Signup' ) {
}
/**
 * Ajax handler for the Email Opt-in Module's "Fetch Lists" action.
 */
function et_builder_email_get_lists() {
}
/**
 * Migrate email provider credential.
 */
function et_builder_email_maybe_migrate_accounts() {
}
/**
 * Ajax handler for the Email Opt-in Module's "Remove Account" action.
 */
function et_builder_email_remove_account() {
}
/**
 * Ajax handler for Email Opt-in Module form submissions.
 */
function et_pb_submit_subscribe_form() {
}
/**
 * Whether or not the builder currently has a certain limitation.
 *
 * @since 3.18
 *
 * @param string $limit The builder limitation key/slug.
 *
 * @return bool
 */
function et_builder_has_limitation( $limit ) {
}
/**
 * Get the defaults for limited builder limitations.
 *
 * @since 3.18
 *
 * @return string[]
 */
function et_get_limited_builder_defaults() {
}
/**
 * Get the slug name of the current limited builder.
 *
 * @since 3.18
 *
 * @return string The slug name of the current limited builder.
 */
function et_get_limited_builder() {
}
/**
 * Is Builder in limited mode?
 *
 * @since 3.18
 *
 * @return bool  True - if the builder is in limited mode.
 */
function et_builder_is_limited_mode() {
}
/**
 * Is Builder plugin active?
 *
 * @since      3.18
 * @deprecated ??
 *
 * @return bool  True - if the plugin is active.
 */
function et_is_builder_plugin_active() {
}
/**
 * Is ET Shortcodes plugin active?
 *
 * @return bool  True - if the plugin is active
 */
function et_is_shortcodes_plugin_active() {
}
/**
 * Saves the Role Settings into WP database
 *
 * @return void
 */
function et_pb_save_role_settings() {
}
/**
 * Filter callback to determine what shortcodes tags are to be removed.
 * Stips all non-builder shortcodes.
 *
 * @see strip_shortcodes_tagnames
 *
 * @param array $tags_to_remove An array of tags to be removed during strip_shortcodes() call.
 *
 * @return array An array of tags to be removed during strip_shortcodes() call.
 */
function et_pb_strip_non_builder_shortcodes_tagnames( $tags_to_remove ) {
}
/**
 * Is Yoast SEO plugin active?
 *
 * @return bool  True - if the plugin is active.
 */
function et_is_yoast_seo_plugin_active() {
}
/**
 * Remove all non-builder shortcodes from builder built post content.
 *
 * @param string $content Builder built post content.
 *
 * @return string Sanitized builder built post content.
 */
function et_pb_enforce_builder_shortcode( $content ) {
}
/**
 * Register 'project' post type, 'project_category' and 'project_tag' taxonomies.
 */
function et_pb_register_posttypes() {
}
/**
 * Determine whether to load backbone template or not.
 *
 * @return bool
 */
function et_admin_backbone_templates_being_loaded() {
}
/**
 * AJAX Callback :: Increase memory limit from failure notice .
 */
function et_pb_attempt_memory_limit_increase() {
}
/**
 * AJAX Callback :: Reset memory limit increase when automatic memory limit increase get disabled.
 */
function et_reset_memory_limit_increase() {
}
/**
 * Return core modal template.
 */
function et_builder_get_core_modal_template() {
}
/**
 * Return core modal buttons template.
 */
function et_builder_get_core_modal_buttons_template() {
}
/**
 * Return Builder Cache Warning modal template.
 */
function et_builder_get_cache_notification_modal() {
}
/**
 * Return Divi Builder Timeout failure notice modal.
 */
function et_builder_get_failure_notification_modal() {
}
/**
 * Incompatible Post Type modal template.
 */
function et_builder_get_no_builder_notification_modal() {
}
/**
 * Browser Is Not Supported modal template.
 */
function et_builder_get_no_browser_notification_modal() {
}
/**
 * Have Unsaved Changes modal template.
 */
function et_builder_get_exit_notification_modal() {
}
/**
 * Return Browser Backup Exists modal template.
 */
function et_builder_get_browser_autosave_notification_modal() {
}
/**
 * Return Autosave Exists modal template.
 */
function et_builder_get_server_autosave_notification_modal() {
}
/**
 *  Return Save Has Failed notification template.
 */
function et_builder_get_unsaved_notification_texts() {
}
/**
 * Return Global Presets Save Failed notification modal template.
 */
function et_builder_get_global_presets_save_failure_texts() {
}
/**
 * Return Global presets save failure text.
 */
function et_builder_get_global_presets_save_forbidden_texts() {
}
/**
 * Return Global Presets Load Failed notification modal template.
 */
function et_builder_get_global_presets_load_failure_texts() {
}
/**
 * Return Page Creation Card modal template.
 */
function et_builder_page_creation_modal() {
}
/**
 * Return Link Disabled notification modal template.
 */
function et_builder_disabled_link_modal() {
}
/**
 * Return
 */
function et_builder_get_warnings() {
}
/**
 * Increase the memory limit.
 */
function et_increase_memory_limit() {
}
/**
 * Try to increase the php memory limit.
 */
function et_maybe_increase_memory_limit() {
}
/**
 * Force php memory limit increase.
 */
function et_should_memory_limit_increase() {
}
/**
 * Return Memory Limit Increase template.
 */
function et_reset_memory_limit_increase_setting() {
}
/**
 * Detect the activated cache plugins and return the link to plugin options and return its page link or false.
 *
 * @return string or bool
 */
function et_pb_detect_cache_plugins() {
}
/**
 * Clear templates cache and delete cached definitions to force regenerate templates.
 */
function et_pb_force_regenerate_templates() {
}
/**
 * Return current ab module id.
 *
 * @param integer $test_id       Test id.
 * @param bool    $subject_index Subject index.
 *
 * @return int|mixed
 */
function et_pb_ab_get_current_ab_module_id( $test_id, $subject_index = \false ) {
}
/**
 * Increment current subject index value on post meta.
 *
 * @param int $test_id test id.
 */
function et_pb_ab_increment_current_ab_module_id( $test_id ) {
}
/**
 * Add the record into AB Testing log table.
 *
 * @param array $stats_data_array State record data.
 *
 * @return void
 */
function et_pb_add_stats_record( $stats_data_array ) {
}
/**
 * Set AB Testing formatted cookie.
 *
 * @since 4.4.3 Set cookie path, so the cookie will be available on overall site.
 *
 * @param int    $post_id     post ID.
 * @param string $record_type record type.
 * @param mixed  $value       cookie value.
 *
 * @return bool|mixed
 */
function et_pb_ab_set_visitor_cookie( $post_id, $record_type, $value = \true ) {
}
/**
 * Get AB Testing formatted cookie.
 *
 * @param int    $post_id     post ID.
 * @param string $record_type record type.
 *
 * @return bool|mixed
 */
function et_pb_ab_get_visitor_cookie( $post_id, $record_type ) {
}
/**
 * Get subjects of particular post / AB Testing.
 *
 * @param int    $post_id      post id.
 * @param string $type         array|string type of output.
 * @param mixed  $prefix       string|bool  prefix that should be prepended.
 * @param bool   $is_cron_task Whether subjects is autosave/draft or not.
 *
 * @return array
 */
function et_pb_ab_get_subjects( $post_id, $type = 'array', $prefix = \false, $is_cron_task = \false ) {
}
/**
 * Unhashed hashed subject id.
 *
 * @param int    $post_id           post ID.
 * @param string $hashed_subject_id hashed subject id.
 *
 * @return string subject ID
 */
function et_pb_ab_unhashed_subject_id( $post_id, $hashed_subject_id ) {
}
/**
 * AJAX Callback :: AB Testing :: Get subject id.
 */
function et_pb_ab_get_subject_id() {
}
/**
 * Register Builder Portability.
 *
 * @since 2.7.0
 */
function et_pb_register_builder_portabilities() {
}
/**
 * Modify the portability export WP query.
 *
 * @since To define
 *
 * @param WP_Query $query portability query.
 *
 * @return string New query.
 */
function et_pb_modify_portability_export_wp_query( $query ) {
}
/**
 * Check whether current page is pagebuilder preview page.
 *
 * @return bool
 */
function is_et_pb_preview() {
}
/**
 * Determine whether page builder is used or not on the post/page.
 *
 * @param integer $page_id The post id to be checked.
 *
 * @return bool
 */
function et_pb_is_pagebuilder_used( $page_id = 0 ) {
}
/**
 * Determine fb enabled status of a post / page.
 *
 * @internal NOTE: Don't use this from outside builder code! {@see et_core_is_fb_enabled()}.
 *
 * @param bool|integer $post_id The post ID to determine fb enabled status of a post / page.
 *
 * @return bool
 */
function et_fb_is_enabled( $post_id = \false ) {
}
/**
 * Determine fb enabled status of a post / page or any theme builder layout used in the page.
 *
 * @internal NOTE: Don't use this from outside builder code! {@see et_core_is_fb_enabled()}.
 *
 * @return bool
 */
function et_fb_is_enabled_on_any_template() {
}
/**
 * Check if Theme Builder is Used on the page.
 *
 * @return bool
 */
function et_fb_is_theme_builder_used_on_page() {
}
/**
 * Returns whether current request is a builder AJAX call.
 *
 * @return bool
 */
function et_fb_is_builder_ajax() {
}
/**
 * Returns whether current request is computed callback AJAX call
 *
 * @return bool
 */
function et_fb_is_computed_callback_ajax() {
}
/**
 * Returns whether current request is before & after components callback AJAX call.
 *
 * @since 4.14.5
 *
 * @return bool
 */
function et_fb_is_before_after_components_callback_ajax() {
}
/**
 * Returns whether current request is resolve post content callback AJAX call
 *
 * @return bool
 */
function et_fb_is_resolve_post_content_callback_ajax() {
}
/**
 * FB :: enable page with no BB activated to directly use visual builder by clicking use visual builder link on WP admin bar.
 */
function et_fb_auto_activate_builder() {
}
/**
 * Enable the VB for a post.
 *
 * @since 4.0
 *
 * @param integer $post_id            The post id for which to enable VB.
 * @param bool    $show_page_creation Whether to show page creation card.
 *
 * @return bool Success.
 */
function et_builder_enable_for_post( $post_id, $show_page_creation = \true ) {
}
/**
 * Set builder content at the time of enabling visual builder.
 *
 * @param bool|integer $post_id The post id on which visual builder get enable.
 *
 * @return bool
 */
function et_builder_set_content_activation( $post_id = \false ) {
}
/**
 * Load font family.
 *
 * @param string $font_name     Font name slug.
 * @param bool   $use_important Whether to use !important in font-family css property.
 *
 * @return string
 */
function et_builder_get_font_family( $font_name, $use_important = \false ) {
}
/**
 * Return websafe and google font list.
 *
 * @param array $settings {
 *                        Font settings.
 * @type  string $prepend_standard_fonts Whether to prepend or append websafe fonts in returned list.
 * }
 *
 * @return array
 */
function et_builder_get_fonts( $settings = array() ) {
}
/**
 * Return websafe font stack.
 *
 * @param string $type the font stack type.
 *
 * @return string
 */
function et_builder_get_websafe_font_stack( $type = 'sans-serif' ) {
}
/**
 * Return websafe fonts list.
 */
function et_builder_get_websafe_fonts() {
}
/**
 * Return font weight list.
 */
function et_builder_get_font_weight_list() {
}
/**
 * Return user uploaded custom fonts.
 *
 * @return array
 */
function et_builder_get_custom_fonts() {
}
/**
 * Return old(removed) fonts mapping.
 *
 * @return array
 */
function et_builder_old_fonts_mapping() {
}
/**
 * Sync Google Fonts. Clear font cache every 24 hours.
 */
function et_builder_google_fonts_sync() {
}
/**
 * Return google fonts.
 */
function et_builder_get_google_fonts() {
}
/**
 * Use correct conditional tag for compute callback. Compute callback can use actual conditional tag
 * on page load. Compute callback relies on passed conditional tag params for update due to the
 * ajax-admin.php nature.
 *
 * @param  string $name             conditional tag name.
 * @param  array  $conditional_tags all conditional tags params.
 * @return bool  conditional tag value.
 */
function et_fb_conditional_tag( $name, $conditional_tags ) {
}
/**
 * Retrieves the content of saved modules and process the shortcode into array.
 */
function et_fb_get_saved_templates() {
}
/**
 * Retrieves posts list that builder enabled.
 */
function et_fb_get_posts_list() {
}
/**
 * Return supported font formats.
 *
 * @return mixed|void
 */
function et_pb_get_supported_font_formats() {
}
/***
 * AJAX Callback :: Process uploaded custom font.
 */
function et_pb_process_custom_font() {
}
/**
 * Save droploaded images to WP Media Library.
 */
function et_builder_droploader_process() {
}
/**
 * Add allowed mime types and file extensions for font files.
 *
 * @return array
 */
function et_pb_filter_upload_mimes_custom_fonts() {
}
/**
 * Save the font-file.
 *
 * @param array  $font_files    font files.
 * @param string $font_name     font name.
 * @param array  $font_settings font settings.
 *
 * @return array
 */
function et_pb_add_font( $font_files, $font_name, $font_settings ) {
}
/**
 * Remove custom font.
 *
 * @param string $font_name Font name to remove.
 *
 * @return array
 */
function et_pb_remove_font( $font_name ) {
}
/**
 * Delete a font file.
 *
 * @param string $font_file font file path.
 *
 * @return bool
 */
function et_pb_safe_unlink_font_file( $font_file ) {
}
/**
 * Set fonts upload dir.
 *
 * @param array $directory directory path.
 *
 * @return mixed
 */
function et_pb_set_fonts_upload_dir( $directory ) {
}
/**
 * Return unsynced global settings,
 *
 * @param string $post_type      Post type.
 * @param array  $shortcode_data Shortcode data.
 *
 * @return array
 */
function et_pb_get_unsynced_legacy_options( $post_type, $shortcode_data ) {
}
/**
 * Prepare the ssl link for FB.
 *
 * @param string $link The link to be be prepared for ssl.
 *
 * @return string|string[]
 */
function et_fb_prepare_ssl_link( $link ) {
}
/**
 * Create a VB/BFB url.
 *
 * @param string $url            Post url.
 * @param string $builder        'vb' or 'bfb'.
 * @param bool   $is_new_page    Whether the page is new or not.
 * @param bool   $custom_page_id page id.
 *
 * @return string.
 */
function et_fb_get_builder_url( $url = \false, $builder = 'vb', $is_new_page = \false, $custom_page_id = \false ) {
}
/**
 * Create a VB url.
 *
 * @param  string $url Post url.
 * @return string.
 */
function et_fb_get_vb_url( $url = \false ) {
}
/**
 * Create a BFB url.
 *
 * @param string $url            Post url.
 * @param bool   $is_new_page    Whether the page is new or not.
 * @param bool   $custom_page_id page id.
 *
 * @return string.
 */
function et_fb_get_bfb_url( $url = \false, $is_new_page = \false, $custom_page_id = \false ) {
}
/**
 * Filterable options for backend and visual builder. Designed to be filtered
 * by theme/plugin since builder is shared accross Divi, Extra, and Divi Builder.
 *
 * @return array builder options values
 */
function et_builder_options() {
}
/**
 * Get specific builder option (fetched from et_builder_options()).
 *
 * @param  string $name option name.
 * @return mixed builder option value
 */
function et_builder_option( $name ) {
}
/**
 * Pass thru semantical previously escaped acknowledgement
 *
 * @deprecated {@see et_core_esc_previously()}
 *
 * @since 3.17.1 Deprecated
 *
 * @param  string $passthru value being passed through.
 * @return string
 */
function et_esc_previously( $passthru ) {
}
/**
 * Pass thru semantical escaped by WordPress core acknowledgement
 *
 * @deprecated {@see et_core_esc_wp()}
 *
 * @since 3.17.1 Deprecated
 *
 * @param string $passthru value being passed through.
 *
 * @return string
 */
function et_esc_wp( $passthru ) {
}
/**
 * Pass thru semantical intentionally unescaped acknowledgement.
 *
 * @deprecated {@see et_core_intentionally_unescaped()}
 *
 * @since 3.17.1 Deprecated
 *
 * @param  string $passthru value being passed through.
 * @param  string $excuse   excuse the value is allowed to be unescaped.
 * @return string
 */
function et_intentionally_unescaped( $passthru, $excuse ) {
}
/**
 * Sanitize value depending on user capability.
 *
 * @deprecated {@see et_core_sanitize_value_by_cap()}
 *
 * @since 3.17.1 Deprecated
 *
 * @param string   $passthru          value being passed through.
 * @param callable $sanitize_function santization function.
 * @param string   $cap               WP capability name.
 *
 * @return string value being passed through.
 */
function et_sanitize_value_by_cap( $passthru, $sanitize_function = 'et_sanitize_html_input_text', $cap = 'unfiltered_html' ) {
}
/**
 * Pass thru semantical intentionally unsanitized acknowledgement.
 *
 * @deprecated {@see et_core_intentinally_unsanitized()}
 *
 * @since 3.17.1 Deprecated
 *
 * @param  string $passthru value being passed through.
 * @param  string $excuse   excuse the value is allowed to be unsanitized.
 * @return string
 */
function et_intentionally_unsanitized( $passthru, $excuse ) {
}
/**
 * Prevent delimiter-separated string from having duplicate item.
 *
 * @param  string $string_list delimiter-separated string.
 * @param  string $delimiter   delimiter.
 * @return string filtered delimiter-separated string.
 */
function et_prevent_duplicate_item( $string_list, $delimiter ) {
}
/**
 * Determining whether unminified scripts should be loaded or not.
 *
 * @since 4.6.2 Removes static $should_load to ensure it's filtered with latest value.
 *
 * @return bool
 *
 * @deprecated ??
 */
function et_load_unminified_scripts() {
}
/**
 * Determining whether unminified styles should be loaded or not
 *
 * @since 4.6.2 Removes static $should_load to ensure it's filtered with latest value.
 *
 * @deprecated ??
 */
function et_load_unminified_styles() {
}
/**
 * Enable / Disable classic editor based on saved option in Theme Options page.
 * Only applies to versions of WordPress that have the Gutenberg editor.
 *
 * @since 3.18
 *
 * @param bool $enable Whether to enable or disable.
 *
 * @return bool
 */
function et_builder_enable_classic_editor( $enable ) {
}
/**
 * Check whether the BFB is enabled.
 *
 * @since 3.18
 *
 * @return bool
 */
function et_builder_bfb_enabled() {
}
/**
 * Check whether BFB is activated for this site or not.
 *
 * @since 3.28
 *
 * @return bool
 */
function et_builder_bfb_activated() {
}
/**
 * Check whether the VB is loaded through TB.
 *
 * @since 4.0
 *
 * @return bool
 */
function et_builder_tb_enabled() {
}
/**
 * Check if the current screen is the Theme Builder administration screen.
 *
 * @since 4.0
 *
 * @return bool
 */
function et_builder_is_tb_admin_screen() {
}
/**
 * Check if the current screen is the Divi Onboarding administration screen.
 *
 * @since 4.26.0
 *
 * @return bool
 */
function et_builder_is_et_onboarding_page() {
}
/**
 * Theme implementation for BFB enabled check.
 *
 * @since 3.18
 *
 * @return bool
 */
function et_builder_filter_bfb_enabled() {
}
/**
 * Get whether the builder is freshly installed.
 *
 * @since 3.18
 *
 * @return bool
 */
function et_builder_is_fresh_install() {
}
/**
 * Theme implementation for fresh install check.
 *
 * @since 3.18
 *
 * @return bool
 */
function et_builder_filter_is_fresh_install() {
}
/**
 * Determine whether current request is AJAX request for loading BB data
 *
 * @since 3.28
 *
 * @todo remove & replace this function with `et_builder_is_loading_data()` once PR #6325 is merged
 *
 * @return bool
 */
function et_builder_is_loading_bb_data() {
}
/**
 * Determine whether current request is classic builder (BB) edit page.
 *
 * @since 3.28
 *
 * @return bool
 */
function et_builder_is_bb_page() {
}
/**
 * Toggle BFB.
 *
 * @since 3.18
 *
 * @param bool $enable Whether to enable or disable bfb.
 *
 * @return void
 */
function et_builder_toggle_bfb( $enable ) {
}
/**
 * Theme implementation for BFB toggle.
 *
 * @since 3.18
 *
 * @param bool $enable Whether to enable or disable BFB.
 *
 * @return void
 */
function et_builder_action_toggle_bfb( $enable ) {
}
/**
 * Show the BFB welcome modal.
 *
 * @since 3.18
 *
 * @return void
 */
function et_builder_show_bfb_welcome_modal() {
}
/**
 * Maybe queue BFB opt-in modal.
 *
 * @since 3.18
 *
 * @return void
 */
function et_builder_prepare_bfb() {
}
/**
 * Add the divi builder body class.
 *
 * @param array $classes body classes.
 *
 * @return array
 */
function et_builder_add_body_class( $classes ) {
}
/**
 * Add builder inner content wrapper classes.
 *
 * @since 3.10
 *
 * @param array $classes css classes list.
 *
 * @return array
 */
function et_builder_add_builder_inner_content_class( $classes ) {
}
/**
 * Get the opening wrappers for builder-powered content.
 *
 * @since 4.0
 *
 * @return string
 */
function et_builder_get_builder_content_opening_wrapper() {
}
/**
 * Get the opening wrappers for individual builder-powered layouts.
 *
 * @since 4.0
 *
 * @return string
 */
function et_builder_get_layout_opening_wrapper( $post_type = '' ) {
}
/**
 * Get the closing wrappers for individual builder-powered layouts.
 *
 * @since 4.0
 *
 * @return string
 */
function et_builder_get_layout_closing_wrapper( $post_type = '' ) {
}
/**
 * Get the closing wrappers for builder-powered content.
 *
 * @since 4.0
 *
 * @return string
 */
function et_builder_get_builder_content_closing_wrapper() {
}
/**
 * Wrap post builder content.
 *
 * @since 3.10
 *
 * @param string $content The post content.
 *
 * @return string
 */
function et_builder_add_builder_content_wrapper( $content ) {
}
/**
 * Wraps a copy of a css selector and then returns both selectors.
 * Wrapping a copy of a selector instead of the original is necessary for selectors
 * that target elements both inside AND outside the wrapper element.
 *
 * @since 3.10
 * @since 4.6.6 New $inside_selectors parameter to extend default inside selector.
 *
 * @param string  $selector         CSS selector to wrap.
 * @param string  $suffix           Selector partial to add to the wrapped selector after the wrapper (a space will be added first).
 * @param boolean $clone            Duplicate the selector, wrap the duplicate, and then return both selectors. Default `true`.
 * @param mixed   $inside_selectors Additional inside builder element selectors.
 *
 * @return string
 */
function et_builder_maybe_wrap_css_selector( $selector, $suffix = '', $clone = \true, $inside_selectors = '' ) {
}
/**
 * Wrapper for {@see et_builder_maybe_wrap_css_selector()} to support multiple selectors
 * at once (eg. selector1, selector2, selector3)
 *
 * @since 3.10
 * @since 4.6.6 New $inside_selectors parameter to extend default inside selector.
 *
 * @param string $selector         CSS selectors to wrap.
 * @param bool   $clone            {@see et_builder_maybe_wrap_css_selector()}.
 * @param mixed  $inside_selectors Additional inside builder element selectora.
 *
 * @return string
 */
function et_builder_maybe_wrap_css_selectors( $selector, $clone = \true, $inside_selectors = '' ) {
}
/**
 * Unprepend code module content.
 *
 * @param string $content Code module content.
 *
 * @return string|string[]|null
 */
function _et_pb_code_module_unprep_content( $content ) {
}
/**
 * A preg_replace_callback callback.
 *
 * @param array $matches matched elements.
 *
 * @return string|string[]
 */
function _et_pb_code_module_unprep_content_regex_cb( $matches ) {
}
/**
 * Undo prepared code module content.
 *
 * @param string $content Content from which to remove prepended.
 *
 * @return string|string[]|null
 */
function et_pb_unprep_code_module_for_wpautop( $content ) {
}
/**
 * Prepare code modules for wpautop.
 *
 * @param string $content Content to be prep.
 *
 * @return string|string[]|null
 */
function _et_pb_code_module_prep_content( $content ) {
}
/**
 * The Callback preg_replace_callback used while preparing code module for autop.
 *
 * @param array $matches array of matched elements.
 *
 * @return string|string[]
 */
function _et_pb_code_module_prep_content_regex_cb( $matches ) {
}
/**
 * Prepare code module for autop.
 *
 * @param string $content the content.
 *
 * @return string|string[]|null
 */
function et_pb_prep_code_module_for_wpautop( $content ) {
}
/**
 * Determine whether dynamic asset exists or not.
 *
 * @param string      $prefix    Asset prefix.
 * @param string|bool $post_type Asset post type.
 *
 * @return bool
 */
function et_fb_dynamic_asset_exists( $prefix, $post_type = \false ) {
}
/**
 * Delete builder cache.
 */
function et_fb_delete_builder_assets() {
}
/**
 * Load Open Sans font.
 *
 * @deprecated See {@see et_builder_enqueue_open_sans()}
 */
function et_fb_enqueue_open_sans() {
}
/**
 * Wrapper for et_core_portability_link() which does ET capability checks as well.
 *
 * @since 3.26
 *
 * @param string       $context    The context used to register the portability.
 * @param string|array $attributes Query string or array of attributes. Default empty.
 *
 * @return string
 */
function et_builder_portability_link( $context, $attributes = array() ) {
}
/**
 * Get the list of all public post types.
 *
 * @since 3.26.7
 *
 * @return WP_Post_Type[]
 */
function et_builder_get_public_post_types() {
}
/**
 * Clear public post type cache whenever a custom post type is registered.
 *
 * @since 3.26.7
 *
 * @return void
 */
function et_builder_clear_get_public_post_types_cache() {
}
/**
 * Filters the image sizes to calculate responsive image height.
 *
 * @param array $sizes    An associative array of image sizes.
 * @param array $metadata An associative array of image metadata: width, height, file.
 *
 * @return array
 */
function et_filter_intermediate_image_sizes_advanced( $sizes, $metadata = array() ) {
}
/**
 * Sync image data cache
 *
 * @since 3.29.3
 *
 * @param int   $attachment_id Attachment ID.
 * @param array $metadata      Image metadata.
 *
 * @return void
 */
function et_action_sync_attachment_data_cache( $attachment_id, $metadata = \null ) {
}
/**
 * Sync the cached srcset data when attachment meta data generated/updated.
 *
 * @since 3.27.1
 *
 * @param array $metadata      An array of attachment meta data.
 * @param int   $attachment_id Current attachment ID.
 *
 * @return array
 */
function et_filter_wp_generate_attachment_metadata( $metadata, $attachment_id = 0 ) {
}
/**
 * Filter the main query paged arg to avoid pagination clashes with the Blog module pagination.
 *
 * @since 4.0
 *
 * @param WP_Query $query Query object.
 *
 * @return void
 */
function et_builder_filter_main_query_paged_for_blog_module( $query ) {
}
/**
 * Maybe enable [embed] shortcode at the content.
 *
 * @since 4.4.9
 *
 * @param string  $content    Content to search for shortcodes.
 * @param boolean $is_content Whether the passed content is the content.
 *
 * @return string
 */
function et_maybe_enable_embed_shortcode( $content, $is_content ) {
}
/**
 * Calculate value which has unit on it.
 *
 * Might need to group this style rendering related utils function if there are more of them
 *
 * @used-by ET_Builder_Module_Helper_Overlay::process_icon_font_size()
 *
 * @param string         $value      base value which has unit.
 * @param int|float      $multiplier multiplier (literally).
 * @param bool|int|float $min_value  minimum $value to do calculation. set to false to skip.
 *
 * @return string
 */
function et_builder_multiply_value_has_unit( $value, $multiplier, $min_value = \false ) {
}
/**
 * Register custom sidebars.
 *
 * @since 4.4.8 Moved from builder/functions.php, so it can be loaded on wp_ajax_save_widget().
 */
function et_builder_widgets_init() {
}
/**
 * For Dev Use
 */
function et_light_debug_backtrace() {
}
/**
 * Get all global colors.
 *
 * @since 4.9.0
 *
 * @return array
 */
function et_builder_get_all_global_colors( $include_customizer = \false ) {
}
/**
 * Handle AI Button feature.
 *
 * @package Builder
 * @since   4.22.0
 */
/**
 * Gets AI field options to be listed.
 *
 * These options are shown when the field is empty.
 *
 * @param boolean $is_image If button is used on image field.
 *
 * @return Array
 */
function et_builder_get_ai_text_field_empty_options( $is_image = \false ) {
}
/**
 * Gets AI field options to be listed.
 *
 * These options are shown when the field is NOT empty.
 *
 * @return Array
 */
function et_builder_get_ai_text_field_options() {
}
/**
 * Gets AI text options to be listed.
 *
 * These options are shown when the field is NOT empty.
 *
 * @return Array
 */
function et_builder_get_ai_text_options() {
}
/**
 * Get AI code options to be listed.
 *
 * These options are shown when the code field is NOT empty.
 *
 * @return Array
 */
function et_builder_get_ai_code_options() {
}
/**
 * Gets AI image options to be listed.
 *
 * These options are shown when the field is NOT empty.
 *
 * @return Array
 */
function et_builder_get_ai_image_options() {
}
/**
 * Gets AI field options to be listed.
 *
 * These options are shown when the text field has selected text.
 */
function et_builder_get_ai_selected_text_field_options() {
}
/**
 * Functions needed for the Background Masks QF.
 *
 * @since 4.15.0
 *
 * @package    Divi
 * @subpackage Builder
 */
/**
 * Get background pattern option instance.
 *
 * @since 4.15.0
 *
 * @return ET_Builder_Background_Pattern_Options
 */
function et_pb_background_pattern_options() {
}
/**
 * Get background mask option instance.
 *
 * @since 4.15.0
 *
 * @return ET_Builder_Background_Mask_Options
 */
function et_pb_background_mask_options() {
}
/**
 * Returns Pattern style options.
 *
 * @since 4.15.0
 *
 * @return array
 */
function et_pb_get_pattern_style_options() {
}
/**
 * Returns Mask style options.
 *
 * @since 4.15.0
 *
 * @return array
 */
function et_pb_get_mask_style_options() {
}
/**
 * Return allowed units for width/height/horizontal offset/vertical offset field.
 *
 * @since 4.15.0
 *
 * @return string[]
 */
function et_pb_get_background_field_allowed_units() {
}
/**
 * Return blend mode options list.
 *
 * @since 4.15.0
 *
 * @return array
 */
function et_pb_get_background_blend_mode_options() {
}
/**
 * Return Background Position options list.
 *
 * @since 4.15.0
 *
 * @return array
 */
function et_pb_get_background_position_options() {
}
/**
 * Return Background Repeat options list.
 *
 * @since 4.15.0
 *
 * @param bool $no_repeat Whether to include no-repeat option.
 *
 * @return array
 */
function et_pb_get_background_repeat_options( $no_repeat = \true ) {
}
/**
 * Functions needed for the Background Pattern Fields.
 *
 * @since 4.15.0
 *
 * @package    Divi
 * @subpackage Builder
 */
/**
 * Mask Fields Language Strings.
 *
 * @since 4.15.0
 *
 * @return array
 */
function et_pb_mask_i18n() {
}
/**
 * Mask Field Templates.
 *
 * @since 4.15.0
 *
 * @return array[]
 */
function et_ph_mask_field_templates() {
}
/**
 * Generates Background Mask fields.
 *
 * @since 4.15.0
 *
 * @param string $base_name background base name.
 * @param bool   $specialty whether return field for specialty section column.
 *
 * @return array
 */
function et_pb_get_mask_fields( $base_name, $specialty = \false ) {
}
/**
 * Functions needed for the Background Pattern Fields.
 *
 * @package    Divi
 * @subpackage Builder
 * @since      4.15.0
 */
/**
 * Pattern Fields Language Strings.
 *
 * @since 4.15.0
 *
 * @return array
 */
function et_pb_pattern_i18n() {
}
/**
 * Pattern Field Templates.
 *
 * @since 4.15.0
 *
 * @return array[]
 */
function et_ph_pattern_field_templates() {
}
/**
 * Generates Background Pattern fields.
 *
 * @since 4.15.0
 *
 * @param string $base_name background base name.
 * @param bool   $specialty whether return field for specialty section column.
 *
 * @return array
 */
function et_pb_get_pattern_fields( $base_name, $specialty = \false ) {
}
/**
 * Handle Dynamic Assets
 *
 * @package Builder
 */
/**
 * Gets the assets directory.
 *
 * @param bool $url check if url.
 *
 * @return string
 * @since  4.10.0
 */
function et_get_dynamic_assets_path( $url = \false ) {
}
/**
 * Checks if current post/page is built-in.
 *
 * @return bool
 * @since  4.10.0
 */
function et_is_cpt() {
}
/**
 * Extracts gutter width values from post/page content.
 *
 * @param array $matches matched gutters.
 *
 * @return array
 * @since  4.10.0
 */
function et_get_content_gutter_widths( $matches ) {
}
/**
 * Check if any widgets are currently active.
 *
 * @return bool
 * @since  4.10.0
 */
function et_pb_are_widgets_used() {
}
/**
 * Check if a specific value is "on" on the page.
 *
 * @param array $values matched values.
 *
 * @return bool
 * @since  4.10.0
 */
function et_check_if_particular_value_is_on( $values ) {
}
/**
 * Get if a non-default preset value.
 *
 * @param array $values Matched values.
 *
 * @return array
 * @since  4.10.0
 */
function et_get_non_default_preset_ids( $values ) {
}
/**
 * Check to see if this is a front end request applicable to Dynamic Assets.
 *
 * @since 4.10.0
 *
 * @return bool
 */
function et_is_dynamic_front_end_request() {
}
/**
 * Check to see if this is a front end request.
 *
 * @since 4.10.0
 *
 * @return bool
 */
function et_is_front_end_request() {
}
/**
 * Check if the current request should generate Dynamic Assets.
 * We only generate dynamic assets on the front end and when cache dir is writable.
 *
 * @since 4.10.0
 *
 * @return bool
 */
function et_should_generate_dynamic_assets() {
}
/**
 * Check if Dynamic CSS is enabled.
 *
 * @return bool
 * @since  4.10.0
 */
function et_use_dynamic_css() {
}
/**
 * Check if Dynamic Icons are enabled.
 *
 * @since 4.10.0
 */
function et_use_dynamic_icons() {
}
/**
 * Check if JavaScript On Demand is enabled.
 *
 * @return bool
 * @since  4.10.0
 */
function et_disable_js_on_demand() {
}
/**
 * Disable dynamic icons if TP modules are present.
 *
 * @since 4.10.0
 */
function et_dynamic_icons_default_value() {
}
/**
 * Get all active block widgets.
 *
 * This method will collect all active block widgets first. Later on, the result will be
 * cached to improve the performance.
 *
 * @since 4.10.5
 *
 * @return array List of active block widgets.
 */
function et_get_active_block_widgets() {
}
/**
 * Check whether current block widget is active or not.
 *
 * @since 4.10.5
 *
 * @param string $block_widget_name Block widget name.
 *
 * @return boolean Whether current block widget is active or not.
 */
function et_is_active_block_widget( $block_widget_name ) {
}
/**
 * Check whether Extra Home layout is being used.
 *
 * @since 4.17.5
 *
 * @return boolean whether Extra Home layout is being used.
 */
function et_is_extra_layout_used_as_front() {
}
/**
 * Check whether Extra Home layout is being used.
 *
 * @since 4.17.5
 *
 * @return boolean whether Extra Home layout is being used.
 */
function et_is_extra_layout_used_as_home() {
}
/**
 * Get Extra Home layout ID.
 *
 * @since 4.17.5
 *
 * @return int|null
 */
function et_get_extra_home_layout_id() {
}
/**
 *  Get Extra Taxonomy layout ID.
 *
 * @since 4.17.5
 *
 * @return int|null
 */
function et_get_extra_tax_layout_id() {
}
/**
 * Get embeded media from post content.
 *
 * @since 4.20.1
 *
 * @param int $content Post Content.
 *
 * @return boolean false on failure, true on success.
 */
function et_is_media_embedded_in_content( $content ) {
}
/**
 * Handle dynamic content.
 *
 * @package Builder
 */
/**
 * Gets the dynamic content fields related to Product post type.
 *
 * @since 3.29
 *
 * @return array
 */
function et_builder_get_product_dynamic_content_fields() {
}
/**
 * Get built-in dynamic content fields.
 *
 * @since 3.17.2
 *
 * @param integer $post_id Post Id.
 *
 * @return array[]
 */
function et_builder_get_built_in_dynamic_content_fields( $post_id ) {
}
/**
 * Clear dynamic content fields cache whenever a custom post type is registered.
 *
 * @since 3.26.7
 *
 * @return void
 */
function et_builder_clear_get_built_in_dynamic_content_fields_cache() {
}
/**
 * Get all public taxonomies associated with a given post type.
 *
 * @since 3.17.2
 *
 * @param string $post_type Post type.
 *
 * @return array
 */
function et_builder_get_taxonomy_types( $post_type ) {
}
/**
 * Get a user-friendly custom field label for the given meta key.
 *
 * @since 4.4.4
 *
 * @param string $key Post meta key.
 *
 * @return string
 */
function et_builder_get_dynamic_content_custom_field_label( $key ) {
}
/**
 * Get all dynamic content fields in a given string.
 *
 * @since 4.4.4
 *
 * @param string $content Value content.
 *
 * @return array
 */
function et_builder_get_dynamic_contents( $content ) {
}
/**
 * Get all meta keys used as dynamic content in the content of a post.
 *
 * @param integer $post_id Post Id.
 *
 * @return array
 */
function et_builder_get_used_dynamic_content_meta_keys( $post_id ) {
}
/**
 * Get most used meta keys on public post types.
 *
 * @since 4.4.4
 *
 * @return string[]
 */
function et_builder_get_most_used_post_meta_keys() {
}
/**
 * Get custom dynamic content fields.
 *
 * @since 3.17.2
 *
 * @param integer $post_id Post Id.
 *
 * @return array[]
 */
function et_builder_get_custom_dynamic_content_fields( $post_id ) {
}
/**
 * Sanitize dynamic content on save.
 *
 * Check on save post if the user has the unfiltered_html capability,
 * if they do, we can bail, because they can save whatever they want,
 * if they don't, we need to strip the enable_html flag from the dynamic content item,
 * and then re-encode it, and put the new value back in the post content.
 *
 * @since 4.23.2
 *
 * @param array $data An array of slashed post data.
 *
 * @return array $data Modified post data.
 */
function et_builder_sanitize_dynamic_content_fields( $data ) {
}
/**
 * Get all dynamic content fields.
 *
 * @since 3.17.2
 *
 * @param integer $post_id Post Id.
 * @param string  $context Context e.g `edit`, `display`.
 *
 * @return array[]
 */
function et_builder_get_dynamic_content_fields( $post_id, $context ) {
}
/**
 * Sort dynamic content fields.
 *
 * @since 4.0
 *
 * @param array $a First field.
 * @param array $b Second field.
 *
 * @return integer
 */
function et_builder_sort_dynamic_content_fields( $a, $b ) {
}
/**
 * Get default value for a dynamic content field's setting.
 *
 * @since 3.17.2
 *
 * @param integer $post_id Post Id.
 * @param string  $field   Custom field name.
 * @param string  $setting Array of dynamic content settings.
 *
 * @return string
 */
function et_builder_get_dynamic_attribute_field_default( $post_id, $field, $setting ) {
}
/**
 * Resolve dynamic content to a simple value.
 *
 * @param string  $name       Custom field name.
 * @param array   $settings   Array of dynamic content settings.
 * @param integer $post_id    Post Id.
 * @param string  $context    Context e.g `edit`, `display`.
 * @param array   $overrides  An associative array of field_name => value to override field value.
 * @param bool    $is_content Whether dynamic content used in module's main_content field {@see et_builder_ajax_resolve_post_content()}.
 *
 * @return string
 * @since  3.17.2
 */
function et_builder_resolve_dynamic_content( $name, $settings, $post_id, $context, $overrides = array(), $is_content = \false ) {
}
/**
 * Wrap a dynamic content value with its before/after settings values.
 *
 * @since 3.17.2
 *
 * @param integer $post_id  Post Id.
 * @param string  $name     Custom field name.
 * @param string  $value    Value content.
 * @param array   $settings Array of dynamic content settings.
 *
 * @return string
 */
function et_builder_wrap_dynamic_content( $post_id, $name, $value, $settings ) {
}
/**
 * Resolve built-in dynamic content fields.
 *
 * @param string  $content   Value content.
 * @param string  $name      Custom field name.
 * @param array   $settings  Array of dynamic content settings.
 * @param integer $post_id   Post Id.
 * @param string  $context   Context e.g `edit`, `display`.
 * @param array   $overrides An associative array of field_name => value to override field value.
 *
 * @return string
 * @since  3.17.2
 */
function et_builder_filter_resolve_default_dynamic_content( $content, $name, $settings, $post_id, $context, $overrides ) {
}
/**
 * Add iFrame to allowed wp_kses_post tags.
 *
 * @param array  $tags    Allowed tags, attributes, and entities.
 * @param string $context Context to judge allowed tags by. Allowed values are 'post'.
 *
 * @return array
 */
function et_builder_wp_kses_post_tags( $tags, $context ) {
}
/**
 * Resolve custom field dynamic content fields.
 *
 * @param string  $content   Value content.
 * @param string  $name      Custom field name.
 * @param array   $settings  Array of dynamic content settings.
 * @param integer $post_id   Post Id.
 * @param string  $context   Context e.g `edit`, `display`.
 * @param array   $overrides An associative array of field_name => value to override field value.
 *
 * @return string
 * @since  3.17.2
 */
function et_builder_filter_resolve_custom_field_dynamic_content( $content, $name, $settings, $post_id, $context, $overrides ) {
}
/**
 * Resolve a dynamic group post content field for use during editing.
 *
 * @since 3.17.2
 *
 * @param string  $field      Custom field name.
 * @param array   $settings   Array of dynamic content settings.
 * @param integer $post_id    Post Id.
 * @param array   $overrides  An associative array of field_name => value to override field value.
 * @param boolean $is_content Whether dynamic content used in module's main_content field {@see et_builder_ajax_resolve_post_content()}.
 *
 * @return string
 */
function et_builder_filter_resolve_dynamic_post_content_field( $field, $settings, $post_id, $overrides = array(), $is_content = \false ) {
}
/**
 * Clean potential dynamic content from filter artifacts.
 *
 * @since 3.20.2
 *
 * @param string $value Content.
 *
 * @return string
 */
function et_builder_clean_dynamic_content( $value ) {
}
/**
 * Parse a JSON-encoded string into an ET_Builder_Value instance or null on failure.
 *
 * @since 3.20.2
 *
 * @param string $json JSON-encoded string.
 *
 * @return ET_Builder_Value|null
 */
function et_builder_parse_dynamic_content_json( $json ) {
}
/**
 * Convert a value to an ET_Builder_Value representation.
 *
 * @since 3.17.2
 *
 * @param string $content Value content.
 *
 * @return ET_Builder_Value
 */
function et_builder_parse_dynamic_content( $content ) {
}
/**
 * Serialize dynamic content.
 *
 * @since 3.20.2
 *
 * @param bool    $dynamic  Whether the value is static or dynamic.
 * @param string  $content  Value content. Represents the dynamic content type when dynamic.
 * @param mixed[] $settings Array of dynamic content settings.
 *
 * @return string
 */
function et_builder_serialize_dynamic_content( $dynamic, $content, $settings ) {
}
/**
 * Strip dynamic content.
 *
 * @since 4.0.9
 *
 * @param string $content Post Content.
 *
 * @return string
 */
function et_builder_strip_dynamic_content( $content ) {
}
/**
 * Reencode legacy dynamic content in post excerpts.
 *
 * @since 3.20.2
 *
 * @param string  $post_excerpt Post Excerpt.
 * @param integer $post_id      Post Id.
 *
 * @return string
 */
function et_builder_reencode_legacy_dynamic_content_in_excerpt( $post_excerpt, $post_id ) {
}
/**
 * Callback to reencode legacy dynamic content for preg_replace_callback.
 *
 * @since 3.20.2
 *
 * @param array $matches PCRE match.
 *
 * @return string
 */
function et_builder_reencode_legacy_dynamic_content_in_excerpt_callback( $matches ) {
}
/**
 * Resolve dynamic content in post excerpts instead of showing raw JSON.
 *
 * @since 3.17.2
 *
 * @param string  $post_excerpt Post excerpt.
 * @param integer $post_id      Post Id.
 *
 * @return string
 */
function et_builder_resolve_dynamic_content_in_excerpt( $post_excerpt, $post_id ) {
}
/**
 * Callback to resolve dynamic content for preg_replace_callback.
 *
 * @since 3.17.2
 *
 * @param array $matches PCRE match.
 *
 * @return string
 */
function et_builder_resolve_dynamic_content_in_excerpt_callback( $matches ) {
}
/**
 * Handle ET Server interaction.
 *
 * @package Builder
 */
/**
 * Save the domain token received from ET Server on successful login.
 */
function et_builder_ajax_save_domain_token() {
}
/**
 * Convert gutenberg block layout into shortcode.
 * NOTE: There is JS version for activation via Gutenberg. See: `convertBlockToShortcode()`
 *
 * @since 4.1.0
 *
 * @param string $post_content Post content / serialized block.
 *
 * @return string Shortcode layout.
 */
function et_builder_convert_block_to_shortcode( $post_content ) {
}
/**
 * Get supported WP Editor template post types.
 *
 * At this moment, the list is:
 * - wp_template
 * - wp_template_part
 *
 * @since 4.14.8
 *
 * @return array List of supported WP Editor template post types.
 */
function et_builder_get_wp_editor_template_post_types() {
}
/**
 * Whether current post type is supported WP Editor template post type or not.
 *
 * @since 4.14.8
 *
 * @param string $type Template post type.
 *
 * @return boolean Post type check status.
 */
function et_builder_is_wp_editor_template_post_type( $type ) {
}
/**
 * Decorate a page resource slug based on the current request and WP Editor.
 *
 * @since 4.14.8
 *
 * @param integer|string $post_id       Post ID.
 * @param string         $resource_slug Resource slug.
 *
 * @return string
 */
function et_builder_wp_editor_decorate_page_resource_slug( $post_id, $resource_slug ) {
}
/**
 * Get WP Editor templates on current post.
 *
 * @since 4.14.8
 *
 * @return array List of templates and template parts.
 */
function et_builder_get_wp_editor_templates() {
}
/**
 * Whether current theme is block theme or not.
 *
 * @since 4.17.4
 *
 * @return boolean Block theme status.
 */
function et_builder_is_block_theme() {
}
/**
 * Local library functions.
 *
 * @package    Divi
 * @subpackage Builder
 */
/**
 * Gets the selected taxonomies from Preset/Template modals.
 *
 * @param array $preferences Preferences set in the Save Builder Preset/Template modals.
 *
 * @return array
 */
function et_local_library_get_selected_taxonomy( $preferences ) {
}
/**
 * Gets the newly added taxonomies set in the Preset/Template modals.
 *
 * @param array $preferences Preferences set in the Save Builder Preset/Template modals.
 *
 * @return array
 */
function et_local_library_get_new_taxonomy( $preferences ) {
}
/**
 * Insert terms from comma seperated string.
 *
 * @since 4.19.0
 * @param string $terms_str Comma seperated list of new terms.
 * @param string $tax       Taxonomy name.
 *
 * @return (void|array)
 */
function et_local_library_insert_terms_from_str( $terms_str, $tax ) {
}
/**
 * Sets the taxomomy for Template & Preset.
 *
 * @param int   $post_id     Post ID.
 * @param array $preferences Preferences set in the Save Builder Preset/Template modals.
 */
function et_local_library_set_item_taxonomy( $post_id, $preferences ) {
}
/**
 * Generalized dynamic content implementation to make it usable for WooCommerce Modules.
 *
 * @package    Divi
 * @subpackage Builder
 */
/**
 * Handle ajax requests to resolve post content.
 *
 * @since 3.17.2
 *
 * @return void
 */
function et_builder_ajax_resolve_post_content() {
}
/**
 * List terms for a given post.
 *
 * @since 3.17.2
 *
 * @param array   $terms     List of terms.
 * @param boolean $link      Whether return link or label.
 * @param string  $separator Terms separators.
 *
 * @return string
 */
function et_builder_list_terms( $terms, $link = \true, $separator = ' | ' ) {
}
/**
 * Get the title for the current page be it a post, a tax archive, search etc.
 *
 * @since 4.0
 *
 * @param integer $post_id Post id.
 *
 * @return string
 */
function et_builder_get_current_title( $post_id = 0 ) {
}
/**
 * Ajax service which searches through posts.
 *
 * @package    Divi
 * @subpackage Builder
 */
/**
 * Handle ajax requests to search for posts.
 *
 * @since 3.26.7
 *
 * @return void
 */
function et_builder_ajax_search_posts() {
}
/**
 * Join the parent post for attachments queries.
 *
 * @since 3.27.3
 *
 * @param string $join The JOIN clause of the query.
 *
 * @return string
 */
function et_builder_ajax_search_posts_query_join( $join ) {
}
/**
 * Filter attachments based on the parent post status, if any.
 *
 * @since 3.27.3
 *
 * @param string $where The WHERE clause of the query.
 *
 * @return string
 */
function et_builder_ajax_search_posts_query_where( $where ) {
}
/**
 * Function collection related to window.
 *
 * @package     Divi
 * @sub-package Builder
 * @since       4.6.0
 */
/**
 * Get scroll location of all preview mode of all builder context
 * These are sorted by the time it was added to Divi (older to newer)
 *
 * @since 4.6.0
 *
 * @return array
 */
function et_builder_get_builder_scroll_locations() {
}
/**
 * Get window scroll location
 *
 * @since 4.6.0
 *
 * @return array
 */
function et_builder_get_window_scroll_locations() {
}
/**
 * Get current builder type
 *
 * @since 4.6.0
 *
 * @return string app|top
 */
function et_builder_get_current_builder_type() {
}
/**
 * Get scroll location on all breakpoints of current builder type
 *
 * @since 4.6.0
 *
 * @return array
 */
function et_builder_get_onload_scroll_locations() {
}
/**
 * Get on page load scroll location of current builder type
 *
 * @since 4.6.0
 *
 * @return string app|top
 */
function et_builder_get_onload_scroll_location() {
}
/**
 * Handles Shipping calculator Update button click.
 *
 * `wc-form-handler` handles shipping calculator update ONLY when WooCommerce shortcode is used.
 * Hence, Cart Total's shipping calculator update is handled this way.
 *
 * @since 4.14.3
 */
function et_builder_handle_shipping_calculator_update_btn_click() {
}
/**
 * Identify whether Woo v2 should replace content on Cart & Checkout pages.
 *
 * @param string $shortcode Post content. Builder converts empty string to shortcode string.
 *
 * @since 4.14.0
 *
 * @return bool
 */
function et_builder_wc_should_replace_content( $shortcode ) {
}
/**
 * Stop redirecting to Cart page when enabling builder on Checkout page.
 *
 * @since 4.14.0
 *
 * @link https://github.com/elegantthemes/Divi/issues/23873
 *
 * @param bool $flag Flag.
 *
 * @return bool
 */
function et_builder_stop_cart_redirect_while_enabling_builder( $flag ) {
}
/**
 * Message to be displayed in Checkout Payment Info module in VB mode.
 *
 * So styling the Notice becomes easier.
 *
 * @since 4.14.0
 *
 * @return string
 */
function et_builder_wc_no_available_payment_methods_message() {
}
/**
 * Output the cart shipping calculator.
 *
 * @param string $button_text Text for the shipping calculation toggle.
 */
function et_builder_woocommerce_shipping_calculator( $button_text = '' ) {
}
/**
 * Gets the Checkout modules notice to be displayed on non-checkout pages.
 *
 * @since 4.14.0
 *
 * @used-by et_fb_get_static_backend_helpers()
 *
 * @return string
 */
function et_builder_wc_get_non_checkout_page_notice() {
}
/**
 * Gets the Checkout notice to be displayed on Checkout Payment Info module.
 *
 * @since 4.14.0
 *
 * @param string $woocommerce_ship_to_destination Default `shipping`.
 *
 * @used-by et_fb_get_static_backend_helpers()
 *
 * @return string
 */
function et_builder_wc_get_checkout_notice( $woocommerce_ship_to_destination = 'shipping' ) {
}
/**
 * Stop WooCommerce from redirecting Checkout page to Cart when the cart is empty.
 *
 * Divi Builder stops redirection only for logged-in admins.
 *
 * @since 4.14.0
 */
function et_builder_wc_template_redirect() {
}
/**
 * Sets the meta to indicate that the Divi content has been modified.
 *
 * This avoids setting the default WooCommerce Modules layout more than once.
 *
 * @link https://github.com/elegantthemes/Divi/issues/16420
 *
 * @since 4.14.0
 *
 * @param int $post_id Post ID.
 */
function et_builder_wc_set_page_content_status( $post_id ) {
}
/**
 * Gets the prefilled Cart Page content built using Divi Woo Modules.
 *
 * @since 4.14.0
 *
 * @return string
 */
function et_builder_wc_get_prefilled_cart_page_content() {
}
/**
 * Gets the prefilled Checkout Page content built using Divi Woo Modules.
 *
 * @since  4.14.0
 * @return string
 */
function et_builder_wc_get_prefilled_checkout_page_content() {
}
/**
 * Sets the pre-filled Divi Woo Pages layout content.
 *
 * The following are the three types of WooCommerce pages that have pre-filled content.
 *
 * 1. WooCommerce Product page
 * 2. WooCommerce Cart page
 * 3. WooCommerce Checkout page
 *
 * @param string $maybe_shortcode_content May be shortcode content.
 * @param int    $post_id                 Post ID.
 *
 * @return string
 */
function et_builder_wc_set_prefilled_page_content( $maybe_shortcode_content, $post_id ) {
}
/**
 * Returning <img> string for default image placeholder
 *
 * @since 4.14.0 Added $mode param.
 * @since 4.0.10
 *
 * @param string $mode Default ET_BUILDER_PLACEHOLDER_LANDSCAPE_IMAGE_DATA. Either Landscape or
 *                     Portrait image mode.
 *
 * @return string
 */
function et_builder_wc_placeholder_img( $mode = 'portrait' ) {
}
/**
 * Gets the Product Content options.
 *
 * This array is used in Divi Page Settings metabox and in Divi Theme Options ⟶ Builder ⟶ Post Type integration.
 *
 * @since 3.29
 *
 * @param string $translation_context Translation Context to indicate if translation origins from Divi Theme or
 *                                    from the Builder. Optional. Default 'et_builder'.
 *
 * @return array
 */
function et_builder_wc_get_page_layouts( $translation_context = 'et_builder' ) {
}
/**
 * Adds WooCommerce Module settings to the Builder settings.
 *
 * Adding in the Builder Settings tab will ensure that the field is available in Extra Theme and
 * Divi Builder Plugin.
 *
 * @since 4.0.3 Hide Product Content layout settings Divi Builder Plugin options.
 * @since 3.29
 *
 * @param array $builder_settings_fields Builder settings fields.
 *
 * @return array
 */
function et_builder_wc_add_settings( $builder_settings_fields ) {
}
/**
 * Gets the pre-built layout for WooCommerce product pages.
 *
 * @since 3.29
 *
 * @param array $args {
 *                    Additional args.
 *
 * @type string $existing_shortcode Existing builder shortcode.
 * }
 *
 * @return string
 */
function et_builder_wc_get_prefilled_product_page_content( $args = array() ) {
}
/**
 * Gets the Product layout for a given Post ID.
 *
 * @since 3.29
 *
 * @param int $post_id Post Id.
 *
 * @return string The return value will be one of the values from
 *                {@see et_builder_wc_get_page_layouts()} when the Post ID is valid.
 *                Empty string otherwise.
 */
function et_builder_wc_get_product_layout( $post_id ) {
}
/**
 * Sets the pre-built layout for WooCommerce product pages.
 *
 * @param string $maybe_shortcode_content Post content.
 * @param int    $post_id                 Post id.
 *
 * @return string
 */
function et_builder_wc_set_initial_content( $maybe_shortcode_content, $post_id ) {
}
/**
 * Saves the WooCommerce long description metabox content.
 *
 * The content is stored as post meta w/ the key `_et_pb_old_content`.
 *
 * @param int     $post_id Post id.
 * @param WP_Post $post    Post Object.
 * @param array   $request The $_POST Request variables.
 *
 * @since 3.29
 */
function et_builder_wc_long_description_metabox_save( $post_id, $post, $request ) {
}
/**
 * Output Callback for Product long description metabox.
 *
 * @since 3.29
 *
 * @param WP_Post $post Post.
 */
function et_builder_wc_long_description_metabox_render( $post ) {
}
/**
 * Adds the Long description metabox to Product post type.
 *
 * @since 3.29
 *
 * @param WP_Post $post WP Post.
 */
function et_builder_wc_long_description_metabox_register( $post ) {
}
/**
 * Determine if WooCommerce's $product global need to be overwritten or not.
 * IMPORTANT: make sure to reset it later
 *
 * @since 3.29
 *
 * @param string $product_id Post id.
 *
 * @return bool
 */
function et_builder_wc_need_overwrite_global( $product_id = 'current' ) {
}
/**
 * Gets the Product ID.
 *
 * @since 4.14.0
 *
 * @param array $args Module props.
 *
 * @return int $product_id
 */
function et_builder_wc_get_product_id( $args ) {
}
/**
 * Helper to render module template for module's front end and computed callback output
 *
 * @since 3.29
 *
 * @param string $function_name Rendering method name.
 * @param array  $args          Method arguments.
 * @param array  $overwrite     List of global variables to overwrites e.g $product, $post and $wp_query.
 *
 * @return string
 */
function et_builder_wc_render_module_template( $function_name, $args = array(), $overwrite = array( 'product' ) ) {
}
/**
 * Renders the content.
 *
 * Rendering the content will enable Divi Builder to take over the entire
 * post content area.
 *
 * @since 3.29
 */
function et_builder_wc_product_render_layout() {
}
/**
 * Force WooCommerce to load default template over theme's custom template when builder's
 * et_builder_from_scratch is used to prevent unexpected custom layout which makes builder
 * experience inconsistent
 *
 * @since 3.29
 *
 * @param string $template Path to template file.
 * @param string $slug     Template slug.
 * @param string $name     Template name.
 *
 * @return string
 */
function et_builder_wc_override_template_part( $template, $slug, $name ) {
}
/**
 * Disable all default WooCommerce single layout hooks.
 *
 * @since 4.0.10
 */
function et_builder_wc_disable_default_layout() {
}
/**
 * Relocate all registered callbacks from `woocommerce_single_product_summary` hook to
 * any suitable Woo modules.
 *
 * @since 4.14.5
 * @since 4.15.0 Move relocation process into outside callbacks loop to avoid duplication.
 */
function et_builder_wc_relocate_single_product_summary() {
}
/**
 * Prepend and/or append callback output to the suitable module output on FE.
 *
 * @since 4.14.5
 *
 * @param string             $module_output   Module output.
 * @param string             $module_slug     Module slug.
 * @param ET_Builder_Element $module_instance Module instance.
 *
 * @return string Processed module output.
 */
function et_builder_wc_single_product_summary_module_output( $module_output, $module_slug, $module_instance ) {
}
/**
 * Set callback output as before and/or after components on builder.
 *
 * @since 4.14.5
 *
 * @param array  $module_components Default module before & after components.
 * @param string $module_slug       Module slug.
 * @param array  $module_data       Module data.
 *
 * @return array Processed module before & after components.
 */
function et_builder_wc_single_product_summary_before_after_components( $module_components, $module_slug, $module_data ) {
}
/**
 * Render single product summary before Woo module output.
 *
 * @since 4.14.5
 *
 * @param string $module_slug Module slug.
 *
 * @return string Rendered output.
 */
function et_builder_wc_single_product_summary_before_module( $module_slug ) {
}
/**
 * Render single product summary after Woo module output.
 *
 * @since 4.14.5
 *
 * @param string $module_slug Module slug.
 *
 * @return string Rendered output.
 */
function et_builder_wc_single_product_summary_after_module( $module_slug ) {
}
/**
 * Overrides the default WooCommerce layout.
 *
 * @see woocommerce/includes/wc-template-functions.php
 *
 * @since 3.29
 */
function et_builder_wc_override_default_layout() {
}
/**
 * Skips setting default content on Product post type during Builder activation.
 *
 * Otherwise, the description would be shown in both Product Tabs and at the end of the
 * default WooCommerce layout set at
 *
 * @see et_builder_wc_get_prefilled_product_page_content()
 *
 * @since 3.29
 *
 * @param bool    $flag Whether to skips the content activation.
 * @param WP_Post $post Post.
 *
 * @return bool
 */
function et_builder_wc_skip_initial_content( $flag, $post ) {
}
/**
 * Determine whether given content has WooCommerce module inside it or not
 *
 * @since 4.0 Added ET_Builder_Element class exists check.
 * @since 3.29
 *
 * @param string $content Content.
 *
 * @return bool
 */
function et_builder_has_woocommerce_module( $content = '' ) {
}
/**
 * Check if current global $post uses builder / layout block, not `product` CPT, and contains
 * WooCommerce module inside it. This check is needed because WooCommerce by default only adds
 * scripts and style to `product` CPT while WooCommerce Modules can be used at any CPT
 *
 * @since 3.29
 * @since 4.1.0 check if layout block is used instead of builder
 *
 * @since bool
 */
function et_builder_wc_is_non_product_post_type() {
}
/**
 * Load WooCommerce related scripts. This function basically redo what
 * `WC_Frontend_Scripts::load_scripts()` does without the `product` CPT limitation.
 *
 * Once more WooCommerce Modules are added (checkout, account, etc), revisit this method and
 * compare it against `WC_Frontend_Scripts::load_scripts()`. Some of the script queues are
 * removed here because there is currently no WooCommerce module equivalent of them.
 *
 * @since 3.29
 * @since 4.3.3 Loads WC scripts on Shop, Product Category & Product Tags archives.
 * @since 4.9.11 Avoid invalid argument supplied for foreach() warning.
 */
function et_builder_wc_load_scripts() {
}
/**
 * Add WooCommerce body class name on non `product` CPT builder page
 *
 * @param array $classes CSS class names.
 *
 * @return array
 * @since  3.29
 */
function et_builder_wc_add_body_class( $classes ) {
}
/**
 * Add product class name on inner content wrapper page on non `product` CPT builder page with woocommerce modules
 * And on Product posts
 *
 * @param array $classes Product class names.
 *
 * @return array
 * @since  3.29
 */
function et_builder_wc_add_inner_content_class( $classes ) {
}
/**
 * Add WooCommerce class names on Divi Shop Page (not WooCommerce Shop).
 *
 * @since 4.0.7
 *
 * @param array $classes Array of Classes.
 *
 * @return array
 */
function et_builder_wc_add_outer_content_class( $classes ) {
}
/**
 * Sets the Product page layout post meta on two occurrences.
 *
 * They are 1) On WP Admin Publish/Update post 2) On VB Save.
 *
 * @since 4.14.0 Remove ET_BUILDER_WC_PRODUCT_PAGE_LAYOUT_META_KEY meta key on non-product post types.
 *           Also move `since` section above `param` section.
 * @since 3.29
 *
 * @param int $post_id Post ID.
 */
function et_builder_set_product_page_layout_meta( $post_id ) {
}
/**
 * Sets the Product content status as modified during VB save.
 *
 * This avoids setting the default WooCommerce Modules layout more than once.
 *
 * @link https://github.com/elegantthemes/Divi/issues/16420
 *
 * @param int $post_id Post ID.
 */
function et_builder_set_product_content_status( $post_id ) {
}
/**
 * Gets Woocommerce Tabs for the given Product ID.
 *
 * @since 4.4.2
 */
function et_builder_get_woocommerce_tabs() {
}
/**
 * Returns alternative hook to make Woo Extra Product Options display fields in FE when TB is
 * enabled.
 *
 * - The Woo Extra Product Options addon does not display the extra fields on the FE.
 * - This is because the original hook i.e. `woocommerce_before_single_product` in the plugin
 * is not triggered when TB is enabled.
 * - Hence return a suitable hook that is fired for all types of Products i.e. Simple, Variable,
 * etc.
 *
 * @param string $hook Hook name.
 *
 * @return string WooCommerce Hook that is being fired on TB enabled Product pages.
 * @see    WEPOF_Product_Options_Frontend::define_public_hooks()
 *
 * @since 4.0.9
 */
function et_builder_trigger_extra_product_options( $hook ) {
}
/**
 * Strip Builder shortcodes to avoid nested parsing.
 *
 * @see https://github.com/elegantthemes/Divi/issues/18682
 *
 * @param string $content Post content.
 *
 * @since 4.3.3
 *
 * @return string
 */
function et_builder_avoid_nested_shortcode_parsing( $content ) {
}
/**
 * Parses Product description to
 *
 * - converts any [embed][/embed] shortcode to its respective HTML.
 * - strips `et_` shortcodes to avoid nested rendering in Woo Tabs module.
 * - adds <p> tag to keep the paragraph sanity.
 * - runs other shortcodes if any using do_shortcode.
 *
 * @since 4.4.1
 *
 * @param string $description Product description i.e. Post content.
 *
 * @return string
 */
function et_builder_wc_parse_description( $description ) {
}
/**
 * Deletes ET_BUILDER_WC_PRODUCT_PAGE_CONTENT_STATUS_META_KEY when Builder is OFF.
 *
 * The deletion allows switching between Divi Builder and the GB builder smoothly.
 *
 * @link https://github.com/elegantthemes/Divi/issues/22477
 *
 * @since 4.14.0
 *
 * @param WP_Post $post Post Object.
 */
function et_builder_wc_delete_post_meta( $post ) {
}
/**
 * Adds the Preview class to the wrapper.
 *
 * @param  string $maybe_class_string Classnames string.
 * @return string
 */
function et_builder_wc_add_preview_wrap_class( $maybe_class_string ) {
}
/**
 * Entry point for the woocommerce-modules.php file.
 *
 * @since 3.29
 */
function et_builder_wc_init() {
}
/**
 * Retrieve a commonly used translation.
 *
 * @since 4.4.9
 *
 * @param string  $key   Translation key.
 * @param boolean $reset Reset cache.
 *
 * @return string
 */
function et_builder_i18n( $key, $reset = \false ) {
}
/**
 * Resets commonly used translations cache.
 *
 * @since 4.4.9
 *
 * @return void
 */
function et_builder_i18n_reset_cache() {
}
/**
 * Escape translation with optional value and caches the result.
 *
 * @since 4.4.9
 *
 * @param string $text
 * @param string $value
 *
 * @return string.
 */
function et_esc_html_once( $text, $value = '' ) {
}
/**
 * Checks to see if Critical CSS is enabled.
 *
 * @since 4.10.0
 *
 * @return string.
 */
function et_builder_is_critical_enabled() {
}
/**
 * Get product script handle for the main script bundle.
 *
 * @since 4.10.0
 */
function et_get_combined_script_handle() {
}
/**
 * Localizes the main front end bundle and adds variables
 * for et-builder-modules-global-functions-script.
 *
 * @since 4.10.0
 */
function et_builder_load_global_functions_script() {
}
function et_builder_load_modules_styles() {
}
function et_builder_get_modules_js_data() {
}
// Force Backbone templates cache to be cleared on language change to make sure the settings modal is translated
// defaults for arguments are provided because their number is different for both the actions
function et_pb_force_clear_template_cache( $meta_id = \false, $object_id = \false, $meta_key = \false, $_meta_value = \false ) {
}
function et_builder_handle_animation_data( $element_data = \false ) {
}
function et_builder_handle_link_options_data( $element_data = \false ) {
}
/**
 * Get list of combined scripts and their possible alternative names.
 *
 * @return array
 */
function et_builder_get_minified_scripts() {
}
/**
 * Get list of concatenated & minified styles (sans style.css)
 *
 * @return array
 */
function et_builder_get_minified_styles() {
}
/**
 * Re-enqueue listed concatenated & minified scripts (and their possible alternative name) used empty string
 * to keep its dependency in order but avoiding WordPress to print the script to avoid the same file printed twice
 * Case in point: salvattore that is being called via builder module's render() method
 *
 * @return void
 */
function et_builder_dequeue_minified_scripts() {
}
// <footer>
function et_builder_dequeue_minifieds_styles() {
}
// <head>
/**
 * Determine whether current theme supports Waypoints or not
 *
 * @return bool
 */
function et_is_ignore_waypoints() {
}
/**
 * Determine whether current page has enqueued theme's style.css or not
 * This is mainly used on preview screen to decide to enqueue theme's style nor not
 *
 * @return bool
 */
function et_builder_has_theme_style_enqueued() {
}
/**
 * Added specific body classes for builder related situation
 * This enables theme to adjust its case independently
 *
 * @return array
 */
function et_builder_body_classes( $classes ) {
}
/**
 * Add Main Elements.
 *
 * @since  4.10.0
 * @access public
 * @return void
 */
function et_builder_add_main_elements() {
}
/**
 * Initialize shortcode manager.
 *
 * @since  4.10.0
 * @access public
 * @return void
 */
function et_builder_init_shortcode_manager() {
}
function et_builder_load_framework() {
}
/**
 * Checking whether current page is BFB page based on its query string only; Suitable for basic
 * early check BEFORE $wp_query global is generated in case builder need to alter query
 * configuration. This is needed because BFB layout is basically loaded in front-end
 *
 * @since 3.19.9
 *
 * @return bool
 */
function et_bfb_maybe_bfb_url() {
}
/**
 * Get verified query string value for et_bfb_make_post_type_queryable()
 *
 * @since 3.19.9
 *
 * @param string $param_name
 *
 * @return string|number|bool
 */
function et_bfb_get_make_queryable_param( $param_name ) {
}
/**
 * Set builder's registered post type's publicly_queryable property to true (if needed) so publicly
 * hidden post type can render BFB page on backend edit screen
 *
 * @see WP->parse_request() on how request is parsed
 *
 * @since 3.19.9
 *
 * @return void
 */
function et_bfb_make_post_type_queryable() {
}
/**
 * Modify rewrite rule's redirect of current BFB request if its post type's `publicly_queryable`
 * is set to false and its `query_var` is NOT set to `false`. When this situation happens, current
 * BFB page cannot be rendered because rewrite rule's redirect value doesn't have `post_type`
 * param which makes page query gets incorrect page value
 *
 * @since 3.19.9
 *
 * @return void
 */
function et_bfb_make_cpt_rewrite_rule_queryable( $value ) {
}
function et_bfb_wpe_heartbeat_allowed_pages( $pages ) {
}
function et_builder_load_frontend_builder() {
}
function et_pb_get_google_api_key() {
}
function et_pb_enqueue_google_maps_script() {
}
/**
 * Add pseudo-action via the_content to hook filter/action at the end of main content
 *
 * @param  string  content string
 * @return string content string
 */
function et_pb_content_main_query( $content ) {
}
/**
 * Added special class name for comment items that are placed outside builder
 *
 * See {@see 'comment_class'}.
 *
 * @param array       $classes    classname
 * @param string      $comment    comma separated list of additional classes
 * @param int         $comment_ID comment ID
 * @param WP_Comment  $comment    comment object
 * @param int|WP_Post $post_id    post ID or WP_Post object
 *
 * @return array modified classname
 */
function et_pb_add_non_builder_comment_class( $classes, $class, $comment_ID, $comment, $post_id ) {
}
/**
 * Enqueue Open Sans for the builder UI.
 *
 * @since 4.0
 *
 * @return void
 */
function et_builder_enqueue_open_sans() {
}
// Register assets that need to be fired at head
function et_builder_enqueue_assets_head() {
}
// TODO, make this fire late enough, so that the_content has fired and ET_Builder_Element::get_computed_vars() is ready
// currently its being called in temporary_app_boot() in view.php
function et_builder_enqueue_assets_main() {
}
function et_fb_enqueue_google_maps_dependency( $dependencies ) {
}
function et_fb_load_portability() {
}
function et_fb_get_dynamic_asset( $prefix, $post_type = \false, $update = \false ) {
}
function et_fb_backend_helpers_boot( $helpers ) {
}
function et_fb_app_only_bundle_deps( $deps = \null ) {
}
function et_fb_enqueue_assets() {
}
function et_fb_app_src( $tag, $handle, $src ) {
}
/**
 * Disable google maps api script. Google maps api script dynamically injects scripts in the head
 * which will be blocked by Preboot.js while DOM move resources from top window to app window.
 * The google maps script will be reenable once the resources has been moved into iframe.
 *
 * @param string $tag    The `<script>` tag for the enqueued script.
 * @param string $handle The script's registered handle.
 * @param string $src    The script's source URL.
 */
function et_fb_disable_google_maps_script( $tag, $handle, $src ) {
}
/**
 * Disable admin bar styling for HTML in VB. BFB doesn't loaded admin bar and  VB loads admin bar
 * on top window which makes built-in admin bar styling irrelevant because admin bar is affected by
 * top window width instead of app window width (while app window width changes based on preview mode)
 *
 * @see _admin_bar_bump_cb()
 */
function et_fb_disable_admin_bar_style() {
}
function et_fb_output_wp_auth_check_html() {
}
function et_fb_set_editor_available_cookie() {
}
function et_fb_shortcode_tags() {
}
/**
 * Prepare Library Categories or Tags List.
 *
 * @param string $taxonomy Name of the taxonomy.
 *
 * @return array Clean Categories/Tags array.
 **/
function et_fb_prepare_library_terms( $taxonomy = 'layout_category' ) {
}
function et_fb_get_layout_type( $post_id ) {
}
function et_fb_get_layout_term_slug( $post_id, $term_name ) {
}
function et_fb_comments_template() {
}
function et_fb_modify_comments_request( $params ) {
}
function et_fb_comments_submit_button( $submit_button ) {
}
/**
 * Generate custom comments number for Comments Module preview in Theme Builder.
 *
 * @return string
 */
function et_builder_set_comments_number() {
}
/**
 * Generate Dummy comment for Comments Module preview in Theme Builder.
 *
 * @return WP_Comment[]
 */
function et_builder_add_fake_comments() {
}
/**
 * Append all default comment fields such as Author, Email, Website to Comment field for Comments Module preview in Theme Builder.
 *
 * @see comment_form() in /wp-includes/comment-template.php
 *
 * @return string
 */
function et_builder_set_comment_fields( $field ) {
}
// comments template cannot be generated via AJAX so prepare it beforehand
function et_fb_get_comments_markup() {
}
// List of shortcode wrappers that requires adjustment in VB. Plugins which uses fullscreen dimension
// tend to apply negative positioning which looks inappropriate on VB's shortcode mechanism
function et_fb_known_shortcode_wrappers() {
}
function et_builder_autosave_interval() {
}
/**
 * Callback function for heartbeat settings.
 *
 * @param array $settings Hearbeat settings.
 *
 * @return array Heartbeat settings.
 **/
function et_fb_heartbeat_settings( $settings ) {
}
// This function is used to add dynamic helpers whose content changes frequently
// because depending on the current post or options that can be edited by the user.
function et_fb_get_dynamic_backend_helpers() {
}
/**
 * This function is used to add static helpers whose content changes rarely.
 * eg: google fonts, module defaults and so on.
 *
 * @param  string $post_type Post type.
 * @return array
 */
function et_fb_get_static_backend_helpers( $post_type ) {
}
// Used to update the content of the cached helper js file.
function et_fb_get_asset_helpers( $content, $post_type ) {
}
function et_fb_backend_helpers() {
}
/**
 * Disabled Autoptimize plugin on Front-end Builder page.
 *
 * @return void
 **/
function et_fb_fix_plugin_conflicts() {
}
/**
 * Retrieves all WP taxonomies for Visual Builder
 *
 * @return array
 */
function et_fb_get_taxonomy_terms() {
}
/**
 * Retrieves all WP taxonomies labels for Visual Builder
 *
 * @return array
 */
function et_fb_get_taxonomy_labels() {
}
/**
 * Retrieves media buttons html for rich text usage.
 *
 * @since 3.18
 *
 * @return string
 */
function et_builder_get_media_buttons() {
}
/**
 * Redirect admin post to FB builder if set.
 *
 * @since 3.0.0
 *
 * @param  string $location Parameter passed by the 'redirect_post_location' filter.
 * @return string $_POST['et-fb-builder-redirect'] if set, $location otherwise.
 */
function et_fb_redirect_post_location( $location ) {
}
/**
 * @internal NOTE: Don't use this from outside builder code! {@see et_core_is_fb_enabled()}.
 *
 * @deprecated Use et_core_is_fb_enabled() instead.
 *
 * @return bool
 */
function et_fb_enabled() {
}
function et_fb_is_user_can_edit() {
}
function et_fb_remove_rtl_stylesheet( $uri ) {
}
function et_fb_remove_html_rtl_dir( $attributes ) {
}
/**
 * Load portability used in the Theme Builder admin page.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_load_portability() {
}
/**
 * Register the Theme Builder admin page.
 *
 * @since 4.0
 *
 * @param string $parent
 *
 * @return void
 */
function et_theme_builder_add_admin_page( $parent ) {
}
/**
 * Enqueue Theme Builder assets.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_enqueue_scripts() {
}
/**
 * Render the Theme Builder admin page.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_admin_page() {
}
/**
 * Create a new layout.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_api_create_layout() {
}
/**
 * Duplicate a layout.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_api_duplicate_layout() {
}
/**
 * Get layout url.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_api_get_layout_url() {
}
/**
 * Save the theme builder post.
 *
 * The templates upload will be chunked into several POST requests with size 30 templates per request.
 * Hence we need to store the uploaded templates data into temporary file in cache directory before
 * making changes into database.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_api_save() {
}
/**
 * Drop the theme builder post autosave.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_api_drop_autosave() {
}
function et_theme_builder_api_get_template_settings() {
}
function et_theme_builder_api_reset() {
}
function et_theme_builder_api_export_theme_builder() {
}
function et_theme_builder_api_export_theme_builder_step() {
}
function et_theme_builder_api_export_theme_builder_download() {
}
/**
 * Save a layout in a temporary file to prepare it for import.
 *
 * @since 4.1.0
 *
 * @param ET_Core_Portability $portability Portability object.
 * @param string              $template_id Template ID.
 * @param integer             $layout_id   Layout ID.
 * @param array               $layout      Layout.
 * @param string              $temp_id     Temporary ID.
 * @param string              $temp_group  Temporary Group.
 */
function et_theme_builder_api_import_theme_builder_save_layout( $portability, $template_id, $layout_id, $layout, $temp_id, $temp_group ) {
}
/**
 * Load a previously saved layout from a temporary file.
 *
 * @since 4.1.0
 *
 * @param ET_Core_Portability $portability Portability Object.
 * @param string              $temp_id     Temporary ID.
 * @param string              $temp_group  Temporary Group.
 *
 * @return array
 */
function et_theme_builder_api_import_theme_builder_load_layout( $portability, $temp_id, $temp_group ) {
}
function et_theme_builder_api_import_theme_builder() {
}
function et_theme_builder_api_import_theme_builder_step() {
}
/**
 * Ajax action: save template into the local library.
 */
function et_theme_builder_api_save_template_to_library() {
}
/**
 * Ajax action: save preset into the local library.
 */
function et_theme_builder_api_save_preset_to_library() {
}
/**
 * Ajax action: Retrieve terms for the given taxonomy.
 */
function et_theme_builder_api_get_terms() {
}
/**
 * Ajax action: Use local library item.
 */
function et_theme_builder_api_use_library_item() {
}
/**
 * Ajax action: Trash interim library editor posts.
 */
function et_theme_builder_trash_theme_builder() {
}
/**
 * AJAX action: Gets items data for the theme builder's library UI.
 */
function et_theme_builder_library_get_items_data() {
}
/**
 * AJAX action: Add/Remove/Rename Library terms for taxonomies.
 */
function et_theme_builder_library_update_terms() {
}
/**
 * AJAX action: Update the theme builder library item.
 */
function et_theme_builder_library_update_item() {
}
/**
 * AJAX action: Save the theme builder library temporary item.
 */
function et_theme_builder_library_save_temp_layout() {
}
/**
 * AJAX action: Remove the theme builder library temporary item.
 */
function et_theme_builder_library_remove_temp_layout() {
}
/**
 * AJAX action: Gets an item by ID.
 */
function et_theme_builder_library_get_item() {
}
/**
 * AJAX action: Get the theme builder library preset items.
 */
function et_theme_builder_library_get_set_items() {
}
/**
 * Ajax action: Get default template id of the preset.
 */
function et_theme_builder_get_preset_default_template_id() {
}
/**
 * Ajax action: Remove the Library item after it is moved to the Cloud.
 */
function et_theme_builder_library_toggle_cloud_status() {
}
/**
 * Ajax action: Remove temp layouts, templates theme builder.
 */
function et_theme_builder_library_clear_temp_data() {
}
/**
 * AJAX action: Gets Cloud access token from DB and send it to client.
 */
function et_theme_builder_library_get_cloud_token() {
}
/**
 * Resolve placeholder content for built-in dynamic content fields for Theme Builder layouts.
 *
 * @since 4.0
 *
 * @param string  $content   Content.
 * @param string  $name      Name.
 * @param array   $settings  Settings.
 * @param integer $post_id   Post ID.
 * @param string  $context   Context.
 * @param array   $overrides Overrides.
 *
 * @return string
 */
function et_theme_builder_filter_resolve_default_dynamic_content( $content, $name, $settings, $post_id, $context, $overrides ) {
}
/**
 * Save (template and preset) to the local library functionality.
 *
 * @package Builder.
 */
/**
 * Gets the Library Item name.
 *
 * @param array  $preferences Preferences set in the Save Builder Preset/Template modals.
 * @param string $item_type   Preset / Template item type.
 *
 * @return string
 */
function et_theme_builder_local_library_get_item_name( $preferences, $item_type ) {
}
/**
 * Gets the layouts(shortcodes from header/body/footer area) information.
 *
 * @param array $template Template information from Save Builder Preset/Template modals.
 *
 * @return array
 */
function et_theme_builder_local_library_get_layouts( $template ) {
}
/**
 * Save a Theme Builder template to the local library.
 *
 * @since 4.18.0
 * @param array $template    Template.
 * @param array $preferences Preferences for the save template.
 *
 * @return (integer|false) Return false on failure.
 */
function et_theme_builder_save_template_to_library( $template, $preferences = array() ) {
}
/**
 * Save a Theme Builder preset to the local library.
 *
 * @since 4.18.0
 * @param array $templates   List of templates.
 * @param array $preferences Preset preferences.
 *
 * @return (integer|false) Returns Post ID on success and FALSE on failure.
 */
function et_theme_builder_save_preset_to_library( $templates, $preferences ) {
}
/**
 * Add template to the saved preset.
 *
 * @param int   $preset_id         The preset id.
 * @param array $template_post_ids List of the template post ids.
 *
 * @since 4.18.0
 */
function et_theme_builder_add_template_to_preset( $preset_id, $template_post_ids ) {
}
/**
 * Retrieves an array of the terms in a given taxonomy in following format:
 *
 *   $terms = array(
 *       '1' => array(
 *           'id'    => 1,
 *           'name'  => 'Uncategorized',
 *           'slug'  => 'uncategorized',
 *           'count' => 10,
 *       ),
 *   );
 *
 * @param string $tax_name Taxonomy name.
 */
function et_theme_builder_get_terms( $tax_name ) {
}
/**
 * Retrieves the library item type attached with library item.
 *
 * @since 4.18.0
 *
 * @param  int|WP_Post $item Library item post ID or object.
 * @return string|WP_Error The library item type. WP_Error on failure.
 */
function et_theme_builder_get_library_item_type( $item ) {
}
/**
 * Retrieves library item post given a library post ID or post object.
 *
 * @since 4.18.0
 *
 * @param  int|WP_Post $item Library item's post ID or WP_Post object.
 * @return WP_Post|WP_Error The library item post object. WP_Error on failure.
 */
function et_theme_builder_get_library_item_post( $item ) {
}
/**
 * Create interim theme builder post for the local library editor.
 *
 * @since 4.18.0
 *
 * @return int|bool The post ID on success. The value false on failure.
 */
function et_theme_builder_insert_library_theme_builder() {
}
// phpcs:disable Squiz.Commenting.FunctionComment.ParamCommentFullStop -- Respecting punctuation.
/**
 * Create a theme builder layouts from the template saved in the local library.
 *
 * @since 4.18.0
 *
 * @param WP_Post $template_post  The template post.
 * @param array   $global_layouts Optional. Array containing the necessary params.
 *                                $params = [
 *                                'header' => (int|string) Header Layout ID. `use_global` string when TB global layout (relink option) is to be used.
 *                                'body'   => (int|string) Body Layout ID. `use_global` string when TB global layout (relink option) is to be used.
 *                                'footer' => (int|string) Footer Layout ID. `use_global` string when TB global layout (relink option) is to be used.
 *                                ]
 *
 * @return array|WP_Error An array of the created layout post ids. WP_Error on failure.
 */
function et_theme_builder_create_layouts_from_library_template( $template_post, $global_layouts = array() ) {
}
// phpcs:enable
/**
 * Create template from the library item post.
 *
 * @since 4.18.0
 *
 * @param  WP_Post $item_post      The library item post object.
 * @param  array   $global_layouts Array of global layouts.
 * @return int|bool The template id on success. false on failure.
 */
function et_theme_builder_create_template_from_library_template( $item_post, $global_layouts = array() ) {
}
/**
 * Retrive template settings.
 *
 * @since 4.18.0
 *
 * @param int  $item_id   The library item post ID.
 * @param bool $formatted Whether to remove "_et" prefix from setting keys.
 *
 * @return array An array of template settings.
 */
function et_theme_builder_get_template_settings( $item_id, $formatted ) {
}
/**
 * Intalize the library item editor.
 */
function et_theme_builder_init_library_item_editor() {
}
/**
 * Return custom style from the passed layout meta.
 *
 * @since 4.18.0
 *
 * @param  array  $layout_meta All layout meta saved in the local library.
 * @param  string $layout_type The layout type i.e body, header, footer.
 * @return string Page custom style.
 */
function et_theme_builder_get_preview_custom_css( $layout_meta, $layout_type ) {
}
/**
 * Render the saved template.
 *
 * @since 4.18.0
 *
 * @param int $item_id The saved library item id.
 * @retun void
 */
function et_theme_builder_render_library_template_preview( $item_id ) {
}
/**
 * Check whether current page is library template preview page.
 *
 * @return bool
 */
function is_et_theme_builder_template_preview() {
}
/**
 * Get updated global layouts by incoming layout duplicate decision.
 *
 * @param  string $incoming_layout_duplicate_decision Layout duplicate decision opted by User.
 * @param  array  $global_layouts                     Global layouts.
 * @return array
 */
function et_theme_builder_get_global_layouts_by_incoming_layout_duplicate_decision( $incoming_layout_duplicate_decision, $global_layouts ) {
}
/**
 * Retrieve the item id from query parameters.
 *
 * @since 4.18.0
 *
 * @return int The template id or preset id.
 */
function et_theme_builder_get_item_id() {
}
/**
 * Update library items.
 *
 * @since 4.18.0
 *
 * @param int   $item_id   The item id.
 * @param array $templates List of template ids.
 */
function et_theme_builder_update_library_item( $item_id, $templates ) {
}
/**
 * Determines if the library item editor is open.
 *
 * @return bool
 */
function et_theme_builder_library_is_item_editor() {
}
/**
 * Filters an object id for use in template settings validation functions.
 *
 * @since 4.2
 *
 * @param integer $id      Object ID.
 * @param string  $type    Type.
 * @param string  $subtype Subtype.
 *
 * @return integer
 */
function et_theme_builder_template_setting_filter_validation_object_id( $id, $type, $subtype ) {
}
/**
 * Validate homepage.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_homepage( $type, $subtype, $id, $setting ) {
}
/**
 * Validate singular:post_type:<post_type>:all.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_singular_post_type_all( $type, $subtype, $id, $setting ) {
}
/**
 * Validate archive:post_type:<post_type>.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_archive_post_type( $type, $subtype, $id, $setting ) {
}
/**
 * Validate singular:post_type:<post_type>:id:<id>.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_singular_post_type_id( $type, $subtype, $id, $setting ) {
}
/**
 * Validate singular:post_type:<post_type>:children:id:<id>.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_singular_post_type_children_id( $type, $subtype, $id, $setting ) {
}
/**
 * Validate singular:taxonomy:<taxonomy>:term:id:<id>.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_singular_taxonomy_term_id( $type, $subtype, $id, $setting ) {
}
/**
 * Validate archive:all.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_archive_all( $type, $subtype, $id, $setting ) {
}
/**
 * Validate archive:taxonomy:<taxonomy>:all.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_archive_taxonomy_all( $type, $subtype, $id, $setting ) {
}
/**
 * Validate archive:taxonomy:<taxonomy>:term:id:<id>.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_archive_taxonomy_term_id( $type, $subtype, $id, $setting ) {
}
/**
 * Validate archive:user:all.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_archive_user_all( $type, $subtype, $id, $setting ) {
}
/**
 * Validate archive:user:id:<id>.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_archive_user_id( $type, $subtype, $id, $setting ) {
}
/**
 * Validate archive:user:role:<role>.
 *
 * @since 4.0.10
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_archive_user_role( $type, $subtype, $id, $setting ) {
}
/**
 * Validate archive:date:all.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_archive_date_all( $type, $subtype, $id, $setting ) {
}
/**
 * Validate search.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_search( $type, $subtype, $id, $setting ) {
}
/**
 * Validate 404.
 *
 * @since 4.0
 *
 * @param string   $type    Type.
 * @param string   $subtype Subtype.
 * @param integer  $id      ID.
 * @param string[] $setting Setting.
 *
 * @return bool
 */
function et_theme_builder_template_setting_validate_404( $type, $subtype, $id, $setting ) {
}
/**
 * Register all relevant Theme Builder entities such as post types.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_register_entities() {
}
/**
 * Get array of post types that can be layouts within templates.
 *
 * @since 4.0
 *
 * @return string[]
 */
function et_theme_builder_get_layout_post_types() {
}
/**
 * Convert 'header', 'body', 'footer' to the appropriate layout post type name.
 *
 * @since 4.0
 *
 * @param string $layout_type
 *
 * @return string
 */
function et_theme_builder_get_valid_layout_post_type( $layout_type ) {
}
/**
 * Get whether post type is a Theme Builder layout type.
 *
 * @since 4.0
 *
 * @param string $post_type
 *
 * @return boolean
 */
function et_theme_builder_is_layout_post_type( $post_type ) {
}
/**
 * Get list of post content module slugs.
 *
 * @since 4.0
 *
 * @return string[]
 */
function et_theme_builder_get_post_content_modules() {
}
/**
 * Filter post types with builder support by default.
 *
 * @since 4.0
 *
 * @param $post_types
 *
 * @return array
 */
function et_theme_builder_filter_builder_default_post_types( $post_types ) {
}
/**
 * Filter post types which should be blocklisted from appearing as options when enabling/disabling the builder.
 *
 * @param $post_types
 *
 * @return array
 */
function et_theme_builder_filter_builder_post_type_options_blocklist( $post_types ) {
}
/**
 * Filter builder status for template area posts.
 *
 * @since 4.0
 *
 * @param $enabled
 * @param $post_id
 *
 * @return bool
 */
function et_theme_builder_filter_enable_builder_for_post_types( $enabled, $post_id ) {
}
/**
 * Get the theme builder post.
 *
 * @since 4.0
 *
 * @param boolean $live   Get the live version or the draft one.
 * @param boolean $create Create the post if it does not exist.
 *
 * @return integer
 */
function et_theme_builder_get_theme_builder_post_id( $live, $create = \true ) {
}
/**
 * Get the theme builder post's template IDs.
 *
 * @since 4.0
 *
 * @param boolean $live Get the live version or the draft one.
 *
 * @return integer[]
 */
function et_theme_builder_get_theme_builder_template_ids( $live, $theme_builder_id = 0 ) {
}
/**
 * Get the theme builder post's templates.
 *
 * @since 4.0
 *
 * @param boolean $live Get the live version or the draft one.
 *
 * @return array
 */
function et_theme_builder_get_theme_builder_templates( $live, $theme_builder_id = 0 ) {
}
/**
 * Get a template.
 * Returns an empty array if the template is not found.
 *
 * @since 4.0
 *
 * @param integer $template_id
 *
 * @return array
 */
function et_theme_builder_get_template( $template_id ) {
}
/**
 * Trash the theme builder draft and any unused theme builder templates and layouts.
 *
 * @since 4.0
 *
 * @return void
 */
function et_theme_builder_trash_draft_and_unused_posts() {
}
/**
 * Get the template settings options for a given post type.
 *
 * @since 4.0
 *
 * @param string $post_type_name
 *
 * @return array
 */
function et_theme_builder_get_template_settings_options_for_post_type( $post_type_name ) {
}
/**
 * Get the template settings options for all archive pages.
 *
 * @since 4.0
 *
 * @return array
 */
function et_theme_builder_get_template_settings_options_for_archive_pages() {
}
/**
 * Get array of template setting options.
 * Settings that have children should have a trailing ET_THEME_BUILDER_SETTING_SEPARATOR in their id.
 * Settings that have children should have their id be unique even without the trailing ET_THEME_BUILDER_SETTING_SEPARATOR.
 *
 * @since 4.0
 *
 * @return array
 */
function et_theme_builder_get_template_settings_options() {
}
/**
 * Get flat array of template setting options from the current live and draft theme builder posts.
 *
 * @since 4.0
 *
 * @return array[]
 */
function et_theme_builder_get_template_settings_options_for_preloading( $tb_id ) {
}
/**
 * Sanitize an array of use_on/exclude_from conditions stripping out invalid ones.
 *
 * @since 4.0
 *
 * @param string[] $setting_ids
 *
 * @return string[]
 */
function et_theme_builder_load_template_setting_options( $setting_ids ) {
}
/**
 * Get a flat array of template setting options.
 *
 * @since 4.0
 *
 * @return array
 */
function et_theme_builder_get_flat_template_settings_options() {
}
function et_theme_builder_get_template_setting_child_options( $parent, $include = array(), $search = '', $page = 1, $per_page = 30 ) {
}
/**
 * Get the template and its layouts, if any, for the given request.
 *
 * @since 4.0
 *
 * @param ET_Theme_Builder_Request $request         Request to check against. Defaults to the current one.
 * @param bool                     $cache           Cache the result or not, regardless of whether any layouts should be loaded.
 * @param bool                     $load_from_cache Load the cached result for the given post ID, if available.
 *
 * @return array Array of layouts or an empty array if no layouts should be loaded.
 */
function et_theme_builder_get_template_layouts( $request = \null, $cache = \true, $load_from_cache = \true ) {
}
/**
 * Get whether TB overrides the specified layout for the current request.
 *
 * @since 4.0.6
 *
 * @param string $layout Layout post type.
 *
 * @return boolean
 */
function et_theme_builder_overrides_layout( $layout ) {
}
/**
 * Get whether the specified layout will properly render the real post content.
 *
 * @since 4.0
 *
 * @param array $layout
 *
 * @return boolean
 */
function et_theme_builder_layout_has_post_content( $layout ) {
}
/**
 * Create or update a Theme Builder template.
 *
 * @since 4.0
 *
 * @param integer $theme_builder_id Theme builder ID.
 * @param array   $template         Template.
 * @param boolean $allow_default    Allow default.
 *
 * @return (integer|false) Return false on failure.
 */
function et_theme_builder_store_template( $theme_builder_id, $template, $allow_default ) {
}
/**
 * Sanitize a Theme Builder template.
 *
 * @since 4.0
 *
 * @param array $template
 *
 * @return array
 */
function et_theme_builder_sanitize_template( $template ) {
}
/**
 * Insert a Theme Builder layout post.
 *
 * @since 4.0
 *
 * @param array $options
 *
 * @return integer|WP_Error
 */
function et_theme_builder_insert_layout( $options ) {
}
/**
 * Overrides cache post_type so that TB custom post types and 'page' share the same files.
 *
 * @since 4.0
 *
 * @param string $post_type
 *
 * @return string.
 */
function et_theme_builder_cache_post_type( $post_type ) {
}
/**
 * Decorate a page resource slug based on the current request and TB.
 *
 * @since 4.0.7
 *
 * @param integer|string $post_id
 * @param string         $resource_slug Resource slug.
 *
 * @return string
 */
function et_theme_builder_decorate_page_resource_slug( $post_id, $resource_slug ) {
}
/**
 * Clear cache of 3P caching plugins partially on the posts or all of them.
 *
 * @since 4.5.0
 *
 * @param string|array $post_ids 'all' or array of post IDs.
 *
 * @return void
 */
function et_theme_builder_clear_wp_cache( $post_ids = 'all' ) {
}
/**
 * Clear cache of 3P caching plugins fully or partially after TB layouts saved.
 *
 * Clear all the cache when the template updated is:
 * - Default template
 * - Used on archive, 404, or all posts
 * - Non static homepage
 *
 * @since 4.5.0
 *
 * @param int $layout_id
 *
 * @return void
 */
function et_theme_builder_clear_wp_post_cache( $layout_id = '' ) {
}
/**
 * Update layout title for each template
 *
 * @param array $template Theme Builder Template.
 */
function et_theme_builder_update_layout_title( $template ) {
}
/**
 * Get post content module placeholder html.
 *
 * @since 4.18.0
 *
 * @return string Placeholder html.
 */
function et_theme_builder_get_post_content_placeholder() {
}
/**
 * Adds Library editor admin body classes.
 *
 * @param  string $classes Comma separated Classes string.
 * @return string
 */
function et_theme_builder_add_library_editor_body_class( $classes ) {
}
/**
 * Get placeholders for WooCommerce module in Theme Builder
 *
 * @since 4.0.1
 * @since 4.0.10 Product placeholders is initialized as TB placeholder product's default props
 *
 * @return array
 */
function et_theme_builder_wc_placeholders() {
}
/**
 * Force set product's class to ET_Theme_Builder_Woocommerce_Product_Variable_Placeholder in TB's woocommerceComponent
 * rendering. This product classname is specifically filled and will returned TB placeholder data
 * without retrieving actual value from database
 *
 * @since 4.0.10
 *
 * @return string
 */
function et_theme_builder_wc_product_class() {
}
/**
 * Get review placeholder for WooCommerce module in Theme Builder. This can't be included at
 * `et_theme_builder_wc_placeholders()` due to dependability on global $post value and
 * `et_theme_builder_wc_placeholders()`'s returned value being cached on static variable
 *
 * @since 4.0.1
 *
 * @return object
 */
function et_theme_builder_wc_review_placeholder() {
}
/**
 * Set global objects needed to manipulate `ETBuilderBackend.currentPage.woocommerceComponents` on
 * theme builder into displaying WooCommerce module placeholder (even though TB's CPT is not
 * WooCommerce's product CPT)
 *
 * @since 4.0.1
 *
 * @param array $conditional_tags evaluate conditional tags when current request is AJAX request
 */
function et_theme_builder_wc_set_global_objects( $conditional_tags = array() ) {
}
/**
 * Reset global objects needed to manipulate `ETBuilderBackend.currentPage.woocommerceComponents`
 *
 * @since 4.0.1
 * @since 4.14.5 Add conditional tags parameter to evaluate AJAX request.
 *
 * @param array $conditional_tags Evaluate conditional tags when current request is AJAX request.
 */
function et_theme_builder_wc_reset_global_objects( $conditional_tags = array() ) {
}
/**
 * Modify reviews output on WooCommerce's review and tabs' review module in TB
 *
 * @since 4.0.1
 *
 * @param array $comments
 *
 * @return array
 */
function et_theme_builder_wc_set_review_objects( $comments ) {
}
/**
 * Modify review rating output on WooCommerce review and tabs review module in TB
 *
 * @since 4.0.1
 *
 * @param mixed  $value
 * @param int    $object_id
 * @param string $meta_key
 * @param bool   $single
 *
 * @return mixed
 */
function et_theme_builder_wc_set_review_metadata( $value, $object_id, $meta_key, $single ) {
}
/**
 * Filter `get_the_terms()` output for Theme Builder layout usage. `get_the_term()` is used for
 * product tags and categories in WC meta module and relies on current post's ID to output product's
 * tags and categories. In TB settings, post ID is irrelevant as the current layout can be used in
 * various pages. Thus, simply get the first tags and cats then output it for visual preview purpose
 *
 * @since 4.0.10
 *
 * @param WP_Term[]|WP_Error $terms    Array of attached terms, or WP_Error on failure.
 * @param int                $post_id  Post ID.
 * @param string             $taxonomy Name of the taxonomy.
 *
 * @return
 */
function et_theme_builder_wc_terms( $terms, $post_id, $taxonomy ) {
}
/**
 * Disable language filtering of terms in TB.
 *
 * @since 4.2
 *
 * @param string $parent_id
 * @param string $child_type
 * @param string $child_value
 */
function et_theme_builder_wpml_disable_term_filters( $parent_id, $child_type, $child_value ) {
}
/**
 * Enable language filtering of terms in TB.
 *
 * @since 4.2
 *
 * @param string $parent_id
 * @param string $child_type
 * @param string $child_value
 */
function et_theme_builder_wpml_enable_term_filters( $parent_id, $child_type, $child_value ) {
}
/**
 * Normalize an object ID to it's base language ID if it is a translation.
 *
 * @since 4.2
 *
 * @param integer $id      WPML object ID.
 * @param string  $type    Type.
 * @param string  $subtype Subtype.
 *
 * @return integer
 */
function et_theme_builder_wpml_normalize_object_id( $id, $type, $subtype ) {
}
/**
 * Prioritize IDs for the current active language over translated IDs
 * when comparing template settings priority.
 *
 * @since 4.2
 *
 * @param string                   $prioritized_setting Prioritized setting.
 * @param string                   $a                   First translated id.
 * @param string                   $b                   Second translated id.
 * @param ET_Theme_Builder_Request $request
 *
 * @return string
 */
function et_theme_builder_wpml_prioritize_translated_id( $prioritized_setting, $a, $b, $request ) {
}
/**
 * Boots Frond End Builder App,
 *
 * @return string Front End Builder wrap if main query, $content otherwise.
 */
function et_fb_app_boot( $content ) {
}
function et_fb_wp_nav_menu( $menu ) {
}
function et_builder_maybe_include_bfb_template( $template ) {
}
function et_fb_dynamic_sidebar_ob_start() {
}
function et_fb_dynamic_sidebar_after_ob_get_clean() {
}
/**
 * Added frontend builder assets.
 * Note: loading assets on head is way too early, computedVars returns undefined on header.
 *
 * @return void
 */
function et_fb_wp_footer() {
}
/**
 * Added frontend builder specific body class
 *
 * @todo load conditionally, only when the frontend builder is used
 *
 * @param  array  initial <body> classes
 * @return array modified <body> classes
 */
function et_fb_add_body_class( $classes ) {
}
/**
 * Added BFB specific body class
 *
 * @todo load conditionally, only when the frontend builder is used
 *
 * @param  string initial <body> classes
 * @return string modified <body> classes
 */
function et_fb_add_admin_body_class( $classes ) {
}
/**
 * Remove visual builder preloader classname on BFB because BFB spins the preloader on parent level to avoid flash of unstyled elements
 *
 * @param  string builder preloader classname
 * @return string modified builder preloader classname
 */
function et_bfb_app_preloader_class( $classname ) {
}
function et_builder_inject_preboot_script() {
}
// This adds the upload label for Image module
// TODO: Remove when BB is removed.
function _et_bb_module_image_add_src_label( $filed ) {
}
function _action_et_pb_box_shadow_overlay() {
}
/**
 * Returns font style options
 *
 * @return array
 */
function et_divi_font_style_choices() {
}
/**
 * Returns global font style options.
 *
 * @return array
 */
function et_divi_global_font_style_choices() {
}
/**
 * Returns list of color scheme used by Divi
 *
 * @return array
 */
function et_divi_color_scheme_choices() {
}
/**
 * Returns list of header styles used by Divi
 *
 * @return array
 */
function et_divi_header_style_choices() {
}
/**
 * Returns list of dropdown animation
 *
 * @return array
 */
function et_divi_dropdown_animation_choices() {
}
/**
 * Returns list of footer column choices
 *
 * @return array
 */
function et_divi_footer_column_choices() {
}
/**
 * Returns yes no choices
 *
 * @return array
 */
function et_divi_yes_no_choices() {
}
/**
 * Returns left or right choices
 *
 * @return array
 */
function et_divi_left_right_choices() {
}
/**
 * Returns image animation choices
 *
 * @return array
 */
function et_divi_image_animation_choices() {
}
/**
 * Returns divider style choices
 *
 * @return array
 */
function et_divi_divider_style_choices() {
}
/**
 * Returns divider position choices
 *
 * @return array
 */
function et_divi_divider_position_choices() {
}
/**
 * Returns background repeat choices
 *
 * @return array
 */
function et_divi_background_repeat_choices() {
}
/**
 * Returns background attachment choices
 *
 * @return array
 */
function et_divi_background_attachment_choices() {
}
/**
 * Handles the dynamic assets list logic for Divi theme.
 *
 * @package Divi
 */
/**
 * Gets a list of global asset files.
 *
 * @param array $global_list List of globally needed assets.
 *
 * @since ??
 *
 * @return array
 */
function et_divi_get_global_assets_list( $global_list ) {
}
/**
 * Sanitize float number
 *
 * @param  mixed
 * @return float
 */
function et_sanitize_float_number( $number ) {
}
/**
 * Sanitize integer number
 *
 * @param  mixed
 * @return int
 */
function et_sanitize_int_number( $number ) {
}
/**
 * Sanitize font style
 *
 * @param string
 * @param string
 */
function et_sanitize_font_style( $styles ) {
}
/**
 * Sanitize choosen option based on options' key
 *
 * @param  string
 * @param  array
 * @return string|bool
 */
function et_sanitize_key_based_option( $choosen, $options, $default = \false ) {
}
/**
 * Sanitize font choice
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_font_choices( $choosen ) {
}
/**
 * Sanitize color scheme
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_color_scheme( $choosen ) {
}
/**
 * Sanitize header style
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_header_style( $choosen ) {
}
/**
 * Sanitize dropdown animation
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_dropdown_animation( $choosen ) {
}
/**
 * Sanitize footer column
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_footer_column( $choosen ) {
}
/**
 * Sanitize yes no choices
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_yes_no( $choosen ) {
}
/**
 * Sanitize left or right choices
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_left_right( $choosen ) {
}
/**
 * Sanitize image animation choices
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_image_animation( $choosen ) {
}
/**
 * Sanitize divider style choices
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_divider_style( $choosen ) {
}
/**
 * Sanitize divider position choices
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_divider_position( $choosen ) {
}
/**
 * Sanitize RGBA color
 *
 * @param  string
 * @return string|bool
 */
function et_sanitize_alpha_color( $color ) {
}
/**
 * Sanitize font icon
 *
 * @param  string
 * @param  string
 * @return string
 */
function et_sanitize_font_icon( $font_icon, $symbols_function = 'default' ) {
}
/**
 * Convert font hex-code font icons into strings so it can be compared
 *
 * @param  string
 * @return string
 */
function et_sanitize_font_icon_convert_icon_to_string( $icon ) {
}
/**
 * Array of allowed html tags on short block
 *
 * @return array
 */
function et_allowed_html_tags_short_block() {
}
/**
 * Sanitize short block html input
 *
 * @return string
 */
function et_sanitize_html_input_text( $string ) {
}
/**
 * Sanitize background repeat value
 *
 * @return string
 */
function et_sanitize_background_repeat( $choosen ) {
}
/**
 * Sanitize background attachment value
 *
 * @return string
 */
function et_sanitize_background_attachment( $choosen ) {
}
/**
 * Sanitize font weight choices
 *
 * @param string $choosen Selected value.
 *
 * @since ??
 *
 * @return string|bool
 */
function et_sanitize_global_font_weight( $choosen ) {
}
/**
 * Sanitize Header font style choices.
 *
 * @param string $choosen Selected value.
 *
 * @since ??
 *
 * @return string|bool
 */
function et_divi_global_font_style( $choosen ) {
}
function et_widgets_init() {
}
/**
 * Output the opening page container div.
 *
 * @since ??
 *
 * @return void
 */
function et_divi_filter_theme_builder_template_before_page_wrappers() {
}
/**
 * Output the header if necessary.
 *
 * @since ??
 *
 * @param integer $layout_id
 * @param bool    $layout_enabled
 *
 * @return void
 */
function et_divi_filter_theme_builder_template_before_header( $layout_id, $layout_enabled ) {
}
/**
 * Output the opening page container div.
 *
 * @since ??
 *
 * @return void
 */
function et_divi_filter_theme_builder_template_after_header() {
}
/**
 * Output the opening main content div.
 *
 * @since ??
 *
 * @return void
 */
function et_divi_filter_theme_builder_template_before_body() {
}
/**
 * Output the closing main content div.
 *
 * @since ??
 *
 * @return void
 */
function et_divi_filter_theme_builder_template_after_body() {
}
/**
 * Output the footer if necessary.
 *
 * @since ??
 *
 * @param integer $layout_id
 * @param bool    $layout_enabled
 *
 * @return void
 */
function et_divi_filter_theme_builder_template_after_footer( $layout_id, $layout_enabled ) {
}
/**
 * Output the closing page container div.
 *
 * @since ??
 *
 * @return void
 */
function et_divi_filter_theme_builder_template_after_page_wrappers() {
}
/**
 * Disable TB hooks in order to be compatible with LearnDash's Focus mode.
 *
 * @since ??
 */
function et_divi_action_theme_builder_compatibility_learndash_focus_mode() {
}
// end AboutMeWidget class
function AboutMeWidgetInit() {
}
// end AdvWidget class
function AdvWidgetInit() {
}
// end AdsenseWidget class
function AdsenseWidgetInit() {
}
