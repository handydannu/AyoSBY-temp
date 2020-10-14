<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:media="http://search.yahoo.com/mrss/" version="2.0">
	<channel>
		<title><?php echo $meta['title']; ?></title>
		<atom:link href="<?php echo $meta['atom_link']; ?>" rel="self" type="application/rss+xml" />
		<link><?php echo $meta['link']; ?></link>
		<description><?php echo $meta['desc']; ?></description>
		<language><?php echo $meta['lang']; ?></language>
		<copyright><?php echo $meta['copyright']; ?></copyright>
		<pubDate><?php echo $meta['pub_date']; ?></pubDate>
		<generator><?php echo $meta['generator']; ?></generator>
		<sy:updatePeriod><?php echo $meta['up_period']; ?></sy:updatePeriod>
		<sy:updateFrequency><?php echo $meta['up_frequency']; ?></sy:updateFrequency>
		<image>
			<link><?php echo $meta['image']['link']; ?></link>
			<title><?php echo $meta['image']['title']; ?></title>
			<url><?php echo $meta['image']['url']; ?></url>
			<width><?php echo $meta['image']['width']; ?></width>
			<height><?php echo $meta['image']['height']; ?></height>
			<description><?php echo $meta['image']['desc']; ?></description>
		</image>
		<?php foreach ($recent as $r) { ?>
			<?php
				$date 		= content_time($r['post_date_created']);
				$url 		= site_url('read') . '/' . $date['year'] . '/' . $date['month'] . '/' . $date['day'] . '/'
					. $r['post_id'] . '/' . $r['slug'];
				$url_img 	= $this->config->item('images_articles_uri') . $date['year'] . '/' . $date['month'] . '/' . $date['day']
					. '/' . $r['post_id'] . '/';
				?>
			<item>
				<title>
					<?php echo rss_char_escape(preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $r['post_title'])); ?>
				</title>
				<link>
				<?php echo $url; ?>
				</link>
				<guid isPermaLink="false">
					<?php echo $url; ?>
				</guid>
				<category><?php echo preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $r['category_name']); ?></category>
				<pubDate><?php echo rss_time($r['post_date']); ?></pubDate>
				<media:thumbnail url="<?php echo $url_img . $r['post_image_thumb']; ?>" />
				<description>
					<![CDATA[
					<?php echo rss_char_escape($r['post_summary']); ?>
				]]>
				</description>
				<content:encoded>
					<![CDATA[
					<?php
						echo htmlspecialchars_decode(
							preg_replace(
								'/\[.*?\]/',
								'',
								rss_char_escape($r['post_content'])
							)
						);
						?>
                ]]>
				</content:encoded>
				<content:type>
					article
				</content:type>
				<enclosure length="2556" type="image/jpeg" url="<?php echo $url_img . $r['post_image_content']; ?>" />
			</item>
		<?php } ?>
	</channel>
</rss>