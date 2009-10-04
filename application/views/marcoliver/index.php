<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-DE" lang="de-DE">
	<head>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="description" content="Marc-Oliver Marc Oliver Teschke Blog Flickr Fotos Photos Twitter" />
		<title>marc-oliver teschke &mdash; alles, was es zu wissen gibt</title>
		<?php echo link_tag("css/blueprint/screen.css") ?>
		<?php echo link_tag("css/screen.css") ?>
		<?php echo link_tag(array("href" => "apple-touch-icon.png", "rel" => "apple-touch-icon")) ?>

		<script type="text/javascript" src="/script/Hyphenator.js ?>"></script>
		<script type="text/javascript">Hyphenator.run();</script>
		<script type="text/javascript" src="http://use.typekit.com/ssp8rhg.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>
	<body>
		<div id="header">
			<div class="headline"><h1><a href="<?php echo base_url("/") ?>">marc-oliver teschke&hellip;</a></h1></div>
		</div>
		<div id="content">
			<div class="container">
				<?php if(!empty($projects_data)){ ?>
				<div class="span-6 home_box hyphenate">
					<div class="box_content">
						<h2>entwickelt</h2>
						<?php
							foreach($projects_data as $project)
							{
								echo '<div class="project">';
								echo '<a href="'.$project["url"].'" title="'.$project["title"].'"><img src="'.$project["image"].'" alt="'.$project["title"].'" /></a>';
								echo '</div>';
							}
						?>
					</div>
				</div>
				<?php } ?>
				<?php if(!empty($twitter_data)){ ?>
				<div class="span-6 home_box hyphenate">
					<div class="box_content">
						<h2><a href="http://twitter.com/marcoliver">twittert</a></h2>
						<?php
							foreach($twitter_data as $tweet){
								echo '<div class="tweet">';
								echo '<span class="date">'.$tweet->get_date().'</span><br />';
								echo $tweet->get_content()."";
								echo '</div>';
							}
						?>
					</div>
				</div>
				<?php } ?>
				<?php if(!empty($blog_data)){ ?>
				<div class="span-6 home_box hyphenate">
					<div class="box_content">
						<h2><a href="http://www.damot.org/">bloggt</a></h2>
						<?php
							foreach($blog_data as $item)
							{
								echo '<div class="post">';
								echo '<h3>'.$item->get_title().'</h3>';
								echo '<span class="date">'.$item->get_date().'</span>';
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
				<?php } ?>
				<?php if(!empty($flickr_data)){ ?>
				<div class="span-6 last home_box hyphenate">
					<div class="box_content">
						<h2><a href="http://www.flickr.com/photos/damot/">flickrt</a></h2>
						<?php echo $flickr_data ?>
					</div>
				</div>
				<?php } ?>
				<?php if(!empty($impressum_data)){ ?>
					<div class="span-24 last home_box">
						<h2>Impressum</h2>
						<?php echo $impressum_data ?>
					</div>
				<?php } ?>
			</div>
		</div>
		<div id="footer" class="container">
			<div class="span-8 about_1">
				<h2>über&hellip;</h2>
				<?php echo $about_1 ?>
			</div>
			<div class="span-8 about_2">
				<?php echo $about_2 ?>
			</div>
			<div class="span-8 last">
				<h2>orte&hellip;</h2>
				<ul>
					<li><a href="http://twitter.com/marcoliver">twitter</a></li>
					<li><a href="http://www.flickr.com/photos/damot/">Flickr</a></li>
					<li><a href="http://www.lastfm.de/user/DaMOT">Last.fm</a></li>
					<li><a href="http://www.facebook.com/marcoliverteschke">Facebook</a></li>
					<li><a href="http://playground.marcoliverteschke.de/">spielwiese</a></li>
				</ul>
			</div>
			<div class="span-24 last copyright">&copy; 2009 Marc-Oliver Teschke | <a href="<?php echo site_url("impressum") ?>">Impressum</a></div>
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
