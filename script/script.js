$(document).ready(function(){
	good_browser = (navigator.appName == "Netscape");

	blog_content_height = $("#blog_content").css("height");
	$("#blog_content").css("height", "0px");
	set_blog_container_to_show_content();

	twitter_content_height = $("#twitter_content").css("height");
	$("#twitter_content").css("height", "0px");
	set_twitter_container_to_show_content();

	flickr_content_height = $("#flickr_content").css("height");
	$("#flickr_content").css("height", "0px");
	set_flickr_container_to_show_content();

	kontakt_content_height = $("#kontakt_content").css("height");
	if($(":hidden[name=Sendmail]").val() != 1){
		$("#kontakt_content").css("height", "0px");
		set_kontakt_container_to_show_content();
	}else{
		set_kontakt_container_to_hide_content();	
	}
});

/* BLOG */

function show_blog_content(){
	if(good_browser)
		$("#blog_content").animate({height: blog_content_height, padding: "0px 20px 20px 20px"}, 1000);
	else
		$("#blog_content").css("height", blog_content_height).css("padding", "0px 20px 20px 20px");
	set_blog_container_to_hide_content();
}

function hide_blog_content(){
	if(good_browser)
		$("#blog_content").animate({height: "0px", padding: "0px 20px 20px 20px"}, 1000);
	else
		$("#blog_content").css("height", "0px").css("padding", "0px 20px 20px 20px");
	set_blog_container_to_show_content();
}

function set_blog_container_to_hide_content(){
	$("#blog_container_top").unbind("click");
	$("#blog_container_bottom").unbind("click");
	$("#blog_container_top").click(function(){
		hide_blog_content();
	});
	$("#blog_container_bottom").click(function(){
		hide_blog_content();
	});
}

function set_blog_container_to_show_content(){
	$("#blog_container_top").unbind("click");
	$("#blog_container_bottom").unbind("click");
	$("#blog_container_top").click(function(){
		show_blog_content();
	});
	$("#blog_container_bottom").click(function(){
		show_blog_content();
	});
}

/* TWITTER */

function show_twitter_content(){
	if(good_browser)
		$("#twitter_content").animate({height: twitter_content_height, padding: "0px 20px 40px 20px"}, 1000);
	else
		$("#twitter_content").css("height", twitter_content_height).css("padding", "0px 20px 40px 20px");
	set_twitter_container_to_hide_content();
}

function hide_twitter_content(){
	if(good_browser)
		$("#twitter_content").animate({height: "0px", padding: "0px 20px 20px 20px"}, 1000);
	else
		$("#twitter_content").css("height", "0px").css("padding", "0px 20px 20px 20px");
	set_twitter_container_to_show_content();
}

function set_twitter_container_to_hide_content(){
	$("#twitter_container_top").unbind("click");
	$("#twitter_container_bottom").unbind("click");
	$("#twitter_container_top").click(function(){
		hide_twitter_content();
	});
	$("#twitter_container_bottom").click(function(){
		hide_twitter_content();
	});
}

function set_twitter_container_to_show_content(){
	$("#twitter_container_top").unbind("click");
	$("#twitter_container_bottom").unbind("click");
	$("#twitter_container_top").click(function(){
		show_twitter_content();
	});
	$("#twitter_container_bottom").click(function(){
		show_twitter_content();
	});
}

/* FLICKR */

function show_flickr_content(){
	if(good_browser)
		$("#flickr_content").animate({height: flickr_content_height, padding: "0px 20px 40px 20px"}, 1000);
	else
		$("#flickr_content").css("height", flickr_content_height).css("padding", "0px 20px 40px 20px");
	set_flickr_container_to_hide_content();
}

function hide_flickr_content(){
	if(good_browser)
		$("#flickr_content").animate({height: "0px", padding: "0px 20px 20px 20px"}, 1000);
	else
		$("#flickr_content").css("height", "0px").css("padding", "0px 20px 20px 20px");
	set_flickr_container_to_show_content();
}

function set_flickr_container_to_hide_content(){
	$("#flickr_container_top").unbind("click");
	$("#flickr_container_bottom").unbind("click");
	$("#flickr_container_top").click(function(){
		hide_flickr_content();
	});
	$("#flickr_container_bottom").click(function(){
		hide_flickr_content();
	});
}

function set_flickr_container_to_show_content(){
	$("#flickr_container_top").unbind("click");
	$("#flickr_container_bottom").unbind("click");
	$("#flickr_container_top").click(function(){
		show_flickr_content();
	});
	$("#flickr_container_bottom").click(function(){
		show_flickr_content();
	});
}

/* KONTAKT */

function show_kontakt_content(){
	if(good_browser)
		$("#kontakt_content").animate({height: kontakt_content_height, padding: "20px 20px 40px 20px"}, 1000);
	else
		$("#kontakt_content").css("height", kontakt_content_height).css("padding", "20px 20px 40px 20px");
	set_kontakt_container_to_hide_content();
}

function hide_kontakt_content(){
	if(good_browser)
		$("#kontakt_content").animate({height: "0px", padding: "0px 20px 20px 20px"}, 1000);
	else
		$("#kontakt_content").css("height", "0px").css("padding", "0px 20px 20px 20px");
	set_kontakt_container_to_show_content();
}

function set_kontakt_container_to_hide_content(){
	$("#kontakt_container_top").unbind("click");
	$("#kontakt_container_bottom").unbind("click");
	$("#kontakt_container_top").click(function(){
		hide_kontakt_content();
	});
	$("#kontakt_container_bottom").click(function(){
		hide_kontakt_content();
	});
}

function set_kontakt_container_to_show_content(){
	$("#kontakt_container_top").unbind("click");
	$("#kontakt_container_bottom").unbind("click");
	$("#kontakt_container_top").click(function(){
		show_kontakt_content();
	});
	$("#kontakt_container_bottom").click(function(){
		show_kontakt_content();
	});
}