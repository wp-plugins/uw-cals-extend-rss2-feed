=== UW CALS Extend RSS2 feed ===
Contributors: uwcals
Tags: uw, madison, wisconsin, cals, rss2, feed, thumbnails, custom fields, customize
Requires at least: 2.8
Tested up to: 3.1
Stable tag: trunk

Enables WordPress to include thumbnail and custom-field data in its RSS2 feed

== Description ==

Enables WordPress to include thumbnail and custom field data in its RSS2 feed.

**How is works:**

* To retrieve post thumbnails: Add "post_thumbnail=1" to your feed's link. (e.g. "http://www.mywpsite/feed/?post_thumb=1")
* To retrieve custom fields: Add "meta_keys=meta_name1[,meta_name2,meta_name3,...]" to your feed's link (e.g. "http://www.mywpsite/feed/?meta_keys=post_quote,post_contributor" will retrieve the "post_quote" and "post_contributor" custom fields' value, if these fields have been added to the post.)
* To further customize your feed: use any other WP Feed options, as listed on http://codex.wordpress.org/WordPress_Feeds/.

*Example:*
The http://news.cals.wisc.edu/feed/?cat=67&post_thumb=1&meta_keys=academic_info will retrieve all posts in category 67, along with their thumbnails (if available) and the value of the 'academic_info' field (if available).

== Installation ==

1. Upload 'cals_rss2_feed-extend' to the '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Test plugin by making a RSS feed request (i.e. http://www.yourdomain.com/feed/?post_thumb=1).
	
== Screenshots ==
1. Sample URL for RSS Feed.
2. Requested thumbnail permalink and 'academic_info' custom field value added to RSS item.

== Changelog ==
= 1.0 =
* Initial release.