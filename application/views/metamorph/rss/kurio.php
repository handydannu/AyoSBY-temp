<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:media="http://search.yahoo.com/mrss/">
	<channel>
		<title><?php echo $meta['title']; ?></title>
		<link><?php echo $meta['link']; ?></link>
		<description><?php echo $meta['desc']; ?></description>		
		<language><?php echo $meta['lang']; ?></language>
		<copyright><?php echo $meta['copyright']; ?></copyright>
		<lastBuildDate><?php echo $meta['pub_date']; ?></lastBuildDate>
		<updated><?php echo $meta['pub_date']; ?></updated>
		<generator><?php echo $meta['generator']; ?></generator>
		<?php foreach ($recent as $r) { ?>
			<?php
				$date 		= content_time($r['post_date_created']);
				$url 		= site_url('read') . '/' . $date['year'] . '/' . $date['month'] . '/' . $date['day'] . '/' 
							. $r['post_id'] . '/' . $r['slug'];
				$url_img 	= $this->config->item('images_articles_uri') . $date['year'] . '/' . $date['month'] . '/' . $date['day'] 
							. '/' . $r['post_id'] . '/';
			?>
		<item>
			<title><?php echo $r['post_title']; ?></title>
			<link><?php echo $url; ?></link>
			<pubDate><?php echo rss_time($r['post_date']); ?></pubDate>
			<media:thumbnail url="<?php echo $url_img . $r['post_image_thumb']; ?>" />
			<description><?php echo rss_char_escape($r['post_summary']); ?></description>
			<content:encoded><![CDATA[<img src="<?php echo $url_img . $r['post_image_content']; ?>" width="1200" height="900" /><?php echo htmlspecialchars_decode(preg_replace('/\[.*?\]/', '', rss_char_escape($r['post_content']))); ?>]]></content:encoded>
		</item>
		<?php } ?>
	</channel>
</rss>
