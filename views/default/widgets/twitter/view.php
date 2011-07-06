<?php

/**
 * Elgg twitter view page
 *
 * @package ElggTwitter
 */

//some required params

$username = $vars['entity']->twitter_username;
$num = $vars['entity']->twitter_num;

// if the twitter username is empty, then do not show
if ($username) {
	$js_url = "http://twitter.com/javascripts/blogger.js";
	$api_url = "http://twitter.com/statuses/user_timeline/" . $username . ".json?callback=twitterCallback2&count=" . $num;
	
	if(array_key_exists("HTTPS", $_SERVER) || true){
		$js_url = str_replace("http:", "https:", $js_url);
		$api_url = str_replace("http:", "https:", $api_url);
	}

?>

<div id="twitter_widget">
	<ul id="twitter_update_list"></ul>
	<p class="visit_twitter"><a href="http://twitter.com/<?php echo $username; ?>"><?php echo elgg_echo("twitter:visit"); ?></a></p>
	<script type="text/javascript" src="<?php echo $js_url; ?>"></script>
	<script type="text/javascript" src="<?php echo $api_url; ?>"></script>
</div>

<?php
} else {

	echo "<div class=\"contentWrapper\"><p>" . elgg_echo("twitter:notset") . ".</p></div>";

}
