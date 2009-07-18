<?php

	$items = '';
	$first = true;
	$pubDate = '';
	foreach($feed as $item){
		$items .= '<item>';
		
			foreach($item as $tag=>$value){
				$items .= '<'.$tag.'>'.$value.'</'.$tag.'>';
				if($first && strtolower($tag) == 'pubdate'){
					$pubDate = $value;
					$first = false;
				}
			}
		
		$items .= '</item>';
	}


	echo '<?xml version="1.0" encoding="utf-8"?>';
	echo '<rss version="2.0">';
	echo '<channel>';
	echo '<title>marcoliverteschke.de - alles, was es zu wissen gibt</title>';
	echo '<link>http://www.marcoliverteschke.de/</link>';
	echo '<description>Ein Feed, der alle Blogposts, Flickr-Bilder und Tweets zusammenfasst. A feed aggregating all blogposts, Flickr images and tweets.</description>';
	echo '<language>de-de</language>';
	echo '<pubDate>'.$pubDate.'</pubDate>';
    echo '<managingEditor>marcoliverteschke@mac.com</managingEditor>';
	echo '<webMaster>marcoliverteschke@mac.com</webMaster>';
	echo $items;
	echo '</channel>';
	echo '</rss>';

?>