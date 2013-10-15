=== oik-css ===
Contributors: bobbingwide
Donate link: http://www.oik-plugins.com/oik/oik-donate/
Tags: shortcode, CSS, GeSHi, [bw_css], [bw_geshi], oik, lazy, smart
Requires at least: 3.5
Tested up to: 3.6.1
Stable tag: 0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Allows internal CSS styling to be included in the content of the page.

Use the [bw_css] shortcode to add custom CSS as and when you need it.

For designers, developers and documentors [bw_css] supports echoing of the custom CSS, allowing you to document the CSS you are using.
For readability, the CSS is processed using the Generic Syntax Highlighter (GeSHi) processing.

Use the [bw_geshi] shortcode for syntax highlighting of: CSS, HTML(5), JavaScript and jQuery, and PHP. 

Implemented as a lazy smart shortcode this code is dependent upon the oik base plugin.

== Installation ==
1. Upload the contents of the oik-css plugin to the `/wp-content/plugins/oik-css' directory
1. Activate the oik-css plugin through the 'Plugins' menu in WordPress
1. Use the [bw_css] shortcode inside your content

== Frequently Asked Questions ==
= What is the syntax? =
`
[bw_css] your CSS goes here [/bw_css] 
`

Note: The ending shortcode tag [/bw_css] is required

= How do I get the GeSHi output? =
Either
`
[bw_css .] your CSS goes here[/bw_css]
`

or
`
[bw_css text="Annotation to the CSS that will follow"] your CSS goes here[/bw_css]
`

= How do I get GeSHi output for other languages? =

Use the [bw_geshi] shortcode.
e.g. 
[bw_geshi html]&lt;h3&gt;[bw_css] and [bw_geshi]&lt;/h3&gt;&lt;p&gt;Cool, lazy smart shortcodes from oik-plugins.&lt;/p&gt;
[/bw_geshi]

Supported languages are: 
* CSS 
* HTML(5)
* JavsScript and jQuery 
* PHP

If you want to display syntax highlighted CSS without affecting the current display use [bw_geshi css]


= What version of GeSHi does oik-css use? =
oik-css delivers a subset of GeSHi version 1.0.8.11, which was the current release on 2013/07/09

Only a small selection of the languages are supported by oik-css. These are the languages primarily used by WordPress.

Note: oik-css will only load the GeSHi code if it is not already loaded.

== Screenshots ==
1. [bw_css] - syntax and examples
2. [bw_geshi] - examples 

== Upgrade Notice ==
= 0.2 =
Dependent upon the oik base plugin v2.0 (or higher)

= 0.1 =
Dependent upon the oik base plugin 

== Changelog == 
= 0.2 = 
* Added: [bw_geshi] GeSHi processing, but only providing support for: CSS, jQuery, JavaScript, PHP and HTML5.
* Added: Help, syntax help and example for [bw_geshi]

= 0.1 =
* Added: [bw_css] shortcode

== Further reading ==
If you want to read more about the oik plugins then please visit the
[oik plugin](http://www.oik-plugins.com/oik) 
**"the oik plugin - for often included key-information"**

