=== A2 Optimized WP ===
Contributors: A2BCool, a2hosting
Tags: Speed, Optimize, Secure, Fast, W3 Total Cache, W3TC, Hosting
Requires at least: 3.5
Tested up to: 4.3.1
Stable tag: 4.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Make your site faster and more secure with the click of a few buttons

== Description ==

A2 Optimized is designed to make it *quick and easy* to *speed up* and secure your website by installing
and configuring several well known, stable plugins with the click of a few buttons.

**Have you ever tried to configure *W3 Total cache* and got lost in the mess of configuration pages?**

A2 Optimized has broken it down into the most valuable optimizations and will automatically configure
W3 Total Cache for what works best in most shared hosting environments.


= Free Optimizations =

**Caching with W3 Total Cache**:

* Enable Page, Object and Database caching with W3 Total cache in one click.
* Page Caching stores full copies of pages on the disk so that php code and database queries can be skipped by the web server.
* Object Caching stores commonly used elements such as menus / widgets and forms on disk or in memory to speed up page rendering.
* Database cache stores copies of common database queries on disk or in memcory to speed up page rendering.

**Minify HTML Pages**:

* Auto Configure W3 Total Cache to remove excess white space and comments from html pages to compress their size.
* This provides for minor imporvements in page load time.

**Minify CSS Files**:

* Auto Configure W3 Total Cache to condense CSS files into non human-readable compressed files.
* Combines multiple css files into a single download.
* Can provide significant speed imporvements for page loads.

**Minify JS Files**:

* Auto Configure W3 Total Cache to condense JavaScript files into non human-readable compressed files.
* Combines multiple js files into a single download.
* Can provide significant speed imporvements for page loads.

**Gzip Compression**:

* Turns on gzip compression using W3 Total Cache.
* Ensures that files are compressed before transfering them.
* Can provide significant speed imporvements for page loads.
* Reduces bandwidth required to serve web pages.

**Deny Direct Access to Configuration Files and Comment Form**:

* Enables WordPress hardening rules in .htaccess to prevent browser access to certain files.
* Prevents bots from submitting to comment forms.
* Note: Turn this off if you use systems that post to the comment form without visiting the page.

**Lock Editing of Plugins and Themes from the WP Admin**:

* Turns off the file editor in the wp-admin.
* Prevents plugins and themes from being tampered with from the wp-admin.

= A2 Hosting Exclusive Optimizations =

**These one-click optimizations are only available while hosted at A2 Hosting.**

**Login URL Change**:

* Move the login page from the default wp-login.php to a random URL.
* Prevents bots from automatically brute-force attacking wp-login.php

**reCAPTCHA on comments and login**:

* provides google reCAPTCHA on both the Login form and comments.
* Prevents bots from automatically brute-force attacking wp-login.php
* Prevents bots from automatically spamming comments.

**Compress Images on Upload**:

* Enables and configures EWWW Image Optimizer.
* Compresses images that are uploaded to save bandwidth.
* Improves page load times: especially on sites with many images.

**Turbo Web Hosting**:

* Take advantage of A2 Hosting's Turbo Web Hosting platform.
* Faster serving of static files.
* Pre-compiled .htaccess files on the web server for imporved performance.
* PHP OpCode cache enabled by default
* Custom php engine that is faster than Fast-CGI and FPM

**Memcached Database and Object Cache**:

* Database and Object cache in memory instead of on disk.
* Secure and Faster Memcached using Unix socket files.
* Significant improvement in page load times, especially on pages that can not use full page cache such as wp-admin.


== Installation ==

1. Upload a2-optimized into the wp-content/plugins/ directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Click 'A2 Optimized' in the admin menu
1. Click buttons to enable optimizations
1. Check out warnings that A2 Optimized has detected that may be slowing down your site
1. Check out Advanced Optimizations that may help you identify plugins that may be slowing down your site.


== Frequently Asked Questions ==

= How does A2 Optimized speed up my site =

Caching is the fastest and easiest way to speed up a dynamic website.
A2 Optimized will install and configure W3 Total Cache with the click of a few buttons.

= Does A2 Optimized make all sites faster =

A2 Optimized will speed up most sites; however, not all plugins are compatible with W3 Total Cache.

If your site is slower after enabling caching in A2 Optimized,
talk to a developer about finding better solutions for the plugins that you are using.

= Can I use A2 Optimized with WordFence =

A2 Optimized is compatible with most of the features in WordFence, however you should disable caching and logging in WordFence.

= Why use W3 Total Cache over WP Super Cache =

W3 Total Cache is the only plugin that handles all types of caching.  It caches frequently used database queries, objects and pages.  It also allows the use of Memcached as a storage engine for cache.

= Can I use A2 Optimized on any host =

Yes.  A2 Optimized works on any host that supports WordPress.  Yes.  A2 Optimized works on any host that supports WordPress; however, A2 Hosting provides a few more tools for speeding up your site when hosted on an A2 Hosting server.



== Changelog ==

= 2.0.1 =
*minor bug fixes
*check for PHP version >= 5.3


= 2.0 =
*Move from SaaS to Full GPL


== Upgrade Notice ==

= 2.0 =
New GPL plugin, now updates are through the wordpress.org repository


== Screenshots ==

1. A2 Optimized Optimizations Page
2. A2 Optimized Warnings Page
3. A2 Optimized Advanced Optimizations Page
4. About A2 Optimized Page
