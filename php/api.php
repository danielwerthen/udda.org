<?php

function linkify($status_text)
{
  // linkify URLs
  $status_text = preg_replace(
    '/(https?:\/\/\S+)/',
    '<a href="\1">\1</a>',
    $status_text
  );

  // linkify twitter users
  $status_text = preg_replace(
    '/(^|\s)@(\w+)/',
    '\1@<a href="http://twitter.com/\2">\2</a>',
    $status_text
  );

  // linkify tags
  $status_text = preg_replace(
    '/(^|\s)#(\w+)/',
    '\1#<a href="http://search.twitter.com/search?q=%23\2">\2</a>',
    $status_text
  );

  return $status_text;
}

# Load Twitter class
require_once('./twitteroauth/twitteroauth/twitteroauth.php');

# Define constants
define('TWEET_LIMIT', 5);
define('TWITTER_USERNAME', 'uddaorg');
define('CONSUMER_KEY', 'NRXuK3GpuQ6jZ9mlo37liL9Hm');
define('CONSUMER_SECRET', 'VlF0XNLBQaCNjSzcGsXSst9iUnFftWfyHM1hYbLH3CvEC436iU');
define('ACCESS_TOKEN', '2369030215-XfMg5EO5DJNrSPs86YUAUYPCiyaMv3szdpj5Y4k');
define('ACCESS_TOKEN_SECRET', 'WlVIPDIrK1IVL6B28zswsr9jIgTvypeDIIQLxjNHRWH3S');

# Create the connection
$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

# Migrate over to SSL/TLS
$twitter->ssl_verifypeer = true;

# Load the Tweets
$tweets = $twitter->get('statuses/user_timeline', array('screen_name' => TWITTER_USERNAME, 'exclude_replies' => 'true', 'include_rts' => 'true', 'count' => TWEET_LIMIT));

$output = array();

# Example output
if(!empty($tweets)) {
    foreach($tweets as $tweet) {
                
        //$tweetText = linkify(utf8_decode($tweet->text));
        $tweetText = linkify($tweet->text);

        //echo $tweetText."<br />";

        $output[] = $tweetText;

    }
}

echo json_encode($output);
