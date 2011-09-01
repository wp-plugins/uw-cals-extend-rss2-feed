<?php
/*
Plugin Name: UW CALS Extend RSS2 feed
Description: Enables WordPress to include thumbnail and custom-field data in its RSS2 feed.
Version: 1.0
Author: College of Agricultural and Life Sciences (CALS) at University of Wisconsin-Madison
Author URI: http://www.cals.wisc.edu
Last Updated: 08/30/11
*/


/**
 * Add wp: item extend definition
 *
 */
function cals_extend_rss2_ns(){

	//add the :wp xml name space, so browsers don't think the rss2 feed is of an unknown type
	echo 'xmlns:wp="http://wordpress.org/export/1.0/"';

}
add_action('rss2_ns', 'cals_extend_rss2_ns');


/**
 * Extends default rss2 wordpress template by adding post_thumbnail data and/or
 * custom field data to each post item
 *
 * @param $post_thumbnail bool whether to include post thumnbail info in rss feed items
 * @param $custom_fields array keys of the custom fields to include
 * 
*/
function cals_extend_rss_items(){
	global $post;
	
	//get variables sent in request
	$post_thumb = addslashes($_GET['post_thumb']);
	$post_thumb_size = addslashes($_GET['post_thumb_size']);
	
	if($_GET['meta_keys']!=''){
		$meta_keys = explode(',',$_GET['meta_keys']);
	}
	
	
	//add custom fields	
	if (count($meta_keys)>0){
		foreach($meta_keys as $meta_key){
			$meta_value =  get_post_meta($post->ID, $meta_key, true);
			if(($meta_value!='')){;
echo '	<wp:postmeta>
			<wp:meta_key>'.$meta_key.'</wp:meta_key>
			<wp:meta_value><![CDATA['.$meta_value.']]></wp:meta_value>
	  	</wp:postmeta>
	  ';
			}
		}
	}
	//add thumnbail
	if ($post_thumb == 1){
		//set default thumbnail size to "thumbnail"
		if($post_thumb_size=='' || ($post_thumb_size!='medium' && $post_thumb_size!='large')){
			$post_thumb_size = 'thumbnail'; 
		}
		
		if(has_post_thumbnail($post->ID)){
echo '	<wp:postmeta>
			<wp:meta_key>_thumbnail_permalink</wp:meta_key>
			<wp:meta_value><![CDATA['.get_the_post_thumbnail($post->ID, $post_thumb_size).']]></wp:meta_value>
	  	</wp:postmeta>
	 ';
		}
	} 
}
add_action('rss2_item', 'cals_extend_rss_items');

?>