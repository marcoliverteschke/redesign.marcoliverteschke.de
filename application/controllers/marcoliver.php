<?php

class Marcoliver extends Controller {

	function Marcoliver()
	{
		parent::Controller();
		$this->load->helper("url");
		
		$this->about_1 = 'Ich bin Marc. Oliver. Marc-Oliver. Seit 2007 Entwickler für Internetanwendungen bei <br /><a href="http://www.planwerk6.de">PLANWERK 6</a> in Düsseldorf und äußerst gelegentlich auch in designerischer Aufgabe tätig. Was mich zu diesem Unfug qualifiziert sind meine Abschlüsse als <em>Staatlich geprüfter Informatiker Multimedia</em> sowie <em>BSc Internet Application Development</em> und der Drang danach, coole Dinge zu erschaffen.';
		$this->about_2 = 'Wenn ich nichts besseres zu tun habe, versuche ich mich in der Fotografie, der Schriftstellerei und der Schauspielerei, oder entwickle seltsame und nützliche Dinge wie den <a href="http://procrastinationdashtimer.com">Procrastination Dash Timer</a> und <a href="http://www.flow-rss.com">Flow RSS</a>.';
	}
	
	function index()
	{
		$this->load->library("simplepie");
		$blog = new SimplePie();
		$blog->set_feed_url("http://www.damot.org/feed/");
		$feed_read = $blog->init();
		if($feed_read)
		{
			$page_data["blog_data"] = $blog->get_items(0, 1);
		}

		$twitter = new SimplePie();
		$twitter->set_feed_url("http://twitter.com/statuses/user_timeline/13361.rss");
		$feed_read = $twitter->init();
		if($feed_read)
		{
			$page_data["twitter_data"] = $twitter->get_items(0, 3);
		}

		$page_data["projects_data"][0]["title"] = "PLANWERK 6";
		$page_data["projects_data"][0]["url"] = "http://www.planwerk6.de";
		$page_data["projects_data"][0]["image"] = "gfx/pw6.png";
		$page_data["projects_data"][1]["title"] = "Procrastination Dash Timer";
		$page_data["projects_data"][1]["url"] = "http://procrastinationdashtimer.com";
		$page_data["projects_data"][1]["image"] = "gfx/pdt.png";
		$page_data["projects_data"][2]["title"] = "Flow RSS";
		$page_data["projects_data"][2]["url"] = "http://www.flow-rss.com/";
		$page_data["projects_data"][2]["image"] = "gfx/flow.png";

		$page_data["flickr_data"] = '<!-- Start of Flickr Badge -->
		<div id="flickr_badge_uber_wrapper">
			<div><a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a></div>
			<div id="flickr_badge_wrapper">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=3&amp;display=latest&amp;size=t&amp;layout=v&amp;source=user&amp;user=35972450%40N00"></script>
			</div>
		</div>
		<!-- End of Flickr Badge -->
		';

		$page_data["about_1"] = $this->about_1;
		$page_data["about_2"] = $this->about_2;

		$this->load->view('marcoliver/index.php', $page_data);
	}

	function impressum()
	{
		$page_data["impressum_data"] = 'Herausgeber und inhaltlich Verantwortlicher:<br />
			<br />
			<address>
			Marc-Oliver Teschke<br />
			Am Gatherhof 40<br />
			40472 Düsseldorf<br />
			</address>
			<a href="mailto:marcoliverteschke@mac.com">marcoliverteschke@mac.com</a><br />
			Telefon: 0160 78 73 122';
		
		$page_data["about_1"] = $this->about_1;
		$page_data["about_2"] = $this->about_2;

		$this->load->view('marcoliver/index.php', $page_data);
	}

	
}

?>