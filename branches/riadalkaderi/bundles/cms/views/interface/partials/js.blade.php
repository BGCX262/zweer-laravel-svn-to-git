var BASE = '{{Config::get('application.url')}}';
var WYSIWYG = '{{Config::get('cms::settings.wysiwyg')}}';
var MAX_UP = '{{strtolower(str_replace(' ','',Config::get('cms::settings.max_size'))).'mb'}}';
var ANALYTICS_ID = '{{Config::get('cms::settings.analytics.id')}}';
var disqus_shortname = '{{strtolower(Config::get('cms::theme.project_name'))}}';
var ELE_CLASS = '{{Config::get('cms::theme.ele_class')}}';
var SITE_CSS = '{{Config::get('cms::theme.asset.site_css.path')}}';