--TEST--
RequestCore::send_request

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://github.com/skyzyx/requestcore/raw/master/_tests/test_request.txt');
	$response = $http->send_request(true);
	var_dump($response->body);
?>

--EXPECT--
string(48) "abcdefghijklmnopqrstuvwxyz
0123456789
!@#$%^&*()"
