

<?php

require_once("twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library

$twittteruser = "Go_Gigs";
$notweets = 2;
$consumerkey = "OwC331HZzSrlr9RXlSEdQ";
$consumersecret = "W7fQ8r1QY1X2xAuEkuLOz1G83hlIUbaKHOW4QKlGRk";
$accesstoken = "67730947-LZEoQpJEHqZjxKeqMkFXr5iX34B9x6vN8fJ03syck";
$accesstokensecret = "HM6cgWSCHN2WUHBRB2LqCKoU79mF5yuRqtxttGRxOn6ZP";

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$tweets = $connection->get(""https://api.twitter.com/1.1/stastuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

echo json_encode($tweets);
?>