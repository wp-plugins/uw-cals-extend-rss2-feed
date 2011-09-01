=== UW CALS Extend RSS2 feed ===
Contributors: uwcals
Tags: uw, madison, wisconsin, cals, rss2, feed, thumbnails, custom fields
Requires at least: 2.8
Tested up to: 3.1
Stable tag: trunk

Allows you to retrieve more post data (i.e. thumnails and custom fields) via RSS2.


== Description ==

Allows you to retrieve extra post item data, so more information from a post can be available via RSS feed (i.e. specific custom fields and thumbnails). To do this, add extra parameters to your RSS feed link, as indicated below.

Accepted arguments:
- All WP Feed options, as listed on http://codex.wordpress.org/WordPress_Feeds
- post_thumbnail=1: retrieves the post's thumbnail link (if available)
- meta_keys=meta_name1[,meta_name2,meta_nameN]: retrieves values of specifies custom fields used by the post (if available). For example, "meta_keys=post_quote,post_contributor" will retrieve the "post_quote" and "post_contributor" custom fields' value, if these fields have been added to the post.

Example:
The http://news.cals.wisc.edu/feed/?cat=67&post_thumb=1&meta_keys=academic_info will retrieve all posts in category 67, along with their thumbnails (if available) and the value of the 'academic_info' field (if available).

The 
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