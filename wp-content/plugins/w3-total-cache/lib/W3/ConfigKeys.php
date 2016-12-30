<?php




$keys = array (
  'cluster.messagebus.debug' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cluster.messagebus.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cluster.messagebus.sns.region' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cluster.messagebus.sns.api_key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cluster.messagebus.sns.api_secret' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cluster.messagebus.sns.topic_arn' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'dbcache.debug' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'dbcache.enabled' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'dbcache.engine' => 
  array (
    'type' => 'string',
    'default' => 'file',
  ),
  'dbcache.file.gc' => 
  array (
    'type' => 'integer',
    'default' => 7200,
  ),
  'dbcache.file.locking' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'dbcache.lifetime' => 
  array (
    'type' => 'integer',
    'default' => 3600,
  ),
  'dbcache.memcached.persistant' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'dbcache.memcached.servers' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => '127.0.0.1:11211',
    ),
  ),
  'dbcache.reject.cookie' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'dbcache.reject.logged' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'dbcache.reject.sql' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'gdsr_',
      1 => 'wp_rg_',
      2 => '_wp_session_',
      3 => '_wc_session_',
    ),
  ),
  'dbcache.reject.uri' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'dbcache.reject.words' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => '^\\s*insert\\b',
      1 => '^\\s*delete\\b',
      2 => '^\\s*update\\b',
      3 => '^\\s*replace\\b',
      4 => '^\\s*create\\b',
      5 => '^\\s*alter\\b',
      6 => '^\\s*show\\b',
      7 => '^\\s*set\\b',
      8 => '\\bautoload\\s+=\\s+\'yes\'',
      9 => '\\bsql_calc_found_rows\\b',
      10 => '\\bfound_rows\\(\\)',
      11 => '\\bw3tc_request_data\\b',
    ),
  ),
  'objectcache.enabled' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'objectcache.debug' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'objectcache.engine' => 
  array (
    'type' => 'string',
    'default' => 'file',
  ),
  'objectcache.file.gc' => 
  array (
    'type' => 'integer',
    'default' => 7200,
  ),
  'objectcache.file.locking' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'objectcache.memcached.servers' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => '127.0.0.1:11211',
    ),
  ),
  'objectcache.memcached.persistant' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'objectcache.groups.global' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'users',
      1 => 'userlogins',
      2 => 'usermeta',
      3 => 'user_meta',
      4 => 'site-transient',
      5 => 'site-options',
      6 => 'site-lookup',
      7 => 'blog-lookup',
      8 => 'blog-details',
      9 => 'rss',
      10 => 'global-posts',
    ),
  ),
  'objectcache.groups.nonpersistent' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'comment',
      1 => 'counts',
      2 => 'plugins',
    ),
  ),
  'objectcache.lifetime' => 
  array (
    'type' => 'integer',
    'default' => 3600,
  ),
  'objectcache.purge.all' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'fragmentcache.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'fragmentcache.debug' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'fragmentcache.engine' => 
  array (
    'type' => 'string',
    'default' => 'file',
  ),
  'fragmentcache.file.gc' => 
  array (
    'type' => 'integer',
    'default' => 3600,
  ),
  'fragmentcache.file.locking' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'fragmentcache.memcached.servers' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => '127.0.0.1:11211',
    ),
  ),
  'fragmentcache.memcached.persistant' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'fragmentcache.lifetime' => 
  array (
    'type' => 'integer',
    'default' => 180,
  ),
  'fragmentcache.groups' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'pgcache.enabled' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.comment_cookie_ttl' => 
  array (
    'type' => 'integer',
    'default' => 1800,
  ),
  'pgcache.debug' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.engine' => 
  array (
    'type' => 'string',
    'default' => 'file_generic',
  ),
  'pgcache.file.gc' => 
  array (
    'type' => 'integer',
    'default' => 3600,
  ),
  'pgcache.file.nfs' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.file.locking' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.lifetime' => 
  array (
    'type' => 'integer',
    'default' => 3600,
  ),
  'pgcache.memcached.servers' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => '127.0.0.1:11211',
    ),
  ),
  'pgcache.memcached.persistant' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.check.domain' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.cache.query' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.cache.home' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.cache.feed' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.cache.nginx_handle_xml' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.cache.ssl' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.cache.404' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.cache.flush' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.cache.headers' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'Last-Modified',
      1 => 'Content-Type',
      2 => 'X-Pingback',
      3 => 'P3P',
    ),
  ),
  'pgcache.compatibility' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.remove_charset' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.accept.uri' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'sitemap(_index)?\\.xml(\\.gz)?',
      1 => '([a-z0-9_\\-]+)?sitemap\\.xsl',
      2 => '[a-z0-9_\\-]+-sitemap([0-9]+)?\\.xml(\\.gz)?',
    ),
  ),
  'pgcache.accept.files' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'wp-comments-popup.php',
      1 => 'wp-links-opml.php',
      2 => 'wp-locations.php',
    ),
  ),
  'pgcache.accept.qs' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'pgcache.reject.front_page' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.reject.logged' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.reject.logged_roles' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.reject.roles' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'pgcache.reject.uri' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'wp-.*\\.php',
      1 => 'index\\.php',
      2 => 'zegj',
    ),
  ),
  'pgcache.reject.ua' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'pgcache.reject.cookie' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'wptouch_switch_toggle',
    ),
  ),
  'pgcache.reject.request_head' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.front_page' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.home' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.post' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.comments' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.author' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.terms' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.archive.daily' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.archive.monthly' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.archive.yearly' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.feed.blog' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.feed.comments' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.feed.author' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.feed.terms' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'pgcache.purge.feed.types' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'rss2',
    ),
  ),
  'pgcache.purge.postpages_limit' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'pgcache.purge.pages' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'pgcache.purge.sitemap_regex' => 
  array (
    'type' => 'string',
    'default' => '([a-z0-9_\\-]*?)sitemap([a-z0-9_\\-]*)?\\.xml',
  ),
  'pgcache.prime.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'pgcache.prime.interval' => 
  array (
    'type' => 'integer',
    'default' => 900,
  ),
  'pgcache.prime.limit' => 
  array (
    'type' => 'integer',
    'default' => 10,
  ),
  'pgcache.prime.sitemap' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'pgcache.prime.post.enabled' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.enabled' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.auto' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.debug' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.engine' => 
  array (
    'type' => 'string',
    'default' => 'file',
  ),
  'minify.file.gc' => 
  array (
    'type' => 'integer',
    'default' => 144000,
  ),
  'minify.file.nfs' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.file.locking' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.memcached.servers' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => '127.0.0.1:11211',
    ),
  ),
  'minify.memcached.persistant' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.rewrite' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.options' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'minify.symlinks' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'minify.lifetime' => 
  array (
    'type' => 'integer',
    'default' => 14400,
  ),
  'minify.upload' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.html.enable' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.html.engine' => 
  array (
    'type' => 'string',
    'default' => 'html',
  ),
  'minify.html.reject.feed' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.html.inline.css' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.html.inline.js' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.html.strip.crlf' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.html.comments.ignore' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'google_ad_',
      1 => 'RSPEAK_',
    ),
  ),
  'minify.css.enable' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.css.engine' => 
  array (
    'type' => 'string',
    'default' => 'css',
  ),
  'minify.css.combine' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.css.strip.comments' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.css.strip.crlf' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.css.imports' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'minify.css.groups' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'minify.js.enable' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.js.engine' => 
  array (
    'type' => 'string',
    'default' => 'js',
  ),
  'minify.js.combine.header' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.js.header.embed_type' => 
  array (
    'type' => 'string',
    'default' => 'nb-js',
  ),
  'minify.js.combine.body' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.js.body.embed_type' => 
  array (
    'type' => 'string',
    'default' => 'nb-js',
  ),
  'minify.js.combine.footer' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.js.footer.embed_type' => 
  array (
    'type' => 'string',
    'default' => 'nb-js',
  ),
  'minify.js.strip.comments' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.js.strip.crlf' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.js.groups' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'minify.yuijs.path.java' => 
  array (
    'type' => 'string',
    'default' => 'java',
  ),
  'minify.yuijs.path.jar' => 
  array (
    'type' => 'string',
    'default' => 'yuicompressor.jar',
  ),
  'minify.yuijs.options.line-break' => 
  array (
    'type' => 'integer',
    'default' => 5000,
  ),
  'minify.yuijs.options.nomunge' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.yuijs.options.preserve-semi' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.yuijs.options.disable-optimizations' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.yuicss.path.java' => 
  array (
    'type' => 'string',
    'default' => 'java',
  ),
  'minify.yuicss.path.jar' => 
  array (
    'type' => 'string',
    'default' => 'yuicompressor.jar',
  ),
  'minify.yuicss.options.line-break' => 
  array (
    'type' => 'integer',
    'default' => 5000,
  ),
  'minify.ccjs.path.java' => 
  array (
    'type' => 'string',
    'default' => 'java',
  ),
  'minify.ccjs.path.jar' => 
  array (
    'type' => 'string',
    'default' => 'compiler.jar',
  ),
  'minify.ccjs.options.compilation_level' => 
  array (
    'type' => 'string',
    'default' => 'SIMPLE_OPTIMIZATIONS',
  ),
  'minify.ccjs.options.formatting' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'minify.csstidy.options.remove_bslash' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.csstidy.options.compress_colors' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.csstidy.options.compress_font-weight' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.csstidy.options.lowercase_s' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.csstidy.options.optimise_shorthands' => 
  array (
    'type' => 'integer',
    'default' => 1,
  ),
  'minify.csstidy.options.remove_last_;' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.csstidy.options.case_properties' => 
  array (
    'type' => 'integer',
    'default' => 1,
  ),
  'minify.csstidy.options.sort_properties' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.csstidy.options.sort_selectors' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.csstidy.options.merge_selectors' => 
  array (
    'type' => 'integer',
    'default' => 2,
  ),
  'minify.csstidy.options.discard_invalid_properties' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.csstidy.options.css_level' => 
  array (
    'type' => 'string',
    'default' => 'CSS2.1',
  ),
  'minify.csstidy.options.preserve_css' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.csstidy.options.timestamp' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.csstidy.options.template' => 
  array (
    'type' => 'string',
    'default' => 'default',
  ),
  'minify.htmltidy.options.clean' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.htmltidy.options.hide-comments' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'minify.htmltidy.options.wrap' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'minify.reject.logged' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.reject.ua' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'minify.reject.uri' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'minify.reject.files.js' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'minify.reject.files.css' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'minify.cache.files' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'https://ajax.googleapis.com',
    ),
  ),
  'cdn.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.debug' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.engine' => 
  array (
    'type' => 'string',
    'default' => 'maxcdn',
  ),
  'cdn.uploads.enable' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'cdn.includes.enable' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'cdn.includes.files' => 
  array (
    'type' => 'string',
    'default' => '*.css;*.js;*.gif;*.png;*.jpg;*.xml',
  ),
  'cdn.theme.enable' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'cdn.theme.files' => 
  array (
    'type' => 'string',
    'default' => '*.css;*.js;*.gif;*.png;*.jpg;*.ico;*.ttf;*.otf,*.woff,*.less',
  ),
  'cdn.minify.enable' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'cdn.custom.enable' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'cdn.custom.files' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'favicon.ico',
      1 => '{wp_content_dir}/gallery/*',
      2 => '{wp_content_dir}/uploads/avatars/*',
      3 => '{plugins_dir}/wordpress-seo/css/xml-sitemap.xsl',
      4 => '{plugins_dir}/wp-minify/min*',
      5 => '{plugins_dir}/*.js',
      6 => '{plugins_dir}/*.css',
      7 => '{plugins_dir}/*.gif',
      8 => '{plugins_dir}/*.jpg',
      9 => '{plugins_dir}/*.png',
    ),
  ),
  'cdn.import.external' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.import.files' => 
  array (
    'type' => 'string',
    'default' => false,
  ),
  'cdn.queue.interval' => 
  array (
    'type' => 'integer',
    'default' => 900,
  ),
  'cdn.queue.limit' => 
  array (
    'type' => 'integer',
    'default' => 25,
  ),
  'cdn.force.rewrite' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.autoupload.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.autoupload.interval' => 
  array (
    'type' => 'integer',
    'default' => 3600,
  ),
  'cdn.canonical_header' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.ftp.host' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.ftp.user' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.ftp.pass' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.ftp.path' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.ftp.pasv' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.ftp.domain' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.ftp.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.s3.key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.s3.secret' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.s3.bucket' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.s3.cname' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.s3.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.cf.key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cf.secret' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cf.bucket' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cf.id' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cf.cname' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.cf.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.cf2.key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cf2.secret' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cf2.id' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cf2.cname' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.cf2.ssl' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.rscf.user' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.rscf.key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.rscf.location' => 
  array (
    'type' => 'string',
    'default' => 'us',
  ),
  'cdn.rscf.container' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.rscf.cname' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.rscf.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.azure.user' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.azure.key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.azure.container' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.azure.cname' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.azure.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.mirror.domain' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.mirror.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.netdna.alias' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.netdna.consumerkey' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.netdna.consumersecret' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.netdna.authorization_key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.netdna.domain' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.netdna.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.netdna.zone_id' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'cdn.maxcdn.authorization_key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.maxcdn.domain' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.maxcdn.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.maxcdn.zone_id' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'cdn.cotendo.username' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cotendo.password' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.cotendo.zones' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.cotendo.domain' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.cotendo.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.akamai.username' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.akamai.password' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.akamai.email_notification' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.akamai.action' => 
  array (
    'type' => 'string',
    'default' => 'invalidate',
  ),
  'cdn.akamai.zone' => 
  array (
    'type' => 'string',
    'default' => 'production',
  ),
  'cdn.akamai.domain' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.akamai.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.edgecast.account' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.edgecast.token' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.edgecast.domain' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.edgecast.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.att.account' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.att.token' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'cdn.att.domain' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.att.ssl' => 
  array (
    'type' => 'string',
    'default' => 'auto',
  ),
  'cdn.reject.admins' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.reject.logged_roles' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdn.reject.roles' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.reject.ua' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.reject.uri' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'cdn.reject.files' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => '{uploads_dir}/wpcf7_captcha/*',
      1 => '{uploads_dir}/imagerotator.swf',
      2 => '{plugins_dir}/wp-fb-autoconnect/facebook-platform/channel.html',
    ),
  ),
  'cdn.reject.ssl' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'cdncache.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'varnish.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'varnish.debug' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'varnish.servers' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'browsercache.enabled' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.no404wp' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'browsercache.no404wp.exceptions' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'robots\\.txt',
      1 => '[a-z0-9_\\-]*sitemap[a-z0-9_\\-]*\\.(xml|xsl|html)(\\.gz)?',
    ),
  ),
  'browsercache.cssjs.last_modified' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.cssjs.compression' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.cssjs.expires' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.cssjs.lifetime' => 
  array (
    'type' => 'integer',
    'default' => 31536000,
  ),
  'browsercache.cssjs.nocookies' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'browsercache.cssjs.cache.control' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.cssjs.cache.policy' => 
  array (
    'type' => 'string',
    'default' => 'cache_maxage',
  ),
  'browsercache.cssjs.etag' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.cssjs.w3tc' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.cssjs.replace' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.html.compression' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.html.last_modified' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.html.expires' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.html.lifetime' => 
  array (
    'type' => 'integer',
    'default' => 30,
  ),
  'browsercache.html.cache.control' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.html.cache.policy' => 
  array (
    'type' => 'string',
    'default' => 'cache_maxage',
  ),
  'browsercache.html.etag' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.html.w3tc' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.html.replace' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.other.last_modified' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.other.compression' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.other.expires' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.other.lifetime' => 
  array (
    'type' => 'integer',
    'default' => 31536000,
  ),
  'browsercache.other.nocookies' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'browsercache.other.cache.control' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.other.cache.policy' => 
  array (
    'type' => 'string',
    'default' => 'cache_maxage',
  ),
  'browsercache.other.etag' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.other.w3tc' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.other.replace' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'browsercache.timestamp' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'browsercache.replace.exceptions' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'mobile.enabled' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'mobile.rgroups' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      'high' => 
      array (
        'theme' => '',
        'enabled' => true,
        'redirect' => '',
        'agents' => 
        array (
          0 => 'acer\\ s100',
          1 => 'android',
          2 => 'archos5',
          3 => 'bada',
          4 => 'bb10',
          5 => 'blackberry9500',
          6 => 'blackberry9530',
          7 => 'blackberry9550',
          8 => 'blackberry\\ 9800',
          9 => 'cupcake',
          10 => 'docomo\\ ht\\-03a',
          11 => 'dream',
          12 => 'froyo',
          13 => 'googlebot-mobile',
          14 => 'htc\\ hero',
          15 => 'htc\\ magic',
          16 => 'htc_dream',
          17 => 'htc_magic',
          18 => 'iemobile/7.0',
          19 => 'incognito',
          20 => 'ipad',
          21 => 'iphone',
          22 => 'ipod',
          23 => 'kindle',
          24 => 'lg\\-gw620',
          25 => 'liquid\\ build',
          26 => 'maemo',
          27 => 'mot\\-mb200',
          28 => 'mot\\-mb300',
          29 => 'nexus\\ one',
          30 => 'nexus\\ 7',
          31 => 'opera\\ mini',
          32 => 's8000',
          33 => 'samsung\\-s8000',
          34 => 'series60.*webkit',
          35 => 'series60/5\\.0',
          36 => 'sonyericssone10',
          37 => 'sonyericssonu20',
          38 => 'sonyericssonx10',
          39 => 't\\-mobile\\ mytouch\\ 3g',
          40 => 't\\-mobile\\ opal',
          41 => 'tattoo',
          42 => 'touch',
          43 => 'webmate',
          44 => 'webos',
        ),
      ),
      'low' => 
      array (
        'theme' => '',
        'enabled' => true,
        'redirect' => '',
        'agents' => 
        array (
          0 => '2\\.0\\ mmp',
          1 => '240x320',
          2 => 'alcatel',
          3 => 'amoi',
          4 => 'asus',
          5 => 'au\\-mic',
          6 => 'audiovox',
          7 => 'avantgo',
          8 => 'benq',
          9 => 'bird',
          10 => 'blackberry',
          11 => 'blazer',
          12 => 'cdm',
          13 => 'cellphone',
          14 => 'danger',
          15 => 'ddipocket',
          16 => 'docomo',
          17 => 'dopod',
          18 => 'elaine/3\\.0',
          19 => 'ericsson',
          20 => 'eudoraweb',
          21 => 'fly',
          22 => 'haier',
          23 => 'hiptop',
          24 => 'hp\\.ipaq',
          25 => 'htc',
          26 => 'huawei',
          27 => 'i\\-mobile',
          28 => 'iemobile',
          29 => 'iemobile/7',
          30 => 'iemobile/9',
          31 => 'j\\-phone',
          32 => 'kddi',
          33 => 'konka',
          34 => 'kwc',
          35 => 'kyocera/wx310k',
          36 => 'lenovo',
          37 => 'lg',
          38 => 'lg/u990',
          39 => 'lge\\ vx',
          40 => 'midp',
          41 => 'midp\\-2\\.0',
          42 => 'mmef20',
          43 => 'mmp',
          44 => 'mobilephone',
          45 => 'mot\\-v',
          46 => 'motorola',
          47 => 'msie\\ 10\\.0',
          48 => 'netfront',
          49 => 'newgen',
          50 => 'newt',
          51 => 'nintendo\\ ds',
          52 => 'nintendo\\ wii',
          53 => 'nitro',
          54 => 'nokia',
          55 => 'novarra',
          56 => 'o2',
          57 => 'openweb',
          58 => 'opera\\ mobi',
          59 => 'opera\\.mobi',
          60 => 'p160u',
          61 => 'palm',
          62 => 'panasonic',
          63 => 'pantech',
          64 => 'pdxgw',
          65 => 'pg',
          66 => 'philips',
          67 => 'phone',
          68 => 'playbook',
          69 => 'playstation\\ portable',
          70 => 'portalmmm',
          71 => '\\bppc\\b',
          72 => 'proxinet',
          73 => 'psp',
          74 => 'qtek',
          75 => 'sagem',
          76 => 'samsung',
          77 => 'sanyo',
          78 => 'sch',
          79 => 'sch\\-i800',
          80 => 'sec',
          81 => 'sendo',
          82 => 'sgh',
          83 => 'sharp',
          84 => 'sharp\\-tq\\-gx10',
          85 => 'small',
          86 => 'smartphone',
          87 => 'softbank',
          88 => 'sonyericsson',
          89 => 'sph',
          90 => 'symbian',
          91 => 'symbian\\ os',
          92 => 'symbianos',
          93 => 'toshiba',
          94 => 'treo',
          95 => 'ts21i\\-10',
          96 => 'up\\.browser',
          97 => 'up\\.link',
          98 => 'uts',
          99 => 'vertu',
          100 => 'vodafone',
          101 => 'wap',
          102 => 'willcome',
          103 => 'windows\\ ce',
          104 => 'windows\\.ce',
          105 => 'winwap',
          106 => 'xda',
          107 => 'xoom',
          108 => 'zte',
        ),
      ),
    ),
  ),
  'referrer.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'referrer.rgroups' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      'search_engines' => 
      array (
        'theme' => '',
        'enabled' => false,
        'redirect' => '',
        'referrers' => 
        array (
          0 => 'google\\.com',
          1 => 'yahoo\\.com',
          2 => 'bing\\.com',
          3 => 'ask\\.com',
          4 => 'msn\\.com',
        ),
      ),
    ),
  ),
  'common.support' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'common.install' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'common.tweeted' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'config.check' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'config.path' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'widget.latest.items' => 
  array (
    'type' => 'integer',
    'default' => 3,
  ),
  'widget.latest_news.items' => 
  array (
    'type' => 'integer',
    'default' => 5,
  ),
  'widget.pagespeed.enabled' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'widget.pagespeed.key' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'notes.wp_content_changed_perms' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.wp_content_perms' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.theme_changed' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.wp_upgraded' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.plugins_updated' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.cdn_upload' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.cdn_reupload' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.need_empty_pgcache' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.need_empty_minify' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.need_empty_objectcache' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.root_rules' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.rules' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.pgcache_rules_wpsc' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.support_us' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.no_curl' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.no_zlib' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.zlib_output_compression' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.no_permalink_rules' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.browsercache_rules_no404wp' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'timelimit.email_send' => 
  array (
    'type' => 'integer',
    'default' => 180,
  ),
  'timelimit.varnish_purge' => 
  array (
    'type' => 'integer',
    'default' => 300,
  ),
  'timelimit.cache_flush' => 
  array (
    'type' => 'integer',
    'default' => 600,
  ),
  'timelimit.cache_gc' => 
  array (
    'type' => 'integer',
    'default' => 600,
  ),
  'timelimit.cdn_upload' => 
  array (
    'type' => 'integer',
    'default' => 600,
  ),
  'timelimit.cdn_delete' => 
  array (
    'type' => 'integer',
    'default' => 300,
  ),
  'timelimit.cdn_purge' => 
  array (
    'type' => 'integer',
    'default' => 300,
  ),
  'timelimit.cdn_import' => 
  array (
    'type' => 'integer',
    'default' => 600,
  ),
  'timelimit.cdn_test' => 
  array (
    'type' => 'integer',
    'default' => 300,
  ),
  'timelimit.cdn_container_create' => 
  array (
    'type' => 'integer',
    'default' => 300,
  ),
  'timelimit.domain_rename' => 
  array (
    'type' => 'integer',
    'default' => 120,
  ),
  'timelimit.minify_recommendations' => 
  array (
    'type' => 'integer',
    'default' => 600,
  ),
  'minify.auto.filename_length' => 
  array (
    'type' => 'integer',
    'default' => 150,
  ),
  'minify.auto.disable_filename_length_test' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'common.instance_id' => 
  array (
    'type' => 'integer',
    'default' => 463359298,
  ),
  'common.force_master' => 
  array (
    'type' => 'boolean',
    'default' => true,
    'master_only' => 'true',
  ),
  'newrelic.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'newrelic.api_key' => 
  array (
    'type' => 'string',
    'default' => '',
    'master_only' => 'true',
  ),
  'newrelic.account_id' => 
  array (
    'type' => 'string',
    'default' => '',
    'master_only' => 'true',
  ),
  'newrelic.application_id' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'newrelic.appname' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'newrelic.accept.logged_roles' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'newrelic.accept.roles' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      0 => 'contributor',
    ),
  ),
  'newrelic.use_php_function' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.new_relic_page_load_notification' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'newrelic.appname_prefix' => 
  array (
    'type' => 'string',
    'default' => 'Child Site - ',
  ),
  'newrelic.merge_with_network' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'newrelic.cache_time' => 
  array (
    'type' => 'integer',
    'default' => 5,
  ),
  'newrelic.enable_xmit' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'newrelic.use_network_wide_id' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'pgcache.late_init' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'newrelic.include_rum' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'extensions.settings' => 
  array (
    'type' => 'array',
    'default' => 
    array (
      'genesis.theme' => 
      array (
        'wp_head' => '0',
        'genesis_header' => '1',
        'genesis_do_nav' => '0',
        'genesis_do_subnav' => '0',
        'loop_front_page' => '1',
        'loop_terms' => '1',
        'flush_terms' => '1',
        'loop_single' => '1',
        'loop_single_excluded' => '',
        'loop_single_genesis_comments' => '0',
        'loop_single_genesis_pings' => '0',
        'sidebar' => '0',
        'sidebar_excluded' => '',
        'genesis_footer' => '1',
        'wp_footer' => '0',
        'reject_logged_roles' => '1',
        'reject_logged_roles_on_actions' => 
        array (
          0 => 'genesis_loop',
          1 => 'wp_head',
          2 => 'wp_footer',
        ),
        'reject_roles' => 
        array (
          0 => 'administrator',
        ),
      ),
      'feedburner' => 
      array (
        'urls' => '',
      ),
    ),
  ),
  'extensions.active' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'plugin.license_key' => 
  array (
    'type' => 'string',
    'default' => '',
    'master_only' => true,
  ),
  'plugin.type' => 
  array (
    'type' => 'string',
    'default' => '',
    'master_only' => true,
  ),
);





$keys_admin = array (
  'browsercache.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'cdn.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'common.install' => 
  array (
    'type' => 'integer',
    'default' => 1448795376,
    'master_only' => 'true',
  ),
  'common.visible_by_master_only' => 
  array (
    'type' => 'boolean',
    'default' => true,
    'master_only' => 'true',
  ),
  'dbcache.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'minify.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'objectcache.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'pgcache.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'previewmode.enabled' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'varnish.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'fragmentcache.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'newrelic.configuration_sealed' => 
  array (
    'type' => 'boolean',
    'default' => false,
    'master_only' => 'true',
  ),
  'extensions.configuration_sealed' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
    'master_only' => 'true',
  ),
  'notes.minify_error' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'minify.error.last' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'minify.error.notification' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'minify.error.notification.last' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'minify.error.file' => 
  array (
    'type' => 'string',
    'default' => '',
  ),
  'track.maxcdn_signup' => 
  array (
    'type' => 'int',
    'default' => 0,
  ),
  'track.maxcdn_authorize' => 
  array (
    'type' => 'int',
    'default' => 0,
  ),
  'track.maxcdn_validation' => 
  array (
    'type' => 'int',
    'default' => 0,
  ),
  'notes.maxcdn_whitelist_ip' => 
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'notes.remove_w3tc' => 
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'notes.hide_extensions' => 
  array (
    'type' => 'array',
    'default' => 
    array (
    ),
  ),
  'evaluation.reminder' => 
  array (
    'type' => 'int',
    'default' => 0,
    'master_only' => 'true',
  ),
);





$sealing_keys_scope = array (
  0 => 
  array (
    'key' => 'browsercache.configuration_sealed',
    'prefix' => 'browsercache.',
  ),
  1 => 
  array (
    'key' => 'cdn.configuration_sealed',
    'prefix' => 'cdn.',
  ),
  2 => 
  array (
    'key' => 'dbcache.configuration_sealed',
    'prefix' => 'dbcache.',
  ),
  3 => 
  array (
    'key' => 'minify.configuration_sealed',
    'prefix' => 'minify.',
  ),
  4 => 
  array (
    'key' => 'objectcache.configuration_sealed',
    'prefix' => 'objectcache.',
  ),
  5 => 
  array (
    'key' => 'fragmentcache.configuration_sealed',
    'prefix' => 'fragmentcache.',
  ),
  6 => 
  array (
    'key' => 'pgcache.configuration_sealed',
    'prefix' => 'pgcache.',
  ),
  7 => 
  array (
    'key' => 'varnish.configuration_sealed',
    'prefix' => 'varnish.',
  ),
  8 => 
  array (
    'key' => 'extensions.active.configuration_sealed',
    'prefix' => 'extensions.active',
  ),
  9 => 
  array (
    'key' => 'extensions.configuration_sealed',
    'prefix' => 'extensions.',
  ),
);




?>