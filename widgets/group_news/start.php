<?php 
/* init file for group_news widget */

function widget_group_news_init(){
	
	if(is_plugin_enabled("groups") && is_plugin_enabled("blog")){
		add_widget_type('group_news',elgg_echo('widgets:group_news:title'),elgg_echo('widgets:group_news:description'), "profile,index,dashboard");
		extend_view("css", "widgets/group_news/css");
	}
}

register_elgg_event_handler("widgets_init", "widget_manager", "widget_group_news_init");