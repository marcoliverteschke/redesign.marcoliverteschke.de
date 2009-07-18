<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="de">
	<head>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="description" content="Marc-Oliver Marc Oliver Teschke Blog Flickr Fotos Photos Twitter" />
		<title>marc-oliver teschke &mdash; alles, was es zu wissen gibt</title>
		<link rel="stylesheet" href="css/blueprint/screen.css" />
		<link rel="stylesheet" href="css/screen.css" />
		<link rel="apple-touch-icon" href="http://www.marcoliverteschke.de/apple-touch-icon.png" />
		<script type="text/javascript" src="script/jquery.js"> </script>
		<script type="text/javascript" src="script/script.js"> </script>
		<!-- Flickr Badge CSS -->
		<style type="text/css">
		#flickr_badge_source_txt {padding:0; font: 11px Arial, Helvetica, Sans serif; color:#666666;}
		#flickr_badge_icon {display:block !important; margin:0 !important; border: 1px solid rgb(0, 0, 0) !important;}
		#flickr_icon_td {padding:0 5px 0 0 !important;}
		.flickr_badge_image {text-align:center !important;}
		.flickr_badge_image img {border: 1px solid black !important;}
		#flickr_www {display:block; padding:0 10px 0 10px !important; font: 11px Arial, Helvetica, Sans serif !important; color:#3993ff !important;}
		#flickr_badge_uber_wrapper a:hover,
		#flickr_badge_uber_wrapper a:link,
		#flickr_badge_uber_wrapper a:active,
		#flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit !important;color:#3993ff;}
		#flickr_badge_wrapper {}
		#flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important; color:#666666 !important;}
		</style>
		<!-- Flickr Badge CSS -->		
	</head>
	<body>
		<div id="header">
			<div class="headline"><h1>marc-oliver teschke&hellip;</h1></div>
		</div>
		<div id="content">
			<div class="container">
				<div class="span-6 home_box">
					<div class="box_content">
						<h2>entwickelt</h2>
						procrastinationdashtimer.com
						flow-rss.com
						PLANWERK 6
					</div>
				</div>
				<div class="span-6 home_box">
					<div class="box_content">
						<h2><a href="http://twitter.com/marcoliver">twittert</a></h2>
						<?php
							foreach($twitter_data as $tweet){
								echo '<div class="tweet">';
								echo '<span class="date">'.date("d.m.Y H:i", strtotime($tweet->get_date())).'</span><br />';
								echo $tweet->get_content()."";
								echo '</div>';
							}
						?>
					</div>
				</div>
				<div class="span-6 home_box">
					<div class="box_content">
						<h2><a href="http://www.damot.org/">bloggt</a></h2>
						<?php
							foreach($blog_data as $item)
							{
								echo '<div class="post">';
								echo '<h3>'.$item->get_title().'</h3>';
								echo '<span class="date">'.date("d.m.Y H:i", strtotime($item->get_date())).'</span>';
								$content = $item->get_content();
								if(strlen($content) > 750)
								{
									$content = substr($content, 0, 750);
									$lastspace = strrpos($content, " ");
									if($lastspace > 0 && $lastspace < 749)
									{
										$content = substr($content, 0, $lastspace);
									}
									$content.= "&hellip;";
								}
								echo $content;
								echo "</div>";
							}
						?>
					</div>
				</div>
				<div class="span-6 last home_box">
					<div class="box_content">
						<h2><a href="http://www.flickr.com/photos/damot/">flickrt</a></h2>
						<!-- Start of Flickr Badge -->
						<table id="flickr_badge_uber_wrapper" cellpadding="0" cellspacing="10" border="0"><tr><td><a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a><table cellpadding="0" cellspacing="10" border="0" id="flickr_badge_wrapper">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=3&display=latest&size=t&layout=v&source=user&user=35972450%40N00"></script>
						</table>
						</td></tr></table>
						<!-- End of Flickr Badge -->
					</div>
				</div>
			</div>
		</div>
		<div id="footer" class="container">
			<div class="span-8">
				<h2>über&hellip;</h2>
			</div>
			<div class="span-8">
				bla
			</div>
			<div class="span-8 last">
				<h2>vernetzung&hellip;</h2>
				<ul>
					<li><a href="http://twitter.com/marcoliver" target="_blank">twitter</a></li>
					<li><a href="http://www.flickr.com/photos/damot/" target="_blank">Flickr</a></li>
					<li><a href="http://www.lastfm.de/user/DaMOT" target="_blank">Last.fm</a></li>
					<li><a href="http://www.facebook.com/marcoliverteschke" target="_blank">Facebook</a></li>
				</ul>
			</div>
			<div class="span-24 last copyright">&copy; 2009 Marc-Oliver Teschke</div>
		</div>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			var pageTracker = _gat._getTracker("UA-377570-4");
			pageTracker._initData();
			pageTracker._trackPageview();
		</script>
	</body>
</html>
