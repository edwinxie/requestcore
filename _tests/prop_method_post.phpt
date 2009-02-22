--TEST--
RequestCore::method::HTTP_POST

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->set_method(HTTP_POST);
	$http->send_request();
	var_dump($http->method);
?>

--EXPECT--
string(4) "POST"
