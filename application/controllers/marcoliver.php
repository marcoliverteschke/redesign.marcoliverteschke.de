<?php

class Marcoliver extends Controller {

	function Marcoliver()
	{
		parent::Controller();
		define('MAGPIE_CACHE_DIR', '/srv/www/htdocs/homepage/cache/');
	}
	
	function index()
	{
		if($_SERVER["REQUEST_METHOD"] == "GET"){
			$_POST['Nachricht']	= "";
			$_POST['Name'] = "";
			$_POST['Email']	= "";
			$_POST['Sendmail']	= "";
			$page_data["kontakt_message"] = "";
		}
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$rules['Nachricht']	= "required";
			$rules['Name'] = "required";
			$rules['Email']	= "required|valid_email";
			$_POST['Sendmail']	= "1";
			$this->validation->set_rules($rules);
			
			if ($this->validation->run()){
				$this->email->from($_POST["Email"], $_POST["Name"]);
				$this->email->to('marcoliverteschke@mac.com'); 

				$this->email->subject('marcoliverteschke.de Kontaktformular');
				$this->email->message($_POST["Nachricht"]);	

				$this->email->send();

				$_POST['Nachricht']	= "";
				$_POST['Name'] = "";
				$_POST['Email']	= "";
				$page_data["kontakt_message"] = "E-Mail verschickt.";
			}
		}

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

		$this->load->view('marcoliver/index.php', $page_data);
	}
	
	function feed(){
		include_once('lib/rss_fetch.inc');
		$blog_feed = fetch_rss("http://www.damot.org/feed/");

		$twitter_feed = fetch_rss("http://twitter.com/statuses/user_timeline/13361.rss");

		$flickr_feed = fetch_rss("http://api.flickr.com/services/feeds/photos_public.gne?id=35972450@N00&lang=en-us&format=rss_200");

		$feed_data["feed"] = array();
		
		foreach($blog_feed->items as $item){
			$feed_data["feed"][] = $item;
		}
		
/*		foreach($twitter_feed->items as $item){
			$feed_data["feed"][] = $item;
		}

		foreach($flickr_feed->items as $item){
			$feed_data["feed"][] = $item;
		}*/

		$feedsort = create_function('$a,$b', 'if($a["date_timestamp"] == $b["date_timestamp"]){return 0;}return (($a["date_timestamp"] < $b["date_timestamp"])? 1 : -1);');

		usort($feed_data["feed"], $feedsort);

		$this->load->view('marcoliver/feed.php', $feed_data);
	
	}
	
}

?>