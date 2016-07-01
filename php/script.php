<?php
/*
@Name: Xat Set Scroller
@Tutorial: http://util.xat.com/wiki/index.php?title=SetScroller
@Author: xLaming
@Version: 1.0
*/
$listed = "";
$url = "http://xat.com/web_gear/chat/SetScroller.php";
$strings = Array(
	"id"      => "123456", // Chat ID
	"pw"      => "0123456789", // Chat PW
	"Message" => "Hello all" // Message
);

Foreach($strings AS $index => $value) {
	$value = str_replace(Array(" ", " "), Array("%20", "%20"), $value);
	$listed .= $index."={$value}&";
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url."?".substr($listed, 0, -1));
$content = curl_exec($ch);
print($content);
curl_close($ch);

unset($listed, $url, $strings, $content);
?>
