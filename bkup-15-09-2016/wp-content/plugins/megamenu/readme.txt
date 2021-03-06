=== Max Mega Menu ===
Contributors: megamenu
Tags: menu, megamenu, mega menu, navigation, widget, dropdown menu, drag and drop, mobile, responsive, retina, theme editor, widget, shortcode, sidebar, icons, dashicons
Requires at least: 3.8
Tested up to: 4.5
Stable tag: 2.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easy to use drag & drop WordPress Mega Menu plugin. Create Mega Menus using Widgets. Responsive, retina & touch ready.

== Description ==

WordPress Mega Menu Plugin. Create widgetized mega menus using the built in visual mega menu builder.

https://www.youtube.com/watch?v=44dJwP1AXT8

Documentation & Demo: https://www.maxmegamenu.com

###Features:

* Drag & drop Mega Menu builder
* Display WordPress Widgets in your menu
* Built in theme editor with 100+ customisation options
* Supports Flyout (traditional) or Mega Menu sub-menu styles
* Hover Intent or click event to open menus
* Fade or Slide transitions
* Add icons to menu items
* 'Hide Text' and 'Disable Link' options per menu item
* Align menu items to the left or right of the menu bar
* Align sub menus to left or right of parent menu item
* Supports multiple menus each with their own configuration
* Responsive, Touch & Retina Ready
* Tested in all modern browsers
* Clean code with a low memory footprint
* Valid CSS3 with no !important or inline CSS styles
* In depth documentation
* Basic Support

####Pro Features:

> * Sticky Menu
> * Vertical Menus
> * Accordion Menus
> * FontAwesome, Genericon & Custom Icons
> * Custom Item Styling
> * Menu Logo
> * Search box
> * WooCommerce & EDD support
> * Google Fonts
> * Roles & Restrictions
> * Search, icon and logo mobile toggle blocks
> * Automatic updates
> * Priority Support
>
> Find out more: https://www.maxmegamenu.com/upgrade/

Translations:

* Italian (thanks to aeco)
* German (thanks to Thomas Meyer & dirk@d10n)
* French (thanks to Pierre_02)

== Frequently Asked Questions ==

Troubleshooting:

https://www.maxmegamenu.com/documentation/troubleshooting/

Getting started:

https://www.maxmegamenu.com/documentation/getting-started/installation/

Not working with your theme?
Mobile menu not working?
Multiple mobile menu toggle icons?

https://www.maxmegamenu.com/documentation/faqs/removing-residual-styling/

== Installation ==

1. Go to the Plugins Menu in WordPress
1. Search for "Max Mega Menu"
1. Click "Install"

https://www.maxmegamenu.com/documentation/getting-started/installation/

== Screenshots ==

See https://www.maxmegamenu.com for more screenshots

1. New menu changes
2. Drag and Drop widget editor for each menu item
3. Front end: Mega Menu
4. Front end: Flyout Menu
5. Back end: Use the theme editor to change the appearance of your menus

== Changelog ==

= 2.2.3 [15/08/2016] =

* Fix: Mega sub menus not correctly closed on mobile when effect is set to Fade
* Fix: Cursor styling for disabled links
* Fix: Apply animation to closing sub menus
* Fix: Bring megamenu button forward on nav-menus page
* Fix: Replace deprecated jQuery 'addSelf' with 'andBack'
* Improvement: Theme Editor usability. Add color pallete to color picker. Add Copy Color option
* Improvement: Only prompt for SCSS compilation when current CSS is outdated
* Change: Indicate whether style.css file was generated from core or custom version of megamenu.scss

= 2.2.2 [21/07/2016] =

* Fix: Save button missing from menu locations
* Fix: Compatibility with 'Profit Builder' plugin
* Fix: Remove outline from mobile toggle
* Fix: Make mobile toggle blocks editable as soon as they're added to the toggle block designer
* Change: Refactor detection of mega menu type submenus

= 2.2.1 =

* Fix: Self closing div tag in toggle blocks
* Fix: Mobile Menu Background / Conflict with MaxButtons

= 2.2 =

* New feature: CSS3 dropdown animations
* New feature: Animation speed setting
* New Feature: Accessibility (allow tab navigation of menus)
* Improvement: Load widgets.php scripts on nav-menus.php page to improve widget compatibility
* Improvement: Remove upgrade nags from icons tab
* Improvement: Add search to icons
* Improvement: Preselect last edited theme in theme editor
* Improvement: Only allow widget titles to be dragged in menu builder
* Improvement: Add 'Mobile menu background' and 'Disable mobile toggle' settings to theme editor
* Fix: Move toggle block IDs to classes to avoid validation errors
* Fix: Replace deprecated jQuery 'live' function calls with 'on'
* Fix: select2.png 404 in admin
* Fix: Reinstate icon margin on sub menu items when parent item has 'Hide text' enabled
* Fix: Active menu item border color
* Fix: Third level menu item visibility when JS is disabled
* Fix: Compatibility with Conditional Menus
* Fix: Compatibility with WordFence
* Fix: Compatibility with Image Widget Deluxe
* Fix: Widget titles wrapping onto two lines in mega menu builder
* Fix: Admin elements disappearing randomly in webkit browsers
* Change: Reset Widget Styling theme option - default changed from 'On' to 'Off'

= 2.1.5 [13/04/2016] =

* Change: Allow "Hide Text" option to be used on second level menu items

= 2.1.4 [11/04/2016] =

* Fix for WordPress v4.5: Unable to save mega menu settings on Appearance > Menus page
(Works around this change to core: https://core.trac.wordpress.org/changeset/36426)
* Change: Allow textarea fields in toggle blocks
* Change: Remove margin from Spacer toggle blocks

= 2.1.3 [21/03/2016] =

* Fix: JSON Theme Export
* Fix: "Output in <head>" CSS option edgecase (not working when the static CSS file exists but is not writable)
* Change: Don't apply Menu Padding theme setting to mobile menu (revisited - using a different method used to allow desktop padding to still be overridden in Custom Styling area)

= 2.1.2 [15/03/2016] =

* New feature: Mobile Toggle bar height setting added
* Fix: CSS "Don't output CSS" setting
* Change: Don't apply Menu Padding theme setting to mobile menu

= 2.1.1 [14/03/2016] =

* Fix: PHP Warnings
* Fix: SCSS variable doesn't exist warning
* Change: Reverse right aligned menu items in the mobile menu on window resize instead of reload
* Change: Some updates to the mobile toggle designer to ease extending the functionality with filters

= 2.1 [14/03/2016] =

* New Feature: Drag and drop designer for the mobile toggle bar
* Fix: WPML Language switcher flags
* New Feature: Export menu theme in PHP format (for inclusion in a functions.php file)
* Change: Remove CSS Enqueue via admin-ajax.php option due to slow performance

= 2.0.1 [07/01/2016] =

* Fix: Typos in the Theme Editor
* Fix: CSS Compilation Failed error for Helping Hands (and possibly other themes)
* Fix: Regenerate CSS after clearing cache to fix a conflict with caching plugins - ensure style.css always exists
* Fix: Enqueue menu CSS before the theme CSS, as it was pre 2.0
* Change: Theme Editor accordion open by default (to avoid JS conflicts which make it impossible to open the closed panels)
* Change: Admin Styling toned down
* Change: Hide mobile sub menu option moved to "Sub Menu Options" section
* New Feature: Sub Menu Inner Width setting added
* Improvement: Update Dashicons

= 2.0 [28/12/2015] =

* New feature: Allow second level menu items and widgets to be placed on the same row/mixed together within mega menus
* New feature: Mobile Styling options added to theme editor
* Improvement: Styling updated throughout
* Improvement: Theme Editor accordionised
* Improvement: Move JS to footer, unbind previously binded events from menu (for improved theme compatibility)
* Improvement: Basic validation added to Theme Editor
* New feature: Hide on mobile, Hide on desktop and Hide submenu on mobile options added
* Improvement: Display column count on widgets within the mega menu builder
* Fix: Getting started message displayed every time plugin is deactivated/activated
* Improvement: Clear cache nag now clears the cache instead of taking user to the Tools page
* Fix: Polylang fixes
* Improvement: Getting started link takes user to menus page and highlights mega menu options
* Improvement: Dropdown theme selector now displays which menu locations the theme is applied to

= 1.9.1 [20/10/2015] =

* New feature: Reverse the order of right aligned menu items on mobiles (so they appear in the same order as they do in the desktop menu)
* Fix: Remove Modernizr support - causing conflicts with some themes
* Fix: Collapsing of open flyout menus
* Fix: Active link styling not being applied to top level menu items when sub menus are open
* Fix: Polylang language switcher added to menu each time the Mega Menu settings are saved
* Fix: Polylang fixes

= 1.9 [14/09/2015] =

* New feature: WPML Support
* New feature: Polylang Support
* New feature: Added 'Reset Widget Styling' option to theme editor
* New feature: Page Builder by Site Origin support (Layout Builder widget now works within Mega Menus)
* Change: Remove Appearance > Max Mega Menu redirect
* Change: Update touch detection method. Use Modernizr if available.
* Change: Make hoverintent interval filterable
* Change: Refactor JS
* Change: Allow animation speeds to be changed using filters
* Fix: Unable to uncheck checkboxes in menu themes
* Fix: Compatibility with Pinboard Theme (dequeue colorbox)
* Fix: Mobile Second Click option reverts to default
* Fix: Fix initial fade in animation
* Fix: Sub menus within megamenus collapsing when Effect is set to 'Slide'

= 1.8.3.2 [30/07/2015] =

* Fix: Conflict with Add Descendents as Sub Menu Items plugin, where items are added resulting in an unordered list of menu items

= 1.8.3.1 [30/07/2015] =

* Fix: Conflict with Add Descendents as Sub Menu Items plugin, where items are added to the menu and given a menu_item_parent ID of an item that doesn't exist in the menu

= 1.8.3 [28/07/2015] =

* New feature: Add accordion style mobile menu option
* New feature: French Language pack added (thanks to Pierre_02!)
* Change: Check MMM is enabled for the menu before enabling the Mega Menu button on each menu item
* Change: Add '300' and 'inherit' options to font weight, add 'megamenu_font_weights' filter
* Change: Move mega menu settings page from under Appearance to it's own Top Level menu item (since the plugin options are no longer purely appearance related)
* Fix: Second row menu items not correctly being forced onto a new line
* Fix: PHP warning when widget cannot be found (due to being uninstalled)
* Fix: Remove borders and excess padding from mobile menu (regardless of theme settings)
* Fix: Inability to undisable links on second level menu items
* Fix: Fix theme export/import when custom CSS contains double quotes
* Fix: Compatibility fix for SlideDeck Pro
* Fix: Compatibility fix for TemplatesNext Toolkit
* Fix: Widget title widths in mega menu editor
* Fix: IE9 blue background when semi transparent colors are selected in the theme editor

= 1.8.2 =

* Fix: PHP Warning preventing mega menu settings from loading

= 1.8.1 =

* Change: Add filters for before_title, after_title, before_widget, after_widget
* Change: Add widget classes to menu list items
* Fix: Detect protocol when enqueueing CSS file from FS
* Fix: Compatibility with WP Widget Cache
* Change: Convert 'enable mega menu' checkbox into a select for clarity

= 1.8 =

* New Feature: Menu Theme Import/Export
* New Feature: Create extra menu locations for use in shortcodes & the MMM widget
* Fix: Compatibility with Black Studio TinyMCE widget
* Fix: Save spinners not appearing in WordPress 4.2
* Fix: Empty mega menu settings lightbox (caused by conflicting plugins outputting PHP warnings)
* Fix: Incompatibility with Ultimate Member
* Fix: Icon colours in Advada Theme
* Change: Default CSS Output set to Filesystem
* Add max_mega_menu_is_enabled function for easier theme integration

= 1.7.4 =

* New Feature: Max Mega Menu widget to display a menu location within a sidebar
* Fix: Another Suffusion theme conflict (nested UL menus set to visibility: hidden)
* Improvement: Add :focus states

= 1.7.3.1 =

* Fix: A CSS conflict with Suffusion theme (and possibly others) which was uncovered in v1.7.3

= 1.7.3 =

* Theme Editor enhancements: Add hover transition option, second and third level menu item styling, top level menu item border, flyout menu item divider, widget title border & margin settings
* Fix: Apply hover styling to menu items when the link is hovered over (not the list item containing the link)
* Change: Use visibility:hidden instead of display:none to hide sub menus (for compatibility with Google Map widgets)
* Change: Disable automatic regeneration of CSS after update and install, prompt user to manually regenerate CSS instead

= 1.7.2 =

* Fix: Fire open and close_panel events after the panel has opened or closed
* Refactor: Build list of SCSS vars using an array
* Refactor: Use wp_send_json instead of wp_die to return json
* Refactor: Build URLs using add_query_var (WordPress Coding Standards)
* New feature: Add dropdown shadow option to theme editor

= 1.7.1 =

* Fix: Regenerate CSS on upgrade
* Fix: Mobile toggle on Android 2.3
* Fix: Error when switching themes (when CSS output is set to "save to filesystem")

= 1.7 =

* Fix: Apply sensible defaults to responsive menu styling regardless of menu theme settings
* Fix: Allow underscores and spaces in theme locations without breaking CSS
* Fix: Reset widget selector after selecting a widget
* Change: CSS3 checkbox based responsive menu toggle replaced with jQuery version (for increased compatibility with themes)
* Change: Front end JavaScript refactored
* Change: Leave existing sub menus open when opening a new sub menu on mobiles
* New feature: New option added for CSS Output: Output/save CSS to uploads folder
* New feature: Add text decoration option to fonts in theme editor
* New feature: Allow jQuery selector to be used as the basis of the mega menu width
* New feature: Add menu items align option to theme editor
* New feature: Add hightlight selected menu item option to theme editor
* New feature: Add flyout border radius option to theme editor
* New feature: Add menu item divider option to theme editor
* New feature: Add second click behaviour option to general settings

= 1.6 =

* Fix: responsive collapse menu
* Fix: checkbox appearing on Enfold theme

= 1.6-beta =

* Change: Menu ID removed from menu class and ID attributes on menu wrappers. E.g. "#mega-menu-wrap-primary-2" will now be "#mega-menu-wrap-primary", "#mega-menu-primary-2" will now be "#mega-menu-primary".
* Fix: Polylang & WPML compatibility (fixed due to the above)
* Fix: Multi Site support (mega menu settings will need to be reapplied in some cases for multi site installs)
* Fix: Remove jQuery 1.8 dependency
* Change: Theme editor slightly revised

= 1.5.3 =

* Fix: Widget ordering bug when mega menu contains sub menu items (reported by & thanks to: milenasmart)
* Misc: Add megamenu_save_menu_item_settings action

= 1.5.2 =

* Feature: Responsive menu text option in theme editor
* Fix: Bug causing menu item to lose checkbox settings when saving mega menu state
* Fix: Mobile menu items disappearing
* Change: Refactor public js
* Change: jQuery actions fired on panel open/close
* Change: Tabify icon options
* Change: Show 'up' icon when mobile sub menu is open
* Change: Make animations filterable
* Change: Add filter for SCSS and SCSS vars
* Change: Add filter for menu item tabs
* Update: Update german language files (thanks to dirk@d10n)

= 1.5.1 =

* Fix: Bug causing menu item to lose checkbox settings when saving icon

= 1.5 =

* New feature: Change number of columns to use in Mega Menus (per menu item)
* New feature: Define how many columns each second level menu items should take up
* New feature: Hide menu item text
* New feature: Hide menu item arrow indicator
* New feature: Disable menu item link
* New feature: Align menu item
* Fix: Allow css to be cached when menu is not found
* Fix: Apply inline-block styling to second level menu items displayed in Mega Menu
* Fix: AJAX Error when widgets lack description (reported by and thanks to: novlenova)
* Improvement: Refactor extraction and setting of menu item settings

= 1.4 =

* Update: Admin interface improvements
* New feature: CSS Output options

= 1.3.3 =

* Fix: theme warnings (thanks to armandsdz!)
* Update: compatibile version number updated to 4.1

= 1.3.2 =

* Theme Editor restyled
* Fix: Flyout menu item height when item wraps onto 2 lines
* Fix: Add indentation to third level items in mega panel

= 1.3.1 =

* Fix secondary menu bug
* Add option to print CSS to <head> instead of enqueuing as external file

= 1.3 =

* maxmenu shortcode added. Example: [maxmenu location=primary]
* 'megamenu_after_install' and 'megamenu_after_upgrade' hooks added
* 'megamenu_scss' hook added
* Fix: CSS automatically regenerated after upgrade
* Fix: Don't override the echo argument for wp_nav_menu
* Fix: Theme duplication when default theme has been edited
* Change: CSS cache set to never expire
* Added import SCSS import paths
* German Translations added (thanks to Thomas Meyer)

= 1.2.2 =

* Add support for "click-click-go" menu item class to follow a link on second click
* Remove widget overflow

= 1.2.1 =

* Fix IE11 gradients
* Fix hover bug introducted in 1.2

= 1.2 =

* Less agressive cache clearing
* Compatible with Nav Menu Roles
* UX improvements for the panel editor
* Hover effect on single items fixed
* JS cleaned up

= 1.1 =

* Added Fade and SlideDown transitions for panels
* Added panel border, flyout border & panel border radius settings
* JavaScript tidied up
* Ensure hoverIntent is enqueued before Mega Menu

= 1.0.4 =

* Italian translation added. Thanks to aeco!

= 1.0.3 =

* Add Panel Header Font Weight theme setting
* Allow semi transparent colors to be picked

= 1.0.2 =

* Update minimum required WP version from 3.9 to 3.8.

= 1.0.1 =

* Fix PHP Short Tag (thanks for the report by polderme)

= 1.0 =

* Initial version

== Upgrade Notice ==
