<?php

/**
 * Stub declarations for DIVI.
 * https://www.elegantthemes.com
 * https://github.com/aarsteinmedia/divi-stubs
 */

namespace Divi {
    class ET_Theme_Builder_Request
    {
        public static function et_theme_builder_get_template_layouts($request = null, $cache = true, $load_from_cache = true) {}
    }
    class DiviExtension
    {

        /**
         * Utility class instance.
         *
         * @since 3.1
         *
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
        protected $_bundle_dependencies = [];

        /**
         * Builder bundle data
         *
         * @since 3.1
         *
         * @var array
         */
        protected $_builder_js_data = [];

        /**
         * Frontend bundle data
         *
         * @since 3.1
         *
         * @var array
         */
        protected $_frontend_js_data = [];

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
        public function __construct($name = '', $args = []) {}

        /**
         * Enqueues minified, production javascript bundles.
         *
         * @since 3.1
         */
        protected function _enqueue_bundles() {}

        /**
         * Enqueues non-minified, hot reloaded javascript bundles.
         *
         * @since 3.1
         */
        protected function _enqueue_debug_bundles() {}

        /**
         * Enqueues minified (production) or non-minified (hot reloaded) backend styles.
         *
         * @since 4.4.9
         */
        protected function _enqueue_backend_styles() {}

        /**
         * Sets initial value of {@see self::$_bundle_dependencies}.
         *
         * @since 3.1
         */
        protected function _set_bundle_dependencies() {}

        /**
         * Sets {@see self::$_debug} based on the extension's global DEBUG constant.
         *
         * @since 3.1
         */
        protected function _set_debug_mode() {}

        /**
         * Loads custom modules when the builder is ready.
         *
         * @since      3.1
         * @deprecated ?? - Use {@see 'hook_et_builder_ready'} instead.
         */
        public function hook_et_builder_modules_loaded() {}

        /**
         * Loads custom modules when the builder is ready.
         * {@see 'et_builder_ready'}
         *
         * @since 4.10.0
         */
        public function hook_et_builder_ready() {}

        /**
         * Performs initialization tasks.
         *
         * @since 3.1
         */
        protected function _initialize() {}

        /**
         * Performs tasks when the plugin is activated.
         * {@see 'activate_$PLUGINNAME'}
         *
         * @since 3.1
         */
        public function wp_hook_activate() {}

        /**
         * Performs tasks when the plugin is deactivated.
         * {@see 'deactivate_$PLUGINNAME'}
         *
         * @since 3.1
         */
        public function wp_hook_deactivate() {}

        /**
         * Enqueues the extension's scripts and styles.
         * {@see 'wp_enqueue_scripts'}
         *
         * @since 3.1
         * @since 4.4.9 Added backend styles for handling custom builder styles.
         */
        public function wp_hook_enqueue_scripts() {}

        /**
         * Enqueues the extension's scripts and styles for admin area.
         *
         * @since 4.4.9
         */
        public function admin_hook_enqueue_scripts() {}
    }
    /**
     * Base class for module.
     *
     * Class ET_Builder_Module
     */
    class ET_Builder_Module extends ET_Builder_Element
    {
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

    /**
     * Base class for all builder elements.
     *
     * @since 1.0
     */
    class ET_Builder_Element
    {

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
        public $fields = [];

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
        protected $attrs_unprocessed = [];

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
        public $props = [];

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
        public $wrapper_settings = [];

        /**
         * Unique field definitions that are used in each modules.
         *
         * @var array
         */
        public $fields_unprocessed = [];

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
        public $custom_css_fields = [];

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
        public $post_types = [];

        /**
         * Main modules tabs. e.g `Content`, `Design` and `Advanced`
         *
         * @var array|mixed|void
         */
        public $main_tabs = [];

        /**
         * BB :: Main modules tabs. e.g `general`, `advanced` and `custom_css`
         *
         * @var array
         */
        public $used_tabs = [];

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
        public $dbl_quote_exception_options = array('et_pb_font_icon', 'et_pb_button_one_icon', 'et_pb_button_two_icon', 'et_pb_button_icon', 'et_pb_content');

        /**
         * Module's settings modal custom tabs.
         *
         * @var array|array[]
         */
        public $settings_modal_tabs = [];

        /**
         * Module's settings modal toggles. e.x `background`, `custom css`.
         *
         * @var array|mixed
         */
        public $settings_modal_toggles = [];

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
        public $classname = [];

        /**
         * Module's help video configuration array.
         *
         * @var array
         */
        public $help_videos = [];

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
        public static $uses_module_classname = [];

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
        protected static $_fields_unprocessed = [];

        /**
         * Default props of each modules.
         *
         * @var array
         */
        protected static $_default_props = [];

        /**
         * Slugs of modules for which an option template has been rebuilt.
         *
         * @var array
         */
        protected static $_has_rebuilt_option_template = [];

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
        private static $_unique_bb_keys_map = [];

        /**
         * List of unique BB templates.
         *
         * @var array
         */
        private static $_unique_bb_keys_values = [];

        /**
         * List of tabs/newlines characters.
         *
         * @var array
         */
        private static $_unique_bb_strip = array("\t", "\r", "\n");

        /**
         * Scroll effects fields of all modules.
         *
         * @var array
         */
        public static $_scroll_effects_fields = array(
            'desktop' => [],
            'tablet'  => [],
            'phone'   => [],
        );

        /**
         * Sticky element configuration
         *
         * @since 4.6.0
         *
         * @var array
         */
        public static $sticky_elements = [];

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
        private $letter_spacing_fix_selectors = [];

        /**
         * Holds module styles for the current request.
         *
         * @var array
         */
        private static $styles = [];

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
        private static $internal_modules_styles = [];

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
        private static $media_queries = [];

        /**
         * List of all modules instance that extends this class.
         *
         * @var array
         */
        private static $modules = [];

        /**
         * List of all parent modules instance that extends this class.
         * e.x Accordion, BarCounters.
         *
         * @var array
         */
        private static $parent_modules = [];

        /**
         * List of all child modules instance that extends this class.
         * e.x AccordionItem, BarCountersItems.
         *
         * @var array
         */
        private static $child_modules = [];

        /**
         * List of all woocommerce modules instance that extends this class.
         *
         * @var array
         */
        private static $woocommerce_modules = [];

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
        private static $structure_modules = [];

        /**
         * List of all structure modules slugs.
         *
         * @var array
         */
        private static $structure_module_slugs = [];

        /**
         * List of all modules slugs by post type.
         *
         * @var array
         */
        private static $_module_slugs_by_post_type = [];

        /**
         * Module Icons displayed in Add Module modals.
         *
         * @var array
         */
        private static $module_icons = [];

        /**
         * List of all modules help videos.
         *
         * @var array
         */
        private static $module_help_videos = [];

        /**
         * Parent module's motion/scroll effects options settings.
         *
         * @var array
         */
        private static $parent_motion_effects = [];

        /**
         * A stack of the current active theme builder layout post type.
         *
         * @var string[]
         */
        protected static $theme_builder_layout = [];

        /**
         * A stack of the current active WP Editor template post type such as:
         * - wp_template
         * - wp_template_part
         *
         * @var array[]
         */
        public static $wp_editor_template = [];

        /**
         * Compile list of modules that has rich editor option.
         *
         * @var array
         */
        protected static $has_content_modules = [];

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
        public static $field_dependencies = [];

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
        protected static $_indices = [];

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
        public $mv_inherited_props = [];

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
        protected $processed_background = [];

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
        protected $position_locations = [];

        /**
         * Module settings that are exposed so layout block previewer can correctly render it
         * despites tweaks performed to make block preview correctly aligned
         *
         * @var array
         */
        protected static $layout_block_assistive_settings = [];

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
        public static $all_module_slugs = [];

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
        public function __construct() {}

        /**
         * Return all module slugs.
         *
         * @return array
         *
         * @since 4.10.0
         */
        public static function get_all_module_slugs() {}

        /**
         * Make private/protected methods readable.
         *
         * @param  string $name Method to call.
         * @param  array  $args Arguments to pass when calling.
         * @return mixed|bool Return value of the callback, false otherwise.
         */
        public function __call($name, $args) {}

        /**
         * Makes private properties readable.
         *
         * @param string $name Property name.
         *
         * @return mixed|string|null
         */
        public function &__get($name) {}

        /**
         * Make private properties checkable.
         *
         * @param  string $name Property to check if set.
         * @return bool Whether the property is set.
         */
        public function __isset($name) {}

        /**
         * Set a property's value.
         *
         * @param string $name  Property key.
         * @param mixed  $value Property value.
         */
        public function __set($name, $value) {}

        /**
         * Determine whether class is Divi official module or not.
         *
         * @param string $class_name Module class name.
         *
         * @return bool
         */
        private static function _is_official_module($class_name) {}

        /**
         * Determine whether class is WooCommerce module or not.
         *
         * @param string $class_name Module class name.
         *
         * @return bool
         */
        private static function _is_woocommerce_module($class_name) {}
        /**
         * Set configuration for module's advanced fields.
         */
        protected function _set_advanced_fields_config() {}

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
        protected static function _should_respect_post_interference() {}

        /**
         * Retrieve the main query post id.
         * Accounts for third party interference with the current post.
         *
         * @since 4.0.6
         *
         * @return integer|boolean
         */
        protected static function _get_main_post_id() {}

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
        public static function get_current_post_id() {}

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
        public static function get_current_post_id_reverse() {}

        /**
         * Get the current ID depending on the current request.
         *
         * @since 4.0
         *
         * @return int|bool
         */
        public function get_the_ID()
        { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName -- This function name is consistent with WP core `get_the_ID()` function
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
        public static function setup_advanced_styles_manager($post_id = 0) {}

        /**
         * Passes the module design styles for the current page to the advanced styles manager.
         * {@see 'wp_footer' (19) Must run before the style manager's footer callback}
         */
        public static function set_advanced_styles() {}

        /**
         * Set {@see ET_Builder_Element::$advanced_styles_manager} to force inline styles.
         */
        public static function maybe_force_inline_styles() {}

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
        public static function filter_page_resource_data($data, $context, $resource) {}

        /**
         * Get the slugs for all current builder modules.
         *
         * @since 3.0.85
         *
         * @param string $post_type Get module slugs for this post type. If falsy, all slugs are returned.
         *
         * @return array
         */
        public static function get_module_slugs_by_post_type($post_type = 'post') {}

        /**
         * Get whether the module has Visual Builder support or not
         *
         * @since 3.1
         *
         * @return bool
         */
        public function has_vb_support() {}

        /**
         * Create Factory objects
         *
         * @since 3.23 Add margin padding fields object.
         *
         * @return void
         */
        public function set_factory_objects() {}

        /**
         * Populates {@see $fields_unprocessed}.
         *
         * @param array $fields Fields.
         */
        protected function _set_fields_unprocessed($fields) {}

        /**
         * Populates {@see self::$fields_unprocessed}.
         */
        public function set_fields() {}

        /**
         * Normalize default value depends on field type.
         *
         * @param string $field         Field.
         * @param mixed  $default_value Default value.
         * @param string $type          Field type.
         *
         * @return mixed|string
         */
        protected function _normalize_field_default($field, $default_value, $type = '') {}

        /**
         * Normalize `affects` fields name if needed.
         * Some 3rd party modules use `#et_pb_<field_name>` format which is wrong and doesn't work in VB, but works in BB.
         * Convert it to correct format and output notice for developer
         *
         * @param string $field_name Field name.
         *
         * @return void
         */
        public function normalize_affect_fields(&$field_name) {}

        /**
         * Finalizes the configuration of {@see self::$fields_unprocessed}.
         * Includes filter and fields processing for Visual Builder
         *
         * @return void
         */
        protected function _finalize_all_fields() {}

        /**
         * Register builder enabled post types.
         *
         * @param string $post_type Post type.
         */
        private function register_post_type($post_type) {}

        /**
         * Double quote are saved as "%22" in shortcode attributes.
         * Decode them back into "
         *
         * @param string[] $enabled_dynamic_attributes        Attributes which have dynamic content enabled.
         * @param bool     $et_fb_processing_shortcode_object FB processing shortcode flag.
         *
         * @return void
         */
        private function _decode_double_quotes($enabled_dynamic_attributes, $et_fb_processing_shortcode_object) {}

        /**
         * Provide a way for sub-class to access $this->_render_count without a chance to alter its value
         *
         * @return int
         */
        protected function render_count() {}

        /**
         * Bumps the render count for this module instance and the module instance whose slug is
         * set as {@see self::$_bumps_render_count} (if any).
         *
         * @since 3.10
         */
        protected function _bump_render_count() {}

        /**
         * Check whether ab testing enabled for current module and calculate whether it should be displayed currently or not
         *
         * @param array $shortcode_atts Shortcode attributes.
         *
         * @return bool
         */
        private function _is_display_module($shortcode_atts) {}

        /**
         * Check whether the current module should be displayed or not.
         *
         * @param bool|integer $ab_subject_id subject id.
         *
         * @return bool
         */
        private function _check_ab_test_subject($ab_subject_id = false) {}

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
        protected static function _get_index($key) {}

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
        protected static function _set_index($key, $index) {}

        /**
         * Resets indexes used when generating element addresses.
         *
         * @param string $content Element content.
         * @param bool   $force   Whether forcefully reset indexes even when not the main query or
         *                        {@see self::$can_reset_element_indexes} is false.       
         *
         * @return string
         */
        public static function reset_element_indexes($content = '', $force = false) {}

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
        public function generate_element_address($render_slug = '') {}

        /**
         * Resolves conditional defaults
         *
         * @param array  $values      Fields.
         * @param string $render_slug Module slug.
         *
         * @return array
         */
        public function resolve_conditional_defaults($values, $render_slug = '') {}

        /**
         * Get wrapper settings. Combining module-defined wrapper settings with default wrapper settings
         *
         * @since 3.1
         *
         * @param string $render_slug module slug.
         *
         * @return array
         */
        protected function get_wrapper_settings($render_slug = '') {}

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
        protected function _render_module_wrapper($output = '', $render_slug = '') {}

        /**
         * Resolves the values for dynamic attributes.
         *
         * @since 3.17.2
         *
         * @param array $original_attrs List of attributes.
         *
         * @return array Processed attributes with resolved dynamic values.
         */
        public function process_dynamic_attrs($original_attrs) {}

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
        public function _render($attrs, $content, $render_slug, $parent_address = '', $global_parent = '', $global_parent_type = '', $parent_type = '', $theme_builder_area = '') {}

        /**
         * Add "et_animated" class using filter. Obsolete method and only applied to old 3rd party modules without `modules_classname()` method
         *
         * @param string $output      Shortcode output.
         * @param string $module_slug Module slug.
         *
         * @return string
         */
        public function add_et_animated_class($output, $module_slug) {}

        /**
         * Delete attribute values that are equal to the global default value (if one exists).
         *
         * @return void
         */
        protected function _maybe_remove_global_default_values_from_props() {}

        /**
         * Intended to be overridden as needed.
         */
        public function maybe_inherit_values() {}

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
        public function output() {}

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
        public function props_to_html_data_attrs($props = []) {}

        /**
         * This method is called before {@self::_render()} for rows, columns, and modules. It can
         * be overridden by elements that need to perform any tasks before rendering begins.
         *
         * @since 3.1 Renamed from `pre_shortcode_content()` to `before_render()`.
         * @since 1.0
         */
        public function before_render() {}

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
        public function render($attrs, $content, $render_slug) {}

        /**
         * Replace the et_pb_row with et_pb_row_inner and et_pb_column with et_pb_column_inner.
         * Used as a callback function in {@self::et_pb_maybe_fix_specialty_columns} when fixing content of Specialty Sections
         *
         * @param string $rows Row content.
         *
         * @return string Shortcode string.
         * @since  3.19.16
         */
        public function et_pb_fix_specialty_columns($rows) {}

        /**
         * Run regex against the Specialty Section content to find and fix invalid inner shortcodes
         *
         * @param string $section_content Section content.
         *
         * @return string Shortcode string.
         * @since  3.19.16
         */
        public function et_pb_maybe_fix_specialty_columns($section_content) {}

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
        public function render_as_builder_data($atts, $content, $render_slug, $parent_address = '', $global_parent = '', $global_parent_type = '', $parent_type = '', $theme_builder_area = '') {}

        /**
         * Determine if provided string contain line-breaks (`\r\n`)
         *
         * @param string $content String to check.
         *
         * @return bool
         */
        public function has_line_breaks($content) {}

        /**
         * Additional shortcode render callback.
         *
         * Intended to be overridden as needed.
         *
         * @param array  $attrs       Attributes.
         * @param null   $content     Shortcode content.
         * @param string $render_slug Shortcode tag.
         */
        public function additional_render($attrs, $content, $render_slug) {}

        /**
         * Intended to be overridden as needed.
         */
        public function predefined_child_modules() {}

        /**
         * Generate global setting name
         *
         * @param string $option_slug Option slug.
         *
         * @return string               Global setting name in the following format: "module_slug-option_slug"
         */
        public function get_global_setting_name($option_slug) {}

        /**
         * Add global default values to all fields, if they don't have defaults set
         *
         * @return void
         */
        protected function _maybe_add_global_defaults() {}

        /**
         * Rebuild option template in $this->fields_unprocessed property into actual field if needed.
         *
         * @since 3.28
         */
        protected function _maybe_rebuild_option_template() {}

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
        protected function _maybe_add_global_presets_settings($attrs, $render_slug) {}

        /**
         * Add additional option fields.
         *
         * @since 3.23 Introduce form field options set. Also, add codes to generate responsive options
         *           set with suffix automatically. It also supports mobile_options on composite, bg
         *           field, and computed fields as well.
         */
        protected function _add_additional_fields() {}

        /**
         * Set i18n used by font fields.
         *
         * @since 4.4.9
         *
         * @return void
         */
        protected function set_i18n_font() {}

        /**
         * Add font option fields.
         *
         * @since 3.23 Introduce block elements sub options group. Add responsive settings for font set,
         *           text color, text alignment, and text-shadow options set.
         */
        protected function _add_font_fields() {}

        /**
         * Add background option fields.
         *
         * @since 3.23 Add responsive settings for background settings.
         */
        protected function _add_background_fields() {}

        /**
         * Add text option fields.
         *
         * @since 3.23 Add responsive settings for text orientation and layout settings.
         */
        protected function _add_text_fields() {}

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
        protected function _add_borders_fields() {}

        /**
         * Add transform fields.
         */
        protected function _add_transforms_fields() {}
        /**
         * Add sizing option fields.
         */
        protected function _add_sizing_fields() {}

        // phpcs:ignore Generic.Commenting.DocComment -- Deprecated function.
        /**
         * @deprecated
         */
        public function _add_max_width_fields() {}

        /**
         * Add overflow option fields.
         */
        protected function _add_overflow_fields() {}

        /**
         * Add display conditions option fields.
         */
        protected function _add_display_conditions_fields() {}

        /**
         * Return Scroll effects option fields.
         *
         * @return array
         */
        public function get_scroll_effects_options() {}

        /**
         * Add sticky fields to the additional fields options.
         *
         * @since 4.6.0
         *
         * @return void
         */
        protected function _add_sticky_fields() {}

        /**
         * Add scroll effects option fields.
         */
        protected function _add_scroll_effects_fields() {}

        /**
         * Add margin & padding option fields.
         *
         * @since 3.23 Add allowed CSS units for margin and padding.
         */
        protected function _add_margin_padding_fields() {}

        /**
         * Add button option fields.
         *
         * @since 3.23 Add custom padding for button options set. Add allowed CSS units. Set custom
         *           default for text size and border width. Add responsive settings for button
         *           settings. Set custom group label. Add ability hide and show the icon settings.
         */
        protected function _add_button_fields() {}

        /**
         * Add special image_icon option fields.
         *
         * @since ? Add custom margin-padding for image_icon field.
         */
        protected function _add_image_icon_fields() {}
        /**
         * Add animation option fields.
         *
         * @since 3.23 Introduce responsive settings on all animation options. Rename Animation label
         *           for et_pb_team_member module as Image Animation. Reorder animation repeat option
         *           to the bottom of animation settings.
         */
        protected function _add_animation_fields() {}

        /**
         * Add additional transition fields. e.x hover transition fields.
         */
        private function _add_additional_transition_fields() {}

        /**
         * Add CSS position controls affects top,right,bottom,left,position and transform translate CSS properties.
         *
         * @return void
         * @since  4.2
         */
        private function _add_position_fields() {}
        /**
         * Add CSS filter controls (i.e. saturation, brightness, opacity) to the `_additional_fields_options` array.
         *
         * @since 3.23 Introduce responsive settings on all animation options. Add allowed CSS unit for
         *           Blur option.
         *
         * @return void
         */
        protected function _add_filter_fields() {}

        /**
         * Add the divider options to the additional_fields_options array.
         */
        protected function _add_divider_fields() {}

        /**
         * Add additional Text Shadow fields to all modules
         */
        protected function _add_text_shadow_fields() {}

        /**
         * Add box shadow fields based on configuration on $this->advanced_fields['box_shadow']
         *
         * @since 3.1
         */
        protected function _add_box_shadow_fields() {}

        /**
         * Get css transition properties for box shadow fields.
         *
         * @param string|null $module Module slug.
         *
         * @return array
         */
        public function get_transition_box_shadow_fields_css_props($module = 'default') {}

        /**
         * Get css transition properties for text shadow fields.
         *
         * @param string|null $module Module slug.
         *
         * @return array
         */
        public function get_transition_text_shadow_fields_css_props($module = null) {}

        /**
         * Get css transition properties for filters fields.
         *
         * @param string|null $module Module slug.
         *
         * @return array
         */
        public function get_transition_filters_fields_css_props($module = null) {}

        /**
         * Get css transition properties for borders fields.
         *
         * @param string|null $module Module slug.
         *
         * @return array
         */
        public function get_transition_borders_fields_css_props($module = 'default') {}

        /**
         * Get margin and padding transition css properties.
         *
         * @param string|null $module Module slug.
         *
         * @return array
         */
        public function get_transition_margin_padding_fields_css_props($module = null) {}

        /**
         * Get transform transition css properties.
         *
         * @param string|null $module Module slug.
         *
         * @return array
         */
        public function get_transition_transform_css_props($module = null) {}

        /**
         * Get position transition css properties.
         *
         * @param string|null $module Module slug.
         *
         * @return array
         */
        public function get_transition_position_css_props($module = null) {}

        /**
         * Get font transition css properties.
         *
         * @return array
         */
        public function get_transition_font_fields_css_props() {}

        /**
         * Get height transition css properties.
         *
         * @param string $prefix The prefix string that may be added to field name.
         *
         * @return array
         */
        public function get_transition_height_fields_css_props($prefix = '') {}

        /**
         * Get css transition properties for image fields.
         *
         * @return array
         */
        public function get_transition_image_fields_css_props() {}
        /**
         * Get css transition properties for button fields.
         * *
         *
         * @return array
         */
        public function get_transition_button_fields_css_props() {}

        /**
         * Get transition form field CSS props.
         *
         * @since 3.23
         *
         * @return array Selector for each fields.
         */
        public function get_transition_form_field_fields_css_props() {}
        /**
         * Get css transition properties for gutter wudth fields.
         * *
         *
         * @return array
         */
        public function get_transition_gutter_fields_css_props() {}

        /**
         * Get CSS fields transition.
         *
         * @since 3.23 Add form field options group and background image on the fields list.
         */
        public function get_transition_fields_css_props() {}

        /**
         * Add link options fields to all modules
         *
         * @since 3.15.1
         */
        protected function _add_link_options_fields() {}

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
        public function get_transition_style(array $props = [], $device = 'desktop') {}

        /**
         * Setup hover transitions.
         *
         * @param string $function_name Function name.
         *
         * @since 4.6.0 Add sticky style support
         */
        public function setup_hover_transitions($function_name) {}

        /**
         * Process hover transitions.
         *
         * @param string $function_name Module alias.
         *
         * @since 4.6.0 add sticky style support
         */
        public function process_hover_transitions($function_name) {}

        /**
         * Add custom css fields. e.g before, main_element and after.
         */
        protected function _add_custom_css_fields() {}

        /**
         * Add toggles in settings modal.
         *
         * @param string $tab_slug      Toggle tab slug.
         * @param string $toggles_array Toggles.
         */
        protected function _add_settings_modal_toggles($tab_slug, $toggles_array) {}

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
        protected function _add_settings_modal_sub_toggles($tab_slug, $toggle_slug, $sub_toggle_items, $tabbed_subtoggles = false, $bb_icons_support = false) {}

        /**
         * Get all the fields.
         *
         * @return array|mixed|void
         */
        private function _get_fields() {}

        /**
         * Checks if the field value equals its default value
         *
         * @param string $name  Field name.
         * @param mixed  $value Field value.
         *
         * @return bool
         */
        protected function _is_field_default($name, $value) {}

        /**
         * Intended to be overridden as needed.
         *
         * @param array $fields Module fields.
         *
         * @return mixed|void
         */
        public function process_fields($fields) {}

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
        public function get_fields() {}

        /**
         * Returns props value by provided key, if the value is empty, returns the default value
         *
         * @param string $prop    Prop key.
         * @param mixed  $default Default value.
         *
         * @return mixed|null
         */
        public function prop($prop, $default = null) {}

        /**
         * Get module defined fields + automatically generated fields
         *
         * @since 3.23 Add auto generate responsive settings suffix based on mobile_options parameter.
         *
         * @internal Added to make get_fields() lighter. Initially added during BFB's 3rd party support
         *
         * @return array
         */
        public function get_complete_fields() {}

        /**
         * Get configuration for module's advanced fields. This method is meant to be overridden in module classes.
         *
         * @since 3.1
         *
         * @return array[] {@see self::$advanced_fields}
         */
        public function get_advanced_fields_config() {}

        /**
         * Get configuration for module's custom css fields. This method is meant to be overridden in module classes.
         *
         * @since 3.1
         *
         * @return array[] {@see self::$custom_css_fields}
         */
        public function get_custom_css_fields_config() {}

        /**
         * Returns Global Presets settings
         */
        public static function get_global_presets() {}

        /**
         * Get custom tabs for the module's settings modal. This method is meant to be overridden in module classes.
         *
         * @since 3.1
         *
         * @return array[] {@see self::$settings_modal_tabs}
         */
        public function get_settings_modal_tabs() {}

        /**
         * Get toggles for the module's settings modal. This method is meant to be overridden in module classes.
         *
         * @since 3.1
         *
         * @return array[] {@see self::$settings_modal_toggles}
         */
        public function get_settings_modal_toggles() {}

        /**
         * Generate column fields.
         *
         * @param integer $column_number number of column.
         * @param array   $base_fields   base fields for column.
         *
         * @return array column fields
         */
        public function get_column_fields($column_number = 1, $base_fields = []) {}

        /**
         * Append suffix to simple array value.
         *
         * @param array  $values array value.
         * @param string $suffix intended suffix for output's array.
         *
         * @return array suffixed value
         */
        public function _append_suffix($values, $suffix) {}

        /**
         * Returns unprocessed attrs.
         *
         * @since 4.15.0
         *
         * @return mixed[]
         */
        public function get_attrs_unprocessed() {}

        /**
         * Returns module style priority.
         *
         * @return int
         */
        public function get_style_priority() {}

        /**
         * Get current post's post type.
         *
         * @return string
         */
        public function get_post_type() {}

        /**
         * Removed extra tabs/newlines from template.
         *
         * @param string $content Template content.
         *
         * @return string|string[]
         */
        public static function optimize_bb_chunk($content) {}

        /**
         * Optimize template content.
         *
         * @param string $content Template content.
         *
         * @return string|string[]
         */
        public static function get_unique_bb_key($content) {}

        /**
         * Wrap settings option in wrapper div e.g `.et-pb-option-standard`.
         *
         * @param string $option_output Option markup.
         * @param array  $field         Field settings.
         * @param string $name          Field name.
         *
         * @return string|string[]
         */
        public function wrap_settings_option($option_output, $field, $name = '') {}

        /**
         * Get field renderer data e.g renderer method.
         *
         * @param array $field Field options.
         *
         * @return array|mixed|void
         */
        public function get_field_renderer($field) {}

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
        public function wrap_settings_option_field($field, $name = '') {}

        /**
         * Wrap setting option label.
         *
         * @param array $field Field settings.
         *
         * @return mixed|string
         */
        public function wrap_settings_option_label($field) {}

        /**
         * Get svg icon as string.
         *
         * @param string $icon_name icon name.
         *
         * @return string div-wrapped svg icon.
         */
        public function get_icon($icon_name) {}

        /**
         * Get structure of background UI tabs
         *
         * @param string $base_name Background base.
         *
         * @return array
         */
        public function get_background_fields_structure($base_name = 'background') {}

        /**
         * Get list of background fields names in one dimensional array
         *
         * @return array
         */
        public function get_background_fields_names()
        {
            $background_structure = $this->get_background_fields_structure();
            $fields_names         = [];

            foreach ($background_structure as $tab_name) {
                foreach ($tab_name as $field_name) {
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
        public function get_background_fields($all_fields, $base_name = 'background')
        {
            $background_fields_structure = $this->get_background_fields_structure($base_name);
            $background_tab_names        = array_keys($background_fields_structure);
            $background_fields           = array_fill_keys($background_tab_names, []);

            foreach ($all_fields as $field_name => $field) {
                // Multiple foreaches seem overkill. Use single foreach with little bit if conditions
                // redundancy to get background fields grouped into multi-dimensional tab-based array.
                if (in_array($field_name, $background_fields_structure['color'], true)) {
                    $background_fields['color'][$field_name] = $field;
                }

                if (in_array($field_name, $background_fields_structure['gradient'], true)) {
                    $background_fields['gradient'][$field_name] = $field;
                }

                if (in_array($field_name, $background_fields_structure['image'], true)) {
                    $background_fields['image'][$field_name] = $field;
                }

                if (in_array($field_name, $background_fields_structure['video'], true)) {
                    $background_fields['video'][$field_name] = $field;
                }

                // QF_BACKGROUND_MASKS.

                if (in_array($field_name, $background_fields_structure['pattern'], true)) {
                    $background_fields['pattern'][$field_name] = $field;
                }

                if (in_array($field_name, $background_fields_structure['mask'], true)) {
                    $background_fields['mask'][$field_name] = $field;
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
        public function generate_background_options($base_name, $background_tab, $tab_slug, $toggle_slug, $context = null, $options_filters = []) {}

        /**
         * Get string of background fields UI. Used in place of background_color fields UI.
         *
         * @param array  $all_fields list of all module fields.
         *
         * @param string $base_name  background base name.
         *
         * @return string background fields UI
         */
        public function wrap_settings_background_fields($all_fields, $base_name = 'background') {}

        /**
         * Get field name with prefix.
         *
         * @param array $field Field.
         *
         * @return mixed|string
         */
        public function get_field_name($field) {}

        /**
         * Get field name for use in underscore templates.
         *
         * @since 3.17.2
         *
         * @param array $field Field.
         *
         * @return string
         */
        public function get_field_variable_name($field) {}

        /**
         * Process field attributes into markup.
         *
         * @param array $field      Field.
         * @param array $attributes Field attributes.
         */
        public function process_html_attributes($field, &$attributes) {}

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
        public function render_field($field, $name = '') {}

        /**
         * Returns an underscore template for the field before and after elements.
         *
         * @param array $elements Render field after/before these elements.
         *
         * @return string
         */
        public function render_field_before_after_element($elements) {}

        /**
         * Returns an underscore template for the font select options settings.
         *
         * @param string $name        Field name.
         * @param string $id          Field id.
         * @param string $group_label Field group label.
         *
         * @return string
         */
        public function render_font_select($name, $id, $group_label) {}

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
        public function render_select($name, $options, $id = '', $class = '', $attributes = '', $field_type = '', $button_options = [], $default = '', $only_options = false) {}

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
        public function render_multiple_buttons($name, $options, $id = '', $class = '', $attributes = '', $value = '', $default = '') {}

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
        public function get_validation_attr_rules() {}

        /**
         * Get validation class name to use in underscore template.
         *
         * @return array
         */
        public function get_validation_class_rules() {}

        /**
         * Sorting options by priority.
         *
         * @param array $fields Fields.
         *
         * @return array
         */
        public function sort_fields($fields) {}

        /**
         * Return setting options markup.
         *
         * @return string
         */
        public function get_options() {}

        /**
         * Return children(general) setting options markup.
         *
         * @return string
         */
        public function children_settings() {}

        /**
         * Return add new item(module) text.
         *
         * @return mixed|string|null
         */
        public function add_new_child_text() {}

        /**
         * Wrap module settings underscore template.
         *
         * @param string $output Module template content.
         *
         * @return string
         */
        public function wrap_settings($output) {}

        /**
         * Wrap module template into validation form.
         *
         * @param string $output Module template.
         *
         * @return string
         */
        public function wrap_validation_form($output) {}

        /**
         * Get the module's props mapped to their default values.
         *
         * @since 3.1 Renamed from `get_shortcode_fields()` to `get_default_props()`.
         * @since 1.0
         *
         * @return array
         */
        public function get_default_props() {}

        /**
         * Get module data attributes.
         *
         * @return string
         */
        public function get_module_data_attributes() {}

        /**
         * Build underscore template for the module.
         *
         * @return string
         */
        public function build_microtemplate() {}

        /**
         * Generate gradient background.
         *
         * @param array $args Settings.
         *
         * @return string
         */
        public function get_gradient($args) {}

        /**
         * Get values for the rel attribute.
         *
         * @return array
         */
        public function get_rel_values() {}

        /**
         * Get rel attributes.
         *
         * @param string $saved_value Rel values.
         * @param bool   $add_tag     Whether to add rel attribute.
         *
         * @return string
         */
        public function get_rel_attributes($saved_value, $add_tag = true) {}

        /**
         * Get text orientation.
         *
         * @since 3.23 Add device and desktop default parameter to get responsive value.
         *
         * @param  string $device          Device name.
         * @param  string $desktop_default Default desktop value.
         * @return string                  RTL ready text alignment value.
         */
        public function get_text_orientation($device = 'desktop', $desktop_default = '') {}

        /**
         * Get text orientation class.
         *
         * @param bool $print_default Whether.
         *
         * @return string Text orientation class names.
         * @since  3.23 Generate text orientation classes for tablet and phone.
         */
        public function get_text_orientation_classname($print_default = false) {}

        /**
         * Intended to be overridden as needed.
         *
         * @return string
         */
        public function get_max_width_additional_css() {}

        /**
         * Get type of element
         */
        public function get_type() {}

        /**
         * Remove suffix of a string
         *
         * @param string $string    Input string.
         * @param string $separator Suffix to remove.
         *
         * @return string
         */
        public function remove_suffix($string, $separator = '_') {}

        /**
         * Determine field visibility against its dependency.
         *
         * @param array $field Field.
         *
         * @return bool
         */
        protected function _is_field_applicable($field) {}

        /**
         * Update global colors info to match replace with value.
         *
         * @since 4.9.0
         *
         * @return void
         */
        protected function _prepare_global_colors_info() {}

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
        protected function _remove_inactive_global_colors_module_info($gc_info, $global_colors) {}

        /**
         * Process global colors.
         * If there is a global color id need to be replaced, that is done here.
         *
         * @since 4.9.0
         *
         * @return void
         */
        public function process_global_colors() {}

        /**
         * Process the fields.
         *
         * @since 3.23 Add function to process advanced form field options set.
         *
         * @param  string $function_name String of the function_name.
         * @return void
         */
        public function process_additional_options($function_name) {}

        /**
         * Process inline fonts options into CSS style.
         *
         * @param string $fonts_list Font list.
         */
        public function process_inline_fonts_option($fonts_list) {}

        /**
         * Process advanced font styles.
         *
         * @since 3.23 Add support to generate responsive styles of font, text color, and text align.
         *           And also process styles of block elements sub options group.
         * @since 4.6.0 Add sticky style support
         *
         * @param string $function_name Module slug.
         */
        public function process_advanced_fonts_options($function_name) {}

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
        public function maybe_push_element_to_letter_spacing_fix_list($selector, $css_prefixes, $declaration, $default_letter_spacing) {}

        /**
         * Process background CSS styles.
         *
         * @since 3.23 Add responsive support.
         * @since 4.6.0 Add sticky style support.
         * @since 4.15.0 Use et_pb_background_options()->get_background_style() to process.
         *
         * @param string $function_name Module slug.
         */
        public function process_advanced_background_options($function_name) {}

        /**
         * Process margin and padding advanced css.
         *
         * @since 4.10.0
         *
         * @param string $function_name Module slug.
         */
        public function process_margin_padding_advanced_css($function_name) {}

        /**
         * Process text shadow options.
         *
         * @since 4.10.0
         *
         * @param string $function_name Module slug.
         */
        public function process_text_shadow($function_name) {}

        /**
         * Process advanced text options.
         *
         * @since 3.23 Add support to generate responsive styles of text orientation.
         *
         * @param string $function_name Module slug.
         */
        public function process_advanced_text_options($function_name) {}

        /**
         * Output border and border radius styling
         *
         * @param string $function_name Function name.
         *
         * @since 3.23 Add support to generate responsive styles of border styles and radii.]
         * @since 4.6.0 Add sticky style support.
         */
        public function process_advanced_borders_options($function_name) {}

        /**
         * Get active position locations.
         *
         * @return array
         */
        public function get_position_locations() {}

        /**
         * Set active position locations.
         *
         * @param string $locations Location name e.x center_center, top_left_is_default.
         */
        public function set_position_locations($locations) {}

        /**
         * Process transform options.
         *
         * @param string $function_name Function name.
         *
         * @since 4.6.0 Add sticky style support.
         */
        public function process_transform($function_name) {}

        /**
         * Process position options.
         *
         * @param string $function_name Module slug.
         */
        public function process_position($function_name) {}

        /**
         * Adds Filter styles to the page custom css code
         *
         * Wrapper for `generate_css_filters` used for module defaults
         *
         * @param string $function_name Module slug.
         *
         * @return string|void
         */
        public function process_advanced_filter_options($function_name) {}

        /**
         * Determine if max_width is used
         *
         * @since 4.10.0
         *
         * @param  string $slug Module slug.
         * @return bool
         */
        public function max_width_is_used($slug) {}

        /**
         * Process max width options
         *
         * @param string $function_name Function name.
         *
         * @since 4.6.0 Add sticky style support.
         */
        public function process_max_width_options($function_name) {}

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
        public function get_sticky_id($render_slug = '') {}

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
        public function process_sticky($render_slug) {}

        /**
         * Process scroll effects options.
         *
         * @param string $function_name Module slug.
         */
        public function process_scroll_effects($function_name) {}

        /**
         * Check if scroll effects is enabled.
         *
         * @param string $options Scroll options.
         *
         * @since 4.10.0
         */
        public function is_scroll_effects_enabled($options) {}

        /**
         * Process height options
         *
         * @param string $function_name Function name.
         *
         * @since 4.6.0 Add sticky style support.
         */
        public function process_height_options($function_name) {}

        /**
         * Process overflow options
         *
         * @param string $function_name Function name.
         *
         * @since 4.6.0 Add sticky style support.
         */
        public function process_overflow_options($function_name) {}

        /**
         * Determine if custom margin or padding is used.
         *
         * @since 4.10.0
         *
         * @return bool
         */
        public function custom_margin_is_used() {}

        /**
         * Determine if font options are being used.
         *
         * @since 4.10.0
         *
         * @param  string $slugs font option slugs.
         * @return bool
         */
        public function font_options_are_used($slugs) {}

        /**
         * Process margin options
         *
         * @param string $function_name Function name.
         *
         * @since 4.6.0 Add sticky style support
         */
        public function process_advanced_custom_margin_options($function_name) {}

        /**
         * Process mobile margin options into CSS style.
         *
         * @param string $function_name Module slug.
         * @param string $style_mobile  Style array.
         * @param string $css_element   CSS element selector.
         */
        public function process_advanced_mobile_margin_options($function_name, $style_mobile, $css_element) {}

        /**
         * Returns setting hover value if hover is enabled.
         *
         * @param string $option Option name.
         *
         * @return mixed|null
         */
        protected function get_hover_value($option) {}

        /**
         * Process advanced button options.
         *
         * @since 3.23 Add support to generate responsive styles of padding and button alignment.
         * @since 4.6.0 Add sticky style support.
         * @since 4.6.0 Background rendering is refactored; it now uses et_pb_background_options().
         *
         * @param string $function_name Module slug.
         */
        public function process_advanced_button_options($function_name) {}

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
        public function process_advanced_form_field_options($function_name) {}

        /**
         * Apply free form CSS.
         *
         * @param string $function_name Module slug.
         * @param string $css_string    CSS string.
         *
         * @return void
         */
        public function apply_free_form_css($function_name, $css_string) {}

        /**
         * Process custom css fields into CSS style.
         *
         * @param string $function_name Module slug.
         *
         * @return bool
         */
        public function process_custom_css_fields($function_name) {}

        /**
         * Process box shadow CSS styles.
         *
         * @since 3.23 Add responsive support. Pass device attributes and make sure no duplicate styles
         *           are rendered.
         * @since 4.6.0 Add sticky style support.
         *
         * @param string $function_name Module slug.
         */
        public function process_box_shadow($function_name) {}

        /**
         * Make Advanced Fields and Custom CSS Fields filterable.
         */
        public function make_options_filterable() {}

        /**
         * Disables wptexturize on the passed shortcode..
         *
         * @param array $shortcodes An array of shortcode names.
         *
         * @return array
         */
        public function disable_wptexturize($shortcodes) {}

        /**
         * Callback :: fix_wptexturized_scripts.
         *
         * @param array $matches Found matches.
         *
         * @return string|string[]
         */
        public function fix_wptexturized_script($matches) {}

        /**
         * Fix wptexturize ampersand bug.
         *
         * @param string $content Content.
         *
         * @return string|string[]|null
         */
        public function fix_wptexturized_scripts($content) {}

        /**
         * Callback :: Sort fields within tabs by priority.
         *
         * @param string $a Comparision field member.
         * @param string $b Comparision field string.
         *
         * @return int|lt
         */
        public static function compare_by_priority($a, $b) {}

        /**
         * Reorder toggles based on the priority with respect to manually ordered items with no priority
         *
         * @param array $toggles_array Toggles to reorder.
         *
         * @return array
         */
        public static function et_pb_order_toggles_by_priority($toggles_array) {}

        /**
         * Callback :: Sort modules alphabetically by name.
         *
         * @param string $a Comparision member string.
         * @param string $b Comparision member string.
         *
         * @return int|lt
         */
        public static function compare_by_name($a, $b) {}

        /**
         * Get total modules count.
         *
         * @param string $post_type Post type.
         *
         * @return int
         */
        public static function get_modules_count($post_type) {}

        /**
         * Get modules js array to use in backbone template.
         *
         * @param string $post_type Current post type.
         *
         * @return string
         */
        public static function get_modules_js_array($post_type) {}

        /**
         * Get all modules array.
         *
         * @param string $post_type     Post type.
         * @param bool   $include_child Whether to include childs.
         *
         * @return array
         */
        public static function get_modules_array($post_type = '', $include_child = false) {}

        /**
         * Get modules that does not support VB.
         *
         * @return array
         */
        public static function get_fb_unsupported_modules() {}

        /**
         * Get list of modules that has rich content option
         *
         * @since 3.18
         *
         * @return array
         */
        public static function get_has_content_modules() {}

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
        public static function get_parent_slugs_regex($post_type = 'page') {}

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
        public static function get_child_slugs_regex($post_type = 'page') {}

        /**
         * Get child module slugs.
         *
         * @param string $post_type Post type.
         *
         * @return array
         */
        public static function get_child_slugs($post_type) {}

        /**
         * Get row content module slugs. e.x et_pb_code
         *
         * @param string $post_type Post type.
         *
         * @return string
         */
        public static function get_raw_content_slugs($post_type) {}

        /**
         * Get the portion of templates for specified slugs.
         *
         * @param string $post_type   Post type.
         * @param array  $slugs_array Module slugs.
         *
         * @return array|string|void
         */
        public static function get_modules_templates($post_type, $slugs_array) {}

        /**
         * Output modules backbone templates.
         *
         * @param string $post_type  Post type.
         * @param int    $start_from Unused arg.
         * @param int    $amount     Unused arg.
         *
         * @return array
         */
        public static function output_templates($post_type = '', $start_from = 0, $amount = 999) {}

        /**
         * Get structure module slugs.
         *
         * @return array
         */
        public static function get_structure_module_slugs() {}

        /**
         * Get structure modules.
         *
         * @return array
         */
        public static function get_structure_modules() {}

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
        public static function get_modules($post_type = '', $type = '') {}

        /**
         * Get modules by fallback post type for disabled post type.
         *
         * @param string $type Module type.
         *
         * @return ET_Builder_Element[]|mixed
         */
        public static function get_custom_post_type_fallback_modules($type = 'parent') {}

        /**
         * Get all parent modules.
         *
         * @param string $post_type Current post type.
         *
         * @return mixed|void
         */
        public static function get_parent_modules($post_type = '') {}

        /**
         * Get all child modules.
         *
         * @param string $post_type Current post type.
         *
         * @return mixed|void
         */
        public static function get_child_modules($post_type = '') {}

        /**
         * Get woocommerce modules.
         *
         * @return mixed|void
         */
        public static function get_woocommerce_modules() {}

        /**
         * Get registered module icons
         *
         * @since 3.1
         *
         * @return array
         */
        public static function get_module_icons() {}

        /**
         * Get combined array of child and parent modules for provided post_type
         *
         * @param string $post_type Post type.
         *
         * @since 3.1
         *
         * @return array
         */
        public static function get_parent_and_child_modules($post_type = '') {}

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
        public static function get_module($slug, $post_type = 'post') {}

        /**
         * Outputs list of all module help videos array
         *
         * @since 3.1
         *
         * @return array
         */
        public static function get_help_videos() {}

        /**
         * Get list of modules with support of featured image as background.
         *
         * @param string $post_type Current post type.
         *
         * @return mixed|void
         */
        public static function get_featured_image_background_modules($post_type = '') {}

        /**
         * Get field group toggles.
         *
         * @param string $post_type Post type.
         *
         * @return array
         */
        public static function get_toggles($post_type) {}

        /**
         * Get setting modal tabs.
         *
         * @param string $post_type Current post type.
         *
         * @return array
         */
        public static function get_tabs($post_type = '') {}

        /**
         * Get permission options categories.
         *
         * @return array
         */
        public static function get_options_categories() {}

        /**
         * Get custom permission option categories.
         *
         * @param string $post_type Post type.
         *
         * @return array
         */
        public static function get_custom_options_categories($post_type = '') {}

        /**
         * Get all fields.
         *
         * @param string $post_type Post type.
         *
         * @return array
         */
        public static function get_all_fields($post_type = '') {}

        /**
         * Get general fields of modules.
         *
         * @param string $post_type   Post type.
         * @param string $mode        Modules Mode - Parent, Child and All.
         * @param string $module_type Module Slug.
         *
         * @return array|mixed
         */
        public static function get_general_fields($post_type = '', $mode = 'all', $module_type = 'all') {}

        /**
         * Get setting fields from custom tabs.
         *
         * @param string $post_type   Post type.
         * @param string $mode        Modules Mode - Parent, Child and All.
         * @param string $module_type Module Slug.
         *
         * @return array|mixed
         */
        public static function get_settings_modal_tabs_fields($post_type = '', $mode = 'all', $module_type = 'all') {}

        /**
         * Get child module titles.
         *
         * @param string $post_type Post type.
         *
         * @return array
         */
        public static function get_child_module_titles($post_type) {}

        /**
         * Get advanced fields.
         *
         * @param string $post_type   Post type.
         * @param string $mode        Whether modules are parent, child or all.
         * @param string $module_type Module slug.
         *
         * @return array|mixed
         */
        public static function get_advanced_fields($post_type = '', $mode = 'all', $module_type = 'all') {}

        /**
         * Get custom css fields.
         *
         * @param string $post_type   Post type.
         * @param string $mode        Whether modules are parent, child or all.
         * @param string $module_type Module slug.
         *
         * @return array|mixed
         */
        public static function get_custom_css_fields($post_type = '', $mode = 'all', $module_type = 'all') {}

        /**
         * Get modules i10n.
         *
         * @param string $post_type   Post type.
         * @param string $mode        Whether it is parent, child or all module.
         * @param string $module_type Module slug.
         *
         * @return array|mixed
         */
        public static function get_modules_i10n($post_type = '', $mode = 'all', $module_type = 'all') {}

        /**
         * Get CSS fields transition for module.
         *
         * @param string $post_type   Post type.
         * @param string $mode        Whether it is parent, child or all module.
         * @param string $module_type Module slug.
         *
         * @return array
         */
        public static function get_modules_transitions($post_type = '', $mode = 'all', $module_type = 'all') {}

        /**
         * Get module items configs.
         *
         * @param string $post_type Current post type.
         *
         * @return array
         */
        public static function get_module_items_configs($post_type) {}

        /**
         * Get combined array of parent and child modules fields.
         *
         * @param string $post_type Post type.
         * @param string $module    Parent module slug.
         *
         * @return array|bool
         */
        public static function get_module_fields($post_type, $module) {}

        /**
         * Get all fields of parent module.
         *
         * @param string $post_type Post type.
         * @param string $module    Module slug.
         *
         * @return bool
         */
        public static function get_parent_module_fields($post_type, $module) {}

        /**
         * Get all child module fields.
         *
         * @param string $post_type Post type.
         * @param string $module    Module slug.
         *
         * @return bool
         */
        public static function get_child_module_fields($post_type, $module) {}

        /**
         * Get parent module field.
         *
         * @param string $post_type Post type.
         * @param string $module    Module slug.
         * @param string $field     Field slug.
         *
         * @return bool|mixed
         */
        public static function get_parent_module_field($post_type, $module, $field) {}

        /**
         * Return font icon fields of all modules.
         *
         * @param string $post_type Current post type.
         *
         * @return array
         */
        public static function get_font_icon_fields($post_type = '') {}

        /**
         * Retrieves credits of custom modules for VB
         *
         * @param string $post_type Current post type.
         *
         * @return array of credits info by module slug
         */
        public static function get_custom_modules_credits($post_type = '') {}

        /**
         * Return media query key value pairs.
         *
         * @param bool $for_js Whether media queries is for js ETBuilderBackend.et_builder_css_media_queries variable.
         *
         * @return array|mixed|void
         */
        public static function get_media_quries($for_js = false) {}

        /**
         * Set media queries key value pairs.
         */
        public static function set_media_queries() {}

        /**
         * Return media query from the media query name.
         * E.g For max_width_767 media query name, this function return "@media only screen and ( max-width: 767px )".
         *
         * @param string $name Media query name e.g max_width_767, max_width_980.
         *
         * @return bool|mixed
         */
        public static function get_media_query($name) {}

        /**
         * Get style key.
         *
         * @return int|string
         */
        public static function get_style_key() {}

        /**
         * Return style array from {@see self::$internal_modules_styles} or {@see self::$styles}.
         *
         * @param bool $internal Whether to return style from internal modules styles.
         * @param int  $key      Style key.
         *
         * @return array|mixed
         */
        public static function get_style_array($internal = false, $key = 0) {}

        /**
         * Return style string from {@see self::$_free_form_styles}.
         *
         * @return string
         */
        public static function get_free_form_styles() {}

        /**
         * Intended to be used for unit testing
         *
         * @intendedForTesting
         */
        public static function reset_styles() {}

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
        public static function get_style($internal = false, $key = 0, $critical = false) {}

        /**
         * Generate video background markup for columns.
         *
         * @param array $args             Background values.
         * @param array $conditional_tags Conditional tags.
         * @param array $current_page     Current page info.
         *
         * @return bool|mixed
         */
        public static function get_column_video_background($args = [], $conditional_tags = [], $current_page = []) {}

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
        public static function get_video_background($args = [], $conditional_tags = [], $current_page = []) {}

        /**
         * Clean the styles array {@see self::$internal_modules_styles}.
         *
         * @param bool $need_internal_styles Set the flag to make sure new styles will be saved to the correct place.
         */
        public static function clean_internal_modules_styles($need_internal_styles = true) {}

        /**
         * Set the field dependencies based on the `show_if` or `show_if_not` key from the
         * field.
         *
         * @param string $slug       The module's slug. ie `et_pb_section`.
         * @param string $field_id   The field id. id `background_color`.
         * @param array  $field_info Associative array of the field's data.
         */
        protected static function set_field_dependencies($slug, $field_id, $field_info) {}

        /**
         * Get all modules fields dependencies.
         *
         * @param string $post_type Post type.
         *
         * @return array
         */
        public static function get_field_dependencies($post_type) {}

        /**
         * Set module style.
         *
         * @param string $function_name Module slug.
         * @param array  $style         Style array.
         */
        public static function set_style($function_name, $style) {}

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
        protected static function _is_style_processor_allowed($processor) {}

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
        public function generate_styles($args = []) {}

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
        public function generate_declaration($css_property, $value = '', $important = false, $additional_css = '') {}

        /**
         * Applies the responsive and hover style for a specified option
         *
         * @since 3.25.3
         *
         * @param string $option   Setting option.
         * @param string $selector CSS Selector.
         * @param string $css_prop CSS property.
         */
        public function generate_responsive_hover_style($option, $selector, $css_prop) {}

        /**
         * Set module style.
         *
         * @param string $function_name Module slug.
         * @param array  $style         Style array.
         */
        protected static function _set_style($function_name, $style) {}

        /**
         * Set free form module style.
         *
         * @param string $style Style string.
         */
        protected static function _set_free_form_style($style, $reset = false) {}

        /**
         * Return module order class.
         *
         * @param string $function_name Module slug.
         *
         * @return bool|string
         */
        public static function get_module_order_class($function_name) {}

        /**
         * Set module order class.
         *
         * @param string $function_name Module slug.
         */
        public static function set_order_class($function_name) {}

        /**
         * Add a modal order class e.g et_pb_section_0, et_pb_section_1.
         *
         * @param string $module_class  Module class e.g  et_pb_section_.
         * @param string $function_name Module slug.
         *
         * @return string
         */
        public static function add_module_order_class($module_class, $function_name) {}

        /**
         * Generate video background markup.
         *
         * @since 3.23 Add support for responsive settings.
         *
         * @param  array  $args      Background values.
         * @param  string $base_name Background base name.
         * @return string            Video background string value.
         */
        public function video_background($args = [], $base_name = 'background') {}

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
        public function get_parallax_image_background($base_name = 'background', $props = []) {}

        /**
         * Check if filters are used in a module.
         *
         * @since  4.10.0
         * @return bool Use of filter.
         */
        public function are_filters_used() {}

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
        public function generate_css_filters($function_name = '', $prefix = '', $selectors = array('%%order_class%%')) {}

        /**
         * Convert classes array to a string. Also removes any duplicate classes
         *
         * @param array $classes A list of CSS classnames.
         *
         * @return array
         */
        public function stringify_css_filter_classes($classes) {}

        /**
         * Adds a suffix at the end of the selector
         * E.g: add_suffix_to_selectors(':hover', '%%order_class%%% .image') >>> '%%order_class%%% .image:hover'
         *
         * @param string $suffix   e.g ':hover'.
         * @param string $selector CSS selector.
         *
         * @return string
         */
        public function add_suffix_to_selectors($suffix, $selector) {}

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
        public function add_hover_to_selectors($selector) {}

        /**
         * Adds `:hover` in selector at the end of the selector if $add_hover is true
         * otherwise returns the original selector
         *
         * @param string $selector  CSS selector.
         * @param bool   $add_hover Whether to add hover on selector.
         *
         * @return string
         */
        protected function _maybe_add_hover_to_selectors($selector, $add_hover = false) {}

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
        public function add_hover_to_order_class($selector) {}

        /**
         * Adds `:hover` to order class only if is specified, in other cse returns original selector
         * otherwise returns the original selector
         *
         * @param string $selector  CSS selector.
         * @param bool   $add_hover Whether to add hover on selector.
         *
         * @return string
         */
        protected function _maybe_add_hover_to_order_class($selector, $add_hover = false) {}

        /**
         * Convert smart quotes and &amp; entity to their applicable characters
         *
         * @param string $text Input text.
         *
         * @return string
         */
        public static function convert_smart_quotes_and_amp($text) {}

        /**
         * Process multiple checkbox field value.
         *
         * @param array  $value_map Checkbox value map.
         * @param string $value     Checkbox value.
         *
         * @return string
         */
        public function process_multiple_checkboxes_field_value($value_map, $value) {}

        /**
         * Adds one or more CSS classes to the module on the frontend.
         *
         * @since 3.1
         *
         * @param string|array $to_add   classname(s) to be added.
         * @param number|bool  $position position of added classname (0-based). Some class need to be placed
         *                               at exact position. i.e. .et_pb_column_{$type} on column inner.
         */
        public function add_classname($to_add, $position = false) {}

        /**
         * Removes one ore more CSS classes to the module on the frontend
         *
         * @since 3.1
         *
         * @param string|array $to_remove classname(s) to be removed.
         */
        public function remove_classname($to_remove) {}

        /**
         * Outputs module class
         *
         * @param string $function_name Module slug.
         *
         * @since 3.1
         *
         * @return string escaped class
         */
        public function module_classname($function_name = '') {}

        /**
         * Outputs module id
         *
         * @since 3.1
         *
         * @param bool $include_attribute wrap module id with id attribute name or not (to be used directly on module div).
         *
         * @return string module id / module id wrapped by id attribute
         */
        public function module_id($include_attribute = true) {}

        /**
         * Helper method for rendering button markup which works compatible with advanced options' button
         *
         * @since 3.1
         *
         * @param array $args button settings.
         *
         * @return string rendered button HTML
         */
        public function render_button($args = []) {}

        /**
         * Determine builder module is saving cache.
         *
         * @return mixed|void
         */
        public static function is_saving_cache() {}

        /**
         * Get array of attributes which have dynamic content enabled.
         *
         * @since 3.17.2
         *
         * @param mixed[] $attrs Module attributes.
         *
         * @return string[]
         */
        protected function _get_enabled_dynamic_attributes($attrs) {}

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
        protected function _is_dynamic_value($attribute, $value, $enabled_dynamic_attributes) {}

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
        protected function _encode_legacy_dynamic_content($attrs, $enabled_dynamic_attributes) {}

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
        protected function _encode_legacy_dynamic_content_value($field, $value, $enabled_dynamic_attributes) {}

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
        protected function _resolve_value($post_id, $field, $value, $enabled_dynamic_attributes, $serialize) {}

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
        protected function _resolve_value_from_json($field, $value, $enabled_dynamic_attributes) {}

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
        protected function _esc_attr($attribute, $html = 'none', $predefined_value = null) {}

        /**
         * Get the current TB layout ID if we are rendering one or the current post ID instead.
         *
         * @since 4.0
         * @since 4.14.8 Get WP Template ID if we are rendering Divi Builder block in template.
         *
         * @return integer
         */
        public static function get_layout_id() {}

        /**
         * Get the current theme builder layout.
         * Returns 'default' if no layout has been started.
         *
         * @since 4.0
         *
         * @return string
         */
        public static function get_theme_builder_layout_type() {}

        /**
         * Check if a module is rendered as normal post content or theme builder layout.
         *
         * @since 4.0
         *
         * @return bool
         */
        public static function is_theme_builder_layout() {}

        /**
         * Get the current theme builder layout id.
         * Returns 0 if no layout has been started.
         *
         * @since 4.0
         *
         * @return integer
         */
        public static function get_theme_builder_layout_id() {}

        /**
         * Begin a theme builder layout.
         *
         * @since 4.0
         *
         * @param integer $layout_id Layout post id.
         *
         * @return void
         */
        public static function begin_theme_builder_layout($layout_id) {}

        /**
         * End the current theme builder layout.
         *
         * @since 4.0
         *
         * @return void
         */
        public static function end_theme_builder_layout() {}

        /**
         * Get the order class suffix for the current theme builder layout, if any.
         *
         * @since 4.0
         *
         * @return string
         */
        protected static function _get_theme_builder_order_class_suffix() {}

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
        public static function begin_wp_editor_template($template_id) {}

        /**
         * End Divi Builder block output on WP Editor template.
         *
         * @since 4.14.8
         *
         * @return void
         */
        public static function end_wp_editor_template() {}

        /**
         * Whether a module is rendered in WP Editor template or not.
         *
         * @since 4.14.8
         *
         * @return bool WP Editor template status.
         */
        public static function is_wp_editor_template() {}

        /**
         * Get the current WP Editor template id.
         *
         * Returns 0 if no template has been started.
         *
         * @since 4.14.8
         *
         * @return integer Template post ID (wp_id).
         */
        public static function get_wp_editor_template_id() {}

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
        public static function get_wp_editor_template_type($is_id_needed = false) {}

        /**
         * Get the order class suffix for the current WP Editor template, if any.
         *
         * @since 4.14.8
         *
         * @return string Order class suffix.
         */
        protected static function _get_wp_editor_order_class_suffix() {}

        /**
         * Convert field name into css property name.
         *
         * @param string $field Field name.
         *
         * @return string|string[]
         */
        protected function field_to_css_prop($field) {}

        /**
         * Initialize Modules Cache.
         *
         * @since 3.24
         */
        public static function init_cache() {}

        /**
         * Get Modules cache file name.
         *
         * @param mixed $post_type When set to `false`, autodetect.
         *
         * @since 3.24
         *
         * @return bool|mixed|string
         */
        public static function get_cache_filename($post_type = false) {}

        /**
         * Get Module cache file name's id.
         *
         * @since 3.28
         *
         * @param mixed $post_type When set to `false`, autodetect.
         *
         * @return bool|string
         */
        public static function get_cache_filename_id($post_type = false) {}

        /**
         * Save the builder module caache.
         */
        public static function save_cache() {}

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
        protected function render_image($image_props, $image_attrs_raw = [], $echo = true, $disable_responsive = false) {}

        /**
         * Get advanced field settings exposed for layout block preview
         *
         * @since 4.3.2
         *
         * @return array
         */
        public static function get_layout_block_assistive_settings() {}

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
        protected static function contains($content, $module_slugs) {}

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
        public static function module_contains($content, $module_slugs) {}

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
        public static function background_field_template($field_template, $overrides = [], $unsets = []) {}

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
        public function background_pattern($args = [], $base_name = 'background') {}

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
        public static function get_component_before_after_module($module_slug, $module_data) {}

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
        protected function is_loading_vb_data() {}

        /**
         * Determine if current request is BB Data Request by checking $_POST['action'] value
         *
         * @deprecated {@see et_builder_is_loading_bb_data()}
         *
         * @since 4.0.7 Deprecated.
         *
         * @return bool
         */
        protected function is_loading_bb_data() {}
    }
}
